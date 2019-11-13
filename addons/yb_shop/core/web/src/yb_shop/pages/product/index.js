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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([3, 'clear']);Z([3, 'page_top_class']);Z([3, 'page_search']);Z([3, '/yb_shop/pages/goods/index/index?fromsearch\x3d1\x26key\x3d']);Z([3, 'search_box']);Z([3, '/yb_shop/static/images/icon/search.png']);Z([3, 'width:18px;height:18px;']);Z([3, 'color:#999;font-size:0.8rem;']);Z([3, '商品搜索']);Z([3, 'showFilter']);Z([3, 'page_class_icon']);Z([3, 'aspectFill']);Z([3, '/yb_shop/static/images/icon/app.png']);Z([3, 'page_top_space']);Z([a, [3, 'screen '],[[2,'?:'],[[7],[3, "isFilterShow"]],[1, "in"],[1, ""]]]);Z([3, 'title']);Z([3, '选择分类']);Z([3, 'cate']);Z([3, 'item']);Z([3, 'cate_select']);Z([[2,'?:'],[[2, "=="], [[7],[3, "cate_id"]], [1, ""]],[1, "on"],[1, ""]]);Z([3, '1']);Z([3, '全部']);Z([[7],[3, "category"]]);Z([[2,'?:'],[[2, "=="], [[7],[3, "cate_id1"]], [[6],[[7],[3, "item"]],[3, "cate_id"]]],[1, "on"],[1, ""]]);Z([[6],[[7],[3, "item"]],[3, "cate_id"]]);Z([[7],[3, "index"]]);Z([[6],[[7],[3, "item"]],[3, "level"]]);Z([a, [[6],[[7],[3, "item"]],[3, "cate_name"]]]);Z([[2, ">"], [[6],[[7],[3, "cate2"]],[3, "length"]], [1, 0]]);Z([[7],[3, "cate2"]]);Z([[2,'?:'],[[2, "=="], [[7],[3, "cate_id2"]], [[6],[[7],[3, "item"]],[3, "cate_id"]]],[1, "on"],[1, ""]]);Z([[2, ">"], [[6],[[7],[3, "cate3"]],[3, "length"]], [1, 0]]);Z([[7],[3, "cate3"]]);Z([[2,'?:'],[[2, "=="], [[7],[3, "cate_id3"]], [[6],[[7],[3, "item"]],[3, "cate_id"]]],[1, "on"],[1, ""]]);Z([3, 'btns']);Z([3, 'cancel']);Z([3, '取消']);Z([3, 'confirm']);Z([3, '确认']);Z([3, 'fui-goods-groups block']);Z([[7],[3, "list"]]);Z([3, 'fui-goods-items']);Z([a, [3, '/yb_shop/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "item"]],[3, "goods_id"]]]);Z([3, 'image']);Z([a, [3, 'background-image:url('],[[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]],[3, ')']]);Z([3, 'detail']);Z([3, 'name']);Z([a, [[6],[[7],[3, "item"]],[3, "goods_name"]]]);Z([3, 'goods_desc']);Z([a, [[6],[[7],[3, "item"]],[3, "introduction"]]]);Z([3, 'price']);Z([3, 'text']);Z([a, [3, '￥'],[[6],[[7],[3, "item"]],[3, "price"]]]);Z([[7],[3, "loaded"]]);Z([3, 'fui-loading empty']);Z([3, '没有更多商品了']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oKq = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oLq = _v();var oMq = function(oQq,oPq,oOq,gg){var oNq = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oQq, oPq, gg);var oSq = _m( "cover-image", ["class", 14,"src", 1], oQq, oPq, gg);_(oNq,oSq);var oTq = _m( "cover-view", ["class", 16,"style", 1], oQq, oPq, gg);var oUq = _o(18, oQq, oPq, gg);_(oTq,oUq);_(oNq,oTq);_(oOq, oNq);return oOq;};_2(2, oMq, e, s, gg, oLq, "item", "index", '');_(oKq,oLq);_(r,oKq);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/product/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oWq = _n("view");_r(oWq, 'class', 19, e, s, gg);_(r,oWq);var oXq = _n("view");_r(oXq, 'class', 20, e, s, gg);var oYq = _n("view");_r(oYq, 'class', 21, e, s, gg);var oZq = _m( "navigator", ["hoverClass", 13,"url", 9], e, s, gg);var oaq = _n("view");_r(oaq, 'class', 23, e, s, gg);var obq = _m( "image", ["src", 24,"style", 1], e, s, gg);_(oaq,obq);var ocq = _n("text");_r(ocq, 'style', 26, e, s, gg);var odq = _o(27, e, s, gg);_(ocq,odq);_(oaq,ocq);_(oZq,oaq);_(oYq,oZq);_(oXq,oYq);var oeq = _m( "view", ["bindtap", 28,"class", 1], e, s, gg);var ofq = _m( "image", ["mode", 30,"src", 1], e, s, gg);_(oeq,ofq);_(oXq,oeq);var ogq = _n("view");_r(ogq, 'class', 19, e, s, gg);_(oXq,ogq);_(r,oXq);var ohq = _n("view");_r(ohq, 'class', 32, e, s, gg);_(r,ohq);var oiq = _n("view");_r(oiq, 'class', 33, e, s, gg);var ojq = _n("view");_r(ojq, 'class', 34, e, s, gg);var okq = _o(35, e, s, gg);_(ojq,okq);_(oiq,ojq);var olq = _n("view");_r(olq, 'class', 36, e, s, gg);var omq = _n("view");_r(omq, 'class', 37, e, s, gg);var onq = _n("view");var ooq = _m( "nav", ["data-id", -1,"data-index", -1,"bindtap", 38,"class", 1,"data-level", 2], e, s, gg);var opq = _o(41, e, s, gg);_(ooq,opq);_(onq,ooq);_(omq,onq);var oqq = _v();var orq = function(ovq,ouq,otq,gg){var osq = _n("view");var oxq = _m( "nav", ["bindtap", 38,"class", 5,"data-id", 6,"data-index", 7,"data-level", 8], ovq, ouq, gg);var oyq = _o(47, ovq, ouq, gg);_(oxq,oyq);_(osq,oxq);_(otq, osq);return otq;};_2(42, orq, e, s, gg, oqq, "item", "index", '');_(omq,oqq);_(olq,omq);var ozq = _v();
      if (_o(48, e, s, gg)) {
        ozq.wxVkey = 1;var o_q = _n("view");_r(o_q, 'class', 37, e, s, gg);var oBr = _v();var oCr = function(oGr,oFr,oEr,gg){var oDr = _n("view");var oIr = _m( "nav", ["bindtap", 38,"data-id", 6,"data-index", 7,"data-level", 8,"class", 12], oGr, oFr, gg);var oJr = _o(47, oGr, oFr, gg);_(oIr,oJr);_(oDr,oIr);_(oEr, oDr);return oEr;};_2(49, oCr, e, s, gg, oBr, "item", "index", '');_(o_q,oBr);_(ozq, o_q);
      } _(olq,ozq);var oKr = _v();
      if (_o(51, e, s, gg)) {
        oKr.wxVkey = 1;var oLr = _n("view");_r(oLr, 'class', 37, e, s, gg);var oNr = _v();var oOr = function(oSr,oRr,oQr,gg){var oPr = _n("view");var oUr = _m( "nav", ["bindtap", 38,"data-id", 6,"data-level", 8,"class", 15], oSr, oRr, gg);var oVr = _o(47, oSr, oRr, gg);_(oUr,oVr);_(oPr,oUr);_(oQr, oPr);return oQr;};_2(52, oOr, e, s, gg, oNr, "item", "index", '');_(oLr,oNr);_(oKr, oLr);
      } _(olq,oKr);_(oiq,olq);var oWr = _n("view");_r(oWr, 'class', 54, e, s, gg);var oXr = _m( "view", ["bindtap", 28,"class", 27], e, s, gg);var oYr = _o(56, e, s, gg);_(oXr,oYr);_(oWr,oXr);var oZr = _m( "view", ["bindtap", 57,"class", 0], e, s, gg);var oar = _o(58, e, s, gg);_(oZr,oar);_(oWr,oZr);_(oiq,oWr);_(r,oiq);var obr = _n("view");_r(obr, 'class', 59, e, s, gg);var ocr = _v();var odr = function(ohr,ogr,ofr,gg){var oer = _n("view");_r(oer, 'class', 61, ohr, ogr, gg);var ojr = _m( "navigator", ["hoverClass", 13,"url", 49], ohr, ogr, gg);var okr = _m( "view", ["class", 63,"style", 1], ohr, ogr, gg);_(ojr,okr);_(oer,ojr);var olr = _n("view");_r(olr, 'class', 65, ohr, ogr, gg);var omr = _m( "navigator", ["hoverClass", 13,"url", 49], ohr, ogr, gg);var onr = _n("view");_r(onr, 'class', 66, ohr, ogr, gg);var oor = _o(67, ohr, ogr, gg);_(onr,oor);_(omr,onr);var opr = _n("view");_r(opr, 'class', 68, ohr, ogr, gg);var oqr = _o(69, ohr, ogr, gg);_(opr,oqr);_(omr,opr);_(olr,omr);var orr = _n("view");_r(orr, 'class', 70, ohr, ogr, gg);var osr = _n("view");_r(osr, 'class', 71, ohr, ogr, gg);var otr = _o(72, ohr, ogr, gg);_(osr,otr);_(orr,osr);_(olr,orr);_(oer,olr);_(ofr, oer);return ofr;};_2(60, odr, e, s, gg, ocr, "item", "index", '');_(obr,ocr);_(r,obr);var our = _v();
      if (_o(73, e, s, gg)) {
        our.wxVkey = 1;var ovr = _n("view");_r(ovr, 'class', 74, e, s, gg);var oxr = _n("view");_r(oxr, 'class', 71, e, s, gg);var oyr = _o(75, e, s, gg);_(oxr,oyr);_(ovr,oxr);_(our, ovr);
      } _(r,our);var ozr = _v();
      if (_o(76, e, s, gg)) {
        ozr.wxVkey = 1;var oDs = e_["./yb_shop/pages/product/index.wxml"].j;var oBs = _n("view");_r(oBs, 'style', 77, e, s, gg);_(ozr,oBs);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/product/index.wxml",e,s,ozr,gg);;oDs.pop();
      } _(r,ozr);
    return r;
  };
        e_["./yb_shop/pages/product/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.class_box{margin-top:%%?4rpx?%%;margin-bottom:%%?2rpx?%%}.class_box wx-scroll-view .cate{margin:0 %%?20rpx?%%;display:inline-block;font-size:%%?28rpx?%%;padding:%%?28rpx?%% %%?10rpx?%%}.class_box wx-scroll-view{height:%%?89rpx?%%}.class_box wx-scroll-view .cate.active{border-bottom:3px solid #e02e24;color:#e02e24}.fui-goods-groups{height:auto;overflow:hidden;background:#f9f9f9;justify-content:space-between;display:flex;flex-wrap:wrap;border-top:1px solid #f0efef}.fui-goods-items{box-sizing:border-box;position:relative;height:auto;border-bottom:4px solid #f9f9f9;background:#fff;overflow:hidden;display:-webkit-flex;display:flex}.fui-goods-groups.block .fui-goods-items{width:49.5%;background:0 0;display:block}.fui-goods-groups.block .fui-goods-items .image{width:100%;height:0;overflow:hidden;margin:0;padding-bottom:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fff}.fui-goods-groups.block .fui-goods-items .image{float:none}.fui-goods-groups.block .fui-goods-items .detail{padding:%%?8rpx?%%;overflow:hidden}.fui-goods-groups.block .fui-goods-items .detail .name{height:%%?80rpx?%%;overflow:hidden}.fui-goods-groups.block .fui-goods-items .center-image{max-width:100%;height:0;padding-bottom:100%;background-size:contain}.fui-goods-groups.block .fui-goods-items .detail .name{height:%%?80rpx?%%;overflow:hidden;margin:0 %%?12rpx?%%}.fui-goods-items wx-navigator{height:auto;overflow:hidden}.fui-goods-items .image{height:%%?160rpx?%%;width:%%?160rpx?%%;float:left;background-size:100%;background-repeat:no-repeat;background-position:center center}.fui-goods-items .image wx-img{height:100%;width:100%;display:block}.fui-goods-items .detail{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;background:#fff;padding-left:%%?20rpx?%%}.fui-goods-items .detail .name{height:%%?120rpx?%%;font-size:%%?28rpx?%%;line-height:%%?40rpx?%%;color:#262626}.fui-goods-items .detail .price .text{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;color:#e02e24;margin:0 %%?12rpx?%%;padding-bottom:%%?18rpx?%%}.fui-goods-items .detail .price .minprice{font-size:%%?34rpx?%%}.fui-goods-items .detail .price .productprice{color:#777;font-size:%%?22rpx?%%}.fui-goods-items .detail .price .buy{text-align:center;color:#fff;background:#fe5455;border-radius:%%?40rpx?%%;display:block;font-size:%%?24rpx?%%;padding:0 %%?10rpx?%%}.fui-goods-items .detail .price .buy wx-image{height:%%?32rpx?%%;width:%%?32rpx?%%;vertical-align:middle}.fui-goods-items .detail .price{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:21px}.goods_desc{color:#999;font-size:.7rem;margin:0 %%?12rpx?%%;height:%%?40rpx?%%;overflow:hidden;line-height:%%?40rpx?%%}.screen{background:#fff;width:100%;position:fixed;top:%%?80rpx?%%;left:0;z-index:9998;opacity:0;transition-property:height,opacity,-webkit-transform;transition-property:height,opacity,transform;transition-property:height,opacity,transform,-webkit-transform;transition-duration:.3s;-webkit-transform:translate3d(0,-100%,0) scaleY(0);transform:translate3d(0,-100%,0) scaleY(0)}.page.onlysort .screen{top:%%?65rpx?%%}.screen.in{transition-duration:.3s;opacity:1;height:100vh;-webkit-transform:translate3d(0,0,0) scaleY(1);transform:translate3d(0,0,0) scaleY(1)}.screen:after{content:" ";position:absolute;height:0;bottom:0;left:0;right:0;border-bottom:%%?2rpx?%% solid #e7e7e7;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.screen .attribute .item .btn{padding:0;height:%%?56rpx?%%;line-height:%%?56rpx?%%;margin-bottom:0;background:#e6eaed;color:#454545;font-size:%%?28rpx?%%;border:solid 1px #e6eaed;box-sizing:unset;margin:.8rem .5rem}.screen .attribute .item .btn-danger-o{color:#fd5454;border:.5px solid #fd5454}.screen .attribute .item .btn-danger-oo{color:#fff;background:#e83c3c;border:1px solid #e83c3c}.screen .attribute .item .btn .icon{display:none}.screen .btns{height:2.1rem;position:relative;overflow:hidden;margin-top:%%?0rpx?%%;font-size:%%?32rpx?%%}.screen .btns:before{height:0;content:" ";position:absolute;top:0;left:%%?12rpx?%%;right:%%?12rpx?%%;border-top:%%?2rpx?%% solid #eee;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.screen .btns wx-div{display:inline-block;width:auto;font-size:%%?32rpx?%%;line-height:%%?52rpx?%%;color:#999;padding:0 %%?12rpx?%%;position:relative}.screen .btns:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.screen .btns .cancel{float:left;color:#666;position:relative}.btns .cancel:after{content:" ";position:absolute;right:0;top:0;width:100%;height:100%;border-right:%%?2rpx?%% solid #e7e7e7;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.screen .btns wx-view{width:50%;text-align:center;height:2rem;line-height:2rem}.screen .btns .confirm{float:right;color:#fd5454}.screen .title{padding:0 %%?12rpx?%%;line-height:%%?90rpx?%%;font-size:%%?28rpx?%%;color:#999;position:relative;text-align:center}.screen .title wx-span{float:right;padding-right:%%?12rpx?%%}.screen .cate{height:%%?600rpx?%%;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:%%?12rpx?%% 0;padding:0 %%?12rpx?%%;justify-content:center}.cate .item wx-view{width:100%;float:left}.screen .cate:before{height:0;content:" ";position:absolute;top:%%?-12rpx?%%;left:%%?12rpx?%%;right:%%?12rpx?%%;border-top:1px solid #eee}.screen .cate .item{width:33.333333%;height:inherit;overflow-y:auto;position:relative;-webkit-overflow-scrolling:touch}.screen .cate .item:before{width:0;height:100%;content:" ";position:absolute;top:0;left:0;border-left:1px solid #eee}.screen .cate .item:first-child:before{border:0}.screen .cate .item wx-nav{height:%%?60rpx?%%;line-height:%%?60rpx?%%;font-size:%%?28rpx?%%;text-align:center;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;display:block;background:#f7f7f7;color:#666;border:solid 1px #f3f4f4;margin:.5rem;border-radius:%%?5rpx?%%}.screen .cate .item wx-nav.on{background:#fff;color:#e93d3d;border:solid 1px #e93d3d;border-radius:%%?5rpx?%%}.search_box{text-align:center;height:1.5rem;line-height:1.5rem;padding-bottom:.2rem;padding-top:.1rem;justify-content:center;display:flex}.search_box wx-image{margin-top:%%?14rpx?%%;margin-right:%%?6rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/product/index";__wxRouteBegin = true;
define("yb_shop/pages/product/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    core = t.requirejs("core"),
    e = t.requirejs("check");
Page({
  data: {
    route: "product",
    menu: t.tabBar,
    menu_show: false,
    icons: t.requirejs("icons"),
    page: 1,
    loaded: false,
    list: [],
    cate_id: "",
    cate_id1: "",
    cate_index: "",
    cate_id2: "",
    cate_id3: "",
    category: [],
    cate2: [],
    cate3: []
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    core.menu_url(k, 2);
  },
  onLoad: function onLoad(t) {
    if (t != null && t != undefined) {
      this.setData({
        tabbar_index: t.tabbar_index ? t.tabbar_index : -1
      });
    }
    core.setting();
    this.setData({
      menu: getApp().tabBar
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    var cate_id = t.id || '';
    this.setData({
      cate_id: cate_id
    });
    this.initCategory();
    this.getList();
  },
  onShow: function onShow() {
      showMenu("product");
  },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      page: 1,
      loaded: false,
      list: []
    });
    this.initCategory();
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
   *获取一级分类
   * @return array
   */
  initCategory: function initCategory() {
    var t = this;
    core.get("goods/GetCate", {}, function (a) {
      t.setData({
        category: a.info
      });
    });
  },
  /**
   *获取商品列表
   * @return array
   */
  getList: function getList() {
    var t = this;
    core.get("goods/GoodsList", {
      page: t.data.page,
      cate_id: t.data.cate_id
    }, function (a) {
      if (a.code == 0) {
        if (a.info.length == 0) {
          t.setData({
            loaded: true
          });
          return false;
        }
        var e = {};
        a.info.length > 0 && (e.page = t.data.page + 1, e.list = t.data.list.concat(a.info), a.info.length < 10 && (e.loaded = true)), t.setData(e);
      } else {
        core.alert(a.msg);
      }
    }, true);
  },
  selected: function selected(t) {
    var that = this,
        index = core.pdata(t).index,
        cate_id = core.pdata(t).type;
    that.setData({
      list: [],
      page: 1,
      loaded: false,
      cate_id: cate_id,
      scroll_left: index * 20
    });
    that.getList();
  },
  cate_select: function cate_select(t) {
    var that = this,
        cate = that.data.category,
        data = core.pdata(t),
        e = {};
    console.log(data);
    if (data.level == 1) {
      e['cate_index'] = data.index;
      e['cate_id2'] = '';
      e['cate_id3'] = '';
      e.cate3 = [];
      if (data.id == '') {
        e.cate2 = [];
      } else {
        e.cate2 = cate[data.index].cate;
      }
    }
    if (data.level == 2) {
      e.cate3 = cate[that.data.cate_index]['cate'][data.index].cate;
    }
    e['cate_id'] = data.id;
    e['cate_id' + data.level] = data.id;
    that.setData(e);
  },
  confirm: function confirm() {
    this.setData({
      list: [],
      page: 1,
      loaded: false,
      isFilterShow: false
    });
    this.getList();
  },
  showFilter: function showFilter() {
    this.setData({
      isFilterShow: !this.data.isFilterShow
    });
  },
  //分享
  onShareAppMessage: function onShareAppMessage() {
    return e.onShareAppMessage();
  }
});
});require("yb_shop/pages/product/index.js")@code-separator-line:["div","cover-view","cover-image","view","navigator","image","text","nav","block","include"]