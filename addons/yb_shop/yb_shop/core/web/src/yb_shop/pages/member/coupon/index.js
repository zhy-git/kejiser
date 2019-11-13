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
    Z([3, 'fui-navbar']);Z([a, [3, 'z-index:999999999;background:'],[[6],[[7],[3, "menu"]],[3, "backgroundColor"]],[3, ';']]);Z([[6],[[7],[3, "menu"]],[3, "list"]]);Z([3, 'menu_url']);Z([a, [3, 'nav-item '],[[2, "||"],[[2, "!="], [[7],[3, "route"]], [[6],[[7],[3, "item"]],[3, "name"]]],[1, "active"]]]);Z([[6],[[7],[3, "item"]],[3, "appid"]]);Z([[2,'?:'],[[6],[[7],[3, "item"]],[3, "ident"]],[[6],[[7],[3, "item"]],[3, "ident"]],[1, 1]]);Z([[6],[[7],[3, "item"]],[3, "lat"]]);Z([[6],[[7],[3, "item"]],[3, "lng"]]);Z([[6],[[7],[3, "item"]],[3, "path"]]);Z([[6],[[7],[3, "item"]],[3, "phone"]]);Z([[6],[[7],[3, "item"]],[3, "title"]]);Z([[6],[[7],[3, "item"]],[3, "imgurl"]]);Z([3, 'none']);Z([3, 'icon']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "item"]],[3, "page_select_icon"]],[[6],[[7],[3, "item"]],[3, "page_icon"]]]);Z([3, 'label']);Z([a, [3, 'color:'],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "tabbar_index"]]],[[6],[[7],[3, "menu"]],[3, "selectedColor"]],[[6],[[7],[3, "menu"]],[3, "color"]]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[7],[3, "show"]]);Z([[7],[3, "list"]]);Z([3, 'coupon_box']);Z([3, 'box_top']);Z([3, 'coupon_price']);Z([3, 'price01']);Z([3, '￥']);Z([3, 'price02']);Z([a, [[6],[[7],[3, "item"]],[3, "discount_money"]]]);Z([3, 'coupon_li']);Z([3, 'coupon_con']);Z([a, [3, '满'],[[6],[[7],[3, "item"]],[3, "satisfy_money"]],[3, '可用']]);Z([[2, "<="], [[7],[3, "now_time"]], [[6],[[7],[3, "item"]],[3, "end_time"]]]);Z([3, 'coupon_time']);Z([a, [3, '有效期：'],[[6],[[7],[3, "item"]],[3, "endtime"]]]);Z([[2, ">"], [[7],[3, "now_time"]], [[6],[[7],[3, "item"]],[3, "end_time"]]]);Z([3, 'coupon_state']);Z([3, '已过期']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "status"]], [1, 0]]);Z([3, 'is_used']);Z([3, '未使用']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "status"]], [1, 1]]);Z([3, 'is_used02']);Z([3, '已使用']);Z([3, 'clear']);Z([3, 'box_bottom']);Z([a, [[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "together"]], [1, 1]],[1, "不"],[1, ""]],[3, '可以和满减共用']]);Z([3, 'url']);Z([3, 'coupon_btn']);Z([3, '去使用']);Z([[2, "&&"],[[2, "=="], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]],[[7],[3, "loaded"]]]);Z([3, 'fui-loading empty']);Z([3, 'text']);Z([3, '暂无优惠券']);Z([[7],[3, "showtabbar"]]);Z([3, 'height:100rpx']);
  })(z);d_["./yb_shop/pages/common/menu.wxml"] = {};
  var m0=function(e,s,r,gg){
    var ocg = _m( "cover-view", ["class", 0,"style", 1], e, s, gg);var odg = _v();var oeg = function(oig,ohg,ogg,gg){var ofg = _m( "cover-view", ["bindtap", 3,"class", 1,"data-appid", 2,"data-key", 3,"data-lat", 4,"data-lng", 5,"data-path", 6,"data-phone", 7,"data-title", 8,"data-url", 9,"hoverClass", 10], oig, ohg, gg);var okg = _m( "cover-image", ["class", 14,"src", 1], oig, ohg, gg);_(ofg,okg);var olg = _m( "cover-view", ["class", 16,"style", 1], oig, ohg, gg);var omg = _o(18, oig, ohg, gg);_(olg,omg);_(ofg,olg);_(ogg, ofg);return ogg;};_2(2, oeg, e, s, gg, odg, "item", "index", '');_(ocg,odg);_(r,ocg);
    return r;
  };
        e_["./yb_shop/pages/common/menu.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/member/coupon/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oog = _v();
      if (_o(19, e, s, gg)) {
        oog.wxVkey = 1;var opg = _n("view");var org = _v();var osg = function(owg,ovg,oug,gg){var oyg = _n("view");_r(oyg, 'class', 21, owg, ovg, gg);var ozg = _n("view");_r(ozg, 'class', 22, owg, ovg, gg);var o_g = _n("view");_r(o_g, 'class', 23, owg, ovg, gg);var oAh = _n("text");_r(oAh, 'class', 24, owg, ovg, gg);var oBh = _o(25, owg, ovg, gg);_(oAh,oBh);_(o_g,oAh);var oCh = _n("text");_r(oCh, 'class', 26, owg, ovg, gg);var oDh = _o(27, owg, ovg, gg);_(oCh,oDh);_(o_g,oCh);_(ozg,o_g);var oEh = _n("view");_r(oEh, 'class', 28, owg, ovg, gg);var oFh = _n("view");_r(oFh, 'class', 29, owg, ovg, gg);var oGh = _n("text");var oHh = _o(30, owg, ovg, gg);_(oGh,oHh);_(oFh,oGh);_(oEh,oFh);var oIh = _v();
      if (_o(31, owg, ovg, gg)) {
        oIh.wxVkey = 1;var oJh = _n("view");_r(oJh, 'class', 32, owg, ovg, gg);var oLh = _n("text");var oMh = _o(33, owg, ovg, gg);_(oLh,oMh);_(oJh,oLh);_(oIh, oJh);
      } _(oEh,oIh);var oNh = _v();
      if (_o(34, owg, ovg, gg)) {
        oNh.wxVkey = 1;var oOh = _n("view");_r(oOh, 'class', 35, owg, ovg, gg);var oQh = _n("text");var oRh = _o(36, owg, ovg, gg);_(oQh,oRh);_(oOh,oQh);_(oNh, oOh);
      } _(oEh,oNh);var oSh = _n("view");var oTh = _v();
      if (_o(37, owg, ovg, gg)) {
        oTh.wxVkey = 1;var oUh = _n("view");_r(oUh, 'class', 38, owg, ovg, gg);var oWh = _n("text");var oXh = _o(39, owg, ovg, gg);_(oWh,oXh);_(oUh,oWh);_(oTh, oUh);
      } _(oSh,oTh);var oYh = _v();
      if (_o(40, owg, ovg, gg)) {
        oYh.wxVkey = 1;var oZh = _n("view");_r(oZh, 'class', 41, owg, ovg, gg);var obh = _n("text");var och = _o(42, owg, ovg, gg);_(obh,och);_(oZh,obh);_(oYh, oZh);
      } _(oSh,oYh);_(oEh,oSh);_(ozg,oEh);var odh = _n("view");_r(odh, 'class', 43, owg, ovg, gg);_(ozg,odh);_(oyg,ozg);var oeh = _n("view");_r(oeh, 'class', 44, owg, ovg, gg);var ofh = _n("text");var ogh = _o(45, owg, ovg, gg);_(ofh,ogh);_(oeh,ofh);_(oyg,oeh);var ohh = _m( "navigator", ["hoverClass", 13,"bindtap", 33], owg, ovg, gg);var oih = _n("view");_r(oih, 'class', 47, owg, ovg, gg);var ojh = _n("text");var okh = _o(48, owg, ovg, gg);_(ojh,okh);_(oih,ojh);_(ohh,oih);_(oyg,ohh);_(oug,oyg);return oug;};_2(20, osg, e, s, gg, org, "item", "index", '');_(opg,org);var olh = _v();
      if (_o(49, e, s, gg)) {
        olh.wxVkey = 1;var omh = _n("view");_r(omh, 'class', 50, e, s, gg);var ooh = _n("view");_r(ooh, 'class', 51, e, s, gg);var oph = _o(52, e, s, gg);_(ooh,oph);_(omh,ooh);_(olh, omh);
      } _(opg,olh);var oqh = _v();
      if (_o(53, e, s, gg)) {
        oqh.wxVkey = 1;var ovh = e_["./yb_shop/pages/member/coupon/index.wxml"].j;var oth = _n("view");_r(oth, 'style', 54, e, s, gg);_(oqh,oth);_ic("/yb_shop/pages/common/menu.wxml",e_, "./yb_shop/pages/member/coupon/index.wxml",e,s,oqh,gg);;ovh.pop();
      } _(opg,oqh);_(oog, opg);
      } _(r,oog);
    return r;
  };
        e_["./yb_shop/pages/member/coupon/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f2f2f2}.coupon_box{height:%%?220rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/my_yhq_bg.png) no-repeat center center;background-size:cover;margin-bottom:.2rem;position:relative;margin-top:.8rem;padding-top:%%?10rpx?%%}.coupon_price wx-text{color:#f45068}.coupon_price{text-align:left;height:5rem;margin-left:-5rem;float:left}.coupon_price .price02{font-size:%%?100rpx?%%;font-weight:700}.coupon_price .price01{font-size:%%?38rpx?%%}.coupon_li{float:left;padding-left:.8rem}.box_bottom{width:70%;text-align:left;position:absolute;bottom:.5rem;left:1.5rem}.box_top{height:4rem;padding-left:5rem;margin-left:1.5rem}.coupon_btn{width:4rem;position:absolute;bottom:.5rem;right:1.5rem;background:url(http://ddfwz.sssvip.net/asmce/diancan/right_arrow.png) no-repeat right center;background-size:%%?36rpx?%% %%?36rpx?%%;height:%%?46rpx?%%;text-align:left}.box_bottom wx-text,.box_top wx-text,.coupon_btn wx-text{font-size:%%?28rpx?%%}.coupon_btn wx-text{color:#f45068;display:block;height:%%?46rpx?%%;line-height:%%?46rpx?%%;text-align:left;width:4rem}.box_bottom wx-text{color:#8c8c8c}.is_used,.is_used02{width:%%?110rpx?%%;height:%%?40rpx?%%;text-align:center;line-height:%%?40rpx?%%}.is_used{border:1px solid #f45068;color:#f45068}.is_used02{border:1px solid #8c8c8c;color:#8c8c8c}.is_used wx-text,.is_used02 wx-text{font-size:%%?24rpx?%%;display:block;width:%%?100rpx?%%;height:%%?40rpx?%%;line-height:%%?36rpx?%%}.coupon_con,.coupon_con wx-text,.coupon_time wx-text,wx-coupon_time{display:block;height:%%?46rpx?%%;line-height:%%?46rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/member/coupon/index";__wxRouteBegin = true;
define("yb_shop/pages/member/coupon/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/member/book/index.js
var t = getApp(),
    e = t.requirejs("core");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    route: "member_coupon",
    menu: t.tabBar,
    menu_show: false,
    now_time: Date.parse(new Date()) / 1000,
    show: false,
    loaded: false,
    list: [],
    page: 1
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
  getList: function getList() {
    var t = this;
    e.get("Market/UserCoupon", {
      page: t.data.page,
      user_id: getApp().getCache("userinfo").uid
    }, function (i) {
      console.log(i);
      if (i.code == 0) {
        var a = {
          show: true
        };
        i.info.length > 0 && (a.page = t.data.page + 1, a.list = t.data.list.concat(i.info), i.info.length < 10 && (a.loaded = true)), //concat() 方法用于连接两个或多个数组。
        i.info.length == 0 && (a.loaded = true);
        t.setData(a);
      } else {
        e.alert(i.msg);
      }
    }, true);
  },
  /**
  *上拉加载
  */
  onReachBottom: function onReachBottom() {
    this.data.loaded || this.getList();
  },
  url: function url() {
    var url = '/yb_shop/pages/caregory/index';
    wx.navigateTo({
      url: url,
      fail: function fail(i) {
        if (i.errMsg.indexOf("tabbar") >= 0) {
          e.jump(url, 4);
        }
      }
    });
  },
  /**
   *下拉刷新
   */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      page: 1,
      list: [],
      loaded: false
    }), this.getList();
    wx.stopPullDownRefresh();
  },
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {}
});
});require("yb_shop/pages/member/coupon/index.js")@code-separator-line:["div","cover-view","cover-image","view","block","text","navigator","include"]