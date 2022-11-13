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
    header('Content-Length: 6448');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
