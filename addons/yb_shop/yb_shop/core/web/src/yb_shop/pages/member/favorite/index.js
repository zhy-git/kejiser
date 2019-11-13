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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page footer']);Z([[7],[3, "list"]]);Z([3, 'del_item']);Z([3, 'touchE']);Z([3, 'touchM']);Z([3, 'touchS']);Z([3, 'inner txt']);Z([[7],[3, "index"]]);Z([[6],[[7],[3, "item"]],[3, "txtStyle"]]);Z([3, 'fui-list-group']);Z([3, 'itemClick']);Z([3, 'fui-list']);Z([[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "goods_id"]]);Z([[6],[[7],[3, "item"]],[3, "log_id"]]);Z([[7],[3, "isedit"]]);Z([3, 'fui-list-media']);Z([[2,'?:'],[[6],[[7],[3, "checkObj"]],[[6],[[7],[3, "item"]],[3, "log_id"]]],[1, true],[1, ""]]);Z([3, 'zoom-80']);Z([3, '#ef4f4f']);Z([3, 'fui-list-media02']);Z([3, 'round']);Z([[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'fui-list-inner']);Z([3, 'row']);Z([3, 'subtitle']);Z([a, [[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "goods_name"]]]);Z([3, 'text-danger']);Z([3, 'font-size:30rpx;']);Z([a, [3, '￥'],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "price"]]]);Z([3, 'text-delete']);Z([3, 'padding-left: 10rpx;']);Z([3, 'delItem']);Z([3, 'inner del']);Z([[7],[3, "loading"]]);Z([3, 'fui-loading']);Z([3, 'text']);Z([3, 'background:#f2f2f2;']);Z([[2, "&&"],[[7],[3, "loaded"]],[[2, ">"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]]);Z([3, 'fui-loading empty']);Z([3, '没有更多了']);Z([[2, "=="], [[7],[3, "list"]], [1, ""]]);Z([3, '没有数据']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oba = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oca = _v();var oda = function(oha,oga,ofa,gg){var oea = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oha, oga, gg);var oja = _m( "cover-image", ["class", 14,"src", 1], oha, oga, gg);_(oea,oja);var oka = _m( "cover-view", ["class", 16,"style", 1], oha, oga, gg);var ola = _o(18, oha, oga, gg);_(oka,ola);_(oea,oka);_(ofa, oea);return ofa;};_2(2, oda, e, s, gg, oca, "item", "index", '');_(oba,oca);_(r,oba);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/member/favorite/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var ona = _n("loading");_r(ona, 'hidden', 19, e, s, gg);var ooa = _o(20, e, s, gg);_(ona,ooa);_(r,ona);var opa = _v();
      if (_o(19, e, s, gg)) {
        opa.wxVkey = 1;var oqa = _n("view");_r(oqa, 'class', 21, e, s, gg);var ota = _v();var oua = function(oya,oxa,owa,gg){var o_a = _n("view");_r(o_a, 'class', 23, oya, oxa, gg);var oAb = _m( "view", ["bindtouchend", 24,"bindtouchmove", 1,"bindtouchstart", 2,"class", 3,"data-index", 4,"style", 5], oya, oxa, gg);var oBb = _n("view");_r(oBb, 'class', 30, oya, oxa, gg);var oCb = _m( "label", ["bindtap", 31,"class", 1,"data-goodsid", 2,"data-id", 3], oya, oxa, gg);var oDb = _v();
      if (_o(35, oya, oxa, gg)) {
        oDb.wxVkey = 1;var oEb = _n("view");_r(oEb, 'class', 36, oya, oxa, gg);var oGb = _m( "radio", ["checked", 37,"class", 1,"color", 2], oya, oxa, gg);_(oEb,oGb);_(oDb, oEb);
      } _(oCb,oDb);var oHb = _n("view");_r(oHb, 'class', 40, oya, oxa, gg);var oIb = _m( "image", ["class", 41,"src", 1], oya, oxa, gg);_(oHb,oIb);_(oCb,oHb);var oJb = _n("view");_r(oJb, 'class', 43, oya, oxa, gg);var oKb = _n("view");_r(oKb, 'class', 44, oya, oxa, gg);var oLb = _n("view");_r(oLb, 'class', 45, oya, oxa, gg);var oMb = _o(46, oya, oxa, gg);_(oLb,oMb);_(oKb,oLb);_(oJb,oKb);var oNb = _n("view");_r(oNb, 'class', 45, oya, oxa, gg);var oOb = _m( "text", ["class", 47,"style", 1], oya, oxa, gg);var oPb = _o(49, oya, oxa, gg);_(oOb,oPb);_(oNb,oOb);var oQb = _m( "text", ["class", 50,"style", 1], oya, oxa, gg);_(oNb,oQb);_(oJb,oNb);_(oCb,oJb);_(oBb,oCb);_(oAb,oBb);_(o_a,oAb);var oRb = _m( "view", ["data-index", 28,"data-id", 6,"bindtap", 24,"class", 25], oya, oxa, gg);_(o_a,oRb);_(owa,o_a);return owa;};_2(22, oua, e, s, gg, ota, "item", "index", '');_(oqa,ota);var oSb = _v();
      if (_o(54, e, s, gg)) {
        oSb.wxVkey = 1;var oTb = _n("view");_r(oTb, 'class', 55, e, s, gg);var oVb = _n("view");_r(oVb, 'class', 14, e, s, gg);_(oTb,oVb);var oWb = _m( "view", ["class", 56,"style", 1], e, s, gg);var oXb = _o(20, e, s, gg);_(oWb,oXb);_(oTb,oWb);_(oSb, oTb);
      } _(oqa,oSb);var oYb = _v();
      if (_o(58, e, s, gg)) {
        oYb.wxVkey = 1;var oZb = _n("view");_r(oZb, 'class', 59, e, s, gg);var obb = _m( "view", ["class", 56,"style", 1], e, s, gg);var ocb = _o(60, e, s, gg);_(obb,ocb);_(oZb,obb);_(oYb, oZb);
      } _(oqa,oYb);var odb = _v();
      if (_o(61, e, s, gg)) {
        odb.wxVkey = 1;var oeb = _n("view");_r(oeb, 'class', 59, e, s, gg);var ogb = _m( "view", ["class", 56,"style", 1], e, s, gg);var ohb = _o(62, e, s, gg);_(ogb,ohb);_(oeb,ogb);_(odb, oeb);
      } _(oqa,odb);var oib = _v();
      if (_o(63, e, s, gg)) {
        oib.wxVkey = 1;var onb = e_["./yb_shop/pages/member/favorite/index.wxml"].j;var olb = _n("view");_r(olb, 'style', 64, e, s, gg);_(oib,olb);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/member/favorite/index.wxml",e,s,oib,gg);;onb.pop();
      } _(oqa,oib);_(opa, oqa);
      } _(r,opa);
    return r;
  };
        e_["./yb_shop/pages/member/favorite/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f2f2f2}.fui-list-inner .subtitle{font-size:%%?30rpx?%%;color:#444;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;line-height:%%?32rpx?%%}.fui-list-media02 wx-image{width:%%?150rpx?%%;height:%%?150rpx?%%;margin-right:%%?20rpx?%%;margin-left:%%?0rpx?%%}.del_item{position:relative;height:%%?220rpx?%%;overflow:hidden}.inner.del{width:%%?160rpx?%%;text-align:center;z-index:4;right:0;color:#fff;height:%%?206rpx?%%;top:%%?5rpx?%%;line-height:%%?206rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/yigou/cart_del_icon.png) #e64340 no-repeat center center;background-size:%%?50rpx?%% %%?50rpx?%%;border-top:%%?16rpx?%% solid #f2f2f2}.inner{position:absolute;top:0}.inner.txt{width:100%;z-index:5;transition:left .2s ease-in-out;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.fui-list:before{content:" ";position:absolute;top:0;right:%%?20rpx?%%;height:0;border-top:%%?0rpx?%% solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.5);transform:scaleY(.5);left:%%?20rpx?%%}.fui-list-group:not(.fui-list-group-o):after{content:" ";position:absolute;left:0;bottom:0;width:100%;height:0;border-top:%%?0rpx?%% solid #d9d9d9;color:#d9d9d9;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.fui-list-group:not(.fui-list-group-o):before{content:" ";position:absolute;left:0;top:0;width:100%;height:0;border-top:%%?0rpx?%% solid #d9d9d9;color:#d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.5);transform:scaleY(.5)}@code-separator-line:__wxRoute = "yb_shop/pages/member/favorite/index";__wxRouteBegin = true;
define("yb_shop/pages/member/favorite/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    e = t.requirejs("core");
Page({
  data: {
    route: "member_favorite",
    menu: t.tabBar,
    menu_show: false,
    icons: t.requirejs("icons"),
    page: 1,
    loading: false,
    isedit: false, //默认非编辑状态
    isCheckAll: false, //默认非全选状态
    checkNum: 0, //为0时删除无效
    loaded: false,
    list: [],
    delBtnWidth: 80 //删除按钮宽度单位（rpx）
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    e.menu_url(k, 2);
  },
  onLoad: function onLoad(options) {
    if (options != null && options != undefined) {
      this.setData({
        tabbar_index: options.tabbar_index ? options.tabbar_index : -1
      });
    }
    e.setting();
    this.setData({
      menu: getApp().tabBar
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    this.getList();
  },
  /**
  *上拉加载
  */
  onReachBottom: function onReachBottom() {
    this.data.loaded || this.getList();
  },
  /**
   *下拉刷新
   */
  onPullDownRefresh: function onPullDownRefresh() {
    this.getList();
    wx.stopPullDownRefresh();
  },
  /**
   *收藏商品列表
   * @param goodsid
   * @param checkObj bool值
   * @return bool
   */
  getList: function getList() {
    var t = this;
    t.setData({
      loading: true
    }), e.get("user/GetFavorites", {
      page: t.data.page,
      uid: getApp().getCache("userinfo").uid
    }, function (e) {
      var a = {
        loading: false,
        show: true
      };
      e.info.length > 0 && (a.page = t.data.page + 1, a.list = t.data.list.concat(e.info), e.info.length < 10 && (a.loaded = true)), //concat() 方法用于连接两个或多个数组。
      t.setData(a);
    });
  },
  //点击按钮
  btnClick: function btnClick(t) {
    var a = this,
        i = e.pdata(t).action;
    if (i == 'edit') {
      var s = {};
      for (var c in this.data.list) {
        s[this.data.list[c].log_id] = false;
      }
      //console.log(s)
      a.setData({
        isedit: true,
        checkObj: s, //每个商品默认非选中状态
        isCheckAll: false //全选
      });
    } else if ("delete" == i) {
      var s = a.data.checkObj,
          l = [];
      for (var c in s) {
        s[c] && l.push(c);
      } //push() 方法可把它的参数顺序添加到 arrayObject 的尾部
      if (l.length < 1) return;
      l = l.toString();
      e.confirm("删除后不可恢复，确定要删除吗？", function () {
        e.get("goods/DelFavorites", {
          log_id: l
        }, function (t) {
          0 == t.code ? (e.success('删除成功'), a.setData({
            isedit: false,
            checkNum: 0,
            page: 1,
            list: []
          }), a.getList()) : (e.alert(t.msg), setTimeout(function () {
            wx.navigateBack();
          }, 1e3));
        });
      });
    } else "finish" == i && a.setData({
      isedit: false,
      checkNum: 0
    });
  },
  //点击全选
  checkAllClick: function checkAllClick(t) {
    var t = !this.data.isCheckAll,
        e = this.data.checkObj,
        a = {
      isCheckAll: t,
      checkObj: e
    };
    for (var i in e) {
      a.checkObj[i] = t;
    }a.checkNum = t ? this.data.list.length : 0, this.setData(a);
  },
  //点击单选
  itemClick: function itemClick(t) {
    var a = this,
        i = e.pdata(t).id,
        s = e.pdata(t).goodsid;
    if (a.data.isedit) {
      //编辑时
      var c = a.data.checkObj,
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
        isCheckAll: o,
        checkNum: l
      });
    } else wx.navigateTo({
      url: "/yb_shop/pages/goods/detail/index?id=" + s
    });
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
    console.log(e);
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
        id = e.data(i).id; //获取列表中要删除项的id
    e.confirm("是否确认删除该商品?", function () {
      e.get("goods/DelFavorites", {
        log_id: id
      }, function (t) {
        0 == t.code ? (e.success('删除成功'), setTimeout(function () {
          that.setData({
            isedit: false,
            checkNum: 0,
            page: 1,
            list: []
          }), that.getList();
        }, 1e3)) : e.alert(t.msg);
      });
    });
  }
});
});require("yb_shop/pages/member/favorite/index.js")@code-separator-line:["div","cover-view","cover-image","loading","view","block","label","radio","image","text","include"]