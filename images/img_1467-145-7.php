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
    header('Content-Length: 3368');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
