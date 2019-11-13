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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, 'class_box']);Z([[7],[3, "scroll_left"]]);Z([3, 'true']);Z([3, ' white-space: nowrap;']);Z([a, [3, 'cate '],[[2,'?:'],[[2, "=="], [[7],[3, "class_id"]], [1, ""]],[1, "active"],[1, ""]]]);Z([3, 'cate_select']);Z([3, '1']);Z([3, '全部']);Z([[7],[3, "cate"]]);Z([a, [3, 'cate '],[[2,'?:'],[[2, "=="], [[7],[3, "class_id1"]], [[6],[[7],[3, "item"]],[3, "class_id"]]],[1, "active"],[1, ""]]]);Z([[6],[[7],[3, "item"]],[3, "class_style"]]);Z([[6],[[7],[3, "item"]],[3, "class_id"]]);Z([[7],[3, "index"]]);Z([[6],[[7],[3, "item"]],[3, "level"]]);Z([[2, ">"], [[6],[[7],[3, "cate2"]],[3, "length"]], [1, 0]]);Z([3, 'class_view']);Z([[7],[3, "cate2"]]);Z([a, [3, 'class_li '],[[2,'?:'],[[2, "=="], [[7],[3, "class_id2"]], [[6],[[7],[3, "item"]],[3, "class_id"]]],[1, "active"],[1, ""]]]);Z([3, 'clear']);Z([[2, "=="], [[7],[3, "class_style"]], [1, 2]]);Z([3, 'case_list']);Z([[7],[3, "list"]]);Z([3, 'case_li']);Z([3, 'to_url']);Z([[6],[[7],[3, "item"]],[3, "article_id"]]);Z([[6],[[7],[3, "item"]],[3, "link"]]);Z([3, 'case_pic']);Z([[6],[[7],[3, "item"]],[3, "image"]]);Z([3, 'case_tit']);Z([[7],[3, "loaded"]]);Z([3, 'fui-loading empty']);Z([3, 'text']);Z([3, '没有更多内容了']);Z([[2, "=="], [[7],[3, "class_style"]], [1, 1]]);Z([3, 'index_advan_list']);Z([3, 'advan_li']);Z([3, 'aspectFill']);Z([3, 'advan_info']);Z([3, 'advan_tit']);Z([3, 'advan_memo']);Z([a, [[6],[[7],[3, "item"]],[3, "short_title"]]]);Z([a, [[6],[[7],[3, "item"]],[3, "create_time"]]]);Z([3, 'load_info']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oxh = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oyh = _v();var ozh = function(oCi,oBi,oAi,gg){var o_h = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oCi, oBi, gg);var oEi = _m( "cover-image", ["class", 14,"src", 1], oCi, oBi, gg);_(o_h,oEi);var oFi = _m( "cover-view", ["class", 16,"style", 1], oCi, oBi, gg);var oGi = _o(18, oCi, oBi, gg);_(oFi,oGi);_(o_h,oFi);_(oAi, o_h);return oAi;};_2(2, ozh, e, s, gg, oyh, "item", "index", '');_(oxh,oyh);_(r,oxh);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/find/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oIi = _v();
      if (_o(19, e, s, gg)) {
        oIi.wxVkey = 1;var oLi = _n("view");_r(oLi, 'class', 20, e, s, gg);var oMi = _m( "scroll-view", ["scrollLeft", 21,"scrollX", 1,"style", 2], e, s, gg);var oNi = _n("view");_r(oNi, 'class', 24, e, s, gg);var oOi = _m( "text", ["data-id", -1,"data-index", -1,"bindtap", 25,"data-level", 1], e, s, gg);var oPi = _o(27, e, s, gg);_(oOi,oPi);_(oNi,oOi);_(oMi,oNi);var oQi = _v();var oRi = function(oVi,oUi,oTi,gg){var oXi = _n("view");_r(oXi, 'class', 29, oVi, oUi, gg);var oYi = _m( "text", ["bindtap", 25,"data-class_style", 5,"data-id", 6,"data-index", 7,"data-level", 8], oVi, oUi, gg);var oZi = _o(18, oVi, oUi, gg);_(oYi,oZi);_(oXi,oYi);_(oTi,oXi);return oTi;};_2(28, oRi, e, s, gg, oQi, "item", "index", '');_(oMi,oQi);_(oLi,oMi);var oai = _v();
      if (_o(34, e, s, gg)) {
        oai.wxVkey = 1;var obi = _n("view");_r(obi, 'class', 35, e, s, gg);var odi = _v();var oei = function(oii,ohi,ogi,gg){var oki = _n("view");_r(oki, 'class', 37, oii, ohi, gg);var oli = _m( "text", ["bindtap", 25,"data-class_style", 5,"data-id", 6,"data-index", 7,"data-level", 8], oii, ohi, gg);var omi = _o(18, oii, ohi, gg);_(oli,omi);_(oki,oli);_(ogi,oki);return ogi;};_2(36, oei, e, s, gg, odi, "item", "index", '');_(obi,odi);_(oai, obi);
      } _(oLi,oai);var oni = _n("view");_r(oni, 'class', 38, e, s, gg);_(oLi,oni);_(oIi,oLi);var ooi = _v();
      if (_o(39, e, s, gg)) {
        ooi.wxVkey = 1;var opi = _n("view");_r(opi, 'class', 40, e, s, gg);var ori = _v();var osi = function(owi,ovi,oui,gg){var oyi = _n("view");_r(oyi, 'class', 42, owi, ovi, gg);var ozi = _m( "navigator", ["data-name", 11,"bindtap", 32,"data-id", 33,"data-link", 34], owi, ovi, gg);var o_i = _n("view");_r(o_i, 'class', 46, owi, ovi, gg);var oAj = _n("image");_r(oAj, 'src', 47, owi, ovi, gg);_(o_i,oAj);_(ozi,o_i);var oBj = _n("view");_r(oBj, 'class', 48, owi, ovi, gg);var oCj = _o(11, owi, ovi, gg);_(oBj,oCj);_(ozi,oBj);_(oyi,ozi);_(oui,oyi);return oui;};_2(41, osi, e, s, gg, ori, "item", "index", '');_(opi,ori);var oDj = _v();
      if (_o(49, e, s, gg)) {
        oDj.wxVkey = 1;var oEj = _n("view");_r(oEj, 'class', 50, e, s, gg);var oGj = _n("view");_r(oGj, 'class', 51, e, s, gg);var oHj = _o(52, e, s, gg);_(oGj,oHj);_(oEj,oGj);_(oDj, oEj);
      } _(opi,oDj);_(ooi, opi);
      } _(oIi,ooi);var oIj = _v();
      if (_o(53, e, s, gg)) {
        oIj.wxVkey = 1;var oJj = _n("view");_r(oJj, 'class', 54, e, s, gg);var oLj = _v();var oMj = function(oQj,oPj,oOj,gg){var oSj = _n("view");_r(oSj, 'class', 55, oQj, oPj, gg);var oTj = _m( "navigator", ["data-name", 11,"bindtap", 32,"data-id", 33,"data-link", 34], oQj, oPj, gg);var oUj = _m( "image", ["src", 47,"mode", 9], oQj, oPj, gg);_(oTj,oUj);var oVj = _n("view");_r(oVj, 'class', 57, oQj, oPj, gg);var oWj = _n("view");_r(oWj, 'class', 58, oQj, oPj, gg);var oXj = _o(11, oQj, oPj, gg);_(oWj,oXj);_(oVj,oWj);var oYj = _n("view");_r(oYj, 'class', 59, oQj, oPj, gg);var oZj = _o(60, oQj, oPj, gg);_(oYj,oZj);_(oVj,oYj);var oaj = _n("view");_r(oaj, 'class', 59, oQj, oPj, gg);var obj = _o(61, oQj, oPj, gg);_(oaj,obj);_(oVj,oaj);_(oTj,oVj);var ocj = _n("view");_r(ocj, 'class', 38, oQj, oPj, gg);_(oTj,ocj);_(oSj,oTj);_(oOj,oSj);return oOj;};_2(41, oMj, e, s, gg, oLj, "item", "index", '');_(oJj,oLj);var odj = _v();
      if (_o(49, e, s, gg)) {
        odj.wxVkey = 1;var oej = _n("view");_r(oej, 'class', 62, e, s, gg);var ogj = _o(52, e, s, gg);_(oej,ogj);_(odj, oej);
      } _(oJj,odj);_(oIj, oJj);
      } _(oIi,oIj);var ohj = _v();
      if (_o(63, e, s, gg)) {
        ohj.wxVkey = 1;var omj = e_["./yb_shop/pages/find/index.wxml"].j;var okj = _n("view");_r(okj, 'style', 64, e, s, gg);_(ohj,okj);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/find/index.wxml",e,s,ohj,gg);;omj.pop();
      } _(oIi,ohj);
      } _(r,oIi);
    return r;
  };
        e_["./yb_shop/pages/find/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f4f4f4}.case_li{margin:.5rem;background:#fff;border-radius:.2rem;overflow:hidden;box-shadow:0 0 8px #ccc}.case_info{font-size:.7rem;color:#939393;position:relative;height:2.2rem;line-height:2.2rem;padding-left:.5rem}.case_more{position:absolute;right:.5rem;top:.1rem}.case_pic wx-image{width:100%;height:10.5rem}.load_info{height:3rem;line-height:3rem;text-align:center;font-size:.7rem;color:#666}.prompt_box{padding:2rem;text-align:center}.prompt_box wx-text{font-size:.8rem;color:#666;display:block;margin-top:.5rem}.case_tit wx-text{display:inline-block;background:#f22424;color:#fff;padding:%%?6rpx?%% %%?22rpx?%% 0 %%?22rpx?%%;border-radius:%%?8rpx?%%;margin-right:%%?10rpx?%%;font-size:%%?18rpx?%%;margin-top:-1rem}.case_tit{height:3.2rem;line-height:3.2rem;padding-left:.5rem;text-align:center;padding-right:.5rem;font-size:.9rem;color:#2f2f2f}.fui-loading.empty .text,.fui-loading.line .text{padding:0 %%?20rpx?%%;background:#f2f2f2;position:relative;text-align:center;z-index:2;font-size:.7rem}.advan_li{height:6rem;padding-left:6rem;position:relative}.advan_li:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.advan_li wx-image{margin-left:-5.5rem;width:5rem;height:5rem;margin-top:.6rem;float:left}.advan_li:first-child{border-top:1px solid #e6e6e6}.advan_info{float:left;margin-right:1rem}.advan_tit{font-size:1.1rem;margin-top:.7rem;line-height:1.6rem;max-height:1.6rem;overflow:hidden}.advan_memo{font-size:.8rem;line-height:1.3rem;color:#9e9e9e;max-height:1.3rem;overflow:hidden}.load_info{height:3rem;line-height:3rem;text-align:center;font-size:.8rem;color:#666}.prompt_box{padding:2rem;text-align:center}.prompt_box wx-text{font-size:.8rem;color:#666;display:block;margin-top:.5rem}.class_box{margin-top:%%?4rpx?%%;margin-bottom:%%?2rpx?%%;background:#fff;padding-bottom:%%?10rpx?%%}.class_box wx-scroll-view .cate{margin:0 %%?20rpx?%%;display:inline-block;padding:%%?28rpx?%% %%?10rpx?%%}.class_box wx-scroll-view .cate wx-text{font-size:%%?32rpx?%%}.class_box wx-scroll-view{height:%%?89rpx?%%}.class_box wx-scroll-view .cate.active{border-bottom:3px solid #e02e24}.class_box wx-scroll-view .cate.active wx-text{color:#e02e24;font-weight:700}.class_view{padding:%%?10rpx?%% %%?30rpx?%%}.class_view .class_li{width:%%?150rpx?%%;background:#f6f6f6;border-radius:%%?8rpx?%%;text-align:center;height:%%?60rpx?%%;line-height:%%?60rpx?%%;float:left;margin:%%?10rpx?%%}.class_view .class_li wx-text{color:#646464;font-size:%%?28rpx?%%;display:block;height:%%?60rpx?%%;line-height:%%?60rpx?%%}.class_view .class_li.active{background:#646464}.class_view .class_li.active wx-text{color:#fff!important;font-size:%%?28rpx?%%;display:block;height:%%?60rpx?%%;line-height:%%?60rpx?%%}.index_advan_list{background:#fff}@code-separator-line:__wxRoute = "yb_shop/pages/find/index";__wxRouteBegin = true;
define("yb_shop/pages/find/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/find/index.js
var t = getApp(),
    c = t.requirejs("api/index"),
    a = t.requirejs("core");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    route: "find",
    menu: t.tabBar,
    menu_show: false,
    loaded: false,
    list: [],
    page: 1,
    class_id: '',
    class_id1: '',
    class_id2: '',
    cate_index: '',
    cate: [],
    class_style: 2
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
      menu: getApp().tabBar,
      class_id: e.id ? e.id : '',
      class_id1: e.id ? e.id : '',
      class_style: e.class_style ? e.class_style : 2
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
    this.getlist();
    this.initCategory();
  },
  cate_select: function cate_select(t) {
    var that = this,
        cate = that.data.cate,
        data = a.pdata(t),
        e = {};
    console.log(data);
    if (data.level == 1) {
      e['cate_index'] = data.index;
      e['class_id2'] = '';
      if (data.id == '') {
        e.cate2 = [];
      } else {
        e.cate2 = cate[data.index].cate;
      }
    }
    e['class_style'] = data.class_style ? data.class_style : 2;
    e['class_id'] = data.id;
    e['class_id' + data.level] = data.id;
    e.list = [];
    e.page = 1;
    e.loaded = false;
    that.setData(e);
    that.getlist();
  },
  /**
  *获取分类
  * @return array
  */
  initCategory: function initCategory() {
    var t = this;
    a.get("Article/ArticleClass", {}, function (a) {
      t.setData({
        cate: a.info
      });
    });
  },
  /**
     * 获取文章列表信息
     */
  getlist: function getlist() {
    var that = this,
        ident = '',
        class_id = that.data.class_id,
        page = that.data.page;
    c.article_list(ident, page, class_id, that, function (t) {
      that.setData(t);
    });
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
    this.getlist();
    this.initCategory();
    wx.stopPullDownRefresh();
  },
  /**
   *上拉加载
   */
  onReachBottom: function onReachBottom() {
    console.log('加载更多');
    this.data.loaded || this.getlist();
  },
  to_url: function to_url(e) {
    var data = a.pdata(e),
        url = '';
    if (data.link) {
      url = '/yb_shop/pages/web/index?url=' + escape(data.link) + '&name=' + data.name;
    } else {
      url = '/yb_shop/pages/find_info/index?id=' + data.id;
    }
    a.jump(url);
  },
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {}
});
});require("yb_shop/pages/find/index.js")@code-separator-line:["div","cover-view","cover-image","block","view","scroll-view","text","navigator","image","include"]