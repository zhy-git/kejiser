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
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page navbar']);Z([3, 'fui-list bg']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';']]);Z([3, 'fui-list-inner']);Z([3, 'row']);Z([3, 'statuscss']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 0]]);Z([3, '待付款 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 1]]);Z([3, ' 待发货 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 2]]);Z([3, ' 已发货 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 3]]);Z([3, ' 已完成 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 4]]);Z([3, ' 退款中 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [1, 5]]);Z([3, ' 已退款 ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "order_status"]], [[2, "-"], [1, 1]]]);Z([3, ' 已取消 ']);Z([3, ' 未知状态 ']);Z([3, 'order-price']);Z([3, '订单金额(含运费):￥\r\n        ']);Z([a, [[6],[[7],[3, "info"]],[3, "pay_money"]]]);Z([3, 'round image-88']);Z([3, '/yb_shop/static/images/icon-white/money01.png']);Z([3, 'fui-list-group-title02']);Z([3, 'shop']);Z([3, '订单信息']);Z([3, 'fui-cell-group']);Z([3, 'order-info']);Z([3, 'fui-cell-label']);Z([3, '订单编号：\r\n          ']);Z([a, [[6],[[7],[3, "info"]],[3, "order_no"]]]);Z([3, '创建时间：\r\n          ']);Z([a, [[6],[[7],[3, "info"]],[3, "create_time"]]]);Z([[6],[[7],[3, "info"]],[3, "pay_time"]]);Z([3, '支付时间：\r\n          ']);Z([[6],[[7],[3, "info"]],[3, "finish_time"]]);Z([3, '完成时间：\r\n          ']);Z([[2, "=="], [[6],[[7],[3, "info"]],[3, "pay_status"]], [1, 1]]);Z([3, '支付方式：\r\n          ']);Z([3, '微信']);Z([3, 'fui-cell-label02']);Z([3, '收货地址：\r\n        ']);Z([3, 'display:block;']);Z([a, [[6],[[7],[3, "info"]],[3, "receiver_name"]],[3, ' '],[[6],[[7],[3, "info"]],[3, "receiver_mobile"]]]);Z([a, [[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[6],[[7],[3, "info"]],[3, "address"]],[3, "province"]], [[6],[[6],[[7],[3, "info"]],[3, "address"]],[3, "city"]]], [[6],[[6],[[7],[3, "info"]],[3, "address"]],[3, "district"]]], [1, " "]], [[6],[[7],[3, "info"]],[3, "receiver_address"]]]]);Z([3, '订单商品']);Z([3, 'url']);Z([[6],[[7],[3, "info"]],[3, "bargain_id"]]);Z([3, 'none']);Z([3, 'goods_li']);Z([3, 'background:#ffffff;']);Z([3, 'fui-list goods-item']);Z([3, 'fui-list-media']);Z([3, 'round goods_img']);Z([[6],[[6],[[7],[3, "info"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'text']);Z([a, [[6],[[7],[3, "info"]],[3, "bargain_name"]]]);Z([3, 'goods_desc']);Z([3, 'price text-right']);Z([3, 'text-right']);Z([3, 'color:#181a19;']);Z([3, '￥\r\n              ']);Z([a, [[6],[[7],[3, "info"]],[3, "original_price"]]]);Z([3, 'x\r\n              ']);Z([a, [[6],[[7],[3, "info"]],[3, "total"]]]);Z([[2, "&&"],[[2, ">"], [[6],[[7],[3, "order"]],[3, "virtual"]], [1, 0]],[[2, "!="], [[6],[[7],[3, "order"]],[3, "virtual_str"]], [1, ""]]]);Z([a, [3, 'fui-cell-group '],[[2,'?:'],[[7],[3, "toggleCode"]],[1, "toggleSend-group"],[1, ""]]]);Z([3, 'toggle']);Z([3, 'fui-cell']);Z([[7],[3, "toggleCode"]]);Z([3, 'toggleCode']);Z([3, 'fui-cell-text']);Z([3, '发货信息']);Z([3, 'fui-cell-remark']);Z([3, 'send-code send-code1']);Z([a, [3, '\r\n      '],[[6],[[7],[3, "order"]],[3, "virtual_str"]],[3, '\r\n    ']]);Z([[2, "&&"],[[2, ">"], [[6],[[7],[3, "order"]],[3, "isvirtualsend"]], [1, 0]],[[2, "!="], [[6],[[7],[3, "order"]],[3, "virtualsend_info"]], [1, false]]]);Z([a, [3, 'fui-cell-group '],[[2,'?:'],[[7],[3, "toggleCode1"]],[1, "toggleSend-group"],[1, ""]]]);Z([[7],[3, "toggleCode1"]]);Z([3, 'toggleCode1']);Z([3, 'send-code']);Z([a, [3, '\r\n      '],[[6],[[7],[3, "order"]],[3, "virtualsend_info"]],[3, '\r\n    ']]);Z([3, '订单金额']);Z([3, 'fui-cell-group price-cell-group']);Z([3, '商品小计']);Z([3, 'fui-cell-info']);Z([3, 'fui-cell-remark noremark']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "order_money"]]]);Z([3, '运费']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "shipping_money"]]]);Z([3, 'width:auto;']);Z([3, '实付费(含运费)']);Z([3, 'text-danger']);Z([3, 'font-size:32rpx']);Z([a, [3, '¥ '],[[6],[[7],[3, "info"]],[3, "pay_money"]]]);Z([3, '留言']);Z([a, [[2,'?:'],[[2, "!="], [[6],[[7],[3, "info"]],[3, "buyer_message"]], [1, ""]],[[6],[[7],[3, "info"]],[3, "buyer_message"]],[1, "无"]]]);
  })(z);d_["./yb_shop/pages/kanjia/order/detail/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oFc = _n("loading");_r(oFc, 'hidden', 0, e, s, gg);var oGc = _o(1, e, s, gg);_(oFc,oGc);_(r,oFc);var oHc = _v();
      if (_o(0, e, s, gg)) {
        oHc.wxVkey = 1;var oIc = _n("view");_r(oIc, 'class', 2, e, s, gg);var oKc = _m( "view", ["class", 3,"style", 1], e, s, gg);var oLc = _n("view");_r(oLc, 'class', 5, e, s, gg);var oMc = _n("view");_r(oMc, 'class', 6, e, s, gg);var oNc = _n("view");oNc.attr['class'] = true;_(oMc,oNc);_(oLc,oMc);var ooc = _n("view");_r(ooc, 'class', 23, e, s, gg);var opc = _o(24, e, s, gg);_(ooc,opc);var oqc = _n("text");var orc = _o(25, e, s, gg);_(oqc,orc);_(ooc,oqc);_(oLc,ooc);_(oKc,oLc);var osc = _n("view");osc.attr['class'] = true;_(oKc,osc);_(oIc,oKc);var ouc = _n("view");_r(ouc, 'class', 28, e, s, gg);var ovc = _n("text");_r(ovc, 'class', 29, e, s, gg);var owc = _o(30, e, s, gg);_(ovc,owc);_(ouc,ovc);_(oIc,ouc);var oxc = _n("view");_r(oxc, 'class', 31, e, s, gg);var oyc = _n("view");_r(oyc, 'class', 31, e, s, gg);var ozc = _n("view");_r(ozc, 'class', 32, e, s, gg);var o_c = _n("view");_r(o_c, 'class', 33, e, s, gg);var oAd = _o(34, e, s, gg);_(o_c,oAd);var oBd = _n("text");_r(oBd, 'class', 33, e, s, gg);var oCd = _o(35, e, s, gg);_(oBd,oCd);_(o_c,oBd);_(ozc,o_c);var oDd = _n("view");_r(oDd, 'class', 33, e, s, gg);var oEd = _o(36, e, s, gg);_(oDd,oEd);var oFd = _n("text");_r(oFd, 'class', 33, e, s, gg);var oGd = _o(37, e, s, gg);_(oFd,oGd);_(oDd,oFd);_(ozc,oDd);var oHd = _v();
      if (_o(38, e, s, gg)) {
        oHd.wxVkey = 1;var oId = _n("view");_r(oId, 'class', 33, e, s, gg);var oKd = _o(39, e, s, gg);_(oId,oKd);var oLd = _n("text");_r(oLd, 'class', 33, e, s, gg);var oMd = _o(38, e, s, gg);_(oLd,oMd);_(oId,oLd);_(oHd, oId);
      } _(ozc,oHd);var oNd = _v();
      if (_o(40, e, s, gg)) {
        oNd.wxVkey = 1;var oOd = _n("view");_r(oOd, 'class', 33, e, s, gg);var oQd = _o(41, e, s, gg);_(oOd,oQd);var oRd = _n("text");_r(oRd, 'class', 33, e, s, gg);var oSd = _o(40, e, s, gg);_(oRd,oSd);_(oOd,oRd);_(oNd, oOd);
      } _(ozc,oNd);var oTd = _v();
      if (_o(42, e, s, gg)) {
        oTd.wxVkey = 1;var oUd = _n("view");_r(oUd, 'class', 33, e, s, gg);var oWd = _o(43, e, s, gg);_(oUd,oWd);var oXd = _n("text");_r(oXd, 'class', 33, e, s, gg);var oYd = _o(44, e, s, gg);_(oXd,oYd);_(oUd,oXd);_(oTd, oUd);
      } _(ozc,oTd);var oZd = _n("view");_r(oZd, 'class', 45, e, s, gg);var oad = _o(46, e, s, gg);_(oZd,oad);_(ozc,oZd);var obd = _n("view");_r(obd, 'class', 33, e, s, gg);var ocd = _m( "text", ["class", 33,"style", 14], e, s, gg);var odd = _o(48, e, s, gg);_(ocd,odd);_(obd,ocd);var oed = _m( "text", ["class", 33,"style", 14], e, s, gg);var ofd = _o(49, e, s, gg);_(oed,ofd);_(obd,oed);_(ozc,obd);_(oyc,ozc);_(oxc,oyc);_(oIc,oxc);var ogd = _n("view");_r(ogd, 'class', 28, e, s, gg);var ohd = _n("text");_r(ohd, 'class', 29, e, s, gg);var oid = _o(50, e, s, gg);_(ohd,oid);_(ogd,ohd);_(oIc,ogd);var ojd = _n("view");_r(ojd, 'class', 31, e, s, gg);var okd = _m( "navigator", ["bindtap", 51,"data-id", 1,"hoverClass", 2], e, s, gg);var old = _m( "view", ["class", 54,"style", 1], e, s, gg);var omd = _n("view");_r(omd, 'class', 56, e, s, gg);var ond = _n("view");_r(ond, 'class', 57, e, s, gg);var ood = _m( "image", ["class", 58,"src", 1], e, s, gg);_(ond,ood);_(omd,ond);var opd = _n("view");_r(opd, 'class', 5, e, s, gg);var oqd = _n("view");_r(oqd, 'class', 60, e, s, gg);var ord = _o(61, e, s, gg);_(oqd,ord);_(opd,oqd);var osd = _n("view");_r(osd, 'class', 62, e, s, gg);_(opd,osd);_(omd,opd);var otd = _n("view");_r(otd, 'class', 63, e, s, gg);var oud = _m( "view", ["class", 64,"style", 1], e, s, gg);var ovd = _o(66, e, s, gg);_(oud,ovd);var owd = _n("text");var oxd = _o(67, e, s, gg);_(owd,oxd);_(oud,owd);_(otd,oud);var oyd = _n("view");_r(oyd, 'class', 64, e, s, gg);var ozd = _o(68, e, s, gg);_(oyd,ozd);var o_d = _n("text");var oAe = _o(69, e, s, gg);_(o_d,oAe);_(oyd,o_d);_(otd,oyd);_(omd,otd);_(old,omd);_(okd,old);_(ojd,okd);_(oIc,ojd);var oBe = _v();
      if (_o(70, e, s, gg)) {
        oBe.wxVkey = 1;var oCe = _n("view");_r(oCe, 'class', 71, e, s, gg);var oEe = _m( "view", ["bindtap", 72,"class", 1,"data-id", 2,"data-type", 3], e, s, gg);var oFe = _n("view");_r(oFe, 'class', 76, e, s, gg);var oGe = _o(77, e, s, gg);_(oFe,oGe);_(oEe,oFe);var oHe = _n("view");_r(oHe, 'class', 78, e, s, gg);_(oEe,oHe);_(oCe,oEe);var oIe = _n("view");_r(oIe, 'class', 79, e, s, gg);var oJe = _o(80, e, s, gg);_(oIe,oJe);_(oCe,oIe);_(oBe, oCe);
      } _(oIc,oBe);var oKe = _v();
      if (_o(81, e, s, gg)) {
        oKe.wxVkey = 1;var oLe = _n("view");_r(oLe, 'class', 82, e, s, gg);var oNe = _m( "view", ["bindtap", 72,"class", 1,"data-id", 11,"data-type", 12], e, s, gg);var oOe = _n("view");_r(oOe, 'class', 76, e, s, gg);var oPe = _o(77, e, s, gg);_(oOe,oPe);_(oNe,oOe);var oQe = _n("view");_r(oQe, 'class', 78, e, s, gg);_(oNe,oQe);_(oLe,oNe);var oRe = _n("view");_r(oRe, 'class', 85, e, s, gg);var oSe = _o(86, e, s, gg);_(oRe,oSe);_(oLe,oRe);_(oKe, oLe);
      } _(oIc,oKe);var oTe = _n("view");_r(oTe, 'class', 28, e, s, gg);var oUe = _n("text");_r(oUe, 'class', 29, e, s, gg);var oVe = _o(87, e, s, gg);_(oUe,oVe);_(oTe,oUe);_(oIc,oTe);var oWe = _n("view");_r(oWe, 'class', 88, e, s, gg);var oXe = _n("view");_r(oXe, 'class', 73, e, s, gg);var oYe = _n("view");_r(oYe, 'class', 33, e, s, gg);var oZe = _o(89, e, s, gg);_(oYe,oZe);_(oXe,oYe);var oae = _n("view");_r(oae, 'class', 90, e, s, gg);_(oXe,oae);var obe = _n("view");_r(obe, 'class', 91, e, s, gg);var oce = _o(92, e, s, gg);_(obe,oce);_(oXe,obe);_(oWe,oXe);var ode = _n("view");_r(ode, 'class', 73, e, s, gg);var oee = _n("view");_r(oee, 'class', 33, e, s, gg);var ofe = _o(93, e, s, gg);_(oee,ofe);_(ode,oee);var oge = _n("view");_r(oge, 'class', 90, e, s, gg);_(ode,oge);var ohe = _n("view");_r(ohe, 'class', 91, e, s, gg);var oie = _o(94, e, s, gg);_(ohe,oie);_(ode,ohe);_(oWe,ode);var oje = _n("view");_r(oje, 'class', 73, e, s, gg);var oke = _m( "view", ["class", 33,"style", 62], e, s, gg);var ole = _o(96, e, s, gg);_(oke,ole);_(oje,oke);var ome = _n("view");_r(ome, 'class', 90, e, s, gg);_(oje,ome);var one = _n("view");_r(one, 'class', 91, e, s, gg);var ooe = _n("text");_r(ooe, 'class', 97, e, s, gg);var ope = _n("text");_r(ope, 'style', 98, e, s, gg);var oqe = _o(99, e, s, gg);_(ope,oqe);_(ooe,ope);_(one,ooe);_(oje,one);_(oWe,oje);var ore = _n("view");_r(ore, 'class', 73, e, s, gg);var ose = _n("view");_r(ose, 'class', 33, e, s, gg);var ote = _o(100, e, s, gg);_(ose,ote);_(ore,ose);var oue = _n("view");_r(oue, 'class', 90, e, s, gg);_(ore,oue);var ove = _n("view");_r(ove, 'class', 91, e, s, gg);var owe = _o(101, e, s, gg);_(ove,owe);_(ore,ove);_(oWe,ore);_(oIc,oWe);_(oHc, oIc);
      } _(r,oHc);
    return r;
  };
        e_["./yb_shop/pages/kanjia/order/detail/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f5f5f5}.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%;font-size:%%?26rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}.fui-footer{text-align:right}.bg{background:#df2f22;margin-top:0;color:#fff}.row{font-size:%%?30rpx?%%;font-weight:700}.order-price{font-size:%%?27rpx?%%;color:#fff;line-height:%%?44rpx?%%}.adress{font-size:%%?27rpx?%%;color:#666}.order-info{padding:%%?0rpx?%% 0}.order-info wx-view,.send-code{padding:%%?6rpx?%% %%?25rpx?%%;color:#9c9c9c;font-size:%%?28rpx?%%}.send-code.send-code1{padding:%%?6rpx?%% %%?10rpx?%%;color:#666;font-size:%%?28rpx?%%}.price{font-size:%%?30rpx?%%;color:#999;width:%%?260rpx?%%}.fui-list-inner .subtitle{line-height:%%?40rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?30rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.fui-list-media .image-48{height:%%?48rpx?%%;width:%%?48rpx?%%}.text-padding{padding:0 %%?10rpx?%%}.image-48{margin:%%?8rpx?%% 0}.operate{display:-webkit-flex;display:flex;background:#fff;position:relative;margin-top:%%?30rpx?%%}.operate:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%%?2rpx?%% solid #d9d9d9;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.operate:before{content:"";position:absolute;left:0;top:0;width:100%;height:0;border-top:%%?2rpx?%% solid #d9d9d9;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.operate wx-navigator{-webkit-flex:1;flex:1}.fui-cell-group .fui-cell .fui-cell-remark{color:#888;text-align:right;font-size:%%?28rpx?%%;margin-right:%%?8rpx?%%}.order_btn{height:%%?100rpx?%%;line-height:%%?100rpx?%%;width:50%;float:left;text-align:center;display:block;margin-top:%%?0rpx?%%;position:relative}.order_btn:after{content:" ";position:absolute;right:0;top:0;width:100%;height:100%;border-right:1px solid #e6e6e6;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.order_btn:last-child:after{border-right:0 solid #e6e6e6}.order_btn wx-view{height:%%?100rpx?%%;line-height:%%?100rpx?%%;width:%%?140rpx?%%;padding-left:%%?50rpx?%%;color:#000;margin:0 auto;font-size:%%?32rpx?%%}.order_btn .order_btn01{background:url(http://ddfwz.sssvip.net/asmce/yigou/order_btn01.png) center left no-repeat;background-size:%%?50rpx?%% %%?50rpx?%%}.order_btn .order_btn02{background:url(http://ddfwz.sssvip.net/asmce/yigou/order_btn02.png) center left no-repeat;background-size:%%?50rpx?%% %%?50rpx?%%}.guess_like{height:%%?80rpx?%%;line-height:%%?80rpx?%%;width:%%?140rpx?%%;padding-left:%%?50rpx?%%;color:#000;margin:0 auto;font-size:%%?32rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/guess_like.png) center left no-repeat;background-size:%%?40rpx?%% %%?40rpx?%%;font-weight:400;margin-top:%%?18rpx?%%;margin-bottom:%%?10rpx?%%}.service_box{padding:%%?8rpx?%%;position:absolute;top:0;left:0;background:#ccc;overflow:hidden;-moz-opacity:0;opacity:0;width:100%!important}.user_service{float:left}.order_btn{position:relative}.goods_desc{color:#999;font-size:.7rem;margin:0 %%?12rpx?%%;height:%%?30rpx?%%;overflow:hidden}.fui-list-inner .text{max-height:%%?90rpx?%%;overflow:hidden;line-height:%%?45rpx?%%}.order-info .fui-cell-label wx-text{color:#020202}.order-info .fui-cell-label02{line-height:%%?60rpx?%%;position:relative}.order-info .fui-cell-label02:after{content:"";position:absolute;left:%%?12rpx?%%;bottom:0;width:100%;height:0;right:%%?12rpx?%%;border-bottom:0;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.order-info wx-view{position:relative;line-height:%%?82rpx?%%}.fui-cell-group .goods_li{position:relative}.fui-cell-group .goods_li:after,.order-info wx-view:after{content:"";position:absolute;left:%%?22rpx?%%;bottom:0;height:0;right:%%?22rpx?%%;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.order-info wx-view:last-child:after{content:"";position:absolute;left:%%?12rpx?%%;bottom:0;width:100%;height:0;right:%%?12rpx?%%;border-bottom:0;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.fui-cell-label wx-text{line-height:%%?60rpx?%%}.order-info .fui-cell-label:last-child{margin-bottom:%%?10rpx?%%}.order-info .fui-cell-label:last-child{margin-bottom:%%?10rpx?%%}.fui-goods-group.block .fui-goods-item{position:relative;border-bottom:0}.fui-goods-group.block .fui-goods-item:after{content:"";position:absolute;left:%%?12rpx?%%;bottom:0;width:100%;height:%%?12rpx?%%;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}@code-separator-line:__wxRoute = "yb_shop/pages/kanjia/order/detail/index";__wxRouteBegin = true;
define("yb_shop/pages/kanjia/order/detail/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    b = t.requirejs("api/kjb"),
    e = t.requirejs("core");
Page({
  data: {
    code: false,
    consume: false,
    store: false,
    cancelindex: 0,
    diyshow: {},
    list: []
  },
  onLoad: function onLoad(t) {
    e.setting();
    this.setData({
      options: t,
      config: getApp().config
    });
    this.get_list();
  },
  onShow: function onShow() {
    // this.goods_like()
  },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    this.get_list();
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
    e.get("Bargain/GetOrder", {
      buyer_id: getApp().getCache("userinfo").uid,
      order_id: t.data.options.order_id }, function (i) {
      console.log(i);
      0 == i.code ? (i.show = true, t.setData(i)) : (e.alert(i.msg), wx.redirectTo({
        url: "/yb_shop/pages/kanjia/order/index"
      }));
    });
  },
  /**
   *推荐商品
   * @return array
   */
  goods_like: function goods_like() {
    var that = this;
    b.kj_list('', 1, 1, that, function (t) {
      that.setData(t);
    });
  },
  /**
  * 打电话
  */
  phone: function phone(t) {
    e.phone(t);
  },
  /**
  * 跳转至详情
  */
  url: function url(t) {
    var data = e.pdata(t);
    wx.navigateTo({
      url: '/yb_shop/pages/kanjia/goods_info/index?id=' + data.id
    });
  }
});
});require("yb_shop/pages/kanjia/order/detail/index.js")@code-separator-line:["div","loading","view","text","image","navigator"]