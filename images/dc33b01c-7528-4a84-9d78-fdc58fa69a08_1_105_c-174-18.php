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
    header('Content-Length: 6552');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
