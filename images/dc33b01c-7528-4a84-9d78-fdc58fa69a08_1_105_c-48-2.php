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

    header('Content-Type: image/jpeg');
    header('Content-Length: 2120');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAICAgICAgICAgIDAwIDAwQDAwMDBAYEBAQEBAYJBQYFBQYFCQgJBwcHCQgOCwkJCw4QDQwNEBMRERMYFxgfHyoBAgICAgICAgICAgMDAgMDBAMDAwMEBgQEBAQEBgkFBgUFBgUJCAkHBwcJCA4LCQkLDhANDA0QExERExgXGB8fKv/AABEIADAAMAMBIgACEQEDEQH/xACKAAADAQEBAAAAAAAAAAAAAAAICQoHBAIQAAEEAQMEAQIFAgcAAAAAAAECAwQFBgcREgAIEyExCUEUFRYiN3XDIzJCUWF0tAEAAwEBAAAAAAAAAAAAAAAAAwQGBwURAAEEAQQAAggHAAAAAAAAAAECAwQFEQAGEiETMQcUFSJBcaHRFjNRUoGRk//aAAwDAQACEQMRAD8ARzpnhidQs8xnC12Bgotpf4ZUsN+YtDiVlQRunkfXxv0x6s+mJeW8yNCgZzMcekNNPtKFUgtKafbDra/Il8pCVpIIJPQN9tH876af1X+0vqhZGSyco0vjY9IefZtMIl+KMWXFspk000hI9NkBSo61NhR+wWOs/wBz3MmBZvtIsZTLTFYJ4YipZ5PBDhS528heCE4PyB1rWyNuQ7Wlivu08KS/KuzVGVOVI4Ry4ylbPux3G8hS8pOfiRoEHPo56loabdGYlYWduKIrHJI233VykAAdZ/O+mFc1bsqPb6iCvksKUnw2EWLFcdKVBB8KXZSeaRvvyHrb79HUyuRFkMzIkySzNZUHGX233EONrT7CkqCtwR1sWV4fqHnsuqyNjH7a6iu0cBqPYusJU463wLvFSvXItlwpKv8AUQT1Go3tNsIkt+qkXTkmOWwY2IrhWlzI5AoYJHHHfRGtHd9GVZUWFfEvom22oUtLpE0qnNJaWzhXAhySEq5g4HvA6UtbfTkeopzlbcahy4k5CEOKZdqU8uDqQtCgQ+QQoHcEfPQB6rYKnTTUDJMHTZGwTVPNtJmFrwl0ONJe3KN1bbctvnqpvuBwC3hymM+cXFbp1wKircZU4RK/GJbLRHDbYjYD7/bqaTuo/n3UX/txv/K11UbbsNxjd1pS3Ex16G3DVIi+K022VJLiUpXltKc+ZHz1DbyqNnK9H1FuTbtcxHsnrBESd6u+66lCw0ta28OrVjyBHxx8dcHbR/O+mn9V/tL6oFpcoxaswrMccmUsqNltq/EMO8ZR5mJMVlaVfgXVN/vYO/InkOC/QKt/XU52kEPK7LVLT+pwaxagZfY30GsqJj/HxMyprojoWvyAp4gr97j46c7rRpNm2lOGakyGO85l/UvBaZNtb0Fti7FXDnKUjyCLWS30JTIdWDslLfIg+iB0xunbNza2zdhVuQg2a16vcEpS0qAe5BSkcEnBAV0dJ7G3ttyioHai8ZslOi6j27KoKWlIJjcClDocUnKSU9j6637HKqqubSHAtslg0rD8qPGEmdy4kvq4bp4+hx+6lEJG/sjph2BsnEK+PSWeplHbUsOKiNXthtiJJZSg+vI6l9YcAT6H7Qf+ekeaFUFpqx28WOvua94T2LVdHOXV5ZEOJR5zdU888Go7ZUlvk750LQr9gIHLY9Y93GVmq/b3m+kceZrfV3WkuoMSJb1OYRschMuNVbjraJDzsVTJVyZbdDgA/wAwO22/Sm0tpWe10OLEGC/OcHFchM55sKTnISUeER1rob/3/Sb5dZbVZ2kWsaVzaiKrIzpQviElQd8dKu+9Pm1fx9GaVs9+21hoIGKVinbePXIZjp2XHYUlJlSlPqUsJClEBKU+z8HbqU3ulWHNetQnACAuTEUARsdlRGj7B+D06Ky7ULVjKcZwGl71qwajZPS/n+J1U7DIbRsIhSpxuQFtNngghBPyFDb46Q3qo5lytR82j57MTKzOFcSqu4fQEpSqXXrMRfENhKeILew2A9dU8Srl+3zdyosdlZhLiLLUpyQpeVpWkYWhASE4Pl551EWF5X/hRO2oM6XJaTZNT2w/BZiJb4tLbWeTTrilqXlPn5Aa9aUSquDqdp/OvKaytqaNkNdIn1tNz/MZUZp9K3GofiKVedSQfHsQeW3vp/Gp/dXpHM0s1eoG7zVXU/8AV1VLx7GsByjDXUCktJDa220KsHY6HFuMqG53cW5+3cbn31PTiOUWuE5TjuY0Smk3dJZRrWAt9sOtpkxHA80paFelAKSDseiJrO7XVVT0aDJtqiBU/qGwyZ4s1CHgZ1pGchyitIUFrQ804WyOW4GxBB6pScAk5wO+hk/TUWkFRCRjJOOyAP5J0wns2120z0I7VcrxKPFymfrBkMydkgpJWGSrmpdl1ziYbEQKCPGpl8tobdc33ZWr/cdZj3z5hpv3K6jaV5rh9nqPMpY0KDGyyldxuUxBxWhWWyZVWlTKeaXj5VbncKKPR29dC/D7oM6rYGO09VqTGhQqVizZr34+NNNvsfnHMzDy5krU6tYeKlHcOoQsbFI64rTuUzC9q3cenZ/Hj1IxhjEE/gsfTHKqeO81IbhnwuJJQ2tncFW52W4PhR6F46P2uf5q+2j+rOde81+n5qPvppHc13131DiGBVPaPPyJVtAiOYrYyLvA3W5kdurj8S/FlTmiUyEhP+I0AQgAqPSFb83iry3cyZMwZE5Meds/zBK0yzLcWVul8ObK8hUSVb+9+idld4Osddcon0uTVz7zNrOumZpp2WViVYpkh1IQrls22qa8psfYq9+gB0NOVZLbZnk2Q5dfPJevLqylWtg62gNoXJmOF5xSUJ2CQVKOyR6A9DooOQCM4PfYwfroCgUkpOMg46II/sa//9k=');
