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
    header('Content-Length: 17280');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
