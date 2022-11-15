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
            $redirect = 'employee-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 16784');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
