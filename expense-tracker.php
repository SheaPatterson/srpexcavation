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
            $redirect = 'expense-tracker.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.php');
            exit;
        }
    }
    $acg = isset($access_control_groups['EEA7CBE1-6DBF-44FE-8FF3-FEC5407F9DCA']) ? $access_control_groups['EEA7CBE1-6DBF-44FE-8FF3-FEC5407F9DCA'] : NULL;
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'expense-tracker.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Expense Tracker</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://srpexcavation.com/expense-tracker.php">
<meta name="robots" content="noindex,noarchive">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#fff}.v13{display:block;vertical-align:top}.ps71{position:relative;margin-top:0}.s88{width:100%;min-width:1920px;min-height:378px;height:378px}.c63{z-index:1;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps72{display:inline-block;width:0;height:0}.ps73{position:relative;margin-top:10px}.s89{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:368px}.v14{display:inline-block;vertical-align:top}.ps74{position:relative;margin-left:46px;margin-top:6px}.s90{min-width:1815px;width:1815px;min-height:352px}.ps75{position:relative;margin-left:0;margin-top:0}.s91{min-width:348px;width:348px;min-height:352px;height:352px}.c65{z-index:2;pointer-events:auto}.a5{display:block}.i17{position:absolute;left:0;width:348px;height:348px;top:2px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.i18{width:100%;height:100%;display:inline-block}.v15{display:inline-block;vertical-align:top;overflow:visible}.ps76{position:relative;margin-left:1236px;margin-top:248px}.s92{min-width:231px;width:231px;min-height:86px;height:86px}.c66{z-index:3;pointer-events:auto}.m5{padding:0px 0px 0px 0px}.ml5{outline:0}.s93{min-width:231px;width:231px;min-height:86px;height:86px;box-shadow:0 1px 1px rgba(0,0,0,.5);-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.mcv5{display:inline-block}.c67{pointer-events:none;border:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;background-color:#fe5000}.ps77{position:relative;margin-left:0;margin-top:24px}.s94{min-width:231px;width:231px;min-height:38px}.c68{pointer-events:auto;overflow:hidden;height:38px}.p7{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f20{font-family:Quicksand;font-size:36px;font-size:calc(36px * var(--f));line-height:1.112;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:2px 2px 1px rgba(0,0,0,.5)}.ps78{position:relative;margin-top:110px}.s95{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:3520px}.s96{min-width:1920px;width:1920px;min-height:3520px;height:3520px}.c69{z-index:4;pointer-events:auto}.wrapper4{font-size:15px;line-height:1.4;height:3520px}.wrapper4 div, .wrapper4 p, .wrapper4 a{font-size:15px;line-height:1.4}.wrapper4 input{font-size:15px;line-height:1.4;margin:3px 2px 3px 2px}.ps79{position:relative;margin-top:168px}.s97{width:100%;min-width:1920px;min-height:228px;height:228px}.c70{z-index:7;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps80{position:relative;margin-top:46px}.s98{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:136px}.ps81{position:relative;margin-left:722px;margin-top:0}.s99{min-width:1140px;width:1140px;min-height:136px}.s100{min-width:452px;width:452px;min-height:136px}.c71{pointer-events:auto;overflow:hidden;height:136px}.f21{font-family:Quicksand;font-size:24px;font-size:calc(24px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f22{font-family:Arial, Helvetica, sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.584;letter-spacing:normal;color:#fff;background-color:initial}.s101{display:inline-block;height:24px;padding-right:0;vertical-align:top;text-indent:0;transform-origin:50% 100%;transform:scale(1.000) translateY(4px)}.ps82{position:relative;margin-left:456px;margin-top:32px}.s102{min-width:232px;width:232px;min-height:104px;height:104px}.c72{pointer-events:auto}.i19{position:absolute;left:0;width:232px;height:87px;top:9px;-webkit-filter: invert(100%);-moz-filter: invert(100%);filter: invert(100%);border:0}.i20{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s88{min-width:1200px;min-height:236px;height:236px}.ps73{margin-top:4px}.s89{min-width:1200px;width:1200px;min-height:236px}.ps74{margin-left:29px}.s90{min-width:1089px;width:1089px;min-height:220px}.s91{min-width:218px;width:218px;min-height:220px;height:220px}.i17{width:218px;height:218px;top:1px}.ps76{margin-left:772px;margin-top:155px}.s92{min-width:99px;width:99px;min-height:54px;height:54px}.s93{min-width:99px;width:99px;min-height:54px;height:54px}.ps77{margin-top:15px}.s94{min-width:99px;width:99px;min-height:24px}.c68{height:24px}.f20{font-family:Lato;font-size:15px;font-size:calc(15px * var(--f));line-height:1.334;font-weight:400;color:#000;text-shadow:none}.ps78{margin-top:69px}.s95{min-width:1200px;width:1200px;min-height:2200px}.s96{min-width:1200px;width:1200px;min-height:2200px;height:2200px}.wrapper4{height:2200px}.ps79{margin-top:106px}.s97{min-width:1200px;min-height:143px;height:143px}.ps80{margin-top:28px}.s98{min-width:1200px;width:1200px;min-height:85px}.ps81{margin-left:451px}.s99{min-width:713px;width:713px;min-height:85px}.s100{min-width:283px;width:283px;min-height:85px}.c71{height:85px}.f21{font-size:15px;font-size:calc(15px * var(--f));line-height:1.734}.f22{font-size:15px;font-size:calc(15px * var(--f));line-height:1.601}.s101{height:15px;transform:scale(1.000) translateY(3px)}.ps82{margin-left:285px;margin-top:20px}.s102{min-width:145px;width:145px;min-height:65px;height:65px}.i19{width:145px;height:55px;top:5px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s88{min-width:960px;min-height:189px;height:189px}.ps73{margin-top:2px}.s89{min-width:960px;width:960px;min-height:192px}.ps74{margin-left:23px}.s90{min-width:908px;width:908px;min-height:176px}.s91{min-width:174px;width:174px;min-height:176px;height:176px}.i17{width:174px;height:174px;top:1px}.ps76{margin-left:618px;margin-top:124px}.s92{min-width:116px;width:116px;min-height:43px;height:43px}.s93{min-width:116px;width:116px;min-height:43px;height:43px}.ps77{margin-top:11px}.s94{min-width:116px;width:116px;min-height:20px}.c68{height:20px}.f20{font-size:18px;font-size:calc(18px * var(--f));text-shadow:1px 1px 1px rgba(0,0,0,.5)}.ps78{margin-top:55px}.s95{min-width:960px;width:960px;min-height:1760px}.s96{min-width:960px;width:960px;min-height:1760px;height:1760px}.wrapper4{height:1760px}.ps79{margin-top:84px}.s97{min-width:960px;min-height:114px;height:114px}.ps80{margin-top:23px}.s98{min-width:960px;width:960px;min-height:68px}.ps81{margin-left:361px}.s99{min-width:570px;width:570px;min-height:68px}.s100{min-width:226px;width:226px;min-height:68px}.c71{height:68px}.f21{font-size:12px;font-size:calc(12px * var(--f))}.f22{font-size:12px;font-size:calc(12px * var(--f));line-height:1.668}.s101{height:12px;transform:scale(1.000) translateY(3px)}.ps82{margin-left:228px;margin-top:16px}.s102{min-width:116px;width:116px;min-height:52px;height:52px}.i19{width:116px;height:44px;top:4px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s88{min-width:768px;min-height:151px;height:151px}.ps73{margin-top:0}.s89{min-width:768px;width:768px;min-height:157px}.ps74{margin-left:18px}.s90{min-width:725px;width:725px;min-height:141px}.s91{min-width:139px;width:139px;min-height:141px;height:141px}.i17{width:139px;height:139px;top:1px}.ps76{margin-left:495px;margin-top:100px}.s92{min-width:91px;width:91px;min-height:34px;height:34px}.s93{min-width:91px;width:91px;min-height:34px;height:34px}.ps77{margin-top:9px}.s94{min-width:91px;width:91px;min-height:16px}.c68{height:16px}.f20{font-size:14px;font-size:calc(14px * var(--f));line-height:1.144;text-shadow:0 0 1px rgba(0,0,0,.5)}.ps78{margin-top:44px}.s95{min-width:768px;width:768px;min-height:1408px}.s96{min-width:768px;width:768px;min-height:1408px;height:1408px}.wrapper4{height:1408px}.ps79{margin-top:68px}.s97{min-width:768px;min-height:91px;height:91px}.ps80{margin-top:18px}.s98{min-width:768px;width:768px;min-height:55px}.ps81{margin-left:289px}.s99{min-width:456px;width:456px;min-height:55px}.s100{min-width:181px;width:181px;min-height:54px}.c71{height:54px}.f21{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.f22{font-size:9px;font-size:calc(9px * var(--f));line-height:1.557}.s101{height:9px;transform:scale(1.000) translateY(2px)}.ps82{margin-left:182px;margin-top:13px}.s102{min-width:93px;width:93px;min-height:42px;height:42px}.i19{width:93px;height:35px;top:4px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s88{min-width:480px;min-height:95px;height:95px}.ps73{margin-top:-2px}.s89{min-width:480px;width:480px;min-height:104px}.ps74{margin-left:12px}.s90{min-width:454px;width:454px;min-height:88px}.s91{min-width:87px;width:87px;min-height:88px;height:88px}.i17{width:87px;height:87px;top:0}.ps76{margin-left:309px;margin-top:62px}.s92{min-width:58px;width:58px;min-height:22px;height:22px}.s93{min-width:58px;width:58px;min-height:22px;height:22px}.ps77{margin-top:5px}.s94{min-width:58px;width:58px;min-height:11px}.c68{height:11px}.f20{font-size:9px;font-size:calc(9px * var(--f));text-shadow:0 0 1px rgba(0,0,0,.5)}.ps78{margin-top:27px}.s95{min-width:480px;width:480px;min-height:880px}.s96{min-width:480px;width:480px;min-height:880px;height:880px}.wrapper4{height:880px}.ps79{margin-top:42px}.s97{min-width:480px;min-height:57px;height:57px}.ps80{margin-top:12px}.s98{min-width:480px;width:480px;min-height:34px}.ps81{margin-left:181px}.s99{min-width:285px;width:285px;min-height:34px}.s100{min-width:113px;width:113px;min-height:34px}.c71{height:34px}.f21{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.f22{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.s101{height:6px;transform:scale(1.000) translateY(2px)}.ps82{margin-left:114px;margin-top:8px}.s102{min-width:58px;width:58px;min-height:26px;height:26px}.i19{width:58px;height:22px;top:2px}body{--d:4;--s:480}}@media (max-width:479px) {.s88{min-width:320px;min-height:63px;height:63px}.ps73{margin-top:-3px}.s89{min-width:320px;width:320px;min-height:75px}.ps74{margin-left:8px}.s90{min-width:303px;width:303px;min-height:59px}.s91{min-width:58px;width:58px;min-height:59px;height:59px}.i17{width:58px;height:58px;top:0}.ps76{margin-left:206px;margin-top:41px}.s92{min-width:39px;width:39px;min-height:14px;height:14px}.s93{min-width:39px;width:39px;min-height:14px;height:14px}.ps77{margin-top:3px}.s94{min-width:38px;width:38px;min-height:7px}.c68{height:7px}.f20{font-size:6px;font-size:calc(6px * var(--f));line-height:1.001;text-shadow:0 0 1px rgba(0,0,0,.5)}.ps78{margin-top:18px}.s95{min-width:320px;width:320px;min-height:587px}.s96{min-width:320px;width:320px;min-height:587px;height:587px}.wrapper4{height:587px}.ps79{margin-top:28px}.s97{min-width:320px;min-height:38px;height:38px}.ps80{margin-top:8px}.s98{min-width:320px;width:320px;min-height:23px}.ps81{margin-left:120px}.s99{min-width:191px;width:191px;min-height:23px}.s100{min-width:75px;width:75px;min-height:23px}.c71{height:23px}.f21{font-size:4px;font-size:calc(4px * var(--f))}.f22{font-size:4px;font-size:calc(4px * var(--f));line-height:1.501}.s101{height:4px;transform:scale(1.000) translateY(1px)}.ps82{margin-left:77px;margin-top:5px}.s102{min-width:39px;width:39px;min-height:17px;height:17px}.i19{width:39px;height:15px;top:1px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-0637be.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-7a3f4b.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/employee-portal.51b040.php" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body,n=window.innerWidth,t=getComputedStyle(e).getPropertyValue("--s");n=320==t?Math.min(479,n):480==t?Math.min(610,n):t,e.style.setProperty("--z",Math.trunc(n/t*1000)/1000)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div class="v13 ps71 s88 c63">
<div class="ps72">
</div>
<div class="ps73 v13 s89">
<div class="v14 ps74 s90 c64">
<div class="v14 ps75 s91 c65">
<a href="./" class="a5"><picture class="i18"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58-11.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116-11.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-31.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58-10.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116-10.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-30.php 3x" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87-11.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-33.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261-11.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87-10.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-32.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261-10.php 3x" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139-11.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278-11.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417-11.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139-10.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278-10.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417-10.php 3x" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-35.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-21.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522-11.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-34.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-20.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522-10.php 3x" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218-11.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436-11.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654-11.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218-10.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436-10.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654-10.php 3x" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-23.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-11.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044-11.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-22.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-10.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044-10.php 3x" media="(min-width:1920px)"><img src="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-10.php" class="un49 i17"></picture></a>
</div>
<div class="v15 ps76 s92 c66">
<ul class="menu-dropdown v14 ps75 s92 m5" id="m1">
<li class="v14 ps75 s93 mit5">
<a href="user-login.php" class="ml5"><div class="menu-content mcv5"><div class="v14 ps75 s92 c67"><div class="v14 ps77 s94 c68"><p class="p7 f20">User Login</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="ps78 v13 s95">
<div class="v14 ps75 s96 c69">
<div class="wrapper4">
<script src="https://static.airtable.com/js/embed/embed_snippet_v1.js"></script><iframe class="airtable-embed airtable-dynamic-height" src="https://airtable.com/embed/shrqwpW67xUk3TBIc?backgroundColor=white" frameborder="0" onmousewheel="" width="100%" height="1759" style="background: transparent; border: 1px solid #ccc;"></iframe>
</div>
</div>
</div>
<div class="v13 ps79 s97 c70">
<div class="ps72">
</div>
<div class="ps80 v13 s98">
<div class="v14 ps81 s99 c64">
<div class="v14 ps75 s100 c71">
<p class="p7"><span class="f21">Copyright </span><span class="f22"><x-svg class="s101"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM199.2 312.6c14.94 15.06 34.8 23.38 55.89 23.38c.0313 0 0 0 0 0c21.06 0 40.92-8.312 55.83-23.38c9.375-9.375 24.53-9.469 33.97-.1562c9.406 9.344 9.469 24.53 .1562 33.97c-24 24.22-55.95 37.56-89.95 37.56c0 0 .0313 0 0 0c-33.97 0-65.95-13.34-89.95-37.56c-49.44-49.88-49.44-131 0-180.9c24-24.22 55.98-37.56 89.95-37.56c.0313 0 0 0 0 0c34 0 65.95 13.34 89.95 37.56c9.312 9.438 9.25 24.62-.1562 33.97c-9.438 9.344-24.59 9.188-33.97-.1562c-14.91-15.06-34.77-23.38-55.83-23.38c0 0 .0313 0 0 0c-21.09 0-40.95 8.312-55.89 23.38C168.3 230.6 168.3 281.4 199.2 312.6z'/></svg></x-svg></span><span class="f21"> 2022</span></p>
<p class="p7 f21">SRP Consulting Group, LLC</p>
<p class="p7 f21">All Rights Reserved.</p>
</div>
<div class="v14 ps82 s102 c72">
<picture class="i20">
<source srcset="images/img_1467-39-11.php 1x, images/img_1467-78-11.php 2x, images/img_1467-117-11.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_1467-39-10.php 1x, images/img_1467-78-10.php 2x, images/img_1467-117-10.php 3x" media="(max-width:479px)">
<source srcset="images/img_1467-58-11.php 1x, images/img_1467-116-21.php 2x, images/img_1467-174-11.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_1467-58-10.php 1x, images/img_1467-116-20.php 2x, images/img_1467-174-10.php 3x" media="(max-width:767px)">
<source srcset="images/img_1467-93-11.php 1x, images/img_1467-186-11.php 2x, images/img_1467-279-11.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_1467-93-10.php 1x, images/img_1467-186-10.php 2x, images/img_1467-279-10.php 3x" media="(max-width:959px)">
<source srcset="images/img_1467-116-23.php 1x, images/img_1467-232-21.php 2x, images/img_1467-348-11.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_1467-116-22.php 1x, images/img_1467-232-20.php 2x, images/img_1467-348-10.php 3x" media="(max-width:1199px)">
<source srcset="images/img_1467-145-11.php 1x, images/img_1467-290-11.php 2x, images/img_1467-435-11.php 3x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_1467-145-10.php 1x, images/img_1467-290-10.php 2x, images/img_1467-435-10.php 3x" media="(max-width:1919px)">
<source srcset="images/img_1467-232-23.php 1x, images/img_1467-464-11.php 2x, images/img_1467-696-11.php 3x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_1467-232-22.php 1x, images/img_1467-464-10.php 2x, images/img_1467-696-10.php 3x" media="(min-width:1920px)">
<img src="images/img_1467-464-10.php" class="un50 i19">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>dpth="/";!function(){for(var e=["js/jquery.5fa783.js","js/jqueryui.5fa783.js","js/menu.5fa783.js","js/menu-dropdown-animations.5fa783.js","js/menu-dropdown.51b040.js","js/expense-tracker.51b040.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<6&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<6;o++)t(o)}();
</script>
</body>
</html>