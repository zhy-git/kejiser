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
    Z([[6],[[7],[3, "toast"]],[3, "toastStatus"]]);Z([3, 'toast']);Z([[6],[[7],[3, "toast"]],[3, "toastAnimationData"]]);Z([3, 'toast-mask']);Z([3, 'toast-titile']);Z([a, [[6],[[7],[3, "toast"]],[3, "toastTitle"]]]);Z([[7],[3, "display"]]);Z([3, 'wx_user_login_box']);Z([3, 'wx_user_face']);Z([3, 'background:#06cf5b;']);Z([3, '/yb_shop/static/images/wx_user_login.png']);Z([3, 'wx_login_info']);Z([3, '请您授权微信登录']);Z([3, '否则部分功能无法正常使用']);Z([3, 'onGotUserInfo']);Z([3, 'wx_user_login']);Z([3, 'zh_CN']);Z([3, 'getUserInfo']);Z([3, '授权登录']);Z([[7],[3, "show"]]);Z([[2, "!"], [[7],[3, "display"]]]);Z([[8], "toast", [[7],[3, "toast"]]]);Z([[2, "=="], [[6],[[7],[3, "groupInfo"]],[3, "groupStatus"]], [1, "拼团中"]]);Z([3, 'grouping']);Z([[6],[[7],[3, "groupInfo"]],[3, "isSelf"]]);Z([3, 'group-goods bg-fff']);Z([3, 'aspectFill']);Z([[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "img"]]);Z([3, 'goods-info pull-right']);Z([3, 'goods-title']);Z([a, [[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "name"]]]);Z([3, 'goods-sale']);Z([a, [[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "groupNum"]],[3, '人团·已团'],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "saleNum"]],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "unit"]]]);Z([3, 'goods-price']);Z([a, [3, '¥'],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "gprice"]]]);Z([3, 'notice text-center bg-fff']);Z([3, '\n            还差\n            ']);Z([3, 'text-red']);Z([a, [[7],[3, "leftnum"]]]);Z([3, '人，\n            ']);Z([a, [[7],[3, "leftTime"]]]);Z([3, '后结束\n          ']);Z([3, 'padding: 30rpx 24rpx;']);Z([3, 'btn']);Z([3, 'share']);Z([3, '邀请好友参团']);Z([3, 'group-info mt-20']);Z([3, 'user-img text-center bg-fff']);Z([3, 'group-header']);Z([3, '团长']);Z([[7],[3, "groupMember"]]);Z([3, 'unique']);Z([[6],[[7],[3, "item"]],[3, "user_headimg"]]);Z([3, 'goods-title-1 mt-10 flex-row bg-fff']);Z([3, 'flex-grow-0 flex-y-center']);Z([3, 'line-height: 90rpx;']);Z([3, '商品名称']);Z([3, 'flex-grow-1']);Z([3, 'line-height:90rpx;text-align: right;']);Z([3, 'group-time flex-row bg-fff']);Z([3, 'flex-grow-0']);Z([3, '参团时间']);Z([3, 'padding-right: 24rpx;text-align: right;']);Z([a, [3, '\n              '],[[6],[[7],[3, "groupInfo"]],[3, "createTime"]],[3, '\n            ']]);Z([3, 'group-info text-center bg-fff mt-20']);Z([3, 'user-img']);Z([3, 'mt-10']);Z([3, '\n            仅剩\n            ']);Z([3, 'padding: 0 10rpx;']);Z([a, [3, '个名额，'],[[7],[3, "leftTime"]],[3, '后结束\n          ']]);Z([3, 'mt-20']);Z([3, 'padding: 20rpx 24rpx;']);Z([3, 'showModal']);Z([3, 'open']);Z([3, '一键参团']);Z([[2, "=="], [[6],[[7],[3, "groupInfo"]],[3, "groupStatus"]], [1, "拼团成功"]]);Z([3, 'grouped']);Z([3, 'warn-primary']);Z([3, '拼团成功']);Z([3, 'warn-notice']);Z([3, '商家正在努力发货，请耐心等待！']);Z([3, 'goToHome']);Z([3, '去首页逛逛']);Z([[6],[[7],[3, "groupInfo"]],[3, "groupMember"]]);Z([3, 'list-group mt-20 bg-fff']);Z([3, 'list-item']);Z([3, 'list-item-aside goods-title']);Z([3, 'list-group bg-fff']);Z([3, '收货人']);Z([3, 'list-item-aside']);Z([a, [3, '\n            '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "address"]],[3, "userName"]],[3, ' '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "address"]],[3, "telNumber"]],[3, '\n          ']]);Z([3, '收货地址']);Z([a, [3, '\n            '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "address"]],[3, "province"]],[3, ' '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "address"]],[3, "city"]],[3, ' '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "address"]],[3, "county"]],[3, ' '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "address"]],[3, "address"]],[3, '\n          ']]);Z([a, [[6],[[7],[3, "groupInfo"]],[3, "createTime"]]]);Z([a, [3, '\n              '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "groupNum"]],[3, '人团·已'],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "saleNum"]],[3, '团件\n            ']]);Z([3, 'text-center']);Z([3, '团已满']);Z([3, 'showGoodsDetail']);Z([[6],[[7],[3, "groupInfo"]],[3, "gid"]]);Z([3, '再次一键开团']);Z([[2, "=="], [[6],[[7],[3, "groupInfo"]],[3, "groupStatus"]], [1, "拼团失败"]]);Z([3, 'groupFail']);Z([a, [3, '\n            '],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "groupNum"]],[3, '人团·已'],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "saleNum"]],[3, '团件\n          ']]);Z([a, [3, '￥'],[[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "gprice"]]]);Z([3, 'group-item bg-fff mt-20']);Z([3, 'user-img text-center']);Z([3, 'text-center group-fail-text']);Z([3, '拼团不成功，款项将原路返还']);Z([[7],[3, "showModalStatus"]]);Z([3, 'drawer_screen']);Z([3, 'close']);Z([[7],[3, "animationData"]]);Z([3, 'modal']);Z([3, 'modal-close pull-right']);Z([3, '../../resource/off.png']);Z([3, 'width: 30rpx;height: 30rpx;']);Z([3, 'clearfix']);Z([3, 'modal-title']);Z([3, 'goods-img']);Z([3, 'aspectFit']);Z([a, [3, '¥'],[[2, "*"], [[6],[[6],[[7],[3, "groupInfo"]],[3, "goods"]],[3, "gprice"]], [[7],[3, "num"]]]]);Z([3, 'number pull-left']);Z([3, 'pull-left']);Z([3, 'padding-left: 24rpx;']);Z([3, '数量']);Z([3, 'plus']);Z([3, 'plus pull-right']);Z([3, '十']);Z([3, 'buy-value pull-right']);Z([a, [[7],[3, "num"]]]);Z([3, 'minus']);Z([3, 'minus pull-right']);Z([3, '一']);Z([3, 'modal-footer']);Z([3, 'goToBuy']);Z([3, 'btn_pt']);Z([3, '确定']);
  })(z);d_["./yb_shop/pages/pintuan/pages/template/toast.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/toast.wxml"]["toast"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/toast.wxml:toast'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/toast.wxml');return}
    p_[b]=true
    try{
      var orJB = _v();
      if (_o(0, e, s, gg)) {
        orJB.wxVkey = 1;var osJB = _n("view");_r(osJB, 'class', 1, e, s, gg);var ouJB = _v();
      if (_o(0, e, s, gg)) {
        ouJB.wxVkey = 1;var ovJB = _m( "view", ["animation", 2,"class", 1], e, s, gg);var oxJB = _n("view");_r(oxJB, 'class', 4, e, s, gg);var oyJB = _o(5, e, s, gg);_(oxJB,oyJB);_(ovJB,oxJB);_(ouJB, ovJB);
      } _(osJB,ouJB);_(orJB, osJB);
      } _(r,orJB);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m0=function(e,s,r,gg){
    
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/template/toast.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/group/detail.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oBKB = _v();
      if (_o(6, e, s, gg)) {
        oBKB.wxVkey = 1;var oCKB = _n("view");_r(oCKB, 'class', 7, e, s, gg);var oEKB = _m( "view", ["class", 8,"style", 1], e, s, gg);var oFKB = _n("image");_r(oFKB, 'src', 10, e, s, gg);_(oEKB,oFKB);_(oCKB,oEKB);var oGKB = _n("view");_r(oGKB, 'class', 11, e, s, gg);var oHKB = _n("text");var oIKB = _o(12, e, s, gg);_(oHKB,oIKB);_(oGKB,oHKB);var oJKB = _n("text");var oKKB = _o(13, e, s, gg);_(oJKB,oKKB);_(oGKB,oJKB);_(oCKB,oGKB);var oLKB = _m( "button", ["style", 9,"bindgetuserinfo", 5,"class", 6,"lang", 7,"openType", 8], e, s, gg);var oMKB = _o(18, e, s, gg);_(oLKB,oMKB);_(oCKB,oLKB);_(oBKB, oCKB);
      } _(r,oBKB);var oNKB = _v();
      if (_o(19, e, s, gg)) {
        oNKB.wxVkey = 1;var oQKB = _v();
      if (_o(20, e, s, gg)) {
        oQKB.wxVkey = 1;var oSKB = e_["./yb_shop/pages/pintuan/pages/group/detail.wxml"].i;_ai(oSKB, '../template/toast.wxml', e_, './yb_shop/pages/pintuan/pages/group/detail.wxml', 0, 0);var oUKB = _v();
       var oVKB = _o(1, e, s, gg);
       var oXKB = _gd('./yb_shop/pages/pintuan/pages/group/detail.wxml', oVKB, e_, d_);
       if (oXKB) {
         var oWKB = _1(21,e,s,gg);
         oXKB(oWKB,oWKB,oUKB, gg);
       } else _w(oVKB, './yb_shop/pages/pintuan/pages/group/detail.wxml', 0, 0);_(oQKB,oUKB);var oYKB = _v();
      if (_o(22, e, s, gg)) {
        oYKB.wxVkey = 1;var oZKB = _n("view");_r(oZKB, 'class', 23, e, s, gg);var obKB = _v();
      if (_o(24, e, s, gg)) {
        obKB.wxVkey = 1;var oeKB = _n("view");_r(oeKB, 'class', 25, e, s, gg);var ofKB = _m( "image", ["mode", 26,"src", 1], e, s, gg);_(oeKB,ofKB);var ogKB = _n("view");_r(ogKB, 'class', 28, e, s, gg);var ohKB = _n("view");_r(ohKB, 'class', 29, e, s, gg);var oiKB = _o(30, e, s, gg);_(ohKB,oiKB);_(ogKB,ohKB);var ojKB = _n("view");_r(ojKB, 'class', 31, e, s, gg);var okKB = _o(32, e, s, gg);_(ojKB,okKB);_(ogKB,ojKB);var olKB = _n("view");_r(olKB, 'class', 33, e, s, gg);var omKB = _o(34, e, s, gg);_(olKB,omKB);_(ogKB,olKB);_(oeKB,ogKB);_(obKB,oeKB);var onKB = _n("view");_r(onKB, 'class', 35, e, s, gg);var ooKB = _n("view");ooKB.attr['class'] = true;_(onKB,ooKB);var owKB = _n("view");_r(owKB, 'style', 42, e, s, gg);var oxKB = _m( "button", ["class", 43,"openType", 1], e, s, gg);var oyKB = _o(45, e, s, gg);_(oxKB,oyKB);_(owKB,oxKB);_(onKB,owKB);_(obKB,onKB);var ozKB = _n("view");_r(ozKB, 'class', 46, e, s, gg);var o_KB = _n("view");_r(o_KB, 'class', 47, e, s, gg);var oALB = _n("text");_r(oALB, 'class', 48, e, s, gg);var oBLB = _o(49, e, s, gg);_(oALB,oBLB);_(o_KB,oALB);var oCLB = _v();var oDLB = function(oHLB,oGLB,oFLB,gg){var oJLB = _m( "image", ["mode", 26,"src", 26], oHLB, oGLB, gg);_(oFLB,oJLB);return oFLB;};_2(50, oDLB, e, s, gg, oCLB, "item", "index", 'unique');_(o_KB,oCLB);_(ozKB,o_KB);var oKLB = _n("view");_r(oKLB, 'class', 53, e, s, gg);var oLLB = _m( "view", ["class", 54,"style", 1], e, s, gg);var oMLB = _o(56, e, s, gg);_(oLLB,oMLB);_(oKLB,oLLB);var oNLB = _m( "view", ["class", 57,"style", 1], e, s, gg);var oOLB = _n("text");var oPLB = _o(30, e, s, gg);_(oOLB,oPLB);_(oNLB,oOLB);_(oKLB,oNLB);_(ozKB,oKLB);var oQLB = _n("view");_r(oQLB, 'class', 59, e, s, gg);var oRLB = _n("view");_r(oRLB, 'class', 60, e, s, gg);var oSLB = _o(61, e, s, gg);_(oRLB,oSLB);_(oQLB,oRLB);var oTLB = _m( "view", ["class", 57,"style", 5], e, s, gg);var oULB = _o(63, e, s, gg);_(oTLB,oULB);_(oQLB,oTLB);_(ozKB,oQLB);_(obKB,ozKB);
      }else {
        obKB.wxVkey = 2;var oXLB = _n("view");_r(oXLB, 'class', 25, e, s, gg);var oYLB = _m( "image", ["mode", 26,"src", 1], e, s, gg);_(oXLB,oYLB);var oZLB = _n("view");_r(oZLB, 'class', 28, e, s, gg);var oaLB = _n("view");_r(oaLB, 'class', 29, e, s, gg);var obLB = _o(30, e, s, gg);_(oaLB,obLB);_(oZLB,oaLB);var ocLB = _n("view");_r(ocLB, 'class', 31, e, s, gg);var odLB = _o(32, e, s, gg);_(ocLB,odLB);_(oZLB,ocLB);var oeLB = _n("view");_r(oeLB, 'class', 33, e, s, gg);var ofLB = _o(34, e, s, gg);_(oeLB,ofLB);_(oZLB,oeLB);_(oXLB,oZLB);_(obKB,oXLB);var ogLB = _n("view");_r(ogLB, 'class', 64, e, s, gg);var ohLB = _n("view");_r(ohLB, 'class', 65, e, s, gg);var oiLB = _n("text");_r(oiLB, 'class', 48, e, s, gg);var ojLB = _o(49, e, s, gg);_(oiLB,ojLB);_(ohLB,oiLB);var okLB = _v();var olLB = function(opLB,ooLB,onLB,gg){var orLB = _m( "image", ["mode", 26,"src", 26], opLB, ooLB, gg);_(onLB,orLB);return onLB;};_2(50, olLB, e, s, gg, okLB, "item", "index", 'unique');_(ohLB,okLB);_(ogLB,ohLB);var osLB = _n("view");_r(osLB, 'class', 66, e, s, gg);var otLB = _o(67, e, s, gg);_(osLB,otLB);var ouLB = _m( "text", ["class", 37,"style", 31], e, s, gg);var ovLB = _o(38, e, s, gg);_(ouLB,ovLB);_(osLB,ouLB);var owLB = _o(69, e, s, gg);_(osLB,owLB);_(ogLB,osLB);var oxLB = _m( "view", ["class", 70,"style", 1], e, s, gg);var oyLB = _m( "button", ["class", 43,"bindtap", 29,"data-statu", 30], e, s, gg);var ozLB = _o(74, e, s, gg);_(oyLB,ozLB);_(oxLB,oyLB);_(ogLB,oxLB);_(obKB,ogLB);
      }_(oZKB,obKB);_(oYKB, oZKB);
      } _(oQKB,oYKB);var o_LB = _v();
      if (_o(75, e, s, gg)) {
        o_LB.wxVkey = 1;var oAMB = _n("view");_r(oAMB, 'class', 76, e, s, gg);var oCMB = _v();
      if (_o(24, e, s, gg)) {
        oCMB.wxVkey = 1;var oFMB = _n("view");_r(oFMB, 'class', 35, e, s, gg);var oGMB = _n("view");_r(oGMB, 'class', 77, e, s, gg);var oHMB = _o(78, e, s, gg);_(oGMB,oHMB);_(oFMB,oGMB);var oIMB = _n("view");_r(oIMB, 'class', 79, e, s, gg);var oJMB = _o(80, e, s, gg);_(oIMB,oJMB);_(oFMB,oIMB);var oKMB = _m( "button", ["class", 43,"bindtap", 38], e, s, gg);var oLMB = _o(82, e, s, gg);_(oKMB,oLMB);_(oFMB,oKMB);_(oCMB,oFMB);var oMMB = _n("view");_r(oMMB, 'class', 47, e, s, gg);var oNMB = _n("text");_r(oNMB, 'class', 48, e, s, gg);var oOMB = _o(49, e, s, gg);_(oNMB,oOMB);_(oMMB,oNMB);var oPMB = _v();var oQMB = function(oUMB,oTMB,oSMB,gg){var oWMB = _m( "image", ["mode", 26,"src", 26], oUMB, oTMB, gg);_(oSMB,oWMB);return oSMB;};_2(83, oQMB, e, s, gg, oPMB, "item", "index", 'unique');_(oMMB,oPMB);_(oCMB,oMMB);var oXMB = _n("view");_r(oXMB, 'class', 84, e, s, gg);var oYMB = _n("view");_r(oYMB, 'class', 85, e, s, gg);var oZMB = _o(56, e, s, gg);_(oYMB,oZMB);_(oXMB,oYMB);var oaMB = _n("view");_r(oaMB, 'class', 86, e, s, gg);var obMB = _o(30, e, s, gg);_(oaMB,obMB);_(oXMB,oaMB);_(oCMB,oXMB);var ocMB = _n("view");_r(ocMB, 'class', 87, e, s, gg);var odMB = _n("view");_r(odMB, 'class', 85, e, s, gg);var oeMB = _o(88, e, s, gg);_(odMB,oeMB);_(ocMB,odMB);var ofMB = _n("view");_r(ofMB, 'class', 89, e, s, gg);var ogMB = _o(90, e, s, gg);_(ofMB,ogMB);_(ocMB,ofMB);_(oCMB,ocMB);var ohMB = _n("view");_r(ohMB, 'class', 87, e, s, gg);var oiMB = _n("view");_r(oiMB, 'class', 85, e, s, gg);var ojMB = _o(91, e, s, gg);_(oiMB,ojMB);_(ohMB,oiMB);var okMB = _n("view");_r(okMB, 'class', 89, e, s, gg);var olMB = _o(92, e, s, gg);_(okMB,olMB);_(ohMB,okMB);_(oCMB,ohMB);var omMB = _n("view");_r(omMB, 'class', 87, e, s, gg);var onMB = _n("view");_r(onMB, 'class', 85, e, s, gg);var ooMB = _o(61, e, s, gg);_(onMB,ooMB);_(omMB,onMB);var opMB = _n("view");_r(opMB, 'class', 89, e, s, gg);var oqMB = _o(93, e, s, gg);_(opMB,oqMB);_(omMB,opMB);_(oCMB,omMB);
      }else {
        oCMB.wxVkey = 2;var otMB = _n("view");_r(otMB, 'class', 25, e, s, gg);var ouMB = _m( "image", ["mode", 26,"src", 1], e, s, gg);_(otMB,ouMB);var ovMB = _n("view");_r(ovMB, 'class', 28, e, s, gg);var owMB = _n("view");_r(owMB, 'class', 29, e, s, gg);var oxMB = _o(30, e, s, gg);_(owMB,oxMB);_(ovMB,owMB);var oyMB = _n("view");_r(oyMB, 'class', 31, e, s, gg);var ozMB = _o(94, e, s, gg);_(oyMB,ozMB);_(ovMB,oyMB);_(otMB,ovMB);_(oCMB,otMB);var o_MB = _n("view");_r(o_MB, 'class', 47, e, s, gg);var oANB = _n("text");_r(oANB, 'class', 48, e, s, gg);var oBNB = _o(49, e, s, gg);_(oANB,oBNB);_(o_MB,oANB);var oCNB = _v();var oDNB = function(oHNB,oGNB,oFNB,gg){var oJNB = _m( "image", ["mode", 26,"src", 26], oHNB, oGNB, gg);_(oFNB,oJNB);return oFNB;};_2(83, oDNB, e, s, gg, oCNB, "item", "index", 'unique');_(o_MB,oCNB);_(oCMB,o_MB);var oKNB = _n("view");_r(oKNB, 'class', 95, e, s, gg);var oLNB = _o(96, e, s, gg);_(oKNB,oLNB);_(oCMB,oKNB);var oMNB = _m( "button", ["class", 43,"bindtap", 54,"data-id", 55], e, s, gg);var oNNB = _o(99, e, s, gg);_(oMNB,oNNB);_(oCMB,oMNB);
      }_(oAMB,oCMB);_(o_LB, oAMB);
      } _(oQKB,o_LB);var oONB = _v();
      if (_o(100, e, s, gg)) {
        oONB.wxVkey = 1;var oPNB = _n("view");_r(oPNB, 'class', 101, e, s, gg);var oRNB = _n("view");_r(oRNB, 'class', 25, e, s, gg);var oSNB = _m( "image", ["mode", 26,"src", 1], e, s, gg);_(oRNB,oSNB);var oTNB = _n("view");_r(oTNB, 'class', 28, e, s, gg);var oUNB = _n("view");_r(oUNB, 'class', 29, e, s, gg);var oVNB = _o(30, e, s, gg);_(oUNB,oVNB);_(oTNB,oUNB);var oWNB = _n("view");_r(oWNB, 'class', 31, e, s, gg);var oXNB = _o(102, e, s, gg);_(oWNB,oXNB);_(oTNB,oWNB);var oYNB = _n("view");_r(oYNB, 'class', 33, e, s, gg);var oZNB = _o(103, e, s, gg);_(oYNB,oZNB);_(oTNB,oYNB);_(oRNB,oTNB);_(oPNB,oRNB);var oaNB = _n("view");_r(oaNB, 'class', 104, e, s, gg);var obNB = _n("view");_r(obNB, 'class', 105, e, s, gg);var ocNB = _n("text");_r(ocNB, 'class', 48, e, s, gg);var odNB = _o(49, e, s, gg);_(ocNB,odNB);_(obNB,ocNB);var oeNB = _v();var ofNB = function(ojNB,oiNB,ohNB,gg){var olNB = _m( "image", ["mode", 26,"src", 26], ojNB, oiNB, gg);_(ohNB,olNB);return ohNB;};_2(50, ofNB, e, s, gg, oeNB, "item", "index", 'unique');_(obNB,oeNB);_(oaNB,obNB);var omNB = _n("view");_r(omNB, 'class', 106, e, s, gg);var onNB = _o(107, e, s, gg);_(omNB,onNB);_(oaNB,omNB);var ooNB = _m( "button", ["class", 43,"bindtap", 54,"data-id", 55], e, s, gg);var opNB = _o(99, e, s, gg);_(ooNB,opNB);_(oaNB,ooNB);_(oPNB,oaNB);_(oONB, oPNB);
      } _(oQKB,oONB);var oqNB = _v();
      if (_o(108, e, s, gg)) {
        oqNB.wxVkey = 1;var orNB = _m( "view", ["bindtap", 72,"class", 37,"data-statu", 38], e, s, gg);_(oqNB, orNB);
      } _(oQKB,oqNB);var otNB = _v();
      if (_o(108, e, s, gg)) {
        otNB.wxVkey = 1;var ouNB = _m( "view", ["animation", 111,"class", 1], e, s, gg);var owNB = _m( "view", ["bindtap", 72,"data-statu", 38,"class", 41], e, s, gg);var oxNB = _m( "image", ["src", 114,"style", 1], e, s, gg);_(owNB,oxNB);_(ouNB,owNB);var oyNB = _n("view");_r(oyNB, 'class', 116, e, s, gg);_(ouNB,oyNB);var ozNB = _n("view");_r(ozNB, 'class', 117, e, s, gg);var o_NB = _n("view");_r(o_NB, 'class', 118, e, s, gg);var oAOB = _m( "image", ["src", 27,"mode", 92], e, s, gg);_(o_NB,oAOB);_(ozNB,o_NB);var oBOB = _n("view");_r(oBOB, 'class', 33, e, s, gg);var oCOB = _o(120, e, s, gg);_(oBOB,oCOB);_(ozNB,oBOB);_(ouNB,ozNB);var oDOB = _n("view");_r(oDOB, 'class', 121, e, s, gg);var oEOB = _m( "text", ["class", 122,"style", 1], e, s, gg);var oFOB = _o(124, e, s, gg);_(oEOB,oFOB);_(oDOB,oEOB);var oGOB = _m( "text", ["bindtap", 125,"class", 1], e, s, gg);var oHOB = _o(127, e, s, gg);_(oGOB,oHOB);_(oDOB,oGOB);var oIOB = _n("text");_r(oIOB, 'class', 128, e, s, gg);var oJOB = _o(129, e, s, gg);_(oIOB,oJOB);_(oDOB,oIOB);var oKOB = _m( "text", ["bindtap", 130,"class", 1], e, s, gg);var oLOB = _o(132, e, s, gg);_(oKOB,oLOB);_(oDOB,oKOB);_(ouNB,oDOB);var oMOB = _n("view");_r(oMOB, 'class', 133, e, s, gg);var oNOB = _m( "view", ["bindtap", 134,"class", 1], e, s, gg);var oOOB = _o(136, e, s, gg);_(oNOB,oOOB);_(oMOB,oNOB);_(ouNB,oMOB);_(otNB, ouNB);
      } _(oQKB,otNB);;oSKB.pop();
      } _(oNKB,oQKB);
      } _(r,oNKB);
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/group/detail.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background-color:#f2f2f2;font-size:%%?26rpx?%%;color:#1b1b1b}wx-image{vertical-align:middle}.text-center{text-align:center}.pull-left{float:left}.pull-right{float:right}.clearfix{clear:both}.bg-fff{background-color:#fff}.mt-10{margin-top:%%?10rpx?%%}.mt-20{margin-top:%%?20rpx?%%}.p-20{padding:%%?20rpx?%%}.text-red{color:red}.row{width:100%}.on{border-bottom:2px solid red;color:red!important}.swiper-box{min-height:%%?1000rpx?%%}wx-swiper-item wx-image{width:100%;height:100%}.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff}.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%%?20rpx?%%;border-radius:%%?10rpx?%%}.loading wx-image{width:100prx;height:%%?100rpx?%%}.loading .no-data{padding:%%?40rpx?%%;color:#ccc;font-size:%%?22rpx?%%}.flex{display:flex}.flex-row{display:flex;flex-direction:row}.flex-col{display:flex;flex-direction:column}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-grow-2{flex-grow:2}.flex-x-center{display:flex;justify-content:center}.flex-x-left{display:flex;justify-content:left}.flex-x-right{display:flex;justify-content:right}.flex-y-center{display:flex;align-items:center}.flex-y-bottom{display:flex;align-items:flex-end}.float-icon{position:fixed;z-index:20;right:%%?40rpx?%%;bottom:%%?30rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.float-icon1{margin-bottom:%%?20rpx?%%}.float-icon2{margin-bottom:%%?20rpx?%%}.wx_user_login_box{padding-top:6rem;text-align:center;height:100vh;background:rgba(255,255,255,1);position:fixed;width:100%;top:42px;left:0;z-index:9999999999999}.wx_user_login_box .wx_user_face,.wx_user_login_box wx-image{width:4.5rem;height:4.5rem;margin:0 auto;border-radius:50%}.wx_login_info wx-text{display:block;text-align:center;font-size:.9rem;color:#454545;height:1.5rem;line-height:1.5rem}.wx_login_info{padding-top:1rem;padding-bottom:1rem}.wx_user_login{width:88%;background:#06cf5b;color:#fff;border-radius:2rem}.wx_user_login_box .wx_user_face,.wx_user_login_box wx-image{width:4.5rem;height:4.5rem;margin:0 auto;border-radius:50%}.wx_login_info wx-text{display:block;text-align:center;font-size:.9rem;color:#454545;height:1.5rem;line-height:1.5rem}.wx_login_info{padding-top:1rem;padding-bottom:1rem}.wx_user_login{width:80%;background:#06cf5b;color:#fff;border-radius:2rem}.group-goods wx-image{width:%%?232rpx?%%;height:%%?250rpx?%%;margin:%%?20rpx?%% 0 %%?20rpx?%% %%?24rpx?%%}.goods-info{width:55%;padding-top:%%?24rpx?%%;padding-right:%%?24rpx?%%;margin-left:%%?56rpx?%%}.goods-title{line-height:%%?34rpx?%%;font-size:%%?28rpx?%%}.goods-sale{font-size:%%?22rpx?%%;color:#a4a4a4;margin-top:%%?40rpx?%%}wx-button.btn_pt{background-color:#ff4544;color:#fff;font-size:%%?32rpx?%%;line-height:%%?80rpx?%%}.user-img wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;border-radius:50%;border:1px solid #eee;margin:%%?10rpx?%%}.group-header{position:relative;top:%%?-40rpx?%%;left:%%?70rpx?%%;background-color:#ff4544;color:#fff;padding:%%?10rpx?%%;border-radius:%%?15rpx?%%;font-size:%%?25rpx?%%}.groupFail .group-item{padding:%%?20rpx?%% %%?24rpx?%%}.groupFail .group-fail-text{padding:%%?20rpx?%%;font-size:%%?28rpx?%%;color:#e02e24}.groupFail .goods-price{color:#e02e24;font-size:%%?32rpx?%%;margin-top:%%?16rpx?%%}.grouped .notice{padding:%%?16rpx?%% %%?24rpx?%%}.grouped .warn-primary{color:#00c200;font-size:%%?32rpx?%%;font-weight:700;padding:%%?20rpx?%% 0}.grouped .warn-notice{font-size:%%?24rpx?%%;color:#a4a4a4}.grouped .btn_pt{margin-top:%%?28rpx?%%;background-color:#e02e24;color:#fff;line-height:%%?80rpx?%%;font-size:%%?32rpx?%%;border-radius:%%?10rpx?%%}.grouped .list-group .list-item{display:inline-block;width:14%;line-height:%%?72rpx?%%;padding-left:%%?24rpx?%%}.grouped .list-group .list-item-aside{display:inline-block;width:79%;text-align:right;font-size:%%?24rpx?%%;color:#5d5d5d;line-height:%%?72rpx?%%;padding-right:%%?24rpx?%%}.grouped .goods-title{height:%%?72rpx?%%;overflow:hidden;line-height:%%?120rpx?%%!important}.grouping .goods-price{font-size:%%?28rpx?%%;color:#e02e24}.grouping .goods-title-1{padding:0 %%?24rpx?%%}.grouping .group-time{line-height:%%?90rpx?%%;padding-left:%%?24rpx?%%;margin-top:1px}.grouping .notice{font-size:%%?30rpx?%%}.drawer_screen{width:100%;height:100%;position:fixed;top:42px;left:0;z-index:10;background-color:#000;opacity:.3;overflow:hidden}.modal{width:100%;position:fixed;bottom:0;z-index:11;background-color:#fff;height:35%}.modal-close{font-size:%%?40rpx?%%;color:#5d5d5d;margin:%%?10rpx?%% %%?10rpx?%% 0 0}.modal .modal-title{padding-left:%%?248rpx?%%;border-bottom:1px solid #bbb}.modal-title wx-image{width:%%?200rpx?%%;height:%%?200rpx?%%;position:absolute;top:%%?-62rpx?%%;left:%%?24rpx?%%;border-radius:%%?10rpx?%%;opacity:.7}.modal .goods-price{font-size:%%?36rpx?%%;color:#e02e24}.modal .modal-body{padding:%%?20rpx?%% %%?24rpx?%%}.modal .prop{border-bottom:1px solid #ccc}.modal .prop-name{padding:%%?20rpx?%% 0;font-size:%%?28rpx?%%}.modal .prop>wx-text{display:inline-block;background-color:#f2f2f2;line-height:%%?56rpx?%%;padding:0 %%?24rpx?%%;margin:%%?20rpx?%% %%?30rpx?%% %%?20rpx?%% 0;border-radius:%%?10rpx?%%}.selected{background-color:red!important;color:#fff}.number{width:100%;padding:%%?30rpx?%% 0;border-bottom:1px solid #ccc}.number>wx-text{line-height:%%?50rpx?%%}.buy-value{width:%%?94rpx?%%;text-align:center;background-color:#eee;margin:0 %%?4rpx?%%;font-size:%%?24rpx?%%;border-radius:%%?10rpx?%%}.minus,.plus{padding:0 %%?20rpx?%%;background-color:#ccc;border-radius:%%?10rpx?%%}.plus{margin-right:%%?24rpx?%%}.modal .btn_pt{background-color:red;color:#fff;position:absolute;bottom:0;width:100%;text-align:center;line-height:%%?98rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/group/detail";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/group/detail.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
// pages/group/info.js
var app = getApp(),
    a = app.requirejs("core");
Page({
  data: {
    num: 1,
    show: false,
    display: false
  },
  onGotUserInfo: function onGotUserInfo(q) {
    var id = this.id;
    var that = this,
        e = app.getCache("userinfo");
    that.setData({
      display: false
    });
    if (e) {
      return;
    }
    app.getUserInfo(q.detail.userInfo, function (t) {
      if (t != 1000) {
        // that.getList();
        // that.setData({
        //   display: false
        // })
        that.getDetail(id);
      } else {
        that.setData({
          display: true
        });
      }
    });
  },
  onLoad: function onLoad(options) {
    this.id = options.id;
  },
  onShow: function onShow() {
    var id = this.id;
    var e = app.getCache("userinfo");
    if (e) {
      this.getDetail(id);
      this.setData({
        display: false
      });
    } else {
      this.setData({
        display: true
      });
    }
  },
  getDetail: function getDetail(id) {
    var self = this;
    a.get('Pintuan/ptGroupDetail', {
      id: id,
      uid: getApp().getCache("userinfo").uid
    }, function (res) {
      console.log(res);
      if (res.code == 0) {
        var _self$setData;
        var timeStr = '';
        if (res.info.leftTime > 0) {
          var t = --res.info.leftTime;
          var h = Math.floor(t / 60 / 60);
          var m = Math.floor((t - h * 60 * 60) / 60);
          var s = t % 60;
          if (h < 10) h = "0" + h;
          if (m < 10) m = "0" + m;
          if (s < 10) s = "0" + s;
          timeStr = h + ':' + m + ':' + s;
          console.log('a:' + timeStr);
          self.setTimeData(res.info.leftTime, id);
        }
        var groupMember = [];
        for (var i = res.info.goods.groupNum - 1; i >= 0; i--) {
          if (res.info.groupMember[i]) {
            groupMember[i] = res.info.groupMember[i];
          } else {
            groupMember[i] = {};
          }
        }
        self.setData((_self$setData = {
          groupMember: groupMember }, _defineProperty(_self$setData, "groupMember", groupMember), _defineProperty(_self$setData, "groupInfo", res.info), _defineProperty(_self$setData, "leftTime", timeStr), _defineProperty(_self$setData, "leftnum", res.info.goods.groupNum - res.info.leftNum), _defineProperty(_self$setData, "show", true), _self$setData));
      } else {
        a.alert(res.msg);
      }
    }, true);
  },
  setTimeData: function setTimeData(time, id) {
    var self = this;
    var id = id;
    setInterval(function () {
      var t = --time;
      var h = Math.floor(t / 60 / 60);
      var m = Math.floor((t - h * 60 * 60) / 60);
      var s = t % 60;
      if (h < 10) h = "0" + h;
      if (m < 10) m = "0" + m;
      if (s < 10) s = "0" + s;
      var timeStr = h + ':' + m + ':' + s;
      if (h == 0 && m == 0 && s == 0) {
        a.get('Pintuan/ptGroupDetail', {
          id: id
        }, function (res) {
          var groupMember = [];
          for (var i = res.info.goods.groupNum - 1; i >= 0; i--) {
            if (res.info.groupMember[i]) {
              groupMember[i] = res.info.groupMember[i];
            } else {
              groupMember[i] = {};
            }
          }
          self.setData({
            groupMember: groupMember,
            groupInfo: res.info
          });
        });
      }
      self.setData({
        leftTime: timeStr
      });
    }, 1000);
  },
  onShareAppMessage: function onShareAppMessage(options) {
    console.log(options);
    var path = '/yb_shop/pages/pintuan/pages/group/detail?id=' + this.data.groupInfo.id;
    return {
      title: this.data.groupInfo.goods.name,
      path: path,
      success: function success(res) {
        console.log(path);
        console.log(res);
      }
    };
  },
  goToHome: function goToHome() {
    a.jump('/yb_shop/pages/index/index', 2);
  },
  showGoodsDetail: function showGoodsDetail(e) {
    var id = e.currentTarget.dataset.id;
    app.redirect('goods/detail', 'gid=' + id);
  },
  goToBuy: function goToBuy() {
    var goodsDetail = this.data.groupInfo.goods;
    goodsDetail['num'] = this.data.num;
    goodsDetail['goodsPrice'] = this.data.groupInfo.goods.gprice;
    goodsDetail['buyType'] = 1;
    goodsDetail['groupPid'] = this.data.groupInfo.id;
    //console.log(goodsDetail)
    app.goodsInfo = goodsDetail;
    app.redirect('goods/payfor');
  },
  selectProp: function selectProp(e) {
    var current = e.currentTarget.dataset;
    var pid = current.pid;
    var pname = current.pname;
    var name = current.name;
    var propValue = this.propValue ? this.propValue : [];
    propValue[pid] = { pname: pname, name: name };
    this.propValue = propValue;
    this.setData({
      propValue: propValue
    });
  },
  minus: function minus() {
    var num = this.data.num > 1 ? --this.data.num : 1;
    this.setData({
      num: num
    });
  },
  plus: function plus() {
    var num = ++this.data.num;
    this.setData({
      num: num
    });
  },
  showModal: function showModal(e) {
    var showModalStatus = e.currentTarget.dataset.statu == 'open' ? true : false;
    app.showModal(this);
    this.setData({
      showModalStatus: showModalStatus
    });
  }
});
});require("yb_shop/pages/pintuan/pages/group/detail.js")@code-separator-line:["div","template","view","image","text","button","block","import"]