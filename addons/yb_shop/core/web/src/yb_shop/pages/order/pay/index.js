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
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([[2, "&&"],[[2, "!"], [[7],[3, "success"]]],[[7],[3, "show"]]]);Z([3, 'page']);Z([3, 'fui-cell-group']);Z([3, 'fui-cell']);Z([3, 'fui-cell-text textl']);Z([3, '订单编号']);Z([3, 'fui-cell-remark noremark']);Z([a, [[6],[[7],[3, "list"]],[3, "order_no"]]]);Z([3, '订单金额']);Z([3, 'text-danger']);Z([3, '￥\r\n        ']);Z([a, [[6],[[7],[3, "list"]],[3, "pay_money"]]]);Z([3, 'fui-list-group']);Z([3, 'margin-top:0;']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "pay_money"]], [1, 0]]);Z([3, 'pay']);Z([3, 'fui-list']);Z([3, 'credit']);Z([3, 'fui-list-media credit radius']);Z([3, 'round']);Z([3, '/yb_shop/static/images/icon-white/money.png']);Z([3, 'fui-list-inner']);Z([3, 'row']);Z([3, 'row-text']);Z([3, '确认支付']);Z([3, 'angle']);Z([[2, "!="], [[6],[[7],[3, "list"]],[3, "pay_money"]], [1, 0]]);Z([3, 'wechat']);Z([3, 'fui-list-media wechat']);Z([3, '/yb_shop/static/images/icon-white/wechat.png']);Z([3, '微信支付']);Z([3, 'subtitle']);Z([3, '微信安全支付']);Z([3, 'btn btn-danger block']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';font-size:34rpx;']]);Z([[7],[3, "success"]]);Z([3, 'fui-list success']);Z([3, 'fui-list-media ']);Z([3, '/yb_shop/static/images/icon-white/deliver-48.png']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 0]]);Z([3, '待付款 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 1]]);Z([3, ' 待发货 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 2]]);Z([3, ' 待收货 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 3]]);Z([3, ' 已完成 ']);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "order_status"]], [1, 4]]);Z([3, ' 退换货 ']);Z([3, ' 未知状态 ']);Z([a, [[6],[[7],[3, "list"]],[3, "buyer_message"]]]);Z([3, 'none']);Z([3, 'fui-cell-icon']);Z([3, '/yb_shop/static/images/icon/location01.png']);Z([3, 'fui-cell-text textl info']);Z([3, 'name']);Z([a, [[6],[[7],[3, "list"]],[3, "receiver_name"]]]);Z([a, [[6],[[7],[3, "list"]],[3, "receiver_mobile"]]]);Z([3, 'adress']);Z([a, [[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "province"]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "city"]]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "district"]]], [1, " "]], [[6],[[7],[3, "list"]],[3, "receiver_address"]]]]);Z([[6],[[7],[3, "list"]],[3, "stores"]]);Z([a, [3, 'fui-cell-group '],[[2,'?:'],[[7],[3, "shop"]],[1, "toggleSend-group"],[1, ""]]]);Z([3, 'send-code fui-list']);Z([3, 'fui-list-media']);Z([3, 'fui-list-icon']);Z([3, '/yb_shop/static/images/icon/shop.png']);Z([3, 'fui-list-inner store-inner']);Z([3, 'title']);Z([3, 'storename']);Z([a, [[6],[[7],[3, "item"]],[3, "storename"]]]);Z([3, 'text']);Z([3, 'realname']);Z([a, [[6],[[7],[3, "item"]],[3, "realname"]]]);Z([3, 'mobile']);Z([a, [[6],[[7],[3, "item"]],[3, "mobile"]]]);Z([3, 'address']);Z([a, [[6],[[7],[3, "item"]],[3, "address"]]]);Z([3, 'fui-list-angle ']);Z([3, 'phone']);Z([3, 'image-48']);Z([3, '/yb_shop/static/images/icon/tel.png']);Z([a, [3, '/yb_shop/pages/order/store/map?id\x3d'],[[6],[[7],[3, "item"]],[3, "id"]]]);Z([3, 'fui-cell-text ']);Z([a, [[6],[[7],[3, "list"]],[3, "order_money"]]]);Z([3, '请到订单详情中查看详细信息']);Z([3, 'operate']);Z([3, 'btn btn-default']);Z([3, 'redirect']);Z([a, [3, '/yb_shop/pages/order/detail/index?order_id\x3d'],[[6],[[7],[3, "list"]],[3, "order_id"]]]);Z([3, '\r\n      订单详情\r\n    ']);Z([3, '/yb_shop/pages/index/index']);Z([3, '\r\n      返回首页\r\n    ']);Z([3, 'pay_form_btn']);Z([3, 'submit']);
  })(z);d_["./yb_shop/pages/order/pay/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oSC = _n("loading");_r(oSC, 'hidden', 0, e, s, gg);var oTC = _o(1, e, s, gg);_(oSC,oTC);_(r,oSC);var oUC = _v();
      if (_o(2, e, s, gg)) {
        oUC.wxVkey = 1;var oVC = _n("view");_r(oVC, 'class', 3, e, s, gg);var oXC = _n("view");_r(oXC, 'class', 4, e, s, gg);var oYC = _n("view");_r(oYC, 'class', 5, e, s, gg);var oZC = _n("view");_r(oZC, 'class', 6, e, s, gg);var oaC = _o(7, e, s, gg);_(oZC,oaC);_(oYC,oZC);var obC = _n("view");_r(obC, 'class', 8, e, s, gg);var ocC = _o(9, e, s, gg);_(obC,ocC);_(oYC,obC);_(oXC,oYC);var odC = _n("view");_r(odC, 'class', 5, e, s, gg);var oeC = _n("view");_r(oeC, 'class', 6, e, s, gg);var ofC = _o(10, e, s, gg);_(oeC,ofC);_(odC,oeC);var ogC = _n("view");_r(ogC, 'class', 11, e, s, gg);var ohC = _o(12, e, s, gg);_(ogC,ohC);var oiC = _n("text");var ojC = _o(13, e, s, gg);_(oiC,ojC);_(ogC,oiC);_(odC,ogC);_(oXC,odC);_(oVC,oXC);var okC = _m( "view", ["class", 14,"style", 1], e, s, gg);var olC = _v();
      if (_o(16, e, s, gg)) {
        olC.wxVkey = 1;var omC = _m( "view", ["bindtap", 17,"class", 1,"data-type", 2], e, s, gg);var ooC = _n("view");_r(ooC, 'class', 20, e, s, gg);var opC = _m( "image", ["class", 21,"src", 1], e, s, gg);_(ooC,opC);_(omC,ooC);var oqC = _n("view");_r(oqC, 'class', 23, e, s, gg);var orC = _n("view");_r(orC, 'class', 24, e, s, gg);var osC = _n("view");_r(osC, 'class', 25, e, s, gg);var otC = _o(26, e, s, gg);_(osC,otC);_(orC,osC);_(oqC,orC);_(omC,oqC);var ouC = _n("view");_r(ouC, 'class', 27, e, s, gg);_(omC,ouC);_(olC, omC);
      } _(okC,olC);var ovC = _v();
      if (_o(28, e, s, gg)) {
        ovC.wxVkey = 1;var owC = _m( "view", ["bindtap", 17,"class", 1,"data-type", 12], e, s, gg);var oyC = _n("view");_r(oyC, 'class', 30, e, s, gg);var ozC = _m( "image", ["class", 21,"src", 10], e, s, gg);_(oyC,ozC);_(owC,oyC);var o_C = _n("view");_r(o_C, 'class', 23, e, s, gg);var oAD = _n("view");_r(oAD, 'class', 24, e, s, gg);var oBD = _n("view");_r(oBD, 'class', 25, e, s, gg);var oCD = _o(32, e, s, gg);_(oBD,oCD);_(oAD,oBD);_(o_C,oAD);var oDD = _n("view");_r(oDD, 'class', 33, e, s, gg);var oED = _o(34, e, s, gg);_(oDD,oED);_(o_C,oDD);_(owC,o_C);var oFD = _n("view");_r(oFD, 'class', 27, e, s, gg);_(owC,oFD);_(ovC, owC);
      } _(okC,ovC);_(oVC,okC);var oGD = _m( "view", ["bindtap", 17,"data-type", 12,"class", 18,"style", 19], e, s, gg);var oHD = _o(26, e, s, gg);_(oGD,oHD);_(oVC,oGD);_(oUC, oVC);
      } _(r,oUC);var oID = _v();
      if (_o(37, e, s, gg)) {
        oID.wxVkey = 1;var oJD = _n("view");_r(oJD, 'class', 3, e, s, gg);var oLD = _n("view");_r(oLD, 'class', 38, e, s, gg);var oMD = _n("view");_r(oMD, 'class', 39, e, s, gg);var oND = _m( "image", ["class", 21,"src", 19], e, s, gg);_(oMD,oND);_(oLD,oMD);var oOD = _n("view");_r(oOD, 'class', 23, e, s, gg);var oPD = _n("view");_r(oPD, 'class', 24, e, s, gg);var oQD = _n("view");oQD.attr['class'] = true;_(oPD,oQD);_(oOD,oPD);var okD = _n("view");okD.attr['class'] = true;_(oOD,okD);_(oLD,oOD);_(oJD,oLD);var omD = _n("view");_r(omD, 'class', 4, e, s, gg);var onD = _m( "navigator", ["class", 5,"hoverClass", 48], e, s, gg);var ooD = _m( "image", ["url", -1,"class", 54,"src", 1], e, s, gg);_(onD,ooD);var opD = _n("view");_r(opD, 'class', 56, e, s, gg);var oqD = _n("view");var orD = _n("text");_r(orD, 'class', 57, e, s, gg);var osD = _o(58, e, s, gg);_(orD,osD);_(oqD,orD);var otD = _n("text");var ouD = _o(59, e, s, gg);_(otD,ouD);_(oqD,otD);_(opD,oqD);var ovD = _n("view");_r(ovD, 'class', 60, e, s, gg);var owD = _o(61, e, s, gg);_(ovD,owD);_(opD,ovD);_(onD,opD);_(omD,onD);_(oJD,omD);var oxD = _v();
      if (_o(62, e, s, gg)) {
        oxD.wxVkey = 1;var oyD = _n("view");_r(oyD, 'class', 63, e, s, gg);var o_D = _n("view");_r(o_D, 'class', 64, e, s, gg);var oAE = _v();var oBE = function(oFE,oEE,oDE,gg){var oHE = _n("view");_r(oHE, 'class', 18, oFE, oEE, gg);var oIE = _n("view");_r(oIE, 'class', 65, oFE, oEE, gg);var oJE = _m( "image", ["class", 66,"src", 1], oFE, oEE, gg);_(oIE,oJE);_(oHE,oIE);var oKE = _n("view");_r(oKE, 'class', 68, oFE, oEE, gg);var oLE = _n("view");_r(oLE, 'class', 69, oFE, oEE, gg);var oME = _n("span");_r(oME, 'class', 70, oFE, oEE, gg);var oNE = _o(71, oFE, oEE, gg);_(oME,oNE);_(oLE,oME);_(oKE,oLE);var oOE = _n("view");_r(oOE, 'class', 72, oFE, oEE, gg);var oPE = _n("text");_r(oPE, 'class', 73, oFE, oEE, gg);var oQE = _o(74, oFE, oEE, gg);_(oPE,oQE);_(oOE,oPE);var oRE = _n("text");_r(oRE, 'class', 75, oFE, oEE, gg);var oSE = _o(76, oFE, oEE, gg);_(oRE,oSE);_(oOE,oRE);_(oKE,oOE);var oTE = _n("view");_r(oTE, 'class', 72, oFE, oEE, gg);var oUE = _n("text");_r(oUE, 'class', 77, oFE, oEE, gg);var oVE = _o(78, oFE, oEE, gg);_(oUE,oVE);_(oTE,oUE);_(oKE,oTE);_(oHE,oKE);var oWE = _n("view");_r(oWE, 'class', 79, oFE, oEE, gg);var oXE = _m( "image", ["data-phone", 76,"bindtap", 4,"class", 5,"src", 6], oFE, oEE, gg);_(oWE,oXE);var oYE = _m( "navigator", ["hoverClass", 53,"url", 30], oFE, oEE, gg);var oZE = _m( "image", ["src", 55,"class", 26], oFE, oEE, gg);_(oYE,oZE);_(oWE,oYE);_(oHE,oWE);_(oDE,oHE);return oDE;};_2(62, oBE, e, s, gg, oAE, "item", "index", '');_(o_D,oAE);_(oyD,o_D);_(oxD, oyD);
      } _(oJD,oxD);var oaE = _n("view");_r(oaE, 'class', 4, e, s, gg);var obE = _n("view");_r(obE, 'class', 5, e, s, gg);var ocE = _n("view");_r(ocE, 'class', 84, e, s, gg);var odE = _o(32, e, s, gg);_(ocE,odE);_(obE,ocE);var oeE = _n("view");_r(oeE, 'class', 11, e, s, gg);var ofE = _o(12, e, s, gg);_(oeE,ofE);var ogE = _n("text");var ohE = _o(85, e, s, gg);_(ogE,ohE);_(oeE,ogE);_(obE,oeE);_(oaE,obE);var oiE = _n("view");_r(oiE, 'class', 5, e, s, gg);var ojE = _n("view");_r(ojE, 'class', 8, e, s, gg);var okE = _o(86, e, s, gg);_(ojE,okE);_(oiE,ojE);_(oaE,oiE);_(oJD,oaE);var olE = _n("view");_r(olE, 'class', 87, e, s, gg);var omE = _m( "navigator", ["class", 88,"openType", 1,"url", 2], e, s, gg);var onE = _o(91, e, s, gg);_(omE,onE);_(olE,omE);var ooE = _m( "navigator", ["class", 88,"openType", 1,"url", 4], e, s, gg);var opE = _o(93, e, s, gg);_(ooE,opE);_(olE,ooE);_(oJD,olE);_(oID, oJD);
      } _(r,oID);var oqE = _v();
      if (_o(2, e, s, gg)) {
        oqE.wxVkey = 1;var orE = _m( "form", ["reportSubmit", -1,"bindsubmit", 17], e, s, gg);var otE = _m( "button", ["class", 94,"formType", 1], e, s, gg);_(orE,otE);_(oqE, orE);
      } _(r,oqE);
    return r;
  };
        e_["./yb_shop/pages/order/pay/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f2f2f2}.fui-list-inner .subtitle{color:#8a8a8a}.fui-list{padding:%%?20rpx?%% %%?10rpx?%%}.car,.credit,.wechat{height:%%?90rpx?%%;width:%%?90rpx?%%;display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center;border-radius:%%?10rpx?%%}.credit{background:#e2cb04}.wechat{background:#fff}.car{background:#0291bf}.car wx-image,.credit wx-image,.wechat wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.success{background:#df2f20;margin-top:0;color:#fff}.row{font-size:%%?40rpx?%%}.adress{font-size:%%?27rpx?%%;color:#666}.operate{display:-webkit-flex;display:flex}.operate wx-navigator{-webkit-flex:1;flex:1}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.image-48{margin:%%?8rpx?%% 0}.num{font-size:%%?24rpx?%%;color:#fff;background:#ff9326;border-radius:50%;padding:%%?4rpx?%% %%?10rpx?%%;text-align:center}.fui-list-media wx-image{width:%%?60rpx?%%;height:%%?60rpx?%%}.btn.btn-default{position:relative;background:#fff;border:0;font-size:%%?30rpx?%%}.btn.btn-default:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5)}.pay_form_btn{width:100%;height:%%?100rpx?%%;line-height:%%?100rpx?%%;background:#000;position:fixed;top:%%?330rpx?%%;opacity:0;z-index:999999999999999}@code-separator-line:__wxRoute = "yb_shop/pages/order/pay/index";__wxRouteBegin = true;
define("yb_shop/pages/order/pay/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
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
  onLoad: function onLoad(ev) {
    e.setting();
    this.setData({
      options: ev,
      button_color: getApp().config.button_color,
      font_color: getApp().config.font_color,
      config: getApp().config
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
    e.get("pay/OrderInfo", { order_id: t.data.options.id }, function (i) {
      0 == i.code ? t.setData({
        list: i.info,
        show: true
      }) : (e.alert(i.msg), setTimeout(function () {
        wx.navigateBack();
      }, 1e3));
    });
  },
  /**
   *调用支付
   * @param out_trade_no 订单号
   * @param openid
   * @return array
   */
  pay: function pay(k) {
    var o = this;
    o.setData({
      formid: k.detail.formId
    });
    e.get("Pay/Pay", {
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
          if (res.errMsg == "requestPayment:ok") {
            return wx.setNavigationBarTitle({
              title: "支付成功"
            }), void o.setData({
              success: true,
              "list.order_status": 1
            });
            //推送
            e.get('Wxpush/PayOrderPush', {
              out_trade_no: o.data.list.out_trade_no,
              formid: o.data.formid,
              uid: getApp().getCache("userinfo").uid
            }, function (t) {
              console.log(t);
            });
          } else {
            e.alert('支付失败！');
            wx.redirectTo({
              url: "/yb_shop/pages/order/index"
            });
          }
        },
        'fail': function fail(res) {
          e.alert('您已经取消支付！');
          wx.redirectTo({
            url: "/yb_shop/pages/order/index"
          });
        }
      }) : (e.alert(t.msg), setTimeout(function () {
        wx.navigateBack();
      }, 1e3));
    });
    return;
  },
  phone: function phone(t) {
    e.phone(t);
  }
});
});require("yb_shop/pages/order/pay/index.js")@code-separator-line:["div","loading","view","text","image","navigator","block","span","form","button"]