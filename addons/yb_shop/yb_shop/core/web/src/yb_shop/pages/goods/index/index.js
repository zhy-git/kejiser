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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([3, 'page header-sort navbar']);Z([3, 'fui-header']);Z([3, 'searchbar']);Z([3, '18']);Z([3, 'search']);Z([3, 'bindSearch']);Z([3, '输入关键字进行搜索']);Z([[6],[[7],[3, "defaults"]],[3, "keywords"]]);Z([[7],[3, "fromsearch"]]);Z([3, 'bindback']);Z([3, 'cancel']);Z([3, '取消']);Z([[2, "!"], [[7],[3, "fromsearch"]]]);Z([3, 'sort']);Z([3, 'bindSort']);Z([a, [3, 'item '],[[2,'?:'],[[2, "||"],[[2, "=="], [[6],[[7],[3, "defaults"]],[3, "order"]], [1, ""]],[[2, "!"], [[6],[[7],[3, "defaults"]],[3, "order"]]]],[1, "on"],[1, ""]]]);Z([3, 'text']);Z([3, '综合']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[6],[[7],[3, "defaults"]],[3, "order"]], [1, "sales"]],[1, "on"],[1, ""]]]);Z([3, 'sales']);Z([3, '销量']);Z([a, [3, 'item item-price '],[[2,'?:'],[[2, "=="], [[6],[[7],[3, "defaults"]],[3, "order"]], [1, "price"]],[1, "on"],[1, ""]]]);Z([3, 'price']);Z([3, '价格\r\n      ']);Z([[2, "=="], [[6],[[7],[3, "defaults"]],[3, "order"]], [1, "price"]]);Z([[2, "=="], [[6],[[7],[3, "defaults"]],[3, "by"]], [1, "asc"]]);Z([3, '/yb_shop/static/images/icon/listsortasc.png']);Z([[2, "=="], [[6],[[7],[3, "defaults"]],[3, "by"]], [1, "desc"]]);Z([3, '/yb_shop/static/images/icon/listsortdesc.png']);Z([[2, "!="], [[6],[[7],[3, "defaults"]],[3, "order"]], [1, "price"]]);Z([3, '/yb_shop/static/images/icon/listsort.png']);Z([3, 'showFilter']);Z([a, [3, 'item '],[[2,'?:'],[[7],[3, "isfilter"]],[1, "on"],[1, ""]]]);Z([3, '筛选\r\n        ']);Z([3, 'icon small']);Z([3, '/yb_shop/static/images/icon/filter.png']);Z([[2, "&&"],[[2, "!"], [[7],[3, "fromsearch"]]],[[2, "!"], [[7],[3, "isFilterShow"]]]]);Z([a, [3, 'fui-goods-group '],[[7],[3, "listmode"]]]);Z([3, 'tpl_list']);Z([[8], "list", [[7],[3, "list"]]]);Z([[7],[3, "loading"]]);Z([3, 'fui-loading']);Z([3, '正在加载...']);Z([[2, "&&"],[[2, "<"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 10]],[[2, ">"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]]);Z([3, 'fui-loading empty']);Z([3, '没有更多了']);Z([[2, "&&"],[[2, "&&"],[[2, "<="], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]],[[2, "!"], [[7],[3, "loading"]]]],[[2, "!"], [[7],[3, "fromsearch"]]]]);Z([3, '暂时没有任何商品']);Z([a, [3, 'screen '],[[2,'?:'],[[7],[3, "isFilterShow"]],[1, "in"],[1, ""]]]);Z([3, 'attribute']);Z([3, 'item on']);Z([3, 'btnFilterBtns']);Z([a, [3, 'btn block '],[[2,'?:'],[[6],[[7],[3, "defaults"]],[3, "isrecommand"]],[1, "btn-danger-oo"],[1, ""]]]);Z([3, 'isrecommand']);Z([3, '推荐商品']);Z([3, 'item']);Z([a, [3, 'btn block '],[[2,'?:'],[[6],[[7],[3, "defaults"]],[3, "isnew"]],[1, "btn-danger-oo"],[1, ""]]]);Z([3, 'isnew']);Z([3, '新品上市\r\n        ']);Z([a, [3, 'btn block '],[[2,'?:'],[[6],[[7],[3, "defaults"]],[3, "ishot"]],[1, "btn-danger-oo"],[1, ""]]]);Z([3, 'ishot']);Z([3, '热卖商品']);Z([3, 'title']);Z([3, '选择分类']);Z([3, 'cate']);Z([[7],[3, "category"]]);Z([3, 'bindCategoryEvents']);Z([[2,'?:'],[[2, "=="], [[6],[[7],[3, "defaults"]],[3, "cate_id"]], [[6],[[7],[3, "item"]],[3, "cate_id"]]],[1, "on"],[1, ""]]);Z([[6],[[7],[3, "item"]],[3, "cate_id"]]);Z([a, [[6],[[7],[3, "item"]],[3, "cate_name"]]]);Z([3, 'btns']);Z([3, 'bindFilterCancel']);Z([3, 'bindFilterSubmit']);Z([3, 'confirm']);Z([3, '确认']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);Z([3, 'fui-mask hide']);Z([[7],[3, "list"]]);Z([3, 'fui-goods-item']);Z([a, [3, '/yb_shop/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "item"]],[3, "goods_id"]]]);Z([3, 'pic_box']);Z([3, 'goods_pic']);Z([3, 'aspectFill']);Z([[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'detail']);Z([3, 'name']);Z([a, [[6],[[7],[3, "item"]],[3, "goods_name"]]]);Z([3, 'goods_desc']);Z([a, [[6],[[7],[3, "item"]],[3, "introduction"]]]);Z([a, [3, '￥'],[[6],[[7],[3, "item"]],[3, "price"]]]);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oaQ = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var obQ = _v();var ocQ = function(ogQ,ofQ,oeQ,gg){var odQ = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], ogQ, ofQ, gg);var oiQ = _m( "cover-image", ["class", 14,"src", 1], ogQ, ofQ, gg);_(odQ,oiQ);var ojQ = _m( "cover-view", ["class", 16,"style", 1], ogQ, ofQ, gg);var okQ = _o(18, ogQ, ofQ, gg);_(ojQ,okQ);_(odQ,ojQ);_(oeQ, odQ);return oeQ;};_2(2, ocQ, e, s, gg, obQ, "item", "index", '');_(oaQ,obQ);_(r,oaQ);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/goods/index/index.wxml"] = {};d_["./yb_shop/pages/goods/index/index.wxml"]["tpl_list"]=function(e,s,r,gg){
    var b='./yb_shop/pages/goods/index/index.wxml:tpl_list'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/goods/index/index.wxml');return}
    p_[b]=true
    try{
      var omQ = _v();var onQ = function(orQ,oqQ,opQ,gg){var otQ = _n("view");_r(otQ, 'class', 98, orQ, oqQ, gg);var ouQ = _m( "navigator", ["hoverClass", 13,"url", 86], orQ, oqQ, gg);var ovQ = _n("view");_r(ovQ, 'class', 100, orQ, oqQ, gg);var owQ = _m( "image", ["class", 101,"mode", 1,"src", 2], orQ, oqQ, gg);_(ovQ,owQ);_(ouQ,ovQ);var oxQ = _n("view");_r(oxQ, 'class', 104, orQ, oqQ, gg);var oyQ = _n("view");_r(oyQ, 'class', 105, orQ, oqQ, gg);var ozQ = _o(106, orQ, oqQ, gg);_(oyQ,ozQ);_(oxQ,oyQ);var o_Q = _n("view");_r(o_Q, 'class', 107, orQ, oqQ, gg);var oAR = _o(108, orQ, oqQ, gg);_(o_Q,oAR);_(oxQ,o_Q);var oBR = _n("view");_r(oBR, 'class', 41, orQ, oqQ, gg);var oCR = _n("view");_r(oCR, 'class', 35, orQ, oqQ, gg);var oDR = _o(109, orQ, oqQ, gg);_(oCR,oDR);_(oBR,oCR);_(oxQ,oBR);_(ouQ,oxQ);_(otQ,ouQ);_(opQ,otQ);return opQ;};_2(97, onQ, e, s, gg, omQ, "item", "index", '');_(r,omQ);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m1=function(e,s,r,gg){
    var oFR = _n("view");_r(oFR, 'class', 19, e, s, gg);var oGR = _n("view");_r(oGR, 'class', 20, e, s, gg);var oHR = _n("view");_r(oHR, 'class', 21, e, s, gg);var oIR = _m( "icon", ["size", 22,"type", 1], e, s, gg);_(oHR,oIR);var oJR = _m( "input", ["name", 23,"bindconfirm", 1,"placeholder", 2,"value", 3], e, s, gg);_(oHR,oJR);_(oGR,oHR);var oKR = _v();
      if (_o(27, e, s, gg)) {
        oKR.wxVkey = 1;var oLR = _m( "view", ["bindtap", 28,"class", 1], e, s, gg);var oNR = _o(30, e, s, gg);_(oLR,oNR);_(oKR, oLR);
      } _(oGR,oKR);_(oFR,oGR);var oOR = _v();
      if (_o(31, e, s, gg)) {
        oOR.wxVkey = 1;var oPR = _n("view");_r(oPR, 'class', 32, e, s, gg);var oRR = _m( "view", ["data-order", -1,"bindtap", 33,"class", 1], e, s, gg);var oSR = _n("view");_r(oSR, 'class', 35, e, s, gg);var oTR = _o(36, e, s, gg);_(oSR,oTR);_(oRR,oSR);_(oPR,oRR);var oUR = _m( "view", ["bindtap", 33,"class", 4,"data-order", 5], e, s, gg);var oVR = _n("view");_r(oVR, 'class', 35, e, s, gg);var oWR = _o(39, e, s, gg);_(oVR,oWR);_(oUR,oVR);_(oPR,oUR);var oXR = _m( "view", ["bindtap", 33,"class", 7,"data-order", 8], e, s, gg);var oYR = _n("view");_r(oYR, 'class', 35, e, s, gg);var oZR = _o(42, e, s, gg);_(oYR,oZR);var oaR = _v();
      if (_o(43, e, s, gg)) {
        oaR.wxVkey = 1;var odR = _v();
      if (_o(44, e, s, gg)) {
        odR.wxVkey = 1;var ogR = _m( "image", ["class", 14,"src", 31], e, s, gg);_(odR,ogR);
      } _(oaR,odR);var ohR = _v();
      if (_o(46, e, s, gg)) {
        ohR.wxVkey = 1;var okR = _m( "image", ["class", 14,"src", 33], e, s, gg);_(ohR,okR);
      } _(oaR,ohR);
      } _(oYR,oaR);var olR = _v();
      if (_o(48, e, s, gg)) {
        olR.wxVkey = 1;var ooR = _m( "image", ["class", 14,"src", 35], e, s, gg);_(olR,ooR);
      } _(oYR,olR);_(oXR,oYR);_(oPR,oXR);var opR = _m( "view", ["bindtap", 50,"class", 1], e, s, gg);var oqR = _n("view");_r(oqR, 'class', 35, e, s, gg);var orR = _o(52, e, s, gg);_(oqR,orR);var osR = _m( "image", ["class", 53,"src", 1], e, s, gg);_(oqR,osR);_(opR,oqR);_(oPR,opR);_(oOR, oPR);
      } _(oFR,oOR);var otR = _v();
      if (_o(55, e, s, gg)) {
        otR.wxVkey = 1;var ouR = _n("view");_r(ouR, 'class', 56, e, s, gg);var owR = _v();
       var oxR = _o(57, e, s, gg);
       var ozR = _gd('./yb_shop/pages/goods/index/index.wxml', oxR, e_, d_);
       if (ozR) {
         var oyR = _1(58,e,s,gg);
         ozR(oyR,oyR,owR, gg);
       } else _w(oxR, './yb_shop/pages/goods/index/index.wxml', 0, 0);_(ouR,owR);_(otR, ouR);
      } _(oFR,otR);var o_R = _v();
      if (_o(59, e, s, gg)) {
        o_R.wxVkey = 1;var oAS = _n("view");_r(oAS, 'class', 60, e, s, gg);var oCS = _n("view");_r(oCS, 'class', 14, e, s, gg);_(oAS,oCS);var oDS = _n("view");_r(oDS, 'class', 35, e, s, gg);var oES = _o(61, e, s, gg);_(oDS,oES);_(oAS,oDS);_(o_R, oAS);
      } _(oFR,o_R);var oFS = _v();
      if (_o(62, e, s, gg)) {
        oFS.wxVkey = 1;var oGS = _n("view");_r(oGS, 'class', 63, e, s, gg);var oIS = _n("view");_r(oIS, 'class', 35, e, s, gg);var oJS = _o(64, e, s, gg);_(oIS,oJS);_(oGS,oIS);_(oFS, oGS);
      } _(oFR,oFS);var oKS = _v();
      if (_o(65, e, s, gg)) {
        oKS.wxVkey = 1;var oLS = _n("view");_r(oLS, 'class', 63, e, s, gg);var oNS = _n("view");_r(oNS, 'class', 35, e, s, gg);var oOS = _o(66, e, s, gg);_(oNS,oOS);_(oLS,oNS);_(oKS, oLS);
      } _(oFR,oKS);var oPS = _n("view");_r(oPS, 'class', 67, e, s, gg);var oQS = _n("view");_r(oQS, 'class', 68, e, s, gg);var oRS = _n("view");_r(oRS, 'class', 69, e, s, gg);var oSS = _m( "view", ["bindtap", 70,"class", 1,"data-type", 2], e, s, gg);var oTS = _o(73, e, s, gg);_(oSS,oTS);_(oRS,oSS);_(oQS,oRS);var oUS = _n("view");_r(oUS, 'class', 74, e, s, gg);var oVS = _m( "view", ["bindtap", 70,"class", 5,"data-type", 6], e, s, gg);var oWS = _o(77, e, s, gg);_(oVS,oWS);_(oUS,oVS);_(oQS,oUS);var oXS = _n("view");_r(oXS, 'class', 74, e, s, gg);var oYS = _m( "view", ["bindtap", 70,"class", 8,"data-type", 9], e, s, gg);var oZS = _o(80, e, s, gg);_(oYS,oZS);_(oXS,oYS);_(oQS,oXS);_(oPS,oQS);var oaS = _n("view");_r(oaS, 'class', 81, e, s, gg);var obS = _o(82, e, s, gg);_(oaS,obS);_(oPS,oaS);var ocS = _n("view");_r(ocS, 'class', 83, e, s, gg);var odS = _n("view");_r(odS, 'class', 74, e, s, gg);var oeS = _v();var ofS = function(ojS,oiS,ohS,gg){var olS = _n("view");var omS = _m( "nav", ["bindtap", 85,"class", 1,"data-id", 2], ojS, oiS, gg);var onS = _o(88, ojS, oiS, gg);_(omS,onS);_(olS,omS);_(ohS,olS);return ohS;};_2(84, ofS, e, s, gg, oeS, "item", "index", '');_(odS,oeS);_(ocS,odS);_(oPS,ocS);var ooS = _n("view");_r(ooS, 'class', 89, e, s, gg);var opS = _m( "view", ["class", 29,"bindtap", 61], e, s, gg);var oqS = _o(30, e, s, gg);_(opS,oqS);_(ooS,opS);var orS = _m( "view", ["bindtap", 91,"class", 1], e, s, gg);var osS = _o(93, e, s, gg);_(orS,osS);_(ooS,orS);_(oPS,ooS);_(oFR,oPS);var otS = _v();
      if (_o(94, e, s, gg)) {
        otS.wxVkey = 1;var oyS = e_["./yb_shop/pages/goods/index/index.wxml"].j;var owS = _n("view");_r(owS, 'style', 95, e, s, gg);_(otS,owS);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/goods/index/index.wxml",e,s,otS,gg);;oyS.pop();
      } _(oFR,otS);_(r,oFR);var ozS = _m( "view", ["bindtap", 50,"class", 46], e, s, gg);_(r,ozS);
    return r;
  };
        e_["./yb_shop/pages/goods/index/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.page.onlysort{padding-top:%%?80rpx?%%}.fui-header{background:#fff;z-index:9999;display:-webkit-flex;display:flex;padding:0 %%?15rpx?%%}.fui-header .searchbar{-webkit-flex:1;flex:1;background:#efefef;border-radius:%%?8rpx?%%;margin-right:%%?15rpx?%%;display:-webkit-flex;display:flex;overflow:hidden;-webkit-align-items:center;align-items:center}.fui-header .searchbar wx-icon{height:%%?28rpx?%%;margin:0 %%?10rpx?%% 0 %%?18rpx?%%;vertical-align:middle}.fui-header .searchbar wx-input{border-radius:%%?8rpx?%%;padding-right:%%?10rpx?%%;width:100%;font-size:%%?26rpx?%%;background:0 0;color:#444;height:%%?60rpx?%%;line-height:%%?60rpx?%%;border:none}.fui-header .icon{padding-right:%%?4rpx?%%}.fui-header .cancel{font-size:%%?28rpx?%%;color:#666}.sort{position:fixed;width:100%;top:%%?88rpx?%%;padding:.4rem 0;background:#fff;-webkit-align-items:center;align-items:center;display:-webkit-flex;display:flex;z-index:9999}.page.onlysort .sort{top:0}.sort:after{content:" ";position:absolute;bottom:0;left:0;right:0;border-bottom:1px solid #e7e7e7}.sort .item{-webkit-flex:1;flex:1;position:relative;text-align:center;font-size:%%?28rpx?%%;border-left:1px solid #e7e7e7;color:#666;vertical-align:middle}.sort .item:first-child{border:0}.sort .item.on .text{color:#fd5454}.sort .item wx-image{vertical-align:middle;height:%%?36rpx?%%;width:%%?36rpx?%%}.sort .item .sorting{width:%%?8rpx?%%;height:%%?8rpx?%%;position:relative}.sort .item .sorting .icon{font-size:11px;position:absolute;-webkit-transform:scale(.6);transform:scale(.6)}.sort .item-price .sorting .icon-sanjiao1{top:%%?6rpx?%%;left:0}.sort .item-price .sorting .icon-sanjiao2{top:%%?-6rpx?%%;left:0}.sort .item-price.desc .sorting .icon-sanjiao1{color:#ef4f4f}.sort .item-price.asc .sorting .icon-sanjiao2{color:#ef4f4f}.screen .attribute{display:flex;justify-content:center}.screen .attribute .item{width:33.33333%}.screen{background:#fff;width:100%;position:fixed;top:%%?150rpx?%%;left:0;z-index:9998;opacity:0;transition-property:height,opacity,-webkit-transform;transition-property:height,opacity,transform;transition-property:height,opacity,transform,-webkit-transform;transition-duration:.3s;-webkit-transform:translate3d(0,-100%,0) scaleY(0);transform:translate3d(0,-100%,0) scaleY(0)}.page.onlysort .screen{top:%%?65rpx?%%}.screen.in{transition-duration:.3s;opacity:1;height:100vh;-webkit-transform:translate3d(0,0,0) scaleY(1);transform:translate3d(0,0,0) scaleY(1)}.screen:after{content:" ";position:absolute;height:0;bottom:0;left:0;right:0;border-bottom:%%?2rpx?%% solid #e7e7e7;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.screen .attribute .item .btn{padding:0;height:%%?56rpx?%%;line-height:%%?56rpx?%%;margin-bottom:0;background:#e6eaed;color:#454545;font-size:%%?28rpx?%%;border:solid 1px #e6eaed;box-sizing:unset;margin:.8rem .5rem}.screen .attribute .item .btn-danger-o{color:#fd5454;border:.5px solid #fd5454}.screen .attribute .item .btn-danger-oo{color:#fff;background:#e83c3c;border:1px solid #e83c3c}.screen .attribute .item .btn .icon{display:none}.screen .btns{height:2.1rem;position:relative;overflow:hidden;margin-top:%%?0rpx?%%;font-size:%%?32rpx?%%}.screen .btns:before{height:0;content:" ";position:absolute;top:0;left:%%?12rpx?%%;right:%%?12rpx?%%;border-top:%%?2rpx?%% solid #eee;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.screen .btns wx-div{display:inline-block;width:auto;font-size:%%?32rpx?%%;line-height:%%?52rpx?%%;color:#999;padding:0 %%?12rpx?%%;position:relative}.screen .btns:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.screen .btns .cancel{float:left;color:#666;position:relative}.btns .cancel:after{content:" ";position:absolute;right:0;top:0;width:100%;height:100%;border-right:%%?2rpx?%% solid #e7e7e7;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.screen .btns wx-view{width:50%;text-align:center;height:2rem;line-height:2rem}.screen .btns .confirm{float:right;color:#fd5454}.screen .title{padding:0 %%?12rpx?%%;line-height:%%?90rpx?%%;font-size:%%?28rpx?%%;color:#999;position:relative;text-align:center}.screen .title wx-span{float:right;padding-right:%%?12rpx?%%}.screen .cate{height:%%?600rpx?%%;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:%%?12rpx?%% 0;padding:0 %%?12rpx?%%;justify-content:center}.cate .item wx-view{width:100%;float:left}.screen .cate:before{height:0;content:" ";position:absolute;top:%%?-12rpx?%%;left:%%?12rpx?%%;right:%%?12rpx?%%;border-top:1px solid #eee}.screen .cate .item{width:33.333333%;height:inherit;overflow-y:auto;position:relative;-webkit-overflow-scrolling:touch}.screen .cate .item:before{width:0;height:100%;content:" ";position:absolute;top:0;left:0;border-left:1px solid #eee}.screen .cate .item:first-child:before{border:0}.screen .cate .item wx-nav{height:%%?60rpx?%%;line-height:%%?60rpx?%%;font-size:%%?28rpx?%%;text-align:center;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;display:block;background:#f7f7f7;color:#666;border:solid 1px #f3f4f4;margin:.5rem;border-radius:%%?5rpx?%%}.screen .cate .item wx-nav.on{background:#fff;color:#e93d3d;border:solid 1px #e93d3d;border-radius:%%?5rpx?%%}.records{position:fixed;background:#fff;top:%%?88rpx?%%;bottom:0;left:0;right:0;z-index:9999;padding:0 %%?20rpx?%% %%?20rpx?%%}.records .records-title{font-size:%%?30rpx?%%;line-height:%%?60rpx?%%;color:#333;margin-top:%%?20rpx?%%}.records .records-title .pull-right{font-size:%%?25rpx?%%;line-height:%%?60rpx?%%;height:%%?60rpx?%%;padding:0 %%?10rpx?%%}.records .navs wx-nav{background:#efefef;font-size:%%?25rpx?%%;padding:%%?8rpx?%% %%?16rpx?%%;margin:%%?10rpx?%% %%?16rpx?%% 0 0;border-radius:%%?5rpx?%%;color:#333}.goods_desc{color:#999;font-size:.7rem;margin:0 %%?12rpx?%%;height:%%?34rpx?%%;overflow:hidden}.price .text{font-size:%%?38rpx?%%}.fui-goods-item wx-navigator{height:11rem;width:100%}.fui-goods-group.block .fui-goods-item .detail{float:none}.goods_pic{height:11rem;width:90%;margin:0 auto}.fui-goods-group.block .fui-goods-item{height:16.2rem}.fui-goods-item .detail .price{right:1rem}.pic_box{text-align:center}.fui-goods-group.block .fui-goods-item:first-child{border-top:0}.fui-goods-group.block .fui-goods-item .detail{padding:%%?8rpx?%% %%?40rpx?%%}.fui-goods-group.block .fui-goods-item{border-bottom:0}.fui-goods-group.block .fui-goods-item .detail .name{max-height:%%?50rpx?%%;line-height:%%?50rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/goods/index/index";__wxRouteBegin = true;
define("yb_shop/pages/goods/index/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    core = t.requirejs("core"),
    e = t.requirejs("check");
Page({
  data: {
    route: "goods_index",
    menu: t.tabBar,
    menu_show: false,
    icons: t.requirejs("icons"),
    page: 1,
    list: [],
    defaults: {
      keywords: "",
      isrecommand: "",
      ishot: "",
      isnew: "",
      cate_id: "",
      order: "",
      by: "desc"
    },
    listmode: "block", //并列展示，为空时列表展示
    fromsearch: false, //控制取消按钮
    isFilterShow: false, //筛选类目
    params: []
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    core.menu_url(k, 2);
  },
  onLoad: function onLoad(o) {
    if (o != null && o != undefined) {
      this.setData({
        tabbar_index: o.tabbar_index ? o.tabbar_index : -1
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
    var a = this.data.defaults;
    a.keywords = o.key || '';
    a.cate_id = o.cate || '';
    this.setData({
      filterBtns: o,
      fromsearch: o.fromsearch || false,
      defaults: o
    });
    this.initCategory();
    this.data.fromsearch || this.getList();
  },
  onShow: function onShow() {},
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
   *获取一级分类
   * @return array
   */
  initCategory: function initCategory() {
    var t = this;
    core.get("goods/GetCate", {}, function (a) {
      console.log(a);
      t.setData({
        category: a.info
      });
    });
  },
  /**
   *获取商品列表
   * @param  keywords  搜索关键字
   * @param isrecommand 是否推荐
   * @param   ishot  是否热销
   * @param  isnew   是否新品
   * @param  cate_id  类型id
   * @param   order 排序字段
   * @param   by:  倒序/顺序
   * @return array
   */
  getList: function getList() {
    var t = this;
    t.setData({
      loading: true
    }), t.data.defaults.page = t.data.page, core.get("goods/GoodsList", t.data.defaults, function (a) {
      if (a.code == 0) {
        if (a.info.length == 0) {
          t.setData({
            loading: false
          });
          return false;
        }
        var e = {
          loading: false
        };
        a.info.length > 0 && (e.page = t.data.page + 1, e.list = t.data.list.concat(a.info), a.info.length < 10 && (e.loaded = true)), t.setData(e);
      } else {
        core.alert(a.msg);
      }
    });
  },
  /**
   *搜索查询
   * @param  keywords  搜索关键字
   * @return array
   */
  bindSearch: function bindSearch(t) {
    this.setData({
      list: [], //清空已存在商品列表
      loading: true
    });
    var a = e.trim(t.detail.value),
        s = this.data.defaults;
    //console.log(a)
    "" != a ? (s.keywords = a, this.setData({
      page: 1,
      defaults: s,
      fromsearch: false
    }), this.getList()) : (s.keywords = "", this.setData({
      page: 1,
      defaults: s,
      fromsearch: false
    }), this.getList());
  },
  /**
   *提交筛选内容
   */
  bindFilterSubmit: function bindFilterSubmit() {
    var t = this.data.params,
        a = this.data.filterBtns;
    for (var s in a) {
      t[s] = a[s];
    }e.isEmptyObject(a) && (t = this.data.defaults), t.cate = this.data.category_selected, this.setData({
      page: 1,
      params: t,
      isFilterShow: false,
      filterBtns: a,
      list: [],
      loading: true
    });
    //console.log(t)
    this.getList();
  },
  /**
   *按综合、热销，价格排序
   */
  bindSort: function bindSort(t) {
    var a = core.pdata(t).order,
        e = this.data.defaults;
    // console.log(t)
    if ("" == a) {
      if (e.order == a) return;
      e.order = "";
    } else if ("price" == a) {
      e.order == a ? "desc" == e.by ? e.by = "asc" : e.by = "desc" : e.by = "asc", e.order = a;
    } else if ("sales" == a) {
      if (e.order == a) return;
      e.order = "sales", e.by = "desc";
    }
    this.setData({
      defaults: e,
      page: 1,
      list: [],
      loading: true
    }),
    // console.log(e)
    this.getList();
  },
  /**
   *筛选中选择商品类别
   */
  bindCategoryEvents: function bindCategoryEvents(t) {
    var a = t.target.dataset.id;
    //console.log(a)
    this.setData({
      "defaults.cate_id": a
    });
  },
  /**
    *提交筛选
    */
  btnFilterBtns: function btnFilterBtns(t) {
    var a = t.target.dataset.type,
        s = this.data.defaults;
    if (a) {
      //var s = this.data.filterBtns;
      s.hasOwnProperty(a) || (s[a] = ""), s[a] ? s[a] = '' : s[a] = 1;
      this.setData({
        defaults: s
      });
    }
  },
  /**
   *隐藏筛选
   */
  bindFilterCancel: function bindFilterCancel() {
    this.setData({
      isFilterShow: false
    });
  },
  /**
   *展开筛选
   */
  showFilter: function showFilter() {
    this.setData({
      isFilterShow: !this.data.isFilterShow
    });
  },
  /**
   *返回
   */
  bindback: function bindback() {
    wx.navigateBack();
  }
});
});require("yb_shop/pages/goods/index/index.js")@code-separator-line:["div","cover-view","cover-image","view","icon","input","block","image","template","nav","include","navigator"]