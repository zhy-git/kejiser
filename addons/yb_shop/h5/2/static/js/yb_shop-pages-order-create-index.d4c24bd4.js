(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["yb_shop-pages-order-create-index"],{"9e8e":function(t,e,a){"use strict";a.r(e);var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-uni-view",[t.show?a("v-uni-view",{staticClass:"page footer"},[3==t.is_mention?a("v-uni-view",{staticClass:"nav"},[a("v-uni-view",{class:"express"==t.send_type?"red":"default",attrs:{"data-send_type":"express"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("快递配送")]),a("v-uni-view",{class:"selftake"==t.send_type?"red":"default",attrs:{"data-send_type":"selftake"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("上门自提")])],1):t._e(),5==t.is_mention?a("v-uni-view",{staticClass:"nav"},[a("v-uni-view",{class:"express"==t.send_type?"red":"default",attrs:{"data-send_type":"express"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("快递配送")]),a("v-uni-view",{class:"endpay"==t.send_type?"red":"default",attrs:{"data-send_type":"endpay"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("货到付款")])],1):t._e(),6==t.is_mention?a("v-uni-view",{staticClass:"nav"},[a("v-uni-view",{class:"selftake"==t.send_type?"red":"default",attrs:{"data-send_type":"selftake"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("上门自提")]),a("v-uni-view",{class:"endpay"==t.send_type?"red":"default",attrs:{"data-send_type":"endpay"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("货到付款")])],1):t._e(),7==t.is_mention?a("v-uni-view",{staticClass:"nav"},[a("v-uni-view",{class:"express"==t.send_type?"red":"default",attrs:{"data-send_type":"express"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("快递配送")]),a("v-uni-view",{class:"selftake"==t.send_type?"red":"default",attrs:{"data-send_type":"selftake"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("上门自提")]),a("v-uni-view",{class:"endpay"==t.send_type?"red":"default",attrs:{"data-send_type":"endpay"},on:{click:function(e){e=t.$handleEvent(e),t.dispatchtype(e)}}},[t._v("货到付款")])],1):t._e(),a("v-uni-view",["express"==t.send_type||"endpay"==t.send_type?a("v-uni-view",[a("v-uni-view",{staticClass:"fui-cell-group"},[a("v-uni-navigator",{staticClass:"fui-cell",attrs:{"hover-class":"none",url:"../../member/address/select"}},[a("v-uni-image",{staticClass:"fui-cell-icon",attrs:{src:t.icons.location01}}),a("v-uni-view",{staticClass:"fui-cell-text textl info"},[""!=t.list.address?a("v-uni-view",[a("v-uni-text",{staticClass:"name"},[t._v(t._s(t.list.address.consigner)+" ")]),a("v-uni-text",[t._v(t._s(t.list.address.phone))])],1):t._e(),t.list.address.address?a("v-uni-view",{staticClass:"adress"},[t._v(t._s(t.list.address.province+t.list.address.city+t.list.address.district+" "+t.list.address.address))]):t._e(),t.list.address.address?t._e():a("v-uni-view",{staticClass:"text no-address"},[t._v("添加收货地址")])],1),a("v-uni-view",{staticClass:"fui-cell-remark"})],1)],1)],1):t._e(),"selftake"==t.send_type?a("v-uni-view",[a("v-uni-view",{staticClass:"join_g_li"},[a("v-uni-view",{staticClass:"join_li"},[a("v-uni-text",[t._v("姓名")]),a("v-uni-input",{attrs:{type:"text",placeholder:"请输入姓名",value:t.data.consigner,id:"consigner"},on:{input:function(e){e=t.$handleEvent(e),t.dataChange(e)}}})],1),a("v-uni-view",{staticClass:"join_li join_li_p"},[a("v-uni-text",[t._v("手机号")]),a("v-uni-input",{attrs:{type:"number",placeholder:"请输入手机号",value:t.data.phone,id:"phone"},on:{input:function(e){e=t.$handleEvent(e),t.dataChange(e)}}})],1),a("v-uni-view",{staticClass:"join_li join_li_p"},[a("v-uni-view",{staticClass:"section"},[a("v-uni-view",{staticClass:"s_title"},[a("v-uni-text",[t._v("自提日期")])],1),a("v-uni-picker",{attrs:{mode:"date",start:t.start_time,end:t.end_time,value:t.date},on:{change:function(e){e=t.$handleEvent(e),t.bindDateChange(e)}}},[a("v-uni-view",{staticClass:"picker"},[t._v(t._s(""!=t.date?t.date:"请选择日期"))])],1),a("v-uni-view",{staticClass:"clear"})],1)],1),a("v-uni-view",{staticClass:"join_li join_li_p"},[a("v-uni-view",{staticClass:"section"},[a("v-uni-view",{staticClass:"s_title"},[a("v-uni-text",[t._v("自提时间")])],1),a("v-uni-picker",{attrs:{mode:"time",value:t.time},on:{change:function(e){e=t.$handleEvent(e),t.bindTimeChange(e)}}},[a("v-uni-view",{staticClass:"picker"},[t._v(t._s(""!=t.time?t.time:"请选择时间"))])],1),a("v-uni-view",{staticClass:"clear"})],1)],1)],1)],1):t._e(),a("v-uni-view",{staticClass:"fui-list-group",staticStyle:{"margin-top":"20rpx"}},[0==t.cart_list.length?a("v-uni-view",[a("v-uni-view",{staticClass:"fui-list goods-item noclick"},[a("v-uni-view",{staticClass:"fui-list-media",attrs:{"data-url":"/yb_shop/pages/goods/detail/index?id="+t.list.goods_id},on:{click:function(e){e=t.$handleEvent(e),t.url(e)}}},[a("v-uni-image",{staticClass:"round goods_img",attrs:{src:t.list.pic.img_cover}})],1),a("v-uni-view",{staticClass:"fui-list-inner",attrs:{"data-url":"/yb_shop/pages/goods/detail/index?id="+t.list.goods_id},on:{click:function(e){e=t.$handleEvent(e),t.url(e)}}},[a("v-uni-view",{staticClass:"sure_subtitle"},[t._v("\n\t\t\t\t\t\t\t\t"+t._s(t.list.goods.goods_name)+"\n\t\t\t\t\t\t\t")]),a("v-uni-view",{staticClass:"text cart-option"},[t.list.sku_name?a("v-uni-view",{staticClass:"choose-option"},[t._v(t._s(t.list.sku_name))]):t._e()],1)],1),a("v-uni-view",{staticClass:"fui-list-angle"},[a("v-uni-text",{staticClass:"price"},[t._v("￥"+t._s(t.list.price))]),a("v-uni-view",[t._v("x"+t._s(t.options.total))])],1)],1)],1):t._e(),t.cart_list.length>0?a("v-uni-view",t._l(t.cart_list,function(e,i){return a("v-uni-view",{key:i},[a("v-uni-view",{staticClass:"fui-list goods-item noclick"},[a("v-uni-view",{staticClass:"fui-list-media",attrs:{"data-url":"/yb_shop/pages/goods/detail/index?id="+e.goods_id},on:{click:function(e){e=t.$handleEvent(e),t.url(e)}}},[a("v-uni-image",{staticClass:"round goods_img",attrs:{src:e.pic.img_cover}})],1),a("v-uni-view",{staticClass:"fui-list-inner",attrs:{"data-url":"/yb_shop/pages/goods/detail/index?id="+e.goods_id},on:{click:function(e){e=t.$handleEvent(e),t.url(e)}}},[a("v-uni-view",{staticClass:"sure_subtitle"},[t._v("\n\t\t\t\t\t\t\t\t\t"+t._s(e.goods_name)+t._s(e.sku_name)+"\n\t\t\t\t\t\t\t\t")]),a("v-uni-view",{staticClass:"text cart-option"},[e.price.sku_name?a("v-uni-view",{staticClass:"choose-option"},[t._v(t._s(e.price.sku_name))]):t._e()],1)],1),a("v-uni-view",{staticClass:"fui-list-angle"},[a("v-uni-text",{staticClass:"price"},[t._v("￥"+t._s(e.price.price))]),a("v-uni-view",[t._v("x"+t._s(e.num))])],1)],1)],1)})):t._e()],1),a("v-uni-view",{staticClass:"fui-list-group"},[a("v-uni-view",{staticClass:"fui-cell-group"},[a("v-uni-view",{staticClass:"fui-cell"},[a("v-uni-view",{staticClass:"fui-cell-info"},[a("v-uni-input",{attrs:{id:"buyer_message",placeholder:"选填：买家留言（50字以内）"},on:{input:function(e){e=t.$handleEvent(e),t.dataChange(e)}}})],1)],1)],1)],1),a("v-uni-view",{staticClass:"fui-cell-group",staticStyle:{"margin-top":"20rpx"}},[a("v-uni-view",{staticClass:"fui-cell"},[a("v-uni-view",{staticClass:"fui-cell-text"},[t._v("商品小计")]),a("v-uni-view",{staticClass:"fui-cell-remark noremark"},[t._v("\n\t\t\t\t\t\t共\n\t\t\t\t\t\t"),a("v-uni-text",{staticClass:"text-danger"},[t._v(t._s(t.options.total))]),t._v(" 件商品 合计：\n\t\t\t\t\t\t"),a("v-uni-text",{staticClass:"text-danger"},[t._v("¥ "+t._s(t.data.pay_money))])],1)],1),"express"==t.send_type?a("v-uni-view",{staticClass:"fui-cell"},[a("v-uni-view",{staticClass:"fui-cell-text"},[t._v("运费")]),a("v-uni-view",{staticClass:"fui-cell-remark noremark"},[t._v("¥\n\t\t\t\t\t\t"),a("v-uni-text",[t._v(t._s(t.data.shipping_money))])],1)],1):t._e(),0!=t.rebate_money?a("v-uni-view",{staticClass:"fui-cell"},[a("v-uni-view",{staticClass:"fui-cell-text"},[t._v("会员折扣享"+t._s(t.user_rebate)+"折")]),a("v-uni-view",{staticClass:"text-danger"},[t._v("¥\n\t\t\t\t\t\t"),a("v-uni-text",[t._v(t._s(t.rebate_money))])],1)],1):t._e(),t.data.discount_money&&"0.00"!=t.data.discount_money?a("v-uni-view",{staticClass:"fui-cell"},[a("v-uni-view",{staticClass:"fui-cell-text"},[t._v("减免")]),a("v-uni-view",{staticClass:"fui-cell-remark noremark"},[a("v-uni-text",{staticClass:"text-danger"},[t._v("- ¥")]),a("v-uni-text",{staticClass:"text-danger"},[t._v(t._s(t.data.discount_money))])],1)],1):t._e(),0!=t.coupon_num?a("v-uni-view",{class:"fui-cell "+(t.coupon_display?"a-li02":"a-li"),on:{click:function(e){e=t.$handleEvent(e),t.open_coupon(e)}}},[a("v-uni-view",{staticClass:"fui-cell-text"},[t._v("优惠券")]),a("v-uni-view",{staticClass:"fui-cell-remark noremark",staticStyle:{"margin-right":"40rpx"}},[a("v-uni-text",{staticClass:"text-danger"}),a("v-uni-text",{staticClass:"text-danger"},[t._v(t._s(t.data.coupon_money&&0!=t.data.coupon_money?"- ¥"+t.data.coupon_money:t.coupon_num+"张可用"))])],1)],1):t._e(),t._l(t.coupon,function(e,i){return 0!=t.coupon_num&&t.coupon_display?a("v-uni-view",{key:i},[a("v-uni-view",{staticClass:"coupon_box",attrs:{"data-id":e.id,"data-together":e.together,"data-coupon_money":e.discount_money},on:{click:function(e){e=t.$handleEvent(e),t.select(e)}}},[a("v-uni-label",{staticClass:"radio"},[a("v-uni-view",{staticClass:"coupon_price"},[a("v-uni-text",{staticClass:"price01"},[t._v("￥")]),a("v-uni-text",{staticClass:"price02"},[t._v(t._s(e.discount_money))])],1),a("v-uni-view",{staticClass:"coupon_time"},[t._v("截止时间："+t._s(e.endtime))]),a("v-uni-view",{staticClass:"coupon_con"},[t._v("满"+t._s(e.satisfy_money)+"元可用 "+t._s(2==e.together?"(可参与满减)":""))])],1)],1)],1):t._e()}),0!=t.coupon_num&&t.coupon_display?a("v-uni-label",{staticClass:"radio",attrs:{"data-id":"","data-together":"2","data-coupon_money":"0.00"},on:{click:function(e){e=t.$handleEvent(e),t.select(e)}}},[a("v-uni-view",{staticClass:"cannel_btn"},[a("v-uni-text",[t._v("不使用优惠券")])],1)],1):t._e()],2)],1),a("v-uni-view",{staticStyle:{height:"62px"}}),a("v-uni-view",{class:"fui-mask "+(t.showPicker?"show":"")}),a("v-uni-view",{staticClass:"fui-footer"},[a("v-uni-view",{staticClass:"tool nopadding"},[a("v-uni-view",{staticClass:"text"},[a("v-uni-view",{staticClass:"title text-right",staticStyle:{"padding-right":"12rpx"}},[t._v("需支付：\n\t\t\t\t\t\t"),a("v-uni-text",{staticClass:"text-danger"},[t._v(t._s(t.data.pay_money)+"元")])],1)],1),a("v-uni-view",{staticClass:"btns"},[a("v-uni-text",{class:"btn "+(t.submit?"":"disabled2"),style:"background:"+("#000000"!=t.config.selectedColor?t.config.selectedColor:t.config.background)+";color:"+("#000000"==t.config.selectedColor&&"black"==t.config.font_color?"#000000":"#ffffff")+";font-size:34rpx;border:1px solid "+("#000000"!=t.config.selectedColor?t.config.selectedColor:t.config.background)+";width:60rpm;!important;",on:{click:function(e){e=t.$handleEvent(e),t.fromSubmit(e)}}},[t._v("确认订单")])],1)],1)],1),a("v-uni-view",{class:"fui-toast "+(t.FoxUIToast.show?"in":"out")},[a("v-uni-view",{staticClass:"text"},[t._v(t._s(t.FoxUIToast.text))])],1)],1):t._e(),a("v-uni-form",{staticClass:"index-advs-navigator",attrs:{"report-submit":""},on:{submit:function(e){e=t.$handleEvent(e),t.fromSubmit(e)}}},[a("v-uni-button",{staticClass:"bottom_form_btn",attrs:{formType:"submit"}})],1)],1)},n=[],o=a("ca7b");function s(t){return s="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"===typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},s(t)}"function"==typeof Symbol&&s(Symbol.iterator);var r=getApp(),l=r.core,d=(r.check,{extends:o["a"],data:function(){return{icons:r.icons,list:{address:{consigner:""},pic:{img_cover:""},goods:{goods_name:""}},cart_list:[],data:[],showPicker:!1,pvalOld:[0,0,0],pval:[0,0,0],areas:[],noArea:!0,submit:!0,coupon:"",FoxUIToast:"",rebate_money:0,coupon_display:!1,coupon_num:0,send_type:"express",is_mention:1,date:"",time:"",formid:"",start_time:"2018-01-01",end_time:"2050-01-01",button_color:r.config.button_color,show:!0}},methods:{dispatchtype:function(t){var e=this,a=l.pdata(t);e.setData(a),e.options.type&&"cart"==e.options.type?e.cart_caculate():e.caculate_fee(e.options.goods_id,e.options.total,function(t){e.caculate(t)})},bindDateChange:function(t){var e=t.detail.value.split("-");1==e.length?t.detail.value=t.detail.value+"-01-01":2==e.length&&(t.detail.value=t.detail.value+"-01"),console.log("picker发送选择改变，携带值为",t.detail.value);var a=l.time_str(t.detail.value+" "+this.time),i=Date.parse(new Date)/1e3;i>a?l.error("不小于当前时间"):this.setData({date:t.detail.value})},bindTimeChange:function(t){console.log("picker发送选择改变，携带值为",t.detail.value),this.setData({time:t.detail.value})},CouponApi:function(t){var e=this,a=[];l.get("Market/UserCoupon",{user_id:getApp().getCache("userinfo").uid},function(i){if(0==i.code&&i.info.length>0){for(var n=Date.parse(new Date)/1e3,o=0;o<i.info.length;o++)t>=i.info[o].satisfy_money&&0==i.info[o].status&&i.info[o].end_time>=n&&a.push(i.info[o]);a.sort(function(t,e){return parseFloat(e.satisfy_money)-parseFloat(t.satisfy_money)}),e.setData({coupon:a,coupon_num:a.length})}})},select:function(t){var e=this,a=e.data,i=e.data.order_money,n=e.data.discount_money,o=l.pdata(t);1==o.together?(e.setData({data:a}),e.data.discount_money=0):(n||(n=0),a["discount_money"]=n,e.setData({data:a}));var s=parseFloat(i)-parseFloat(e.data.discount_money)-parseFloat(o.coupon_money);a["coupon_id"]=o.id,a["coupon_money"]=o.coupon_money,a["pay_money"]=parseFloat(s).toFixed(2),e.setData({data:a,coupon_display:!1})},open_coupon:function(){var t=!this.coupon_display;this.setData({coupon_display:t})},toggle:function(t){var e=l.pdata(t),a=e.id,i=e.type,n={};n[i]=0==a||void 0===a?1:0,this.setData(n)},phone:function(t){l.phone(t)},number:function(t){var e=this,a="",i=l.data(t).action;"minus"==i?a=parseInt(e.options.total)-1:"plus"==i&&(a=parseInt(e.options.total)+1),e.setData({"options.total":a}),this.caculate()},cart_number:function(t){var e=this,a=(l.pdata(t).id,l.pdata(t).key),i=e.cart_list,n=l.data(t).action;"minus"==n?i[a].num=parseInt(i[a].num)-1:"plus"==n&&(i[a].num=parseInt(i[a].num)+1),e.setData({cart_list:i}),this.cart_caculate()},caculate_fee:function(t,e,a){var i=this,n=i.list.address;"selftake"==i.data.send_type?"function"==typeof a&&a(0):n.area&&n.area>0?l.get("Market/UserFee",{goods_id:t,num:e,area_id:n.area},function(t){0==t.code?"function"==typeof a&&a(t.info):l.alert(t.msg,function(){"function"==typeof a&&a(0)})}):"function"==typeof a&&a(0)},caculate:function(t){var e=this,a=0,i=e.list.activity,n=e.list.address;n.order_money=parseFloat(e.options.total*e.list.price).toFixed(2),e.CouponApi(n.order_money);for(var o=0;o<i.length;o++)if(console.log(i[o].satisfy_money),console.log(n.order_money),parseFloat(n.order_money)>=parseFloat(i[o].satisfy_money)){a=i[o].discount_money,n.discount_money=i[o].discount_money,n.discount_id=i[o].id;break}var s=0;e.data.user_level&&0!=e.data.user_level&&e.data.user_rebate&&e.data.user_rebate<10&&(s=parseFloat(n.order_money)*(1-parseFloat(e.data.user_rebate)/10),s=s.toFixed(2)),n.rebate_money=s,n.shipping_money=t,n.pay_money=parseFloat(parseInt(e.options.total)*parseFloat(e.list.price)+n.shipping_money-parseFloat(a)-parseFloat(s)).toFixed(2),parseFloat(n.pay_money)<0&&(n.pay_money=0),n.sku_id=e.options.sku_id+":"+e.options.total,n.user_name=getApp().getCache("userinfo").nickName,n.buyer_id=getApp().getCache("userinfo").uid,e.setData({data:n,discount_money:a||0,rebate_money:s})},cart_caculate:function(){var t=this,e=0,a=t.list.activity,i=0,n=this.options,o=this.cart_list,s=t.list.address,r=0,l=0,d=0,c="";o.forEach(function(o){console.log(o),t.caculate_fee(o.goods_id,o.num,function(u){r+=parseFloat(o.num*o.price.price),l+=parseFloat(u),c+=o.sku_id+":"+o.num+",",i+=o.num,t.CouponApi(r);for(var f=0;f<a.length;f++)if(r>=a[f].satisfy_money){e=a[f].discount_money,s.discount_money=a[f].discount_money,s.discount_id=a[f].id;break}var p=0;t.data.user_level&&0!=t.data.user_level&&t.data.user_rebate&&t.data.user_rebate<10&&(p=parseFloat(r)*(1-parseFloat(t.data.user_rebate)/10),p=p.toFixed(2)),s.rebate_money=p,d=parseFloat(r+l-e-p).toFixed(2),s.order_money=parseFloat(r).toFixed(2),"express"==t.data.send_type?s.shipping_money=l:s.shipping_money=0,parseFloat(d)<0&&(d=0),s.pay_money=d,s.sku_id=c,s.user_name=getApp().getCache("userinfo").nickName,s.buyer_id=getApp().getCache("userinfo").uid,t.setData({data:s,discount_money:e||0,rebate_money:p}),n.total=i,t.setData({options:n})})})},getNowDate:function(){var t=new Date,e=t.getFullYear(),a=t.getMonth()+1,i=t.getDate(),n=e+"-"+a+"-"+i;return n},getNowTime:function(){var t=new Date,e=t.getHours(),a=t.getMinutes(),i=e+":"+a;return i},fromSubmit:function(t){this.getNowDate();var e=this,a=this.data;if(e.setData({formid:t.detail.formId}),!a.pay_money)return!1;if(e.submit){if("selftake"==e.send_type){if(!a.phone)return l.error("请填写姓名"),!1;if(!a.phone)return l.error("请填写电话"),!1;if(!e.date)return l.error("请选择自提时间"),!1;a.mention_time=l.time_str(e.date+" "+a.data.time),a.mailing_type=2}else if("endpay"==e.send_type){if(!a.phone||""==a.province)return l.error("请选择收货地址！"),!1;a.mailing_type=4}else{if(!a.phone||""==a.province)return l.error("请选择收货地址！"),!1;a.mailing_type=1}l.get("Order/CreateOrder",a,function(t){0==t.code?(l.get("Wxpush/CreateOrderPush",{order_id:t.info,formid:e.formid,uid:getApp().getCache("userinfo").uid},function(t){console.log(t)}),e.setData({order_id:t.info}),e.options.cart_id&&l.get("Cart/DelCart",{cart_id:e.options.cart_id},function(t){t.code,console.log(t)}),e.setData({submit:!1}),"endpay"!=e.send_type?wx.navigateTo({url:"/yb_shop/pages/order/pay/index?id="+t.info}):wx.navigateTo({url:"/yb_shop/pages/order/detail/index?order_id="+t.info})):l.alert(t.msg)})}else"endpay"!=e.send_type?wx.navigateTo({url:"/yb_shop/pages/order/pay/index?id="+e.order_id}):wx.navigateTo({url:"/yb_shop/pages/order/detail/index?order_id="+e.order_id})},dataChange:function(t){var e=this.data;this.list;switch(t.target.id){case"buyer_message":e.buyer_message=t.detail.value;break;case"consigner":e.consigner=t.detail.value;break;case"phone":e.phone=t.detail.value;break}this.setData({data:e})},radioChange:function(t){this.setData({data:t})},url:function(t){var e=l.pdata(t).url;wx.redirectTo({url:e})}},onLoad:function(t){if(!getApp().getCache("userinfo").uid)return getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1;this.date=this.getNowDate(),this.time=this.getNowTime(),l.setting();var e=this;this.data;this.setData({options:t,button_color:getApp().config.button_color,font_color:getApp().config.font_color,config:getApp().config}),l.get("user/About",{user_id:getApp().getCache("userinfo").uid},function(t){if(0==t.code){var a=e.send_type;2==t.info.is_mention||6==t.info.is_mention?a="selftake":4==t.info.is_mention&&(a="endpay"),e.setData({user_level:t.info.user_level,user_rebate:t.info.user_rebate,is_mention:t.info.is_mention,send_type:a})}}),e.options.type&&"cart"==e.options.type?l.get("goods/CartGoods",e.options,function(t){0==t.code?(e.setData({cart_list:t.info.info,list:t.info,show:!0}),e.cart_caculate()):l.alert(t.msg)}):l.get("goods/GetGoods",e.options,function(t){0==t.code?(e.setData({list:t.info,show:!0}),e.caculate_fee(e.options.goods_id,e.options.total,function(t){e.caculate(t)})):l.alert(t.msg)})},onShow:function(){var t=this,e=r.getCache("orderAddress");if(e){var a=t.list;a["address"]=e,this.setData({list:a}),t.options.cart_id?t.cart_caculate():t.caculate_fee(t.options.goods_id,t.options.total,function(e){t.caculate(e)})}},onPullDownRefresh:function(){wx.stopPullDownRefresh()}}),c=d,u=(a("dc0b"),a("2877")),f=Object(u["a"])(c,i,n,!1,null,"e56af48a",null);f.options.__file="index.vue";e["default"]=f.exports},a8fa:function(t,e,a){var i=a("b7a2");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("4f18953a",i,!0,{sourceMap:!1,shadowMode:!1})},b7a2:function(t,e,a){e=t.exports=a("2350")(!1),e.push([t.i,'\n.fui-number[data-v-e56af48a]{-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%?26?%;margin:0;width:%?200?%;border:1px solid #d9d9d9;-webkit-justify-content:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;overflow:hidden\n}\n.fui-number[data-v-e56af48a],.minus[data-v-e56af48a],.plus[data-v-e56af48a]{position:relative;height:%?60?%\n}\n.minus[data-v-e56af48a],.plus[data-v-e56af48a]{width:%?60?%;font-weight:700;color:#999;text-align:center;background:#f7f7f7;line-height:%?60?%;z-index:1\n}\n.plus[data-v-e56af48a]{border-left:1px solid #d9d9d9\n}\n.minus[data-v-e56af48a]{border-right:1px solid #d9d9d9\n}\n.fui-number .num[data-v-e56af48a]{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%?40?%;color:#666;text-align:center;border:0\n}\n.disabled2[data-v-e56af48a]{background:#fff\n}\n.adress[data-v-e56af48a]{font-size:%?27?%;color:#666\n}\n.shop[data-v-e56af48a]{margin:%?8?% 0 0 %?10?%\n}\n.edtion[data-v-e56af48a]{color:#999;font-size:14px;text-align:center;padding:%?20?% 0\n}\n.consume[data-v-e56af48a],.store[data-v-e56af48a]{margin-left:%?10?%\n}\n.goods-info .num[data-v-e56af48a]{font-size:%?28?%;color:#999;width:%?260?%;margin-right:%?10?%\n}\n.list-padding[data-v-e56af48a]{padding:%?16?% %?30?%\n}\n.totle[data-v-e56af48a]{font-size:%?28?%\n}\n.order-status[data-v-e56af48a]{color:#888;text-align:right;font-size:%?30?%;margin-right:%?8?%\n}\n.fui-modal[data-v-e56af48a]{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:0;z-index:1000\n}\n.fui-modal-info[data-v-e56af48a]{position:fixed;width:100%;z-index:1001;text-align:center;top:%?50?%\n}\n.fui-modal-info .code[data-v-e56af48a]{width:%?450?%;height:%?450?%;margin:%?50?% 0\n}\n.tap[data-v-e56af48a]{text-align:center;color:#f90;font-size:%?40?%;line-height:%?50?%\n}\n.close[data-v-e56af48a]{text-align:right;padding:%?30?%\n}\n.close uni-image[data-v-e56af48a]{width:%?80?%;height:%?80?%\n}\n.send-code[data-v-e56af48a]{display:none\n}\n.fui-cell-group.toggleSend-group .send-code[data-v-e56af48a]{display:block;font-size:%?26?%\n}\n.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark[data-v-e56af48a]:after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)\n}\n.cart-option[data-v-e56af48a]{margin-top:%?8?%\n}\n.picker-modal[data-v-e56af48a]{background:#fefefe;height:260px;position:fixed;bottom:0;left:0;right:0;z-index:1000;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)\n}\n.picker-modal.city-picker[data-v-e56af48a]{z-index:2000\n}\n.picker-modal.in[data-v-e56af48a]{-webkit-transform:translateZ(0);transform:translateZ(0)\n}\n.picker-modal.in[data-v-e56af48a],.picker-modal.out[data-v-e56af48a]{-webkit-transition-duration:.3s;-o-transition-duration:.3s;transition-duration:.3s\n}\n.picker-modal.out[data-v-e56af48a]{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)\n}\n.picker-modal .picker-control[data-v-e56af48a]{display:-webkit-flex;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;height:40px;border-bottom:1px solid #f1f1f1;padding:0 %?30?%;font-size:%?32?%\n}\n.picker-modal .picker-control .cancel[data-v-e56af48a]{width:50%;text-align:left;color:#666\n}\n.picker-modal .picker-control .confirm[data-v-e56af48a]{width:50%;text-align:right;color:#20b21f\n}\n.picker-modal .picker[data-v-e56af48a]{width:100%;height:220px\n}\n.picker-modal .picker .item[data-v-e56af48a]{line-height:40px\n}\nuni-picker-view-column[data-v-e56af48a]{text-align:center\n}\nbody[data-v-e56af48a]{background:#f7f7f7\n}\n.nav[data-v-e56af48a]{width:100%;height:%?90?%;display:-webkit-flex;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;background:#fff\n}\n.default[data-v-e56af48a]{color:#666\n}\n.default[data-v-e56af48a],.red[data-v-e56af48a]{line-height:%?90?%;text-align:center;-webkit-flex:1;-webkit-box-flex:1;-ms-flex:1;flex:1;font-size:%?32?%\n}\n.red[data-v-e56af48a]{color:#ef4f4f;border-bottom:2px solid #ef4f4f\n}\n.switch[data-v-e56af48a]{float:right;zoom:90%;overflow:hidden\n}\n.btn[data-v-e56af48a]{padding:0 %?60?%;border-radius:0;height:%?100?%;line-height:%?100?%;margin:0\n}\n.fui-list-inner .sure_subtitle[data-v-e56af48a]{line-height:%?36?%;position:relative;font-size:%?30?%;color:#444;max-height:%?72?%;overflow:hidden\n}\n.fui-number[data-v-e56af48a]{height:%?40?%;width:%?130?%\n}\n.minus[data-v-e56af48a],.plus[data-v-e56af48a]{width:%?40?%;height:%?40?%;font-size:%?40?%;line-height:%?40?%\n}\n.fui-list-angle[data-v-e56af48a]{margin-right:0;text-align:right;word-break:normal\n}\n.fui-cell-text .shop_name[data-v-e56af48a]{font-size:%?33?%\n}\n.cart-option .choose-option[data-v-e56af48a]{font-size:%?24?%;color:#ccc\n}\n.fui-list-angle .price[data-v-e56af48a]{color:#e02e24;font-size:%?24?%\n}\n.fui-list-angle uni-view[data-v-e56af48a]{font-size:%?24?%;color:#444\n}\nuni-page-body[data-v-e56af48a]{background:#f2f2f2\n}\n.create_btn[data-v-e56af48a]{background:#f5cb3b;font-size:%?34?%;color:#222;border:0\n}\n.create_btn[data-v-e56af48a]:after{border:0;border-radius:0\n}\n.coupon_box[data-v-e56af48a]{padding-left:5rem;position:relative;width:70%;margin:0 auto;margin-bottom:.5rem;height:3.6rem\n}\n.coupon_box[data-v-e56af48a]:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #f45068;border-radius:%?10?%;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5);-ms-transform:scale(.5);transform:scale(.5)\n}\n.coupon_price uni-text[data-v-e56af48a]{color:#f45068\n}\n.coupon_price[data-v-e56af48a]{text-align:left;height:3rem;margin-left:-4.5rem;float:left;padding-top:.3rem;padding-right:.5rem\n}\n.coupon_price .price02[data-v-e56af48a]{font-size:%?80?%;font-weight:700\n}\n.coupon_price .price01[data-v-e56af48a]{font-size:%?38?%\n}\n.coupon_con[data-v-e56af48a],.coupon_time[data-v-e56af48a]{font-size:%?28?%;color:#666;height:%?44?%;line-height:%?44?%\n}\n.coupon_time[data-v-e56af48a]{padding-top:%?20?%\n}\n.cannel_btn[data-v-e56af48a]{position:relative;width:calc(70% + 5rem);margin:0 auto;margin-bottom:.5rem;height:2.6rem;line-height:2.6rem;text-align:center\n}\n.cannel_btn[data-v-e56af48a]:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #999;border-radius:%?10?%;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5);-ms-transform:scale(.5);transform:scale(.5)\n}\n.cannel_btn uni-text[data-v-e56af48a]{font-size:%?32?%;color:#8c8c8c\n}\n.coupon_arrow[data-v-e56af48a]{background:url(http://ddfwz.sssvip.net/asmce/diancan/right_arrow.png) no-repeat 100%;background-size:%?36?% %?36?%\n}\n.a-li[data-v-e56af48a]{background:#fff url(http://ddfwz.sssvip.net/asmce/diancan/pt-ico1.png) no-repeat 95%;background-size:%?15?% auto\n}\n.a-li[data-v-e56af48a],.a-li02[data-v-e56af48a]{padding:%?23.4?% 3%;text-align:left\n}\n.a-li02[data-v-e56af48a]{background:#fff url(http://ddfwz.sssvip.net/asmce/diancan/pt-ico11.png) no-repeat 95%;background-size:%?28?% auto\n}\n.join_g_li[data-v-e56af48a]{background:#fff;position:relative\n}\n.join_g_li .join_li[data-v-e56af48a]{height:3rem;line-height:3rem;padding-left:4rem;position:relative;font-size:.8rem\n}\n.join_g_li .join_li[data-v-e56af48a]:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%?2?% solid #e6e6e6;-webkit-transform-origin:0 100%;-ms-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);-ms-transform:scaleY(.5);transform:scaleY(.5)\n}\n.join_g_li .join_li uni-text[data-v-e56af48a]{display:block;width:4rem;margin-left:-4rem;float:left;text-align:right;font-size:.8rem;color:#666\n}\n.join_g_li .join_li uni-input[data-v-e56af48a]{height:3rem;line-height:3rem;margin-left:.5rem\n}\n.join_g_li .join_li .section uni-picker[data-v-e56af48a]{margin-left:.5rem\n}\n.bottom_form_btn[data-v-e56af48a]{width:%?260?%;height:%?100?%;background:#000;position:fixed;bottom:0;right:0;opacity:0;z-index:1e+21\n}\n.join_g_li[data-v-e56af48a]:before{content:"";position:absolute;left:0;top:0;width:100%;height:0;border-top:%?2?% solid #e6e6e6;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.5);-ms-transform:scaleY(.5);transform:scaleY(.5)\n}\n.index-advs-navigator[data-v-e56af48a]{height:100%;width:100%\n}\nbody.?%PAGE?%[data-v-e56af48a]{background:#f2f2f2\n}',""])},ca7b:function(t,e,a){"use strict";var i,n,o=a("e143"),s={computed:{Vue:function(){return o["default"]}},methods:{setData:function(t){if(t)try{for(var e in t)this[e]=t[e]}catch(a){console.log(a)}},menu_url:function(t){getApp().core.menu_url(t,2)},formSubmit:function(t){var e={currentTarget:{dataset:{}}},a=t.detail.value;e.currentTarget.dataset=a,getApp().core.menu_url(e,1)},isLogin:function(){return!!getApp().getCache("userinfo").uid||(getApp().core.alert("请先登录",function(){wx.redirectTo({url:"/yb_shop/pages/wap/login"})}),!1)}}},r=s,l=a("2877"),d=Object(l["a"])(r,i,n,!1,null,null,null);d.options.__file="Base.vue";e["a"]=d.exports},dc0b:function(t,e,a){"use strict";var i=a("a8fa"),n=a.n(i);n.a}}]);