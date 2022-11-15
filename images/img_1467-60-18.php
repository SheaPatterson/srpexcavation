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
            $redirect = 'travel-logbook.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'travel-logbook.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 1016');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAADwAAAAXCAYAAABXlyyHAAADv0lEQVR4Ae1XA5McYRTMevds27Zt276Lbdt28ofTXdWXmswiPr+qHn94/TiHdpFYgHAgUec9KcFApc1mmwUOA2vACrAOTOGdc68omg6FxoElu93ejvsUwG78AM8HgKbdrmiG0+mcgqJDUtKvQNkunEp2QxxmYrOdUGoC51ZZzoX7SQLX0b8wTwJdHGfbditkA/KAIPMLWK4Im5ynK+K61OVyZeO6D+jF8xGHw1Hxi2uEWK3WszjHbZeSVoCb78Gmz2Iz15lsjCRApoExH0Q4MO4eLWwgzB4oiWGNMzjnAFsuTqAaiswAR4E1HzFlx/NVf8kFli4BHpAs3EYAhbgv9rNeFJQ9RQ/ackWxcAMUmROWpZDL/CGTD101gGtSATdQCiQxpvF9pflDuH8e5jqBy+StVNSOzdSpJo4ACzwHSDLJUKAb5xigwYeyJ3HOMhE0aXJXG2SYpNKdtzKzVtGaTDC4HuU1a2WgQXDNMrfbnalkNbH5HM9YY9eZrX14xIZcm5IDUs4ok2+ZFNCSWLRfiWcVz4p+cWwykAqvqKVnUFdmaCkf6ivDy5Khygvr8p4tkXi6FxXFNWvmMTFtBX5ZpMWg3HKFVg/waSTWeA1yDgOVW1ZH2cEolioYr+p6PH84XwLm+ySyzH1vzGbj4PF40vDNXdZpH3OEc6xhD3aVt0jOD2QA+SCpHKjHPB0ieUp99zHgOHUx6xFOV2KpAZrZy9LSescFwvx0NilAqA/iWjiHypVZ0rC54/pmiZsErjMb410uzlSAhI/h+WfgI+7Pm34eluSF3UA7weoBVLHcqXyliZQoJT3L94KuWG1HorhFtyJLGDhBEoRFPF/TRJQwxqcajVBzwpJ3DHMOlSa3MUtTSca2iIzD/WONIUmH6RXAA3xzCQSMcS1ZutHYuGiOXH9h4i+7uzDwAha4yYlDQkJipYTdFI+jdBuxSIbnpIhZgmW9r9hsrsLkcIA4n1c5snIcOzZck8yzTGQklU0H3j3UHqtFzmGSwWuRkcN2lWOAVc7rqxrY5To9AWIxVO4zwAmh7LSUP0qX1o9As37OLYYx07rO1G+eR+72g9AVlRDL6UnAsDY8o00XKbwySJ7WSuZaIOMixjNOj3AfjGVZ1hKo4Q/z887BjXIyssemH3gGTHKTqKk9ZBmLvgPTQ4rXOP2+tbFV3JzH0He7A9V8gWIXAoqSX8Rft49sFw3lyK5eli7UD+QwC7IRCQ4OTvAzhwfYseJSNouhZZgFmVRM1rACe0bS1MYxzgpk0QPZC/INtqRrKPhy3ccAAAAASUVORK5CYII=');
