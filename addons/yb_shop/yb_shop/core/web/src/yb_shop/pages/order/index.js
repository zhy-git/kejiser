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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page navbar order']);Z([3, 'fui-tab-scroll']);Z([3, 'true']);Z([3, 'selected']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, ""]],[1, "active"],[1, ""]]]);Z([3, '全部']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "0"]],[1, "active"],[1, ""]]]);Z([3, '0']);Z([3, '待付款']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "1"]],[1, "active"],[1, ""]]]);Z([3, '1']);Z([3, '待发货']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "2"]],[1, "active"],[1, ""]]]);Z([3, '2']);Z([3, '待收货']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "3"]],[1, "active"],[1, ""]]]);Z([3, '3']);Z([3, '已完成']);Z([a, [3, 'item '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, "4"]],[1, "active"],[1, ""]]]);Z([3, '4']);Z([3, '退换货']);Z([[2, "!="], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]);Z([3, 'contain']);Z([[7],[3, "list"]]);Z([3, 'fui-list-group noclick']);Z([a, [3, '/yb_shop/pages/order/detail/index?order_id\x3d'],[[6],[[7],[3, "item"]],[3, "order_id"]]]);Z([3, 'fui-list-group-title']);Z([3, 'order-num']);Z([3, '订单号：\r\n              ']);Z([a, [[6],[[7],[3, "item"]],[3, "order_no"]]]);Z([3, 'statuscss']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 0]]);Z([3, '待付款 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 1]]);Z([3, ' 待发货 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 2]]);Z([3, ' 待收货 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]]);Z([3, ' 已完成 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 4]]);Z([3, ' 退款中 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 5]]);Z([3, ' 已退款 ']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [[2, "-"], [1, 1]]]);Z([3, ' 已取消 ']);Z([3, ' 未知状态 ']);Z([[6],[[7],[3, "item"]],[3, "goods"]]);Z([3, 'val']);Z([3, 'key']);Z([3, 'fui-list goods-info']);Z([3, 'fui-list-media']);Z([3, 'round goods_img']);Z([[6],[[6],[[7],[3, "val"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'fui-list-inner']);Z([3, 'text text-left shop_name']);Z([a, [[6],[[7],[3, "val"]],[3, "goods_name"]]]);Z([3, 'subtitle text-left']);Z([a, [[6],[[7],[3, "val"]],[3, "sku_name"]]]);Z([3, 'num']);Z([3, 'text-right']);Z([3, 'color: #181a19;']);Z([3, '￥\r\n                  ']);Z([a, [[6],[[7],[3, "val"]],[3, "goods_money"]]]);Z([3, 'x\r\n                  ']);Z([a, [[6],[[7],[3, "val"]],[3, "num"]]]);Z([3, 'fui-list list-padding']);Z([3, 'fui-list-inner text-right totle']);Z([3, 'height:46rpx;line-height:46rpx;']);Z([3, '共']);Z([3, 'text-danger']);Z([a, [[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "length"]]]);Z([3, '件商品 实付']);Z([3, '￥']);Z([a, [[6],[[7],[3, "item"]],[3, "pay_money"]]]);Z([[2, "!="], [[7],[3, "status"]], [1, 4]]);Z([3, 'fui-list-inner text-right']);Z([3, 'btn btn-default btn-default-o']);Z([3, 'cancel']);Z([[6],[[7],[3, "item"]],[3, "order_id"]]);Z([[7],[3, "cancel"]]);Z([[7],[3, "cancelindex"]]);Z([3, '\r\n                  取消订单\r\n                ']);Z([3, 'btn btn-danger']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([a, [3, '/yb_shop/pages/order/pay/index?id\x3d'],[[6],[[7],[3, "item"]],[3, "order_id"]]]);Z([3, '\r\n                支付订单\r\n              ']);Z([3, 'delete']);Z([3, '\r\n                删除订单\r\n              ']);Z([3, '\r\n                评价\r\n              ']);Z([3, 'finish']);Z([3, '\r\n                确认收货\r\n              ']);Z([[2, "||"],[[2, "||"],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 1]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 2]]],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]]]);Z([3, 'refund']);Z([3, 'btn btn-default']);Z([3, '\r\n                退款\r\n              ']);Z([[2, "=="], [[7],[3, "total"]], [1, 0]]);Z([3, 'center']);Z([3, 'empty']);Z([3, 'cart_empty']);Z([3, '/yb_shop/static/images/cart_big.png']);Z([3, 'margin-top:38rpx;']);Z([3, 'text-cancel']);Z([3, '暂时没有任何订单']);Z([3, 'redirect']);Z([a, [3, 'width:80%;margin:0.5rem auto;height:90rpx;line-height:90rpx;padding:0;background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([3, '/yb_shop/pages/index/index']);Z([3, '\r\n        到处逛逛吧\r\n      ']);Z([3, 'fui-dot']);Z([3, '/yb_shop/pages/member/index/index?key\x3d1']);Z([3, '/yb_shop/static/images/icon-white/people.png']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oBT = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oCT = _v();var oDT = function(oHT,oGT,oFT,gg){var oET = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oHT, oGT, gg);var oJT = _m( "cover-image", ["class", 14,"src", 1], oHT, oGT, gg);_(oET,oJT);var oKT = _m( "cover-view", ["class", 16,"style", 1], oHT, oGT, gg);var oLT = _o(18, oHT, oGT, gg);_(oKT,oLT);_(oET,oKT);_(oFT, oET);return oFT;};_2(2, oDT, e, s, gg, oCT, "item", "index", '');_(oBT,oCT);_(r,oBT);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/order/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oNT = _n("loading");_r(oNT, 'hidden', 19, e, s, gg);var oOT = _o(20, e, s, gg);_(oNT,oOT);_(r,oNT);var oPT = _v();
      if (_o(19, e, s, gg)) {
        oPT.wxVkey = 1;var oQT = _n("view");_r(oQT, 'class', 21, e, s, gg);var oST = _m( "view", ["class", 22,"scrollX", 1], e, s, gg);var oTT = _m( "view", ["data-type", -1,"bindtap", 24,"class", 1], e, s, gg);var oUT = _o(26, e, s, gg);_(oTT,oUT);_(oST,oTT);var oVT = _m( "view", ["bindtap", 24,"class", 3,"data-type", 4], e, s, gg);var oWT = _o(29, e, s, gg);_(oVT,oWT);_(oST,oVT);var oXT = _m( "view", ["bindtap", 24,"class", 6,"data-type", 7], e, s, gg);var oYT = _o(32, e, s, gg);_(oXT,oYT);_(oST,oXT);var oZT = _m( "view", ["bindtap", 24,"class", 9,"data-type", 10], e, s, gg);var oaT = _o(35, e, s, gg);_(oZT,oaT);_(oST,oZT);var obT = _m( "view", ["bindtap", 24,"class", 12,"data-type", 13], e, s, gg);var ocT = _o(38, e, s, gg);_(obT,ocT);_(oST,obT);var odT = _m( "view", ["bindtap", 24,"class", 15,"data-type", 16], e, s, gg);var oeT = _o(41, e, s, gg);_(odT,oeT);_(oST,odT);_(oQT,oST);var ofT = _v();
      if (_o(42, e, s, gg)) {
        ofT.wxVkey = 1;var ogT = _n("view");_r(ogT, 'class', 43, e, s, gg);var oiT = _v();var ojT = function(onT,omT,olT,gg){var opT = _n("view");_r(opT, 'class', 45, onT, omT, gg);var oqT = _m( "navigator", ["hoverClass", 13,"url", 33], onT, omT, gg);var orT = _n("view");_r(orT, 'class', 47, onT, omT, gg);var osT = _n("view");_r(osT, 'class', 48, onT, omT, gg);var otT = _o(49, onT, omT, gg);_(osT,otT);var ouT = _n("text");var ovT = _o(50, onT, omT, gg);_(ouT,ovT);_(osT,ouT);_(orT,osT);var owT = _n("view");_r(owT, 'class', 51, onT, omT, gg);var oxT = _v();
      if (_o(52, onT, omT, gg)) {
        oxT.wxVkey = 1;var oyT = _n("view");var o_T = _o(53, onT, omT, gg);_(oyT,o_T);_(oxT, oyT);
      }else if (_o(54, onT, omT, gg)) {
        oxT.wxVkey = 2;var oAU = _n("view");var oCU = _o(55, e, s, gg);_(oAU,oCU);_(oxT, oAU);
      }else if (_o(56, onT, omT, gg)) {
        oxT.wxVkey = 3;var oDU = _n("view");var oFU = _o(57, e, s, gg);_(oDU,oFU);_(oxT, oDU);
      }else if (_o(58, onT, omT, gg)) {
        oxT.wxVkey = 4;var oGU = _n("view");var oIU = _o(59, e, s, gg);_(oGU,oIU);_(oxT, oGU);
      }else if (_o(60, onT, omT, gg)) {
        oxT.wxVkey = 5;var oJU = _n("view");var oLU = _o(61, e, s, gg);_(oJU,oLU);_(oxT, oJU);
      }else if (_o(62, onT, omT, gg)) {
        oxT.wxVkey = 6;var oMU = _n("view");var oOU = _o(63, e, s, gg);_(oMU,oOU);_(oxT, oMU);
      }else if (_o(64, onT, omT, gg)) {
        oxT.wxVkey = 7;var oPU = _n("view");var oRU = _o(65, e, s, gg);_(oPU,oRU);_(oxT, oPU);
      }else {
        oxT.wxVkey = 8;var oSU = _n("view");var oUU = _o(66, e, s, gg);_(oSU,oUU);_(oxT, oSU);
      }_(owT,oxT);_(orT,owT);_(oqT,orT);var oVU = _v();var oWU = function(oaU,oZU,oYU,gg){var ocU = _n("view");_r(ocU, 'class', 70, oaU, oZU, gg);var odU = _n("view");_r(odU, 'class', 71, oaU, oZU, gg);var oeU = _m( "image", ["class", 72,"src", 1], oaU, oZU, gg);_(odU,oeU);_(ocU,odU);var ofU = _n("view");_r(ofU, 'class', 74, oaU, oZU, gg);var ogU = _n("view");_r(ogU, 'class', 75, oaU, oZU, gg);var ohU = _o(76, oaU, oZU, gg);_(ogU,ohU);_(ofU,ogU);var oiU = _n("view");_r(oiU, 'class', 77, oaU, oZU, gg);var ojU = _o(78, oaU, oZU, gg);_(oiU,ojU);_(ofU,oiU);_(ocU,ofU);var okU = _n("view");_r(okU, 'class', 79, oaU, oZU, gg);var olU = _m( "view", ["class", 80,"style", 1], oaU, oZU, gg);var omU = _o(82, oaU, oZU, gg);_(olU,omU);var onU = _n("text");var ooU = _o(83, oaU, oZU, gg);_(onU,ooU);_(olU,onU);_(okU,olU);var opU = _n("view");_r(opU, 'class', 80, oaU, oZU, gg);var oqU = _o(84, oaU, oZU, gg);_(opU,oqU);var orU = _n("text");var osU = _o(85, oaU, oZU, gg);_(orU,osU);_(opU,orU);_(okU,opU);_(ocU,okU);_(oYU,ocU);return oYU;};_2(67, oWU, onT, omT, gg, oVU, "val", "key", '');_(oqT,oVU);var otU = _n("view");_r(otU, 'class', 86, onT, omT, gg);var ouU = _m( "text", ["class", 87,"style", 1], onT, omT, gg);var ovU = _n("text");var owU = _o(89, onT, omT, gg);_(ovU,owU);_(ouU,ovU);var oxU = _n("text");_r(oxU, 'class', 90, onT, omT, gg);var oyU = _o(91, onT, omT, gg);_(oxU,oyU);_(ouU,oxU);var ozU = _n("text");var o_U = _o(92, onT, omT, gg);_(ozU,o_U);_(ouU,ozU);var oAV = _n("text");_r(oAV, 'class', 90, onT, omT, gg);var oBV = _n("text");var oCV = _o(93, onT, omT, gg);_(oBV,oCV);_(oAV,oBV);var oDV = _n("text");var oEV = _o(94, onT, omT, gg);_(oDV,oEV);_(oAV,oDV);_(ouU,oAV);_(otU,ouU);_(oqT,otU);_(opT,oqT);var oFV = _v();
      if (_o(95, onT, omT, gg)) {
        oFV.wxVkey = 1;var oGV = _n("view");_r(oGV, 'class', 86, onT, omT, gg);var oIV = _n("view");_r(oIV, 'class', 96, onT, omT, gg);var oKV = _v();
      if (_o(52, onT, omT, gg)) {
        oKV.wxVkey = 1;var oLV = _n("view");_r(oLV, 'class', 97, onT, omT, gg);var oNV = _m( "picker", ["bindchange", 98,"data-orderid", 1,"range", 2,"value", 3], onT, omT, gg);var oOV = _o(102, onT, omT, gg);_(oNV,oOV);_(oLV,oNV);_(oKV, oLV);
      } _(oIV,oKV);var oPV = _v();
      if (_o(52, onT, omT, gg)) {
        oPV.wxVkey = 1;var oQV = _m( "navigator", ["class", 103,"style", 1,"url", 2], onT, omT, gg);var oSV = _o(106, onT, omT, gg);_(oQV,oSV);_(oPV, oQV);
      } _(oIV,oPV);var oTV = _v();
      if (_o(58, onT, omT, gg)) {
        oTV.wxVkey = 1;var oUV = _m( "view", ["data-type", 31,"class", 66,"data-orderid", 68,"bindtap", 76], onT, omT, gg);var oWV = _o(108, onT, omT, gg);_(oUV,oWV);_(oTV, oUV);
      } _(oIV,oTV);var oXV = _v();
      if (_o(58, onT, omT, gg)) {
        oXV.wxVkey = 1;var oYV = _m( "navigator", ["url", -1,"class", 97], onT, omT, gg);var oaV = _o(109, onT, omT, gg);_(oYV,oaV);_(oXV, oYV);
      } _(oIV,oXV);var obV = _v();
      if (_o(56, onT, omT, gg)) {
        obV.wxVkey = 1;var ocV = _m( "view", ["class", 97,"data-orderid", 2,"style", 7,"bindtap", 13], onT, omT, gg);var oeV = _o(111, onT, omT, gg);_(ocV,oeV);_(obV, ocV);
      } _(oIV,obV);var ofV = _v();
      if (_o(112, onT, omT, gg)) {
        ofV.wxVkey = 1;var ogV = _m( "navigator", ["class", 97,"data-orderid", 2,"bindtap", 16,"class", 17], onT, omT, gg);var oiV = _o(115, onT, omT, gg);_(ogV,oiV);_(ofV, ogV);
      } _(oIV,ofV);_(oGV,oIV);_(oFV, oGV);
      } _(opT,oFV);_(olT,opT);return olT;};_2(44, ojT, e, s, gg, oiT, "item", "index", '');_(ogT,oiT);_(ofT, ogT);
      } _(oQT,ofT);var ojV = _v();
      if (_o(116, e, s, gg)) {
        ojV.wxVkey = 1;var okV = _n("view");_r(okV, 'class', 117, e, s, gg);var omV = _n("view");_r(omV, 'class', 118, e, s, gg);var onV = _m( "image", ["class", 119,"src", 1,"style", 2], e, s, gg);_(omV,onV);var ooV = _n("view");_r(ooV, 'class', 122, e, s, gg);var opV = _o(123, e, s, gg);_(ooV,opV);_(omV,ooV);var oqV = _m( "navigator", ["class", 103,"openType", 21,"style", 22,"url", 23], e, s, gg);var orV = _o(127, e, s, gg);_(oqV,orV);_(omV,oqV);_(okV,omV);_(ojV, okV);
      } _(oQT,ojV);var osV = _m( "navigator", ["hoverClass", 13,"openType", 111,"class", 115,"url", 116], e, s, gg);var otV = _n("image");_r(otV, 'src', 130, e, s, gg);_(osV,otV);_(oQT,osV);var ouV = _v();
      if (_o(131, e, s, gg)) {
        ouV.wxVkey = 1;var ozV = e_["./yb_shop/pages/order/index.wxml"].j;var oxV = _n("view");_r(oxV, 'style', 132, e, s, gg);_(ouV,oxV);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/order/index.wxml",e,s,ouV,gg);;ozV.pop();
      } _(oQT,ouV);_(oPT, oQT);
      } _(r,oPT);
    return r;
  };
        e_["./yb_shop/pages/order/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f2f2f2}.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%;height:%%?46rpx?%%;line-height:%%?46rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}wx-body{background:#f7f7f7}.goods-info{width:auto;background:#f9f9f9}.order .contain{margin-top:%%?10rpx?%%}.order .btn{margin:%%?10rpx?%% 0 %%?10rpx?%% %%?20rpx?%%;padding:%%?10rpx?%% %%?15rpx?%%;height:%%?60rpx?%%;line-height:%%?40rpx?%%}.order .empty{font-size:%%?34rpx?%%}.order .empty .btn{padding:%%?15rpx?%% %%?20rpx?%%;height:%%?75rpx?%%;line-height:%%?40rpx?%%;font-size:%%?34rpx?%%}.order .light{height:%%?260rpx?%%;width:%%?240rpx?%%;margin-bottom:%%?55rpx?%%}.order .order-num{-webkit-flex:1;flex:1}.fui-tab-scroll .item{padding:0;width:16.6%;text-align:center}.order .fui-list-inner .subtitle{line-height:%%?44rpx?%%;font-size:%%?24rpx?%%;color:#999}.cart_empty{width:%%?200rpx?%%;height:%%?200rpx?%%}.fui-list-inner .shop_name{max-height:%%?38rpx?%%;overflow:hidden;line-height:%%?40rpx?%%}.order .text-cancel{padding:%%?30rpx?%% %%?0rpx?%%;font-size:%%?40rpx?%%;font-weight:400;color:#010101}.fui-list-inner{height:%%?100rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/order/index";__wxRouteBegin = true;
define("yb_shop/pages/order/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    a = t.requirejs("core");
Page({
  data: {
    route: "order",
    menu: t.tabBar,
    menu_show: false,
    icons: t.requirejs("icons"),
    status: "",
    list: [],
    page: 1,
    cancel: ["我不想买了", "信息填写错误，重新拍", "其他原因"], //订单取消理由
    cancelindex: 0
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    a.menu_url(k, 2);
  },
  onLoad: function onLoad(av) {
    if (av != null && av != undefined) {
      this.setData({
        tabbar_index: av.tabbar_index ? av.tabbar_index : -1
      });
    }
    a.setting();
    "" == t.getCache("userinfo") && wx.redirectTo({
      url: "/yb_shop/pages/index/index"
    }), this.setData({
      options: av,
      status: av.status || "",
      menu: getApp().tabBar,
      config: getApp().config
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    this.get_list();
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
    }), a.get("Order/OrderList", {
      page: t.data.page,
      status: t.data.status,
      uid: getApp().getCache("userinfo").uid
    }, function (e) {
      console.log(e);
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
    a.get("Order/CancelOrder", {
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
    a.get("Order/DelOrder", {
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
      a.get("order/RefundOrder", {
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
    a.get("order/SignOrder", {
      order_id: s,
      buyer_id: getApp().getCache("userinfo").uid
    }, function (e) {
      0 == e.code ? (that.setData({
        page: 1,
        list: []
      }), that.get_list(), a.alert('收货成功！')) : a.alert(e.msg);
    });
  }
});
});require("yb_shop/pages/order/index.js")@code-separator-line:["div","cover-view","cover-image","loading","view","block","navigator","text","image","picker","include"]