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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, 'page navbar']);Z([3, 'member-head']);Z([3, 'background:#fafafa']);Z([3, 'child']);Z([3, 'child userinfo']);Z([3, 'avatar']);Z([[2, "||"],[[6],[[7],[3, "member"]],[3, "avatarUrl"]],[1, "/yb_shop/static/images/noface.png"]]);Z([[2, "!="], [[6],[[7],[3, "member"]],[3, "nickName"]], [1, false]]);Z([3, 'nickname']);Z([3, 'color:#212121;']);Z([a, [[6],[[7],[3, "member"]],[3, "nickName"]]]);Z([[2, "=="], [[6],[[7],[3, "member"]],[3, "nickName"]], [1, false]]);Z([3, 'relogin']);Z([3, 'level']);Z([3, '点击登录']);Z([[6],[[7],[3, "member"]],[3, "level_name"]]);Z([3, 'member_level']);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 0]],[3, "status"]], [1, 1]]);Z([3, 'fui-cell-group fui-cell-click']);Z([3, 'margin-top:0;']);Z([3, 'fui-cell']);Z([3, '/yb_shop/pages/order/index']);Z([3, 'fui-cell-icon']);Z([[6],[[7],[3, "icons"]],[3, "cart"]]);Z([3, 'fui-cell-text']);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 0]],[3, "title"]]]);Z([3, 'order_more']);Z([a, [3, '全部订'],[[6],[[7],[3, "config"]],[3, "dan"]]]);Z([3, 'fui-icon-group nomargin']);Z([3, 'fui-icon-col']);Z([3, '/yb_shop/pages/order/index?status\x3d0']);Z([[2, ">"], [[6],[[7],[3, "member"]],[3, "pending_payment"]], [1, 0]]);Z([3, 'badge']);Z([a, [[6],[[7],[3, "member"]],[3, "pending_payment"]]]);Z([[6],[[7],[3, "icons"]],[3, "paying48"]]);Z([3, 'text']);Z([a, [3, '待付'],[[6],[[7],[3, "config"]],[3, "kuan"]]]);Z([3, '/yb_shop/pages/order/index?status\x3d1']);Z([[2, ">"], [[6],[[7],[3, "member"]],[3, "pending_shipment"]], [1, 0]]);Z([a, [[6],[[7],[3, "member"]],[3, "pending_shipment"]]]);Z([[6],[[7],[3, "icons"]],[3, "box48"]]);Z([a, [3, '待发'],[[6],[[7],[3, "config"]],[3, "huo"]]]);Z([3, '/yb_shop/pages/order/index?status\x3d2']);Z([[2, ">"], [[6],[[7],[3, "member"]],[3, "pending_receipt"]], [1, 0]]);Z([a, [[6],[[7],[3, "member"]],[3, "pending_receipt"]]]);Z([[6],[[7],[3, "icons"]],[3, "car48"]]);Z([a, [3, '待收'],[[6],[[7],[3, "config"]],[3, "huo"]]]);Z([3, '/yb_shop/pages/order/index?status\x3d4']);Z([[2, ">"], [[6],[[7],[3, "member"]],[3, "refund"]], [1, 0]]);Z([a, [[6],[[7],[3, "member"]],[3, "refund"]]]);Z([[6],[[7],[3, "icons"]],[3, "refund48"]]);Z([a, [3, '退换'],[[6],[[7],[3, "config"]],[3, "huo"]]]);Z([3, 'margin-top:20rpx;']);Z([[2, "&&"],[[7],[3, "shareSetting"]],[[2, "!="], [[6],[[7],[3, "shareSetting"]],[3, "level"]], [1, 0]]]);Z([a, [3, '/yb_shop/pages/fenxiao/pages/index/index?title\x3d'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 12]]]);Z([[6],[[7],[3, "icons"]],[3, "fenxiao"]]);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 12]]]);Z([3, 'fui-cell-remark']);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 1]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/member/favorite/index']);Z([[6],[[7],[3, "icons"]],[3, "like02"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 1]],[3, "title"]]]);Z([[2, ">"], [[6],[[7],[3, "member"]],[3, "favorites"]], [1, 0]]);Z([a, [[6],[[7],[3, "member"]],[3, "favorites"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 2]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/member/coupon/index']);Z([[6],[[7],[3, "icons"]],[3, "coupon02"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 2]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 3]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/appointment/index']);Z([[6],[[7],[3, "icons"]],[3, "appointment"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 3]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 4]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/kanjia/my_record/index']);Z([[6],[[7],[3, "icons"]],[3, "kj_cion"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 4]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 5]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/kanjia/order/index']);Z([[6],[[7],[3, "icons"]],[3, "kj_order_cion"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 5]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 6]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/pintuan/pages/group/index']);Z([[6],[[7],[3, "icons"]],[3, "group_icon"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 6]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 7]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/pintuan/pages/orders/index']);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 7]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 8]],[3, "status"]], [1, 1]]);Z([3, 'service_box']);Z([3, 'user_service']);Z([3, 'weapp']);Z([3, '20']);Z([3, 'default-light']);Z([[6],[[7],[3, "icons"]],[3, "service02"]]);Z([3, 'contact']);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 8]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 9]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/member/address/index']);Z([[6],[[7],[3, "icons"]],[3, "location02"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 9]],[3, "title"]]]);Z([[2, "=="], [[6],[[6],[[7],[3, "list"]],[1, 10]],[3, "status"]], [1, 1]]);Z([3, '/yb_shop/pages/member/about/index']);Z([[6],[[7],[3, "icons"]],[3, "about02"]]);Z([a, [[6],[[6],[[7],[3, "list"]],[1, 10]],[3, "title"]]]);Z([[6],[[7],[3, "member"]],[3, "copyright"]]);Z([3, 'padding-top:50rpx;']);Z([3, 'text-align:center;color:#999;font-size:0.7rem;']);Z([a, [[6],[[7],[3, "member"]],[3, "copyright"]],[3, ' ']]);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oOx = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oPx = _v();var oQx = function(oUx,oTx,oSx,gg){var oRx = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oUx, oTx, gg);var oWx = _m( "cover-image", ["class", 14,"src", 1], oUx, oTx, gg);_(oRx,oWx);var oXx = _m( "cover-view", ["class", 16,"style", 1], oUx, oTx, gg);var oYx = _o(18, oUx, oTx, gg);_(oXx,oYx);_(oRx,oXx);_(oSx, oRx);return oSx;};_2(2, oQx, e, s, gg, oPx, "item", "index", '');_(oOx,oPx);_(r,oOx);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/member/index/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oax = _v();
      if (_o(19, e, s, gg)) {
        oax.wxVkey = 1;var obx = _n("view");_r(obx, 'class', 20, e, s, gg);var odx = _m( "view", ["class", 21,"style", 1], e, s, gg);var oex = _n("view");_r(oex, 'class', 23, e, s, gg);_(odx,oex);var ofx = _n("view");_r(ofx, 'class', 24, e, s, gg);var ogx = _n("view");_r(ogx, 'class', 25, e, s, gg);var ohx = _m( "image", ["class", 14,"src", 12], e, s, gg);_(ogx,ohx);_(ofx,ogx);var oix = _v();
      if (_o(27, e, s, gg)) {
        oix.wxVkey = 1;var ojx = _m( "view", ["class", 28,"style", 1], e, s, gg);var olx = _o(30, e, s, gg);_(ojx,olx);_(oix, ojx);
      } _(ofx,oix);var omx = _v();
      if (_o(31, e, s, gg)) {
        omx.wxVkey = 1;var onx = _m( "view", ["bindtap", 32,"class", 1], e, s, gg);var opx = _o(34, e, s, gg);_(onx,opx);_(omx, onx);
      } _(ofx,omx);var oqx = _v();
      if (_o(35, e, s, gg)) {
        oqx.wxVkey = 1;var orx = _n("view");_r(orx, 'class', 36, e, s, gg);var otx = _o(35, e, s, gg);_(orx,otx);_(oqx, orx);
      } _(ofx,oqx);_(odx,ofx);var oux = _n("view");_r(oux, 'class', 23, e, s, gg);_(odx,oux);_(obx,odx);var ovx = _v();
      if (_o(37, e, s, gg)) {
        ovx.wxVkey = 1;var owx = _m( "view", ["class", 38,"style", 1], e, s, gg);var oyx = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 28], e, s, gg);var ozx = _m( "image", ["class", 42,"src", 1], e, s, gg);_(oyx,ozx);var o_x = _n("view");_r(o_x, 'class', 44, e, s, gg);var oAy = _o(45, e, s, gg);_(o_x,oAy);_(oyx,o_x);var oBy = _n("view");_r(oBy, 'class', 46, e, s, gg);var oCy = _o(47, e, s, gg);_(oBy,oCy);_(oyx,oBy);_(owx,oyx);var oDy = _n("view");_r(oDy, 'class', 48, e, s, gg);var oEy = _m( "navigator", ["hoverClass", 13,"class", 36,"url", 37], e, s, gg);var oFy = _v();
      if (_o(51, e, s, gg)) {
        oFy.wxVkey = 1;var oGy = _n("view");_r(oGy, 'class', 52, e, s, gg);var oIy = _o(53, e, s, gg);_(oGy,oIy);_(oFy, oGy);
      } _(oEy,oFy);var oJy = _n("view");_r(oJy, 'class', 14, e, s, gg);var oKy = _n("image");_r(oKy, 'src', 54, e, s, gg);_(oJy,oKy);_(oEy,oJy);var oLy = _n("view");_r(oLy, 'class', 55, e, s, gg);var oMy = _o(56, e, s, gg);_(oLy,oMy);_(oEy,oLy);_(oDy,oEy);var oNy = _m( "navigator", ["hoverClass", 13,"class", 36,"url", 44], e, s, gg);var oOy = _v();
      if (_o(58, e, s, gg)) {
        oOy.wxVkey = 1;var oPy = _n("view");_r(oPy, 'class', 52, e, s, gg);var oRy = _o(59, e, s, gg);_(oPy,oRy);_(oOy, oPy);
      } _(oNy,oOy);var oSy = _n("view");_r(oSy, 'class', 14, e, s, gg);var oTy = _n("image");_r(oTy, 'src', 60, e, s, gg);_(oSy,oTy);_(oNy,oSy);var oUy = _n("view");_r(oUy, 'class', 55, e, s, gg);var oVy = _o(61, e, s, gg);_(oUy,oVy);_(oNy,oUy);_(oDy,oNy);var oWy = _m( "navigator", ["hoverClass", 13,"class", 36,"url", 49], e, s, gg);var oXy = _v();
      if (_o(63, e, s, gg)) {
        oXy.wxVkey = 1;var oYy = _n("view");_r(oYy, 'class', 52, e, s, gg);var oay = _o(64, e, s, gg);_(oYy,oay);_(oXy, oYy);
      } _(oWy,oXy);var oby = _n("view");_r(oby, 'class', 14, e, s, gg);var ocy = _n("image");_r(ocy, 'src', 65, e, s, gg);_(oby,ocy);_(oWy,oby);var ody = _n("view");_r(ody, 'class', 55, e, s, gg);var oey = _o(66, e, s, gg);_(ody,oey);_(oWy,ody);_(oDy,oWy);var ofy = _m( "navigator", ["hoverClass", 13,"class", 36,"url", 54], e, s, gg);var ogy = _v();
      if (_o(68, e, s, gg)) {
        ogy.wxVkey = 1;var ohy = _n("view");_r(ohy, 'class', 52, e, s, gg);var ojy = _o(69, e, s, gg);_(ohy,ojy);_(ogy, ohy);
      } _(ofy,ogy);var oky = _n("view");_r(oky, 'class', 14, e, s, gg);var oly = _n("image");_r(oly, 'src', 70, e, s, gg);_(oky,oly);_(ofy,oky);var omy = _n("view");_r(omy, 'class', 55, e, s, gg);var ony = _o(71, e, s, gg);_(omy,ony);_(ofy,omy);_(oDy,ofy);_(owx,oDy);_(ovx, owx);
      } _(obx,ovx);var ooy = _m( "view", ["class", 38,"style", 34], e, s, gg);var opy = _v();
      if (_o(73, e, s, gg)) {
        opy.wxVkey = 1;var oqy = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 61], e, s, gg);var osy = _m( "image", ["class", 42,"src", 33], e, s, gg);_(oqy,osy);var oty = _n("view");_r(oty, 'class', 44, e, s, gg);var ouy = _o(76, e, s, gg);_(oty,ouy);_(oqy,oty);var ovy = _n("view");_r(ovy, 'class', 77, e, s, gg);_(oqy,ovy);_(opy, oqy);
      } _(ooy,opy);var owy = _v();
      if (_o(78, e, s, gg)) {
        owy.wxVkey = 1;var oxy = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 66], e, s, gg);var ozy = _m( "image", ["class", 42,"src", 38], e, s, gg);_(oxy,ozy);var o_y = _n("view");_r(o_y, 'class', 44, e, s, gg);var oAz = _o(81, e, s, gg);_(o_y,oAz);_(oxy,o_y);var oBz = _n("view");_r(oBz, 'class', 77, e, s, gg);var oCz = _v();
      if (_o(82, e, s, gg)) {
        oCz.wxVkey = 1;var oDz = _n("text");_r(oDz, 'class', 52, e, s, gg);var oFz = _o(83, e, s, gg);_(oDz,oFz);_(oCz, oDz);
      } _(oBz,oCz);_(oxy,oBz);_(owy, oxy);
      } _(ooy,owy);var oGz = _v();
      if (_o(84, e, s, gg)) {
        oGz.wxVkey = 1;var oHz = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 72], e, s, gg);var oJz = _m( "image", ["class", 42,"src", 44], e, s, gg);_(oHz,oJz);var oKz = _n("view");_r(oKz, 'class', 44, e, s, gg);var oLz = _o(87, e, s, gg);_(oKz,oLz);_(oHz,oKz);var oMz = _n("view");_r(oMz, 'class', 77, e, s, gg);_(oHz,oMz);_(oGz, oHz);
      } _(ooy,oGz);var oNz = _v();
      if (_o(88, e, s, gg)) {
        oNz.wxVkey = 1;var oOz = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 76], e, s, gg);var oQz = _m( "image", ["class", 42,"src", 48], e, s, gg);_(oOz,oQz);var oRz = _n("view");_r(oRz, 'class', 44, e, s, gg);var oSz = _o(91, e, s, gg);_(oRz,oSz);_(oOz,oRz);var oTz = _n("view");_r(oTz, 'class', 77, e, s, gg);_(oOz,oTz);_(oNz, oOz);
      } _(ooy,oNz);var oUz = _v();
      if (_o(92, e, s, gg)) {
        oUz.wxVkey = 1;var oVz = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 80], e, s, gg);var oXz = _m( "image", ["class", 42,"src", 52], e, s, gg);_(oVz,oXz);var oYz = _n("view");_r(oYz, 'class', 44, e, s, gg);var oZz = _o(95, e, s, gg);_(oYz,oZz);_(oVz,oYz);var oaz = _n("view");_r(oaz, 'class', 77, e, s, gg);_(oVz,oaz);_(oUz, oVz);
      } _(ooy,oUz);var obz = _v();
      if (_o(96, e, s, gg)) {
        obz.wxVkey = 1;var ocz = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 84], e, s, gg);var oez = _m( "image", ["class", 42,"src", 56], e, s, gg);_(ocz,oez);var ofz = _n("view");_r(ofz, 'class', 44, e, s, gg);var ogz = _o(99, e, s, gg);_(ofz,ogz);_(ocz,ofz);var ohz = _n("view");_r(ohz, 'class', 77, e, s, gg);_(ocz,ohz);_(obz, ocz);
      } _(ooy,obz);var oiz = _v();
      if (_o(100, e, s, gg)) {
        oiz.wxVkey = 1;var ojz = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 88], e, s, gg);var olz = _m( "image", ["class", 42,"src", 60], e, s, gg);_(ojz,olz);var omz = _n("view");_r(omz, 'class', 44, e, s, gg);var onz = _o(103, e, s, gg);_(omz,onz);_(ojz,omz);var ooz = _n("view");_r(ooz, 'class', 77, e, s, gg);_(ojz,ooz);_(oiz, ojz);
      } _(ooy,oiz);var opz = _v();
      if (_o(104, e, s, gg)) {
        opz.wxVkey = 1;var oqz = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 92], e, s, gg);var osz = _m( "image", ["class", 42,"src", 56], e, s, gg);_(oqz,osz);var otz = _n("view");_r(otz, 'class', 44, e, s, gg);var ouz = _o(106, e, s, gg);_(otz,ouz);_(oqz,otz);var ovz = _n("view");_r(ovz, 'class', 77, e, s, gg);_(oqz,ovz);_(opz, oqz);
      } _(ooy,opz);var owz = _v();
      if (_o(107, e, s, gg)) {
        owz.wxVkey = 1;var oxz = _m( "navigator", ["hoverClass", 13,"class", 27], e, s, gg);var ozz = _n("view");_r(ozz, 'class', 108, e, s, gg);var o_z = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,o_z);var oA_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oA_);var oB_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oB_);var oC_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oC_);var oD_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oD_);var oE_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oE_);var oF_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oF_);var oG_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oG_);var oH_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oH_);var oI_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oI_);var oJ_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oJ_);var oK_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oK_);var oL_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oL_);var oM_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oM_);var oN_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oN_);var oO_ = _m( "contact-button", ["class", 109,"sessionFrom", 1,"size", 2,"type", 3], e, s, gg);_(ozz,oO_);_(oxz,ozz);var oP_ = _m( "image", ["class", 42,"src", 71], e, s, gg);_(oxz,oP_);var oQ_ = _m( "view", ["class", 44,"data-type", 70], e, s, gg);var oR_ = _o(115, e, s, gg);_(oQ_,oR_);_(oxz,oQ_);var oS_ = _n("view");_r(oS_, 'class', 77, e, s, gg);_(oxz,oS_);_(owz, oxz);
      } _(ooy,owz);var oT_ = _v();
      if (_o(116, e, s, gg)) {
        oT_.wxVkey = 1;var oU_ = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 104], e, s, gg);var oW_ = _m( "image", ["class", 42,"src", 76], e, s, gg);_(oU_,oW_);var oX_ = _n("view");_r(oX_, 'class', 44, e, s, gg);var oY_ = _o(119, e, s, gg);_(oX_,oY_);_(oU_,oX_);var oZ_ = _n("view");_r(oZ_, 'class', 77, e, s, gg);_(oU_,oZ_);_(oT_, oU_);
      } _(ooy,oT_);var oa_ = _v();
      if (_o(120, e, s, gg)) {
        oa_.wxVkey = 1;var ob_ = _m( "navigator", ["hoverClass", 13,"class", 27,"url", 108], e, s, gg);var od_ = _m( "image", ["class", 42,"src", 80], e, s, gg);_(ob_,od_);var oe_ = _n("view");_r(oe_, 'class', 44, e, s, gg);var of_ = _o(123, e, s, gg);_(oe_,of_);_(ob_,oe_);var og_ = _n("view");_r(og_, 'class', 77, e, s, gg);_(ob_,og_);_(oa_, ob_);
      } _(ooy,oa_);_(obx,ooy);var oh_ = _v();
      if (_o(124, e, s, gg)) {
        oh_.wxVkey = 1;var oi_ = _m( "navigator", ["hoverClass", 13,"url", 108,"style", 112], e, s, gg);var ok_ = _n("view");_r(ok_, 'style', 126, e, s, gg);var ol_ = _o(127, e, s, gg);_(ok_,ol_);_(oi_,ok_);_(oh_, oi_);
      } _(obx,oh_);var om_ = _v();
      if (_o(128, e, s, gg)) {
        om_.wxVkey = 1;var or_ = e_["./yb_shop/pages/member/index/index.wxml"].j;var op_ = _n("view");_r(op_, 'style', 129, e, s, gg);_(om_,op_);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/member/index/index.wxml",e,s,om_,gg);;or_.pop();
      } _(obx,om_);_(oax, obx);
      } _(r,oax);
    return r;
  };
        e_["./yb_shop/pages/member/index/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.page{position:fixed;top:42px;left:0;bottom:10px;overflow-y:scroll;width:100%;height:auto;-webkit-overflow-scrolling:touch}.member-head{height:%%?260rpx?%%;padding-top:%%?20rpx?%%;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;-webkit-justify-content:space-between;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center}.order_more{width:3.8rem;padding-right:1rem;background:url(http://ddfwz.sssvip.net/asmce/yigou/order_more02.png) center right no-repeat;background-size:1rem 1rem;color:#7a7a7a;position:absolute;right:.5rem;top:.9rem;font-size:.8rem}.member-head .setting{height:%%?40rpx?%%;width:%%?40rpx?%%;overflow:hidden;position:absolute;top:%%?10rpx?%%;right:%%?10rpx?%%}.member-head .setting wx-image{height:%%?40rpx?%%;width:%%?40rpx?%%;vertical-align:top}.member-head .child{width:30%;text-align:center}.member-head .child.userinfo{width:40%;color:#fff;padding-top:%%?0rpx?%%}.member-head .child.userinfo .avatar{height:%%?110rpx?%%;width:%%?110rpx?%%;background:#fff;margin:auto;border-radius:%%?96rpx?%%;border:%%?6rpx?%% solid #fff}.member-head .child.userinfo .avatar wx-image{height:%%?110rpx?%%;width:%%?110rpx?%%;border-radius:%%?96rpx?%%;display:block}.member-head .child.userinfo .nickname{height:%%?40rpx?%%;padding-top:%%?8rpx?%%;font-size:%%?30rpx?%%;color:inherit;text-align:center;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;color:#212121}.member-head .child.userinfo .level{font-size:%%?24rpx?%%;color:inherit;text-align:center;width:%%?170rpx?%%;height:%%?46rpx?%%;border:%%?1rpx?%% solid #212121;margin:%%?12rpx?%% auto;line-height:%%?46rpx?%%;border-radius:%%?23rpx?%%;color:#212121}.member-head .child .title{padding-top:%%?48rpx?%%;font-size:%%?28rpx?%%;color:#fff;text-align:center}.member-head .child .number{font-size:%%?28rpx?%%;color:#fef31f;text-align:center;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.member-head .child .btn{width:%%?104rpx?%%;height:%%?40rpx?%%;padding:0;margin:%%?8rpx?%% auto 0;color:#fff;font-size:%%?24rpx?%%;line-height:%%?40rpx?%%;text-align:center;border-radius:%%?40rpx?%%;border:%%?2rpx?%% solid #fff}.fui-cell-group .fui-cell .fui-cell-remark{color:#888;text-align:right;font-size:%%?20rpx?%%;margin-right:%%?8rpx?%%}.kf_button{background-color:rgba(255,255,255,0);border:0;height:%%?100rpx?%%;right:0;bottom:%%?20rpx?%%;position:fixed}.kf_button::after{border:0}.kf_image{z-index:9999;width:%%?100rpx?%%;height:%%?100rpx?%%}body{background:#f4f4f4}.service_box{padding:%%?29rpx?%%;position:absolute;top:0;left:0;background:#ccc;overflow:hidden;-moz-opacity:0;opacity:0}.user_service{float:left}.member_level{text-align:center;font-size:%%?26rpx?%%;color:#ff4e4e}@code-separator-line:__wxRoute = "yb_shop/pages/member/index/index";__wxRouteBegin = true;
define("yb_shop/pages/member/index/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var e = getApp(),
    r = e.requirejs("core");
Page({
  data: {
    route: "member_index",
    menu: e.tabBar,
    menu_show: false,
    icons: e.requirejs("icons"),
    member: {},
    show: false,
    background: e.config.background
  },
  //底部导航跳转
  menu_url: function menu_url(k) {
    r.menu_url(k, 2);
  },
  onLoad: function onLoad(options) {
    if (options != null && options != undefined) {
      this.setData({
        tabbar_index: options.tabbar_index ? options.tabbar_index : -1
      });
    }
    "" == e.getCache("userinfo") && (r.toast('您还没登录呢'), setTimeout(function () {
      wx.redirectTo({
        url: "/yb_shop/pages/index/index"
      });
    }, 2e3));
    var that = this;
    getApp().get_menu(function (x) {
      that.setData({
        menu: getApp().tabBar
      });
      var key = e.isInArray(getApp().tabBar.list, that.data.route);
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
      r.get('Distribe/shareSetting', {}, function (t) {
        if (t.code == 0) {
          that.setData({
            shareSetting: t.info
          });
        }
      });
      that.get_candan();
    });
  },
  get_candan: function get_candan() {
    var that = this;
    r.get("Index/ucenter", {}, function (t) {
      that.setData({
        list: t.all_data,
        show: true
      });
      that.getInfo();
    }, true);
  },
  /**
   * 下拉刷新
   */
  onPullDownRefresh: function onPullDownRefresh() {
    // this.getInfo()
    // wx.stopPullDownRefresh();
  },
  //获取统计信息
  getInfo: function getInfo() {
    var e = this;
    e.setData({
      background: getApp().config.background,
      font_color: getApp().config.font_color
    });
    r.get("user/Index", {
      uid: getApp().getCache("userinfo").uid
    }, function (r) {
      console.log(r);
      r.info.nickName = getApp().getCache("userinfo").nickName, r.info.avatarUrl = getApp().getCache("userinfo").avatarUrl;
      console.log(r);
      e.setData({
        member: r.info
      });
    });
  },
  fail: function fail() {
    wx.redirectTo({
      url: "/yb_shop/pages/message/auth/index"
    });
  },
  onShow: function onShow() {
    this.getInfo();
    showMenu("member_index");
  },
  relogin: function relogin() {
    var that = this;
    wx.getSetting({
      success: function success(res) {
        if (!res.authSetting['scope.userInfo']) {
          wx.openSetting({
            success: function success(res) {
              if (res.authSetting['scope.userInfo']) {
                e.getUserInfo();
                setTimeout(function () {
                  that.getInfo();
                }, 1e3);
              }
            }
          });
        }
      }
    });
  }
});
});require("yb_shop/pages/member/index/index.js")@code-separator-line:["div","cover-view","cover-image","view","image","navigator","text","contact-button","block","include"]