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
    header('Content-Length: 11025');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
