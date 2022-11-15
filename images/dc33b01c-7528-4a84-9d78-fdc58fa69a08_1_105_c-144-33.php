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

    header('Content-Type: image/webp');
    header('Content-Length: 2528');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
