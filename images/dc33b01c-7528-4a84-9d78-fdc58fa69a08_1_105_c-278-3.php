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

    header('Content-Type: image/webp');
    header('Content-Length: 5404');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRhQVAABXRUJQVlA4IAgVAACwawCdASoWARYBPu1usFIppiSio/U8MTAdiU3dA0BtbL+w7z//b/3rmKe4o4fIPmp9C+eD/Hfrv7lPJ86B/mF85r/lesD+x+jp1KHoq9NPkOfnD/R9wX+/8SfKX9C9t+RN1n5n/U9Ov/V/77wd+TuoQ7PtBfcX7T/yfS2+w8yfs17AHBQemewL+gvWA/0vKX9g+wx0yzECpqHT+Rvkb5G+RTwNJJp9fy0Q4ogy6ogEazsAAoNbXEdH8r2D21kw+ewbS5tgg01Ii4I73fTH/TefPYEoXc24gg1Hhp4916r3iyDCdNV0GNeC0ZKLqf2N4WRRFZlXuMbe6D6OnLgRGSQ4JC8rc7AASh3wzRXeymG7ZC66fcfj7zaXQrdrmKJxir3m6mz3TT9PQce2a/SNzzFbu567wcAmU+4V8ZtfWwxm4ikvfp4wNn4U40+ODvhxujZP+7FPSnFcd1a09kvOAz0mGkRli20vH5mf5a6AE9rDpdIWm7Hm3pMKOGpZj7vrei4eyfzDzRsvZWgZ0vq3TLXdzfJcCFZ/ACDDNFvl6Gz3mvM9MB0YXXQZV9TMoaIW61JLuvczFbuPYCBunftY2di1lMmRFxXLYKOH6gD5CrXaEmToUyYxjSBb7BIC3q615brFJcR4yiJnfkJai2rb5VkSYDRWq3VOPEth/DXSA6WLYR96R15WEeAFFfCequnWeIhU/TaWZWX98SQoBAvX/fgiiSCPSsURsupcf1+gY04SDHYk+HRrQdrjcq+IGTvCnVdlFku3aniscFdXEzEITlcR/QUZY0bDdOEHdYvtAWjwF7nOssjkWBB9DzRd3EBh1Wf+Gw6T6iFQ/zj0/h7fKeJocqLb8a89W0qnvsOIsrsz6nR8EBUdJSa2292Xgy4NvXBnixuDRofsW623S4B7Kw/SeUcrBkkVghbfFXgZSWeu9BNMLKh+dxtfkYgQfL4n/ttmJcEgfuNLW7fUlpBjVWXIcljyDypAG4t6Q/GZTB9G6tMvLPcevXMawD830obvlDVU/GZQxZjJBAzwpRPBQwqCoQmYck9EzfEkqn9qx6MS7BJGJU9dmwhM+TPa+oJxA0tfkauUUZJRfP8bZbzegmAQOv9XD6jVZMJgd/n0+kTNkpJJj4vIg41e8XzeuFTWgaCa/8jfBAAA/vS8MABCM67jbddWhLPUXwCkFlYr61EVdJ0ShWlLt2P3wbwyNakLFmz0JYTkfnUC1j76LxD3IJOREw6QWLJ7DW8oQBUjksgroQeBXcOPS8XCepD9uUPPpVOKaPiETslZF0J3Go4X5tftbNI8NXuh6U9Edmyuvz43qZNWksOrTQ0OoL5Gu28A3+C6hCUII1jCRUXRvGT9Udh7HMTQRPQTxQRSZjk/y1Pt8WB0jo5RSzOArRMc6nL7ctpMje5CXj1ld+J7PYF0SPFA92G+JMNLZ6Yt2Ve9pT8vJX66fgw8BdhO+WQNkb9PnLsUOJYOEtCfxV7yHRmFdIMMlCZDuXaotfRp5tfZ/qeWzUxu2oXBJajYRqV3CV81PvyDlwgq5yvnBzk7TQQ34vDK7UDhQRvEioUime1ILYhpRQNckauXmkDgjGvGmf87j751qkIlP3/MEKyqiy2aYdafFMzcbfEHunXcP9Rb6HxtiNsXn6qIKu6hmL84kvkpbY9MA1RyfPB2wZF9WSqUF1IbMSM+b6wzvpTWuT+IH0MiNUNZkOyXf6NzOP0/CnqfBz3Wi6vDQnfxkRk7SmJ347Ur1QPOHLBzeFdsLv0EmvCr3chkgED7cHgkhvzx1Zef3sSAzopm3HKveESOBWwMKkIT53dxdxJzymTBB2jqvpWg0KWUhVf3PXRicw+viZ1o7+d+EQ2u+TK2z44QmJPzJAwawOAPGyYVh4R3669UQakq0NTvw/gzX4rWJeDtA7QZtzRa2nCK2OnW2qeb4HQQBRlNo70QC28YwiGe2JbyxqC6rsCuggEke1CINruumxdWOhbYneUR+PSDRJZk/Dk7aO0EQZIY0qRVTnSJgXTxmVNwTNNvO65HGNriyNEssgrPMwpa3mLnwq1CV71MyGfb2M1Ie9YUAtwDUJcIjdC3waK4i3SReKdH2A/JSlgqXe9FBaGwyiAaqZRpaoXwpgeqtkjinhYCdZOsQ4Wjg8psBWfxD7MGwRVkmiA4+tu3Q4QCUdLN+TelizzpqyJnRcX5mr+NJGHKWq0RtMIW7oO2rWWFUd2yLF/P2Ntl3/OJofvHzlFQoBOXKrlCmnpZsTiXFuuSjPp98J4eQJFLutEzK5O/six3cYYW63NuD3hdO9zCKVd0MJBpJyfelfO3IqpIc203YlAl1R1u1s4fUrUW88Ui1E6IeSlwI7vIuaxEBaZ9jdKejfD51LOXceYJtWXc3ZkSlcygi6EKt1H8+nUJN/abHkUhRXJ+dQZlq6XpW1Vkz9ORCSiHi2JnDWqtOEtod6Vm3SfjtMpMbHrhNdLqPOHtqfngU5hdTMny7Fx+6pNRPMMexC5BDiGgJZ8TEkgstOqOTxHJGx8T2d10NFqFLlqqVZtVCrQCsmWquKrcEP/wKhFRP+BSpIxhQsdsTMWZSE+pMNT0bgm03cv8rSdPX4yXmQ0NWo5op4Q2huDnxFdfGbJkjeLFOHB95YUZ+8+IWvujtXNGNF99HeTBFB766dJ/R6ITi4WBb8raGX1+ci8pzRFTfFi8RaMHixxIdc1QiI+Ore5DrmhXOB06WJW0TOH4PYt16mQ1waYSPyqd+0BFf795dZJ85ATRnqy308uMtAgT5Nn2kO7eEcWmKjqLsvvWmBJYIEWI/qtc38/IYRdeChxiPzG7UMzjdtFGJU3nTBgDLD+WpRoADX87Vvlf2oqo/X41WC5SqCgOZfOzZd9nBThfS+/wz/t7ZerFqkMr/eFiH8XAuOowfb23U1mg8R+z9aOI8DzvyrPSVuSmaBPZcRajK3dvb2vBmuYN0OEpUSa5Z7MrYYkJBjeJ1jAI4yfJghh11gE9AuOuS8baxC9BY0CXwKZf9nxztWJjNgUU8lCPPQqFmg3MkY6DFZ4I1OXW3Rh4+KA2zZEZZVOHCVNStJo/nSnPDMG00gfmDzPMGO69N5ceDn0NZtkuWyo4eeP9VHDKEr3El1atCIbMXRoRqgg1VgNqeGUu4slmAfaXKEu6OdbSY+f0RHLo5olPQA92Hry25lyNPjxNEscnJUbJ0Cf9MVvbzFdOnKfUStKa6ncjR6J0vVLMdXBXqqqaL28F0dUBTrQlXYgt3UxMUTzEDXpDbj0/WIUXH/kW40j0FceC043YcFBqwFrCpVG6yN6jy79DI+Jdf+Kn6dmx65GiQjz04gzPN8ZYEm+z6S6PzcXO/eb2jpto0YaF8op6E6y8Yw8gep4P8gi7xgT6HFG6tZDzeKLXenGSM0WRpt5Fxt/qbBL/r0VuyuATlN+BuU2p1M2DJuUK46H48gODyE9VXWgoSBTakf0FzDMY8uHp/wsyHhMRpqKUNQY2I8lP7Y9/dsbQnPJ6e5IGNYQpFc9CGitwXLA4uSaHOvQ3X3KE/BQ5EJcJtQism8x/PziZRNBPA5cOozoYJTLzFKbM8ma1JKuG5BUS1T8lhuky4iclCMtOYGMzaTxteaZix942cHoXntI+9IwLPjDXiVINjKjkFUCQ6qJLRibV7VW1d+YVvcRa5T5jOn7sSyZNicqs5kKemLWi31a6cBMe8hEQtFuxxgKozzsYL6Yb6FHYAEeXJj+eiuh7vOPKJichNWF1l6TWlyodDGo9sPFHsfHS1LfB1oei+B0Z3rdlZW0zuFL+ZrIQyB619F273pWl/xl3q7ITO1KcNhmjTybYrukkeTzShzMwN/YTSKAHPqZj4gxGEfGB0qKakxVO08PnQU1Km0pDxmvO81//nV8Afndf7P14E5ZZws8n9zvN1UydRkr+Bzb0hsue3ceaBEkx/zCsko3YnK4kcXxlOqmAbqYJRp+A5pl8MZ8xu9O7TPs6Ta0kelMQiLX5AXQNDVOui7WpdTiVl8LinizoWRi+vQuyOlzMTKLzACkq5Z3EYhsaAioU7ccNQnsqHDAIsQ480R68hNIXQKhhP8jMx8uxOjOawI7m2S+/ggxiP75gQGsJpYRdPmr2F99RL72qpDDMsMJftmDpYMtxyORwrS1NhCzC/zK5O0LstV4znvaEf2VzzPowMvkvOzDGigzgZqwnwucgQDEgQyPMOsNs8i6idHy1wRFzKqQpL8YJOf7Bj1BX/M3E1MRb+fDQvqh1KkBj6Qpxxf+yrwrX9I9tBfDI0FAkm6VuVBg+2vNUUqknkDX3Y6PGJR39BWE5cS7C/ZX1krLp8r+1WpK8h6O4UG0SPFVu6UInPGcQvGCafHPIUp/NyLnM6thcGNN6QayFjR17A4iSELaL2MDpAUn9kZLTJDC7ouzfNwZuVZT4DrNP8VYAXV6Oi6zqGoVSwNp+PYF64/7inZZIfBlT4VqiETq9XRY/Scdv/lCyViebTtiUyXbCW8DRlJ6i3pC+HW60+jRG8UqNr8MFx65DaD7pcf87p/AjKbrQwAHiB5rqRsnvyNriUVuIgUiNX8o8i9XHI6Z0OD7lRIvdmLSuJFiUEqtlgQYFXw+bhTh7Q26SETqN/sLUQ9POXA/izF5cq17EDSHPYUdxXM1KVY7pGpYbLGNmyPxqnc3z6dcMql/R0bCo5D5wH1/1Jq/mijObcWvqRphwPzc2zy9vd+cgLnVmV+BTGf/3ha2GOAOpqxMJG2drbxZudTHZ6ewp+eTPooCtKZ9Ff8odiiA07591aZp0fpfr8lppa2qvG5Xje59NBQbcsZUNO0DTzYtaJP+TovNKFkaA8D8lQb0vJ/TlTkD9+9Fl47LQ/sNWyQtdR71vWe0sUb8Xg765fGDOW44DK6N05V/eJF1Xv5mAe2wRqZl46cpkNyKJIka/n+2aXCOkkVME1d+NdMbpt4AX0YCVmN5zOFBgSYnf/rN92qjbUTCkDuBeqEfM8iPQUTxQAzb6tnNEcma5XYKB9DA1ivqU0IqfiOv1viPrumhg6aik7qvmwdRiK3SfuOrygIlf3RvWp1Yly6n5DiliGwt8K10WqYQfTYh7q6iUKUHgSBPgFzhfmeB2G7FBsyYvdEsckrHsKdV/ypjSwSHfEV0796sZiIyIMwTbKVqfrm0aS31/ffhTXCuHBVmwFxKq2AWUTahPqMG37Ls+eQqIE5S0oCwd6SKbFdKwoL3WyzHKEfjVPEvB76gBQ67txw4RMA/gzE+6ZU9wM5NzpyHo0Q88yJQgYxrlDsBe2lBQP62wQDhUU26N67doIZc6RcEhzvqICESoTudVDIlsPDwBvuNTlxVpejiCF4hR+H8FUt/YK+LGMg9O+WsZ7oYhkHbbK8cdCf701WTw+vLjxe5itykTp3DnKM+zmtEwZ5BAi2F4Mu6NT0IKtelJ7iDqw7wMqnznDe3lybDVSkoyLp9K34l2011AFE8J34aXKfXLrpl6H0G0MF4aYYZEFmtO90Kud8LU9IKqebJve80RIBV53dEER2VKPGrS07vLJmRLJ/HGe4Xl7Minkm+MQ1zhU1dM9lVRXyOY3TA1Tcf1dIU9mgsFTcsrP7aybei11J7QDrC+GSskipH3bd0XetCtbvkcc223Uj4V3wblx3kLXetapUWkQXWuHeA8N+9yFH2hv0QlRror+npZYrioKbO3sDnHEjeR7D2q+g0OmZLnQm85R0XopoN5GF17Hcgh1nb0KPUFcDa0SlgTwowBNyLba/urTpFZUCHjMGJIy1FicL6kugf73j7+UAFCLMw3aWAe84NW4BdPKQl0gAIeVCencLwziHJE5Cdhseo5dD2hQWAtQUrj4kZa0bOyym+tB4Aol2YJlpgTdmDaiyi7It9qE8lAZ5BYUMT9lpYwrQiSpYnLfC/7DXiGr2YqK8y0uva5aSmgQSsKJ0u7RyAxzE1aJhfBtl8ISEnAUyxT67d9AfTd0rj0qi5U7iT6bKLX88AD+N7jeGy/T9kb2eKwgiL2xnJLfTJ1dNHk4MPQeS8Lxjx65dfbYFR7aHQlhkieACVDlXQ/82b9RcXlUEOwF7aNJvlUSVgAeQ5VOjJIcnJikOa+DJ3lW19ggZYliVX8oJp3hxDwn4XwakeC3GLW4IVsVffqMsPJ2L7WAOZ1v87qQTzFVhsDGJk4YPScz1oo5bqDi9VR0dWts3qjB/7A8ilIOc4PvtQ192IzgSEZPIlHpK3lWAwiqpRFSx6phCt0eieMGXZXUO70noJOd+Ngdstb8vog86B76lCSBNVPN49Q7HvKgdTvL+/fp2xRI8/zQ1dqot6oCEjrLPHCdS3pw4/SLOsMQZEWcGFqafk/xNWumUT6en/00tNujTgG31vLaiD5dQ/trsYHqjMfZbJQ6abrbBJfWvH29zQDyL6tPTcCg3TpsDgBLUgvNQzIu5hsKea3IV4VTtgNP5ObO0WFF0uYAKxdKCNf0dzKTenyJ3ew5hPi6RFJHPThW05fMJD/My8Pl5M/zUJqvwVmDKtpuju/EAponopp9ToD7ZXq/woaramVGmSOKNp0NL84uus+uCOFHdl57dFN0RdoVbvuSFciDYVbLRfj5cUK9D3xr5UI5qFeVL2Jig8HdFMXOFszqk9O+DbvCc3Owza9S6fxmHaG4laY8CJ9Sx9L6PVOh0vBcAlNRvOL9D6/qnyGgnBzr3Co1uk8cAAlpN4OOFVR+lmp433K/HNQS7YJ7yGIwxrpBbvXiGc+GLreUMrhtjDPDXTKxJ0XAL5pJU44qGEyO/57Cq781eaLs5rLe1QCDQsjf+AUzU5JU0GItPLRS89UXuOVhhEPbuDWA/xxFGDgXQ18lGalVxeIOUdv8NYvlmjZdIMaKiC0TlvK0NOmDSTgJQXLVFXh8DCFYSQ/lRYA7VqJ8f+NeIvKDVt+93JCRpn8Ypg9uBhx4qLpwBDZQhYfkNppQnNr/6Vw5pBg9uWuU4y2jZki10OomGkdd9XCnzOp2E4paDc8HkU3OHAqEmnXC4IPX1knH6Jbm+WgzB/GRvddMuk01kpsjVUNpeOYR0d4E4UP7eBllWeyECOXmN9VjertfSnf8lrX1AZrieBcdIysWziJPYuDmm9sfYft31Y56bA1sSpAL2TMI/HVw8wJ2AmlYaxG7nC07F50XCGVItGXRDWbyzU6EwAAAAAAAA==');
