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
            $redirect = 'travel-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'travel-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 3238');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
