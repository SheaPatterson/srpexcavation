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
            $redirect = 'inventory.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'inventory.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 1954');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRpoHAABXRUJQVlA4II4HAABwJACdASpkAGQAPqFCnEomI6Khq9Y8oMAUCWQA1Iocfldq4RBt5vKz5T8ln6k+5vbheYn9evWe9AH+P6Zv1Kf234Gj/AVwDwv8weqXk99D9qx9f5j98fAC9ebt7pXdo/33gq6l/fDWkqAf6X9D/QS9bewactEmLCan+F3T+7It3eVLoWR07jWzgnXRDWc+3uwXFuyF2XZubATXrul0FeOh6Sa/LJ+8vFoqOYK7+THsobs0gHPbE0Xitl+EuiatiMB+oVVTAHJR0hfOYTNPb7Rcn5tI34/L7K89TY6pku2IwusQ1ha9emp/Q59MRu1FOC2jCLkszh74/XgBz6qMMkd0VGxqubWlL5ukzFZ8WsFJnCgJvROeOfim2emNTV4QA3MhdspBvRovqCOW/IAA/v6HDVROPgJVKy8d5M6TSJnIhXDQ0N415i+hYfG2kWC2uV/rPwfxI6cjjI0w2oNULxm5tQN6M62RtoqLE1x0iWp+D+uglrAygsee+JF7TvVFp1uw6fssd8FcD13X6CURpUxIwUQ1Abgi/UdxG53SWnfKzCQ/k21dYJtmJUgEhGVpJ9FtkFPo49/kJjpGSvaAtttIR/VHh7anvPiN/XXvYULpNGuMjxAg8kcmKDjQpns1n3X3n1egd6Q52J4FyjdGf/Gxr4N+pG2V+PjpYX40XbeAK8iqUa20RYFhHpBdfPbwFokKfVKpxXOVsRwiIjBQYKHKcZ1zte4ldMa+2FVqccHpaC+TtYv/DWs+leD/l7D8uLw0nQH1BVlmU0T+3aEu+FBRAGuNwR5IjEVuGCun5dRf9n8AkSqXGN76/smW5Al3YYk2BcCw+Gqk5+u+Ayaoh1FPultJS4I1bVjk1OsrprpKdoUTKKVspcEnBd5eSNT3XAQ79T5P2Fze8cNjdFhFn2LoYwPjEUXc62IgKJLPNcsmPh/htVQJhejMREQHZaCmVrubhGpf8kHDCMX/sNX3etmbd7vuXFugMRoeWHSahPEXpJk2WRYd2+ruUTr1KBKLAlFwE3cKg2CKd5/5rn8cJifwztpfk8n5dR+LBlGLHvOo0ZQV2qk3G2UW4Qceo4/4d07udxN7VOYFeJYpQ85qnOlZtM733JWa2ymarC4VNXXSpjjF9PgbNd7tWhabrYIW5qt6RXnHJ2zC9OyujeSWsWxaS9q+Ovy7Lc2xPAvkyWZsfOiA/cphiTX+gxI/XpBjuFGk4DrIHSrtBU5LY/Tl7K7izBhSaVDzPRlFVjdDQy4fcaZBj3W0vRW5hrAHVOi8KjGi7Xj//t45IJYjZXGDXZ2tgO2+1DogSb3YO4c9Ftg6mWf9zPEY/AaGTmI4XMnPT2YTBgqic+/0qdJ1MIFER/mPWvD8ULCv8k+srmlt9kmBWPZc+8ZbSkgZOMMksAePRaYrQsNYgFOF/eMsuj2gVPhK4Fhbc3TEO34fY+c6P4pKAVWPw/zb0bK/NUNrv9T/q0oncgcIXc5k4m1a0gsonnkv7IA84KlSP5GF19AMvme1RV3RLANveMJdrAPPXopi6bbaP9i9+r8lKZ4XLpYFKjYDFPi1KiRed8q/D9XhFsr/fs4olybSonkC1RNF5qljVraF7xdl9A0ljEG0UbRRvaQDFVouJy1YphRfGQPFTy9MacQSFl3TO7QMc4JNnE9npk92EcIICe/+fgxjMvGRqG2gzkN4GMDvIwSN8LdEtCdeqEcztuxNO6MHMzM2LdlT9p3soKZuxLp/kjfnDmuHE0euzJ8aYf7h2LNL7I0WmRZLjrdQKN5gTu5DIBjEAB5GT6MTWdOFAGoMLFvkTb/Lt0np08/LghJZ2Sw4nYGWFhWeUXmMQGP3/TU3aos+D2a1EuxqvzibgLe7g2ftw3aFF/uRyEYNo3HzmrVFj6Jm41NW/ws4/et8aV8i+6lYYln3m5EZ4XW0VkMQto35sjTgICn11iGihu0Ieo36s8NSiSS7ChiWoZvmG7i26mpIdYpRL5yB3e4AKePAct92SZb0ps6Hc21JMJdFzebJsUDaoh2bgftkE7aG85NPYVuFtg2Td+6lJNzgGqU0OMv/CQZIAFOMDGxHGFxMaORUWLYi4B56/jbrc+nIFFW++oVVE2TNovd73HdfhVB5C21NDktHpAvV2r0qfvfpNTt6Drvb4fVT5uYqcYrRk6XRaj39bvEkRgLm9/pb9v6i72Bg4mIdeK1F9iS82vkWDTv+JrCt23nhD0rvIEwlfwHXIi7nQEKrynKepb//e+Bo8U6ZBDLfh/sODvG7VuYALfExXj2DsyfjNbnaEDI0sPWsyW55aMNcFsqL9cWW31y2BYj2nDRhfrHGrkkR+LuxZKvzC6OJqgLqCXJyfAk74FYJAZemOP/bpW3Eg9+ZctAO4O/HUPHTPKHkebFQ4jam7oZf39/AIkAvoF4egX704S7WUT9qMp1mJvSEVp74cefarFD2hUI6Zt+TuX8ASLvkzuPk/CYq1RyvGcZP8rKTXUe1BENedyIHv3XgGgb9+NXc3Ox2fMdoCllgQRkXVnH4Kt7AzLoVxZMYnMIGHVX8C4o7pv1hrlGer4n1DbHGPebGqAAAAAAAAA==');
