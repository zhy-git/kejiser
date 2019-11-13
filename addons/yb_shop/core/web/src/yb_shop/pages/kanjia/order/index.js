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
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page navbar order']);Z([3, 'fui-tab-scroll']);Z([3, 'true']);Z([3, 'selected']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, ""]],[1, "active"],[1, ""]]]);Z([3, '全部']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "0"]],[1, "active"],[1, ""]]]);Z([3, '0']);Z([3, '待付款']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "1"]],[1, "active"],[1, ""]]]);Z([3, '1']);Z([3, '待发货']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "2"]],[1, "active"],[1, ""]]]);Z([3, '2']);Z([3, '已发货']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "3"]],[1, "active"],[1, ""]]]);Z([3, '3']);Z([3, '已完成']);Z([a, [3, 'item '],[[2,'?:'],[[2, "||"],[[2, "=="], [[7],[3, "status"]], [1, "4"]],[[2, "=="], [[7],[3, "status"]], [1, "5"]]],[1, "active"],[1, ""]]]);Z([3, '4']);Z([3, '退款']);Z([[2, "!="], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]);Z([3, 'contain']);Z([[7],[3, "list"]]);Z([3, 'fui-list-group noclick']);Z([3, 'none']);Z([a, [3, '/yb_shop/pages/kanjia/order/detail/index?order_id\x3d'],[[6],[[7],[3, "item"]],[3, "order_id"]]]);Z([3, 'fui-list-group-title']);Z([3, 'order-num']);Z([3, '订单号：\r\n              ']);Z([a, [[6],[[7],[3, "item"]],[3, "order_no"]]]);Z([3, 'statuscss']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 0]]);Z([3, '待付款 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 1]]);Z([3, ' 待发货 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 2]]);Z([3, ' 已发货 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]]);Z([3, ' 已完成 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 4]]);Z([3, ' 退款中 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 5]]);Z([3, ' 已退款 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [[2, "-"], [1, 1]]]);Z([3, ' 已取消 ']);Z([3, ' 未知状态 ']);Z([3, 'fui-list goods-info']);Z([3, 'fui-list-media']);Z([3, 'round goods_img']);Z([3, 'scaleToFill']);Z([[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'fui-list-inner']);Z([3, 'text text-left shop_name']);Z([a, [[6],[[7],[3, "item"]],[3, "bargain_name"]]]);Z([3, 'num']);Z([3, 'text-right']);Z([3, 'color: #181a19;']);Z([3, '￥\r\n                  ']);Z([a, [[6],[[7],[3, "item"]],[3, "original_price"]]]);Z([3, 'x\r\n                  ']);Z([3, 'fui-list list-padding']);Z([3, 'fui-list-inner text-right totle']);Z([3, 'height:46rpx;line-height:46rpx;']);Z([3, '共']);Z([3, 'text-danger']);Z([a, [[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "length"]]]);Z([3, '件商品 实付']);Z([3, '￥']);Z([a, [[6],[[7],[3, "item"]],[3, "pay_money"]]]);Z([[2, "!="], [[7],[3, "status"]], [1, 4]]);Z([3, 'fui-list-inner text-right']);Z([3, 'btn btn-default btn-default-o']);Z([3, 'cancel']);Z([[6],[[7],[3, "item"]],[3, "order_id"]]);Z([[7],[3, "cancel"]]);Z([[7],[3, "cancelindex"]]);Z([3, '\r\n                  取消订单\r\n                ']);Z([3, 'btn btn-danger']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([a, [3, '/yb_shop/pages/kanjia/order/pay/index?id\x3d'],[[6],[[7],[3, "item"]],[3, "order_id"]]]);Z([3, '\r\n                支付订单\r\n              ']);Z([3, 'finish']);Z([a, [3, 'background:'],[[7],[3, "button_color"]],[3, ';border:1px solid '],[[7],[3, "button_color"]],[3, ';color:#fff']]);Z([3, '\r\n                确认使用\r\n              ']);Z([[2, "||"],[[2, "||"],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 1]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 2]]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]]]);Z([3, 'refund']);Z([3, 'btn btn-default']);Z([3, '\r\n                退款\r\n              ']);Z([[2, "=="], [[7],[3, "total"]], [1, 0]]);Z([3, 'center']);Z([3, 'empty']);Z([3, 'cart_empty']);Z([3, '/yb_shop/static/images/cart_big.png']);Z([3, 'margin-top:38rpx;']);Z([3, 'text-cancel']);Z([3, '暂时没有任何订单']);Z([a, [3, 'width:80%;margin:0.5rem auto;height:90rpx;line-height:90rpx;padding:0;background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([3, '/yb_shop/pages/kanjia/index/index?key\x3d1']);Z([3, '\r\n        到处逛逛吧\r\n      ']);Z([3, 'fui-dot']);Z([3, '/yb_shop/pages/member/index/index?key\x3d1']);Z([3, '/yb_shop/static/images/icon-white/people.png']);
  })(z);d_["./yb_shop/pages/kanjia/order/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oTT = _n("loading");_r(oTT, 'hidden', 0, e, s, gg);var oUT = _o(1, e, s, gg);_(oTT,oUT);_(r,oTT);var oVT = _v();
      if (_o(0, e, s, gg)) {
        oVT.wxVkey = 1;var oWT = _n("view");_r(oWT, 'class', 2, e, s, gg);var oYT = _m( "view", ["class", 3,"scrollX", 1], e, s, gg);var oZT = _m( "view", ["data-type", -1,"bindtap", 5,"class", 1], e, s, gg);var oaT = _o(7, e, s, gg);_(oZT,oaT);_(oYT,oZT);var obT = _m( "view", ["bindtap", 5,"class", 3,"data-type", 4], e, s, gg);var ocT = _o(10, e, s, gg);_(obT,ocT);_(oYT,obT);var odT = _m( "view", ["bindtap", 5,"class", 6,"data-type", 7], e, s, gg);var oeT = _o(13, e, s, gg);_(odT,oeT);_(oYT,odT);var ofT = _m( "view", ["bindtap", 5,"class", 9,"data-type", 10], e, s, gg);var ogT = _o(16, e, s, gg);_(ofT,ogT);_(oYT,ofT);var ohT = _m( "view", ["bindtap", 5,"class", 12,"data-type", 13], e, s, gg);var oiT = _o(19, e, s, gg);_(ohT,oiT);_(oYT,ohT);var ojT = _m( "view", ["bindtap", 5,"class", 15,"data-type", 16], e, s, gg);var okT = _o(22, e, s, gg);_(ojT,okT);_(oYT,ojT);_(oWT,oYT);var olT = _v();
      if (_o(23, e, s, gg)) {
        olT.wxVkey = 1;var omT = _n("view");_r(omT, 'class', 24, e, s, gg);var ooT = _v();var opT = function(otT,osT,orT,gg){var ovT = _n("view");_r(ovT, 'class', 26, otT, osT, gg);var owT = _m( "navigator", ["hoverClass", 27,"url", 1], otT, osT, gg);var oxT = _n("view");_r(oxT, 'class', 29, otT, osT, gg);var oyT = _n("view");_r(oyT, 'class', 30, otT, osT, gg);var ozT = _o(31, otT, osT, gg);_(oyT,ozT);var o_T = _n("text");var oAU = _o(32, otT, osT, gg);_(o_T,oAU);_(oyT,o_T);_(oxT,oyT);var oBU = _n("view");_r(oBU, 'class', 33, otT, osT, gg);var oCU = _v();
      if (_o(34, otT, osT, gg)) {
        oCU.wxVkey = 1;var oDU = _n("view");var oFU = _o(35, otT, osT, gg);_(oDU,oFU);_(oCU, oDU);
      }else if (_o(36, otT, osT, gg)) {
        oCU.wxVkey = 2;var oGU = _n("view");var oIU = _o(37, e, s, gg);_(oGU,oIU);_(oCU, oGU);
      }else if (_o(38, otT, osT, gg)) {
        oCU.wxVkey = 3;var oJU = _n("view");var oLU = _o(39, e, s, gg);_(oJU,oLU);_(oCU, oJU);
      }else if (_o(40, otT, osT, gg)) {
        oCU.wxVkey = 4;var oMU = _n("view");var oOU = _o(41, e, s, gg);_(oMU,oOU);_(oCU, oMU);
      }else if (_o(42, otT, osT, gg)) {
        oCU.wxVkey = 5;var oPU = _n("view");var oRU = _o(43, e, s, gg);_(oPU,oRU);_(oCU, oPU);
      }else if (_o(44, otT, osT, gg)) {
        oCU.wxVkey = 6;var oSU = _n("view");var oUU = _o(45, e, s, gg);_(oSU,oUU);_(oCU, oSU);
      }else if (_o(46, otT, osT, gg)) {
        oCU.wxVkey = 7;var oVU = _n("view");var oXU = _o(47, e, s, gg);_(oVU,oXU);_(oCU, oVU);
      }else {
        oCU.wxVkey = 8;var oYU = _n("view");var oaU = _o(48, e, s, gg);_(oYU,oaU);_(oCU, oYU);
      }_(oBU,oCU);_(oxT,oBU);_(owT,oxT);var obU = _n("view");_r(obU, 'class', 49, otT, osT, gg);var ocU = _n("view");_r(ocU, 'class', 50, otT, osT, gg);var odU = _m( "image", ["class", 51,"mode", 1,"src", 2], otT, osT, gg);_(ocU,odU);_(obU,ocU);var oeU = _n("view");_r(oeU, 'class', 54, otT, osT, gg);var ofU = _n("view");_r(ofU, 'class', 55, otT, osT, gg);var ogU = _o(56, otT, osT, gg);_(ofU,ogU);_(oeU,ofU);_(obU,oeU);var ohU = _n("view");_r(ohU, 'class', 57, otT, osT, gg);var oiU = _m( "view", ["class", 58,"style", 1], otT, osT, gg);var ojU = _o(60, otT, osT, gg);_(oiU,ojU);var okU = _n("text");var olU = _o(61, otT, osT, gg);_(okU,olU);_(oiU,okU);_(ohU,oiU);var omU = _n("view");_r(omU, 'class', 58, otT, osT, gg);var onU = _o(62, otT, osT, gg);_(omU,onU);var ooU = _n("text");var opU = _o(12, otT, osT, gg);_(ooU,opU);_(omU,ooU);_(ohU,omU);_(obU,ohU);_(owT,obU);var oqU = _n("view");_r(oqU, 'class', 63, otT, osT, gg);var orU = _m( "text", ["class", 64,"style", 1], otT, osT, gg);var osU = _n("text");var otU = _o(66, otT, osT, gg);_(osU,otU);_(orU,osU);var ouU = _n("text");_r(ouU, 'class', 67, otT, osT, gg);var ovU = _o(68, otT, osT, gg);_(ouU,ovU);_(orU,ouU);var owU = _n("text");var oxU = _o(69, otT, osT, gg);_(owU,oxU);_(orU,owU);var oyU = _n("text");_r(oyU, 'class', 67, otT, osT, gg);var ozU = _n("text");var o_U = _o(70, otT, osT, gg);_(ozU,o_U);_(oyU,ozU);var oAV = _n("text");var oBV = _o(71, otT, osT, gg);_(oAV,oBV);_(oyU,oAV);_(orU,oyU);_(oqU,orU);_(owT,oqU);_(ovT,owT);var oCV = _v();
      if (_o(72, otT, osT, gg)) {
        oCV.wxVkey = 1;var oDV = _n("view");_r(oDV, 'class', 63, otT, osT, gg);var oFV = _n("view");_r(oFV, 'class', 73, otT, osT, gg);var oHV = _v();
      if (_o(34, otT, osT, gg)) {
        oHV.wxVkey = 1;var oIV = _n("view");_r(oIV, 'class', 74, otT, osT, gg);var oKV = _m( "picker", ["bindchange", 75,"data-orderid", 1,"range", 2,"value", 3], otT, osT, gg);var oLV = _o(79, otT, osT, gg);_(oKV,oLV);_(oIV,oKV);_(oHV, oIV);
      } _(oFV,oHV);var oMV = _v();
      if (_o(34, otT, osT, gg)) {
        oMV.wxVkey = 1;var oNV = _m( "navigator", ["class", 80,"style", 1,"url", 2], otT, osT, gg);var oPV = _o(83, otT, osT, gg);_(oNV,oPV);_(oMV, oNV);
      } _(oFV,oMV);var oQV = _v();
      if (_o(38, otT, osT, gg)) {
        oQV.wxVkey = 1;var oRV = _m( "view", ["class", 74,"data-orderid", 2,"bindtap", 10,"style", 11], otT, osT, gg);var oTV = _o(86, otT, osT, gg);_(oRV,oTV);_(oQV, oRV);
      } _(oFV,oQV);var oUV = _v();
      if (_o(87, otT, osT, gg)) {
        oUV.wxVkey = 1;var oVV = _m( "navigator", ["class", 74,"data-orderid", 2,"bindtap", 14,"class", 15], otT, osT, gg);var oXV = _o(90, otT, osT, gg);_(oVV,oXV);_(oUV, oVV);
      } _(oFV,oUV);_(oDV,oFV);_(oCV, oDV);
      } _(ovT,oCV);_(orT,ovT);return orT;};_2(25, opT, e, s, gg, ooT, "item", "index", '');_(omT,ooT);_(olT, omT);
      } _(oWT,olT);var oYV = _v();
      if (_o(91, e, s, gg)) {
        oYV.wxVkey = 1;var oZV = _n("view");_r(oZV, 'class', 92, e, s, gg);var obV = _n("view");_r(obV, 'class', 93, e, s, gg);var ocV = _m( "image", ["class", 94,"src", 1,"style", 2], e, s, gg);_(obV,ocV);var odV = _n("view");_r(odV, 'class', 97, e, s, gg);var oeV = _o(98, e, s, gg);_(odV,oeV);_(obV,odV);var ofV = _m( "navigator", ["class", 80,"style", 19,"url", 20], e, s, gg);var ogV = _o(101, e, s, gg);_(ofV,ogV);_(obV,ofV);_(oZV,obV);_(oYV, oZV);
      } _(oWT,oYV);var ohV = _m( "navigator", ["hoverClass", 27,"class", 75,"url", 76], e, s, gg);var oiV = _n("image");_r(oiV, 'src', 104, e, s, gg);_(ohV,oiV);_(oWT,ohV);_(oVT, oWT);
      } _(r,oVT);
    return r;
  };
        e_["./yb_shop/pages/kanjia/order/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f2f2f2}.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%;height:%%?46rpx?%%;line-height:%%?46rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}wx-body{background:#f7f7f7}.goods-info{width:auto;background:#f9f9f9}.order .contain{margin-top:%%?10rpx?%%}.order .btn{margin:%%?10rpx?%% 0 %%?10rpx?%% %%?20rpx?%%;padding:%%?10rpx?%% %%?15rpx?%%;height:%%?60rpx?%%;line-height:%%?40rpx?%%}.order .empty{font-size:%%?34rpx?%%}.order .empty .btn{padding:%%?15rpx?%% %%?20rpx?%%;height:%%?75rpx?%%;line-height:%%?40rpx?%%;font-size:%%?34rpx?%%}.order .light{height:%%?260rpx?%%;width:%%?240rpx?%%;margin-bottom:%%?55rpx?%%}.order .order-num{-webkit-flex:1;flex:1}.fui-tab-scroll .item{padding:0;width:16.6%;text-align:center}.order .fui-list-inner .subtitle{line-height:%%?44rpx?%%;font-size:%%?24rpx?%%;color:#999}.cart_empty{width:%%?200rpx?%%;height:%%?200rpx?%%}.fui-list-inner .shop_name{max-height:%%?38rpx?%%;overflow:hidden;line-height:%%?40rpx?%%}.order .text-cancel{padding:%%?30rpx?%% %%?0rpx?%%;font-size:%%?40rpx?%%;font-weight:400;color:#010101}.fui-list-inner{height:%%?100rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/kanjia/order/index";__wxRouteBegin = true;
define("yb_shop/pages/kanjia/order/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    a = t.requirejs("core");
Page({
  data: {
    icons: t.requirejs("icons"),
    status: "",
    list: [],
    page: 1,
    cancel: ["我不想买了", "信息填写错误，重新拍", "其他原因"], //订单取消理由
    cancelindex: 0,
    alert_color: t.config.alert_color,
    button_color: t.config.button_color
  },
  onLoad: function onLoad(e) {
    a.setting();
    "" == t.getCache("userinfo") && wx.redirectTo({
      url: "/pages/error/index"
    }), this.setData({
      options: e,
      status: e.status || "",
      alert_color: getApp().config.alert_color,
      button_color: getApp().config.button_color
    }), this.get_list();
  },
  /**
   *获取订单列表
   * @param status uid page
   * @return array
   */
  get_list: function get_list() {
    var t = this;
    t.setData({
      loading: true
    }), a.get("Bargain/OrderList", {
      page: t.data.page,
      status: t.data.status,
      uid: getApp().getCache("userinfo").uid
    }, function (e) {
      0 == e.code ? (t.setData({
        loading: false,
        show: true,
        total: e.info.length
        //empty: true
      }), e.info.length > 0 && t.setData({
        page: t.data.page + 1,
        list: t.data.list.concat(e.info)
      }), e.info.length < 10 && t.setData({
        loaded: true
      })) : a.alert(e.msg);
    }, this.data.show);
  },
  /**
   *不同订单状态之间切换
   */
  selected: function selected(t) {
    var e = a.data(t).type;
    this.setData({
      list: [],
      page: 1,
      status: e
      //empty: false
    }), this.get_list();
  },
  //下拉刷新
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      list: [],
      page: 1
    }), this.get_list();
    wx.stopPullDownRefresh();
  },
  //上拉加载更多
  onReachBottom: function onReachBottom() {
    this.data.loaded || this.get_list();
  },
  /**
   *取消订单
   * @param order_id buyer_id cancel_text
   * @return string
   */
  cancel: function cancel(t) {
    var that = this,
        cancel_text = this.data.cancel[t.detail.value],
        s = a.data(t).orderid;
    a.get("Bargain/CancelOrder", {
      order_id: s,
      cancel_text: cancel_text,
      buyer_id: getApp().getCache("userinfo").uid
    }, function (e) {
      0 == e.code ? (that.setData({
        page: 1,
        list: []
      }), that.get_list(), a.alert('取消订单成功！')) : a.alert(e.msg);
    });
  },
  /**
   *删除订单
   * @param order_id buyer_id 
   * @return string
   */
  delete: function _delete(t) {
    var that = this,
        i = a.data(t).orderid;
    a.get("Bargain/DelOrder", {
      order_id: i,
      buyer_id: getApp().getCache("userinfo").uid
    }, function (e) {
      0 == e.code ? (that.setData({
        page: 1,
        list: []
      }), that.get_list(), a.alert('删除订单成功！')) : a.alert(e.msg);
    });
  },
  /**
   *退款
   * @param order_id 
   * @return string
   */
  refund: function refund(i) {
    var that = this,
        order_id = a.data(i).orderid;
    a.confirm("申请退款后请联系客服", function () {
      a.get("Bargain/RefundOrder", {
        order_id: order_id,
        buyer_id: getApp().getCache("userinfo").uid
      }, function (t) {
        0 == t.code ? (that.setData({
          page: 1,
          list: []
        }), that.get_list(), a.toast('申请成功')) : a.alert(t.msg);
      });
    });
  },
  /**
   *确认收货
   * @param order_id buyer_id 
   * @return string
   */
  finish: function finish(t) {
    var that = this,
        s = a.data(t).orderid;
    a.get("Bargain/SignOrder", {
      order_id: s,
      buyer_id: getApp().getCache("userinfo").uid
    }, function (e) {
      0 == e.code ? (that.setData({
        page: 1,
        list: []
      }), that.get_list(), a.alert('使用成功！')) : a.alert(e.msg);
    });
  }
});
});require("yb_shop/pages/kanjia/order/index.js")@code-separator-line:["div","loading","view","block","navigator","text","image","picker"]