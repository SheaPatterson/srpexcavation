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
            $redirect = 'employee-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 2972');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
