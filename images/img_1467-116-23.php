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
    header('Content-Length: 2110');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');