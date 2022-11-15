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
            $redirect = 'employee-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'employee-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 604');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRlQCAABXRUJQVlA4WAoAAAAQAAAAOwAAFQAAQUxQSPMBAAABkDRb29o2j1gy40yYmdFMITPKIoeZeZcyM+/6ew0dOdN9REwAmldoaaPxODtXNzdUaWf4EQg+NT1sBGA4ajomKE5zqOkWm8fsKW0WhK6dWQK1qd0W/UyxYQBEWJxxmebycQvqq/PQmZ8qnR45AONOAABcHwA7X4NQItDXHFT2yt0AhO1+VKdLmjPeWiWs+6CrJVqW1WkSAJKD5qo5CUZWdQLo2RuCnsZIMa1FBFTbVozrADzrDIB9DnR60wYduVA5JSZsqO30uzWY08sEAGELI8cB6DkrrVS0VtSnbEPRhUovqlu3RcUKHbtKkbWNITSuXXkoAATog4ceNEzzZmdb38TcFFNFxtLz+SnUZaps0fdGANZ4azD3QII1zZWPQ2s5SVGkSkVTlXIh7mEBcGvBwnYokBDLHhJ0dg2ASRpTLQBad8WZju97m1vy3z+b/tEpO2vtQOOm62ebkyOdLrP1zDGnxUkAfP6tlJJQUx0QQtnAdvw6+nKhNyfdEVSHL1uZqUFFFSOqjYXVlKrEDLMGABXBvEH3AyCyRHKrcrm7tzKzISYG5u+LO6KnQ0BNpgfVdHCrUz5MRJNfn1c86MxBECgXABCw8FwLjdodE60k/pX27IbpidtMsBKwAQxMPJqUtdoDm1EeEACQaPL+48gog/8wAFZQOCA6AAAAEAMAnQEqPAAWAD45HIxEoiGhISQIAEAHCWkAAB9gPkxoAP79/IqCBT9TQKXAjxpT16Y4AGiw5IAAAA==');
