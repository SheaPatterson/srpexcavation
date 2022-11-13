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

    header('Content-Type: image/png');
    header('Content-Length: 7196');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');