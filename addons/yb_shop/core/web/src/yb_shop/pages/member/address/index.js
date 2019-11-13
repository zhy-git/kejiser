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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page footer']);Z([[2, ">"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]);Z([[7],[3, "list"]]);Z([3, 'fui-list-group']);Z([3, 'margin-top:0;']);Z([3, 'fui-list address-item noclick']);Z([3, 'fui-list-inner']);Z([3, 'title']);Z([3, 'font-size:34rpx;']);Z([a, [[6],[[7],[3, "item"]],[3, "consigner"]],[3, ', '],[[6],[[7],[3, "item"]],[3, "phone"]]]);Z([3, 'text']);Z([3, 'padding-bottom:16rpx;font-size:28rpx;color:#999;padding-top:6rpx;']);Z([a, [[6],[[7],[3, "item"]],[3, "province"]],[3, ' '],[[6],[[7],[3, "item"]],[3, "city"]],[3, ' '],[[6],[[7],[3, "item"]],[3, "district"]],[3, ' '],[[6],[[7],[3, "item"]],[3, "address"]]]);Z([3, 'bar']);Z([3, 'deleteItem']);Z([3, 'pull-right btn-del']);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([3, 'image-32']);Z([3, '/yb_shop/static/images/icon/delete.png']);Z([3, '删除']);Z([3, 'pull-right btn-edit']);Z([3, 'margin-right:10rpx;']);Z([a, [3, '/yb_shop/pages/member/address/post?id\x3d'],[[6],[[7],[3, "item"]],[3, "id"]],[3, '\x26consigner\x3d'],[[6],[[7],[3, "item"]],[3, "consigner"]],[3, '\x26phone\x3d'],[[6],[[7],[3, "item"]],[3, "phone"]],[3, '\x26areas\x3d'],[[6],[[7],[3, "item"]],[3, "province"]],[3, ' '],[[6],[[7],[3, "item"]],[3, "city"]],[3, ' '],[[6],[[7],[3, "item"]],[3, "district"]],[3, '\x26address\x3d'],[[6],[[7],[3, "item"]],[3, "address"]],[3, '\x26type\x3dmember']]);Z([3, '/yb_shop/static/images/icon/edit.png']);Z([3, '编辑']);Z([3, 'setDefault']);Z([[2,'?:'],[[2, ">"], [[6],[[7],[3, "item"]],[3, "is_default"]], [1, 0]],[1, true],[1, false]]);Z([3, 'zoom-70']);Z([3, '#fd5454']);Z([3, 'default']);Z([3, '设为默认地址\r\n              ']);Z([[2, "&&"],[[2, "<"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 1]],[[7],[3, "loaded"]]]);Z([3, 'fui-loading empty']);Z([3, '没有数据']);Z([a, [3, 'bottom:'],[[2,'?:'],[[7],[3, "showtabbar"]],[1, 100],[1, 0]],[3, 'rpx;']]);Z([3, 'nav-item btn btn-danger']);Z([a, [3, 'font-size:34rpx;background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([3, '/yb_shop/pages/member/address/post?\x26type\x3dadd']);Z([3, 'image-48']);Z([3, '/yb_shop/static/images/icon-white/add.png']);Z([3, '添加收货地址']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var opb = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var oqb = _v();var orb = function(ovb,oub,otb,gg){var osb = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], ovb, oub, gg);var oxb = _m( "cover-image", ["class", 14,"src", 1], ovb, oub, gg);_(osb,oxb);var oyb = _m( "cover-view", ["class", 16,"style", 1], ovb, oub, gg);var ozb = _o(18, ovb, oub, gg);_(oyb,ozb);_(osb,oyb);_(otb, osb);return otb;};_2(2, orb, e, s, gg, oqb, "item", "index", '');_(opb,oqb);_(r,opb);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/member/address/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oAc = _n("loading");_r(oAc, 'hidden', 19, e, s, gg);var oBc = _o(20, e, s, gg);_(oAc,oBc);_(r,oAc);var oCc = _v();
      if (_o(19, e, s, gg)) {
        oCc.wxVkey = 1;var oDc = _n("view");_r(oDc, 'class', 21, e, s, gg);var oFc = _v();
      if (_o(22, e, s, gg)) {
        oFc.wxVkey = 1;var oIc = _v();var oJc = function(oNc,oMc,oLc,gg){var oPc = _m( "view", ["class", 24,"style", 1], oNc, oMc, gg);var oQc = _n("view");_r(oQc, 'class', 26, oNc, oMc, gg);var oRc = _n("view");_r(oRc, 'class', 27, oNc, oMc, gg);var oSc = _m( "view", ["class", 28,"style", 1], oNc, oMc, gg);var oTc = _o(30, oNc, oMc, gg);_(oSc,oTc);_(oRc,oSc);var oUc = _m( "view", ["class", 31,"style", 1], oNc, oMc, gg);var oVc = _o(33, oNc, oMc, gg);_(oUc,oVc);_(oRc,oUc);var oWc = _n("view");_r(oWc, 'class', 34, oNc, oMc, gg);var oXc = _m( "view", ["bindtap", 35,"class", 1,"data-id", 2], oNc, oMc, gg);var oYc = _m( "image", ["class", 38,"src", 1], oNc, oMc, gg);_(oXc,oYc);var oZc = _n("text");var oac = _o(40, oNc, oMc, gg);_(oZc,oac);_(oXc,oZc);_(oWc,oXc);var obc = _m( "navigator", ["hoverClass", 13,"class", 28,"style", 29,"url", 30], oNc, oMc, gg);var occ = _m( "image", ["class", 38,"src", 6], oNc, oMc, gg);_(obc,occ);var odc = _n("text");var oec = _o(45, oNc, oMc, gg);_(odc,oec);_(obc,odc);_(oWc,obc);var ofc = _m( "label", ["data-id", 37,"bindtap", 9], oNc, oMc, gg);var ogc = _m( "radio", ["checked", 47,"class", 1,"color", 2,"name", 3], oNc, oMc, gg);_(ofc,ogc);var ohc = _o(51, oNc, oMc, gg);_(ofc,ohc);_(oWc,ofc);_(oRc,oWc);_(oQc,oRc);_(oPc,oQc);_(oLc,oPc);return oLc;};_2(23, oJc, e, s, gg, oIc, "item", "index", '');_(oFc,oIc);
      } _(oDc,oFc);var oic = _v();
      if (_o(52, e, s, gg)) {
        oic.wxVkey = 1;var ojc = _n("view");_r(ojc, 'class', 53, e, s, gg);var olc = _n("view");_r(olc, 'class', 31, e, s, gg);var omc = _o(54, e, s, gg);_(olc,omc);_(ojc,olc);_(oic, ojc);
      } _(oDc,oic);var onc = _m( "view", ["class", 0,"style", 55], e, s, gg);var ooc = _m( "navigator", ["hoverClass", 13,"class", 43,"style", 44,"url", 45], e, s, gg);var opc = _m( "image", ["class", 59,"src", 1], e, s, gg);_(ooc,opc);var oqc = _n("text");var orc = _o(61, e, s, gg);_(oqc,orc);_(ooc,oqc);_(onc,ooc);_(oDc,onc);var osc = _v();
      if (_o(62, e, s, gg)) {
        osc.wxVkey = 1;var oxc = e_["./yb_shop/pages/member/address/index.wxml"].j;var ovc = _n("view");_r(ovc, 'style', 63, e, s, gg);_(osc,ovc);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/member/address/index.wxml",e,s,osc,gg);;oxc.pop();
      } _(oDc,osc);_(oCc, oDc);
      } _(r,oCc);
    return r;
  };
        e_["./yb_shop/pages/member/address/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.address-item{padding-bottom:%%?20rpx?%%}.address-item wx-radio{vertical-align:top;margin-top:%%?-2rpx?%%}.address-item wx-image{margin-right:%%?5rpx?%%;margin-top:%%?-8rpx?%%}.fui-list-inner .bar{font-size:%%?28rpx?%%}.btn-del{margin-left:%%?10rpx?%%}.btn-del wx-text,.btn-edit wx-text{display:inline-block;font-size:%%?30rpx?%%;line-height:%%?30rpx?%%}.fui-navbar .nav-item{width:100%!important;margin:0!important}@code-separator-line:__wxRoute = "yb_shop/pages/member/address/index";__wxRouteBegin = true;
define("yb_shop/pages/member/address/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
//收货地址
var t = getApp(),
//info=t.getCache("userinfo"),
e = t.requirejs("core");
Page({
  data: {
    route: "member_address",
    menu: t.tabBar,
    menu_show: false,
    loaded: !1,
    list: []
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
    "" == t.getCache("userinfo") && (e.toast('您还没登录呢'), setTimeout(function () {
      wx.redirectTo({
        url: "/yb_shop/pages/index/index"
      });
    }, 1e3));
    this.setData({
      menu: getApp().tabBar,
      config: getApp().config
    });
    if (this.data.tabbar_index >= 0) {
      this.setData({
        showtabbar: getApp().tabBar.IsDiDis ? getApp().tabBar.IsDiDis : false
      });
    }
  },
  onShow: function onShow() {
      $(".menu-list").hide();
    this.getList();
  },
  onPullDownRefresh: function onPullDownRefresh() {
    wx.stopPullDownRefresh();
  },
  /**
  * 获取收货地址列表
  */
  getList: function getList() {
    var t = this;
    e.get("user/AddressList", { uid: getApp().getCache("userinfo").uid }, function (i) {
      if (i.code == 0) {
        t.setData({
          loaded: !0,
          list: i.info,
          show: !0
        });
      } else {
        t.setData({
          loaded: !0,
          list: [],
          show: !0
        });
      }
    });
  },
  /**
  * 设置默认地址
  */
  setDefault: function setDefault(t) {
    var s = this,
        i = e.pdata(t).id;
    s.setData({
      loaded: !1
    }), e.get("user/UpdateAddress", {
      id: i,
      uid: getApp().getCache("userinfo").uid,
      is_default: 1
    }, function (t) {
      if (0 != t.code) return s.setData({
        posting: false
      }), void a.toast(s, t.msg);
      e.toast("设置成功"), s.getList();
    });
  },
  /**
  * 删除收货地址
  */
  deleteItem: function deleteItem(t) {
    var s = this,
        i = e.pdata(t).id;
    e.confirm("删除后无法恢复, 确认要删除吗 ?", function () {
      s.setData({
        loaded: !1
      }), e.get("user/DelAddress", {
        id: i
      }, function (t) {
        if (0 != t.code) return s.setData({
          posting: false
        }), void a.toast(s, t.msg);
        e.toast("删除成功"), s.getList();
      });
    });
  }
});
});require("yb_shop/pages/member/address/index.js")@code-separator-line:["div","cover-view","cover-image","loading","view","block","image","text","navigator","label","radio","include"]