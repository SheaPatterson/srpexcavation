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
    header('Content-Length: 16713');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
