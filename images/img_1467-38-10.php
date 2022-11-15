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
            $redirect = 'expense-tracker.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'expense-tracker.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 524');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAACYAAAAOCAYAAABDwm71AAAB00lEQVR4Ac2UBY9bQQyEw3DMzBw8ZmYstz+gIKpY/f9Sv5Em0pZ7d6GVRs7zs/1mx3YidTodYAosgi7Q0JMFC8lkcgdsptNpkZpKJBLH2J56kWgFY6AbxEAeMuvYUZAIA0VUCla9JalUqmw1IrJ8aBWs4c+hxgG/t/FP/C5ZsW5nVY4UGOejl/F4/DXFl3mOg058R9i+SiDPe4qzIsNBjajJl6pBKA4m+dAVhN77tqnKO82NCAfxU/g2PNyzoCinL7CPnamGQiJ0AaGXJtD280wxzAtSSEKpjVLEuRHezXsL8xr2amzikG6nlqlN/9ieNuJeQWjLgx8JWnrNu9v/UCnqzqS9QO16DgOS6r9UMqFpD3h42kPFFAdOKg7ylwQpDL7okqBbywDJF5pNL8qG1FUc+bvaUkGCeHEgGKwwyZ/BvYe0iF0h+FCqqQA2F24X+OTVH7V7ghbOYUtSy3hF7jfivqo2v0/9X3agS3hmB8BcuCzh7UVgMPClSSyoOPa1oNuYSDfIkHPunMJPLZ/ywJ96ce6syqpUFiHNJv43VmzZS9T667AHJBVohSYp8sEfEPZQZNZ/DxnQG9Z4wsYn/xkldUBZgxy0Jmq4UGNOl4e9ac53BscoS+AxL/wAAAAASUVORK5CYII=');
