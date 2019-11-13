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
    Z([a, [3, 'picker-modal city-picker '],[[2,'?:'],[[7],[3, "showPicker"]],[1, "in"],[1, "out"]]]);Z([3, 'picker-control']);Z([3, 'onCancel']);Z([3, 'cancel']);Z([3, '取消']);Z([3, 'onConfirm']);Z([3, 'confirm']);Z([3, '确定']);Z([[2, "!"], [[7],[3, "noArea"]]]);Z([3, 'bindChange']);Z([3, 'picker']);Z([3, 'height: 40px;']);Z([[7],[3, "pval"]]);Z([[7],[3, "areas"]]);Z([3, 'item']);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[6],[[6],[[7],[3, "areas"]],[[6],[[7],[3, "pval"]],[1, 0]]],[3, "city"]]);Z([[6],[[6],[[6],[[6],[[7],[3, "areas"]],[[6],[[7],[3, "pval"]],[1, 0]]],[3, "city"]],[[6],[[7],[3, "pval"]],[1, 1]]],[3, "area"]]);Z([[7],[3, "noArea"]]);Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page footer']);Z([[2, "=="], [[7],[3, "is_mention"]], [1, 3]]);Z([3, 'nav']);Z([3, 'dispatchtype']);Z([[2,'?:'],[[2, "=="], [[7],[3, "send_type"]], [1, "express"]],[1, "red"],[1, "default"]]);Z([3, 'express']);Z([3, '快递配送']);Z([[2,'?:'],[[2, "=="], [[7],[3, "send_type"]], [1, "selftake"]],[1, "red"],[1, "default"]]);Z([3, 'selftake']);Z([3, '上门自提']);Z([[2, "=="], [[7],[3, "send_type"]], [1, "express"]]);Z([3, 'fui-cell-group']);Z([3, 'fui-cell']);Z([3, 'none']);Z([3, '/yb_shop/pages/member/address/select']);Z([3, 'fui-cell-icon']);Z([[6],[[7],[3, "icons"]],[3, "location01"]]);Z([3, 'fui-cell-text textl info']);Z([[2, "!="], [[6],[[7],[3, "list"]],[3, "address"]], [1, ""]]);Z([3, 'name']);Z([a, [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "consigner"]],[3, ' ']]);Z([a, [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "phone"]]]);Z([[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "address"]]);Z([3, 'adress']);Z([a, [[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "province"]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "city"]]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "district"]]], [1, " "]], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "address"]]]]);Z([[2, "!"], [[6],[[6],[[7],[3, "list"]],[3, "address"]],[3, "address"]]]);Z([3, 'text no-address']);Z([3, '添加收货地址']);Z([3, 'fui-cell-remark']);Z([[2, "=="], [[7],[3, "send_type"]], [1, "selftake"]]);Z([3, 'join_g_li']);Z([3, 'join_li']);Z([3, '姓名']);Z([3, 'dataChange']);Z([3, 'consigner']);Z([3, '请输入姓名']);Z([3, 'text']);Z([[6],[[7],[3, "data"]],[3, "consigner"]]);Z([3, 'join_li join_li_p']);Z([3, '手机号']);Z([3, 'phone']);Z([3, '请输入手机号']);Z([3, 'number']);Z([[6],[[7],[3, "data"]],[3, "phone"]]);Z([3, 'section']);Z([3, 's_title']);Z([3, '自提时间']);Z([3, 'bindDateChange']);Z([3, 'date']);Z([[7],[3, "date"]]);Z([a, [[2,'?:'],[[2, "!="], [[7],[3, "date"]], [1, ""]],[[7],[3, "date"]],[1, "请选择日期"]]]);Z([3, 'clear']);Z([3, 'bindTimeChange']);Z([3, '24:00']);Z([3, 'time']);Z([3, '00:00']);Z([[7],[3, "time"]]);Z([3, 'fui-list-group']);Z([3, 'margin-top:20rpx;']);Z([[2, "=="], [[6],[[7],[3, "cart_list"]],[3, "length"]], [1, 0]]);Z([3, 'fui-list goods-item noclick']);Z([3, 'url']);Z([3, 'fui-list-media']);Z([a, [3, '/yb_shop/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "list"]],[3, "goods_id"]]]);Z([3, 'round goods_img']);Z([[6],[[6],[[7],[3, "list"]],[3, "pic"]],[3, "img_cover"]]);Z([3, 'fui-list-inner']);Z([3, 'sure_subtitle']);Z([a, [3, '\r\n              '],[[6],[[6],[[7],[3, "list"]],[3, "goods"]],[3, "goods_name"]],[3, '\r\n            ']]);Z([3, 'text cart-option']);Z([[6],[[7],[3, "list"]],[3, "sku_name"]]);Z([3, 'choose-option']);Z([3, 'fui-list-angle']);Z([3, 'price']);Z([a, [3, '￥'],[[6],[[7],[3, "list"]],[3, "price"]]]);Z([a, [3, 'x'],[[6],[[7],[3, "options"]],[3, "total"]]]);Z([[2, ">"], [[6],[[7],[3, "cart_list"]],[3, "length"]], [1, 0]]);Z([[7],[3, "cart_list"]]);Z([3, 'val']);Z([3, 'key']);Z([a, [3, '/yb_shop/pages/goods/detail/index?id\x3d'],[[6],[[7],[3, "val"]],[3, "goods_id"]]]);Z([[6],[[6],[[7],[3, "val"]],[3, "pic"]],[3, "img_cover"]]);Z([a, [3, '\r\n                '],[[6],[[7],[3, "val"]],[3, "goods_name"]],[[6],[[7],[3, "val"]],[3, "sku_name"]],[3, '\r\n              ']]);Z([[6],[[6],[[7],[3, "val"]],[3, "price"]],[3, "sku_name"]]);Z([a, [3, '￥'],[[6],[[6],[[7],[3, "val"]],[3, "price"]],[3, "price"]]]);Z([a, [3, 'x'],[[6],[[7],[3, "val"]],[3, "num"]]]);Z([3, 'fui-cell-info']);Z([3, 'buyer_message']);Z([3, '选填：买家留言（50字以内）']);Z([3, 'fui-cell-text']);Z([3, '商品小计']);Z([3, 'fui-cell-remark noremark']);Z([3, '\r\n          共\r\n          ']);Z([3, 'text-danger']);Z([a, [[6],[[7],[3, "options"]],[3, "total"]]]);Z([3, ' 件商品 合计：\r\n          ']);Z([a, [3, '¥ '],[[6],[[7],[3, "data"]],[3, "order_money"]]]);Z([3, '运费']);Z([3, '¥\r\n          ']);Z([a, [[6],[[7],[3, "data"]],[3, "shipping_money"]]]);Z([[2, "!="], [[7],[3, "rebate_money"]], [1, 0]]);Z([a, [3, '会员折扣享'],[[7],[3, "user_rebate"]],[3, '折']]);Z([a, [[7],[3, "rebate_money"]]]);Z([[2, "&&"],[[6],[[7],[3, "data"]],[3, "discount_money"]],[[2, "!="], [[6],[[7],[3, "data"]],[3, "discount_money"]], [1, "0.00"]]]);Z([3, '减免']);Z([3, '- ¥']);Z([a, [[6],[[7],[3, "data"]],[3, "discount_money"]]]);Z([[2, "!="], [[7],[3, "coupon_num"]], [1, 0]]);Z([3, 'open_coupon']);Z([a, [3, 'fui-cell '],[[2,'?:'],[[7],[3, "coupon_display"]],[1, "a-li02"],[1, "a-li"]]]);Z([3, '优惠券']);Z([3, 'margin-right:40rpx;']);Z([a, [[2,'?:'],[[2, "&&"],[[6],[[7],[3, "data"]],[3, "coupon_money"]],[[2, "!="], [[6],[[7],[3, "data"]],[3, "coupon_money"]], [1, 0]]],[[2, "+"], [1, "- ¥"], [[6],[[7],[3, "data"]],[3, "coupon_money"]]],[[2, "+"], [[7],[3, "coupon_num"]], [1, "张可用"]]]]);Z([[7],[3, "coupon"]]);Z([[2, "&&"],[[2, "!="], [[7],[3, "coupon_num"]], [1, 0]],[[7],[3, "coupon_display"]]]);Z([3, 'select']);Z([3, 'coupon_box']);Z([[6],[[7],[3, "item"]],[3, "discount_money"]]);Z([[6],[[7],[3, "item"]],[3, "id"]]);Z([[6],[[7],[3, "item"]],[3, "together"]]);Z([3, 'radio']);Z([3, 'coupon_price']);Z([3, 'price01']);Z([3, '￥']);Z([3, 'price02']);Z([3, 'coupon_time']);Z([a, [3, '截止时间：'],[[6],[[7],[3, "item"]],[3, "endtime"]]]);Z([3, 'coupon_con']);Z([a, [3, '满'],[[6],[[7],[3, "item"]],[3, "satisfy_money"]],[3, '元可用 '],[[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "together"]], [1, 2]],[1, "(可参与满减)"],[1, ""]]]);Z([3, '0.00']);Z([3, '2']);Z([3, 'cannel_btn']);Z([3, '不使用优惠券']);Z([3, 'height:62px;']);Z([a, [3, 'fui-mask '],[[2,'?:'],[[7],[3, "showPicker"]],[1, "show"],[1, ""]]]);Z([3, 'fui-footer']);Z([3, 'tool nopadding']);Z([3, 'title text-right']);Z([3, 'padding-right:12rpx;']);Z([3, '需支付：\r\n          ']);Z([a, [[6],[[7],[3, "data"]],[3, "pay_money"]],[3, '元']]);Z([3, 'btns']);Z([3, 'submit']);Z([a, [3, 'btn '],[[2,'?:'],[[7],[3, "submit"]],[1, ""],[1, "disabled"]]]);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';font-size:34rpx;border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([3, '确认订单']);Z([a, [3, 'fui-toast '],[[2,'?:'],[[6],[[7],[3, "FoxUIToast"]],[3, "show"]],[1, "in"],[1, "out"]]]);Z([a, [[6],[[7],[3, "FoxUIToast"]],[3, "text"]]]);Z([3, 'index-advs-navigator']);Z([3, 'bottom_form_btn']);
  })(z);d_["./yb_shop/pages/common/city-picker.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oFs = _n("view");_r(oFs, 'class', 0, e, s, gg);var oGs = _n("view");_r(oGs, 'class', 1, e, s, gg);var oHs = _m( "view", ["bindtap", 2,"class", 1], e, s, gg);var oIs = _o(4, e, s, gg);_(oHs,oIs);_(oGs,oHs);var oJs = _m( "view", ["bindtap", 5,"class", 1], e, s, gg);var oKs = _o(7, e, s, gg);_(oJs,oKs);_(oGs,oJs);_(oFs,oGs);var oLs = _v();
      if (_o(8, e, s, gg)) {
        oLs.wxVkey = 1;var oMs = _m( "picker-view", ["bindchange", 9,"class", 1,"indicatorStyle", 2,"value", 3], e, s, gg);var oOs = _n("picker-view-column");var oPs = _v();var oQs = function(oUs,oTs,oSs,gg){var oWs = _n("view");_r(oWs, 'class', 14, oUs, oTs, gg);var oXs = _o(15, oUs, oTs, gg);_(oWs,oXs);_(oSs,oWs);return oSs;};_2(13, oQs, e, s, gg, oPs, "item", "index", '');_(oOs,oPs);_(oMs,oOs);var oYs = _n("picker-view-column");var oZs = _v();var oas = function(oes,ods,ocs,gg){var ogs = _n("view");_r(ogs, 'class', 14, oes, ods, gg);var ohs = _o(15, oes, ods, gg);_(ogs,ohs);_(ocs,ogs);return ocs;};_2(16, oas, e, s, gg, oZs, "item", "index", '');_(oYs,oZs);_(oMs,oYs);var ois = _n("picker-view-column");var ojs = _v();var oks = function(oos,ons,oms,gg){var oqs = _n("view");_r(oqs, 'class', 14, oos, ons, gg);var ors = _o(15, oos, ons, gg);_(oqs,ors);_(oms,oqs);return oms;};_2(17, oks, e, s, gg, ojs, "item", "index", '');_(ois,ojs);_(oMs,ois);_(oLs, oMs);
      } _(oFs,oLs);var oss = _v();
      if (_o(18, e, s, gg)) {
        oss.wxVkey = 1;var ots = _m( "picker-view", ["bindchange", 9,"class", 1,"indicatorStyle", 2,"value", 3], e, s, gg);var ovs = _n("picker-view-column");var ows = _v();var oxs = function(oAt,o_s,ozs,gg){var oCt = _n("view");_r(oCt, 'class', 14, oAt, o_s, gg);var oDt = _o(15, oAt, o_s, gg);_(oCt,oDt);_(ozs,oCt);return ozs;};_2(13, oxs, e, s, gg, ows, "item", "index", '');_(ovs,ows);_(ots,ovs);var oEt = _n("picker-view-column");var oFt = _v();var oGt = function(oKt,oJt,oIt,gg){var oMt = _n("view");_r(oMt, 'class', 14, oKt, oJt, gg);var oNt = _o(15, oKt, oJt, gg);_(oMt,oNt);_(oIt,oMt);return oIt;};_2(16, oGt, e, s, gg, oFt, "item", "index", '');_(oEt,oFt);_(ots,oEt);_(oss, ots);
      } _(oFs,oss);_(r,oFs);
    return r;
  };
        e_["./yb_shop/pages/common/city-picker.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/order/create/index.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oPt = _n("loading");_r(oPt, 'hidden', 19, e, s, gg);var oQt = _o(20, e, s, gg);_(oPt,oQt);_(r,oPt);var oRt = _v();
      if (_o(19, e, s, gg)) {
        oRt.wxVkey = 1;var oKx = e_["./yb_shop/pages/order/create/index.wxml"].j;var oSt = _n("view");_r(oSt, 'class', 21, e, s, gg);var oUt = _v();
      if (_o(22, e, s, gg)) {
        oUt.wxVkey = 1;var oVt = _n("view");_r(oVt, 'class', 23, e, s, gg);var oXt = _m( "view", ["bindtap", 24,"class", 1,"data-send_type", 2], e, s, gg);var oYt = _o(27, e, s, gg);_(oXt,oYt);_(oVt,oXt);var oZt = _m( "view", ["bindtap", 24,"class", 4,"data-send_type", 5], e, s, gg);var oat = _o(30, e, s, gg);_(oZt,oat);_(oVt,oZt);_(oUt, oVt);
      } _(oSt,oUt);var obt = _n("view");var oct = _v();
      if (_o(31, e, s, gg)) {
        oct.wxVkey = 1;var oft = _n("view");_r(oft, 'class', 32, e, s, gg);var ogt = _m( "navigator", ["class", 33,"hoverClass", 1,"url", 2], e, s, gg);var oht = _m( "image", ["class", 36,"src", 1], e, s, gg);_(ogt,oht);var oit = _n("view");_r(oit, 'class', 38, e, s, gg);var ojt = _v();
      if (_o(39, e, s, gg)) {
        ojt.wxVkey = 1;var okt = _n("view");var omt = _n("text");_r(omt, 'class', 40, e, s, gg);var ont = _o(41, e, s, gg);_(omt,ont);_(okt,omt);var oot = _n("text");var opt = _o(42, e, s, gg);_(oot,opt);_(okt,oot);_(ojt, okt);
      } _(oit,ojt);var oqt = _v();
      if (_o(43, e, s, gg)) {
        oqt.wxVkey = 1;var ort = _n("view");_r(ort, 'class', 44, e, s, gg);var ott = _o(45, e, s, gg);_(ort,ott);_(oqt, ort);
      } _(oit,oqt);var out = _v();
      if (_o(46, e, s, gg)) {
        out.wxVkey = 1;var ovt = _n("view");_r(ovt, 'class', 47, e, s, gg);var oxt = _o(48, e, s, gg);_(ovt,oxt);_(out, ovt);
      } _(oit,out);_(ogt,oit);var oyt = _n("view");_r(oyt, 'class', 49, e, s, gg);_(ogt,oyt);_(oft,ogt);_(oct,oft);
      } _(obt,oct);var ozt = _v();
      if (_o(50, e, s, gg)) {
        ozt.wxVkey = 1;var oBu = _n("view");_r(oBu, 'class', 51, e, s, gg);var oCu = _n("view");_r(oCu, 'class', 52, e, s, gg);var oDu = _n("text");var oEu = _o(53, e, s, gg);_(oDu,oEu);_(oCu,oDu);var oFu = _m( "input", ["bindinput", 54,"id", 1,"placeholder", 2,"type", 3,"value", 4], e, s, gg);_(oCu,oFu);_(oBu,oCu);var oGu = _n("view");_r(oGu, 'class', 59, e, s, gg);var oHu = _n("text");var oIu = _o(60, e, s, gg);_(oHu,oIu);_(oGu,oHu);var oJu = _m( "input", ["bindinput", 54,"id", 7,"placeholder", 8,"type", 9,"value", 10], e, s, gg);_(oGu,oJu);_(oBu,oGu);var oKu = _n("view");_r(oKu, 'class', 59, e, s, gg);var oLu = _n("view");_r(oLu, 'class', 65, e, s, gg);var oMu = _n("view");_r(oMu, 'class', 66, e, s, gg);var oNu = _n("text");var oOu = _o(67, e, s, gg);_(oNu,oOu);_(oMu,oNu);_(oLu,oMu);var oPu = _m( "picker", ["bindchange", 68,"mode", 1,"value", 2], e, s, gg);var oQu = _n("view");_r(oQu, 'class', 10, e, s, gg);var oRu = _o(71, e, s, gg);_(oQu,oRu);_(oPu,oQu);_(oLu,oPu);var oSu = _n("view");_r(oSu, 'class', 72, e, s, gg);_(oLu,oSu);_(oKu,oLu);_(oBu,oKu);var oTu = _n("view");_r(oTu, 'class', 59, e, s, gg);var oUu = _n("view");_r(oUu, 'class', 65, e, s, gg);var oVu = _n("view");_r(oVu, 'class', 66, e, s, gg);var oWu = _n("text");var oXu = _o(67, e, s, gg);_(oWu,oXu);_(oVu,oWu);_(oUu,oVu);var oYu = _m( "picker", ["bindchange", 73,"end", 1,"mode", 2,"start", 3,"value", 4], e, s, gg);var oZu = _n("view");_r(oZu, 'class', 10, e, s, gg);var oau = _o(77, e, s, gg);_(oZu,oau);_(oYu,oZu);_(oUu,oYu);var obu = _n("view");_r(obu, 'class', 72, e, s, gg);_(oUu,obu);_(oTu,oUu);_(oBu,oTu);_(ozt,oBu);
      } _(obt,ozt);var ocu = _m( "view", ["class", 78,"style", 1], e, s, gg);var odu = _v();
      if (_o(80, e, s, gg)) {
        odu.wxVkey = 1;var ogu = _n("view");_r(ogu, 'class', 81, e, s, gg);var ohu = _m( "view", ["bindtap", 82,"class", 1,"data-url", 2], e, s, gg);var oiu = _m( "image", ["class", 85,"src", 1], e, s, gg);_(ohu,oiu);_(ogu,ohu);var oju = _m( "view", ["bindtap", 82,"data-url", 2,"class", 5], e, s, gg);var oku = _n("view");_r(oku, 'class', 88, e, s, gg);var olu = _o(89, e, s, gg);_(oku,olu);_(oju,oku);var omu = _n("view");_r(omu, 'class', 90, e, s, gg);var onu = _v();
      if (_o(91, e, s, gg)) {
        onu.wxVkey = 1;var oou = _n("view");_r(oou, 'class', 92, e, s, gg);var oqu = _o(91, e, s, gg);_(oou,oqu);_(onu, oou);
      } _(omu,onu);_(oju,omu);_(ogu,oju);var oru = _n("view");_r(oru, 'class', 93, e, s, gg);var osu = _n("text");_r(osu, 'class', 94, e, s, gg);var otu = _o(95, e, s, gg);_(osu,otu);_(oru,osu);var ouu = _n("view");var ovu = _o(96, e, s, gg);_(ouu,ovu);_(oru,ouu);_(ogu,oru);_(odu,ogu);
      } _(ocu,odu);var owu = _v();
      if (_o(97, e, s, gg)) {
        owu.wxVkey = 1;var ozu = _v();var o_u = function(oDv,oCv,oBv,gg){var oFv = _n("view");_r(oFv, 'class', 81, oDv, oCv, gg);var oGv = _m( "view", ["bindtap", 82,"class", 1,"data-url", 19], oDv, oCv, gg);var oHv = _m( "image", ["class", 85,"src", 17], oDv, oCv, gg);_(oGv,oHv);_(oFv,oGv);var oIv = _m( "view", ["bindtap", 82,"class", 5,"data-url", 19], oDv, oCv, gg);var oJv = _n("view");_r(oJv, 'class', 88, oDv, oCv, gg);var oKv = _o(103, oDv, oCv, gg);_(oJv,oKv);_(oIv,oJv);var oLv = _n("view");_r(oLv, 'class', 90, oDv, oCv, gg);var oMv = _v();
      if (_o(104, oDv, oCv, gg)) {
        oMv.wxVkey = 1;var oNv = _n("view");_r(oNv, 'class', 92, oDv, oCv, gg);var oPv = _o(104, oDv, oCv, gg);_(oNv,oPv);_(oMv, oNv);
      } _(oLv,oMv);_(oIv,oLv);_(oFv,oIv);var oQv = _n("view");_r(oQv, 'class', 93, oDv, oCv, gg);var oRv = _n("text");_r(oRv, 'class', 94, oDv, oCv, gg);var oSv = _o(105, oDv, oCv, gg);_(oRv,oSv);_(oQv,oRv);var oTv = _n("view");var oUv = _o(106, oDv, oCv, gg);_(oTv,oUv);_(oQv,oTv);_(oFv,oQv);_(oBv,oFv);return oBv;};_2(98, o_u, e, s, gg, ozu, "val", "key", '');_(owu,ozu);
      } _(ocu,owu);_(obt,ocu);var oVv = _n("view");_r(oVv, 'class', 78, e, s, gg);var oWv = _n("view");_r(oWv, 'class', 32, e, s, gg);var oXv = _n("view");_r(oXv, 'class', 33, e, s, gg);var oYv = _n("view");_r(oYv, 'class', 107, e, s, gg);var oZv = _m( "input", ["bindinput", 54,"id", 54,"placeholder", 55], e, s, gg);_(oYv,oZv);_(oXv,oYv);_(oWv,oXv);_(oVv,oWv);_(obt,oVv);var oav = _m( "view", ["class", 32,"style", 47], e, s, gg);var obv = _n("view");_r(obv, 'class', 33, e, s, gg);var ocv = _n("view");_r(ocv, 'class', 110, e, s, gg);var odv = _o(111, e, s, gg);_(ocv,odv);_(obv,ocv);var oev = _n("view");_r(oev, 'class', 112, e, s, gg);var ofv = _o(113, e, s, gg);_(oev,ofv);var ogv = _n("text");_r(ogv, 'class', 114, e, s, gg);var ohv = _o(115, e, s, gg);_(ogv,ohv);_(oev,ogv);var oiv = _o(116, e, s, gg);_(oev,oiv);var ojv = _n("text");_r(ojv, 'class', 114, e, s, gg);var okv = _o(117, e, s, gg);_(ojv,okv);_(oev,ojv);_(obv,oev);_(oav,obv);var olv = _v();
      if (_o(31, e, s, gg)) {
        olv.wxVkey = 1;var omv = _n("view");_r(omv, 'class', 33, e, s, gg);var oov = _n("view");_r(oov, 'class', 110, e, s, gg);var opv = _o(118, e, s, gg);_(oov,opv);_(omv,oov);var oqv = _n("view");_r(oqv, 'class', 112, e, s, gg);var orv = _o(119, e, s, gg);_(oqv,orv);var osv = _n("text");var otv = _o(120, e, s, gg);_(osv,otv);_(oqv,osv);_(omv,oqv);_(olv, omv);
      } _(oav,olv);var ouv = _v();
      if (_o(121, e, s, gg)) {
        ouv.wxVkey = 1;var ovv = _n("view");_r(ovv, 'class', 33, e, s, gg);var oxv = _n("view");_r(oxv, 'class', 110, e, s, gg);var oyv = _o(122, e, s, gg);_(oxv,oyv);_(ovv,oxv);var ozv = _n("view");_r(ozv, 'class', 114, e, s, gg);var o_v = _o(119, e, s, gg);_(ozv,o_v);var oAw = _n("text");var oBw = _o(123, e, s, gg);_(oAw,oBw);_(ozv,oAw);_(ovv,ozv);_(ouv, ovv);
      } _(oav,ouv);var oCw = _v();
      if (_o(124, e, s, gg)) {
        oCw.wxVkey = 1;var oDw = _n("view");_r(oDw, 'class', 33, e, s, gg);var oFw = _n("view");_r(oFw, 'class', 110, e, s, gg);var oGw = _o(125, e, s, gg);_(oFw,oGw);_(oDw,oFw);var oHw = _n("view");_r(oHw, 'class', 112, e, s, gg);var oIw = _n("text");_r(oIw, 'class', 114, e, s, gg);var oJw = _o(126, e, s, gg);_(oIw,oJw);_(oHw,oIw);var oKw = _n("text");_r(oKw, 'class', 114, e, s, gg);var oLw = _o(127, e, s, gg);_(oKw,oLw);_(oHw,oKw);_(oDw,oHw);_(oCw, oDw);
      } _(oav,oCw);var oMw = _v();
      if (_o(128, e, s, gg)) {
        oMw.wxVkey = 1;var oNw = _m( "view", ["bindtap", 129,"class", 1], e, s, gg);var oPw = _n("view");_r(oPw, 'class', 110, e, s, gg);var oQw = _o(131, e, s, gg);_(oPw,oQw);_(oNw,oPw);var oRw = _m( "view", ["class", 112,"style", 20], e, s, gg);var oSw = _n("text");_r(oSw, 'class', 114, e, s, gg);_(oRw,oSw);var oTw = _n("text");_r(oTw, 'class', 114, e, s, gg);var oUw = _o(133, e, s, gg);_(oTw,oUw);_(oRw,oTw);_(oNw,oRw);_(oMw, oNw);
      } _(oav,oMw);var oVw = _v();var oWw = function(oaw,oZw,oYw,gg){var oXw = _v();
      if (_o(135, oaw, oZw, gg)) {
        oXw.wxVkey = 1;var oew = _m( "view", ["bindtap", 136,"class", 1,"data-coupon_money", 2,"data-id", 3,"data-together", 4], oaw, oZw, gg);var ofw = _n("label");_r(ofw, 'class', 141, oaw, oZw, gg);var ogw = _n("view");_r(ogw, 'class', 142, oaw, oZw, gg);var ohw = _n("text");_r(ohw, 'class', 143, oaw, oZw, gg);var oiw = _o(144, oaw, oZw, gg);_(ohw,oiw);_(ogw,ohw);var ojw = _n("text");_r(ojw, 'class', 145, oaw, oZw, gg);var okw = _o(138, oaw, oZw, gg);_(ojw,okw);_(ogw,ojw);_(ofw,ogw);var olw = _n("view");_r(olw, 'class', 146, oaw, oZw, gg);var omw = _o(147, oaw, oZw, gg);_(olw,omw);_(ofw,olw);var onw = _n("view");_r(onw, 'class', 148, oaw, oZw, gg);var oow = _o(149, oaw, oZw, gg);_(onw,oow);_(ofw,onw);_(oew,ofw);_(oXw,oew);
      } return oYw;};_2(134, oWw, e, s, gg, oVw, "item", "index", '');_(oav,oVw);var opw = _v();
      if (_o(135, e, s, gg)) {
        opw.wxVkey = 1;var oqw = _m( "label", ["data-id", -1,"bindtap", 136,"class", 5,"data-coupon_money", 14,"data-together", 15], e, s, gg);var osw = _n("view");_r(osw, 'class', 152, e, s, gg);var otw = _n("text");var ouw = _o(153, e, s, gg);_(otw,ouw);_(osw,otw);_(oqw,osw);_(opw, oqw);
      } _(oav,opw);_(obt,oav);_(oSt,obt);var ovw = _n("view");_r(ovw, 'style', 154, e, s, gg);_(oSt,ovw);_ic("/yb_shop/pages/common/city-picker.wxml",e_, "./yb_shop/pages/order/create/index.wxml",e,s,oSt,gg);var oxw = _n("view");_r(oxw, 'class', 155, e, s, gg);_(oSt,oxw);var oyw = _n("view");_r(oyw, 'class', 156, e, s, gg);var ozw = _n("view");_r(ozw, 'class', 157, e, s, gg);var o_w = _n("view");_r(o_w, 'class', 57, e, s, gg);var oAx = _m( "view", ["class", 158,"style", 1], e, s, gg);var oBx = _o(160, e, s, gg);_(oAx,oBx);var oCx = _n("text");_r(oCx, 'class', 114, e, s, gg);var oDx = _o(161, e, s, gg);_(oCx,oDx);_(oAx,oCx);_(o_w,oAx);_(ozw,o_w);var oEx = _n("view");_r(oEx, 'class', 162, e, s, gg);var oFx = _m( "text", ["bindtap", 163,"class", 1,"style", 2], e, s, gg);var oGx = _o(166, e, s, gg);_(oFx,oGx);_(oEx,oFx);_(ozw,oEx);_(oyw,ozw);_(oSt,oyw);var oHx = _n("view");_r(oHx, 'class', 167, e, s, gg);var oIx = _n("view");_r(oIx, 'class', 57, e, s, gg);var oJx = _o(168, e, s, gg);_(oIx,oJx);_(oHx,oIx);_(oSt,oHx);;oKx.pop();_(oRt, oSt);
      } _(r,oRt);var oLx = _m( "form", ["reportSubmit", -1,"bindsubmit", 163,"class", 6], e, s, gg);var oMx = _m( "button", ["formType", 163,"class", 7], e, s, gg);_(oLx,oMx);_(r,oLx);
    return r;
  };
        e_["./yb_shop/pages/order/create/index.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.fui-number{-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box;position:relative;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;font-size:%%?26rpx?%%;margin:0;height:%%?60rpx?%%;width:%%?200rpx?%%;border:1px solid #d9d9d9;-webkit-justify-content:center;justify-content:center;-webkit-align-items:center;align-items:center;overflow:hidden}.minus,.plus{width:%%?60rpx?%%;height:%%?60rpx?%%;font-size:%%?40rpx?%%;font-weight:700;color:#999;position:relative;text-align:center;background:#f7f7f7;line-height:%%?60rpx?%%;z-index:1}.plus{border-left:1px solid #d9d9d9}.minus{border-right:1px solid #d9d9d9}.fui-number .num{-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;height:%%?40rpx?%%;color:#666;text-align:center;border:0}.disabled{background:#fff}.adress{font-size:%%?27rpx?%%;color:#666}.shop{margin:%%?8rpx?%% 0 0 %%?10rpx?%%}.edtion{color:#999;font-size:14px;text-align:center;padding:%%?20rpx?%% 0}.consume,.store{margin-left:%%?10rpx?%%}.goods-info .num{font-size:%%?28rpx?%%;color:#999;width:%%?260rpx?%%;margin-right:%%?10rpx?%%}.list-padding{padding:%%?16rpx?%% %%?30rpx?%%}.totle{font-size:%%?28rpx?%%}.order-status{color:#888;text-align:right;font-size:%%?30rpx?%%;margin-right:%%?8rpx?%%}.fui-modal{position:fixed;background:rgba(0,0,0,.7) none repeat scroll 0 0;width:100%;height:100%;left:0;top:42px;z-index:1000}.fui-modal-info{position:fixed;width:100%;z-index:1001;text-align:center;top:%%?50rpx?%%}.fui-modal-info .code{width:%%?450rpx?%%;height:%%?450rpx?%%;margin:%%?50rpx?%% 0}.tap{text-align:center;color:#f90;font-size:%%?40rpx?%%;line-height:%%?50rpx?%%}.close{text-align:right;padding:%%?30rpx?%%}.close wx-image{width:%%?80rpx?%%;height:%%?80rpx?%%}.send-code{display:none}.fui-cell-group.toggleSend-group .send-code{display:block;font-size:%%?26rpx?%%}.fui-cell-group.toggleSend-group .fui-cell .fui-cell-remark::after{-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);transform:rotate(135deg)}.cart-option{margin-top:%%?8rpx?%%}.picker-modal{background:#fefefe;height:260px;position:fixed;bottom:0;left:0;right:0;z-index:1000;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.picker-modal.city-picker{z-index:2000}.picker-modal.in{transition-duration:.3s;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.picker-modal.out{transition-duration:.3s;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.picker-modal .picker-control{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;height:40px;border-bottom:1px solid #f1f1f1;padding:0 %%?30rpx?%%;font-size:%%?32rpx?%%}.picker-modal .picker-control .cancel{width:50%;text-align:left;color:#666}.picker-modal .picker-control .confirm{width:50%;text-align:right;color:#20b21f}.picker-modal .picker{width:100%;height:220px}.picker-modal .picker .item{line-height:40px}wx-picker-view-column{text-align:center}wx-body{background:#f7f7f7}.nav{width:100%;height:%%?90rpx?%%;display:-webkit-flex;display:flex;-webkit-flex-direction:row;flex-direction:row;background:#fff}.default{line-height:%%?90rpx?%%;text-align:center;-webkit-flex:1;flex:1;color:#666;font-size:%%?32rpx?%%}.red{line-height:%%?90rpx?%%;text-align:center;color:#ef4f4f;-webkit-flex:1;flex:1;font-size:%%?32rpx?%%;border-bottom:2px solid #ef4f4f}.switch{float:right;zoom:90%;overflow:hidden}.btn{padding:0 %%?60rpx?%%;border-radius:0;height:%%?100rpx?%%;line-height:%%?100rpx?%%;margin:0}.fui-list-inner .sure_subtitle{line-height:%%?36rpx?%%;position:relative;font-size:%%?30rpx?%%;color:#444;max-height:%%?72rpx?%%;overflow:hidden}.fui-number{height:%%?40rpx?%%;width:%%?130rpx?%%}.minus,.plus{width:%%?40rpx?%%;height:%%?40rpx?%%;font-size:%%?40rpx?%%;line-height:%%?40rpx?%%}.fui-list-angle{margin-right:0;text-align:right}.fui-cell-text .shop_name{font-size:%%?33rpx?%%}.cart-option .choose-option{font-size:%%?24rpx?%%;color:#ccc}.fui-list-angle .price{color:#e02e24;font-size:%%?24rpx?%%}.fui-list-angle wx-view{font-size:%%?24rpx?%%;color:#444}body{background:#f2f2f2}.create_btn{background:#f5cb3b;font-size:%%?34rpx?%%;color:#222;border:0}.create_btn::after{border:0;border-radius:0}.coupon_box{padding-left:5rem;position:relative;width:70%;margin:0 auto;margin-bottom:.5rem;height:3.6rem}.coupon_box:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #f45068;border-radius:%%?10rpx?%%;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5)}.coupon_price wx-text{color:#f45068}.coupon_price{text-align:left;height:3rem;margin-left:-4.5rem;float:left;padding-top:.3rem;padding-right:.5rem}.coupon_price .price02{font-size:%%?80rpx?%%;font-weight:700}.coupon_price .price01{font-size:%%?38rpx?%%}.coupon_con,.coupon_time{font-size:%%?28rpx?%%;color:#666;height:%%?44rpx?%%;line-height:%%?44rpx?%%}.coupon_time{padding-top:%%?20rpx?%%}.cannel_btn{position:relative;width:calc(70% + 5rem);margin:0 auto;margin-bottom:.5rem;height:2.6rem;line-height:2.6rem;text-align:center}.cannel_btn:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #999;border-radius:%%?10rpx?%%;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5)}.cannel_btn wx-text{font-size:%%?32rpx?%%;color:#8c8c8c}.coupon_arrow{background:url(http://ddfwz.sssvip.net/asmce/diancan/right_arrow.png) no-repeat right center;background-size:%%?36rpx?%% %%?36rpx?%%}.a-li{background:#fff url(http://ddfwz.sssvip.net/asmce/diancan/pt-ico1.png) no-repeat 95% center;background-size:%%?15rpx?%% auto;padding:%%?23.4rpx?%% 3%;text-align:left}.a-li02{background:#fff url(http://ddfwz.sssvip.net/asmce/diancan/pt-ico11.png) no-repeat 95% center;background-size:%%?28rpx?%% auto;padding:%%?23.4rpx?%% 3%;text-align:left}.join_g_li{background:#fff}.join_g_li .join_li{height:3rem;line-height:3rem;padding-left:4rem;position:relative;font-size:.8rem}.join_g_li .join_li:after{content:"";position:absolute;left:0;bottom:0;width:100%;height:0;border-bottom:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.join_g_li .join_li wx-text{display:block;width:4rem;margin-left:-4rem;float:left;text-align:right;font-size:.8rem;color:#666}.join_g_li .join_li wx-input{height:3rem;line-height:3rem;margin-left:.5rem}.join_g_li .join_li .section wx-picker{margin-left:.5rem}.bottom_form_btn{width:%%?260rpx?%%;height:%%?100rpx?%%;background:#000;position:fixed;bottom:0;right:0;opacity:0;z-index:999999999999999999999}@code-separator-line:__wxRoute = "yb_shop/pages/order/create/index";__wxRouteBegin = true;
define("yb_shop/pages/order/create/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
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
    cart_list: [],
    data: [],
    showPicker: false,
    pvalOld: [0, 0, 0],
    pval: [0, 0, 0],
    areas: [],
    noArea: true,
    submit: true,
    coupon_display: false,
    coupon_num: 0,
    send_type: 'express',
    is_mention: 1, //1邮寄，2自提，3自选
    date: '',
    time: '00:00',
    formid: '',
    button_color: e.config.button_color
  },
  /**
   * 自提、邮寄
   */
  dispatchtype: function dispatchtype(e) {
    var that = this,
        data = a.pdata(e);
    that.setData(data);
    if (that.data.options.type && that.data.options.type == "cart") {
      that.cart_caculate();
    } else {
      that.caculate();
    }
  },
  bindDateChange: function bindDateChange(e) {
    console.log('picker发送选择改变，携带值为', e.detail.value);
    var get_time = a.time_str(e.detail.value + ' ' + this.data.time);
    var now_time = Date.parse(new Date()) / 1000;
    if (now_time > get_time) {
      a.error('不小于当前时间');
      return;
    }
    this.setData({
      date: e.detail.value
    });
  },
  bindTimeChange: function bindTimeChange(e) {
    console.log('picker发送选择改变，携带值为', e.detail.value);
    this.setData({
      time: e.detail.value
    });
  },
  onLoad: function onLoad(t) {
    a.setting();
    var i = this,
        data = this.data,
        d = {};
    this.setData({
      options: t,
      button_color: getApp().config.button_color,
      font_color: getApp().config.font_color,
      config: getApp().config
    });
    a.get("user/About", { user_id: getApp().getCache("userinfo").uid }, function (t) {
      if (t.code == 0) {
        var send_type = i.data.send_type;
        if (t.info.is_mention == 2) {
          send_type = 'selftake';
        }
        i.setData({
          user_level: t.info.user_level,
          user_rebate: t.info.user_rebate,
          is_mention: t.info.is_mention,
          send_type: send_type
        });
      }
    });
    //购物车下单时获取订单信息
    if (i.data.options.type && i.data.options.type == "cart") {
      a.get("goods/CartGoods", i.data.options, function (t) {
        0 == t.code ? (i.setData({
          cart_list: t.info.info,
          "list.address": t.info.address,
          "list.activity": t.info.activity,
          show: true
        }), i.cart_caculate()) : a.alert(t.msg);
      });
    } else {
      //从商品详情下单时获取订单信息
      a.get("goods/GetGoods", i.data.options, function (t) {
        0 == t.code ? (i.setData({
          list: t.info,
          show: true
        }), i.caculate()) : a.alert(t.msg);
      });
    }
  },
  onShow: function onShow() {
    var i = this,
        d = e.getCache("orderAddress");
    if (d) {
      this.setData({
        "list.address": d
      });
      if (!i.data.options.cart_id) {
        i.caculate();
      } else {
        i.cart_caculate();
      }
    }
  },
  CouponApi: function CouponApi(money) {
    var that = this,
        coupon = [];
    a.get('Market/UserCoupon', { user_id: getApp().getCache("userinfo").uid }, function (v) {
      if (v.code == 0) {
        if (v.info.length > 0) {
          var now_time = Date.parse(new Date()) / 1000;
          for (var i = 0; i < v.info.length; i++) {
            if (money >= v.info[i].satisfy_money && v.info[i].status == 0 && v.info[i].end_time >= now_time) {
              coupon.push(v.info[i]);
            }
          }
          coupon.sort(function (x, y) {
            return parseFloat(y.satisfy_money) - parseFloat(x.satisfy_money);
          }); //按satisfy_money排序
          that.setData({
            coupon: coupon,
            coupon_num: coupon.length
          });
        }
      }
    });
  },
  select: function select(e) {
    var that = this,
        money = that.data.data.order_money,
        discount_money = that.data.discount_money,
        s = a.pdata(e);
    if (s.together == 1) {
      that.setData({
        "data.discount_money": 0.00
      });
      discount_money = 0;
    } else {
      if (!discount_money) {
        discount_money = 0;
      }
      that.setData({
        "data.discount_money": discount_money
      });
    }
    var pay_money = parseFloat(money) - parseFloat(discount_money) - parseFloat(s.coupon_money);
    that.setData({
      "data.coupon_id": s.id,
      "data.coupon_money": s.coupon_money,
      "data.pay_money": parseFloat(pay_money).toFixed(2),
      coupon_display: false
    });
  },
  open_coupon: function open_coupon() {
    var display = this.data.coupon_display ? false : true;
    this.setData({
      coupon_display: display
    });
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
  /**
     *单商品订单数量加减
     * @param t 点击事件
     * @return array
     */
  number: function number(t) {
    var e = this,
        total = '',
        d = a.data(t).action;
    if (d == 'minus') {
      total = parseInt(e.data.options.total) - 1;
    } else if (d == 'plus') {
      total = parseInt(e.data.options.total) + 1;
    }
    e.setData({
      //list: c
      'options.total': total
    }), this.caculate();
  },
  /**
   *购物车订单数量加减
   * @param t 点击事件
   * @return array
   */
  cart_number: function cart_number(t) {
    var e = this,
        id = a.pdata(t).id,
        key = a.pdata(t).key,
        num = e.data.cart_list,
        d = a.data(t).action;
    if (d == 'minus') {
      num[key].num = parseInt(num[key].num) - 1;
    } else if (d == 'plus') {
      num[key].num = parseInt(num[key].num) + 1;
    }
    e.setData({
      'cart_list': num
    }), this.cart_caculate();
  },
  //计算
  caculate: function caculate() {
    var e = this,
        discount_money = 0,
        activity = e.data.list.activity,
        a = e.data.list.address;
    //订单价
    a.order_money = parseFloat(e.data.options.total * e.data.list.price).toFixed(2);
    //优惠券
    e.CouponApi(a.order_money);
    console.log(a.order_money);
    //减免活动
    for (var i = 0; i < activity.length; i++) {
      console.log(activity[i].satisfy_money);
      console.log(a.order_money);
      if (parseFloat(a.order_money) >= parseFloat(activity[i].satisfy_money)) {
        discount_money = activity[i].discount_money;
        a.discount_money = activity[i].discount_money;
        a.discount_id = activity[i].id;
        break;
      }
    }
    //会员折扣
    var rebate_money = 0.00;
    if (e.data.user_level && e.data.user_level != 0 && e.data.user_rebate && e.data.user_rebate < 10.00) {
      rebate_money = parseFloat(a.order_money) * (1 - parseFloat(e.data.user_rebate) / 10);
      rebate_money = rebate_money.toFixed(2);
    }
    a.rebate_money = rebate_money;
    //运费
    if (e.data.send_type == 'express' && e.data.send_type != "selftake") {
      if (e.data.list.post_fee != null && e.data.list.post_fee != undefined) {
        var post_fee = e.data.list.post_fee;
        var more = Math.ceil((parseInt(e.data.options.total) - parseInt(post_fee.bynum_snum)) / parseInt(post_fee.bynum_xnum));
        var more_price = more > 0 ? more * parseFloat(post_fee.bynum_xprice) : 0.0;
        a.shipping_money = parseFloat(post_fee.bynum_sprice) + parseFloat(more_price);
      } else {
        a.shipping_money = 0;
      }
    } else {
      a.shipping_money = 0;
    }
    //实付价
    a.pay_money = parseFloat(parseInt(e.data.options.total) * parseFloat(e.data.list.price) + a.shipping_money - parseFloat(discount_money) - parseFloat(rebate_money)).toFixed(2);
    if (parseFloat(a.pay_money) < 0) {
      a.pay_money = 0.00;
    }
    a.sku_id = e.data.options.sku_id + ":" + e.data.options.total;
    a.user_name = getApp().getCache("userinfo").nickName;
    a.buyer_id = getApp().getCache("userinfo").uid;
    e.setData({
      data: a,
      discount_money: discount_money ? discount_money : 0,
      rebate_money: rebate_money
    });
  },
  //购物车订单计算
  cart_caculate: function cart_caculate() {
    var e = this,
        discount_money = 0,
        activity = e.data.list.activity,
        total = 0,
        c = this.data.options,
        d = this.data.cart_list,
        a = e.data.list.address,
        order_money = 0,
        shipping_money = 0,
        pay_money = 0,
        sku_id = '';
    d.forEach(function (t) {
      //订单价
      order_money += parseFloat(t.num * t.price.price);
      //运费
      if (t.post_fee != null && t.post_fee != undefined && e.data.send_type != "selftake") {
        var post_fee = t.post_fee;
        var more = Math.ceil((parseInt(t.num) - parseInt(post_fee.bynum_snum)) / parseInt(post_fee.bynum_xnum));
        var more_price = more > 0 ? more * parseFloat(post_fee.bynum_xprice) : 0.0;
        shipping_money += parseFloat(post_fee.bynum_sprice) + parseFloat(more_price);
      }
      sku_id += t.sku_id + ":" + t.num + ",";
      total += t.num;
    });
    //优惠券
    e.CouponApi(order_money);
    //减免活动
    for (var i = 0; i < activity.length; i++) {
      if (order_money >= activity[i].satisfy_money) {
        discount_money = activity[i].discount_money;
        a.discount_money = activity[i].discount_money;
        a.discount_id = activity[i].id;
        break;
      }
    }
    //会员折扣
    var rebate_money = 0.00;
    if (e.data.user_level && e.data.user_level != 0 && e.data.user_rebate && e.data.user_rebate < 10.00) {
      // console.log(1 - parseFloat(e.data.user_rebate) / 10);
      rebate_money = parseFloat(order_money) * (1 - parseFloat(e.data.user_rebate) / 10);
      rebate_money = rebate_money.toFixed(2);
    }
    a.rebate_money = rebate_money;
    pay_money = parseFloat(order_money + shipping_money - discount_money - rebate_money).toFixed(2);
    a.order_money = parseFloat(order_money).toFixed(2);
    if (e.data.send_type == 'express') {
      a.shipping_money = shipping_money;
    } else {
      a.shipping_money = 0;
    }
    if (parseFloat(pay_money) < 0) {
      pay_money = 0.00;
    }
    a.pay_money = pay_money;
    a.sku_id = sku_id;
    a.user_name = getApp().getCache("userinfo").nickName;
    a.buyer_id = getApp().getCache("userinfo").uid;
    e.setData({
      data: a,
      discount_money: discount_money ? discount_money : 0,
      rebate_money: rebate_money
    });
    //求出商品总数量
    c.total = total;
    e.setData({
      options: c
    });
  },
  //提交订单
  submit: function submit(k) {
    var e = this,
        t = this.data;
    e.setData({
      formid: k.detail.formId
    });
    if (!t.submit) {
      wx.navigateTo({
        url: "/yb_shop/pages/order/pay/index?id=" + e.data.order_id
      });
      // a.alert('你已提交过此订单')
    } else {
      if (t.send_type == 'selftake') {
        if (!t.data.phone) {
          a.error('请填写姓名');
          return false;
        } else if (!t.data.phone) {
          a.error('请填写电话');
          return false;
        } else if (!t.date) {
          a.error('请选择自提时间');
          return false;
        }
        t.data.mention_time = a.time_str(t.date + ' ' + t.time);
        t.data.mailing_type = 2;
      } else {
        if (!t.list.address.phone || t.list.address.province == '') {
          a.error('请选择收货地址！');
          return false;
        }
        t.data.mailing_type = 1;
      }
      a.get("Order/CreateOrder", t.data, function (t) {
        if (0 == t.code) {
          //推送
          a.get('Wxpush/CreateOrderPush', {
            order_id: t.info,
            formid: e.data.formid,
            uid: getApp().getCache("userinfo").uid
          }, function (t) {
            console.log(t);
          });
          e.setData({ order_id: t.info });
          if (e.data.options.cart_id) {
            a.get("Cart/DelCart", {
              cart_id: e.data.options.cart_id
            }, function (i) {
              if (i.code != 0) {
                console.log(i);
              } else {
                console.log(i);
              }
            });
          }
          e.setData({
            submit: false
          }), wx.navigateTo({
            url: "/yb_shop/pages/order/pay/index?id=" + t.info
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
      case "consigner":
        e.consigner = t.detail.value;
        break;
      case "phone":
        e.phone = t.detail.value;
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
});require("yb_shop/pages/order/create/index.js")@code-separator-line:["div","view","picker-view","picker-view-column","block","loading","navigator","image","text","input","picker","label","include","form","button"]