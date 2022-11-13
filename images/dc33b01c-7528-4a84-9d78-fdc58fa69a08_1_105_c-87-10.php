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
            $redirect = 'expense-tracker.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'expense-tracker.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 4491');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
