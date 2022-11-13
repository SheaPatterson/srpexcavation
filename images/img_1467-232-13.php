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
    header('Content-Length: 4982');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
