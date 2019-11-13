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
    Z([3, 'loading text-center']);Z([[7],[3, "loading"]]);Z([3, '../../resource/loading.svg']);Z([3, 'width: 168rpx;height: 88rpx']);Z([3, '正在加载']);Z([3, 'no-data']);Z([3, ' 没有更多数据了 ']);Z([[2, ">"], [[6],[[7],[3, "ordersList"]],[3, "length"]], [1, 0]]);Z([3, 't']);Z([[7],[3, "ordersList"]]);Z([3, 'unique']);Z([3, 'order-group']);Z([3, 'group-msg bg-fff pull-left']);Z([3, 'order-num pull-left']);Z([a, [3, '订单编号：'],[[6],[[7],[3, "item"]],[3, "orderNum"]]]);Z([3, 'pull-right order-status']);Z([a, [[6],[[7],[3, "item"]],[3, "orderStatus"]]]);Z([3, 'showOrderDetail']);Z([3, 'order-goods pull-left flex-row']);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([3, 'goods-img flex-grow-0']);Z([3, 'aspectFill']);Z([[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "img"]]);Z([3, 'goods-right flex-grow-1']);Z([3, 'goods-title flex-row']);Z([a, [3, '\n            '],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "name"]],[3, '\n          ']]);Z([3, 'goods-info flex-row']);Z([3, 'goods-class flex-grow-1']);Z([3, 'goods-num']);Z([a, [3, '数量：'],[[6],[[7],[3, "item"]],[3, "goodsNum"]],[3, ' '],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "unit"]]]);Z([3, 'flex-grow-0 info-money']);Z([a, [3, '\n              ￥'],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "gprice"]],[3, '\n            ']]);Z([3, 'order-price bg-fff flex-row']);Z([3, 'flex-grow-1']);Z([3, '\n          实付：\n          ']);Z([a, [3, '¥'],[[6],[[7],[3, "item"]],[3, "totalPrice"]]]);Z([3, '(免运费)\n        ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "orderStatus"]], [1, "待付款"]]);Z([3, 'user-option bg-fff']);Z([3, 'toPay']);Z([3, 'btn btn-danger flex-grow-1']);Z([[6],[[7],[3, "item"]],[3, "isGroup"]]);Z([3, '去支付']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "orderStatus"]], [1, "待成团"]]);Z([3, 'toGroupDetail']);Z([3, '邀请好友开团']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "orderStatus"]], [1, "待收货"]]);Z([3, 'confirmReceipt']);Z([3, '确认收货']);Z([[2, "||"],[[2, "||"],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 2]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 4]]]);Z([3, 'tuikuan']);Z([3, '申请退款']);Z([3, 'loading']);Z([[8], "loading", [[7],[3, "loading"]]]);Z([[2, "&&"],[[2, "=="], [[6],[[7],[3, "ordersList"]],[3, "length"]], [1, 0]],[[2, "!"], [[7],[3, "loading"]]]]);Z([3, 'no-orders']);Z([3, 'text-center']);Z([3, '../../resource/no-orders.png']);Z([3, 'mt-20']);Z([3, '您没有相关订单']);Z([3, 'scroll-view-x']);Z([[7],[3, "scrollLeft"]]);Z([3, 'true']);Z([3, 'scroll-view-item']);Z([3, 'swichNav']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 0]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '0']);Z([3, '全部']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 1]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '1']);Z([3, '待付款']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 2]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '2']);Z([3, '待成团']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 3]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '3']);Z([3, '待发货']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 4]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '4']);Z([3, '待收货']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 5]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '5']);Z([3, '退款中']);Z([a, [[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 6]],[1, "on"],[1, ""]],[3, ' font']]);Z([3, '6']);Z([3, '已完成']);Z([3, 'bindChange']);Z([3, 'swiper-box']);Z([[7],[3, "currentTab"]]);Z([3, '300']);Z([a, [3, 'height: '],[[2, "-"], [[7],[3, "windowHeight"]], [1, 35]],[3, 'px;']]);Z([3, 'scrolltolower']);Z([3, 'scroll-view-y']);Z([3, '50']);Z([[7],[3, "scrollTop"]]);Z([3, 'ordersList']);Z([[9], [[8], "ordersList", [[7],[3, "ordersList"]]],[[8], "loading", [[7],[3, "loading"]]]]);
  })(z);d_["./yb_shop/pages/pintuan/pages/template/loading.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/loading.wxml"]["loading"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/loading.wxml:loading'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/loading.wxml');return}
    p_[b]=true
    try{
      var ovRB = _n("view");_r(ovRB, 'class', 0, e, s, gg);var owRB = _v();
      if (_o(1, e, s, gg)) {
        owRB.wxVkey = 1;var ozRB = _m( "image", ["src", 2,"style", 1], e, s, gg);_(owRB,ozRB);var o_RB = _n("view");_r(o_RB, 'class', 0, e, s, gg);var oASB = _o(4, e, s, gg);_(o_RB,oASB);_(owRB,o_RB);
      }else {
        owRB.wxVkey = 2;var oDSB = _n("view");_r(oDSB, 'class', 5, e, s, gg);var oESB = _o(6, e, s, gg);_(oDSB,oESB);_(owRB,oDSB);
      }_(ovRB,owRB);_(r,ovRB);
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
      var oISB = _v();
      if (_o(7, e, s, gg)) {
        oISB.wxVkey = 1;var oJSB = _n("view");_r(oJSB, 'class', 8, e, s, gg);var oLSB = _v();var oMSB = function(oQSB,oPSB,oOSB,gg){var oNSB = _n("view");_r(oNSB, 'class', 11, oQSB, oPSB, gg);var oSSB = _n("view");_r(oSSB, 'class', 12, oQSB, oPSB, gg);var oTSB = _n("text");_r(oTSB, 'class', 13, oQSB, oPSB, gg);var oUSB = _o(14, oQSB, oPSB, gg);_(oTSB,oUSB);_(oSSB,oTSB);var oVSB = _n("text");_r(oVSB, 'class', 15, oQSB, oPSB, gg);var oWSB = _o(16, oQSB, oPSB, gg);_(oVSB,oWSB);_(oSSB,oVSB);_(oNSB,oSSB);var oXSB = _m( "view", ["bindtap", 17,"class", 1,"data-id", 2], oQSB, oPSB, gg);var oYSB = _n("view");_r(oYSB, 'class', 20, oQSB, oPSB, gg);var oZSB = _m( "image", ["mode", 21,"src", 1], oQSB, oPSB, gg);_(oYSB,oZSB);_(oXSB,oYSB);var oaSB = _n("view");_r(oaSB, 'class', 23, oQSB, oPSB, gg);var obSB = _n("view");_r(obSB, 'class', 24, oQSB, oPSB, gg);var ocSB = _o(25, oQSB, oPSB, gg);_(obSB,ocSB);_(oaSB,obSB);var odSB = _n("view");_r(odSB, 'class', 26, oQSB, oPSB, gg);var oeSB = _n("view");_r(oeSB, 'class', 27, oQSB, oPSB, gg);var ofSB = _n("text");_r(ofSB, 'class', 28, oQSB, oPSB, gg);var ogSB = _o(29, oQSB, oPSB, gg);_(ofSB,ogSB);_(oeSB,ofSB);_(odSB,oeSB);var ohSB = _n("view");_r(ohSB, 'class', 30, oQSB, oPSB, gg);var oiSB = _o(31, oQSB, oPSB, gg);_(ohSB,oiSB);_(odSB,ohSB);_(oaSB,odSB);_(oXSB,oaSB);_(oNSB,oXSB);var ojSB = _n("view");_r(ojSB, 'class', 32, oQSB, oPSB, gg);var okSB = _n("view");_r(okSB, 'class', 33, oQSB, oPSB, gg);var olSB = _o(34, oQSB, oPSB, gg);_(okSB,olSB);var omSB = _n("text");var onSB = _o(35, oQSB, oPSB, gg);_(omSB,onSB);_(okSB,omSB);var ooSB = _o(36, oQSB, oPSB, gg);_(okSB,ooSB);_(ojSB,okSB);_(oNSB,ojSB);var opSB = _v();
      if (_o(37, oQSB, oPSB, gg)) {
        opSB.wxVkey = 1;var osSB = _n("view");_r(osSB, 'class', 38, oQSB, oPSB, gg);var otSB = _m( "view", ["data-id", 19,"bindtap", 20,"class", 21,"data-isGroup", 22], oQSB, oPSB, gg);var ouSB = _o(42, oQSB, oPSB, gg);_(otSB,ouSB);_(osSB,otSB);_(opSB,osSB);
      } _(oNSB,opSB);var ovSB = _v();
      if (_o(43, oQSB, oPSB, gg)) {
        ovSB.wxVkey = 1;var oySB = _n("view");_r(oySB, 'class', 38, oQSB, oPSB, gg);var ozSB = _m( "view", ["data-id", 19,"class", 21,"bindtap", 25], oQSB, oPSB, gg);var o_SB = _o(45, oQSB, oPSB, gg);_(ozSB,o_SB);_(oySB,ozSB);_(ovSB,oySB);
      } _(oNSB,ovSB);var oATB = _v();
      if (_o(46, oQSB, oPSB, gg)) {
        oATB.wxVkey = 1;var oDTB = _n("view");_r(oDTB, 'class', 38, oQSB, oPSB, gg);var oETB = _m( "view", ["data-id", 19,"class", 21,"bindtap", 28], oQSB, oPSB, gg);var oFTB = _o(48, oQSB, oPSB, gg);_(oETB,oFTB);_(oDTB,oETB);_(oATB,oDTB);
      } _(oNSB,oATB);var oGTB = _v();
      if (_o(49, oQSB, oPSB, gg)) {
        oGTB.wxVkey = 1;var oJTB = _n("view");_r(oJTB, 'class', 38, oQSB, oPSB, gg);var oKTB = _m( "view", ["data-id", 19,"class", 21,"bindtap", 31], oQSB, oPSB, gg);var oLTB = _o(51, oQSB, oPSB, gg);_(oKTB,oLTB);_(oJTB,oKTB);_(oGTB,oJTB);
      } _(oNSB,oGTB);_(oOSB, oNSB);return oOSB;};_2(9, oMSB, e, s, gg, oLSB, "item", "index", 'unique');_(oJSB,oLSB);var oMTB = _v();
       var oNTB = _o(52, e, s, gg);
       var oPTB = _gd('./yb_shop/pages/pintuan/pages/template/orderslist.wxml', oNTB, e_, d_);
       if (oPTB) {
         var oOTB = _1(53,e,s,gg);
         oPTB(oOTB,oOTB,oMTB, gg);
       } else _w(oNTB, './yb_shop/pages/pintuan/pages/template/orderslist.wxml', 0, 0);_(oJSB,oMTB);_(oISB, oJSB);
      } _(r,oISB);var oQTB = _v();
      if (_o(54, e, s, gg)) {
        oQTB.wxVkey = 1;var oRTB = _n("view");_r(oRTB, 'class', 55, e, s, gg);var oTTB = _n("view");_r(oTTB, 'class', 56, e, s, gg);var oUTB = _n("image");_r(oUTB, 'src', 57, e, s, gg);_(oTTB,oUTB);var oVTB = _n("view");_r(oVTB, 'class', 58, e, s, gg);var oWTB = _o(59, e, s, gg);_(oVTB,oWTB);_(oTTB,oVTB);_(oRTB,oTTB);_(oQTB, oRTB);
      } _(r,oQTB);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m1=function(e,s,r,gg){
    var oXTB = e_["./yb_shop/pages/pintuan/pages/template/orderslist.wxml"].i;_ai(oXTB, 'loading.wxml', e_, './yb_shop/pages/pintuan/pages/template/orderslist.wxml', 0, 0);oXTB.pop();
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/template/orderslist.wxml"]={f:m1,j:[],i:[],ti:["loading.wxml"],ic:[]};d_["./yb_shop/pages/pintuan/pages/orders/index.wxml"] = {};
  var m2=function(e,s,r,gg){
    var oaTB = e_["./yb_shop/pages/pintuan/pages/orders/index.wxml"].i;_ai(oaTB, '/yb_shop/pages/pintuan/pages/template/orderslist.wxml', e_, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);var ocTB = _m( "scroll-view", ["class", 60,"scrollLeft", 1,"scrollX", 2], e, s, gg);var odTB = _n("view");_r(odTB, 'class', 63, e, s, gg);var oeTB = _m( "view", ["bindtap", 64,"class", 1,"data-current", 2], e, s, gg);var ofTB = _o(67, e, s, gg);_(oeTB,ofTB);_(odTB,oeTB);_(ocTB,odTB);var ogTB = _n("view");_r(ogTB, 'class', 63, e, s, gg);var ohTB = _m( "view", ["bindtap", 64,"class", 4,"data-current", 5], e, s, gg);var oiTB = _o(70, e, s, gg);_(ohTB,oiTB);_(ogTB,ohTB);_(ocTB,ogTB);var ojTB = _n("view");_r(ojTB, 'class', 63, e, s, gg);var okTB = _m( "view", ["bindtap", 64,"class", 7,"data-current", 8], e, s, gg);var olTB = _o(73, e, s, gg);_(okTB,olTB);_(ojTB,okTB);_(ocTB,ojTB);var omTB = _n("view");_r(omTB, 'class', 63, e, s, gg);var onTB = _m( "view", ["bindtap", 64,"class", 10,"data-current", 11], e, s, gg);var ooTB = _o(76, e, s, gg);_(onTB,ooTB);_(omTB,onTB);_(ocTB,omTB);var opTB = _n("view");_r(opTB, 'class', 63, e, s, gg);var oqTB = _m( "view", ["bindtap", 64,"class", 13,"data-current", 14], e, s, gg);var orTB = _o(79, e, s, gg);_(oqTB,orTB);_(opTB,oqTB);_(ocTB,opTB);var osTB = _n("view");_r(osTB, 'class', 63, e, s, gg);var otTB = _m( "view", ["bindtap", 64,"class", 16,"data-current", 17], e, s, gg);var ouTB = _o(82, e, s, gg);_(otTB,ouTB);_(osTB,otTB);_(ocTB,osTB);var ovTB = _n("view");_r(ovTB, 'class', 63, e, s, gg);var owTB = _m( "view", ["bindtap", 64,"class", 19,"data-current", 20], e, s, gg);var oxTB = _o(85, e, s, gg);_(owTB,oxTB);_(ovTB,owTB);_(ocTB,ovTB);_(r,ocTB);var oyTB = _m( "swiper", ["bindchange", 86,"class", 1,"current", 2,"duration", 3,"style", 4], e, s, gg);var ozTB = _n("swiper-item");var o_TB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var oAUB = _v();
       var oBUB = _o(95, e, s, gg);
       var oDUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', oBUB, e_, d_);
       if (oDUB) {
         var oCUB = _1(96,e,s,gg);
         oDUB(oCUB,oCUB,oAUB, gg);
       } else _w(oBUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(o_TB,oAUB);_(ozTB,o_TB);_(oyTB,ozTB);var oEUB = _n("swiper-item");var oFUB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var oGUB = _v();
       var oHUB = _o(95, e, s, gg);
       var oJUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', oHUB, e_, d_);
       if (oJUB) {
         var oIUB = _1(96,e,s,gg);
         oJUB(oIUB,oIUB,oGUB, gg);
       } else _w(oHUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(oFUB,oGUB);_(oEUB,oFUB);_(oyTB,oEUB);var oKUB = _n("swiper-item");var oLUB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var oMUB = _v();
       var oNUB = _o(95, e, s, gg);
       var oPUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', oNUB, e_, d_);
       if (oPUB) {
         var oOUB = _1(96,e,s,gg);
         oPUB(oOUB,oOUB,oMUB, gg);
       } else _w(oNUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(oLUB,oMUB);_(oKUB,oLUB);_(oyTB,oKUB);var oQUB = _n("swiper-item");var oRUB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var oSUB = _v();
       var oTUB = _o(95, e, s, gg);
       var oVUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', oTUB, e_, d_);
       if (oVUB) {
         var oUUB = _1(96,e,s,gg);
         oVUB(oUUB,oUUB,oSUB, gg);
       } else _w(oTUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(oRUB,oSUB);_(oQUB,oRUB);_(oyTB,oQUB);var oWUB = _n("swiper-item");var oXUB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var oYUB = _v();
       var oZUB = _o(95, e, s, gg);
       var obUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', oZUB, e_, d_);
       if (obUB) {
         var oaUB = _1(96,e,s,gg);
         obUB(oaUB,oaUB,oYUB, gg);
       } else _w(oZUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(oXUB,oYUB);_(oWUB,oXUB);_(oyTB,oWUB);var ocUB = _n("swiper-item");var odUB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var oeUB = _v();
       var ofUB = _o(95, e, s, gg);
       var ohUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', ofUB, e_, d_);
       if (ohUB) {
         var ogUB = _1(96,e,s,gg);
         ohUB(ogUB,ogUB,oeUB, gg);
       } else _w(ofUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(odUB,oeUB);_(ocUB,odUB);_(oyTB,ocUB);var oiUB = _n("swiper-item");var ojUB = _m( "scroll-view", ["scrollWithAnimation", 62,"scrollY", 0,"style", 28,"bindscrolltolower", 29,"class", 30,"lowerThreshold", 31,"scrollTop", 32], e, s, gg);var okUB = _v();
       var olUB = _o(95, e, s, gg);
       var onUB = _gd('./yb_shop/pages/pintuan/pages/orders/index.wxml', olUB, e_, d_);
       if (onUB) {
         var omUB = _1(96,e,s,gg);
         onUB(omUB,omUB,okUB, gg);
       } else _w(olUB, './yb_shop/pages/pintuan/pages/orders/index.wxml', 0, 0);_(ojUB,okUB);_(oiUB,ojUB);_(oyTB,oiUB);_(r,oyTB);oaTB.pop();
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/orders/index.wxml"]={f:m2,j:[],i:[],ti:["/yb_shop/pages/pintuan/pages/template/orderslist.wxml"],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background-color:#f2f2f2;font-size:%%?26rpx?%%;color:#1b1b1b}wx-image{vertical-align:middle}.text-center{text-align:center}.pull-left{float:left}.pull-right{float:right}.clearfix{clear:both}.bg-fff{background-color:#fff}.mt-10{margin-top:%%?10rpx?%%}.mt-20{margin-top:%%?20rpx?%%}.p-20{padding:%%?20rpx?%%}.text-red{color:red}.row{width:100%}.on{border-bottom:2px solid red;color:red!important}.swiper-box{min-height:%%?1000rpx?%%}wx-swiper-item wx-image{width:100%;height:100%}.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff}.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%%?20rpx?%%;border-radius:%%?10rpx?%%}.loading wx-image{width:100prx;height:%%?100rpx?%%}.loading .no-data{padding:%%?40rpx?%%;color:#ccc;font-size:%%?22rpx?%%}.flex{display:flex}.flex-row{display:flex;flex-direction:row}.flex-col{display:flex;flex-direction:column}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-grow-2{flex-grow:2}.flex-x-center{display:flex;justify-content:center}.flex-x-left{display:flex;justify-content:left}.flex-x-right{display:flex;justify-content:right}.flex-y-center{display:flex;align-items:center}.flex-y-bottom{display:flex;align-items:flex-end}.float-icon{position:fixed;z-index:20;right:%%?40rpx?%%;bottom:%%?30rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.float-icon1{margin-bottom:%%?20rpx?%%}.float-icon2{margin-bottom:%%?20rpx?%%}.scroll-view-x{background-color:#fff;white-space:nowrap;color:#5d5d5d;font-size:11pt}.scroll-view-x .scroll-view-item{display:inline-block;margin:0 %%?44rpx?%%;line-height:%%?70rpx?%%}.scroll-view-y{margin-top:%%?1rpx?%%;font-size:11pt}.order-goods{width:100%;background-color:#f8f8f8}.group-msg{line-height:%%?72rpx?%%;width:100%;margin-top:%%?10rpx?%%}.order-num{margin-left:%%?24rpx?%%;color:#5d5d5d}.order-status{color:#e02e24;margin-right:%%?24rpx?%%}.goods-img{padding:%%?14rpx?%% %%?24rpx?%%}.goods-img wx-image{width:%%?154rpx?%%;height:%%?154rpx?%%}.goods-price{padding-top:%%?28rpx?%%}.goods-prop{color:#a4a4a4;font-size:9pt;margin-top:%%?26rpx?%%;width:100%}.prop-item{width:75%}.order-price{text-align:right;line-height:%%?72rpx?%%;font-size:10pt;color:#5d5d5d;padding-right:%%?24rpx?%%}.order-price wx-text{color:#e02e24;font-weight:700}.btn{border-radius:%%?10rpx?%%;line-height:%%?52rpx?%%;text-align:center;padding:0 %%?24rpx?%%;display:inline-block;margin-left:%%?18rpx?%%;font-size:10pt}.btn-danger{background-color:#ff4544;color:#fff}.btn-primary{background-color:#5cb85c;color:#fff}.no-orders{position:absolute;width:100%}.no-orders wx-image{width:%%?300rpx?%%;height:%%?300rpx?%%}.no-orders>wx-view{margin-top:%%?240rpx?%%}.font{font-size:11pt;color:#5d5d5d}.goods-title{font-size:11pt;color:#1b1b1b}.goods-right{margin-top:%%?24rpx?%%;padding-right:%%?24rpx?%%;float:left}.goods-info{margin-top:%%?40rpx?%%}.goods-class{font-size:11pt;color:#9d9d9d}.info-money{font-size:11pt;color:#1b1b1b;text-align:right;max-width:%%?200rpx?%%;word-wrap:break-word}.goods-num{margin-right:%%?24rpx?%%}.user-option{height:%%?73rpx?%%;padding-right:%%?24rpx?%%;border-top:%%?1rpx?%% solid #f8f8f8;line-height:%%?72rpx?%%;font-size:10pt;text-align:right}.no-danger{color:#5d5d5d;border:%%?2rpx?%% solid #a4a4a4;margin-right:%%?18rpx?%%}.btn{height:%%?52rpx?%%}.order-group{margin-bottom:%%?0rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/orders/index";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/orders/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/order/index.js
var app = getApp(),
    a = app.requirejs("core");
Page({
  data: {
    currentTab: 0,
    scrollTop: 0,
    scrollLeft: 0,
    page: 1,
    ordersList: [],
    loading: true
  },
  onLoad: function onLoad(options) {
    var current = options.id;
    this.data.currentTab = current ? current : 0;
    this.systemInfo = wx.getSystemInfoSync();
    this.setData({
      currentTab: this.data.currentTab,
      windowHeight: this.systemInfo.windowHeight
    });
  },
  onShow: function onShow(options) {
    if (this.data.currentTab == 0) {
      this.setCurrentData();
    }
  },
  setCurrentData: function setCurrentData() {
    var t = this;
    t.setData({
      loading: true
    }), a.get("Pintuan/ptOrderList", {
      page: t.data.page,
      status: t.data.currentTab,
      uid: getApp().getCache("userinfo").uid
    }, function (e) {
      console.log(e);
      0 == e.code ? (t.setData({
        loading: false,
        show: true
      }), e.info.length > 0 && t.setData({
        page: t.data.page + 1,
        ordersList: t.data.ordersList.concat(e.info)
      }), e.info.length < 10 && t.setData({
        loaded: true
      })) : a.alert(e.msg);
    }, true);
  },
  toGroupDetail: function toGroupDetail(e) {
    var id = e.currentTarget.dataset.id;
    app.redirect('group/detail', 'id=' + id);
  },
  toPay: function toPay(e) {
    wx.showLoading({
      title: '正在提交',
      mask: true
    });
    var self = this;
    var data = e.currentTarget.dataset;
    a.get('Pintuan/ptPay', {
      oid: data.id,
      openid: getApp().getCache("userinfo").openid
    }, function (t) {
      wx.hideLoading();
      if (t.code == 0) {
        wx.requestPayment({
          'timeStamp': t.info.timeStamp,
          'nonceStr': t.info.nonceStr,
          'package': t.info.package,
          'signType': 'MD5',
          'paySign': t.info.paySign,
          'success': function success(res) {
            console.log(res);
            if (data.isGroup == 1) {
              //拼团
              // 重定向到团详情页面
              wx.redirectTo({
                url: '/yb_shop/pages/pintuan/pages/group/detail?id=' + data.id
              });
              // app.redirect('group/detail','id='+oid)
            } else {
              // 重定向到订单页面
              self.setData({
                ordersList: [],
                page: 1,
                loaded: false
              });
              self.setCurrentData();
              // app.redirect('orders/index','id=3')
            }
          },
          'fail': function fail(res) {
            // a.alert('您已取消了支付')
          }
        });
      } else {
        a.alert(t.msg, function () {
          wx.redirectTo({
            url: '/yb_shop/pages/pintuan/pages/orders/index'
          });
        });
      }
    });
  },
  confirmReceipt: function confirmReceipt(e) {
    var self = this;
    var id = e.currentTarget.dataset.id;
    wx.showModal({
      content: '是否确认收货？',
      success: function success(res) {
        if (res.confirm) {
          a.get('Pintuan/SignOrder', {
            id: id,
            uid: getApp().getCache('userinfo').uid
          }, function (t) {
            if (t.code == 0) {
              a.success('收货成功');
              setTimeout(function () {
                self.setData({
                  ordersList: [],
                  page: 1,
                  loaded: false
                });
                self.setCurrentData();
              });
            } else {
              a.alert(t.msg);
            }
          });
        }
      }
    });
  },
  tuikuan: function tuikuan(e) {
    var self = this;
    var id = e.currentTarget.dataset.id;
    wx.showModal({
      content: '是否要申请退款？',
      success: function success(res) {
        if (res.confirm) {
          a.get('Pintuan/refundOrder', {
            id: id,
            uid: getApp().getCache('userinfo').uid
          }, function (t) {
            if (t.code == 0) {
              a.success('申请成功');
              setTimeout(function () {
                self.setData({
                  ordersList: [],
                  page: 1,
                  loaded: false
                });
                self.setCurrentData();
              });
            } else {
              a.alert(t.msg);
            }
          });
        }
      }
    });
  },
  showOrderDetail: function showOrderDetail(e) {
    var id = e.currentTarget.dataset.id;
    app.redirect('orders/detail', 'oid=' + id);
  },
  showGoodsDetial: function showGoodsDetial(e) {
    var id = e.currentTarget.dataset.id;
    app.redirect('goods/detail', 'gid=' + id);
  },
  // 滑动切换tab 
  bindChange: function bindChange(e) {
    this.data.page = 0;
    this.data.ordersList = [];
    this.data.loading = true;
    this.data.currentTab = e.detail.current;
    this.setCurrentData();
    this.setData({
      loading: true,
      ordersList: [],
      currentTab: this.data.currentTab
    });
  },
  // 点击tab切换 
  swichNav: function swichNav(e) {
    if (this.data.currentTab == e.currentTarget.dataset.current) return;
    this.data.currentTab = e.currentTarget.dataset.current;
    var windowWidth = this.systemInfo.windowWidth;
    var offsetLeft = e.currentTarget.offsetLeft;
    var scrollLeft = this.data.scrollLeft;
    if (offsetLeft > windowWidth / 2) {
      scrollLeft = offsetLeft;
    } else {
      scrollLeft = 0;
    }
    this.setData({
      scrollLeft: scrollLeft,
      currentTab: this.data.currentTab
    });
  },
  /**
    * 下拉刷新
    */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      ordersList: [],
      page: 1,
      loaded: false
    });
    this.setCurrentData();
    wx.stopPullDownRefresh();
  },
  scrolltolower: function scrolltolower() {
    console.log('加载更多');
    this.data.loaded || this.setCurrentData();
  }
});
});require("yb_shop/pages/pintuan/pages/orders/index.js")@code-separator-line:["div","template","view","block","image","import","text","scroll-view","swiper","swiper-item"]