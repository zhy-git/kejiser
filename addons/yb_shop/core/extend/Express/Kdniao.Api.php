<?php
/**
 * 快递鸟工具类
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/5
 * Time: 9:59
 */

use think\Db;

class KdniaoApi
{
    //电商ID
    const EBusinessID = '';
    //电商加密私钥，快递鸟提供，注意保管，不要泄漏
    const AppKey = '';
    //请求url
    const ReqURL = '';

    function __construct($mch_id)
    {
        $param = Db::name('ybsc_config')->where("key", "EXPRESS")->where("mch_id", $mch_id)->value("value");
        $param = json_decode($param, true);
        $this->EBusinessID = $param['user_id'];
        $this->AppKey = $param['key'];
        $this->ReqURL = 'http://api.kdniao.com/Ebusiness/EbusinessOrderHandle.aspx';
    }

    /**
     * Json方式 查询订单物流轨迹
     */
    public function getOrderTracesByJson($orderNumber)
    {
        $res = ['code' => 1, 'message' => '请求成功', 'info' => array()];
        if ($this->EBusinessID != '' && $this->AppKey != '') {


            $orderRead = $this->getOrderReadByJson($orderNumber);
            if (!empty($orderRead)) {
                $shippers = $orderRead['Shippers'];
                foreach ($shippers as $v) {
                    $requestData = "{'OrderCode':'','ShipperCode':'" . $v['ShipperCode'] . "','LogisticCode':'" . $orderNumber . "'}";
                    $datas = array(
                        'EBusinessID' => $this->EBusinessID,
                        'RequestType' => '1002',
                        'RequestData' => urlencode($requestData),
                        'DataType' => '2',
                    );
                    $datas['DataSign'] = $this->encrypt($requestData, $this->AppKey);
                    $result = $this->sendPost($this->ReqURL, $datas);
                    //根据公司业务处理返回的信息......
                    $result = json_decode($result, true);
                    if ($result['Success']) {
                        $traces = $result['Traces'];
                        if (count($traces) > 0) {
                            $traces = array_reverse($traces);
                            $info = [];
                            foreach ($traces as $trace) {
                                $info_obj['tracesTime'] = $trace['AcceptTime'];
                                $info_obj['tracesDes'] = $trace['AcceptStation'];
                                $info[] = $info_obj;
                            }
                            $res['info'] = $info;
                            break;
                        } else {
                            $res = ['code' => 0, 'message' => '暂无物流信息！'];
                        }
                    } else {
                        $res = ['code' => 0, 'message' => '物流信息获取失败！'];
                    }
                }
            } else {
                $res = ['code' => 0, 'message' => '无法识别，请输入正确订单号！'];
            }
        } else {
            $res = ['code' => 0, 'message' => '请完善物流信息配置！'];
        }
        return $res;
    }

    /**
     * Json方式 查询订单单号识别
     */
    public function getOrderReadByJson($orderNumber)
    {
        $requestData = "{'LogisticCode':'" . $orderNumber . "'}";
        $datas = array(
            'EBusinessID' => $this->EBusinessID,
            'RequestType' => '2002',
            'RequestData' => urlencode($requestData),
            'DataType' => '2',
        );
        $datas['DataSign'] = $this->encrypt($requestData, $this->AppKey);
        $result = $this->sendPost($this->ReqURL, $datas);
        //根据公司业务处理返回的信息......
        $result = json_decode($result, true);
        if ($result['Success']) {
            return $result;
        }
        return null;
    }

    /**
     *  post提交数据
     * @param  string $url 请求Url
     * @param  array $datas 提交的数据
     * @return url响应返回的html
     */
    function sendPost($url, $datas)
    {
        $temps = array();
        foreach ($datas as $key => $value) {
            $temps[] = sprintf('%s=%s', $key, $value);
        }
        $post_data = implode('&', $temps);
        $url_info = parse_url($url);
        if (empty($url_info['port'])) {
            $url_info['port'] = 80;
        }
        $httpheader = "POST " . $url_info['path'] . " HTTP/1.0\r\n";
        $httpheader .= "Host:" . $url_info['host'] . "\r\n";
        $httpheader .= "Content-Type:application/x-www-form-urlencoded;charset=utf-8\r\n";
        $httpheader .= "Content-Length:" . strlen($post_data) . "\r\n";
        $httpheader .= "Connection:close\r\n\r\n";
        $httpheader .= $post_data;
        $fd = fsockopen($url_info['host'], $url_info['port']);
        fwrite($fd, $httpheader);
        $gets = "";
        $headerFlag = true;
        while (!feof($fd)) {
            if (($header = @fgets($fd)) && ($header == "\r\n" || $header == "\n")) {
                break;
            }
        }
        while (!feof($fd)) {
            $gets .= fread($fd, 128);
        }
        fclose($fd);

        return $gets;
    }

    /**
     * 电商Sign签名生成
     * @param data 内容
     * @param appkey Appkey
     * @return DataSign签名
     */
    function encrypt($data, $appkey)
    {
        return urlencode(base64_encode(md5($data . $appkey)));
    }
}