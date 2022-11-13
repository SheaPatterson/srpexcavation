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

    header('Content-Type: image/jpeg');
    header('Content-Length: 2194');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
