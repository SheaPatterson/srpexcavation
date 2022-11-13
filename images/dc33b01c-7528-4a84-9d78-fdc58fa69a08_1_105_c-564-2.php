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

    header('Content-Type: image/jpeg');
    header('Content-Length: 21938');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
