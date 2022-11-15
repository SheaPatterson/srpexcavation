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
            $redirect = 'inventory.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'inventory.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 216');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRtAAAABXRUJQVlA4WAoAAAAQAAAAFwAACAAAQUxQSIQAAAABcB3Jtmmta9vWs2378+Wfj0KIiAnAr4KXm/hZksUss+Q++Y3cCtkyGg5loHDwWZvsE6atM+0wFRsOPsqjXQoQ1SCllWXKAKBojkTzOQ8IHcIl4+rX1fDZb3WqbkuUl567et0qfVcJfL5437fNQ5VzYPQkS/s1j2VAAAQBgCEAUA6P/wJWUDggJgAAALACAJ0BKhgACQA+uUyfSickIqGwCADgFwlpAAB7IAD+9YbgwAAA');
