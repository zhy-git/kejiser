<?php
/**
 * 作者：刘健军
 * 时间：2018.9.27
 * 描述：轮播广告管理
 */

class Banner extends WeModuleSite {

    /**
     * Notes:
     * User: 刘健军
     * Date: 2018/9/28 0028
     * Time: 14:18
     * Remark: 获取轮播广告
     * 参数：position：0顶部广告 1中部广告 其他全部广告
     */
    public function getAd($position=3){
        global $_W;
        $attachdir = "'/" . $_W['config']['upload']['attachdir'] . "/'";
        $uniacid = $_W['uniacid'];
        /*处理幻灯片开始*/
        if($position==0){
            $pic_record=pdo_fetchall("SELECT * FROM ".tablename("chat_banner")." WHERE enabled=1 AND uniacid=:uniacid AND position=0 ORDER BY displayorder LIMIT 6",array(":uniacid"=>$uniacid));
        }elseif ($position==1){
            $pic_record=pdo_fetchall("SELECT id,uniacid,bannername,link,CONCAT({$attachdir},thumb) as thumb,displayorder,enabled,position FROM ".tablename("chat_banner")." WHERE enabled=1 AND uniacid=:uniacid AND position=2 ORDER BY displayorder LIMIT 6",array(":uniacid"=>$uniacid));
        }else{
            $pic_record=pdo_fetchall("SELECT id,uniacid,bannername,link,CONCAT({$attachdir},thumb) as thumb,displayorder,enabled,position FROM ".tablename("chat_banner")." WHERE enabled=1 AND uniacid=:uniacid ORDER BY displayorder LIMIT 6",array(":uniacid"=>$uniacid));
        }

        foreach($pic_record as &$p_record){
            $p_record['thumb']=tomedia($p_record['thumb']);
        }
        unset($p_record);
        if(empty($pic_record)){
            $pic_record=pdo_fetchall("SELECT id,room_id,CONCAT({$attachdir},topic_icon) as thumb,topic_name bannername FROM ".tablename("chat_topic")." WHERE uniacid=:uniacid AND topic_status!=-1 AND is_del is null AND is_index=1 ORDER BY ID DESC LIMIT 6",array(":uniacid"=>$uniacid));
            foreach($pic_record as &$p_record){
                $p_record['link']=$this->createMobileUrl('chat',array('topic_id'=>$p_record['id']));
            }
        }
        return $pic_record;
    }

}