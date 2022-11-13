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
    header('Content-Length: 2654');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
