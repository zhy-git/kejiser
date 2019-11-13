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
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page navbar']);Z([3, 'fui-list bg']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';']]);Z([3, 'fui-list-inner']);Z([3, 'row']);Z([3, 'statuscss']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 0]]);Z([3, '待付款 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 1]]);Z([3, ' 待发货 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 2]]);Z([3, ' 待收货 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 3]]);Z([3, ' 已完成 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 4]]);Z([3, ' 退款中 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 5]]);Z([3, ' 已退款 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [[2, "-"], [1, 1]]]);Z([3, ' 已取消 ']);Z([3, ' 未知状态 ']);Z([3, 'order-price']);Z([3, '订单金额(含运费):￥\r\n        ']);Z([a, [[6],[[7],[3, "info"]],[3, "pay_money"]]]);Z([3, 'round image-88']);Z([3, '/yb_shop/static/images/icon-white/money01.png']);Z([3, 'fui-list-group-title02']);Z([3, 'shop']);Z([3, '订单信息']);Z([3, 'fui-cell-group']);Z([3, 'order-info']);Z([3, 'fui-cell-label']);Z([3, '订单编号：\r\n          ']);Z([a, [[6],[[7],[3, "info"]],[3, "order_no"]]]);Z([3, '创建时间：\r\n          ']);Z([a, [[6],[[7],[3, "info"]],[3, "create_time"]]]);Z([[6],[[7],[3, "info"]],[3, "pay_time"]]);Z([3, '支付时间：\r\n          ']);Z([[6],[[7],[3, "info"]],[3, "consign_time"]]);Z([3, '发货时间：\r\n          ']);Z([[6],[[7],[3, "info"]],[3, "sign_time"]]);Z([3, '签收时间：\r\n          ']);Z([[6],[[7],[3, "info"]],[3, "finish_time"]]);Z([3, '完成时间：\r\n          ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "pay_status"]], [1, 1]]);Z([3, '支付方式：\r\n          ']);Z([3, '微信']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "mailing_type"]], [1, 1]]);Z([3, 'fui-cell-label02']);Z([3, '收货地址：\r\n          ']);Z([3, 'display:block;']);Z([a, [[6],[[7],[3, "info"]],[3, "receiver_name"]],[3, ' '],[[6],[[7],[3, "info"]],[3, "receiver_mobile"]]]);Z([a, [[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[6],[[7],[3, "info"]],[3, "address"]],[3, "province"]], [[6],[[6],[[7],[3, "info"]],[3, "address"]],[3, "city"]]], [[6],[[6],[[7],[3, "info"]],[3, "address"]],[3, "district"]]], [1, " "]], [[6],[[7],[3, "info"]],[3, "receiver_address"]]]]);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "mailing_type"]], [1, 2]]);Z([3, '上门自取：\r\n          ']);Z([a, [3, '自取时间：'],[[6],[[7],[3, "info"]],[3, "mention_time"]]]);Z([3, '订单商品']);Z([[6],[[7],[3, "info"]],[3, "goods"]]);Z([3, 'goods_li']);Z([3, 'background:#ffffff;']);Z([3, 'fui-list goods-item']);Z([3, 'redirect']);Z([a, [3, '/yb_shop/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "item"]],[3, "goods_id"]]]);Z([3, 'fui-list-media']);Z([3, 'round goods_img']);Z([[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'text']);Z([a, [[6],[[7],[3, "item"]],[3, "goods_name"]]]);Z([3, 'goods_desc']);Z([a, [[6],[[7],[3, "item"]],[3, "sku_name"]]]);Z([3, 'price text-right']);Z([3, 'text-right']);Z([3, 'color:#181a19;']);Z([3, '￥\r\n              ']);Z([a, [[6],[[7],[3, "item"]],[3, "price"]]]);Z([3, 'x\r\n              ']);Z([a, [[6],[[7],[3, "item"]],[3, "num"]]]);Z([[2, "&&"],[[2, ">"], [[6],[[7],[3, "order"]],[3, "virtual"]], [1, 0]],[[2, "!="], [[6],[[7],[3, "order"]],[3, "virtual_str"]], [1, ""]]]);Z([a, [3, 'fui-cell-group '],[[2,'?:'],[[7],[3, "toggleCode"]],[1, "toggleSend-group"],[1, ""]]]);Z([3, 'toggle']);Z([3, 'fui-cell']);Z([[7],[3, "toggleCode"]]);Z([3, 'toggleCode']);Z([3, 'fui-cell-text']);Z([3, '发货信息']);Z([3, 'fui-cell-remark']);Z([3, 'send-code send-code1']);Z([a, [3, '\r\n      '],[[6],[[7],[3, "order"]],[3, "virtual_str"]],[3, '\r\n    ']]);Z([[2, "&&"],[[2, ">"], [[6],[[7],[3, "order"]],[3, "isvirtualsend"]], [1, 0]],[[2, "!="], [[6],[[7],[3, "order"]],[3, "virtualsend_info"]], [1, false]]]);Z([a, [3, 'fui-cell-group '],[[2,'?:'],[[7],[3, "toggleCode1"]],[1, "toggleSend-group"],[1, ""]]]);Z([[7],[3, "toggleCode1"]]);Z([3, 'toggleCode1']);Z([3, 'send-code']);Z([a, [3, '\r\n      '],[[6],[[7],[3, "order"]],[3, "virtualsend_info"]],[3, '\r\n    ']]);Z([3, '订单金额']);Z([3, 'fui-cell-group price-cell-group']);Z([3, '商品小计']);Z([3, 'fui-cell-info']);Z([3, 'fui-cell-remark noremark']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "order_money"]]]);Z([3, '运费']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "shipping_money"]]]);Z([[2, "!="], [[6],[[7],[3, "info"]],[3, "discount_money"]], [1, 0]]);Z([3, '满减']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "discount_money"]]]);Z([[2, "!="], [[6],[[7],[3, "info"]],[3, "coupon_money"]], [1, 0]]);Z([3, '优惠券']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "coupon_money"]]]);Z([[2, "!="], [[6],[[7],[3, "info"]],[3, "rebate_money"]], [1, 0]]);Z([3, '会员折扣']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "rebate_money"]]]);Z([3, 'width:auto;']);Z([a, [3, '实付费'],[[2,'?:'],[[2, "=="], [[6],[[7],[3, "info"]],[3, "mailing_type"]], [1, 1]],[1, "(含运费)"],[1, ""]]]);Z([3, 'text-danger']);Z([3, 'font-size:32rpx']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "pay_money"]]]);Z([3, '留言']);Z([a, [[2,'?:'],[[2, "!="], [[6],[[7],[3, "info"]],[3, "buyer_message"]], [1, ""]],[[6],[[7],[3, "info"]],[3, "buyer_message"]],[1, "无"]]]);
  })(z);d_["./yb_shop/pages/order/detail/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var otK = _n("loading");_r(otK, 'hidden', 0, e, s, gg);var ouK = _o(1, e, s, gg);_(otK,ouK);_(r,otK);var ovK = _v();
      if (_o(0, e, s, gg)) {
        ovK.wxVkey = 1;var owK = _n("view");_r(owK, 'class', 2, e, s, gg);var oyK = _m( "view", ["class", 3,"style", 1], e, s, gg);var ozK = _n("view");_r(ozK, 'class', 5, e, s, gg);var o_K = _n("view");_r(o_K, 'class', 6, e, s, gg);var oAL = _n("view");oAL.attr['class'] = true;_(o_K,oAL);_(ozK,o_K);var obL = _n("view");_r(obL, 'class', 23, e, s, gg);var ocL = _o(24, e, s, gg);_(obL,ocL);var odL = _n("text");var oeL = _o(25, e, s, gg);_(odL,oeL);_(obL,odL);_(ozK,obL);_(oyK,ozK);var ofL = _n("view");ofL.attr['class'] = true;_(oyK,ofL);_(owK,oyK);var ohL = _n("view");_r(ohL, 'class', 28, e, s, gg);var oiL = _n("text");_r(oiL, 'class', 29, e, s, gg);var ojL = _o(30, e, s, gg);_(oiL,ojL);_(ohL,oiL);_(owK,ohL);var okL = _n("view");_r(okL, 'class', 31, e, s, gg);var olL = _n("view");_r(olL, 'class', 31, e, s, gg);var omL = _n("view");_r(omL, 'class', 32, e, s, gg);var onL = _n("view");_r(onL, 'class', 33, e, s, gg);var ooL = _o(34, e, s, gg);_(onL,ooL);var opL = _n("text");_r(opL, 'class', 33, e, s, gg);var oqL = _o(35, e, s, gg);_(opL,oqL);_(onL,opL);_(omL,onL);var orL = _n("view");_r(orL, 'class', 33, e, s, gg);var osL = _o(36, e, s, gg);_(orL,osL);var otL = _n("text");_r(otL, 'class', 33, e, s, gg);var ouL = _o(37, e, s, gg);_(otL,ouL);_(orL,otL);_(omL,orL);var ovL = _v();
      if (_o(38, e, s, gg)) {
        ovL.wxVkey = 1;var owL = _n("view");_r(owL, 'class', 33, e, s, gg);var oyL = _o(39, e, s, gg);_(owL,oyL);var ozL = _n("text");_r(ozL, 'class', 33, e, s, gg);var o_L = _o(38, e, s, gg);_(ozL,o_L);_(owL,ozL);_(ovL, owL);
      } _(omL,ovL);var oAM = _v();
      if (_o(40, e, s, gg)) {
        oAM.wxVkey = 1;var oBM = _n("view");_r(oBM, 'class', 33, e, s, gg);var oDM = _o(41, e, s, gg);_(oBM,oDM);var oEM = _n("text");_r(oEM, 'class', 33, e, s, gg);var oFM = _o(40, e, s, gg);_(oEM,oFM);_(oBM,oEM);_(oAM, oBM);
      } _(omL,oAM);var oGM = _v();
      if (_o(42, e, s, gg)) {
        oGM.wxVkey = 1;var oHM = _n("view");_r(oHM, 'class', 33, e, s, gg);var oJM = _o(43, e, s, gg);_(oHM,oJM);var oKM = _n("text");_r(oKM, 'class', 33, e, s, gg);var oLM = _o(42, e, s, gg);_(oKM,oLM);_(oHM,oKM);_(oGM, oHM);
      } _(omL,oGM);var oMM = _v();
      if (_o(44, e, s, gg)) {
        oMM.wxVkey = 1;var oNM = _n("view");_r(oNM, 'class', 33, e, s, gg);var oPM = _o(45, e, s, gg);_(oNM,oPM);var oQM = _n("text");_r(oQM, 'class', 33, e, s, gg);var oRM = _o(44, e, s, gg);_(oQM,oRM);_(oNM,oQM);_(oMM, oNM);
      } _(omL,oMM);var oSM = _v();
      if (_o(46, e, s, gg)) {
        oSM.wxVkey = 1;var oTM = _n("view");_r(oTM, 'class', 33, e, s, gg);var oVM = _o(47, e, s, gg);_(oTM,oVM);var oWM = _n("text");_r(oWM, 'class', 33, e, s, gg);var oXM = _o(48, e, s, gg);_(oWM,oXM);_(oTM,oWM);_(oSM, oTM);
      } _(omL,oSM);var oYM = _v();
      if (_o(49, e, s, gg)) {
        oYM.wxVkey = 1;var obM = _n("view");_r(obM, 'class', 50, e, s, gg);var ocM = _o(51, e, s, gg);_(obM,ocM);_(oYM,obM);var odM = _n("view");_r(odM, 'class', 33, e, s, gg);var oeM = _m( "text", ["class", 33,"style", 19], e, s, gg);var ofM = _o(53, e, s, gg);_(oeM,ofM);_(odM,oeM);var ogM = _m( "text", ["class", 33,"style", 19], e, s, gg);var ohM = _o(54, e, s, gg);_(ogM,ohM);_(odM,ogM);_(oYM,odM);
      } _(omL,oYM);var oiM = _v();
      if (_o(55, e, s, gg)) {
        oiM.wxVkey = 1;var olM = _n("view");_r(olM, 'class', 50, e, s, gg);var omM = _o(56, e, s, gg);_(olM,omM);_(oiM,olM);var onM = _n("view");_r(onM, 'class', 33, e, s, gg);var ooM = _m( "text", ["class", 33,"style", 19], e, s, gg);var opM = _o(53, e, s, gg);_(ooM,opM);_(onM,ooM);var oqM = _m( "text", ["class", 33,"style", 19], e, s, gg);var orM = _o(57, e, s, gg);_(oqM,orM);_(onM,oqM);_(oiM,onM);
      } _(omL,oiM);_(olL,omL);_(okL,olL);_(owK,okL);var osM = _n("view");_r(osM, 'class', 28, e, s, gg);var otM = _n("text");_r(otM, 'class', 29, e, s, gg);var ouM = _o(58, e, s, gg);_(otM,ouM);_(osM,otM);_(owK,osM);var ovM = _n("view");_r(ovM, 'class', 31, e, s, gg);var owM = _v();var oxM = function(oAN,o_M,ozM,gg){var oCN = _m( "view", ["class", 60,"style", 1], oAN, o_M, gg);var oDN = _m( "navigator", ["class", 62,"openType", 1,"url", 2], oAN, o_M, gg);var oEN = _n("view");_r(oEN, 'class', 65, oAN, o_M, gg);var oFN = _m( "image", ["class", 66,"src", 1], oAN, o_M, gg);_(oEN,oFN);_(oDN,oEN);var oGN = _n("view");_r(oGN, 'class', 5, oAN, o_M, gg);var oHN = _n("view");_r(oHN, 'class', 68, oAN, o_M, gg);var oIN = _o(69, oAN, o_M, gg);_(oHN,oIN);_(oGN,oHN);var oJN = _n("view");_r(oJN, 'class', 70, oAN, o_M, gg);var oKN = _o(71, oAN, o_M, gg);_(oJN,oKN);_(oGN,oJN);_(oDN,oGN);var oLN = _n("view");_r(oLN, 'class', 72, oAN, o_M, gg);var oMN = _m( "view", ["class", 73,"style", 1], oAN, o_M, gg);var oNN = _o(75, oAN, o_M, gg);_(oMN,oNN);var oON = _n("text");var oPN = _o(76, oAN, o_M, gg);_(oON,oPN);_(oMN,oON);_(oLN,oMN);var oQN = _n("view");_r(oQN, 'class', 73, oAN, o_M, gg);var oRN = _o(77, oAN, o_M, gg);_(oQN,oRN);var oSN = _n("text");var oTN = _o(78, oAN, o_M, gg);_(oSN,oTN);_(oQN,oSN);_(oLN,oQN);_(oDN,oLN);_(oCN,oDN);_(ozM,oCN);return ozM;};_2(59, oxM, e, s, gg, owM, "item", "index", '');_(ovM,owM);_(owK,ovM);var oUN = _v();
      if (_o(79, e, s, gg)) {
        oUN.wxVkey = 1;var oVN = _n("view");_r(oVN, 'class', 80, e, s, gg);var oXN = _m( "view", ["bindtap", 81,"class", 1,"data-id", 2,"data-type", 3], e, s, gg);var oYN = _n("view");_r(oYN, 'class', 85, e, s, gg);var oZN = _o(86, e, s, gg);_(oYN,oZN);_(oXN,oYN);var oaN = _n("view");_r(oaN, 'class', 87, e, s, gg);_(oXN,oaN);_(oVN,oXN);var obN = _n("view");_r(obN, 'class', 88, e, s, gg);var ocN = _o(89, e, s, gg);_(obN,ocN);_(oVN,obN);_(oUN, oVN);
      } _(owK,oUN);var odN = _v();
      if (_o(90, e, s, gg)) {
        odN.wxVkey = 1;var oeN = _n("view");_r(oeN, 'class', 91, e, s, gg);var ogN = _m( "view", ["bindtap", 81,"class", 1,"data-id", 11,"data-type", 12], e, s, gg);var ohN = _n("view");_r(ohN, 'class', 85, e, s, gg);var oiN = _o(86, e, s, gg);_(ohN,oiN);_(ogN,ohN);var ojN = _n("view");_r(ojN, 'class', 87, e, s, gg);_(ogN,ojN);_(oeN,ogN);var okN = _n("view");_r(okN, 'class', 94, e, s, gg);var olN = _o(95, e, s, gg);_(okN,olN);_(oeN,okN);_(odN, oeN);
      } _(owK,odN);var omN = _n("view");_r(omN, 'class', 28, e, s, gg);var onN = _n("text");_r(onN, 'class', 29, e, s, gg);var ooN = _o(96, e, s, gg);_(onN,ooN);_(omN,onN);_(owK,omN);var opN = _n("view");_r(opN, 'class', 97, e, s, gg);var oqN = _n("view");_r(oqN, 'class', 82, e, s, gg);var orN = _n("view");_r(orN, 'class', 33, e, s, gg);var osN = _o(98, e, s, gg);_(orN,osN);_(oqN,orN);var otN = _n("view");_r(otN, 'class', 99, e, s, gg);_(oqN,otN);var ouN = _n("view");_r(ouN, 'class', 100, e, s, gg);var ovN = _o(101, e, s, gg);_(ouN,ovN);_(oqN,ouN);_(opN,oqN);var owN = _v();
      if (_o(49, e, s, gg)) {
        owN.wxVkey = 1;var oxN = _n("view");_r(oxN, 'class', 82, e, s, gg);var ozN = _n("view");_r(ozN, 'class', 33, e, s, gg);var o_N = _o(102, e, s, gg);_(ozN,o_N);_(oxN,ozN);var oAO = _n("view");_r(oAO, 'class', 99, e, s, gg);_(oxN,oAO);var oBO = _n("view");_r(oBO, 'class', 100, e, s, gg);var oCO = _o(103, e, s, gg);_(oBO,oCO);_(oxN,oBO);_(owN, oxN);
      } _(opN,owN);var oDO = _v();
      if (_o(104, e, s, gg)) {
        oDO.wxVkey = 1;var oEO = _n("view");_r(oEO, 'class', 82, e, s, gg);var oGO = _n("view");_r(oGO, 'class', 33, e, s, gg);var oHO = _o(105, e, s, gg);_(oGO,oHO);_(oEO,oGO);var oIO = _n("view");_r(oIO, 'class', 99, e, s, gg);_(oEO,oIO);var oJO = _n("view");_r(oJO, 'class', 100, e, s, gg);var oKO = _o(106, e, s, gg);_(oJO,oKO);_(oEO,oJO);_(oDO, oEO);
      } _(opN,oDO);var oLO = _v();
      if (_o(107, e, s, gg)) {
        oLO.wxVkey = 1;var oMO = _n("view");_r(oMO, 'class', 82, e, s, gg);var oOO = _n("view");_r(oOO, 'class', 33, e, s, gg);var oPO = _o(108, e, s, gg);_(oOO,oPO);_(oMO,oOO);var oQO = _n("view");_r(oQO, 'class', 99, e, s, gg);_(oMO,oQO);var oRO = _n("view");_r(oRO, 'class', 100, e, s, gg);var oSO = _o(109, e, s, gg);_(oRO,oSO);_(oMO,oRO);_(oLO, oMO);
      } _(opN,oLO);var oTO = _v();
      if (_o(110, e, s, gg)) {
        oTO.wxVkey = 1;var oUO = _n("view");_r(oUO, 'class', 82, e, s, gg);var oWO = _n("view");_r(oWO, 'class', 33, e, s, gg);var oXO = _o(111, e, s, gg);_(oWO,oXO);_(oUO,oWO);var oYO = _n("view");_r(oYO, 'class', 99, e, s, gg);_(oUO,oYO);var oZO = _n("view");_r(oZO, 'class', 100, e, s, gg);var oaO = _o(112, e, s, gg);_(oZO,oaO);_(oUO,oZO);_(oTO, oUO);
      } _(opN,oTO);var obO = _n("view");_r(obO, 'class', 82, e, s, gg);var ocO = _m( "view", ["class", 33,"style", 80], e, s, gg);var odO = _o(114, e, s, gg);_(ocO,odO);_(obO,ocO);var oeO = _n("view");_r(oeO, 'class', 99, e, s, gg);_(obO,oeO);var ofO = _n("view");_r(ofO, 'class', 100, e, s, gg);var ogO = _n("text");_r(ogO, 'class', 115, e, s, gg);var ohO = _n("text");_r(ohO, 'style', 116, e, s, gg);var oiO = _o(117, e, s, gg);_(ohO,oiO);_(ogO,ohO);_(ofO,ogO);_(obO,ofO);_(opN,obO);var ojO = _n("view");_r(ojO, 'class', 82, e, s, gg);var okO = _n("view");_r(okO, 'class', 33, e, s, gg);var olO = _o(118, e, s, gg);_(okO,olO);_(ojO,okO);var omO = _n("view");_r(omO, 'class', 99, e, s, gg);_(ojO,omO);var onO = _n("view");_r(onO, 'class', 100, e, s, gg);var ooO = _o(119, e, s, gg);_(onO,ooO);_(ojO,onO);_(opN,ojO);_(owK,opN);_(ovK, owK);
      } _(r,ovK);
    return r;
  };
        e_["./yb_shop/pages/order/detail/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f5f5f5}.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.goods_like_pic{width:5.4rem;height:5.4rem}.fui-goods-item{padding-top:.7rem;padding-left:.5rem}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%;font-size:%%?26rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}.fui-footer{text-align:right}.bg{background:#df2f22;margin-top:0;color:#fff}.row{font-size:%%?30rpx?%%;font-weight:700}.order-price{font-size:%%?27rpx?%%;color:#fff;line-height:%%?44rpx?%%}.adress{font-size:%%?27rpx?%%;color:#666}.order-info{padding:%%?0rpx?%% 0}.order-info wx-view,.send-code{padding:%%?6rpx?%% %%?25rpx?%%;color:#9c9c9c;font-size:%%?28rpx?%%}.send-code.send-code1{padding:%%?6rpx?%% %%?10rpx?%%;color:#666;font-size:%%?28rpx?%%}.price{font-size:%%?30rpx?%%;color:#999;width:%%?260rpx?%%}.fui-list-inner .subtitle{line-height:%%?40rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?30rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.fui-list-media .image-48{height:%%?48rpx?%%;width:%%?48rpx?%%}.text-padding{padding:0 %%?10rpx?%%}.image-48{margin:%%?8rpx?%% 0}.operate{display:-webkit-flex;display:flex;background:#fff;position:relative;margin-top:%%?30rpx?%%}.operate:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%%?2rpx?%% solid #d9d9d9;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.operate:before{content:"";position:absolute;left:0;top:0;width:100%;height:0;border-top:%%?2rpx?%% solid #d9d9d9;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.operate wx-navigator{-webkit-flex:1;flex:1}.fui-cell-group .fui-cell .fui-cell-remark{color:#888;text-align:right;font-size:%%?28rpx?%%;margin-right:%%?8rpx?%%}.order_btn{height:%%?100rpx?%%;line-height:%%?100rpx?%%;width:50%;float:left;text-align:center;display:block;margin-top:%%?0rpx?%%;position:relative}.order_btn:after{content:" ";position:absolute;right:0;top:0;width:100%;height:100%;border-right:1px solid #e6e6e6;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.order_btn:last-child:after{border-right:0 solid #e6e6e6}.order_btn wx-view{height:%%?100rpx?%%;line-height:%%?100rpx?%%;width:%%?140rpx?%%;padding-left:%%?50rpx?%%;color:#000;margin:0 auto;font-size:%%?32rpx?%%}.order_btn .order_btn01{background:url(http://ddfwz.sssvip.net/asmce/yigou/order_btn01.png) center left no-repeat;background-size:%%?50rpx?%% %%?50rpx?%%}.order_btn .order_btn02{background:url(http://ddfwz.sssvip.net/asmce/yigou/order_btn02.png) center left no-repeat;background-size:%%?50rpx?%% %%?50rpx?%%}.guess_like{height:%%?80rpx?%%;line-height:%%?80rpx?%%;width:%%?140rpx?%%;padding-left:%%?50rpx?%%;color:#000;margin:0 auto;font-size:%%?32rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/guess_like.png) center left no-repeat;background-size:%%?40rpx?%% %%?40rpx?%%;font-weight:400;margin-top:%%?18rpx?%%;margin-bottom:%%?10rpx?%%}.service_box{padding:%%?8rpx?%%;position:absolute;top:0;left:0;background:#ccc;overflow:hidden;-moz-opacity:0;opacity:0;width:100%!important}.user_service{float:left}.order_btn{position:relative}.goods_desc{color:#999;font-size:.7rem;margin:0 %%?12rpx?%%;height:%%?30rpx?%%;overflow:hidden}.fui-list-inner .text{max-height:%%?90rpx?%%;overflow:hidden;line-height:%%?45rpx?%%}.order-info .fui-cell-label wx-text{color:#020202}.order-info .fui-cell-label02{line-height:%%?60rpx?%%;position:relative}.order-info .fui-cell-label02:after{content:"";position:absolute;left:%%?12rpx?%%;bottom:0;width:100%;height:0;right:%%?12rpx?%%;border-bottom:0;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.order-info wx-view{position:relative;line-height:%%?82rpx?%%}.fui-cell-group .goods_li{position:relative}.fui-cell-group .goods_li:after,.order-info wx-view:after{content:"";position:absolute;left:%%?22rpx?%%;bottom:0;height:0;right:%%?22rpx?%%;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.order-info wx-view:last-child:after{content:"";position:absolute;left:%%?12rpx?%%;bottom:0;width:100%;height:0;right:%%?12rpx?%%;border-bottom:0;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.fui-cell-label wx-text{line-height:%%?60rpx?%%}.order-info .fui-cell-label:last-child{margin-bottom:%%?10rpx?%%}.order-info .fui-cell-label:last-child{margin-bottom:%%?10rpx?%%}.fui-goods-group.block .fui-goods-item{position:relative;border-bottom:0}.fui-goods-group.block .fui-goods-item:after{content:"";position:absolute;left:%%?12rpx?%%;bottom:0;width:100%;height:%%?12rpx?%%;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}@code-separator-line:__wxRoute = "yb_shop/pages/order/detail/index";__wxRouteBegin = true;
define("yb_shop/pages/order/detail/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    e = t.requirejs("core");
Page({
  data: {
    code: false,
    consume: false,
    store: false,
    cancelindex: 0,
    diyshow: {}
  },
  onLoad: function onLoad(aa) {
    e.setting();
    this.setData({
      options: aa,
      config: getApp().config
    });
  },
  onShow: function onShow() {
    this.get_list();
    //this.goods_like()
  },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    this.onShow();
    wx.stopPullDownRefresh();
  },
  /**
   *获取订单信息
   * @param order_id 订单id
   * @param buyer_id 用户id
   * @return array
   */
  get_list: function get_list() {
    var t = this;
    e.get("Order/GetOrder", {
      buyer_id: getApp().getCache("userinfo").uid,
      order_id: t.data.options.order_id
      //   buyer_id: getApp().getCache("userinfo").uid,
      // order_id: t.data.options.order_id
    }, function (i) {
      console.log(i);
      0 == i.code ? (i.show = true, t.setData(i)) : (e.alert(i.msg), wx.redirectTo({
        url: "/yb_shop/pages/order/index"
      }));
    });
  },
  /**
   *推荐商品
   * @return array
   */
  goods_like: function goods_like() {
    var t = this;
    e.get("index/index", {}, function (res) {
      t.setData({
        goods_like: res.info.goods_list
      });
    });
  },
  /**
  * 打电话
  */
  phone: function phone(t) {
    e.phone(t);
  },
  /**
  * 分享
  */
  onShareAppMessage: function onShareAppMessage() {
    return e.onShareAppMessage();
  }
});
});require("yb_shop/pages/order/detail/index.js")@code-separator-line:["div","loading","view","text","image","block","navigator"]