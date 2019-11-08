<?php
/**
 * 作者：刘健军
 * 时间：2018.9.27
 * 描述：分类标签管理
 */

class Tags{

    /**
     * Notes: 获取9大类
     * User: 刘健军
     * Date: 2018/9/29 0029
     * Time: 15:02
     * Remark:
     */
    public function getTags(){
        global $_W;
        $uniacid = $_W['uniacid'];
        $query = load()->object('query');
        $res = $query->from('chat_tags')->select('id','tag_name','thumb')->where(array('parentid'=>0,'uniacid'=>$uniacid))
            ->orderby('displayorder', 'asc')->getall();
        return $res;
    }

    /**
     * Notes: 获取9大类的子类
     * User: 刘健军
     * Date: 2018/9/29 0029
     * Time: 16:05
     * Remark:
     * @return mixed
     */
    public function getSunTags(){
        global $_W;
        $uniacid = $_W['uniacid'];
        $query = load()->object('query');
        $res = $query->from('chat_tags')->select('id','tag_name')->where(array('parentid !='=>0,'uniacid'=>$uniacid))
            ->orderby('displayorder', 'asc')->getall();
        return $res;
    }


    /**
     * Notes: 根据id获取子类
     * User: 刘健军
     * Date: 2018/9/29 0029
     * Time: 16:05
     * Remark:
     * @return mixed
     */
    public function getSunTagsByParentid($parentid){
        global $_W;
        $uniacid = $_W['uniacid'];
        $query = load()->object('query');
        $res = $query->from('chat_tags')->select('id','tag_name')->where(array('parentid'=>$parentid,'uniacid'=>$uniacid))
            ->orderby('displayorder', 'asc')->getall();
        return $res;
    }
}