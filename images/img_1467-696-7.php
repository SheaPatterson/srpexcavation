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
    header('Content-Length: 26010');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');