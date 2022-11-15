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

    header('Content-Type: image/webp');
    header('Content-Length: 2156');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
