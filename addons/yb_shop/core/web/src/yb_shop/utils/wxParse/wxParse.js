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
    Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-'],[[6],[[7],[3, "item"]],[3, "tag"]]]);Z([[6],[[7],[3, "item"]],[3, "styleStr"]]);Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-'],[[6],[[7],[3, "item"]],[3, "tag"]],[3, '-video']]);Z([[6],[[6],[[7],[3, "item"]],[3, "attr"]],[3, "src"]]);Z([3, 'wxParseImgLoad']);Z([3, 'wxParseImgTap']);Z([[6],[[7],[3, "item"]],[3, "from"]]);Z([[6],[[7],[3, "item"]],[3, "imgIndex"]]);Z([3, 'aspectFit']);Z([3, 'widthFix']);Z([3, 'WxEmojiView wxParse-inline']);Z([[6],[[7],[3, "item"]],[3, "textArray"]]);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "node"]], [1, "text"]]);Z([[2,'?:'],[[2, "=="], [[6],[[7],[3, "item"]],[3, "text"]], [1, "\n"]],[1, "wxParse-hide"],[1, ""]]);Z([a, [[6],[[7],[3, "item"]],[3, "text"]]]);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "node"]], [1, "element"]]);Z([3, 'wxEmoji']);Z([a, [[6],[[7],[3, "item"]],[3, "baseSrc"]],[[6],[[7],[3, "item"]],[3, "text"]]]);Z([[7],[3, "wxParseData"]]);Z([3, 'wxParse0']);Z([[8], "item", [[7],[3, "item"]]]);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tag"]], [1, "button"]]);Z([3, 'mini']);Z([3, 'default']);Z([[6],[[7],[3, "item"]],[3, "nodes"]]);Z([3, 'item']);Z([3, 'wxParse1']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tag"]], [1, "li"]]);Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-li']]);Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-li-inner']]);Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-li-text']]);Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-li-circle']]);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tag"]], [1, "video"]]);Z([3, 'wxParseVideo']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tag"]], [1, "img"]]);Z([3, 'wxParseImg']);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tag"]], [1, "a"]]);Z([3, 'wxParseTagATap']);Z([a, [3, 'wxParse-inline '],[[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-'],[[6],[[7],[3, "item"]],[3, "tag"]]]);Z([[6],[[6],[[7],[3, "item"]],[3, "attr"]],[3, "href"]]);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tag"]], [1, "table"]]);Z([[2, "=="], [[6],[[7],[3, "item"]],[3, "tagType"]], [1, "block"]]);Z([a, [[6],[[7],[3, "item"]],[3, "classStr"]],[3, ' wxParse-'],[[6],[[7],[3, "item"]],[3, "tag"]],[3, ' wxParse-'],[[6],[[7],[3, "item"]],[3, "tagType"]]]);Z([3, 'WxEmojiView']);Z([3, 'wxParse2']);Z([3, 'wxParse3']);Z([3, 'wxParse4']);Z([3, 'wxParse5']);Z([3, 'wxParse6']);Z([3, 'wxParse7']);Z([3, 'wxParse8']);Z([3, 'wxParse9']);Z([3, 'wxParse10']);Z([3, 'wxParse11']);Z([3, 'wxParse12']);
  })(z);d_["./yb_shop/utils/wxParse/wxParse.wxml"] = {};d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParseVideo"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParseVideo'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oje = _m( "view", ["class", 0,"style", 1], e, s, gg);var oke = _m( "video", ["class", 2,"src", 1], e, s, gg);_(oje,oke);_(r,oje);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParseImg"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParseImg'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var ome = _m( "image", ["class", 0,"data-src", 3,"src", 0,"bindload", 1,"bindtap", 2,"data-from", 3,"data-idx", 4,"mode", 5,"mode", 6], e, s, gg);_(r,ome);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["WxEmojiView"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:WxEmojiView'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var ooe = _m( "view", ["style", 1,"class", 9], e, s, gg);var ope = _v();var oqe = function(oue,ote,ose,gg){var owe = _v();
      if (_o(12, oue, ote, gg)) {
        owe.wxVkey = 1;var oze = _o(14, oue, ote, gg);_(owe,oze);
      }else if (_o(15, oue, ote, gg)) {
        owe.wxVkey = 2;var oBf = _m( "image", ["class", 16,"src", 1], e, s, gg);_(owe,oBf);
      } _(ose,owe);return ose;};_2(11, oqe, e, s, gg, ope, "item", "index", '');_(ooe,ope);_(r,ooe);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oDf = _v();var oEf = function(oIf,oHf,oGf,gg){var oKf = _v();
       var oLf = _o(19, oIf, oHf, gg);
       var oNf = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oLf, e_, d_);
       if (oNf) {
         var oMf = _1(20,oIf,oHf,gg);
         oNf(oMf,oMf,oKf, gg);
       } else _w(oLf, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oGf,oKf);return oGf;};_2(18, oEf, e, s, gg, oDf, "item", "index", '');_(r,oDf);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse0"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse0'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oPf = _v();
      if (_o(15, e, s, gg)) {
        oPf.wxVkey = 1;var oSf = _v();
      if (_o(21, e, s, gg)) {
        oSf.wxVkey = 1;var oVf = _m( "button", ["size", 22,"type", 1], e, s, gg);var oWf = _v();var oXf = function(obf,oaf,oZf,gg){var odf = _v();
       var oef = _o(26, obf, oaf, gg);
       var ogf = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oef, e_, d_);
       if (ogf) {
         var off = _1(20,obf,oaf,gg);
         ogf(off,off,odf, gg);
       } else _w(oef, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oZf,odf);return oZf;};_2(24, oXf, e, s, gg, oWf, "item", "index", '');_(oVf,oWf);_(oSf,oVf);
      }else if (_o(27, e, s, gg)) {
        oSf.wxVkey = 2;var ojf = _m( "view", ["style", 1,"class", 27], e, s, gg);var okf = _n("view");_r(okf, 'class', 29, e, s, gg);var olf = _n("view");_r(olf, 'class', 30, e, s, gg);var omf = _n("view");_r(omf, 'class', 31, e, s, gg);_(olf,omf);_(okf,olf);var onf = _n("view");_r(onf, 'class', 30, e, s, gg);var oof = _v();var opf = function(otf,osf,orf,gg){var ovf = _v();
       var owf = _o(26, otf, osf, gg);
       var oyf = _gd('./yb_shop/utils/wxParse/wxParse.wxml', owf, e_, d_);
       if (oyf) {
         var oxf = _1(20,otf,osf,gg);
         oyf(oxf,oxf,ovf, gg);
       } else _w(owf, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(orf,ovf);return orf;};_2(24, opf, e, s, gg, oof, "item", "index", '');_(onf,oof);_(okf,onf);_(ojf,okf);_(oSf,ojf);
      }else if (_o(32, e, s, gg)) {
        oSf.wxVkey = 3;var oAg = _v();
       var oBg = _o(33, e, s, gg);
       var oDg = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oBg, e_, d_);
       if (oDg) {
         var oCg = _1(20,e,s,gg);
         oDg(oCg,oCg,oAg, gg);
       } else _w(oBg, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oSf,oAg);
      }else if (_o(34, e, s, gg)) {
        oSf.wxVkey = 4;var oGg = _v();
       var oHg = _o(35, e, s, gg);
       var oJg = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oHg, e_, d_);
       if (oJg) {
         var oIg = _1(20,e,s,gg);
         oJg(oIg,oIg,oGg, gg);
       } else _w(oHg, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oSf,oGg);
      }else if (_o(36, e, s, gg)) {
        oSf.wxVkey = 5;var oMg = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oNg = _v();var oOg = function(oSg,oRg,oQg,gg){var oUg = _v();
       var oVg = _o(26, oSg, oRg, gg);
       var oXg = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oVg, e_, d_);
       if (oXg) {
         var oWg = _1(20,oSg,oRg,gg);
         oXg(oWg,oWg,oUg, gg);
       } else _w(oVg, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oQg,oUg);return oQg;};_2(24, oOg, e, s, gg, oNg, "item", "index", '');_(oMg,oNg);_(oSf,oMg);
      }else if (_o(40, e, s, gg)) {
        oSf.wxVkey = 6;var oag = _m( "view", ["class", 0,"style", 1], e, s, gg);var obg = _v();var ocg = function(ogg,ofg,oeg,gg){var oig = _v();
       var ojg = _o(26, ogg, ofg, gg);
       var olg = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ojg, e_, d_);
       if (olg) {
         var okg = _1(20,ogg,ofg,gg);
         olg(okg,okg,oig, gg);
       } else _w(ojg, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oeg,oig);return oeg;};_2(24, ocg, e, s, gg, obg, "item", "index", '');_(oag,obg);_(oSf,oag);
      }else if (_o(41, e, s, gg)) {
        oSf.wxVkey = 7;var oog = _m( "view", ["class", 0,"style", 1], e, s, gg);var opg = _v();var oqg = function(oug,otg,osg,gg){var owg = _v();
       var oxg = _o(26, oug, otg, gg);
       var ozg = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oxg, e_, d_);
       if (ozg) {
         var oyg = _1(20,oug,otg,gg);
         ozg(oyg,oyg,owg, gg);
       } else _w(oxg, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(osg,owg);return osg;};_2(24, oqg, e, s, gg, opg, "item", "index", '');_(oog,opg);_(oSf,oog);
      }else {
        oSf.wxVkey = 8;var o_g = _m( "view", ["style", 1,"class", 41], e, s, gg);var oBh = _v();var oCh = function(oGh,oFh,oEh,gg){var oIh = _v();
       var oJh = _o(26, oGh, oFh, gg);
       var oLh = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oJh, e_, d_);
       if (oLh) {
         var oKh = _1(20,oGh,oFh,gg);
         oLh(oKh,oKh,oIh, gg);
       } else _w(oJh, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oEh,oIh);return oEh;};_2(24, oCh, e, s, gg, oBh, "item", "index", '');_(o_g,oBh);_(oSf, o_g);
      }_(oPf,oSf);
      }else if (_o(12, e, s, gg)) {
        oPf.wxVkey = 2;var oOh = _v();
       var oPh = _o(43, e, s, gg);
       var oRh = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oPh, e_, d_);
       if (oRh) {
         var oQh = _1(20,e,s,gg);
         oRh(oQh,oQh,oOh, gg);
       } else _w(oPh, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oPf,oOh);
      } _(r,oPf);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse1"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse1'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oTh = _v();
      if (_o(15, e, s, gg)) {
        oTh.wxVkey = 1;var oWh = _v();
      if (_o(21, e, s, gg)) {
        oWh.wxVkey = 1;var oZh = _m( "button", ["size", 22,"type", 1], e, s, gg);var oah = _v();var obh = function(ofh,oeh,odh,gg){var ohh = _v();
       var oih = _o(44, ofh, oeh, gg);
       var okh = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oih, e_, d_);
       if (okh) {
         var ojh = _1(20,ofh,oeh,gg);
         okh(ojh,ojh,ohh, gg);
       } else _w(oih, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(odh,ohh);return odh;};_2(24, obh, e, s, gg, oah, "item", "index", '');_(oZh,oah);_(oWh,oZh);
      }else if (_o(27, e, s, gg)) {
        oWh.wxVkey = 2;var onh = _m( "view", ["style", 1,"class", 27], e, s, gg);var ooh = _n("view");_r(ooh, 'class', 29, e, s, gg);var oph = _n("view");_r(oph, 'class', 30, e, s, gg);var oqh = _n("view");_r(oqh, 'class', 31, e, s, gg);_(oph,oqh);_(ooh,oph);var orh = _n("view");_r(orh, 'class', 30, e, s, gg);var osh = _v();var oth = function(oxh,owh,ovh,gg){var ozh = _v();
       var o_h = _o(44, oxh, owh, gg);
       var oBi = _gd('./yb_shop/utils/wxParse/wxParse.wxml', o_h, e_, d_);
       if (oBi) {
         var oAi = _1(20,oxh,owh,gg);
         oBi(oAi,oAi,ozh, gg);
       } else _w(o_h, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ovh,ozh);return ovh;};_2(24, oth, e, s, gg, osh, "item", "index", '');_(orh,osh);_(ooh,orh);_(onh,ooh);_(oWh,onh);
      }else if (_o(32, e, s, gg)) {
        oWh.wxVkey = 3;var oEi = _v();
       var oFi = _o(33, e, s, gg);
       var oHi = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oFi, e_, d_);
       if (oHi) {
         var oGi = _1(20,e,s,gg);
         oHi(oGi,oGi,oEi, gg);
       } else _w(oFi, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oWh,oEi);
      }else if (_o(34, e, s, gg)) {
        oWh.wxVkey = 4;var oKi = _v();
       var oLi = _o(35, e, s, gg);
       var oNi = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oLi, e_, d_);
       if (oNi) {
         var oMi = _1(20,e,s,gg);
         oNi(oMi,oMi,oKi, gg);
       } else _w(oLi, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oWh,oKi);
      }else if (_o(36, e, s, gg)) {
        oWh.wxVkey = 5;var oQi = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oRi = _v();var oSi = function(oWi,oVi,oUi,gg){var oYi = _v();
       var oZi = _o(44, oWi, oVi, gg);
       var obi = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oZi, e_, d_);
       if (obi) {
         var oai = _1(20,oWi,oVi,gg);
         obi(oai,oai,oYi, gg);
       } else _w(oZi, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oUi,oYi);return oUi;};_2(24, oSi, e, s, gg, oRi, "item", "index", '');_(oQi,oRi);_(oWh,oQi);
      }else if (_o(41, e, s, gg)) {
        oWh.wxVkey = 6;var oei = _m( "view", ["class", 0,"style", 1], e, s, gg);var ofi = _v();var ogi = function(oki,oji,oii,gg){var omi = _v();
       var oni = _o(44, oki, oji, gg);
       var opi = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oni, e_, d_);
       if (opi) {
         var ooi = _1(20,oki,oji,gg);
         opi(ooi,ooi,omi, gg);
       } else _w(oni, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oii,omi);return oii;};_2(24, ogi, e, s, gg, ofi, "item", "index", '');_(oei,ofi);_(oWh,oei);
      }else {
        oWh.wxVkey = 7;var oqi = _m( "view", ["style", 1,"class", 41], e, s, gg);var osi = _v();var oti = function(oxi,owi,ovi,gg){var ozi = _v();
       var o_i = _o(44, oxi, owi, gg);
       var oBj = _gd('./yb_shop/utils/wxParse/wxParse.wxml', o_i, e_, d_);
       if (oBj) {
         var oAj = _1(20,oxi,owi,gg);
         oBj(oAj,oAj,ozi, gg);
       } else _w(o_i, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ovi,ozi);return ovi;};_2(24, oti, e, s, gg, osi, "item", "index", '');_(oqi,osi);_(oWh, oqi);
      }_(oTh,oWh);
      }else if (_o(12, e, s, gg)) {
        oTh.wxVkey = 2;var oEj = _v();
       var oFj = _o(43, e, s, gg);
       var oHj = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oFj, e_, d_);
       if (oHj) {
         var oGj = _1(20,e,s,gg);
         oHj(oGj,oGj,oEj, gg);
       } else _w(oFj, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oTh,oEj);
      } _(r,oTh);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse2"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse2'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oJj = _v();
      if (_o(15, e, s, gg)) {
        oJj.wxVkey = 1;var oMj = _v();
      if (_o(21, e, s, gg)) {
        oMj.wxVkey = 1;var oPj = _m( "button", ["size", 22,"type", 1], e, s, gg);var oQj = _v();var oRj = function(oVj,oUj,oTj,gg){var oXj = _v();
       var oYj = _o(45, oVj, oUj, gg);
       var oaj = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oYj, e_, d_);
       if (oaj) {
         var oZj = _1(20,oVj,oUj,gg);
         oaj(oZj,oZj,oXj, gg);
       } else _w(oYj, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oTj,oXj);return oTj;};_2(24, oRj, e, s, gg, oQj, "item", "index", '');_(oPj,oQj);_(oMj,oPj);
      }else if (_o(27, e, s, gg)) {
        oMj.wxVkey = 2;var odj = _m( "view", ["style", 1,"class", 27], e, s, gg);var oej = _n("view");_r(oej, 'class', 29, e, s, gg);var ofj = _n("view");_r(ofj, 'class', 30, e, s, gg);var ogj = _n("view");_r(ogj, 'class', 31, e, s, gg);_(ofj,ogj);_(oej,ofj);var ohj = _n("view");_r(ohj, 'class', 30, e, s, gg);var oij = _v();var ojj = function(onj,omj,olj,gg){var opj = _v();
       var oqj = _o(45, onj, omj, gg);
       var osj = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oqj, e_, d_);
       if (osj) {
         var orj = _1(20,onj,omj,gg);
         osj(orj,orj,opj, gg);
       } else _w(oqj, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(olj,opj);return olj;};_2(24, ojj, e, s, gg, oij, "item", "index", '');_(ohj,oij);_(oej,ohj);_(odj,oej);_(oMj,odj);
      }else if (_o(32, e, s, gg)) {
        oMj.wxVkey = 3;var ovj = _v();
       var owj = _o(33, e, s, gg);
       var oyj = _gd('./yb_shop/utils/wxParse/wxParse.wxml', owj, e_, d_);
       if (oyj) {
         var oxj = _1(20,e,s,gg);
         oyj(oxj,oxj,ovj, gg);
       } else _w(owj, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oMj,ovj);
      }else if (_o(34, e, s, gg)) {
        oMj.wxVkey = 4;var oAk = _v();
       var oBk = _o(35, e, s, gg);
       var oDk = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oBk, e_, d_);
       if (oDk) {
         var oCk = _1(20,e,s,gg);
         oDk(oCk,oCk,oAk, gg);
       } else _w(oBk, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oMj,oAk);
      }else if (_o(36, e, s, gg)) {
        oMj.wxVkey = 5;var oGk = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oHk = _v();var oIk = function(oMk,oLk,oKk,gg){var oOk = _v();
       var oPk = _o(45, oMk, oLk, gg);
       var oRk = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oPk, e_, d_);
       if (oRk) {
         var oQk = _1(20,oMk,oLk,gg);
         oRk(oQk,oQk,oOk, gg);
       } else _w(oPk, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oKk,oOk);return oKk;};_2(24, oIk, e, s, gg, oHk, "item", "index", '');_(oGk,oHk);_(oMj,oGk);
      }else if (_o(41, e, s, gg)) {
        oMj.wxVkey = 6;var oUk = _m( "view", ["class", 0,"style", 1], e, s, gg);var oVk = _v();var oWk = function(oak,oZk,oYk,gg){var ock = _v();
       var odk = _o(45, oak, oZk, gg);
       var ofk = _gd('./yb_shop/utils/wxParse/wxParse.wxml', odk, e_, d_);
       if (ofk) {
         var oek = _1(20,oak,oZk,gg);
         ofk(oek,oek,ock, gg);
       } else _w(odk, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oYk,ock);return oYk;};_2(24, oWk, e, s, gg, oVk, "item", "index", '');_(oUk,oVk);_(oMj,oUk);
      }else {
        oMj.wxVkey = 7;var ogk = _m( "view", ["style", 1,"class", 41], e, s, gg);var oik = _v();var ojk = function(onk,omk,olk,gg){var opk = _v();
       var oqk = _o(45, onk, omk, gg);
       var osk = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oqk, e_, d_);
       if (osk) {
         var ork = _1(20,onk,omk,gg);
         osk(ork,ork,opk, gg);
       } else _w(oqk, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(olk,opk);return olk;};_2(24, ojk, e, s, gg, oik, "item", "index", '');_(ogk,oik);_(oMj, ogk);
      }_(oJj,oMj);
      }else if (_o(12, e, s, gg)) {
        oJj.wxVkey = 2;var ovk = _v();
       var owk = _o(43, e, s, gg);
       var oyk = _gd('./yb_shop/utils/wxParse/wxParse.wxml', owk, e_, d_);
       if (oyk) {
         var oxk = _1(20,e,s,gg);
         oyk(oxk,oxk,ovk, gg);
       } else _w(owk, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oJj,ovk);
      } _(r,oJj);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse3"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse3'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var o_k = _v();
      if (_o(15, e, s, gg)) {
        o_k.wxVkey = 1;var oCl = _v();
      if (_o(21, e, s, gg)) {
        oCl.wxVkey = 1;var oFl = _m( "button", ["size", 22,"type", 1], e, s, gg);var oGl = _v();var oHl = function(oLl,oKl,oJl,gg){var oNl = _v();
       var oOl = _o(46, oLl, oKl, gg);
       var oQl = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oOl, e_, d_);
       if (oQl) {
         var oPl = _1(20,oLl,oKl,gg);
         oQl(oPl,oPl,oNl, gg);
       } else _w(oOl, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oJl,oNl);return oJl;};_2(24, oHl, e, s, gg, oGl, "item", "index", '');_(oFl,oGl);_(oCl,oFl);
      }else if (_o(27, e, s, gg)) {
        oCl.wxVkey = 2;var oTl = _m( "view", ["style", 1,"class", 27], e, s, gg);var oUl = _n("view");_r(oUl, 'class', 29, e, s, gg);var oVl = _n("view");_r(oVl, 'class', 30, e, s, gg);var oWl = _n("view");_r(oWl, 'class', 31, e, s, gg);_(oVl,oWl);_(oUl,oVl);var oXl = _n("view");_r(oXl, 'class', 30, e, s, gg);var oYl = _v();var oZl = function(odl,ocl,obl,gg){var ofl = _v();
       var ogl = _o(46, odl, ocl, gg);
       var oil = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ogl, e_, d_);
       if (oil) {
         var ohl = _1(20,odl,ocl,gg);
         oil(ohl,ohl,ofl, gg);
       } else _w(ogl, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(obl,ofl);return obl;};_2(24, oZl, e, s, gg, oYl, "item", "index", '');_(oXl,oYl);_(oUl,oXl);_(oTl,oUl);_(oCl,oTl);
      }else if (_o(32, e, s, gg)) {
        oCl.wxVkey = 3;var oll = _v();
       var oml = _o(33, e, s, gg);
       var ool = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oml, e_, d_);
       if (ool) {
         var onl = _1(20,e,s,gg);
         ool(onl,onl,oll, gg);
       } else _w(oml, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oCl,oll);
      }else if (_o(34, e, s, gg)) {
        oCl.wxVkey = 4;var orl = _v();
       var osl = _o(35, e, s, gg);
       var oul = _gd('./yb_shop/utils/wxParse/wxParse.wxml', osl, e_, d_);
       if (oul) {
         var otl = _1(20,e,s,gg);
         oul(otl,otl,orl, gg);
       } else _w(osl, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oCl,orl);
      }else if (_o(36, e, s, gg)) {
        oCl.wxVkey = 5;var oxl = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oyl = _v();var ozl = function(oCm,oBm,oAm,gg){var oEm = _v();
       var oFm = _o(46, oCm, oBm, gg);
       var oHm = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oFm, e_, d_);
       if (oHm) {
         var oGm = _1(20,oCm,oBm,gg);
         oHm(oGm,oGm,oEm, gg);
       } else _w(oFm, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oAm,oEm);return oAm;};_2(24, ozl, e, s, gg, oyl, "item", "index", '');_(oxl,oyl);_(oCl,oxl);
      }else if (_o(41, e, s, gg)) {
        oCl.wxVkey = 6;var oKm = _m( "view", ["class", 0,"style", 1], e, s, gg);var oLm = _v();var oMm = function(oQm,oPm,oOm,gg){var oSm = _v();
       var oTm = _o(46, oQm, oPm, gg);
       var oVm = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oTm, e_, d_);
       if (oVm) {
         var oUm = _1(20,oQm,oPm,gg);
         oVm(oUm,oUm,oSm, gg);
       } else _w(oTm, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oOm,oSm);return oOm;};_2(24, oMm, e, s, gg, oLm, "item", "index", '');_(oKm,oLm);_(oCl,oKm);
      }else {
        oCl.wxVkey = 7;var oWm = _m( "view", ["style", 1,"class", 41], e, s, gg);var oYm = _v();var oZm = function(odm,ocm,obm,gg){var ofm = _v();
       var ogm = _o(46, odm, ocm, gg);
       var oim = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ogm, e_, d_);
       if (oim) {
         var ohm = _1(20,odm,ocm,gg);
         oim(ohm,ohm,ofm, gg);
       } else _w(ogm, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(obm,ofm);return obm;};_2(24, oZm, e, s, gg, oYm, "item", "index", '');_(oWm,oYm);_(oCl, oWm);
      }_(o_k,oCl);
      }else if (_o(12, e, s, gg)) {
        o_k.wxVkey = 2;var olm = _v();
       var omm = _o(43, e, s, gg);
       var oom = _gd('./yb_shop/utils/wxParse/wxParse.wxml', omm, e_, d_);
       if (oom) {
         var onm = _1(20,e,s,gg);
         oom(onm,onm,olm, gg);
       } else _w(omm, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(o_k,olm);
      } _(r,o_k);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse4"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse4'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oqm = _v();
      if (_o(15, e, s, gg)) {
        oqm.wxVkey = 1;var otm = _v();
      if (_o(21, e, s, gg)) {
        otm.wxVkey = 1;var owm = _m( "button", ["size", 22,"type", 1], e, s, gg);var oxm = _v();var oym = function(oBn,oAn,o_m,gg){var oDn = _v();
       var oEn = _o(47, oBn, oAn, gg);
       var oGn = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oEn, e_, d_);
       if (oGn) {
         var oFn = _1(20,oBn,oAn,gg);
         oGn(oFn,oFn,oDn, gg);
       } else _w(oEn, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(o_m,oDn);return o_m;};_2(24, oym, e, s, gg, oxm, "item", "index", '');_(owm,oxm);_(otm,owm);
      }else if (_o(27, e, s, gg)) {
        otm.wxVkey = 2;var oJn = _m( "view", ["style", 1,"class", 27], e, s, gg);var oKn = _n("view");_r(oKn, 'class', 29, e, s, gg);var oLn = _n("view");_r(oLn, 'class', 30, e, s, gg);var oMn = _n("view");_r(oMn, 'class', 31, e, s, gg);_(oLn,oMn);_(oKn,oLn);var oNn = _n("view");_r(oNn, 'class', 30, e, s, gg);var oOn = _v();var oPn = function(oTn,oSn,oRn,gg){var oVn = _v();
       var oWn = _o(47, oTn, oSn, gg);
       var oYn = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oWn, e_, d_);
       if (oYn) {
         var oXn = _1(20,oTn,oSn,gg);
         oYn(oXn,oXn,oVn, gg);
       } else _w(oWn, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oRn,oVn);return oRn;};_2(24, oPn, e, s, gg, oOn, "item", "index", '');_(oNn,oOn);_(oKn,oNn);_(oJn,oKn);_(otm,oJn);
      }else if (_o(32, e, s, gg)) {
        otm.wxVkey = 3;var obn = _v();
       var ocn = _o(33, e, s, gg);
       var oen = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ocn, e_, d_);
       if (oen) {
         var odn = _1(20,e,s,gg);
         oen(odn,odn,obn, gg);
       } else _w(ocn, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(otm,obn);
      }else if (_o(34, e, s, gg)) {
        otm.wxVkey = 4;var ohn = _v();
       var oin = _o(35, e, s, gg);
       var okn = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oin, e_, d_);
       if (okn) {
         var ojn = _1(20,e,s,gg);
         okn(ojn,ojn,ohn, gg);
       } else _w(oin, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(otm,ohn);
      }else if (_o(36, e, s, gg)) {
        otm.wxVkey = 5;var onn = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oon = _v();var opn = function(otn,osn,orn,gg){var ovn = _v();
       var own = _o(47, otn, osn, gg);
       var oyn = _gd('./yb_shop/utils/wxParse/wxParse.wxml', own, e_, d_);
       if (oyn) {
         var oxn = _1(20,otn,osn,gg);
         oyn(oxn,oxn,ovn, gg);
       } else _w(own, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(orn,ovn);return orn;};_2(24, opn, e, s, gg, oon, "item", "index", '');_(onn,oon);_(otm,onn);
      }else if (_o(41, e, s, gg)) {
        otm.wxVkey = 6;var oAo = _m( "view", ["class", 0,"style", 1], e, s, gg);var oBo = _v();var oCo = function(oGo,oFo,oEo,gg){var oIo = _v();
       var oJo = _o(47, oGo, oFo, gg);
       var oLo = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oJo, e_, d_);
       if (oLo) {
         var oKo = _1(20,oGo,oFo,gg);
         oLo(oKo,oKo,oIo, gg);
       } else _w(oJo, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oEo,oIo);return oEo;};_2(24, oCo, e, s, gg, oBo, "item", "index", '');_(oAo,oBo);_(otm,oAo);
      }else {
        otm.wxVkey = 7;var oMo = _m( "view", ["style", 1,"class", 41], e, s, gg);var oOo = _v();var oPo = function(oTo,oSo,oRo,gg){var oVo = _v();
       var oWo = _o(47, oTo, oSo, gg);
       var oYo = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oWo, e_, d_);
       if (oYo) {
         var oXo = _1(20,oTo,oSo,gg);
         oYo(oXo,oXo,oVo, gg);
       } else _w(oWo, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oRo,oVo);return oRo;};_2(24, oPo, e, s, gg, oOo, "item", "index", '');_(oMo,oOo);_(otm, oMo);
      }_(oqm,otm);
      }else if (_o(12, e, s, gg)) {
        oqm.wxVkey = 2;var obo = _v();
       var oco = _o(43, e, s, gg);
       var oeo = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oco, e_, d_);
       if (oeo) {
         var odo = _1(20,e,s,gg);
         oeo(odo,odo,obo, gg);
       } else _w(oco, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oqm,obo);
      } _(r,oqm);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse5"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse5'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var ogo = _v();
      if (_o(15, e, s, gg)) {
        ogo.wxVkey = 1;var ojo = _v();
      if (_o(21, e, s, gg)) {
        ojo.wxVkey = 1;var omo = _m( "button", ["size", 22,"type", 1], e, s, gg);var ono = _v();var ooo = function(oso,oro,oqo,gg){var ouo = _v();
       var ovo = _o(48, oso, oro, gg);
       var oxo = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ovo, e_, d_);
       if (oxo) {
         var owo = _1(20,oso,oro,gg);
         oxo(owo,owo,ouo, gg);
       } else _w(ovo, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oqo,ouo);return oqo;};_2(24, ooo, e, s, gg, ono, "item", "index", '');_(omo,ono);_(ojo,omo);
      }else if (_o(27, e, s, gg)) {
        ojo.wxVkey = 2;var o_o = _m( "view", ["style", 1,"class", 27], e, s, gg);var oAp = _n("view");_r(oAp, 'class', 29, e, s, gg);var oBp = _n("view");_r(oBp, 'class', 30, e, s, gg);var oCp = _n("view");_r(oCp, 'class', 31, e, s, gg);_(oBp,oCp);_(oAp,oBp);var oDp = _n("view");_r(oDp, 'class', 30, e, s, gg);var oEp = _v();var oFp = function(oJp,oIp,oHp,gg){var oLp = _v();
       var oMp = _o(48, oJp, oIp, gg);
       var oOp = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oMp, e_, d_);
       if (oOp) {
         var oNp = _1(20,oJp,oIp,gg);
         oOp(oNp,oNp,oLp, gg);
       } else _w(oMp, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oHp,oLp);return oHp;};_2(24, oFp, e, s, gg, oEp, "item", "index", '');_(oDp,oEp);_(oAp,oDp);_(o_o,oAp);_(ojo,o_o);
      }else if (_o(32, e, s, gg)) {
        ojo.wxVkey = 3;var oRp = _v();
       var oSp = _o(33, e, s, gg);
       var oUp = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oSp, e_, d_);
       if (oUp) {
         var oTp = _1(20,e,s,gg);
         oUp(oTp,oTp,oRp, gg);
       } else _w(oSp, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ojo,oRp);
      }else if (_o(34, e, s, gg)) {
        ojo.wxVkey = 4;var oXp = _v();
       var oYp = _o(35, e, s, gg);
       var oap = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oYp, e_, d_);
       if (oap) {
         var oZp = _1(20,e,s,gg);
         oap(oZp,oZp,oXp, gg);
       } else _w(oYp, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ojo,oXp);
      }else if (_o(36, e, s, gg)) {
        ojo.wxVkey = 5;var odp = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oep = _v();var ofp = function(ojp,oip,ohp,gg){var olp = _v();
       var omp = _o(48, ojp, oip, gg);
       var oop = _gd('./yb_shop/utils/wxParse/wxParse.wxml', omp, e_, d_);
       if (oop) {
         var onp = _1(20,ojp,oip,gg);
         oop(onp,onp,olp, gg);
       } else _w(omp, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ohp,olp);return ohp;};_2(24, ofp, e, s, gg, oep, "item", "index", '');_(odp,oep);_(ojo,odp);
      }else if (_o(41, e, s, gg)) {
        ojo.wxVkey = 6;var orp = _m( "view", ["class", 0,"style", 1], e, s, gg);var osp = _v();var otp = function(oxp,owp,ovp,gg){var ozp = _v();
       var o_p = _o(48, oxp, owp, gg);
       var oBq = _gd('./yb_shop/utils/wxParse/wxParse.wxml', o_p, e_, d_);
       if (oBq) {
         var oAq = _1(20,oxp,owp,gg);
         oBq(oAq,oAq,ozp, gg);
       } else _w(o_p, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ovp,ozp);return ovp;};_2(24, otp, e, s, gg, osp, "item", "index", '');_(orp,osp);_(ojo,orp);
      }else {
        ojo.wxVkey = 7;var oCq = _m( "view", ["style", 1,"class", 41], e, s, gg);var oEq = _v();var oFq = function(oJq,oIq,oHq,gg){var oLq = _v();
       var oMq = _o(48, oJq, oIq, gg);
       var oOq = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oMq, e_, d_);
       if (oOq) {
         var oNq = _1(20,oJq,oIq,gg);
         oOq(oNq,oNq,oLq, gg);
       } else _w(oMq, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oHq,oLq);return oHq;};_2(24, oFq, e, s, gg, oEq, "item", "index", '');_(oCq,oEq);_(ojo, oCq);
      }_(ogo,ojo);
      }else if (_o(12, e, s, gg)) {
        ogo.wxVkey = 2;var oRq = _v();
       var oSq = _o(43, e, s, gg);
       var oUq = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oSq, e_, d_);
       if (oUq) {
         var oTq = _1(20,e,s,gg);
         oUq(oTq,oTq,oRq, gg);
       } else _w(oSq, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ogo,oRq);
      } _(r,ogo);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse6"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse6'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oWq = _v();
      if (_o(15, e, s, gg)) {
        oWq.wxVkey = 1;var oZq = _v();
      if (_o(21, e, s, gg)) {
        oZq.wxVkey = 1;var ocq = _m( "button", ["size", 22,"type", 1], e, s, gg);var odq = _v();var oeq = function(oiq,ohq,ogq,gg){var okq = _v();
       var olq = _o(49, oiq, ohq, gg);
       var onq = _gd('./yb_shop/utils/wxParse/wxParse.wxml', olq, e_, d_);
       if (onq) {
         var omq = _1(20,oiq,ohq,gg);
         onq(omq,omq,okq, gg);
       } else _w(olq, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ogq,okq);return ogq;};_2(24, oeq, e, s, gg, odq, "item", "index", '');_(ocq,odq);_(oZq,ocq);
      }else if (_o(27, e, s, gg)) {
        oZq.wxVkey = 2;var oqq = _m( "view", ["style", 1,"class", 27], e, s, gg);var orq = _n("view");_r(orq, 'class', 29, e, s, gg);var osq = _n("view");_r(osq, 'class', 30, e, s, gg);var otq = _n("view");_r(otq, 'class', 31, e, s, gg);_(osq,otq);_(orq,osq);var ouq = _n("view");_r(ouq, 'class', 30, e, s, gg);var ovq = _v();var owq = function(o_q,ozq,oyq,gg){var oBr = _v();
       var oCr = _o(49, o_q, ozq, gg);
       var oEr = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oCr, e_, d_);
       if (oEr) {
         var oDr = _1(20,o_q,ozq,gg);
         oEr(oDr,oDr,oBr, gg);
       } else _w(oCr, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oyq,oBr);return oyq;};_2(24, owq, e, s, gg, ovq, "item", "index", '');_(ouq,ovq);_(orq,ouq);_(oqq,orq);_(oZq,oqq);
      }else if (_o(32, e, s, gg)) {
        oZq.wxVkey = 3;var oHr = _v();
       var oIr = _o(33, e, s, gg);
       var oKr = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oIr, e_, d_);
       if (oKr) {
         var oJr = _1(20,e,s,gg);
         oKr(oJr,oJr,oHr, gg);
       } else _w(oIr, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oZq,oHr);
      }else if (_o(34, e, s, gg)) {
        oZq.wxVkey = 4;var oNr = _v();
       var oOr = _o(35, e, s, gg);
       var oQr = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oOr, e_, d_);
       if (oQr) {
         var oPr = _1(20,e,s,gg);
         oQr(oPr,oPr,oNr, gg);
       } else _w(oOr, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oZq,oNr);
      }else if (_o(36, e, s, gg)) {
        oZq.wxVkey = 5;var oTr = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oUr = _v();var oVr = function(oZr,oYr,oXr,gg){var obr = _v();
       var ocr = _o(49, oZr, oYr, gg);
       var oer = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ocr, e_, d_);
       if (oer) {
         var odr = _1(20,oZr,oYr,gg);
         oer(odr,odr,obr, gg);
       } else _w(ocr, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oXr,obr);return oXr;};_2(24, oVr, e, s, gg, oUr, "item", "index", '');_(oTr,oUr);_(oZq,oTr);
      }else if (_o(41, e, s, gg)) {
        oZq.wxVkey = 6;var ohr = _m( "view", ["class", 0,"style", 1], e, s, gg);var oir = _v();var ojr = function(onr,omr,olr,gg){var opr = _v();
       var oqr = _o(49, onr, omr, gg);
       var osr = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oqr, e_, d_);
       if (osr) {
         var orr = _1(20,onr,omr,gg);
         osr(orr,orr,opr, gg);
       } else _w(oqr, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(olr,opr);return olr;};_2(24, ojr, e, s, gg, oir, "item", "index", '');_(ohr,oir);_(oZq,ohr);
      }else {
        oZq.wxVkey = 7;var otr = _m( "view", ["style", 1,"class", 41], e, s, gg);var ovr = _v();var owr = function(o_r,ozr,oyr,gg){var oBs = _v();
       var oCs = _o(49, o_r, ozr, gg);
       var oEs = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oCs, e_, d_);
       if (oEs) {
         var oDs = _1(20,o_r,ozr,gg);
         oEs(oDs,oDs,oBs, gg);
       } else _w(oCs, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oyr,oBs);return oyr;};_2(24, owr, e, s, gg, ovr, "item", "index", '');_(otr,ovr);_(oZq, otr);
      }_(oWq,oZq);
      }else if (_o(12, e, s, gg)) {
        oWq.wxVkey = 2;var oHs = _v();
       var oIs = _o(43, e, s, gg);
       var oKs = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oIs, e_, d_);
       if (oKs) {
         var oJs = _1(20,e,s,gg);
         oKs(oJs,oJs,oHs, gg);
       } else _w(oIs, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oWq,oHs);
      } _(r,oWq);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse7"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse7'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oMs = _v();
      if (_o(15, e, s, gg)) {
        oMs.wxVkey = 1;var oPs = _v();
      if (_o(21, e, s, gg)) {
        oPs.wxVkey = 1;var oSs = _m( "button", ["size", 22,"type", 1], e, s, gg);var oTs = _v();var oUs = function(oYs,oXs,oWs,gg){var oas = _v();
       var obs = _o(50, oYs, oXs, gg);
       var ods = _gd('./yb_shop/utils/wxParse/wxParse.wxml', obs, e_, d_);
       if (ods) {
         var ocs = _1(20,oYs,oXs,gg);
         ods(ocs,ocs,oas, gg);
       } else _w(obs, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oWs,oas);return oWs;};_2(24, oUs, e, s, gg, oTs, "item", "index", '');_(oSs,oTs);_(oPs,oSs);
      }else if (_o(27, e, s, gg)) {
        oPs.wxVkey = 2;var ogs = _m( "view", ["style", 1,"class", 27], e, s, gg);var ohs = _n("view");_r(ohs, 'class', 29, e, s, gg);var ois = _n("view");_r(ois, 'class', 30, e, s, gg);var ojs = _n("view");_r(ojs, 'class', 31, e, s, gg);_(ois,ojs);_(ohs,ois);var oks = _n("view");_r(oks, 'class', 30, e, s, gg);var ols = _v();var oms = function(oqs,ops,oos,gg){var oss = _v();
       var ots = _o(50, oqs, ops, gg);
       var ovs = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ots, e_, d_);
       if (ovs) {
         var ous = _1(20,oqs,ops,gg);
         ovs(ous,ous,oss, gg);
       } else _w(ots, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oos,oss);return oos;};_2(24, oms, e, s, gg, ols, "item", "index", '');_(oks,ols);_(ohs,oks);_(ogs,ohs);_(oPs,ogs);
      }else if (_o(32, e, s, gg)) {
        oPs.wxVkey = 3;var oys = _v();
       var ozs = _o(33, e, s, gg);
       var oAt = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ozs, e_, d_);
       if (oAt) {
         var o_s = _1(20,e,s,gg);
         oAt(o_s,o_s,oys, gg);
       } else _w(ozs, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oPs,oys);
      }else if (_o(34, e, s, gg)) {
        oPs.wxVkey = 4;var oDt = _v();
       var oEt = _o(35, e, s, gg);
       var oGt = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oEt, e_, d_);
       if (oGt) {
         var oFt = _1(20,e,s,gg);
         oGt(oFt,oFt,oDt, gg);
       } else _w(oEt, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oPs,oDt);
      }else if (_o(36, e, s, gg)) {
        oPs.wxVkey = 5;var oJt = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oKt = _v();var oLt = function(oPt,oOt,oNt,gg){var oRt = _v();
       var oSt = _o(50, oPt, oOt, gg);
       var oUt = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oSt, e_, d_);
       if (oUt) {
         var oTt = _1(20,oPt,oOt,gg);
         oUt(oTt,oTt,oRt, gg);
       } else _w(oSt, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oNt,oRt);return oNt;};_2(24, oLt, e, s, gg, oKt, "item", "index", '');_(oJt,oKt);_(oPs,oJt);
      }else if (_o(41, e, s, gg)) {
        oPs.wxVkey = 6;var oXt = _m( "view", ["class", 0,"style", 1], e, s, gg);var oYt = _v();var oZt = function(odt,oct,obt,gg){var oft = _v();
       var ogt = _o(50, odt, oct, gg);
       var oit = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ogt, e_, d_);
       if (oit) {
         var oht = _1(20,odt,oct,gg);
         oit(oht,oht,oft, gg);
       } else _w(ogt, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(obt,oft);return obt;};_2(24, oZt, e, s, gg, oYt, "item", "index", '');_(oXt,oYt);_(oPs,oXt);
      }else {
        oPs.wxVkey = 7;var ojt = _m( "view", ["style", 1,"class", 41], e, s, gg);var olt = _v();var omt = function(oqt,opt,oot,gg){var ost = _v();
       var ott = _o(50, oqt, opt, gg);
       var ovt = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ott, e_, d_);
       if (ovt) {
         var out = _1(20,oqt,opt,gg);
         ovt(out,out,ost, gg);
       } else _w(ott, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oot,ost);return oot;};_2(24, omt, e, s, gg, olt, "item", "index", '');_(ojt,olt);_(oPs, ojt);
      }_(oMs,oPs);
      }else if (_o(12, e, s, gg)) {
        oMs.wxVkey = 2;var oyt = _v();
       var ozt = _o(43, e, s, gg);
       var oAu = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ozt, e_, d_);
       if (oAu) {
         var o_t = _1(20,e,s,gg);
         oAu(o_t,o_t,oyt, gg);
       } else _w(ozt, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oMs,oyt);
      } _(r,oMs);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse8"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse8'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oCu = _v();
      if (_o(15, e, s, gg)) {
        oCu.wxVkey = 1;var oFu = _v();
      if (_o(21, e, s, gg)) {
        oFu.wxVkey = 1;var oIu = _m( "button", ["size", 22,"type", 1], e, s, gg);var oJu = _v();var oKu = function(oOu,oNu,oMu,gg){var oQu = _v();
       var oRu = _o(51, oOu, oNu, gg);
       var oTu = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oRu, e_, d_);
       if (oTu) {
         var oSu = _1(20,oOu,oNu,gg);
         oTu(oSu,oSu,oQu, gg);
       } else _w(oRu, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oMu,oQu);return oMu;};_2(24, oKu, e, s, gg, oJu, "item", "index", '');_(oIu,oJu);_(oFu,oIu);
      }else if (_o(27, e, s, gg)) {
        oFu.wxVkey = 2;var oWu = _m( "view", ["style", 1,"class", 27], e, s, gg);var oXu = _n("view");_r(oXu, 'class', 29, e, s, gg);var oYu = _n("view");_r(oYu, 'class', 30, e, s, gg);var oZu = _n("view");_r(oZu, 'class', 31, e, s, gg);_(oYu,oZu);_(oXu,oYu);var oau = _n("view");_r(oau, 'class', 30, e, s, gg);var obu = _v();var ocu = function(ogu,ofu,oeu,gg){var oiu = _v();
       var oju = _o(51, ogu, ofu, gg);
       var olu = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oju, e_, d_);
       if (olu) {
         var oku = _1(20,ogu,ofu,gg);
         olu(oku,oku,oiu, gg);
       } else _w(oju, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oeu,oiu);return oeu;};_2(24, ocu, e, s, gg, obu, "item", "index", '');_(oau,obu);_(oXu,oau);_(oWu,oXu);_(oFu,oWu);
      }else if (_o(32, e, s, gg)) {
        oFu.wxVkey = 3;var oou = _v();
       var opu = _o(33, e, s, gg);
       var oru = _gd('./yb_shop/utils/wxParse/wxParse.wxml', opu, e_, d_);
       if (oru) {
         var oqu = _1(20,e,s,gg);
         oru(oqu,oqu,oou, gg);
       } else _w(opu, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oFu,oou);
      }else if (_o(34, e, s, gg)) {
        oFu.wxVkey = 4;var ouu = _v();
       var ovu = _o(35, e, s, gg);
       var oxu = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ovu, e_, d_);
       if (oxu) {
         var owu = _1(20,e,s,gg);
         oxu(owu,owu,ouu, gg);
       } else _w(ovu, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oFu,ouu);
      }else if (_o(36, e, s, gg)) {
        oFu.wxVkey = 5;var o_u = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oAv = _v();var oBv = function(oFv,oEv,oDv,gg){var oHv = _v();
       var oIv = _o(51, oFv, oEv, gg);
       var oKv = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oIv, e_, d_);
       if (oKv) {
         var oJv = _1(20,oFv,oEv,gg);
         oKv(oJv,oJv,oHv, gg);
       } else _w(oIv, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oDv,oHv);return oDv;};_2(24, oBv, e, s, gg, oAv, "item", "index", '');_(o_u,oAv);_(oFu,o_u);
      }else if (_o(41, e, s, gg)) {
        oFu.wxVkey = 6;var oNv = _m( "view", ["class", 0,"style", 1], e, s, gg);var oOv = _v();var oPv = function(oTv,oSv,oRv,gg){var oVv = _v();
       var oWv = _o(51, oTv, oSv, gg);
       var oYv = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oWv, e_, d_);
       if (oYv) {
         var oXv = _1(20,oTv,oSv,gg);
         oYv(oXv,oXv,oVv, gg);
       } else _w(oWv, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oRv,oVv);return oRv;};_2(24, oPv, e, s, gg, oOv, "item", "index", '');_(oNv,oOv);_(oFu,oNv);
      }else {
        oFu.wxVkey = 7;var oZv = _m( "view", ["style", 1,"class", 41], e, s, gg);var obv = _v();var ocv = function(ogv,ofv,oev,gg){var oiv = _v();
       var ojv = _o(51, ogv, ofv, gg);
       var olv = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ojv, e_, d_);
       if (olv) {
         var okv = _1(20,ogv,ofv,gg);
         olv(okv,okv,oiv, gg);
       } else _w(ojv, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oev,oiv);return oev;};_2(24, ocv, e, s, gg, obv, "item", "index", '');_(oZv,obv);_(oFu, oZv);
      }_(oCu,oFu);
      }else if (_o(12, e, s, gg)) {
        oCu.wxVkey = 2;var oov = _v();
       var opv = _o(43, e, s, gg);
       var orv = _gd('./yb_shop/utils/wxParse/wxParse.wxml', opv, e_, d_);
       if (orv) {
         var oqv = _1(20,e,s,gg);
         orv(oqv,oqv,oov, gg);
       } else _w(opv, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oCu,oov);
      } _(r,oCu);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse9"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse9'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var otv = _v();
      if (_o(15, e, s, gg)) {
        otv.wxVkey = 1;var owv = _v();
      if (_o(21, e, s, gg)) {
        owv.wxVkey = 1;var ozv = _m( "button", ["size", 22,"type", 1], e, s, gg);var o_v = _v();var oAw = function(oEw,oDw,oCw,gg){var oGw = _v();
       var oHw = _o(52, oEw, oDw, gg);
       var oJw = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oHw, e_, d_);
       if (oJw) {
         var oIw = _1(20,oEw,oDw,gg);
         oJw(oIw,oIw,oGw, gg);
       } else _w(oHw, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oCw,oGw);return oCw;};_2(24, oAw, e, s, gg, o_v, "item", "index", '');_(ozv,o_v);_(owv,ozv);
      }else if (_o(27, e, s, gg)) {
        owv.wxVkey = 2;var oMw = _m( "view", ["style", 1,"class", 27], e, s, gg);var oNw = _n("view");_r(oNw, 'class', 29, e, s, gg);var oOw = _n("view");_r(oOw, 'class', 30, e, s, gg);var oPw = _n("view");_r(oPw, 'class', 31, e, s, gg);_(oOw,oPw);_(oNw,oOw);var oQw = _n("view");_r(oQw, 'class', 30, e, s, gg);var oRw = _v();var oSw = function(oWw,oVw,oUw,gg){var oYw = _v();
       var oZw = _o(52, oWw, oVw, gg);
       var obw = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oZw, e_, d_);
       if (obw) {
         var oaw = _1(20,oWw,oVw,gg);
         obw(oaw,oaw,oYw, gg);
       } else _w(oZw, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oUw,oYw);return oUw;};_2(24, oSw, e, s, gg, oRw, "item", "index", '');_(oQw,oRw);_(oNw,oQw);_(oMw,oNw);_(owv,oMw);
      }else if (_o(32, e, s, gg)) {
        owv.wxVkey = 3;var oew = _v();
       var ofw = _o(33, e, s, gg);
       var ohw = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ofw, e_, d_);
       if (ohw) {
         var ogw = _1(20,e,s,gg);
         ohw(ogw,ogw,oew, gg);
       } else _w(ofw, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(owv,oew);
      }else if (_o(34, e, s, gg)) {
        owv.wxVkey = 4;var okw = _v();
       var olw = _o(35, e, s, gg);
       var onw = _gd('./yb_shop/utils/wxParse/wxParse.wxml', olw, e_, d_);
       if (onw) {
         var omw = _1(20,e,s,gg);
         onw(omw,omw,okw, gg);
       } else _w(olw, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(owv,okw);
      }else if (_o(36, e, s, gg)) {
        owv.wxVkey = 5;var oqw = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var orw = _v();var osw = function(oww,ovw,ouw,gg){var oyw = _v();
       var ozw = _o(52, oww, ovw, gg);
       var oAx = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ozw, e_, d_);
       if (oAx) {
         var o_w = _1(20,oww,ovw,gg);
         oAx(o_w,o_w,oyw, gg);
       } else _w(ozw, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ouw,oyw);return ouw;};_2(24, osw, e, s, gg, orw, "item", "index", '');_(oqw,orw);_(owv,oqw);
      }else if (_o(41, e, s, gg)) {
        owv.wxVkey = 6;var oDx = _m( "view", ["class", 0,"style", 1], e, s, gg);var oEx = _v();var oFx = function(oJx,oIx,oHx,gg){var oLx = _v();
       var oMx = _o(52, oJx, oIx, gg);
       var oOx = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oMx, e_, d_);
       if (oOx) {
         var oNx = _1(20,oJx,oIx,gg);
         oOx(oNx,oNx,oLx, gg);
       } else _w(oMx, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oHx,oLx);return oHx;};_2(24, oFx, e, s, gg, oEx, "item", "index", '');_(oDx,oEx);_(owv,oDx);
      }else {
        owv.wxVkey = 7;var oPx = _m( "view", ["style", 1,"class", 41], e, s, gg);var oRx = _v();var oSx = function(oWx,oVx,oUx,gg){var oYx = _v();
       var oZx = _o(52, oWx, oVx, gg);
       var obx = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oZx, e_, d_);
       if (obx) {
         var oax = _1(20,oWx,oVx,gg);
         obx(oax,oax,oYx, gg);
       } else _w(oZx, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oUx,oYx);return oUx;};_2(24, oSx, e, s, gg, oRx, "item", "index", '');_(oPx,oRx);_(owv, oPx);
      }_(otv,owv);
      }else if (_o(12, e, s, gg)) {
        otv.wxVkey = 2;var oex = _v();
       var ofx = _o(43, e, s, gg);
       var ohx = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ofx, e_, d_);
       if (ohx) {
         var ogx = _1(20,e,s,gg);
         ohx(ogx,ogx,oex, gg);
       } else _w(ofx, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(otv,oex);
      } _(r,otv);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse10"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse10'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var ojx = _v();
      if (_o(15, e, s, gg)) {
        ojx.wxVkey = 1;var omx = _v();
      if (_o(21, e, s, gg)) {
        omx.wxVkey = 1;var opx = _m( "button", ["size", 22,"type", 1], e, s, gg);var oqx = _v();var orx = function(ovx,oux,otx,gg){var oxx = _v();
       var oyx = _o(53, ovx, oux, gg);
       var o_x = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oyx, e_, d_);
       if (o_x) {
         var ozx = _1(20,ovx,oux,gg);
         o_x(ozx,ozx,oxx, gg);
       } else _w(oyx, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(otx,oxx);return otx;};_2(24, orx, e, s, gg, oqx, "item", "index", '');_(opx,oqx);_(omx,opx);
      }else if (_o(27, e, s, gg)) {
        omx.wxVkey = 2;var oCy = _m( "view", ["style", 1,"class", 27], e, s, gg);var oDy = _n("view");_r(oDy, 'class', 29, e, s, gg);var oEy = _n("view");_r(oEy, 'class', 30, e, s, gg);var oFy = _n("view");_r(oFy, 'class', 31, e, s, gg);_(oEy,oFy);_(oDy,oEy);var oGy = _n("view");_r(oGy, 'class', 30, e, s, gg);var oHy = _v();var oIy = function(oMy,oLy,oKy,gg){var oOy = _v();
       var oPy = _o(53, oMy, oLy, gg);
       var oRy = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oPy, e_, d_);
       if (oRy) {
         var oQy = _1(20,oMy,oLy,gg);
         oRy(oQy,oQy,oOy, gg);
       } else _w(oPy, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oKy,oOy);return oKy;};_2(24, oIy, e, s, gg, oHy, "item", "index", '');_(oGy,oHy);_(oDy,oGy);_(oCy,oDy);_(omx,oCy);
      }else if (_o(32, e, s, gg)) {
        omx.wxVkey = 3;var oUy = _v();
       var oVy = _o(33, e, s, gg);
       var oXy = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oVy, e_, d_);
       if (oXy) {
         var oWy = _1(20,e,s,gg);
         oXy(oWy,oWy,oUy, gg);
       } else _w(oVy, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(omx,oUy);
      }else if (_o(34, e, s, gg)) {
        omx.wxVkey = 4;var oay = _v();
       var oby = _o(35, e, s, gg);
       var ody = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oby, e_, d_);
       if (ody) {
         var ocy = _1(20,e,s,gg);
         ody(ocy,ocy,oay, gg);
       } else _w(oby, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(omx,oay);
      }else if (_o(36, e, s, gg)) {
        omx.wxVkey = 5;var ogy = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var ohy = _v();var oiy = function(omy,oly,oky,gg){var ooy = _v();
       var opy = _o(53, omy, oly, gg);
       var ory = _gd('./yb_shop/utils/wxParse/wxParse.wxml', opy, e_, d_);
       if (ory) {
         var oqy = _1(20,omy,oly,gg);
         ory(oqy,oqy,ooy, gg);
       } else _w(opy, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oky,ooy);return oky;};_2(24, oiy, e, s, gg, ohy, "item", "index", '');_(ogy,ohy);_(omx,ogy);
      }else if (_o(41, e, s, gg)) {
        omx.wxVkey = 6;var ouy = _m( "view", ["class", 0,"style", 1], e, s, gg);var ovy = _v();var owy = function(o_y,ozy,oyy,gg){var oBz = _v();
       var oCz = _o(53, o_y, ozy, gg);
       var oEz = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oCz, e_, d_);
       if (oEz) {
         var oDz = _1(20,o_y,ozy,gg);
         oEz(oDz,oDz,oBz, gg);
       } else _w(oCz, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oyy,oBz);return oyy;};_2(24, owy, e, s, gg, ovy, "item", "index", '');_(ouy,ovy);_(omx,ouy);
      }else {
        omx.wxVkey = 7;var oFz = _m( "view", ["style", 1,"class", 41], e, s, gg);var oHz = _v();var oIz = function(oMz,oLz,oKz,gg){var oOz = _v();
       var oPz = _o(53, oMz, oLz, gg);
       var oRz = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oPz, e_, d_);
       if (oRz) {
         var oQz = _1(20,oMz,oLz,gg);
         oRz(oQz,oQz,oOz, gg);
       } else _w(oPz, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oKz,oOz);return oKz;};_2(24, oIz, e, s, gg, oHz, "item", "index", '');_(oFz,oHz);_(omx, oFz);
      }_(ojx,omx);
      }else if (_o(12, e, s, gg)) {
        ojx.wxVkey = 2;var oUz = _v();
       var oVz = _o(43, e, s, gg);
       var oXz = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oVz, e_, d_);
       if (oXz) {
         var oWz = _1(20,e,s,gg);
         oXz(oWz,oWz,oUz, gg);
       } else _w(oVz, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ojx,oUz);
      } _(r,ojx);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };d_["./yb_shop/utils/wxParse/wxParse.wxml"]["wxParse11"]=function(e,s,r,gg){
    var b='./yb_shop/utils/wxParse/wxParse.wxml:wxParse11'
    r.wxVkey=b
    if(p_[b]){_wl(b,'./yb_shop/utils/wxParse/wxParse.wxml');return}
    p_[b]=true
    try{
      var oZz = _v();
      if (_o(15, e, s, gg)) {
        oZz.wxVkey = 1;var ocz = _v();
      if (_o(21, e, s, gg)) {
        ocz.wxVkey = 1;var ofz = _m( "button", ["size", 22,"type", 1], e, s, gg);var ogz = _v();var ohz = function(olz,okz,ojz,gg){var onz = _v();
       var ooz = _o(54, olz, okz, gg);
       var oqz = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ooz, e_, d_);
       if (oqz) {
         var opz = _1(20,olz,okz,gg);
         oqz(opz,opz,onz, gg);
       } else _w(ooz, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ojz,onz);return ojz;};_2(24, ohz, e, s, gg, ogz, "item", "index", '');_(ofz,ogz);_(ocz,ofz);
      }else if (_o(27, e, s, gg)) {
        ocz.wxVkey = 2;var otz = _m( "view", ["style", 1,"class", 27], e, s, gg);var ouz = _n("view");_r(ouz, 'class', 29, e, s, gg);var ovz = _n("view");_r(ovz, 'class', 30, e, s, gg);var owz = _n("view");_r(owz, 'class', 31, e, s, gg);_(ovz,owz);_(ouz,ovz);var oxz = _n("view");_r(oxz, 'class', 30, e, s, gg);var oyz = _v();var ozz = function(oC_,oB_,oA_,gg){var oE_ = _v();
       var oF_ = _o(54, oC_, oB_, gg);
       var oH_ = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oF_, e_, d_);
       if (oH_) {
         var oG_ = _1(20,oC_,oB_,gg);
         oH_(oG_,oG_,oE_, gg);
       } else _w(oF_, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oA_,oE_);return oA_;};_2(24, ozz, e, s, gg, oyz, "item", "index", '');_(oxz,oyz);_(ouz,oxz);_(otz,ouz);_(ocz,otz);
      }else if (_o(32, e, s, gg)) {
        ocz.wxVkey = 3;var oK_ = _v();
       var oL_ = _o(33, e, s, gg);
       var oN_ = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oL_, e_, d_);
       if (oN_) {
         var oM_ = _1(20,e,s,gg);
         oN_(oM_,oM_,oK_, gg);
       } else _w(oL_, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ocz,oK_);
      }else if (_o(34, e, s, gg)) {
        ocz.wxVkey = 4;var oQ_ = _v();
       var oR_ = _o(35, e, s, gg);
       var oT_ = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oR_, e_, d_);
       if (oT_) {
         var oS_ = _1(20,e,s,gg);
         oT_(oS_,oS_,oQ_, gg);
       } else _w(oR_, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(ocz,oQ_);
      }else if (_o(36, e, s, gg)) {
        ocz.wxVkey = 5;var oW_ = _m( "view", ["style", 1,"bindtap", 36,"class", 37,"data-src", 38], e, s, gg);var oX_ = _v();var oY_ = function(oc_,ob_,oa_,gg){var oe_ = _v();
       var of_ = _o(54, oc_, ob_, gg);
       var oh_ = _gd('./yb_shop/utils/wxParse/wxParse.wxml', of_, e_, d_);
       if (oh_) {
         var og_ = _1(20,oc_,ob_,gg);
         oh_(og_,og_,oe_, gg);
       } else _w(of_, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oa_,oe_);return oa_;};_2(24, oY_, e, s, gg, oX_, "item", "index", '');_(oW_,oX_);_(ocz,oW_);
      }else if (_o(41, e, s, gg)) {
        ocz.wxVkey = 6;var ok_ = _m( "view", ["class", 0,"style", 1], e, s, gg);var ol_ = _v();var om_ = function(oq_,op_,oo_,gg){var os_ = _v();
       var ot_ = _o(54, oq_, op_, gg);
       var ov_ = _gd('./yb_shop/utils/wxParse/wxParse.wxml', ot_, e_, d_);
       if (ov_) {
         var ou_ = _1(20,oq_,op_,gg);
         ov_(ou_,ou_,os_, gg);
       } else _w(ot_, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oo_,os_);return oo_;};_2(24, om_, e, s, gg, ol_, "item", "index", '');_(ok_,ol_);_(ocz,ok_);
      }else {
        ocz.wxVkey = 7;var ow_ = _m( "view", ["style", 1,"class", 41], e, s, gg);var oy_ = _v();var oz_ = function(oCAB,oBAB,oAAB,gg){var oEAB = _v();
       var oFAB = _o(54, oCAB, oBAB, gg);
       var oHAB = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oFAB, e_, d_);
       if (oHAB) {
         var oGAB = _1(20,oCAB,oBAB,gg);
         oHAB(oGAB,oGAB,oEAB, gg);
       } else _w(oFAB, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oAAB,oEAB);return oAAB;};_2(24, oz_, e, s, gg, oy_, "item", "index", '');_(ow_,oy_);_(ocz, ow_);
      }_(oZz,ocz);
      }else if (_o(12, e, s, gg)) {
        oZz.wxVkey = 2;var oKAB = _v();
       var oLAB = _o(43, e, s, gg);
       var oNAB = _gd('./yb_shop/utils/wxParse/wxParse.wxml', oLAB, e_, d_);
       if (oNAB) {
         var oMAB = _1(20,e,s,gg);
         oNAB(oMAB,oMAB,oKAB, gg);
       } else _w(oLAB, './yb_shop/utils/wxParse/wxParse.wxml', 0, 0);_(oZz,oKAB);
      } _(r,oZz);
    }catch(err){
    p_[b]=false
    throw err
    }
    p_[b]=false
    return r
    };
  var m0=function(e,s,r,gg){
    
    return r;
  };
        e_["./yb_shop/utils/wxParse/wxParse.wxml"]={f:m0,j:[],i:[],ti:[],ic:[]};
if(path&&e_[path]){
window.__wxml_comp_version__=0.02
return function(env,dd,global){$gwxc=0;var root={"tag":"wx-page"};root.children=[]
var main=e_[path].f
if(typeof(window.__webview_engine_version__)!='undefined'&&window.__webview_engine_version__+1e-6>=0.02+1e-6&&window.__mergeData__)
{env=window.__mergeData__(env,dd);}
try{
main(env,{},root,global);
if(typeof(window.__webview_engine_version__)=='undefined'||window.__webview_engine_version__+1e-6<0.01+1e-6){return _ev(root);}}catch(err){console.log(err)}return root;}}}@code-separator-line:.wxParse{margin:0 5px;font-family:Helvetica,sans-serif;font-size:%%?28rpx?%%;color:#666;line-height:1.8}wx-view{word-break:break-all;overflow:auto}.wxParse-inline{display:inline;margin:0;padding:0}.wxParse-div{margin:0;padding:0}.wxParse-h1{font-size:2em;margin:.67em 0}.wxParse-h2{font-size:1.5em;margin:.75em 0}.wxParse-h3{font-size:1.17em;margin:.83em 0}.wxParse-h4{margin:1.12em 0}.wxParse-h5{font-size:.83em;margin:1.5em 0}.wxParse-h6{font-size:.75em;margin:1.67em 0}.wxParse-h1{font-size:18px;font-weight:400;margin-bottom:.9em}.wxParse-h2{font-size:16px;font-weight:400;margin-bottom:.34em}.wxParse-h3{font-weight:400;font-size:15px;margin-bottom:.34em}.wxParse-h4{font-weight:400;font-size:14px;margin-bottom:.24em}.wxParse-h5{font-weight:400;font-size:13px;margin-bottom:.14em}.wxParse-h6{font-weight:400;font-size:12px;margin-bottom:.04em}.wxParse-b,.wxParse-h1,.wxParse-h2,.wxParse-h3,.wxParse-h4,.wxParse-h5,.wxParse-h6,.wxParse-strong{font-weight:bolder}.wxParse-address,.wxParse-cite,.wxParse-em,.wxParse-i,.wxParse-var{font-style:italic}.wxParse-code,.wxParse-kbd,.wxParse-pre,.wxParse-samp,.wxParse-tt{font-family:monospace}.wxParse-pre{white-space:pre}.wxParse-big{font-size:1.17em}.wxParse-small,.wxParse-sub,.wxParse-sup{font-size:.83em}.wxParse-sub{vertical-align:sub}.wxParse-sup{vertical-align:super}.wxParse-del,.wxParse-s,.wxParse-strike{text-decoration:line-through}.wxParse-s,.wxParse-strong{display:inline}.wxParse-a{color:#00bfff;word-break:break-all;overflow:auto}.wxParse-video{text-align:center;margin:10px 0}.wxParse-video-video{width:100%}.wxParse-img{background-color:#efefef;overflow:hidden}.wxParse-blockquote{margin:0;padding:10px 0 10px 5px;font-family:Courier,Calibri,"宋体";background:#f5f5f5;border-left:3px solid #dbdbdb}.wxParse-code,.wxParse-wxxxcode-style{display:inline;background:#f5f5f5}.wxParse-ul{margin:%%?20rpx?%% %%?10rpx?%%}.wxParse-li,.wxParse-li-inner{display:flex;align-items:baseline;margin:%%?10rpx?%% 0}.wxParse-li-text{align-items:center;line-height:20px}.wxParse-li-circle{display:inline-flex;width:5px;height:5px;background-color:#333;margin-right:5px}.wxParse-li-square{display:inline-flex;width:%%?10rpx?%%;height:%%?10rpx?%%;background-color:#333;margin-right:5px}.wxParse-li-ring{display:inline-flex;width:%%?10rpx?%%;height:%%?10rpx?%%;border:%%?2rpx?%% solid #333;border-radius:50%;background-color:#fff;margin-right:5px}.wxParse-u{text-decoration:underline}.wxParse-hide{display:none}.WxEmojiView{align-items:center}.wxEmoji{width:16px;height:16px}.wxParse-tr{display:flex;border-right:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0;border-top:1px solid #e0e0e0}.wxParse-td,.wxParse-th{flex:1;padding:5px;font-size:%%?28rpx?%%;border-left:1px solid #e0e0e0;word-break:break-all}.wxParse-td:last{border-top:1px solid #e0e0e0}.wxParse-th{background:#f0f0f0;border-top:1px solid #e0e0e0}@code-separator-line:__wxRoute = "yb_shop/utils/wxParse/wxParse";__wxRouteBegin = true;
define("yb_shop/utils/wxParse/wxParse.js", function(require, module, exports, window,document,frames,self,location,navigator,localStorage,history,Caches,screen,alert,confirm,prompt,fetch,XMLHttpRequest,WebSocket,webkit,WeixinJSCore,ServiceJSBridge,Reporter){
'use strict';
var _showdown = require('./showdown.js');
var _showdown2 = _interopRequireDefault(_showdown);
var _html2json = require('./html2json.js');
var _html2json2 = _interopRequireDefault(_html2json);
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
/**
 * 配置及公有属性
 **/
/**
 * 主函数入口区
 **/
/**
 * utils函数引入
 **/
function wxParse() {
  var bindName = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'wxParseData';
  var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'html';
  var data = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : '<div class="color:red;">数据不能为空</div>';
  var target = arguments[3];
  var imagePadding = arguments[4];
  var that = target;
  var transData = {}; //存放转化后的数据
  if (type == 'html') {
    transData = _html2json2.default.html2json(data, bindName);
    //console.log(JSON.stringify(transData, ' ', ' '));
  } else if (type == 'md' || type == 'markdown') {
    var converter = new _showdown2.default.Converter();
    var html = converter.makeHtml(data);
    transData = _html2json2.default.html2json(html, bindName);
    console.log(JSON.stringify(transData, ' ', ' '));
  }
  transData.view = {};
  transData.view.imagePadding = 0;
  if (typeof imagePadding != 'undefined') {
    transData.view.imagePadding = imagePadding;
  }
  var bindData = {};
  bindData[bindName] = transData;
  that.setData(bindData);
  that.wxParseImgLoad = wxParseImgLoad;
  that.wxParseImgTap = wxParseImgTap;
}
// 图片点击事件
function wxParseImgTap(e) {
  console.log(e);
  var that = this;
  var nowImgUrl = e.target.dataset.src;
  var tagFrom = e.target.dataset.from;
  if (typeof tagFrom != 'undefined' && tagFrom.length > 0) {
    wx.previewImage({
      current: nowImgUrl, // 当前显示图片的http链接
      urls: that.data[tagFrom].imageUrls // 需要预览的图片http链接列表
    });
  }
}
/**
 * 图片视觉宽高计算函数区 
 **/
function wxParseImgLoad(e) {
  var that = this;
  var tagFrom = e.target.dataset.from;
  var idx = e.target.dataset.idx;
  if (typeof tagFrom != 'undefined' && tagFrom.length > 0) {
    calMoreImageInfo(e, idx, that, tagFrom);
  }
}
// 假循环获取计算图片视觉最佳宽高
function calMoreImageInfo(e, idx, that, bindName) {
  var temData = that.data[bindName];
  if (!temData || temData.images.length == 0) {
    return;
  }
  var temImages = temData.images;
  //因为无法获取view宽度 需要自定义padding进行计算，稍后处理
  var recal = wxAutoImageCal(e.detail.width, e.detail.height, that, bindName);
  temImages[idx].width = recal.imageWidth;
  temImages[idx].height = recal.imageheight;
  temData.images = temImages;
  var bindData = {};
  bindData[bindName] = temData;
  that.setData(bindData);
}
// 计算视觉优先的图片宽高
function wxAutoImageCal(originalWidth, originalHeight, that, bindName) {
  //获取图片的原始长宽
  var windowWidth = 0,
      windowHeight = 0;
  var autoWidth = 0,
      autoHeight = 0;
  var results = {};
  wx.getSystemInfo({
    success: function success(res) {
      var padding = that.data[bindName].view.imagePadding;
      windowWidth = res.windowWidth - 2 * padding;
      windowHeight = res.windowHeight;
      //判断按照那种方式进行缩放
      //console.log("windowWidth" + windowWidth);
      if (originalWidth > windowWidth) {
        //在图片width大于手机屏幕width时候
        autoWidth = windowWidth;
        //console.log("autoWidth" + autoWidth);
        autoHeight = autoWidth * originalHeight / originalWidth;
        //console.log("autoHeight" + autoHeight);
        results.imageWidth = autoWidth;
        results.imageheight = autoHeight;
      } else {
        //否则展示原来的数据
        results.imageWidth = originalWidth;
        results.imageheight = originalHeight;
      }
    }
  });
  return results;
}
function wxParseTemArray(temArrayName, bindNameReg, total, that) {
  var array = [];
  var temData = that.data;
  var obj = null;
  for (var i = 0; i < total; i++) {
    var simArr = temData[bindNameReg + i].nodes;
    array.push(simArr);
  }
  temArrayName = temArrayName || 'wxParseTemArray';
  obj = JSON.parse('{"' + temArrayName + '":""}');
  obj[temArrayName] = array;
  that.setData(obj);
}
/**
 * 配置emojis
 * 
 */
function emojisInit() {
  var reg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
  var baseSrc = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "/wxParse/emojis/";
  var emojis = arguments[2];
  _html2json2.default.emojisInit(reg, baseSrc, emojis);
}
module.exports = {
  wxParse: wxParse,
  wxParseTemArray: wxParseTemArray,
  emojisInit: emojisInit
};
});require("yb_shop/utils/wxParse/wxParse.js")@code-separator-line:["div","template","view","video","image","block","button"]