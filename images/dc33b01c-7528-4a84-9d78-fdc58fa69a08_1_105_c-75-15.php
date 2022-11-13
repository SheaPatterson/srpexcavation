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
    header('Content-Length: 2298');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRvIIAABXRUJQVlA4IOYIAAAQLwCdASpLAEsAPikQhkIhoQrlx54MAUJagDMh/n5t+M3Oza9d6OdHIF1Q/dfty9y39G9gH2ze4B+rH966gHmA/iv9a/3X9g9jP+Ae0D0AP0y6y/0AP1f///rQftB8E37aftV7lX96/72tH+AOvr+l+E/hy7betP5B76n/D/jB7lfxL6v/bfyK/pf7YewB4A8AL8Q/kv9d/G38uOQSrJ/kvxV+AL01+Uf138jP7x+5Poq/kB7kfWD0K/yv+0fkt/Zv//86/0/waPo/+A/xX3AfYH/Fv6R/rv77+5H+A+Iv+u+5L2y/mH9r/2X5o/4D7Bf4x/Ov8r/Zv3S/x///+qr1ufuP7HP63J+kFkMfzAm4H2CmuH/5nOX9I5H/7QKe9pbaXKXXdKhgAmVGO+UY5GufWC5enfTGcDJ65ABW4V/GcipRUKAJsGC/8XhaDqSPDrrJdK4zUPX3E8bwSf/X5L0TVKcNGoFXG7FOpBzf2iUtZy+iSOj0BYkcUcj07TyYRtgAAP7//V98j636f8dCrsuB7LCZe9mRdSO/gFtntc+Jh0xBDdoTMeSGMRotWdGuSopQyYeS76KN4RKnI0v3efkv898qM0cAUqwk1tNQIs6KvIdiC7xzJ2ThhLnpAQk4CN9ZhKxyAEFa1ym/M6KyzEaEJmmJoB6cc5YrV5efHVAPZb62Dbr1Faph6HEUy1SybYQi7F4vUK9QcmVX40aXZLzWWyZzP9HHmbzc8rm0fhbVAXK1hixTzvmH+/xLHYJSfMi8L0v3OmUFG65SesyMZ9MRFAkubEsbHfuX6iADSvGKq6jIQmOhz43tZ5cZ0mfm2tz+QtaYohQOEAN+COC9BKvMZtWV9e/IyBIqbaIv2tyoi78Ha6kGM/Oe4fBTO3+AHCYqBXoqLxJGjW78nxLfqK6RfA+qgHudgvjJPZ+8+kwdDKZ7hGyPFNc3zcKsQX1fquhSbzUSb/pLb2tW16g89eBUivevWuXem9y5XxAejT5rmlT7ngKZDl9Wq31IbTHVxKYCalG4pcGAlInXXycHnHfNFvnoM0y6yk3qyGdkb20GvHS/f+JBJynGjRmdhLUWCuOnsB+bwNPY2U2D7pQ3sdbyg/YSGp8Y1MXikvgkZV8sqApX8EkY4mATt9kDmIZ+whY0y3i9nxWEnJURAKU8y9e5b97CuwwlHqdDnBHzjvDhVebHtby9N3hdMJqdPE0qpXDrvGGs09ZNeZb/BojEd9EEuksPZmfWAzxB7SRlzNOHV0C/lDJE/S3Cyn+omHe9fnosxpOoxwqKi+/53Z3bp01x1qhIumo5THICcQ7O3zrbZHSn4VKyvWuewC9OK018vS7gOjkAvmof8L/IottymGntwmCgszuTvH7P93u3MNGfnADW3yqT4SKcONeS9gWAvrSNmWuGNcXTAZJ0zJOz+FbyM8q750R2Iz7i00x35yz9nz8D1NwmlfiCA1QZxze019YdsjL1gAvRpXybFlROb6NHxzSs5H3CD7FHj3AJdx1Zfxr/c1zj//A5Ck/JUpoKw9WRaqfr8SwPd2bMIHmVNsu4husWIPXM0YtrhsBjaAs0S6WGwTUvT/ONTLvVQPmbwBjlWmDSXWQXBqc5pD+L+89g4jCK2AF+iYDSzM9GVWBKKHM4RBRZUo6tn3Afep1/jIM7z8qn/GHHGym8n+ZijGIfyoayRwXuVHGqKy5mpJD7jw0ZG8d6D8mi9i8CZSuiGwx34y1QUQ6Og5hmrrYNw+loZJyES6xGvwnnpI4Uj5/vAQ1XYsdSzTB3VoKF2sr8TcGJbYcRM2jscZcbNp8Vva86fvyThGIG872bRcEkpy4msVHNTidzCSw8uacNh6JNAEoXLeL7XFGHKYSJsT3LRSRqCTqFARJjML51YfyKp5cya2h7iKv2M7mFWkI7xKO3/3Zs7YyEnINFfQIsUm9KXXAoG9nCzl+pNAXCwNjAv2mCycirIP6wBYkoO417DjJCbtj5184EKio4hEib9eoyTDo/7Bck4b/+RKtjuXC+CGCI5F4AZRUYpdYsB7gkU6XJbhK2dra2I9EbxytOcxEiLHOdANVUpcnkaCdGQae6N94owGgJEf/cOAs27MXCZfdBkiBMy3Gj7FPNH8F0GVEnVzLa4QiL57FoY3Ov6cxhtd+kY8sYH0Q5nmkQAp1TfZR4qiZt/Ev6xAoTMLtLfQL2EL/k+Jm5FQxg0GGgVDP7sw7AiEsAmYtKDl1+fYRkCDkqps7DESg0KE4IDg6HOwG0R6VQK7/Tc1mHTz1dsrkzCZi11EzKCmIjwt7j9w/9/PqpXXFRNPv3eWWTpHz/hfkALZjK6i6Qvm9Tq5/UN6xa1W6OABgT5QW98KCvylB/xFSdj2vLfK+/14sP7ZDarZrSUzkBgP+DAQVgSQV5ef+oOJ8YR97hoAEOjqHMuhOP/DanuZ8152p0nx2rGqv1UUTz2vENXnBURd8eXp4TM7/BkP8HhVfzk+hg2bAtV0kOg/HDh2IR8Vcq/VOTfG2zUkU9kDOFwbTEOmoAs0llW09OU5V/lP7b3z7NSszqeY1Vs71N+sS0HpDCNhl1HHkHJpvjV022z4ENAyZH3hgXN8WBzWsA4rXA6YJ/OfgPOirEjXwjEmuvrLI2IV/AX3p2ULvayL+zs7HqectRIDsHhNS0czwkYFa9PRVce5BdYH1S+GvP201biu8iVlSVV3GhXLX7R79SdIJ/6mOBbn/F9qJWv3H2lYU3JxkAIDbaujoJDh+4Mr4K8Do1oHmsalnUf1tneydoy81ERZr2WTBRklruvfomtY+DlkV/GTBDFkzzgAmbQBAK0F/wikmQVVOwtuZgPc/jD1ZRMh4lxNp8DD/6Fd8mlfOngPmjGUrib1InmkvtIF135u8NhGyWMfuA7aUh1CXMHdVYKAGOnEY1wCPFxfVtcDY9RdIZ817GvD83odO0p5s3/40eN1z1IeTYq0x5uWRiaTjyLFgN0tux4n/9vtGHaz0cBHjjebiPsqodeMkgNIA02LBPYCSjZSoG2MykdVNRnvoAAAAA');
