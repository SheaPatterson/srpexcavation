(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
var wl;

var lwi=-1;function thresholdPassed(){var w=$(window).width();var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}
!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();

$(function(){
r=function(){if(thresholdPassed()){dpi=window.devicePixelRatio;if($(window).width()>=1920){var e=document.querySelector('.un73');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044-14.php':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-14.php'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-30.php');
var e=document.querySelector('.un74');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-696-14.php':'images/img_1467-464-14.php'):'images/img_1467-232-30.php');}else if($(window).width()>=1200){var e=document.querySelector('.un73');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654-14.php':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436-14.php'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218-14.php');
var e=document.querySelector('.un74');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-435-14.php':'images/img_1467-290-14.php'):'images/img_1467-145-14.php');}else if($(window).width()>=960){var e=document.querySelector('.un73');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522-14.php':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-28.php'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-46.php');
var e=document.querySelector('.un74');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-348-14.php':'images/img_1467-232-28.php'):'images/img_1467-116-30.php');}else if($(window).width()>=768){var e=document.querySelector('.un73');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417-14.php':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278-14.php'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139-14.php');
var e=document.querySelector('.un74');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-279-14.php':'images/img_1467-186-14.php'):'images/img_1467-93-14.php');}else if($(window).width()>=480){var e=document.querySelector('.un73');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261-14.php':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-44.php'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87-14.php');
var e=document.querySelector('.un74');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-174-14.php':'images/img_1467-116-28.php'):'images/img_1467-58-14.php');}else{var e=document.querySelector('.un73');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-42.php':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116-14.php'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58-14.php');
var e=document.querySelector('.un74');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/img_1467-117-14.php':'images/img_1467-78-14.php'):'images/img_1467-39-14.php');}}};
if(!window.HTMLPictureElement){$(window).resize(r);r();}
!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var o=0;if(e.hash.length>1){var l=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));l||(l=1);var n=document.querySelectorAll('[name="'+e.hash.slice(1)+'"]')[0];o=(n.getBoundingClientRect().top+pageYOffset)*l}if("scrollBehavior"in document.documentElement.style)scroll({top:o,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var r=pageYOffset,a=null;requestAnimationFrame(function e(t){a||(a=t);var l=t-a;scrollTo(0,r<o?(o-r)*l/400+r:r-(r-o)*l/400),l<400?requestAnimationFrame(e):scrollTo(0,o)})}else scrollTo(0,o);t.preventDefault()},!1)})}();
initMenu($('#m1')[0]);
if(location.hash){var e=location.hash.replace("#",""),o=function(){var t=document.querySelectorAll('[name="'+e+'"]')[0];t&&t.scrollIntoView(),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")&&setTimeout(o,100)};o()}

});