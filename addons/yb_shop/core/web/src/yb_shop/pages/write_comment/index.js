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
    Z([3, 'formReset']);Z([3, 'formSubmit']);Z([3, 'join_li join_li_p']);Z([[7],[3, "score"]]);Z([3, 'score']);Z([[7],[3, "index"]]);Z([[2,'?:'],[[2, "=="], [[7],[3, "item"]], [1, 1]],[[7],[3, "gray_star"]],[[7],[3, "light_star"]]]);Z([3, 'width:40px;height:40px;float:left']);Z([3, 'join_j_li']);Z([3, 'join_info']);Z([3, 'bindTextAreaBlur']);Z([3, 'info']);Z([3, '亲，你对本店服务还满意吗？']);Z([3, 'join_k_li']);Z([3, 'join_pic_list']);Z([[7],[3, "store_pic_array"]]);Z([[2, ">"], [[6],[[7],[3, "store_pic_array"]],[3, "length"]], [1, 0]]);Z([3, 'join_pic_li']);Z([3, 'aspectFill']);Z([[7],[3, "item"]]);Z([3, 'Image_del']);Z([3, 'close_icon']);Z([3, 'chooseImageTap']);Z([3, 'http://ddfwz.sssvip.net/asmce/diancan/add_pic.jpg']);Z([3, 'prompt_info']);Z([3, 'prompt_tit']);Z([3, '上传图片']);Z([3, '有图有真相才更有说服力']);Z([3, 'clear']);Z([3, 'b_btn_box']);Z([3, 'bottom_btn_box']);Z([3, 'bottom_btn']);Z([3, 'submit']);Z([a, [3, 'background:'],[[2,'?:'],[[2, "!="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[6],[[7],[3, "config"]],[3, "selectedColor"]],[[6],[[7],[3, "config"]],[3, "background"]]],[3, ';color:'],[[2,'?:'],[[2, "&&"],[[2, "=="], [[6],[[7],[3, "config"]],[3, "selectedColor"]], [1, "#000000"]],[[2, "=="], [[6],[[7],[3, "config"]],[3, "font_color"]], [1, "black"]]],[1, "#000000"],[1, "#ffffff"]],[3, ';']]);Z([3, '确认提交']);Z([3, 'bottom_space']);
  })(z);d_["./yb_shop/pages/write_comment/index.wxml"] = {};
  var m0=function(e,s,r,gg){
    var oXI = _m( "form", ["bindreset", 0,"bindsubmit", 1], e, s, gg);var oYI = _n("view");_r(oYI, 'class', 2, e, s, gg);var oZI = _v();var oaI = function(oeI,odI,ocI,gg){var obI = _n("view");var ogI = _m( "image", ["bindtap", 4,"data-index", 1,"src", 2,"style", 3], oeI, odI, gg);_(obI,ogI);_(ocI, obI);return ocI;};_2(3, oaI, e, s, gg, oZI, "item", "index", '');_(oYI,oZI);_(oXI,oYI);var ohI = _n("view");_r(ohI, 'class', 8, e, s, gg);var oiI = _n("view");_r(oiI, 'class', 9, e, s, gg);var ojI = _m( "textarea", ["bindblur", 10,"name", 1,"placeholder", 2], e, s, gg);_(oiI,ojI);_(ohI,oiI);_(oXI,ohI);var okI = _n("view");_r(okI, 'class', 13, e, s, gg);var olI = _n("view");_r(olI, 'class', 14, e, s, gg);var omI = _v();var onI = function(orI,oqI,opI,gg){var ooI = _v();
      if (_o(16, orI, oqI, gg)) {
        ooI.wxVkey = 1;var otI = _n("view");_r(otI, 'class', 17, orI, oqI, gg);var ovI = _m( "image", ["mode", 18,"src", 1], orI, oqI, gg);_(otI,ovI);var owI = _m( "view", ["data-index", 19,"bindtap", 1,"class", 2], orI, oqI, gg);_(otI,owI);_(ooI, otI);
      } _(opI, ooI);return opI;};_2(15, onI, e, s, gg, omI, "item", "index", '');_(olI,omI);var oxI = _n("view");_r(oxI, 'class', 17, e, s, gg);var oyI = _m( "image", ["mode", 18,"catchtap", 4,"src", 5], e, s, gg);_(oxI,oyI);_(olI,oxI);var ozI = _n("view");_r(ozI, 'class', 24, e, s, gg);var o_I = _n("text");_r(o_I, 'class', 25, e, s, gg);var oAJ = _o(26, e, s, gg);_(o_I,oAJ);_(ozI,o_I);var oBJ = _n("text");var oCJ = _o(27, e, s, gg);_(oBJ,oCJ);_(ozI,oBJ);_(olI,ozI);var oDJ = _n("view");_r(oDJ, 'class', 28, e, s, gg);_(olI,oDJ);_(okI,olI);_(oXI,okI);var oEJ = _n("view");_r(oEJ, 'class', 29, e, s, gg);var oFJ = _n("view");_r(oFJ, 'class', 30, e, s, gg);var oGJ = _m( "button", ["class", 31,"formType", 1,"style", 2], e, s, gg);var oHJ = _o(34, e, s, gg);_(oGJ,oHJ);_(oFJ,oGJ);_(oEJ,oFJ);_(oXI,oEJ);var oIJ = _n("view");_r(oIJ, 'class', 35, e, s, gg);_(oXI,oIJ);_(r,oXI);
    return r;
  };
        e_["./yb_shop/pages/write_comment/index.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:body{background:#fff;width:100%}.top_bg{width:100%;background:url(http://ddfwz.sssvip.net/asmce/kanjia/join_bg.jpg) no-repeat center center;background-size:cover;height:5rem}.top_bg .top_tit{height:3rem;margin-left:5rem;padding-top:1rem}.top_bg .top_tit wx-text{font-size:.9rem;line-height:1.5rem;color:#fff;display:block}.join_f_li{height:5rem;padding-left:0;background:#fff;padding-top:.2rem}.join_li{height:3rem;line-height:3rem;position:relative;font-size:.8rem;padding-top:1rem}.join_f_li .shop_logo{width:4rem;height:4rem;margin-left:-3.2rem;border-radius:.2rem;float:left;margin-top:.8rem}.join_f_li .shop_logo wx-image{width:4rem;height:4rem;border-radius:.2rem}.join_li wx-input{height:2.5rem;line-height:2.5rem;font-size:.8rem}.join_g_li{height:12.5rem;margin-top:%%?16rpx?%%;background:#fff}.join_li_p{font-size:.8rem;position:relative;justify-content:center;display:flex}.join_li wx-text,.join_li_p wx-text{display:block;height:2.5rem;line-height:2.5rem;width:5rem;text-align:center;margin-left:-5rem;float:left}.join_li_p .join_btn_box{position:absolute;right:1rem;top:.35rem;height:1.7rem;width:6rem;line-height:1.7rem;z-index:9999999999}.join_li_p .join_btn_box .join_btn{position:relative;background:#f8f8f8;color:#454545;font-size:.8rem;text-align:center;height:1.7rem;width:6rem;line-height:1.7rem}.join_li_p .join_btn_box .join_btn:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #d9d9d9;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5);border-radius:.5rem}.w45{width:45%;float:left;text-align:center}.w10{width:10%;float:left;text-align:center}.w100{width:100%;text-align:center}.join_h_li{height:7.5rem;margin-top:%%?16rpx?%%;background:#fff}.position_tit{height:1rem;line-height:1rem;text-align:center;padding-top:1rem}.position_tit wx-text{color:#212121;font-size:1rem}.position_info{height:2.2rem;line-height:2.2rem;text-align:center;margin:0 1rem;overflow:hidden}.position_info wx-text{color:#666;font-size:.7rem}.position_btn_box{width:10rem;height:2.5rem;line-height:2.5rem;margin:0 auto}.position_btn_box .position_btn{height:2rem;line-height:1.9rem;text-align:center;width:3.8rem;border-radius:.2rem;border:1px solid #999;margin:0 .5rem;float:left}.position_btn_box .position_btn wx-text{font-size:.9rem}.position_btn_box .position_btn.cur{border:1px solid #ed4f4e}.position_btn_box .position_btn.cur wx-text{color:#ed4f4e}.join_i_li{height:5rem;margin-top:%%?16rpx?%%;background:#fff;padding-left:5rem}.join_i_li .fac_tit,.join_j_li .join_tit,.join_k_li .join_tit{width:5rem;height:2.5rem;line-height:2.5rem;margin-left:-5rem;float:left;text-align:center;font-size:.8rem}.fac_list wx-checkbox-group .checkbox{width:50%;display:block;float:left;height:2rem;line-height:2rem;color:grey;font-size:.8rem}.join_i_li .fac_list{padding-top:.2rem}.join_j_li{height:7rem;background:#fff;padding-left:1rem;margin-top:%%?16rpx?%%;overflow:hidden;padding-right:1rem}.join_k_li{min-height:8rem;background:#fff;margin-top:%%?16rpx?%%;padding-left:1rem;padding-right:1rem}.join_info{padding-bottom:.5rem;overflow:hidden;margin-right:.7rem}.join_info wx-textarea{font-size:%%?28rpx?%%;line-height:1.2rem;margin:0 auto;height:%%?180rpx?%%;background:#f2f2f2;padding:.5rem;width:94%;border-radius:%%?10rpx?%%}.join_info wx-textarea:after{content:"  ";position:absolute;left:0;top:0;bottom:0;right:0;z-index:1;width:200%;height:200%;border:1px solid #d9d9d9;border-radius:%%?10rpx?%%;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(.5,.5);transform:scale(.5,.5)}.join_pic_list{padding-top:.6rem;padding-bottom:.8rem}.join_pic_li{width:5.2rem;min-height:5.2rem;float:left;margin-right:.5rem;position:relative}.join_pic_li wx-image{width:5.2rem;height:5.2rem;margin-bottom:.5rem}.close_icon{position:absolute;right:.1rem;top:.1rem;width:1.1rem;height:1.1rem;background:url(http://ddfwz.sssvip.net/asmce/kanjia/close_icon.png) no-repeat center center;background-size:1.1rem 1.1rem}.prompt_info{height:2.2rem;line-height:1.5rem;float:left;padding-top:1rem}.prompt_info wx-text{display:block}.prompt_info wx-text{font-size:%%?28rpx?%%;color:#919191}.prompt_info wx-text.prompt_tit{font-size:1rem;color:#000}.bottom_btn_box{height:2.8rem;line-height:2.8rem}.bottom_btn{height:2.8rem;line-height:2.8rem;background:#ffd061;text-align:center;border-radius:0;color:#222;border:0;width:100%}.bottom_btn::after{border-radius:0;border:0}.bottom_btn wx-text{font-size:1rem;color:#fff}.right_arrow{background:url(http://ddfwz.sssvip.net/asmce/kanjia/right_arrow.jpg) no-repeat right center;background-size:1.5rem 1.5rem;color:grey}.b_btn_box{position:fixed;bottom:0;left:0;width:100%}.join_li_p wx-view{margin-left:%%?16rpx?%%;margin-right:%%?16rpx?%%}@code-separator-line:__wxRoute = "yb_shop/pages/write_comment/index";__wxRouteBegin = true;
define("yb_shop/pages/write_comment/index.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
"use strict";
// pages/kanjia/join/index.js
var app = getApp(),
    a = app.requirejs("core");
Page({
  /**
   * 页面的初始数据
   */
  data: {
    gray_star: "http://ddfwz.sssvip.net/asmce/yigou/gray-star.png",
    light_star: "http://ddfwz.sssvip.net/asmce/yigou/light-star.png",
    store_pic_array: [],
    score: [1, 1, 1, 1, 1],
    total_score: 0,
    url: getApp().globalData.api,
    config: getApp().config
  },
  score: function score(e) {
    // console.log(e)
    var that = this,
        index = a.pdata(e).index,
        total_score = index + 1,
        arr = [1, 1, 1, 1, 1];
    for (var i in arr) {
      if (i <= index) {
        arr[i] = 2;
      }
    }
    that.setData({ score: arr, total_score: total_score });
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function onLoad(options) {},
  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function onReady() {},
  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function onShow() {},
  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function onPullDownRefresh() {},
  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function onReachBottom() {},
  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function onShareAppMessage() {},
  /**
   * 提交【评论
   */
  formSubmit: function formSubmit(e) {
    var that = this;
    var score = that.data.total_score;
    var formData = e.detail.value;
    if (formData.info == '') {
      a.alert('内容不能为空！');
      return;
    }
    if (score == 0) {
      a.alert('您还没有评分哦');
      return;
    }
    formData.fraction = score;
    formData.user_id = getApp().getCache("userinfo").uid;
    formData.app_id = getApp().globalData.appid;
    formData.array_pic = that.data.store_pic_array;
    //console.log(formData);
    a.post('Index/WriteComment', formData, function (t) {
      console.log(t);
      if (t.code == 0) {
        //成功操作
        a.alert('提交成功', function () {
          a.jump('', 5);
        });
      } else {
        //失败提示
        a.alert(t.msg);
      }
    });
  },
  chooseImageTap: function chooseImageTap() {
    var _this = this;
    wx.showActionSheet({
      itemList: ['从相册中选择', '拍照'],
      itemColor: "#f7982a",
      success: function success(res) {
        if (!res.cancel) {
          if (res.tapIndex == 0) {
            _this.chooseWxImage('album');
          } else if (res.tapIndex == 1) {
            _this.chooseWxImage('camera');
          }
        }
      }
    });
  },
  chooseWxImage: function chooseWxImage(type) {
    var _this = this;
    var site = app.siteInfo;
    wx.chooseImage({
      sizeType: ['original', 'compressed'],
      sourceType: [type],
      success: function success(res) {
        res.tempFilePaths.forEach(function (t) {
          console.log(t);
          wx.uploadFile({
            url: site.siteroot + '?i=' + site.uniacid + '&t=undefined&v=' + site.version + '&from=wxapp&c=entry&a=wxapp&do=index_uploadFile&path=comment&m=' + site.name + '&sign=1d917db727d0aa4e23ca117826fa3153',
            filePath: t,
            name: 'file_upload',
            success: function success(res) {
              console.log(res);
              if (res.data != null) {
                var store_pic_array = _this.data.store_pic_array.concat(res.data);
                _this.setData({
                  store_pic_array: store_pic_array
                });
              }
            }
          });
        });
      }
    });
  },
  Image_del: function Image_del(e) {
    var that = this,
        index = a.pdata(e).index,
        arr = that.data.store_pic_array;
    a.removeByValue(arr, index, function (i) {
      that.setData({
        store_pic_array: i
      });
    });
  }
});
});require("yb_shop/pages/write_comment/index.js")@code-separator-line:["div","form","view","image","textarea","text","button"]