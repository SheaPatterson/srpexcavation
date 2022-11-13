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
            $redirect = 'client-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('0');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'client-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 3788');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
