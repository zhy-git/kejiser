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
    Z([[6],[[7],[3, "toast"]],[3, "toastStatus"]]);Z([3, 'toast']);Z([[6],[[7],[3, "toast"]],[3, "toastAnimationData"]]);Z([3, 'toast-mask']);Z([3, 'toast-titile']);Z([a, [[6],[[7],[3, "toast"]],[3, "toastTitle"]]]);Z([[8], "toast", [[7],[3, "toast"]]]);Z([[7],[3, "address"]]);Z([3, 'showAddressList']);Z([3, 'address bg-fff flex-row flex-y-center']);Z([3, 'pull-left flex-grow-0']);Z([3, '../../resource/address.png']);Z([3, 'address-info flex-grow-1']);Z([3, 'flex-row flex-y-center address-top']);Z([3, 'add-name flex-grow-0']);Z([a, [[6],[[7],[3, "address"]],[3, "userName"]]]);Z([3, 'flex-grow-0']);Z([a, [[6],[[7],[3, "address"]],[3, "telNumber"]]]);Z([3, 'flex-row flex-y-center address-dt']);Z([a, [3, '\n			'],[[6],[[7],[3, "address"]],[3, "province"]],[3, '\n			'],[[6],[[7],[3, "address"]],[3, "city"]],[3, '\n			'],[[6],[[7],[3, "address"]],[3, "county"]],[3, ' \n			'],[[6],[[7],[3, "address"]],[3, "address"]],[3, '\n		']]);Z([3, 'pull-right']);Z([3, '../../resource/left-b.png']);Z([3, 'no-address ']);Z([3, 'add-by-user bg-fff flex-row flex-y-center']);Z([3, '../../resource/add-red.png']);Z([3, 'flex-grow-1']);Z([3, '请选择收货地址']);Z([3, 'left flex-grow-0']);Z([3, 'goods-item flex-row']);Z([3, 'aspectFill']);Z([[6],[[7],[3, "goodsInfo"]],[3, "img"]]);Z([3, 'goods-info flex-grow-1']);Z([3, 'goods-title flex-row']);Z([a, [[6],[[7],[3, "goodsInfo"]],[3, "name"]]]);Z([3, 'goods-property flex-row']);Z([[7],[3, "goodsProp"]]);Z([3, 'unique']);Z([3, 'goods-spec']);Z([a, [[6],[[7],[3, "item"]],[3, "pname"]]]);Z([a, [[6],[[7],[3, "item"]],[3, "name"]],[3, '\n				']]);Z([3, 'goods-price flex-grow-1']);Z([a, [3, '¥'],[[7],[3, "goodsPrice"]]]);Z([3, 'clearfix']);Z([3, 'buy-num flex-row flex-y-center']);Z([3, 'flex-grow-1 flex-x-left']);Z([3, 'buy-num-text']);Z([3, '购买数量']);Z([3, 'flex-grow-0 flex-x-right buy-num-play']);Z([[2, ">"], [[7],[3, "goodsNum"]], [1, 1]]);Z([3, 'minus']);Z([3, 'flex-grow-0 minus']);Z([3, '../../resource/minus.png']);Z([3, '../../resource/not-minus.png']);Z([3, 'flex-grow-0 flex-y-center flex-x-center buy-value']);Z([a, [[7],[3, "goodsNum"]]]);Z([[2, "<"], [[7],[3, "goodsNum"]], [[6],[[7],[3, "goodsInfo"]],[3, "stock"]]]);Z([3, 'plus']);Z([3, 'flex-grow-0 plus']);Z([3, '../../resource/plus.png']);Z([3, '../../resource/not-plus.png']);Z([3, 'flex-row freight']);Z([3, 'flex-grow-1 flex-y-center freight-title']);Z([3, '运费']);Z([3, 'flex-grow-0 flex-y-center freight-money']);Z([a, [3, '¥'],[[7],[3, "freight"]]]);Z([3, 'flex-row footer']);Z([3, 'flex-grow-1 flex-y-center footer-title']);Z([3, 'margin-top: -3pt;']);Z([3, '总计：']);Z([3, 'goods-price']);Z([a, [3, '¥'],[[7],[3, "totalPrice"]]]);Z([a, [3, '\n		(运费¥'],[[7],[3, "freight"]],[3, ')\n	']]);Z([3, 'goToPay']);Z([3, 'flex-grow-0 btn flex-y-center flex-x-center']);Z([3, '立即支付']);
  })(z);d_["./yb_shop/pages/pintuan/pages/template/toast.wxml"] = {};d_["./yb_shop/pages/pintuan/pages/template/toast.wxml"]["toast"]=function(e,s,r,gg){
    var b='./yb_shop/pages/pintuan/pages/template/toast.wxml:toast'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/pages/pintuan/pages/template/toast.wxml');return}
    p_[b]=true
    try{
      var ogAB = _v();
      if (_o(0, e, s, gg)) {
        ogAB.wxVkey = 1;var ohAB = _n("view");_r(ohAB, 'class', 1, e, s, gg);var ojAB = _v();
      if (_o(0, e, s, gg)) {
        ojAB.wxVkey = 1;var okAB = _m( "view", ["animation", 2,"class", 1], e, s, gg);var omAB = _n("view");_r(omAB, 'class', 4, e, s, gg);var onAB = _o(5, e, s, gg);_(omAB,onAB);_(okAB,omAB);_(ojAB, okAB);
      } _(ohAB,ojAB);_(ogAB, ohAB);
      } _(r,ogAB);
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
        e_["./yb_shop/pages/pintuan/pages/template/toast.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/pintuan/pages/goods/payfor.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oqAB = e_["./yb_shop/pages/pintuan/pages/goods/payfor.wxml"].i;_ai(oqAB, '../template/toast.wxml', e_, './yb_shop/pages/pintuan/pages/goods/payfor.wxml', 0, 0);var osAB = _v();
       var otAB = _o(1, e, s, gg);
       var ovAB = _gd('./yb_shop/pages/pintuan/pages/goods/payfor.wxml', otAB, e_, d_);
       if (ovAB) {
         var ouAB = _1(6,e,s,gg);
         ovAB(ouAB,ouAB,osAB, gg);
       } else _w(otAB, './yb_shop/pages/pintuan/pages/goods/payfor.wxml', 0, 0);_(r,osAB);var owAB = _v();
      if (_o(7, e, s, gg)) {
        owAB.wxVkey = 1;var oxAB = _m( "view", ["bindtap", 8,"class", 1], e, s, gg);var ozAB = _m( "image", ["class", 10,"src", 1], e, s, gg);_(oxAB,ozAB);var o_AB = _n("view");_r(o_AB, 'class', 12, e, s, gg);var oABB = _n("view");_r(oABB, 'class', 13, e, s, gg);var oBBB = _n("text");_r(oBBB, 'class', 14, e, s, gg);var oCBB = _o(15, e, s, gg);_(oBBB,oCBB);_(oABB,oBBB);var oDBB = _n("text");_r(oDBB, 'class', 16, e, s, gg);var oEBB = _o(17, e, s, gg);_(oDBB,oEBB);_(oABB,oDBB);_(o_AB,oABB);var oFBB = _n("view");_r(oFBB, 'class', 18, e, s, gg);var oGBB = _o(19, e, s, gg);_(oFBB,oGBB);_(o_AB,oFBB);_(oxAB,o_AB);var oHBB = _m( "image", ["class", 20,"src", 1], e, s, gg);_(oxAB,oHBB);_(owAB, oxAB);
      }else {
        owAB.wxVkey = 2;var oIBB = _m( "view", ["bindtap", 8,"class", 14], e, s, gg);var oKBB = _n("view");_r(oKBB, 'class', 23, e, s, gg);var oLBB = _m( "image", ["class", 16,"src", 8], e, s, gg);_(oKBB,oLBB);var oMBB = _n("text");_r(oMBB, 'class', 25, e, s, gg);var oNBB = _o(26, e, s, gg);_(oMBB,oNBB);_(oKBB,oMBB);var oOBB = _m( "image", ["src", 21,"class", 6], e, s, gg);_(oKBB,oOBB);_(oIBB,oKBB);_(owAB, oIBB);
      }_(r,owAB);var oPBB = _n("view");_r(oPBB, 'class', 28, e, s, gg);var oQBB = _m( "image", ["mode", 29,"src", 1], e, s, gg);_(oPBB,oQBB);var oRBB = _n("view");_r(oRBB, 'class', 31, e, s, gg);var oSBB = _n("view");_r(oSBB, 'class', 32, e, s, gg);var oTBB = _o(33, e, s, gg);_(oSBB,oTBB);_(oRBB,oSBB);var oUBB = _n("view");_r(oUBB, 'class', 34, e, s, gg);var oVBB = _n("view");_r(oVBB, 'class', 25, e, s, gg);var oWBB = _v();var oXBB = function(obBB,oaBB,oZBB,gg){var oYBB = _n("view");_r(oYBB, 'class', 37, obBB, oaBB, gg);var odBB = _n("text");var oeBB = _o(38, obBB, oaBB, gg);_(odBB,oeBB);_(oYBB,odBB);var ofBB = _o(39, obBB, oaBB, gg);_(oYBB,ofBB);_(oZBB, oYBB);return oZBB;};_2(35, oXBB, e, s, gg, oWBB, "item", "index", 'unique');_(oVBB,oWBB);_(oUBB,oVBB);var ogBB = _n("view");_r(ogBB, 'class', 40, e, s, gg);var ohBB = _o(41, e, s, gg);_(ogBB,ohBB);_(oUBB,ogBB);_(oRBB,oUBB);_(oPBB,oRBB);var oiBB = _n("view");_r(oiBB, 'class', 42, e, s, gg);_(oPBB,oiBB);_(r,oPBB);var ojBB = _n("view");_r(ojBB, 'class', 43, e, s, gg);var okBB = _n("view");_r(okBB, 'class', 44, e, s, gg);var olBB = _n("text");_r(olBB, 'class', 45, e, s, gg);var omBB = _o(46, e, s, gg);_(olBB,omBB);_(okBB,olBB);_(ojBB,okBB);var onBB = _n("view");_r(onBB, 'class', 47, e, s, gg);var ooBB = _v();
      if (_o(48, e, s, gg)) {
        ooBB.wxVkey = 1;var opBB = _m( "image", ["bindtap", 49,"class", 1,"src", 2], e, s, gg);_(ooBB, opBB);
      }else {
        ooBB.wxVkey = 2;var orBB = _m( "image", ["bindtap", 49,"class", 1,"src", 3], e, s, gg);_(ooBB, orBB);
      }_(onBB,ooBB);var otBB = _n("view");_r(otBB, 'class', 53, e, s, gg);var ouBB = _o(54, e, s, gg);_(otBB,ouBB);_(onBB,otBB);var ovBB = _v();
      if (_o(55, e, s, gg)) {
        ovBB.wxVkey = 1;var owBB = _m( "image", ["bindtap", 56,"class", 1,"src", 2], e, s, gg);_(ovBB, owBB);
      }else {
        ovBB.wxVkey = 2;var oyBB = _m( "image", ["bindtap", 56,"class", 1,"src", 3], e, s, gg);_(ovBB, oyBB);
      }_(onBB,ovBB);_(ojBB,onBB);_(r,ojBB);var o_BB = _n("view");_r(o_BB, 'class', 60, e, s, gg);var oACB = _n("view");_r(oACB, 'class', 61, e, s, gg);var oBCB = _o(62, e, s, gg);_(oACB,oBCB);_(o_BB,oACB);var oCCB = _n("view");_r(oCCB, 'class', 63, e, s, gg);var oDCB = _o(64, e, s, gg);_(oCCB,oDCB);_(o_BB,oCCB);_(r,o_BB);var oECB = _n("view");_r(oECB, 'class', 65, e, s, gg);var oFCB = _n("view");_r(oFCB, 'class', 66, e, s, gg);var oGCB = _n("text");_r(oGCB, 'style', 67, e, s, gg);var oHCB = _o(68, e, s, gg);_(oGCB,oHCB);_(oFCB,oGCB);var oICB = _n("text");_r(oICB, 'class', 69, e, s, gg);var oJCB = _o(70, e, s, gg);_(oICB,oJCB);_(oFCB,oICB);var oKCB = _o(71, e, s, gg);_(oFCB,oKCB);_(oECB,oFCB);var oLCB = _m( "view", ["bindtap", 72,"class", 1], e, s, gg);var oMCB = _o(74, e, s, gg);_(oLCB,oMCB);_(oECB,oLCB);_(r,oECB);oqAB.pop();
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/goods/payfor.wxml"]={f:m1,j:[],i:[],ti:["../template/toast.wxml"],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background-color:#f2f2f2;font-size:%%?26rpx?%%;color:#1b1b1b}wx-image{vertical-align:middle}.text-center{text-align:center}.pull-left{float:left}.pull-right{float:right}.clearfix{clear:both}.bg-fff{background-color:#fff}.mt-10{margin-top:%%?10rpx?%%}.mt-20{margin-top:%%?20rpx?%%}.p-20{padding:%%?20rpx?%%}.text-red{color:red}.row{width:100%}.on{border-bottom:2px solid red;color:red!important}.swiper-box{min-height:%%?1000rpx?%%}wx-swiper-item wx-image{width:100%;height:100%}.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff}.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%%?20rpx?%%;border-radius:%%?10rpx?%%}.loading wx-image{width:100prx;height:%%?100rpx?%%}.loading .no-data{padding:%%?40rpx?%%;color:#ccc;font-size:%%?22rpx?%%}.flex{display:flex}.flex-row{display:flex;flex-direction:row}.flex-col{display:flex;flex-direction:column}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-grow-2{flex-grow:2}.flex-x-center{display:flex;justify-content:center}.flex-x-left{display:flex;justify-content:left}.flex-x-right{display:flex;justify-content:right}.flex-y-center{display:flex;align-items:center}.flex-y-bottom{display:flex;align-items:flex-end}.float-icon{position:fixed;z-index:20;right:%%?40rpx?%%;bottom:%%?30rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.float-icon1{margin-bottom:%%?20rpx?%%}.float-icon2{margin-bottom:%%?20rpx?%%}.no-address wx-image{width:21pt;height:21pt;margin-right:12pt;margin-left:12pt}.no-address wx-text{font-size:12pt;color:#3f3f3f}.no-address>.add-by-user{height:45pt}.no-address wx-image.left{width:%%?24rpx?%%;height:%%?48rpx?%%;margin-right:12pt;margin-top:10pt}.no-address .add-by-user,.no-address .add-by-wx{line-height:%%?90rpx?%%}.add-by-wx{border-top:1px solid #ededed}.address{height:%%?148rpx?%%;padding:0 %%?24rpx?%%;color:#3f3f3f}.address wx-image.pull-left{width:%%?36rpx?%%;height:%%?44rpx?%%}.address wx-image.pull-right{width:%%?12rpx?%%;height:%%?24rpx?%%;margin-right:%%?24rpx?%%}.address-top .add-name{font-weight:700;font-size:12pt;margin-right:%%?36rpx?%%;height:%%?40rpx?%%}.address-info{margin-left:%%?28rpx?%%;font-size:12pt;color:#3f3f3f}.goods-item{background-color:#f8f8f8;padding-right:12pt}.goods-item wx-image{width:%%?180rpx?%%;height:%%?180rpx?%%;margin:8pt 12pt}.goods-info{margin-top:17pt}.goods-title{line-height:%%?32rpx?%%;font-size:12pt;color:#3f3f3f}.goods-property{margin-top:29pt}.goods-item .goods-price{font-size:12pt;color:#fd4b49;text-align:right}.goods-spec{color:#a4a4a4;font-size:10pt}.goods-spec>wx-text{margin-right:%%?22rpx?%%}.buy-num{height:%%?96rpx?%%;padding:0 %%?24rpx?%%;background-color:#fff}.minus{width:%%?62rpx?%%;height:%%?60rpx?%%}.buy-value{margin:0 %%?4rpx?%%;width:%%?94rpx?%%;background-color:#f2f2f2;font-size:11pt}.plus{width:%%?62rpx?%%;height:%%?60rpx?%%}.footer{background-color:#fff;position:fixed;bottom:0;text-align:right;height:%%?110rpx?%%;width:100%}.footer .goods-price{font-size:12pt;color:#e02e24}.footer .btn{color:#fff;background-color:#fd4b49;font-size:%%?34rpx?%%;width:%%?200rpx?%%;line-height:%%?100rpx?%%;border:0!important}.footer-title{text-align:right;font-size:11pt;color:#3f3f3f;margin-left:%%?24rpx?%%}.drawer_screen{width:100%;height:100%;position:fixed;top:42px;left:0;z-index:100;background-color:#000;opacity:.3;overflow:hidden}.buy-num-text{font-size:12pt;color:#3f3f3f}.buy-num-play{font-size:11pt;color:#3f3f3f}.freight{height:%%?96rpx?%%;background-color:#fff;color:#3f3f3f;font-size:12pt;margin-top:%%?20rpx?%%;padding:0 %%?24rpx?%%}.freight-title{width:%%?160rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/goods/payfor";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/goods/payfor.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/goods/payfor.js
var app = getApp();
var a = app.requirejs("core");
Page({
  data: {
    addressData: {},
    address: false,
    show: false,
    freight: 0,
    totalPrice: 0
  },
  onLoad: function onLoad(options) {
    var self = this;
    wx.showLoading({
      title: "正在加载",
      mask: true
    });
    self.setData({
      address: app.goodsInfo.address,
      goodsNum: app.goodsInfo.num,
      goodsInfo: app.goodsInfo,
      goodsPrice: app.goodsInfo.goodsPrice,
      totalPrice: app.goodsInfo.goodsPrice * app.goodsInfo.num,
      show: true
    });
    wx.hideLoading();
  },
  onShow: function onShow(options) {
    wx.showLoading({
      title: "正在加载",
      mask: true
    });
    var i = this,
        d = app.getCache("orderAddress");
    if (d) {
      d.userName = d.consigner;
      d.telNumber = d.phone;
      i.setData({
        address: d
      });
    }
    wx.hideLoading();
  },
  showAddressList: function showAddressList() {
    wx.navigateTo({
      url: '/yb_shop/pages/member/address/select'
    });
  },
  goToPay: function goToPay() {
    var self = this;
    if (!this.data.address) {
      app.showToast(this, '请选择地址');
      return false;
    }
    var data = {
      pid: self.data.goodsInfo.groupPid,
      isGroup: self.data.goodsInfo.buyType,
      gid: self.data.goodsInfo.id,
      goodsNum: self.data.goodsNum,
      limitTime: self.data.goodsInfo.limitTime,
      address: JSON.stringify(self.data.address),
      totalPrice: self.data.goodsInfo.goodsPrice * self.data.goodsNum + parseFloat(self.data.freight),
      uid: app.getCache('userinfo').uid
    };
    if (this.data.oid) {
      return;
    }
    wx.showLoading({
      title: '正在提交',
      mask: true
    });
    a.get('Pintuan/ptCreateOrder', data, function (i) {
      wx.hideLoading();
      if (i.code == 0) {
        self.setData({
          oid: i.info
        });
        a.get('Pintuan/ptPay', {
          oid: i.info,
          openid: getApp().getCache("userinfo").openid
        }, function (t) {
          if (t.code == 0) {
            wx.requestPayment({
              'timeStamp': t.info.timeStamp,
              'nonceStr': t.info.nonceStr,
              'package': t.info.package,
              'signType': 'MD5',
              'paySign': t.info.paySign,
              'success': function success(res) {
                console.log(res);
                if (data.isGroup == 1) {
                  //拼团
                  // 重定向到团详情页面
                  wx.redirectTo({
                    url: '/yb_shop/pages/pintuan/pages/group/detail?id=' + i.info
                  });
                  // app.redirect('group/detail','id='+oid)
                } else {
                  // 重定向到订单页面
                  wx.redirectTo({
                    url: '/yb_shop/pages/pintuan/pages/orders/index'
                  });
                  // app.redirect('orders/index','id=3')
                }
              },
              'fail': function fail(res) {
                a.alert('您已取消了支付', function () {
                  wx.redirectTo({
                    url: '/yb_shop/pages/pintuan/pages/orders/index'
                  });
                });
              }
            });
          } else {
            a.alert(t.msg, function () {
              wx.redirectTo({
                url: '/yb_shop/pages/pintuan/pages/orders/index'
              });
            });
          }
        });
      } else {
        a.alert(i.msg);
      }
    });
  },
  minus: function minus() {
    var num = this.data.goodsNum > 1 ? --this.data.goodsNum : 1;
    var totalPrice = this.data.goodsPrice * num;
    this.setData({
      goodsNum: num,
      totalPrice: totalPrice.toFixed(2)
    });
  },
  plus: function plus() {
    var num = ++this.data.goodsNum;
    var totalPrice = this.data.goodsPrice * num;
    this.setData({
      goodsNum: num,
      totalPrice: totalPrice.toFixed(2)
    });
  }
});
});require("yb_shop/pages/pintuan/pages/goods/payfor.js")@code-separator-line:["div","template","view","import","image","text"]