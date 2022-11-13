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
    header('Content-Length: 4152');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
