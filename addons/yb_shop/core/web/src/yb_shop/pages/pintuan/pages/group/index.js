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
    Z([3, 'loading text-center']);Z([3, 'margin-top:20rpx;']);Z([[7],[3, "loading"]]);Z([3, '../../resource/loading.svg']);Z([3, 'width: 168rpx;height: 88rpx']);Z([[2, ">"], [[6],[[7],[3, "groupList"]],[3, "length"]], [1, 0]]);Z([[7],[3, "groupList"]]);Z([3, 'unique']);Z([3, 'showGoodsDetail']);Z([3, 'group-item bg-fff mb-10']);Z([[6],[[7],[3, "item"]],[3, "gid"]]);Z([3, 'goods-img p-20']);Z([3, 'aspectFill']);Z([[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "img"]]);Z([3, 'goods-info pull-right p-20']);Z([3, 'goods-title']);Z([a, [[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "name"]]]);Z([3, 'color-ccc']);Z([a, [[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "groupNum"]],[3, '人团']]);Z([3, 'goods-price']);Z([a, [3, '¥'],[[6],[[7],[3, "item"]],[3, "totalPrice"]]]);Z([3, 'pull-right text-red']);Z([a, [[6],[[7],[3, "item"]],[3, "groupStatus"]]]);Z([3, 'clearfix']);Z([3, 'user-option pull-right']);Z([3, 'showOrderInfo']);Z([3, 'pull-right btn']);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([3, '查看订单详情']);Z([3, 'showGroupInfo']);Z([3, '查看团详情']);Z([[2, "&&"],[[2, "=="], [[6],[[7],[3, "groupList"]],[3, "length"]], [1, 0]],[[2, "!"], [[7],[3, "loading"]]]]);Z([3, 'no-group']);Z([3, 'text-center']);Z([3, '../../resource/no-orders.png']);Z([3, 'mt-20']);Z([3, '您没有相关订单']);Z([3, 'loading']);Z([[8], "loading", [[7],[3, "loading"]]]);Z([3, 'loading-more']);Z([3, 'scroll-view-x']);Z([3, 'true']);Z([3, 'scroll-view-item']);Z([3, 'swichNav']);Z([[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 0]],[1, "on"],[1, ""]]);Z([3, '0']);Z([3, '全部']);Z([[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 1]],[1, "on"],[1, ""]]);Z([3, '1']);Z([3, '待成团']);Z([[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 2]],[1, "on"],[1, ""]]);Z([3, '2']);Z([3, '已成团']);Z([[2,'?:'],[[2, "=="], [[7],[3, "currentTab"]], [1, 3]],[1, "on"],[1, ""]]);Z([3, '3']);Z([3, '拼团失败']);Z([3, 'bindChange']);Z([3, 'swiper-box']);Z([[7],[3, "currentTab"]]);Z([3, '300']);Z([a, [3, 'height: '],[[2, "-"], [[7],[3, "windowHeight"]], [1, 36]],[3, 'px;']]);Z([3, 'scrolltolower']);Z([3, 'scroll-view-y']);Z([3, '50']);Z([[7],[3, "scrollTop"]]);Z([3, 'groupList']);Z([[9], [[8], "groupList", [[7],[3, "groupList"]]],[[8], "loading", [[7],[3, "loading"]]]]);
  })(z);d_["./yb_shop/pages/pintuan/pages/template/grouplist.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/grouplist.wxml"]["loading"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/grouplist.wxml:loading'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/grouplist.wxml');return}
    p_[b]=true
    try{
      var oZi = _m( "view", ["class", 0,"style", 1], e, s, gg);var oai = _v();
      if (_o(2, e, s, gg)) {
        oai.wxVkey = 1;var odi = _m( "image", ["src", 3,"style", 1], e, s, gg);_(oai,odi);
      } _(oZi,oai);_(r,oZi);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/pages/pintuan/pages/template/grouplist.wxml"]["groupList"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/grouplist.wxml:groupList'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/grouplist.wxml');return}
    p_[b]=true
    try{
      var ofi = _v();
      if (_o(5, e, s, gg)) {
        ofi.wxVkey = 1;var ogi = _n("view");var oii = _v();var oji = function(oni,omi,oli,gg){var opi = _m( "view", ["bindtap", 8,"class", 1,"data-id", 2], oni, omi, gg);var oqi = _n("view");_r(oqi, 'class', 11, oni, omi, gg);var ori = _m( "image", ["mode", 12,"src", 1], oni, omi, gg);_(oqi,ori);_(opi,oqi);var osi = _n("view");_r(osi, 'class', 14, oni, omi, gg);var oti = _n("view");_r(oti, 'class', 15, oni, omi, gg);var oui = _o(16, oni, omi, gg);_(oti,oui);_(osi,oti);var ovi = _n("text");_r(ovi, 'class', 17, oni, omi, gg);var owi = _o(18, oni, omi, gg);_(ovi,owi);_(osi,ovi);var oxi = _n("text");_r(oxi, 'class', 19, oni, omi, gg);var oyi = _o(20, oni, omi, gg);_(oxi,oyi);_(osi,oxi);var ozi = _n("view");_r(ozi, 'class', 21, oni, omi, gg);var o_i = _o(22, oni, omi, gg);_(ozi,o_i);_(osi,ozi);_(opi,osi);var oAj = _n("view");_r(oAj, 'class', 23, oni, omi, gg);_(opi,oAj);_(oli,opi);var oBj = _n("view");_r(oBj, 'class', 24, oni, omi, gg);var oCj = _m( "view", ["bindtap", 25,"class", 1,"data-id", 2], oni, omi, gg);var oDj = _o(28, oni, omi, gg);_(oCj,oDj);_(oBj,oCj);var oEj = _m( "view", ["class", 26,"data-id", 1,"bindtap", 3], oni, omi, gg);var oFj = _o(30, oni, omi, gg);_(oEj,oFj);_(oBj,oEj);_(oli,oBj);var oGj = _n("view");_r(oGj, 'class', 23, oni, omi, gg);_(oli,oGj);return oli;};_2(6, oji, e, s, gg, oii, "item", "index", 'unique');_(ogi,oii);_(ofi, ogi);
      } _(r,ofi);var oHj = _v();
      if (_o(31, e, s, gg)) {
        oHj.wxVkey = 1;var oIj = _n("view");_r(oIj, 'class', 32, e, s, gg);var oKj = _n("view");_r(oKj, 'class', 33, e, s, gg);var oLj = _n("image");_r(oLj, 'src', 34, e, s, gg);_(oKj,oLj);var oMj = _n("view");_r(oMj, 'class', 35, e, s, gg);var oNj = _o(36, e, s, gg);_(oMj,oNj);_(oKj,oMj);_(oIj,oKj);_(oHj, oIj);
      } _(r,oHj);var oOj = _v();
       var oPj = _o(37, e, s, gg);
       var oRj = _gd('./yb_shop/pages/pintuan/pages/template/grouplist.wxml', oPj, e_, d_);
       if (oRj) {
         var oQj = _1(38,e,s,gg);
         oRj(oQj,oQj,oOj, gg);
       } else _w(oPj, './yb_shop/pages/pintuan/pages/template/grouplist.wxml', 0, 0);_(r,oOj);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m0=function(e,s,r,gg){
    
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/template/grouplist.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/group/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oVj = e_["./yb_shop/pages/pintuan/pages/group/index.wxml"].i;_ai(oVj, '/yb_shop/pages/pintuan/pages/template/grouplist.wxml', e_, './yb_shop/pages/pintuan/pages/group/index.wxml', 0, 0);var oXj = _m( "scroll-view", ["class", 40,"scrollX", 1], e, s, gg);var oYj = _n("view");_r(oYj, 'class', 42, e, s, gg);var oZj = _m( "view", ["bindtap", 43,"class", 1,"data-current", 2], e, s, gg);var oaj = _o(46, e, s, gg);_(oZj,oaj);_(oYj,oZj);_(oXj,oYj);var obj = _n("view");_r(obj, 'class', 42, e, s, gg);var ocj = _m( "view", ["bindtap", 43,"class", 4,"data-current", 5], e, s, gg);var odj = _o(49, e, s, gg);_(ocj,odj);_(obj,ocj);_(oXj,obj);var oej = _n("view");_r(oej, 'class', 42, e, s, gg);var ofj = _m( "view", ["bindtap", 43,"class", 7,"data-current", 8], e, s, gg);var ogj = _o(52, e, s, gg);_(ofj,ogj);_(oej,ofj);_(oXj,oej);var ohj = _n("view");_r(ohj, 'class', 42, e, s, gg);var oij = _m( "view", ["bindtap", 43,"class", 10,"data-current", 11], e, s, gg);var ojj = _o(55, e, s, gg);_(oij,ojj);_(ohj,oij);_(oXj,ohj);_(r,oXj);var okj = _m( "swiper", ["bindchange", 56,"class", 1,"current", 2,"duration", 3,"style", 4], e, s, gg);var olj = _n("swiper-item");var omj = _m( "scroll-view", ["scrollWithAnimation", 41,"scrollY", 0,"style", 19,"bindscrolltolower", 20,"class", 21,"lowerThreshold", 22,"scrollTop", 23], e, s, gg);var onj = _v();
       var ooj = _o(65, e, s, gg);
       var oqj = _gd('./yb_shop/pages/pintuan/pages/group/index.wxml', ooj, e_, d_);
       if (oqj) {
         var opj = _1(66,e,s,gg);
         oqj(opj,opj,onj, gg);
       } else _w(ooj, './yb_shop/pages/pintuan/pages/group/index.wxml', 0, 0);_(omj,onj);_(olj,omj);_(okj,olj);var orj = _n("swiper-item");var osj = _m( "scroll-view", ["scrollWithAnimation", 41,"scrollY", 0,"style", 19,"bindscrolltolower", 20,"class", 21,"lowerThreshold", 22,"scrollTop", 23], e, s, gg);var otj = _v();
       var ouj = _o(65, e, s, gg);
       var owj = _gd('./yb_shop/pages/pintuan/pages/group/index.wxml', ouj, e_, d_);
       if (owj) {
         var ovj = _1(66,e,s,gg);
         owj(ovj,ovj,otj, gg);
       } else _w(ouj, './yb_shop/pages/pintuan/pages/group/index.wxml', 0, 0);_(osj,otj);_(orj,osj);_(okj,orj);var oxj = _n("swiper-item");var oyj = _m( "scroll-view", ["scrollWithAnimation", 41,"scrollY", 0,"style", 19,"bindscrolltolower", 20,"class", 21,"lowerThreshold", 22,"scrollTop", 23], e, s, gg);var ozj = _v();
       var o_j = _o(65, e, s, gg);
       var oBk = _gd('./yb_shop/pages/pintuan/pages/group/index.wxml', o_j, e_, d_);
       if (oBk) {
         var oAk = _1(66,e,s,gg);
         oBk(oAk,oAk,ozj, gg);
       } else _w(o_j, './yb_shop/pages/pintuan/pages/group/index.wxml', 0, 0);_(oyj,ozj);_(oxj,oyj);_(okj,oxj);var oCk = _n("swiper-item");var oDk = _m( "scroll-view", ["scrollWithAnimation", 41,"scrollY", 0,"style", 19,"bindscrolltolower", 20,"class", 21,"lowerThreshold", 22,"scrollTop", 23], e, s, gg);var oEk = _v();
       var oFk = _o(65, e, s, gg);
       var oHk = _gd('./yb_shop/pages/pintuan/pages/group/index.wxml', oFk, e_, d_);
       if (oHk) {
         var oGk = _1(66,e,s,gg);
         oHk(oGk,oGk,oEk, gg);
       } else _w(oFk, './yb_shop/pages/pintuan/pages/group/index.wxml', 0, 0);_(oDk,oEk);_(oCk,oDk);_(okj,oCk);_(r,okj);var oIk = _v();
       var oJk = _o(37, e, s, gg);
       var oLk = _gd('./yb_shop/pages/pintuan/pages/group/index.wxml', oJk, e_, d_);
       if (oLk) {
         var oKk = _1(38,e,s,gg);
         oLk(oKk,oKk,oIk, gg);
       } else _w(oJk, './yb_shop/pages/pintuan/pages/group/index.wxml', 0, 0);_(r,oIk);oVj.pop();
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/group/index.wxml"]={f:m1,j:[],i:[],ti:["/yb_shop/pages/pintuan/pages/template/grouplist.wxml"],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background-color:#f2f2f2;font-size:%%?26rpx?%%;color:#1b1b1b}wx-image{vertical-align:middle}.text-center{text-align:center}.pull-left{float:left}.pull-right{float:right}.clearfix{clear:both}.bg-fff{background-color:#fff}.mt-10{margin-top:%%?10rpx?%%}.mt-20{margin-top:%%?20rpx?%%}.p-20{padding:%%?20rpx?%%}.text-red{color:red}.row{width:100%}.on{border-bottom:2px solid red;color:red!important}.swiper-box{min-height:%%?1000rpx?%%}wx-swiper-item wx-image{width:100%;height:100%}.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff}.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%%?20rpx?%%;border-radius:%%?10rpx?%%}.loading wx-image{width:100prx;height:%%?100rpx?%%}.loading .no-data{padding:%%?40rpx?%%;color:#ccc;font-size:%%?22rpx?%%}.flex{display:flex}.flex-row{display:flex;flex-direction:row}.flex-col{display:flex;flex-direction:column}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-grow-2{flex-grow:2}.flex-x-center{display:flex;justify-content:center}.flex-x-left{display:flex;justify-content:left}.flex-x-right{display:flex;justify-content:right}.flex-y-center{display:flex;align-items:center}.flex-y-bottom{display:flex;align-items:flex-end}.float-icon{position:fixed;z-index:20;right:%%?40rpx?%%;bottom:%%?30rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.float-icon1{margin-bottom:%%?20rpx?%%}.float-icon2{margin-bottom:%%?20rpx?%%}.scroll-view-x{background-color:#fff;white-space:nowrap}.scroll-view-x .scroll-view-item{display:inline-block;margin-left:%%?56rpx?%%;line-height:38px}wx-swiper{height:%%?304rpx?%%}.goods-img{display:inline-block}.group-item wx-image{width:%%?200rpx?%%;height:%%?200rpx?%%}.goods-info{width:62%}.goods-title{height:%%?150rpx?%%;overflow:hidden;line-height:%%?40rpx?%%}.goods-price{color:red;margin-left:%%?20rpx?%%}.user-option{width:100%;margin-bottom:%%?10rpx?%%;background:#f7f7f7}.btn{border:1px solid #ff4544;margin:%%?20rpx?%% %%?20rpx?%% %%?20rpx?%% 0;border-radius:%%?10rpx?%%;background:#ff4544;color:#fff}.no-group{position:absolute;width:100%}.no-group wx-image{width:%%?300rpx?%%;height:%%?300rpx?%%}.no-group>wx-view{margin-top:%%?240rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/group/index";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/group/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/group/index.js
var app = getApp(),
    a = app.requirejs("core");
Page({
  data: {
    currentTab: 0,
    scrollTop: 0,
    page: 0,
    groupList: [],
    loading: true
  },
  onLoad: function onLoad(options) {
    var systemInfo = wx.getSystemInfoSync();
    this.setData({
      windowHeight: systemInfo.windowHeight
    });
    this.setCurrentData();
  },
  onShow: function onShow() {},
  setCurrentData: function setCurrentData() {
    var t = this;
    t.setData({
      loading: true
    }), a.get("Pintuan/ptGroupList", {
      page: t.data.page,
      status: t.data.currentTab,
      uid: getApp().getCache("userinfo").uid
    }, function (e) {
      console.log(e);
      0 == e.code ? (t.setData({
        loading: false,
        show: true
      }), e.info.length > 0 && t.setData({
        page: t.data.page + 1,
        groupList: t.data.groupList.concat(e.info)
      }), e.info.length < 10 && t.setData({
        loaded: true
      })) : a.alert(e.msg);
    }, true);
  },
  showGoodsDetail: function showGoodsDetail(e) {
    var id = e.currentTarget.dataset.id;
    if (!id) return;
    app.redirect('goods/detail', "gid=" + id);
  },
  showGroupInfo: function showGroupInfo(e) {
    var id = e.currentTarget.dataset.id;
    app.redirect('group/detail', "id=" + id);
  },
  showOrderInfo: function showOrderInfo(e) {
    var id = e.currentTarget.dataset.id;
    app.redirect('orders/detail', "oid=" + id);
  },
  // 滑动切换tab 
  bindChange: function bindChange(e) {
    this.data.page = 0;
    this.data.groupData = [];
    this.data.loading = true;
    this.data.currentTab = e.detail.current;
    this.setData({
      loading: true,
      groupList: [],
      currentTab: this.data.currentTab
    });
    this.setCurrentData();
  },
  // 点击tab切换 
  swichNav: function swichNav(e) {
    if (this.data.currentTab == e.currentTarget.dataset.current) return;
    this.data.currentTab = e.currentTarget.dataset.current;
    this.setData({
      currentTab: this.data.currentTab
    });
  },
  /**
   * 下拉刷新
   */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      groupList: [],
      page: 1,
      loaded: false
    });
    this.setCurrentData();
    wx.stopPullDownRefresh();
  },
  scrolltolower: function scrolltolower() {
    console.log('加载更多');
    this.data.loaded || this.setCurrentData();
  }
});
});require("yb_shop/pages/pintuan/pages/group/index.js")@code-separator-line:["div","template","view","block","image","text","import","scroll-view","swiper","swiper-item"]