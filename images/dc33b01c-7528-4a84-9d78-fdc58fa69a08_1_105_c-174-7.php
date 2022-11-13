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
    header('Content-Length: 2822');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
