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
    header('Content-Length: 1530');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
