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
            $redirect = 'equipment-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.php');
            exit;
        }
    }
    $acg = isset($access_control_groups['3CB85CF1-0307-4F7A-9D57-96F1F3AC3FF9']) ? $access_control_groups['3CB85CF1-0307-4F7A-9D57-96F1F3AC3FF9'] : NULL;
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'equipment-logbook.php';
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
<title>Equipment Logbook</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://srpexcavation.com/equipment-logbook.php">
<meta name="robots" content="noindex,noarchive">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#fff}.v7{display:block;vertical-align:top}.ps47{position:relative;margin-top:0}.s58{width:100%;min-width:1920px;min-height:378px;height:378px}.c43{z-index:1;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps48{display:inline-block;width:0;height:0}.ps49{position:relative;margin-top:10px}.s59{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:368px}.v8{display:inline-block;vertical-align:top}.ps50{position:relative;margin-left:46px;margin-top:6px}.s60{min-width:1815px;width:1815px;min-height:352px}.ps51{position:relative;margin-left:0;margin-top:0}.s61{min-width:348px;width:348px;min-height:352px;height:352px}.c45{z-index:2;pointer-events:auto}.a3{display:block}.i9{position:absolute;left:0;width:348px;height:348px;top:2px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.i10{width:100%;height:100%;display:inline-block}.v9{display:inline-block;vertical-align:top;overflow:visible}.ps52{position:relative;margin-left:1236px;margin-top:248px}.s62{min-width:231px;width:231px;min-height:86px;height:86px}.c46{z-index:3;pointer-events:auto}.m3{padding:0px 0px 0px 0px}.ml3{outline:0}.s63{min-width:231px;width:231px;min-height:86px;height:86px;box-shadow:0 1px 1px rgba(0,0,0,.5);-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.mcv3{display:inline-block}.c47{pointer-events:none;border:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;background-color:#fe5000}.ps53{position:relative;margin-left:0;margin-top:24px}.s64{min-width:231px;width:231px;min-height:38px}.c48{pointer-events:auto;overflow:hidden;height:38px}.p5{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f14{font-family:Quicksand;font-size:36px;font-size:calc(36px * var(--f));line-height:1.112;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:2px 2px 1px rgba(0,0,0,.5)}.ps54{position:relative;margin-top:82px}.s65{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2474px}.s66{min-width:1920px;width:1920px;min-height:2474px;height:2474px}.c49{z-index:4;pointer-events:auto}.wrapper2{font-size:15px;line-height:1.4;height:2474px}.wrapper2 div, .wrapper2 p, .wrapper2 a{font-size:15px;line-height:1.4}.wrapper2 input{font-size:15px;line-height:1.4;margin:3px 2px 3px 2px}.ps55{position:relative;margin-top:60px}.s67{width:100%;min-width:1920px;min-height:228px;height:228px}.c50{z-index:7;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.4)}.ps56{position:relative;margin-top:46px}.s68{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:136px}.ps57{position:relative;margin-left:722px;margin-top:0}.s69{min-width:1140px;width:1140px;min-height:136px}.s70{min-width:452px;width:452px;min-height:136px}.c51{pointer-events:auto;overflow:hidden;height:136px}.f15{font-family:Quicksand;font-size:24px;font-size:calc(24px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f16{font-family:Arial, Helvetica, sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.584;letter-spacing:normal;color:#fff;background-color:initial}.s71{display:inline-block;height:24px;padding-right:0;vertical-align:top;text-indent:0;transform-origin:50% 100%;transform:scale(1.000) translateY(4px)}.ps58{position:relative;margin-left:456px;margin-top:32px}.s72{min-width:232px;width:232px;min-height:104px;height:104px}.c52{pointer-events:auto}.i11{position:absolute;left:0;width:232px;height:87px;top:9px;-webkit-filter: invert(100%);-moz-filter: invert(100%);filter: invert(100%);border:0}.i12{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s58{min-width:1200px;min-height:236px;height:236px}.ps49{margin-top:4px}.s59{min-width:1200px;width:1200px;min-height:236px}.ps50{margin-left:29px}.s60{min-width:1089px;width:1089px;min-height:220px}.s61{min-width:218px;width:218px;min-height:220px;height:220px}.i9{width:218px;height:218px;top:1px}.ps52{margin-left:772px;margin-top:155px}.s62{min-width:99px;width:99px;min-height:54px;height:54px}.s63{min-width:99px;width:99px;min-height:54px;height:54px}.ps53{margin-top:15px}.s64{min-width:99px;width:99px;min-height:24px}.c48{height:24px}.f14{font-family:Lato;font-size:15px;font-size:calc(15px * var(--f));line-height:1.334;font-weight:400;color:#000;text-shadow:none}.ps54{margin-top:52px}.s65{min-width:1200px;width:1200px;min-height:1546px}.s66{min-width:1200px;width:1200px;min-height:1546px;height:1546px}.wrapper2{height:1546px}.ps55{margin-top:38px}.s67{min-width:1200px;min-height:143px;height:143px}.ps56{margin-top:28px}.s68{min-width:1200px;width:1200px;min-height:85px}.ps57{margin-left:451px}.s69{min-width:713px;width:713px;min-height:85px}.s70{min-width:283px;width:283px;min-height:85px}.c51{height:85px}.f15{font-size:15px;font-size:calc(15px * var(--f));line-height:1.734}.f16{font-size:15px;font-size:calc(15px * var(--f));line-height:1.601}.s71{height:15px;transform:scale(1.000) translateY(3px)}.ps58{margin-left:285px;margin-top:20px}.s72{min-width:145px;width:145px;min-height:65px;height:65px}.i11{width:145px;height:55px;top:5px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s58{min-width:960px;min-height:189px;height:189px}.ps49{margin-top:2px}.s59{min-width:960px;width:960px;min-height:192px}.ps50{margin-left:23px}.s60{min-width:908px;width:908px;min-height:176px}.s61{min-width:174px;width:174px;min-height:176px;height:176px}.i9{width:174px;height:174px;top:1px}.ps52{margin-left:618px;margin-top:124px}.s62{min-width:116px;width:116px;min-height:43px;height:43px}.s63{min-width:116px;width:116px;min-height:43px;height:43px}.ps53{margin-top:11px}.s64{min-width:116px;width:116px;min-height:20px}.c48{height:20px}.f14{font-size:18px;font-size:calc(18px * var(--f));text-shadow:1px 1px 1px rgba(0,0,0,.5)}.ps54{margin-top:41px}.s65{min-width:960px;width:960px;min-height:1237px}.s66{min-width:960px;width:960px;min-height:1237px;height:1237px}.wrapper2{height:1237px}.ps55{margin-top:30px}.s67{min-width:960px;min-height:114px;height:114px}.ps56{margin-top:23px}.s68{min-width:960px;width:960px;min-height:68px}.ps57{margin-left:361px}.s69{min-width:570px;width:570px;min-height:68px}.s70{min-width:226px;width:226px;min-height:68px}.c51{height:68px}.f15{font-size:12px;font-size:calc(12px * var(--f))}.f16{font-size:12px;font-size:calc(12px * var(--f));line-height:1.668}.s71{height:12px;transform:scale(1.000) translateY(3px)}.ps58{margin-left:228px;margin-top:16px}.s72{min-width:116px;width:116px;min-height:52px;height:52px}.i11{width:116px;height:44px;top:4px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s58{min-width:768px;min-height:151px;height:151px}.ps49{margin-top:0}.s59{min-width:768px;width:768px;min-height:157px}.ps50{margin-left:18px}.s60{min-width:725px;width:725px;min-height:141px}.s61{min-width:139px;width:139px;min-height:141px;height:141px}.i9{width:139px;height:139px;top:1px}.ps52{margin-left:495px;margin-top:100px}.s62{min-width:91px;width:91px;min-height:34px;height:34px}.s63{min-width:91px;width:91px;min-height:34px;height:34px}.ps53{margin-top:9px}.s64{min-width:91px;width:91px;min-height:16px}.c48{height:16px}.f14{font-size:14px;font-size:calc(14px * var(--f));line-height:1.144;text-shadow:0 0 1px rgba(0,0,0,.5)}.ps54{margin-top:33px}.s65{min-width:768px;width:768px;min-height:990px}.s66{min-width:768px;width:768px;min-height:990px;height:990px}.wrapper2{height:990px}.ps55{margin-top:24px}.s67{min-width:768px;min-height:91px;height:91px}.ps56{margin-top:18px}.s68{min-width:768px;width:768px;min-height:55px}.ps57{margin-left:289px}.s69{min-width:456px;width:456px;min-height:55px}.s70{min-width:181px;width:181px;min-height:54px}.c51{height:54px}.f15{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.f16{font-size:9px;font-size:calc(9px * var(--f));line-height:1.557}.s71{height:9px;transform:scale(1.000) translateY(2px)}.ps58{margin-left:182px;margin-top:13px}.s72{min-width:93px;width:93px;min-height:42px;height:42px}.i11{width:93px;height:35px;top:4px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s58{min-width:480px;min-height:95px;height:95px}.ps49{margin-top:-2px}.s59{min-width:480px;width:480px;min-height:104px}.ps50{margin-left:12px}.s60{min-width:454px;width:454px;min-height:88px}.s61{min-width:87px;width:87px;min-height:88px;height:88px}.i9{width:87px;height:87px;top:0}.ps52{margin-left:309px;margin-top:62px}.s62{min-width:58px;width:58px;min-height:22px;height:22px}.s63{min-width:58px;width:58px;min-height:22px;height:22px}.ps53{margin-top:5px}.s64{min-width:58px;width:58px;min-height:11px}.c48{height:11px}.f14{font-size:9px;font-size:calc(9px * var(--f));text-shadow:0 0 1px rgba(0,0,0,.5)}.ps54{margin-top:20px}.s65{min-width:480px;width:480px;min-height:619px}.s66{min-width:480px;width:480px;min-height:619px;height:619px}.wrapper2{height:619px}.ps55{margin-top:15px}.s67{min-width:480px;min-height:57px;height:57px}.ps56{margin-top:12px}.s68{min-width:480px;width:480px;min-height:34px}.ps57{margin-left:181px}.s69{min-width:285px;width:285px;min-height:34px}.s70{min-width:113px;width:113px;min-height:34px}.c51{height:34px}.f15{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.f16{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.s71{height:6px;transform:scale(1.000) translateY(2px)}.ps58{margin-left:114px;margin-top:7px}.s72{min-width:58px;width:58px;min-height:26px;height:26px}.i11{width:58px;height:22px;top:2px}body{--d:4;--s:480}}@media (max-width:479px) {.s58{min-width:320px;min-height:63px;height:63px}.ps49{margin-top:-3px}.s59{min-width:320px;width:320px;min-height:75px}.ps50{margin-left:8px}.s60{min-width:303px;width:303px;min-height:59px}.s61{min-width:58px;width:58px;min-height:59px;height:59px}.i9{width:58px;height:58px;top:0}.ps52{margin-left:206px;margin-top:41px}.s62{min-width:39px;width:39px;min-height:14px;height:14px}.s63{min-width:39px;width:39px;min-height:14px;height:14px}.ps53{margin-top:3px}.s64{min-width:38px;width:38px;min-height:7px}.c48{height:7px}.f14{font-size:6px;font-size:calc(6px * var(--f));line-height:1.001;text-shadow:0 0 1px rgba(0,0,0,.5)}.ps54{margin-top:14px}.s65{min-width:320px;width:320px;min-height:412px}.s66{min-width:320px;width:320px;min-height:412px;height:412px}.wrapper2{height:412px}.ps55{margin-top:10px}.s67{min-width:320px;min-height:38px;height:38px}.ps56{margin-top:8px}.s68{min-width:320px;width:320px;min-height:23px}.ps57{margin-left:120px}.s69{min-width:191px;width:191px;min-height:23px}.s70{min-width:75px;width:75px;min-height:23px}.c51{height:23px}.f15{font-size:4px;font-size:calc(4px * var(--f))}.f16{font-size:4px;font-size:calc(4px * var(--f));line-height:1.501}.s71{height:4px;transform:scale(1.000) translateY(1px)}.ps58{margin-left:77px;margin-top:5px}.s72{min-width:39px;width:39px;min-height:17px;height:17px}.i11{width:39px;height:15px;top:1px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-0637be.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-7a3f4b.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/employee-portal.51b040.php" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body,n=window.innerWidth,t=getComputedStyle(e).getPropertyValue("--s");n=320==t?Math.min(479,n):480==t?Math.min(610,n):t,e.style.setProperty("--z",Math.trunc(n/t*1000)/1000)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div class="v7 ps47 s58 c43">
<div class="ps48">
</div>
<div class="ps49 v7 s59">
<div class="v8 ps50 s60 c44">
<div class="v8 ps51 s61 c45">
<a href="./" class="a3"><picture class="i10"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58-7.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116-7.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-19.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-58-6.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-116-6.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-18.php 3x" media="(max-width:479px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87-7.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-21.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261-7.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-87-6.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-20.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-261-6.php 3x" media="(max-width:767px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139-7.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278-7.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417-7.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-139-6.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-278-6.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-417-6.php 3x" media="(max-width:959px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-23.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-13.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522-7.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-174-22.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-12.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-522-6.php 3x" media="(max-width:1199px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218-7.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436-7.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654-7.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-218-6.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-436-6.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-654-6.php 3x" media="(max-width:1919px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-15.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-7.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044-7.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-348-14.php 1x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-6.php 2x, images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-1044-6.php 3x" media="(min-width:1920px)"><img src="images/dc33b01c-7528-4a84-9d78-fdc58fa69a08_1_105_c-696-6.php" class="un25 i9"></picture></a>
</div>
<div class="v9 ps52 s62 c46">
<ul class="menu-dropdown v8 ps51 s62 m3" id="m1">
<li class="v8 ps51 s63 mit3">
<a href="user-login.php" class="ml3"><div class="menu-content mcv3"><div class="v8 ps51 s62 c47"><div class="v8 ps53 s64 c48"><p class="p5 f14">User Login</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="ps54 v7 s65">
<div class="v8 ps51 s66 c49">
<div class="wrapper2">
<script src="https://static.airtable.com/js/embed/embed_snippet_v1.js"></script><iframe class="airtable-embed airtable-dynamic-height" src="https://airtable.com/embed/shrK5VSSzEmkllXrz?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="1292" style="background: transparent; border: 1px solid #ccc;"></iframe>
</div>
</div>
</div>
<div class="v7 ps55 s67 c50">
<div class="ps48">
</div>
<div class="ps56 v7 s68">
<div class="v8 ps57 s69 c44">
<div class="v8 ps51 s70 c51">
<p class="p5"><span class="f15">Copyright </span><span class="f16"><x-svg class="s71"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM199.2 312.6c14.94 15.06 34.8 23.38 55.89 23.38c.0313 0 0 0 0 0c21.06 0 40.92-8.312 55.83-23.38c9.375-9.375 24.53-9.469 33.97-.1562c9.406 9.344 9.469 24.53 .1562 33.97c-24 24.22-55.95 37.56-89.95 37.56c0 0 .0313 0 0 0c-33.97 0-65.95-13.34-89.95-37.56c-49.44-49.88-49.44-131 0-180.9c24-24.22 55.98-37.56 89.95-37.56c.0313 0 0 0 0 0c34 0 65.95 13.34 89.95 37.56c9.312 9.438 9.25 24.62-.1562 33.97c-9.438 9.344-24.59 9.188-33.97-.1562c-14.91-15.06-34.77-23.38-55.83-23.38c0 0 .0313 0 0 0c-21.09 0-40.95 8.312-55.89 23.38C168.3 230.6 168.3 281.4 199.2 312.6z'/></svg></x-svg></span><span class="f15"> 2022</span></p>
<p class="p5 f15">SRP Consulting Group, LLC</p>
<p class="p5 f15">All Rights Reserved.</p>
</div>
<div class="v8 ps58 s72 c52">
<picture class="i12">
<source srcset="images/img_1467-39-7.php 1x, images/img_1467-78-7.php 2x, images/img_1467-117-7.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_1467-39-6.php 1x, images/img_1467-78-6.php 2x, images/img_1467-117-6.php 3x" media="(max-width:479px)">
<source srcset="images/img_1467-58-7.php 1x, images/img_1467-116-13.php 2x, images/img_1467-174-7.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_1467-58-6.php 1x, images/img_1467-116-12.php 2x, images/img_1467-174-6.php 3x" media="(max-width:767px)">
<source srcset="images/img_1467-93-7.php 1x, images/img_1467-186-7.php 2x, images/img_1467-279-7.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_1467-93-6.php 1x, images/img_1467-186-6.php 2x, images/img_1467-279-6.php 3x" media="(max-width:959px)">
<source srcset="images/img_1467-116-15.php 1x, images/img_1467-232-13.php 2x, images/img_1467-348-7.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_1467-116-14.php 1x, images/img_1467-232-12.php 2x, images/img_1467-348-6.php 3x" media="(max-width:1199px)">
<source srcset="images/img_1467-145-7.php 1x, images/img_1467-290-7.php 2x, images/img_1467-435-7.php 3x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_1467-145-6.php 1x, images/img_1467-290-6.php 2x, images/img_1467-435-6.php 3x" media="(max-width:1919px)">
<source srcset="images/img_1467-232-15.php 1x, images/img_1467-464-7.php 2x, images/img_1467-696-7.php 3x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_1467-232-14.php 1x, images/img_1467-464-6.php 2x, images/img_1467-696-6.php 3x" media="(min-width:1920px)">
<img src="images/img_1467-464-6.php" class="un26 i11">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>dpth="/";!function(){for(var e=["js/jquery.5fa783.js","js/jqueryui.5fa783.js","js/menu.5fa783.js","js/menu-dropdown-animations.5fa783.js","js/menu-dropdown.51b040.js","js/equipment-logbook.51b040.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<6&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<6;o++)t(o)}();
</script>
</body>
</html>