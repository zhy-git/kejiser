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
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page footer']);Z([[2, ">"], [[7],[3, "total"]], [1, 0]]);Z([[7],[3, "list"]]);Z([3, 'fui-list-group']);Z([3, 'margin-top:0;']);Z([3, 'fui-list-group-title noclick']);Z([3, 'none']);Z([3, 'redirect']);Z([a, [3, '/yb_shop/pages/index/index?merchid\x3d'],[[6],[[7],[3, "item"]],[3, "merchid"]]]);Z([3, '/yb_shop/static/images/icon/shop.png']);Z([3, 'text']);Z([3, '洛阳易购']);Z([3, 'fui-list-angle']);Z([3, 'angle']);Z([a, [[6],[[7],[3, "item"]],[3, "createtime"]]]);Z([3, 'itemClick']);Z([3, 'fui-list']);Z([[6],[[7],[3, "item"]],[3, "goodsid"]]);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([[7],[3, "isedit"]]);Z([3, 'fui-list-media']);Z([[2,'?:'],[[6],[[7],[3, "checkObj"]],[[6],[[7],[3, "item"]],[3, "id"]]],[1, true],[1, ""]]);Z([3, 'zoom-80']);Z([3, '#ef4f4f']);Z([3, 'round']);Z([[6],[[7],[3, "item"]],[3, "thumb"]]);Z([3, 'fui-list-inner']);Z([3, 'row']);Z([3, 'subtitle']);Z([a, [[6],[[7],[3, "item"]],[3, "title"]]]);Z([3, 'text-danger']);Z([a, [3, '￥'],[[6],[[7],[3, "item"]],[3, "marketprice"]]]);Z([3, 'text-delete']);Z([3, 'padding-left: 10rpx;']);Z([a, [3, '￥'],[[6],[[7],[3, "item"]],[3, "productprice"]]]);Z([[7],[3, "loading"]]);Z([3, 'fui-loading']);Z([3, 'icon']);Z([[2, "&&"],[[7],[3, "loaded"]],[[2, ">"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]]);Z([3, 'fui-loading empty']);Z([3, '没有更多了']);Z([[2, "&&"],[[2, "<="], [[7],[3, "total"]], [1, 0]],[[2, "!"], [[7],[3, "loading"]]]]);Z([3, '没有数据']);Z([[2, ">"], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]);Z([3, 'fui-footer']);Z([3, 'tool']);Z([3, 'check']);Z([3, 'checkAllClick']);Z([[2,'?:'],[[7],[3, "isCheckAll"]],[1, true],[1, ""]]);Z([3, '全选']);Z([3, 'btns']);Z([[2, "!"], [[7],[3, "isedit"]]]);Z([3, 'btnClick']);Z([3, 'btn btn-default btn-sm']);Z([3, 'edit']);Z([3, '编辑']);Z([a, [3, 'btn btn-danger-o btn-sm '],[[2,'?:'],[[2, ">"], [[7],[3, "checkNum"]], [1, 0]],[1, ""],[1, "disabled"]]]);Z([3, 'delete']);Z([3, '删除']);Z([3, 'btn btn-danger btn-sm']);Z([3, 'finish']);Z([3, 'margin-left:20rpx;']);Z([3, '完成']);
  })(z);d_["./yb_shop/pages/member/history/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var ovE = _n("loading");_r(ovE, 'hidden', 0, e, s, gg);var owE = _o(1, e, s, gg);_(ovE,owE);_(r,ovE);var oxE = _v();
      if (_o(0, e, s, gg)) {
        oxE.wxVkey = 1;var oyE = _n("view");_r(oyE, 'class', 2, e, s, gg);var o_E = _v();
      if (_o(3, e, s, gg)) {
        o_E.wxVkey = 1;var oCF = _v();var oDF = function(oHF,oGF,oFF,gg){var oJF = _m( "view", ["class", 5,"style", 1], oHF, oGF, gg);var oKF = _m( "navigator", ["class", 7,"hoverClass", 1,"openType", 2,"url", 3], oHF, oGF, gg);var oLF = _n("image");_r(oLF, 'src', 11, oHF, oGF, gg);_(oKF,oLF);var oMF = _n("view");_r(oMF, 'class', 12, oHF, oGF, gg);var oNF = _o(13, oHF, oGF, gg);_(oMF,oNF);_(oKF,oMF);var oOF = _n("view");_r(oOF, 'class', 14, oHF, oGF, gg);var oPF = _n("view");_r(oPF, 'class', 15, oHF, oGF, gg);var oQF = _o(16, oHF, oGF, gg);_(oPF,oQF);_(oOF,oPF);_(oKF,oOF);_(oJF,oKF);var oRF = _m( "label", ["bindtap", 17,"class", 1,"data-goodsid", 2,"data-id", 3], oHF, oGF, gg);var oSF = _v();
      if (_o(21, oHF, oGF, gg)) {
        oSF.wxVkey = 1;var oTF = _n("view");_r(oTF, 'class', 22, oHF, oGF, gg);var oVF = _m( "radio", ["checked", 23,"class", 1,"color", 2], oHF, oGF, gg);_(oTF,oVF);_(oSF, oTF);
      } _(oRF,oSF);var oWF = _n("view");_r(oWF, 'class', 22, oHF, oGF, gg);var oXF = _m( "image", ["class", 26,"src", 1], oHF, oGF, gg);_(oWF,oXF);_(oRF,oWF);var oYF = _n("view");_r(oYF, 'class', 28, oHF, oGF, gg);var oZF = _n("view");_r(oZF, 'class', 29, oHF, oGF, gg);var oaF = _n("view");_r(oaF, 'class', 30, oHF, oGF, gg);var obF = _o(31, oHF, oGF, gg);_(oaF,obF);_(oZF,oaF);_(oYF,oZF);var ocF = _n("view");_r(ocF, 'class', 30, oHF, oGF, gg);var odF = _n("text");_r(odF, 'class', 32, oHF, oGF, gg);var oeF = _o(33, oHF, oGF, gg);_(odF,oeF);_(ocF,odF);var ofF = _m( "text", ["class", 34,"style", 1], oHF, oGF, gg);var ogF = _o(36, oHF, oGF, gg);_(ofF,ogF);_(ocF,ofF);_(oYF,ocF);_(oRF,oYF);_(oJF,oRF);_(oFF,oJF);return oFF;};_2(4, oDF, e, s, gg, oCF, "item", "index", '');_(o_E,oCF);
      } _(oyE,o_E);var ohF = _v();
      if (_o(37, e, s, gg)) {
        ohF.wxVkey = 1;var oiF = _n("view");_r(oiF, 'class', 38, e, s, gg);var okF = _n("view");_r(okF, 'class', 39, e, s, gg);_(oiF,okF);var olF = _n("view");_r(olF, 'class', 12, e, s, gg);var omF = _o(1, e, s, gg);_(olF,omF);_(oiF,olF);_(ohF, oiF);
      } _(oyE,ohF);var onF = _v();
      if (_o(40, e, s, gg)) {
        onF.wxVkey = 1;var ooF = _n("view");_r(ooF, 'class', 41, e, s, gg);var oqF = _n("view");_r(oqF, 'class', 12, e, s, gg);var orF = _o(42, e, s, gg);_(oqF,orF);_(ooF,oqF);_(onF, ooF);
      } _(oyE,onF);var osF = _v();
      if (_o(43, e, s, gg)) {
        osF.wxVkey = 1;var otF = _n("view");_r(otF, 'class', 41, e, s, gg);var ovF = _n("view");_r(ovF, 'class', 12, e, s, gg);var owF = _o(44, e, s, gg);_(ovF,owF);_(otF,ovF);_(osF, otF);
      } _(oyE,osF);var oxF = _v();
      if (_o(45, e, s, gg)) {
        oxF.wxVkey = 1;var oyF = _n("view");_r(oyF, 'class', 46, e, s, gg);var o_F = _n("view");_r(o_F, 'class', 47, e, s, gg);var oAG = _n("view");_r(oAG, 'class', 48, e, s, gg);var oBG = _v();
      if (_o(21, e, s, gg)) {
        oBG.wxVkey = 1;var oCG = _n("label");_r(oCG, 'bindtap', 49, e, s, gg);var oEG = _m( "radio", ["class", 24,"color", 1,"checked", 26], e, s, gg);_(oCG,oEG);var oFG = _n("text");var oGG = _o(51, e, s, gg);_(oFG,oGG);_(oCG,oFG);_(oBG, oCG);
      } _(oAG,oBG);_(o_F,oAG);var oHG = _n("view");_r(oHG, 'class', 12, e, s, gg);_(o_F,oHG);var oIG = _n("view");_r(oIG, 'class', 52, e, s, gg);var oJG = _v();
      if (_o(53, e, s, gg)) {
        oJG.wxVkey = 1;var oKG = _m( "view", ["bindtap", 54,"class", 1,"data-action", 2], e, s, gg);var oMG = _o(57, e, s, gg);_(oKG,oMG);_(oJG, oKG);
      } _(oIG,oJG);var oNG = _v();
      if (_o(21, e, s, gg)) {
        oNG.wxVkey = 1;var oOG = _m( "view", ["bindtap", 54,"class", 4,"data-action", 5], e, s, gg);var oQG = _o(60, e, s, gg);_(oOG,oQG);_(oNG, oOG);
      } _(oIG,oNG);var oRG = _v();
      if (_o(21, e, s, gg)) {
        oRG.wxVkey = 1;var oSG = _m( "view", ["bindtap", 54,"class", 7,"data-action", 8,"style", 9], e, s, gg);var oUG = _o(64, e, s, gg);_(oSG,oUG);_(oRG, oSG);
      } _(oIG,oRG);_(o_F,oIG);_(oyF,o_F);_(oxF, oyF);
      } _(oyE,oxF);_(oxE, oyE);
      } _(r,oxE);
    return r;
  };
        e_["./yb_shop/pages/member/history/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.fui-list-inner .subtitle{font-size:%%?26rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/member/history/index";__wxRouteBegin = true;
define("yb_shop/pages/member/history/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
//我的足迹
var t = getApp(),
    e = t.requirejs("core");
Page({
  data: {
    icons: t.requirejs("icons"),
    page: 1,
    loading: false,
    loaded: false,
    isedit: false,
    isCheckAll: false,
    checkObj: {},
    checkNum: 0,
    list: []
  },
  onLoad: function onLoad() {
    this.getList();
  },
  onReachBottom: function onReachBottom() {
    this.data.loaded || this.data.list.length == this.data.total || this.getList();
  },
  onPullDownRefresh: function onPullDownRefresh() {
    wx.stopPullDownRefresh();
  },
  getList: function getList() {
    var t = this;
    t.setData({
      loading: true
    }), e.get("member/history/get_list", {
      page: t.data.page,
      openid: getApp().globalData.openid
    }, function (e) {
      var i = {
        loading: false,
        loaded: true,
        total: e.total,
        pagesize: e.pagesize,
        show: true
      };
      e.list.length > 0 && (i.page = t.data.page + 1, i.list = t.data.list.concat(e.list), e.list.length < e.pagesize && (i.loaded = true)), t.setData(i);
    });
  },
  itemClick: function itemClick(t) {
    var i = this,
        a = e.pdata(t).id,
        s = e.pdata(t).goodsid;
    if (i.data.isedit) {
      var c = i.data.checkObj,
          l = i.data.checkNum;
      c[a] ? (c[a] = false, l--) : (c[a] = true, l++);
      var o = true;
      for (var n in c) {
        if (!c[n]) {
          o = false;
          break;
        }
      }i.setData({
        checkObj: c,
        isCheckAll: o,
        checkNum: l
      });
    } else wx.navigateTo({
      url: "/yb_shop/pages/goods/detail/index?id=" + s
    });
  },
  btnClick: function btnClick(t) {
    var i = this,
        a = t.currentTarget.dataset.action;
    if ("edit" == a) {
      var s = {};
      for (var c in this.data.list) {
        s[this.data.list[c].id] = false;
      }
      i.setData({
        isedit: true,
        checkObj: s,
        isCheckAll: false
      });
    } else if ("delete" == a) {
      var s = i.data.checkObj,
          l = [];
      for (var c in s) {
        s[c] && l.push(c);
      }if (l.length < 1) return;
      e.confirm("删除后不可恢复，确定要删除吗？", function () {
        e.post("member/history/remove", {
          ids: l
        }, function (t) {
          e.toast('删除成功');
          i.setData({
            isedit: false,
            checkNum: 0
          }), i.getList();
        });
      });
    } else "finish" == a && i.setData({
      isedit: false,
      checkNum: 0
    });
  },
  checkAllClick: function checkAllClick() {
    var t = !this.data.isCheckAll,
        e = this.data.checkObj,
        i = {
      isCheckAll: t,
      checkObj: e
    };
    for (var a in e) {
      i.checkObj[a] = t;
    }i.checkNum = t ? this.data.list.length : 0, this.setData(i);
  }
});
});require("yb_shop/pages/member/history/index.js")@code-separator-line:["div","loading","view","block","navigator","image","label","radio","text"]