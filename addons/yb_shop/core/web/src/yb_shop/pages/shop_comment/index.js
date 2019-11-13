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
    Z([[7],[3, "show"]]);Z([3, 'comment_tit']);Z([3, 'comment_score']);Z([3, 'big_font']);Z([a, [[7],[3, "sroce"]]]);Z([3, 'small_font']);Z([3, '分']);Z([3, 'comment_count']);Z([a, [3, '共'],[[7],[3, "count"]],[3, '条评论']]);Z([[7],[3, "list"]]);Z([3, 'comment_list']);Z([3, 'user_face']);Z([[6],[[7],[3, "item"]],[3, "user_headimg"]]);Z([3, 'user_info']);Z([3, 'user_name']);Z([a, [[6],[[7],[3, "item"]],[3, "username"]]]);Z([a, [3, 'star_icon'],[[6],[[7],[3, "item"]],[3, "fraction"]]]);Z([3, 'create_time']);Z([a, [[6],[[7],[3, "item"]],[3, "create_time"]]]);Z([3, 'comment_info']);Z([a, [[6],[[7],[3, "item"]],[3, "info"]]]);Z([[2, ">"], [[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "length"]], [1, 0]]);Z([a, [3, 'comment_pic'],[[2,'?:'],[[2, "=="], [[6],[[6],[[7],[3, "item"]],[3, "pic"]],[3, "length"]], [1, 1]],[1, "1"],[1, "2"]]]);Z([[6],[[7],[3, "item"]],[3, "pic"]]);Z([3, 'val']);Z([3, 'previewImage']);Z([3, 'aspectFill']);Z([[7],[3, "val"]]);Z([3, 'clear']);Z([[6],[[7],[3, "item"]],[3, "reply"]]);Z([3, 'shop_reply']);Z([a, [3, '商家回复：'],[[6],[[7],[3, "item"]],[3, "reply"]]]);Z([[2, "=="], [[6],[[7],[3, "list"]],[3, "length"]], [1, 0]]);Z([3, 'fui-loading empty']);Z([3, 'text']);Z([3, '暂无评论']);
  })(z);d_["./yb_shop/pages/shop_comment/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oXH = _v();
      if (_o(0, e, s, gg)) {
        oXH.wxVkey = 1;var oaH = _n("view");_r(oaH, 'class', 1, e, s, gg);var obH = _n("view");_r(obH, 'class', 2, e, s, gg);var ocH = _n("text");_r(ocH, 'class', 3, e, s, gg);var odH = _o(4, e, s, gg);_(ocH,odH);_(obH,ocH);var oeH = _n("text");_r(oeH, 'class', 5, e, s, gg);var ofH = _o(6, e, s, gg);_(oeH,ofH);_(obH,oeH);_(oaH,obH);var ogH = _n("view");_r(ogH, 'class', 7, e, s, gg);var ohH = _n("text");var oiH = _o(8, e, s, gg);_(ohH,oiH);_(ogH,ohH);_(oaH,ogH);_(oXH,oaH);var ojH = _v();var okH = function(ooH,onH,omH,gg){var olH = _n("view");_r(olH, 'class', 10, ooH, onH, gg);var oqH = _m( "image", ["class", 11,"src", 1], ooH, onH, gg);_(olH,oqH);var orH = _n("view");_r(orH, 'class', 13, ooH, onH, gg);var osH = _n("text");_r(osH, 'class', 14, ooH, onH, gg);var otH = _o(15, ooH, onH, gg);_(osH,otH);_(orH,osH);var ouH = _n("view");_r(ouH, 'class', 16, ooH, onH, gg);_(orH,ouH);var ovH = _n("text");_r(ovH, 'class', 17, ooH, onH, gg);var owH = _o(18, ooH, onH, gg);_(ovH,owH);_(orH,ovH);_(olH,orH);var oxH = _n("view");_r(oxH, 'class', 19, ooH, onH, gg);var oyH = _n("text");var ozH = _o(20, ooH, onH, gg);_(oyH,ozH);_(oxH,oyH);_(olH,oxH);var o_H = _v();
      if (_o(21, ooH, onH, gg)) {
        o_H.wxVkey = 1;var oAI = _n("view");_r(oAI, 'class', 22, ooH, onH, gg);var oCI = _v();var oDI = function(oHI,oGI,oFI,gg){var oEI = _n("view");var oJI = _m( "image", ["bindtap", 25,"class", 1,"data-url", 2,"src", 2], oHI, oGI, gg);_(oEI,oJI);_(oFI, oEI);return oFI;};_2(23, oDI, ooH, onH, gg, oCI, "val", "index", '');_(oAI,oCI);var oKI = _n("view");_r(oKI, 'class', 28, ooH, onH, gg);_(oAI,oKI);_(o_H, oAI);
      } _(olH,o_H);var oLI = _n("view");_r(oLI, 'class', 28, ooH, onH, gg);_(olH,oLI);var oMI = _v();
      if (_o(29, ooH, onH, gg)) {
        oMI.wxVkey = 1;var oNI = _n("view");_r(oNI, 'class', 30, ooH, onH, gg);var oPI = _n("text");var oQI = _o(31, ooH, onH, gg);_(oPI,oQI);_(oNI,oPI);_(oMI, oNI);
      } _(olH,oMI);_(omH, olH);return omH;};_2(9, okH, e, s, gg, ojH, "item", "index", '');_(oXH,ojH);var oRI = _v();
      if (_o(32, e, s, gg)) {
        oRI.wxVkey = 1;var oSI = _n("view");_r(oSI, 'class', 33, e, s, gg);var oUI = _n("view");_r(oUI, 'class', 34, e, s, gg);var oVI = _o(35, e, s, gg);_(oUI,oVI);_(oSI,oUI);_(oRI, oSI);
      } _(oXH,oRI);
      } _(r,oXH);
    return r;
  };
        e_["./yb_shop/pages/shop_comment/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.comment_count,.comment_score{text-align:center}.comment_score wx-text{color:#f0323c}.comment_score wx-text.big_font{font-size:%%?80rpx?%%}.comment_count wx-text{color:#666;font-size:%%?28rpx?%%}.comment_tit{padding-top:1.5rem;padding-bottom:1.5rem}.comment_list{position:relative;padding-left:%%?150rpx?%%;padding-right:%%?30rpx?%%;padding-top:%%?10rpx?%%;padding-bottom:%%?30rpx?%%}.comment_list:before{content:"";position:absolute;left:0;top:0;width:100%;height:0;border-top:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.user_info{position:relative}.user_info wx-text,.user_info wx-view{display:inline-block;font-size:%%?28rpx?%%}.star_icon,.star_icon5{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star5.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon4{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star4.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon3{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star3.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon2{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star2.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon1{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star1.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.create_time{position:absolute;top:%%?16rpx?%%;right:%%?12rpx?%%;color:#aeaeae}.user_info wx-text.user_name{font-size:%%?32rpx?%%;height:%%?50rpx?%%;line-height:%%?50rpx?%%;display:block;padding-top:%%?10rpx?%%}.comment_info{padding-top:%%?15rpx?%%;padding-bottom:%%?15rpx?%%}.user_face{width:%%?90rpx?%%;height:%%?90rpx?%%;border-radius:50%;position:absolute;top:%%?20rpx?%%;left:%%?25rpx?%%}.comment_info wx-text{font-size:%%?30rpx?%%}.comment_pic1,.comment_pic2{width:12rem}.comment_pic1 wx-view{width:12rem}.comment_pic2 wx-view{width:5.5rem;float:left;margin-right:.5rem}.comment_pic1 wx-view wx-image,.comment_pic2 wx-view wx-image{width:100%}.comment_pic2 wx-view wx-image{width:5.5rem;height:5.5rem}.shop_reply{padding:.5rem;background:#f8f8f8;border-radius:%%?8rpx?%%;margin-top:.5rem}.shop_reply wx-text{font-size:%%?24rpx?%%;color:#666;line-height:%%?36rpx?%%}.comment_count,.comment_score{text-align:center}.comment_score wx-text{color:#f0323c}.comment_score wx-text.big_font{font-size:%%?80rpx?%%}.comment_count wx-text{color:#666;font-size:%%?28rpx?%%}.comment_tit{padding-top:1.5rem;padding-bottom:1.5rem}.comment_list{position:relative;padding-left:%%?150rpx?%%;padding-right:%%?30rpx?%%;padding-top:%%?10rpx?%%;padding-bottom:%%?30rpx?%%}.comment_list:before{content:"";position:absolute;left:0;top:0;width:100%;height:0;border-top:%%?2rpx?%% solid #e6e6e6;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.user_info{position:relative}.user_info wx-text,.user_info wx-view{display:inline-block;font-size:%%?28rpx?%%}.star_icon,.star_icon5{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star5.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon4{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star4.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon3{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star3.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon2{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star2.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.star_icon1{width:%%?250rpx?%%;height:%%?50rpx?%%;background:url(http://ddfwz.sssvip.net/asmce/diancan/star1.png) no-repeat;background-size:%%?250rpx?%% %%?50rpx?%%}.create_time{position:absolute;top:%%?16rpx?%%;right:%%?12rpx?%%;color:#aeaeae}.user_info wx-text.user_name{font-size:%%?32rpx?%%;height:%%?50rpx?%%;line-height:%%?50rpx?%%;display:block;padding-top:%%?10rpx?%%}.comment_info{padding-top:%%?15rpx?%%;padding-bottom:%%?15rpx?%%}.user_face{width:%%?90rpx?%%;height:%%?90rpx?%%;border-radius:50%;position:absolute;top:%%?20rpx?%%;left:%%?25rpx?%%}.comment_info wx-text{font-size:%%?30rpx?%%}.comment_pic1,.comment_pic2{width:12rem}.comment_pic1 wx-view{width:12rem}.comment_pic2 wx-view{width:5.5rem;float:left;margin-right:.5rem}.comment_pic1 wx-view wx-image,.comment_pic2 wx-view wx-image{width:100%}.comment_pic2 wx-view wx-image{width:5.5rem;height:5.5rem}.shop_reply{padding:.5rem;background:#f8f8f8;border-radius:%%?8rpx?%%;margin-top:.5rem}.shop_reply wx-text{font-size:%%?24rpx?%%;color:#666;line-height:%%?36rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/shop_comment/index";__wxRouteBegin = true;
define("yb_shop/pages/shop_comment/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/shop_comment/index.js
var t = getApp(),
    a = t.requirejs("core");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    page: 1,
    list: [],
    loaded: false,
    show: true
  },
    onShow: function onShow() {
        showMenu();
    },
  //底部导航跳转
  menu_url: function menu_url(k) {
    a.menu_url(k, 2);
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function onLoad(options) {
    this.comment();
  },
  comment: function comment() {
    var that = this;
    a.get("Catering/CommentList", { page: that.data.page }, function (i) {
      if (i.code == 0) {
        var a = { sroce: i.info.sroce, count: i.info.count, show: true };
        if (i.info.info.length < 10) {
          a.loaded = true;
        }
        if (i.info.info.length > 0) {
          a.page = that.data.page + 1;
          a.list = that.data.list.concat(i.info.info);
        }
        a.list = i.info.info;
        that.setData(a);
      } else {
        e.alert(i.msg);
      }
    }, true);
  },
  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function onPullDownRefresh() {
    this.setData({
      list: [],
      page: 1,
      loaded: false
    });
    this.comment();
  },
  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function onReachBottom() {
    this.data.loaded || this.comment();
  },
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {}
});
});require("yb_shop/pages/shop_comment/index.js")@code-separator-line:["div","block","view","text","image"]