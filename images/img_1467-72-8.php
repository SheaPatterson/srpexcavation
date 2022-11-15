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
    header('Content-Length: 1294');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAEgAAAAbCAYAAADf98keAAAE1UlEQVR4Ae2Yha/mNhDEm4/hmJmZmZmZmZmZmflEZeZWXO4f2N9U86QoSvId36OVRoY49nq8u97kg0YoBdDSJdIsrcCkbDa7LZPJnMzlchfBJern6Nvt501OCvl8fiIE7Kc8Rrm6UCgMMxkBkAQaI6Lc1ySkJdaxhE0fgZTltLuCVJFFUWRBo5Y8hCzFIg6BCdo3qCmMHct7mxsDAT1EADjIiZ/DQo6xuXF+NoC24sqcl3SVdrx3vb7HoAyxYShlp4TnXSFlF2N2QMh42p07dOjQslKpdKV9lv4RlIfp7wheRsqQc41yUL10B22ME1+oTaLo5/R1j4kN83l+plQq9Y6bBOJ2OM5kQt3Bi5DD3FcoJ4J6Ja1FCpvaA/bLTZLcgudbIGd/WiyB5AdyN7mKu9rTnl1LB5MzGdQb6cCG14J9YIMJWkZ/mwTLWA3W17h5pkPQxmKxOBCiz9DVG0vrx3vbk97heV/eu0p1GKgX0rGOEOoLpTzYRb1XilUMBVttOe3ixkBKf8ePitqhnGaS1ksgdIHznU7gvUv7EDHTZA0od5T6CJAqJqcChivGxDwf5punY4zlrYSIeZHuLrIwuWx9yHVao8g6sF8BUEEW5U5QTn3RCSBgk/OTycyzM8YKDiddy7xzkGKwm4ECOONviGzwXqVkZY46+C2lfkEE2VVeWBy0s5SL9L5daoAyY7fTkr7TKmRlCsSyYq///gRFppmYaWAi9Us25yp4ZWGOjWx4DOVWcED5D0iTIrrc45296HDKacN7lf4+1YXU+8qtBMWGN8E7c31ulxmRNCYyfh/4Bmsb/KbOHpRBawf2XljmECWr7HmmY93EOAvNImscgHvLFUSUrtg3oRVKDEeJo8z7OCnJ0ycHZXvQinFzFdjBsySrdTowQPN6k5PkrsyzCmwGu3zAh5SbgVPgdAhqnwBHZc2+jVcrtkYJqmgyLSByRJJjhlju6sUn0DeDuk4+D6IyLyGWZNUP9Hw2mJmw2RHgJuvs9r+d2cqn0OU7+nZKP2MnbVnVp4z5A/wL5P6bwEqvMZW5Rio/ckpRBgXrHbxKXNirDaDYWSnE5Ft0ApTbwQYFarkcWEx7DQqeqDNXWZit7a5PPyqteXbFBD1nvE54Xcy3UgB6gK7h612xx99q+oSZpT7FLeoXsJ5l6uO5XKKvD3pf+HtQX/XguF0nTlqA/mB4Inn+AfWDs+BOZjxp7Gj/reuGgv9vQKdX4zdnT5v9R9RbKktG4ac1An4GuaMxXneKbjAw05a0j76TsnYf6lrKv2VdYIIuFFvWWtZbSLmxLn8y0XvsZseUl2n+OIIC+boG+uTSJCNLAoeoj0GhbUoU1aevbp9i1dbRKpq8Rdyrg+KbxjDPKFlO3Mlqbte7K3aBaawj97+sWGFXnKPnoJPSACeyy/wnIe8c7lO5qRJLE7Jch+TENVUyoL/L1J9Pcr+6GOPfEQroS6vV6hgWWyGCgiD4nb5fFVwZfzt0hReUP4UsphKy0nYJigYRPVu5ngUdUjcXIRrdpGN/r//mxP9kTtml2oNAJkv/j8SS/foFKlN1rFpbLpd7Rnw7HyJkAGgUEohxE7MvkphVfNMFIQwGbUGjlZxcRVe54pH+/TroOiY1S0HXPD66RCTRLoFmaZba8h9bTpfRz5OqiAAAAABJRU5ErkJggg==');
