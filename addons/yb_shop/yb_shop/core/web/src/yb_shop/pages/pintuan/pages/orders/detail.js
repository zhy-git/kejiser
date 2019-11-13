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
    Z([3, 'jumbotron flex-row']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "待付款"]]);Z([3, 'unpay']);Z([3, 'flex-grow-1 info-text']);Z([a, [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]]]);Z([3, 'flex-grow-0 img']);Z([3, '../../resource/order-unpay.png']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "已取消"]]);Z([3, '订单已取消']);Z([3, '../../resource/order-fail.png']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "待成团"]]);Z([3, 'ungroup']);Z([3, '../../resource/order-ungroup.png']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "待发货"]]);Z([3, 'unsend']);Z([3, '../../resource/order-unsend.png']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "待收货"]]);Z([3, '../../resource/order-receive.png']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "已完成"]]);Z([3, '../../resource/order-success.png']);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "拼团失败"]]);Z([[2, "=="], [[6],[[7],[3, "orderInfo"]],[3, "orderStatus"]], [1, "已退款(未成团)"]]);Z([3, '未成团，退款成功']);Z([3, 'address bg-fff flex-row']);Z([3, 'flex-grow-0 flex-y-center img']);Z([3, '../../resource/address.png']);Z([3, 'flex-grow-1']);Z([3, 'flex-grow-0 addr-user']);Z([a, [[6],[[6],[[7],[3, "orderInfo"]],[3, "address"]],[3, "userName"]]]);Z([a, [[6],[[6],[[7],[3, "orderInfo"]],[3, "address"]],[3, "telNumber"]]]);Z([3, 'flex-grow-0 addr-info']);Z([a, [3, '\n			'],[[6],[[6],[[7],[3, "orderInfo"]],[3, "address"]],[3, "province"]],[3, ' '],[[6],[[6],[[7],[3, "orderInfo"]],[3, "address"]],[3, "city"]],[3, ' '],[[6],[[6],[[7],[3, "orderInfo"]],[3, "address"]],[3, "county"]],[3, ' '],[[6],[[6],[[7],[3, "orderInfo"]],[3, "address"]],[3, "address"]],[3, '\n		']]);Z([3, 'ordernum bg-fff flex-row']);Z([a, [3, '订单编号：'],[[6],[[7],[3, "orderInfo"]],[3, "orderNum"]]]);Z([3, 'order-goods flex-row']);Z([3, 'goods-img flex-grow-0']);Z([3, 'aspectFill']);Z([[6],[[6],[[7],[3, "orderInfo"]],[3, "goods"]],[3, "img"]]);Z([3, 'goods-right flex-grow-1']);Z([3, 'goods-title flex-row']);Z([a, [3, '\n				'],[[6],[[6],[[7],[3, "orderInfo"]],[3, "goods"]],[3, "name"]],[3, '\n			']]);Z([3, 'goods-info flex-row']);Z([3, 'goods-class flex-grow-1']);Z([3, 'goods-num']);Z([a, [3, '数量：'],[[6],[[7],[3, "orderInfo"]],[3, "goodsNum"]],[3, ' '],[[6],[[6],[[7],[3, "item"]],[3, "goods"]],[3, "unit"]]]);Z([3, 'flex-grow-0 info-money']);Z([a, [3, '\n					￥'],[[6],[[7],[3, "orderInfo"]],[3, "totalPrice"]],[3, '\n				']]);Z([3, 'order-price bg-fff']);Z([a, [3, '实付：¥'],[[6],[[7],[3, "orderInfo"]],[3, "totalPrice"]]]);Z([3, 'order-item bg-fff']);Z([a, [3, '\n		订单编号：'],[[6],[[7],[3, "orderInfo"]],[3, "orderNum"]]]);Z([3, '支付方式：微信']);Z([a, [3, '下单时间：'],[[6],[[7],[3, "orderInfo"]],[3, "createTime"]]]);Z([[6],[[7],[3, "orderInfo"]],[3, "payTime"]]);Z([a, [3, '支付时间：'],[[6],[[7],[3, "orderInfo"]],[3, "payTime"]]]);Z([[6],[[7],[3, "orderInfo"]],[3, "group_time"]]);Z([a, [3, '成团时间：'],[[6],[[7],[3, "orderInfo"]],[3, "group_time"]]]);Z([[6],[[7],[3, "orderInfo"]],[3, "deliveryTime"]]);Z([a, [3, '发货时间：'],[[6],[[7],[3, "orderInfo"]],[3, "deliveryTime"]]]);Z([[6],[[7],[3, "orderInfo"]],[3, "completeTime"]]);Z([a, [3, '成交时间：'],[[6],[[7],[3, "orderInfo"]],[3, "completeTime"]]]);Z([[6],[[7],[3, "orderInfo"]],[3, "express"]]);Z([a, [3, '快递方式：'],[[6],[[6],[[7],[3, "orderInfo"]],[3, "express"]],[3, "type"]]]);Z([a, [3, '运单编号：'],[[6],[[6],[[7],[3, "orderInfo"]],[3, "express"]],[3, "sn"]]]);
  })(z);d_["./yb_shop/pages/pintuan/pages/orders/detail.wxml"] = {};
  var m0=function(e,s,r,gg){
    var ovE = _n("view");_r(ovE, 'class', 0, e, s, gg);var owE = _v();
      if (_o(1, e, s, gg)) {
        owE.wxVkey = 1;var ozE = _n("view");_r(ozE, 'class', 3, e, s, gg);var o_E = _o(4, e, s, gg);_(ozE,o_E);_(owE,ozE);var oAF = _n("view");_r(oAF, 'class', 5, e, s, gg);var oBF = _n("image");_r(oBF, 'src', 6, e, s, gg);_(oAF,oBF);_(owE,oAF);
      } _(ovE,owE);var oCF = _v();
      if (_o(7, e, s, gg)) {
        oCF.wxVkey = 1;var oFF = _n("view");_r(oFF, 'class', 3, e, s, gg);var oGF = _o(8, e, s, gg);_(oFF,oGF);_(oCF,oFF);var oHF = _n("view");_r(oHF, 'class', 5, e, s, gg);var oIF = _n("image");_r(oIF, 'src', 9, e, s, gg);_(oHF,oIF);_(oCF,oHF);
      } _(ovE,oCF);var oJF = _v();
      if (_o(10, e, s, gg)) {
        oJF.wxVkey = 1;var oMF = _n("view");_r(oMF, 'class', 3, e, s, gg);var oNF = _o(4, e, s, gg);_(oMF,oNF);_(oJF,oMF);var oOF = _n("view");_r(oOF, 'class', 5, e, s, gg);var oPF = _n("image");_r(oPF, 'src', 12, e, s, gg);_(oOF,oPF);_(oJF,oOF);
      } _(ovE,oJF);var oQF = _v();
      if (_o(13, e, s, gg)) {
        oQF.wxVkey = 1;var oTF = _n("view");_r(oTF, 'class', 3, e, s, gg);var oUF = _o(4, e, s, gg);_(oTF,oUF);_(oQF,oTF);var oVF = _n("view");_r(oVF, 'class', 5, e, s, gg);var oWF = _n("image");_r(oWF, 'src', 15, e, s, gg);_(oVF,oWF);_(oQF,oVF);
      } _(ovE,oQF);var oXF = _v();
      if (_o(16, e, s, gg)) {
        oXF.wxVkey = 1;var oaF = _n("view");_r(oaF, 'class', 3, e, s, gg);var obF = _o(4, e, s, gg);_(oaF,obF);_(oXF,oaF);var ocF = _n("view");_r(ocF, 'class', 5, e, s, gg);var odF = _n("image");_r(odF, 'src', 17, e, s, gg);_(ocF,odF);_(oXF,ocF);
      } _(ovE,oXF);var oeF = _v();
      if (_o(18, e, s, gg)) {
        oeF.wxVkey = 1;var ohF = _n("view");_r(ohF, 'class', 3, e, s, gg);var oiF = _o(4, e, s, gg);_(ohF,oiF);_(oeF,ohF);var ojF = _n("view");_r(ojF, 'class', 5, e, s, gg);var okF = _n("image");_r(okF, 'src', 19, e, s, gg);_(ojF,okF);_(oeF,ojF);
      } _(ovE,oeF);var olF = _v();
      if (_o(20, e, s, gg)) {
        olF.wxVkey = 1;var ooF = _n("view");_r(ooF, 'class', 3, e, s, gg);var opF = _o(4, e, s, gg);_(ooF,opF);_(olF,ooF);var oqF = _n("view");_r(oqF, 'class', 5, e, s, gg);var orF = _n("image");_r(orF, 'src', 9, e, s, gg);_(oqF,orF);_(olF,oqF);
      } _(ovE,olF);var osF = _v();
      if (_o(21, e, s, gg)) {
        osF.wxVkey = 1;var ovF = _n("view");_r(ovF, 'class', 3, e, s, gg);var owF = _o(22, e, s, gg);_(ovF,owF);_(osF,ovF);var oxF = _n("view");_r(oxF, 'class', 5, e, s, gg);var oyF = _n("image");_r(oyF, 'src', 9, e, s, gg);_(oxF,oyF);_(osF,oxF);
      } _(ovE,osF);_(r,ovE);var ozF = _n("view");_r(ozF, 'class', 23, e, s, gg);var o_F = _n("view");_r(o_F, 'class', 24, e, s, gg);var oAG = _n("image");_r(oAG, 'src', 25, e, s, gg);_(o_F,oAG);_(ozF,o_F);var oBG = _n("view");_r(oBG, 'class', 26, e, s, gg);var oCG = _n("view");_r(oCG, 'class', 27, e, s, gg);var oDG = _n("text");var oEG = _o(28, e, s, gg);_(oDG,oEG);_(oCG,oDG);var oFG = _n("text");var oGG = _o(29, e, s, gg);_(oFG,oGG);_(oCG,oFG);_(oBG,oCG);var oHG = _n("view");_r(oHG, 'class', 30, e, s, gg);var oIG = _o(31, e, s, gg);_(oHG,oIG);_(oBG,oHG);_(ozF,oBG);_(r,ozF);var oJG = _n("view");_r(oJG, 'class', 32, e, s, gg);var oKG = _n("view");var oLG = _o(33, e, s, gg);_(oKG,oLG);_(oJG,oKG);_(r,oJG);var oMG = _n("view");_r(oMG, 'class', 34, e, s, gg);var oNG = _n("view");_r(oNG, 'class', 35, e, s, gg);var oOG = _m( "image", ["mode", 36,"src", 1], e, s, gg);_(oNG,oOG);_(oMG,oNG);var oPG = _n("view");_r(oPG, 'class', 38, e, s, gg);var oQG = _n("view");_r(oQG, 'class', 39, e, s, gg);var oRG = _o(40, e, s, gg);_(oQG,oRG);_(oPG,oQG);var oSG = _n("view");_r(oSG, 'class', 41, e, s, gg);var oTG = _n("view");_r(oTG, 'class', 42, e, s, gg);var oUG = _n("text");_r(oUG, 'class', 43, e, s, gg);var oVG = _o(44, e, s, gg);_(oUG,oVG);_(oTG,oUG);_(oSG,oTG);var oWG = _n("view");_r(oWG, 'class', 45, e, s, gg);var oXG = _o(46, e, s, gg);_(oWG,oXG);_(oSG,oWG);_(oPG,oSG);_(oMG,oPG);_(r,oMG);var oYG = _n("view");_r(oYG, 'class', 47, e, s, gg);var oZG = _n("text");var oaG = _o(48, e, s, gg);_(oZG,oaG);_(oYG,oZG);_(r,oYG);var obG = _n("view");_r(obG, 'class', 49, e, s, gg);var ocG = _n("view");var odG = _o(50, e, s, gg);_(ocG,odG);var oeG = _n("text");_(ocG,oeG);_(obG,ocG);var ofG = _n("view");var ogG = _o(51, e, s, gg);_(ofG,ogG);_(obG,ofG);var ohG = _n("view");var oiG = _o(52, e, s, gg);_(ohG,oiG);_(obG,ohG);var ojG = _v();
      if (_o(53, e, s, gg)) {
        ojG.wxVkey = 1;var okG = _n("view");var omG = _o(54, e, s, gg);_(okG,omG);_(ojG, okG);
      } _(obG,ojG);var onG = _v();
      if (_o(55, e, s, gg)) {
        onG.wxVkey = 1;var ooG = _n("view");var oqG = _o(56, e, s, gg);_(ooG,oqG);_(onG, ooG);
      } _(obG,onG);var orG = _v();
      if (_o(57, e, s, gg)) {
        orG.wxVkey = 1;var osG = _n("view");var ouG = _o(58, e, s, gg);_(osG,ouG);_(orG, osG);
      } _(obG,orG);var ovG = _v();
      if (_o(59, e, s, gg)) {
        ovG.wxVkey = 1;var owG = _n("view");var oyG = _o(60, e, s, gg);_(owG,oyG);_(ovG, owG);
      } _(obG,ovG);var ozG = _v();
      if (_o(61, e, s, gg)) {
        ozG.wxVkey = 1;var oBH = _n("view");var oCH = _o(62, e, s, gg);_(oBH,oCH);_(ozG,oBH);var oDH = _n("view");var oEH = _o(63, e, s, gg);_(oDH,oEH);_(ozG,oDH);
      } _(obG,ozG);_(r,obG);
    return r;
  };
        e_["./yb_shop/pages/pintuan/pages/orders/detail.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background-color:#f2f2f2;font-size:%%?26rpx?%%;color:#1b1b1b}wx-image{vertical-align:middle}.text-center{text-align:center}.pull-left{float:left}.pull-right{float:right}.clearfix{clear:both}.bg-fff{background-color:#fff}.mt-10{margin-top:%%?10rpx?%%}.mt-20{margin-top:%%?20rpx?%%}.p-20{padding:%%?20rpx?%%}.text-red{color:red}.row{width:100%}.on{border-bottom:2px solid red;color:red!important}.swiper-box{min-height:%%?1000rpx?%%}wx-swiper-item wx-image{width:100%;height:100%}.toast{position:fixed;bottom:15%;width:100%;z-index:1111;text-align:center;color:#fff}.toast .toast-mask{display:inline-block;background-color:#000;width:30%;padding:%%?20rpx?%%;border-radius:%%?10rpx?%%}.loading wx-image{width:100prx;height:%%?100rpx?%%}.loading .no-data{padding:%%?40rpx?%%;color:#ccc;font-size:%%?22rpx?%%}.flex{display:flex}.flex-row{display:flex;flex-direction:row}.flex-col{display:flex;flex-direction:column}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-grow-2{flex-grow:2}.flex-x-center{display:flex;justify-content:center}.flex-x-left{display:flex;justify-content:left}.flex-x-right{display:flex;justify-content:right}.flex-y-center{display:flex;align-items:center}.flex-y-bottom{display:flex;align-items:flex-end}.float-icon{position:fixed;z-index:20;right:%%?40rpx?%%;bottom:%%?30rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.float-icon1{margin-bottom:%%?20rpx?%%}.float-icon2{margin-bottom:%%?20rpx?%%}.jumbotron{color:#fff;height:%%?122rpx?%%;padding:%%?52rpx?%% %%?72rpx?%% 0 %%?50rpx?%%;FILTER:progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#ff7e45,endColorStr=#fe4137);background:-ms-linear-gradient(left,#ff7e45,#fe4137);background:-moz-linear-gradient(left,#ff7e45,#fe4137);background:-webkit-gradient(linear,0 0,0 100%,from(#ff7e45),to(#fe4137));background:-webkit-gradient(linear,0 0,0 100%,from(#ff7e45),to(#fe4137));background:-webkit-linear-gradient(left,#ff7e45,#fe4137);background:-o-linear-gradient(left,#ff7e45,#fe4137)}.ungroup,.unpay,.unsend{display:inline-block;width:100%}.jumbotron wx-image{width:%%?138rpx?%%;height:%%?100rpx?%%}.jumbotron .order-status{display:inline-block;width:50%}.jumbotron .status-img{display:inline-block;width:50%}.ordernum{line-height:%%?72rpx?%%;font-size:11pt;color:#5d5d5d;padding-left:%%?24rpx?%%}.goods-price{margin-top:%%?30rpx?%%}.goods-prop{width:80%;display:inline-block;margin-top:%%?24rpx?%%;color:#a4a4a4;font-size:9pt}.user-option{line-height:%%?72rpx?%%;text-align:right}.user-option .btn{padding:0 %%?24rpx?%%;line-height:%%?52rpx?%%;color:#5d5d5d;font-size:10pt;border:1px solid #a4a4a4;border-radius:%%?10rpx?%%;display:inline-block;margin-right:%%?24rpx?%%;background-color:#fff}.order-price{width:100%;text-align:right;line-height:%%?72rpx?%%;font-size:10pt;margin-bottom:%%?20rpx?%%}.order-price wx-text{color:#e02e24;font-weight:700;margin-right:%%?24rpx?%%}.order-item{padding:%%?24rpx?%% %%?24rpx?%% %%?4rpx?%% %%?24rpx?%%;line-height:%%?45rpx?%%;font-size:11pt;color:#5d5d5d;margin-top:1px}.order-item wx-view{margin-bottom:%%?20rpx?%%}.footer{position:fixed;bottom:0;width:100%;border-top:%%?1rpx?%% solid #ddd;background-color:#fff;line-height:%%?98rpx?%%;text-align:right}.footer .btn{display:inline-block;line-height:%%?64rpx?%%;padding:0 %%?32rpx?%%;border-radius:%%?10rpx?%%;margin-right:%%?24rpx?%%}.footer .btn-red{background-color:#e02e24;color:#fff}.info-text{font-size:14pt;color:#fff;padding-top:%%?10rpx?%%}.address{padding:%%?24rpx?%%;font-size:11pt;color:#5d5d5d;margin-bottom:%%?20rpx?%%}.img{margin-right:%%?24rpx?%%}.address .img wx-image{width:%%?36rpx?%%;height:%%?44rpx?%%}.addr-user{margin-bottom:%%?24rpx?%%}.addr-user wx-text{margin-right:%%?24rpx?%%}.order-goods{background-color:#f8f8f8;padding-right:%%?24rpx?%%}.goods-img{padding:%%?14rpx?%% %%?24rpx?%%}.goods-img wx-image{width:%%?154rpx?%%;height:%%?154rpx?%%}.goods-title{font-size:11pt;color:#1b1b1b;line-height:%%?29rpx?%%}.g-info{margin-top:%%?20rpx?%%}.goods-pice{margin-right:%%?24rpx?%%}.goods-right{margin-top:%%?24rpx?%%;padding-right:%%?24rpx?%%;float:left}.goods-info{margin-top:%%?40rpx?%%}.goods-class{font-size:11pt;color:#9d9d9d}.goods-num{margin-right:%%?24rpx?%%}.info-money{font-size:12pt;color:#1b1b1b;text-align:right;max-width:%%?200rpx?%%;word-wrap:break-word}body{padding-bottom:%%?100rpx?%%!important}@code-separator-line:__wxRoute = "yb_shop/pages/pintuan/pages/orders/detail";__wxRouteBegin = true;
define("yb_shop/pages/pintuan/pages/orders/detail.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/orders/detail.js
var app = getApp(),
    a = app.requirejs("core");
Page({
  onLoad: function onLoad(options) {
    this.oid = options.oid;
    this.showDataInfo();
  },
  onShow: function onShow() {},
  showDataInfo: function showDataInfo() {
    var self = this;
    a.get('Pintuan/ptOrderDetail', {
      id: this.oid
    }, function (t) {
      if (t.code == 0) {
        self.setData({
          orderInfo: t.info
        });
      } else {
        a.alert(t.msg);
      }
    });
  }
});
});require("yb_shop/pages/pintuan/pages/orders/detail.js")@code-separator-line:["div","view","block","image","text"]