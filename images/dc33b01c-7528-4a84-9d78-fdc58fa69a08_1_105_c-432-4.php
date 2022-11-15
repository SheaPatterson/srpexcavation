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

    header('Content-Type: image/jpeg');
    header('Content-Length: 15821');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wEEEAAQABAAEAAQABEAEAASABQAFAASABoAHAAYABwAGgAmACMAIAAgACMAJgA5ACkALAApACwAKQA5AFcANgA/ADYANgA/ADYAVwBNAF0ASwBGAEsAXQBNAIoAbABgAGAAbACKAJ8AhgB+AIYAnwDBAKwArADBAPMA5wDzAT0BPQGqEQAQABAAEAAQABEAEAASABQAFAASABoAHAAYABwAGgAmACMAIAAgACMAJgA5ACkALAApACwAKQA5AFcANgA/ADYANgA/ADYAVwBNAF0ASwBGAEsAXQBNAIoAbABgAGAAbACKAJ8AhgB+AIYAnwDBAKwArADBAPMA5wDzAT0BPQGq/8EAEQgBsAGwAwEiAAIRAQMRAf/EALIAAQACAwEBAAAAAAAAAAAAAAAGBwMEBQECEAABAwICBgQLBQUGBgMBAAABAAIDBBEFIQYSEzFRkUFTcbEUFRYiMjNhcoGh0UJSVJLBIzREVWIkQ3OCstI1Y4Oi4fBWk/F0AQEAAwEBAQAAAAAAAAAAAAAAAQQFAwIGEQACAQIDBAkDBAEDBQEAAAAAAQIDEQQSUSExUpEFExQVQVNxgaEiMmEjM3KxQkNiYyTB0eHw8f/aAAwDAQACEQMRAD8Ar9ERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQHrRrOA4myndNQ09PG1ojaXW85xFySoNF6yP3h3qxlSxkpLIk9juaXR8It1JNJtWsYtjF1bOQTYxdWzkFlXio3erNTLHRGPYxdWzkE2MXVs5BZF6l3qxljojFsYurZyCbGLq2cgsq8S71Yyx0Rj2MXVs5BNjF1bOQWVeJd6sZY6Ix7GLq2cgmxi6tnILIiXerGWOiMexi6tnIJsYurZyCyrxLvVjLHRGPYxdWzkE2MXVs5BZF7YnoU3erItHRGLYxdWzkE2MXVs5BZbEdC8S71Yyx0Rj2MXVs5BNjF1bOQWVeKLvVk5Y6Ix7GLq2cgmxi6tnILKvEu9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');
