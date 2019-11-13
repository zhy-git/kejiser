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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, 'page 1footer-navbar']);Z([[7],[3, "list"]]);Z([3, 'val']);Z([3, 'key']);Z([3, 'del_item']);Z([3, 'touchE']);Z([3, 'touchM']);Z([3, 'touchS']);Z([3, 'inner txt']);Z([[7],[3, "key"]]);Z([[6],[[7],[3, "val"]],[3, "txtStyle"]]);Z([a, [3, 'fui-list-group cartlist '],[[2,'?:'],[[6],[[7],[3, "val"]],[3, "sku"]],[1, ""],[1, "invalid"]]]);Z([3, 'fui-list noclick']);Z([3, 'number']);Z([3, 'fui-number small']);Z([[6],[[7],[3, "val"]],[3, "cart_id"]]);Z([[6],[[6],[[7],[3, "val"]],[3, "sku"]],[3, "stock"]]);Z([[6],[[7],[3, "val"]],[3, "minbuy"]]);Z([[6],[[7],[3, "val"]],[3, "sku_id"]]);Z([[6],[[7],[3, "val"]],[3, "num"]]);Z([a, [3, 'minus '],[[2,'?:'],[[2, "<="], [[6],[[7],[3, "val"]],[3, "num"]], [1, 1]],[1, "disabled"],[1, ""]]]);Z([3, 'minus']);Z([3, 'num shownum']);Z([3, 'false']);Z([3, 'tel']);Z([a, [3, 'plus '],[[2,'?:'],[[2, ">="], [[6],[[7],[3, "val"]],[3, "num"]], [[6],[[6],[[7],[3, "val"]],[3, "sku"]],[3, "stock"]]],[1, "disabled02"],[1, ""]]]);Z([3, 'plus']);Z([3, 'itemClick']);Z([[2,'?:'],[[6],[[7],[3, "checkObj"]],[[6],[[7],[3, "val"]],[3, "cart_id"]]],[1, true],[1, ""]]);Z([3, 'zoom-70']);Z([3, '#ef4f4f']);Z([[6],[[7],[3, "val"]],[3, "goods_id"]]);Z([3, 'fui-list-media02']);Z([3, 'round']);Z([[6],[[6],[[7],[3, "val"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'fui-list-inner']);Z([3, 'subtitle']);Z([a, [[6],[[7],[3, "val"]],[3, "goods_name"]]]);Z([3, 'text cart-option']);Z([3, 'choose-option']);Z([a, [[6],[[6],[[7],[3, "val"]],[3, "sku"]],[3, "sku_name"]]]);Z([3, 'fui-list-angle']);Z([3, 'invalid_info']);Z([3, '该商品已失效！']);Z([[6],[[7],[3, "val"]],[3, "sku"]]);Z([3, 'price']);Z([a, [3, '￥'],[[6],[[6],[[7],[3, "val"]],[3, "sku"]],[3, "price"]]]);Z([3, 'delItem']);Z([3, 'inner del']);Z([[7],[3, "empty"]]);Z([3, 'center']);Z([3, 'cart_empty']);Z([3, '/yb_shop/static/images/cart_big.png']);Z([3, 'text-cancel']);Z([3, '购物车还是空的']);Z([3, 'btn btn-danger']);Z([3, 'redirect']);Z([a, [3, 'width:80%;margin:0.5rem auto;height:90rpx;line-height:90rpx;background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]]]);Z([3, '/yb_shop/pages/index/index']);Z([3, '到处逛逛吧']);Z([3, 'cart_space']);Z([[2, "!"], [[7],[3, "empty"]]]);Z([3, 'fui-footer']);Z([a, [3, 'bottom:'],[[2,'?:'],[[7],[3, "showtabbar"]],[1, 100],[1, 0]],[3, 'rpx ;']]);Z([3, 'tool']);Z([3, 'check']);Z([3, 'checkAllClick']);Z([[2,'?:'],[[7],[3, "ischeckall"]],[1, true],[1, ""]]);Z([3, '全选\r\n        ']);Z([3, 'text']);Z([[2, "!"], [[7],[3, "edit"]]]);Z([3, 'title']);Z([3, '合计：']);Z([3, 'text-danger']);Z([a, [[7],[3, "order_money"]],[3, '元']]);Z([3, 'edit']);Z([3, 'btns']);Z([a, [3, 'btn pay_btn '],[[2,'?:'],[[2, ">"], [[7],[3, "checkNum"]], [1, 0]],[1, ""],[1, "disabled"]]]);Z([3, 'pay']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';width:114px;']]);Z([a, [3, '结算('],[[7],[3, "total"]],[3, ')']]);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oxe = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oye = _v();var oze = function(oCf,oBf,oAf,gg){var o_e = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oCf, oBf, gg);var oEf = _m( "cover-image", ["class", 14,"src", 1], oCf, oBf, gg);_(o_e,oEf);var oFf = _m( "cover-view", ["class", 16,"style", 1], oCf, oBf, gg);var oGf = _o(18, oCf, oBf, gg);_(oFf,oGf);_(o_e,oFf);_(oAf, o_e);return oAf;};_2(2, oze, e, s, gg, oye, "item", "index", '');_(oxe,oye);_(r,oxe);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/member/cart/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oIf = _v();
      if (_o(19, e, s, gg)) {
        oIf.wxVkey = 1;var oJf = _n("view");_r(oJf, 'class', 20, e, s, gg);var oLf = _v();var oMf = function(oQf,oPf,oOf,gg){var oSf = _n("view");_r(oSf, 'class', 24, oQf, oPf, gg);var oTf = _m( "view", ["bindtouchend", 25,"bindtouchmove", 1,"bindtouchstart", 2,"class", 3,"data-index", 4,"style", 5], oQf, oPf, gg);var oUf = _n("view");_r(oUf, 'class', 31, oQf, oPf, gg);var oVf = _n("view");_r(oVf, 'class', 32, oQf, oPf, gg);var oWf = _m( "view", ["bindtap", 33,"class", 1,"data-id", 2,"data-max", 3,"data-min", 4,"data-sku_id", 5,"data-value", 6], oQf, oPf, gg);var oXf = _m( "view", ["class", 40,"data-action", 1], oQf, oPf, gg);_(oWf,oXf);var oYf = _m( "input", ["name", -1,"value", 39,"class", 3,"disabled", 4,"type", 5], oQf, oPf, gg);_(oWf,oYf);var oZf = _m( "view", ["class", 45,"data-action", 1], oQf, oPf, gg);_(oWf,oZf);_(oVf,oWf);var oaf = _m( "radio", ["data-id", 35,"bindtap", 12,"checked", 13,"class", 14,"color", 15,"data-goodsid", 16], oQf, oPf, gg);_(oVf,oaf);var obf = _n("view");_r(obf, 'class', 52, oQf, oPf, gg);var ocf = _m( "image", ["class", 53,"src", 1], oQf, oPf, gg);_(obf,ocf);_(oVf,obf);var odf = _n("view");var oef = _n("view");_r(oef, 'class', 55, oQf, oPf, gg);var off = _n("view");_r(off, 'class', 56, oQf, oPf, gg);var ogf = _o(57, oQf, oPf, gg);_(off,ogf);_(oef,off);var ohf = _n("view");_r(ohf, 'class', 58, oQf, oPf, gg);var oif = _n("view");_r(oif, 'class', 59, oQf, oPf, gg);var ojf = _o(60, oQf, oPf, gg);_(oif,ojf);_(ohf,oif);_(oef,ohf);_(odf,oef);var okf = _n("view");_r(okf, 'class', 61, oQf, oPf, gg);var olf = _n("text");_r(olf, 'class', 62, oQf, oPf, gg);var omf = _o(63, oQf, oPf, gg);_(olf,omf);_(okf,olf);var onf = _v();
      if (_o(64, oQf, oPf, gg)) {
        onf.wxVkey = 1;var oof = _n("text");_r(oof, 'class', 65, oQf, oPf, gg);var oqf = _o(66, oQf, oPf, gg);_(oof,oqf);_(onf, oof);
      } _(okf,onf);_(odf,okf);_(oVf,odf);_(oUf,oVf);_(oTf,oUf);_(oSf,oTf);var orf = _m( "view", ["data-index", 29,"data-id", 6,"bindtap", 38,"class", 39], oQf, oPf, gg);_(oSf,orf);_(oOf,oSf);return oOf;};_2(21, oMf, e, s, gg, oLf, "val", "key", '');_(oJf,oLf);var osf = _v();
      if (_o(69, e, s, gg)) {
        osf.wxVkey = 1;var otf = _n("view");_r(otf, 'class', 70, e, s, gg);var ovf = _n("view");var owf = _m( "image", ["class", 71,"src", 1], e, s, gg);_(ovf,owf);var oxf = _n("view");_r(oxf, 'class', 73, e, s, gg);var oyf = _o(74, e, s, gg);_(oxf,oyf);_(ovf,oxf);var ozf = _m( "navigator", ["class", 75,"openType", 1,"style", 2,"url", 3], e, s, gg);var o_f = _o(79, e, s, gg);_(ozf,o_f);_(ovf,ozf);_(otf,ovf);_(osf, otf);
      } _(oJf,osf);var oAg = _n("view");_r(oAg, 'class', 80, e, s, gg);_(oJf,oAg);var oBg = _v();
      if (_o(81, e, s, gg)) {
        oBg.wxVkey = 1;var oCg = _m( "view", ["class", 82,"style", 1], e, s, gg);var oEg = _n("view");_r(oEg, 'class', 84, e, s, gg);var oFg = _n("view");_r(oFg, 'class', 85, e, s, gg);var oGg = _n("label");_r(oGg, 'bindtap', 86, e, s, gg);var oHg = _m( "radio", ["class", 49,"color", 1,"checked", 38], e, s, gg);_(oGg,oHg);var oIg = _o(88, e, s, gg);_(oGg,oIg);_(oFg,oGg);_(oEg,oFg);var oJg = _n("view");_r(oJg, 'class', 89, e, s, gg);var oKg = _v();
      if (_o(90, e, s, gg)) {
        oKg.wxVkey = 1;var oLg = _n("view");_r(oLg, 'class', 91, e, s, gg);var oNg = _o(92, e, s, gg);_(oLg,oNg);var oOg = _n("text");_r(oOg, 'class', 93, e, s, gg);var oPg = _o(94, e, s, gg);_(oOg,oPg);_(oLg,oOg);_(oKg, oLg);
      } _(oJg,oKg);_(oEg,oJg);var oQg = _m( "view", ["bindtap", 95,"class", 1], e, s, gg);var oRg = _v();
      if (_o(90, e, s, gg)) {
        oRg.wxVkey = 1;var oSg = _m( "text", ["class", 97,"data-action", 1,"style", 2], e, s, gg);var oUg = _o(100, e, s, gg);_(oSg,oUg);_(oRg, oSg);
      } _(oQg,oRg);_(oEg,oQg);_(oCg,oEg);_(oBg, oCg);
      } _(oJf,oBg);var oVg = _v();
      if (_o(101, e, s, gg)) {
        oVg.wxVkey = 1;var oag = e_["./yb_shop/pages/member/cart/index.wxml"].j;var oYg = _n("view");_r(oYg, 'style', 102, e, s, gg);_(oVg,oYg);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/member/cart/index.wxml",e,s,oVg,gg);;oag.pop();
      } _(oJf,oVg);_(oIf, oJf);
      } _(r,oIf);
    return r;
  };
        e_["./yb_shop/pages/member/cart/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f4f4f4}.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;border-radius:%%?16rpx?%%}.fui-number:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5);border-radius:%%?16rpx?%%}.cart_empty{width:%%?200rpx?%%;height:%%?200rpx?%%}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?50rpx?%%;font-weight:700;color:#5e5e5e;position:relative;text-align:center;line-height:%%?55rpx?%%;z-index:99999999}.cart-option .choose-option{font-size:%%?27rpx?%%;color:#999;height:%%?40rpx?%%;line-height:%%?40rpx?%%}.plus{position:relative;width:%%?60rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/plus.png) center center no-repeat;background-size:%%?40rpx?%% %%?40rpx?%%}.minus{position:relative;width:%%?60rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/minus.png) center center no-repeat;background-size:%%?40rpx?%% %%?40rpx?%%}.disabled{position:relative;width:%%?60rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/minus02.png) center center no-repeat;background-size:%%?40rpx?%% %%?40rpx?%%}.plus:before{content:" ";position:absolute;left:0;top:0;width:100%;height:100%;border-left:1px solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.minus:after{content:" ";position:absolute;top:0;width:100%;height:100%;border-right:1px solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0;width:%%?80rpx?%%}.adress{font-size:%%?27rpx?%%;color:#888}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}.fui-cell-group{margin-top:%%?40rpx?%%;border:none}.cartlist{margin-top:%%?0rpx?%%;border-top:%%?16rpx?%% solid #f4f4f4}.price{text-align:left;display:inline-block;width:50%;font-size:%%?30rpx?%%;color:#e72b34}.left{left:%%?-100rpx?%%}wx-checkbox{padding-right:%%?20rpx?%%}.empty{padding:%%?260rpx?%% %%?150rpx?%%}.light{height:%%?260rpx?%%;width:%%?240rpx?%%}.text-cancel{padding:%%?30rpx?%% %%?0rpx?%%;font-size:%%?40rpx?%%;font-weight:400;color:#010101}.fui-list-inner .car_subtitle{position:relative;font-size:%%?26rpx?%%;color:#444}.fui-number{height:%%?60rpx?%%;width:%%?200rpx?%%}.fui-list-angle{margin-right:0;margin-top:%%?0rpx?%%}.fui-list-media02{margin-right:%%?20rpx?%%;margin-left:%%?20rpx?%%}.fui-list-media02 wx-image.round{border-radius:%%?6rpx?%%}.fui-list-media02 wx-image{width:%%?150rpx?%%;height:%%?150rpx?%%}.invalid .fui-list{-moz-opacity:.6;opacity:.6}.invalid .fui-number,.invalid .price{display:none}.invalid_info{display:none}.invalid .invalid_info{display:block;font-size:.8rem;margin-top:.3rem;color:red}.pay_btn{background:#e02f25;color:#fff;border:1px solid #e02f25;padding:0 %%?60rpx?%%;height:%%?100rpx?%%;line-height:%%?100rpx?%%;margin:0;border-radius:0;font-size:%%?32rpx?%%}.tool .check wx-label{font-size:%%?30rpx?%%}.inner.del{width:%%?160rpx?%%;text-align:center;z-index:4;right:0;color:#fff;height:%%?206rpx?%%;top:%%?2rpx?%%;line-height:%%?206rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/cart_del_icon.png) #e64340 no-repeat center center;background-size:%%?50rpx?%% %%?50rpx?%%;border-top:%%?16rpx?%% solid #f4f4f4}.inner{position:absolute;top:0}.inner.txt{width:100%;z-index:5;transition:left .2s ease-in-out;overflow:hidden;text-overflow:ellipsis}.center wx-view wx-image{margin-top:1rem}.del_item{position:relative;height:%%?220rpx?%%;overflow:hidden}.fui-list-group.cartlist.invalid{background:#fff}.tool .text .title{text-align:right}.fui-number{position:absolute;right:.6rem;top:3.5rem}.fui-list-group:not(.fui-list-group-o):before,.fui-list:before{border-top:0!important}.cart_space{height:3rem;line-height:3rem}.disabled02{position:relative;width:%%?60rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/plus02.png) center center no-repeat;background-size:%%?40rpx?%% %%?40rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/member/cart/index";__wxRouteBegin = true;
define("yb_shop/pages/member/cart/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/member/cart/index.js
var t = getApp(),
    a = t.requirejs("check"),
    e = t.requirejs("core");
Page({
  data: {
    route: "member_cart",
    menu: t.tabBar,
    menu_show: false,
    icons: t.requirejs("icons"),
    show: false,
    edit_list: [],
    list: [],
    edit: false, //默认结算页面
    // editcheckall:!1
    merch_list: !1,
    ischeckall: true,
    member_change: true,
    delBtnWidth: 160, //删除按钮宽度单位（rpx）
    config: t.config
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    e.menu_url(k, 2);
  },
  onLoad: function onLoad(options) {
    e.ReName(getApp().config.gou + '物车');
    var that = this;
    if (options != null && options != undefined) {
      that.setData({
        tabbar_index: options.tabbar_index ? options.tabbar_index : -1
      });
    }
    e.setting();
    // 页面初始化 options为页面跳转所带来的参数
    that.initEleWidth();
    // this.get_cart();
    that.setData({
      menu: getApp().tabBar,
      config: getApp().config
    });
    var key = t.isInArray(getApp().tabBar.list, that.data.route);
    if (options.key && options.key == 1 && key) {
      that.setData({
        tabbar_index: key,
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    if (that.data.tabbar_index >= 0) {
      that.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    that.get_cart();
  },
  /**
       * 滑动删除页面效果
    */
  touchS: function touchS(e) {
    if (e.touches.length == 1) {
      this.setData({
        //设置触摸起始点水平方向位置
        startX: e.touches[0].clientX
      });
    }
  },
  touchM: function touchM(e) {
    if (e.touches.length == 1) {
      //手指移动时水平方向位置
      var moveX = e.touches[0].clientX;
      //手指起始点位置与移动期间的差值
      var disX = this.data.startX - moveX;
      var delBtnWidth = this.data.delBtnWidth;
      var txtStyle = "";
      if (disX == 0 || disX < 0) {
        //如果移动距离小于等于0，文本层位置不变
        txtStyle = "left:0px";
      } else if (disX > 0) {
        //移动距离大于0，文本层left值等于手指移动距离
        txtStyle = "left:-" + disX + "px";
        if (disX >= delBtnWidth) {
          //控制手指移动距离最大值为删除按钮的宽度
          txtStyle = "left:-" + delBtnWidth + "px";
        }
      }
      //获取手指触摸的是哪一项
      var index = e.currentTarget.dataset.index;
      var list = this.data.list;
      list[index].txtStyle = txtStyle;
      //更新列表的状态
      this.setData({
        list: list
      });
    }
  },
  touchE: function touchE(e) {
    if (e.changedTouches.length == 1) {
      //手指移动结束后水平位置
      var endX = e.changedTouches[0].clientX;
      //触摸开始与结束，手指移动的距离
      var disX = this.data.startX - endX;
      var delBtnWidth = this.data.delBtnWidth;
      //如果距离小于删除按钮的1/2，不显示删除按钮
      var txtStyle = disX > delBtnWidth / 2 ? "left:-" + delBtnWidth + "px" : "left:0px";
      //获取手指触摸的是哪一项
      var index = e.currentTarget.dataset.index;
      var list = this.data.list;
      list[index].txtStyle = txtStyle;
      //更新列表的状态
      this.setData({
        list: list
      });
    }
  },
  //获取元素自适应后的实际宽度
  getEleWidth: function getEleWidth(w) {
    var real = 0;
    try {
      var res = wx.getSystemInfoSync().windowWidth;
      var scale = 750 / 2 / (w / 2); //以宽度750px设计稿做宽度的自适应
      // console.log(scale);
      real = Math.floor(res / scale);
      return real;
    } catch (e) {
      return false;
      // Do something when catch error
    }
  },
  initEleWidth: function initEleWidth() {
    var delBtnWidth = this.getEleWidth(this.data.delBtnWidth);
    this.setData({
      delBtnWidth: delBtnWidth
    });
  },
  //点击删除按钮事件
  delItem: function delItem(i) {
    var that = this,
        cart_id = e.data(i).id; //获取列表中要删除项的cart_id
    e.confirm("是否确认删除该商品?", function () {
      e.get("Cart/DelCart", {
        cart_id: cart_id
      }, function (t) {
        0 == t.code ? (e.success('删除成功'), setTimeout(function () {
          that.setData({
            edit: false
          }), that.get_cart();
        }, 1e3)) : e.alert(t.msg);
      });
    });
  },
  onShow: function onShow() {
      showMenu("member_cart");
    },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    this.get_cart();
    wx.stopPullDownRefresh();
  },
  /**
     * 商品列表
     * @param uid 用户id
     * @return array
     */
  get_cart: function get_cart() {
    var a,
        s = {},
        i = this;
    e.get("Cart/cart", { uid: getApp().getCache("userinfo").uid }, function (e) {
      e.info.forEach(function (t) {
        t.txtStyle = "";
      });
      if (e.info.length == 0) {
        i.setData({ empty: 1 });
      } else {
          $(".menu-list").hide();
        i.setData({ empty: !1 });
      }
      //每个商品默认选中
      for (var c in e.info) {
        s[e.info[c].cart_id] = true;
      }
      a = {
        show: true, //隐藏loading
        checkObj: s, //每个商品默认选中状态
        ischeckall: true, //全选
        list: e.info || [],
        checkNum: e.info.length
      }, i.setData(a);
      i.caculate();
    }, true);
  },
  /**
   *计算购物车商品总数量，总金额
   * @param this.data.list
   * @return string
   */
  caculate: function caculate() {
    var t = this,
        order_money = 0,
        total = 0,
        s = t.data.checkObj,
        d = t.data.list;
    d.forEach(function (a) {
      if (s[a.cart_id] && a.sku) {
        total += a.num;
        order_money += parseFloat(a.num * a.sku.price);
      }
    });
    t.setData({
      order_money: order_money,
      total: total
    });
  },
  /**
   *购物车单个商品加减数量
   * @param cart_id
   * @param num 数量改变值
   * @return array
   */
  number: function number(t) {
    var a = this,
        s = e.pdata(t),
        num = s.value,
        o = s.id;
    if (!t.target.dataset.action) {
      console.log(11);
      return false;
    }
    if (t.target.dataset.action == "minus") {
      if (num <= 1) {
        return false;
      }
      num = parseInt(num) - 1;
    }
    if (t.target.dataset.action == "plus") {
      if (num >= s.max) {
        e.toast('最大购买量 ' + s.max + '件！');
        return false;
      }
      num = parseInt(num) + 1;
    }
    e.post("Cart/cartNum", {
      cart_id: o,
      num: num //购买数量
    }, function (t) {
      if (t.code == 0) {
        a.get_cart();
      }
    });
  },
  /**
  *购物车商品全选
  * @param ischeckall
  * @return bool
  */
  checkAllClick: function checkAllClick(t) {
    var t = !this.data.ischeckall,
        e = this.data.checkObj,
        a = {
      ischeckall: t,
      checkObj: e
    };
    for (var i in e) {
      a.checkObj[i] = t;
    }a.checkNum = t ? this.data.list.length : 0, this.setData(a);
    this.caculate();
  },
  /**
   *购物车单个商品选择
   * @param goodsid
   * @param checkObj bool值
   * @return bool
   */
  itemClick: function itemClick(t) {
    var a = this,
        i = e.pdata(t).id,
        s = e.pdata(t).goodsid,
        c = a.data.checkObj,
        l = a.data.checkNum;
    c[i] ? (c[i] = false, l--) : (c[i] = true, l++);
    var o = true;
    for (var n in c) {
      if (!c[n]) {
        o = false;
        break;
      }
    } //有一个未选中，则为非全选状态
    console.log(c);
    a.setData({
      checkObj: c,
      ischeckall: o,
      checkNum: l
    });
    a.caculate();
  },
  /**
   *购物车修改，删除,支付
   */
  edit: function edit(t) {
    var i,
        s = e.data(t),
        that = this;
    switch (s.action) {
      //修改
      case "edit":
        this.setData({
          edit: true
        });
        break;
      //完成
      case "complete":
        this.setData({
          edit: false
        });
        break;
      //移动到关注
      case "move":
        a.isObject(i) || e.post("member/cart/tofavorite", {
          ids: i
        }, function (t) {
          that.get_cart();
        });
        break;
      //删除
      case "delete":
        var s = that.data.checkObj,
            l = [];
        for (var c in s) {
          s[c] && l.push(c);
        } //push() 方法可把它的参数顺序添加到 arrayObject 的尾部
        if (l.length < 1) return;
        l = l.toString();
        e.confirm("是否确认删除该商品?", function () {
          e.post("Cart/DelCart", {
            cart_id: l
          }, function (t) {
            0 == t.code ? (e.toast('删除成功'), that.setData({
              edit: false
            }), that.get_cart()) : e.alert(t.msg);
          });
        });
        break;
      //购买
      case "pay":
        var s = that.data.checkObj,
            d = that.data.list,
            l = [],
            k = [];
        d.forEach(function (a) {
          if (s[a.cart_id] && a.sku) {
            l.push(a.cart_id);
          }
        });
        //push() 方法可把它的参数顺序添加到 arrayObject 的尾部
        if (l.length < 1) return;
        l = l.toString();
        wx.navigateTo({
          url: "/yb_shop/pages/order/create/index?cart_id=" + l + "&uid=" + getApp().getCache("userinfo").uid + "&type=cart"
        });
    }
  },
  //分享
  onShareAppMessage: function onShareAppMessage() {
    return e.onShareAppMessage();
  }
});
});require("yb_shop/pages/member/cart/index.js")@code-separator-line:["div","cover-view","cover-image","view","block","input","radio","image","text","navigator","label","include"]