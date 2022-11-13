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

    header('Content-Type: image/png');
    header('Content-Length: 2806');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
