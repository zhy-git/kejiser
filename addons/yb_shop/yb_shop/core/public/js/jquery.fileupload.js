!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery","jquery.ui.widget"],a):a(window.jQuery)}(function(a){"use strict";a.support.xhrFileUpload=!(!window.XMLHttpRequestUpload||!window.FileReader),a.support.xhrFormDataFileUpload=!!window.FormData,a.widget("blueimp.fileupload",{options:{dropZone:a(document),pasteZone:a(document),fileInput:void 0,replaceFileInput:!0,paramName:void 0,singleFileUploads:!0,limitMultiFileUploads:void 0,sequentialUploads:!1,limitConcurrentUploads:void 0,forceIframeTransport:!1,redirect:void 0,redirectParamName:void 0,postMessage:void 0,multipart:!0,maxChunkSize:void 0,uploadedBytes:void 0,recalculateProgress:!0,progressInterval:100,bitrateInterval:500,formData:function(a){return a.serializeArray()},add:function(a,b){b.submit()},processData:!1,contentType:!1,cache:!1},_refreshOptionsList:["fileInput","dropZone","pasteZone","multipart","forceIframeTransport"],_BitrateTimer:function(){this.timestamp=+new Date,this.loaded=0,this.bitrate=0,this.getBitrate=function(a,b,c){var d=a-this.timestamp;return(!this.bitrate||!c||d>c)&&(this.bitrate=8*(b-this.loaded)*(1e3/d),this.loaded=b,this.timestamp=a),this.bitrate}},_isXHRUpload:function(b){return!b.forceIframeTransport&&(!b.multipart&&a.support.xhrFileUpload||a.support.xhrFormDataFileUpload)},_getFormData:function(b){var c;return"function"==typeof b.formData?b.formData(b.form):a.isArray(b.formData)?b.formData:b.formData?(c=[],a.each(b.formData,function(a,b){c.push({name:a,value:b})}),c):[]},_getTotal:function(b){var c=0;return a.each(b,function(a,b){c+=b.size||1}),c},_onProgress:function(a,b){if(a.lengthComputable){var d,e,c=+new Date;if(b._time&&b.progressInterval&&c-b._time<b.progressInterval&&a.loaded!==a.total)return;b._time=c,d=b.total||this._getTotal(b.files),e=parseInt(a.loaded/a.total*(b.chunkSize||d),10)+(b.uploadedBytes||0),this._loaded+=e-(b.loaded||b.uploadedBytes||0),b.lengthComputable=!0,b.loaded=e,b.total=d,b.bitrate=b._bitrateTimer.getBitrate(c,e,b.bitrateInterval),this._trigger("progress",a,b),this._trigger("progressall",a,{lengthComputable:!0,loaded:this._loaded,total:this._total,bitrate:this._bitrateTimer.getBitrate(c,this._loaded,b.bitrateInterval)})}},_initProgressListener:function(b){var c=this,d=b.xhr?b.xhr():a.ajaxSettings.xhr();d.upload&&(a(d.upload).bind("progress",function(a){var d=a.originalEvent;a.lengthComputable=d.lengthComputable,a.loaded=d.loaded,a.total=d.total,c._onProgress(a,b)}),b.xhr=function(){return d})},_initXHRData:function(b){var c,d=b.files[0],e=b.multipart||!a.support.xhrFileUpload,f=b.paramName[0];b.headers=b.headers||{},b.contentRange&&(b.headers["Content-Range"]=b.contentRange),e?a.support.xhrFormDataFileUpload&&(b.postMessage?(c=this._getFormData(b),b.blob?c.push({name:f,value:b.blob}):a.each(b.files,function(a,d){c.push({name:b.paramName[a]||f,value:d})})):(b.formData instanceof FormData?c=b.formData:(c=new FormData,a.each(this._getFormData(b),function(a,b){c.append(b.name,b.value)})),b.blob?(b.headers["Content-Disposition"]='attachment; filename="'+encodeURI(d.name)+'"',c.append(f,b.blob,d.name)):a.each(b.files,function(a,d){(window.Blob&&d instanceof Blob||window.File&&d instanceof File)&&c.append(b.paramName[a]||f,d,d.name)})),b.data=c):(b.headers["Content-Disposition"]='attachment; filename="'+encodeURI(d.name)+'"',b.contentType=d.type,b.data=b.blob||d),b.blob=null},_initIframeSettings:function(b){b.dataType="iframe "+(b.dataType||""),b.formData=this._getFormData(b),b.redirect&&a("<a></a>").prop("href",b.url).prop("host")!==location.host&&b.formData.push({name:b.redirectParamName||"redirect",value:b.redirect})},_initDataSettings:function(a){this._isXHRUpload(a)?(this._chunkedUpload(a,!0)||(a.data||this._initXHRData(a),this._initProgressListener(a)),a.postMessage&&(a.dataType="postmessage "+(a.dataType||""))):this._initIframeSettings(a,"iframe")},_getParamName:function(b){var c=a(b.fileInput),d=b.paramName;return d?a.isArray(d)||(d=[d]):(d=[],c.each(function(){for(var b=a(this),c=b.prop("name")||"files[]",e=(b.prop("files")||[1]).length;e;)d.push(c),e-=1}),d.length||(d=[c.prop("name")||"files[]"])),d},_initFormSettings:function(b){b.form&&b.form.length||(b.form=a(b.fileInput.prop("form")),b.form.length||(b.form=a(this.options.fileInput.prop("form")))),b.paramName=this._getParamName(b),b.url||(b.url=b.form.prop("action")||location.href),b.type=(b.type||b.form.prop("method")||"").toUpperCase(),"POST"!==b.type&&"PUT"!==b.type&&(b.type="POST"),b.formAcceptCharset||(b.formAcceptCharset=b.form.attr("accept-charset"))},_getAJAXSettings:function(b){var c=a.extend({},this.options,b);return this._initFormSettings(c),this._initDataSettings(c),c},_enhancePromise:function(a){return a.success=a.done,a.error=a.fail,a.complete=a.always,a},_getXHRPromise:function(b,c,d){var e=a.Deferred(),f=e.promise();return c=c||this.options.context||f,b===!0?e.resolveWith(c,d):b===!1&&e.rejectWith(c,d),f.abort=e.promise,this._enhancePromise(f)},_getUploadedBytes:function(a){var b=a.getResponseHeader("Range"),c=b&&b.split("-"),d=c&&c.length>1&&parseInt(c[1],10);return d&&d+1},_chunkedUpload:function(b,c){var l,m,d=this,e=b.files[0],f=e.size,g=b.uploadedBytes=b.uploadedBytes||0,h=b.maxChunkSize||f,i=e.slice||e.webkitSlice||e.mozSlice,j=a.Deferred(),k=j.promise();return this._isXHRUpload(b)&&i&&(g||f>h)&&!b.data?c?!0:g>=f?(e.error="Uploaded bytes exceed file size",this._getXHRPromise(!1,b.context,[null,"error",e.error])):(m=function(){var k=a.extend({},b);k.blob=i.call(e,g,g+h,e.type),k.chunkSize=k.blob.size,k.contentRange="bytes "+g+"-"+(g+k.chunkSize-1)+"/"+f,d._initXHRData(k),d._initProgressListener(k),l=(a.ajax(k)||d._getXHRPromise(!1,k.context)).done(function(c,e,h){g=d._getUploadedBytes(h)||g+k.chunkSize,k.loaded||d._onProgress(a.Event("progress",{lengthComputable:!0,loaded:g-k.uploadedBytes,total:g-k.uploadedBytes}),k),b.uploadedBytes=k.uploadedBytes=g,f>g?m():j.resolveWith(k.context,[c,e,h])}).fail(function(a,b,c){j.rejectWith(k.context,[a,b,c])})},this._enhancePromise(k),k.abort=function(){return l.abort()},m(),k):!1},_beforeSend:function(a,b){0===this._active&&(this._trigger("start"),this._bitrateTimer=new this._BitrateTimer),this._active+=1,this._loaded+=b.uploadedBytes||0,this._total+=this._getTotal(b.files)},_onDone:function(b,c,d,e){this._isXHRUpload(e)||this._onProgress(a.Event("progress",{lengthComputable:!0,loaded:1,total:1}),e),e.result=b,e.textStatus=c,e.jqXHR=d,this._trigger("done",null,e)},_onFail:function(a,b,c,d){d.jqXHR=a,d.textStatus=b,d.errorThrown=c,this._trigger("fail",null,d),d.recalculateProgress&&(this._loaded-=d.loaded||d.uploadedBytes||0,this._total-=d.total||this._getTotal(d.files))},_onAlways:function(a,b,c,d){this._active-=1,d.textStatus=b,c&&c.always?(d.jqXHR=c,d.result=a):(d.jqXHR=a,d.errorThrown=c),this._trigger("always",null,d),0===this._active&&(this._trigger("stop"),this._loaded=this._total=0,this._bitrateTimer=null)},_onSend:function(b,c){var e,f,g,h,d=this,i=d._getAJAXSettings(c),j=function(){return d._sending+=1,i._bitrateTimer=new d._BitrateTimer,e=e||((f||d._trigger("send",b,i)===!1)&&d._getXHRPromise(!1,i.context,f)||d._chunkedUpload(i)||a.ajax(i)).done(function(a,b,c){d._onDone(a,b,c,i)}).fail(function(a,b,c){d._onFail(a,b,c,i)}).always(function(a,b,c){if(d._sending-=1,d._onAlways(a,b,c,i),i.limitConcurrentUploads&&i.limitConcurrentUploads>d._sending)for(var f,e=d._slots.shift();e;){if(f=e.state?"pending"===e.state():!e.isRejected()){e.resolve();break}e=d._slots.shift()}})};return this._beforeSend(b,i),this.options.sequentialUploads||this.options.limitConcurrentUploads&&this.options.limitConcurrentUploads<=this._sending?(this.options.limitConcurrentUploads>1?(g=a.Deferred(),this._slots.push(g),h=g.pipe(j)):h=this._sequence=this._sequence.pipe(j,j),h.abort=function(){return f=[void 0,"abort","abort"],e?e.abort():(g&&g.rejectWith(i.context,f),j())},this._enhancePromise(h)):j()},_onAdd:function(b,c){var i,j,k,l,d=this,e=!0,f=a.extend({},this.options,c),g=f.limitMultiFileUploads,h=this._getParamName(f);if((f.singleFileUploads||g)&&this._isXHRUpload(f))if(!f.singleFileUploads&&g)for(k=[],i=[],l=0;l<c.files.length;l+=g)k.push(c.files.slice(l,l+g)),j=h.slice(l,l+g),j.length||(j=h),i.push(j);else i=h;else k=[c.files],i=[h];return c.originalFiles=c.files,a.each(k||c.files,function(f,g){var h=a.extend({},c);return h.files=k?g:[g],h.paramName=i[f],h.submit=function(){return h.jqXHR=this.jqXHR=d._trigger("submit",b,this)!==!1&&d._onSend(b,this),this.jqXHR},e=d._trigger("add",b,h)}),e},_replaceFileInput:function(b){var c=b.clone(!0);a("<form></form>").append(c)[0].reset(),b.after(c).detach(),a.cleanData(b.unbind("remove")),this.options.fileInput=this.options.fileInput.map(function(a,d){return d===b[0]?c[0]:d}),b[0]===this.element[0]&&(this.element=c)},_handleFileTreeEntry:function(b,c){var g,d=this,e=a.Deferred(),f=function(a){a&&!a.entry&&(a.entry=b),e.resolve([a])};return c=c||"",b.isFile?b._file?(b._file.relativePath=c,e.resolve(b._file)):b.file(function(a){a.relativePath=c,e.resolve(a)},f):b.isDirectory?(g=b.createReader(),g.readEntries(function(a){d._handleFileTreeEntries(a,c+b.name+"/").done(function(a){e.resolve(a)}).fail(f)},f)):e.resolve([]),e.promise()},_handleFileTreeEntries:function(b,c){var d=this;return a.when.apply(a,a.map(b,function(a){return d._handleFileTreeEntry(a,c)})).pipe(function(){return Array.prototype.concat.apply([],arguments)})},_getDroppedFiles:function(b){b=b||{};var c=b.items;return c&&c.length&&(c[0].webkitGetAsEntry||c[0].getAsEntry)?this._handleFileTreeEntries(a.map(c,function(a){var b;return a.webkitGetAsEntry?(b=a.webkitGetAsEntry(),b&&(b._file=a.getAsFile()),b):a.getAsEntry()})):a.Deferred().resolve(a.makeArray(b.files)).promise()},_getSingleFileInputFiles:function(b){b=a(b);var d,e,c=b.prop("webkitEntries")||b.prop("entries");if(c&&c.length)return this._handleFileTreeEntries(c);if(d=a.makeArray(b.prop("files")),d.length)void 0===d[0].name&&d[0].fileName&&a.each(d,function(a,b){b.name=b.fileName,b.size=b.fileSize});else{if(e=b.prop("value"),!e)return a.Deferred().resolve([]).promise();d=[{name:e.replace(/^.*\\/,"")}]}return a.Deferred().resolve(d).promise()},_getFileInputFiles:function(b){return b instanceof a&&1!==b.length?a.when.apply(a,a.map(b,this._getSingleFileInputFiles)).pipe(function(){return Array.prototype.concat.apply([],arguments)}):this._getSingleFileInputFiles(b)},_onChange:function(b){var c=this,d={fileInput:a(b.target),form:a(b.target.form)};this._getFileInputFiles(d.fileInput).always(function(a){d.files=a,c.options.replaceFileInput&&c._replaceFileInput(d.fileInput),c._trigger("change",b,d)!==!1&&c._onAdd(b,d)})},_onPaste:function(b){var c=b.originalEvent.clipboardData,d=c&&c.items||[],e={files:[]};return a.each(d,function(a,b){var c=b.getAsFile&&b.getAsFile();c&&e.files.push(c)}),this._trigger("paste",b,e)===!1||this._onAdd(b,e)===!1?!1:void 0},_onDrop:function(a){var b=this,c=a.dataTransfer=a.originalEvent.dataTransfer,d={};c&&c.files&&c.files.length&&a.preventDefault(),this._getDroppedFiles(c).always(function(c){d.files=c,b._trigger("drop",a,d)!==!1&&b._onAdd(a,d)})},_onDragOver:function(b){var c=b.dataTransfer=b.originalEvent.dataTransfer;return this._trigger("dragover",b)===!1?!1:(c&&-1!==a.inArray("Files",c.types)&&(c.dropEffect="copy",b.preventDefault()),void 0)},_initEventHandlers:function(){this._isXHRUpload(this.options)&&(this._on(this.options.dropZone,{dragover:this._onDragOver,drop:this._onDrop}),this._on(this.options.pasteZone,{paste:this._onPaste})),this._on(this.options.fileInput,{change:this._onChange})},_destroyEventHandlers:function(){this._off(this.options.dropZone,"dragover drop"),this._off(this.options.pasteZone,"paste"),this._off(this.options.fileInput,"change")},_setOption:function(b,c){var d=-1!==a.inArray(b,this._refreshOptionsList);d&&this._destroyEventHandlers(),this._super(b,c),d&&(this._initSpecialOptions(),this._initEventHandlers())},_initSpecialOptions:function(){var b=this.options;void 0===b.fileInput?b.fileInput=this.element.is('input[type="file"]')?this.element:this.element.find('input[type="file"]'):b.fileInput instanceof a||(b.fileInput=a(b.fileInput)),b.dropZone instanceof a||(b.dropZone=a(b.dropZone)),b.pasteZone instanceof a||(b.pasteZone=a(b.pasteZone))},_create:function(){var b=this.options;a.extend(b,a(this.element[0].cloneNode(!1)).data()),this._initSpecialOptions(),this._slots=[],this._sequence=this._getXHRPromise(!0),this._sending=this._active=this._loaded=this._total=0,this._initEventHandlers()},_destroy:function(){this._destroyEventHandlers()},add:function(b){var c=this;b&&!this.options.disabled&&(b.fileInput&&!b.files?this._getFileInputFiles(b.fileInput).always(function(a){b.files=a,c._onAdd(null,b)}):(b.files=a.makeArray(b.files),this._onAdd(null,b)))},send:function(b){if(b&&!this.options.disabled){if(b.fileInput&&!b.files){var f,g,c=this,d=a.Deferred(),e=d.promise();return e.abort=function(){return g=!0,f?f.abort():(d.reject(null,"abort","abort"),e)},this._getFileInputFiles(b.fileInput).always(function(a){g||(b.files=a,f=c._onSend(null,b).then(function(a,b,c){d.resolve(a,b,c)},function(a,b,c){d.reject(a,b,c)}))}),this._enhancePromise(e)}if(b.files=a.makeArray(b.files),b.files.length)return this._onSend(null,b)}return this._getXHRPromise(!1,b&&b.context)}})});