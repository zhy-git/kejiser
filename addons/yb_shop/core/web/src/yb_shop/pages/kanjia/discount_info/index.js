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
    Z([[7],[3, "show"]]);Z([3, 'index_swiper']);Z([[7],[3, "autoplay"]]);Z([3, 'true']);Z([[7],[3, "duration"]]);Z([[7],[3, "indicatorDots"]]);Z([[7],[3, "interval"]]);Z([3, 'height:11.5rem;']);Z([[6],[[7],[3, "bargain_info"]],[3, "pic_arr"]]);Z([3, 'slide-image']);Z([3, 'aspectFill']);Z([[7],[3, "item"]]);Z([3, 'page_info02']);Z([3, 'index_info_tit']);Z([a, [[6],[[7],[3, "bargain_info"]],[3, "bargain_name"]]]);Z([3, 'goods_stock']);Z([a, [3, '当前库存：'],[[6],[[7],[3, "bargain_info"]],[3, "bargain_inventory"]],[3, '\r\n      ']]);Z([3, 'o_color']);Z([3, '【库存为0时，所有砍价将停止】']);Z([3, 'speed_tit']);Z([3, 'image']);Z([a, [3, 'background:url('],[[6],[[7],[3, "user_info"]],[3, "user_headimg"]],[3, ') no-repeat center center;background-size: cover;']]);Z([a, [3, '砍价进度：原价'],[[6],[[7],[3, "user_info"]],[3, "original_price"]],[3, '元，已砍至'],[[6],[[7],[3, "user_info"]],[3, "current_price"]],[3, '元。']]);Z([3, 'clear']);Z([3, 'speed_price_box']);Z([3, 'speed_price_f']);Z([3, 'speed_price01']);Z([a, [3, 'left:calc('],[[2, "*"], [[2, "/"], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "original_price"]], [[6],[[7],[3, "user_info"]],[3, "current_price"]]], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "original_price"]], [[6],[[7],[3, "user_info"]],[3, "lowest_price"]]]], [1, 100]],[3, '% - 2.3rem);']]);Z([a, [3, '￥'],[[6],[[7],[3, "user_info"]],[3, "current_price"]]]);Z([3, 'speed_price_line_box']);Z([3, 'speed_price_line_bg']);Z([3, 'speed_price_line']);Z([a, [3, 'width:'],[[2, "*"], [[2, "/"], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "original_price"]], [[6],[[7],[3, "user_info"]],[3, "current_price"]]], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "original_price"]], [[6],[[7],[3, "user_info"]],[3, "lowest_price"]]]], [1, 100]],[3, '%;']]);Z([3, 'speed_price_bottom']);Z([a, [3, '￥'],[[6],[[7],[3, "user_info"]],[3, "original_price"]]]);Z([3, 'speed_price02']);Z([a, [3, '￥'],[[6],[[7],[3, "user_info"]],[3, "lowest_price"]]]);Z([[7],[3, "show_time"]]);Z([3, 'countdown']);Z([3, '活动结束倒计时：\r\n    ']);Z([3, 'y_color']);Z([a, [[7],[3, "countDownDay"]],[3, '天'],[[7],[3, "countDownHour"]],[3, '小时'],[[7],[3, "countDownMinute"]],[3, '分'],[[7],[3, "countDownSecond"]],[3, '秒']]);Z([[2, "&&"],[[2, "<="], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "current_price"]], [[6],[[7],[3, "user_info"]],[3, "lowest_price"]]], [1, 0]],[[2, "=="], [[7],[3, "overtime"]], [1, 2]]]);Z([3, '消费截止时间： ']);Z([a, [[6],[[7],[3, "bargain_info"]],[3, "cons_time"]]]);Z([[2, "&&"],[[2, "<="], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "current_price"]], [[6],[[7],[3, "user_info"]],[3, "lowest_price"]]], [1, 0]],[[2, "=="], [[7],[3, "overtime"]], [1, 1]]]);Z([3, '该活动已过期\r\n  ']);Z([3, 'float_btn']);Z([[2, ">"], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "current_price"]], [[6],[[7],[3, "user_info"]],[3, "lowest_price"]]], [1, 0]]);Z([3, 'bottom_btn_box']);Z([3, 'bottom_btn']);Z([3, 'share']);Z([3, '召唤好友帮我砍价']);Z([3, 'record']);Z([3, '帮砍记录']);Z([[2, "<="], [[2, "-"], [[6],[[7],[3, "user_info"]],[3, "current_price"]], [[6],[[7],[3, "user_info"]],[3, "lowest_price"]]], [1, 0]]);Z([3, 'buyNow']);Z([3, 'bottom_btn03']);Z([3, '立即购买']);Z([[7],[3, "popup"]]);Z([3, 'pop_bg']);Z([3, 'pop_box']);Z([3, 'pop_price_bg']);Z([3, 'pop_price_no']);Z([a, [[7],[3, "info"]],[3, '元']]);Z([3, 'pop_price']);Z([a, [3, '砍掉'],[[7],[3, "info"]],[3, '元']]);Z([3, 'pop_user_name']);Z([3, '系统 帮您砍了第一刀']);Z([3, 'pop_btn']);Z([3, 'tankuang']);Z([3, 'close_btn']);Z([3, '确定']);Z([3, 'height:4.2rem; line-height: 4.2rem;']);
  })(z);d_["./yb_shop/pages/kanjia/discount_info/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var ofR = _v();
      if (_o(0, e, s, gg)) {
        ofR.wxVkey = 1;var oiR = _n("view");_r(oiR, 'class', 1, e, s, gg);var ojR = _m( "swiper", ["autoplay", 2,"circular", 1,"duration", 2,"indicatorDots", 3,"interval", 4,"style", 5], e, s, gg);var okR = _v();var olR = function(opR,ooR,onR,gg){var omR = _n("swiper-item");var orR = _m( "image", ["class", 9,"mode", 1,"src", 2], opR, ooR, gg);_(omR,orR);_(onR, omR);return onR;};_2(8, olR, e, s, gg, okR, "item", "index", '');_(ojR,okR);_(oiR,ojR);_(ofR,oiR);var osR = _n("view");_r(osR, 'class', 12, e, s, gg);var otR = _n("view");_r(otR, 'class', 13, e, s, gg);var ouR = _o(14, e, s, gg);_(otR,ouR);_(osR,otR);var ovR = _n("view");_r(ovR, 'class', 15, e, s, gg);var owR = _o(16, e, s, gg);_(ovR,owR);var oxR = _n("text");_r(oxR, 'class', 17, e, s, gg);var oyR = _o(18, e, s, gg);_(oxR,oyR);_(ovR,oxR);_(osR,ovR);_(ofR,osR);var ozR = _n("view");_r(ozR, 'class', 12, e, s, gg);var o_R = _n("view");_r(o_R, 'class', 19, e, s, gg);var oAS = _m( "image", ["class", 20,"style", 1], e, s, gg);_(o_R,oAS);var oBS = _n("text");var oCS = _o(22, e, s, gg);_(oBS,oCS);_(o_R,oBS);var oDS = _n("view");_r(oDS, 'class', 23, e, s, gg);_(o_R,oDS);_(ozR,o_R);var oES = _n("view");_r(oES, 'class', 24, e, s, gg);var oFS = _n("view");_r(oFS, 'class', 25, e, s, gg);var oGS = _m( "view", ["class", 26,"style", 1], e, s, gg);var oHS = _n("text");var oIS = _o(28, e, s, gg);_(oHS,oIS);_(oGS,oHS);_(oFS,oGS);_(oES,oFS);var oJS = _n("view");_r(oJS, 'class', 29, e, s, gg);var oKS = _n("view");_r(oKS, 'class', 30, e, s, gg);var oLS = _m( "view", ["class", 31,"style", 1], e, s, gg);_(oKS,oLS);_(oJS,oKS);_(oES,oJS);var oMS = _n("view");_r(oMS, 'class', 33, e, s, gg);var oNS = _n("text");var oOS = _o(34, e, s, gg);_(oNS,oOS);_(oMS,oNS);var oPS = _n("text");_r(oPS, 'class', 35, e, s, gg);var oQS = _o(36, e, s, gg);_(oPS,oQS);_(oMS,oPS);_(oES,oMS);_(ozR,oES);_(ofR,ozR);var oRS = _v();
      if (_o(37, e, s, gg)) {
        oRS.wxVkey = 1;var oSS = _n("view");_r(oSS, 'class', 38, e, s, gg);var oUS = _o(39, e, s, gg);_(oSS,oUS);var oVS = _n("text");_r(oVS, 'class', 40, e, s, gg);var oWS = _o(41, e, s, gg);_(oVS,oWS);_(oSS,oVS);_(oRS, oSS);
      } _(ofR,oRS);var oXS = _v();
      if (_o(42, e, s, gg)) {
        oXS.wxVkey = 1;var oYS = _n("view");_r(oYS, 'class', 38, e, s, gg);var oaS = _o(43, e, s, gg);_(oYS,oaS);var obS = _n("text");_r(obS, 'class', 40, e, s, gg);var ocS = _o(44, e, s, gg);_(obS,ocS);_(oYS,obS);_(oXS, oYS);
      } _(ofR,oXS);var odS = _v();
      if (_o(45, e, s, gg)) {
        odS.wxVkey = 1;var oeS = _n("view");_r(oeS, 'class', 38, e, s, gg);var ogS = _o(46, e, s, gg);_(oeS,ogS);_(odS, oeS);
      } _(ofR,odS);var ohS = _n("view");_r(ohS, 'class', 47, e, s, gg);var oiS = _v();
      if (_o(48, e, s, gg)) {
        oiS.wxVkey = 1;var ojS = _n("view");_r(ojS, 'class', 49, e, s, gg);var olS = _m( "button", ["class", 50,"openType", 1], e, s, gg);var omS = _n("text");var onS = _o(52, e, s, gg);_(omS,onS);_(olS,omS);_(ojS,olS);var ooS = _m( "view", ["class", 50,"bindtap", 3], e, s, gg);var opS = _n("text");var oqS = _o(54, e, s, gg);_(opS,oqS);_(ooS,opS);_(ojS,ooS);_(oiS, ojS);
      } _(ohS,oiS);var orS = _v();
      if (_o(55, e, s, gg)) {
        orS.wxVkey = 1;var osS = _n("view");_r(osS, 'class', 49, e, s, gg);var ouS = _m( "view", ["bindtap", 56,"class", 1], e, s, gg);var ovS = _n("text");var owS = _o(58, e, s, gg);_(ovS,owS);_(ouS,ovS);_(osS,ouS);var oxS = _m( "view", ["bindtap", 53,"class", 4], e, s, gg);var oyS = _n("text");var ozS = _o(54, e, s, gg);_(oyS,ozS);_(oxS,oyS);_(osS,oxS);_(orS, osS);
      } _(ohS,orS);_(ofR,ohS);var o_S = _v();
      if (_o(59, e, s, gg)) {
        o_S.wxVkey = 1;var oAT = _n("view");_r(oAT, 'class', 60, e, s, gg);var oCT = _n("view");_r(oCT, 'class', 61, e, s, gg);var oDT = _n("view");_r(oDT, 'class', 62, e, s, gg);var oET = _n("view");_r(oET, 'class', 63, e, s, gg);var oFT = _n("text");var oGT = _o(64, e, s, gg);_(oFT,oGT);_(oET,oFT);_(oDT,oET);_(oCT,oDT);var oHT = _n("view");_r(oHT, 'class', 65, e, s, gg);var oIT = _n("text");var oJT = _o(66, e, s, gg);_(oIT,oJT);_(oHT,oIT);_(oCT,oHT);var oKT = _n("view");_r(oKT, 'class', 67, e, s, gg);var oLT = _n("text");var oMT = _o(68, e, s, gg);_(oLT,oMT);_(oKT,oLT);_(oCT,oKT);var oNT = _n("view");_r(oNT, 'class', 69, e, s, gg);var oOT = _m( "view", ["bindtap", 70,"class", 1], e, s, gg);var oPT = _n("text");var oQT = _o(72, e, s, gg);_(oPT,oQT);_(oOT,oPT);_(oNT,oOT);_(oCT,oNT);_(oAT,oCT);_(o_S, oAT);
      } _(ofR,o_S);
      } _(r,ofR);var oRT = _n("view");_r(oRT, 'style', 73, e, s, gg);_(r,oRT);
    return r;
  };
        e_["./yb_shop/pages/kanjia/discount_info/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{width:100%;height:100%;position:relativel;background:#fff}.goods_stock{height:1.5rem;line-height:1.5rem;padding:0 .5rem .5rem .5rem;overflow:hidden;font-size:.9rem}.goods_stock wx-text{font-size:.8rem}.speed_tit{margin:1rem;padding-left:2.5rem;height:2rem;line-height:2rem;overflow:hidden}.speed_tit .image{width:2rem;height:2rem;margin-left:-2.5rem;border-radius:50%;float:left}.speed_tit wx-text{font-size:.8rem;display:block;margin-top:0}.speed_price_box{position:relative;height:5rem;margin:0 1rem}.speed_price_box .speed_price01{position:absolute;top:0}.speed_price01 wx-text{color:#e64b1b;font-size:.7rem}.speed_price_f{margin:0 1rem 0 2.5rem;position:relative;height:1.5rem;line-height:1.5rem}.speed_price_line_box{position:absolute;top:1.6rem;left:0;width:100%}.speed_price_line_bg{background:#bababa;height:.5rem;border-radius:.25rem;margin-left:1rem;margin-right:1rem;position:relative}.speed_price_line{position:absolute;top:0;left:0;background:#ff6500;height:.5rem;border-radius:.25rem}.speed_price_bottom{position:absolute;top:2.2rem;width:100%;height:2rem;line-height:2rem;color:#5b5b5b}.speed_price_bottom wx-text{display:block;width:50%;float:left;height:2rem;line-height:2rem;color:#6e6e6e;font-size:.7rem}.speed_price_bottom .speed_price02{text-align:right}.countdown{font-size:.8rem;height:2.8rem;line-height:2.8rem;overflow:hidden;margin:0;padding:0 1rem;border-bottom:%%?2rpx?%% solid #f2f2f2}.bottom_btn_box{margin:1rem}.bottom_btn{background:#dab241;padding:0 1.8rem;float:right;text-align:center;border-radius:.3rem;line-height:2.8rem;border:0}.bottom_btn::after{border:0}.bottom_btn wx-text,.bottom_btn03 wx-text{font-size:1rem;color:#fff}.bottom_btn:first-child{margin-right:1rem;float:left;border:0}.bottom_btn03{background:#dab241;padding:0 2.8rem;float:right;text-align:center;border-radius:.3rem;line-height:2.8rem;border:0}.bottom_btn03:first-child{margin-right:1rem;float:left;border:0}.pop_bg{background:rgba(0,0,0,.3);position:absolute;top:0;left:0;width:100%;height:100%;z-index:9999999}.pop_box{width:13rem;height:12.6rem;left:50%;top:50%;margin-left:-6.5rem;margin-top:-6.3rem;position:absolute;background:rgba(255,255,255,.9);border-radius:%%?14rpx?%%}.pop_price_bg{width:6rem;height:6rem;margin:0 auto;background:url(http://ddfwz.sssvip.net/asmce/kanjia/pop_price_bg.png) no-repeat;background-size:cover;position:relative}.pop_price_no{transform:rotate(-18deg);position:absolute;top:2.3rem;left:1.6rem;width:3.2rem;overflow:hidden;height:1.1rem}.pop_price_no wx-text{font-size:1rem;color:#c93032}.pop_price,.pop_user_name{text-align:center;height:1.4rem;line-height:1.4rem;overflow:hidden}.pop_price wx-text{font-size:.9rem;color:#c93032}.pop_user_name wx-text{font-size:.8rem;color:#454545}.pop_btn{margin:.5rem}.close_btn{height:2.5rem;line-height:2.4rem;background:#fd6d0c;text-align:center;border-radius:.2rem}.close_btn wx-text{font-size:1rem;color:#fff}.float_btn{height:4.2rem;width:100%;position:fixed;bottom:0;left:0;background:#fff}@code-separator-line:__wxRoute = "yb_shop/pages/kanjia/discount_info/index";__wxRouteBegin = true;
define("yb_shop/pages/kanjia/discount_info/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
var app = getApp(),
    a = app.requirejs("core"),
    b = app.requirejs("api/kjb");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    indicatorDots: true,
    autoplay: true,
    interval: 5000,
    duration: 1000,
    popup: false,
    countDownDay: 0,
    countDownHour: 0,
    countDownMinute: 0,
    countDownSecond: 0,
    show_time: true,
    // pickerOption: {},
    // specsData: [],
    // specsTitle: "",
    // tempname: "",//弹框
    // showPicker: false,//页面阴暗效果
    // total: 1,   //默认选择数量
    // optionid: 0,//初始规格未选中的状态。buyNow()调用
    // spec_Show: true,
    active: ''
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function onLoad(options) {
    a.setting();
    var that = this,
        status = false,
        id = options.id;
    if (options.form_id) {
      var form_id = options.form_id;
    }
    that.setData(options);
    if (options.kj_stu && options.kj_stu == 1) {
      status = true;
    }
    b.BargainCreate(id, function (t) {
      that.setData(t);
      that.detail();
      if (form_id && t.code == 0) {
        //that.push(id, form_id);
      }
    }, status);
  },
  detail: function detail() {
    var that = this,
        uid = getApp().getCache("userinfo").uid,
        id = that.data.id;
    b.kj_info(id, uid, that, function (t) {
      that.setData(t);
      //倒计时
      if (t.bargain_info.end_time) {
        var time = t.bargain_info.end_time;
        b.Countdown(time, function (i) {
          that.setData(i);
        });
      }
    });
  },
  push: function push(id, form_id) {
    console.log(id);
    var that = this;
    a.get('Bargain/Push', {
      bargain_id: id,
      user_id: getApp().getCache("userinfo").uid,
      form_id: form_id
    }, function (t) {
      console.log(t);
    });
  },
  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function onShow() {},
  tankuang: function tankuang() {
    this.setData({
      popup: false
    });
  },
  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function onPullDownRefresh() {
    this.detail();
    wx.stopPullDownRefresh();
  },
  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function onReachBottom() {},
  /**
   * 跳转到砍价记录
   */
  record: function record() {
    wx.navigateTo({
      url: '/yb_shop/pages/kanjia/record/index?id=' + this.data.user_info.id
    });
  },
  /**
   *立即购买
   * @param goods_id sku_id uid total
   * @return url
   */
  buyNow: function buyNow(t) {
    var i = this.data;
    if (i.overtime == 1) {
      a.alert('该活动已过期');
      return false;
    }
    if (i.bargain_info.bargain_inventory < 1) {
      a.alert('库存不足');
      return false;
    }
    wx.navigateTo({
      url: "/yb_shop/pages/kanjia/order/create/index?bargain_id=" + i.bargain_info.id + "&total=1&sku_id=" + "&uid=" + getApp().getCache("userinfo").uid + "&activity_order_type=1&current_price=" + i.user_info.current_price
    });
  },
  Forsubmit: function Forsubmit(e) {
    this.setData({
      formId: e.detail.formId
    });
  },
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage(e) {
    var that = this.data;
    console.log('/yb_shop/pages/kanjia/share_info/index?id=' + that.user_info.id + '&uid=' + that.user_info.user_id + '&bargain_id=' + that.user_info.bargain_id + '&form_id=' + that.formId);
    return {
      title: '我正在参加：' + that.bargain_info.bargain_name,
      path: '/yb_shop/pages/kanjia/share_info/index?id=' + that.user_info.id + '&uid=' + that.user_info.user_id + '&bargain_id=' + that.user_info.bargain_id + '&form_id=' + that.formId,
      success: function success(res) {
        // 转发成功
      },
      fail: function fail(res) {
        // 转发失败
      }
    };
  },
  /**
   *点击按钮 弹出 选择规格、数量页面
   */
  selectPicker: function selectPicker(t) {
    var that = this;
    if (that.data.bargain_info.bargain_inventory < 1) {
      a.alert('当前库存不足，请稍后再试');
      return;
    }
    if (that.data.goods_detail.goods_spec_format.length == 0) {
      wx.redirectTo({
        url: "/pages/order/create/index?bargain_id=" + that.data.bargain_info.id + "&goods_id=" + that.data.goods_detail.goods_id + "&total=1&sku_id=" + that.data.goods_detail.sku['0'].sku_id + "&uid=" + getApp().getCache("userinfo").uid + "&activity_order_type=1&current_price=" + that.data.user_info.current_price
      });
    }
    that.setData({
      active: "active",
      slider: "in",
      tempname: "select-picker"
    });
    var d = that.data.goods_detail.sku;
    //默认规格选中
    if (that.data.goods_detail.goods_spec_format.length != 0) {
      that.setData({
        optionid: d['0'].sku_id,
        "goods_detail.sku_pic": d['0'].pic != null ? d['0'].pic.img_cover_small : ''
      });
      var r = that.data.goods_detail.goods_spec_format,
          o = "",
          arr = [];
      r.forEach(function (t, k) {
        arr[k] = {
          id: t.spec_id,
          vid: t.value[0].spec_value_id,
          spec_name: t.value[0].spec_value_name
        };
        o += t.value[0].spec_value_name + "， ";
      });
      that.setData({
        specsData: arr,
        specsTitle: o
      });
    } else {
      that.setData({
        "goods.sku_pic": d['0'].pic != null ? d['0'].pic.img_cover_small : ''
      });
    }
  },
  /**
   *选中规格后在data中储存相应的数量、价格、sku等信息
   */
  specsTap: function specsTap(t) {
    var e = this,
        o = "",
        i = "",
        a = t.target.dataset.idx,
        d = e.data.goods_detail.sku,
        r = e.data.specsData;
    r[a] = {
      id: t.target.dataset.id,
      vid: t.target.dataset.vid,
      spec_name: t.target.dataset.spec_name
    };
    r.forEach(function (t) {
      o += t.spec_name + "， ", i += t.id + ":" + t.vid + ";";
    });
    i = i.substring(0, i.length - 1);
    d.forEach(function (a) {
      console.log(a);
      a.attr_value_items == i && e.setData({
        optionid: a.sku_id,
        "goods.sku_pic": a.pic != null ? a.pic.img_cover_small : ''
      });
    }), e.setData({
      specsData: r,
      specsTitle: o
    });
  },
  /**
   *隐藏 选选数量、规格的 弹框
   */
  emptyActive: function emptyActive() {
    this.setData({
      active: "",
      slider: "out"
      //showPicker: false,
    });
  }
});
});require("yb_shop/pages/kanjia/discount_info/index.js")@code-separator-line:["div","block","view","swiper","swiper-item","image","text","button"]