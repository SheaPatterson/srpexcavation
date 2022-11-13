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
    header('Content-Length: 7094');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');