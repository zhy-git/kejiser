<?php
/**
 * 小程序模版
 */

namespace app\admin\controller;
use think\Db;
use think\Request;

class Menu extends Base {

    private $wx_page=[
        ['title'=>'首页','path'=>'yb_shop/pages/index/index'],
        ['title'=>'万能页面','path'=>'yb_shop/pages/power/index?id=1'],
        ['title'=>'万能表单','path'=>'yb_shop/pages/form/index?id=1'],
        ['title'=>'会员中心','path'=>'yb_shop/pages/member/index/index'],
        ['title'=>'收货地址','path'=>'yb_shop/pages/member/address/index'],
        ['title'=>'购物车','path'=>'yb_shop/pages/member/cart/index'],
        ['title'=>'文章列表','path'=>'yb_shop/pages/find/index'],
        ['title'=>'商品列表1','path'=>'yb_shop/pages/product/index?id=（为空默认展示全部）'],
        ['title'=>'商品列表2','path'=>'yb_shop/pages/caregory/index'],
        ['title'=>'商品列表3','path'=>'yb_shop/pages/goods/index/index'],
        ['title'=>'商品详情','path'=>'yb_shop/pages/goods/detail/index?id=1'],
        ['title'=>'领券列表','path'=>'yb_shop/pages/shop_coupon/index'],
        ['title'=>'关于我们','path'=>'yb_shop/pages/member/about/index'],
        ['title'=>'h5页面','path'=>'yb_shop/pages/web/index?name=标题&url=网页链接'],
        ['title'=>'图片列表','path'=>'yb_shop/pages/image/index'],
        ['title'=>'我的预约','path'=>'yb_shop/pages/appointment/index'],
        ['title'=>'文章分类列表','path'=>'yb_shop/pages/class_article/index'],
        ['title'=>'相册分类列表','path'=>'yb_shop/pages/class_image/index'],
        ['title'=>'文章详情','path'=>'yb_shop/pages/find_info/index?id=1'],
        ['title'=>'我的优惠券','path'=>'yb_shop/pages/member/coupon/index'],
        ['title'=>'我的订单','path'=>'yb_shop/pages/order/index'],
        ['title'=>'分销中心','path'=>'yb_shop/pages/fenxiao/pages/index/index'],
        ['title'=>'砍价首页','path'=>'yb_shop/pages/kanjia/index/index'],
        ['title'=>'砍价列表','path'=>'yb_shop/pages/kanjia/good_list/index'],
        ['title'=>'砍价商品详情','path'=>'yb_shop/pages/kanjia/goods_info/index?id=1'],
        ['title'=>'我的砍价','path'=>'yb_shop/pages/kanjia/my_record/index'],
        ['title'=>'拼团首页','path'=>'yb_shop/pages/pintuan/pages/index/index'],
        ['title'=>'拼团列表','path'=>'yb_shop/pages/pintuan/pages/index/list'],
        ['title'=>'拼团商品详情','path'=>'yb_shop/pages/pintuan/pages/goods/detail?gid=1'],
        ['title'=>'我的拼团','path'=>'yb_shop/pages/pintuan/pages/group/index'],
        ['title'=>'拼团订单','path'=>'yb_shop/pages/pintuan/pages/orders/index']
    ];
    private $wechats_page=[
        ['title'=>'首页','path'=>'yb_shop/pages/index/index'],
        ['title'=>'万能页面','path'=>'yb_shop/pages/power/index?id=1'],
        ['title'=>'万能表单','path'=>'yb_shop/pages/form/index?id=1'],
        ['title'=>'会员中心','path'=>'yb_shop/pages/member/index/index'],
        ['title'=>'收货地址','path'=>'yb_shop/pages/member/address/index'],
        ['title'=>'购物车','path'=>'yb_shop/pages/member/cart/index'],
        ['title'=>'文章列表','path'=>'yb_shop/pages/find/index'],
        ['title'=>'商品列表1','path'=>'yb_shop/pages/product/index?id=（为空默认展示全部）'],
        ['title'=>'商品列表2','path'=>'yb_shop/pages/caregory/index'],
        ['title'=>'商品列表3','path'=>'yb_shop/pages/goods/index/index'],
        ['title'=>'商品详情','path'=>'yb_shop/pages/goods/detail/index?id=1'],
        ['title'=>'领券列表','path'=>'yb_shop/pages/shop_coupon/index'],
        ['title'=>'关于我们','path'=>'yb_shop/pages/member/about/index'],
        ['title'=>'h5页面','path'=>'yb_shop/pages/web/index?name=标题&url=网页链接'],
        ['title'=>'图片列表','path'=>'yb_shop/pages/image/index'],
        ['title'=>'我的预约','path'=>'yb_shop/pages/appointment/index'],
        ['title'=>'文章分类列表','path'=>'yb_shop/pages/class_article/index'],
        ['title'=>'相册分类列表','path'=>'yb_shop/pages/class_image/index'],
        ['title'=>'文章详情','path'=>'yb_shop/pages/find_info/index?id=1'],
        ['title'=>'我的优惠券','path'=>'yb_shop/pages/member/coupon/index'],
        ['title'=>'我的订单','path'=>'yb_shop/pages/order/index'],
        ['title'=>'分销中心','path'=>'yb_shop/pages/fenxiao/pages/index/index'],
        ['title'=>'砍价首页','path'=>'yb_shop/pages/kanjia/index/index'],
        ['title'=>'砍价列表','path'=>'yb_shop/pages/kanjia/good_list/index'],
        ['title'=>'砍价商品详情','path'=>'yb_shop/pages/kanjia/goods_info/index?id=1'],
        ['title'=>'我的砍价','path'=>'yb_shop/pages/kanjia/my_record/index'],
        ['title'=>'拼团首页','path'=>'yb_shop/pages/pintuan/pages/index/index'],
        ['title'=>'拼团列表','path'=>'yb_shop/pages/pintuan/pages/index/list'],
        ['title'=>'拼团商品详情','path'=>'yb_shop/pages/pintuan/pages/goods/detail?gid=1'],
        ['title'=>'我的拼团','path'=>'yb_shop/pages/pintuan/pages/group/index'],
        ['title'=>'拼团订单','path'=>'yb_shop/pages/pintuan/pages/orders/index']
    ];

    /**
     * 菜单2级 列表项选取
     */
    public function menu_select_2() {

        $mch_id = isset($this->bus_id) ? $this->bus_id : '0';
        $type = input('param.type');
        $this_id = input('param.this_id');
        $path = input('param.path');
        $new = input('param.new', '0');
        $url = Db::name('ybsc_tmpl_pages')->where('mod_id', 1)->where('menu', $type)->find();
        $this->assign('new', $new);
        $this->assign('url', $url);
        $this->assign('this_id', $this_id);
        $this->assign('type', $type);
        $this->assign('path', $path);

        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];

        $type_key = '1';

        switch ($type) {
            case 'goods':
                $art = Db::name('ybsc_goods')->alias('g')->join('ybsc_images m', 'm.img_id=g.images')
                    ->where('g.mch_id', $mch_id)
                    ->field('g.goods_id,g.create_time,g.goods_name,g.price,g.introduction,m.img_cover')
                    ->order('g.create_time desc')
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path,'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);

                $this->assign('page', $art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['id'] = $v['goods_id'];
                    $v['name'] = $v['goods_name'];
                    $v['img'] = $v['img_cover'];
                }

                $this->assign('list', $art);

                break;
            case 'article_info':

                $art = Db::name('ybsc_article')->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page', $art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['id'] = $v['article_id'];
                    $v['name'] = $v['title'];
                    $v['img'] = $v['image'];
                }

                $this->assign('list', $art);

                break;

            case 'product_info':

                $art = Db::name('ybsc_product')->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page', $art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['name'] = $v['title'];
                    $v['img'] = $v['image'];
                }

                $this->assign('list', $art);

                break;

            case 'article':

                $art = Db::name('ybsc_article_class')->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url, 'path'=>$path,'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page', $art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['id'] = $v['article_id'];
                    $v['name'] = $v['title'];
                    $v['img'] = $v['image'];
                }

                $this->assign('list', $art);

                break;
            case 'images':

                $art = Db::name('ybsc_images_group')
                    ->where('mch_id', $mch_id)
                    ->select();
                foreach ($art as $k => &$v) {
                    $img = Db::name('ybsc_images')->where('img_id', $v['group_cover'])->find();
                    if ($img == '') {
                        $v['img'] = 'none';
                    } else {
                        $v['img'] = $img['img_cover'];
                    }

                    $v['id'] = $v['group_id'];
                    $v['name'] = $v['group_name'];
                }

                $this->assign('list', $art);
                break;
            case 'class_article':
                $art = Db::name('ybsc_article_class')
                    ->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['id'] = $v['class_id'];
                    $v['img'] = $v['class_img'];
                }

                $this->assign('list', $art);

                break;

            case 'caregory':
                $art = Db::name('ybsc_goods_cate')->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['id'] = $v['cate_id'];
                    $v['name'] = $v['cate_name'];
                    $v['img'] = $v['cate_pic'];
                }

                $this->assign('list', $art);

                break;
            case 'power':
                $art = Db::name('ybsc_bus_tmpl')->where('is_del=1')->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];

                $this->assign('list', $art);

                break;
            case 'edit_form':

                $art = Db::name('ybsc_bus_form')->where('is_del=1')->order('create_time desc')
                    ->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['name'] = $v['title'];
                }

                $this->assign('list', $art);

                break;
            case 'applets':

                $art = Db::name('ybsc_sapp')->where('mch_id', $mch_id)
                    ->field('id,sapp_name as name,appid,url as path')
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];

                $this->assign('list', $art);
                $type_key = '2';

                break;
            case 'web_page':

                $art = Db::name('ybsc_applink')->where('mch_id', $mch_id)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];

                $this->assign('list', $art);

                $type_key = '3';

                break;
            case 'bargain_info':
                $time = time();
                $art = Db::name('ybsc_bargain')->alias('b')
                    ->join('ybsc_images i','i.img_id=b.bargain_picture')
                    ->where('b.mch_id', $mch_id)
                    ->where('b.bargain_type=1')
                    ->where('b.del=0')
                    ->whereTime('b.star_time', '<', $time)
                    ->whereTime('b.end_time', '>', $time)
                    ->field('b.*,i.img_cover')
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['name'] = $v['bargain_name'];
                    $v['img'] = $v['img_cover'];
                    $v['price'] = $v['original_price'];
                }

                $this->assign('list', $art);

                break;

            case 'pintuan_info':

                $art = Db::name('ybsc_pt_goods')->alias('b')
                    ->join('ybsc_images i','i.img_id=b.img')
                    ->where('b.mch_id', $mch_id)
                    ->where('b.isShow=1')
                    ->field('b.*,i.img_cover')
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['img'] = $v['img_cover'];
                }

                $this->assign('list', $art);

                break;

            case 'paycontent_info':

                $art = Db::name('ybsc_paycontent')
                    ->where('mch_id', $mch_id)
                    ->where('status', 1)
                    ->paginate(15, false, ['query' => ['s' => $url,'path'=>$path, 'type' => $type, 'mod_id' => 1, 'this_id' => $this_id]]);
                $this->assign('page',$art->render());

                $art = json_decode(json_encode($art,true),true);
                $art = $art['data'];
                foreach ($art as &$v)
                {
                    $v['name'] = $v['title'];
                    $v['img'] = $v['image'];
                }

                $this->assign('list', $art);

                break;

            case 'my_order':
                $art = array(
                    ['name'=>'全部','id'=>''],
                    ['name'=>'待付款','id'=>'0'],
                    ['name'=>'待发货','id'=>'1'],
                    ['name'=>'待收货','id'=>'2'],
                    ['name'=>'已完成','id'=>'3'],
                    ['name'=>'退换货','id'=>'4'],
                );
                $this->assign('list', $art);
                break;
        }

        $this->assign('type_key', $type_key);
        return view('menu/menu_select_2');
    }
    /**
     * 底部文章分类菜单选择
     */
    public function add_class_article(){
        $str=input('param.class_str','');
        $this_id=input('param.this_id','')+1;
        $arr = explode(",",$str);
        Db::name('ybsc_article_class')->where('mch_id',$this->bus_id)->update(['ident_class'=>'']);
        foreach($arr as $a){
            Db::name('ybsc_article_class')->where('class_id',$a)->where('mch_id',$this->bus_id)->update(['ident_class'=>'class_article_'.$this_id]);
        }
        return AjaxReturn(1);
    }
    /**
     * 获取默认组件
     */
    public function find_default() {
        $mch_tpl = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->find();
        if ($mch_tpl['values']==''){
            $data['tpl'] = 0;
            global $_W;
            $_W = $_SESSION['we7_w'];
            $str='{
    "tabBar": {
      "name":"商城",
     "color": "#8b8b8b",
     "selectedColor": "#e02e24",
    "background":"#FF1493",
    "backgroundTextStyle":"#ffffff",
    "backgroundColor": "#ffffff",
        "list": [
            {
                "key": "index",
                "imgurl": "/yb_shop/pages/index/index",
                "name": "首页",
                "page_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/gray_home.png",
                "page_select_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/red_home.png"
            },
            {
                "key": "find",
                "imgurl": "/yb_shop/pages/find/index",
                "name": "发现",
                "page_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/gray_find.png",
                "page_select_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/red_find.png"
            },
            {
                "key": "product",
                "imgurl": "/yb_shop/pages/product/index",
                "name": "商品",
                "page_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/gray_cate.png",
                "page_select_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/red_cate.png"
            },
            {
                "key": "cart",
                "imgurl": "/yb_shop/pages/member/cart/index",
                "name": "购物车",
                "page_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/gray_cart.png",
                "page_select_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/red_cart.png"
            },
            {
                "key": "member_index",
                "imgurl": "/yb_shop/pages/member/index/index",
                "name": "会员中心",
                "page_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/gray_people.png",
                "page_select_icon": "'.$_W['siteroot'] .'addons/yb_shop/core/public/icon/red_people.png"
            }
        ]
    }
}';

            $data = $str;
        }else{
            $data = json_decode($mch_tpl['values'], true);
            $data['tpl'] = 1;
        }
        return $data;
    }
    /**
     * 获取默认组件
     */
    public function find_my_default() {

        $my_mode = request()->param('my_mode');
        $mch_tpl = Db::name('ybsc_user_tmpl_box')->where('id', $my_mode)->find();
        $data = json_decode($mch_tpl['style_value'], true);
        $data['tpl'] = 1;
        return $data;
    }
    /**
     * 选择图标
     */
    public function select_icon() {
        $linenum = input('param.linenum');
        $mod_id = input('param.mod_id');

        $tmpl_list = Db::name('ybsc_tmpl_icon')->where('tmpl_id', $mod_id)->select();

        $this->assign('mod_id', $mod_id);
        $this->assign('tmpl_list', $tmpl_list);
        $this->assign('url', IMG_URL);
        $this->assign('linenum', $linenum);
        return view('menu/select_icon');
    }

    /**
     * 有参数
     */
    public function selece_this_not() {

        $type = input('param.type');
        $mod_id = input('param.mod_id');
        $this_id = input('param.this_id');
        $menu = Db::name('ybsc_tmpl_menu')->where('type', $type)->find();

        $url = Db::name('ybsc_tmpl_pages')->where('mod_id', 1)->where('menu', $type)->select();

        $data['list'] = $url;
        $data['name'] = $menu['text'];
        $data['this_id'] = $this_id;

        exit(json_encode($data,true));
    }

    /**
     * 选择模版
     */
    public function select_mod_all() {
        return view('menu/select_mod_all');
    }

    /**
     * 底部
     */
    public function di_select_mod_all_goods(){
        $this_id = input('param.this_id');
        $this->assign('this_id', $this_id);
        return view('menu/di_select_mod_all');
    }
    /**
     * 底部
     */
    public function di_select_mod_all_article(){
        $this_id = input('param.this_id');
        $this->assign('this_id', $this_id);
        return view('menu/di_select_mod_all_article');
    }

    /**
     *
     */
    public function get_view_select(){
        $this_id = input('param.this_id');
        $type = input('param.type');
        $this->assign('this_id', $this_id);
        $this->assign('type', $type);
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];
        if ($type=='goods_detail'){
            $goods=Db::name('ybsc_goods')->alias('g')
                ->join('ybsc_images m','g.images=m.img_id')
                ->where('g.is_del=0')
                ->where('g.mch_id',$this->bus_id)
                ->order('g.create_time desc')
                ->field('g.*,m.img_cover')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('goods', $goods);
            return view('menu/di_goods_detail');
        }
        if ($type=='find_info'){
            $find_info=Db::name('ybsc_article')
                ->where('status=2')
                ->where('mch_id',$this->bus_id)
                ->order('create_time desc')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('find_info', $find_info);
            return view('menu/di_find_info');
        }
        if ($type=='image'){
            $images_group=Db::name('ybsc_images_group')->alias('g')
                ->join('ybsc_images m','g.group_cover=m.img_id','left')
                ->where('g.mch_id',$this->bus_id)
                ->field('g.*,m.img_cover')
                ->order('g.create_time desc')
                ->where('g.is_default=0')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('images_group', $images_group);
            return view('menu/di_images_groupinfo');
        }
        if ($type=='find'){
            $article_class=Db::name('ybsc_article_class')
                ->where('mch_id',$this->bus_id)
                ->order('create_time desc')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('article_class', $article_class);
            return view('menu/di_article_class');
        }
        if ($type=='power'){
            $article_class=Db::name('ybsc_bus_tmpl')
                ->where('mch_id',$this->bus_id)
                ->where('is_del=1')
                ->order('create_time desc')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('article_class', $article_class);
            return view('menu/di_power_class');
        }
        if ($type=='form'){
            $article_class=Db::name('ybsc_bus_form')
                ->where('mch_id',$this->bus_id)
                ->where('is_del=1')
                ->order('create_time desc')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('article_class', $article_class);
            return view('menu/di_from');
        }
        if ($type=='applets'){
            $sapp=Db::name('ybsc_sapp')
                ->where('mch_id',$this->bus_id)
                ->order('id desc')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('sapp', $sapp);
            return view('menu/di_sapp');
        }
        if ($type=='web_page'){
            $sapp=Db::name('ybsc_applink')
                ->where('mch_id',$this->bus_id)
                ->order('id desc')
                ->paginate(15, false, ['query' => ['s' => $url, 'type' => $type,'this_id' => $this_id]]);
            $this->assign('sapp', $sapp);
            return view('menu/di_web_page');
        }
    }

    /**
     * 弹出功能选择
     */
    public function select_menu() {

        $this_id = input('param.select_id');
        $mod_id = input('param.mod_id');
        $menu = Db::name('ybsc_tmpl_menu')->select();
        $page = Db::name('ybsc_tmpl_pages')->where("mod_id", 1)->select();
        $data = array();

        foreach ($page as $key => $value) {
            foreach ($menu as $k => $v) {
                if ($value['menu'] == $v['type']) {
                    $data[$k] = $v;
                }
            }
        }

        $this->assign('this_id', $this_id);
        $this->assign('mod_id', $mod_id);
        $this->assign('menu', $data);
        return view('menu/select_menu_test');
    }

    /**
     * 选择大模版
     */
    public function import_mod() {
        if (request()->isAjax()) {
            $server_id = input('param.server_id', '');
            $index_mod = Db::name('ybsc_tmpl')->where('serve_temp_id', $server_id)->find();

            Db::name('ybsc_business')
                ->where('id', $this->bus_id)
                ->update(['bus_mod_id' => $index_mod['id']]);

            $json=json_decode($index_mod['style_value'],true);
            foreach ($json as $k=>$v){
                $json['tabBar']['IsDiDis']=true;
            }
            $val = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->find();
            if ($val) {
                $res = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->update(['tmpl_id' => $index_mod['id'], 'index_values' => $index_mod['index_values'], 'values' => json_encode($json)]);
                return AjaxReturn($res);
            } else {
                $res = Db::name('ybsc_user_tmpl')->insert(['tmpl_id' => $index_mod['id'], 'template_id' => $index_mod['template_id'], 'mch_id' => $this->bus_id, 'index_values' => $index_mod['index_values'], 'values' => json_encode($json)]);
                return AjaxReturn($res);
            }
        }

        $data = input('param.');
        $status = empty($data['status']) ? 0 : $data['status'];

        $this->assign('status', $status);

        $data['page'] = empty($data['page']) ? '' : $data['page'];
        $data['mod_name'] = empty($data['mod_name']) ? '' : $data['mod_name'];

        $page = request()->param('page',1);

        $mod_name = $data['mod_name'];
        if ($_SESSION['we7_w']['isfounder']==true && $status != 1){

            $ids = '';
            if($status == 2)
            {
                $hasdw = Db::name('ybsc_tmpl')->field('serve_temp_id')->select();

                foreach ($hasdw as $dw)
                {
                    if($ids == '')
                    {
                        $ids .= $dw['serve_temp_id'];
                    }
                    else
                    {
                        $ids .= ','.$dw['serve_temp_id'];
                    }
                }

            }

            $mod_name = input('param.mod_name');
            $sets = '';
            if($mod_name != ''){
                $sets = "%$mod_name%";
            }
            $url = request()->query();
            $url = explode('=/', $url);
            $url = explode('&', $url[1]);
            $url = '/' . $url[0];
            if(!empty($sets))
            {
                $where['name'] = array('like',$sets);
            }
            $check = Db::name('ybsc_tmpl')
                ->where($where)
                ->paginate(10, false, $config = ['query' => ['s' => $url, 'mod_name', $sets]])
                ->each(function ($item, $key) {
                    $item['is_dow'] = 1;
                    $item['is_this_id'] = $item['id'];
                    return $item;
                });
            $page = $check->render();
            $page = str_replace('_mod&amp;page=','_mod&amp;status='.$status.'&amp;page=',$page);
            $this->assign('isfounder', 0);
            $this->assign('bus_mod_id', $check);
            $this->assign('page', $page);

        }else{

            $mod_name = input('param.mod_name');
            $sets = '';
            if($mod_name != ''){
                $sets = "%$mod_name%";
            }
            $url = request()->query();
            $url = explode('=/', $url);
            $url = explode('&', $url[1]);
            $url = '/' . $url[0];

            $where['serve_temp_id'] = array('gt',0);
            if(!empty($sets))
            {
                $where['name'] = array('like',$sets);
            }

            $check = Db::name('ybsc_tmpl')
                ->where($where)
                ->paginate(10, false, $config = ['query' => ['s' => $url,'mod_name'=>$sets,'status'=>$status]])
                ->each(function ($item, $key) {
                    $item['is_dow'] = 1;
                    return $item;
                });

            $page = $check->render();

            $this->assign('isfounder', $_SESSION['we7_w']['isfounder'] ? 1 : 0);
            $this->assign('bus_mod_id', $check);
            $this->assign('page', $page);
        }

        $this->assign('mod_name', $mod_name);
        return view('menu/import_mod');
    }

    /**
     * 小程序主页模版
     */
    public function index_module() {

        if (request()->isAjax() && request()->method() == 'POST') {
            $index_list = json_decode(input('param.index_list'), true);
            unset($index_list['banner']);
            unset($index_list['catenav']);
            unset($index_list['advert']);
            unset($index_list['add_h']);
            unset($index_list['add_top']);
            unset($index_list['now_index']);
            unset($index_list['this_type']);
            unset($index_list['columntitle']);
            unset($index_list['imgtextlist']);

            unset($index_list['tripartite_list']);
            unset($index_list['quartet_list']);
            unset($index_list['fight_group_list']);

            unset($index_list['goodlist']);
            unset($index_list['edit_button']);
            unset($index_list['edit_piclist']);
            unset($index_list['floaticon']);

            foreach ($index_list['all_data'] as $k => $v) {
                if ($v['type'] == 'announcement' || $v['type'] == 'message_board' || $v['type'] == 'store_door' || $v['type'] == 'comment' || $v['type'] == 'edit_video' || $v['type'] == 'edit_music' || $v['type'] == 'search' || $v['type'] == 'blank' || $v['type'] == 'headline' || $v['type'] == 'line' || $v['type'] == 'position' || $v['type'] == 'rich_text') {
                    if ($v['type'] == 'edit_video') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                        if ($index_list['all_data'][$k]['video_type']==1){
                            if ($index_list['all_data'][$k]['video_type']==1){
                                $rsd=$this->get_tx_video($index_list['all_data'][$k]['video_url']);
                                if ($rsd['code']==0){
                                    $index_list['all_data'][$k]['vip_url']=$rsd['real_url'];
                                }else{
                                    $index_list['all_data'][$k]['vip_url']=$index_list['all_data'][$k]['video_url'];
                                }
                            }else{
                                $index_list['all_data'][$k]['vip_url']=$index_list['all_data'][$k]['video_url'];
                            }
                        }
                    }
                    if ($v['type'] == 'edit_music') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                    }
                    if ($v['type'] == 'store_door') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                    }
                    continue;
                } else {

                    if(!empty($v['list']))
                    {
                        foreach ($v['list'] as $key => $value) {

                            if (!empty($value['imgurl'])) {

                                if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                                } else {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                                }

                            } else {
                                if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                                } else {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                                }
                            }
                        }
                    }

                }
            }
            //dump(json_encode($index_list));exit();
            $mch_index_mod = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->find();
            if ($mch_index_mod) {
                $res = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->inc('create_time')->update(['index_values' => json_encode($index_list)]);
            } else {
                $res = Db::name('ybsc_user_tmpl')->insert(['mch_id' => $this->bus_id, 'index_values' => json_encode($index_list), 'create_time' => time()]);
            }


            $pages_di=json_decode(input('param.menu_list'),true);
            $data=array();
            for($i = 0;$i<count($pages_di);$i++)
            {
                $item = array();
                $item['key'] = $pages_di[$i]['key'];
                $item['lat'] = isset($pages_di[$i]['lat'])?$pages_di[$i]['lat']:'';
                $item['lng'] = isset($pages_di[$i]['lng'])?$pages_di[$i]['lng']:'';
                $item['appid'] = isset($pages_di[$i]['appid'])?$pages_di[$i]['appid']:'';
                $item['path'] = isset($pages_di[$i]['path'])?$pages_di[$i]['path']:'';
                $item['phone'] = isset($pages_di[$i]['phone'])?$pages_di[$i]['phone']:'';
                $item['imgurl'] = isset($pages_di[$i]['imgurl'])?$pages_di[$i]['imgurl']:'';
                $item['ident'] = isset($pages_di[$i]['ident'])?$pages_di[$i]['ident']:'';
                $item['name'] = $pages_di[$i]['name'];
                $item['title'] = $pages_di[$i]['name'];
                $item['name_this'] = $pages_di[$i]['name_this'];
                $item['page_icon'] = $pages_di[$i]['page_icon'];
                $item['page_select_icon'] = $pages_di[$i]['page_select_icon'];

                $data[] = $item;
            }
            $name=input('param.wx_name','小程序名称');
            $background=input('param.DhColor_color')==''?'#df2f20':input('param.DhColor_color');

            $backgroundTextStyle=input('param.BtColor_color')==''?'#ffffff':input('param.BtColor_color');
            $selectedColor=input('param.iconColorSet_color')==''?'#e02e24':input('param.iconColorSet_color');
            $color=input('param.iconTitColor_color')==''?'#8b8b8b':input('param.iconTitColor_color');
            $backgroundColor=input('param.pureBorderColor_color')==''?'#ffffff':input('param.pureBorderColor_color');
            $win_color=input('param.win_color')==''?'#ffffff':input('param.win_color');
            $win_img=input('param.win_img')==''?'':input('param.win_img');
            $openImg=input('param.openImg')==''?'':input('param.openImg');
            $openImgUrlName=input('param.openImgUrlName')==''?'':input('param.openImgUrlName');
            $openImgUrl=input('param.openImgUrl')==''?'':input('param.openImgUrl');
            $is_di_dis=input('param.is_di_dis')=='false'?false:true;
            $ext=array(
                'tabBar'=>array(
                    'name'=>$name, //小程序名称
                    'background'=>$background, //导航栏背景颜色
                    'backgroundTextStyle'=>$backgroundTextStyle,//导航栏标题颜色
                    'selectedColor'=>$selectedColor,//选中字体颜色
                    'color'=>$color,//字体颜色
                    'backgroundColor'=>$backgroundColor,//底部导航栏
                    'winColor'=>$win_color,//整体颜色
                    'winImg'=>$win_img,//背景图片
                    'openImg'=>$openImg,//开屏广告
                    'openImgUrl'=>$openImgUrl,//开屏广告链接
                    'openImgUrlName'=>$openImgUrlName,//开屏广告链接名称
                    'IsDiDis'=>$is_di_dis,
                    'list'=> $data
                ),
            );

            $val=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->find();
            if ($val){
                $res=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->inc('create_time')->update(['tmpl_id'=>1,'template_id'=>1,'values'=>json_encode($ext)]);
            }else{
                $res=Db::name('ybsc_user_tmpl')->insert(['create_time'=>0,'tmpl_id'=>1,'template_id'=>1,'mch_id'=>$this->bus_id,'values'=>json_encode($ext)]);
            }
            return AjaxReturn($res);
        }

        //获取商品分类
        $goods_cate = Db::name('ybsc_goods_cate')->where('is_visible=1')->where('mch_id', $this->bus_id)->select();
        $this->assign('goods_cate', $goods_cate);
        //获取文章分类
        $article_class = Db::name('ybsc_article_class')->where('is_del=1')->where('mch_id', $this->bus_id)->select();
        $this->assign('article_class', $article_class);
        //万能页面
        $this->assign('wn',request()->param('wn',-1));
        $this->assign('wn_id',request()->param('wn_id',0));

        //我的模版编辑
        $this->assign('my_mod',request()->param('my_mod',-1));
        //我的模版
        return view('menu/index_module');
    }

    /**
     * 轮播图选择功能
     */
    public function menu_select() {

        $type = input('param.type');
        $index = input('param.index');

        //1 选择具体某一id 2 单页面无参数  3 多页面 需选择
        $data = array(

            ['text'=>'首页','type'=>'index','param'=>2,'path'=>'/yb_shop/pages/index/index'],
            ['text'=>'商品列表','role_id'=>'12','type'=>'product','param'=>3],
            ['text'=>'商品分类','role_id'=>'12','type'=>'caregory','param'=>1,'path'=>'/yb_shop/pages/product/index'],
            ['text'=>'购物车','role_id'=>'12','type'=>'cart','param'=>2,'path'=>'/yb_shop/pages/member/cart/index'],
            ['text'=>'会员中心','type'=>'cenmember','param'=>2,'path'=>'/yb_shop/pages/member/index/index'],

            ['text'=>'万能页面','type'=>'power','param'=>1,'path'=>'/yb_shop/pages/power/index'],
            ['text'=>'文章列表','type'=>'article','param'=>2,'path'=>'/yb_shop/pages/find/index'],
            ['text'=>'文章详情','type'=>'article_info','param'=>1,'path'=>'/yb_shop/pages/find_info/index'],
            ['text'=>'相册分类','type'=>'class_image','param'=>2,'path'=>'/yb_shop/pages/class_image/index'],
            ['text'=>'相册列表','type'=>'images','param'=>1,'path'=>'/yb_shop/pages/image/index'],

            ['text'=>'商品详情','role_id'=>'12','type'=>'goods','param'=>1,'path'=>'/yb_shop/pages/goods/detail/index'],
            ['text'=>'优惠券','role_id'=>'169','type'=>'coupon','param'=>2,'path'=>'/yb_shop/pages/shop_coupon/index'],
            ['text'=>'产品列表','type'=>'product_list','param'=>2,'path'=>'/yb_shop/pages/product/list/index'],
            ['text'=>'产品详情','type'=>'product_info','param'=>1,'path'=>'/yb_shop/pages/product/info/index'],
            ['text'=>'砍价','role_id'=>'223','type'=>'bargain','param'=>2,'path'=>'/yb_shop/pages/kanjia/index/index'],

            ['text'=>'砍价列表','role_id'=>'223','type'=>'bargain','param'=>2,'path'=>'/yb_shop/pages/kanjia/good_list/index'],
            ['text'=>'砍价详情','role_id'=>'223','type'=>'bargain_info','param'=>1,'path'=>'/yb_shop/pages/kanjia/goods_info/index'],
            ['text'=>'拼团','role_id'=>'243','type'=>'pintuan','param'=>2,'path'=>'/yb_shop/pages/pintuan/pages/index/index'],
            ['text'=>'拼团列表','role_id'=>'243','type'=>'pintuan_list','param'=>2,'path'=>'/yb_shop/pages/pintuan/pages/index/list'],
            ['text'=>'拼团详情','role_id'=>'243','type'=>'pintuan_info','param'=>1,'path'=>'/yb_shop/pages/pintuan/pages/goods/detail'],

            ['text'=>'小程序','type'=>'applets','param'=>1],
            ['text'=>'网页','type'=>'web_page','param'=>1,'path'=>'/yb_shop/pages/web/index'],
            ['text'=>'万能表单','role_id'=>'200','type'=>'edit_form','param'=>1,'path'=>'/yb_shop/pages/form/index'],
            ['text'=>'联系我们','type'=>'contact','param'=>2,'path'=>'/yb_shop/pages/contact/index'],
            ['text'=>'预约列表','role_id'=>'210','type'=>'book_list','param'=>2,'path'=>'/yb_shop/pages/book_list/index'],

            ['text'=>'我的订单','role_id'=>'12','type'=>'my_order','param'=>1,'path'=>'/yb_shop/pages/order/index'],
            ['text'=>'分销中心','role_id'=>'253','type'=>'my_fenxiao','param'=>2,'path'=>'/yb_shop/pages/fenxiao/pages/index/index'],
            ['text'=>'我的关注','type'=>'my_follow','param'=>2,'path'=>'/yb_shop/pages/member/favorite/index'],
            ['text'=>'我的优惠券','role_id'=>'169','type'=>'my_coupon','param'=>2,'path'=>'/yb_shop/pages/member/coupon/index'],
            ['text'=>'我的预约','role_id'=>'210','type'=>'my_book','param'=>2,'path'=>'/yb_shop/pages/appointment/index'],

            ['text'=>'我的砍价','role_id'=>'223','type'=>'my_kjm','param'=>2,'path'=>'/yb_shop/pages/kanjia/my_record/index'],
            ['text'=>'砍价订单','role_id'=>'223','type'=>'my_kjo','param'=>2,'path'=>'/yb_shop/pages/kanjia/order/index'],
            ['text'=>'我的拼团','role_id'=>'243','type'=>'my_ptm','param'=>2,'path'=>'/yb_shop/pages/pintuan/pages/group/index'],
            ['text'=>'拼团订单','role_id'=>'243','type'=>'my_pto','param'=>2,'path'=>'/yb_shop/pages/pintuan/pages/orders/index'],
            ['text'=>'收货地址','type'=>'member_address','param'=>2,'path'=>'/yb_shop/pages/member/address/index'],

            ['text'=>'关于我们','type'=>'about','param'=>2,'path'=>'/yb_shop/pages/member/about/index'],
            ['text'=>'打电话','type'=>'phone','param'=>2],
            ['text'=>'地图','type'=>'map','param'=>2],

            ['text'=>'付费内容首页','role_id'=>'264','type'=>'paycontent','param'=>2,'path'=>'/yb_shop/pages/paycontent/index'],
            ['text'=>'付费内容详情','role_id'=>'264','type'=>'paycontent_info','param'=>1,'path'=>'/yb_shop/pages/paycontent/info/index'],
            ['text'=>'我的订阅','role_id'=>'264','type'=>'paycontent_my','param'=>2,'path'=>'/yb_shop/pages/paycontent/my/index'],
        );

        if($type == 'tabbar' && $index == 0)
        {
            $data = array($data[0]);
        }
        else
        {
            $isadmin = $_SESSION['we7_w']['isfounder'];
            $founder_groupid = $_SESSION['we7_w']['user']['founder_groupid'];

            if(!$isadmin || $founder_groupid == 2)
            {

                $wq_uid = $_SESSION['we7_w']['user']['uid'];
                $role_id = Db::name('ybsc_user_permission')
                    ->alias('p')
                    ->join('ybsc_user_role r','p.role_id = r.role_id')
                    ->field('r.module_id_array')
                    ->where(['p.user_id'=>$wq_uid])
                    ->find();

                if(!empty($role_id))
                {
                    $role_ids = explode(',',$role_id['module_id_array']);
                    $arr = array();
                    foreach ($data as $item)
                    {
                        if(isset($item['role_id']) && !in_array($item['role_id'],$role_ids))
                        {
                            continue;
                        }

                        $arr[] = $item;
                    }

                    $data = $arr;
                }

            }
        }


        $this->assign('menu', $data);
        $this->assign('type', $type);
        $this->assign('index', $index);

        return view('menu/menu_select');
    }

    /**
     * 选中商品
     */
    public function index_select_goods() {

        $this_id = input('param.select_id');
        $url = Db::name('ybsc_tmpl_pages')->where('mod_id', 1)->where('menu', 'goods')->find();
        $this->assign('url', $url);
        $this->assign('this_id', $this_id);
        $type = input('param.type');
        $this->assign('type', $type);
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];

        $art = Db::name('ybsc_goods')->alias('g')->join('ybsc_images m', 'm.img_id=g.images')
            ->where('g.mch_id', $this->bus_id)
            ->where('g.is_del', '0')
            ->field('g.goods_id,g.create_time,g.goods_name,g.price,g.introduction,m.img_cover')
            ->order('g.create_time desc')
            ->paginate(15, false, ['query' => ['s' => $url,'select_id'=>$this_id,'type'=>$type]]);

        $this->assign('goods', $art);
        $this->assign('page', $art->render());
        $new = input('param.new', '0');
        $this->assign('new', $new);

        return view('menu/goods_test');
    }

    /**
     * 选中文章
     */
    public function index_select_article() {
        $this_id = input('param.select_id');

        $url1 = request()->query();
        $url1 = explode('=/', $url1);
        $url1 = explode('&', $url1[1]);
        $url1 = '/' . $url1[0];


        $art = Db::name('ybsc_article')
            ->where('mch_id', $this->bus_id)->order('create_time desc')
            ->paginate(15, false, ['query' => ['s' => $url1,'select_id'=>$this_id]]);
        $page = $art->render();

        $url = Db::name('ybsc_tmpl_pages')->where('mod_id', 1)->where('menu', 'article_info')->find();
        $new = input('param.new', '0');
        $this->assign('new', $new);
        $this->assign('url', $url);
        $this->assign('page', $page);
        $this->assign('this_id', $this_id);
        $this->assign('article', $art);
        return view('menu/index_article');
    }

    /**
     * 显示保存过的首页模版
     */
    public function find_mch_index_mod() {
        $mod = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->find();
//        if ($_SERVER['HTTPS']=='on'){
//            $val=str_replace('http:','https:',$mod['index_values']);
//        }else{
//            $val=str_replace('https:','http:',$mod['index_values']);
//        }
        return json_decode($mod['index_values'], true);
    }
    /**
     * 显示保存过的首页模版
     */
    public function find_mch_my_mod() {

        $my_mode = request()->param('my_mode');
        $mod = Db::name('ybsc_user_tmpl_box')->where('id', $my_mode)->find();
        return json_decode($mod['index_values'], true);
    }

    /**
     * 拾取坐标
     */
    public function index_select_position() {
        return view("menu/index_select_position");
    }

    /**
     * 底部选择坐标
     */
    public function index_di_select_position(){
        return view("menu/di_position");
    }

    public function getMenuName() {
        $type = input('param.type');
        $res = Db::name('ybsc_tmpl_menu')->where('type', $type)->find();
        return $res['text'];
    }

    /**
     * 我的模版
     */
    public function import_mod_my() {
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];
        $list = Db::name('ybsc_user_tmpl_box')->order('create_time desc')->where('mch_id', $this->bus_id)->paginate(12, false, ['query' => ['s' => $url,request()->param()]]);
        $page = $list->render();
        $this->assign('page', $page);
        $this->assign('list', $list);
        return view();
    }

    /**
     * 添加到我的模版
     */
    public function add_my_mod() {
        if (request()->isAjax() && request()->method() == 'POST') {
            global $_W;
            $_W = $_SESSION['we7_w'];
            $index_list=input('param.index_list');
            $index_list = json_decode($index_list, true);
            $title = input('param.title');
            $img = input('param.img_src');

            $imageName = "25220_".date("His",time())."_".rand(1111,9999).'.png';
            if (strstr($img,",")){
                $img = explode(',',$img);
                $img = $img[1];
            }

            $path = "public/upload/user_box";
            if (!is_dir($path)){ //判断目录是否存在 不存在就创建
                mkdir($path,0777,true);
            }
            $imageSrc=  $path."/". $imageName;  //图片名字

            $r = file_put_contents(ROOT_PATH ."/".$imageSrc, base64_decode($img));//返回的是字节数
            $img_src='';
            if ($r){
                $img_src=$_W['siteroot'] .'addons/yb_shop/core/public/upload/user_box/'.$imageName;
            }

            unset($index_list['banner']);
            unset($index_list['catenav']);
            unset($index_list['advert']);
            unset($index_list['add_h']);
            unset($index_list['add_top']);
            unset($index_list['now_index']);
            unset($index_list['this_type']);
            unset($index_list['columntitle']);
            unset($index_list['imgtextlist']);
            unset($index_list['goodlist']);
            unset($index_list['edit_button']);
            unset($index_list['edit_piclist']);
            unset($index_list['floaticon']);
            foreach ($index_list['all_data'] as $k => $v) {
                if ($v['type'] == 'comment' || $v['type'] == 'edit_video' || $v['type'] == 'edit_music' || $v['type'] == 'search' || $v['type'] == 'blank' || $v['type'] == 'headline' || $v['type'] == 'line' || $v['type'] == 'position' || $v['type'] == 'rich_text') {
                    if ($v['type'] == 'edit_video') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                        if ($index_list['all_data'][$k]['video_type']==1){
                            $rsd=$this->get_tx_video($index_list['all_data'][$k]['video_url']);
                            if ($rsd['code']==0){
                                $index_list['all_data'][$k]['vip_url']=$rsd['real_url'];
                            }else{
                                $index_list['all_data'][$k]['vip_url']=$index_list['all_data'][$k]['video_url'];
                            }
                        }else{
                            $index_list['all_data'][$k]['vip_url']=$index_list['all_data'][$k]['video_url'];
                        }
                    }
                    if ($v['type'] == 'edit_music') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                    }
                    continue;
                } else {
                    if (!strstr(isset($index_list['all_data'][$k]['topimg'])?$index_list['all_data'][$k]['topimg']:'', "http://" . $_SERVER['HTTP_HOST'])) {
                        $index_list['all_data'][$k]['topimg'] = isset($v['topimg'])?$v['topimg']:'';
                    } else {
                        $index_list['all_data'][$k]['topimg'] = isset($v['topimg'])?$v['topimg']:'';
                    }
                    // unset( $index_list['all_data'][$k]['time_key']);
                    if(isset($v['list'])){
                        foreach ($v['list'] as $key => $value) {
                            //unset( $index_list['all_data'][$k]['list'][$key]['top']);
                            if (!empty($value['imgurl'])) {

                                if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                                } else {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                                }

                            } else {
                                if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                                } else {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                                }
                            }
                        }
                    }

                }
            }

            $pages_di=json_decode(input('param.menu_list'),true);
            $data=array();
            for($i = 0;$i<count($pages_di);$i++)
            {
                $item = array();
                $item['key'] = $pages_di[$i]['key'];
                $item['lat'] = $pages_di[$i]['lat'];
                $item['lng'] = $pages_di[$i]['lng'];
                $item['appid'] = $pages_di[$i]['appid'];
                $item['path'] = $pages_di[$i]['path'];
                $item['phone'] = $pages_di[$i]['phone'];
                $item['imgurl'] = $pages_di[$i]['imgurl'];
                $item['ident'] = $pages_di[$i]['ident'];
                $item['name'] = $pages_di[$i]['name'];
                $item['title'] = $pages_di[$i]['name'];
                $item['name_this'] = $pages_di[$i]['name_this'];
                $item['page_icon'] = $pages_di[$i]['page_icon'];
                $item['page_select_icon'] = $pages_di[$i]['page_select_icon'];
                $data[] = $item;
            }
            $name=input('param.wx_name','小程序名称');
            $background=input('param.DhColor_color')==''?'#df2f20':input('param.DhColor_color');

            $backgroundTextStyle=input('param.BtColor_color')==''?'#ffffff':input('param.BtColor_color');
            $selectedColor=input('param.iconColorSet_color')==''?'#e02e24':input('param.iconColorSet_color');
            $color=input('param.iconTitColor_color')==''?'#8b8b8b':input('param.iconTitColor_color');
            $backgroundColor=input('param.pureBorderColor_color')==''?'#ffffff':input('param.pureBorderColor_color');
            $win_color=input('param.win_color')==''?'#ffffff':input('param.win_color');
            $win_img=input('param.win_img')==''?'':input('param.win_img');
            $is_di_dis=input('param.is_di_dis')=='false'?false:true;

            $ext=array(
                'tabBar'=>array(
                    'name'=>$name, //小程序名称
                    'background'=>$background, //导航栏背景颜色
                    'backgroundTextStyle'=>$backgroundTextStyle,//导航栏标题颜色
                    'selectedColor'=>$selectedColor,//选中字体颜色
                    'color'=>$color,//字体颜色
                    'backgroundColor'=>$backgroundColor,//底部导航栏
                    'winColor'=>$win_color,//整体颜色
                    'winImg'=>$win_img,//背景图片
                    'IsDiDis'=>$is_di_dis,
                    'list'=> $data
                ),
            );


            $res = Db::name('ybsc_user_tmpl_box')->insert(['img'=>$img_src,'style_value'=>json_encode($ext),'title' => $title, 'mch_id' => $this->bus_id, 'index_values' => json_encode($index_list), 'create_time' => time()]);

            return AjaxReturn($res);
        }
    }

    /**
     * 编辑我的模版
     */
    public function update_my_mod(){
        if (request()->isAjax() && request()->method() == 'POST') {
            global $_W;
            $_W = $_SESSION['we7_w'];
            $index_list = json_decode(input('param.index_list'), true);
            $my_mod= input('param.my_mod');
            $img = input('param.img_src');

            $imageName = "25220_".date("His",time())."_".rand(1111,9999).'.png';
            if (strstr($img,",")){
                $img = explode(',',$img);
                $img = $img[1];
            }

            $path = "public/upload/user_box";
            if (!is_dir($path)){ //判断目录是否存在 不存在就创建
                mkdir($path,0777,true);
            }
            $imageSrc=  $path."/". $imageName;  //图片名字

            $r = file_put_contents(ROOT_PATH ."/".$imageSrc, base64_decode($img));//返回的是字节数
            $img_src='';
            if ($r){
                $img_src=$_W['siteroot'] .'addons/yb_shop/core/public/upload/user_box/'.$imageName;
            }

            unset($index_list['banner']);
            unset($index_list['catenav']);
            unset($index_list['advert']);
            unset($index_list['add_h']);
            unset($index_list['add_top']);
            unset($index_list['now_index']);
            unset($index_list['this_type']);
            unset($index_list['columntitle']);
            unset($index_list['imgtextlist']);
            unset($index_list['goodlist']);
            unset($index_list['edit_button']);
            unset($index_list['edit_piclist']);
            unset($index_list['floaticon']);
            foreach ($index_list['all_data'] as $k => $v) {
                if ($v['type'] == 'comment' || $v['type'] == 'edit_video' || $v['type'] == 'edit_music' || $v['type'] == 'search' || $v['type'] == 'blank' || $v['type'] == 'headline' || $v['type'] == 'line' || $v['type'] == 'position' || $v['type'] == 'rich_text') {
                    if ($v['type'] == 'edit_video') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                        if ($index_list['all_data'][$k]['video_type']==1){
                            $index_list['all_data'][$k]['video_url']=$this->get_tx_video($index_list['all_data'][$k]['video_url']);
                        }
                    }
                    if ($v['type'] == 'edit_music') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                    }
                    continue;
                } else {
                    if (!strstr($index_list['all_data'][$k]['topimg'], "http://" . $_SERVER['HTTP_HOST'])) {
                        $index_list['all_data'][$k]['topimg'] = $v['topimg'];
                    } else {
                        $index_list['all_data'][$k]['topimg'] = $v['topimg'];
                    }
                    // unset( $index_list['all_data'][$k]['time_key']);
                    foreach ($v['list'] as $key => $value) {
                        //unset( $index_list['all_data'][$k]['list'][$key]['top']);
                        if (!empty($value['imgurl'])) {

                            if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                            } else {
                                $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                            }

                        } else {
                            if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                            } else {
                                $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                            }
                        }
                    }
                }
            }

            $pages_di=json_decode(input('param.menu_list'),true);
            $data=array();
            for($i = 0;$i<count($pages_di);$i++)
            {
                $item = array();
                $item['key'] = $pages_di[$i]['key'];
                $item['lat'] = $pages_di[$i]['lat'];
                $item['lng'] = $pages_di[$i]['lng'];
                $item['appid'] = $pages_di[$i]['appid'];
                $item['path'] = $pages_di[$i]['path'];
                $item['phone'] = $pages_di[$i]['phone'];
                $item['imgurl'] = $pages_di[$i]['imgurl'];
                $item['ident'] = $pages_di[$i]['ident'];
                $item['name'] = $pages_di[$i]['name'];
                $item['title'] = $pages_di[$i]['name'];
                $item['name_this'] = $pages_di[$i]['name_this'];
                $item['page_icon'] = $pages_di[$i]['page_icon'];
                $item['page_select_icon'] = $pages_di[$i]['page_select_icon'];
                $data[] = $item;
            }
            $name=input('param.wx_name','小程序名称');
            $background=input('param.DhColor_color')==''?'#df2f20':input('param.DhColor_color');

            $backgroundTextStyle=input('param.BtColor_color')==''?'#ffffff':input('param.BtColor_color');
            $selectedColor=input('param.iconColorSet_color')==''?'#e02e24':input('param.iconColorSet_color');
            $color=input('param.iconTitColor_color')==''?'#8b8b8b':input('param.iconTitColor_color');
            $backgroundColor=input('param.pureBorderColor_color')==''?'#ffffff':input('param.pureBorderColor_color');
            $win_color=input('param.win_color')==''?'#ffffff':input('param.win_color');
            $win_img=input('param.win_img')==''?'':input('param.win_img');
            $is_di_dis=input('param.is_di_dis')=='false'?false:true;

            $ext=array(
                'tabBar'=>array(
                    'name'=>$name, //小程序名称
                    'background'=>$background, //导航栏背景颜色
                    'backgroundTextStyle'=>$backgroundTextStyle,//导航栏标题颜色
                    'selectedColor'=>$selectedColor,//选中字体颜色
                    'color'=>$color,//字体颜色
                    'backgroundColor'=>$backgroundColor,//底部导航栏
                    'winColor'=>$win_color,//整体颜色
                    'winImg'=>$win_img,//背景图片
                    'IsDiDis'=>$is_di_dis,
                    'list'=> $data
                ),
            );


            $res = Db::name('ybsc_user_tmpl_box')->where('id',$my_mod)->update(['img'=>$img_src,'style_value'=>json_encode($ext),'index_values' => json_encode($index_list), 'create_time' => time()]);

            return AjaxReturn($res);
        }
    }

    /**
     * 删除我的模版
     */
    public function del_my_mode() {
        $id = input('param.id');

        global $_W;
        $_W = $_SESSION['we7_w'];

        $info = Db::name('ybsc_user_tmpl_box')->where('id', $id)->find();

        $str = str_replace(array($_W['siteroot'].'addons/yb_shop/core/'),"",$info['img']);
        @unlink($str);
        $res = Db::name('ybsc_user_tmpl_box')->where('id', $id)->delete();
        return AjaxReturn($res);
    }

    /**
     * 选中砍价
     */
    public function select_fight_group() {
        $this_id = input('param.select_id');


        $art = Db::name('ybsc_bargain')->alias('b')
            ->join('ybsc_images i','b.bargain_picture=i.img_id')
            ->where('b.mch_id', $this->bus_id)
            ->order('b.create_time desc')
            ->field('b.*,i.img_cover')
            ->paginate(20);
        $page = $art->render();

        //$url = Db::name('ybsc_tmpl_pages')->where('mod_id', 1)->where('menu', 'article_info')->find();
        $new = input('param.new', '0');
        $this->assign('new', $new);
        $this->assign('url', 'pages/index/kanjia');
        $this->assign('page', $page);
        $this->assign('this_id', $this_id);
        $this->assign('fight', $art);
        return view('menu/index_fight_group');
    }

    /**
     * 万能模版
     */
    public function universal(){
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];
        $list=Db::name('ybsc_bus_tmpl')->where('is_del=1')->where('mch_id',$this->bus_id)->order('create_time desc')->paginate(20, false, ['query' => ['s' => $url,request()->param()]]);
        $this->assign('list',$list);
        return view('menu/universal');
    }

    /**
     * @return \think\response\View
     * 万能模版添加
     */
    public function add_universal(){
        if (request()->isAjax() && request()->method() == 'POST'){

            global $_W;
            $_W = $_SESSION['we7_w'];
            $index_list = json_decode(input('param.index_list'), true);
            $title = input('param.title');
            $img = input('param.img_src');

            $imageName = "25220_".date("His",time())."_".rand(1111,9999).'.png';
            if (strstr($img,",")){
                $img = explode(',',$img);
                $img = $img[1];
            }

            $path = "public/upload/user_box";
            if (!is_dir($path)){ //判断目录是否存在 不存在就创建
                mkdir($path,0777,true);
            }
            $imageSrc=  $path."/". $imageName;  //图片名字

            $r = file_put_contents(ROOT_PATH ."/".$imageSrc, base64_decode($img));//返回的是字节数
            $img_src='';
            if ($r){
                $img_src=$_W['siteroot'] .'addons/yb_shop/core/public/upload/user_box/'.$imageName;
            }
            unset($index_list['banner']);
            unset($index_list['catenav']);
            unset($index_list['advert']);
            unset($index_list['add_h']);
            unset($index_list['add_top']);
            unset($index_list['now_index']);
            unset($index_list['this_type']);
            unset($index_list['columntitle']);
            unset($index_list['imgtextlist']);
            unset($index_list['tripartite_list']);
            unset($index_list['quartet_list']);
            unset($index_list['fight_group_list']);
            unset($index_list['goodlist']);
            unset($index_list['edit_button']);
            unset($index_list['edit_piclist']);
            unset($index_list['floaticon']);

            unset($index_list['menu_list']);
            unset($index_list['add_h_di']);
            unset($index_list['add_top_di']);
            unset($index_list['display']);
            unset($index_list['nab_name']);
            unset($index_list['nab_color']);
            unset($index_list['font_color']);
            unset($index_list['db_color']);
            unset($index_list['dh_color']);
            unset($index_list['dbj_color']);
            unset($index_list['bag_url']);

            foreach ($index_list['all_data'] as $k => $v) {
                if ($v['type'] == 'comment' || $v['type'] == 'edit_video' || $v['type'] == 'edit_music' || $v['type'] == 'search' || $v['type'] == 'blank' || $v['type'] == 'headline' || $v['type'] == 'line' || $v['type'] == 'position' || $v['type'] == 'rich_text') {
                    if ($v['type'] == 'edit_video') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                        if ($index_list['all_data'][$k]['video_type']==1){
                           $rsd=$this->get_tx_video($index_list['all_data'][$k]['video_url']);
                           if ($rsd['code']==0){
                               $index_list['all_data'][$k]['vip_url']=$rsd['real_url'];
                           }else{
                               $index_list['all_data'][$k]['vip_url']=$index_list['all_data'][$k]['video_url'];
                           }
                        }else{
                            $index_list['all_data'][$k]['vip_url']=$index_list['all_data'][$k]['video_url'];
                        }
                    }
                    if ($v['type'] == 'edit_music') {
                        $index_list['all_data'][$k]['imgurl'] = $index_list['all_data'][$k]['imgurl'];
                    }
                    continue;
                } else {

                    if(!empty($v['list']))
                    {
                        foreach ($v['list'] as $key => $value) {
                            if (!empty($value['imgurl'])) {

                                if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                                } else {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $value['imgurl'];
                                }

                            } else {
                                if (!strstr($index_list['all_data'][$k]['list'][$key]['imgurl'], "http://" . $_SERVER['HTTP_HOST'])) {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                                } else {
                                    $index_list['all_data'][$k]['list'][$key]['imgurl'] = $v['topimg'];
                                }
                            }
                        }
                    }

                }
            }
            $id=request()->param('id');
            if ($id==0){
                $res = Db::name('ybsc_bus_tmpl')->insertGetId(['img'=>$img_src,'name' => $title, 'mch_id' => $this->bus_id, 'index_values' => json_encode($index_list), 'create_time' => time()]);
            }else{
                $res = Db::name('ybsc_bus_tmpl')->where('id',$id)->update(['img'=>$img_src,'name' => $title, 'index_values' => json_encode($index_list)]);
            }

            return AjaxReturn($res,['id'=>$id]);
        }
        return view('menu/universal_add');
    }

    /**
     * 编辑万能页面
     */
    public function edit_universal(){
        if (request()->isAjax() && request()->method() == 'POST') {
            $id=request()->param('id');
            $mod = Db::name('ybsc_bus_tmpl')->where('id', $id)->find();
            $json=json_decode($mod['index_values'], true);
            $json['id']=$id;
            $json['name']=$mod['name'];
            return $json;
        }
        $id=request()->param('id');
        $this->assign('id',$id);
        return view('menu/universal_edit');
    }
    /**
     * 删除万能页面
     */
    public function del_universal(){
        $id=input('param.id');

        global $_W;
        $_W = $_SESSION['we7_w'];

        $info = Db::name('ybsc_bus_tmpl')->where('id', $id)->find();

        $str = str_replace(array($_W['siteroot'].'addons/yb_shop/core/'),"",$info['img']);
        @unlink($str);
        $del=Db::name('ybsc_bus_tmpl')->where('id',$id)->delete();
        return AjaxReturn($del);
    }

    /**
     * 万能表单页面
     */
    public function universal_form(){
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];

        $list=Db::name('ybsc_bus_form')->order('create_time desc')->where('mch_id',$this->bus_id)->paginate(20, false, ['query' => ['s' => $url,request()->param()]]);
        $this->assign('list',$list);
        return view();
    }
    /**
     * 万能表单页面
     */
    public function universal_form_add(){
        if (request()->isAjax() && request()->method() == 'POST') {
            $img=request()->param('img');
            $id=request()->param('id','0');
            $form_type=request()->param('form_type');
            global $_W;
            $_W = $_SESSION['we7_w'];

            $imageName = "form_".date("His",time())."_".rand(1111,9999).'.png';
            if (strstr($img,",")){
                $img = explode(',',$img);
                $img = $img[1];
            }

            $path = "public/upload/user_box";
            if (!is_dir($path)){ //判断目录是否存在 不存在就创建
                mkdir($path,0777,true);
            }
            $imageSrc=  $path."/". $imageName;  //图片名字

            $r = file_put_contents(ROOT_PATH ."/".$imageSrc, base64_decode($img));//返回的是字节数
            $img_src='';
            if ($r){
                $img_src=$_W['siteroot'] .'addons/yb_shop/core/public/upload/user_box/'.$imageName;
            }

            $data = json_decode(input('param.index_list'), true);
            $title = input('param.title');
            unset($data['checkbox_list']);
            unset($data['radio_list']);
            unset($data['now_index']);
            unset($data['this_index']);
           // dump(json_encode($data['all_data']));
            if (empty($id)||$id==0){
                $res=Db::name('ybsc_bus_form')->insert(['type'=>$form_type,'img'=>$img_src,'title'=>$title,'value'=>json_encode($data['all_data']),'mch_id'=>$this->bus_id,'create_time'=>time()]);
            }else{
                $res=Db::name('ybsc_bus_form')->where('id',$id)->inc('create_time')->update(['img'=>$img_src,'value'=>json_encode($data['all_data'])]);
            }

        return AjaxReturn($res);
        }
        $id=input('param.id','0');
        $this->assign('id',$id);
        return view();
    }
    /**
     * 万能表单页面
     */
    public function universal_form_edit(){
        if (request()->isAjax() && request()->method() == 'POST') {
            $id=input('param.id');
            $info=Db::name('ybsc_bus_form')->where('id',$id)->find();
            return $info;
        }
    }
    //添加表单页面
    public function cratn_menu(){
        return view();
    }

    /**
     * 删除万能表单
     */
    public function del_universal_form(){
        $id=input('param.id');
        $key=input('param.key');
        if ($key=='off'){
            $res=Db::name('ybsc_bus_form')->where('id',$id)->update(['is_del'=>2]);
        }else{
            $res=Db::name('ybsc_bus_form')->where('id',$id)->update(['is_del'=>1]);
        }
        return AjaxReturn($res);
    }

    /**
     * 查询表单收集
     */
    public function get_form_info(){
        $id=input('param.id');

        $user_info=Db::name('ybsc_user_form')->where('id',$id)->find();
        $user_info['param']=str_replace('\n','<br>', $user_info['param']);
        $user_info['param']=json_decode($user_info['param'],true);
        foreach ($user_info['param'] as $k=>$v){
            $string_arr = explode("-", $v['name']);
            $user_info['param'][$k]['key']=$string_arr[1];
        }
        $this->assign('user_info',$user_info);
        return view('user/get_form_info');
    }

    /**
     * 表里集合
     */
    public function get_form_list(){
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];
        $data = Request::instance()->param();
        $where= [];
        empty($data['form_id']) || $data['form_id']==0 || $where['bus_form_id'] = [ 'eq',$data['form_id']];

        $data['form_id'] = empty($data['form_id']) ? '':$data['form_id'];
        $list=Db::name('ybsc_user_form')->order('create_time desc')->where($where)->where('mch_id',$this->bus_id)->paginate(10, false, ['query' => ['s' => $url,'form_id'=>$data['form_id']]]);
        $this->assign('list',$list);

        $from_all=Db::name('ybsc_bus_form')->where('mch_id',$this->bus_id)->where('is_del=1')->select();
        $this->assign('from_all',$from_all);
        $this->assign('form_id',$data['form_id']);
        return view('user/get_form_list');
    }

    /**
     * 获取所有表单
     */
    public function select_form_all(){
        $url = request()->query();
        $url = explode('=/', $url);
        $url = explode('&', $url[1]);
        $url = '/' . $url[0];
        $list=Db::name('ybsc_bus_form')->where('mch_id',$this->bus_id)->order('create_time desc')->where('is_del=1')->paginate(10, false, ['query' => ['s' => $url,request()->param()]]);
        $this->assign('list',$list);
        return view();
    }

    /**
     * 修改表单名称
     */
    public function universal_set_title_do(){
        $id=input('param.id');
        $title=input('param.title');
        $res=Db::name('ybsc_bus_form')->where('id',$id)->inc('create_time')->update(['title'=>$title]);
        return AjaxReturn($res);
    }

    /**
     * 设置提交次数
     */
    public function set_universal_limet(){
        $id=input('param.id');
        $val=input('param.val');
        $res=Db::name('ybsc_bus_form')->where('id',$id)->inc('create_time')->update(['limit_num'=>$val]);
        return AjaxReturn($res);
    }

    /**
     * 修改名称
     */
    public function set_form_title(){
        $id=input('param.id');
        $val=input('param.val');
        $res=Db::name('ybsc_bus_form')->where('id',$id)->inc('create_time')->update(['title'=>$val]);
    return AjaxReturn($res);
    }
//解析腾讯视频
    public function get_tx_video($url){
        $res=array('code'=>1);
       // $url=$this->result['vid'];
        //$url = "https://v.qq.com/x/cover/mp75uu1e2lr9cof/h0023ndwl6c.html";
        if(strpos($url,'v.qq.com') !== false){//包含
            preg_match("/\/([0-9a-zA-Z]+).html/", $url, $match);
            if (empty($match)) {
                $res['msg']='地址格式不正确';
                return $res;
            }
            $vid = $match[1];//视频ID
            try {
                set_time_limit(0);
                $getinfo = "http://vv.video.qq.com/getinfo?vids={$vid}&platform=11&charge=0&otype=xml";
                $info = $this->request2($getinfo);
                $info_arr =  $this->xmlToArray($info);
                if ($info_arr['msg'] == 'vid is wrong') {
                    $res['msg']='视频出错';
                    return $res;
                }
                $fi = $info_arr['fl']['fi'];
                if (isset($fi[1])) {
                    $format_id = $fi[1]['id'];
                    $fmt = $fi[1]['name'];
                    $format = 'p' . substr($format_id, -3, 3);
                    $key = $info_arr['vl']['vi']['fvkey'];
                    $vid = $info_arr['vl']['vi']['vid'];
                    $url = $info_arr['vl']['vi']['ul']['ui'][0]['url'];
                    if (strlen($format_id) >= 5) {
                        $mp4 = $vid . '.' . $format . '.1.mp4';
                    } else {
                        $mp4 = $vid . '.mp4';
                    }
                    $video_url = $url . $mp4 . '?vkey=' . $key . '&fmt=' . $fmt;

                } else {
                    $getinfo = "http://vv.video.qq.com/getinfo?vids={$vid}&platform=101001&charge=0&otype=xml";
                    $info = $this->request2($getinfo);
                    $info_arr = $this->xmlToArray($info);
                    if (isset($info_arr['msg']) && $info_arr['msg'] == 'vid is wrong') {
                        $res['msg']='视频出错';
                        return $res;
                    }
                    $filename = $info_arr['vl']['vi']['fn'];
                    $key = $info_arr['vl']['vi']['fvkey'];
                    $url = $info_arr['vl']['vi']['ul']['ui'][0]['url'];
                    $video_url = $url . $filename . '?vkey=' . $key;
                }
                $res['code']=0;
                $res ['company'] = '腾讯';
                $res['real_url']=$video_url;
                return $res;
            } catch (\Exception $e) {
                $res['msg'] = '视频解析失败，请重试';
                return $res;
            }

        }
    }

    /**
     * curl 发送get、post请求
     * $param为空时为get请求
     * @param $url
     * @param array $param
     * @return bool|mixed
     */
    public function request2($url,$param=[]){
        if (empty($url)) {
            return false;
        }

        $ch = curl_init();
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        if (substr($url, 0, 8) == 'https://') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//绕过ssl验证
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        }
        if(!empty($param)){
            $o = "";
            foreach ( $param as $k => $v )
            {
                $o.= "$k=" . urlencode( $v ). "&" ;
            }
            $post_data = substr($o,0,-1);
            curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        }
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        return $output;
    }
//将XML转为array
    public function xmlToArray($xml)
    {
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $values;
    }
    /**
     * 小程序会员中心自定义
     */
    public function center_module() {
        if (request()->isAjax() && request()->method() == 'POST') {
            $data = input('param.data');
            $res = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->update(['center_values' => $data]);
            return AjaxReturn($res);
        }
        //获取商品分类
        $goods_cate = Db::name('ybsc_goods_cate')->where('is_visible=1')->where('mch_id', $this->bus_id)->select();
        $this->assign('goods_cate', $goods_cate);
        //获取文章分类
        $article_class = Db::name('ybsc_article_class')->where('is_del=1')->where('mch_id', $this->bus_id)->select();
        $this->assign('article_class', $article_class);
        $this->assign('yuming', ' http://'.$_SERVER['HTTP_HOST'].'/addons/yb_shop/core/index.php?s=/admin');
        //万能页面
        $this->assign('wn',request()->param('wn',-1));
        $this->assign('wn_id',request()->param('wn_id',0));

        //我的模版编辑
        $this->assign('my_mod',request()->param('my_mod',-1));
        //我的模版
        return view('menu/center_module');
    }
    /**
     * 显示保存过的会员中心模版
     */
    public function find_mch_center_mod() {
        $mod = Db::name('ybsc_user_tmpl')->where('mch_id', $this->bus_id)->find();
        return json_decode($mod['center_values'], true);
    }
    /**
     *会员中心
     */
    public function user_center(){

        $wq_uid = $_SESSION['we7_w']['user']['uid'];


        $info=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->value('center_values');

        if(empty($info)){
            $info='{"all_data":[{"img":"/addons/yb_shop/core/public/images/member/cart.png","type":"order","status":1,"title":"我的订单","time_key":"153474118797080"},{"img":"/addons/yb_shop/core/public/images/member/like.png","type":"follow","status":1,"title":"我的关注","time_key":"153474118882593"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/coupon.png","type":"coupon","status":1,"title":"我的优惠券","time_key":"153474118930570"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/appointment.png","type":"book","status":1,"title":"我的预约","time_key":"153474118919817"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_icon.png","type":"kjm","status":1,"title":"我的砍价","time_key":"153474119087708"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_order_icon.png","type":"kjo","status":1,"title":"砍价订单","time_key":"153474119043189"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/group_icon.png","type":"ptm","status":1,"title":"我的拼团","time_key":"153474119153315"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/groupj_order_icon.png","type":"pto","status":1,"title":"拼团订单","time_key":"153474119179761"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/service.png","type":"kefu","status":1,"title":"在线客服","time_key":"15347411926469"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/location.png","type":"address","status":1,"title":"收货地址","time_key":"153474119365949"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/about.png","type":"about","status":1,"title":"关于我们","time_key":"153474119422866"}],"win_color":"#ffffff","win_img":""}';
        }
        $role_id = Db::name('ybsc_user_permission')
            ->alias('p')
            ->join('ybsc_user_role r','p.role_id = r.role_id')
            ->field('r.module_id_array')
            ->where(['p.user_id'=>$wq_uid])
            ->find();

        $data=json_decode($info,true);

        if(!empty($role_id))
        {
            $role_ids = explode(',',$role_id['module_id_array']);

            foreach ($data['all_data'] as &$item)
            {
                $item['hidden'] = false;
                if($item['type'] == 'kjm' || $item['type'] == 'kjo')
                {
                    if(!in_array(223,$role_ids))
                    {
                        $item['status'] = 2;
                        $item['hidden'] = true;
                    }
                }

                if($item['type'] == 'ptm' || $item['type'] == 'pto')
                {
                    if(!in_array(243,$role_ids))
                    {
                        $item['status'] = 2;
                        $item['hidden'] = true;
                    }
                }

                if($item['type'] == 'book')
                {
                    if(!in_array(210,$role_ids))
                    {
                        $item['status'] = 2;
                        $item['hidden'] = true;
                    }
                }
            }

        }

        $new_data=json_encode($data);
        Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->update(['center_values'=>$new_data]);

        $this->assign('list',$data['all_data']);
        return view();
    }
    function deep_in_array($value, $array) {
        $rs=false;
        for($i=0;$i<count($array);$i++){
            if($array[$i]['type']==$value){
                $rs=true;
                break;
            }
        }
        return $rs;
    }
    /**
     * 改变状态
     */
    public function del_user_center(){
        $type=input('param.type');
        $key=input('param.key');
        $info=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->value('center_values');
        if(empty($info)){
            $info='{"all_data":[{"img":"/addons/yb_shop/core/public/images/member/cart.png","type":"order","status":1,"title":"我的订单","time_key":"153474118797080"},{"img":"/addons/yb_shop/core/public/images/member/like.png","type":"follow","status":1,"title":"我的关注","time_key":"153474118882593"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/coupon.png","type":"coupon","status":1,"title":"我的优惠券","time_key":"153474118930570"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/appointment.png","type":"book","status":1,"title":"我的预约","time_key":"153474118919817"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_icon.png","type":"kjm","status":1,"title":"我的砍价","time_key":"153474119087708"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_order_icon.png","type":"kjo","status":1,"title":"砍价订单","time_key":"153474119043189"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/group_icon.png","type":"ptm","status":1,"title":"我的拼团","time_key":"153474119153315"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/groupj_order_icon.png","type":"pto","status":1,"title":"拼团订单","time_key":"153474119179761"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/service.png","type":"kefu","status":1,"title":"在线客服","time_key":"15347411926469"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/location.png","type":"address","status":1,"title":"收货地址","time_key":"153474119365949"},{"img":"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/about.png","type":"about","status":1,"title":"关于我们","time_key":"153474119422866"}],"win_color":"#ffffff","win_img":""}';
        }
        $data=json_decode($info,true);

        foreach ($data['all_data'] as &$item)
        {
            if($item['type'] == $type)
            {
                if ($key=='off'){
                    $item['status']=2;
                }else{
                    $item['status']=1;
                }
            }
        }

        $new_data=json_encode($data);
        $res=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->update(['center_values'=>$new_data]);
        return AjaxReturn($res);
    }
    /**
     * 修改名称
     */
    public function set_center_title(){
        $type=input('param.type');
        $val=input('param.val');
        $info=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->value('center_values');
        if(empty($info)){
            $info='{"all_data":[{"img":"/public/images/member/cart.png","type":"order","status":1,"title":"我的订单","time_key":"153474118797080"},{"img":"/public/images/member/like.png","type":"follow","status":1,"title":"分销中心","time_key":"153474118882593"},{"img":"/public/images/member/like.png","type":"follow","status":1,"title":"我的关注","time_key":"153474118882593"},{"img":"/public/images/member/coupon.png","type":"coupon","status":1,"title":"我的优惠券","time_key":"153474118930570"},{"img":"/public/images/member/appointment.png","type":"book","status":1,"title":"我的预约","time_key":"153474118919817"},{"img":"/public/images/member/kj_icon.png","type":"kjm","status":1,"title":"我的砍价","time_key":"153474119087708"},{"img":"/public/images/member/kj_order_icon.png","type":"kjo","status":1,"title":"砍价订单","time_key":"153474119043189"},{"img":"/public/images/member/group_icon.png","type":"ptm","status":1,"title":"我的拼团","time_key":"153474119153315"},{"img":"/public/images/member/groupj_order_icon.png","type":"pto","status":1,"title":"拼团订单","time_key":"153474119179761"},{"img":"/public/images/member/service.png","type":"kefu","status":1,"title":"在线客服","time_key":"15347411926469"},{"img":"/public/images/member/location.png","type":"address","status":1,"title":"收货地址","time_key":"153474119365949"},{"img":"/public/images/member/about.png","type":"about","status":1,"title":"关于我们","time_key":"153474119422866"}],"win_color":"#ffffff","win_img":""}';
        }
        $data=json_decode($info,true);
        foreach ($data['all_data'] as &$item)
        {
            if($item['type'] == $type)
            {
                $item['title']=$val;
            }
        }
        $new_data=json_encode($data);
        $res=Db::name('ybsc_user_tmpl')->where('mch_id',$this->bus_id)->update(['center_values'=>$new_data]);
        return AjaxReturn($res);
    }
    public function copy_universal(){
        $id=input('param.id');
        $info = Db::name('ybsc_bus_tmpl')->where('id', $id)->find();
        $rs=0;
        if($info){
            $data=[
                'name'=>$info['name'],
                'index_values'=>$info['index_values'],
                'img'=>$info['img'],
                'mch_id'=>$info['mch_id'],
                'is_del'=>1,
                'create_time'=>time()
            ];
            $rs=Db::name('ybsc_bus_tmpl')->insert($data);
        }
    return AjaxReturn($rs);
    }
    public function wxapp_page(){
        $this->assign('data',$this->wx_page);
        //我的模版
        return view('menu/wxapp');
    }
    public function wechats_page(){
        $wechats_page_arr=$this->wechats_page;
        $wechats_page_arr_new=[];
        $host = $_SESSION['we7_w']['siteroot'];
        $url=$host . "addons/yb_shop/core/web.php?page=:page&mch_id=$this->bus_id";
        foreach ($wechats_page_arr as $v){
            $v["path"]=str_replace(":page",$v["path"],$url);
            $wechats_page_arr_new[]=$v;
        }
        $this->assign('data',$wechats_page_arr_new);
        //我的模版
        return view('menu/wechats_page');
    }
}
