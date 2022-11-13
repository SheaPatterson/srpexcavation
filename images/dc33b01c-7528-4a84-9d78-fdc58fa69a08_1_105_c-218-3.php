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
            $redirect = 'employee-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 5130');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
