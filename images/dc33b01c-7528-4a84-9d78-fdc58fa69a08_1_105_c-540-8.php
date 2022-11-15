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
    header('Content-Length: 22318');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
