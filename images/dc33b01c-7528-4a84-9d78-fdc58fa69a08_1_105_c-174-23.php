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
    header('Content-Length: 4480');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
