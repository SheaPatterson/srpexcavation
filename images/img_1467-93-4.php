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
    header('Content-Length: 1478');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAF0AAAAjCAQAAABcUM75AAAFjUlEQVR4Ae3XY5ucWxaH8bvWWns/5WZsOwfpNCe2bdtO2naca2zbxruxX4+/wnyHqUZQdRqjOv6VH/5rX5u867+XZJEetBp7JE+kSbdgvAWM0m3SZA+tSne5xcG0yEQ/1521RyR4E3O2zOqs1e8NTyWUseu8HuZNKq67rN2dCaYxoGCjnuRNyOtu3xpsIcagrIWZvOFG+IWulCn0s3J5qHsJGIKtl+o3ugEeslbrsAZfa212nzjIeeuMjWZIfrZ8jCSvCwlmUES6iJ60Rludm0s/d9LW6k53lGHERuunmEbWhV2JrfKVod/rZl60UN8bbCKNny8tkYkMIz5CP+mKyLLRekhu6zG5LTdIrwJb9cPhSWQI1ukf6ReeOnCliY7VT1JBVk2Xa1KrG3Sfu55ZRrrb7hElE74rfMgabBkx0DMsIhPBLP04i8geP1eqpZpiWyv1uhEljS23VpRM6Ha5DcyW234+SCULyWAr9YNMzWbsWqlkDsXSpqdIkmmUtRPBE2Sct1A/QoxnpDsjpMolaSNJdvjZUiNVTGe2NMsdxjEAd8a9DHqAVRnBP8l4ngvJB8l9Yf8cfZ8eIUumSZXUMp3RUiltfg6DCK7gwG6xhWdslb4vLTh5OfohhD5OLsiH/TyyITJObkkLc0jqCblrZQzB9UaXOltGn6g7Z7eIZVY766SXK9KPyDmMLMiV89LtiohzQT6gGwgxJN1HPlg3MwBsmXXZajKh2/QEUGB18ojpZIHT3XLPViO6VT6jJwgYniCodSPhKdYkN8lnAO6qK/H79RO6jWywcuvUvYRYIO+T25kRhh7I7bHfL+3uFQah3/SfdmdIkgWjpVZukCQpldIRTOc/Ilf0e66YdGGi9IqNsk79dmwULxISgDAwI0oeY8JT/XxXYqt0hx6TK1JjDdKou9PO0g1yn5d7B5F7tpT/iJ/vD+jP/FzSzXDniUJ4irsQXPJtmeOv3+WK3SKrZKJfYEt0sx6S83LL6qzFOqzb7ssDu5/67LBmqZPbckVP6QHdYsvcqy9ON5xckcsI06VZ90M/T5womRZllK3qYbnJCGvD8yLRD4RX+W3WKi2uFPSTwVr3ilXYSt2oe9xpuy//8J+wP+uHpC71uKHHdY+tdcV+TmQCuQR4QgwrIuesnJCesTpbYcv0iLtmNdZorXLf7lmX7kDo43RL6CfpVcnW6TYIplsrQXqTdovdSd3FJABXYj+0LmuRWrmoJ3SLlem3UkHfH15GlAkATOC5Mczm3+HnWUPqJt/UH7tTfo+tc0XhKYkCIggQGhXTD1MAwTTd4PfZfQpJ44rlfb7LfhY+q4esXW4SZgDysH9AE2ZIB+gmd8pWBxsYZ93My8mTD0sVAOpKrM636ueJ81yOn2Or5ZruJlOwWX/gZzOgVN2vxnSH3+OO6hmivJaPjNOv5uUAIf0ApbzWCPk0CozxB6zBHSEqX7El+j6/QH/tnqSK7Xv6rWCmLXcX7aE0+oWFCXuIAPm2RK7IPXtk9XrE3sMY0hRKqnKQYCCqJ6WNEe6qrdJjusOW2gMUXBHCC9yrcqOvdFLR88GWMiJtf1HfXEWqrNnK9X26RT9sy+yJ1AQzmMQIRugJq9FTVk4CiOnH/UF/ULrsobtuqwZdGNoaW8OA3Kt2T/cT0gPBOn/AyoL14aPuBAl5HPqnb3GXU/vC9JI2P79v8uAXAtjKjGoVxgCYycvABCLuCAlCDGySNLhjupnJ/DfCU61R2vtOtm8EN4O1/nBubmyhW2Tt8jFbG8zws6WRsQCMkyZCvBlEJkqlPbTy/r/QEnwsuKB7XKk9sDvu9ADrzDhJ3nipqJX22FbSL5jmSuhjTCaPNx0HBK7UqqXDlvHWoYf0B+Ez7roeD2byFpPH7NhohNfHu/4FxVrs86VOEeEAAAAASUVORK5CYII=');
