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
            $redirect = 'enter-new-customer.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'enter-new-customer.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 444');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRrQBAABXRUJQVlA4WAoAAAAQAAAALAAAEQAAQUxQSGYBAAABkB3btmlbfe9j27Zt+1zb1vd9VhYv6Kt9TwQRMQF8tsYfN7Ci6tza1rCzHV0JdX2R0wGuwSfJo92aPLkR4tWFUyrB1ZFBbFEJVdcaIq+2G0irLhzflgWaUwXYvqpM5hf1CZKqS4c3TSWkOwDLUqUYB6HfR0pFbvN0YQeUnaQLhlXo+7Hu5JEysba/HuOlPtNzG8Z5YK6tHjiR0DXePqnLeVVQjdtrDoCbvZbAx+WN2byv4W3nr6yAVqWbPKnBbNOYXcF4rtqZbOxt6NH2J1uNYDYhR2woIb02AdZ3xhdH3f7t/+f5Wr9Szcb9DotZJ5L59tQuZ+Pzani7Bgy/LjfUaM3icWRjeX9xujZ3tM4M8kBtYgb1Mg/gW86OTsMDl8iuMLO7wJj1nh3eHbUGm93w085OL2YSQa4FrPNB+d/6xs350GIqIRdVADJRpuRVp553WkcbXvJ+T1oOCHxue63rZ3XlclYYVlA4ICgAAADwAgCdASotABIAPwF8t1WrJ6UjJWgBYCAJaQAAKUNx6AD+8K3IoAAA');
