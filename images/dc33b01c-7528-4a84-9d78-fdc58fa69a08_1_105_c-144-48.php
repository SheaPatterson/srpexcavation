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
            $redirect = 'enter-new-customer.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('2','3');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== '51C6A17C-29F2-45EB-9643-5AFA5FBC114F' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'enter-new-customer.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 5008');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAgICAgJCAkKCgkNDgwODRMSEBASEx0VFhUWFR0sHCAcHCAcLCcvJiQmLydGNzExN0ZRREBEUWJYWGJ8dnyiotkBCAgICAkICQoKCQ0ODA4NExIQEBITHRUWFRYVHSwcIBwcIBwsJy8mJCYvJ0Y3MTE3RlFEQERRYlhYYnx2fKKi2f/AABEIAJAAkAMBIgACEQEDEQH/xACxAAADAQADAQEAAAAAAAAAAAAABgcFAwQIAgEQAAEDAwEEBQYJCgQHAQAAAAECAwQABREGEiExUQcTFiJBNXGRk7HRFCMyVGFzgaHBFSRCUlNVYnSU4YSS0tMXMzQ2Q0VjgwEBAAMBAQEBAAAAAAAAAAAAAAMFBgIBBAcRAAEDAgMFBQQKAwAAAAAAAAEAAgMEEQUSIRMVMUFRUnGBkZIUIlPwNEJUVWFygqHR4TJzwf/aAAwDAQACEQMRAD8A8/0UUURFFPWm9LQ7pAVJkPOpPWlISjA3ADjkGmDsHafnEn0p91fDJiNNG9zHF12mx0VpDhFbNEyRjW5XC4u5SWiq12DtPziT6U+6jsHafnEn0p91cb0pOrvJSbixDss9SktFVrsJaPnEn/Mn3Udg7T84k+lPupvSk6u8k3FiHZZ6lJaKrXYO0/OJPpT7qOwdp+cSfSn3U3pSdXeSbixDss9SktFVsaCtROA/JJ86fdR2CtQ3F+T6U+6m9KTq7yTcdf2WepSSiq12DtPziT6U+6jsHafnEn0p91N6UnV3km4sQ7LPUpLRVa7B2n5xJ9KfdWBqPSsO1wBKjvukhwJKV4OQeWAK7jxGmke1jS67jYaKObB62GJ8j2tytFzZ3JIlFFFfcqtFFFFEVg0Pn8iHH7dfsFU2DDRcLBBnw4YeklGy+0p4tAOIOyvwVvBHDlUy0P5EP8wv2Cqno6Wwyu6xF91apbbieRDyAkH7Sgjz1SQsikr6qORjTckgkXtYrTVMk8OFUEsUjm5QA4AkXBHO3cvhuzXpf/qLe39ZJdX9yQKYINrlNNpS/Etu0M95CVnP+bf99Z+qkT0KjPx7jLjtkFCktLCUkjeCcg76T+suR43m4n/9sewVK+eipZHMdEcw6Mbz8l88dLiddC2VswyEnQyO5acDdVtuM0kb2Ws/woAH419OR2HUFDjKFJI3gpFSA/Cz8q6XA/4lY9hrjLLp4z55/wAW7/qpvWktbZvt3D+V6MCxC4O2jBHPMf4VZTarcgYENr7U59tYNx060pxpyKClKnEpcQN+ATjaHmpTg3GdbFpU3OeVH2h1rbqi8Ak8VJKySCOPHBp5tF8+EF+NMCG5kcErCfkOIT+mjPhzHhUjDRVkYaGAa6C1iCO5QyDE8OmL3SOdpqcxc0g6a3S4bhpW3TyEOzXXY7mFFtpbqAtPEEpTgkeNdZ256UddddWLqVLWpZ/NnOKjnd3eFYcYlUdtR4rG2fOvvH21z1WPrYxmjbSxZA4kD9rq8jw2ZwZK6unEhYASLcDrZNsqxwfyaqZGceADPWgL8U42sEYBBxSiCCARwNVBDfW2cN/rw9n0oxUqjq2o7CubaT6RXeJQRRtgfGwNzA3A4KPBqqeV1TFLIX5CMpPHmFzUoa38hq+uR+NN9KGt/IavrkfjXx0f0qD84VhiP0Gq/wBblHaKKK1y/PkUUUURWDQ/kQ/zC/YKakAi4NoS8GjMYcjJcJwEvD41lX2KT99Kuh/Ih/mF+wUy3BsuQ3wk4WlO2hXJaO8k/YRWZdLscSe/kJDfuOi2scHtGDMj5mIEd41CoYlov2mUykp2XdjaWj9R1vctP2HNJFbWnpiId4DPWNqh3hoSGShW0hL+O8kH+IfeKzpscxpb7B/QWQPN4VLibcwimtYm7HfgQoMDfkNRT3uARIw9WuXWoooqpWgX4QCCDwIwaYkhtVnduiEJStFtfYXjfh1I6vx5il6mWxQDOgXSKt1SWXXGj3RvChvOM8wAKscNcNs5lrki7fzN4Kmxpp9nbKHWDTld+LX6FLCEhCUpHgAPRX1Tz2VifOXfQKOysT5y76BXm66zst9QXQxzD+270lb0H/oov1KPZUsZt05phKVRHgEDZyUHgndVZZbDTTbYJIQkJBP0DFco4irqooxURRsc4tLemvJZqkxF1HPNIxgcHngdOd1HaUNb+Q1fXI/GmxL6pC5DyiO9Jf2cDHdDhA+6lPW/kNX1yPxqhp2ZK6Nl75ZbX7itXWSbXDJZLWzQZrdLi6jtFFFatYJFFFFEVg0P5EP8wv2CnGk7Q/kQ/wAwv2CmmUt5thxxlvbcRhQRwKsHJSPPWTqhmrJRcC8lrlb6gdlw6B1ibRXsOJsE7ae03HZilcplC0qlCTHQQQWVYGSOWSM4peuUqRKnynHmW2ylwoSlCirKUbgVEgbzT1ZtQWq9tKXBfytP/MYWNl1s8lJO8efhSNdE7FxmJ/8Asr7zmrPEm7OkhY03GYXPM2HFUuCu21fUSOFnZSQ0cBc6hdGiiuxHjPSetDSQpTaCtScjOyN2QPGqJrXONmgk9AtQ97WNzOcGjqdBquvTfpSYzmVDKgHsh1KTxUkjBI54I310bbp+RK78jaZa8MjvK8wPCtKRoy1SQkOuPKKTlJyApJ+gjBFWuH01SyRs2y92xGpsde9UOLVlFLC+m29ngg3AJFxyNk3UUs2rS0K1SxJjSZW1slKkrdUtKgeYUTwpmq/aSRctI/A/0sm4AGwcHDqL/wDUVm3e6w7RAfmS3QhCEnZH6S1eCUjxJPAVxXmztXeO1HekvtNJdC1BpWwV4BABI34353VgN6BsaHUPZfU4j5KnFlwp821nFcvc9v8AjGXG3UAKSJkTiNpMGC+uhJt4JKgtrbhxkuDCw2nbH8R3n76Wtb+Q1fXI/Gq5cNNoYjOPR3lKKElSkrxvA3nBFSPW3kNX1yPxrOsgmhrodq2xc8HqDqthLU09RhdTsH3DIi0gixGijtFFFaZYlFFFFEVg0P5EP8wv2CnGphpbUlst1uXGlKWhYdUoEJKgQQOVMvbOwft3PVqrMVdNUOqZnNheQXEggLb4fW0bKKna6ojDgwAguAIW7IgMvOofSVsyUfIfaVsOJ+0cR9B3V2UP3N4n4e4084kAJfSnYW4P40jdkcxxpZ7Z2D9u56tVHbOwft3PVqrjZV2yMRikLDyLb27uik2+F7cTieISAEZg4C4PXqmquaLdoNpkOyH5IbeMR1EdOwpRW4rGBuB8QONJ/bOwft3PVqo7Z2H9u56tVewQ1UMrJPZ5DlvpYheVdRQ1NPJCayJodbW4PA3VBsOpU25x6LfLitXXKDjUt7ARtYwpskABGMZHhTd2n03+/Lf/AFDfvqHq1jp9QKVPLIPEFokVwdqNLch6j+1WcVZWNYGyUkjnD63C/wCypJ8Pw98rnRYhExp+robfurv2n03+/Lf/AFDfvo7T6b/flv8A6hv31CO1GluQ9R/ajtRpbkPUf2qT26o+wyfPgod2Un3pD8+Ku/afTf78t/8AUN++jtPpv9+W/wDqG/fUI7UaW5D1H9qO1GluQ9R/ant1R9hk+fBN2Un3pD8+KrWoNY2Zq3SGIE1mZNkNqaZZYWHDtLGNpRTkJSM5JNSXWKCjTyUE5KXGgTzwMVyI1bptvJbUU5/VZI9gpf1RqS2XC3CNFUtay4lRJSUgBPnqBz6moqqYmmexrHX1C+tkdFSUVY1tZHI+RlrAjlwsNVPKKKKuVm0UUUURalotMq7zG4sZBK1EcBk7+Q8TV0tPRFFQ2lU59IWRvSB1hH25CfuPnpe6GUxl3a4bYHXoj7TfmJ2SR5vxqx6tkajYtiVWFpCpBcAWpSdsoRg7wnx30RJMzoitTqT1ErZV4bTZH3pUPZUX1bpOZpqW01IwUOhRbUDtBQTxwd3PxANWewaq1Lb5D41Sl1Uct/FLbjlJCwfEkJ3YpC6UNUWy/O2tEIPgx0u9Z1rewe+RjGePCiJS0bZmL3fY9vfOEuhW85ONkE5wCM8OdWc9D1r8JifVr/3KgVou82zT2Z8JYS+3nZJSFDvDB3Hz17A0tOlXHT1smSlBT7rO04oADJyRnAoing6H7ZjfLT6tf+5WNduh9aGFrgSEuLAyEDKCfMFFQPpFfGrtfastmpLnb4BR1DS0JbHUhZGUAnf5zVR0TerherE3KuDIbkpcU2vA2QrZAIOPA794oi8gyYz0V9xh5JStCilQIxvHnpn0VY499vjVvfICXELO0cnGykq4Apzw50y9L0RiPqlDjQAVIioccA8V5IJ+3FINlvM6yXBmfBWlL7YUE7SdoYUMHI+2iK+f8H7Xk/nafVr/ANyuI9Dtvzump9Wv/XVN09NfuFjtkyQUl16OlayBgFR44FSfUXSHqy3X+5QoVuYdjR5Cm0KLK1EhPMg8aIs+89EEhphblueS8pIzsJyFHzJUTn01E32XI7zjLicLQogj6RXtHTl1kXezRJ0iN1DrgUFoByMpOMpPI4rzV0oRWo2s7h1YADqWnSB+spAz6TRFPqKKKIiiiiiJ40LF1B+VPh1l3vxx3k7JUFIVuIUB4GrtM6Q49nLDV+tMyG66gqQUhLiFgbiRvB48xUu6IbtAg3abHlyUMqktJS0VnCVKB4ZO4Hz1ertp203ktLmxytSEkIUFFJAO/G7jRF07DrHT+oVLat8sqdCNpTK0FCtnhnB3H7KmvSxpeE1bkXiIylpSHUoeSkYSQvgoAcN/HnVStOmLPaHlvQ45DiklO0pRVgHjjlmpd0t6ogqgIscV9Dry3krkbByEJRwSSPEnwoi8+17J0RnslZMnP5sPRk15r6P4Ee46miRJCCppwLCwNxwEk7j4cK9aQYLMCIxEjoUllpOygEknHHiaIsx60aflzHlOxYrso4U4CQV8AMqTnlzrkuM636ftDspUcpjR0jDbCN+84AAGBvJ41OOkKEjT7kbU0Ba27g5cGkqJA2VDYIKTuzghOCM1VkJROgo65gFEhhJW2RkYWnJH30ReN9U6ge1FepNxcRsJVhLbec7DadwGefP6aXqs/Sppy12WJaVQmlILrroVtK2shIGOO/xpT6OrbFumpGYcpvbacbc2scRspKhj7Rvoi9JaO/7Wsu7H5qmu3JZ04p9fwpu3F8nK+sDe3n6c760ocJqFEYisIIaZQEIBJJwPpqO9KunLXFs8m7tsrEt+a2FrJyO8DniN3CiJ6vOuNL2Nkhyc044lPcjsELUccB3dyR568q368yL5d5lykABb68hI4JSBhKR5gKx6KIiiiiiIooooi3rNpy43pLphIKy2QFJShayM8CdkHFM7TeuLJMiW1q5zGHJAPVtfGjODgBKVJ8TuGBWj0WSIMSdcn5U+OwkxFtlLzwaCyvGzg+nJ8KNQRmH7xZGlX2KpKg51fVSy43FG1kILqt+PHPGiL4msdIcliWiRdpy246SXk/HJ2QE7fewkeG/f4UrWvR97usdUiNHWtIGe6hazg78nZBx7asuqbla7jYpkCJqGKl9hDJku9chKpqEtncFDiQeKfsrCttwj3awacTD1Cxbn7ctapDDjwYCnNrIc3ghQ+iiKWWm23ZV3MWE6tqa3tAdWVheRxA2BnOONbjzWs0XZm1u3WeJLgBQkuPAnPABJ3knzUzaPFpOqLldp94ilxiQ44la3UtB5ZzgozjcTvJrtatuVpvlht97iXBLFwhqWA0uQhUlSdvunugZIPD6KIliRpfWNwdVEkyJchbQSstOB9ZSFZAVgpOM4OK47fD1rcIq1xLpOW0ytTZCFvqCSjw7oOPNT1dtW2wadk3uJNSLxdIbMRxlK+8ypGQ4vA3jI4VyaZuti0zp6O8me29ImS2VLQ1KQhxCQcjrAc7ifl/R40RS2JA1HqYrbMqRKMc/IWXHSnPEgAKwK5l6a1DZZcFYcdivvOltlYS62rJHAHZBOeGBTnKci2rWahaL9FRCuTiVuqbdR1aUhYUULV+jvB84rN1zdV3DVPwRN4adtxlB+OpDiVIaLgCd6xw4b+VEWVcW9cW6TGjv3S4JdfCikKddRuTxPfxur5vlh1izbw9cnprkbIVh0u7OeY2xjNPV9vlpia/sVzXcY8qEGG23C04HQ2UJwVEDOO9v+mudyVBtEbU8yZqVie1cI7yGWEP8AXFxbh7h2P0NmiKUDSl0MOJMCR1EhSUoc2V7JKt2AdnBORjdXUvVguFlWyia2UKdSSkFCknA3Z7wFV7T14sts0MxHmzIr7L0r46P1wL6GV93aQkbwpCu8By30l9J8+JO1KlyHMRIYTDZSlaFhacgb+HjzoinVFFFERRRRREUUUURFbsbT0+S0262WghaApJUrHiRjhx3VhV+5POuXBxHuut4XXTCwH3mlw6XsmPsvcNpSetj7Qzu2zncM8vorgOnbh8JdjjqitsIKsKyMLOAeHh41h5POjJ51zlk+IPJd54vhHj2kxJ0vc1BR+KAASd6v1hnl4eNfB01PTnbcYQQrZwpRGcnZBG7gSawMnmaMnnTLJ8Qele54fhH1f0ttiwTJBdDbjB2HVNnv8VJ5bq7Q0pczjvx8nH/k5591LWTzoyedC2TlIB+lA+G2sRP6v6W29YJrDCnnVspAaLhSVd7AwOGOOTisOv3J51+V00OA951/CyjcWkjK2wt1uiiiiulyiiiiiL//2Q==');
