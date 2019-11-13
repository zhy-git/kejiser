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
    Z([a, [3, 'picker-modal city-picker '],[[2,'?:'],[[7],[3, "showPicker"]],[1, "in"],[1, "out"]]]);Z([3, 'picker-control']);Z([3, 'onCancel']);Z([3, 'cancel']);Z([3, '取消']);Z([3, 'onConfirm']);Z([3, 'confirm']);Z([3, '确定']);Z([[2, "!"], [[7],[3, "noArea"]]]);Z([3, 'bindChange']);Z([3, 'picker']);Z([3, 'height: 40px;']);Z([[7],[3, "pval"]]);Z([[7],[3, "areas"]]);Z([3, 'item']);Z([a, [[6],[[7],[3, "item"]],[3, "name"]]]);Z([[6],[[6],[[7],[3, "areas"]],[[6],[[7],[3, "pval"]],[1, 0]]],[3, "city"]]);Z([[6],[[6],[[6],[[6],[[7],[3, "areas"]],[[6],[[7],[3, "pval"]],[1, 0]]],[3, "city"]],[[6],[[7],[3, "pval"]],[1, 1]]],[3, "area"]]);Z([[7],[3, "noArea"]]);Z([[7],[3, "show"]]);Z([3, '正在加载']);Z([3, 'page']);Z([3, 'fui-cell-group']);Z([3, 'margin-top:0;margin:0 auto;background: #f4f4f4;']);Z([3, 'post_box']);Z([3, 'post_tit']);Z([3, '收货人']);Z([3, 'fui-cell']);Z([3, 'fui-cell-label']);Z([3, '姓名']);Z([3, 'fui-cell-info']);Z([3, 'onChange']);Z([3, 'fui-input']);Z([3, 'consigner']);Z([3, '收件人']);Z([[6],[[7],[3, "detail"]],[3, "consigner"]]);Z([3, '手机']);Z([3, 'phone']);Z([3, '手机号码']);Z([3, 'number']);Z([[6],[[7],[3, "detail"]],[3, "phone"]]);Z([3, '收货地址']);Z([3, '所在地区']);Z([3, 'selectArea']);Z([[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[7],[3, "detail"]],[3, "province"]], [1, " "]], [[6],[[7],[3, "detail"]],[3, "city"]]], [1, " "]], [[6],[[7],[3, "detail"]],[3, "area"]]]);Z([a, [[2,'?:'],[[2, "||"],[[2, "!"], [[6],[[7],[3, "detail"]],[3, "province"]]],[[2, "!"], [[6],[[7],[3, "detail"]],[3, "city"]]]],[1, "请选择所在地区"],[[2, "+"], [[2, "+"], [[2, "+"], [[2, "+"], [[6],[[7],[3, "detail"]],[3, "province"]], [1, " "]], [[6],[[7],[3, "detail"]],[3, "city"]]], [1, " "]], [[6],[[7],[3, "detail"]],[3, "area"]]]]]);Z([3, '详细地址']);Z([3, 'address']);Z([3, '街道，楼牌号等']);Z([[6],[[7],[3, "detail"]],[3, "address"]]);Z([a, [3, 'fui-mask '],[[2,'?:'],[[7],[3, "showPicker"]],[1, "show"],[1, ""]]]);Z([3, 'submit']);Z([3, 'btn btn-danger block']);Z([[2,'?:'],[[2, "=="], [[7],[3, "type"]], [1, "add"]],[1, "add"],[1, "save"]]);Z([a, [3, 'margin:1rem auto;width:90%;height:86rpx;line-height:86rpx;font-size:30rpx;background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';border:1px solid '],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';']]);Z([a, [[7],[3, "subtext"]]]);Z([a, [3, 'fui-toast '],[[2,'?:'],[[6],[[7],[3, "FoxUIToast"]],[3, "show"]],[1, "in"],[1, "out"]]]);Z([3, 'text']);Z([a, [[6],[[7],[3, "FoxUIToast"]],[3, "text"]]]);
  })(z);d_["./yb_shop/pages/common/city-picker.wxml"] = {};
  var m0=function(e,s,r,gg){
    var ordB = _n("view");_r(ordB, 'class', 0, e, s, gg);var osdB = _n("view");_r(osdB, 'class', 1, e, s, gg);var otdB = _m( "view", ["bindtap", 2,"class", 1], e, s, gg);var oudB = _o(4, e, s, gg);_(otdB,oudB);_(osdB,otdB);var ovdB = _m( "view", ["bindtap", 5,"class", 1], e, s, gg);var owdB = _o(7, e, s, gg);_(ovdB,owdB);_(osdB,ovdB);_(ordB,osdB);var oxdB = _v();
      if (_o(8, e, s, gg)) {
        oxdB.wxVkey = 1;var oydB = _m( "picker-view", ["bindchange", 9,"class", 1,"indicatorStyle", 2,"value", 3], e, s, gg);var o_dB = _n("picker-view-column");var oAeB = _v();var oBeB = function(oFeB,oEeB,oDeB,gg){var oHeB = _n("view");_r(oHeB, 'class', 14, oFeB, oEeB, gg);var oIeB = _o(15, oFeB, oEeB, gg);_(oHeB,oIeB);_(oDeB,oHeB);return oDeB;};_2(13, oBeB, e, s, gg, oAeB, "item", "index", '');_(o_dB,oAeB);_(oydB,o_dB);var oJeB = _n("picker-view-column");var oKeB = _v();var oLeB = function(oPeB,oOeB,oNeB,gg){var oReB = _n("view");_r(oReB, 'class', 14, oPeB, oOeB, gg);var oSeB = _o(15, oPeB, oOeB, gg);_(oReB,oSeB);_(oNeB,oReB);return oNeB;};_2(16, oLeB, e, s, gg, oKeB, "item", "index", '');_(oJeB,oKeB);_(oydB,oJeB);var oTeB = _n("picker-view-column");var oUeB = _v();var oVeB = function(oZeB,oYeB,oXeB,gg){var obeB = _n("view");_r(obeB, 'class', 14, oZeB, oYeB, gg);var oceB = _o(15, oZeB, oYeB, gg);_(obeB,oceB);_(oXeB,obeB);return oXeB;};_2(17, oVeB, e, s, gg, oUeB, "item", "index", '');_(oTeB,oUeB);_(oydB,oTeB);_(oxdB, oydB);
      } _(ordB,oxdB);var odeB = _v();
      if (_o(18, e, s, gg)) {
        odeB.wxVkey = 1;var oeeB = _m( "picker-view", ["bindchange", 9,"class", 1,"indicatorStyle", 2,"value", 3], e, s, gg);var ogeB = _n("picker-view-column");var oheB = _v();var oieB = function(omeB,oleB,okeB,gg){var ooeB = _n("view");_r(ooeB, 'class', 14, omeB, oleB, gg);var opeB = _o(15, omeB, oleB, gg);_(ooeB,opeB);_(okeB,ooeB);return okeB;};_2(13, oieB, e, s, gg, oheB, "item", "index", '');_(ogeB,oheB);_(oeeB,ogeB);var oqeB = _n("picker-view-column");var oreB = _v();var oseB = function(oweB,oveB,oueB,gg){var oyeB = _n("view");_r(oyeB, 'class', 14, oweB, oveB, gg);var ozeB = _o(15, oweB, oveB, gg);_(oyeB,ozeB);_(oueB,oyeB);return oueB;};_2(16, oseB, e, s, gg, oreB, "item", "index", '');_(oqeB,oreB);_(oeeB,oqeB);_(odeB, oeeB);
      } _(ordB,odeB);_(r,ordB);
    return r;
  };
        e_["./yb_shop/pages/common/city-picker.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};d_["./yb_shop/pages/member/address/post.wxml"] = {};
  var m1=function(e,s,r,gg){
    var oAfB = _n("loading");_r(oAfB, 'hidden', 19, e, s, gg);var oBfB = _o(20, e, s, gg);_(oAfB,oBfB);_(r,oAfB);var oCfB = _v();
      if (_o(19, e, s, gg)) {
        oCfB.wxVkey = 1;var onfB = e_["./yb_shop/pages/member/address/post.wxml"].j;var oDfB = _n("view");_r(oDfB, 'class', 21, e, s, gg);var oFfB = _m( "view", ["class", 22,"style", 1], e, s, gg);var oGfB = _n("view");_r(oGfB, 'class', 24, e, s, gg);var oHfB = _n("view");_r(oHfB, 'class', 25, e, s, gg);var oIfB = _o(26, e, s, gg);_(oHfB,oIfB);_(oGfB,oHfB);var oJfB = _n("view");_r(oJfB, 'class', 27, e, s, gg);var oKfB = _n("view");_r(oKfB, 'class', 28, e, s, gg);var oLfB = _o(29, e, s, gg);_(oKfB,oLfB);_(oJfB,oKfB);var oMfB = _n("view");_r(oMfB, 'class', 30, e, s, gg);var oNfB = _m( "input", ["bindinput", 31,"class", 1,"data-type", 2,"placeholder", 3,"value", 4], e, s, gg);_(oMfB,oNfB);_(oJfB,oMfB);_(oGfB,oJfB);var oOfB = _n("view");_r(oOfB, 'class', 27, e, s, gg);var oPfB = _n("view");_r(oPfB, 'class', 28, e, s, gg);var oQfB = _o(36, e, s, gg);_(oPfB,oQfB);_(oOfB,oPfB);var oRfB = _n("view");_r(oRfB, 'class', 30, e, s, gg);var oSfB = _m( "input", ["bindinput", 31,"class", 1,"data-type", 6,"placeholder", 7,"type", 8,"value", 9], e, s, gg);_(oRfB,oSfB);_(oOfB,oRfB);_(oGfB,oOfB);_(oFfB,oGfB);var oTfB = _n("view");_r(oTfB, 'class', 24, e, s, gg);var oUfB = _n("view");_r(oUfB, 'class', 25, e, s, gg);var oVfB = _o(41, e, s, gg);_(oUfB,oVfB);_(oTfB,oUfB);var oWfB = _n("view");_r(oWfB, 'class', 27, e, s, gg);var oXfB = _n("view");_r(oXfB, 'class', 28, e, s, gg);var oYfB = _o(42, e, s, gg);_(oXfB,oYfB);_(oWfB,oXfB);var oZfB = _m( "view", ["class", 30,"bindtap", 13,"data-area", 14], e, s, gg);var oafB = _o(45, e, s, gg);_(oZfB,oafB);_(oWfB,oZfB);_(oTfB,oWfB);var obfB = _n("view");_r(obfB, 'class', 27, e, s, gg);var ocfB = _n("view");_r(ocfB, 'class', 28, e, s, gg);var odfB = _o(46, e, s, gg);_(ocfB,odfB);_(obfB,ocfB);var oefB = _n("view");_r(oefB, 'class', 30, e, s, gg);var offB = _m( "input", ["bindinput", 31,"class", 1,"data-type", 16,"placeholder", 17,"value", 18], e, s, gg);_(oefB,offB);_(obfB,oefB);_(oTfB,obfB);_(oFfB,oTfB);_(oDfB,oFfB);_ic("/yb_shop/pages/common/city-picker.wxml",e_, "./yb_shop/pages/member/address/post.wxml",e,s,oDfB,gg);var ohfB = _n("view");_r(ohfB, 'class', 50, e, s, gg);_(oDfB,ohfB);var oifB = _m( "view", ["bindtap", 51,"class", 1,"data-type", 2,"style", 3], e, s, gg);var ojfB = _o(55, e, s, gg);_(oifB,ojfB);_(oDfB,oifB);var okfB = _n("view");_r(okfB, 'class', 56, e, s, gg);var olfB = _n("view");_r(olfB, 'class', 57, e, s, gg);var omfB = _o(58, e, s, gg);_(olfB,omfB);_(okfB,olfB);_(oDfB,okfB);;onfB.pop();_(oCfB, oDfB);
      } _(r,oCfB);
    return r;
  };
        e_["./yb_shop/pages/member/address/post.wxml"]={f:m1,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#f4f4f4}.picker-modal{background:#fefefe;height:260px;position:fixed;bottom:0;left:0;right:0;z-index:1000;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.picker-modal.city-picker{z-index:2000}.picker-modal.in{transition-duration:.3s;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.picker-modal.out{transition-duration:.3s;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.picker-modal .picker-control{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;height:40px;border-bottom:1px solid #f1f1f1;padding:0 %%?30rpx?%%;font-size:%%?32rpx?%%}.picker-modal .picker-control .cancel{width:50%;text-align:left;color:#666}.picker-modal .picker-control .confirm{width:50%;text-align:right;color:#20b21f}.picker-modal .picker{width:100%;height:220px}.picker-modal .picker .item{line-height:40px}wx-picker-view-column{text-align:center}.post_box{width:90%;margin:0 auto}.post_tit{height:2rem;line-height:2rem;padding-left:1rem;font-size:%%?28rpx?%%;margin-top:%%?20rpx?%%;color:#666}.fui-cell{background:#fff}.fui-cell-group:after{border-bottom:0}.fui-cell-group .fui-cell:before{border-top:0}.fui-cell-group .fui-cell:after{content:" ";position:absolute;left:%%?0rpx?%%;right:%%?0rpx?%%;top:0;height:1px;border-bottom:1px solid #e0dfdf;color:#e0dfdf;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.5);transform:scaleY(.5)}@code-separator-line:__wxRoute = "yb_shop/pages/member/address/post";__wxRouteBegin = true;
define("yb_shop/pages/member/address/post.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var t = getApp(),
    e = t.requirejs("core"),
    i = t.requirejs("check");
Page({
  data: {
    id: '',
    posting: false,
    subtext: "保存地址",
    detail: {
      consigner: "",
      phone: "",
      area: "",
      address: "",
      areaid: ''
    },
    showPicker: false,
    pvalOld: [0, 0, 0],
    pval: [0, 0, 0],
    areas: [],
    street: [],
    streetIndex: 0,
    noArea: false
  },
  onLoad: function onLoad(ev) {
    e.setting();
    this.setData({
      id: ev.id,
      type: ev.type,
      order: ev.order,
      config: getApp().config
    }), this.getDetail(), ev.id || wx.setNavigationBarTitle({
      title: "添加收货地址"
    });
      var post = this;
      e.get("area/GetArea", {}, function (i) {
          post.setData({
              areas: i.areas,
              type: ev.type
          })
      })
  },
  /**
  * 修改时获取地址详情
  */
  getDetail: function getDetail() {
    var t = this,
        a = t.data.id;
    e.get("user/SingleAddress", {
      id: a,
      uid: getApp().getCache("userinfo").uid
    }, function (e) {
      var a = {
        //openstreet: e.openstreet,
        show: true
      };
      if (!i.isEmptyObject(e.info)) {
        wx.setNavigationBarTitle({
          title: "编辑收货地址"
        });
        var r = e.info.province + " " + e.info.city + " " + e.info.district,
            s = t.getIndex(r, t.data.areas);
        a.pval = s, a.pvalOld = s, a.detail = e.info;
        a.detail.area = e.info.district;
      }
      t.setData(a);
      // e.openstreet && s && t.getStreet(t.data.areas, s)
    });
  },
  /**
  * 提交添加/修改收货地址
  */
  submit: function submit(z) {
    var t = this,
        id = this.data.id,
        q = e.pdata(z).type,
        i = t.data.detail;
    i.uid = getApp().getCache("userinfo").uid;
    if ("" == i.consigner || !i.consigner) {
      e.toast("请填写收件人");
      return false;
    }
    if ("" == i.phone || !i.phone) {
      e.toast("请填写联系电话");
      return false;
    }
    if ("" == i.city || !i.city) {
      e.toast("请选择所在地区");
      return false;
    }
    if ("" == i.address || !i.address) {
      e.toast("请填写详细地址");
      return false;
    }
    t.setData({
      posting: true
    });
    if (q == 'add') {
      console.log(i);
      e.get("user/CreateAddress", i, function (i) {
        if (0 != i.code) return t.setData({
          posting: false
        }), void e.alert(i.msg);
        e.success("添加成功！"), setTimeout(function () {
          "add" == t.data.type && 1 == t.data.order ? wx.redirectTo({
            url: "/yb_shop/pages/member/address/select"
          }) : wx.navigateBack();
        }, 1e3);
      });
    } else {
      i.id = id, e.get("user/UpdateAddress", i, function (i) {
        if (0 != i.code) return t.setData({
          posting: false
        }), void e.alert(i.msg);
        e.success("修改成功！"), setTimeout(function () {
          "member" == t.data.type && 2 == t.data.order ? wx.redirectTo({
            url: "/yb_shop/pages/member/address/select"
          }) : wx.navigateBack();
        }, 1e3);
      });
    }
  },
  onChange: function onChange(t) {
    var e = this,
        a = e.data.detail,
        r = t.currentTarget.dataset.type,
        s = i.trim(t.detail.value);
    a[r] = s, e.setData({
      detail: a
    });
  },
  /**
  * 选择地址
  */
  selectArea: function selectArea(t) {
    var e = t.currentTarget.dataset.area;
    //console.log(e)
    var a = this.getIndex(e, this.data.areas);
    this.setData({
      pval: a,
      pvalOld: a,
      showPicker: true
    });
  },
  getStreet: function getStreet(t, a) {
    if (t && a) {
      var i = this;
      if (i.data.detail.province && i.data.detail.city && this.data.openstreet) {
        var r = t[a[0]].city[a[1]].code,
            s = t[a[0]].city[a[1]].area[a[2]].code;
      }
    }
  },
  bindChange: function bindChange(t) {
    var e = this.data.pvalOld,
        a = t.detail.value;
    //console.log(e)
    e[0] != a[0] && (a[1] = 0), e[1] != a[1] && (a[2] = 0), this.setData({
      pval: a,
      pvalOld: a
    });
  },
  onCancel: function onCancel(t) {
    this.setData({
      showPicker: false
    });
  },
  onConfirm: function onConfirm(t) {
    var e = this.data.pval,
        a = this.data.areas,
        i = this.data.detail;
    i.province = a[e[0]].name, i.city = a[e[0]].city[e[1]].name, i.areaid = a[e[0]].city[e[1]].area[e[2]].id, i.datavalue = a[e[0]].code + " " + a[e[0]].city[e[1]].code, a[e[0]].city[e[1]].area && a[e[0]].city[e[1]].area.length > 0 ? (i.area = a[e[0]].city[e[1]].area[e[2]].name, i.datavalue += " " + a[e[0]].city[e[1]].area[e[2]].code, this.getStreet(a, e)) : i.area = "", i.street = "", this.setData({
      detail: i,
      streetIndex: 0,
      showPicker: false
    });
  },
  /**
  * 将地址省市县转换成数组  [0,0,0]格式
  *@param  t  某一地址（string）
  *@param  e  地址库（array）
  return array（[0,0,0]格式）
  */
  getIndex: function getIndex(t, e) {
    if ("" == i.trim(t) || !i.isArray(e)) return [0, 0, 0];
    var a = t.split(" "),
        r = [0, 0, 0];
    for (var s in e) {
      if (e[s].name == a[0]) {
        r[0] = Number(s);
        for (var d in e[s].city) {
          if (e[s].city[d].name == a[1]) {
            r[1] = Number(d);
            for (var n in e[s].city[d].area) {
              if (e[s].city[d].area[n].name == a[2]) {
                r[2] = Number(n);
                break;
              }
            }break;
          }
        }break;
      }
    }console.log(r);
    return r;
  }
});
});require("yb_shop/pages/member/address/post.js")@code-separator-line:["div","view","picker-view","picker-view-column","block","loading","input","include"]