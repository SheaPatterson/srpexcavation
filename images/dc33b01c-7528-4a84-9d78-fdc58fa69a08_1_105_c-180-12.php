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

    header('Content-Type: image/jpeg');
    header('Content-Length: 12574');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');