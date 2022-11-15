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

    header('Content-Type: image/webp');
    header('Content-Length: 10196');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
