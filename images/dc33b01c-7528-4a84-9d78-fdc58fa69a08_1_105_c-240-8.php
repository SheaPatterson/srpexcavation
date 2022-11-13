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
    header('Content-Length: 9765');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
