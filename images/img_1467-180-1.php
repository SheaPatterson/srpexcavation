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
    header('Content-Length: 3796');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
