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
    Z([a, [3, 'picker-modal city-picker '],[[2,'?:'],[[7],[3, "showPicker"]],[1, "in"],[1, "out"]]]);Z([3, 'picker-control']);Z([3, 'onCancel']);Z([3, 'cancel']);Z([3, '取消']);Z([3, 'onConfirm']);Z([3, 'confirm']);Z([3, '确定']);Z([[2, "!"], [[7],[3, "noArea"]]]);Z([3, 'bindChange']);Z([3, 'picker']);Z([3, 'height: 40px;']);Z([[7],[3, "pval"]]);Z([[7],[3, "areas"]]);Z([3, 'item']);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[6],[[6],[[7],[3, "areas"]],[[6],[[7],[3, "pval"]],[1, 0]]],[3, "city"]]);Z([[6],[[6],[[6],[[6],[[7],[3, "areas"]],[[6],[[7],[3, "pval"]],[1, 0]]],[3, "city"]],[[6],[[7],[3, "pval"]],[1, 1]]],[3, "area"]]);Z([[7],[3, "noArea"]]);Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page footer']);Z([3, 'fui-cell-group']);Z([3, 'fui-cell']);Z([3, 'none']);Z([3, '/yb_shop/pages/member/address/select']);Z([3, 'fui-cell-icon']);Z([[6],[[7],[3, "icons"]],[3, "location01"]]);Z([3, 'fui-cell-text textl info']);Z([[2, "!="], [[6],[[7],[3, "list"]],[3, "address"]], [1, ""]]);Z([3, 'name']);Z([a, [[6],[[7],[3, "address"]],[3, "consigner"]],[3, ' ']]);Z([a, [[6],[[7],[3, "address"]],[3, "phone"]]]);Z([[6],[[7],[3, "address"]],[3, "address"]]);Z([3, 'adress']);Z([a, [[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[7],[3, "address"]],[3, "province"]], [[6],[[7],[3, "address"]],[3, "city"]]], [[6],[[7],[3, "address"]],[3, "district"]]], [1, " "]], [[6],[[7],[3, "address"]],[3, "address"]]]]);Z([[2, "!"], [[6],[[7],[3, "address"]],[3, "address"]]]);Z([3, 'text no-address']);Z([3, '添加收货地址']);Z([3, 'fui-cell-remark']);Z([3, 'fui-list-group']);Z([3, 'margin-top:20rpx;']);Z([3, 'fui-list goods-item noclick']);Z([3, 'url']);Z([3, 'fui-list-media']);Z([a, [3, '/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "list"]],[3, "goods_id"]]]);Z([3, 'round goods_img']);Z([[6],[[7],[3, "list"]],[3, "pic"]]);Z([3, 'fui-list-inner']);Z([3, 'sure_subtitle']);Z([a, [3, '\r\n              '],[[6],[[7],[3, "list"]],[3, "bargain_name"]],[3, '\r\n            ']]);Z([3, 'text cart-option']);Z([3, 'fui-list-angle']);Z([3, 'price']);Z([a, [3, '￥'],[[6],[[7],[3, "list"]],[3, "original_price"]]]);Z([a, [3, 'x'],[[6],[[7],[3, "options"]],[3, "total"]]]);Z([3, 'fui-cell-info']);Z([3, 'dataChange']);Z([3, 'buyer_message']);Z([3, '选填：买家留言（50字以内）']);Z([3, 'fui-cell-text']);Z([3, '商品小计']);Z([3, 'fui-cell-remark noremark']);Z([3, '\r\n          共\r\n          ']);Z([3, 'text-danger']);Z([a, [[6],[[7],[3, "options"]],[3, "total"]]]);Z([3, ' 件商品 合计：\r\n          ']);Z([a, [3, '¥ '],[[6],[[7],[3, "data"]],[3, "order_money"]]]);Z([3, 'height:62px;']);Z([a, [3, 'fui-mask '],[[2,'?:'],[[7],[3, "showPicker"]],[1, "show"],[1, ""]]]);Z([3, 'fui-footer']);Z([3, 'tool nopadding']);Z([3, 'text']);Z([3, 'title text-right']);Z([3, '需付：\r\n          ']);Z([a, [[6],[[7],[3, "data"]],[3, "pay_money"]],[3, '元']]);Z([3, 'btns']);Z([3, 'submit']);Z([a, [3, 'btn btn-danger '],[[2,'?:'],[[7],[3, "submit"]],[1, ""],[1, "disabled"]]]);Z([3, 'background:#ed4f4e;font-size:34rpx;']);Z([3, '确认订单']);Z([a, [3, 'fui-toast '],[[2,'?:'],[[6],[[7],[3, "FoxUIToast"]],[3, "show"]],[1, "in"],[1, "out"]]]);Z([a, [[6],[[7],[3, "FoxUIToast"]],[3, "text"]]]);
  })(z);d_["./yb_shop/pages/common/city-picker.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oQmB = _n("view");_r(oQmB, 'class', 0, e, s, gg);var oRmB = _n("view");_r(oRmB, 'class', 1, e, s, gg);var oSmB = _m( "view", ["bindtap", 2,"class", 1], e, s, gg);var oTmB = _o(4, e, s, gg);_(oSmB,oTmB);_(oRmB,oSmB);var oUmB = _m( "view", ["bindtap", 5,"class", 1], e, s, gg);var oVmB = _o(7, e, s, gg);_(oUmB,oVmB);_(oRmB,oUmB);_(oQmB,oRmB);var oWmB = _v();
      if (_o(8, e, s, gg)) {
        oWmB.wxVkey = 1;var oXmB = _m( "picker-view", ["bindchange", 9,"class", 1,"indicatorStyle", 2,"value", 3], e, s, gg);var oZmB = _n("picker-view-column");var oamB = _v();var obmB = function(ofmB,oemB,odmB,gg){var ohmB = _n("view");_r(ohmB, 'class', 14, ofmB, oemB, gg);var oimB = _o(15, ofmB, oemB, gg);_(ohmB,oimB);_(odmB,ohmB);return odmB;};_2(13, obmB, e, s, gg, oamB, "item", "index", '');_(oZmB,oamB);_(oXmB,oZmB);var ojmB = _n("picker-view-column");var okmB = _v();var olmB = function(opmB,oomB,onmB,gg){var ormB = _n("view");_r(ormB, 'class', 14, opmB, oomB, gg);var osmB = _o(15, opmB, oomB, gg);_(ormB,osmB);_(onmB,ormB);return onmB;};_2(16, olmB, e, s, gg, okmB, "item", "index", '');_(ojmB,okmB);_(oXmB,ojmB);var otmB = _n("picker-view-column");var oumB = _v();var ovmB = function(ozmB,oymB,oxmB,gg){var oAnB = _n("view");_r(oAnB, 'class', 14, ozmB, oymB, gg);var oBnB = _o(15, ozmB, oymB, gg);_(oAnB,oBnB);_(oxmB,oAnB);return oxmB;};_2(17, ovmB, e, s, gg, oumB, "item", "index", '');_(otmB,oumB);_(oXmB,otmB);_(oWmB, oXmB);
      } _(oQmB,oWmB);var oCnB = _v();
      if (_o(18, e, s, gg)) {
        oCnB.wxVkey = 1;var oDnB = _m( "picker-view", ["bindchange", 9,"class", 1,"indicatorStyle", 2,"value", 3], e, s, gg);var oFnB = _n("picker-view-column");var oGnB = _v();var oHnB = function(oLnB,oKnB,oJnB,gg){var oNnB = _n("view");_r(oNnB, 'class', 14, oLnB, oKnB, gg);var oOnB = _o(15, oLnB, oKnB, gg);_(oNnB,oOnB);_(oJnB,oNnB);return oJnB;};_2(13, oHnB, e, s, gg, oGnB, "item", "index", '');_(oFnB,oGnB);_(oDnB,oFnB);var oPnB = _n("picker-view-column");var oQnB = _v();var oRnB = function(oVnB,oUnB,oTnB,gg){var oXnB = _n("view");_r(oXnB, 'class', 14, oVnB, oUnB, gg);var oYnB = _o(15, oVnB, oUnB, gg);_(oXnB,oYnB);_(oTnB,oXnB);return oTnB;};_2(16, oRnB, e, s, gg, oQnB, "item", "index", '');_(oPnB,oQnB);_(oDnB,oPnB);_(oCnB, oDnB);
      } _(oQmB,oCnB);_(r,oQmB);
    return r;
  };
        e_["./yb_shop/pages/common/city-picker.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/kanjia/order/create/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oanB = _n("loading");_r(oanB, 'hidden', 19, e, s, gg);var obnB = _o(20, e, s, gg);_(oanB,obnB);_(r,oanB);var ocnB = _v();
      if (_o(19, e, s, gg)) {
        ocnB.wxVkey = 1;var otoB = e_["./yb_shop/pages/kanjia/order/create/index.wxml"].j;var odnB = _n("view");_r(odnB, 'class', 21, e, s, gg);var ofnB = _n("view");var ohnB = _n("view");_r(ohnB, 'class', 22, e, s, gg);var oinB = _m( "navigator", ["class", 23,"hoverClass", 1,"url", 2], e, s, gg);var ojnB = _m( "image", ["class", 26,"src", 1], e, s, gg);_(oinB,ojnB);var oknB = _n("view");_r(oknB, 'class', 28, e, s, gg);var olnB = _v();
      if (_o(29, e, s, gg)) {
        olnB.wxVkey = 1;var omnB = _n("view");var oonB = _n("text");_r(oonB, 'class', 30, e, s, gg);var opnB = _o(31, e, s, gg);_(oonB,opnB);_(omnB,oonB);var oqnB = _n("text");var ornB = _o(32, e, s, gg);_(oqnB,ornB);_(omnB,oqnB);_(olnB, omnB);
      } _(oknB,olnB);var osnB = _v();
      if (_o(33, e, s, gg)) {
        osnB.wxVkey = 1;var otnB = _n("view");_r(otnB, 'class', 34, e, s, gg);var ovnB = _o(35, e, s, gg);_(otnB,ovnB);_(osnB, otnB);
      } _(oknB,osnB);var ownB = _v();
      if (_o(36, e, s, gg)) {
        ownB.wxVkey = 1;var oxnB = _n("view");_r(oxnB, 'class', 37, e, s, gg);var oznB = _o(38, e, s, gg);_(oxnB,oznB);_(ownB, oxnB);
      } _(oknB,ownB);_(oinB,oknB);var o_nB = _n("view");_r(o_nB, 'class', 39, e, s, gg);_(oinB,o_nB);_(ohnB,oinB);_(ofnB,ohnB);var oAoB = _m( "view", ["class", 40,"style", 1], e, s, gg);var oBoB = _n("view");_r(oBoB, 'class', 42, e, s, gg);var oCoB = _m( "view", ["bindtap", 43,"class", 1,"data-url", 2], e, s, gg);var oDoB = _m( "image", ["class", 46,"src", 1], e, s, gg);_(oCoB,oDoB);_(oBoB,oCoB);var oEoB = _m( "view", ["bindtap", 43,"data-url", 2,"class", 5], e, s, gg);var oFoB = _n("view");_r(oFoB, 'class', 49, e, s, gg);var oGoB = _o(50, e, s, gg);_(oFoB,oGoB);_(oEoB,oFoB);var oHoB = _n("view");_r(oHoB, 'class', 51, e, s, gg);_(oEoB,oHoB);_(oBoB,oEoB);var oIoB = _n("view");_r(oIoB, 'class', 52, e, s, gg);var oJoB = _n("text");_r(oJoB, 'class', 53, e, s, gg);var oKoB = _o(54, e, s, gg);_(oJoB,oKoB);_(oIoB,oJoB);var oLoB = _n("view");var oMoB = _o(55, e, s, gg);_(oLoB,oMoB);_(oIoB,oLoB);_(oBoB,oIoB);_(oAoB,oBoB);_(ofnB,oAoB);var oNoB = _n("view");_r(oNoB, 'class', 40, e, s, gg);var oOoB = _n("view");_r(oOoB, 'class', 22, e, s, gg);var oPoB = _n("view");_r(oPoB, 'class', 23, e, s, gg);var oQoB = _n("view");_r(oQoB, 'class', 56, e, s, gg);var oRoB = _m( "input", ["bindinput", 57,"id", 1,"placeholder", 2], e, s, gg);_(oQoB,oRoB);_(oPoB,oQoB);_(oOoB,oPoB);_(oNoB,oOoB);_(ofnB,oNoB);var oSoB = _m( "view", ["class", 22,"style", 19], e, s, gg);var oToB = _n("view");_r(oToB, 'class', 23, e, s, gg);var oUoB = _n("view");_r(oUoB, 'class', 60, e, s, gg);var oVoB = _o(61, e, s, gg);_(oUoB,oVoB);_(oToB,oUoB);var oWoB = _n("view");_r(oWoB, 'class', 62, e, s, gg);var oXoB = _o(63, e, s, gg);_(oWoB,oXoB);var oYoB = _n("text");_r(oYoB, 'class', 64, e, s, gg);var oZoB = _o(65, e, s, gg);_(oYoB,oZoB);_(oWoB,oYoB);var oaoB = _o(66, e, s, gg);_(oWoB,oaoB);var oboB = _n("text");_r(oboB, 'class', 64, e, s, gg);var ocoB = _o(67, e, s, gg);_(oboB,ocoB);_(oWoB,oboB);_(oToB,oWoB);_(oSoB,oToB);_(ofnB,oSoB);_(odnB,ofnB);var odoB = _n("view");_r(odoB, 'style', 68, e, s, gg);_(odnB,odoB);_ic("/yb_shop/pages/common/city-picker.wxml",e_, "./yb_shop/pages/kanjia/order/create/index.wxml",e,s,odnB,gg);var ofoB = _n("view");_r(ofoB, 'class', 69, e, s, gg);_(odnB,ofoB);var ogoB = _n("view");_r(ogoB, 'class', 70, e, s, gg);var ohoB = _n("view");_r(ohoB, 'class', 71, e, s, gg);var oioB = _n("view");_r(oioB, 'class', 72, e, s, gg);var ojoB = _n("view");_r(ojoB, 'class', 73, e, s, gg);var okoB = _o(74, e, s, gg);_(ojoB,okoB);var oloB = _n("text");_r(oloB, 'class', 64, e, s, gg);var omoB = _o(75, e, s, gg);_(oloB,omoB);_(ojoB,oloB);_(oioB,ojoB);_(ohoB,oioB);var onoB = _n("view");_r(onoB, 'class', 76, e, s, gg);var oooB = _m( "text", ["bindtap", 77,"class", 1,"style", 2], e, s, gg);var opoB = _o(80, e, s, gg);_(oooB,opoB);_(onoB,oooB);_(ohoB,onoB);_(ogoB,ohoB);_(odnB,ogoB);var oqoB = _n("view");_r(oqoB, 'class', 81, e, s, gg);var oroB = _n("view");_r(oroB, 'class', 72, e, s, gg);var osoB = _o(82, e, s, gg);_(oroB,osoB);_(oqoB,oroB);_(odnB,oqoB);;otoB.pop();_(ocnB, odnB);
      } _(r,ocnB);
    return r;
  };
        e_["./yb_shop/pages/kanjia/order/create/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}.picker-modal{background:#fefefe;height:260px;position:fixed;bottom:0;left:0;right:0;z-index:1000;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.picker-modal.city-picker{z-index:2000}.picker-modal.in{transition-duration:.3s;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.picker-modal.out{transition-duration:.3s;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.picker-modal .picker-control{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;height:40px;border-bottom:1px solid #f1f1f1;padding:0 %%?30rpx?%%;font-size:%%?32rpx?%%}.picker-modal .picker-control .cancel{width:50%;text-align:left;color:#666}.picker-modal .picker-control .confirm{width:50%;text-align:right;color:#20b21f}.picker-modal .picker{width:100%;height:220px}.picker-modal .picker .item{line-height:40px}wx-picker-view-column{text-align:center}wx-body{background:#f7f7f7}.nav{width:100%;height:%%?90rpx?%%;display:-webkit-flex;display:flex;-webkit-flex-direction:row;flex-direction:row;background:#fff}.default{line-height:%%?90rpx?%%;text-align:center;-webkit-flex:1;flex:1;color:#666;font-size:%%?32rpx?%%}.red{line-height:%%?90rpx?%%;text-align:center;color:#ef4f4f;-webkit-flex:1;flex:1;font-size:%%?32rpx?%%;border-bottom:2px solid #ef4f4f}.switch{float:right;zoom:90%;overflow:hidden}.btn{padding:0 %%?60rpx?%%;border-radius:0;height:%%?100rpx?%%;line-height:%%?100rpx?%%;margin:0}.fui-list-inner .sure_subtitle{line-height:%%?36rpx?%%;position:relative;font-size:%%?30rpx?%%;color:#444;max-height:%%?72rpx?%%;overflow:hidden}.fui-number{height:%%?40rpx?%%;width:%%?130rpx?%%}.minus,.plus{width:%%?40rpx?%%;height:%%?40rpx?%%;font-size:%%?40rpx?%%;line-height:%%?40rpx?%%}.fui-list-angle{margin-right:0;text-align:right}.fui-cell-text .shop_name{font-size:%%?33rpx?%%}.cart-option .choose-option{font-size:%%?24rpx?%%;color:#ccc}.fui-list-angle .price{color:#e02e24;font-size:%%?24rpx?%%}.fui-list-angle wx-view{font-size:%%?24rpx?%%;color:#444}body{background:#f2f2f2}@code-separator-line:__wxRoute = "yb_shop/pages/kanjia/order/create/index";__wxRouteBegin = true;
define("yb_shop/pages/kanjia/order/create/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };
var t = "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator) ? function (t) {
  return typeof t === "undefined" ? "undefined" : _typeof(t);
} : function (t) {
  return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t === "undefined" ? "undefined" : _typeof(t);
},
    e = getApp(),
    a = e.requirejs("core"),
    r = e.requirejs("check");
Page({
  data: {
    icons: e.requirejs("icons"),
    list: {},
    data: [],
    showPicker: false,
    pvalOld: [0, 0, 0],
    pval: [0, 0, 0],
    areas: [],
    noArea: true,
    submit: true,
    button_color: e.config.button_color
  },
  onLoad: function onLoad(t) {
    a.setting();
    var i = this,
        data = this.data,
        d = {};
    this.setData({
      options: t,
      button_color: getApp().config.button_color
    });
    //获取用户地址
    a.get("Area/UserAddress", { uid: getApp().getCache("userinfo").uid }, function (t) {
      if (t.code == 0) {
        i.setData({
          address: t.info.address
        });
        //获取订单信息
        a.get("Bargain/GoodsInfo", { id: i.data.options.bargain_id }, function (t) {
          0 == t.code ? (i.setData({
            list: t.info.bargain_info,
            show: true
          }), i.caculate()) : a.alert(t.msg);
        }, true);
      } else {
        a.alert(t.msg);
      }
    });
  },
  onShow: function onShow() {
    var i = this,
        d = e.getCache("orderAddress");
    if (d) {
      this.setData({
        address: d
      });
      i.caculate();
    }
  },
  /**
   *返回触发事件
   * @param t 事件
   * @return array
   */
  toggle: function toggle(t) {
    var e = a.pdata(t),
        i = e.id,
        d = e.type,
        r = {};
    r[d] = 0 == i || void 0 === i ? 1 : 0, this.setData(r);
  },
  /**
   *打电话
   */
  phone: function phone(t) {
    a.phone(t);
  },
  //计算
  caculate: function caculate() {
    var e = this,
        a = e.data.address;
    //订单价
    a.order_money = e.data.options.current_price;
    //运费
    // a.shipping_money = e.data.options.total * e.data.list.goods.shipping_fee;
    //实付价
    //a.pay_money = parseFloat(e.data.options.total * (e.data.list.price - e.data.list.goods.shipping_fee) - discount_money);
    a.pay_money = e.data.options.current_price;
    a.total = e.data.options.total;
    a.user_name = getApp().getCache("userinfo").nickName;
    a.buyer_id = getApp().getCache("userinfo").uid;
    a.mch_id = e.data.list.mch_id;
    a.activity_order_type = e.data.options.activity_order_type ? e.data.options.activity_order_type : 0;
    a.bargain_id = e.data.options.bargain_id;
    e.setData({
      data: a
    });
  },
  //提交订单
  submit: function submit() {
    var e = this,
        t = this.data;
    if (!t.submit) {
      wx.navigateTo({
        url: "/yb_shop/pages/kanjia/order/pay/index?id=" + e.data.order_id
      });
    } else {
      if (!t.address.phone || t.address.province == '') {
        a.alert('请选择收货地址！');
        return false;
      }
      a.get("Bargain/CreateOrder", t.data, function (t) {
        if (0 == t.code) {
          e.setData({
            submit: false,
            order_id: t.info
          }), wx.navigateTo({
            url: "/yb_shop/pages/kanjia/order/pay/index?id=" + t.info
          });
        } else {
          a.alert(t.msg);
        }
      });
    }
  },
  dataChange: function dataChange(t) {
    var e = this.data.data,
        a = this.data.list;
    switch (t.target.id) {
      case "buyer_message":
        //留言
        e.buyer_message = t.detail.value;
        break;
    }
    this.setData({
      data: e
      //list: a
    });
  },
  radioChange: function radioChange(e) {
    //console.log(e.detail.value)
    this.setData({
      data: e
      //list: a
    });
  },
  url: function url(t) {
    var e = a.pdata(t).url;
    wx.redirectTo({
      url: e
    });
  },
  /**
  * 下拉刷新
  */
  onPullDownRefresh: function onPullDownRefresh() {
    wx.stopPullDownRefresh();
  }
});
});require("yb_shop/pages/kanjia/order/create/index.js")@code-separator-line:["div","view","picker-view","picker-view-column","block","loading","navigator","image","text","input","include"]