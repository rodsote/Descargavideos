function qC(e,c){e.className=e.className.split(c).join("");}function aC(e,c){e.className+=" "+c;}

var ReferrerKiller=(function(){PUB={};function escapeDoubleQuotes(str){return str.split('"').join('\\"');}function escapeSimpleQuotes(str){return str.split("'").join("\\'");}function htmlToNode(html){var container=document.createElement('div');container.innerHTML=html;return container.firstChild;}function objectToHtmlAttributes(obj){var attributes=[],value;for(var name in obj){value=obj[name];attributes.push(name+'="'+escapeDoubleQuotes(value)+'"');}return attributes.join(' ');}function htmlString(html,iframeAttributes,headExtra){var iframeAttributes=iframeAttributes||{},defaultStyles='border:none;overflow:hidden;',id;if('style' in iframeAttributes){iframeAttributes.style=defaultStyles+iframeAttributes.style;}else{iframeAttributes.style=defaultStyles;}id='__referrer_killer_'+(new Date).getTime()+Math.floor(Math.random()*9999);return '<iframe style="border 1px solid #ff0000" scrolling="no" frameborder="no" allowtransparency="true" '+objectToHtmlAttributes(iframeAttributes)+'id="'+id+'" src="javascript:\'<!doctype html><html><head><meta charset=\\\'UTF-8\\\'><style>*{margin:0;padding:0;border:0;}</style>'+(headExtra?encodeURIComponent(escapeSimpleQuotes(headExtra)):'')+'</head><script>function resizeWindow(){var elems=document.getElementsByTagName(\\\'*\\\'),width=0,'+'height=0,first=document.body.firstChild,elem;if(first.offsetHeight&&first.offsetWidth){width=first.offsetWidth;height=first.offsetHeight;}else{for(var i in elems){elem=elems[i];if(!elem.offsetWidth){continue;}width=Math.max(elem.offsetWidth,width);height=Math.max(elem.offsetHeight,height);}}var ifr=parent.document.getElementById(\\\''+id+'\\\');ifr.height=height;ifr.width=width;}</script><body onload=\\\'resizeWindow()\\\'>\'+decodeURIComponent(\''+encodeURIComponent(html)+'\')+\'</body></html>\'"></iframe>';}function linkHtml(url,innerHTML,anchorParams,iframeAttributes,styleInnerIframe,headExtra){var html;innerHTML=innerHTML||false;if(!innerHTML){innerHTML=url;}anchorParams=anchorParams||{};if(!('target' in anchorParams)||'_self'===anchorParams.target){anchorParams.target='_top';}html='<style>'+encodeURIComponent(styleInnerIframe)+'</style><a class="link" rel="noreferrer" href="'+escapeDoubleQuotes(encodeURIComponent(url))+'" '+objectToHtmlAttributes(anchorParams)+'>'+innerHTML+'</a>';return htmlString(html,iframeAttributes,headExtra);}PUB.linkHtml=linkHtml;return PUB;})();

function scrollTo(e,d){if(d<0)return;var h=document.documentElement;if(h.scrollTop===0){var t=h.scrollTop;++h.scrollTop;h=t+1===h.scrollTop--?h:document.body;}if(typeof e==="object")e=e.offsetTop;scrollToX(h,h.scrollTop,e,0,1/d,20);}function scrollToX(e,a,b,t,v,s){if(t<0||t>1||v<=0)return;k=t-1;e.scrollTop=a-(a-b)*(k*k*k+1);t+=v*s;setTimeout(function(){scrollToX(e,a,b,t,v,s);},s);}

function lcs(a){if(document.createStyleSheet)document.createStyleSheet(a);else document.head.innerHTML+='<link rel="stylesheet" type="text/css" href="'+a+'" />';}function rcs(a){var l=document.querySelectorAll('link');for(var i=0;i<l.length;++i)if(l[i].attributes['href'] != null && l[i].attributes['href'].textContent.indexOf(a)!=-1)l[i].remove();}function lcss(n,a){if(n!=a){lcs("/css/modos/"+n+".css");if(a!=-1)rcss(a,-1);}}function rcss(n,a){if(n!=a){rcs("/css/modos/"+n+".css");if(a!=-1)lcss(a,-1);}}

function mueveMenu(e){if(e>document.getElementById('contenido').offsetTop){if(!mueveMenu.m){aC(mueveMenu.f,"menu_fixed");mueveMenu.m=1;}}else if(mueveMenu.m){qC(mueveMenu.f,"menu_fixed");mueveMenu.m=0;}}mueveMenu.m=0;mueveMenu.f=document.getElementById('menu_scroll');
mueveMenu(document.body.scrollTop||document.documentElement.scrollTop);window.addEventListener('scroll',function(e){mueveMenu(e.pageY);},false);

document.getElementById('radio1').onclick=function(){setModoPic(1);};document.getElementById('radio2').onclick=function(){setModoPic(2);};webI=document.getElementById('web');function f(e){var a=document.getElementById('ayuda1');var b=document.getElementById('ayuda2');if(webI.value.length>0||e==1){qC(b,"invisible");aC(a,"invisible");}else{aC(b,"invisible");qC(a,"invisible");}}webI.onblur=f;f();webI.onfocus=function(){f(1);};

document.getElementById("formCalculador").onsubmit=function(e){if(e.target['web'].value=="")return false;aC(document.getElementById('resultado'),"hx100");document.getElementById('resultado').innerHTML='<div class="cargando"></div>';scrollTo(document.getElementById('resultado'),500);};

function getFlashMovie(movieName){var isIE=navigator.appName.indexOf("Microsoft")!=-1;return(isIE)?window[movieName]:document[movieName];}