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
    header('Content-Length: 1451');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAE4AAAAeCAYAAACCJCjqAAAFcklEQVR4Ae2YA698SRDFd/gw+7dt27Zt27Zt219gjWi9++X2d5KT5GYytx+TDF4llb5onq46XdVfVYikrC1Sh3RPp9MLU6nUYcob6KNkMnkfvZTJZCa5TotYugDUakC6CEDneV6XzWZH8L09mkUztbW1AvQaz3MqHi3AGQ5QR7Gks4Ayry0Sql9dXd2HehcqGbNhgHUc3Q0YfevbCNBmyxrLmcy729XyQWmHhR1j8YdwvW4N7LcW4O5SYpXlJb0AZAfAiKfOYk0n7YI3+VeFDub5Pt8mNqZz+rxMMaNkrKdVq1YdBQjP4+Koh/87AeQYVjZKRB79yb81ALaYcpfJvsFC3wdov60UAOvJRFegW1j0Y3b7Gd86FqjXR1aEzg3w0gza3wnHZkHQdtH+eLEDNhywDlj3io/4Njam7hABCrn3q2Phh9HPWOMwgWUwF1C4XbDtPs+haGUsEzwFWLvRlQ4+F5ubCkkPE3WHeoQPV+Si9H+afrfbfQ9SDApFKq6/o1jjqNGaoPljugCTpfHcKWQIyBkFpA5Ok4FT8GGeZSVN9BdEB4Ua1dTU9KTdLXR+MQI2TBbmHR1FKR45V1VVNbge7jOFeosNwPEYq8uZ16bHnJCy1lb538Wr4kweBxQbZv2Y9AlZlSe3gvfrgDG1vh0A2nKsope56kH+oaF/yjF5nBSwxHuUCb1IZL3M4yZ6REMUWy54yBYyVOmN4iK+LWvozQNtlwDeEFvOfWEV/Sc3VgAc4L1+sm6/JpQJ8P7Yh1DRSA0T26SgVC6JTuT5iS2uVSP7bG/3rNWNha1wCKBdUsxmHgsBPwddqjxVFuv4LlM0iDGpmVoMKp7poV0WgCb1JgtgDZB1sfDNyhRE9vWMy06gn5jXeadkRSM9vJANaBtd1/B+i8mOac5BfP3zQZYTVyXPqlNyZdr8Hki7Mmi6ATlxNdraUUAvWT59j7XRaKyN6D5RFHqS5/UF+9cFoN2yDzpCz3KL5r7ZAKwNTOKHQArVSjFbLpfryvPXmpct7RBtN8YBofzWLvwEne8LzQ1e/Al5jb3oMs+o1fmxwEGPqL7GF1BaPzpLgOomJp9KEkqP0HXmtTXoHh0KJu+empBCCXGMra86JvA8GRcOqL1jvo6qF3DHcYz3gPIg9a7J6s2JJxj/rXJPA3FU1mCX/xb9k///oU8N2Bovejz9DVWMpxuWZuNEm+QKDZJIJH7WrjDQNgY8Yt0rLuLbOk2Icjt1rssaUElbcZYuCZ3ipArhodBFuafby5rnSQssJGGr7x351pq6z9Hp2gDeRys7MQd3pLyJRcyi7828d3ZaJpmvMfPi0FECW99DdOrxO4ZSm/509IWOXsq/dQAYlEQct1PvtpoqhmMi6ylPeSIhGSCrpt7vWrzu3JxPHq3H5q5Ed0T4bhr6St6g9vzb6svNiTz/ykauVjzI84/aBIUxHvueXJGx5VUHIkN01PydY1+W8ch9Q9ze1WkTO1Uv6W3QxokDmMBaubV2WIOaAxKBtCvpEzGhF7fb7X+D0ZoY4A75FNXzPgN+XoDKEuU1lG/4dsa8NM08JxAuCly921VbKZ0zB24VHfB8zddbEz33YFiU1MD1DB7T3rFL2mVNQpbGzq4S78EfsroDzi6+p+7fckkn5rURAJajayJ8NpkiZxBnBuLDNpHnkegIe0V/AeVspL6x5SjmKDraInpyXNn8os7ROyx4rSxFyoK/BzQNvlX/lb/yvkQJtk4mHe1yeR8GnSOH0D6DUL4iHlIOyGL3R0KHGlkdnLEblen3UfRusp0bzhVNumUqWd+6XnfS3K1AYIprtUhSxKlTBvda6euijXavgLRIAl2oE8bX2Cm0RVqk+eV/vxi3Q6eUY+cAAAAASUVORK5CYII=');
