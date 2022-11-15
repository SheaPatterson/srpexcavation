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
            $redirect = 'client-portal.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('0');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'client-portal.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 744');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAADAAAAASCAYAAAAdZl26AAACr0lEQVR4AdWVhY4eMRCDu0xlZmZmZmZmZub2PfrK/Sz5P0V7zHcjWckGPTPO7JQJYgVYCNa6nRTW5Hm+NU3TC0mSXKU9CQ6BM+ozH01U4jMheBicxYHNfE9tL8Ch22rGm+i8LMt2QfQo/ZUgcYTP9iUTZYV9B8eCYNI0zUITzILx2ZbBkaIo1lVVtYyIXub7GOS29HVgWZarWHtjtKM/gwjt5aIH4Dn93YFe1zJ2i3ZOSxLXwRW6MVgAqvahctbSKUZNEooqlzwEjyG+k7E0mF/M/MUeojdf5CUn+mv0QNsOKiDem40m8ZvgvvqMTWutiRg/TrsUhDJZwJ67tNM7A5ZI7c85fF+TA6NBfK707fTfoH9CY6AnS01inR6qHELv2+ifa1WZBLuqVg9VkhmNuj+Vww8opbrAFy4B/VnNvh1yFJyXAz2smcaa9wqKJTXiph/LWf9Uzqv8DcbxOI6/W0qNxyIwKyirzxyQKPwv+E1Ulto8S3EV2EAgtvuNHAFnVNHATb+ZpqsIKKUMntYEOKWSRmVY40guCP+grN3nitKxtSKuytRyapFI62+rrIKfOhsctjxfMPaP/l8FTOs0L8Jgl8jLCTuz2BKeZafrMBCrdDgR/OQDdoo4Dqx3eXusKOlQl8m1IUsRkjTYc5f5Swwt17idnA1KOSNJEpjVtHd0D+1b9jzS+Q7AQxEUcQfydEd6YJ2lfcLndVku2TC5v6fH6U1nRcwEbyrFlsqCTiYsDWl8B+1GrWllaUMQhHtyArwAdyUPZdXSOME9G0WesdcqwXKG/h72L3NRcORN0oOhZdhuPTZ7/gJ8UFUhI1cYfwNuuabPAoWrjyxzW7UvCuYj35v39cP028gGW4H2qGw6kokIuj8PrEUCPT1sCI2vifRl/6TWm/ikstSpmnT2H55fQ9PqfKkzAAAAAElFTkSuQmCC');
