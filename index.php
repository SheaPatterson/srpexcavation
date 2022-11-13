<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include 'groups-31083e.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            $redirect = 'index.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.php');
            exit;
        }
    }
?>
<?php ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Splash Screen</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://srpexcavation.com/">
<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/SpecialElite.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Special Elite";src:url('css/SpecialElite.woff2') format('woff2'),url('css/SpecialElite.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#fe5000}.v1{display:block;vertical-align:top}.ps1{position:relative;margin-top:0}.s1{width:100%;min-width:1920px;min-height:378px;height:378px}.c2{z-index:2;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps2{display:inline-block;width:0;height:0}.ps3{position:relative;margin-top:10px}.s2{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:368px}.v2{display:inline-block;vertical-align:top}.ps4{position:relative;margin-left:46px;margin-top:6px}.s3{min-width:1815px;width:1815px;min-height:352px}.ps5{position:relative;margin-left:0;margin-top:0}.s4{min-width:348px;width:348px;min-height:352px;height:352px}.c4{z-index:3;pointer-events:auto}.a1{display:block}.i1{position:absolute;left:0;width:348px;height:348px;top:2px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.i2{width:100%;height:100%;display:inline-block}.v3{display:inline-block;vertical-align:top;overflow:visible}.ps6{position:relative;margin-left:1236px;margin-top:248px}.s5{min-width:231px;width:231px;min-height:86px;height:86px}.c5{z-index:4;pointer-events:auto}.m1{padding:0px 0px 0px 0px}.ml1{outline:0}.s6{min-width:231px;width:231px;min-height:86px;height:86px;box-shadow:0 1px 1px rgba(0,0,0,.5);-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.mcv1{display:inline-block}.c6{pointer-events:none;border:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;background-color:#fe5000}.ps7{position:relative;margin-left:0;margin-top:24px}.s7{min-width:231px;width:231px;min-height:38px}.c7{pointer-events:auto;overflow:hidden;height:38px}.p1{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f1{font-family:Quicksand;font-size:36px;font-size:calc(36px * var(--f));line-height:1.112;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:2px 2px 1px rgba(0,0,0,.5)}.c8{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:-16px;min-height:2326px}.s8{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2326px}.s9{width:1936px;margin-left:-8px;min-height:2326px}.ps8{position:relative;margin-left:8px;margin-top:6px}.s10{min-width:1920px;width:1920px;min-height:2310px}.w1{line-height:0}.s11{min-width:1920px;width:1920px;min-height:2310px;height:2310px}.c9{z-index:1;pointer-events:auto}.i3{position:absolute;left:0;width:1920px;height:2310px;top:0;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps9{position:relative;margin-left:46px;margin-top:-1292px}.s12{min-width:1788px;width:1788px;min-height:274px}.c10{z-index:5;pointer-events:auto;overflow:hidden;height:274px}.f2{font-family:"Special Elite";font-size:250px;font-size:calc(250px * var(--f));line-height:1.001;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:-2px 4px 2px #000}.ps10{position:relative;margin-top:-10px}.s13{width:100%;min-width:1920px;min-height:228px;height:228px}.c11{z-index:8;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps11{position:relative;margin-top:46px}.s14{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:136px}.ps12{position:relative;margin-left:722px;margin-top:0}.s15{min-width:1140px;width:1140px;min-height:136px}.s16{min-width:452px;width:452px;min-height:136px}.c12{pointer-events:auto;overflow:hidden;height:136px}.f3{font-family:Quicksand;font-size:24px;font-size:calc(24px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f4{font-family:Arial, Helvetica, sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.584;letter-spacing:normal;color:#fff;background-color:initial}.s17{display:inline-block;height:24px;padding-right:0;vertical-align:top;text-indent:0;transform-origin:50% 100%;transform:scale(1.000) translateY(4px)}.ps13{position:relative;margin-left:456px;margin-top:32px}.s18{min-width:232px;width:232px;min-height:104px;height:104px}.c13{pointer-events:auto}.i4{position:absolute;left:0;width:232px;height:87px;top:9px;-webkit-filter: invert(100%);-moz-filter: invert(100%);filter: invert(100%);border:0}.i5{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s1{min-width:1200px;min-height:236px;height:236px}.ps3{margin-top:4px}.s2{min-width:1200px;width:1200px;min-height:236px}.ps4{margin-left:29px}.s3{min-width:1089px;width:1089px;min-height:220px}.s4{min-width:218px;width:218px;min-height:220px;height:220px}.i1{width:218px;height:218px;top:1px}.ps6{margin-left:772px;margin-top:155px}.s5{min-width:99px;width:99px;min-height:54px;height:54px}.s6{min-width:99px;width:99px;min-height:54px;height:54px}.ps7{margin-top:15px}.s7{min-width:99px;width:99px;min-height:24px}.c7{height:24px}.f1{font-family:Lato;font-size:15px;font-size:calc(15px * var(--f));line-height:1.334;font-weight:400;color:#000;text-shadow:none}.c8{width:max(1200px, 100%);margin-top:-12px;min-height:1460px}.s8{min-width:1200px;width:1200px;min-height:1460px}.s9{width:1216px;min-height:1460px}.s10{min-width:1200px;width:1200px;min-height:1444px}.s11{min-width:1200px;width:1200px;min-height:1444px;height:1444px}.i3{width:1200px;height:1444px}.ps9{margin-left:29px;margin-top:-808px}.s12{min-width:1118px;width:1118px;min-height:171px}.c10{height:171px}.f2{font-size:156px;font-size:calc(156px * var(--f))}.s13{min-width:1200px;min-height:143px;height:143px}.ps11{margin-top:28px}.s14{min-width:1200px;width:1200px;min-height:86px}.ps12{margin-left:451px}.s15{min-width:713px;width:713px;min-height:86px}.s16{min-width:283px;width:283px;min-height:85px}.c12{height:85px}.f3{font-size:15px;font-size:calc(15px * var(--f));line-height:1.734}.f4{font-size:15px;font-size:calc(15px * var(--f));line-height:1.601}.s17{height:15px;transform:scale(1.000) translateY(3px)}.ps13{margin-left:285px;margin-top:21px}.s18{min-width:145px;width:145px;min-height:65px;height:65px}.i4{width:145px;height:55px;top:5px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s1{min-width:960px;min-height:189px;height:189px}.ps3{margin-top:2px}.s2{min-width:960px;width:960px;min-height:192px}.ps4{margin-left:23px}.s3{min-width:908px;width:908px;min-height:176px}.s4{min-width:174px;width:174px;min-height:176px;height:176px}.i1{width:174px;height:174px;top:1px}.ps6{margin-left:618px;margin-top:124px}.s5{min-width:116px;width:116px;min-height:43px;height:43px}.s6{min-width:116px;width:116px;min-height:43px;height:43px}.ps7{margin-top:11px}.s7{min-width:116px;width:116px;min-height:20px}.c7{height:20px}.f1{font-size:18px;font-size:calc(18px * var(--f));text-shadow:1px 1px 1px rgba(0,0,0,.5)}.c8{width:max(960px, 100%);margin-top:-11px;min-height:1171px}.s8{min-width:960px;width:960px;min-height:1171px}.s9{width:976px;min-height:1171px}.s10{min-width:960px;width:960px;min-height:1155px}.s11{min-width:960px;width:960px;min-height:1155px;height:1155px}.i3{width:960px;height:1155px}.ps9{margin-left:23px;margin-top:-646px}.s12{min-width:894px;width:894px;min-height:137px}.c10{height:137px}.f2{font-size:125px;font-size:calc(125px * var(--f))}.s13{min-width:960px;min-height:114px;height:114px}.ps11{margin-top:23px}.s14{min-width:960px;width:960px;min-height:68px}.ps12{margin-left:361px}.s15{min-width:570px;width:570px;min-height:68px}.s16{min-width:226px;width:226px;min-height:68px}.c12{height:68px}.f3{font-size:12px;font-size:calc(12px * var(--f))}.f4{font-size:12px;font-size:calc(12px * var(--f));line-height:1.668}.s17{height:12px;transform:scale(1.000) translateY(3px)}.ps13{margin-left:228px;margin-top:16px}.s18{min-width:116px;width:116px;min-height:52px;height:52px}.i4{width:116px;height:44px;top:4px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s1{min-width:768px;min-height:151px;height:151px}.ps3{margin-top:0}.s2{min-width:768px;width:768px;min-height:157px}.ps4{margin-left:18px}.s3{min-width:725px;width:725px;min-height:141px}.s4{min-width:139px;width:139px;min-height:141px;height:141px}.i1{width:139px;height:139px;top:1px}.ps6{margin-left:495px;margin-top:100px}.s5{min-width:91px;width:91px;min-height:34px;height:34px}.s6{min-width:91px;width:91px;min-height:34px;height:34px}.ps7{margin-top:9px}.s7{min-width:91px;width:91px;min-height:16px}.c7{height:16px}.f1{font-size:14px;font-size:calc(14px * var(--f));line-height:1.144;text-shadow:0 0 1px rgba(0,0,0,.5)}.c8{width:max(768px, 100%);margin-top:-10px;min-height:940px}.s8{min-width:768px;width:768px;min-height:940px}.s9{width:784px;min-height:940px}.s10{min-width:768px;width:768px;min-height:924px}.s11{min-width:768px;width:768px;min-height:924px;height:924px}.i3{width:768px;height:924px}.ps9{margin-left:18px;margin-top:-517px}.s12{min-width:715px;width:715px;min-height:110px}.c10{height:110px}.f2{font-size:100px;font-size:calc(100px * var(--f))}.s13{min-width:768px;min-height:91px;height:91px}.ps11{margin-top:18px}.s14{min-width:768px;width:768px;min-height:55px}.ps12{margin-left:289px}.s15{min-width:456px;width:456px;min-height:55px}.s16{min-width:181px;width:181px;min-height:54px}.c12{height:54px}.f3{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.f4{font-size:9px;font-size:calc(9px * var(--f));line-height:1.557}.s17{height:9px;transform:scale(1.000) translateY(2px)}.ps13{margin-left:182px;margin-top:13px}.s18{min-width:93px;width:93px;min-height:42px;height:42px}.i4{width:93px;height:35px;top:4px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s1{min-width:480px;min-height:95px;height:95px}.ps3{margin-top:-2px}.s2{min-width:480px;width:480px;min-height:104px}.ps4{margin-left:12px}.s3{min-width:454px;width:454px;min-height:88px}.s4{min-width:87px;width:87px;min-height:88px;height:88px}.i1{width:87px;height:87px;top:0}.ps6{margin-left:309px;margin-top:62px}.s5{min-width:58px;width:58px;min-height:22px;height:22px}.s6{min-width:58px;width:58px;min-height:22px;height:22px}.ps7{margin-top:5px}.s7{min-width:58px;width:58px;min-height:11px}.c7{height:11px}.f1{font-size:9px;font-size:calc(9px * var(--f));text-shadow:0 0 1px rgba(0,0,0,.5)}.c8{width:max(480px, 100%);margin-top:-9px;min-height:594px}.s8{min-width:480px;width:480px;min-height:594px}.s9{width:496px;min-height:594px}.s10{min-width:480px;width:480px;min-height:578px}.s11{min-width:480px;width:480px;min-height:578px;height:578px}.i3{width:480px;height:578px}.ps9{margin-left:12px;margin-top:-323px}.s12{min-width:447px;width:447px;min-height:69px}.c10{height:69px}.f2{font-size:62px;font-size:calc(62px * var(--f))}.s13{min-width:480px;min-height:57px;height:57px}.ps11{margin-top:12px}.s14{min-width:480px;width:480px;min-height:34px}.ps12{margin-left:181px}.s15{min-width:285px;width:285px;min-height:34px}.s16{min-width:113px;width:113px;min-height:34px}.c12{height:34px}.f3{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.f4{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.s17{height:6px;transform:scale(1.000) translateY(2px)}.ps13{margin-left:114px;margin-top:7px}.s18{min-width:58px;width:58px;min-height:26px;height:26px}.i4{width:58px;height:22px;top:2px}body{--d:4;--s:480}}@media (max-width:479px) {.s1{min-width:320px;min-height:63px;height:63px}.ps3{margin-top:-3px}.s2{min-width:320px;width:320px;min-height:75px}.ps4{margin-left:8px}.s3{min-width:303px;width:303px;min-height:59px}.s4{min-width:58px;width:58px;min-height:59px;height:59px}.i1{width:58px;height:58px;top:0}.ps6{margin-left:206px;margin-top:41px}.s5{min-width:39px;width:39px;min-height:14px;height:14px}.s6{min-width:39px;width:39px;min-height:14px;height:14px}.ps7{margin-top:3px}.s7{min-width:38px;width:38px;min-height:7px}.c7{height:7px}.f1{font-size:6px;font-size:calc(6px * var(--f));line-height:1.001;text-shadow:0 0 1px rgba(0,0,0,.5)}.c8{width:max(320px, 100%);margin-top:-8px;min-height:401px}.s8{min-width:320px;width:320px;min-height:401px}.s9{width:336px;min-height:401px}.s10{min-width:320px;width:320px;min-height:385px}.s11{min-width:320px;width:320px;min-height:385px;height:385px}.i3{width:320px;height:385px}.ps9{margin-left:8px;margin-top:-215px}.s12{min-width:298px;width:298px;min-height:46px}.c10{height:46px}.f2{font-size:41px;font-size:calc(41px * var(--f))}.s13{min-width:320px;min-height:38px;height:38px}.ps11{margin-top:8px}.s14{min-width:320px;width:320px;min-height:23px}.ps12{margin-left:120px}.s15{min-width:191px;width:191px;min-height:23px}.s16{min-width:75px;width:75px;min-height:23px}.c12{height:23px}.f3{font-size:4px;font-size:calc(4px * var(--f))}.f4{font-size:4px;font-size:calc(4px * var(--f));line-height:1.501}.s17{height:4px;transform:scale(1.000) translateY(1px)}.ps13{margin-left:77px;margin-top:5px}.s18{min-width:39px;width:39px;min-height:17px;height:17px}.i4{width:39px;height:15px;top:1px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-0637be.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-7a3f4b.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<meta name="theme-color" content="#000">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.51b040.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body,n=window.innerWidth,t=getComputedStyle(e).getPropertyValue("--s");n=320==t?Math.min(479,n):480==t?Math.min(610,n):t,e.style.setProperty("--z",Math.trunc(n/t*1000)/1000)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div class="v1 ps1 s1 c2">
<div class="ps2">
</div>
<div class="ps3 v1 s2">
<div class="v2 ps4 s3 c3">
<div class="v2 ps5 s4 c4">
<a href="#" class="a1"><picture class="i2"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58.webp 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116.webp 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174.webp 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58.jpeg 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116.jpeg 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174.jpeg 3x" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87.webp 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-1.webp 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261.webp 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87.jpeg 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-1.jpeg 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261.jpeg 3x" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139.webp 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278.webp 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417.webp 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139.jpeg 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278.jpeg 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417.jpeg 3x" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-2.webp 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348.webp 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522.webp 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-2.jpeg 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348.jpeg 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522.jpeg 3x" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218.webp 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436.webp 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654.webp 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218.jpeg 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436.jpeg 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654.jpeg 3x" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-1.webp 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696.webp 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044.webp 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-1.jpeg 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696.jpeg 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044.jpeg 3x" media="(min-width:1920px)"><img src="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696.jpeg" class="un1 i1"></picture></a>
</div>
<div class="v3 ps6 s5 c5">
<ul class="menu-dropdown v2 ps5 s5 m1" id="m1">
<li class="v2 ps5 s6 mit1">
<a href="user-login.php" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s5 c6"><div class="v2 ps7 s7 c7"><p class="p1 f1">User Login</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="c8">
<div class="ps1 v1 s8">
<div class="s9">
<div class="v2 ps8 s10 c3">
<div class="v2 ps5 s10 w1">
<div class="g1 v2 ps5 s11 c9">
<?php
    $show = TRUE;
    $groups = '["2","3"]';
    if($groups === '!') {
        $show = !isset($_SESSION['user_id']);
    }
    else if($groups !== '*') {
        $show = isset($_SESSION['user_id']) && checkAccess(json_decode($groups));
    }
    if($show) {
?>
<picture class="i2">
<source srcset="images/1680634-320.webp 1x, images/1680634-640.webp 2x, images/1680634-960.webp 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/1680634-320.jpg 1x, images/1680634-640.jpg 2x, images/1680634-960.jpg 3x" media="(max-width:479px)">
<source srcset="images/1680634-480.webp 1x, images/1680634-960-1.webp 2x, images/1680634-1440.webp 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/1680634-480.jpg 1x, images/1680634-960-1.jpg 2x, images/1680634-1440.jpg 3x" media="(max-width:767px)">
<source srcset="images/1680634-768.webp 1x, images/1680634-1536.webp 2x, images/1680634-2304.webp 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/1680634-768.jpg 1x, images/1680634-1536.jpg 2x, images/1680634-2304.jpg 3x" media="(max-width:959px)">
<source srcset="images/1680634-960-2.webp 1x, images/1680634-1920.webp 2x, images/1680634-2880.webp 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/1680634-960-2.jpg 1x, images/1680634-1920.jpg 2x, images/1680634-2880.jpg 3x" media="(max-width:1199px)">
<source srcset="images/1680634-1200.webp 1x, images/1680634-2400.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/1680634-1200.jpg 1x, images/1680634-2400.jpg 2x" media="(max-width:1919px)">
<source srcset="images/1680634-1920-1.webp 1x, images/1680634-3840.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/1680634-1920-1.jpg 1x, images/1680634-3840.jpg 2x" media="(min-width:1920px)">
<img src="images/1680634-3840.jpg" class="un2 i3">
</picture>
<?php
    }
    else {
        $groupClass = 'g1';
        if($groupClass !== NULL) {
            echo "<style>.{$groupClass}{visibility:hidden}</style>";
        }
    }
?>

</div>
<div class="v2 ps9 s12 c10">
<h1 class="p1 f2">Coming Soon</h1>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="v1 ps10 s13 c11">
<div class="ps2">
</div>
<div class="ps11 v1 s14">
<div class="v2 ps12 s15 c3">
<div class="v2 ps5 s16 c12">
<p class="p1"><span class="f3">Copyright </span><span class="f4"><x-svg class="s17"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM199.2 312.6c14.94 15.06 34.8 23.38 55.89 23.38c.0313 0 0 0 0 0c21.06 0 40.92-8.312 55.83-23.38c9.375-9.375 24.53-9.469 33.97-.1562c9.406 9.344 9.469 24.53 .1562 33.97c-24 24.22-55.95 37.56-89.95 37.56c0 0 .0313 0 0 0c-33.97 0-65.95-13.34-89.95-37.56c-49.44-49.88-49.44-131 0-180.9c24-24.22 55.98-37.56 89.95-37.56c.0313 0 0 0 0 0c34 0 65.95 13.34 89.95 37.56c9.312 9.438 9.25 24.62-.1562 33.97c-9.438 9.344-24.59 9.188-33.97-.1562c-14.91-15.06-34.77-23.38-55.83-23.38c0 0 .0313 0 0 0c-21.09 0-40.95 8.312-55.89 23.38C168.3 230.6 168.3 281.4 199.2 312.6z'/></svg></x-svg></span><span class="f3"> 2022</span></p>
<p class="p1 f3">SRP Consulting Group, LLC</p>
<p class="p1 f3">All Rights Reserved.</p>
</div>
<div class="v2 ps13 s18 c13">
<picture class="i5">
<source srcset="images/img_1467-39.webp 1x, images/img_1467-78.webp 2x, images/img_1467-117.webp 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_1467-39.png 1x, images/img_1467-78.png 2x, images/img_1467-117.png 3x" media="(max-width:479px)">
<source srcset="images/img_1467-58.webp 1x, images/img_1467-116.webp 2x, images/img_1467-174.webp 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_1467-58.png 1x, images/img_1467-116.png 2x, images/img_1467-174.png 3x" media="(max-width:767px)">
<source srcset="images/img_1467-93.webp 1x, images/img_1467-186.webp 2x, images/img_1467-279.webp 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_1467-93.png 1x, images/img_1467-186.png 2x, images/img_1467-279.png 3x" media="(max-width:959px)">
<source srcset="images/img_1467-116-1.webp 1x, images/img_1467-232.webp 2x, images/img_1467-348.webp 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_1467-116-1.png 1x, images/img_1467-232.png 2x, images/img_1467-348.png 3x" media="(max-width:1199px)">
<source srcset="images/img_1467-145.webp 1x, images/img_1467-290.webp 2x, images/img_1467-435.webp 3x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_1467-145.png 1x, images/img_1467-290.png 2x, images/img_1467-435.png 3x" media="(max-width:1919px)">
<source srcset="images/img_1467-232-1.webp 1x, images/img_1467-464.webp 2x, images/img_1467-696.webp 3x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_1467-232-1.png 1x, images/img_1467-464.png 2x, images/img_1467-696.png 3x" media="(min-width:1920px)">
<img src="images/img_1467-464.png" class="un3 i4">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>dpth="/";!function(){for(var e=["js/jquery.5fa783.js","js/jqueryui.5fa783.js","js/menu.5fa783.js","js/menu-dropdown-animations.5fa783.js","js/menu-dropdown.51b040.js","js/index.51b040.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<6&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<6;o++)t(o)}();
</script>
</body>
</html>