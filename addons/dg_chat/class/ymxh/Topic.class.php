<?php
/**
 * 作者：刘健军
 * 时间：2018.9.27
 * 描述：话题管理
 */

class Topic{

    /**
     * Notes: 获取首页推荐的9大类视频
     * User: 刘健军
     * Date: 2018/9/29 0029
     * Time: 15:02
     * @param int $topic_style 课程类型：1语音 2直播视频 3录播视频 6第三方视频
     * @return array
     */
    public function getIndexTopic($topic_style=0){
        load()->func('logging');
        global $_W;
        $uniacid = $_W['uniacid'];

        $t=new Tags();
        //获取9大类信息
        $tags=$t->getTags();
        if(!empty($tags)){
            //查询首页显示的所有课程
            $query = load()->object('query');
            if($topic_style==0){
                $all_topic=$query->from('chat_topic')
                    ->select('id','topic_name','topic_icon','star','tags')
                    ->where(array('topic_status !='=>-1,'is_index'=>1,'uniacid'=>$uniacid))
                    ->orderby('gl_order', 'desc')->getall();
            }else{
                if($topic_style==1){
                    $all_topic=$query->from('chat_topic')
                        ->select('id','topic_name','topic_icon','star','tags')
                        ->where('topic_style',$topic_style)
                        ->where(array('topic_status !='=>-1,'is_index'=>1,'uniacid'=>$uniacid))
                        ->orderby('gl_order', 'desc')->getall();
                }else{
                    $all_topic=$query->from('chat_topic')
                        ->select('id','topic_name','topic_icon','star','tags')
                        ->where('topic_style !=',1)
                        ->where(array('topic_status !='=>-1,'is_index'=>1,'uniacid'=>$uniacid))
                        ->orderby('gl_order', 'desc')->getall();
                }

            }

            //组装数据
            if(!empty($all_topic)){
                foreach ($tags as $k=>$t){
                    $t['topic']=array();
                    foreach ($all_topic as $a){
                        if(strpos($a['tags'], $t['id'])!== false){
                            $t['topic'][]=$a;
                        }
                    }
                    $tags[$k]=$t;
                    unset($tags[$k]['thumb']);
                }
            }else{
                foreach ($tags as $k=>$t){
                    $t['topic']=array();
                    $tags[$k]=$t;
                    unset($tags[$k]['thumb']);
                }
            }
            return $tags;
        }else{
            return array();
        }
    }


    /**
     * Notes: 首页最新上线
     * User: 陆新泽
     * Date: 2018/9/29 0029
     * Time: 19:42
     * Remark:
     * @param int $topic_style 课程类型：1语音 2直播视频 3录播视频 6第三方视频
     * @return array
     */
    public function new_class($topic_style=0){
        global $_W;
        $uniacid = $_W['uniacid'];
        if($topic_style==0){
            $query = load()->object('query');
            $topic_data=$query->from('chat_topic')
                ->where(array('begin_time <='=>time(),'is_index'=>1,'uniacid'=>$uniacid))
                ->orderby('gl_order', 'desc')
                ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers')
                ->limit(4)->getall();
        }else{
            if($topic_style==1){
                $query = load()->object('query');
                $topic_data=$query->from('chat_topic')
                    ->where('topic_style',$topic_style)
                    ->where(array('begin_time <='=>time(),'is_index'=>1,'uniacid'=>$uniacid))
                    ->orderby('gl_order', 'desc')
                    ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers')
                    ->limit(4)->getall();
            }else{
                $query = load()->object('query');
                $topic_data=$query->from('chat_topic')
                    ->where('topic_style !=',1)
                    ->where(array('begin_time <='=>time(),'is_index'=>1,'uniacid'=>$uniacid))
                    ->orderby('gl_order', 'desc')
                    ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers')
                    ->limit(4)->getall();
            }
        }


        if ($topic_data) {
            return $topic_data;
        } else {
            $topic_data = [];
            return $topic_data;
        }
    }

    /**
     * Notes: 即将上线
     * User: 陆新泽
     * Date: 2018/9/29 0029
     * Time: 19:42
     * Remark:
     * @param int $topic_style 课程类型：1语音 2直播视频 3录播视频 6第三方视频
     * @return array
     */
    public function futrue_class($topic_style=0){
        global $_W;
        $uniacid = $_W['uniacid'];
        if($topic_style==0){
            $query = load()->object('query');
            $topic_data=$query->from('chat_topic')
                ->where(array('begin_time >'=>time(),'is_index'=>1,'uniacid'=>$uniacid))
                ->orderby('gl_order', 'desc')
                ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers')
                ->limit(4)->getall();
        }else{
            if($topic_style==1){
                $query = load()->object('query');
                $topic_data=$query->from('chat_topic')
                    ->where('topic_style',$topic_style)
                    ->where(array('begin_time >'=>time(),'is_index'=>1,'uniacid'=>$uniacid))
                    ->orderby('gl_order', 'desc')
                    ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers')
                    ->limit(4)->getall();
            }else{
                $query = load()->object('query');
                $topic_data=$query->from('chat_topic')
                    ->where('topic_style !=',1)
                    ->where(array('begin_time >'=>time(),'is_index'=>1,'uniacid'=>$uniacid))
                    ->orderby('gl_order', 'desc')
                    ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers')
                    ->limit(4)->getall();
            }
        }

        if ($topic_data) {
            return $topic_data;
        } else {
            $topic_data = [];
            return $topic_data;
        }
    }


    /**
     * Notes: 根据课程类型获取会员页的vip热播课程
     * User: 刘健军
     * Date: 2018/9/30 0030
     * Time: 18:15
     * Remark:
     */
    public function getVipHotTopic($tags=0){
        global $_W;
        $uniacid = $_W['uniacid'];
        if($tags==0){
            $query = load()->object('query');
            $hot_topic=$query->from('chat_topic')
                ->select('id','topic_name','topic_icon','star','tags')
                ->where(array('topic_status !='=>-1,'uniacid'=>$uniacid,'is_vip'=>1))
                ->orderby('look_numbers', 'desc')->limit(20)->getall();
        }else{
            //获取9大类的子类
            $t=new Tags();
            $subTags=$t->getSunTagsByParentid($tags);
            if(!empty($subTags)){
                $ids=array();
                foreach ($subTags as $s){
                    $ids[]=$s['id'];
                }
                $query = load()->object('query');
                $hot_topic=$query->from('chat_topic')
                    ->select('id','topic_name','topic_icon','star','tags')
                    ->where('tags in',$ids)
                    ->where(array('topic_status !='=>-1,'uniacid'=>$uniacid,'is_vip'=>1))
                    ->orderby('look_numbers', 'desc')->limit(20)->getall();
            }else{
                $hot_topic=array();
            }
        }

        return $hot_topic;
    }


    /**
     * Notes: 根据视频类型和分类查询对应vip课程
     * User: 刘健军
     * Date: 2018/10/1 0001
     * Time: 15:06
     * Remark:
     * @param $topic_style
     * @param int $tags
     * @return array
     */
    public function getVipExclusiveTopicByType($topic_style,$tags=0){
        global $_W;
        $uniacid = $_W['uniacid'];
        $query = load()->object('query');
        if($tags==0){
            $exclusive_topic=$query->from('chat_topic')
                ->select('id','topic_name','topic_icon','star','tags')
                ->where('topic_style',$topic_style)
                ->where(array('topic_status !='=>-1,'uniacid'=>$uniacid,'is_vip'=>1))
                ->orderby('look_numbers', 'desc')->limit(20)->getall();
        }else{
            //获取9大类的子类
            $t=new Tags();
            $subTags=$t->getSunTagsByParentid($tags);
            if(!empty($subTags)){
                $ids=array();
                foreach ($subTags as $s){
                    $ids[]=$s['id'];
                }
                $query = load()->object('query');
                $exclusive_topic=$query->from('chat_topic')
                    ->select('id','topic_name','topic_icon','star','tags')
                    ->where('tags in',$ids)
                    ->where('topic_style',$topic_style)
                    ->where(array('topic_status !='=>-1,'uniacid'=>$uniacid,'is_vip'=>1))
                    ->orderby('look_numbers', 'desc')->limit(20)->getall();
            }else{
                $exclusive_topic=array();
            }
        }
        return $exclusive_topic;
    }


    /**
     * Notes: 会员页即将上线
     * User: 刘健军
     * Date: 2018/9/29 0029
     * Time: 19:42
     * Remark:
     * @return array
     */
    public function f_topic($tags=0){
        global $_W;
        $uniacid = $_W['uniacid'];
        if($tags==0){
            //1.查询所有的即将上线课程
            $query = load()->object('query');
            $topic_data=$query->from('chat_topic')
                ->where(array('begin_time >'=>time(),'uniacid'=>$uniacid,'is_vip'=>1))
                ->orderby('begin_time', 'asc')
                ->orderby('gl_order', 'desc')
                ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers','begin_time')
                ->getall();
        }else{
            //获取9大类的子类
            $t=new Tags();
            $subTags=$t->getSunTagsByParentid($tags);
            if(!empty($subTags)){
                $ids=array();
                foreach ($subTags as $s){
                    $ids[]=$s['id'];
                }
                //1.查询所有的即将上线课程
                $query = load()->object('query');
                $topic_data=$query->from('chat_topic')
                    ->where(array('begin_time >'=>time(),'uniacid'=>$uniacid,'is_vip'=>1))
                    ->where('tags in',$ids)
                    ->orderby('begin_time', 'asc')
                    ->orderby('gl_order', 'desc')
                    ->select('id','topic_name','topic_icon','star','tags','uniacid','series_id','topic_desc','topic_imgs','topic_style','look_numbers','begin_time')
                    ->getall();
            }else{
                $topic_data= array();
            }
        }

        //2.遍历课程，获取时间数组和课程
        $res=array();
        if(!empty($topic_data)){
            foreach ($topic_data as $t){
                //转换时间
                $year=date("Y",$t['begin_time']);
                $n_year=date("Y",time());

                if($year==$n_year){
                    $tim=date("m月d",$t['begin_time']);
                }else{
                    $tim=date("Y年m月d",$t['begin_time']);
                }
                if(array_key_exists('$tim',$res)){
                    if(count($res[$tim])<10){
                        $res[$tim][]=$t;
                    }
                }else{
                    $res[$tim][]=$t;
                }
            }
        }
        return $res;
    }
}