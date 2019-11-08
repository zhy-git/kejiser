<?php
global $_GPC,$_W;

require_once (MODULE_ROOT."/class/ymxh/Tags.class.php");

//视频播放
if($_GPC['op'] == 'one') {
    /* 链式查询 */
    $query = load()->object('query');
    $row = $query->from('chat_tags')
        ->select('id','tag_name','parentid')
        ->where(['enabled'=>'1'])
        ->orderby('displayorder')
        ->getall();
    if(!empty($row))
    {
        $data = [];
        foreach ($row as $key => $value)
        {
            if($value['parentid'] == 0)
            {
                $data[] = ['pid'=>$value['id'],'tag_name'=>$value['tag_name']];
              
            }
        }
        foreach ($row as $key => $value){
            foreach ($data as $k => $v){
                if($value['parentid'] == $v['pid'])
                {
                    $data[$k]['sun'][] = ['tid'=>$value['id'],'tag_name'=>$value['tag_name']];
                }
            }
        }
    }
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$data];
    echo json_encode($result);  //json_encode函數是對變量進行JSON格式的編碼。
}

//根据标签搜索课程

if($_GPC['op'] == 'course') {
	//将empty($_GPC['tid']) 改为了 !empty($_GPC['tid']) 这样才能获取得到传过来的tid参数
    $tags_id = !empty($_GPC['tid'])?$_GPC['tid']:10;
    //var_dump($tags_id);die();
    
    $page = empty($_GPC['page'])?$_GPC['page']:1;
    $size = empty($_GPC['size'])?$_GPC['size']:10;

    $query = load()->object('query');
    $data = load()->object('query')
        ->from('chat_topic','t')
        ->leftjoin('chat_tags','ta')
        ->on('t.tags','ta.id')
        ->select('t.id,t.tags,t.topic_icon,t.topic_name,ta.tag_name,t.room_paymoney,t.look_numbers')
        ->where(['tags'=> $tags_id])
        ->getall();
    $res = array_slice($data,($page-1)*$size,$size);
    $result = ['code'=>1,'msg'=>'查询成功','data'=>$res];
    echo json_encode($result);
}




