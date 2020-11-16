/* Copyright 2011 Google Inc. All Rights Reserved. */ (function(){function DumpError(a){try{throw a;}catch(b){DumpException(b)}}
function DumpException(a,b){var c="Javascript exception: "+(b?b:"")+" "+a;BR_IsIE()&&(c+=" "+a.name+": "+a.message+" ("+a.number+")");var d="";if("string"==typeof a)d=a+"\n";else for(var e in a)try{d+=e+": "+a[e]+"\n"}catch(f){}try{d+=DB_GetStackTrace(DumpException.caller)}catch(g){}"undefined"!=typeof log&&(e=log,c=(c=c+"\n"+d)?c.replace(amp_re_,"&amp;").replace(lt_re_,"&lt;").replace(gt_re_,"&gt;").replace(quote_re_,"&quot;"):"",e(c))}var function_name_re_=/function (\w+)/;
function DB_GetStackTrace(a){try{if(!BR_IsIE()&&!BR_AgentContains_("safari")&&!BR_AgentContains_("konqueror")&&BR_AgentContains_("mozilla"))return Error().stack;if(!a)return"";var b;var c=function_name_re_.exec(String(a));b=c?c[1]:"";b="- "+b+"(";for(c=0;c<a.arguments.length;c++){0<c&&(b+=", ");var d=String(a.arguments[c]);40<d.length&&(d=d.substr(0,40)+"...");b+=d}b+=")\n";return b+=DB_GetStackTrace(a.caller)}catch(e){return"[Cannot get stack trace]: "+e+"\n"}};function BR_AgentContains_(a){return a in BR_AgentContains_cache_?BR_AgentContains_cache_[a]:BR_AgentContains_cache_[a]=-1!=navigator.userAgent.toLowerCase().indexOf(a)}var BR_AgentContains_cache_={};function BR_IsIE(){return(BR_AgentContains_("msie")||BR_AgentContains_("trident"))&&!window.opera}function HasClass(a,b){if(null==a||null==a.className)return!1;if(a.className==b)return!0;for(var c=a.className.split(" "),d=0;d<c.length;d++)if(c[d]==b)return!0;return!1}
function RemoveClass(a,b){if(null!=a.className)if(a.className==b)a.className="";else{for(var c=a.className.split(" "),d=[],e=!1,f=0;f<c.length;f++)c[f]!=b?c[f]&&d.push(c[f]):e=!0;e&&(a.className=d.join(" "))}}var amp_re_=/&/g,lt_re_=/</g,gt_re_=/>/g,quote_re_=/\"/g;function forid_1(a){return document.getElementById(a)}function forid_2(a){return document.all[a]}var forid=document.getElementById?forid_1:forid_2;
function log(a){try{if(window.parent!=window&&window.parent.log){window.parent.log(window.name+"::"+a);return}}catch(b){}var c=forid("log");c?(a="<p class=logentry><span class=logdate>"+new Date+"</span><span class=logmsg>"+a+"</span></p>",c.innerHTML=a+c.innerHTML):window.status=a};function AS_Assert(){}AS_Assert.raise=function(a){if("undefined"!=typeof Error)throw Error(a||"Assertion Failed");throw a;};AS_Assert.fail=function(a){a=a||"Assertion failed";"undefined"!=typeof DumpError&&DumpError(a+"\n");AS_Assert.raise(a)};AS_Assert.isTrue=function(a,b){a||(void 0===b&&(b="Assertion failed"),AS_Assert.fail(b))};AS_Assert.equals=function(a,b,c){a!=b&&(void 0===c&&(c="AS_Assert.equals failed: <"+a+"> != <"+b+">"),AS_Assert.fail(c))};
AS_Assert.typeOf=function(a,b,c){if(typeof a!=b){if(a||""==a)try{if(b==AS_Assert.TYPE_MAP[typeof a]||a instanceof b)return}catch(d){}void 0===c&&("function"==typeof b&&(c=b.toString().match(/^\s*function\s+([^\s\{]+)/))&&(b=c[1]),c="AS_Assert.typeOf failed: <"+a+"> not typeof "+b);AS_Assert.fail(c)}};AS_Assert.TYPE_MAP={string:String,number:Number,"boolean":Boolean};var XH_ieProgId_,XH_ACTIVE_X_IDENTS$$inline_65=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"];
if("undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var i$$inline_66=0;i$$inline_66<XH_ACTIVE_X_IDENTS$$inline_65.length;i$$inline_66++){var candidate$$inline_67=XH_ACTIVE_X_IDENTS$$inline_65[i$$inline_66];try{new ActiveXObject(candidate$$inline_67);XH_ieProgId_=candidate$$inline_67;break}catch(e$$inline_68){}}if(!XH_ieProgId_)throw Error("Could not create ActiveXObject. ActiveX might be disabled, or MSXML might not be installed.");}
function XH_XmlHttpGET(a,b,c){a.open("GET",b,!0);a.onreadystatechange=c;try{a.send(null)}catch(d){throw log("XMLHttpSend failed "+d.toString()+"<br>"+d.stack),d;}};"undefined"==typeof log&&(log=function(){});function DST_toggleMeta(a){e:{for(;a;){if(HasClass(a,"collapse")){RemoveClass(a,"collapse");var b="expand";HasClass(a,b)||(a.className+=" "+b);a=!0;break e}if(HasClass(a,"expand")){RemoveClass(a,"expand");b="collapse";HasClass(a,b)||(a.className+=" "+b);a=!1;break e}a=a.parentNode}a=void 0}DST_setMetadataBubble(a)}
function DST_setMetadataBubble(a){var b=a?1:0;a=XH_ieProgId_?new ActiveXObject(XH_ieProgId_):new XMLHttpRequest;b=CS_env.projectHomeUrl+"/source/setmetabubble.do?alt=js&expanded="+b+"&cd="+(new Date).getTime();XH_XmlHttpGET(a,b,function(){})}_toggleMeta=DST_toggleMeta;})()