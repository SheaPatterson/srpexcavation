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
    header('Content-Length: 1361');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAEwAAAAcCAYAAADLGVncAAAFGElEQVR4Ae2Yg48tWRCH913PPNu2bdu2bdu234vW9v6V+31J3eRm0nfmznJUyS/n9OmDqjql7k+aMBVAVfnXLdQvk8msSKVSx8FV+ndob4JL2Wx2Gu+hFuqZTqfXo5DztMdQ0uJCoTCA8WpQpI6MX6WdDJon5XK5kSjoMDiKsqaHgsqSFsbcrc1RV8MQ/igK21ZdXd2r0kUq17VNMUhPQLhNKoV2u3EJSHme9+t2uiGomLRA41pjU0Y7kC6nKBSxBsFO0W6knYoFjbA1cKsgBD5Ff359DyWeDWLt/XDZBk/9EHoCgpqp3vDcOmHOGAMy82bQTyW40motrqqqqk99D3cNez+h2x00WMoqPELuBUdM6RFsCwlzlyPQ9fbt23cstxnvL4FbJUMp9h9fgWUNDGX1Aw2SqmFwmbECBe2IeLOlXLxh7hLmnqzFTaWu+Xz+Uux7hecRIEf/TG2MhFXfjbMbHLVGMasQ4gT9VSoJmMXGlFuAEoYjFMG7Vkoh9DXakUDqBjoJzrpQSzZcG+/bggZFVTC3UitBsIU8W2Gfi8Ccqi3DoyxTfHUUklOS5mhF7LU8QdlDwzJrUnfdN6y6QVEOxpbC9GnauTzPoH/eajviVF3UAevbGNawWaXXfI9Cz+qyZVx5Xs0CNCz8QVh1g6FWMqty6C8CUyJe7aLfEVRKbRFsawi6mz1nlsSeGeA03aEgkTyPOUWrtGS4YYLxIkGDoXG6mzdJf5QxIhTX568ovrjOWGdgB32jBtOd8qAseUlkwP7M3Uf/JkODQYOhXvG9pkX0s/L2RrGQ0f/E5pYL1li6N48DK1E283/m/JusxcobDqWhdZH5BoBp8btk3j91gKUCZ/yE8KPKTOkIOpdW7Kx5Dm67PIln0CHaVIJV50G7okWTPIZZz4EZKt8vDbANHDThgGvgDrhZl8v7GXI2lKPpHwVr49BKKRdIokFaqtYFlpaZ0wdBjlOp92XOLC8OAdeZDBjrHbzkQHW7du06MdbPEsRShb2/or0QRfN5cMV34DLj59wrasQ98gE2gJUqzbOYY+YeHa7eK0qZ6nLyq6B9Mux/JeMF7RysYJxZS/ehv8e0Tv+QSk0oPEfHZ5AH1STdeqcMyHQIn0QDYPwi8JwN8WmTpf8HZz5m/9thAWdVEmNPdVX634GDYFp4RhfQw7U1S6J/yg/3cNheGPhI/zNuda3fctZZjE+yBopvup7+WmH8ShSWac2b96v81Almk2ioJu465n9Nu8BkUkk8UnHyo2sJaIiXFtn1lJdXtBK/NFRWfHQXs3C1c7Rc2jcJv3qykXymmHw0mEriykzwQWbqmhsF5EUPweo2gN1aDe2IupaaREIoqWNYZEqUMf1WzLmnEuxzxmYEOwJOWNxGkfssePiJ8X08P6L/XcSmI16SLshF93Sd3lTyS/s0uBqes16lRawrS6nw5SMVmGtaJuJ7zlveY3xxfVjYnVDKQaFia/6lMBYVAzpCji0Wr+HiSW6aMTgX+5z9yKxqHac18G6/XgBmh9IzJT8bp5Xu6UVpYdZ78ctoqbHSV/WtjdpX8BtiKodc91ZC2F0o5CJYK7Pc3iQZpG+M+TV+Au7Q7UoYGmwiKd221Prqy3jJukqpDej0rxa6xqf4TXOgaBnGC8bfoazz+ruK0dRR4natKuFCSsuFtqDJUVpfjg/aIwmuolKyCTfXbChtPMCtJuvXkdK3RlpOoBbK6Fa40wow7B/z8RZqoT8BaeGh1ZQ32mYAAAAASUVORK5CYII=');
