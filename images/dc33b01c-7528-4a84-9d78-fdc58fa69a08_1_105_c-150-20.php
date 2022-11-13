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
    header('Content-Length: 5125');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
