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
    header('Content-Length: 3552');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
