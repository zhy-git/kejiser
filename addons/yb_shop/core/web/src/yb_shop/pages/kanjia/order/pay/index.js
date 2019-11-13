/*v0.6vv_20170214_fbi*/
window.__wcc_version__='v0.6vv_20170214_fbi'
window.__wxml_transpiler_version__='v0.1'
var $gwxc
var $gaic={}
$gwx=function(path,global){
function _(a,b){b&&a.children.push(b);}
function _v(k){if(typeof(k)!='undefined')return {tag:'virtual','wxKey':k,children:[]};return {tag:'virtual',children:[]};}
function _n(tag){$gwxc++;if($gwxc>=16000){throw 'Dom limit exceeded, please check if there\'s any mistake you\'ve made.'};return {tag:tag.substr(0,3)=='wx-'?tag:'wx-'+tag,attr:{},children:[],n:[]}}
function _p(a,b){b&&a.properities.push(b);}
function _s(scope,env,key){return typeof(scope[key])!='undefined'?scope[key]:env[key]}function _wl(tname,prefix){console.warn('WXMLRT:'+prefix+':-1:-1:-1: Template `' + tname + '` is being called recursively, will be stop.')}$gwn=console.warn;
$gwl=console.log;
function $gwh()
{
function x(){}
x.prototype =
{
hn: function( obj )
{
if( typeof(obj) == 'object' )
{
var cnt=0;
var any=false;
for(var x in obj)
{
any|=x==='__value__';
cnt++;
if(cnt>2)break;
}
return cnt == 2 && any && obj.hasOwnProperty('__wxspec__') ? "h" : "n";
}
return "n";
},
nh: function( obj, special )
{
return { __value__: obj, __wxspec__: special ? special : true }
},
rv: function( obj )
{
return this.hn(obj)==='n'?obj:this.rv(obj.__value__);
}
}
return new x;
}
wh=$gwh();
function $gwrt( should_pass_type_info )
{
function ArithmeticEv( ops, e, s, g, o )
{
var rop = ops[0][1];
var _a,_b,_c,_d, _aa, _bb;
switch( rop )
{
case '?:':
_a = rev( ops[1], e, s, g, o );
_c = should_pass_type_info && ( wh.hn(_a) === 'h' );
_d = wh.rv( _a ) ? rev( ops[2], e, s, g, o ) : rev( ops[3], e, s, g, o );
_d = _c && wh.hn( _d ) === 'n' ? wh.nh( _d, 'c' ) : _d;
return _d;
break;
case '&&':
_a = rev( ops[1], e, s, g, o );
_c = should_pass_type_info && ( wh.hn(_a) === 'h' );
_d = wh.rv( _a ) ? rev( ops[2], e, s, g, o ) : wh.rv( _a );
_d = _c && wh.hn( _d ) === 'n' ? wh.nh( _d, 'c' ) : _d;
return _d;
break;
case '||':
_a = rev( ops[1], e, s, g, o );
_c = should_pass_type_info && ( wh.hn(_a) === 'h' );
_d = wh.rv( _a ) ? wh.rv(_a) : rev( ops[2], e, s, g, o );
_d = _c && wh.hn( _d ) === 'n' ? wh.nh( _d, 'c' ) : _d;
return _d;
break;
case '+':
case '*':
case '/':
case '%':
case '|':
case '^':
case '&':
case '===':
case '==':
case '!=':
case '!==':
case '>=':
case '<=':
case '>':
case '<':
case '<<':
case '>>':
_a = rev( ops[1], e, s, g, o );
_b = rev( ops[2], e, s, g, o );
_c = should_pass_type_info && (wh.hn( _a ) === 'h' || wh.hn( _b ) === 'h');
switch( rop )
{
case '+':
_d = wh.rv( _a ) + wh.rv( _b );
break;
case '*':
_d = wh.rv( _a ) * wh.rv( _b );
break;
case '/':
_d = wh.rv( _a ) / wh.rv( _b );
break;
case '%':
_d = wh.rv( _a ) % wh.rv( _b );
break;
case '|':
_d = wh.rv( _a ) | wh.rv( _b );
break;
case '^':
_d = wh.rv( _a ) ^ wh.rv( _b );
break;
case '&':
_d = wh.rv( _a ) & wh.rv( _b );
break;
case '===':
_d = wh.rv( _a ) === wh.rv( _b );
break;
case '==':
_d = wh.rv( _a ) == wh.rv( _b );
break;
case '!=':
_d = wh.rv( _a ) != wh.rv( _b );
break;
case '!==':
_d = wh.rv( _a ) !== wh.rv( _b );
break;
case '>=':
_d = wh.rv( _a ) >= wh.rv( _b );
break;
case '<=':
_d = wh.rv( _a ) <= wh.rv( _b );
break;
case '>':
_d = wh.rv( _a ) > wh.rv( _b );
break;
case '<':
_d = wh.rv( _a ) < wh.rv( _b );
break;
case '<<':
_d = wh.rv( _a ) << wh.rv( _b );
break;
case '>>':
_d = wh.rv( _a ) >> wh.rv( _b );
break;
default:
break;
}
return _c ? wh.nh( _d, "c" ) : _d;
break;
case '-':
_a = ops.length === 3 ? rev( ops[1], e, s, g, o ) : 0;
_b = ops.length === 3 ? rev( ops[2], e, s, g, o ) : rev( ops[1], e, s, g, o );
_c = should_pass_type_info && (wh.hn( _a ) === 'h' || wh.hn( _b ) === 'h');
_d = _c ? wh.rv( _a ) - wh.rv( _b ) : _a - _b;
return _c ? wh.nh( _d, "c" ) : _d;
break;
case '!':
_a = rev( ops[1], e, s, g, o );
_c = should_pass_type_info && (wh.hn( _a ) == 'h');
_d = !wh.rv(_a);
return _c ? wh.nh( _d, "c" ) : _d;
case '~':
_a = rev( ops[1], e, s, g, o );
_c = should_pass_type_info && (wh.hn( _a ) == 'h');
_d = ~wh.rv(_a);
return _c ? wh.nh( _d, "c" ) : _d;
default:
$gwn('unrecognized op' + rop );
}
}
function rev( ops, e, s, g, o )
{
var op = ops[0];
if( typeof(op)==='object' )
{
var vop=op[0];
var _a, _aa, _b, _bb, _c, _d, _s, _e, _ta, _tb, _td;
switch(vop)
{
case 2:
return ArithmeticEv(ops,e,s,g,o);
break;
case 4:
return rev( ops[1], e, s, g, o );
break;
case 5:
switch( ops.length )
{
case 2:
return should_pass_type_info ?
[rev(ops[1],e,s,g,o)] :
[wh.rv(rev(ops[1],e,s,g,o))];
break;
case 1:
return [];
break;
default:
_a = rev( ops[1],e,s,g,o );
_a.push(
should_pass_type_info ?
rev( ops[2],e,s,g,o ) :
wh.rv( rev(ops[2],e,s,g,o) )
);
return _a;
break;
}
break;
case 6:
_a = rev(ops[1],e,s,g,o);
_ta = wh.hn(_a)==='h';
_aa = _ta ? wh.rv(_a) : _a;
o.is_affected |= _ta;
if( should_pass_type_info )
{
if( _aa===null || typeof(_aa) === 'undefined' )
{
return _ta ? wh.nh(undefined, 'e') : undefined;
}
_b = rev(ops[2],e,s,g,o);
_tb = wh.hn(_b) === 'h';
_bb = _tb ? wh.rv(_b) : _b;
o.is_affected |= _tb;
if( _bb===null || typeof(_bb) === 'undefined' )
{
return (_ta || _tb) ? wh.nh(undefined, 'e') : undefined;
}
_d = _aa[_bb];
_td = wh.hn(_d)==='h';
o.is_affected |= _td;
return (_ta || _tb) ? (_td ? _d : wh.nh(_d, 'e')) : _d;
}
else
{
if( _aa===null || typeof(_aa) === 'undefined' )
{
return undefined;
}
_b = rev(ops[2],e,s,g,o);
_tb = wh.hn(_b) === 'h';
_bb = _tb ? wh.rv(_b) : _b;
o.is_affected |= _tb;
if( _bb===null || typeof(_bb) === 'undefined' )
{
return undefined;
}
_d = _aa[_bb];
_td = wh.hn(_d)==='h';
o.is_affected |= _td;
return _td ? wh.rv(_d) : _d;
}
case 7:
switch(ops[1][0])
{
case 11:
o.is_affected |= wh.hn(g)==='h';
return g;
case 3:
_s = wh.rv( s );
_e = wh.rv( e );
_b = ops[1][1];
_a = _s && _s.hasOwnProperty(_b) ?
s : _e && ( _e.hasOwnProperty(_b) ? e : undefined );
if( should_pass_type_info )
{
if( _a )
{
_ta = wh.hn(_a) === 'h';
_aa = _ta ? wh.rv( _a ) : _a;
_d = _aa[_b];
_td = wh.hn(_d) === 'h';
o.is_affected |= _ta || _td;
_d = _ta && !_td ? wh.nh(_d,'e') : _d;
return _d;
}
}
else
{
if( _a )
{
_ta = wh.hn(_a) === 'h';
_aa = _ta ? wh.rv( _a ) : _a;
_d = _aa[_b];
_td = wh.hn(_d) === 'h';
o.is_affected |= _ta || _td;
return wh.rv(_d);
}
}
return undefined;
}
break;
case 8:
_a = {};
_a[ops[1]] = rev(ops[2],e,s,g,o);
return _a;
break;
case 9:
_a = rev(ops[1],e,s,g,o);
_b = rev(ops[2],e,s,g,o);
function merge( _a, _b, _ow )
{
_ta = wh.hn(_a)==='h';
_tb = wh.hn(_b)==='h';
_aa = wh.rv(_a);
_bb = wh.rv(_b);
if( should_pass_type_info )
{
if( _tb )
{
for(var k in _bb)
{
if ( _ow || !_aa.hasOwnProperty(k) )
_aa[k]=wh.nh(_bb[k],'e');
}
}
else
{
for(var k in _bb)
{
if ( _ow || !_aa.hasOwnProperty(k) )
_aa[k]=_bb[k];
}
}
}
else
{
for(var k in _bb)
{
if ( _ow || _aa.hasOwnProperty(k) )
_aa[k]=wh.rv(_bb[k]);
}
}
return _a;
}
var _c = _a
var _ow = true
if ( typeof(ops[1][0]) === "object" && ops[1][0][0] === 10 ) {
_a = _b
_b = _c
_ow = false
}
if ( typeof(ops[1][0]) === "object" && ops[1][0][0] === 10 ) {
var _r = {}
return merge( merge( _r, _a, _ow ), _b, _ow );
}
else
return merge( _a, _b, _ow );
break;
case 10:
return should_pass_type_info ? rev(ops[1],e,s,g,o) : wh.rv(rev(ops[1],e,s,g,o));
}
}
else
{
if( op === 3 || op === 1 ) return ops[1];
else if( op === 11 )
{
var _a='';
for( var i = 1 ; i < ops.length ; i++ )
{
var xp = wh.rv(rev(ops[i],e,s,g,o));
_a += typeof(xp) === 'undefined' ? '' : xp;
}
return _a;
}
}
}
return rev;
}
gra=$gwrt(true);
grb=$gwrt(false);
function TestTest( expr, ops, e,s,g, expect_a, expect_b, expect_affected )
{
{
var o = {is_affected:false};
var a = gra( ops, e,s,g, o );
if( JSON.stringify(a) != JSON.stringify( expect_a )
|| o.is_affected != expect_affected )
{
console.warn( "A. " + expr + " get result " + JSON.stringify(a) + ", " + o.is_affected + ", but " + JSON.stringify( expect_a ) + ", " + expect_affected + " is expected" );
}
}
{
var o = {is_affected:false};
var a = grb( ops, e,s,g, o );
if( JSON.stringify(a) != JSON.stringify( expect_b )
|| o.is_affected != expect_affected )
{
console.warn( "B. " + expr + " get result " + JSON.stringify(a) + ", " + o.is_affected + ", but " + JSON.stringify( expect_b ) + ", " + expect_affected + " is expected" );
}
}
}
function wfor( to_iter, func, env, _s, global, father, itemname, indexname, keyname )
{
var _n = wh.hn( to_iter ) === 'n';
var scope = wh.rv( _s );
var has_old_item = scope.hasOwnProperty(itemname);
var has_old_index = scope.hasOwnProperty(indexname);
var old_item = scope[itemname];
var old_index = scope[indexname];
var full = Object.prototype.toString.call(wh.rv(to_iter));
var type = full[8];
if( type === 'N' && full[10] === 'l' ) type = 'X';
var _y;
if( _n )
{
if( type === 'A' )
{
for( var i = 0 ; i < to_iter.length ; i++ )
{
scope[itemname] = to_iter[i];
scope[indexname] = wh.nh(i, 'h');
_y = keyname ? (keyname==="*this" ? _v(wh.rv(to_iter[i])) : _v(wh.rv(wh.rv(to_iter[i])[keyname]))) : _v();
_(father,_y);
func( env, scope, _y, global );
}
}
else if( type === 'O' )
{
for( var k in to_iter )
{
scope[itemname] = to_iter[k];
scope[indexname] = wh.nh(k, 'h');
_y = keyname ? (keyname==="*this" ? _v(wh.rv(to_iter[k])) : _v(wh.rv(wh.rv(to_iter[k])[keyname]))) : _v();
_(father,_y);
func( env,scope,_y,global );
}
}
else if( type === 'S' )
{
for( var i = 0 ; i < to_iter.length ; i++ )
{
scope[itemname] = to_iter[i];
scope[indexname] = wh.nh(i, 'h');
_y = _v( to_iter[i] + i );
_(father,_y);
func( env, scope, _y, global );
}
}
else if( type === 'N' )
{
for( var i = 0 ; i < to_iter ; i++ )
{
scope[itemname] = i;
scope[indexname] = wh.nh(i, 'h');
_y = _v( i );
_(father,_y);
func(env,scope,_y,global);
}
}
else
{
}
}
else
{
var r_to_iter = wh.rv(to_iter);
var r_iter_item, iter_item;
if( type === 'A' )
{
for( var i = 0 ; i < r_to_iter.length ; i++ )
{
iter_item = r_to_iter[i];
iter_item = wh.hn(iter_item)==='n' ? wh.nh(iter_item,'h') : iter_item;
r_iter_item = wh.rv( iter_item );
scope[itemname] = iter_item
scope[indexname] = wh.nh(i, 'h');
_y = keyname ? (keyname==="*this" ? _v(r_iter_item) : _v(wh.rv(r_iter_item[keyname]))) : _v();
_(father,_y);
func( env, scope, _y, global );
}
}
else if( type === 'O' )
{
for( var k in r_to_iter )
{
iter_item = r_to_iter[k];
iter_item = wh.hn(iter_item)==='n'? wh.nh(iter_item,'h') : iter_item;
r_iter_item = wh.rv( iter_item );
scope[itemname] = iter_item;
scope[indexname] = wh.nh(k, 'h');
_y = keyname ? (keyname==="*this" ? _v(r_iter_item) : _v(wh.rv(r_iter_item[keyname]))) : _v();
_(father,_y);
func( env, scope, _y, global );
}
}
else if( type === 'S' )
{
for( var i = 0 ; i < r_to_iter.length ; i++ )
{
scope[itemname] = wh.nh(r_to_iter[i],'h');
scope[indexname] = wh.nh(i, 'h');
_y = _v( to_iter[i] + i );
_(father,_y);
func( env, scope, _y, global );
}
}
else if( type === 'N' )
{
for( var i = 0 ; i < r_to_iter ; i++ )
{
scope[itemname] = wh.nh(i,'h');
scope[indexname]= wh.nh(i,'h');
_y = _v( i );
_(father,_y);
func(env,scope,_y,global);
}
}
else
{
}
}
if(has_old_item)
{
scope[itemname]=old_item;
}
else
{
delete scope[itemname];
}
if(has_old_index)
{
scope[indexname]=old_index;
}
else{delete scope[indexname];}}
function _r( node, attrname, opindex, env, scope, global )
{
var o = {};
var a = grb( z[opindex], env, scope, global, o );
node.attr[attrname] = a;
if( o.is_affected ) node.n.push( attrname );
}
function _o( opindex, env, scope, global )
{
var nothing = {};
return grb( z[opindex], env, scope, global, nothing );
}
function _1( opindex, env, scope, global )
{
var nothing = {};
return gra( z[opindex], env, scope, global, nothing );
}
function _2( opindex, func, env, scope, global, father, itemname, indexname, keyname )
{
var to_iter = _1( opindex, env, scope, global, father, itemname, indexname, keyname );
wfor( to_iter, func, env, scope, global, father, itemname, indexname, keyname );
}
function _gv( )
{
if( typeof(window.__webview_engine_version__) == 'undefined' ) return 0.0;
return window.__webview_engine_version__;
}
function _m(tag,attrs,env,scope,global)
{
var tmp=_n(tag);
var base=0;
for(var i = 0 ; i < attrs.length ; i+=2 )
{
if(attrs[i+1]<0)
{tmp.attr[attrs[i]]=true;}else{_r(tmp,attrs[i],base+attrs[i+1],env,scope,global);
if(base===0)base=attrs[i+1];}}return tmp;};function _ai(i,p,e,me,r,c){var x=_grp(p,e,me);if(x)i.push(x);else{i.push('');console.warn('WXMLRT:'+me+':import:'+r+':'+c+': Path `'+p+'` not found from `'+me+'`.')}}function _grp(p,e,me){if(p[0]!='/'){var mepart=me.split('/');mepart.pop();var ppart=p.split('/');for(var i=0;i<ppart.length;i++){if(ppart[i]=='..')mepart.pop();else if(ppart[i]=='.' || !ppart[i])continue;else mepart.push(ppart[i]);}p=mepart.join('/');}if(me[0]=='.'&&p[0]=='/')p='.'+p;if(e[p])return p;if(e[p+'.wxml'])return p+'.wxml';}function _gd(p,c,e,d){if(!c)return;if(d[p][c])return d[p][c];for(var x=e[p].i.length-1;x>=0;x--){if(e[p].i[x]&&d[e[p].i[x]][c])return d[e[p].i[x]][c]};for(var x=e[p].ti.length-1;x>=0;x--){var q=_grp(e[p].ti[x],e,p);if(q&&d[q][c])return d[q][c]}
var ii=_gapi(e,p);for(var x=0;x<ii.length;x++){if(ii[x]&&d[ii[x]][c])return d[ii[x]][c]}for(var k=e[p].j.length-1;k>=0;k--)if(e[p].j[k]){for(var q=e[e[p].j[k]].ti.length-1;q>=0;q--){var pp=_grp(e[e[p].j[k]].ti[q],e,p);if(pp&&d[pp][c]){return d[pp][c]}}}}function _gapi(e,p){if(!p)return [];if($gaic[p]){return $gaic[p]};var ret=[],q=[],h=0,t=0,put={},visited={};q.push(p);visited[p]=true;t++;while(h<t){var a=q[h++];for(var i=0;i<e[a].ic.length;i++){var nd=e[a].ic[i];var np=_grp(nd,e,a);if(np&&!visited[np]){visited[np]=true;q.push(np);t++;}}for(var i=0;a!=p&&i<e[a].ti.length;i++){var ni=e[a].ti[i];var nm=_grp(ni,e,a);if(nm&&!put[nm]){put[nm]=true;ret.push(nm);}}}$gaic[p]=ret;return ret;}var $ixc={};function _ic(p,ent,me,e,s,r,gg){var x=_grp(p,ent,me);ent[me].j.push(x);if(x){if($ixc[x]){console.warn('WXMLRT:-1:include:-1:-1: `'+p+'` is being included in a loop, will be stop.');return;}$ixc[x]=true;try{ent[x].f(e,s,r,gg)}catch(e){}$ixc[x]=false;}else{console.warn('WXMLRT:'+me+':include:-1:-1: Included path `'+p+'` not found from `'+me+'`.')}}function _w(tn,f,line,c){console.warn('WXMLRT:'+f+':template:'+line+':'+c+': Template `'+tn+'` not found.');}function _ev(dom){var changed=false;delete dom.properities;delete dom.n;if(dom.children){do{changed=false;var newch = [];for(var i=0;i<dom.children.length;i++){var ch=dom.children[i];if( ch.tag=='virtual'){changed=true;for(var j=0;ch.children&&j<ch.children.length;j++){newch.push(ch.children[j]);}}else { newch.push(ch); } } dom.children = newch; }while(changed);for(var i=0;i<dom.children.length;i++){_ev(dom.children[i]);}} return dom; }var e_={}
if(global&&typeof(global.entrys)=='object')e_=global.entrys
var d_={}
if(global&&typeof(global.defines)=='object')d_=global.defines
var p_={}
var z = [];
  (function(z){
    var a = 11;
    function Z(ops){z.push(ops)};
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([[2, "&&"],[[2, "!"], [[7],[3, "success"]]],[[7],[3, "show"]]]);Z([3, 'page']);Z([3, 'fui-cell-group']);Z([3, 'fui-cell']);Z([3, 'fui-cell-text textl']);Z([3, '订单编号']);Z([3, 'fui-cell-remark noremark']);Z([a, [[6],[[7],[3, "list"]],[3, "order_no"]]]);Z([3, '订单金额']);Z([3, 'text-danger']);Z([3, '￥\r\n        ']);Z([a, [[6],[[7],[3, "list"]],[3, "pay_money"]]]);Z([3, 'fui-list-group']);Z([3, 'margin-top:0;']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "pay_money"]], [1, 0]]);Z([3, 'pay']);Z([3, 'fui-list']);Z([3, 'credit']);Z([3, 'fui-list-media credit radius']);Z([3, 'round']);Z([3, '/yb_shop/static/images/icon-white/money.png']);Z([3, 'fui-list-inner']);Z([3, 'row']);Z([3, 'row-text']);Z([3, '确认支付']);Z([3, 'angle']);Z([[2, "!="], [[6],[[7],[3, "list"]],[3, "pay_money"]], [1, 0]]);Z([3, 'wechat']);Z([3, 'fui-list-media wechat']);Z([3, '/yb_shop/static/images/icon-white/wechat.png']);Z([3, '微信支付']);Z([3, 'subtitle']);Z([3, '微信安全支付']);Z([3, 'btn btn-danger block']);Z([3, 'font-size:30rpx;background:#ed4f4e;']);Z([[7],[3, "success"]]);Z([3, 'fui-list success']);Z([3, 'fui-list-media']);Z([3, '/yb_shop/static/images/icon-white/deliver-48.png']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 0]]);Z([3, '待付款 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 1]]);Z([3, ' 待发货 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 2]]);Z([3, ' 待收货 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 3]]);Z([3, ' 已完成 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 4]]);Z([3, ' 退换货 ']);Z([3, ' 未知状态 ']);Z([a, [[6],[[7],[3, "list"]],[3, "buyer_message"]]]);Z([3, 'none']);Z([3, 'fui-cell-icon']);Z([3, '/yb_shop/static/images/icon/location01.png']);Z([3, 'fui-cell-text textl info']);Z([3, 'name']);Z([a, [[6],[[7],[3, "list"]],[3, "receiver_name"]]]);Z([a, [[6],[[7],[3, "list"]],[3, "receiver_mobile"]]]);Z([3, 'adress']);Z([a, [[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "province"]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "city"]]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "district"]]], [1, " "]], [[6],[[7],[3, "list"]],[3, "receiver_address"]]]]);Z([[6],[[7],[3, "list"]],[3, "stores"]]);Z([a, [3, 'fui-cell-group '],[[2,'?:'],[[7],[3, "shop"]],[1, "toggleSend-group"],[1, ""]]]);Z([3, 'send-code fui-list']);Z([3, 'fui-list-icon']);Z([3, '/yb_shop/static/images/icon/shop.png']);Z([3, 'fui-list-inner store-inner']);Z([3, 'title']);Z([3, 'storename']);Z([a, [[6],[[7],[3, "item"]],[3, "storename"]]]);Z([3, 'text']);Z([3, 'realname']);Z([a, [[6],[[7],[3, "item"]],[3, "realname"]]]);Z([3, 'mobile']);Z([a, [[6],[[7],[3, "item"]],[3, "mobile"]]]);Z([3, 'address']);Z([a, [[6],[[7],[3, "item"]],[3, "address"]]]);Z([3, 'fui-list-angle ']);Z([3, 'phone']);Z([3, 'image-48']);Z([3, '/yb_shop/static/images/icon/tel.png']);Z([a, [3, '/pages/order/store/map?id\x3d'],[[6],[[7],[3, "item"]],[3, "id"]]]);Z([3, 'fui-cell-text ']);Z([a, [[6],[[7],[3, "list"]],[3, "order_money"]]]);Z([3, '请到订单详情中查看详细信息']);Z([3, 'operate']);Z([3, 'btn btn-default']);Z([a, [3, '/yb_shop/pages/kanjia/order/detail/index?order_id\x3d'],[[6],[[7],[3, "list"]],[3, "order_id"]]]);Z([3, '\r\n      订单详情\r\n    ']);Z([3, 'redirect']);Z([3, '/yb_shop/pages/kanjia/index/index']);Z([3, '\r\n      返回首页\r\n    ']);
  })(z);d_["./yb_shop/pages/kanjia/order/pay/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var okV = _n("loading");_r(okV, 'hidden', 0, e, s, gg);var olV = _o(1, e, s, gg);_(okV,olV);_(r,okV);var omV = _v();
      if (_o(2, e, s, gg)) {
        omV.wxVkey = 1;var onV = _n("view");_r(onV, 'class', 3, e, s, gg);var opV = _n("view");_r(opV, 'class', 4, e, s, gg);var oqV = _n("view");_r(oqV, 'class', 5, e, s, gg);var orV = _n("view");_r(orV, 'class', 6, e, s, gg);var osV = _o(7, e, s, gg);_(orV,osV);_(oqV,orV);var otV = _n("view");_r(otV, 'class', 8, e, s, gg);var ouV = _o(9, e, s, gg);_(otV,ouV);_(oqV,otV);_(opV,oqV);var ovV = _n("view");_r(ovV, 'class', 5, e, s, gg);var owV = _n("view");_r(owV, 'class', 6, e, s, gg);var oxV = _o(10, e, s, gg);_(owV,oxV);_(ovV,owV);var oyV = _n("view");_r(oyV, 'class', 11, e, s, gg);var ozV = _o(12, e, s, gg);_(oyV,ozV);var o_V = _n("text");var oAW = _o(13, e, s, gg);_(o_V,oAW);_(oyV,o_V);_(ovV,oyV);_(opV,ovV);_(onV,opV);var oBW = _m( "view", ["class", 14,"style", 1], e, s, gg);var oCW = _v();
      if (_o(16, e, s, gg)) {
        oCW.wxVkey = 1;var oDW = _m( "view", ["bindtap", 17,"class", 1,"data-type", 2], e, s, gg);var oFW = _n("view");_r(oFW, 'class', 20, e, s, gg);var oGW = _m( "image", ["class", 21,"src", 1], e, s, gg);_(oFW,oGW);_(oDW,oFW);var oHW = _n("view");_r(oHW, 'class', 23, e, s, gg);var oIW = _n("view");_r(oIW, 'class', 24, e, s, gg);var oJW = _n("view");_r(oJW, 'class', 25, e, s, gg);var oKW = _o(26, e, s, gg);_(oJW,oKW);_(oIW,oJW);_(oHW,oIW);_(oDW,oHW);var oLW = _n("view");_r(oLW, 'class', 27, e, s, gg);_(oDW,oLW);_(oCW, oDW);
      } _(oBW,oCW);var oMW = _v();
      if (_o(28, e, s, gg)) {
        oMW.wxVkey = 1;var oNW = _m( "view", ["bindtap", 17,"class", 1,"data-type", 12], e, s, gg);var oPW = _n("view");_r(oPW, 'class', 30, e, s, gg);var oQW = _m( "image", ["class", 21,"src", 10], e, s, gg);_(oPW,oQW);_(oNW,oPW);var oRW = _n("view");_r(oRW, 'class', 23, e, s, gg);var oSW = _n("view");_r(oSW, 'class', 24, e, s, gg);var oTW = _n("view");_r(oTW, 'class', 25, e, s, gg);var oUW = _o(32, e, s, gg);_(oTW,oUW);_(oSW,oTW);_(oRW,oSW);var oVW = _n("view");_r(oVW, 'class', 33, e, s, gg);var oWW = _o(34, e, s, gg);_(oVW,oWW);_(oRW,oVW);_(oNW,oRW);var oXW = _n("view");_r(oXW, 'class', 27, e, s, gg);_(oNW,oXW);_(oMW, oNW);
      } _(oBW,oMW);_(onV,oBW);var oYW = _m( "view", ["bindtap", 17,"data-type", 12,"class", 18,"style", 19], e, s, gg);var oZW = _o(26, e, s, gg);_(oYW,oZW);_(onV,oYW);_(omV, onV);
      } _(r,omV);var oaW = _v();
      if (_o(37, e, s, gg)) {
        oaW.wxVkey = 1;var obW = _n("view");_r(obW, 'class', 3, e, s, gg);var odW = _n("view");_r(odW, 'class', 38, e, s, gg);var oeW = _n("view");_r(oeW, 'class', 39, e, s, gg);var ofW = _m( "image", ["class", 21,"src", 19], e, s, gg);_(oeW,ofW);_(odW,oeW);var ogW = _n("view");_r(ogW, 'class', 23, e, s, gg);var ohW = _n("view");_r(ohW, 'class', 24, e, s, gg);var oiW = _n("view");oiW.attr['class'] = true;_(ohW,oiW);_(ogW,ohW);var oBX = _n("view");oBX.attr['class'] = true;_(ogW,oBX);_(odW,ogW);_(obW,odW);var oDX = _n("view");_r(oDX, 'class', 4, e, s, gg);var oEX = _m( "navigator", ["class", 5,"hoverClass", 48], e, s, gg);var oFX = _m( "image", ["url", -1,"class", 54,"src", 1], e, s, gg);_(oEX,oFX);var oGX = _n("view");_r(oGX, 'class', 56, e, s, gg);var oHX = _n("view");var oIX = _n("text");_r(oIX, 'class', 57, e, s, gg);var oJX = _o(58, e, s, gg);_(oIX,oJX);_(oHX,oIX);var oKX = _n("text");var oLX = _o(59, e, s, gg);_(oKX,oLX);_(oHX,oKX);_(oGX,oHX);var oMX = _n("view");_r(oMX, 'class', 60, e, s, gg);var oNX = _o(61, e, s, gg);_(oMX,oNX);_(oGX,oMX);_(oEX,oGX);_(oDX,oEX);_(obW,oDX);var oOX = _v();
      if (_o(62, e, s, gg)) {
        oOX.wxVkey = 1;var oPX = _n("view");_r(oPX, 'class', 63, e, s, gg);var oRX = _n("view");_r(oRX, 'class', 64, e, s, gg);var oSX = _v();var oTX = function(oXX,oWX,oVX,gg){var oZX = _n("view");_r(oZX, 'class', 18, oXX, oWX, gg);var oaX = _n("view");_r(oaX, 'class', 39, oXX, oWX, gg);var obX = _m( "image", ["class", 65,"src", 1], oXX, oWX, gg);_(oaX,obX);_(oZX,oaX);var ocX = _n("view");_r(ocX, 'class', 67, oXX, oWX, gg);var odX = _n("view");_r(odX, 'class', 68, oXX, oWX, gg);var oeX = _n("span");_r(oeX, 'class', 69, oXX, oWX, gg);var ofX = _o(70, oXX, oWX, gg);_(oeX,ofX);_(odX,oeX);_(ocX,odX);var ogX = _n("view");_r(ogX, 'class', 71, oXX, oWX, gg);var ohX = _n("text");_r(ohX, 'class', 72, oXX, oWX, gg);var oiX = _o(73, oXX, oWX, gg);_(ohX,oiX);_(ogX,ohX);var ojX = _n("text");_r(ojX, 'class', 74, oXX, oWX, gg);var okX = _o(75, oXX, oWX, gg);_(ojX,okX);_(ogX,ojX);_(ocX,ogX);var olX = _n("view");_r(olX, 'class', 71, oXX, oWX, gg);var omX = _n("text");_r(omX, 'class', 76, oXX, oWX, gg);var onX = _o(77, oXX, oWX, gg);_(omX,onX);_(olX,omX);_(ocX,olX);_(oZX,ocX);var ooX = _n("view");_r(ooX, 'class', 78, oXX, oWX, gg);var opX = _m( "image", ["data-phone", 75,"bindtap", 4,"class", 5,"src", 6], oXX, oWX, gg);_(ooX,opX);var oqX = _m( "navigator", ["hoverClass", 53,"url", 29], oXX, oWX, gg);var orX = _m( "image", ["src", 55,"class", 25], oXX, oWX, gg);_(oqX,orX);_(ooX,oqX);_(oZX,ooX);_(oVX,oZX);return oVX;};_2(62, oTX, e, s, gg, oSX, "item", "index", '');_(oRX,oSX);_(oPX,oRX);_(oOX, oPX);
      } _(obW,oOX);var osX = _n("view");_r(osX, 'class', 4, e, s, gg);var otX = _n("view");_r(otX, 'class', 5, e, s, gg);var ouX = _n("view");_r(ouX, 'class', 83, e, s, gg);var ovX = _o(32, e, s, gg);_(ouX,ovX);_(otX,ouX);var owX = _n("view");_r(owX, 'class', 11, e, s, gg);var oxX = _o(12, e, s, gg);_(owX,oxX);var oyX = _n("text");var ozX = _o(84, e, s, gg);_(oyX,ozX);_(owX,oyX);_(otX,owX);_(osX,otX);var o_X = _n("view");_r(o_X, 'class', 5, e, s, gg);var oAY = _n("view");_r(oAY, 'class', 8, e, s, gg);var oBY = _o(85, e, s, gg);_(oAY,oBY);_(o_X,oAY);_(osX,o_X);_(obW,osX);var oCY = _n("view");_r(oCY, 'class', 86, e, s, gg);var oDY = _m( "navigator", ["class", 87,"url", 1], e, s, gg);var oEY = _o(89, e, s, gg);_(oDY,oEY);_(oCY,oDY);var oFY = _m( "navigator", ["class", 87,"openType", 3,"url", 4], e, s, gg);var oGY = _o(92, e, s, gg);_(oFY,oGY);_(oCY,oFY);_(obW,oCY);_(oaW, obW);
      } _(r,oaW);
    return r;
  };
        e_["./yb_shop/pages/kanjia/order/pay/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f2f2f2}.fui-list-inner .subtitle{color:#8a8a8a}.fui-list{padding:%%?20rpx?%% %%?10rpx?%%}.car,.credit,.wechat{height:%%?90rpx?%%;width:%%?90rpx?%%;display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center;border-radius:%%?10rpx?%%}.credit{background:#e2cb04}.wechat{background:#fff}.car{background:#0291bf}.car wx-image,.credit wx-image,.wechat wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.success{background:#df2f20;margin-top:0;color:#fff}.row{font-size:%%?40rpx?%%}.adress{font-size:%%?27rpx?%%;color:#666}.operate{display:-webkit-flex;display:flex}.operate wx-navigator{-webkit-flex:1;flex:1}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.image-48{margin:%%?8rpx?%% 0}.num{font-size:%%?24rpx?%%;color:#fff;background:#ff9326;border-radius:50%;padding:%%?4rpx?%% %%?10rpx?%%;text-align:center}.fui-list-media wx-image{width:%%?60rpx?%%;height:%%?60rpx?%%}.btn.btn-default{position:relative;background:#fff;border:0;font-size:%%?30rpx?%%}.btn.btn-default:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5)}@code-separator-line:__wxRoute = "yb_shop/pages/kanjia/order/pay/index";__wxRouteBegin = true;
define("yb_shop/pages/kanjia/order/pay/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    e = t.requirejs("core");
Page({
  data: {
    icons: t.requirejs("icons"),
    success: false,
    successData: {},
    button_color: t.config.button_color
  },
  onLoad: function onLoad(e) {
    this.setData({
      options: e
    });
  },
  onShow: function onShow() {
    this.get_list();
  },
  /**
   *获取订单信息
   * @param order_id 订单id
   * @return array
   */
  get_list: function get_list() {
    var t = this;
    e.get("Bargain/OrderInfo", { order_id: t.data.options.id }, function (i) {
      0 == i.code ? t.setData({
        list: i.info,
        show: true
      }) : e.alert(i.msg);
    });
  },
  /**
   *调用支付
   * @param out_trade_no 订单号
   * @param openid
   * @return array
   */
  pay: function pay(t) {
    var i = e.pdata(t).type,
        o = this;
    e.get("Bargain/Pay", {
      out_trade_no: o.data.list.out_trade_no,
      openid: getApp().getCache("userinfo").openid
    }, function (t) {
      console.log(t);
      0 == t.code ? wx.requestPayment({
        'timeStamp': t.info.timeStamp,
        'nonceStr': t.info.nonceStr,
        'package': t.info.package,
        'signType': 'MD5',
        'paySign': t.info.paySign,
        'success': function success(res) {
          console.log(res);
          if (res.errMsg == "requestPayment:ok") {
            return wx.setNavigationBarTitle({
              title: "支付成功"
            }), void o.setData({
              success: true,
              "list.order_status": 1
            });
          } else {
            e.alert('支付失败！');
            wx.redirectTo({
              url: "/yb_shop/pages/kanjia/order/index"
            });
          }
        },
        'fail': function fail(res) {
          e.alert('您已经取消支付！');
          wx.redirectTo({
            url: "/yb_shop/pages/kanjia/order/index"
          });
        }
      }) : e.alert(t.msg);
    });
    return;
  },
  phone: function phone(t) {
    e.phone(t);
  }
});
});require("yb_shop/pages/kanjia/order/pay/index.js")@code-separator-line:["div","loading","view","text","image","navigator","block","span"]