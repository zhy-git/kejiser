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
    Z([[7],[3, "show"]]);Z([3, 'info']);Z([3, 'info-title flex-row']);Z([3, 'select']);Z([3, 'flex-x-center  width']);Z([3, '-1']);Z([a, [3, 'info-text '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [[2, "-"], [1, 1]]],[1, "active"],[1, ""]]]);Z([3, '全部']);Z([3, 'flex-x-center  width ']);Z([3, '0']);Z([a, [3, 'info-text '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, 0]],[1, "active"],[1, ""]]]);Z([3, '待付款']);Z([3, 'flex-x-center width ']);Z([3, '1']);Z([a, [3, 'info-text '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, 1]],[1, "active"],[1, ""]]]);Z([3, '已付款']);Z([3, 'flex-x-center width']);Z([3, '2']);Z([a, [3, 'info-text '],[[2,'?:'],[[2, "=="], [[7],[3, "status"]], [1, 2]],[1, "active"],[1, ""]]]);Z([3, '已完成']);Z([3, 'info-content']);Z([[7],[3, "list"]]);Z([3, 'info-block']);Z([3, 'info-label flex-row']);Z([3, 'info-left']);Z([3, 'width:80%']);Z([a, [3, '订单号：'],[[6],[[7],[3, "item"]],[3, "order_no"]]]);Z([3, 'info-right']);Z([3, 'width:20%']);Z([3, 'info-status']);Z([a, [[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 0]],[1, "待付款"],[[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]],[1, "已完成"],[1, "已付款"]]]]);Z([3, 'click']);Z([[7],[3, "index"]]);Z([3, 'info-left flex-row flex-grow-1']);Z([3, 'info-img flex-y-center']);Z([3, 'img']);Z([[6],[[7],[3, "item"]],[3, "user_headimg"]]);Z([3, 'info-name text-more']);Z([a, [[6],[[7],[3, "item"]],[3, "nick_name"]]]);Z([3, 'info-level text-more']);Z([a, [[6],[[7],[3, "item"]],[3, "share_type"]]]);Z([3, 'info-right flex-grow-1']);Z([3, 'info-money flex-row']);Z([a, [[2,'?:'],[[2, "!="], [[6],[[7],[3, "item"]],[3, "order_status"]], [1, 3]],[1, "预计"],[1, "已得"]],[3, '佣金：']]);Z([3, 'red']);Z([a, [[6],[[7],[3, "item"]],[3, "share_money"]]]);Z([3, '元']);Z([a, [3, 'down flex-y-center '],[[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "hidden"]]],[1, "active"],[1, ""]]]);Z([[2, "=="], [[7],[3, "index"]], [[7],[3, "hidden"]]]);Z([3, '../../images/img-share-down.png']);Z([3, 'width:26rpx;height:16rpx;margin-left: 24rpx;']);Z([3, '../../images/img-share-right.png']);Z([3, 'width:16rpx;height:26rpx;margin-left: 24rpx;']);Z([[2,'?:'],[[2, "=="], [[7],[3, "index"]], [[7],[3, "hidden"]]],[1, "show"],[1, "hide"]]);Z([[6],[[7],[3, "item"]],[3, "goods"]]);Z([3, 'v']);Z([3, 'info-label height-164 flex-row']);Z([3, 'info-left flex-row width-90']);Z([3, 'img img-size-120']);Z([[6],[[7],[3, "v"]],[3, "pic"]]);Z([3, 'info-count']);Z([3, 'info-detail']);Z([a, [[6],[[7],[3, "v"]],[3, "goods_name"]]]);Z([a, [3, '×'],[[6],[[7],[3, "v"]],[3, "num"]]]);Z([[2, "&&"],[[2, "=="], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]],[[7],[3, "loaded"]]]);Z([3, 'info-footer flex-row']);Z([3, 'info-before']);Z([3, 'info-border']);Z([3, 'info-t']);Z([3, '暂无订单']);Z([3, 'info-after']);
  })(z);d_["./yb_shop/pages/fenxiao/pages/share-order/share-order.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oLd = _v();
      if (_o(0, e, s, gg)) {
        oLd.wxVkey = 1;var oMd = _n("view");_r(oMd, 'class', 1, e, s, gg);var oOd = _n("view");_r(oOd, 'class', 2, e, s, gg);var oPd = _m( "view", ["bindtap", 3,"class", 1,"data-status", 2], e, s, gg);var oQd = _n("view");_r(oQd, 'class', 6, e, s, gg);var oRd = _o(7, e, s, gg);_(oQd,oRd);_(oPd,oQd);_(oOd,oPd);var oSd = _m( "view", ["bindtap", 3,"class", 5,"data-status", 6], e, s, gg);var oTd = _n("view");_r(oTd, 'class', 10, e, s, gg);var oUd = _o(11, e, s, gg);_(oTd,oUd);_(oSd,oTd);_(oOd,oSd);var oVd = _m( "view", ["bindtap", 3,"class", 9,"data-status", 10], e, s, gg);var oWd = _n("view");_r(oWd, 'class', 14, e, s, gg);var oXd = _o(15, e, s, gg);_(oWd,oXd);_(oVd,oWd);_(oOd,oVd);var oYd = _m( "view", ["bindtap", 3,"class", 13,"data-status", 14], e, s, gg);var oZd = _n("view");_r(oZd, 'class', 18, e, s, gg);var oad = _o(19, e, s, gg);_(oZd,oad);_(oYd,oZd);_(oOd,oYd);_(oMd,oOd);var obd = _n("view");_r(obd, 'class', 20, e, s, gg);var ocd = _v();var odd = function(ohd,ogd,ofd,gg){var oed = _n("view");_r(oed, 'class', 22, ohd, ogd, gg);var ojd = _n("view");_r(ojd, 'class', 23, ohd, ogd, gg);var okd = _m( "view", ["class", 24,"style", 1], ohd, ogd, gg);var old = _o(26, ohd, ogd, gg);_(okd,old);_(ojd,okd);var omd = _m( "view", ["class", 27,"style", 1], ohd, ogd, gg);var ond = _n("view");_r(ond, 'class', 29, ohd, ogd, gg);var ood = _o(30, ohd, ogd, gg);_(ond,ood);_(omd,ond);_(ojd,omd);_(oed,ojd);var opd = _m( "view", ["class", 23,"bindtap", 8,"data-index", 9], ohd, ogd, gg);var oqd = _n("view");_r(oqd, 'class', 33, ohd, ogd, gg);var ord = _n("view");_r(ord, 'class', 34, ohd, ogd, gg);var osd = _m( "image", ["class", 35,"src", 1], ohd, ogd, gg);_(ord,osd);_(oqd,ord);var otd = _n("view");_r(otd, 'class', 37, ohd, ogd, gg);var oud = _o(38, ohd, ogd, gg);_(otd,oud);_(oqd,otd);var ovd = _n("view");_r(ovd, 'class', 39, ohd, ogd, gg);var owd = _o(40, ohd, ogd, gg);_(ovd,owd);_(oqd,ovd);_(opd,oqd);var oxd = _n("view");_r(oxd, 'class', 41, ohd, ogd, gg);var oyd = _n("view");_r(oyd, 'class', 42, ohd, ogd, gg);var ozd = _n("text");var o_d = _o(43, ohd, ogd, gg);_(ozd,o_d);var oAe = _n("text");_r(oAe, 'class', 44, ohd, ogd, gg);var oBe = _o(45, ohd, ogd, gg);_(oAe,oBe);_(ozd,oAe);var oCe = _o(46, ohd, ogd, gg);_(ozd,oCe);_(oyd,ozd);var oDe = _n("view");_r(oDe, 'class', 47, ohd, ogd, gg);var oEe = _v();
      if (_o(48, ohd, ogd, gg)) {
        oEe.wxVkey = 1;var oFe = _m( "image", ["src", 49,"style", 1], ohd, ogd, gg);_(oEe, oFe);
      }else {
        oEe.wxVkey = 2;var oHe = _m( "image", ["src", 51,"style", 1], e, s, gg);_(oEe, oHe);
      }_(oDe,oEe);_(oyd,oDe);_(oxd,oyd);_(opd,oxd);_(oed,opd);var oJe = _n("view");_r(oJe, 'class', 53, ohd, ogd, gg);var oKe = _v();var oLe = function(oPe,oOe,oNe,gg){var oMe = _n("view");_r(oMe, 'class', 56, oPe, oOe, gg);var oRe = _n("view");_r(oRe, 'class', 57, oPe, oOe, gg);var oSe = _n("view");_r(oSe, 'class', 34, oPe, oOe, gg);var oTe = _m( "image", ["class", 58,"src", 1], oPe, oOe, gg);_(oSe,oTe);_(oRe,oSe);var oUe = _n("view");_r(oUe, 'class', 60, oPe, oOe, gg);var oVe = _n("view");_r(oVe, 'class', 61, oPe, oOe, gg);var oWe = _o(62, oPe, oOe, gg);_(oVe,oWe);_(oUe,oVe);var oXe = _n("view");_r(oXe, 'class', 61, oPe, oOe, gg);var oYe = _o(63, oPe, oOe, gg);_(oXe,oYe);_(oUe,oXe);_(oRe,oUe);_(oMe,oRe);_(oNe, oMe);return oNe;};_2(54, oLe, ohd, ogd, gg, oKe, "v", "index", '');_(oJe,oKe);_(oed,oJe);_(ofd, oed);return ofd;};_2(21, odd, e, s, gg, ocd, "item", "index", '');_(obd,ocd);_(oMd,obd);var oZe = _v();
      if (_o(64, e, s, gg)) {
        oZe.wxVkey = 1;var oae = _n("view");_r(oae, 'class', 65, e, s, gg);var oce = _n("view");_r(oce, 'class', 66, e, s, gg);var ode = _n("view");_r(ode, 'class', 67, e, s, gg);_(oce,ode);_(oae,oce);var oee = _n("view");_r(oee, 'class', 68, e, s, gg);var ofe = _o(69, e, s, gg);_(oee,ofe);_(oae,oee);var oge = _n("view");_r(oge, 'class', 70, e, s, gg);var ohe = _n("view");_r(ohe, 'class', 67, e, s, gg);_(oge,ohe);_(oae,oge);_(oZe, oae);
      } _(oMd,oZe);_(oLd, oMd);
      } _(r,oLd);
    return r;
  };
        e_["./yb_shop/pages/fenxiao/pages/share-order/share-order.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{height:100%;font-size:11pt;color:#555;background:#f2f2f2;overflow-x:hidden}wx-audio,wx-block,wx-button,wx-canvas,wx-checkbox,wx-contact-button,wx-form,wx-icon,wx-image,wx-input,wx-label,wx-map,wx-movable-view,wx-navigator,body,wx-picker,wx-picker-view,wx-progress,wx-radio,wx-scroll-view,wx-slider,wx-swiper,wx-switch,wx-text,wx-textarea,wx-video,wx-view{box-sizing:border-box}wx-button{font-size:11pt;font-family:inherit}.flex{display:-webkit-box;display:-webkit-flex;display:flex}.flex-row{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:horizontal;flex-direction:row}.flex-col{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;flex-direction:column}.flex-grow-0{min-width:0;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}.flex-grow-1{min-width:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-ms-flex-negative:1;flex-shrink:1}.flex-x-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.flex-y-center{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}.flex-y-bottom{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:end;-ms-flex-align:end;-ms-grid-row-align:flex-end;align-items:flex-end}.spinner{margin:0 auto;width:%%?100rpx?%%;height:%%?50rpx?%%;text-align:center;font-size:%%?10rpx?%%}.spinner>wx-view{background-color:#8c949a;height:100%;width:%%?10rpx?%%;display:inline-block;margin:0 %%?2rpx?%%;animation:sk-stretchdelay 1.2s infinite ease-in-out}.spinner .rect2{animation-delay:-1.1s}.spinner .rect3{animation-delay:-1s}.spinner .rect4{animation-delay:-.9s}.spinner .rect5{animation-delay:-.8s}@keyframes sk-stretchdelay{0%,100%,40%{transform:scaleY(.4)}20%{transform:scaleY(1)}}.copy-text-btn{line-height:normal;height:auto;display:inline-block;font-size:9pt;color:#888;border:%%?1rpx?%% solid #ddd;border-radius:%%?5rpx?%%;padding:%%?6rpx?%% %%?12rpx?%%;background-color:#fff!important;box-shadow:none}.no-data-tip{padding:%%?150rpx?%% 0;text-align:center;color:#888}.no-data-tip .no-data-icon{width:%%?160rpx?%%;height:%%?160rpx?%%;font-size:0;border-radius:%%?9999rpx?%%;background:rgba(0,0,0,.1);margin-left:auto;margin-right:auto;margin-bottom:%%?32rpx?%%}.bg-white{background-color:#fff}.mb-20{margin-bottom:%%?20rpx?%%}.mb-10{margin-bottom:%%?10rpx?%%}wx-button[plain]{border:none;background:#fff;color:inherit}.nowrap{white-space:nowrap}.fs-0{font-size:0}.get-coupon{position:fixed;top:42px;left:0;width:100%;height:100%;background:rgba(0,0,0,.75);z-index:999}.get-coupon .get-coupon-box{position:relative;width:100%}.get-coupon .get-coupon-bg{width:100%;position:absolute;left:0;top:%%?-210rpx?%%;z-index:-1}.get-coupon .coupon-list{height:%%?330rpx?%%;width:%%?550rpx?%%;margin:0 auto}.get-coupon .coupon-item{width:%%?520rpx?%%;height:%%?264rpx?%%;margin-bottom:%%?20rpx?%%;position:relative;color:#fff;padding:0 %%?40rpx?%%}.get-coupon .coupon-item wx-image{position:absolute;z-index:-1;left:0;top:0;width:100%}.get-coupon .coupon-item:last-child{margin-bottom:0}.get-coupon .use-now{display:block;text-align:center;height:%%?60rpx?%%;line-height:%%?60rpx?%%;color:#ff4544;background:#fff;border-radius:%%?6rpx?%%;margin:%%?15rpx?%% 0;font-size:9pt}.fs-sm{font-size:9pt}.p-10{padding:%%?10rpx?%% %%?10rpx?%%}.px-24{padding-left:%%?24rpx?%%;padding-right:%%?24rpx?%%}.float-icon{position:fixed;z-index:20;right:%%?50rpx?%%;bottom:%%?50rpx?%%}.bar-bottom~.float-icon{bottom:%%?150rpx?%%}.page.show_navbar>.body .float-icon{bottom:%%?150rpx?%%}.page.show_navbar.device_iphone_x>.body .float-icon{bottom:%%?215rpx?%%}.float-icon .float-icon-btn{display:block;padding:0;margin:0;border:none;background:0 0}.float-icon .float-icon-btn:after{display:none}.float-icon .float-icon-btn:active{opacity:.75}.float-icon .float-icon-btn wx-image{width:%%?100rpx?%%;height:%%?100rpx?%%;display:block}.w-100{width:100%}.h-100{height:100%}.wh-100{width:100%;height:100%}.text-more{width:100%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;word-break:break-all}.navbar{position:fixed;bottom:0;left:0;width:100%;background:#fff;color:#555;z-index:2000;border-top:%%?1rpx?%% solid rgba(0,0,0,.1);box-sizing:border-box}.navbar wx-navigator{height:%%?115rpx?%%;width:1%}.navbar wx-navigator>wx-view{width:100%;padding-top:4px}.navbar .navbar-icon{width:%%?64rpx?%%;height:%%?64rpx?%%;display:block;margin:0 auto}.navbar .navbar-text{font-size:8pt;text-align:center;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.navbar+.after-navber{padding-bottom:%%?115rpx?%%}.navbar+.after-navber .float-icon,.navbar~.float-icon{bottom:%%?170rpx?%%!important}.hidden{display:none}.text-more-2{width:100%;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;word-break:break-all}.no-scroll{height:100%;overflow-y:hidden}.dial{width:%%?100rpx?%%;height:%%?100rpx?%%;border-radius:%%?10rpx?%%;display:block;margin-bottom:%%?32rpx?%%}.navbar wx-button{display:block;padding:0;border:0;background:0 0;margin:0;width:100%;line-height:1.25}.navbar wx-button::after{display:none}.form-id-form{display:block}.form-id-button{display:block;background:0 0;background-color:transparent;border:none;overflow:auto;line-height:inherit;font-size:inherit;font-family:inherit;border-radius:0;margin:0 0;padding:0 0;text-align:left;height:auto}.form-id-button::after{display:none}.navbar.device_iphone_x{padding-bottom:%%?65rpx?%%}.navbar.device_iphone_x~.after-navber{padding-bottom:%%?180rpx?%%}.page.show_navbar>.body{padding-bottom:%%?115rpx?%%}.page.show_navbar.device_iphone_x>.header .navbar{padding-bottom:%%?65rpx?%%}.page.show_navbar.device_iphone_x>.body{padding-bottom:%%?180rpx?%%}.info{width:100%;border-top:%%?1rpx?%% #e3e3e3 solid}.width{width:25%;text-align:center}.info-title .active{color:#ff4544;border-bottom:%%?4rpx?%% #ff4544 solid}.info-title .info-text{height:100%;line-height:%%?100rpx?%%}.info .info-title{height:%%?100rpx?%%;padding:0 %%?24rpx?%%;border-bottom:%%?1rpx?%% #e3e3e3 solid;background-color:#fff;position:fixed;top:42px;left:0;width:100%;z-index:1000}.info .info-content{width:100%;padding-top:%%?100rpx?%%}.info .info-content .info-block{width:100%;background-color:#fff;margin-bottom:%%?26rpx?%%;padding:0 %%?24rpx?%%}.info-block .info-label{width:100%;height:%%?90rpx?%%;border-bottom:%%?2rpx?%% #e3e3e3 solid;font-size:9pt;line-height:%%?90rpx?%%}.info-block .info-label .info-left{width:50%}.info-block .info-label .info-right{width:50%;text-align:right}.info-block .info-label .info-status{color:#ff4544}.info-left .info-img{width:30%}.info-left .info-img .img{width:%%?64rpx?%%;height:%%?64rpx?%%}.info-left .info-name{margin-right:%%?36rpx?%%;overflow:hidden}.info-block .height-164{height:%%?164rpx?%%}.info .info-block .info-label .width-90{width:90%}.info-left .info-img .img-size-120{width:%%?104rpx?%%;height:%%?104rpx?%%}.info-label .info-left .info-count{width:70%}.info-count .info-detail{width:100%;height:%%?80rpx?%%;overflow:hidden;-webkit-line-clamp:1;display:-webkit-box;-webkit-box-orient:vertical}.info-right .info-money{text-align:right;float:right}.red{color:#ff4544;font-size:9pt}.info-block .info-label:last-child{border:none}.info .info-footer{color:#bbb;text-align:center;width:100%;padding:0 %%?100rpx?%%;height:%%?60rpx?%%;line-height:%%?60rpx?%%}.info .info-footer .info-t{height:%%?60rpx?%%;margin:0 %%?20rpx?%%}.info .info-footer .info-before{width:%%?168rpx?%%;height:%%?60rpx?%%}.info .info-footer .info-after{width:%%?168rpx?%%;height:%%?60rpx?%%}.info .info-footer .info-border{border-bottom:%%?1rpx?%% #e3e3e3 solid;padding-bottom:%%?30rpx?%%}.hide{display:none}.show{display:block}@code-separator-line:__wxRoute = "yb_shop/pages/fenxiao/pages/share-order/share-order";__wxRouteBegin = true;
define("yb_shop/pages/fenxiao/pages/share-order/share-order.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
'use strict';
var app = getApp(),
    a = app.requirejs('core');
var loading = false;
Page({
  data: {
    show: false,
    status: -1,
    list: [],
    loaded: false,
    page: 1,
    hidden: -1
  },
  onLoad: function onLoad(t) {
    a.ReName(t.title);
    this.getlist();
  },
  getlist: function getlist() {
    if (loading) {
      return;
    }
    loading = true;
    var that = this,
        page = that.data.page;
    a.get('Distribe/shareOrder', {
      uid: app.getCache('userinfo').uid,
      status: that.data.status
    }, function (t) {
      console.log(t);
      loading = false;
      if (t.code == 0) {
        that.setData({
          list: that.data.list.concat(t.info),
          page: t.info.length == 0 ? that.data.page : that.data.page + 1,
          loaded: t.info.length < 10 ? true : false,
          show: true
        });
      } else {
        a.alert(t.msg);
      }
    }, true);
  },
  click: function click(e) {
    var that = this,
        i = a.pdata(e).index;
    that.setData({
      hidden: i != that.data.hidden ? i : -1
    });
  },
  select: function select(e) {
    var that = this,
        i = a.pdata(e).status;
    that.setData({
      page: 1,
      list: [],
      loaded: false,
      status: i
    });
    this.getlist();
  },
  /**
    * 下拉刷新
    */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      list: [],
      page: 1,
      loaded: false
    });
    this.getlist();
    wx.stopPullDownRefresh();
  },
  /**
   *上拉加载
   */
  onReachBottom: function onReachBottom() {
    console.log('加载更多');
    this.data.loaded || this.getlist();
  }
});
});require("yb_shop/pages/fenxiao/pages/share-order/share-order.js")@code-separator-line:["div","view","image","text"]