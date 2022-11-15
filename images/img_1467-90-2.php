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

    header('Content-Type: image/png');
    header('Content-Length: 1347');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAFoAAAAhCAQAAADzRHSLAAAFCklEQVR4Ae3Wg5MkXRaG8afOOfdmVltj27Zt22Zjqu3usW0sw2vb/r82I3pQGdNa1OdfBZKVF+8FvfcVYaRukgt23R7JbUkxis+0BFP0tFyzVj3g5iSH5BXllrg59pAFfEYV6267LBXJuWQTEw6zO3z2ZPdzJ6zF1pFLJ6JCN/MZk6PHrMnNoUtSbos+3cyO052uypr0KAOI2EK7Z2vohi2USyT4lIits1ZXoRvcLD9FN9gTkrrFLlJMN8IR8pJCyLy+WTPkme4h3Ti77HeTx3v+gK3TbT1lXV9lfsLLtbV6Wk/aE7lAkvd0u90LhxEj56T1fWhyOi1yf33NdDKqvx6VWt0XFfoMQ0mjx6ydgLiEv+se+KkoMEAPdxYMfcE0MmiIlEo9q3SnVLnZxOguV8VHbJ07R4E0Sj3mJ0gK4twce5LJYAyVcqlnDiulTbdixPjJVt/ZzKtP3+bbk7BFUkqM7pdrFJEhg6RUGpjKLLmop8gnDtTq8gsJ9CxpkoP0JWPS+0L3817WALuqZxAyoq+elRamMlIapZbBdKafOwYUyvNY2z9iPGlcpS3hLd0hL9xcMiJfj8slZtFXT0u7n0RXBvpDwAB5QIeEbrdm+hJjNxhKJBxut6WWbDLA6y65YcsooVzu9rDAZuku8BOlmYifYG3ReYI4b3cBryftMTPJBFsiV3UbWeyQ17oDoScKtkY3kyel1sKwTrdD9bZEn+lRjAwYLY16gmymyQM92/tudCmrlSZbQad0h/09OE//zITimLQwmDyplubkYHrNT9Q/6WaMdEPJIVKU5/fov9wM0uVQBISkE0IK6M9wP9HNtqW6UffoCUlJi9yQR/ZY7ulJlLhgtFy19ahus8tuDr3XT4+6lN0nxtbqTjQ5RI9aU7DWpUgX2OXkfLtpbbo9KlaVtNpVuxH9rtklaZFGqZFyPaWHdJduspW2wE0LxjCIIrIgbp60UEJfqdBtODz9g7Fuli23xYwm3UqpjKV8mFQw1pbpZtIl7GZ40lql3VYgUdF+6SqkxqJp05qtTX+lf/W/c9+Prm+xlX4yoxlEAQH/GTdDavKKpFx/5o67Y1ZjdS7lzrojejQ6q5NyEoAlh9oi+W4wKr55143hSHsULrflTIH3cpn4dtozexKstxVuHpN1KyNyS+yun2gNWHRWCHogHEGHAt0pZQhxRglKJ4a7s/oHa7OVwejcEnx8H2Y3wI/3u9wRqyGHuKFy3j2w3ycH6Sa7ovv52Fy59PZ/Vuo3UGnWzXIha4DcCyrdDH0td/CEbqbV2q1ggz6nkA6DbaWetUa5LjXkddrSdrvzHEet+5gxutnv8Qf0IIsZyEdste4hYmukBkjGO1ou2Aqg2G4Ea+xOMFZe6Db9hjXJHXfK79U31mTNdsVdcPMRN8elop5YIhV2W67oCVucHIKnM7pF2ulHJ3SrXWeUbvI7/W7dEC53j9xMBslzd9JPovh9fq/RB0jIOfqBrXaz4w1CAAyQR+TpHltgt4NxtpCRvMUw+qNEKEz81DfaJTnv5hbl0YN8OuFm2k09hhH4a35nuCJcnTMhXBWM038kfuIq/SH59ttJcaY00EGJYCjd8XRFyCOX/5afYO3SwgigwB13/woq/WHd43e6c+5MOJIOIdrxLP34tPmJ1iKX/duZwM3X/YOT5ALTdDOD+Mzxbp40SxvT+TyQUnvo97pKPRKO4HNjpJuXHIKSOV/5NzuM0QvU8q0uAAAAAElFTkSuQmCC');
