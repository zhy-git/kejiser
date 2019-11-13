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
    Z([[7],[3, "show"]]);Z([3, 'formSubmit']);Z([3, 'true']);Z([3, 'block']);Z([3, 'user-money']);Z([a, [3, '账户剩余金额：'],[[6],[[7],[3, "user_info"]],[3, "price"]],[3, '元']]);Z([[2, "!="], [[7],[3, "cash_max_day"]], [[2, "-"], [1, 1]]]);Z([3, 'flex-row cash-max-day']);Z([3, 'flex-y-center']);Z([a, [3, '今日剩余提现金额'],[[7],[3, "cash_max_day"]],[3, '元']]);Z([3, 'showCashMaxDetail']);Z([3, 'cash-max-detail']);Z([3, '详情']);Z([3, 'flex-row block']);Z([3, 'flex-grow-0 flex-y-center cash-cny']);Z([3, '￥']);Z([3, 'flex-grow-1 flex-y-center']);Z([3, 'cash-input']);Z([3, 'cash']);Z([3, '输入提现金额']);Z([3, 'color:#bbb;font-size:13pt']);Z([3, 'digit']);Z([3, 'background: none;border: none']);Z([3, 'cash-min']);Z([a, [3, '提现金额不能小于'],[[6],[[7],[3, "share_setting"]],[3, "min_money"]],[3, '元']]);Z([3, 'pay-title']);Z([3, '提现方式']);Z([3, 'withdraw_type']);Z([[2, "=="], [[6],[[6],[[7],[3, "share_setting"]],[3, "pay_type"]],[3, "wxpay"]], [1, 1]]);Z([3, 'select']);Z([3, 'tixian']);Z([3, '0']);Z([a, [3, 'pay flex-row '],[[2,'?:'],[[2, "=="], [[7],[3, "selected"]], [1, 0]],[1, "active"],[1, ""]]]);Z([3, 'flex-grow-0']);Z([3, 'pay-img']);Z([3, '../../images/icon-share-wechat.png']);Z([3, '微信']);Z([[2, "=="], [[7],[3, "selected"]], [1, 0]]);Z([3, 'selected']);Z([3, '../../images/icon-share-selected.png']);Z([[2, "=="], [[6],[[6],[[7],[3, "share_setting"]],[3, "pay_type"]],[3, "alipay"]], [1, 1]]);Z([3, '1']);Z([a, [3, 'pay flex-row  '],[[2,'?:'],[[2, "=="], [[7],[3, "selected"]], [1, 1]],[1, "active"],[1, ""]]]);Z([3, '../../images/icon-share-ant.png']);Z([3, '支付宝']);Z([[2, "=="], [[7],[3, "selected"]], [1, 1]]);Z([[2, "=="], [[6],[[6],[[7],[3, "share_setting"]],[3, "pay_type"]],[3, "bankpay"]], [1, 1]]);Z([3, '2']);Z([a, [3, 'pay flex-row  '],[[2,'?:'],[[2, "=="], [[7],[3, "selected"]], [1, 2]],[1, "active"],[1, ""]]]);Z([3, '../../images/icon-share-bank.png']);Z([3, '银行卡']);Z([[2, "=="], [[7],[3, "selected"]], [1, 2]]);Z([3, 'block flex-row']);Z([3, 'margin-top:20rpx']);Z([3, 'flex-grow-0 flex-y-center required']);Z([3, '姓名']);Z([3, 'name']);Z([3, '请输入正确的姓名']);Z([3, 'color:#ccc;font-size:13pt']);Z([[7],[3, "name"]]);Z([3, '账号']);Z([3, 'mobile']);Z([3, '请输入正确微信账号']);Z([[7],[3, "mobile"]]);Z([3, '请输入正确支付宝账号']);Z([3, '开户人']);Z([3, '开户行']);Z([3, 'bank_name']);Z([3, '请输入正确的银行名称']);Z([[7],[3, "bank_name"]]);Z([3, '请输入正确银行卡账号']);Z([3, 'background: none;border: none;margin-top:68rpx;']);Z([3, 'cash-btn']);Z([3, 'submit']);Z([3, '提交申请']);
  })(z);d_["./yb_shop/pages/fenxiao/pages/cash/cash.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oje = _v();
      if (_o(0, e, s, gg)) {
        oje.wxVkey = 1;var ome = _m( "form", ["bindsubmit", 1,"reportSubmit", 1], e, s, gg);var one = _n("view");_r(one, 'class', 3, e, s, gg);var ooe = _n("view");_r(ooe, 'class', 4, e, s, gg);var ope = _o(5, e, s, gg);_(ooe,ope);_(one,ooe);var oqe = _v();
      if (_o(6, e, s, gg)) {
        oqe.wxVkey = 1;var ore = _n("view");_r(ore, 'class', 7, e, s, gg);var ote = _n("view");_r(ote, 'class', 8, e, s, gg);var oue = _o(9, e, s, gg);_(ote,oue);_(ore,ote);var ove = _m( "view", ["bindtap", 10,"class", 1], e, s, gg);var owe = _o(12, e, s, gg);_(ove,owe);_(ore,ove);_(oqe, ore);
      } _(one,oqe);_(ome,one);var oxe = _n("view");_r(oxe, 'class', 13, e, s, gg);var oye = _n("view");_r(oye, 'class', 14, e, s, gg);var oze = _o(15, e, s, gg);_(oye,oze);_(oxe,oye);var o_e = _n("view");_r(o_e, 'class', 16, e, s, gg);var oAf = _m( "input", ["class", 17,"name", 1,"placeholder", 2,"placeholderStyle", 3,"type", 4], e, s, gg);_(o_e,oAf);_(oxe,o_e);_(ome,oxe);var oBf = _m( "view", ["class", 3,"style", 19], e, s, gg);var oCf = _n("view");_r(oCf, 'class', 23, e, s, gg);var oDf = _o(24, e, s, gg);_(oCf,oDf);_(oBf,oCf);_(ome,oBf);var oEf = _n("view");_r(oEf, 'class', 3, e, s, gg);var oFf = _n("view");_r(oFf, 'class', 25, e, s, gg);var oGf = _o(26, e, s, gg);_(oFf,oGf);_(oEf,oFf);var oHf = _n("view");_r(oHf, 'class', 27, e, s, gg);var oIf = _v();
      if (_o(28, e, s, gg)) {
        oIf.wxVkey = 1;var oJf = _m( "view", ["bindtap", 29,"class", 1,"data-index", 2], e, s, gg);var oLf = _n("view");_r(oLf, 'class', 32, e, s, gg);var oMf = _n("view");_r(oMf, 'class', 33, e, s, gg);var oNf = _m( "image", ["class", 34,"src", 1], e, s, gg);_(oMf,oNf);_(oLf,oMf);var oOf = _n("view");_r(oOf, 'class', 33, e, s, gg);var oPf = _o(36, e, s, gg);_(oOf,oPf);_(oLf,oOf);var oQf = _v();
      if (_o(37, e, s, gg)) {
        oQf.wxVkey = 1;var oRf = _m( "image", ["class", 38,"src", 1], e, s, gg);_(oQf, oRf);
      } _(oLf,oQf);_(oJf,oLf);_(oIf, oJf);
      } _(oHf,oIf);var oTf = _v();
      if (_o(40, e, s, gg)) {
        oTf.wxVkey = 1;var oUf = _m( "view", ["bindtap", 29,"class", 1,"data-index", 12], e, s, gg);var oWf = _n("view");_r(oWf, 'class', 42, e, s, gg);var oXf = _n("view");_r(oXf, 'class', 33, e, s, gg);var oYf = _m( "image", ["class", 34,"src", 9], e, s, gg);_(oXf,oYf);_(oWf,oXf);var oZf = _n("view");_r(oZf, 'class', 33, e, s, gg);var oaf = _o(44, e, s, gg);_(oZf,oaf);_(oWf,oZf);var obf = _v();
      if (_o(45, e, s, gg)) {
        obf.wxVkey = 1;var ocf = _m( "image", ["class", 38,"src", 1], e, s, gg);_(obf, ocf);
      } _(oWf,obf);_(oUf,oWf);_(oTf, oUf);
      } _(oHf,oTf);var oef = _v();
      if (_o(46, e, s, gg)) {
        oef.wxVkey = 1;var off = _m( "view", ["bindtap", 29,"class", 1,"data-index", 18], e, s, gg);var ohf = _n("view");_r(ohf, 'class', 48, e, s, gg);var oif = _n("view");_r(oif, 'class', 33, e, s, gg);var ojf = _m( "image", ["class", 34,"src", 15], e, s, gg);_(oif,ojf);_(ohf,oif);var okf = _n("view");_r(okf, 'class', 33, e, s, gg);var olf = _o(50, e, s, gg);_(okf,olf);_(ohf,okf);var omf = _v();
      if (_o(51, e, s, gg)) {
        omf.wxVkey = 1;var onf = _m( "image", ["class", 38,"src", 1], e, s, gg);_(omf, onf);
      } _(ohf,omf);_(off,ohf);_(oef, off);
      } _(oHf,oef);_(oEf,oHf);_(ome,oEf);var opf = _v();
      if (_o(37, e, s, gg)) {
        opf.wxVkey = 1;var osf = _m( "view", ["class", 52,"style", 1], e, s, gg);var otf = _n("view");_r(otf, 'class', 54, e, s, gg);var ouf = _o(55, e, s, gg);_(otf,ouf);_(osf,otf);var ovf = _n("view");_r(ovf, 'class', 16, e, s, gg);var owf = _m( "input", ["class", 17,"name", 39,"placeholder", 40,"placeholderStyle", 41,"value", 42], e, s, gg);_(ovf,owf);_(osf,ovf);_(opf,osf);var oxf = _m( "view", ["class", 52,"style", 1], e, s, gg);var oyf = _n("view");_r(oyf, 'class', 54, e, s, gg);var ozf = _o(60, e, s, gg);_(oyf,ozf);_(oxf,oyf);var o_f = _n("view");_r(o_f, 'class', 16, e, s, gg);var oAg = _m( "input", ["class", 17,"placeholderStyle", 41,"name", 44,"placeholder", 45,"value", 46], e, s, gg);_(o_f,oAg);_(oxf,o_f);_(opf,oxf);
      }else if (_o(45, e, s, gg)) {
        opf.wxVkey = 2;var oDg = _m( "view", ["class", 52,"style", 1], e, s, gg);var oEg = _n("view");_r(oEg, 'class', 54, e, s, gg);var oFg = _o(55, e, s, gg);_(oEg,oFg);_(oDg,oEg);var oGg = _n("view");_r(oGg, 'class', 16, e, s, gg);var oHg = _m( "input", ["class", 17,"name", 39,"placeholder", 40,"placeholderStyle", 41,"value", 42], e, s, gg);_(oGg,oHg);_(oDg,oGg);_(opf,oDg);var oIg = _m( "view", ["class", 52,"style", 1], e, s, gg);var oJg = _n("view");_r(oJg, 'class', 54, e, s, gg);var oKg = _o(60, e, s, gg);_(oJg,oKg);_(oIg,oJg);var oLg = _n("view");_r(oLg, 'class', 16, e, s, gg);var oMg = _m( "input", ["class", 17,"placeholderStyle", 41,"name", 44,"value", 46,"placeholder", 47], e, s, gg);_(oLg,oMg);_(oIg,oLg);_(opf,oIg);
      }else if (_o(51, e, s, gg)) {
        opf.wxVkey = 3;var oPg = _m( "view", ["class", 52,"style", 1], e, s, gg);var oQg = _n("view");_r(oQg, 'class', 54, e, s, gg);var oRg = _o(65, e, s, gg);_(oQg,oRg);_(oPg,oQg);var oSg = _n("view");_r(oSg, 'class', 16, e, s, gg);var oTg = _m( "input", ["class", 17,"name", 39,"placeholder", 40,"placeholderStyle", 41,"value", 42], e, s, gg);_(oSg,oTg);_(oPg,oSg);_(opf,oPg);var oUg = _m( "view", ["class", 52,"style", 1], e, s, gg);var oVg = _n("view");_r(oVg, 'class', 54, e, s, gg);var oWg = _o(66, e, s, gg);_(oVg,oWg);_(oUg,oVg);var oXg = _n("view");_r(oXg, 'class', 16, e, s, gg);var oYg = _m( "input", ["class", 17,"placeholderStyle", 41,"name", 50,"placeholder", 51,"value", 52], e, s, gg);_(oXg,oYg);_(oUg,oXg);_(opf,oUg);var oZg = _m( "view", ["class", 52,"style", 1], e, s, gg);var oag = _n("view");_r(oag, 'class', 54, e, s, gg);var obg = _o(60, e, s, gg);_(oag,obg);_(oZg,oag);var ocg = _n("view");_r(ocg, 'class', 16, e, s, gg);var odg = _m( "input", ["class", 17,"placeholderStyle", 41,"name", 44,"value", 46,"placeholder", 53], e, s, gg);_(ocg,odg);_(oZg,ocg);_(opf,oZg);
      } _(ome,opf);var oeg = _m( "view", ["class", 3,"style", 68], e, s, gg);var ofg = _m( "button", ["class", 72,"formType", 1], e, s, gg);var ogg = _o(74, e, s, gg);_(ofg,ogg);_(oeg,ofg);_(ome,oeg);_(oje,ome);
      } _(r,oje);
    return r;
  };
        e_["./yb_shop/pages/fenxiao/pages/cash/cash.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{height:100%;font-size:11pt;color:#555;background:#f2f2f2;overflow-x:hidden}wx-audio,wx-block,wx-button,wx-canvas,wx-checkbox,wx-contact-button,wx-form,wx-icon,wx-image,wx-input,wx-label,wx-map,wx-movable-view,wx-navigator,body,wx-picker,wx-picker-view,wx-progress,wx-radio,wx-scroll-view,wx-slider,wx-swiper,wx-switch,wx-text,wx-textarea,wx-video,wx-view{box-sizing:border-box}wx-button{font-size:11pt;font-family:inherit}.flex{display:-webkit-box;display:-webkit-flex;display:flex}.flex-row{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;flex-direction:row}.flex-col{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;flex-direction:column}.flex-grow-0{min-width:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}.flex-grow-1{min-width:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-ms-flex-negative:1;flex-shrink:1}.flex-x-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.flex-y-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}.flex-y-bottom{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:end;-ms-flex-align:end;-ms-grid-row-align:flex-end;align-items:flex-end}.spinner{margin:0 auto;width:%%?100rpx?%%;height:%%?50rpx?%%;text-align:center;font-size:%%?10rpx?%%}.spinner>wx-view{background-color:#8c949a;height:100%;width:%%?10rpx?%%;display:inline-block;margin:0 %%?2rpx?%%;animation:sk-stretchdelay 1.2s infinite ease-in-out}.spinner .rect2{animation-delay:-1.1s}.spinner .rect3{animation-delay:-1s}.spinner .rect4{animation-delay:-.9s}.spinner .rect5{animation-delay:-.8s}@keyframes sk-stretchdelay{0%,100%,40%{transform:scaleY(.4)}20%{transform:scaleY(1)}}.copy-text-btn{line-height:normal;height:auto;display:inline-block;font-size:9pt;color:#888;border:%%?1rpx?%% solid #ddd;border-radius:%%?5rpx?%%;padding:%%?6rpx?%% %%?12rpx?%%;background-color:#fff!important;box-shadow:none}.no-data-tip{padding:%%?150rpx?%% 0;text-align:center;color:#888}.no-data-tip .no-data-icon{width:%%?160rpx?%%;height:%%?160rpx?%%;font-size:0;border-radius:%%?9999rpx?%%;background:rgba(0,0,0,.1);margin-left:auto;margin-right:auto;margin-bottom:%%?32rpx?%%}.bg-white{background-color:#fff}.mb-20{margin-bottom:%%?20rpx?%%}.mb-10{margin-bottom:%%?10rpx?%%}wx-button[plain]{border:none;background:#fff;color:inherit}.nowrap{white-space:nowrap}.fs-0{font-size:0}.get-coupon{position:fixed;top:42px;left:0;width:100%;height:100%;background:rgba(0,0,0,.75);z-index:999}.get-coupon .get-coupon-box{position:relative;width:100%}.get-coupon .get-coupon-bg{width:100%;position:absolute;left:0;top:%%?-210rpx?%%;z-index:-1}.get-coupon .coupon-list{height:%%?330rpx?%%;width:%%?550rpx?%%;margin:0 auto}.get-coupon .coupon-item{width:%%?520rpx?%%;height:%%?264rpx?%%;margin-bottom:%%?20rpx?%%;position:relative;color:#fff;padding:0 %%?40rpx?%%}.get-coupon .coupon-item wx-image{position:absolute;z-index:-1;left:0;top:0;width:100%}.get-coupon .coupon-item:last-child{margin-bottom:0}.get-coupon .use-now{display:block;text-align:center;height:%%?60rpx?%%;line-height:%%?60rpx?%%;color:#ff4544;background:#fff;border-radius:%%?6rpx?%%;margin:%%?15rpx?%% 0;font-size:9pt}.fs-sm{font-size:9pt}.p-10{padding:%%?10rpx?%% %%?10rpx?%%}.px-24{padding-left:%%?24rpx?%%;padding-right:%%?24rpx?%%}.float-icon{position:fixed;z-index:20;right:%%?50rpx?%%;bottom:%%?50rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.page.show_navbar>.body .float-icon{bottom:%%?150rpx?%%}.page.show_navbar.device_iphone_x>.body .float-icon{bottom:%%?215rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.w-100{width:100%}.h-100{height:100%}.wh-100{width:100%;height:100%}.text-more{width:100%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;word-break:break-all}.navbar{position:fixed;bottom:0;left:0;width:100%;background:#fff;color:#555;z-index:2000;border-top:%%?1rpx?%% solid rgba(0,0,0,.1);box-sizing:border-box}.navbar wx-navigator{height:%%?115rpx?%%;width:1%}.navbar wx-navigator>wx-view{width:100%;padding-top:4px}.navbar .navbar-icon{width:%%?64rpx?%%;height:%%?64rpx?%%;display:block;margin:0 auto}.navbar .navbar-text{font-size:8pt;text-align:center;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.navbar+.after-navber{padding-bottom:%%?115rpx?%%}.navbar+.after-navber .float-icon,.navbar~.float-icon{bottom:%%?170rpx?%%!important}.hidden{display:none}.text-more-2{width:100%;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;word-break:break-all}.no-scroll{height:100%;overflow-y:hidden}.dial{width:%%?100rpx?%%;height:%%?100rpx?%%;border-radius:%%?10rpx?%%;display:block;margin-bottom:%%?32rpx?%%}.navbar wx-button{display:block;padding:0;border:0;background:0 0;margin:0;width:100%;line-height:1.25}.navbar wx-button::after{display:none}.form-id-form{display:block}.form-id-button{display:block;background:0 0;background-color:transparent;border:none;overflow:auto;line-height:inherit;font-size:inherit;font-family:inherit;border-radius:0;margin:0 0;padding:0 0;text-align:left;height:auto}.form-id-button::after{display:none}.navbar.device_iphone_x{padding-bottom:%%?65rpx?%%}.navbar.device_iphone_x~.after-navber{padding-bottom:%%?180rpx?%%}.page.show_navbar>.body{padding-bottom:%%?115rpx?%%}.page.show_navbar.device_iphone_x>.header .navbar{padding-bottom:%%?65rpx?%%}.page.show_navbar.device_iphone_x>.body{padding-bottom:%%?180rpx?%%}wx-form{border-top:%%?1rpx?%% solid #eee;display:block;padding-bottom:%%?32rpx?%%}.block{border-bottom:%%?1rpx?%% solid #e3e3e3;background:#fff;padding:%%?32rpx?%% %%?24rpx?%%}.user-money{font-size:15pt}.cash-max-day{font-size:9pt;margin-top:%%?18rpx?%%;color:#888}.cash-cny{font-size:19pt;color:#ff4544;line-height:1.7}.cash-input{font-size:19pt;height:100%;width:100%;padding:0 %%?32rpx?%%}.cash-min{font-size:9pt}.cash-btn{width:100%;height:%%?100rpx?%%;background-color:#ff4544;color:#fff;text-align:center;font-size:13pt;line-height:%%?100rpx?%%}.cash-max-detail{border:%%?1rpx?%% solid #bbb;padding:%%?4rpx?%% %%?8rpx?%%;border-radius:%%?5rpx?%%;margin-left:%%?24rpx?%%}.pay-title{font-size:13pt;color:#353535;margin-bottom:%%?30rpx?%%}.pay{border:%%?1rpx?%% #666 solid;padding:%%?16rpx?%% %%?32rpx?%%;position:relative}.pay-img{width:%%?40rpx?%%;height:%%?40rpx?%%;margin-right:%%?16rpx?%%}.active{border:%%?2rpx?%% #ff4544 solid}.selected{position:absolute;bottom:0;right:0;width:%%?32rpx?%%;height:%%?32rpx?%%}.required::after{content:'*';vertical-align:top;color:#ff4544}.tixian{width:%%?200rpx?%%;display:inline-block;margin-left:%%?32rpx?%%;margin-top:%%?10rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/fenxiao/pages/cash/cash";__wxRouteBegin = true;
define("yb_shop/pages/fenxiao/pages/cash/cash.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
'use strict';
var app = getApp(),
    a = app.requirejs('core');
var loading = false;
function min(a, e) {
  return a = parseFloat(a), (e = parseFloat(e)) < a ? e : a;
}
Page({
  data: {
    cash_max_day: -1,
    selected: -1
  },
  onLoad: function onLoad(a) {},
  onShow: function onShow() {
    var that = this,
        cash_max_day = that.data.cash_max_day,
        cache = app.getCache('shareSetting');
    a.get('Distribe/userinfo', { uid: app.getCache('userinfo').uid }, function (t) {
      if (t.code == 0) {
        if (cache.max_money && cache.max_money != 0.00) {
          cash_max_day = parseFloat(cache.max_money) - parseFloat(t.info.today_price);
        }
        that.setData({
          user_info: t.info,
          share_setting: cache,
          cash_max_day: cash_max_day,
          show: true
        });
      } else {
        a.alert(t.msg, function () {
          a.jump('', 5);
        });
      }
    }, true);
  },
  onPullDownRefresh: function onPullDownRefresh() {},
  formSubmit: function formSubmit(v) {
    var e = this,
        t = parseFloat(parseFloat(v.detail.value.cash).toFixed(2)),
        i = e.data.user_info.price;
    if (-1 != e.data.cash_max_day && (i = min(i, e.data.cash_max_day)), t) {
      if (i < t) a.alert("提现金额不能超过" + i + "元");else if (t < parseFloat(e.data.share_setting.min_money)) a.alert("提现金额不能低于" + e.data.share_setting.min_money + "元");else {
        var n = e.data.selected;
        if (0 == n || 1 == n || 2 == n || 3 == n) {
          if (0 == n || 1 == n || 2 == n) {
            if (!(c = v.detail.value.name) || null == c) return void a.warning('姓名不能为空');
            if (!(o = v.detail.value.mobile) || null == o) return void a.warning('账号不能为空');
          }
          if (2 == n) {
            if (!(s = a.detail.value.bank_name) || null == s) return void a.warning('开户行不能为空');
          } else var s = "";
          if (3 == n) {
            s = "";
            var o = "",
                c = "";
          }
          //form_id: v.detail.formId
          if (loading) {
            return;
          }
          loading = true;
          a.loading('正在提交');
          a.get('Distribe/addCash', {
            price: t,
            name: c,
            mobile: o,
            bank_name: s,
            pay_type: n,
            user_id: app.getCache('userinfo').uid
          }, function (t) {
            a.hideLoading();
            loading = false;
            if (t.code == 0) {
              a.success('申请成功');
              setTimeout(function () {
                a.jump('../index/index', 2);
              }, 1e3);
            } else {
              a.alert(t.msg);
            }
          });
        } else a.warning('请选择提现方式');
      }
    } else a.warning('请输入提现金额');
  },
  showCashMaxDetail: function showCashMaxDetail() {
    wx.showModal({
      title: "提示",
      content: "今日剩余提现金额=平台每日可提现金额-今日所有用户提现金额"
    });
  },
  select: function select(a) {
    var e = a.currentTarget.dataset.index;
    e != this.data.check && this.setData({
      name: "",
      mobile: "",
      bank_name: ""
    }), this.setData({
      selected: e
    });
  }
});
});require("yb_shop/pages/fenxiao/pages/cash/cash.js")@code-separator-line:["div","block","form","view","input","image","button"]