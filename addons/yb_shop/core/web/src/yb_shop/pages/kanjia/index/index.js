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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, 'index_swiper']);Z([[7],[3, "autoplay"]]);Z([3, 'true']);Z([[7],[3, "duration"]]);Z([[7],[3, "interval"]]);Z([3, 'height:8rem;']);Z([[7],[3, "carousel"]]);Z([[6],[[7],[3, "item"]],[3, "url_path"]]);Z([3, 'slide-image']);Z([3, 'widthFix']);Z([[6],[[7],[3, "item"]],[3, "img"]]);Z([3, 'index_top_nav']);Z([3, 'padding-top:40rpx;']);Z([[7],[3, "cate_info"]]);Z([[2, ">"], [[6],[[7],[3, "cate_info"]],[3, "length"]], [1, 0]]);Z([a, [3, '/yb_shop/pages/kanjia/good_list/index?cate_id\x3d'],[[6],[[7],[3, "item"]],[3, "id"]],[3, '\x26class_name\x3d'],[[6],[[7],[3, "item"]],[3, "class_name"]]]);Z([[6],[[7],[3, "item"]],[3, "img_url"]]);Z([3, 'index_nav_name']);Z([a, [[6],[[7],[3, "item"]],[3, "class_name"]]]);Z([3, 'clear']);Z([3, 'swiper-tab']);Z([3, 'swichNav']);Z([a, [3, 'swiper-tab-list '],[[2,'?:'],[[2, "=="], [[7],[3, "kj_type"]], [1, 1]],[1, "on"],[1, ""]]]);Z([3, '1']);Z([3, '正在进行']);Z([a, [3, 'swiper-tab-list '],[[2,'?:'],[[2, "=="], [[7],[3, "kj_type"]], [1, 2]],[1, "on"],[1, ""]]]);Z([3, '2']);Z([3, '即将开始']);Z([a, [3, 'swiper-tab-list '],[[2,'?:'],[[2, "=="], [[7],[3, "kj_type"]], [1, 3]],[1, "on"],[1, ""]]]);Z([3, '3']);Z([3, '全部活动']);Z([[7],[3, "list"]]);Z([3, 'url']);Z([[6],[[7],[3, "item"]],[3, "goods_type"]]);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([3, 'index_info_li']);Z([3, 'index_info_pic']);Z([a, [3, 'background:url('],[[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]],[3, ') no-repeat center center;background-size: cover;']]);Z([3, 'index_info_count']);Z([a, [3, '剩余'],[[6],[[7],[3, "item"]],[3, "bargain_inventory"]],[3, '份']]);Z([3, 'index_info_tit']);Z([a, [[6],[[7],[3, "item"]],[3, "bargain_name"]]]);Z([[2, ">"], [[6],[[6],[[7],[3, "item"]],[3, "user"]],[3, "length"]], [1, 0]]);Z([3, 'index_info_uface clear']);Z([[6],[[7],[3, "item"]],[3, "user"]]);Z([3, 'val']);Z([[2, "<"], [[7],[3, "index"]], [1, 6]]);Z([3, 'image']);Z([a, [3, 'background:url('],[[6],[[7],[3, "val"]],[3, "user_headimg"]],[3, ') no-repeat center center;background-size: cover;']]);Z([[2, ">"], [[6],[[7],[3, "item"]],[3, "user_num"]], [1, 5]]);Z([3, 'background:url(http://ddfwz.sssvip.net/asmce/kanjia/index_more.jpg) no-repeat center center;background-size: cover;']);Z([3, 'user_no']);Z([a, [[6],[[7],[3, "item"]],[3, "user_num"]],[3, '人正在参加']]);Z([[2, "=="], [[6],[[6],[[7],[3, "item"]],[3, "user"]],[3, "length"]], [1, 0]]);Z([3, '优惠多多，赶快参与活动吧！']);Z([3, 'index_price clear']);Z([3, 'price_left']);Z([3, 'price02']);Z([3, '￥']);Z([a, [[6],[[7],[3, "item"]],[3, "lowest_price"]]]);Z([3, 'price01']);Z([a, [3, ' 原价￥'],[[6],[[7],[3, "item"]],[3, "original_price"]]]);Z([3, 'price_right']);Z([a, [3, 'buy_btn'],[[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "goods_type"]], [1, 1]],[1, "_none"],[1, ""]]]);Z([a, [[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "goods_type"]], [1, 1]],[1, "即将开始"],[1, "去砍价"]]]);Z([[7],[3, "loaded"]]);Z([3, 'fui-loading empty']);Z([3, 'text']);Z([3, '没有更多了']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oLkB = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oMkB = _v();var oNkB = function(oRkB,oQkB,oPkB,gg){var oOkB = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oRkB, oQkB, gg);var oTkB = _m( "cover-image", ["class", 14,"src", 1], oRkB, oQkB, gg);_(oOkB,oTkB);var oUkB = _m( "cover-view", ["class", 16,"style", 1], oRkB, oQkB, gg);var oVkB = _o(18, oRkB, oQkB, gg);_(oUkB,oVkB);_(oOkB,oUkB);_(oPkB, oOkB);return oPkB;};_2(2, oNkB, e, s, gg, oMkB, "item", "index", '');_(oLkB,oMkB);_(r,oLkB);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/kanjia/index/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oXkB = _v();
      if (_o(19, e, s, gg)) {
        oXkB.wxVkey = 1;var oakB = _n("view");_r(oakB, 'class', 20, e, s, gg);var obkB = _m( "swiper", ["autoplay", 21,"circular", 1,"indicatorDots", 1,"duration", 2,"interval", 3,"style", 4], e, s, gg);var ockB = _v();var odkB = function(ohkB,ogkB,ofkB,gg){var ojkB = _n("swiper-item");var okkB = _m( "navigator", ["hoverClass", 13,"url", 14], ohkB, ogkB, gg);var olkB = _m( "image", ["class", 28,"mode", 1,"src", 2], ohkB, ogkB, gg);_(okkB,olkB);_(ojkB,okkB);_(ofkB,ojkB);return ofkB;};_2(26, odkB, e, s, gg, ockB, "item", "index", '');_(obkB,ockB);_(oakB,obkB);_(oXkB,oakB);var omkB = _m( "view", ["class", 31,"style", 1], e, s, gg);var onkB = _v();var ookB = function(oskB,orkB,oqkB,gg){var opkB = _v();
      if (_o(34, oskB, orkB, gg)) {
        opkB.wxVkey = 1;var oukB = _n("view");var owkB = _m( "navigator", ["hoverClass", 13,"url", 22], oskB, orkB, gg);var oxkB = _n("image");_r(oxkB, 'src', 36, oskB, orkB, gg);_(owkB,oxkB);var oykB = _n("view");_r(oykB, 'class', 37, oskB, orkB, gg);var ozkB = _o(38, oskB, orkB, gg);_(oykB,ozkB);_(owkB,oykB);_(oukB,owkB);_(opkB, oukB);
      } _(oqkB, opkB);return oqkB;};_2(33, ookB, e, s, gg, onkB, "item", "index", '');_(omkB,onkB);_(oXkB,omkB);var o_kB = _n("view");_r(o_kB, 'class', 39, e, s, gg);_(oXkB,o_kB);var oAlB = _n("view");_r(oAlB, 'class', 40, e, s, gg);var oBlB = _m( "view", ["bindtap", 41,"class", 1,"data-kj_type", 2], e, s, gg);var oClB = _o(44, e, s, gg);_(oBlB,oClB);_(oAlB,oBlB);var oDlB = _m( "view", ["bindtap", 41,"class", 4,"data-kj_type", 5], e, s, gg);var oElB = _o(47, e, s, gg);_(oDlB,oElB);_(oAlB,oDlB);var oFlB = _m( "view", ["bindtap", 41,"class", 7,"data-kj_type", 8], e, s, gg);var oGlB = _o(50, e, s, gg);_(oFlB,oGlB);_(oAlB,oFlB);_(oXkB,oAlB);var oHlB = _v();var oIlB = function(oMlB,oLlB,oKlB,gg){var oOlB = _m( "navigator", ["hoverClass", 13,"bindtap", 39,"data-goods_type", 40,"data-id", 41], oMlB, oLlB, gg);var oPlB = _n("view");_r(oPlB, 'class', 55, oMlB, oLlB, gg);var oQlB = _m( "view", ["class", 56,"style", 1], oMlB, oLlB, gg);var oRlB = _n("view");_r(oRlB, 'class', 58, oMlB, oLlB, gg);var oSlB = _n("text");var oTlB = _o(59, oMlB, oLlB, gg);_(oSlB,oTlB);_(oRlB,oSlB);_(oQlB,oRlB);_(oPlB,oQlB);var oUlB = _n("view");_r(oUlB, 'class', 60, oMlB, oLlB, gg);var oVlB = _o(61, oMlB, oLlB, gg);_(oUlB,oVlB);_(oPlB,oUlB);var oWlB = _v();
      if (_o(62, oMlB, oLlB, gg)) {
        oWlB.wxVkey = 1;var oXlB = _n("view");_r(oXlB, 'class', 63, oMlB, oLlB, gg);var oZlB = _v();var oalB = function(oelB,odlB,oclB,gg){var oblB = _v();
      if (_o(66, oelB, odlB, gg)) {
        oblB.wxVkey = 1;var oilB = _m( "view", ["class", 67,"style", 1], oelB, odlB, gg);_(oblB,oilB);
      } return oclB;};_2(64, oalB, oMlB, oLlB, gg, oZlB, "val", "index", '');_(oXlB,oZlB);var ojlB = _v();
      if (_o(69, oMlB, oLlB, gg)) {
        ojlB.wxVkey = 1;var oklB = _m( "view", ["class", 67,"style", 3], oMlB, oLlB, gg);_(ojlB, oklB);
      } _(oXlB,ojlB);var omlB = _n("view");_r(omlB, 'class', 71, oMlB, oLlB, gg);var onlB = _o(72, oMlB, oLlB, gg);_(omlB,onlB);_(oXlB,omlB);_(oWlB, oXlB);
      } _(oPlB,oWlB);var oolB = _v();
      if (_o(73, oMlB, oLlB, gg)) {
        oolB.wxVkey = 1;var oplB = _n("view");_r(oplB, 'class', 63, oMlB, oLlB, gg);var orlB = _n("view");_r(orlB, 'class', 71, oMlB, oLlB, gg);var oslB = _o(74, oMlB, oLlB, gg);_(orlB,oslB);_(oplB,orlB);_(oolB, oplB);
      } _(oPlB,oolB);var otlB = _n("view");_r(otlB, 'class', 75, oMlB, oLlB, gg);var oulB = _n("view");_r(oulB, 'class', 76, oMlB, oLlB, gg);var ovlB = _n("view");_r(ovlB, 'class', 77, oMlB, oLlB, gg);var owlB = _o(78, oMlB, oLlB, gg);_(ovlB,owlB);var oxlB = _n("text");var oylB = _o(79, oMlB, oLlB, gg);_(oxlB,oylB);_(ovlB,oxlB);var ozlB = _n("text");_r(ozlB, 'class', 80, oMlB, oLlB, gg);var o_lB = _o(81, oMlB, oLlB, gg);_(ozlB,o_lB);_(ovlB,ozlB);_(oulB,ovlB);_(otlB,oulB);var oAmB = _n("view");_r(oAmB, 'class', 82, oMlB, oLlB, gg);var oBmB = _n("view");_r(oBmB, 'class', 83, oMlB, oLlB, gg);var oCmB = _o(84, oMlB, oLlB, gg);_(oBmB,oCmB);_(oAmB,oBmB);_(otlB,oAmB);var oDmB = _n("view");_r(oDmB, 'class', 39, oMlB, oLlB, gg);_(otlB,oDmB);_(oPlB,otlB);_(oOlB,oPlB);_(oKlB,oOlB);return oKlB;};_2(51, oIlB, e, s, gg, oHlB, "item", "index", '');_(oXkB,oHlB);var oEmB = _v();
      if (_o(85, e, s, gg)) {
        oEmB.wxVkey = 1;var oFmB = _n("view");_r(oFmB, 'class', 86, e, s, gg);var oHmB = _n("view");_r(oHmB, 'class', 87, e, s, gg);var oImB = _o(88, e, s, gg);_(oHmB,oImB);_(oFmB,oHmB);_(oEmB, oFmB);
      } _(oXkB,oEmB);var oJmB = _v();
      if (_o(89, e, s, gg)) {
        oJmB.wxVkey = 1;var oOmB = e_["./yb_shop/pages/kanjia/index/index.wxml"].j;var oMmB = _n("view");_r(oMmB, 'style', 90, e, s, gg);_(oJmB,oMmB);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/kanjia/index/index.wxml",e,s,oJmB,gg);;oOmB.pop();
      } _(oXkB,oJmB);
      } _(r,oXkB);
    return r;
  };
        e_["./yb_shop/pages/kanjia/index/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.index_top_nav wx-image{width:%%?90rpx?%%;height:%%?90rpx?%%}.index_top_nav{padding-bottom:%%?20rpx?%%;padding-top:%%?20rpx?%%;border-bottom:%%?14rpx?%% solid #f2f2f2;min-height:%%?155rpx?%%;overflow:hidden}.index_top_nav>wx-view{width:20%;height:%%?130rpx?%%;text-align:center;font-size:%%?27rpx?%%;display:block;float:left;padding-bottom:%%?20rpx?%%}.index_nav_name{height:%%?50rpx?%%;line-height:%%?50rpx?%%;color:#666;font-size:.7rem;margin-top:%%?10rpx?%%}.swiper-tab{width:100%;border-bottom:%%?2rpx?%% solid #fff;text-align:center;line-height:%%?90rpx?%%}.swiper-tab-list{font-size:%%?30rpx?%%;display:inline-block;width:33.33%;color:#111}.on{color:#ed504e;background:url(http://ddfwz.sssvip.net/asmce/kanjia/index_nav_bg.png) bottom center no-repeat;background-size:3.5rem .15rem}.swiper-box{display:block;width:100%;overflow:hidden}.index_info_li{border-top:%%?14rpx?%% solid #f2f2f2;height:%%?660rpx?%%}.index_info_pic{width:100%;height:11rem;position:relative}.index_info_count{position:absolute;text-align:center;background:rgba(0,0,0,.5);right:.5rem;top:.5rem;padding:.3rem .8rem;border-radius:0}.index_info_count wx-text{color:#fff;font-size:.8rem}.price_left .price01,.price_left .price02{margin-left:.2rem}.index_info_uface{margin-left:.5rem;margin-right:.5rem}.index_info_uface .image{width:1.6rem;height:1.6rem;border-radius:50%;float:left;border:%%?6rpx?%% solid #fff;margin-right:-.35rem}.index_info_uface .user_no{height:1.8rem;line-height:1.8rem;color:#909090;padding-left:.5rem;font-size:.8rem;float:left}.buy_btn_none{height:2.5rem;line-height:2.5rem;background:#7a7a7b;color:#fff;font-size:.9rem;text-align:center;border-radius:1.25rem;width:8rem;box-shadow:2px 6px 10px #e4e4e4}.price_left .price02{color:#ed4f4e;font-size:.8rem;padding-top:.5rem}.price_left .price02 .price01{font-size:.8rem;color:#909090}@code-separator-line:__wxRoute = "yb_shop/pages/kanjia/index/index";__wxRouteBegin = true;
define("yb_shop/pages/kanjia/index/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
//index.js
//获取应用实例
var app = getApp(),
    a = app.requirejs("core"),
    b = app.requirejs('api/kjb');
Page({
  data: {
    indicatorDots: true,
    autoplay: true,
    interval: 5000,
    duration: 1000,
    page: 1,
    kj_type: 1,
    show: false,
    loaded: false,
    list: [],
    route: "kanjia",
    menu: app.tabBar,
    menu_show: false,
    config: app.config
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    a.menu_url(k, 2);
  },
  onLoad: function onLoad(e) {
      showMenu("kanjia_index");
    a.setting();
    if (e != null && e != undefined) {
      this.setData({
        tabbar_index: e.tabbar_index ? e.tabbar_index : -1
      });
    }
    this.setData({
      menu: getApp().tabBar
    });
    wx.setNavigationBarTitle({
      title: getApp().tabBar.name ? decodeURIComponent(getApp().tabBar.name) : '砍价首页'
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    var that = this;
    var key = app.isInArray(getApp().tabBar.list, that.data.route);
    if (e.key && e.key == 1 && key) {
      that.setData({
        tabbar_index: key,
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    that.getList();
    b.BarIndex(function (i) {
      that.setData(i);
    });
  },
  getList: function getList() {
    var that = this,
        page = that.data.page,
        kj_type = that.data.kj_type,
        cate_id = '';
    b.kj_list(cate_id, kj_type, page, that, function (t) {
      console.log(t);
      that.setData(t);
    });
  },
  /**
   * 菜单转换
   */
  swichNav: function swichNav(e) {
    var that = this,
        k = a.pdata(e);
    k.list = [];
    k.page = 1;
    k.loaded = false;
    that.setData(k);
    this.getList();
  },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      list: [],
      page: 1,
      loaded: false
    });
    this.getList();
    wx.stopPullDownRefresh();
  },
  /**
   *上拉加载
   */
  onReachBottom: function onReachBottom() {
    this.data.loaded || this.getList();
  },
  /**
   * 跳转至详情
   */
  url: function url(e) {
    var data = a.pdata(e);
    if (data.goods_type == 2) {
      wx.navigateTo({
        url: '/yb_shop/pages/kanjia/goods_info/index?id=' + data.id
      });
    }
  }
});
});require("yb_shop/pages/kanjia/index/index.js")@code-separator-line:["div","cover-view","cover-image","block","view","swiper","swiper-item","navigator","image","text","include"]