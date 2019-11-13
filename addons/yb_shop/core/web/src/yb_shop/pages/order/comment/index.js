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
    Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page']);Z([3, 'fui-list-group']);Z([3, 'fui-list-group-title']);Z([3, '/yb_shop/static/images/icon/shop.png']);Z([3, 'shop']);Z([a, [[7],[3, "shopname"]]]);Z([[7],[3, "goods"]]);Z([3, 'fui-list']);Z([3, 'fui-list-media']);Z([[6],[[7],[3, "item"]],[3, "thumb"]]);Z([3, 'fui-list-inner']);Z([3, 'text']);Z([a, [[6],[[7],[3, "item"]],[3, "title"]]]);Z([[6],[[7],[3, "item"]],[3, "optiontitle"]]);Z([3, 'text grade']);Z([3, 'fui-list-angle']);Z([3, 'text-right']);Z([a, [[6],[[7],[3, "ite"]],[3, "price"]]]);Z([a, [3, 'x'],[[6],[[7],[3, "item"]],[3, "total"]]]);Z([3, 'fui-title']);Z([3, '\r\n    整单评价\r\n  ']);Z([3, 'fui-cell-group evaluate']);Z([3, 'fui-cell must']);Z([3, 'fui-cell-label']);Z([3, '评分']);Z([[7],[3, "stars_class"]]);Z([3, 'select']);Z([3, 'star-image image-32']);Z([[7],[3, "index"]]);Z([[2,'?:'],[[2, ">="], [[7],[3, "key"]], [[7],[3, "index"]]],[[7],[3, "selectedSrc"]],[[7],[3, "normalSrc"]]]);Z([a, [3, 'fui-label '],[[6],[[7],[3, "stars_class"]],[[7],[3, "key"]]]]);Z([a, [[2,'?:'],[[2, "!="], [[6],[[7],[3, "key"]],[1, "-"]], [1, 1]],[[6],[[7],[3, "stars_text"]],[[7],[3, "key"]]],[1, "未评价"]]]);Z([[2, "=="], [[6],[[7],[3, "order"]],[3, "iscomment"]], [1, 0]]);Z([3, 'fui-cell']);Z([3, '晒图']);Z([3, 'fui-images fui-images-sm']);Z([[7],[3, "imgs"]]);Z([3, 'upload']);Z([3, 'image image-sm']);Z([3, 'image-preview']);Z([[7],[3, "item"]]);Z([3, 'image-remove']);Z([3, '×']);Z([3, 'fui-uploader fui-uploader-sm']);Z([3, 'image']);Z([3, '评论']);Z([3, 'textarea']);Z([3, 'change']);Z([3, 'content']);Z([3, '商品满意吗？来分享你的感受吧']);Z([3, 'fui-footer']);Z([3, 'submit']);Z([3, 'btn btn-danger block']);Z([3, '提交评价']);
  })(z);d_["./yb_shop/pages/order/comment/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var ox = _n("loading");_r(ox, 'hidden', 0, e, s, gg);var oy = _o(1, e, s, gg);_(ox,oy);_(r,ox);var oz = _v();
      if (_o(0, e, s, gg)) {
        oz.wxVkey = 1;var o_ = _n("view");_r(o_, 'class', 2, e, s, gg);var oBB = _n("view");_r(oBB, 'class', 3, e, s, gg);var oCB = _n("view");_r(oCB, 'class', 4, e, s, gg);var oDB = _n("image");_r(oDB, 'src', 5, e, s, gg);_(oCB,oDB);var oEB = _n("text");_r(oEB, 'class', 6, e, s, gg);var oFB = _o(7, e, s, gg);_(oEB,oFB);_(oCB,oEB);_(oBB,oCB);var oGB = _v();var oHB = function(oLB,oKB,oJB,gg){var oNB = _n("view");_r(oNB, 'class', 9, oLB, oKB, gg);var oOB = _n("view");_r(oOB, 'class', 10, oLB, oKB, gg);var oPB = _n("image");_r(oPB, 'src', 11, oLB, oKB, gg);_(oOB,oPB);_(oNB,oOB);var oQB = _n("view");_r(oQB, 'class', 12, oLB, oKB, gg);var oRB = _n("view");_r(oRB, 'class', 13, oLB, oKB, gg);var oSB = _o(14, oLB, oKB, gg);_(oRB,oSB);_(oQB,oRB);var oTB = _v();
      if (_o(15, oLB, oKB, gg)) {
        oTB.wxVkey = 1;var oUB = _n("view");_r(oUB, 'class', 16, oLB, oKB, gg);var oWB = _o(15, oLB, oKB, gg);_(oUB,oWB);_(oTB, oUB);
      } _(oQB,oTB);_(oNB,oQB);var oXB = _n("view");_r(oXB, 'class', 17, oLB, oKB, gg);var oYB = _n("view");_r(oYB, 'class', 18, oLB, oKB, gg);var oZB = _o(19, oLB, oKB, gg);_(oYB,oZB);_(oXB,oYB);var oaB = _n("view");_r(oaB, 'class', 18, oLB, oKB, gg);var obB = _o(20, oLB, oKB, gg);_(oaB,obB);_(oXB,oaB);_(oNB,oXB);_(oJB,oNB);return oJB;};_2(8, oHB, e, s, gg, oGB, "item", "index", '');_(oBB,oGB);_(o_,oBB);var ocB = _n("view");_r(ocB, 'class', 21, e, s, gg);var odB = _o(22, e, s, gg);_(ocB,odB);_(o_,ocB);var oeB = _n("view");_r(oeB, 'class', 23, e, s, gg);var ofB = _n("view");_r(ofB, 'class', 24, e, s, gg);var ogB = _n("view");_r(ogB, 'class', 25, e, s, gg);var ohB = _o(26, e, s, gg);_(ogB,ohB);_(ofB,ogB);var oiB = _v();var ojB = function(onB,omB,olB,gg){var opB = _m( "image", ["bindtap", 28,"class", 1,"data-key", 2,"src", 3], onB, omB, gg);_(olB,opB);return olB;};_2(27, ojB, e, s, gg, oiB, "item", "index", '');_(ofB,oiB);var oqB = _n("text");_r(oqB, 'class', 32, e, s, gg);var orB = _o(33, e, s, gg);_(oqB,orB);_(ofB,oqB);_(oeB,ofB);var osB = _v();
      if (_o(34, e, s, gg)) {
        osB.wxVkey = 1;var otB = _n("view");_r(otB, 'class', 35, e, s, gg);var ovB = _n("view");_r(ovB, 'class', 25, e, s, gg);var owB = _o(36, e, s, gg);_(ovB,owB);_(otB,ovB);var oxB = _n("view");_r(oxB, 'class', 37, e, s, gg);var oyB = _v();var ozB = function(oCC,oBC,oAC,gg){var oEC = _m( "image", ["data-index", 30,"catchtap", 9,"class", 10,"data-type", 11,"src", 12], oCC, oBC, gg);var oFC = _n("content");var oGC = _m( "text", ["data-index", 30,"catchtap", 9,"class", 13,"data-type", 13], oCC, oBC, gg);var oHC = _o(44, oCC, oBC, gg);_(oGC,oHC);_(oFC,oGC);_(oEC,oFC);_(oAC,oEC);return oAC;};_2(38, ozB, e, s, gg, oyB, "item", "index", '');_(oxB,oyB);_(otB,oxB);var oIC = _m( "view", ["catchtap", 39,"class", 6,"data-type", 7], e, s, gg);_(otB,oIC);_(osB, otB);
      } _(oeB,osB);var oJC = _n("view");_r(oJC, 'class', 24, e, s, gg);var oKC = _n("view");_r(oKC, 'class', 25, e, s, gg);var oLC = _o(47, e, s, gg);_(oKC,oLC);_(oJC,oKC);_(oeB,oJC);var oMC = _n("view");_r(oMC, 'class', 48, e, s, gg);var oNC = _m( "textarea", ["bindinput", 49,"data-name", 1,"placeholder", 2], e, s, gg);_(oMC,oNC);_(oeB,oMC);_(o_,oeB);var oOC = _n("view");_r(oOC, 'class', 52, e, s, gg);var oPC = _m( "view", ["bindtap", 53,"class", 1], e, s, gg);var oQC = _o(55, e, s, gg);_(oPC,oQC);_(oOC,oPC);_(o_,oOC);_(oz, o_);
      } _(r,oz);
    return r;
  };
        e_["./yb_shop/pages/order/comment/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}.fui-list-angle{color:#999;font-size:%%?28rpx?%%}.textarea{padding:0 %%?30rpx?%%;color:#999;font-size:%%?30rpx?%%}.image-32{margin-right:%%?10rpx?%%}.image-40{height:%%?40rpx?%%;width:%%?40rpx?%%;margin-right:%%?10rpx?%%}.fui-list-inner .text.grade{font-size:%%?30rpx?%%;margin-top:%%?10rpx?%%}.grade{font-size:%%?28rpx?%%;margin-top:%%?10rpx?%%}.default{color:#999}.fui-cell-group .fui-cell .fui-cell-label{width:%%?100rpx?%%}.btn{margin-top:%%?10rpx?%%}.chose-img,.upload{width:%%?50rpx?%%;height:%%?50rpx?%%;margin:0 %%?5rpx?%%}.delete{height:%%?30rpx?%%;width:%%?30rpx?%%;position:absolute;top:%%?10rpx?%%}.fui-label{display:inline-block;padding:0 %%?8rpx?%%;background:#d9d9d9;color:#333;margin:0 %%?4rpx?%%;font-size:%%?24rpx?%%;line-height:%%?40rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/order/comment/index";__wxRouteBegin = true;
define("yb_shop/pages/order/comment/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    a = t.requirejs("core");
Page({
  data: {
    stars_class: ["fui-label-default", "fui-label-primary", "fui-label-success", "fui-label-warning", "fui-label-danger"],
    stars_text: ["差评", "一般", "挺好", "满意", "非常满意"],
    normalSrc: "/static/images/icon/favor.png",
    selectedSrc: "/static/images/icon-red/favor_fill.png",
    key: -1,
    content: "",
    images: [],
    imgs: []
  },
  onLoad: function onLoad(ass) {
    a.setting();
    this.setData({
      options: ass
    }), t.url(ass), this.get_list();
  },
  get_list: function get_list() {
    var t = this;
    a.get("order/comment", t.data.options, function (e) {
      0 == e.error ? (e.show = true, t.setData(e)) : (a.toast(e.message, "loading"), wx.navigateBack());
    }, true);
  },
  select: function select(t) {
    var a = t.currentTarget.dataset.key;
    this.setData({
      key: a
    });
  },
  change: function change(t) {
    var e = a.data(t).name,
        i = {};
    i[e] = t.detail.value, this.setData(i);
  },
  submit: function submit() {
    var t = {
      orderid: this.data.options.id,
      comments: []
    };
    if ("" == this.data.content || -1 == this.data.key) return a.alert("有未填写项目!"), false;
    for (var e = 0, i = this.data.goods.length; e < i; e++) {
      var s = {
        goodsid: this.data.goods[e].goodsid,
        level: this.data.key + 1,
        content: this.data.content,
        images: this.data.images
      };
      t.comments.push(s);
    }
    a.post("order/comment/submit", t, function (t) {
      0 != t.error && a.toast(t.message, "loading"), wx.navigateBack();
    }, true);
  },
  upload: function upload(t) {
    var e = this,
        i = a.data(t),
        s = i.type,
        n = e.data.images,
        o = e.data.imgs,
        r = i.index;
    "image" == s ? a.upload(function (t) {
      n.push(t.filename), o.push(t.url), e.setData({
        images: n,
        imgs: o
      });
    }) : "image-remove" == s ? (n.splice(r, 1), o.splice(r, 1), e.setData({
      images: n,
      imgs: o
    })) : "image-preview" == s && wx.previewImage({
      current: o[r],
      urls: o
    });
  }
});
});require("yb_shop/pages/order/comment/index.js")@code-separator-line:["div","loading","view","image","text","block","content","textarea"]