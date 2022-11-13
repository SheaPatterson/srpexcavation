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

    header('Content-Type: image/webp');
    header('Content-Length: 1422');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRoYFAABXRUJQVlA4WAoAAAAQAAAAXAAAIgAAQUxQSMMDAAABoLVt2/HGuvPF9tHUbVR3kNS2bdtW7No9ZpZt22vT3vdfWL+ib750pTlmOyImAI+2EtOg/eLK28KKQFFt3nNrV44uIX32Qhxh2GXOQK+WAfL8cEQRde3N6EC3cTKCcLoDLULQ9xtvnzo7P/la4XkvFyHW23DLo4YC+27H7qkI8wcahJr6rOQ2UAZzEP6kp1oGAJO1naMIWfOiDmHPy6uy/NpMyn7QBHKmPwEhq18wI9w1Q9tj2xsaEFufSkTQut8BQKuhE/NCEcJcv+Zo6Fs3g9x9IkDwwyF3mRAzJhopz5kQ3uk2W26tq5EJcnmAieDt20jdzoQlO1jlE1qEdbrDkpa7OyVB0Kg9PocbJPtpIa4faUnMpV0JwjnVbtWn+nZiQXPmLgaqSNkvxOE64wkZIe3hCMJZZ3XoNZbdNNBeYWOrhVD1MA5E6ZMUAPbCUxkI49gtf5pk4rgAIa6w4SwDIJjbEoKcfgDA/PQcC+Ermz8yixYeb2Ag1D4FjgxA2WE1grdNQOm80CN82d0n1VTryxNchE5RzCMq2bupAM3VvP7n2xDGhQe9jKyH2wrcrOayf+8eaH/w0owE4atxbEgkln09bnrl01yQeQIAUQcfRYFIiUHRYgnk0drMvKqOsRW729NNERpO76L9pBQ3nTnwTTrIhnkBkheWds0gd+WaLAlZJc1D81tO//7R6dnp0b7Pub0yNdBSdj8RANgry5Te1w8AHJEgmCmXxBzeVO9ySNTjVW0Bfz5eqL1XVNnYM3367/N/POl0boz31Oamxcu4HAZC5s8VMmacFWUja3ZP4PTksIMCwG75Wk+qa4M+wOUSkDPZlQjkfXHodyxOtBR8WPtYmSAeiMf16FTcYIZ78oOvpnrqzMlKPgWG8CkldA19pyqQcx8efjM7tLfJu0Y+TwMowz6apqobYo8y5E9ZAWaeM/CaiCBNq17rDoLmz1NBt93G6ugZnREgOCf2HSkYj+fTUL/ERPSAe0TwdsnDrB+vJj/90Fi+eO7JFp9TUJSsnFy4RoqjSSq7RwyazMld9WrVWEfpGRNmioD7G4D0cQVK1STzCGD1FT5searsym5IVKsn7FOFYgifGxw8PF+v0oBuTQ3o3j/pZwzUDRTUj06IL//zL/fzAOxmArHZQKWKxGMBxruI54+IGaCb6B5rTsL/qPXsJQHvb9YOy7JNe8/WGlI9MUCsl4EImGA5LwS0/mcXevLPdqYTEFQkwe3XWi4rAUCXB4CVJEfEZIObb9svQ2Qe+nxmfdyISC1P1VB4JAcAVlA4IJwBAAAQCQCdASpdACMAPgkCgUCBDgAAEJaQ3DIJrHjh/YDKCCHiANYS+ABBN+EC7BOILudKAa1SdjQbJsZKWZ6LVFVKJeMz8VkRD1v+CGVenIpKNgAA/v/JqEY/ov+UlmFkFZ5m8fdOicOV6cUhKrTJkDYv8lBLSET+FnveE8xeUMtF9W7GAq36QXAIPAHiiQ6y1Zz/IJ5kGb0L/AqCZq2NsQfQVHkKcw893otZ9CMTOrC2RlbhnlpxA7Kfculvox8dz8oTs373etlg0qx70HVYIGcamzXdN9illQV7ZYVaHYmr20HOQKMplXyNAq/Z1gwQavXcgvVH1/DFg8b9c26VuqDANai1zTxyWs7sdLowpKeKctTFERJ2raCZ3aCgt9tcvazwBkg1aYh4epK61ImvvcH2WK33T0hcbDSbxLfnub79mXwSXqb4Fb8IEiZYrHqu4T5wH1w0y5GxXSLrlHcXLjLeoWxs5Lh4kNKJXUuYt1zDe5pCZ3ej/Ej/xkTHZ1Gp6hj1tZPYpZ4qUj5/p2Hep4ge2Vi7qdIOZ7wAAAAA');
