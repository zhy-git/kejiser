UM.commands["inserthtml"]={execCommand:function(a,b,c){var e,f,g,h,j,i,k,l,n,m,o,p,r,s,d=this;if(b&&d.fireEvent("beforeinserthtml",b)!==!0){if(e=d.selection.getRange(),f=e.document.createElement("div"),f.style.display="inline",c||(g=UM.htmlparser(b),d.options.filterRules&&UM.filterNode(g,d.options.filterRules),d.filterInputRule(g),b=g.toHtml()),f.innerHTML=utils.trim(b),!e.collapsed&&(h=e.startContainer,domUtils.isFillChar(h)&&e.setStartBefore(h),h=e.endContainer,domUtils.isFillChar(h)&&e.setEndAfter(h),e.txtToElmBoundary(),e.endContainer&&1==e.endContainer.nodeType&&(h=e.endContainer.childNodes[e.endOffset],h&&domUtils.isBr(h)&&e.setEndAfter(h)),0==e.startOffset&&(h=e.startContainer,domUtils.isBoundaryNode(h,"firstChild")&&(h=e.endContainer,e.endOffset==(3==h.nodeType?h.nodeValue.length:h.childNodes.length)&&domUtils.isBoundaryNode(h,"lastChild")&&(d.body.innerHTML="<p>"+(browser.ie?"":"<br/>")+"</p>",e.setStart(d.body.firstChild,0).collapse(!0)))),!e.collapsed&&e.deleteContents(),1==e.startContainer.nodeType&&(i=e.startContainer.childNodes[e.startOffset],i&&domUtils.isBlockElm(i)&&(j=i.previousSibling)&&domUtils.isBlockElm(j)))){for(e.setEnd(j,j.childNodes.length).collapse();i.firstChild;)j.appendChild(i.firstChild);domUtils.remove(i)}for(m=0,e.inFillChar()&&(i=e.startContainer,domUtils.isFillChar(i)?(e.setStartBefore(i).collapse(!0),domUtils.remove(i)):domUtils.isFillChar(i,!0)&&(i.nodeValue=i.nodeValue.replace(fillCharReg,""),e.startOffset--,e.collapsed&&e.collapse(!0)));i=f.firstChild;){if(m){for(o=d.document.createElement("p");i&&(3==i.nodeType||!dtd.$block[i.tagName]);)n=i.nextSibling,o.appendChild(i),i=n;o.firstChild&&(i=o)}if(e.insertNode(i),n=i.nextSibling,!m&&i.nodeType==domUtils.NODE_ELEMENT&&domUtils.isBlockElm(i)&&(k=domUtils.findParent(i,function(a){return domUtils.isBlockElm(a)}),k&&"body"!=k.tagName.toLowerCase()&&(!dtd[k.tagName][i.nodeName]||i.parentNode!==k))){if(dtd[k.tagName][i.nodeName])for(l=i.parentNode;l!==k;)j=l,l=l.parentNode;else j=k;domUtils.breakParent(i,j||l),j=i.previousSibling,domUtils.trimWhiteTextNode(j),j.childNodes.length||domUtils.remove(j),!browser.ie&&(p=i.nextSibling)&&domUtils.isBlockElm(p)&&p.lastChild&&!domUtils.isBr(p.lastChild)&&p.appendChild(d.document.createElement("br")),m=1}if(p=i.nextSibling,!f.firstChild&&p&&domUtils.isBlockElm(p)){e.setStart(p,0).collapse(!0);break}e.setEndAfter(i).collapse()}if(i=e.startContainer,n&&domUtils.isBr(n)&&domUtils.remove(n),domUtils.isBlockElm(i)&&domUtils.isEmptyNode(i))if(n=i.nextSibling)domUtils.remove(i),1==n.nodeType&&dtd.$block[n.tagName]&&e.setStart(n,0).collapse(!0).shrinkBoundary();else try{i.innerHTML=browser.ie?domUtils.fillChar:"<br/>"}catch(q){e.setStartBefore(i),domUtils.remove(i)}try{browser.ie9below&&1==e.startContainer.nodeType&&!e.startContainer.childNodes[e.startOffset]&&(r=e.startContainer,j=r.childNodes[e.startOffset-1],j&&1==j.nodeType&&dtd.$empty[j.tagName]&&(s=this.document.createTextNode(domUtils.fillChar),e.insertNode(s).setStart(s,0).collapse(!0))),setTimeout(function(){e.select(!0)})}catch(q){}setTimeout(function(){e=d.selection.getRange(),e.scrollIntoView(),d.fireEvent("afterinserthtml")},200)}}};