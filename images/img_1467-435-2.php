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
    header('Content-Length: 13128');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
