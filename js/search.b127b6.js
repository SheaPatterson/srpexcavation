(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
var wl;

var lwi=-1;function thresholdPassed(){var w=$(window).width();var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}
!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();

$(function(){
r=function(){if(thresholdPassed()){dpi=window.devicePixelRatio;if($(window).width()>=1920){var e=document.querySelector('.un302');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-864.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-576.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-288-1.jpeg');
var e=document.querySelector('.un303');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-180.png':'images/img_1467-120.png'):'images/img_1467-60-1.png');}else if($(window).width()>=1200){var e=document.querySelector('.un302');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-540.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-360-1.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-180.jpeg');
var e=document.querySelector('.un303');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-114.png':'images/img_1467-76.png'):'images/img_1467-38.png');}else if($(window).width()>=960){var e=document.querySelector('.un302');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-432.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-288.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-144-2.jpeg');
var e=document.querySelector('.un303');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-90.png':'images/img_1467-60.png'):'images/img_1467-30-2.png');}else if($(window).width()>=768){var e=document.querySelector('.un302');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-345.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-230.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-115.jpeg');
var e=document.querySelector('.un303');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-72.png':'images/img_1467-48.png'):'images/img_1467-24.png');}else if($(window).width()>=480){var e=document.querySelector('.un302');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-216.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-144-1.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-72.jpeg');
var e=document.querySelector('.un303');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-45.png':'images/img_1467-30-1.png'):'images/img_1467-15.png');}else{var e=document.querySelector('.un302');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-144.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-96.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-48.jpeg');
var e=document.querySelector('.un303');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-30.png':'images/img_1467-20.png'):'images/img_1467-10.png');}}};
if(!window.HTMLPictureElement){$(window).resize(r);r();}
!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var o=0;if(e.hash.length>1){var l=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));l||(l=1);var n=document.querySelectorAll('[name="'+e.hash.slice(1)+'"]')[0];o=(n.getBoundingClientRect().top+pageYOffset)*l}if("scrollBehavior"in document.documentElement.style)scroll({top:o,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var r=pageYOffset,a=null;requestAnimationFrame(function e(t){a||(a=t);var l=t-a;scrollTo(0,r<o?(o-r)*l/400+r:r-(r-o)*l/400),l<400?requestAnimationFrame(e):scrollTo(0,o)})}else scrollTo(0,o);t.preventDefault()},!1)})}();
initMenu($('#m1')[0]);
if(location.hash){var e=location.hash.replace("#",""),o=function(){var t=document.querySelectorAll('[name="'+e+'"]')[0];t&&t.scrollIntoView(),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")&&setTimeout(o,100)};o()}

});