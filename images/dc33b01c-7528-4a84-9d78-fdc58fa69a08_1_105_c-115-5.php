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

    header('Content-Type: image/webp');
    header('Content-Length: 3608');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRhAOAABXRUJQVlA4IAQOAADwPwCdASpzAHMAPjkYikMiIaEUS050IAOEsQBrUGGcs9q/HL8ZulV2G7yflHl4XG393/NX+4+6T+uflh8lPMA/TX/O+k7+s3uA/Xf1AfzT+af6n+hfv/8zP+A/SX3GegB/P/7F1iX7VewB+zPpbfsZ8G/7bfuD7TX/t1p3x319/2H8gPOvv6d7PZr1ncW/Uv/Yehv8q+yX2T8kPzZ+I/9V4P+oX8dvgC/Gf5b/e/yh/Mv1iu2ksH6AXr780/yP94/cD/HemP/Aeif1p/z/5R/QB/F/5Z/hPy6/uv//9kDxPvtH+i9gL+Q/07/N/dF9Mf81/xP8h+Yvtx/O/7//wf9N+8n0D/y/+p/6b++fvN/kv/////vL9hnocftCd8AZEw1TkPOPMYqce1mVJRDVDOT5GY9E7Kd6VDblmJgOXFk0xpHuV47Mg1t4E9V2F3L2Tz72DLLqG/+W52n0JVW/DfjKwPdJV3nyXbad+8fPRpEyJstlbXWVSVKti4nrUQvZDngUKuoGNp6dZq+phLmj7/hZF7sWHC2STRFW/peb49wjVW1ldkSEKlXN/GcbOC5uKLLcIf2JyeI3EIO/8ZlnZBzxIwpMBcR92x1q6sn6WG9H6FbGzvt3aLe8cnr4akUqgWH5XdKWchWSBSOpGSC7u3ujxMGZ+WpWw9qrM0KbQ4HolAcKX3MUmwsAAP7//DCy3J1MeQulOCRn3W831jJL+8/h4sAne2ul5yyHDQNV/fW65NBzmMqR43h4495ztwIvO/zmRHfZAF6nb/5bDXCbp2KwTeD/H3Dv5mbLMTaeeWgRMK0OQ4BAyXySiagIgHB4oxXlGq2yfNvGX4TYsf4Tu7DBjw/nR0IorE400alBQyANLfEXnCW5NFj7xYwxX0W1cd3ISKJeflE926g8OO0yD+AfwoZ+3sm647MrRvdEjNwWZ16IfUP1+S6NG7EPYCXDbox8VsuCNl7n40ph6CqVypDfHJXeE1l/vhGxbjYITknsd6JeQXbZA705xD3AzLCkX/WcfEr7MinPOr6NlKDf8gaswORxHkp/DKFSQz9uKEXE1cs9FQRXRge+dYKEWFPbVeNc7fnb6LfykNuIoYwSP6KPa/ETZeBWe59/0q8ClCuROk2Ulb8V4QaKxFVYIm8vze3hgGsi/PXn6wf4u8iFJLmXJyYzZl2welaxwmXtcvbo8N48Y2v4rcqEE0xucSBOWP4m7FZN+k1oT8c8X6OmuGUDdQcpcuH3xrak6etoPCruscVULUfI8QbIu8NJZqvHmYeY4Jzz01CbSdqjNbUDO+T0ikMsPCKPCEHyF7p+rEsdkFL1Bnz2rebnfjo0XHwHHMrDheA4ke1vpTvavGWV1UY7D9T5KNwrJL1lquf9hI2wwN8Pui5GSTy/qSeXQmit29kBSt8B8NPROOWQOGB/ICEZjFnt7r0U+3Yt5H+mbGYuPeBFYBRggk92+OG7mzSd+bXPuYGiPX5VBg0z0N6NThE2Lk0+3n4HX0yPk4svNQMa/7keKSRNpIjXxGBEoVXXYnlwxt+jt+pd5AIfthqRp7rKQEL4470fLIn73r5Rj5i5R9/qaBm1X6HFTSqBs1EXOsZRlaVrv6eNw/wyIm+e6L7AVABohLOOahPc+x+bsxekF4/D2nKciiY295pB4SQAwke127XPt8C4kGa+BsrRl1zgF+sNB+HuBgerlkLuij6tH3D5iOPpRDmm491+xXBj1gsnesyhbXLR18hVDv33eRjPiI20E6fdI8yb5OilQrRwTV43klk/hbNO/PFve/fb1nENliYAjEALUI0H/ZpesRQSCBBz5QXlyYruuqjXnkW2cfvfJTB68zoc9OwpxN6HdL3XsDaf3jOtV12vvv0uKa2trUXY4UM8UpojzWktBZxvzUnRYQwllqlHKM/BDIRvJggJx31GKBgi0ccWpUDk+9b+ruKVEEyM05wvbvwn4ijKyAsL368AuThIW8d4gqCQqUy3F9Yh9WACQyIN3ExGLsfpZe1CmUFua4G6RugThaTlZpXtWSMFFkYkmomkRQYwOv1EAl/i/CFHIl4y4x3Cz1OAAxZ+Pxvr289kwBDOX/axK31Or+uTXQi7WE+PZ7cO0v7SekGRostB3Z7LwB96RbK7awxu0fXLF9PrpMo6liFnkuIrB/nha2sC8F/69P5M7pma94YYCjA41r0QV92OsVstrj5nYlJ1yxjRQ/4mGo4LgWDbLxf6tHosaMKrnDxKNDNVKYOn+WFnJileYW87T89yDL0tvg16rR4oIIGWbd3HQvfj8YGISz/hMrisnUyuKyZw2iEt8lpg+uCzqL/Z+huUil2zSfRhaA55Y7KFZrcjB+z2M3dNR4olTi35KaohnmptzqMQkKNkre+Z5D9yqAJlruryCvWXQdzxPlo/I/RVEkC0YiXhlOPd44MCH4nEgwCUmDpI1egiaOqe/y7I0RBjBT9/k1AeU4Su6LOxCUb/635XfasvnM2Bp/R5f5f3cNfKOcxsal/TL4Ywl/9LlxWtQDDlVvyfAJioVJWkWE/o17LpTChzdp4hUVQ09+7rDkSeX7UfZARuT5aQepUgc8YtEll5B+ZD3cIV/5VqUe6TErO3kj6QTJufnDDTbiHli/jwnJBtw7G/o66jJy2fxY0uiU7g8adN7DcYvvo1RGAycaFEa7C53gjyXVcUeExQIzjZ9OqDWQyG30d8X+J6uro2P9/0TJyuO79UJOeISYro8TQXcbMp+84Z36SxRzduQAhGWpuZrteXR6GEOGEMj/p4nDpouAAmqsp0bPHy3ZIlGqBqHdxTG6FEcbCl0K86ZjaXX/BS+kqVjGhNs3uIy36tuhoop9a+dbGXSHXytTaPmciqVSKlj0Knp7T7o6NKVHMpgu9VWZr//Dm19JfyG1AY9j9/XWfDEarHLj5affDDp80l0UN+yEaMm3IirPlijxefhRYLLYdc058EB8+rr7qx08/v9NmRmIvcVqNkI9aV7A2qExC80c2CQfV3h9jY0BJowY0jlHhe7qKNpGti0mCw9yi0KfyW1UnhfiGpv7y6cPiT48+eeHHxCMcDCSkP0TXl8QB+Dl5E6O1Zkj8eP2YhUaqJ2qln7KrnQ/7c0s9EJxtaTyIZCUv6T9ArJ5sDSNmmXSaDvVoV+bX2o36zBq66v1f+G3Gp8bUYU4aS/83EUw6/DM1vbMbPqyrn9q+30bMrNUEfY34ryxxAcsKc/u/13Mk4SCR5H/S/Ccyk3CAWXBVMWDu8byU9FrobwLwWY4aB6hsaO8vIXXc7OWGuBwS/q3rHOG19L4oCFD45JPbrleV0S1Az+IOycktpj4FzCU2amt6MWVDC21og0RQOOkJ+lBUp5R6XWodVgxkxvoNnztpaPDHVrQCJQGeV6Ja/0/AiWAmp+vm+4wKhSnbssOltRpjy/5Hein0TRozsWj5XrLPL98nrY0GKH5iOOkA+p1ebasAabizzWqokoRWRkUMrDa0xs9UwH7JgtjWU5vhDbX9CfgryrtfUlSuR6QA44XEG4gekhm+uxobXKrvq/GjvzqEpxvL8gRBOkiFa57G8br56cVANJ01jmaoD6Iox4vs7T/9oDYNHnNGZzqZ+839yzpz94SveJh3NHbj0GFBDohUVwlA0Iw5sHi99fmSAtU6ZJij7d2HzY38vZUCBMuKmiPCUKTDLzcyCrzGVgxLWl1yRrBeZWQ7VABptvBEuWqrn+DtUBLYnhQHlwOtEaEzOytCvilAweYo+0d/epJotR2/6c+eSsKSzUlmnGun1y2rFTwUmc3n9oqwe9QqqWx3X8CFDo5J2b1xpacnw2jMv7jnm9J46wFvyvGGDHAlp06z8stUp4yBZFxVo+OhTyF7J9l/5GjllLOgasm7/uwAkxjX5t1/DoP6BBaFGundMQzBBVlClAOnNtMxtloFjxqiCu1BsYTbWTJlak8AMH+CxPmrFcycTeE5iijHzeJFENYdajaxOaBYtNVJdfCjvSn6L2OXOSHLDtlio2lPX2tLayQ45nlYx9Troj/0gvaV07rt/3BFI97AAMCZ0+9/4WF3gkCNkeDAZ5fGUF8asBOBT58jVsyWDIlJOvY7W5/E3j1lX9IZy/IeQ3wXe2Sx/IBvW9cB7vTbZKorAVZH2IxoFHNNY3JKzNcj53MT8ej9YpWDn9NwNCU8aHp4RmEcRxe9gfEyOcnwPyad3/M5f+pUlseb9IkNFYWqZnmeQWaA1OR2ACVTcsFsSLdJySgZapFvNfFEXJC91595jZGC1+2PsA+wnWRif+nU3uhNXjFNf3yrGgpkI0VggjrpwFjbvMA7VYm3gXT1OwsNRhwyQ4LBtxih588c99W+C4FgT0EFqq8cD2w4TjWvq9f2BPIVslwK52ewFw/UsioX2px9IzAoGBNFR8U+8h/lm3nY4FeJAt5BLbErdjWvoS/W3IM7mzBLGOIIcRQjMMGIkFkpoGWL5svITbpOBDT4wxwqC3vuIDU1qAH9Kv3h/+chLMAgNuNNp7Z34C9Vh0pDIf5gSqXn8sIdPywOoivo44Pc2y2g1ocTRFPqQPndyAMR3eF4jh83YwYlp6mrQkKh25LrWEYfEJyn0YRiDuAs9ApbniHuInCg6PqohsFUvxhPvNc6xhAVa2BfgSH9F12j8yyoLc0vpPJdEbP3dKB8AyU3eWSI1kPIq6rL5IDuBB8zguU0gFnNzfXkAlJd9zLvQj8HMcN0d9DTCW3iAH68casUu67Gg0CXuNZ+Rzh4zU1I5lhvWkuQB8gjncBXmZy4exdMiiagAAAAAAAA=');
