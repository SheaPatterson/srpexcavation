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
    header('Content-Length: 1874');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
