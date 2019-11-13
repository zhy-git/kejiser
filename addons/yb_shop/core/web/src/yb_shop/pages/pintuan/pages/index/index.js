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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([3, 'loading text-center']);Z([[7],[3, "loading"]]);Z([3, '../../resource/loading.svg']);Z([3, 'width: 168rpx;height: 88rpx']);Z([3, '正在加载']);Z([3, 'no-data']);Z([3, ' 没有更多数据了 ']);Z([[6],[[7],[3, "toast"]],[3, "toastStatus"]]);Z([3, 'toast']);Z([[6],[[7],[3, "toast"]],[3, "toastAnimationData"]]);Z([3, 'toast-mask']);Z([3, 'toast-titile']);Z([a, [[6],[[7],[3, "toast"]],[3, "toastTitle"]]]);Z([3, 'scrolltolower']);Z([3, 'scroll-view-y']);Z([3, '50']);Z([[7],[3, "scrollTop"]]);Z([3, 'true']);Z([a, [3, 'height: '],[[2, "-"], [[7],[3, "windowHeight"]], [1, 42]],[3, 'px;']]);Z([3, '#f00']);Z([3, '#fff']);Z([[7],[3, "advert"]]);Z([3, 'unique']);Z([3, 'aspectFill']);Z([[6],[[7],[3, "item"]],[3, "img"]]);Z([[2, "&&"],[[7],[3, "category"]],[[2, ">"], [[6],[[7],[3, "category"]],[3, "length"]], [1, 0]]]);Z([3, 'row topic-group']);Z([[7],[3, "category"]]);Z([3, 'topic-item']);Z([3, 'outline: none;']);Z([a, [3, '/yb_shop/pages/pintuan/pages/index/list?cid\x3d'],[[6],[[7],[3, "item"]],[3, "id"]]]);Z([3, 'goods-group']);Z([3, 'margin-top: 15rpx;']);Z([[7],[3, "goodsList"]]);Z([3, 'showGoodsDetial']);Z([3, 'goods-item pull-left']);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([[6],[[7],[3, "item"]],[3, "indexImg"]]);Z([3, 'goods-title']);Z([3, 'pull-left kaituan']);Z([3, 'pull-left']);Z([3, 'margin-top: 20rpx;']);Z([3, 'goods-price']);Z([a, [3, '¥'],[[6],[[7],[3, "item"]],[3, "gprice"]]]);Z([3, 'goods-mprice']);Z([a, [3, '¥'],[[6],[[7],[3, "item"]],[3, "price"]]]);Z([3, 'user_no']);Z([a, [[6],[[7],[3, "item"]],[3, "groupNum"]],[3, '人团']]);Z([3, 'pull-right']);Z([3, 'margin-right: 35rpx;']);Z([[2, ">"], [[6],[[6],[[7],[3, "item"]],[3, "groupList"]],[3, "length"]], [1, 0]]);Z([3, 'group-userImg']);Z([[6],[[7],[3, "item"]],[3, "groupList"]]);Z([3, 'val']);Z([3, 'idx']);Z([[2,'?:'],[[2, "=="], [[7],[3, "idx"]], [1, 1]],[1, "two"],[1, ""]]);Z([[6],[[7],[3, "val"]],[3, "user_headimg"]]);Z([3, 'btn text-center']);Z([3, 'border:0;font-size:30rpx;']);Z([3, '去开团\r\n                ']);Z([3, '../../resource/left.png']);Z([3, 'clearfix']);Z([[8], "toast", [[7],[3, "toast"]]]);Z([3, 'loading']);Z([[8], "loading", [[7],[3, "loading"]]]);Z([3, 'loading-more']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oRo = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oSo = _v();var oTo = function(oXo,oWo,oVo,gg){var oUo = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oXo, oWo, gg);var oZo = _m( "cover-image", ["class", 14,"src", 1], oXo, oWo, gg);_(oUo,oZo);var oao = _m( "cover-view", ["class", 16,"style", 1], oXo, oWo, gg);var obo = _o(18, oXo, oWo, gg);_(oao,obo);_(oUo,oao);_(oVo, oUo);return oVo;};_2(2, oTo, e, s, gg, oSo, "item", "index", '');_(oRo,oSo);_(r,oRo);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/template/loading.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/loading.wxml"]["loading"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/loading.wxml:loading'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/loading.wxml');return}
    p_[b]=true
    try{
      var odo = _n("view");_r(odo, 'class', 19, e, s, gg);var oeo = _v();
      if (_o(20, e, s, gg)) {
        oeo.wxVkey = 1;var oho = _m( "image", ["src", 21,"style", 1], e, s, gg);_(oeo,oho);var oio = _n("view");_r(oio, 'class', 19, e, s, gg);var ojo = _o(23, e, s, gg);_(oio,ojo);_(oeo,oio);
      }else {
        oeo.wxVkey = 2;var omo = _n("view");_r(omo, 'class', 24, e, s, gg);var ono = _o(25, e, s, gg);_(omo,ono);_(oeo,omo);
      }_(odo,oeo);_(r,odo);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m1=function(e,s,r,gg){
    
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/template/loading.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/template/toast.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/toast.wxml"]["toast"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/toast.wxml:toast'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/toast.wxml');return}
    p_[b]=true
    try{
      var oro = _v();
      if (_o(26, e, s, gg)) {
        oro.wxVkey = 1;var oso = _n("view");_r(oso, 'class', 27, e, s, gg);var ouo = _v();
      if (_o(26, e, s, gg)) {
        ouo.wxVkey = 1;var ovo = _m( "view", ["animation", 28,"class", 1], e, s, gg);var oxo = _n("view");_r(oxo, 'class', 30, e, s, gg);var oyo = _o(31, e, s, gg);_(oxo,oyo);_(ovo,oxo);_(ouo, ovo);
      } _(oso,ouo);_(oro, oso);
      } _(r,oro);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m2=function(e,s,r,gg){
    
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/template/toast.wxml"]={f:m2,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/index/index.wxml"] = {};
  var m3=function(e,s,r,gg){
    var oAp = e_["./yb_shop/pages/pintuan/pages/index/index.wxml"].i;_ai(oAp, '../template/toast.wxml', e_, './yb_shop/pages/pintuan/pages/index/index.wxml', 0, 0);_ai(oAp, '../template/loading.wxml', e_, './yb_shop/pages/pintuan/pages/index/index.wxml', 0, 0);var oDp = _m( "scroll-view", ["bindscrolltolower", 32,"class", 1,"lowerThreshold", 2,"scrollTop", 3,"scrollWithAnimation", 4,"scrollY", 4,"style", 5], e, s, gg);var oEp = _m( "swiper", ["autoplay", 36,"circular", 0,"indicatorDots", 0,"indicatorActiveColor", 2,"indicatorColor", 3], e, s, gg);var oFp = _v();var oGp = function(oKp,oJp,oIp,gg){var oMp = _n("swiper-item");var oNp = _m( "image", ["mode", 42,"src", 1], oKp, oJp, gg);_(oMp,oNp);_(oIp,oMp);return oIp;};_2(40, oGp, e, s, gg, oFp, "item", "index", 'unique');_(oEp,oFp);_(oDp,oEp);var oOp = _v();
      if (_o(44, e, s, gg)) {
        oOp.wxVkey = 1;var oPp = _n("view");_r(oPp, 'class', 45, e, s, gg);var oRp = _v();var oSp = function(oWp,oVp,oUp,gg){var oTp = _n("view");_r(oTp, 'class', 47, oWp, oVp, gg);var oYp = _m( "navigator", ["style", 48,"url", 1], oWp, oVp, gg);var oZp = _n("view");_r(oZp, 'class', 14, oWp, oVp, gg);var oap = _n("image");_r(oap, 'src', 43, oWp, oVp, gg);_(oZp,oap);_(oYp,oZp);var obp = _n("view");var ocp = _o(18, oWp, oVp, gg);_(obp,ocp);_(oYp,obp);_(oTp,oYp);_(oUp, oTp);return oUp;};_2(46, oSp, e, s, gg, oRp, "item", "index", '');_(oPp,oRp);_(oOp, oPp);
      } _(oDp,oOp);var odp = _m( "view", ["class", 50,"style", 1], e, s, gg);var oep = _v();var ofp = function(ojp,oip,ohp,gg){var olp = _m( "view", ["bindtap", 53,"class", 1,"data-id", 2], ojp, oip, gg);var omp = _m( "image", ["mode", 42,"src", 14], ojp, oip, gg);_(olp,omp);var onp = _n("view");_r(onp, 'class', 57, ojp, oip, gg);var oop = _o(18, ojp, oip, gg);_(onp,oop);_(olp,onp);var opp = _n("view");_r(opp, 'class', 58, ojp, oip, gg);var oqp = _m( "view", ["class", 59,"style", 1], ojp, oip, gg);var orp = _n("text");_r(orp, 'class', 61, ojp, oip, gg);var osp = _o(62, ojp, oip, gg);_(orp,osp);_(oqp,orp);var otp = _n("text");_r(otp, 'class', 63, ojp, oip, gg);var oup = _o(64, ojp, oip, gg);_(otp,oup);_(oqp,otp);var ovp = _n("text");_r(ovp, 'class', 65, ojp, oip, gg);var owp = _o(66, ojp, oip, gg);_(ovp,owp);_(oqp,ovp);_(opp,oqp);var oxp = _m( "view", ["class", 67,"style", 1], ojp, oip, gg);var oyp = _v();
      if (_o(69, ojp, oip, gg)) {
        oyp.wxVkey = 1;var ozp = _n("view");_r(ozp, 'class', 70, ojp, oip, gg);var oAq = _v();var oBq = function(oFq,oEq,oDq,gg){var oHq = _m( "image", ["mode", -1,"class", 74,"src", 1], oFq, oEq, gg);_(oDq,oHq);return oDq;};_2(71, oBq, ojp, oip, gg, oAq, "val", "idx", 'unique');_(ozp,oAq);_(oyp, ozp);
      } _(oxp,oyp);var oIq = _m( "view", ["class", 76,"style", 1], ojp, oip, gg);var oJq = _o(78, ojp, oip, gg);_(oIq,oJq);var oKq = _n("image");_r(oKq, 'src', 79, ojp, oip, gg);_(oIq,oKq);_(oxp,oIq);_(opp,oxp);_(olp,opp);_(ohp,olp);var oLq = _n("view");_r(oLq, 'class', 80, ojp, oip, gg);_(ohp,oLq);return ohp;};_2(52, ofp, e, s, gg, oep, "item", "index", 'unique');_(odp,oep);_(oDp,odp);var oMq = _v();
       var oNq = _o(27, e, s, gg);
       var oPq = _gd('./yb_shop/pages/pintuan/pages/index/index.wxml', oNq, e_, d_);
       if (oPq) {
         var oOq = _1(81,e,s,gg);
         oPq(oOq,oOq,oMq, gg);
       } else _w(oNq, './yb_shop/pages/pintuan/pages/index/index.wxml', 0, 0);_(oDp,oMq);var oQq = _v();
       var oRq = _o(82, e, s, gg);
       var oTq = _gd('./yb_shop/pages/pintuan/pages/index/index.wxml', oRq, e_, d_);
       if (oTq) {
         var oSq = _1(83,e,s,gg);
         oTq(oSq,oSq,oQq, gg);
       } else _w(oRq, './yb_shop/pages/pintuan/pages/index/index.wxml', 0, 0);_(oDp,oQq);_(r,oDp);var oUq = _v();
      if (_o(85, e, s, gg)) {
        oUq.wxVkey = 1;var oZq = e_["./yb_shop/pages/pintuan/pages/index/index.wxml"].j;var oXq = _n("view");_r(oXq, 'style', 86, e, s, gg);_(oUq,oXq);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/pintuan/pages/index/index.wxml",e,s,oUq,gg);;oZq.pop();
      } _(r,oUq);oAp.pop();oAp.pop();
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/index/index.wxml"]={f:m3,j:[],i:[],ti:["../template/toast.wxml","../template/loading.wxml"],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background-color:#f2f2f2;font-size:%%?26rpx?%%;color:#1b1b1b}wx-image{vertical-align:middle}.text-center{text-align:center}.pull-left{float:left}.pull-right{float:right}.clearfix{clear:both}.bg-fff{background-color:#fff}.mt-10{margin-top:%%?10rpx?%%}.mt-20{margin-top:%%?20rpx?%%}.p-20{padding:%%?20rpx?%%}.text-red{color:red}.row{width:100%}.on{border-bottom:2px solid red;color:red!important}.swiper-box{min-height:%%?1000rpx?%%}wx-swiper-item wx-image{width:100%;height:100%}.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff}.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%%?20rpx?%%;border-radius:%%?10rpx?%%}.loading wx-image{width:100prx;height:%%?100rpx?%%}.loading .no-data{padding:%%?40rpx?%%;color:#ccc;font-size:%%?22rpx?%%}.flex{display:flex}.flex-row{display:flex;flex-direction:row}.flex-col{display:flex;flex-direction:column}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-grow-2{flex-grow:2}.flex-x-center{display:flex;justify-content:center}.flex-x-left{display:flex;justify-content:left}.flex-x-right{display:flex;justify-content:right}.flex-y-center{display:flex;align-items:center}.flex-y-bottom{display:flex;align-items:flex-end}.float-icon{position:fixed;z-index:20;right:%%?40rpx?%%;bottom:%%?30rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.float-icon1{margin-bottom:%%?20rpx?%%}.float-icon2{margin-bottom:%%?20rpx?%%}.kaituan{background-color:#fff;width:100%;margin-top:%%?0rpx?%%;margin-bottom:%%?30rpx?%%}.scroll-view-x{background-color:#fff;white-space:nowrap}.scroll-view-x .scroll-view-item{display:inline-block;margin-left:%%?56rpx?%%;line-height:38px}wx-swiper{height:%%?304rpx?%%}.user_no{color:#ccc;margin-left:%%?20rpx?%%}.topic-group{background-color:#fff;padding:%%?20rpx?%% 0}.topic-group wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%;border:1px solid #fff}.topic-item{display:inline-block;width:25%;text-align:center;margin-bottom:%%?20rpx?%%;margin-top:%%?10rpx?%%}.topic-item wx-view{text-align:center;margin-top:%%?10rpx?%%}.goods-item{background-color:#fff;width:95%;margin:%%?10rpx?%% 10px;border-radius:%%?15rpx?%%;overflow:hidden}.goods-item wx-image{width:100%;height:%%?350rpx?%%;margin:0}.goods-item .goods-title{line-height:%%?48rpx?%%;padding:%%?18rpx?%% %%?24rpx?%%;font-size:%%?32rpx?%%;max-height:%%?86rpx?%%;overflow:hidden}.goods-img{background-size:98% 98%;background-repeat:no-repeat}.goods-img wx-image{height:%%?99rpx?%%;width:94%;margin-left:%%?20rpx?%%;display:inline-block}.goods-info{width:100%}.goods-item .goods-price{color:#ff1d1c;font-size:%%?42rpx?%%;position:relative;margin-left:%%?30rpx?%%}.goods-item .goods-sale{color:#ccc;font-size:%%?25rpx?%%;margin-left:%%?10rpx?%%;position:relative}.goods-mprice{margin-left:%%?20rpx?%%;color:#696969;text-decoration:line-through;position:relative}.child-group{padding-bottom:%%?8rpx?%%}.child-cate-item{width:25%;text-align:center;display:inline-block;padding:%%?24rpx?%% 0}.child-cate-item wx-image{width:%%?64rpx?%%;height:%%?64rpx?%%}.icon{display:inline-block}.btn{position:relative;background-color:#ff4544;color:#fff;border-radius:%%?10rpx?%%;display:inline-block;line-height:%%?81rpx?%%;width:%%?180rpx?%%}.btn wx-image{width:%%?10rpx?%%;height:%%?18rpx?%%;margin-left:%%?16rpx?%%;margin-top:%%?-6rpx?%%}.group-userImg{display:inline-block;margin-right:%%?20rpx?%%;position:relative}.group-userImg wx-image{width:%%?64rpx?%%;height:%%?64rpx?%%;border-radius:50%;position:absolute;left:%%?-60rpx?%%;top:%%?-40rpx?%%}.two{left:%%?-95rpx?%%!important;z-index:111}.goods-item-2{width:47%;display:inline-block;margin:%%?10rpx?%% %%?12rpx?%% %%?10rpx?%% %%?11rpx?%%;border-radius:%%?10rpx?%%}.goods-item-2 wx-image{width:%%?330rpx?%%;height:%%?330rpx?%%;padding:%%?12rpx?%% %%?11rpx?%% %%?0rpx?%% %%?11rpx?%%}.goods-item-2 .goods-title{font-size:%%?22rpx?%%;margin:%%?20rpx?%%;height:%%?32rpx?%%;overflow:hidden}.goods-item-2 .goods-price{color:#e02e24;font-size:%%?32rpx?%%;display:inline-block;padding-left:%%?24rpx?%%}.goods-item-2 .goods-price>wx-text{font-size:%%?20rpx?%%!important}.goods-item-2 .goods-sale{margin-right:%%?24rpx?%%;color:#a4a4a4}.title-bar{position:relative;border-bottom:%%?1rpx?%% solid #eee;height:%%?100rpx?%%}.title-bar wx-image{width:%%?38rpx?%%;height:%%?38rpx?%%}.title-bar .title{margin:0 %%?40rpx?%%}.title-bar .title-line{display:inline-block;height:%%?2rpx?%%;width:%%?30rpx?%%;background:#bbb}.title-bar .title wx-image{margin-right:%%?24rpx?%%}.title-bar wx-navigator{position:absolute;right:0;top:0;bottom:0;padding:0 %%?20rpx?%%}.title-bar wx-navigator wx-image{width:%%?12rpx?%%;height:%%?22rpx?%%;margin-left:%%?16rpx?%%}.jingxuan-list{white-space:nowrap;display:block;font-size:0;padding:0 %%?24rpx?%% %%?24rpx?%%}.jingxuan-list wx-navigator{display:inline-block;font-size:0}.jingxuan-list wx-navigator wx-image{height:%%?300rpx?%%;width:%%?600rpx?%%;margin-right:%%?20rpx?%%}.jingxuan-list wx-navigator:last-child wx-image{margin-right:0}@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/index/index";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/index/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/index/index.js
var app = getApp(),
    a = app.requirejs("core");
Page({
  data: {
    route: "pintuan",
    cid: 0,
    show: false,
    scrollLeft: 0,
    scrollTop: 0,
    page: 1,
    goodsList: [],
    loading: true,
    suspension: []
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    a.menu_url(k, 2);
  },
  onLoad: function onLoad(e) {
    a.setting();
    if (e != null && e != undefined) {
      this.setData({
        tabbar_index: e.tabbar_index ? e.tabbar_index : -1
      });
    }
    this.setData({
      menu: getApp().tabBar
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    this.systemInfo = wx.getSystemInfoSync();
    this.setIndexData();
    this.setGoodsData();
  },
  onShow: function onShow() {},
  /**
    * 下拉刷新
    */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      goodsList: [],
      page: 1,
      loaded: false
    });
    this.setIndexData();
    this.setGoodsData();
    wx.stopPullDownRefresh();
  },
  /**
   *上拉加载
   */
  onReachBottom: function onReachBottom() {
    console.log('加载更多');
    this.data.loaded || this.setGoodsData();
  },
  setIndexData: function setIndexData() {
    var self = this;
    a.get('Pintuan/ptIndex', {}, function (t) {
      if (t.code == 0) {
        self.setData({
          windowHeight: self.systemInfo.windowHeight,
          advert: t.info.advert,
          category: t.info.cate
        });
      } else {
        a.alert(t.msg);
      }
    }, true);
  },
  setGoodsData: function setGoodsData() {
    if (!this.data.loading) {
      return false;
    }
    var self = this;
    a.get("Pintuan/ptGoodsList", { page: self.data.page, cate_id: self.data.cid }, function (t) {
      if (t.code == 0) {
        var e = {
          loading: false
        };
        t.info.length > 0 && (e.page = self.data.page + 1, e.goodsList = self.data.goodsList.concat(t.info)), t.info.length < 10 && (e.loaded = true);
        self.setData(e);
      } else {
        a.alert(t.msg);
      }
    }, true);
  },
  showList: function showList(e) {
    var cid = e.currentTarget.dataset.id;
    app.redirect('index/list', 'cid=' + cid);
  },
  showGoodsDetial: function showGoodsDetial(e) {
    var gid = e.currentTarget.dataset.id;
    if (!gid) return;
    app.redirect('goods/detail', 'gid=' + gid);
  },
  switchNav: function switchNav(e) {
    if (this.data.cid == e.currentTarget.dataset.cid && e.currentTarget.dataset.cid != 0) return;
    this.data.cid = e.currentTarget.dataset.cid;
    this.data.page = 0;
    this.data.loading = true;
    this.data.goodsList = [];
    var windowWidth = this.systemInfo.windowWidth;
    var offsetLeft = e.currentTarget.offsetLeft;
    var scrollLeft = this.data.scrollLeft;
    if (offsetLeft > windowWidth / 2) {
      scrollLeft = offsetLeft;
    } else {
      scrollLeft = 0;
    }
    this.setData({
      goodsList: [],
      childCate: [],
      loading: true,
      scrollLeft: scrollLeft,
      scrollTop: 0,
      cid: this.data.cid
    });
    this.setGoodsData();
  },
  scrolltolower: function scrolltolower(e) {
    console.log('加载更多');
    this.data.loaded || this.setGoodsData();
  },
  // 拨打电话
  consultation: function consultation(e) {
    suspension.call();
  }
});
});require("yb_shop/pages/pintuan/pages/index/index.js")@code-separator-line:["div","cover-view","cover-image","template","view","block","image","import","scroll-view","swiper","swiper-item","navigator","text","include"]