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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, 'page_top']);Z([[2, "!="], [[6],[[7],[3, "info"]],[3, "logo"]], [1, false]]);Z([[6],[[7],[3, "info"]],[3, "logo"]]);Z([3, 'com_name_cn']);Z([a, [[6],[[7],[3, "info"]],[3, "name"]]]);Z([3, 'com_name_en']);Z([a, [[6],[[7],[3, "info"]],[3, "english_name"]]]);Z([3, 'en_tit']);Z([3, 'CONTACT US']);Z([3, 'contact_box']);Z([3, 'calling']);Z([3, 'contact_li']);Z([[6],[[7],[3, "info"]],[3, "phone"]]);Z([3, 'li_left']);Z([3, '/yb_shop/static/images/phone_icon.png']);Z([3, 'li_right']);Z([3, 's_tit']);Z([3, '手机/微信']);Z([3, 'b_tit']);Z([3, 'clear']);Z([3, '/yb_shop/static/images/qq_icon.png']);Z([3, 'QQ号码']);Z([a, [[6],[[7],[3, "info"]],[3, "qq"]]]);Z([3, 'navigate']);Z([3, '/yb_shop/static/images/nav_icon.png']);Z([3, '公司地址']);Z([a, [[6],[[7],[3, "info"]],[3, "address"]]]);Z([3, 'contact_btn']);Z([a, [3, 'background:'],[[6],[[7],[3, "config"]],[3, "background"]],[3, ';color:'],[[6],[[7],[3, "config"]],[3, "font_color"]],[3, ';border:1px solid '],[[6],[[7],[3, "config"]],[3, "font_color"]],[3, ' ']]);Z([3, 'btn_box']);Z([3, 'weapp']);Z([3, '30']);Z([3, 'default-light']);Z([3, '立即咨询客服']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var opm = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oqm = _v();var orm = function(ovm,oum,otm,gg){var osm = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], ovm, oum, gg);var oxm = _m( "cover-image", ["class", 14,"src", 1], ovm, oum, gg);_(osm,oxm);var oym = _m( "cover-view", ["class", 16,"style", 1], ovm, oum, gg);var ozm = _o(18, ovm, oum, gg);_(oym,ozm);_(osm,oym);_(otm, osm);return otm;};_2(2, orm, e, s, gg, oqm, "item", "index", '');_(opm,oqm);_(r,opm);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/contact/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oAn = _v();
      if (_o(19, e, s, gg)) {
        oAn.wxVkey = 1;var oDn = _n("view");_r(oDn, 'class', 20, e, s, gg);var oEn = _v();
      if (_o(21, e, s, gg)) {
        oEn.wxVkey = 1;var oFn = _n("image");_r(oFn, 'src', 22, e, s, gg);_(oEn, oFn);
      } _(oDn,oEn);var oHn = _n("text");_r(oHn, 'class', 23, e, s, gg);var oIn = _o(24, e, s, gg);_(oHn,oIn);_(oDn,oHn);var oJn = _n("text");_r(oJn, 'class', 25, e, s, gg);var oKn = _o(26, e, s, gg);_(oJn,oKn);_(oDn,oJn);_(oAn,oDn);var oLn = _n("view");_r(oLn, 'class', 27, e, s, gg);var oMn = _n("text");var oNn = _o(28, e, s, gg);_(oMn,oNn);_(oLn,oMn);_(oAn,oLn);var oOn = _n("view");_r(oOn, 'class', 29, e, s, gg);var oPn = _m( "view", ["bindtap", 30,"class", 1,"data-phone", 2], e, s, gg);var oQn = _n("view");_r(oQn, 'class', 33, e, s, gg);var oRn = _n("image");_r(oRn, 'src', 34, e, s, gg);_(oQn,oRn);_(oPn,oQn);var oSn = _n("view");_r(oSn, 'class', 35, e, s, gg);var oTn = _n("text");_r(oTn, 'class', 36, e, s, gg);var oUn = _o(37, e, s, gg);_(oTn,oUn);_(oSn,oTn);var oVn = _n("text");_r(oVn, 'class', 38, e, s, gg);var oWn = _o(32, e, s, gg);_(oVn,oWn);_(oSn,oVn);_(oPn,oSn);var oXn = _n("view");_r(oXn, 'class', 39, e, s, gg);_(oPn,oXn);_(oOn,oPn);var oYn = _n("view");_r(oYn, 'class', 31, e, s, gg);var oZn = _n("view");_r(oZn, 'class', 33, e, s, gg);var oan = _n("image");_r(oan, 'src', 40, e, s, gg);_(oZn,oan);_(oYn,oZn);var obn = _n("view");_r(obn, 'class', 35, e, s, gg);var ocn = _n("text");_r(ocn, 'class', 36, e, s, gg);var odn = _o(41, e, s, gg);_(ocn,odn);_(obn,ocn);var oen = _n("text");_r(oen, 'class', 38, e, s, gg);var ofn = _o(42, e, s, gg);_(oen,ofn);_(obn,oen);_(oYn,obn);var ogn = _n("view");_r(ogn, 'class', 39, e, s, gg);_(oYn,ogn);_(oOn,oYn);var ohn = _m( "view", ["class", 31,"bindtap", 12], e, s, gg);var oin = _n("view");_r(oin, 'class', 33, e, s, gg);var ojn = _n("image");_r(ojn, 'src', 44, e, s, gg);_(oin,ojn);_(ohn,oin);var okn = _n("view");_r(okn, 'class', 35, e, s, gg);var oln = _n("text");_r(oln, 'class', 36, e, s, gg);var omn = _o(45, e, s, gg);_(oln,omn);_(okn,oln);var onn = _n("text");_r(onn, 'class', 38, e, s, gg);var oon = _o(46, e, s, gg);_(onn,oon);_(okn,onn);_(ohn,okn);var opn = _n("view");_r(opn, 'class', 39, e, s, gg);_(ohn,opn);_(oOn,ohn);_(oAn,oOn);var oqn = _m( "view", ["class", 47,"style", 1], e, s, gg);var orn = _n("view");_r(orn, 'class', 49, e, s, gg);var osn = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,osn);var otn = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,otn);var oun = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oun);var ovn = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,ovn);var own = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,own);var oxn = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oxn);var oyn = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oyn);var ozn = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,ozn);var o_n = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,o_n);var oAo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oAo);var oBo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oBo);var oCo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oCo);var oDo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oDo);var oEo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oEo);var oFo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oFo);var oGo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oGo);var oHo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oHo);var oIo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oIo);var oJo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oJo);var oKo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oKo);var oLo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oLo);var oMo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oMo);var oNo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oNo);var oOo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oOo);var oPo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oPo);var oQo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oQo);var oRo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oRo);var oSo = _m( "contact-button", ["sessionFrom", 50,"size", 1,"type", 2], e, s, gg);_(orn,oSo);_(oqn,orn);var oTo = _o(53, e, s, gg);_(oqn,oTo);_(oAn,oqn);var oUo = _v();
      if (_o(54, e, s, gg)) {
        oUo.wxVkey = 1;var oZo = e_["./yb_shop/pages/contact/index.wxml"].j;var oXo = _n("view");_r(oXo, 'style', 55, e, s, gg);_(oUo,oXo);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/contact/index.wxml",e,s,oUo,gg);;oZo.pop();
      } _(oAn,oUo);
      } _(r,oAn);
    return r;
  };
        e_["./yb_shop/pages/contact/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f4f4f4}.page_top{padding:1.6rem 0;text-align:center}.page_top wx-image{width:5rem;height:5rem;border-radius:50%;margin:.5rem auto}.page_top wx-text{display:block;width:100%;text-align:center}.com_name_cn{font-size:1.2rem;font-weight:700;height:2.2rem;line-height:2.2rem}.com_name_en{font-size:.8rem;height:1rem;line-height:1rem;color:#b8b8b8}.en_tit wx-text{font-size:.8rem;text-align:left}.en_tit{margin:.5rem 1rem}.contact_li{margin:.8rem;height:3.8rem;background:#fff;border-radius:.2rem;box-shadow:0 0 8px #ccc;padding-left:3rem}.li_left{width:2.6rem;height:3rem;float:left;margin-left:-2.5rem;margin-top:.4rem;border-right:1px solid #e3e3e3}.li_left wx-image{width:1.8rem;height:1.8rem;margin-top:.5rem;margin-left:.3rem}.li_right{float:left;margin-left:.8rem;margin-right:1rem;width:%%?500rpx?%%}.li_right .s_tit{font-size:.7rem;color:#afafaf;height:1.4rem;line-height:1.4rem;margin-top:.5rem}.li_right .b_tit{font-size:.9rem;color:#000;height:.9rem;line-height:.9rem;overflow:hidden}.li_right wx-text{display:block}.contact_btn{background:#4e8cee;color:#fff;font-size:.9rem;text-align:center;height:2.6rem;line-height:2.6rem;margin:.5rem .8rem;border-radius:.2rem;position:relative}wx-contact-button{float:left;height:2.6rem}.btn_box{position:absolute;top:0;left:0;width:100%;-moz-opacity:0;opacity:0}@code-separator-line:__wxRoute = "yb_shop/pages/contact/index";__wxRouteBegin = true;
define("yb_shop/pages/contact/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/contact/index.js
var t = getApp(),
    a = t.requirejs("core");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    route: "contact",
    menu: t.tabBar,
    menu_show: false,
    info: [],
    show: false,
    config: t.config
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    a.menu_url(k, 2);
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function onLoad(e) {
    if (e != null && e != undefined) {
      this.setData({
        tabbar_index: e.tabbar_index ? e.tabbar_index : -1
      });
    }
    a.setting();
    this.setData({
      menu: getApp().tabBar,
      config: getApp().config
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    this.getinfo();
  },
  /**
     * 获取企业信息详情
     */
  getinfo: function getinfo() {
    var that = this;
    a.get("user/About", { user_id: 0 }, function (t) {
      if (t.code == 0) {
        that.setData({
          info: t.info,
          show: true
        });
      } else {
        a.alert(t.msg);
      }
    }, true);
  },
  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function onReady() {},
  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function onShow() {},
  navigate: function navigate() {
    var e = this.data.info;
    if (e.name && e.lat && e.lng) {
      a.tx_map(e.lat, e.lng, e.name);
      // wx.navigateTo({
      //   url: '/yb_shop/pages/member/map/index?name=' + e.name + '&pic=' + e.logo + '&lat=' + e.lat + '&lng=' + e.lng
      // })
    }
  },
  calling: function calling(t) {
    a.phone(t);
  },
  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function onPullDownRefresh() {
    this.getinfo();
    wx.stopPullDownRefresh();
  },
  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function onReachBottom() {},
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {
    var url = "pages/contact/index",
        t = "联系我们";
    a.onShareAppMessage(url, t);
  }
});
});require("yb_shop/pages/contact/index.js")@code-separator-line:["div","cover-view","cover-image","block","view","image","text","contact-button","include"]