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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[2, "=="], [[7],[3, "cate_type"]], [1, 0]]);Z([3, 'scroll']);Z([3, 'content']);Z([[7],[3, "toView"]]);Z([[7],[3, "scrollY"]]);Z([3, 'true']);Z([[7],[3, "category"]]);Z([3, 'shop_list_right']);Z([3, 'address_top']);Z([[2, "+"], [1, "inToView"], [[7],[3, "index"]]]);Z([3, 'class_tit']);Z([a, [[6],[[7],[3, "item"]],[3, "short_name"]]]);Z([[6],[[7],[3, "item"]],[3, "cate"]]);Z([3, 'shop_class_box']);Z([a, [3, '/yb_shop/pages/goods/index/index?cate\x3d'],[[6],[[7],[3, "item"]],[3, "cate_id"]]]);Z([3, 'shop_class_photo']);Z([[6],[[7],[3, "item"]],[3, "cate_pic"]]);Z([3, 'address_bottom']);Z([a, [[6],[[7],[3, "item"]],[3, "cate_name"]]]);Z([3, 'clear']);Z([[2, "=="], [[7],[3, "cate_type"]], [1, 1]]);Z([a, [3, 'margin-bottom:'],[[2,'?:'],[[7],[3, "showtabbar"]],[1, 100],[1, 0]],[3, 'rpx']]);Z([[2, ">"], [[6],[[6],[[7],[3, "item"]],[3, "goods_list"]],[3, "length"]], [1, 0]]);Z([[6],[[7],[3, "item"]],[3, "goods_list"]]);Z([3, 'shop_info_box']);Z([a, [3, '/yb_shop/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "item"]],[3, "goods_id"]]]);Z([3, 'shop_info_photo']);Z([[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]]);Z([a, [[6],[[7],[3, "item"]],[3, "goods_name"]]]);Z([3, 'orientation_region']);Z([3, 'tabFun']);Z([3, 'left_box']);Z([3, 'scrollToViewFn']);Z([a, [3, 'orientation_city '],[[2,'?:'],[[2, "=="], [[7],[3, "curHdIndex"]], [[7],[3, "index"]]],[1, "active"],[1, ""]]]);Z([[7],[3, "index"]]);Z([3, 'z-index:999;']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:150rpx;width:100%;']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oqO = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var orO = _v();var osO = function(owO,ovO,ouO,gg){var otO = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], owO, ovO, gg);var oyO = _m( "cover-image", ["class", 14,"src", 1], owO, ovO, gg);_(otO,oyO);var ozO = _m( "cover-view", ["class", 16,"style", 1], owO, ovO, gg);var o_O = _o(18, owO, ovO, gg);_(ozO,o_O);_(otO,ozO);_(ouO, otO);return ouO;};_2(2, osO, e, s, gg, orO, "item", "index", '');_(oqO,orO);_(r,oqO);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/caregory/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oBP = _v();
      if (_o(19, e, s, gg)) {
        oBP.wxVkey = 1;var oCP = _m( "scroll-view", ["bindscroll", 20,"class", 1,"scrollIntoView", 2,"scrollTop", 3,"scrollWithAnimation", 4,"scrollY", 4], e, s, gg);var oEP = _v();var oFP = function(oJP,oIP,oHP,gg){var oGP = _n("view");_r(oGP, 'class', 26, oJP, oIP, gg);var oLP = _m( "view", ["class", 27,"id", 1], oJP, oIP, gg);var oMP = _n("view");_r(oMP, 'class', 29, oJP, oIP, gg);var oNP = _o(30, oJP, oIP, gg);_(oMP,oNP);_(oLP,oMP);_(oGP,oLP);var oOP = _v();var oPP = function(oTP,oSP,oRP,gg){var oQP = _n("view");_r(oQP, 'class', 32, oTP, oSP, gg);var oVP = _m( "navigator", ["hoverClass", 13,"url", 20], oTP, oSP, gg);var oWP = _n("view");_r(oWP, 'class', 34, oTP, oSP, gg);var oXP = _n("image");_r(oXP, 'src', 35, oTP, oSP, gg);_(oWP,oXP);_(oVP,oWP);var oYP = _n("view");_r(oYP, 'class', 36, oTP, oSP, gg);var oZP = _o(37, oTP, oSP, gg);_(oYP,oZP);_(oVP,oYP);_(oQP,oVP);_(oRP, oQP);return oRP;};_2(31, oPP, oJP, oIP, gg, oOP, "item", "index", '');_(oGP,oOP);var oaP = _n("view");_r(oaP, 'class', 38, oJP, oIP, gg);_(oGP,oaP);_(oHP, oGP);return oHP;};_2(25, oFP, e, s, gg, oEP, "item", "index", '');_(oCP,oEP);_(oBP, oCP);
      } _(r,oBP);var obP = _v();
      if (_o(39, e, s, gg)) {
        obP.wxVkey = 1;var ocP = _m( "scroll-view", ["bindscroll", 20,"class", 1,"scrollIntoView", 2,"scrollTop", 3,"scrollWithAnimation", 4,"scrollY", 4,"style", 20], e, s, gg);var oeP = _v();var ofP = function(ojP,oiP,ohP,gg){var ogP = _n("view");_r(ogP, 'class', 26, ojP, oiP, gg);var olP = _v();
      if (_o(41, ojP, oiP, gg)) {
        olP.wxVkey = 1;var omP = _m( "view", ["class", 27,"id", 1], ojP, oiP, gg);var ooP = _n("view");_r(ooP, 'class', 29, ojP, oiP, gg);var opP = _o(30, ojP, oiP, gg);_(ooP,opP);_(omP,ooP);_(olP, omP);
      } _(ogP,olP);var oqP = _v();var orP = function(ovP,ouP,otP,gg){var osP = _n("view");_r(osP, 'class', 43, ovP, ouP, gg);var oxP = _m( "navigator", ["hoverClass", 13,"url", 31], ovP, ouP, gg);var oyP = _n("view");_r(oyP, 'class', 45, ovP, ouP, gg);var ozP = _n("image");_r(ozP, 'src', 46, ovP, ouP, gg);_(oyP,ozP);_(oxP,oyP);var o_P = _n("view");_r(o_P, 'class', 36, ovP, ouP, gg);var oAQ = _o(47, ovP, ouP, gg);_(o_P,oAQ);_(oxP,o_P);_(osP,oxP);_(otP, osP);return otP;};_2(42, orP, ojP, oiP, gg, oqP, "item", "index", '');_(ogP,oqP);var oBQ = _n("view");_r(oBQ, 'class', 38, ojP, oiP, gg);_(ogP,oBQ);_(ohP, ogP);return ohP;};_2(25, ofP, e, s, gg, oeP, "item", "index", '');_(ocP,oeP);_(obP, ocP);
      } _(r,obP);var oCQ = _n("view");_r(oCQ, 'class', 48, e, s, gg);var oDQ = _m( "view", ["bindtap", 49,"class", 1], e, s, gg);var oEQ = _v();var oFQ = function(oJQ,oIQ,oHQ,gg){var oLQ = _m( "view", ["bindtap", 51,"class", 1,"data-id", 2,"style", 3], oJQ, oIQ, gg);var oMQ = _o(37, oJQ, oIQ, gg);_(oLQ,oMQ);_(oHQ,oLQ);return oHQ;};_2(25, oFQ, e, s, gg, oEQ, "item", "index", '');_(oDQ,oEQ);_(oCQ,oDQ);var oNQ = _v();
      if (_o(55, e, s, gg)) {
        oNQ.wxVkey = 1;var oSQ = e_["./yb_shop/pages/caregory/index.wxml"].j;var oQQ = _n("view");_r(oQQ, 'style', 56, e, s, gg);_(oNQ,oQQ);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/caregory/index.wxml",e,s,oNQ,gg);;oSQ.pop();
      } _(oCQ,oNQ);_(r,oCQ);var oTQ = _v();
      if (_o(55, e, s, gg)) {
        oTQ.wxVkey = 1;var oYQ = e_["./yb_shop/pages/caregory/index.wxml"].j;var oWQ = _n("view");_r(oWQ, 'style', 56, e, s, gg);_(oTQ,oWQ);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/caregory/index.wxml",e,s,oTQ,gg);;oYQ.pop();
      } _(r,oTQ);
    return r;
  };
        e_["./yb_shop/pages/caregory/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#fff;height:100%;width:100%}.top_search_box{height:%%?60rpx?%%;line-height:%%?60rpx?%%;text-align:center;background:#f2f2f2;border-radius:%%?60rpx?%%;margin:%%?16rpx?%% %%?20rpx?%%}.search_input{width:100%;height:%%?50rpx?%%;margin:0 auto;line-height:%%?50rpx?%%;padding-bottom:%%?10rpx?%%}.search_input wx-image{width:%%?36rpx?%%;height:%%?36rpx?%%;display:inline-block;margin-right:%%?8rpx?%%}.search_input wx-text{font-size:%%?27rpx?%%;display:inline-block;color:#ccc;margin-top:%%?-28rpx?%%}.shop_list_right{margin-left:%%?180rpx?%%}.shop_class_box{width:33.333%;float:left;padding-top:%%?20rpx?%%}.shop_class_photo{text-align:center}.shop_class_photo wx-image{width:%%?110rpx?%%;height:%%?110rpx?%%}.content{padding-bottom:%%?20rpx?%%;box-sizing:border-box;height:100%;position:relative;top:0}.location{width:100%}.location_top{height:%%?76rpx?%%;line-height:%%?76rpx?%%;background:#f4f4f4;color:#606660;font-size:%%?28rpx?%%;padding:0 %%?20rpx?%%}.location_bottom{height:%%?140rpx?%%;line-height:%%?140rpx?%%;color:#d91f16;font-size:%%?28rpx?%%;border-top:%%?2rpx?%% #ebebeb solid;border-bottom:%%?2rpx?%% #ebebeb solid;padding:0 %%?20rpx?%%;align-items:center;display:-webkit-flex}.address_top{height:%%?76rpx?%%;line-height:%%?76rpx?%%;color:#141414;font-size:%%?34rpx?%%;padding:0 %%?30rpx?%%;width:36%;text-align:center;margin:0 auto;position:relative;margin-top:%%?35rpx?%%;overflow:hidden;background:url(http://vip.ly100.wang/public/static/images/page_line.png) center center no-repeat;background-size:20rem .1rem}.address_top .class_tit{padding:0 %%?30rpx?%%;background:#fff;text-align:center;z-index:2;display:inline-block;vertical-align:middle;margin-top:%%?0rpx?%%;font-size:%%?30rpx?%%}.address_bottom{max-height:%%?60rpx?%%;line-height:%%?60rpx?%%;background:#fff;color:#646464;font-size:%%?26rpx?%%;padding:0 %%?10rpx?%%;text-align:center;overflow:hidden}.location_img{width:%%?48rpx?%%;height:%%?48rpx?%%;position:absolute;right:%%?20rpx?%%;top:%%?125rpx?%%}.add_city{width:%%?228rpx?%%;height:%%?60rpx?%%;line-height:%%?60rpx?%%;text-align:center;border:%%?2rpx?%% solid #ebebeb;color:#000;margin-right:%%?20rpx?%%}.add_citying{width:%%?228rpx?%%;height:%%?60rpx?%%;line-height:%%?60rpx?%%;text-align:center;border:%%?2rpx?%% solid #09bb07;color:#09bb07;margin-right:%%?20rpx?%%}.orientation{white-space:normal;display:inline-block;width:%%?55rpx?%%;height:%%?58rpx?%%;color:#999;text-align:center}.orientation_region{width:%%?180rpx?%%;font-size:%%?20rpx?%%;position:fixed;top:42px;left:%%?0rpx?%%;height:100%}.left_box{position:relative;top:0;left:%%?0rpx?%%;height:100%;width:%%?180rpx?%%}.left_box:after{content:" ";position:absolute;right:0;top:0;width:100%;height:100%;border-right:1px solid #d9d9d9;color:#d9d9d9;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.orientation_city{height:%%?88rpx?%%;line-height:%%?88rpx?%%;color:#000;text-align:center;width:%%?180rpx?%%;font-size:%%?28rpx?%%;overflow:hidden;z-index:99999999999999999999}.clear{clear:both}.orientation_city.active{color:red;font-size:%%?32rpx?%%}.calss2{color:#000}.shop_info_box{width:50%;float:left;padding-top:%%?16rpx?%%}.shop_info_photo{text-align:center}.shop_info_photo wx-image{width:%%?150rpx?%%;height:%%?150rpx?%%}.top_search{height:%%?60rpx?%%;line-height:%%?60rpx?%%;position:fixed;top:42px;width:100%}@code-separator-line:__wxRoute = "yb_shop/pages/caregory/index";__wxRouteBegin = true;
define("yb_shop/pages/caregory/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var app = getApp(),
    core = app.requirejs("core");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    route: "caregory",
    menu: app.tabBar,
    menu_show: false,
    curHdIndex: 0,
    category: {},
    cate_type: 0, //为1时二级分类位置显示商品
    toView: 'inToView0'
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    core.menu_url(k, 2);
  },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    this.getCategory();
    wx.stopPullDownRefresh();
  },
  tabFun: function tabFun(e) {
    console.log(e);
    //获取触发事件组件的dataset属性 
    var _datasetId = core.data(e).id;
    //console.log("----" + _datasetId + "----");
    var curHdIndex = _datasetId;
    console.log(curHdIndex);
    this.setData({
      curHdIndex: curHdIndex
    });
  },
  /**
  * 滑动右侧触发
  */
  scroll: function scroll(e) {
    var that = this,
        total = 0,
        scrollTop = e.detail.scrollTop,
        d = that.data.category;
    //计算高度值
    for (var i = 0; i < d.length; i++) {
      if (that.data.cate_type == 0) {
        //显示二级分类时
        d[i].num = Math.ceil(d[i].cate.length / 3);
      } else {
        //显示商品时
        d[i].num = Math.ceil(d[i].goods_list.length / 3);
      }
      total += 40 + d[i].num * 80; //40右侧一级类别名称高度，80：右侧二级类别名称高度
      if (total > scrollTop) {
        break;
      }
    }
    that.setData({
      scrollTop: scrollTop,
      curHdIndex: i
    });
  },
  scrollToViewFn: function scrollToViewFn(e) {
    var _id = e.target.dataset.id;
    this.setData({
      toView: 'inToView' + _id
    });
  },
  /**
    * 分类函数-获取并更新分类数据
    */
  getCategory: function getCategory() {
    var t = this,
        d = [],
        c = [],
        l = [];
    core.get("goods/GetCate", {}, function (res) {
      if (res.code == 0) {
        d = res.info;
        //判断二级分类是否存在
        d.forEach(function (a) {
          if (a.cate && a.cate.length != 0) {
            l.push(a.cate_id);
          }
        });
        //console.log(l.length)
        //不存在二级分类时显示对应商品
        if (l.length == 0) {
          t.setData({
            cate_type: 1
          });
          core.get("goods/CateGoods", {}, function (res) {
            if (res.code == 0) {
              console.log(22);
              t.setData({
                category: res.info
              });
            } else {
              core.alert(res.msg);
            }
          });
        } else {
          t.setData({
            category: d
          });
        }
      } else {
        core.alert(res.msg);
      }
    });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function onLoad(options) {
    if (options != null && options != undefined) {
      this.setData({
        tabbar_index: options.tabbar_index ? options.tabbar_index : -1
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
    core.setting();
    this.getCategory();
  },
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
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function onReachBottom() {},
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {
    return core.onShareAppMessage();
  }
});
});require("yb_shop/pages/caregory/index.js")@code-separator-line:["div","cover-view","cover-image","scroll-view","view","navigator","image","block","include"]