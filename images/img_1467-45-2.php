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
    header('Content-Length: 719');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAC0AAAASCAYAAADPNlfiAAAClklEQVR4AdWVBY8lRwyEk8ewzMzMzMxwzIxiHSd3yb/IX85XUr1oMsu8a6nU7K5x2zW/XbGlQR1oA/ng2loqkUj0xmKxzWg0uku7AKbp32Kt5dqRjcfjYxBcF2nG2eBiNputZG3+qsjFFDEIzEBy1OMOIrmdSqUaDzzEx9BUXCSx34EiM00bzU0mk8lWXQ7ZYRGkHVEa0I6zHDnIGetT3nMhlgL9RO0ReEN/yB+giycguKJuYH8p81/1PaAQFIUdOmWWL4rsIEQfgNciyDiRWyRHuxz18JNvsHdQkWc4ANqCr8X6nHDeZOOgF6I74Inzriy0J2HCHaAyQHiBZiQwnrO8yUrwd5u277wJtwPJ0j0u3KLfesC+PCLdzZ5Z+lUgn/4Sc32hqK/RZJTn+Lx/3kVXqUulm+Cxck53HlGUSZ1RQanwGJfvk7uv8XeXdtJnzsViqmAuXVVU/JzpY56tYP+fRLcnQCjjAsyq0PD90bWRsyJQqjvcrwQNoE06buWZ1lnJpT5YrV425yAjkt6wK/LpdLrBJNoDkY6A8X2KcDOsAEop5a1T5Tn9h9Ju3SPl4Y5/wGcFyOfnVLAi63vbQJ1frdgflv1POpWTbP6Gs4/WzCEdRHfb5FSO0N0mpQz90RC5BcmalMKRSAUirYsikkjON2vd+975Q56Y8JrIKXWYe6q6cKDqdZ8CEpbLlBy5cMJWqzWwyvpD8IS5Jv9uK3NfzUV3LGGrUhev5awAKHI1ImTZfKvIi6R8SZ30CvKtwOmFBBd3qzU+8r9gOSpBK/GzzTvqf+u5ibxy6zV4ZkkrtsPBgK+IczlsUa+pTRxWH87bY5vILvqZa5w6feS3cqta+WtiIfW4AstJlZ8IgjfDYsaNsH8BSMk/nuD0+PsAAAAASUVORK5CYII=');
