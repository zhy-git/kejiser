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
    Z([[7],[3, "show"]]);Z([[2, "=="], [[6],[[7],[3, "user_info"]],[3, "is_distributor"]], [1, 0]]);Z([3, 'step1']);Z([3, 'formSubmit']);Z([3, 'true']);Z([3, 'info']);Z([3, 'info-label flex-row']);Z([3, 'flex-y-center']);Z([3, '\n          请填写申请信息\n        ']);Z([3, 'info-label info-content flex-row']);Z([3, 'info-left flex-y-center']);Z([3, '邀请人']);Z([3, 'info-right flex-row']);Z([3, 'info-red flex-grow-0 flex-y-center']);Z([a, [[6],[[7],[3, "user_info"]],[3, "parent"]]]);Z([3, 'info-gray flex-group-1 flex-y-center']);Z([3, '(请核对)']);Z([3, 'info-left flex-y-center required']);Z([3, '姓名']);Z([3, 'info-right flex-row flex-y-center']);Z([3, 'name-input']);Z([3, 'name']);Z([3, '请填写真实姓名']);Z([[6],[[7],[3, "form"]],[3, "name"]]);Z([3, '手机号码']);Z([3, 'mobile-input']);Z([3, 'mobile']);Z([3, '请填写手机号码']);Z([3, 'number']);Z([[6],[[7],[3, "form"]],[3, "mobile"]]);Z([3, 'agree']);Z([3, 'info-agree flex-row flex-y-center']);Z([[7],[3, "agree"]]);Z([[7],[3, "img"]]);Z([3, 'width:32rpx;height:32rpx;']);Z([3, 'margin-left:10rpx;']);Z([3, '我已经阅读并了解']);Z([3, 'agreement']);Z([3, 'color:#014c8c']);Z([a, [3, '【'],[[6],[[6],[[7],[3, "share_setting"]],[3, "other"]],[1, 13]],[3, '申请协议】']]);Z([3, 'info-btn flex-row']);Z([3, 'flex-y-content info-btn-content']);Z([3, 'submit']);Z([a, [3, '申请成为'],[[6],[[6],[[7],[3, "share_setting"]],[3, "other"]],[1, 13]]]);Z([a, [[6],[[6],[[7],[3, "share_setting"]],[3, "other"]],[1, 13]],[3, '特权']]);Z([1, false]);Z([3, 'info-label info-height flex-row']);Z([3, 'info-icon']);Z([3, '../../images/img-share-shop.png']);Z([3, 'info-block']);Z([3, 'info-top bold']);Z([3, '独立小店']);Z([3, 'info-bottom']);Z([3, '拥有自己的小店及二维码']);Z([3, '../../images/img-share-money.png']);Z([3, '销售拿佣金']);Z([a, [3, '成为'],[[6],[[6],[[7],[3, "share_setting"]],[3, "other"]],[1, 13]],[3, '后卖出商品，您可以获得佣金']]);Z([3, 'flex-y-center info-block']);Z([a, [[6],[[6],[[7],[3, "share_setting"]],[3, "other"]],[1, 13]],[3, '的商品销售统一由厂家直接收款、直接发货，并提供产品的售后服务，佣金由厂家统一设置。']]);Z([3, 'step2']);Z([3, 'info-title']);Z([3, 'info-images']);Z([3, '../../images/img-share-info.png']);Z([3, 'info-content']);Z([3, '谢谢您的支持，请等待审核！']);Z([3, 'flex-row info-btn1']);Z([3, 'flex-y-content btn']);Z([3, 'redirect']);Z([3, '/yb_shop/pages/index/index']);Z([3, '去首页逛逛']);
  })(z);d_["./yb_shop/pages/fenxiao/pages/add-share/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oia = _v();
      if (_o(0, e, s, gg)) {
        oia.wxVkey = 1;var ola = _v();
      if (_o(1, e, s, gg)) {
        ola.wxVkey = 1;var oma = _n("view");_r(oma, 'class', 2, e, s, gg);var ooa = _m( "form", ["bindsubmit", 3,"reportSubmit", 1], e, s, gg);var opa = _n("view");_r(opa, 'class', 5, e, s, gg);var oqa = _n("view");_r(oqa, 'class', 6, e, s, gg);var ora = _n("view");_r(ora, 'class', 7, e, s, gg);var osa = _o(8, e, s, gg);_(ora,osa);_(oqa,ora);_(opa,oqa);var ota = _n("view");_r(ota, 'class', 9, e, s, gg);var oua = _n("view");_r(oua, 'class', 10, e, s, gg);var ova = _o(11, e, s, gg);_(oua,ova);_(ota,oua);var owa = _n("view");_r(owa, 'class', 12, e, s, gg);var oxa = _n("view");_r(oxa, 'class', 13, e, s, gg);var oya = _o(14, e, s, gg);_(oxa,oya);_(owa,oxa);var oza = _n("view");_r(oza, 'class', 15, e, s, gg);var o_a = _o(16, e, s, gg);_(oza,o_a);_(owa,oza);_(ota,owa);_(opa,ota);var oAb = _n("view");_r(oAb, 'class', 9, e, s, gg);var oBb = _n("view");_r(oBb, 'class', 17, e, s, gg);var oCb = _o(18, e, s, gg);_(oBb,oCb);_(oAb,oBb);var oDb = _n("view");_r(oDb, 'class', 19, e, s, gg);var oEb = _m( "input", ["class", 20,"name", 1,"placeholder", 2,"value", 3], e, s, gg);_(oDb,oEb);_(oAb,oDb);_(opa,oAb);var oFb = _n("view");_r(oFb, 'class', 9, e, s, gg);var oGb = _n("view");_r(oGb, 'class', 17, e, s, gg);var oHb = _o(24, e, s, gg);_(oGb,oHb);_(oFb,oGb);var oIb = _n("view");_r(oIb, 'class', 19, e, s, gg);var oJb = _m( "input", ["class", 25,"name", 1,"placeholder", 2,"type", 3,"value", 4], e, s, gg);_(oIb,oJb);_(oFb,oIb);_(opa,oFb);var oKb = _n("view");_r(oKb, 'class', 9, e, s, gg);var oLb = _m( "view", ["bindtap", 30,"class", 1], e, s, gg);var oMb = _m( "input", ["hidden", 4,"name", 26,"value", 28], e, s, gg);_(oLb,oMb);var oNb = _m( "image", ["src", 33,"style", 1], e, s, gg);_(oLb,oNb);var oOb = _n("text");_r(oOb, 'style', 35, e, s, gg);var oPb = _o(36, e, s, gg);_(oOb,oPb);_(oLb,oOb);var oQb = _m( "view", ["bindtap", 37,"style", 1], e, s, gg);var oRb = _o(39, e, s, gg);_(oQb,oRb);_(oLb,oQb);_(oKb,oLb);_(opa,oKb);_(ooa,opa);var oSb = _n("view");_r(oSb, 'class', 40, e, s, gg);var oTb = _m( "button", ["class", 41,"formType", 1], e, s, gg);var oUb = _o(43, e, s, gg);_(oTb,oUb);_(oSb,oTb);_(ooa,oSb);_(oma,ooa);var oVb = _n("view");_r(oVb, 'class', 5, e, s, gg);var oWb = _n("view");_r(oWb, 'class', 6, e, s, gg);var oXb = _n("view");_r(oXb, 'class', 7, e, s, gg);var oYb = _o(44, e, s, gg);_(oXb,oYb);_(oWb,oXb);_(oVb,oWb);var oZb = _v();
      if (_o(45, e, s, gg)) {
        oZb.wxVkey = 1;var oab = _n("view");_r(oab, 'class', 46, e, s, gg);var ocb = _n("view");_r(ocb, 'class', 7, e, s, gg);var odb = _m( "image", ["class", 47,"src", 1], e, s, gg);_(ocb,odb);_(oab,ocb);var oeb = _n("view");_r(oeb, 'class', 49, e, s, gg);var ofb = _n("view");_r(ofb, 'class', 50, e, s, gg);var ogb = _o(51, e, s, gg);_(ofb,ogb);_(oeb,ofb);var ohb = _n("view");_r(ohb, 'class', 52, e, s, gg);var oib = _o(53, e, s, gg);_(ohb,oib);_(oeb,ohb);_(oab,oeb);_(oZb, oab);
      } _(oVb,oZb);var ojb = _n("view");_r(ojb, 'class', 46, e, s, gg);var okb = _n("view");_r(okb, 'class', 7, e, s, gg);var olb = _m( "image", ["class", 47,"src", 7], e, s, gg);_(okb,olb);_(ojb,okb);var omb = _n("view");_r(omb, 'class', 49, e, s, gg);var onb = _n("view");_r(onb, 'class', 50, e, s, gg);var oob = _o(55, e, s, gg);_(onb,oob);_(omb,onb);var opb = _n("view");_r(opb, 'class', 52, e, s, gg);var oqb = _o(56, e, s, gg);_(opb,oqb);_(omb,opb);_(ojb,omb);_(oVb,ojb);var orb = _n("view");_r(orb, 'class', 46, e, s, gg);var osb = _n("view");_r(osb, 'class', 57, e, s, gg);var otb = _o(58, e, s, gg);_(osb,otb);_(orb,osb);_(oVb,orb);_(oma,oVb);_(ola, oma);
      }else {
        ola.wxVkey = 2;var oub = _n("view");_r(oub, 'class', 59, e, s, gg);var owb = _n("view");_r(owb, 'class', 5, e, s, gg);var oxb = _n("view");_r(oxb, 'class', 60, e, s, gg);var oyb = _m( "image", ["class", 61,"src", 1], e, s, gg);_(oxb,oyb);_(owb,oxb);var ozb = _n("view");_r(ozb, 'class', 63, e, s, gg);var o_b = _o(64, e, s, gg);_(ozb,o_b);_(owb,ozb);var oAc = _n("view");_r(oAc, 'class', 65, e, s, gg);var oBc = _m( "navigator", ["class", 66,"openType", 1,"url", 2], e, s, gg);var oCc = _o(69, e, s, gg);_(oBc,oCc);_(oAc,oBc);_(owb,oAc);_(oub,owb);_(ola, oub);
      }_(oia,ola);
      } _(r,oia);
    return r;
  };
        e_["./yb_shop/pages/fenxiao/pages/add-share/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{height:100%;font-size:11pt;color:#555;background:#f2f2f2;overflow-x:hidden}wx-audio,wx-block,wx-button,wx-canvas,wx-checkbox,wx-contact-button,wx-form,wx-icon,wx-image,wx-input,wx-label,wx-map,wx-movable-view,wx-navigator,body,wx-picker,wx-picker-view,wx-progress,wx-radio,wx-scroll-view,wx-slider,wx-swiper,wx-switch,wx-text,wx-textarea,wx-video,wx-view{box-sizing:border-box}wx-button{font-size:11pt;font-family:inherit}.flex{display:-webkit-box;display:-webkit-flex;display:flex}.flex-row{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;flex-direction:row}.flex-col{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;flex-direction:column}.flex-grow-0{min-width:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}.flex-grow-1{min-width:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-ms-flex-negative:1;flex-shrink:1}.flex-x-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.flex-y-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}.flex-y-bottom{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:end;-ms-flex-align:end;-ms-grid-row-align:flex-end;align-items:flex-end}.spinner{margin:0 auto;width:%%?100rpx?%%;height:%%?50rpx?%%;text-align:center;font-size:%%?10rpx?%%}.spinner>wx-view{background-color:#8c949a;height:100%;width:%%?10rpx?%%;display:inline-block;margin:0 %%?2rpx?%%;animation:sk-stretchdelay 1.2s infinite ease-in-out}.spinner .rect2{animation-delay:-1.1s}.spinner .rect3{animation-delay:-1s}.spinner .rect4{animation-delay:-.9s}.spinner .rect5{animation-delay:-.8s}@keyframes sk-stretchdelay{0%,100%,40%{transform:scaleY(.4)}20%{transform:scaleY(1)}}.copy-text-btn{line-height:normal;height:auto;display:inline-block;font-size:9pt;color:#888;border:%%?1rpx?%% solid #ddd;border-radius:%%?5rpx?%%;padding:%%?6rpx?%% %%?12rpx?%%;background-color:#fff!important;box-shadow:none}.no-data-tip{padding:%%?150rpx?%% 0;text-align:center;color:#888}.no-data-tip .no-data-icon{width:%%?160rpx?%%;height:%%?160rpx?%%;font-size:0;border-radius:%%?9999rpx?%%;background:rgba(0,0,0,.1);margin-left:auto;margin-right:auto;margin-bottom:%%?32rpx?%%}.bg-white{background-color:#fff}.mb-20{margin-bottom:%%?20rpx?%%}.mb-10{margin-bottom:%%?10rpx?%%}wx-button[plain]{border:none;background:#fff;color:inherit}.nowrap{white-space:nowrap}.fs-0{font-size:0}.get-coupon{position:fixed;top:42px;left:0;width:100%;height:100%;background:rgba(0,0,0,.75);z-index:999}.get-coupon .get-coupon-box{position:relative;width:100%}.get-coupon .get-coupon-bg{width:100%;position:absolute;left:0;top:%%?-210rpx?%%;z-index:-1}.get-coupon .coupon-list{height:%%?330rpx?%%;width:%%?550rpx?%%;margin:0 auto}.get-coupon .coupon-item{width:%%?520rpx?%%;height:%%?264rpx?%%;margin-bottom:%%?20rpx?%%;position:relative;color:#fff;padding:0 %%?40rpx?%%}.get-coupon .coupon-item wx-image{position:absolute;z-index:-1;left:0;top:0;width:100%}.get-coupon .coupon-item:last-child{margin-bottom:0}.get-coupon .use-now{display:block;text-align:center;height:%%?60rpx?%%;line-height:%%?60rpx?%%;color:#ff4544;background:#fff;border-radius:%%?6rpx?%%;margin:%%?15rpx?%% 0;font-size:9pt}.fs-sm{font-size:9pt}.p-10{padding:%%?10rpx?%% %%?10rpx?%%}.px-24{padding-left:%%?24rpx?%%;padding-right:%%?24rpx?%%}.float-icon{position:fixed;z-index:20;right:%%?50rpx?%%;bottom:%%?50rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.page.show_navbar>.body .float-icon{bottom:%%?150rpx?%%}.page.show_navbar.device_iphone_x>.body .float-icon{bottom:%%?215rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.w-100{width:100%}.h-100{height:100%}.wh-100{width:100%;height:100%}.text-more{width:100%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;word-break:break-all}.navbar{position:fixed;bottom:0;left:0;width:100%;background:#fff;color:#555;z-index:2000;border-top:%%?1rpx?%% solid rgba(0,0,0,.1);box-sizing:border-box}.navbar wx-navigator{height:%%?115rpx?%%;width:1%}.navbar wx-navigator>wx-view{width:100%;padding-top:4px}.navbar .navbar-icon{width:%%?64rpx?%%;height:%%?64rpx?%%;display:block;margin:0 auto}.navbar .navbar-text{font-size:8pt;text-align:center;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.navbar+.after-navber{padding-bottom:%%?115rpx?%%}.navbar+.after-navber .float-icon,.navbar~.float-icon{bottom:%%?170rpx?%%!important}.hidden{display:none}.text-more-2{width:100%;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;word-break:break-all}.no-scroll{height:100%;overflow-y:hidden}.dial{width:%%?100rpx?%%;height:%%?100rpx?%%;border-radius:%%?10rpx?%%;display:block;margin-bottom:%%?32rpx?%%}.navbar wx-button{display:block;padding:0;border:0;background:0 0;margin:0;width:100%;line-height:1.25}.navbar wx-button::after{display:none}.form-id-form{display:block}.form-id-button{display:block;background:0 0;background-color:transparent;border:none;overflow:auto;line-height:inherit;font-size:inherit;font-family:inherit;border-radius:0;margin:0 0;padding:0 0;text-align:left;height:auto}.form-id-button::after{display:none}.navbar.device_iphone_x{padding-bottom:%%?65rpx?%%}.navbar.device_iphone_x~.after-navber{padding-bottom:%%?180rpx?%%}.page.show_navbar>.body{padding-bottom:%%?115rpx?%%}.page.show_navbar.device_iphone_x>.header .navbar{padding-bottom:%%?65rpx?%%}.page.show_navbar.device_iphone_x>.body{padding-bottom:%%?180rpx?%%}.info-bg{width:100%;height:%%?300rpx?%%;background-color:#f7f7f7;margin-bottom:%%?20rpx?%%}.info-bg .bg{width:100%;height:%%?300rpx?%%}.step1 .info{width:100%;background-color:#fff;border-bottom:%%?1rpx?%% #e3e3e3 solid;border-top:%%?1rpx?%% #e3e3e3 solid;padding:0 %%?24rpx?%%}.info .info-label{width:100%;height:%%?100rpx?%%;border-bottom:%%?1rpx?%% #e3e3e3 solid;color:#353535}.info .info-label:last-child{border-bottom:none}.info .info-label .info-red{color:#ff4544}.info .info-label .info-gray{color:#666}.info .info-label.info-content{height:%%?100rpx?%%}.info-label .info-left{width:%%?176rpx?%%}.info-label .info-left.required::after{content:"*";color:#ff4544}.info-label .info-agree{font-size:10pt}.info-btn{padding:%%?24rpx?%%;background-color:#f7f7f7;width:100%}.info-btn .info-btn-content{width:100%;background-color:#ff4544;color:#fff;font-weight:700;height:%%?100rpx?%%;line-height:%%?100rpx?%%}.info-label .info-icon{width:%%?60rpx?%%;height:%%?60rpx?%%;margin-right:%%?24rpx?%%}.info .bold{font-weight:700}.info .info-label.info-height{height:auto}.info .info-label .info-block{padding:%%?24rpx?%% 0}.info-block .info-top{margin-bottom:%%?16rpx?%%}.info-block .info-bottom{font-size:9pt}.step2 .info{padding:%%?48rpx?%% %%?24rpx?%%;text-align:center}.step2 .info .info-title{width:100%;padding:%%?40rpx?%% 0}.info-title .info-images{width:%%?80rpx?%%;height:%%?80rpx?%%}.step2 .info-btn1{margin-top:%%?88rpx?%%;padding:0 %%?24rpx?%%;width:100%}.step2 .info-btn1 .btn{width:100%;background-color:#ff4544;color:#fff;font-weight:700;height:%%?100rpx?%%;line-height:%%?100rpx?%%;border-radius:%%?10rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/fenxiao/pages/add-share/index";__wxRouteBegin = true;
define("yb_shop/pages/fenxiao/pages/add-share/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var app = getApp(),
    a = app.requirejs('core');
var loading = false;
Page({
  data: {
    form: {
      name: "",
      mobile: ""
    },
    show: false,
    img: "../../images/img-share-un.png",
    agree: 0
  },
  onLoad: function onLoad(e) {
    var that = this;
    a.ReName(e.title);
    that.setData({
      share_setting: app.getCache('shareSetting')
    });
    that.getInfo();
  },
  getInfo: function getInfo() {
    var that = this;
    a.get('Distribe/userinfo', { uid: app.getCache('userinfo').uid }, function (t) {
      if (t.code == 0) {
        that.setData({
          user_info: t.info,
          show: true
        });
      } else {
        a.alert(t.msg, function () {
          a.jump('', 5);
        });
      }
    }, true);
  },
  formSubmit: function formSubmit(e) {
    var that = this;
    if (that.data.form = e.detail.value, null != that.data.form.name && "" != that.data.form.name) {
      if (null != that.data.form.mobile && "" != that.data.form.mobile) {
        var o = e.detail.value;
        if (loading) {
          return;
        }
        loading = true;
        o.form_id = e.detail.formId, 0 != that.data.agree ? (console.log(that.data.agree), a.loading('正在提交'), o.user_id = app.getCache('userinfo').uid, a.get('Distribe/join', o, function (t) {
          a.hideLoading();
          loading = false;
          if (t.code == 0) {
            a.success('申请成功');
            setTimeout(function () {
              that.getInfo();
            }, 1e3);
          } else {
            a.alert(t.msg, function () {
              that.getInfo();
            });
          }
        })) : a.warning("请先阅读并确认分销申请协议！！");
      } else a.warning("请填写联系方式！");
    } else a.warning("请填写姓名！");
  },
  onPullDownRefresh: function onPullDownRefresh() {},
  onReachBottom: function onReachBottom() {},
  agreement: function agreement() {
    var that = this;
    wx.showModal({
      title: "分销协议",
      content: that.data.share_setting.agree,
      showCancel: !1,
      confirmText: "我已阅读",
      confirmColor: "#ff4544",
      success: function success(e) {
        e.confirm && console.log("用户点击确定");
      }
    });
  },
  agree: function agree() {
    var e = this,
        a = e.data.agree;
    0 == a ? (a = 1, e.setData({
      img: "../../images/img-share-agree.png",
      agree: a
    })) : 1 == a && (a = 0, e.setData({
      img: "../../images/img-share-un.png",
      agree: a
    }));
  }
});
});require("yb_shop/pages/fenxiao/pages/add-share/index.js")@code-separator-line:["div","block","view","form","input","image","text","button","navigator"]