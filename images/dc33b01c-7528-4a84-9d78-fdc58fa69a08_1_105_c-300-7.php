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
            $redirect = 'employee-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 8344');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
