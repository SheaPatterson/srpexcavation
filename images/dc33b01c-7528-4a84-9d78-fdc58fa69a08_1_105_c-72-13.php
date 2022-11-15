<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include '../groups-31083e.php';
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
            $redirect = 'inventory.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'inventory.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 2402');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
