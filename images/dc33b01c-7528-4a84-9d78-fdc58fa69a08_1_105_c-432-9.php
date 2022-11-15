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
    header('Content-Length: 7626');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
