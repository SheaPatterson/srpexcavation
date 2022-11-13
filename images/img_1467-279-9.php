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
    header('Content-Length: 7364');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
