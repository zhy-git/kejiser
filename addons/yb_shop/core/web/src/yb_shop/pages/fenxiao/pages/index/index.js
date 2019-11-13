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
    Z([[7],[3, "show"]]);Z([[2, "&&"],[[7],[3, "user_info"]],[[2, "=="], [[6],[[7],[3, "user_info"]],[3, "is_distributor"]], [1, 1]]]);Z([3, 'after-navber']);Z([3, 'info']);Z([3, 'info-title']);Z([3, 'tc']);Z([3, 'info-img']);Z([[6],[[7],[3, "user_info"]],[3, "user_headimg"]]);Z([3, 'info-block']);Z([3, 'info-up info-blod tc']);Z([a, [[6],[[7],[3, "user_info"]],[3, "nick_name"]]]);Z([3, 'info-bottom tc02']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 3]],[3, '：'],[[6],[[7],[3, "user_info"]],[3, "parent"]]]);Z([3, 'info-content flex-row']);Z([3, 'info-left']);Z([3, 'info-label']);Z([3, 'padding-bottom:0 !important;']);Z([3, 'info-first']);Z([3, 'margin-bottom:0 !important;margin-top:16rpx;']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 1]],[3, '：'],[[6],[[7],[3, "user_info"]],[3, "price"]],[3, '元']]);Z([3, 'info-right']);Z([3, 'margin-top:0 !important;']);Z([3, 'navigate']);Z([3, '../cash/cash']);Z([3, 'info-btn']);Z([3, 'padding:5px 15px;']);Z([3, '提现']);Z([3, 'new-block flex-row']);Z([3, 'flex-grow-1 flex-x-center']);Z([3, 'text-more']);Z([3, 'color:#22af19;margin-bottom: 16rpx;']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 2]]]);Z([a, [[6],[[7],[3, "user_info"]],[3, "get_price"]],[3, '元']]);Z([3, 'color:#ff8f17;margin-bottom: 16rpx;']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 4]]]);Z([a, [[6],[[7],[3, "user_info"]],[3, "order_money_un"]],[3, '元']]);Z([3, 'list flex-row']);Z([3, 'item border-bottom']);Z([a, [3, '../share-money/share-money?title\x3d'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 5]]]);Z([3, 'list-img flex-x-center']);Z([3, 'img']);Z([3, '../../images/img-share-price.png']);Z([3, 'list-content text-more']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 5]]]);Z([3, 'flex-x-center list-content']);Z([3, 'list-red']);Z([a, [[6],[[7],[3, "user_info"]],[3, "total_price"]]]);Z([3, '元']);Z([3, 'item border-bottom border-between']);Z([a, [3, '../share-order/share-order?title\x3d'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 6]]]);Z([3, '../../images/img-share-order.png']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 6]]]);Z([a, [[6],[[7],[3, "user_info"]],[3, "order_share_money"]]]);Z([a, [3, '../share-team/share-team?title\x3d'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 8]]]);Z([3, '../../images/img-share-team.png']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 8]]]);Z([a, [[6],[[7],[3, "user_info"]],[3, "team_count"]]]);Z([3, '人']);Z([a, [3, '../cash-detail/cash-detail?title\x3d'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 7]]]);Z([3, '../../images/img-share-cash.png']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 7]]]);Z([a, [3, '../share-qrcode/share-qrcode?title\x3d'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 9]]]);Z([3, '../../images/img-share-qrcode.png']);Z([a, [[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 9]]]);Z([[2, "!="], [[6],[[7],[3, "share_setting"]],[3, "level"]], [1, 0]]);Z([3, 'notice']);Z([a, [3, '分享小程序首页或商品详情页均可'],[[6],[[6],[[7],[3, "shareSetting"]],[3, "other"]],[1, 10]]]);Z([[2, "&&"],[[7],[3, "user_info"]],[[2, "=="], [[6],[[7],[3, "user_info"]],[3, "is_distributor"]], [1, 0]]]);Z([3, 'background-color:#fff;height:100%']);Z([3, 'padding-top:150rpx']);Z([3, 'flex-row flex-x-center']);Z([3, '../../images/icon-share-tip.png']);Z([3, 'width:420rpx;height:240rpx;']);Z([3, 'padding:80rpx 0 88rpx 0;']);Z([3, '您还不是分销商。请先提交申请！']);Z([3, 'felx-row flex-x-center']);Z([3, 'apply']);Z([3, 'true']);Z([3, 'flex-x-center flex-y-center']);Z([3, 'submit']);Z([3, 'width:560rpx;height:80rpx;border-radius:40rpx;background-color:#ff4544;color:#fff;']);Z([3, '立即申请']);Z([[2, "&&"],[[7],[3, "user_info"]],[[2, "=="], [[6],[[7],[3, "user_info"]],[3, "is_distributor"]], [1, 2]]]);Z([3, '正在审核中，请耐心等待']);Z([3, 'home']);Z([3, '首页逛逛']);Z([3, 'fui-dot']);Z([3, 'none']);Z([3, 'redirect']);Z([3, '/yb_shop/pages/member/index/index?key\x3d1']);Z([3, '/yb_shop/static/images/icon-white/people.png']);
  })(z);d_["./yb_shop/pages/fenxiao/pages/index/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oeY = _v();
      if (_o(0, e, s, gg)) {
        oeY.wxVkey = 1;var ohY = _v();
      if (_o(1, e, s, gg)) {
        ohY.wxVkey = 1;var oiY = _n("view");_r(oiY, 'class', 2, e, s, gg);var okY = _n("view");_r(okY, 'class', 3, e, s, gg);var olY = _n("view");_r(olY, 'class', 4, e, s, gg);var omY = _n("view");_r(omY, 'class', 5, e, s, gg);var onY = _m( "image", ["class", 6,"src", 1], e, s, gg);_(omY,onY);_(olY,omY);var ooY = _n("view");_r(ooY, 'class', 8, e, s, gg);var opY = _n("view");_r(opY, 'class', 9, e, s, gg);var oqY = _o(10, e, s, gg);_(opY,oqY);_(ooY,opY);var orY = _n("view");_r(orY, 'class', 11, e, s, gg);var osY = _o(12, e, s, gg);_(orY,osY);_(ooY,orY);_(olY,ooY);_(okY,olY);var otY = _n("view");_r(otY, 'class', 13, e, s, gg);var ouY = _n("view");_r(ouY, 'class', 14, e, s, gg);var ovY = _m( "view", ["class", 15,"style", 1], e, s, gg);var owY = _m( "view", ["class", 17,"style", 1], e, s, gg);var oxY = _o(19, e, s, gg);_(owY,oxY);_(ovY,owY);_(ouY,ovY);_(otY,ouY);var oyY = _m( "view", ["class", 20,"style", 1], e, s, gg);var ozY = _m( "navigator", ["class", -1,"openType", 22,"url", 1], e, s, gg);var o_Y = _m( "view", ["class", 24,"style", 1], e, s, gg);var oAZ = _o(26, e, s, gg);_(o_Y,oAZ);_(ozY,o_Y);_(oyY,ozY);_(otY,oyY);_(okY,otY);_(oiY,okY);var oBZ = _n("view");_r(oBZ, 'class', 27, e, s, gg);var oCZ = _n("view");_r(oCZ, 'class', 28, e, s, gg);var oDZ = _n("view");_r(oDZ, 'class', 29, e, s, gg);var oEZ = _m( "view", ["class", 29,"style", 1], e, s, gg);var oFZ = _o(31, e, s, gg);_(oEZ,oFZ);_(oDZ,oEZ);var oGZ = _n("view");_r(oGZ, 'class', 29, e, s, gg);var oHZ = _o(32, e, s, gg);_(oGZ,oHZ);_(oDZ,oGZ);_(oCZ,oDZ);_(oBZ,oCZ);var oIZ = _n("view");_r(oIZ, 'class', 28, e, s, gg);var oJZ = _n("view");_r(oJZ, 'class', 29, e, s, gg);var oKZ = _m( "view", ["class", 29,"style", 4], e, s, gg);var oLZ = _o(34, e, s, gg);_(oKZ,oLZ);_(oJZ,oKZ);var oMZ = _n("view");_r(oMZ, 'class', 29, e, s, gg);var oNZ = _o(35, e, s, gg);_(oMZ,oNZ);_(oJZ,oMZ);_(oIZ,oJZ);_(oBZ,oIZ);_(oiY,oBZ);var oOZ = _n("view");_r(oOZ, 'class', 36, e, s, gg);var oPZ = _m( "navigator", ["class", 37,"url", 1], e, s, gg);var oQZ = _n("view");_r(oQZ, 'class', 39, e, s, gg);var oRZ = _m( "image", ["class", 40,"src", 1], e, s, gg);_(oQZ,oRZ);_(oPZ,oQZ);var oSZ = _n("view");_r(oSZ, 'class', 42, e, s, gg);var oTZ = _o(43, e, s, gg);_(oSZ,oTZ);_(oPZ,oSZ);var oUZ = _n("view");_r(oUZ, 'class', 44, e, s, gg);var oVZ = _n("view");_r(oVZ, 'class', 45, e, s, gg);var oWZ = _o(46, e, s, gg);_(oVZ,oWZ);_(oUZ,oVZ);var oXZ = _o(47, e, s, gg);_(oUZ,oXZ);_(oPZ,oUZ);_(oOZ,oPZ);var oYZ = _m( "navigator", ["class", 48,"url", 1], e, s, gg);var oZZ = _n("view");_r(oZZ, 'class', 39, e, s, gg);var oaZ = _m( "image", ["class", 40,"src", 10], e, s, gg);_(oZZ,oaZ);_(oYZ,oZZ);var obZ = _n("view");_r(obZ, 'class', 42, e, s, gg);var ocZ = _o(51, e, s, gg);_(obZ,ocZ);_(oYZ,obZ);var odZ = _n("view");_r(odZ, 'class', 44, e, s, gg);var oeZ = _n("view");_r(oeZ, 'class', 45, e, s, gg);var ofZ = _o(52, e, s, gg);_(oeZ,ofZ);_(odZ,oeZ);var ogZ = _o(47, e, s, gg);_(odZ,ogZ);_(oYZ,odZ);_(oOZ,oYZ);var ohZ = _m( "navigator", ["class", 37,"url", 16], e, s, gg);var oiZ = _n("view");_r(oiZ, 'class', 39, e, s, gg);var ojZ = _m( "image", ["class", 40,"src", 14], e, s, gg);_(oiZ,ojZ);_(ohZ,oiZ);var okZ = _n("view");_r(okZ, 'class', 42, e, s, gg);var olZ = _o(55, e, s, gg);_(okZ,olZ);_(ohZ,okZ);var omZ = _n("view");_r(omZ, 'class', 44, e, s, gg);var onZ = _n("view");_r(onZ, 'class', 45, e, s, gg);var ooZ = _o(56, e, s, gg);_(onZ,ooZ);_(omZ,onZ);var opZ = _o(57, e, s, gg);_(omZ,opZ);_(ohZ,omZ);_(oOZ,ohZ);_(oiY,oOZ);var oqZ = _n("view");_r(oqZ, 'class', 36, e, s, gg);var orZ = _m( "navigator", ["class", 37,"url", 21], e, s, gg);var osZ = _n("view");_r(osZ, 'class', 39, e, s, gg);var otZ = _m( "image", ["class", 40,"src", 19], e, s, gg);_(osZ,otZ);_(orZ,osZ);var ouZ = _n("view");_r(ouZ, 'class', 42, e, s, gg);var ovZ = _o(60, e, s, gg);_(ouZ,ovZ);_(orZ,ouZ);_(oqZ,orZ);var owZ = _m( "navigator", ["class", 48,"url", 13], e, s, gg);var oxZ = _n("view");_r(oxZ, 'class', 39, e, s, gg);var oyZ = _m( "image", ["class", 40,"src", 22], e, s, gg);_(oxZ,oyZ);_(owZ,oxZ);var ozZ = _n("view");_r(ozZ, 'class', 42, e, s, gg);var o_Z = _o(63, e, s, gg);_(ozZ,o_Z);_(owZ,ozZ);_(oqZ,owZ);var oAa = _n("view");_r(oAa, 'class', 37, e, s, gg);_(oqZ,oAa);_(oiY,oqZ);var oBa = _v();
      if (_o(64, e, s, gg)) {
        oBa.wxVkey = 1;var oCa = _n("view");_r(oCa, 'class', 65, e, s, gg);var oEa = _o(66, e, s, gg);_(oCa,oEa);_(oBa, oCa);
      } _(oiY,oBa);_(ohY, oiY);
      } _(oeY,ohY);var oFa = _v();
      if (_o(67, e, s, gg)) {
        oFa.wxVkey = 1;var oGa = _m( "view", ["class", 2,"style", 66], e, s, gg);var oIa = _n("view");_r(oIa, 'style', 69, e, s, gg);var oJa = _n("view");_r(oJa, 'class', 70, e, s, gg);var oKa = _n("view");oKa.attr['class'] = true;_(oJa,oKa);_(oIa,oJa);var oMa = _m( "view", ["class", 70,"style", 3], e, s, gg);var oNa = _o(74, e, s, gg);_(oMa,oNa);_(oIa,oMa);var oOa = _n("view");_r(oOa, 'class', 75, e, s, gg);var oPa = _m( "form", ["bindsubmit", 76,"reportSubmit", 1], e, s, gg);var oQa = _m( "button", ["class", 78,"formType", 1,"style", 2], e, s, gg);var oRa = _o(81, e, s, gg);_(oQa,oRa);_(oPa,oQa);_(oOa,oPa);_(oIa,oOa);_(oGa,oIa);_(oFa, oGa);
      } _(oeY,oFa);var oSa = _v();
      if (_o(82, e, s, gg)) {
        oSa.wxVkey = 1;var oTa = _m( "view", ["class", 2,"style", 66], e, s, gg);var oVa = _n("view");_r(oVa, 'style', 69, e, s, gg);var oWa = _n("view");_r(oWa, 'class', 70, e, s, gg);var oXa = _n("view");oXa.attr['class'] = true;_(oWa,oXa);_(oVa,oWa);var oZa = _m( "view", ["class", 70,"style", 3], e, s, gg);var oaa = _o(83, e, s, gg);_(oZa,oaa);_(oVa,oZa);var oba = _n("view");_r(oba, 'class', 75, e, s, gg);var oca = _m( "form", ["reportSubmit", 77,"bindsubmit", 7], e, s, gg);var oda = _m( "button", ["class", 78,"formType", 1,"style", 2], e, s, gg);var oea = _o(85, e, s, gg);_(oda,oea);_(oca,oda);_(oba,oca);_(oVa,oba);_(oTa,oVa);_(oSa, oTa);
      } _(oeY,oSa);var ofa = _m( "navigator", ["class", 86,"hoverClass", 1,"openType", 2,"url", 3], e, s, gg);var oga = _n("image");_r(oga, 'src', 90, e, s, gg);_(ofa,oga);_(oeY,ofa);
      } _(r,oeY);
    return r;
  };
        e_["./yb_shop/pages/fenxiao/pages/index/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{height:100%;font-size:11pt;color:#555;background:#f2f2f2;overflow-x:hidden}wx-audio,wx-block,wx-button,wx-canvas,wx-checkbox,wx-contact-button,wx-form,wx-icon,wx-image,wx-input,wx-label,wx-map,wx-movable-view,wx-navigator,body,wx-picker,wx-picker-view,wx-progress,wx-radio,wx-scroll-view,wx-slider,wx-swiper,wx-switch,wx-text,wx-textarea,wx-video,wx-view{box-sizing:border-box}wx-button{font-size:11pt;font-family:inherit}.flex{display:-webkit-box;display:-webkit-flex;display:flex}.flex-row{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;flex-direction:row}.flex-col{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;flex-direction:column}.flex-grow-0{min-width:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}.flex-grow-1{min-width:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-ms-flex-negative:1;flex-shrink:1}.flex-x-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.flex-y-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}.flex-y-bottom{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:end;-ms-flex-align:end;-ms-grid-row-align:flex-end;align-items:flex-end}.spinner{margin:0 auto;width:%%?100rpx?%%;height:%%?50rpx?%%;text-align:center;font-size:%%?10rpx?%%}.spinner>wx-view{background-color:#8c949a;height:100%;width:%%?10rpx?%%;display:inline-block;margin:0 %%?2rpx?%%;animation:sk-stretchdelay 1.2s infinite ease-in-out}.spinner .rect2{animation-delay:-1.1s}.spinner .rect3{animation-delay:-1s}.spinner .rect4{animation-delay:-.9s}.spinner .rect5{animation-delay:-.8s}@keyframes sk-stretchdelay{0%,100%,40%{transform:scaleY(.4)}20%{transform:scaleY(1)}}.copy-text-btn{line-height:normal;height:auto;display:inline-block;font-size:9pt;color:#888;border:%%?1rpx?%% solid #ddd;border-radius:%%?5rpx?%%;padding:%%?6rpx?%% %%?12rpx?%%;background-color:#fff!important;box-shadow:none}.no-data-tip{padding:%%?150rpx?%% 0;text-align:center;color:#888}.no-data-tip .no-data-icon{width:%%?160rpx?%%;height:%%?160rpx?%%;font-size:0;border-radius:%%?9999rpx?%%;background:rgba(0,0,0,.1);margin-left:auto;margin-right:auto;margin-bottom:%%?32rpx?%%}.bg-white{background-color:#fff}.mb-20{margin-bottom:%%?20rpx?%%}.mb-10{margin-bottom:%%?10rpx?%%}wx-button[plain]{border:none;background:#fff;color:inherit}.nowrap{white-space:nowrap}.fs-0{font-size:0}.get-coupon{position:fixed;top:42px;left:0;width:100%;height:100%;background:rgba(0,0,0,.75);z-index:999}.get-coupon .get-coupon-box{position:relative;width:100%}.get-coupon .get-coupon-bg{width:100%;position:absolute;left:0;top:%%?-210rpx?%%;z-index:-1}.get-coupon .coupon-list{height:%%?330rpx?%%;width:%%?550rpx?%%;margin:0 auto}.get-coupon .coupon-item{width:%%?520rpx?%%;height:%%?264rpx?%%;margin-bottom:%%?20rpx?%%;position:relative;color:#fff;padding:0 %%?40rpx?%%}.get-coupon .coupon-item wx-image{position:absolute;z-index:-1;left:0;top:0;width:100%}.get-coupon .coupon-item:last-child{margin-bottom:0}.get-coupon .use-now{display:block;text-align:center;height:%%?60rpx?%%;line-height:%%?60rpx?%%;color:#ff4544;background:#fff;border-radius:%%?6rpx?%%;margin:%%?15rpx?%% 0;font-size:9pt}.fs-sm{font-size:9pt}.p-10{padding:%%?10rpx?%% %%?10rpx?%%}.px-24{padding-left:%%?24rpx?%%;padding-right:%%?24rpx?%%}.float-icon{position:fixed;z-index:20;right:%%?50rpx?%%;bottom:%%?50rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.page.show_navbar>.body .float-icon{bottom:%%?150rpx?%%}.page.show_navbar.device_iphone_x>.body .float-icon{bottom:%%?215rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.w-100{width:100%}.h-100{height:100%}.wh-100{width:100%;height:100%}.text-more{width:100%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;word-break:break-all}.navbar{position:fixed;bottom:0;left:0;width:100%;background:#fff;color:#555;z-index:2000;border-top:%%?1rpx?%% solid rgba(0,0,0,.1);box-sizing:border-box}.navbar wx-navigator{height:%%?115rpx?%%;width:1%}.navbar wx-navigator>wx-view{width:100%;padding-top:4px}.navbar .navbar-icon{width:%%?64rpx?%%;height:%%?64rpx?%%;display:block;margin:0 auto}.navbar .navbar-text{font-size:8pt;text-align:center;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.navbar+.after-navber{padding-bottom:%%?115rpx?%%}.navbar+.after-navber .float-icon,.navbar~.float-icon{bottom:%%?170rpx?%%!important}.hidden{display:none}.text-more-2{width:100%;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;word-break:break-all}.no-scroll{height:100%;overflow-y:hidden}.dial{width:%%?100rpx?%%;height:%%?100rpx?%%;border-radius:%%?10rpx?%%;display:block;margin-bottom:%%?32rpx?%%}.navbar wx-button{display:block;padding:0;border:0;background:0 0;margin:0;width:100%;line-height:1.25}.navbar wx-button::after{display:none}.form-id-form{display:block}.form-id-button{display:block;background:0 0;background-color:transparent;border:none;overflow:auto;line-height:inherit;font-size:inherit;font-family:inherit;border-radius:0;margin:0 0;padding:0 0;text-align:left;height:auto}.form-id-button::after{display:none}.navbar.device_iphone_x{padding-bottom:%%?65rpx?%%}.navbar.device_iphone_x~.after-navber{padding-bottom:%%?180rpx?%%}.page.show_navbar>.body{padding-bottom:%%?115rpx?%%}.page.show_navbar.device_iphone_x>.header .navbar{padding-bottom:%%?65rpx?%%}.page.show_navbar.device_iphone_x>.body{padding-bottom:%%?180rpx?%%}.tc{text-align:center}.tc02{text-align:center;color:rgba(255,255,255,.8);font-size:%%?26rpx?%%}.info{width:100%;background-color:#ed4f4e;padding:%%?30rpx?%% %%?24rpx?%% 0 %%?24rpx?%%;color:#fff}.info .info-title{border-bottom:%%?1rpx?%% #ffa2a2 solid;padding-bottom:%%?20rpx?%%}.info .info-title .info-img{width:%%?120rpx?%%;height:%%?120rpx?%%;border-radius:%%?120rpx?%%}.info .info-block{padding:%%?18rpx?%% %%?40rpx?%%}.info .info-block .info-up{font-size:%%?30rpx?%%;margin-bottom:%%?30rpx?%%}.info-big{font-size:13pt}.info .info-content{width:100%;padding-top:%%?22rpx?%%}.info .info-content .info-left{width:50%}.info .info-content .info-right{width:50%;margin-top:%%?24rpx?%%}.info .info-content .info-left .info-label{padding-bottom:%%?40rpx?%%}.info-label .info-first{margin-bottom:%%?24rpx?%%}.info-right .info-btn{border:%%?1rpx?%% #e3e3e3 solid;border-radius:%%?10rpx?%%;float:right;text-align:center;font-size:%%?26rpx?%%;margin-bottom:%%?24rpx?%%;padding:%%?6rpx?%%}.list{background-color:#fff;width:100%}.list .border-bottom{border-bottom:%%?1rpx?%% #e3e3e3 solid}.list .item{width:33.3333%;height:%%?220rpx?%%;border-right:%%?1rpx?%% solid #e3e3e3}.list .item:last-child{border-right:0}.list .item .list-img{width:100%;margin-top:%%?40rpx?%%;text-align:center}.list .item .list-img .img{width:%%?50rpx?%%;height:%%?50rpx?%%}.list .item .list-content{color:#666;margin-top:%%?13rpx?%%;text-align:center}.list-red{color:#ff4544}.new-block{width:100%;padding:%%?44rpx?%% %%?10rpx?%%;margin-bottom:%%?16rpx?%%;background-color:#fff}.new-block .flex-grow-1{width:50%}.new-block .flex-grow-1:first-child{border-right:%%?1rpx?%% #eee solid}.new-block .flex-grow-1{text-align:center}.notice{text-align:center;margin-top:30px;margin-right:10px;color:#ccc}@code-separator-line:__wxRoute = "yb_shop/pages/fenxiao/pages/index/index";__wxRouteBegin = true;
define("yb_shop/pages/fenxiao/pages/index/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
'use strict';
var app = getApp(),
    a = app.requirejs('core');
Page({
  data: {
    show: false,
    total_price: 0,
    price: 0,
    cash_price: 0,
    total_cash: 0,
    team_count: 0,
    order_money: 0
  },
  onLoad: function onLoad(e) {
    a.ReName(e.title);
    var that = this;
    that.getInfo();
  },
  getInfo: function getInfo() {
    var that = this;
    a.get('Distribe/shareSetting', {}, function (t) {
      if (t.code == 0) {
        app.setCache('shareSetting', t.info);
        that.setData({
          shareSetting: t.info
        });
      }
    });
    a.get('Distribe/userinfo', { uid: app.getCache('userinfo').uid }, function (t) {
      if (t.code == 0) {
        app.setCache('share_userinfo', t.info);
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
  onReady: function onReady() {},
  onShow: function onShow() {},
  onPullDownRefresh: function onPullDownRefresh() {
    var that = this;
    that.getInfo();
    wx.stopPullDownRefresh();
  },
  onReachBottom: function onReachBottom() {},
  apply: function apply(e) {
    var that = this;
    a.jump('../add-share/index?title=申请' + that.data.shareSetting.other[13]);
  },
  home: function home(e) {
    a.jump('/yb_shop/pages/index/index', 2);
  }
});
});require("yb_shop/pages/fenxiao/pages/index/index.js")@code-separator-line:["div","block","view","image","navigator","form","button"]