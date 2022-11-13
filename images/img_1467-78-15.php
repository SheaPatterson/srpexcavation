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
            $redirect = 'business-cards.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'business-cards.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 886');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRm4DAABXRUJQVlA4WAoAAAAQAAAATQAAHQAAQUxQSPcCAAABoG1r26JGeqsqOMQVp+PuSogQ4oLGcHeiFO3u7t1XMD5z5jOXVz90VpE1xxExAShfhsGlqbTEbz5+wI5fCk07+TN7b61QoLw+X349yZPFapB15+XWnfbrUeKcvUwYZa8eQE0q1oJSpfeqy0LjyZ9kT26JOh6MofSCEfxl6j3DBLE31S8AYF3x1aL0yCF4q97cf/K8nqN7sACi8S4AhinBlwZfeyKRYGoI3M7nBpDjX7oZLBmKhVLg6VDOvxVfEYGrulcHsu5q7ZEb0XaS8MgDfg4cHc7Egw0gCo6VQpogfWQAaJyrCerbZvCyO+fp9512oOjkCtJ1HNndGXDvKTibD1rBR0Mm2Lp5YwolbmjwsB6A5uY4uNL7FKC8lRCBh02xdNdiYZ1BqaudeCABVo+VIBpOQdmfDIGHkt18/9jToAKl19ZJWXSyVhrk+bWehz4BeDjLzqhO80p8e+vx3okaxTOfz/TgoerEWbVzexAXefaxB1xaATCrv4+BK6gogRFXNmg6h2ZXXaF01lHBseR1vfk1XGS388dacBXuZrklE3OBy2R7npotzlDmlC0UCoX8STYRcjvWTEN6GqD27RJroEmi7pmcHxRzhNlWwuRhfRbE4YfR6zvSzLtIJpk+/u7P/545raaRLnWNAN/u2jT9wh4mEsE9u9N9Q47q1vMUwxHcMLrzi4sCAJROC1S+mJkcWJmpv2Xaa1yC2Qig/9hIEmjrSVe+vppVyilwRXfEU46cEeRW+++TvaEkim55wEy/VicP0mO/7dz8SWew3w9ZI0C9MVhgTwYJzUd7KK69M+ywBZaCNNXAAX1GYcmPDgkhpkcodLb1wvX2eG3aXMgnzTWKR5aD69e9Yw00iPTWEIpW2Fm12bE974gYfvjb7ZYCG1ZgQoZZBaEK6OuVX1nTKFC8n9031eFiTXdtFPUDe2DqXr2d6FQeNoIKVaFcJ2+FayFh/Wad73hBBLIA5Sk03ki0AKBlKHs6ad3KuRpxWVIWi4HB/1QAVlA4IFAAAADQAwCdASpOAB4APjkcjESiIaEhI0gAQAcJaWzzAAsXB7sJrctuo4AA/v4DlEUpcDk46stGEkAkeFaM9skp0eNEWRXtOdmme9MYDC/E6ZIAAA==');
