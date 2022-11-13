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
            $redirect = 'equipment-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'equipment-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 3733');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
