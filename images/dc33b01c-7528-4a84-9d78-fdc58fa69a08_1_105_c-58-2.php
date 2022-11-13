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
    header('Content-Length: 2546');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
