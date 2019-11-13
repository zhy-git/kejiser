<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
class Menu extends Base
{
    private $select_page = array(array("name" => "商城", "list" => array(array("text" => "首页", "type" => "index", "param" => 2, "path" => "/yb_shop/pages/index/index"), array("text" => "商品列表", "role_id" => "12", "type" => "product", "param" => 3), array("text" => "商品详情", "role_id" => "12", "type" => "goods", "param" => 1, "path" => "/yb_shop/pages/goods/detail/index"), array("text" => "商品分类", "role_id" => "12", "type" => "caregory", "param" => 1, "path" => "/yb_shop/pages/product/index2"), array("text" => "购物车", "role_id" => "12", "type" => "cart", "param" => 2, "path" => "/yb_shop/pages/member/cart/index"), array("text" => "会员中心", "type" => "cenmember", "param" => 2, "path" => "/yb_shop/pages/member/index/index"))), array("name" => "会员", "list" => array(array("text" => "预约列表", "role_id" => "210", "type" => "book_list", "param" => 2, "path" => "/yb_shop/pages/book_list/index"), array("text" => "我的订单", "role_id" => "12", "type" => "my_order", "param" => 1, "path" => "/yb_shop/pages/order/index"), array("text" => "我的关注", "type" => "my_follow", "param" => 2, "path" => "/yb_shop/pages/member/favorite/index"), array("text" => "我的优惠券", "role_id" => "169", "type" => "my_coupon", "param" => 2, "path" => "/yb_shop/pages/member/coupon/index"), array("text" => "我的预约", "role_id" => "210", "type" => "my_book", "param" => 2, "path" => "/yb_shop/pages/appointment/index"), array("text" => "我的砍价", "role_id" => "223", "type" => "my_kjm", "param" => 2, "path" => "/yb_shop/pages/kanjia/my_record/index"), array("text" => "砍价订单", "role_id" => "223", "type" => "my_kjo", "param" => 2, "path" => "/yb_shop/pages/kanjia/order/index"), array("text" => "我的拼团", "role_id" => "243", "type" => "my_ptm", "param" => 2, "path" => "/yb_shop/pages/pintuan/pages/group/index"), array("text" => "拼团订单", "role_id" => "243", "type" => "my_pto", "param" => 2, "path" => "/yb_shop/pages/pintuan/pages/orders/index"), array("text" => "秒杀列表", "role_id" => "274", "type" => "miaosha", "param" => 2, "path" => "/yb_shop/pages/miaosha/seckillList/index"), array("text" => "分销中心", "role_id" => "253", "type" => "my_fenxiao", "param" => 2, "path" => "/yb_shop/pages/fenxiao/pages/index/index"), array("text" => "我的积分", "type" => "myintegral", "param" => 2, "path" => "/yb_shop/pages/member/integral/myintegral"), array("text" => "我的关注", "type" => "my_follow", "param" => 2, "path" => "/yb_shop/pages/member/favorite/index"), array("text" => "我的订阅", "role_id" => "264", "type" => "paycontent_my", "param" => 2, "path" => "/yb_shop/pages/paycontent/my/index"), array("text" => "联系我们", "type" => "contact", "param" => 2, "path" => "/yb_shop/pages/contact/index"), array("text" => "关于我们", "type" => "about", "param" => 2, "path" => "/yb_shop/pages/member/about/index"))), array("name" => "内容", "list" => array(array("text" => "万能页面", "type" => "power", "param" => 1, "path" => "/yb_shop/pages/power/index"), array("text" => "万能表单", "role_id" => "200", "type" => "edit_form", "param" => 1, "path" => "/yb_shop/pages/form/index"), array("text" => "文章分类", "type" => "class_article", "param" => 1, "path" => "/yb_shop/pages/find/index"), array("text" => "文章列表", "type" => "article", "param" => 2, "path" => "/yb_shop/pages/find/index2"), array("text" => "文章详情", "type" => "article_info", "param" => 1, "path" => "/yb_shop/pages/find_info/index"), array("text" => "相册分类", "type" => "class_image", "param" => 2, "path" => "/yb_shop/pages/class_image/index"), array("text" => "相册列表", "type" => "images", "param" => 1, "path" => "/yb_shop/pages/image/index"), array("text" => "产品列表", "type" => "product_list", "param" => 2, "path" => "/yb_shop/pages/product/list/index"), array("text" => "产品详情", "type" => "product_info", "param" => 1, "path" => "/yb_shop/pages/product/info/index"), array("text" => "产品分类", "type" => "product_class", "param" => 1, "path" => "/yb_shop/pages/product/list/index"))), array("name" => "营销", "list" => array(array("text" => "积分签到", "type" => "qd", "param" => 2, "path" => "/yb_shop/pages/member/qd/index"), array("text" => "积分商城", "type" => "jfshop", "param" => 2, "path" => "/yb_shop/pages/member/integral/shop"), array("text" => "会员卡", "type" => "card", "param" => 2, "path" => "/yb_shop/pages/usercard/index/index"), array("text" => "优惠券", "role_id" => "169", "type" => "coupon", "param" => 2, "path" => "/yb_shop/pages/shop_coupon/index"), array("text" => "秒杀列表", "role_id" => "274", "type" => "miaosha", "param" => 2, "path" => "/yb_shop/pages/miaosha/seckillList/index"), array("text" => "秒杀详情", "role_id" => "274", "type" => "miaosha", "param" => 1, "path" => "/yb_shop/pages/miaosha/seckillGoods/index"), array("text" => "秒杀订单", "role_id" => "274", "type" => "miaosha", "param" => 2, "path" => "/yb_shop/pages/miaosha/order/index"), array("text" => "砍价", "role_id" => "223", "type" => "bargain", "param" => 2, "path" => "/yb_shop/pages/kanjia/index/index"), array("text" => "砍价列表", "role_id" => "223", "type" => "bargain", "param" => 2, "path" => "/yb_shop/pages/kanjia/good_list/index"), array("text" => "砍价详情", "role_id" => "223", "type" => "bargain_info", "param" => 1, "path" => "/yb_shop/pages/kanjia/goods_info/index"), array("text" => "拼团", "role_id" => "243", "type" => "pintuan", "param" => 2, "path" => "/yb_shop/pages/pintuan/pages/index/index"), array("text" => "拼团列表", "role_id" => "243", "type" => "pintuan_list", "param" => 2, "path" => "/yb_shop/pages/pintuan/pages/index/list"), array("text" => "拼团详情", "role_id" => "243", "type" => "pintuan_info", "param" => 1, "path" => "/yb_shop/pages/pintuan/pages/goods/detail"), array("text" => "付费内容首页", "role_id" => "264", "type" => "paycontent", "param" => 2, "path" => "/yb_shop/pages/paycontent/index"), array("text" => "付费内容详情", "role_id" => "264", "type" => "paycontent_info", "param" => 1, "path" => "/yb_shop/pages/paycontent/info/index"))), array("name" => "其它", "list" => array(array("text" => "打电话", "type" => "phone", "param" => 2), array("text" => "地图", "type" => "map", "param" => 2), array("text" => "小程序", "type" => "applets", "param" => 1), array("text" => "网页", "type" => "web_page", "param" => 1, "path" => "/yb_shop/pages/web/index"), array("text" => "客服", "type" => "custom", "param" => 2, "path" => "/yb_shop/pages/kefu/index"))));
    private $select_page_ms = array(array("name" => "营销", "list" => array(array("text" => "秒杀详情", "role_id" => "274", "type" => "miaosha", "param" => 1, "path" => "/yb_shop/pages/miaosha/seckillGoods/index"))));
    private $select_page_kj = array(array("name" => "营销", "list" => array(array("text" => "砍价详情", "role_id" => "223", "type" => "bargain_info", "param" => 1, "path" => "/yb_shop/pages/kanjia/goods_info/index"))));
    private $select_page_pt = array(array("name" => "营销", "list" => array(array("text" => "拼团详情", "role_id" => "243", "type" => "pintuan_info", "param" => 1, "path" => "/yb_shop/pages/pintuan/pages/goods/detail"))));
    private $select_page_product_list = array(array("name" => "内容", "list" => array(array("text" => "产品详情", "type" => "product_info", "param" => 1, "path" => "/yb_shop/pages/product/info/index"))));
    private $select_page_article_list = array(array("name" => "内容", "list" => array(array("text" => "文章详情", "type" => "article_info", "param" => 1, "path" => "/yb_shop/pages/find_info/index"))));
    private $wx_page = array(array("title" => "首页", "path" => "yb_shop/pages/index/index"), array("title" => "万能页面", "path" => "yb_shop/pages/power/index?id=1"), array("title" => "万能表单", "path" => "yb_shop/pages/form/index?id=1"), array("title" => "会员中心", "path" => "yb_shop/pages/member/index/index"), array("title" => "收货地址", "path" => "yb_shop/pages/member/address/index"), array("title" => "购物车", "path" => "yb_shop/pages/member/cart/index"), array("title" => "文章列表", "path" => "yb_shop/pages/find/index"), array("title" => "商品列表1", "path" => "yb_shop/pages/product/index?id=（为空默认展示全部）"), array("title" => "商品列表2", "path" => "yb_shop/pages/caregory/index"), array("title" => "商品列表3", "path" => "yb_shop/pages/goods/index/index"), array("title" => "商品详情", "path" => "yb_shop/pages/goods/detail/index?id=1"), array("title" => "领券列表", "path" => "yb_shop/pages/shop_coupon/index"), array("title" => "关于我们", "path" => "yb_shop/pages/member/about/index"), array("title" => "h5页面", "path" => "yb_shop/pages/web/index?name=标题&url=网页链接"), array("title" => "图片列表", "path" => "yb_shop/pages/image/index"), array("title" => "我的预约", "path" => "yb_shop/pages/appointment/index"), array("title" => "文章分类列表", "path" => "yb_shop/pages/class_article/index"), array("title" => "相册分类列表", "path" => "yb_shop/pages/class_image/index"), array("title" => "文章详情", "path" => "yb_shop/pages/find_info/index?id=1"), array("title" => "我的优惠券", "path" => "yb_shop/pages/member/coupon/index"), array("title" => "我的订单", "path" => "yb_shop/pages/order/index"), array("title" => "分销中心", "path" => "yb_shop/pages/fenxiao/pages/index/index"), array("title" => "砍价首页", "path" => "yb_shop/pages/kanjia/index/index"), array("title" => "砍价列表", "path" => "yb_shop/pages/kanjia/good_list/index"), array("title" => "砍价商品详情", "path" => "yb_shop/pages/kanjia/goods_info/index?id=1"), array("title" => "我的砍价", "path" => "yb_shop/pages/kanjia/my_record/index"), array("title" => "拼团首页", "path" => "yb_shop/pages/pintuan/pages/index/index"), array("title" => "拼团列表", "path" => "yb_shop/pages/pintuan/pages/index/list"), array("title" => "拼团商品详情", "path" => "yb_shop/pages/pintuan/pages/goods/detail?gid=1"), array("title" => "我的拼团", "path" => "yb_shop/pages/pintuan/pages/group/index"), array("title" => "拼团订单", "path" => "yb_shop/pages/pintuan/pages/orders/index"), array("title" => "秒杀列表", "path" => "yb_shop/pages/miaosha/seckillList/index"), array("title" => "秒杀详情", "path" => "yb_shop/pages/miaosha/seckillGoods/index?id=1"), array("title" => "积分签到", "path" => "yb_shop/pages/member/qd/index"), array("title" => "我的积分", "path" => "yb_shop/pages/member/integral/myintegral"), array("title" => "积分商城", "path" => "yb_shop/pages/member/integral/shop"));
    private $wechats_page = array(array("title" => "首页", "path" => "yb_shop/pages/index/index"), array("title" => "万能页面", "path" => "yb_shop/pages/power/index?id=1"), array("title" => "万能表单", "path" => "yb_shop/pages/form/index?id=1"), array("title" => "会员中心", "path" => "yb_shop/pages/member/index/index"), array("title" => "收货地址", "path" => "yb_shop/pages/member/address/index"), array("title" => "购物车", "path" => "yb_shop/pages/member/cart/index"), array("title" => "文章列表", "path" => "yb_shop/pages/find/index"), array("title" => "商品列表1", "path" => "yb_shop/pages/product/index?id=（为空默认展示全部）"), array("title" => "商品列表2", "path" => "yb_shop/pages/caregory/index"), array("title" => "商品列表3", "path" => "yb_shop/pages/goods/index/index"), array("title" => "商品详情", "path" => "yb_shop/pages/goods/detail/index?id=1"), array("title" => "领券列表", "path" => "yb_shop/pages/shop_coupon/index"), array("title" => "关于我们", "path" => "yb_shop/pages/member/about/index"), array("title" => "h5页面", "path" => "yb_shop/pages/web/index?name=标题&url=网页链接"), array("title" => "图片列表", "path" => "yb_shop/pages/image/index"), array("title" => "我的预约", "path" => "yb_shop/pages/appointment/index"), array("title" => "文章分类列表", "path" => "yb_shop/pages/class_article/index"), array("title" => "相册分类列表", "path" => "yb_shop/pages/class_image/index"), array("title" => "文章详情", "path" => "yb_shop/pages/find_info/index?id=1"), array("title" => "我的优惠券", "path" => "yb_shop/pages/member/coupon/index"), array("title" => "我的订单", "path" => "yb_shop/pages/order/index"), array("title" => "分销中心", "path" => "yb_shop/pages/fenxiao/pages/index/index"), array("title" => "砍价首页", "path" => "yb_shop/pages/kanjia/index/index"), array("title" => "砍价列表", "path" => "yb_shop/pages/kanjia/good_list/index"), array("title" => "砍价商品详情", "path" => "yb_shop/pages/kanjia/goods_info/index?id=1"), array("title" => "我的砍价", "path" => "yb_shop/pages/kanjia/my_record/index"), array("title" => "拼团首页", "path" => "yb_shop/pages/pintuan/pages/index/index"), array("title" => "拼团列表", "path" => "yb_shop/pages/pintuan/pages/index/list"), array("title" => "拼团商品详情", "path" => "yb_shop/pages/pintuan/pages/goods/detail?gid=1"), array("title" => "我的拼团", "path" => "yb_shop/pages/pintuan/pages/group/index"), array("title" => "拼团订单", "path" => "yb_shop/pages/pintuan/pages/orders/index"));
    public function menu_select_2()
    {
        goto JHrIF;
        xTE7x:
        $this->assign("type", $type);
        goto u7pX6;
        uwexw:
        $this_id = input("param.this_id");
        goto yQvlr;
        KiPrp:
        return view("menu/menu_select_2");
        goto As0Ll;
        OAPrd:
        $this->assign("type_key", $type_key);
        goto KiPrp;
        StEK3:
        $this->assign("url", $url);
        goto WTI3V;
        q5PDx:
        $url = explode("=/", $url);
        goto Lqhm8;
        n3oYI:
        $this->assign("new", $new);
        goto StEK3;
        u7pX6:
        $this->assign("path", $path);
        goto V9emS;
        Tzz6n:
        $url = "/" . $url[0];
        goto ec5pM;
        ec5pM:
        $type_key = "1";
        goto Ir9IB;
        V9emS:
        $url = request()->query();
        goto q5PDx;
        Ir9IB:
        switch ($type) {
            case "goods":
                goto qlffU;
                PIJa1:
                goto q3CVe;
                goto RscsH;
                RscsH:
                hSq3g:
                goto Oaobe;
                UrFov:
                $this->assign("page", $art->render());
                goto j8_tg;
                A82QE:
                j5kru:
                goto VcBih;
                VcBih:
                q3CVe:
                goto CQ9Na;
                Oaobe:
                $art = Db::name("ybsc_goods")->alias("g")->field("g.goods_id,g.create_time,g.goods_name,g.price,g.introduction,m.img_cover")->join("ybsc_images m", "m.img_id=g.images")->where(["g.mch_id" => $mch_id, "g.is_del" => 0])->order("g.create_time desc")->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto UrFov;
                j8_tg:
                $art = json_decode(json_encode($art, true), true);
                goto slnPa;
                Ddfd8:
                $art = Db::name("ybsc_goods")->alias("g")->field("g.goods_id id,g.create_time,g.goods_name name,g.price,g.introduction,m.img_cover img")->join("ybsc_images m", "m.img_id=g.images")->where(["g.mch_id" => $mch_id, "g.is_del" => 0, "g.goods_name" => ["like", "%" . $search_text . "%"]])->order("g.create_time desc")->select();
                goto PIJa1;
                HvpBi:
                goto vtwX4;
                goto N3bqZ;
                CQ9Na:
                $this->assign("list", $art);
                goto HvpBi;
                slnPa:
                $art = $art["data"];
                goto K0PK0;
                Pa9W0:
                if (empty($search_text)) {
                    goto hSq3g;
                }
                goto Ddfd8;
                qlffU:
                $search_text = input("goods_name");
                goto Pa9W0;
                K0PK0:
                foreach ($art as &$v) {
                    goto sW7WI;
                    ZPr6E:
                    RdH9i:
                    goto ZcViA;
                    Sv1cL:
                    $v["name"] = $v["goods_name"];
                    goto GNAGC;
                    sW7WI:
                    $v["id"] = $v["goods_id"];
                    goto Sv1cL;
                    GNAGC:
                    $v["img"] = $v["img_cover"];
                    goto ZPr6E;
                    ZcViA:
                }
                goto A82QE;
                N3bqZ:
            case "article_info":
                goto xw3yr;
                zfngC:
                $this->assign("page", $art->render());
                goto T3ulg;
                TvmZi:
                goto vtwX4;
                goto rHzp1;
                zZk3w:
                $this->assign("list", $art);
                goto TvmZi;
                T3ulg:
                $art = json_decode(json_encode($art, true), true);
                goto izbyR;
                izbyR:
                $art = $art["data"];
                goto BxT0a;
                K0Sz_:
                PX090:
                goto zZk3w;
                BxT0a:
                foreach ($art as &$v) {
                    goto hA_60;
                    hA_60:
                    $v["id"] = $v["article_id"];
                    goto s3MY6;
                    s3MY6:
                    $v["name"] = $v["title"];
                    goto FB4BD;
                    FB4BD:
                    $v["img"] = $v["image"];
                    goto EplTB;
                    EplTB:
                    K3dQS:
                    goto SYnY7;
                    SYnY7:
                }
                goto K0Sz_;
                xw3yr:
                $art = Db::name("ybsc_article")->where(["status" => 2, "type" => 1])->where("mch_id", $mch_id)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto zfngC;
                rHzp1:
            case "product_info":
                goto qac18;
                kE0tG:
                $this->assign("page", $art->render());
                goto ojqqD;
                qac18:
                $art = Db::name("ybsc_product")->where("mch_id", $mch_id)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto kE0tG;
                ojqqD:
                $art = json_decode(json_encode($art, true), true);
                goto bY8eP;
                YwgTM:
                $this->assign("list", $art);
                goto k91WD;
                kzj2V:
                foreach ($art as &$v) {
                    goto P1v37;
                    JF0Yh:
                    $v["img"] = $v["image"];
                    goto ONwNP;
                    ONwNP:
                    xJ89w:
                    goto uhQrf;
                    P1v37:
                    $v["name"] = $v["title"];
                    goto JF0Yh;
                    uhQrf:
                }
                goto ge4Zb;
                bY8eP:
                $art = $art["data"];
                goto kzj2V;
                k91WD:
                goto vtwX4;
                goto S2bSH;
                ge4Zb:
                nxbPQ:
                goto YwgTM;
                S2bSH:
            case "article":
                goto o87tG;
                o87tG:
                $art = Db::name("ybsc_article_class")->where("mch_id", $mch_id)->where("is_del", 1)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto OcMlA;
                UGvjl:
                foreach ($art as &$v) {
                    goto G8k6A;
                    G8k6A:
                    $v["id"] = $v["class_id"];
                    goto Pc_D2;
                    sQMFh:
                    yMtBf:
                    goto VGJRN;
                    Pc_D2:
                    $v["img"] = $v["class_img"];
                    goto sQMFh;
                    VGJRN:
                }
                goto KRTc3;
                hqsf4:
                $art = $art["data"];
                goto UGvjl;
                OcMlA:
                $this->assign("page", $art->render());
                goto mdtlS;
                KRTc3:
                DQUDV:
                goto MRcjv;
                mdtlS:
                $art = json_decode(json_encode($art, true), true);
                goto hqsf4;
                ROwMA:
                goto vtwX4;
                goto tC1Nu;
                MRcjv:
                $this->assign("list", $art);
                goto ROwMA;
                tC1Nu:
            case "images":
                goto LT1Az;
                f6uhH:
                goto vtwX4;
                goto l4jV6;
                QxN3F:
                $this->assign("list", $art);
                goto f6uhH;
                LT1Az:
                $art = Db::name("ybsc_images_group")->where("mch_id", $mch_id)->select();
                goto dsmY5;
                dsmY5:
                foreach ($art as $k => &$v) {
                    goto OSVvy;
                    O6yM1:
                    $v["id"] = $v["group_id"];
                    goto x5bY1;
                    W2BW2:
                    if ($img == '') {
                        goto zhaqJ;
                    }
                    goto GZ9oP;
                    iJLIp:
                    Uh3lT:
                    goto bwpNx;
                    JEgz9:
                    zhaqJ:
                    goto RaJU6;
                    x5bY1:
                    $v["name"] = $v["group_name"];
                    goto iJLIp;
                    UeChh:
                    goto uLUpA;
                    goto JEgz9;
                    acJgF:
                    uLUpA:
                    goto O6yM1;
                    OSVvy:
                    $img = Db::name("ybsc_images")->where("img_id", $v["group_cover"])->find();
                    goto W2BW2;
                    GZ9oP:
                    $v["img"] = $img["img_cover"];
                    goto UeChh;
                    RaJU6:
                    $v["img"] = "none";
                    goto acJgF;
                    bwpNx:
                }
                goto gAzrO;
                gAzrO:
                DuWTp:
                goto QxN3F;
                l4jV6:
            case "class_article":
                goto VEi6b;
                detIK:
                foreach ($art as &$v) {
                    goto eby3w;
                    eby3w:
                    $v["id"] = $v["class_id"];
                    goto YJAYH;
                    reXil:
                    xyuXE:
                    goto gbM3n;
                    YJAYH:
                    $v["img"] = $v["class_img"];
                    goto reXil;
                    gbM3n:
                }
                goto To62P;
                kwC8i:
                $this->assign("page", $art->render());
                goto GX7As;
                GX7As:
                $art = json_decode(json_encode($art, true), true);
                goto HSfWY;
                e4lLj:
                goto vtwX4;
                goto Yv5Ff;
                To62P:
                gcTVZ:
                goto OtRwG;
                VEi6b:
                $art = Db::name("ybsc_article_class")->where("mch_id", $mch_id)->where("is_del", 1)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto kwC8i;
                HSfWY:
                $art = $art["data"];
                goto detIK;
                OtRwG:
                $this->assign("list", $art);
                goto e4lLj;
                Yv5Ff:
            case "caregory":
                goto hkX80;
                wstzd:
                $this->assign("list", $art);
                goto YwZ9G;
                W2HAr:
                pZqFj:
                goto wstzd;
                tiXkV:
                foreach ($art as &$v) {
                    goto uvr21;
                    CiXPl:
                    $v["img"] = $v["cate_pic"];
                    goto D6yk2;
                    hTXNp:
                    $v["name"] = $v["cate_name"];
                    goto CiXPl;
                    uvr21:
                    $v["id"] = $v["cate_id"];
                    goto hTXNp;
                    D6yk2:
                    ODdxl:
                    goto y02Ga;
                    y02Ga:
                }
                goto W2HAr;
                LPre3:
                $art = json_decode(json_encode($art, true), true);
                goto WHrHj;
                YwZ9G:
                goto vtwX4;
                goto epSCr;
                KqQfx:
                $this->assign("page", $art->render());
                goto LPre3;
                hkX80:
                $art = Db::name("ybsc_goods_cate")->where("mch_id", $mch_id)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto KqQfx;
                WHrHj:
                $art = $art["data"];
                goto tiXkV;
                epSCr:
            case "product_class":
                goto LQExP;
                SKpF1:
                $this->assign("page", $art->render());
                goto lVNfC;
                R1Wdg:
                goto vtwX4;
                goto WFHyV;
                LQExP:
                $art = Db::name("ybsc_product_class")->where("mch_id", $mch_id)->order("sort asc")->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto SKpF1;
                sfcRc:
                ASRst:
                goto fWPBU;
                SKQMT:
                foreach ($art as &$v) {
                    goto M7uHh;
                    vTZ0O:
                    $v["name"] = $v["name"];
                    goto DIdOl;
                    DIdOl:
                    $v["img"] = $v["img"];
                    goto NbqUi;
                    M7uHh:
                    $v["id"] = $v["id"];
                    goto vTZ0O;
                    NbqUi:
                    WT9I2:
                    goto QRSXB;
                    QRSXB:
                }
                goto sfcRc;
                lVNfC:
                $art = json_decode(json_encode($art, true), true);
                goto qW3Mb;
                qW3Mb:
                $art = $art["data"];
                goto SKQMT;
                fWPBU:
                $this->assign("list", $art);
                goto R1Wdg;
                WFHyV:
            case "power":
                goto YYxCW;
                AGIj1:
                goto vtwX4;
                goto DePSJ;
                K4wIh:
                $this->assign("list", $art);
                goto AGIj1;
                YYxCW:
                $art = Db::name("ybsc_bus_tmpl")->where("is_del=1")->where("mch_id", $mch_id)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto EGyoa;
                EGyoa:
                $this->assign("page", $art->render());
                goto Kn7O1;
                xZXqT:
                $art = $art["data"];
                goto K4wIh;
                Kn7O1:
                $art = json_decode(json_encode($art, true), true);
                goto xZXqT;
                DePSJ:
            case "edit_form":
                goto nuyC4;
                Nx8Ze:
                goto vtwX4;
                goto a7IBk;
                wKoAM:
                $art = json_decode(json_encode($art, true), true);
                goto PcLQP;
                hYBuk:
                Xp1dx:
                goto yh9j3;
                nuyC4:
                $art = Db::name("ybsc_bus_form")->where("is_del=1")->order("create_time desc")->where("mch_id", $mch_id)->where("type", 1)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto TQ9Lg;
                xK26j:
                foreach ($art as &$v) {
                    $v["name"] = $v["title"];
                    Na6EZ:
                }
                goto hYBuk;
                yh9j3:
                $this->assign("list", $art);
                goto Nx8Ze;
                PcLQP:
                $art = $art["data"];
                goto xK26j;
                TQ9Lg:
                $this->assign("page", $art->render());
                goto wKoAM;
                a7IBk:
            case "applets":
                goto EWkUz;
                jyPPx:
                goto vtwX4;
                goto uKX88;
                enD7a:
                $this->assign("list", $art);
                goto CIknP;
                Otik2:
                $art = json_decode(json_encode($art, true), true);
                goto UV4pi;
                CIknP:
                $type_key = "2";
                goto jyPPx;
                EWkUz:
                $art = Db::name("ybsc_sapp")->where("mch_id", $mch_id)->field("id,sapp_name as name,appid,url as path,create_time")->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto ie1Ty;
                UV4pi:
                $art = $art["data"];
                goto enD7a;
                ie1Ty:
                $this->assign("page", $art->render());
                goto Otik2;
                uKX88:
            case "web_page":
                goto mU1j2;
                AHXPh:
                $art = $art["data"];
                goto mwLMh;
                U1qx9:
                $type_key = "3";
                goto oq706;
                MAimz:
                $this->assign("page", $art->render());
                goto aBfS7;
                oq706:
                goto vtwX4;
                goto KLg7Z;
                aBfS7:
                $art = json_decode(json_encode($art, true), true);
                goto AHXPh;
                mU1j2:
                $art = Db::name("ybsc_applink")->where("mch_id", $mch_id)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto MAimz;
                mwLMh:
                $this->assign("list", $art);
                goto U1qx9;
                KLg7Z:
            case "web_view":
                goto niiCp;
                IGaVc:
                $art = $art["data"];
                goto wzE4P;
                wzE4P:
                $this->assign("list", $art);
                goto sQ6ff;
                sQ6ff:
                $type_key = "3";
                goto YEgMa;
                wWDkB:
                $art = json_decode(json_encode($art, true), true);
                goto IGaVc;
                tAUxm:
                $this->assign("page", $art->render());
                goto wWDkB;
                YEgMa:
                goto vtwX4;
                goto n2MFp;
                niiCp:
                $art = Db::name("ybsc_applink_code")->where("mch_id", $mch_id)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto tAUxm;
                n2MFp:
            case "bargain_info":
                goto a01id;
                Mng4w:
                qMVF8:
                goto TCPL7;
                c9EG2:
                goto vtwX4;
                goto Xz6ix;
                oMmex:
                $art = Db::name("ybsc_bargain")->alias("b")->join("ybsc_images i", "i.img_id=b.bargain_picture")->where("b.mch_id", $mch_id)->where("b.bargain_type=1")->where("b.del=0")->whereTime("b.star_time", "<", $time)->whereTime("b.end_time", ">", $time)->field("b.*,i.img_cover")->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto Z2v0j;
                hrOEI:
                $art = $art["data"];
                goto U3TfQ;
                TCPL7:
                $this->assign("list", $art);
                goto c9EG2;
                a01id:
                $time = time();
                goto oMmex;
                U3TfQ:
                foreach ($art as &$v) {
                    goto f5vVz;
                    iFPvR:
                    $v["price"] = $v["original_price"];
                    goto sG6gP;
                    f5vVz:
                    $v["name"] = $v["bargain_name"];
                    goto tR2Mt;
                    tR2Mt:
                    $v["img"] = $v["img_cover"];
                    goto iFPvR;
                    sG6gP:
                    H5WDv:
                    goto wHhv9;
                    wHhv9:
                }
                goto Mng4w;
                Z2v0j:
                $this->assign("page", $art->render());
                goto p4FPQ;
                p4FPQ:
                $art = json_decode(json_encode($art, true), true);
                goto hrOEI;
                Xz6ix:
            case "pintuan_info":
                goto lME0a;
                nY4_G:
                $this->assign("page", $art->render());
                goto DaRhr;
                DaRhr:
                $art = json_decode(json_encode($art, true), true);
                goto gQPX_;
                FRlQO:
                foreach ($art as &$v) {
                    $v["img"] = $v["img_cover"];
                    eauf6:
                }
                goto GlVfA;
                gQPX_:
                $art = $art["data"];
                goto FRlQO;
                lME0a:
                $art = Db::name("ybsc_pt_goods")->alias("b")->join("ybsc_images i", "i.img_id=b.img")->where("b.mch_id", $mch_id)->where("b.isShow=1")->field("b.*,i.img_cover")->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto nY4_G;
                xb22M:
                goto vtwX4;
                goto nLq0S;
                Z0sYw:
                $this->assign("list", $art);
                goto xb22M;
                GlVfA:
                h9__J:
                goto Z0sYw;
                nLq0S:
            case "paycontent_info":
                goto BR4Yk;
                EfBfD:
                z_S69:
                goto rXhsI;
                a_hnK:
                $art = json_decode(json_encode($art, true), true);
                goto jSl5Y;
                BR4Yk:
                $art = Db::name("ybsc_paycontent")->where("mch_id", $mch_id)->where("status", 1)->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto lpDx8;
                rXhsI:
                $this->assign("list", $art);
                goto nRL8R;
                nRL8R:
                goto vtwX4;
                goto eSgU5;
                SS9Db:
                foreach ($art as &$v) {
                    goto h5HmH;
                    TgTtt:
                    o7aTr:
                    goto VMlAJ;
                    h5HmH:
                    $v["name"] = $v["title"];
                    goto JaLdH;
                    JaLdH:
                    $v["img"] = $v["image"];
                    goto TgTtt;
                    VMlAJ:
                }
                goto EfBfD;
                lpDx8:
                $this->assign("page", $art->render());
                goto a_hnK;
                jSl5Y:
                $art = $art["data"];
                goto SS9Db;
                eSgU5:
            case "my_order":
                goto P9WNq;
                t0bRy:
                goto vtwX4;
                goto Td6ie;
                P9WNq:
                $art = array(["name" => "全部", "id" => ''], ["name" => "待付款", "id" => "0"], ["name" => "待发货", "id" => "1"], ["name" => "待收货", "id" => "2"], ["name" => "已完成", "id" => "3"], ["name" => "退换货", "id" => "4"]);
                goto bymL2;
                bymL2:
                $this->assign("list", $art);
                goto t0bRy;
                Td6ie:
            case "miaosha":
                goto p9_GC;
                twIKa:
                bLf_X:
                goto Io6nl;
                i4pyA:
                goto vtwX4;
                goto C84gy;
                p9_GC:
                $art = Db::name("ybsc_activity")->where(["mch_id" => $this->bus_id, "type" => 1, "is_del" => 2, "status" => 1])->paginate(15, false, ["query" => ["s" => $url, "path" => $path, "type" => $type, "mod_id" => 1, "this_id" => $this_id]]);
                goto ruLuR;
                m0a_j:
                foreach ($art as &$v) {
                    goto HCFim;
                    Vwhza:
                    V3C4A:
                    goto k7cD5;
                    HCFim:
                    $v["price"] = $v["nprice"];
                    goto c3JYp;
                    c3JYp:
                    $v["img"] = $v["pic"];
                    goto Vwhza;
                    k7cD5:
                }
                goto twIKa;
                ruLuR:
                $this->assign("page", $art->render());
                goto KgWEE;
                Io6nl:
                $this->assign("list", $art);
                goto i4pyA;
                KgWEE:
                $art = json_decode(json_encode($art, true), true);
                goto EPbq_;
                EPbq_:
                $art = $art["data"];
                goto m0a_j;
                C84gy:
        }
        goto Jyx_o;
        WTI3V:
        $this->assign("this_id", $this_id);
        goto xTE7x;
        Jyx_o:
        j6Z4H:
        goto BQkio;
        Cgcun:
        $new = input("param.new", "0");
        goto nogm_;
        JHrIF:
        $mch_id = isset($this->bus_id) ? $this->bus_id : "0";
        goto X5ovr;
        X5ovr:
        $type = input("param.type");
        goto uwexw;
        nogm_:
        $url = Db::name("ybsc_tmpl_pages")->where("mod_id", 1)->where("menu", $type)->find();
        goto n3oYI;
        BQkio:
        vtwX4:
        goto OAPrd;
        Lqhm8:
        $url = explode("&", $url[1]);
        goto Tzz6n;
        yQvlr:
        $path = input("param.path");
        goto Cgcun;
        As0Ll:
    }
    public function add_class_article()
    {
        goto N4eaJ;
        W1n46:
        return AjaxReturn(1);
        goto qqup_;
        jAlbJ:
        foreach ($arr as $a) {
            Db::name("ybsc_article_class")->where("class_id", $a)->where("mch_id", $this->bus_id)->update(["ident_class" => "class_article_" . $this_id]);
            BQhcM:
        }
        goto LeRyv;
        N4eaJ:
        $str = input("param.class_str", '');
        goto XeNYF;
        XeNYF:
        $this_id = input("param.this_id", '') + 1;
        goto wX54d;
        LeRyv:
        EHVyO:
        goto W1n46;
        WbgpE:
        Db::name("ybsc_article_class")->where("mch_id", $this->bus_id)->update(["ident_class" => '']);
        goto jAlbJ;
        wX54d:
        $arr = explode(",", $str);
        goto WbgpE;
        qqup_:
    }
    public function find_default()
    {
        goto oz2rc;
        XxLnu:
        aA4Ks:
        goto YWz3B;
        cgIWf:
        $data["tpl"] = 1;
        goto NEhC6;
        L0yb2:
        $data = json_decode($mch_tpl["values"], true);
        goto cgIWf;
        vJWxA:
        $_W = $_SESSION["we7_w"];
        goto yTfD6;
        W6cXl:
        if ($mch_tpl["values"] == '') {
            goto aA4Ks;
        }
        goto L0yb2;
        NEhC6:
        goto Fl6lq;
        goto XxLnu;
        oz2rc:
        $mch_tpl = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->find();
        goto W6cXl;
        jVM_a:
        return $data;
        goto mF7Ru;
        QcWjh:
        Fl6lq:
        goto jVM_a;
        yTfD6:
        $str = "{\n    \"tabBar\": {\n      \"name\":\"商城\",\n     \"color\": \"#8b8b8b\",\n     \"selectedColor\": \"#e02e24\",\n    \"background\":\"#FF1493\",\n    \"backgroundTextStyle\":\"#ffffff\",\n    \"backgroundColor\": \"#ffffff\",\n        \"list\": [\n            {\n                \"key\": \"index\",\n                \"imgurl\": \"/yb_shop/pages/index/index\",\n                \"name\": \"首页\",\n                \"page_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/gray_home.png\",\n                \"page_select_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/red_home.png\"\n            },\n            {\n                \"key\": \"find\",\n                \"imgurl\": \"/yb_shop/pages/find/index\",\n                \"name\": \"发现\",\n                \"page_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/gray_find.png\",\n                \"page_select_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/red_find.png\"\n            },\n            {\n                \"key\": \"product\",\n                \"imgurl\": \"/yb_shop/pages/product/index\",\n                \"name\": \"商品\",\n                \"page_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/gray_cate.png\",\n                \"page_select_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/red_cate.png\"\n            },\n            {\n                \"key\": \"cart\",\n                \"imgurl\": \"/yb_shop/pages/member/cart/index\",\n                \"name\": \"购物车\",\n                \"page_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/gray_cart.png\",\n                \"page_select_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/red_cart.png\"\n            },\n            {\n                \"key\": \"member_index\",\n                \"imgurl\": \"/yb_shop/pages/member/index/index\",\n                \"name\": \"会员中心\",\n                \"page_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/gray_people.png\",\n                \"page_select_icon\": \"" . $_W["siteroot"] . "addons/yb_shop/core/public/icon/red_people.png\"\n            }\n        ]\n    }\n}";
        goto pEkke;
        YWz3B:
        $data["tpl"] = 0;
        goto beNr3;
        pEkke:
        $data = $str;
        goto QcWjh;
        beNr3:
        global $_W;
        goto vJWxA;
        mF7Ru:
    }
    public function find_my_default()
    {
        goto wT03y;
        wT03y:
        $my_mode = request()->param("my_mode");
        goto MxWf9;
        xeY09:
        return $data;
        goto zkh0w;
        xct4S:
        $data["tpl"] = 1;
        goto xeY09;
        vs82S:
        $data = json_decode($mch_tpl["style_value"], true);
        goto xct4S;
        MxWf9:
        $mch_tpl = Db::name("ybsc_user_tmpl_box")->where("id", $my_mode)->find();
        goto vs82S;
        zkh0w:
    }
    public function select_icon()
    {
        goto NMwtJ;
        Uc_0a:
        $this->assign("tmpl_list", $tmpl_list);
        goto l29dj;
        l29dj:
        $this->assign("url", IMG_URL);
        goto iUeqz;
        J1P9h:
        $tmpl_list = Db::name("ybsc_tmpl_icon")->where("tmpl_id", $mod_id)->select();
        goto gOdoI;
        iUeqz:
        $this->assign("linenum", $linenum);
        goto fEtT1;
        NMwtJ:
        $linenum = input("param.linenum");
        goto AqVlJ;
        fEtT1:
        return view("menu/select_icon");
        goto a2EhE;
        AqVlJ:
        $mod_id = input("param.mod_id");
        goto J1P9h;
        gOdoI:
        $this->assign("mod_id", $mod_id);
        goto Uc_0a;
        a2EhE:
    }
    public function selece_this_not()
    {
        goto sD5Jy;
        N8kw2:
        $url = Db::name("ybsc_tmpl_pages")->where("mod_id", 1)->where("menu", $type)->select();
        goto nbWZo;
        nbWZo:
        $data["list"] = $url;
        goto FLpVb;
        sD5Jy:
        $type = input("param.type");
        goto Fqxau;
        nro9F:
        exit(json_encode($data, true));
        goto GMH0A;
        eK2fi:
        $this_id = input("param.this_id");
        goto zVItD;
        ucmgh:
        $data["this_id"] = $this_id;
        goto nro9F;
        zVItD:
        $menu = Db::name("ybsc_tmpl_menu")->where("type", $type)->find();
        goto N8kw2;
        FLpVb:
        $data["name"] = $menu["text"];
        goto ucmgh;
        Fqxau:
        $mod_id = input("param.mod_id");
        goto eK2fi;
        GMH0A:
    }
    public function select_mod_all()
    {
        return view("menu/select_mod_all");
    }
    public function di_select_mod_all_goods()
    {
        goto L2vg1;
        AFU87:
        return view("menu/di_select_mod_all");
        goto zxVK7;
        L2vg1:
        $this_id = input("param.this_id");
        goto dl0Et;
        dl0Et:
        $this->assign("this_id", $this_id);
        goto AFU87;
        zxVK7:
    }
    public function di_select_mod_all_article()
    {
        goto gfrdC;
        gfrdC:
        $this_id = input("param.this_id");
        goto aR6s3;
        oK2xY:
        return view("menu/di_select_mod_all_article");
        goto ksZfM;
        aR6s3:
        $this->assign("this_id", $this_id);
        goto oK2xY;
        ksZfM:
    }
    public function get_view_select()
    {
        goto Os6Kt;
        sEYXv:
        $url = request()->query();
        goto wZM_R;
        L1ph7:
        $article_class = Db::name("ybsc_bus_tmpl")->where("mch_id", $this->bus_id)->where("is_del=1")->order("create_time desc")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto yLbo7;
        QUWHl:
        return view("menu/di_images_groupinfo");
        goto O3IQN;
        kcjTV:
        $images_group = Db::name("ybsc_images_group")->alias("g")->join("ybsc_images m", "g.group_cover=m.img_id", "left")->where("g.mch_id", $this->bus_id)->field("g.*,m.img_cover")->order("g.create_time desc")->where("g.is_default=0")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto xMN24;
        qXIK6:
        if (!($type == "form")) {
            goto Bqq47;
        }
        goto yXbYO;
        YDkXN:
        $this->assign("article_class", $article_class);
        goto T_l4u;
        Brs55:
        c1E2g:
        goto YfsyX;
        jLNto:
        $sapp = Db::name("ybsc_sapp")->where("mch_id", $this->bus_id)->order("id desc")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto KkK6l;
        wZM_R:
        $url = explode("=/", $url);
        goto g_pF7;
        xMN24:
        $this->assign("images_group", $images_group);
        goto QUWHl;
        YfsyX:
        if (!($type == "image")) {
            goto A_88C;
        }
        goto kcjTV;
        BsaBK:
        return view("menu/di_goods_detail");
        goto SS3Pe;
        g_pF7:
        $url = explode("&", $url[1]);
        goto n5w7d;
        T_l4u:
        return view("menu/di_article_class");
        goto WhYuu;
        Jqb4S:
        $this->assign("article_class", $article_class);
        goto ZqVmv;
        Os6Kt:
        $this_id = input("param.this_id");
        goto TW3v8;
        gDhD2:
        return view("menu/di_sapp");
        goto BE_lU;
        ZqVmv:
        return view("menu/di_from");
        goto xGSVj;
        yXbYO:
        $article_class = Db::name("ybsc_bus_form")->where("mch_id", $this->bus_id)->where("is_del=1")->order("create_time desc")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto Jqb4S;
        zgAve:
        byS7u:
        goto tKug8;
        KkK6l:
        $this->assign("sapp", $sapp);
        goto gDhD2;
        aKCp4:
        $find_info = Db::name("ybsc_article")->where("status=2")->where("mch_id", $this->bus_id)->order("create_time desc")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto MbwSL;
        n5w7d:
        $url = "/" . $url[0];
        goto IBnhP;
        cqJ2_:
        $this->assign("this_id", $this_id);
        goto Fqlc0;
        WhYuu:
        cbOlY:
        goto iqwnN;
        yLbo7:
        $this->assign("article_class", $article_class);
        goto KM4hS;
        BE_lU:
        Vv0z3:
        goto VhXBV;
        Ygg6j:
        if (!($type == "applets")) {
            goto Vv0z3;
        }
        goto jLNto;
        FZ559:
        KUhJJ:
        goto qXIK6;
        jqtzm:
        $sapp = Db::name("ybsc_applink")->where("mch_id", $this->bus_id)->order("id desc")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto mEWIy;
        SS3Pe:
        Qqd2A:
        goto yvBaF;
        KPswL:
        $goods = Db::name("ybsc_goods")->alias("g")->join("ybsc_images m", "g.images=m.img_id")->where("g.is_del=0")->where("g.mch_id", $this->bus_id)->order("g.create_time desc")->field("g.*,m.img_cover")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto RdSGe;
        RdSGe:
        $this->assign("goods", $goods);
        goto BsaBK;
        O3IQN:
        A_88C:
        goto G2ss0;
        DHnPC:
        return view("menu/di_web_page");
        goto zgAve;
        KM4hS:
        return view("menu/di_power_class");
        goto FZ559;
        ba1QZ:
        return view("menu/di_find_info");
        goto Brs55;
        IBnhP:
        if (!($type == "goods_detail")) {
            goto Qqd2A;
        }
        goto KPswL;
        MbwSL:
        $this->assign("find_info", $find_info);
        goto ba1QZ;
        G2ss0:
        if (!($type == "find")) {
            goto cbOlY;
        }
        goto uHV7F;
        iqwnN:
        if (!($type == "power")) {
            goto KUhJJ;
        }
        goto L1ph7;
        VhXBV:
        if (!($type == "web_page")) {
            goto byS7u;
        }
        goto jqtzm;
        Fqlc0:
        $this->assign("type", $type);
        goto sEYXv;
        TW3v8:
        $type = input("param.type");
        goto cqJ2_;
        yvBaF:
        if (!($type == "find_info")) {
            goto c1E2g;
        }
        goto aKCp4;
        uHV7F:
        $article_class = Db::name("ybsc_article_class")->where("is_del", 1)->where("mch_id", $this->bus_id)->order("create_time desc")->paginate(15, false, ["query" => ["s" => $url, "type" => $type, "this_id" => $this_id]]);
        goto YDkXN;
        mEWIy:
        $this->assign("sapp", $sapp);
        goto DHnPC;
        xGSVj:
        Bqq47:
        goto Ygg6j;
        tKug8:
    }
    public function select_menu()
    {
        goto T4GOf;
        HSCfK:
        foreach ($page as $key => $value) {
            goto emwf2;
            emwf2:
            foreach ($menu as $k => $v) {
                goto w1RWS;
                M5U32:
                $data[$k] = $v;
                goto qr9Fn;
                w1RWS:
                if (!($value["menu"] == $v["type"])) {
                    goto zfdQy;
                }
                goto M5U32;
                qr9Fn:
                zfdQy:
                goto JNVtN;
                JNVtN:
                psZHi:
                goto LTCxV;
                LTCxV:
            }
            goto xbFfR;
            GliJK:
            Pl_DN:
            goto gQlhg;
            xbFfR:
            EkDCu:
            goto GliJK;
            gQlhg:
        }
        goto eC1En;
        LXt3G:
        return view("menu/select_menu_test");
        goto THX3v;
        BamVA:
        $page = Db::name("ybsc_tmpl_pages")->where("mod_id", 1)->select();
        goto gJXE_;
        T4GOf:
        $this_id = input("param.select_id");
        goto AR98w;
        ENUFm:
        $this->assign("this_id", $this_id);
        goto A5RAb;
        eC1En:
        eU_KY:
        goto ENUFm;
        mTihS:
        $this->assign("menu", $data);
        goto LXt3G;
        AR98w:
        $mod_id = input("param.mod_id");
        goto AlPK6;
        AlPK6:
        $menu = Db::name("ybsc_tmpl_menu")->select();
        goto BamVA;
        gJXE_:
        $data = array();
        goto HSCfK;
        A5RAb:
        $this->assign("mod_id", $mod_id);
        goto mTihS;
        THX3v:
    }
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
    public function index_module()
    {
        goto OcCs1;
        RdXV5:
        unset($index_list["goodlist"]);
        goto RhO56;
        fBWRM:
        $item["lat"] = isset($pages_di[$i]["lat"]) ? $pages_di[$i]["lat"] : '';
        goto aPDv9;
        EkAi8:
        DdUYU:
        goto K8FFb;
        d7gYw:
        if ($val) {
            goto MxzP3;
        }
        goto A05cY;
        bDbKe:
        MxzP3:
        goto CtgG6;
        K8FFb:
        if (!($i < count($pages_di))) {
            goto fSl0a;
        }
        goto cC9k_;
        DWl21:
        unset($index_list["imgtextlist"]);
        goto agYqK;
        UMArK:
        if ($mch_index_mod) {
            goto a0AhC;
        }
        goto tkvuo;
        Nthxl:
        $win_color = input("param.win_color") == '' ? "#ffffff" : input("param.win_color");
        goto PBlC5;
        LKPGS:
        unset($index_list["add_h"]);
        goto DgqwP;
        SqrmN:
        $background = input("param.DhColor_color") == '' ? "#df2f20" : input("param.DhColor_color");
        goto MtkW_;
        Ksnk0:
        $goods_cate = Db::name("ybsc_goods_cate")->where("is_visible=1")->where("mch_id", $this->bus_id)->select();
        goto IxeLX;
        InWiq:
        $val = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->find();
        goto d7gYw;
        z5jdc:
        $selectedColor = input("param.iconColorSet_color") == '' ? "#e02e24" : input("param.iconColorSet_color");
        goto IrhAM;
        O02K3:
        $data = array();
        goto NGOW3;
        nGaOv:
        $item["path"] = isset($pages_di[$i]["path"]) ? $pages_di[$i]["path"] : '';
        goto PwMKa;
        lDOX_:
        $backgroundColor = input("param.pureBorderColor_color") == '' ? "#ffffff" : input("param.pureBorderColor_color");
        goto Nthxl;
        BIh18:
        $item["title"] = $pages_di[$i]["name"];
        goto lxebx;
        sXhsL:
        unset($index_list["edit_piclist"]);
        goto UeJx6;
        TOLje:
        $ext = array("tabBar" => array("name" => $name, "background" => $background, "backgroundTextStyle" => $backgroundTextStyle, "selectedColor" => $selectedColor, "color" => $color, "backgroundColor" => $backgroundColor, "winColor" => $win_color, "winImg" => $win_img, "openImg" => $openImg, "openImgUrl" => $openImgUrl, "openImgUrlName" => $openImgUrlName, "IsDiDis" => $is_di_dis, "list" => $data));
        goto InWiq;
        UlYAS:
        unset($index_list["this_type"]);
        goto j0I59;
        oasw0:
        $item["ident"] = isset($pages_di[$i]["ident"]) ? $pages_di[$i]["ident"] : '';
        goto ec5td;
        NGOW3:
        $i = 0;
        goto EkAi8;
        DgqwP:
        unset($index_list["add_top"]);
        goto sYNXW;
        IxeLX:
        $this->assign("goods_cate", $goods_cate);
        goto Bwiwc;
        aPDv9:
        $item["lng"] = isset($pages_di[$i]["lng"]) ? $pages_di[$i]["lng"] : '';
        goto fEtXW;
        Spxos:
        unset($index_list["fight_group_list"]);
        goto RdXV5;
        z39oR:
        TIDBy:
        goto kDLpF;
        IrhAM:
        $color = input("param.iconTitColor_color") == '' ? "#8b8b8b" : input("param.iconTitColor_color");
        goto lDOX_;
        kDLpF:
        $i++;
        goto c8dCy;
        cjnKt:
        $index_list = json_decode(input("param.index_list"), true);
        goto ycoee;
        iejAR:
        $openImgUrlName = input("param.openImgUrlName") == '' ? '' : input("param.openImgUrlName");
        goto HMNU_;
        c8dCy:
        goto DdUYU;
        goto jrdSR;
        Ozulm:
        a0AhC:
        goto xyncn;
        TN4Ba:
        $is_di_dis = input("param.is_di_dis") == "false" ? false : true;
        goto TOLje;
        Pngqv:
        $this->assign("article_class", $article_class);
        goto vq1_y;
        A05cY:
        $res = Db::name("ybsc_user_tmpl")->insert(["create_time" => 0, "tmpl_id" => 1, "template_id" => 1, "mch_id" => $this->bus_id, "values" => json_encode($ext)]);
        goto SZZy9;
        bHCR4:
        io4xu:
        goto Ksnk0;
        xyncn:
        $res = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->inc("create_time")->update(["index_values" => json_encode($index_list)]);
        goto SxR2_;
        EABp0:
        $item["page_icon"] = $pages_di[$i]["page_icon"];
        goto bUCgF;
        ujCnu:
        unset($index_list["quartet_list"]);
        goto Spxos;
        nBz1p:
        $data[] = $item;
        goto z39oR;
        a1a21:
        $openImg = input("param.openImg") == '' ? '' : input("param.openImg");
        goto iejAR;
        UeJx6:
        unset($index_list["floaticon"]);
        goto K_4uq;
        zJ9s2:
        $item["key"] = $pages_di[$i]["key"];
        goto fBWRM;
        OcCs1:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto io4xu;
        }
        goto cjnKt;
        SZZy9:
        goto JnLzQ;
        goto bDbKe;
        cC9k_:
        $item = array();
        goto zJ9s2;
        SxR2_:
        mwE1M:
        goto yqC4q;
        ReWey:
        unset($index_list["advert"]);
        goto LKPGS;
        ycoee:
        unset($index_list["banner"]);
        goto x0K13;
        ec5td:
        $item["name"] = $pages_di[$i]["name"];
        goto BIh18;
        QLzgC:
        return view("menu/index_module");
        goto LrQ_Y;
        RhO56:
        unset($index_list["edit_button"]);
        goto sXhsL;
        CtgG6:
        $res = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->inc("create_time")->update(["tmpl_id" => 1, "template_id" => 1, "values" => json_encode($ext)]);
        goto ZTitM;
        j0I59:
        unset($index_list["columntitle"]);
        goto DWl21;
        u2D7G:
        peVlo:
        goto CBygj;
        nCQUt:
        $this->assign("my_mod", request()->param("my_mod", -1));
        goto QLzgC;
        ZTitM:
        JnLzQ:
        goto du3je;
        HMNU_:
        $openImgUrl = input("param.openImgUrl") == '' ? '' : input("param.openImgUrl");
        goto TN4Ba;
        CBygj:
        $mch_index_mod = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->find();
        goto UMArK;
        bUCgF:
        $item["page_select_icon"] = $pages_di[$i]["page_select_icon"];
        goto nBz1p;
        LImqW:
        $name = input("param.wx_name", "小程序名称");
        goto SqrmN;
        du3je:
        return AjaxReturn($res);
        goto bHCR4;
        fEtXW:
        $item["appid"] = isset($pages_di[$i]["appid"]) ? $pages_di[$i]["appid"] : '';
        goto nGaOv;
        tkvuo:
        $res = Db::name("ybsc_user_tmpl")->insert(["mch_id" => $this->bus_id, "index_values" => json_encode($index_list), "create_time" => time()]);
        goto nXu3N;
        lxebx:
        $item["name_this"] = $pages_di[$i]["name_this"];
        goto EABp0;
        agYqK:
        unset($index_list["tripartite_list"]);
        goto ujCnu;
        sYNXW:
        unset($index_list["now_index"]);
        goto UlYAS;
        jrdSR:
        fSl0a:
        goto LImqW;
        eWEV0:
        $this->assign("wn_id", request()->param("wn_id", 0));
        goto nCQUt;
        K_4uq:
        foreach ($index_list["all_data"] as $k => $v) {
            goto D3dBH;
            ibZ_5:
            goto G0zRV;
            goto qvSTt;
            mBpwX:
            if (empty($v["list"])) {
                goto Z0WG_;
            }
            goto I6jgu;
            yqp67:
            rYg1b:
            goto edv3X;
            jPaX5:
            FFz4A:
            goto w3BMD;
            xb_cN:
            gQbRH:
            goto DOzcA;
            LQaAx:
            if (!($index_list["all_data"][$k]["video_type"] == 1)) {
                goto yptHz;
            }
            goto B_jVX;
            qvSTt:
            SIOmN:
            goto BkhSa;
            BkhSa:
            if (!($v["type"] == "edit_video")) {
                goto rYg1b;
            }
            goto zfygg;
            m_GEy:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto jPaX5;
            OFGo0:
            goto QWns0;
            goto nrHlG;
            eDCOx:
            Z0WG_:
            goto ibZ_5;
            w3BMD:
            goto gQbRH;
            goto cWxz3;
            nrHlG:
            wwjp9:
            goto J3fQE;
            l5ggg:
            if (!($v["type"] == "store_door")) {
                goto FFz4A;
            }
            goto m_GEy;
            ljczR:
            $rsd = $this->get_tx_video($index_list["all_data"][$k]["video_url"]);
            goto qsURg;
            D3dBH:
            if ($v["type"] == "announcement" || $v["type"] == "message_board" || $v["type"] == "store_door" || $v["type"] == "comment" || $v["type"] == "edit_video" || $v["type"] == "edit_music" || $v["type"] == "search" || $v["type"] == "blank" || $v["type"] == "headline" || $v["type"] == "line" || $v["type"] == "position" || $v["type"] == "rich_text") {
                goto SIOmN;
            }
            goto mBpwX;
            dGldP:
            yptHz:
            goto yqp67;
            fW7ul:
            m2CKT:
            goto dGldP;
            ow2zt:
            mhZRq:
            goto eDCOx;
            qsURg:
            if ($rsd["code"] == 0) {
                goto wwjp9;
            }
            goto rfPIK;
            J3fQE:
            $index_list["all_data"][$k]["vip_url"] = $rsd["real_url"];
            goto HpdSK;
            rfPIK:
            $index_list["all_data"][$k]["vip_url"] = $index_list["all_data"][$k]["video_url"];
            goto OFGo0;
            cWxz3:
            G0zRV:
            goto xb_cN;
            RWcT8:
            $index_list["all_data"][$k]["vip_url"] = $index_list["all_data"][$k]["video_url"];
            goto tzDhY;
            cCwF8:
            BRe6o:
            goto l5ggg;
            I6jgu:
            foreach ($v["list"] as $key => $value) {
                goto aaBXs;
                ucX3y:
                NItso:
                goto mYOPN;
                VSJXw:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto TsA_T;
                jYrd7:
                goto qOBP3;
                goto S2MMS;
                BiPmG:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto QvkEw;
                rEtwp:
                OIP_A:
                goto OYHzv;
                ZEvQV:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto jYrd7;
                QvkEw:
                goto zAD2_;
                goto z7H_D;
                z7H_D:
                ZFfMr:
                goto UkByu;
                fCPS6:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto XTlGe;
                }
                goto ZEvQV;
                UkByu:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto L1MK1;
                aaBXs:
                if (!empty($value["imgurl"])) {
                    goto OIP_A;
                }
                goto fCPS6;
                Zmx5Y:
                goto vwRsK;
                goto rEtwp;
                OYHzv:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto ZFfMr;
                }
                goto BiPmG;
                L1MK1:
                zAD2_:
                goto cyP2f;
                cyP2f:
                vwRsK:
                goto ucX3y;
                TsA_T:
                qOBP3:
                goto Zmx5Y;
                S2MMS:
                XTlGe:
                goto VSJXw;
                mYOPN:
            }
            goto ow2zt;
            wblui:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto cCwF8;
            zfygg:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto LQaAx;
            HpdSK:
            QWns0:
            goto fW7ul;
            B_jVX:
            if ($index_list["all_data"][$k]["video_type"] == 1) {
                goto PSVgq;
            }
            goto RWcT8;
            BYfWJ:
            PSVgq:
            goto ljczR;
            tzDhY:
            goto m2CKT;
            goto BYfWJ;
            edv3X:
            if (!($v["type"] == "edit_music")) {
                goto BRe6o;
            }
            goto wblui;
            DOzcA:
        }
        goto u2D7G;
        nXu3N:
        goto mwE1M;
        goto Ozulm;
        PwMKa:
        $item["phone"] = isset($pages_di[$i]["phone"]) ? $pages_di[$i]["phone"] : '';
        goto syU76;
        Bwiwc:
        $article_class = Db::name("ybsc_article_class")->where("is_del=1")->where("mch_id", $this->bus_id)->select();
        goto Pngqv;
        x0K13:
        unset($index_list["catenav"]);
        goto ReWey;
        MtkW_:
        $backgroundTextStyle = input("param.BtColor_color") == '' ? "#ffffff" : input("param.BtColor_color");
        goto z5jdc;
        vq1_y:
        $this->assign("wn", request()->param("wn", -1));
        goto eWEV0;
        syU76:
        $item["imgurl"] = isset($pages_di[$i]["imgurl"]) ? $pages_di[$i]["imgurl"] : '';
        goto oasw0;
        PBlC5:
        $win_img = input("param.win_img") == '' ? '' : input("param.win_img");
        goto a1a21;
        yqC4q:
        $pages_di = json_decode(input("param.menu_list"), true);
        goto O02K3;
        LrQ_Y:
    }
    public function menu_select()
    {
        goto nvZrO;
        F717h:
        if (!(!$isadmin || $founder_groupid == 2)) {
            goto cq20d;
        }
        goto o98TW;
        KVFmn:
        J5Zxq:
        goto jLIrQ;
        zUN9s:
        foreach ($data as $item) {
            goto OYERp;
            OYERp:
            if (!(isset($item["role_id"]) && !in_array($item["role_id"], $role_ids))) {
                goto MvIls;
            }
            goto nmuIC;
            nmuIC:
            goto Du_qj;
            goto yTNcH;
            Um5Tl:
            $arr[] = $item;
            goto SVm7e;
            SVm7e:
            Du_qj:
            goto xaOle;
            yTNcH:
            MvIls:
            goto Um5Tl;
            xaOle:
        }
        goto eBZuO;
        Oi9QQ:
        $data = $this->select_page;
        goto JqleV;
        rLMEi:
        $data = $this->select_page_pt;
        goto YLzwh;
        HN1iu:
        $index = input("param.index");
        goto Oi9QQ;
        Apt9L:
        $role_id = Db::name("ybsc_user_permission")->alias("p")->join("ybsc_user_role r", "p.role_id = r.role_id")->field("r.module_id_array")->where(["p.user_id" => $wq_uid])->find();
        goto shfKb;
        DwRy0:
        if (!($type == "product_list")) {
            goto J5Zxq;
        }
        goto zCsLt;
        FLUvc:
        StRs6:
        goto Vd7AV;
        CJ1ej:
        x2sxH:
        goto x565M;
        hqe8o:
        goto StRs6;
        goto Rtw5n;
        o98TW:
        $wq_uid = $_SESSION["we7_w"]["user"]["uid"];
        goto Apt9L;
        YRZFr:
        $data = $this->select_page_article_list;
        goto Ec9_N;
        orqKy:
        $data = $this->select_page_ms;
        goto PjkhJ;
        y5Izs:
        $founder_groupid = $_SESSION["we7_w"]["user"]["founder_groupid"];
        goto F717h;
        eBZuO:
        fDf76:
        goto fwdH8;
        x565M:
        cq20d:
        goto hqe8o;
        jLIrQ:
        if (!($type == "article_list")) {
            goto pAU_4;
        }
        goto YRZFr;
        w_zhx:
        if (!($type == "pintuan")) {
            goto va0yy;
        }
        goto rLMEi;
        PjkhJ:
        nfaZ8:
        goto PDOhW;
        CnMlt:
        $arr = array();
        goto zUN9s;
        RSbm0:
        $role_ids = explode(",", $role_id["module_id_array"]);
        goto CnMlt;
        jRehv:
        $this->assign("type", $type);
        goto pnGR8;
        XWpe6:
        if ($type == "tabbar" && $index == 0) {
            goto lnX3C;
        }
        goto Cra7q;
        Ptnzp:
        $data = $data;
        goto FLUvc;
        u19Pi:
        ShShb:
        goto w_zhx;
        Ec9_N:
        pAU_4:
        goto XWpe6;
        zCsLt:
        $data = $this->select_page_product_list;
        goto KVFmn;
        shfKb:
        if (empty($role_id)) {
            goto x2sxH;
        }
        goto RSbm0;
        YLzwh:
        va0yy:
        goto DwRy0;
        nvZrO:
        $type = input("param.type");
        goto HN1iu;
        Z9py6:
        return view("menu/menu_select");
        goto rxS2N;
        gEF2l:
        $data = $this->select_page_kj;
        goto u19Pi;
        Cra7q:
        $isadmin = $_SESSION["we7_w"]["isfounder"];
        goto y5Izs;
        Rtw5n:
        lnX3C:
        goto Ptnzp;
        pnGR8:
        $this->assign("index", $index);
        goto Z9py6;
        Vd7AV:
        $this->assign("menu", $data);
        goto jRehv;
        PDOhW:
        if (!($type == "kanjia")) {
            goto ShShb;
        }
        goto gEF2l;
        fwdH8:
        $data = $arr;
        goto CJ1ej;
        JqleV:
        if (!($type == "miaosha")) {
            goto nfaZ8;
        }
        goto orqKy;
        rxS2N:
    }
    public function index_select_goods()
    {
        goto J0n2X;
        WYwax:
        $this->assign("type", $type);
        goto muptO;
        J0n2X:
        $this_id = input("param.select_id");
        goto WLoMQ;
        MHxs3:
        $this->assign("this_id", $this_id);
        goto xIbVi;
        trtnx:
        $url = explode("=/", $url);
        goto b7Fps;
        bm3VA:
        $new = input("param.new", "0");
        goto KcR4Z;
        WLoMQ:
        $url = Db::name("ybsc_tmpl_pages")->where("mod_id", 1)->where("menu", "goods")->find();
        goto ZLP_p;
        EmEr1:
        $this->assign("page", $art->render());
        goto bm3VA;
        ZLP_p:
        $this->assign("url", $url);
        goto MHxs3;
        b7Fps:
        $url = explode("&", $url[1]);
        goto Z2heC;
        xIbVi:
        $type = input("param.type");
        goto WYwax;
        OtT0I:
        return view("menu/goods_test");
        goto QZ0gA;
        KcR4Z:
        $this->assign("new", $new);
        goto OtT0I;
        LrZAP:
        $art = Db::name("ybsc_goods")->alias("g")->join("ybsc_images m", "m.img_id=g.images")->where("g.mch_id", $this->bus_id)->where("g.is_del", "0")->field("g.goods_id,g.create_time,g.goods_name,g.price,g.introduction,m.img_cover")->order("g.create_time desc")->paginate(15, false, ["query" => ["s" => $url, "select_id" => $this_id, "type" => $type]]);
        goto V9Rlk;
        Z2heC:
        $url = "/" . $url[0];
        goto LrZAP;
        muptO:
        $url = request()->query();
        goto trtnx;
        V9Rlk:
        $this->assign("goods", $art);
        goto EmEr1;
        QZ0gA:
    }
    public function index_select_article()
    {
        goto rWD6k;
        Q7Zyx:
        $page = $art->render();
        goto nOhum;
        A80uY:
        $this->assign("this_id", $this_id);
        goto nE3IT;
        tRihV:
        $art = Db::name("ybsc_article")->where("status", 2)->where("mch_id", $this->bus_id)->order("is_top", "desc")->order("create_time desc")->paginate(15, false, ["query" => ["s" => $url1, "select_id" => $this_id]]);
        goto Q7Zyx;
        ffFsS:
        $this->assign("new", $new);
        goto xSOJX;
        rWD6k:
        $this_id = input("param.select_id");
        goto S1Ifg;
        nE3IT:
        $this->assign("article", $art);
        goto RS0rK;
        RS0rK:
        return view("menu/index_article");
        goto Rmzi0;
        GoBY0:
        $new = input("param.new", "0");
        goto ffFsS;
        SaIzE:
        $this->assign("page", $page);
        goto A80uY;
        YowvU:
        $url1 = "/" . $url1[0];
        goto tRihV;
        xSOJX:
        $this->assign("url", $url);
        goto SaIzE;
        JpG5s:
        $url1 = explode("&", $url1[1]);
        goto YowvU;
        S1Ifg:
        $url1 = request()->query();
        goto sGvVw;
        nOhum:
        $url = Db::name("ybsc_tmpl_pages")->where("mod_id", 1)->where("menu", "article_info")->find();
        goto GoBY0;
        sGvVw:
        $url1 = explode("=/", $url1);
        goto JpG5s;
        Rmzi0:
    }
    public function find_mch_index_mod()
    {
        $mod = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->find();
        return json_decode($mod["index_values"], true);
    }
    public function find_mch_my_mod()
    {
        goto N2zLI;
        aM45r:
        $mod = Db::name("ybsc_user_tmpl_box")->where("id", $my_mode)->find();
        goto gaysJ;
        N2zLI:
        $my_mode = request()->param("my_mode");
        goto aM45r;
        gaysJ:
        return json_decode($mod["index_values"], true);
        goto pjB7E;
        pjB7E:
    }
    public function index_select_position()
    {
        goto JXXrV;
        RoWwH:
        $condition["mch_id"] = array("eq", $mch_id);
        goto Gc2Rb;
        pPJYm:
        unset($business_about["desc"]);
        goto k794A;
        Gc2Rb:
        $business_about = $about->getAbout($condition);
        goto pPJYm;
        k794A:
        $this->assign("business_about", $business_about);
        goto EIpzM;
        EMTqw:
        $mch_id = isset($this->bus_id) ? $this->bus_id : "0";
        goto RoWwH;
        JXXrV:
        $about = new \app\admin\service\About();
        goto EMTqw;
        EIpzM:
        return view("menu/index_select_position");
        goto iRCMW;
        iRCMW:
    }
    public function index_di_select_position()
    {
        return view("menu/di_position");
    }
    public function getMenuName()
    {
        goto h8RBa;
        Cq2Mh:
        return $res["text"];
        goto EABPi;
        h8RBa:
        $type = input("param.type");
        goto VoiRm;
        VoiRm:
        $res = Db::name("ybsc_tmpl_menu")->where("type", $type)->find();
        goto Cq2Mh;
        EABPi:
    }
    public function import_mod_my()
    {
        goto N1zfX;
        kafZm:
        $url = explode("&", $url[1]);
        goto iucfi;
        Y9N6h:
        $this->assign("uid", $this->uuid);
        goto vuvEe;
        gkLiz:
        $this->assign("page", $page);
        goto Y9N6h;
        yeYMG:
        $list = Db::name("ybsc_user_tmpl_box")->order("create_time desc")->where($where)->paginate(12, false, ["query" => ["s" => $url, request()->param()]]);
        goto VxO5t;
        OyEAt:
        $where = [];
        goto T5NNi;
        oHXVn:
        $url = explode("=/", $url);
        goto kafZm;
        VxO5t:
        $page = $list->render();
        goto gkLiz;
        iucfi:
        $url = "/" . $url[0];
        goto VzEzJ;
        T5NNi:
        cO1iw:
        goto yeYMG;
        VzEzJ:
        if ($this->uuid == 1) {
            goto OMVy7;
        }
        goto Q3rK1;
        IQPwC:
        OMVy7:
        goto OyEAt;
        N1zfX:
        $url = request()->query();
        goto oHXVn;
        vuvEe:
        $this->assign("list", $list);
        goto YKBuv;
        ndSmG:
        goto cO1iw;
        goto IQPwC;
        YKBuv:
        return view();
        goto liFBe;
        Q3rK1:
        $where["mch_id"] = $this->bus_id;
        goto ndSmG;
        liFBe:
    }
    public function add_my_mod()
    {
        goto RU9bZ;
        HNxD3:
        unset($index_list["edit_button"]);
        goto jhQEZ;
        W1kmp:
        $backgroundColor = input("param.pureBorderColor_color") == '' ? "#ffffff" : input("param.pureBorderColor_color");
        goto D4lpg;
        aSx5h:
        if (is_dir($path)) {
            goto pYMyO;
        }
        goto mIilP;
        tnrDY:
        $index_list = json_decode($index_list, true);
        goto ynNzF;
        hNJdk:
        $background = input("param.DhColor_color") == '' ? "#df2f20" : input("param.DhColor_color");
        goto ErdX_;
        xFgPG:
        unset($index_list["banner"]);
        goto tdr3l;
        xAKXM:
        $_W = $_SESSION["we7_w"];
        goto xeGKh;
        KZoD5:
        $item["name_this"] = $pages_di[$i]["name_this"];
        goto sxIdw;
        tdr3l:
        unset($index_list["catenav"]);
        goto lhBb1;
        fd50P:
        goto UltL9;
        goto PKbFx;
        sxIdw:
        $item["page_icon"] = $pages_di[$i]["page_icon"];
        goto CW0dw;
        ErdX_:
        $backgroundTextStyle = input("param.BtColor_color") == '' ? "#ffffff" : input("param.BtColor_color");
        goto XgCut;
        MKvU1:
        unset($index_list["add_h"]);
        goto mCpMo;
        KPWCV:
        $i = 0;
        goto TrCHL;
        RU9bZ:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto ngZad;
        }
        goto pkgaL;
        BMy8p:
        pYMyO:
        goto Ukloe;
        MaGD4:
        $name = input("param.wx_name", "小程序名称");
        goto hNJdk;
        NP1qq:
        $data[] = $item;
        goto GE1CR;
        KiO3h:
        $item["phone"] = $pages_di[$i]["phone"];
        goto AzPIR;
        jI5E0:
        $item["title"] = $pages_di[$i]["name"];
        goto KZoD5;
        pkgaL:
        global $_W;
        goto xAKXM;
        TemC9:
        $is_di_dis = input("param.is_di_dis") == "false" ? false : true;
        goto aKtqY;
        pxuqa:
        $img = explode(",", $img);
        goto lS1xV;
        wpKqZ:
        $pages_di = json_decode(input("param.menu_list"), true);
        goto GY2yy;
        Cuu7u:
        unset($index_list["goodlist"]);
        goto HNxD3;
        sZIlN:
        $img_src = $_W["siteroot"] . "addons/yb_shop/core/public/upload/user_box/" . $imageName;
        goto ch8sV;
        V52D3:
        $imageName = "25220_" . date("His", time()) . "_" . rand(1111, 9999) . ".png";
        goto guAH5;
        wN4B5:
        $item["lng"] = $pages_di[$i]["lng"];
        goto B6_6N;
        uH5qA:
        $i++;
        goto fd50P;
        Pgutg:
        unset($index_list["now_index"]);
        goto lSwdE;
        YStjc:
        $r = file_put_contents(ROOT_PATH . "/" . $imageSrc, base64_decode($img));
        goto MjsjW;
        mEN2A:
        $item["name"] = $pages_di[$i]["name"];
        goto jI5E0;
        HaCof:
        $win_img = input("param.win_img") == '' ? '' : input("param.win_img");
        goto TemC9;
        SEp5F:
        return AjaxReturn($res);
        goto uLSBF;
        MjsjW:
        $img_src = '';
        goto wEAnm;
        yRw4c:
        $item["path"] = $pages_di[$i]["path"];
        goto KiO3h;
        D8WZ1:
        $item["key"] = $pages_di[$i]["key"];
        goto AGP7f;
        an3sp:
        foreach ($index_list["all_data"] as $k => $v) {
            goto hmTZB;
            XJusc:
            fzMDR:
            goto S8mG4;
            TNFNY:
            WU5n5:
            goto vNift;
            zPprE:
            if (!($v["type"] == "edit_music")) {
                goto ztCXk;
            }
            goto mOySD;
            hmTZB:
            if ($v["type"] == "comment" || $v["type"] == "edit_video" || $v["type"] == "edit_music" || $v["type"] == "search" || $v["type"] == "blank" || $v["type"] == "headline" || $v["type"] == "line" || $v["type"] == "position" || $v["type"] == "rich_text") {
                goto iCmQC;
            }
            goto i1Jye;
            i1Jye:
            if (!strstr(isset($index_list["all_data"][$k]["topimg"]) ? $index_list["all_data"][$k]["topimg"] : '', "http://" . $_SERVER["HTTP_HOST"])) {
                goto M3Yya;
            }
            goto dCv2h;
            NfUQT:
            goto fTEaC;
            goto xYG9_;
            vNift:
            JDdm3:
            goto NfUQT;
            WNYwd:
            goto uETRv;
            goto kyiSo;
            N34lr:
            M3Yya:
            goto uz0ds;
            bxTEN:
            goto fzMDR;
            goto E9w3M;
            dCv2h:
            $index_list["all_data"][$k]["topimg"] = isset($v["topimg"]) ? $v["topimg"] : '';
            goto bMayC;
            kyiSo:
            pV6Ld:
            goto lCxqU;
            XchiC:
            $rsd = $this->get_tx_video($index_list["all_data"][$k]["video_url"]);
            goto QR9eC;
            VQy9w:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto ybuqb;
            xYG9_:
            iCmQC:
            goto h5yPw;
            KUJgB:
            if (!isset($v["list"])) {
                goto JDdm3;
            }
            goto e5wfx;
            uz0ds:
            $index_list["all_data"][$k]["topimg"] = isset($v["topimg"]) ? $v["topimg"] : '';
            goto hd6V6;
            aGnqY:
            goto x5LRd;
            goto oZO9l;
            S8mG4:
            xLJJ3:
            goto zPprE;
            bpDAv:
            $index_list["all_data"][$k]["vip_url"] = $index_list["all_data"][$k]["video_url"];
            goto WNYwd;
            h5yPw:
            if (!($v["type"] == "edit_video")) {
                goto xLJJ3;
            }
            goto VQy9w;
            nnDWY:
            $index_list["all_data"][$k]["vip_url"] = $index_list["all_data"][$k]["video_url"];
            goto bxTEN;
            ybuqb:
            if ($index_list["all_data"][$k]["video_type"] == 1) {
                goto j7gf3;
            }
            goto nnDWY;
            Bm7I4:
            ztCXk:
            goto aGnqY;
            hd6V6:
            Xem50:
            goto KUJgB;
            mOySD:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto Bm7I4;
            MaYsf:
            x5LRd:
            goto ngklK;
            lCxqU:
            $index_list["all_data"][$k]["vip_url"] = $rsd["real_url"];
            goto NZtyl;
            oZO9l:
            fTEaC:
            goto MaYsf;
            e5wfx:
            foreach ($v["list"] as $key => $value) {
                goto nV0TC;
                WmdHa:
                xaYu9:
                goto jMmK8;
                r8ya2:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto tH0Cl;
                U6Rna:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto r1wBG;
                }
                goto r8ya2;
                NPvte:
                goto ahQL1;
                goto buJZu;
                gqm3d:
                r1wBG:
                goto aWB0s;
                eIGbE:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto GJPw3;
                apM9K:
                Tjxgh:
                goto WmdHa;
                GJPw3:
                ahQL1:
                goto cQxbF;
                HkLwy:
                qUrxd:
                goto apM9K;
                tH0Cl:
                goto qUrxd;
                goto gqm3d;
                nV0TC:
                if (!empty($value["imgurl"])) {
                    goto Gt6NI;
                }
                goto ZNYDL;
                miHYJ:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto NPvte;
                aWB0s:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto HkLwy;
                aFasp:
                Gt6NI:
                goto U6Rna;
                buJZu:
                LGpZs:
                goto eIGbE;
                ZNYDL:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto LGpZs;
                }
                goto miHYJ;
                cQxbF:
                goto Tjxgh;
                goto aFasp;
                jMmK8:
            }
            goto TNFNY;
            E9w3M:
            j7gf3:
            goto XchiC;
            bMayC:
            goto Xem50;
            goto N34lr;
            QR9eC:
            if ($rsd["code"] == 0) {
                goto pV6Ld;
            }
            goto bpDAv;
            NZtyl:
            uETRv:
            goto XJusc;
            ngklK:
        }
        goto ODZgU;
        ch8sV:
        sN6Fc:
        goto xFgPG;
        wEAnm:
        if (!$r) {
            goto sN6Fc;
        }
        goto sZIlN;
        cna5K:
        unset($index_list["columntitle"]);
        goto ggn2T;
        ncMqV:
        $item["ident"] = $pages_di[$i]["ident"];
        goto mEN2A;
        XgCut:
        $selectedColor = input("param.iconColorSet_color") == '' ? "#e02e24" : input("param.iconColorSet_color");
        goto Gwbrc;
        ODZgU:
        RpiuY:
        goto wpKqZ;
        uLSBF:
        ngZad:
        goto KL6C_;
        Ukloe:
        $imageSrc = $path . "/" . $imageName;
        goto YStjc;
        D4lpg:
        $win_color = input("param.win_color") == '' ? "#ffffff" : input("param.win_color");
        goto HaCof;
        jhQEZ:
        unset($index_list["edit_piclist"]);
        goto w2zTK;
        MRIue:
        $path = "public/upload/user_box";
        goto aSx5h;
        GE1CR:
        tsgoI:
        goto uH5qA;
        lhBb1:
        unset($index_list["advert"]);
        goto MKvU1;
        mCpMo:
        unset($index_list["add_top"]);
        goto Pgutg;
        TrCHL:
        UltL9:
        goto gd6AJ;
        aKtqY:
        $ext = array("tabBar" => array("name" => $name, "background" => $background, "backgroundTextStyle" => $backgroundTextStyle, "selectedColor" => $selectedColor, "color" => $color, "backgroundColor" => $backgroundColor, "winColor" => $win_color, "winImg" => $win_img, "IsDiDis" => $is_di_dis, "list" => $data));
        goto SwFmC;
        Gwbrc:
        $color = input("param.iconTitColor_color") == '' ? "#8b8b8b" : input("param.iconTitColor_color");
        goto W1kmp;
        wiMYy:
        $item = array();
        goto D8WZ1;
        lS1xV:
        $img = $img[1];
        goto Jqtne;
        gd6AJ:
        if (!($i < count($pages_di))) {
            goto oRMSO;
        }
        goto wiMYy;
        CW0dw:
        $item["page_select_icon"] = $pages_di[$i]["page_select_icon"];
        goto NP1qq;
        lSwdE:
        unset($index_list["this_type"]);
        goto cna5K;
        SsdO_:
        $img = input("param.img_src");
        goto V52D3;
        ynNzF:
        $title = input("param.title");
        goto SsdO_;
        GY2yy:
        $data = array();
        goto KPWCV;
        xeGKh:
        $index_list = input("param.index_list");
        goto tnrDY;
        mIilP:
        mkdir($path, 0777, true);
        goto BMy8p;
        Jqtne:
        CxPD8:
        goto MRIue;
        PKbFx:
        oRMSO:
        goto MaGD4;
        ggn2T:
        unset($index_list["imgtextlist"]);
        goto Cuu7u;
        SwFmC:
        $res = Db::name("ybsc_user_tmpl_box")->insert(["img" => $img_src, "style_value" => json_encode($ext), "title" => $title, "mch_id" => $this->bus_id, "index_values" => json_encode($index_list), "create_time" => time()]);
        goto SEp5F;
        w2zTK:
        unset($index_list["floaticon"]);
        goto an3sp;
        guAH5:
        if (!strstr($img, ",")) {
            goto CxPD8;
        }
        goto pxuqa;
        AzPIR:
        $item["imgurl"] = $pages_di[$i]["imgurl"];
        goto ncMqV;
        B6_6N:
        $item["appid"] = $pages_di[$i]["appid"];
        goto yRw4c;
        AGP7f:
        $item["lat"] = $pages_di[$i]["lat"];
        goto wN4B5;
        KL6C_:
    }
    public function update_my_mod()
    {
        goto PKsnh;
        ptztb:
        $img = explode(",", $img);
        goto ZyWC6;
        i3b11:
        mkdir($path, 0777, true);
        goto QxK5_;
        yQrBw:
        $img_src = $_W["siteroot"] . "addons/yb_shop/core/public/upload/user_box/" . $imageName;
        goto UuNr_;
        cL2PO:
        goto MxsBj;
        goto KXFTU;
        NeU89:
        $color = input("param.iconTitColor_color") == '' ? "#8b8b8b" : input("param.iconTitColor_color");
        goto LdJrO;
        xFHHM:
        unset($index_list["advert"]);
        goto pAfaJ;
        lcC9R:
        unset($index_list["edit_button"]);
        goto ZObKD;
        qZNga:
        $item["lat"] = $pages_di[$i]["lat"];
        goto yb4C0;
        mzuny:
        unset($index_list["columntitle"]);
        goto T6LvX;
        nLR2S:
        CNS9h:
        goto u8K2B;
        q0o91:
        $imageSrc = $path . "/" . $imageName;
        goto gvrsf;
        WPuv9:
        $item["imgurl"] = $pages_di[$i]["imgurl"];
        goto We7YT;
        qwbs0:
        if (!strstr($img, ",")) {
            goto z6k1H;
        }
        goto ptztb;
        NFI2T:
        if (!($i < count($pages_di))) {
            goto kBbzL;
        }
        goto EdlR1;
        OBStK:
        $item["name_this"] = $pages_di[$i]["name_this"];
        goto lSYKb;
        hVNog:
        $name = input("param.wx_name", "小程序名称");
        goto oK70_;
        jBy_1:
        $imageName = "25220_" . date("His", time()) . "_" . rand(1111, 9999) . ".png";
        goto qwbs0;
        t60jE:
        if (is_dir($path)) {
            goto CORMd;
        }
        goto i3b11;
        PwoYy:
        $item["path"] = $pages_di[$i]["path"];
        goto fehId;
        PKsnh:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto AP1bu;
        }
        goto nudj6;
        u8K2B:
        $i++;
        goto cL2PO;
        pj0W0:
        $data[] = $item;
        goto nLR2S;
        PJBSV:
        $selectedColor = input("param.iconColorSet_color") == '' ? "#e02e24" : input("param.iconColorSet_color");
        goto NeU89;
        QxK5_:
        CORMd:
        goto q0o91;
        tG5eh:
        unset($index_list["floaticon"]);
        goto SxaJe;
        oK70_:
        $background = input("param.DhColor_color") == '' ? "#df2f20" : input("param.DhColor_color");
        goto qwydj;
        RqgQE:
        $i = 0;
        goto S824L;
        pvoo_:
        $ext = array("tabBar" => array("name" => $name, "background" => $background, "backgroundTextStyle" => $backgroundTextStyle, "selectedColor" => $selectedColor, "color" => $color, "backgroundColor" => $backgroundColor, "winColor" => $win_color, "winImg" => $win_img, "IsDiDis" => $is_di_dis, "list" => $data));
        goto elUMb;
        p3HAF:
        unset($index_list["add_top"]);
        goto PW03q;
        R1a1u:
        $is_di_dis = input("param.is_di_dis") == "false" ? false : true;
        goto pvoo_;
        gvrsf:
        $r = file_put_contents(ROOT_PATH . "/" . $imageSrc, base64_decode($img));
        goto zFwP6;
        UuNr_:
        zkwhd:
        goto jDVKo;
        YVMs7:
        $_W = $_SESSION["we7_w"];
        goto PY9xH;
        Zd3yL:
        z6k1H:
        goto s3rRj;
        x2SaK:
        $item["page_select_icon"] = $pages_di[$i]["page_select_icon"];
        goto pj0W0;
        yb4C0:
        $item["lng"] = $pages_di[$i]["lng"];
        goto HnAaF;
        ezEnk:
        if (!$r) {
            goto zkwhd;
        }
        goto yQrBw;
        fehId:
        $item["phone"] = $pages_di[$i]["phone"];
        goto WPuv9;
        pAfaJ:
        unset($index_list["add_h"]);
        goto p3HAF;
        uxyYa:
        $item["name"] = $pages_di[$i]["name"];
        goto k9pgj;
        jZUAF:
        QgoK_:
        goto LHMC6;
        mMGaN:
        unset($index_list["this_type"]);
        goto mzuny;
        nudj6:
        global $_W;
        goto YVMs7;
        jDVKo:
        unset($index_list["banner"]);
        goto dX01e;
        k9pgj:
        $item["title"] = $pages_di[$i]["name"];
        goto OBStK;
        q3Lr2:
        $img = input("param.img_src");
        goto jBy_1;
        KXFTU:
        kBbzL:
        goto hVNog;
        HnAaF:
        $item["appid"] = $pages_di[$i]["appid"];
        goto PwoYy;
        bRFjg:
        AP1bu:
        goto l1VX0;
        fLqOU:
        $my_mod = input("param.my_mod");
        goto q3Lr2;
        S824L:
        MxsBj:
        goto NFI2T;
        s3rRj:
        $path = "public/upload/user_box";
        goto t60jE;
        ZHUaS:
        $win_img = input("param.win_img") == '' ? '' : input("param.win_img");
        goto R1a1u;
        We7YT:
        $item["ident"] = $pages_di[$i]["ident"];
        goto uxyYa;
        LHMC6:
        $pages_di = json_decode(input("param.menu_list"), true);
        goto fDwRG;
        LdJrO:
        $backgroundColor = input("param.pureBorderColor_color") == '' ? "#ffffff" : input("param.pureBorderColor_color");
        goto sR69H;
        elUMb:
        $res = Db::name("ybsc_user_tmpl_box")->where("id", $my_mod)->update(["img" => $img_src, "style_value" => json_encode($ext), "index_values" => json_encode($index_list), "create_time" => time()]);
        goto tE0M_;
        sR69H:
        $win_color = input("param.win_color") == '' ? "#ffffff" : input("param.win_color");
        goto ZHUaS;
        ZObKD:
        unset($index_list["edit_piclist"]);
        goto tG5eh;
        lSYKb:
        $item["page_icon"] = $pages_di[$i]["page_icon"];
        goto x2SaK;
        SxaJe:
        foreach ($index_list["all_data"] as $k => $v) {
            goto ip28e;
            hb0Sx:
            Hty3H:
            goto bMAo3;
            HEt0m:
            $index_list["all_data"][$k]["topimg"] = $v["topimg"];
            goto EpA60;
            HBCVu:
            if (!($index_list["all_data"][$k]["video_type"] == 1)) {
                goto Hty3H;
            }
            goto tU0RR;
            ip28e:
            if ($v["type"] == "comment" || $v["type"] == "edit_video" || $v["type"] == "edit_music" || $v["type"] == "search" || $v["type"] == "blank" || $v["type"] == "headline" || $v["type"] == "line" || $v["type"] == "position" || $v["type"] == "rich_text") {
                goto FejeI;
            }
            goto ETNL0;
            eD6aK:
            if (!($v["type"] == "edit_video")) {
                goto cMtxB;
            }
            goto AxN2w;
            WrfPp:
            FejeI:
            goto eD6aK;
            je0tx:
            $index_list["all_data"][$k]["topimg"] = $v["topimg"];
            goto whmkQ;
            ytnjO:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto C7D90;
            EpA60:
            goto t6nCg;
            goto aljXS;
            aljXS:
            LxtSL:
            goto je0tx;
            XHvwB:
            goto YQe_B;
            goto EJSDw;
            EJSDw:
            EMMlA:
            goto SvOmU;
            gFxfW:
            foreach ($v["list"] as $key => $value) {
                goto ZFgJV;
                r6YtV:
                rlDiC:
                goto WzOhA;
                LrPga:
                goto rlDiC;
                goto ddAtX;
                ZFgJV:
                if (!empty($value["imgurl"])) {
                    goto ijG1R;
                }
                goto CTkDG;
                PIEqK:
                H1t8n:
                goto ksk9V;
                sc07y:
                ijG1R:
                goto s33xQ;
                s33xQ:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto H1t8n;
                }
                goto Q3vd3;
                ksk9V:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto MfTTM;
                MfTTM:
                WmMiO:
                goto oHIZi;
                HQ_zD:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto r6YtV;
                B2hxB:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto LrPga;
                uyAut:
                goto WmMiO;
                goto PIEqK;
                CTkDG:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto Tbhib;
                }
                goto B2hxB;
                WzOhA:
                goto BC_C2;
                goto sc07y;
                Q3vd3:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto uyAut;
                oHIZi:
                BC_C2:
                goto WAJGn;
                ddAtX:
                Tbhib:
                goto HQ_zD;
                WAJGn:
                ig89U:
                goto JuX4G;
                JuX4G:
            }
            goto D_fn2;
            AxN2w:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto HBCVu;
            tU0RR:
            $index_list["all_data"][$k]["video_url"] = $this->get_tx_video($index_list["all_data"][$k]["video_url"]);
            goto hb0Sx;
            KqKmG:
            goto EMMlA;
            goto WrfPp;
            D_fn2:
            usNkG:
            goto KqKmG;
            bMAo3:
            cMtxB:
            goto PgLg5;
            PgLg5:
            if (!($v["type"] == "edit_music")) {
                goto Jt20y;
            }
            goto ytnjO;
            SvOmU:
            YQe_B:
            goto ftt2A;
            C7D90:
            Jt20y:
            goto XHvwB;
            ETNL0:
            if (!strstr($index_list["all_data"][$k]["topimg"], "http://" . $_SERVER["HTTP_HOST"])) {
                goto LxtSL;
            }
            goto HEt0m;
            whmkQ:
            t6nCg:
            goto gFxfW;
            ftt2A:
        }
        goto jZUAF;
        T6LvX:
        unset($index_list["imgtextlist"]);
        goto Ai3Sb;
        qwydj:
        $backgroundTextStyle = input("param.BtColor_color") == '' ? "#ffffff" : input("param.BtColor_color");
        goto PJBSV;
        tE0M_:
        return AjaxReturn($res);
        goto bRFjg;
        ZyWC6:
        $img = $img[1];
        goto Zd3yL;
        EdlR1:
        $item = array();
        goto k3e1V;
        Ai3Sb:
        unset($index_list["goodlist"]);
        goto lcC9R;
        PW03q:
        unset($index_list["now_index"]);
        goto mMGaN;
        dX01e:
        unset($index_list["catenav"]);
        goto xFHHM;
        PY9xH:
        $index_list = json_decode(input("param.index_list"), true);
        goto fLqOU;
        zFwP6:
        $img_src = '';
        goto ezEnk;
        k3e1V:
        $item["key"] = $pages_di[$i]["key"];
        goto qZNga;
        fDwRG:
        $data = array();
        goto RqgQE;
        l1VX0:
    }
    public function del_my_mode()
    {
        goto BRISP;
        i0Dam:
        global $_W;
        goto lmlT0;
        KMe72:
        return AjaxReturn($res);
        goto o32XC;
        ILa2x:
        @unlink($str);
        goto JyRZQ;
        lmlT0:
        $_W = $_SESSION["we7_w"];
        goto Qfyvm;
        JyRZQ:
        $res = Db::name("ybsc_user_tmpl_box")->where("id", $id)->delete();
        goto KMe72;
        Qfyvm:
        $info = Db::name("ybsc_user_tmpl_box")->where("id", $id)->find();
        goto xI2pd;
        BRISP:
        $id = input("param.id");
        goto i0Dam;
        xI2pd:
        $str = str_replace(array($_W["siteroot"] . "addons/yb_shop/core/"), '', $info["img"]);
        goto ILa2x;
        o32XC:
    }
    public function select_fight_group()
    {
        goto vKoPc;
        YA1LJ:
        $this->assign("new", $new);
        goto xYc8F;
        wE9Pb:
        $this->assign("fight", $art);
        goto BEEwi;
        xYc8F:
        $this->assign("url", "pages/index/kanjia");
        goto DeVvp;
        thlNL:
        $art = Db::name("ybsc_bargain")->alias("b")->join("ybsc_images i", "b.bargain_picture=i.img_id")->where("b.mch_id", $this->bus_id)->order("b.create_time desc")->field("b.*,i.img_cover")->paginate(20);
        goto cXd4g;
        DeVvp:
        $this->assign("page", $page);
        goto UJ2ui;
        cXd4g:
        $page = $art->render();
        goto R2374;
        R2374:
        $new = input("param.new", "0");
        goto YA1LJ;
        UJ2ui:
        $this->assign("this_id", $this_id);
        goto wE9Pb;
        vKoPc:
        $this_id = input("param.select_id");
        goto thlNL;
        BEEwi:
        return view("menu/index_fight_group");
        goto n2xZ1;
        n2xZ1:
    }
    public function universal()
    {
        goto nAsiK;
        o8sTf:
        return view("menu/universal");
        goto XEMb7;
        e5oui:
        $this->assign("list", $list);
        goto o8sTf;
        nAsiK:
        $url = request()->query();
        goto u8tYT;
        ECRKd:
        $url = "/" . $url[0];
        goto Q6per;
        vzn2i:
        $url = explode("&", $url[1]);
        goto ECRKd;
        u8tYT:
        $url = explode("=/", $url);
        goto vzn2i;
        Q6per:
        $list = Db::name("ybsc_bus_tmpl")->where("is_del=1")->where("mch_id", $this->bus_id)->order("create_time desc")->paginate(20, false, ["query" => ["s" => $url, request()->param()]])->appends(request()->param());
        goto e5oui;
        XEMb7:
    }
    public function add_universal()
    {
        goto ZDeTh;
        wf6EP:
        unset($index_list["dh_color"]);
        goto ss0pF;
        CxHbw:
        foreach ($index_list["all_data"] as $k => $v) {
            goto pVKJE;
            bpS0I:
            $index_list["all_data"][$k]["vip_url"] = $rsd["real_url"];
            goto KlbDY;
            UP85u:
            Ar0xK:
            goto pKiI9;
            l0Pzd:
            geVIh:
            goto SLKes;
            H1qj_:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto xiNmw;
            A8A2N:
            sXicl:
            goto CaorU;
            SLKes:
            zfyQM:
            goto Ia5ow;
            CaorU:
            if (!($v["type"] == "edit_music")) {
                goto PTCjQ;
            }
            goto JSJ0e;
            PWlD_:
            goto QIfJq;
            goto UP85u;
            yDSBP:
            ySIGi:
            goto bpS0I;
            wkPdQ:
            PTCjQ:
            goto lZvHg;
            D413X:
            QIfJq:
            goto A8A2N;
            pKiI9:
            $rsd = $this->get_tx_video($index_list["all_data"][$k]["video_url"]);
            goto qc4hS;
            dZCEo:
            RP40e:
            goto Grgc9;
            J5rq0:
            GGhDW:
            goto Nr5io;
            oaqJU:
            MRUZy:
            goto dZCEo;
            qc4hS:
            if ($rsd["code"] == 0) {
                goto ySIGi;
            }
            goto ExV50;
            ExV50:
            $index_list["all_data"][$k]["vip_url"] = $index_list["all_data"][$k]["video_url"];
            goto nEKnP;
            JSJ0e:
            $index_list["all_data"][$k]["imgurl"] = $index_list["all_data"][$k]["imgurl"];
            goto wkPdQ;
            Grgc9:
            goto geVIh;
            goto J5rq0;
            pVKJE:
            if ($v["type"] == "comment" || $v["type"] == "edit_video" || $v["type"] == "edit_music" || $v["type"] == "search" || $v["type"] == "blank" || $v["type"] == "headline" || $v["type"] == "line" || $v["type"] == "position" || $v["type"] == "rich_text") {
                goto GGhDW;
            }
            goto c1N0e;
            BPux7:
            $index_list["all_data"][$k]["vip_url"] = $index_list["all_data"][$k]["video_url"];
            goto PWlD_;
            lZvHg:
            goto zfyQM;
            goto l0Pzd;
            nEKnP:
            goto YhL36;
            goto yDSBP;
            aCsiS:
            foreach ($v["list"] as $key => $value) {
                goto yLYIp;
                N_04H:
                NHw0o:
                goto e9UeT;
                kRpIz:
                kTeC_:
                goto Z_sN7;
                yLYIp:
                if (!empty($value["imgurl"])) {
                    goto VUnjp;
                }
                goto pZS3C;
                PJGvI:
                yrMyo:
                goto dKsPU;
                pgy2o:
                zQBfF:
                goto QBXZB;
                hcaUh:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto NHw0o;
                }
                goto AC015;
                Z_sN7:
                JljZ1:
                goto pgy2o;
                Vkj9U:
                VUnjp:
                goto hcaUh;
                Xm9UO:
                goto kTeC_;
                goto N_04H;
                wQp1A:
                goto yrMyo;
                goto Uyueg;
                pZS3C:
                if (!strstr($index_list["all_data"][$k]["list"][$key]["imgurl"], "http://" . $_SERVER["HTTP_HOST"])) {
                    goto IXDQw;
                }
                goto E9XJ7;
                E9XJ7:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto wQp1A;
                AC015:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto Xm9UO;
                e9UeT:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $value["imgurl"];
                goto kRpIz;
                Uyueg:
                IXDQw:
                goto z6Hz0;
                dKsPU:
                goto JljZ1;
                goto Vkj9U;
                z6Hz0:
                $index_list["all_data"][$k]["list"][$key]["imgurl"] = $v["topimg"];
                goto PJGvI;
                QBXZB:
            }
            goto oaqJU;
            KlbDY:
            YhL36:
            goto D413X;
            xiNmw:
            if ($index_list["all_data"][$k]["video_type"] == 1) {
                goto Ar0xK;
            }
            goto BPux7;
            Nr5io:
            if (!($v["type"] == "edit_video")) {
                goto sXicl;
            }
            goto H1qj_;
            c1N0e:
            if (empty($v["list"])) {
                goto RP40e;
            }
            goto aCsiS;
            Ia5ow:
        }
        goto pQP0f;
        q2l1S:
        unset($index_list["columntitle"]);
        goto daEwU;
        pQP0f:
        jaeDO:
        goto TB5F2;
        GZFdE:
        unset($index_list["floaticon"]);
        goto puaKh;
        hHKTz:
        unset($index_list["nab_name"]);
        goto l8Mcb;
        znbPo:
        WItIt:
        goto wkbTc;
        wkbTc:
        unset($index_list["banner"]);
        goto MLCde;
        I20yb:
        $imageName = "25220_" . date("His", time()) . "_" . rand(1111, 9999) . ".png";
        goto iXqp_;
        NLsJw:
        unset($index_list["fight_group_list"]);
        goto ftHte;
        cZRc3:
        if (!$r) {
            goto WItIt;
        }
        goto MMW_8;
        TB5F2:
        $id = request()->param("id");
        goto gyOoQ;
        cyGgI:
        $_W = $_SESSION["we7_w"];
        goto EL7m3;
        Nai_X:
        $img = explode(",", $img);
        goto TW_nT;
        MfYNz:
        Ev0Ci:
        goto X1WlT;
        iXqp_:
        if (!strstr($img, ",")) {
            goto E7mgX;
        }
        goto Nai_X;
        WUTm7:
        unset($index_list["this_type"]);
        goto q2l1S;
        wrzHm:
        $res = Db::name("ybsc_bus_tmpl")->insertGetId(["img" => $img_src, "name" => $title, "mch_id" => $this->bus_id, "index_values" => json_encode($index_list), "create_time" => time()]);
        goto MfYNz;
        a4e3G:
        unset($index_list["add_top_di"]);
        goto boP_b;
        puaKh:
        unset($index_list["menu_list"]);
        goto gH8T9;
        daEwU:
        unset($index_list["imgtextlist"]);
        goto uvGsp;
        RgJwA:
        $path = "public/upload/user_box";
        goto T_BoG;
        l8Mcb:
        unset($index_list["nab_color"]);
        goto MNMQl;
        BeHte:
        unset($index_list["bag_url"]);
        goto CxHbw;
        X1WlT:
        return AjaxReturn($res, ["id" => $id]);
        goto nGbBK;
        uLib5:
        $img_src = '';
        goto cZRc3;
        mz9cE:
        $imageSrc = $path . "/" . $imageName;
        goto YmC4j;
        sWx_W:
        unset($index_list["edit_piclist"]);
        goto GZFdE;
        yNyY9:
        axNIx:
        goto mz9cE;
        axmeZ:
        unset($index_list["advert"]);
        goto Z21oZ;
        MNMQl:
        unset($index_list["font_color"]);
        goto f6mnt;
        YmC4j:
        $r = file_put_contents(ROOT_PATH . "/" . $imageSrc, base64_decode($img));
        goto uLib5;
        nGbBK:
        indOc:
        goto TiaE4;
        boP_b:
        unset($index_list["display"]);
        goto hHKTz;
        gyOoQ:
        if ($id == 0) {
            goto BBQXx;
        }
        goto nUHrI;
        Z21oZ:
        unset($index_list["add_h"]);
        goto wXR04;
        wXR04:
        unset($index_list["add_top"]);
        goto jXtHj;
        uvGsp:
        unset($index_list["tripartite_list"]);
        goto V3jmY;
        ss0pF:
        unset($index_list["dbj_color"]);
        goto BeHte;
        EL7m3:
        $index_list = json_decode(input("param.index_list"), true);
        goto GaTa1;
        MMW_8:
        $img_src = $_W["siteroot"] . "addons/yb_shop/core/public/upload/user_box/" . $imageName;
        goto znbPo;
        T_BoG:
        if (is_dir($path)) {
            goto axNIx;
        }
        goto Xn1Qz;
        nUHrI:
        $res = Db::name("ybsc_bus_tmpl")->where("id", $id)->update(["img" => $img_src, "name" => $title, "index_values" => json_encode($index_list)]);
        goto ugPiY;
        V3jmY:
        unset($index_list["quartet_list"]);
        goto NLsJw;
        gH8T9:
        unset($index_list["add_h_di"]);
        goto a4e3G;
        MLCde:
        unset($index_list["catenav"]);
        goto axmeZ;
        Xn1Qz:
        mkdir($path, 0777, true);
        goto yNyY9;
        jXtHj:
        unset($index_list["now_index"]);
        goto WUTm7;
        bsv1y:
        $img = input("param.img_src");
        goto I20yb;
        f6mnt:
        unset($index_list["db_color"]);
        goto wf6EP;
        TiaE4:
        return view("menu/universal_add");
        goto YCNQK;
        WKuS0:
        global $_W;
        goto cyGgI;
        G9Cdc:
        BBQXx:
        goto wrzHm;
        hnsQR:
        E7mgX:
        goto RgJwA;
        ugPiY:
        goto Ev0Ci;
        goto G9Cdc;
        TW_nT:
        $img = $img[1];
        goto hnsQR;
        GaTa1:
        $title = input("param.title");
        goto bsv1y;
        ZDeTh:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto indOc;
        }
        goto WKuS0;
        ftHte:
        unset($index_list["goodlist"]);
        goto eVd6C;
        eVd6C:
        unset($index_list["edit_button"]);
        goto sWx_W;
        YCNQK:
    }
    public function edit_universal()
    {
        goto D4I7g;
        GZWUx:
        $id = request()->param("id");
        goto by44v;
        Bt6AQ:
        return view("menu/universal_edit");
        goto NKiDN;
        by44v:
        $this->assign("id", $id);
        goto Bt6AQ;
        CnXF3:
        $mod = Db::name("ybsc_bus_tmpl")->where("id", $id)->find();
        goto kJO7R;
        T7nd2:
        oveyC:
        goto GZWUx;
        D4I7g:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto oveyC;
        }
        goto jDP1D;
        PaFu0:
        return $json;
        goto T7nd2;
        kJO7R:
        $json = json_decode($mod["index_values"], true);
        goto KAn2K;
        jDP1D:
        $id = request()->param("id");
        goto CnXF3;
        KAn2K:
        $json["id"] = $id;
        goto cj5tS;
        cj5tS:
        $json["name"] = $mod["name"];
        goto PaFu0;
        NKiDN:
    }
    public function del_universal()
    {
        goto EYQXF;
        EYQXF:
        $id = input("param.id");
        goto Fltli;
        iiAY2:
        $info = Db::name("ybsc_bus_tmpl")->where("id", $id)->find();
        goto djMN3;
        BGHD7:
        return AjaxReturn($del);
        goto nfwFN;
        Fltli:
        global $_W;
        goto wZiYh;
        p5KbR:
        $del = Db::name("ybsc_bus_tmpl")->where("id", $id)->delete();
        goto BGHD7;
        wZiYh:
        $_W = $_SESSION["we7_w"];
        goto iiAY2;
        djMN3:
        $str = str_replace(array($_W["siteroot"] . "addons/yb_shop/core/"), '', $info["img"]);
        goto ntEN2;
        ntEN2:
        @unlink($str);
        goto p5KbR;
        nfwFN:
    }
    public function universal_form()
    {
        goto h3CI8;
        ZAckg:
        $this->assign("list", $list);
        goto rPXKx;
        by01s:
        $url = "/" . $url[0];
        goto E9ELl;
        rPXKx:
        return view();
        goto BgtXx;
        VnzPr:
        $url = explode("&", $url[1]);
        goto by01s;
        WJczz:
        $url = explode("=/", $url);
        goto VnzPr;
        E9ELl:
        $list = Db::name("ybsc_bus_form")->order("create_time desc")->where("mch_id", $this->bus_id)->paginate(20, false, ["query" => ["s" => $url, request()->param()]]);
        goto ZAckg;
        h3CI8:
        $url = request()->query();
        goto WJczz;
        BgtXx:
    }
    public function universal_form_add()
    {
        goto u3vzT;
        Vj6UP:
        $res = Db::name("ybsc_bus_form")->where("id", $id)->inc("create_time")->update(["img" => $img_src, "value" => json_encode($data["all_data"])]);
        goto vil2C;
        blXiZ:
        $res = Db::name("ybsc_bus_form")->insert(["type" => $form_type, "img" => $img_src, "title" => $title, "value" => json_encode($data["all_data"]), "mch_id" => $this->bus_id, "create_time" => time()]);
        goto bLPrT;
        YIYpQ:
        $this->assign("id", $id);
        goto PgU2A;
        THKKH:
        $form_type = request()->param("form_type");
        goto w6sR7;
        BQoyn:
        LtLV7:
        goto Rw5y5;
        bLPrT:
        b_2Jp:
        goto j7wnR;
        PgU2A:
        return view();
        goto LRptm;
        kAG_r:
        $data = json_decode(input("param.index_list"), true);
        goto ej0ex;
        N8nj4:
        unset($data["this_index"]);
        goto uyflR;
        Db1mf:
        mkdir($path, 0777, true);
        goto wviaj;
        fCVc3:
        $id = input("param.id", "0");
        goto YIYpQ;
        Rw5y5:
        $path = "public/upload/user_box";
        goto D46Hl;
        D46Hl:
        if (is_dir($path)) {
            goto PXB0x;
        }
        goto Db1mf;
        F9IMQ:
        unset($data["now_index"]);
        goto N8nj4;
        Lfsln:
        $_W = $_SESSION["we7_w"];
        goto xqu4e;
        yhDyn:
        Zz3oL:
        goto blXiZ;
        xIsEO:
        $img = $img[1];
        goto BQoyn;
        yANmE:
        if (!strstr($img, ",")) {
            goto LtLV7;
        }
        goto e8GXW;
        vil2C:
        goto b_2Jp;
        goto yhDyn;
        OD0L5:
        $img_src = $_W["siteroot"] . "addons/yb_shop/core/public/upload/user_box/" . $imageName;
        goto c2TgG;
        j7wnR:
        return AjaxReturn($res);
        goto YnwKN;
        c2TgG:
        dUbjZ:
        goto kAG_r;
        e8GXW:
        $img = explode(",", $img);
        goto xIsEO;
        kb7iI:
        $imageSrc = $path . "/" . $imageName;
        goto ZmN46;
        xqu4e:
        $imageName = "form_" . date("His", time()) . "_" . rand(1111, 9999) . ".png";
        goto yANmE;
        ZmN46:
        $r = file_put_contents(ROOT_PATH . "/" . $imageSrc, base64_decode($img));
        goto Znnpa;
        Znnpa:
        $img_src = '';
        goto clat7;
        pHHDV:
        $img = request()->param("img");
        goto mtLGe;
        w6sR7:
        global $_W;
        goto Lfsln;
        u3vzT:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto ubDGU;
        }
        goto pHHDV;
        clat7:
        if (!$r) {
            goto dUbjZ;
        }
        goto OD0L5;
        uyflR:
        if (empty($id) || $id == 0) {
            goto Zz3oL;
        }
        goto Vj6UP;
        mtLGe:
        $id = request()->param("id", "0");
        goto THKKH;
        wviaj:
        PXB0x:
        goto kb7iI;
        ej0ex:
        $title = input("param.title");
        goto VMJYh;
        VMJYh:
        unset($data["checkbox_list"]);
        goto mHQsc;
        mHQsc:
        unset($data["radio_list"]);
        goto F9IMQ;
        YnwKN:
        ubDGU:
        goto fCVc3;
        LRptm:
    }
    public function universal_form_edit()
    {
        goto kJHje;
        zsE1i:
        $info = Db::name("ybsc_bus_form")->where("id", $id)->find();
        goto v3Nnc;
        kJHje:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto C8u4Z;
        }
        goto l78W0;
        v3Nnc:
        return $info;
        goto VVGy5;
        VVGy5:
        C8u4Z:
        goto JTG7B;
        l78W0:
        $id = input("param.id");
        goto zsE1i;
        JTG7B:
    }
    public function cratn_menu()
    {
        return view();
    }
    public function del_universal_form()
    {
        goto WESsG;
        pOci8:
        $res = Db::name("ybsc_bus_form")->where("id", $id)->update(["is_del" => 2]);
        goto XEG1U;
        ZXcKZ:
        blAKk:
        goto pOci8;
        XEG1U:
        E1Dmp:
        goto aNZrg;
        gOiJq:
        $key = input("param.key");
        goto Gb983;
        fCmmJ:
        $res = Db::name("ybsc_bus_form")->where("id", $id)->update(["is_del" => 1]);
        goto bpP9u;
        bpP9u:
        goto E1Dmp;
        goto ZXcKZ;
        Gb983:
        if ($key == "off") {
            goto blAKk;
        }
        goto fCmmJ;
        aNZrg:
        return AjaxReturn($res);
        goto pir19;
        WESsG:
        $id = input("param.id");
        goto gOiJq;
        pir19:
    }
    public function get_form_info()
    {
        goto JDP_B;
        AMbn0:
        return view("user/get_form_info");
        goto fwrUs;
        u5fDm:
        $user_info["param"] = str_replace("\\n", "<br>", $user_info["param"]);
        goto i1lXS;
        oQiuZ:
        $user_info = Db::name("ybsc_user_form")->where("id", $id)->find();
        goto u5fDm;
        qVUqx:
        $this->assign("user_info", $user_info);
        goto AMbn0;
        i1lXS:
        $user_info["param"] = json_decode($user_info["param"], true);
        goto ScQQZ;
        JDP_B:
        $id = input("param.id");
        goto oQiuZ;
        SRpfg:
        SvFs6:
        goto qVUqx;
        ScQQZ:
        foreach ($user_info["param"] as $k => $v) {
            goto gcnuA;
            i7JKs:
            l_ObS:
            goto KGm2b;
            ppAtP:
            $user_info["param"][$k]["key"] = $string_arr[1];
            goto i7JKs;
            gcnuA:
            $string_arr = explode("-", $v["name"]);
            goto ppAtP;
            KGm2b:
        }
        goto SRpfg;
        fwrUs:
    }
    public function get_form_list()
    {
        goto bnDQs;
        kbyY_:
        $where = [];
        goto Lkv_a;
        LNItI:
        $from_all = Db::name("ybsc_bus_form")->where("mch_id", $this->bus_id)->where("is_del=1")->select();
        goto sZULF;
        Rgs3_:
        $url = explode("=/", $url);
        goto aJ3O7;
        byUr0:
        $this->assign("list", $list);
        goto LNItI;
        aJ3O7:
        $url = explode("&", $url[1]);
        goto j1pKc;
        J4z9G:
        $data = Request::instance()->param();
        goto kbyY_;
        Lkv_a:
        empty($data["form_id"]) || $data["form_id"] == 0 || ($where["bus_form_id"] = ["eq", $data["form_id"]]);
        goto f329A;
        sF5VR:
        return view("user/get_form_list");
        goto z0ycU;
        f329A:
        $data["form_id"] = empty($data["form_id"]) ? '' : $data["form_id"];
        goto W1cJ3;
        W1cJ3:
        $list = Db::name("ybsc_user_form")->order("create_time desc")->where($where)->where("mch_id", $this->bus_id)->paginate(10, false, ["query" => ["s" => $url, "form_id" => $data["form_id"]]]);
        goto byUr0;
        yQ10a:
        $this->assign("form_id", $data["form_id"]);
        goto sF5VR;
        j1pKc:
        $url = "/" . $url[0];
        goto J4z9G;
        bnDQs:
        $url = request()->query();
        goto Rgs3_;
        sZULF:
        $this->assign("from_all", $from_all);
        goto yQ10a;
        z0ycU:
    }
    public function select_form_all()
    {
        goto YEF0g;
        YEF0g:
        $url = request()->query();
        goto db1P0;
        Z9faU:
        $this->assign("list", $list);
        goto N9MK2;
        FrY3G:
        $url = explode("&", $url[1]);
        goto FogET;
        N9MK2:
        return view();
        goto xeSEZ;
        chP8u:
        $list = Db::name("ybsc_bus_form")->where("mch_id", $this->bus_id)->order("create_time desc")->where("is_del=1")->paginate(10, false, ["query" => ["s" => $url, request()->param()]]);
        goto Z9faU;
        db1P0:
        $url = explode("=/", $url);
        goto FrY3G;
        FogET:
        $url = "/" . $url[0];
        goto chP8u;
        xeSEZ:
    }
    public function universal_set_title_do()
    {
        goto xJOtS;
        xJOtS:
        $id = input("param.id");
        goto nU8I5;
        nU8I5:
        $title = input("param.title");
        goto JwZVD;
        CHQiZ:
        return AjaxReturn($res);
        goto yPu0X;
        JwZVD:
        $res = Db::name("ybsc_bus_form")->where("id", $id)->inc("create_time")->update(["title" => $title]);
        goto CHQiZ;
        yPu0X:
    }
    public function set_universal_limet()
    {
        goto yZMV4;
        jwSs9:
        $val = input("param.val");
        goto RdcI_;
        yZMV4:
        $id = input("param.id");
        goto jwSs9;
        RdcI_:
        $res = Db::name("ybsc_bus_form")->where("id", $id)->inc("create_time")->update(["limit_num" => $val]);
        goto n5MFI;
        n5MFI:
        return AjaxReturn($res);
        goto MVSUg;
        MVSUg:
    }
    public function set_form_title()
    {
        goto I6zY4;
        Fs_FJ:
        $res = Db::name("ybsc_bus_form")->where("id", $id)->inc("create_time")->update(["title" => $val]);
        goto mPFRF;
        QVj_q:
        $val = input("param.val");
        goto Fs_FJ;
        I6zY4:
        $id = input("param.id");
        goto QVj_q;
        mPFRF:
        return AjaxReturn($res);
        goto YT7Ig;
        YT7Ig:
    }
    public function videoToMp4()
    {
        goto Cz2JA;
        ByJau:
        $info["videoUrl"] = $tx_video["real_url"];
        goto QFevV;
        L8Zbp:
        mjAtq:
        goto SZWbZ;
        mx8M0:
        if (!($tx_video["code"] == 0)) {
            goto mjAtq;
        }
        goto ByJau;
        SZWbZ:
        v6RNV:
        goto EDFUn;
        IgboT:
        $tx_video = $this->get_tx_video($videoUrl);
        goto mx8M0;
        Cz2JA:
        $videoUrl = \request()->param("videoUrl", '');
        goto I97Bw;
        QFevV:
        return AjaxReturn(1, $info);
        goto L8Zbp;
        I97Bw:
        if (empty($videoUrl)) {
            goto v6RNV;
        }
        goto IgboT;
        EDFUn:
        return AjaxReturn(0);
        goto MCwVF;
        MCwVF:
    }
    public function get_tx_video($url)
    {
        goto zo6t_;
        hKdOH:
        $res["msg"] = "地址格式不正确";
        goto fwCeb;
        EgQCN:
        $vid = $match[1];
        goto wZRzz;
        IEPr8:
        preg_match("/\\/([0-9a-zA-Z]+).html/", $url, $match);
        goto X8c7G;
        vC3Cu:
        IUE1i:
        goto sCPXc;
        LBzRp:
        aOHzG:
        goto EgQCN;
        fwCeb:
        return $res;
        goto LBzRp;
        zo6t_:
        $res = array("code" => 1);
        goto GcEwL;
        GcEwL:
        if (!(strpos($url, "v.qq.com") !== false)) {
            goto IUE1i;
        }
        goto IEPr8;
        wZRzz:
        try {
            goto xwmml;
            LsdNK:
            if (!(isset($info_arr["msg"]) && $info_arr["msg"] == "vid is wrong")) {
                goto nfpln;
            }
            goto ZBbUk;
            relf0:
            $getinfo = "http://vv.video.qq.com/getinfo?vids={$vid}&platform=11&charge=0&otype=xml";
            goto WFO7G;
            zeN9G:
            $url = $info_arr["vl"]["vi"]["ul"]["ui"][0]["url"];
            goto lMoCD;
            tEmKC:
            return $res;
            goto jRLDx;
            ZPLSK:
            $key = $info_arr["vl"]["vi"]["fvkey"];
            goto nNNR0;
            NY9m5:
            $format = "p" . substr($format_id, -3, 3);
            goto iTZoJ;
            SwUYD:
            if (isset($fi[1])) {
                goto vPv4k;
            }
            goto GiD0u;
            SgrAa:
            X0O0l:
            goto dZICd;
            SaIqx:
            HYjYh:
            goto iiGTs;
            GiD0u:
            $getinfo = "http://vv.video.qq.com/getinfo?vids={$vid}&platform=101001&charge=0&otype=xml";
            goto wYYWy;
            lMoCD:
            if (strlen($format_id) >= 5) {
                goto L1o4i;
            }
            goto pWU9_;
            EDAdK:
            if (!($info_arr["msg"] == "vid is wrong")) {
                goto BFpeZ;
            }
            goto QSTwu;
            iTZoJ:
            $key = $info_arr["vl"]["vi"]["fvkey"];
            goto zWmbF;
            LtBWU:
            vPv4k:
            goto yaeUW;
            edvXy:
            $info_arr = $this->xmlToArray($info);
            goto LsdNK;
            nNNR0:
            $url = $info_arr["vl"]["vi"]["ul"]["ui"][0]["url"];
            goto OIg41;
            lFD5m:
            $filename = $info_arr["vl"]["vi"]["fn"];
            goto ZPLSK;
            BTkTY:
            $fmt = $fi[1]["name"];
            goto NY9m5;
            yaeUW:
            $format_id = $fi[1]["id"];
            goto BTkTY;
            QRFD5:
            L1o4i:
            goto bGRbJ;
            wYYWy:
            $info = $this->request2($getinfo);
            goto edvXy;
            IVV70:
            $fi = $info_arr["fl"]["fi"];
            goto SwUYD;
            uYo1t:
            return $res;
            goto ESvpR;
            OIg41:
            $video_url = $url . $filename . "?vkey=" . $key;
            goto ONccg;
            CPO9W:
            $info_arr = $this->xmlToArray($info);
            goto EDAdK;
            ESvpR:
            BFpeZ:
            goto IVV70;
            VjBLu:
            $res["company"] = "腾讯";
            goto X0o__;
            ZBbUk:
            $res["msg"] = "视频出错";
            goto Qvea_;
            xwmml:
            set_time_limit(0);
            goto relf0;
            QSTwu:
            $res["msg"] = "视频出错";
            goto uYo1t;
            pWU9_:
            $mp4 = $vid . ".mp4";
            goto FTpfq;
            iiGTs:
            $video_url = $url . $mp4 . "?vkey=" . $key . "&fmt=" . $fmt;
            goto SgrAa;
            Qvea_:
            return $res;
            goto w7v3q;
            w7v3q:
            nfpln:
            goto lFD5m;
            X0o__:
            $res["real_url"] = $video_url;
            goto tEmKC;
            WFO7G:
            $info = $this->request2($getinfo);
            goto CPO9W;
            ONccg:
            goto X0O0l;
            goto LtBWU;
            zWmbF:
            $vid = $info_arr["vl"]["vi"]["vid"];
            goto zeN9G;
            bGRbJ:
            $mp4 = $vid . "." . $format . ".1.mp4";
            goto SaIqx;
            dZICd:
            $res["code"] = 0;
            goto VjBLu;
            FTpfq:
            goto HYjYh;
            goto QRFD5;
            jRLDx:
        } catch (\Exception $e) {
            $res["msg"] = "视频解析失败，请重试";
            return $res;
        }
        goto vC3Cu;
        X8c7G:
        if (!empty($match)) {
            goto aOHzG;
        }
        goto hKdOH;
        sCPXc:
    }
    public function request2($url, $param = array())
    {
        goto o9yML;
        d7ru5:
        curl_setopt($ch, CURLOPT_HEADER, 0);
        goto h1MvR;
        qHR9D:
        foreach ($param as $k => $v) {
            $o .= "{$k}=" . urlencode($v) . "&";
            em7Pn:
        }
        goto PjKzn;
        A39ky:
        $output = curl_exec($ch);
        goto fz7zj;
        l6SPZ:
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        goto nnir9;
        fz7zj:
        curl_close($ch);
        goto xF9cW;
        PjKzn:
        D0vsn:
        goto TfxAh;
        o9yML:
        if (!empty($url)) {
            goto Z8BFs;
        }
        goto vXBz6;
        yry3D:
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        goto l6SPZ;
        JeZ61:
        curl_setopt($ch, CURLOPT_POST, 1);
        goto s1Buo;
        vWeJJ:
        KXNhg:
        goto A39ky;
        Lq3oc:
        curl_setopt($ch, CURLOPT_URL, $url);
        goto SnN2I;
        mI2xM:
        Z8BFs:
        goto DoGVh;
        CrhUg:
        if (empty($param)) {
            goto KXNhg;
        }
        goto APT7s;
        SnN2I:
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        goto d7ru5;
        DoGVh:
        $ch = curl_init();
        goto Lq3oc;
        TfxAh:
        $post_data = substr($o, 0, -1);
        goto JeZ61;
        vXBz6:
        return false;
        goto mI2xM;
        APT7s:
        $o = '';
        goto qHR9D;
        h1MvR:
        if (!(substr($url, 0, 8) == "https://")) {
            goto z5Lk3;
        }
        goto yry3D;
        nnir9:
        z5Lk3:
        goto CrhUg;
        xF9cW:
        return $output;
        goto bd0Ao;
        s1Buo:
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        goto vWeJJ;
        bd0Ao:
    }
    public function xmlToArray($xml)
    {
        goto vBHkz;
        t00Dr:
        return $values;
        goto AUNko;
        vBHkz:
        libxml_disable_entity_loader(true);
        goto d4EaH;
        d4EaH:
        $values = json_decode(json_encode(simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOCDATA)), true);
        goto t00Dr;
        AUNko:
    }
    public function center_module()
    {
        goto c7kss;
        ToBSo:
        $this->assign("wn_id", request()->param("wn_id", 0));
        goto lOgf2;
        QbDUM:
        $this->assign("goods_cate", $goods_cate);
        goto ClAnd;
        g1FPM:
        $res = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->update(["center_values" => $data]);
        goto yXTK9;
        PkmC_:
        QvqAN:
        goto We9TU;
        Ox4HB:
        $this->assign("article_class", $article_class);
        goto kVvD_;
        lOgf2:
        $this->assign("my_mod", request()->param("my_mod", -1));
        goto ChY2Z;
        c7kss:
        if (!(request()->isAjax() && request()->method() == "POST")) {
            goto QvqAN;
        }
        goto MXcWk;
        yXTK9:
        return AjaxReturn($res);
        goto PkmC_;
        ChY2Z:
        return view("menu/center_module");
        goto OMlW4;
        ClAnd:
        $article_class = Db::name("ybsc_article_class")->where("is_del=1")->where("mch_id", $this->bus_id)->select();
        goto Ox4HB;
        We9TU:
        $goods_cate = Db::name("ybsc_goods_cate")->where("is_visible=1")->where("mch_id", $this->bus_id)->select();
        goto QbDUM;
        kVvD_:
        $this->assign("yuming", " http://" . $_SERVER["HTTP_HOST"] . "/addons/yb_shop/core/index.php?s=/admin");
        goto Gx4yF;
        Gx4yF:
        $this->assign("wn", request()->param("wn", -1));
        goto ToBSo;
        MXcWk:
        $data = input("param.data");
        goto g1FPM;
        OMlW4:
    }
    public function find_mch_center_mod()
    {
        $mod = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->find();
        return json_decode($mod["center_values"], true);
    }
    public function user_center()
    {
        goto WXQsn;
        oLl5m:
        $info = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->value("center_values");
        goto drlBE;
        HqCR0:
        Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->update(["center_values" => $new_data]);
        goto gJ1no;
        fjROu:
        foreach ($data["all_data"] as &$item) {
            goto RyK48;
            Dt_kp:
            QqlyS:
            goto qOJ5u;
            Tjkwz:
            if (!($item["type"] == "ptm" || $item["type"] == "pto")) {
                goto wAIKw;
            }
            goto g8jkh;
            khht4:
            $item["hidden"] = true;
            goto dyzj3;
            ScFhN:
            rLHx8:
            goto uf4q8;
            EMyW9:
            $item["status"] = 2;
            goto G9H8X;
            jTqHA:
            gGF9G:
            goto ScFhN;
            nvN_M:
            GSajX:
            goto Tjkwz;
            G9H8X:
            $item["hidden"] = true;
            goto Dt_kp;
            lmP0z:
            BX2C6:
            goto BOiuP;
            sDOMd:
            if (!($item["type"] == "kjm" || $item["type"] == "kjo")) {
                goto GSajX;
            }
            goto YvJiI;
            H4glX:
            VsBmn:
            goto jTqHA;
            cVjXp:
            $item["status"] = 2;
            goto kxUPb;
            qOJ5u:
            wAIKw:
            goto HXA2z;
            uauP3:
            if (in_array(274, $role_ids)) {
                goto VsBmn;
            }
            goto cVjXp;
            YvJiI:
            if (in_array(223, $role_ids)) {
                goto xHpID;
            }
            goto Vby55;
            TN3rX:
            C2ix1:
            goto lmP0z;
            g8jkh:
            if (in_array(243, $role_ids)) {
                goto QqlyS;
            }
            goto EMyW9;
            RyK48:
            $item["hidden"] = false;
            goto sDOMd;
            Vby55:
            $item["status"] = 2;
            goto khht4;
            BOiuP:
            if (!($item["type"] == "miaosha")) {
                goto gGF9G;
            }
            goto uauP3;
            GMDal:
            $item["status"] = 2;
            goto x9_mu;
            x9_mu:
            $item["hidden"] = true;
            goto TN3rX;
            dyzj3:
            xHpID:
            goto nvN_M;
            HXA2z:
            if (!($item["type"] == "book")) {
                goto BX2C6;
            }
            goto OS7SO;
            kxUPb:
            $item["hidden"] = true;
            goto H4glX;
            OS7SO:
            if (in_array(210, $role_ids)) {
                goto C2ix1;
            }
            goto GMDal;
            uf4q8:
        }
        goto ew13W;
        txGFH:
        $new_data = json_encode($data);
        goto HqCR0;
        MZ5i1:
        $info = "{\"all_data\":[{\"img\":\"/addons/yb_shop/core/public/images/member/cart.png\",\"type\":\"order\",\"status\":1,\"title\":\"我的订单\",\"time_key\":\"153474118797080\"},{\"img\":\"/addons/yb_shop/core/public/images/member/like.png\",\"type\":\"follow\",\"status\":1,\"title\":\"我的关注\",\"time_key\":\"153474118882593\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/coupon.png\",\"type\":\"coupon\",\"status\":1,\"title\":\"我的优惠券\",\"time_key\":\"153474118930570\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/appointment.png\",\"type\":\"book\",\"status\":1,\"title\":\"我的预约\",\"time_key\":\"153474118919817\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_icon.png\",\"type\":\"kjm\",\"status\":1,\"title\":\"我的砍价\",\"time_key\":\"153474119087708\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_order_icon.png\",\"type\":\"kjo\",\"status\":1,\"title\":\"砍价订单\",\"time_key\":\"153474119043189\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/group_icon.png\",\"type\":\"ptm\",\"status\":1,\"title\":\"我的拼团\",\"time_key\":\"153474119153315\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/groupj_order_icon.png\",\"type\":\"pto\",\"status\":1,\"title\":\"拼团订单\",\"time_key\":\"153474119179761\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/service.png\",\"type\":\"kefu\",\"status\":1,\"title\":\"在线客服\",\"time_key\":\"15347411926469\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/location.png\",\"type\":\"address\",\"status\":1,\"title\":\"收货地址\",\"time_key\":\"153474119365949\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/about.png\",\"type\":\"about\",\"status\":1,\"title\":\"关于我们\",\"time_key\":\"153474119422866\"}],\"win_color\":\"#ffffff\",\"win_img\":\"\"}";
        goto gPcd7;
        sFcSF:
        $m = array(0 => array("img" => "http://mp.sssvip.net/addons/yb_shop/core/public/images/member/biubiu.png", "type" => "miaosha", "title" => "秒杀订单", "status" => 1, "time_key" => "153474119422866"));
        goto OkLLl;
        gPcd7:
        oK3QW:
        goto fGjvV;
        Ad6ZA:
        if (empty($role_id)) {
            goto UEM5h;
        }
        goto TY_sU;
        OkLLl:
        array_splice($data["all_data"], -3, 0, $m);
        goto feZ78;
        fRT2f:
        $data = json_decode($info, true);
        goto jq0Q7;
        SiHim:
        return view();
        goto GENys;
        gJ1no:
        $this->assign("list", $data["all_data"]);
        goto SiHim;
        drlBE:
        if (!empty($info)) {
            goto oK3QW;
        }
        goto MZ5i1;
        WXQsn:
        $wq_uid = $_SESSION["we7_w"]["user"]["uid"];
        goto oLl5m;
        feZ78:
        kVTcs:
        goto Ad6ZA;
        TY_sU:
        $role_ids = explode(",", $role_id["module_id_array"]);
        goto fjROu;
        CkOti:
        UEM5h:
        goto txGFH;
        jq0Q7:
        if (strpos($info, "miaosha")) {
            goto kVTcs;
        }
        goto sFcSF;
        fGjvV:
        $role_id = Db::name("ybsc_user_permission")->alias("p")->join("ybsc_user_role r", "p.role_id = r.role_id")->field("r.module_id_array")->where(["p.user_id" => $wq_uid])->find();
        goto fRT2f;
        ew13W:
        E_Yar:
        goto CkOti;
        GENys:
    }
    function deep_in_array($value, $array)
    {
        goto M9CQU;
        qqOcR:
        GIsLK:
        goto I1w5h;
        tryKR:
        RqMnP:
        goto kO3HQ;
        mbzkR:
        $i++;
        goto PxSYs;
        s1I7X:
        qE0EY:
        goto EUR6C;
        M9CQU:
        $rs = false;
        goto meMIF;
        RVfmD:
        $rs = true;
        goto s93oP;
        WsnbJ:
        if (!($array[$i]["type"] == $value)) {
            goto RqMnP;
        }
        goto RVfmD;
        s93oP:
        goto qE0EY;
        goto tryKR;
        EUR6C:
        return $rs;
        goto edHAB;
        I1w5h:
        if (!($i < count($array))) {
            goto qE0EY;
        }
        goto WsnbJ;
        meMIF:
        $i = 0;
        goto qqOcR;
        kO3HQ:
        YgnwK:
        goto mbzkR;
        PxSYs:
        goto GIsLK;
        goto s1I7X;
        edHAB:
    }
    public function del_user_center()
    {
        goto ReY3H;
        attgJ:
        $info = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->value("center_values");
        goto aPbF8;
        tEvpa:
        return AjaxReturn($res);
        goto fD1rX;
        l9AJ6:
        foreach ($data["all_data"] as &$item) {
            goto B8x7M;
            iPQ33:
            dcqJo:
            goto rge96;
            TM1rv:
            Kn4E5:
            goto l0hVV;
            w5CfV:
            if ($key == "off") {
                goto dcqJo;
            }
            goto fx5bF;
            jr1ma:
            l0Pz8:
            goto TM1rv;
            rTUEU:
            goto l0Pz8;
            goto iPQ33;
            l0hVV:
            KYue1:
            goto gxB0z;
            rge96:
            $item["status"] = 2;
            goto jr1ma;
            fx5bF:
            $item["status"] = 1;
            goto rTUEU;
            B8x7M:
            if (!($item["type"] == $type)) {
                goto Kn4E5;
            }
            goto w5CfV;
            gxB0z:
        }
        goto zfEuk;
        zfEuk:
        s2uca:
        goto AlQyI;
        ReY3H:
        $type = input("param.type");
        goto eajGw;
        aPbF8:
        if (!empty($info)) {
            goto z78gB;
        }
        goto maRVK;
        QCOh7:
        $res = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->update(["center_values" => $new_data]);
        goto tEvpa;
        eajGw:
        $key = input("param.key");
        goto attgJ;
        maRVK:
        $info = "{\"all_data\":[{\"img\":\"/addons/yb_shop/core/public/images/member/cart.png\",\"type\":\"order\",\"status\":1,\"title\":\"我的订单\",\"time_key\":\"153474118797080\"},{\"img\":\"/addons/yb_shop/core/public/images/member/like.png\",\"type\":\"follow\",\"status\":1,\"title\":\"我的关注\",\"time_key\":\"153474118882593\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/coupon.png\",\"type\":\"coupon\",\"status\":1,\"title\":\"我的优惠券\",\"time_key\":\"153474118930570\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/appointment.png\",\"type\":\"book\",\"status\":1,\"title\":\"我的预约\",\"time_key\":\"153474118919817\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_icon.png\",\"type\":\"kjm\",\"status\":1,\"title\":\"我的砍价\",\"time_key\":\"153474119087708\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/kj_order_icon.png\",\"type\":\"kjo\",\"status\":1,\"title\":\"砍价订单\",\"time_key\":\"153474119043189\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/group_icon.png\",\"type\":\"ptm\",\"status\":1,\"title\":\"我的拼团\",\"time_key\":\"153474119153315\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/groupj_order_icon.png\",\"type\":\"pto\",\"status\":1,\"title\":\"拼团订单\",\"time_key\":\"153474119179761\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/service.png\",\"type\":\"kefu\",\"status\":1,\"title\":\"在线客服\",\"time_key\":\"15347411926469\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/location.png\",\"type\":\"address\",\"status\":1,\"title\":\"收货地址\",\"time_key\":\"153474119365949\"},{\"img\":\"http://wq.sssvip.net/addons/yb_shop/core/public/images/member/about.png\",\"type\":\"about\",\"status\":1,\"title\":\"关于我们\",\"time_key\":\"153474119422866\"}],\"win_color\":\"#ffffff\",\"win_img\":\"\"}";
        goto hwcfA;
        hwcfA:
        z78gB:
        goto vgA7V;
        vgA7V:
        $data = json_decode($info, true);
        goto l9AJ6;
        AlQyI:
        $new_data = json_encode($data);
        goto QCOh7;
        fD1rX:
    }
    public function set_center_title()
    {
        goto Pp1gi;
        hgCWa:
        if (!empty($info)) {
            goto zk0LB;
        }
        goto iot00;
        YfOSu:
        zk0LB:
        goto WRfrh;
        C0EPL:
        $new_data = json_encode($data);
        goto Rw8HV;
        Rw8HV:
        $res = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->update(["center_values" => $new_data]);
        goto Iat3M;
        iot00:
        $info = "{\"all_data\":[{\"img\":\"/public/images/member/cart.png\",\"type\":\"order\",\"status\":1,\"title\":\"我的订单\",\"time_key\":\"153474118797080\"},{\"img\":\"/public/images/member/like.png\",\"type\":\"follow\",\"status\":1,\"title\":\"分销中心\",\"time_key\":\"153474118882593\"},{\"img\":\"/public/images/member/like.png\",\"type\":\"follow\",\"status\":1,\"title\":\"我的关注\",\"time_key\":\"153474118882593\"},{\"img\":\"/public/images/member/coupon.png\",\"type\":\"coupon\",\"status\":1,\"title\":\"我的优惠券\",\"time_key\":\"153474118930570\"},{\"img\":\"/public/images/member/appointment.png\",\"type\":\"book\",\"status\":1,\"title\":\"我的预约\",\"time_key\":\"153474118919817\"},{\"img\":\"/public/images/member/kj_icon.png\",\"type\":\"kjm\",\"status\":1,\"title\":\"我的砍价\",\"time_key\":\"153474119087708\"},{\"img\":\"/public/images/member/kj_order_icon.png\",\"type\":\"kjo\",\"status\":1,\"title\":\"砍价订单\",\"time_key\":\"153474119043189\"},{\"img\":\"/public/images/member/group_icon.png\",\"type\":\"ptm\",\"status\":1,\"title\":\"我的拼团\",\"time_key\":\"153474119153315\"},{\"img\":\"/public/images/member/groupj_order_icon.png\",\"type\":\"pto\",\"status\":1,\"title\":\"拼团订单\",\"time_key\":\"153474119179761\"},{\"img\":\"/public/images/member/service.png\",\"type\":\"kefu\",\"status\":1,\"title\":\"在线客服\",\"time_key\":\"15347411926469\"},{\"img\":\"/public/images/member/location.png\",\"type\":\"address\",\"status\":1,\"title\":\"收货地址\",\"time_key\":\"153474119365949\"},{\"img\":\"/public/images/member/about.png\",\"type\":\"about\",\"status\":1,\"title\":\"关于我们\",\"time_key\":\"153474119422866\"}],\"win_color\":\"#ffffff\",\"win_img\":\"\"}";
        goto YfOSu;
        FTIr7:
        Gc545:
        goto C0EPL;
        ZOFsx:
        $info = Db::name("ybsc_user_tmpl")->where("mch_id", $this->bus_id)->value("center_values");
        goto hgCWa;
        gVzgI:
        $val = input("param.val");
        goto ZOFsx;
        lvX19:
        foreach ($data["all_data"] as &$item) {
            goto do4dO;
            do4dO:
            if (!($item["type"] == $type)) {
                goto pYQVr;
            }
            goto XuNVG;
            XuNVG:
            $item["title"] = $val;
            goto GU2cA;
            GU2cA:
            pYQVr:
            goto xHqqF;
            xHqqF:
            OdyTt:
            goto SOsHq;
            SOsHq:
        }
        goto FTIr7;
        Pp1gi:
        $type = input("param.type");
        goto gVzgI;
        Iat3M:
        return AjaxReturn($res);
        goto q868Z;
        WRfrh:
        $data = json_decode($info, true);
        goto lvX19;
        q868Z:
    }
    public function copy_universal()
    {
        goto L6mY7;
        bFEQf:
        y_p8k:
        goto Xc8T9;
        TAecR:
        $rs = Db::name("ybsc_bus_tmpl")->insert($data);
        goto bFEQf;
        hyfPy:
        if (!$info) {
            goto y_p8k;
        }
        goto tIqnW;
        y9wWI:
        $rs = 0;
        goto hyfPy;
        L6mY7:
        $id = input("param.id");
        goto Ff1rP;
        tIqnW:
        $data = ["name" => $info["name"], "index_values" => $info["index_values"], "img" => $info["img"], "mch_id" => $info["mch_id"], "is_del" => 1, "create_time" => time()];
        goto TAecR;
        Ff1rP:
        $info = Db::name("ybsc_bus_tmpl")->where("id", $id)->find();
        goto y9wWI;
        Xc8T9:
        return AjaxReturn($rs);
        goto QbTpJ;
        QbTpJ:
    }
    public function wxapp_page()
    {
        $this->assign("data", $this->wx_page);
        return view("menu/wxapp");
    }
    public function wechats_page()
    {
        goto KU95u;
        zBsJ1:
        $wechats_page_arr_new = [];
        goto Ui_PV;
        fN927:
        sr1Pz:
        goto Rm3hc;
        zHaWz:
        return view("menu/wechats_page");
        goto O1eyU;
        KU95u:
        $wechats_page_arr = $this->wechats_page;
        goto zBsJ1;
        wSubi:
        $url = $host . "addons/yb_shop/core/web.php?page=:page&mch_id={$this->bus_id}";
        goto EvjWH;
        EvjWH:
        foreach ($wechats_page_arr as $v) {
            goto J5sS_;
            hGFrH:
            wYXig:
            goto ezTpx;
            J5sS_:
            $v["path"] = str_replace(":page", $v["path"], $url);
            goto uZ6Lh;
            uZ6Lh:
            $wechats_page_arr_new[] = $v;
            goto hGFrH;
            ezTpx:
        }
        goto fN927;
        Rm3hc:
        $this->assign("data", $wechats_page_arr_new);
        goto zHaWz;
        Ui_PV:
        $host = $_SESSION["we7_w"]["siteroot"];
        goto wSubi;
        O1eyU:
    }
}