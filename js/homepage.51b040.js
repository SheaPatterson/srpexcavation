(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
var wl;

var lwi=-1;function thresholdPassed(){var w=$(window).width();var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}
ldsrcset=function(t){var e,r=document.querySelectorAll(t);for(e=0;e<r.length;e++){var c=r[e].getAttribute("data-srcset");r[e].setAttribute("srcset",c)}},ldsrc=function(t){var e=document.querySelector(t),r=e.getAttribute("data-src");e.setAttribute("src",r)};ldv=function(t){var e=document.querySelector(t),r=document.querySelector(t+" source"),c=r.getAttribute("data-src");r.setAttribute("src",c),e.play()};!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();

$(function(){
r=function(){if(thresholdPassed()){dpi=window.devicePixelRatio;if($(window).width()>=1920){var a='data-src';var e=document.querySelector('.un23');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,'images/svl65-2-product-image-1-554-1.png');
var a='data-src';var e=document.querySelector('.un24');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/kubota_kx057_5-1.jpg-1677.png':'images/kubota_kx057_5-1.jpg-1118.png'):'images/kubota_kx057_5-1.jpg-559.png');
var a='data-src';var e=document.querySelector('.un25');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/2000000010-1132.png':'images/2000000010-566-1.png');
var a='data-src';var e=document.querySelector('.un26');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-696.png':'images/img_1467-464.png'):'images/img_1467-232-1.png');
var e=document.querySelector('.un19');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-1.jpeg');
var e=document.querySelector('.un20');e.setAttribute('src',(dpi>1)?'images/1680634-3840-1.jpg':'images/1680634-1920-3.jpg');
var e=document.querySelector('.un21');e.setAttribute('src','images/51663-1920-1.jpg');
var e=document.querySelector('.un22');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/3089187-5760.jpg':'images/3089187-3840.jpg'):'images/3089187-1920-1.jpg');}else if($(window).width()>=1200){var a='data-src';var e=document.querySelector('.un23');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/svl65-2-product-image-1-692.png':'images/svl65-2-product-image-1-346.png');
var a='data-src';var e=document.querySelector('.un24');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/kubota_kx057_5-1.jpg-1047.png':'images/kubota_kx057_5-1.jpg-698.png'):'images/kubota_kx057_5-1.jpg-349.png');
var a='data-src';var e=document.querySelector('.un25');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/2000000010-708.png':'images/2000000010-354.png');
var a='data-src';var e=document.querySelector('.un26');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-435.png':'images/img_1467-290.png'):'images/img_1467-145.png');
var e=document.querySelector('.un19');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218.jpeg');
var e=document.querySelector('.un20');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/1680634-3600.jpg':'images/1680634-2400-1.jpg'):'images/1680634-1200-1.jpg');
var e=document.querySelector('.un21');e.setAttribute('src','images/51663-1200.jpg');
var e=document.querySelector('.un22');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/3089187-3600.jpg':'images/3089187-2400.jpg'):'images/3089187-1200.jpg');}else if($(window).width()>=960){var a='data-src';var e=document.querySelector('.un23');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/svl65-2-product-image-1-554.png':'images/svl65-2-product-image-1-277.png');
var a='data-src';var e=document.querySelector('.un24');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/kubota_kx057_5-1.jpg-840.png':'images/kubota_kx057_5-1.jpg-560.png'):'images/kubota_kx057_5-1.jpg-280-1.png');
var a='data-src';var e=document.querySelector('.un25');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/2000000010-849.png':'images/2000000010-566.png'):'images/2000000010-283.png');
var a='data-src';var e=document.querySelector('.un26');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-348.png':'images/img_1467-232.png'):'images/img_1467-116-1.png');
var e=document.querySelector('.un19');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-2.jpeg');
var e=document.querySelector('.un20');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/1680634-2880-1.jpg':'images/1680634-1920-2.jpg'):'images/1680634-960-5.jpg');
var e=document.querySelector('.un21');e.setAttribute('src',(dpi>1)?'images/51663-1920.jpg':'images/51663-960-2.jpg');
var e=document.querySelector('.un22');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/3089187-2880.jpg':'images/3089187-1920.jpg'):'images/3089187-960-2.jpg');}else if($(window).width()>=768){var a='data-src';var e=document.querySelector('.un23');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?'images/svl65-2-product-image-1-444.png':'images/svl65-2-product-image-1-222.png');
var a='data-src';var e=document.querySelector('.un24');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/kubota_kx057_5-1.jpg-672.png':'images/kubota_kx057_5-1.jpg-448.png'):'images/kubota_kx057_5-1.jpg-224.png');
var a='data-src';var e=document.querySelector('.un25');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/2000000010-678.png':'images/2000000010-452.png'):'images/2000000010-226.png');
var a='data-src';var e=document.querySelector('.un26');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-279.png':'images/img_1467-186.png'):'images/img_1467-93.png');
var e=document.querySelector('.un19');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139.jpeg');
var e=document.querySelector('.un20');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/1680634-2304-1.jpg':'images/1680634-1536-1.jpg'):'images/1680634-768-1.jpg');
var e=document.querySelector('.un21');e.setAttribute('src',(dpi>1)?'images/51663-1536.jpg':'images/51663-768.jpg');
var e=document.querySelector('.un22');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/3089187-2304.jpg':'images/3089187-1536.jpg'):'images/3089187-768.jpg');}else if($(window).width()>=480){var a='data-src';var e=document.querySelector('.un23');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/svl65-2-product-image-1-417.png':'images/svl65-2-product-image-1-278.png'):'images/svl65-2-product-image-1-139.png');
var a='data-src';var e=document.querySelector('.un24');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/kubota_kx057_5-1.jpg-420.png':'images/kubota_kx057_5-1.jpg-280.png'):'images/kubota_kx057_5-1.jpg-140.png');
var a='data-src';var e=document.querySelector('.un25');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/2000000010-426.png':'images/2000000010-284.png'):'images/2000000010-142.png');
var a='data-src';var e=document.querySelector('.un26');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-174.png':'images/img_1467-116.png'):'images/img_1467-58.png');
var e=document.querySelector('.un19');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-1.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87.jpeg');
var e=document.querySelector('.un20');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/1680634-1440-1.jpg':'images/1680634-960-4.jpg'):'images/1680634-480-1.jpg');
var e=document.querySelector('.un21');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/51663-1440.jpg':'images/51663-960-1.jpg'):'images/51663-480.jpg');
var e=document.querySelector('.un22');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/3089187-1440.jpg':'images/3089187-960-1.jpg'):'images/3089187-480.jpg');}else{var a='data-src';var e=document.querySelector('.un23');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/svl65-2-product-image-1-276.png':'images/svl65-2-product-image-1-184.png'):'images/svl65-2-product-image-1-92.png');
var a='data-src';var e=document.querySelector('.un24');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/kubota_kx057_5-1.jpg-279.png':'images/kubota_kx057_5-1.jpg-186.png'):'images/kubota_kx057_5-1.jpg-93.png');
var a='data-src';var e=document.querySelector('.un25');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/2000000010-282.png':'images/2000000010-188.png'):'images/2000000010-94.png');
var a='data-src';var e=document.querySelector('.un26');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-117.png':'images/img_1467-78.png'):'images/img_1467-39.png');
var e=document.querySelector('.un19');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174.jpeg':'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116.jpeg'):'images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58.jpeg');
var e=document.querySelector('.un20');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/1680634-960-3.jpg':'images/1680634-640-1.jpg'):'images/1680634-320-1.jpg');
var e=document.querySelector('.un21');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/51663-960.jpg':'images/51663-640.jpg'):'images/51663-320.jpg');
var e=document.querySelector('.un22');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/3089187-960.jpg':'images/3089187-640.jpg'):'images/3089187-320.jpg');}}};
if(!window.HTMLPictureElement){$(window).resize(r);r();}
!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var o=0;if(e.hash.length>1){var l=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));l||(l=1);var n=document.querySelectorAll('[name="'+e.hash.slice(1)+'"]')[0];o=(n.getBoundingClientRect().top+pageYOffset)*l}if("scrollBehavior"in document.documentElement.style)scroll({top:o,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var r=pageYOffset,a=null;requestAnimationFrame(function e(t){a||(a=t);var l=t-a;scrollTo(0,r<o?(o-r)*l/400+r:r-(r-o)*l/400),l<400?requestAnimationFrame(e):scrollTo(0,o)})}else scrollTo(0,o);t.preventDefault()},!1)})}();
initMenu($('#m1')[0]);
if(location.hash){var e=location.hash.replace("#",""),o=function(){var t=document.querySelectorAll('[name="'+e+'"]')[0];t&&t.scrollIntoView(),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")&&setTimeout(o,100)};o()}

});lfn=function(){ldsrcset('.un67 source');ldsrcset('.un68 source');ldsrcset('.un69 source');ldsrcset('.un70 source');};if(document.readyState=="complete"){lfn();}else{$(window).on("load",lfn);}