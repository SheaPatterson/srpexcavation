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

    header('Content-Type: image/png');
    header('Content-Length: 413');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAB4AAAAMCAYAAAB1Lg0yAAABZElEQVR4Ab2Sg5IAQQxEVzO7Z9u2bdu2/v8n7uUqc7a66lWG6Ux2vV+WDzlQC3Vg4U8VQZUxpsta28K4DCqYd/9WcqdsDJqhg3GJGBKLIACnSqiCbymAyiiKpolt4MVx3KCvyoCyMAxXiKkQglOZvtb/ruESLDAudgkxbXWHJDmFNDJshjwQ1XGm/TumpZjNwhLj2scJkiSp1bamuTZrF5r0lX3EGviSMrnYj+GyttXAc8VSkJqmgyiSdnO3h3ECTr7miCENsqFAi43doQour0lbSdosr4YIQh070zGY1Hka4xEMB7l7zLxB9pnf6HovdEuUjjz6GRsh5S4hFzflsFaTLy2TuX7fZkiDhHPrkpxxPVhdrxED9vbgGi5hm3MTksd9Mkw7iU2gwl0RZUCbtJyDp1S6QpJVNUuFSjVM1yiKIIF8KNJcRs8kUAd5r306H6owaoH2RxcyIFP3/0S+VhvDv+kWUj4bAGhK1EEAAAAASUVORK5CYII=');
