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
    Z([3, 'loading text-center']);Z([[7],[3, "loading"]]);Z([3, '../../resource/loading.svg']);Z([3, 'width: 168rpx;height: 88rpx']);Z([3, '正在加载']);Z([3, 'no-data']);Z([3, ' 没有更多数据了 ']);Z([[2, ">"], [[6],[[7],[3, "ordersList"]],[3, "length"]], [1, 0]]);Z([3, 't']);Z([[7],[3, "ordersList"]]);Z([3, 'unique']);Z([3, 'order-group']);Z([3, 'group-msg bg-fff pull-left']);Z([3, 'order-num pull-left']);Z([a, [3, '订单编号：'],[[6],[[7],[3, "item"]],[3, "orderNum"]]]);Z([3, 'pull-right order-status']);Z([a, [[6],[[7],[3, "item"]],[3, "orderStatus"]]]);Z([3, 'showOrderDetail']);Z([3, 'order-goods pull-left flex-row']);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([3, 'goods-img flex-grow-0']);Z([3, 'aspectFill']);Z([[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "img"]]);Z([3, 'goods-right flex-grow-1']);Z([3, 'goods-title flex-row']);Z([a, [3, '\n            '],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "name"]],[3, '\n          ']]);Z([3, 'goods-info flex-row']);Z([3, 'goods-class flex-grow-1']);Z([3, 'goods-num']);Z([a, [3, '数量：'],[[6],[[7],[3, "item"]],[3, "goodsNum"]],[3, ' '],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "unit"]]]);Z([3, 'flex-grow-0 info-money']);Z([a, [3, '\n              ￥'],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "gprice"]],[3, '\n            ']]);Z([3, 'order-price bg-fff flex-row']);Z([3, 'flex-grow-1']);Z([3, '\n          实付：\n          ']);Z([a, [3, '¥'],[[6],[[7],[3, "item"]],[3, "totalPrice"]]]);Z([3, '(免运费)\n        ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "orderStatus"]], [1, "待付款"]]);Z([3, 'user-option bg-fff']);Z([3, 'toPay']);Z([3, 'btn btn-danger flex-grow-1']);Z([[6],[[7],[3, "item"]],[3, "isGroup"]]);Z([3, '去支付']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "orderStatus"]], [1, "待成团"]]);Z([3, 'toGroupDetail']);Z([3, '邀请好友开团']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "orderStatus"]], [1, "待收货"]]);Z([3, 'confirmReceipt']);Z([3, '确认收货']);Z([[2, "||"],[[2, "||"],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 2]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 4]]]);Z([3, 'tuikuan']);Z([3, '申请退款']);Z([3, 'loading']);Z([[8], "loading", [[7],[3, "loading"]]]);Z([[2, "&&"],[[2, "=="], [[6],[[7],[3, "ordersList"]],[3, "length"]], [1, 0]],[[2, "!"], [[7],[3, "loading"]]]]);Z([3, 'no-orders']);Z([3, 'text-center']);Z([3, '../../resource/no-orders.png']);Z([3, 'mt-20']);Z([3, '您没有相关订单']);
  })(z);d_["./yb_shop/pages/pintuan/pages/template/loading.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/loading.wxml"]["loading"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/loading.wxml:loading'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/loading.wxml');return}
    p_[b]=true
    try{
      var oNk = _n("view");_r(oNk, 'class', 0, e, s, gg);var oOk = _v();
      if (_o(1, e, s, gg)) {
        oOk.wxVkey = 1;var oRk = _m( "image", ["src", 2,"style", 1], e, s, gg);_(oOk,oRk);var oSk = _n("view");_r(oSk, 'class', 0, e, s, gg);var oTk = _o(4, e, s, gg);_(oSk,oTk);_(oOk,oSk);
      }else {
        oOk.wxVkey = 2;var oWk = _n("view");_r(oWk, 'class', 5, e, s, gg);var oXk = _o(6, e, s, gg);_(oWk,oXk);_(oOk,oWk);
      }_(oNk,oOk);_(r,oNk);
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
        e_["./yb_shop/pages/pintuan/pages/template/loading.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/template/orderslist.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/orderslist.wxml"]["ordersList"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/orderslist.wxml:ordersList'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/orderslist.wxml');return}
    p_[b]=true
    try{
      var obk = _v();
      if (_o(7, e, s, gg)) {
        obk.wxVkey = 1;var ock = _n("view");_r(ock, 'class', 8, e, s, gg);var oek = _v();var ofk = function(ojk,oik,ohk,gg){var ogk = _n("view");_r(ogk, 'class', 11, ojk, oik, gg);var olk = _n("view");_r(olk, 'class', 12, ojk, oik, gg);var omk = _n("text");_r(omk, 'class', 13, ojk, oik, gg);var onk = _o(14, ojk, oik, gg);_(omk,onk);_(olk,omk);var ook = _n("text");_r(ook, 'class', 15, ojk, oik, gg);var opk = _o(16, ojk, oik, gg);_(ook,opk);_(olk,ook);_(ogk,olk);var oqk = _m( "view", ["bindtap", 17,"class", 1,"data-id", 2], ojk, oik, gg);var ork = _n("view");_r(ork, 'class', 20, ojk, oik, gg);var osk = _m( "image", ["mode", 21,"src", 1], ojk, oik, gg);_(ork,osk);_(oqk,ork);var otk = _n("view");_r(otk, 'class', 23, ojk, oik, gg);var ouk = _n("view");_r(ouk, 'class', 24, ojk, oik, gg);var ovk = _o(25, ojk, oik, gg);_(ouk,ovk);_(otk,ouk);var owk = _n("view");_r(owk, 'class', 26, ojk, oik, gg);var oxk = _n("view");_r(oxk, 'class', 27, ojk, oik, gg);var oyk = _n("text");_r(oyk, 'class', 28, ojk, oik, gg);var ozk = _o(29, ojk, oik, gg);_(oyk,ozk);_(oxk,oyk);_(owk,oxk);var o_k = _n("view");_r(o_k, 'class', 30, ojk, oik, gg);var oAl = _o(31, ojk, oik, gg);_(o_k,oAl);_(owk,o_k);_(otk,owk);_(oqk,otk);_(ogk,oqk);var oBl = _n("view");_r(oBl, 'class', 32, ojk, oik, gg);var oCl = _n("view");_r(oCl, 'class', 33, ojk, oik, gg);var oDl = _o(34, ojk, oik, gg);_(oCl,oDl);var oEl = _n("text");var oFl = _o(35, ojk, oik, gg);_(oEl,oFl);_(oCl,oEl);var oGl = _o(36, ojk, oik, gg);_(oCl,oGl);_(oBl,oCl);_(ogk,oBl);var oHl = _v();
      if (_o(37, ojk, oik, gg)) {
        oHl.wxVkey = 1;var oKl = _n("view");_r(oKl, 'class', 38, ojk, oik, gg);var oLl = _m( "view", ["data-id", 19,"bindtap", 20,"class", 21,"data-isGroup", 22], ojk, oik, gg);var oMl = _o(42, ojk, oik, gg);_(oLl,oMl);_(oKl,oLl);_(oHl,oKl);
      } _(ogk,oHl);var oNl = _v();
      if (_o(43, ojk, oik, gg)) {
        oNl.wxVkey = 1;var oQl = _n("view");_r(oQl, 'class', 38, ojk, oik, gg);var oRl = _m( "view", ["data-id", 19,"class", 21,"bindtap", 25], ojk, oik, gg);var oSl = _o(45, ojk, oik, gg);_(oRl,oSl);_(oQl,oRl);_(oNl,oQl);
      } _(ogk,oNl);var oTl = _v();
      if (_o(46, ojk, oik, gg)) {
        oTl.wxVkey = 1;var oWl = _n("view");_r(oWl, 'class', 38, ojk, oik, gg);var oXl = _m( "view", ["data-id", 19,"class", 21,"bindtap", 28], ojk, oik, gg);var oYl = _o(48, ojk, oik, gg);_(oXl,oYl);_(oWl,oXl);_(oTl,oWl);
      } _(ogk,oTl);var oZl = _v();
      if (_o(49, ojk, oik, gg)) {
        oZl.wxVkey = 1;var ocl = _n("view");_r(ocl, 'class', 38, ojk, oik, gg);var odl = _m( "view", ["data-id", 19,"class", 21,"bindtap", 31], ojk, oik, gg);var oel = _o(51, ojk, oik, gg);_(odl,oel);_(ocl,odl);_(oZl,ocl);
      } _(ogk,oZl);_(ohk, ogk);return ohk;};_2(9, ofk, e, s, gg, oek, "item", "index", 'unique');_(ock,oek);var ofl = _v();
       var ogl = _o(52, e, s, gg);
       var oil = _gd('./yb_shop/pages/pintuan/pages/template/orderslist.wxml', ogl, e_, d_);
       if (oil) {
         var ohl = _1(53,e,s,gg);
         oil(ohl,ohl,ofl, gg);
       } else _w(ogl, './yb_shop/pages/pintuan/pages/template/orderslist.wxml', 0, 0);_(ock,ofl);_(obk, ock);
      } _(r,obk);var ojl = _v();
      if (_o(54, e, s, gg)) {
        ojl.wxVkey = 1;var okl = _n("view");_r(okl, 'class', 55, e, s, gg);var oml = _n("view");_r(oml, 'class', 56, e, s, gg);var onl = _n("image");_r(onl, 'src', 57, e, s, gg);_(oml,onl);var ool = _n("view");_r(ool, 'class', 58, e, s, gg);var opl = _o(59, e, s, gg);_(ool,opl);_(oml,ool);_(okl,oml);_(ojl, okl);
      } _(r,ojl);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m1=function(e,s,r,gg){
    var oql = e_["./yb_shop/pages/pintuan/pages/template/orderslist.wxml"].i;_ai(oql, 'loading.wxml', e_, './yb_shop/pages/pintuan/pages/template/orderslist.wxml', 0, 0);oql.pop();
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/template/orderslist.wxml"]={f:m1,j:[],i:[],ti:["loading.wxml"],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/template/orderslist";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/template/orderslist.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// yb_shop/pages/pintuan/pages/template/orderslist.js
Page({
  /**
   * 页面的初始数据
   */
  data: {},
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function onLoad(options) {},
  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function onReady() {},
  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function onShow() {},
  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function onHide() {},
  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function onUnload() {},
  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function onPullDownRefresh() {},
  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function onReachBottom() {},
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {}
});
});require("yb_shop/pages/pintuan/pages/template/orderslist.js")@code-separator-line:["div","template","view","block","image","import","text"]