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
    header('Content-Length: 10414');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
