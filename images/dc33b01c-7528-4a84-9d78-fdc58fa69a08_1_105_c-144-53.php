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

    header('Content-Type: image/webp');
    header('Content-Length: 3286');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRs4MAABXRUJQVlA4IMIMAACQPACdASqQAJAAPoE2l0elIqKhKfXNIKAQCWIA1uHV/wHYydb7t+VXP0cdeIuQWK/2gZ2f7x/ePYX+ePYA50XmF/j/+M/ZT3Zf9p6mPQA/uP+36y30AOlc/cj90vaqzV7+89tP+R8RfJR6I9pvXT/mfHJ055nfQl89/Y/P3/ZeA/qd9Qj15/h98rsj6CnsT9K/3v5pf2/0dtR3vb/tPcA/lX84/2PlJeFP5t7An9A/vPoDfTXn6+nf/Z/nPgO/nP9t/6/rnexT9zvZIR4wni4J/gv4njY6Imy2O0/qRhQCENW0U2rI8M9DYtTKlev571T+9SXdcdYB++tf5TZsI2BRHT5R0gjUGXt1Sh7dFWfBE9TP+jR9krA6ncddFrXvM86j+ovPnMVKGlh4b21VJQ2FpbP9YrxZA66jCTrMSPMK/vBzxqeTMsuKYZJYQxE91w6p7QR7Ouej7i7kumEHUtATomphC3xzUkoxwtJ3HhlIw7XXSfmrSq6K04yKWy3Wa/lZ8BKQxmhBkraYCpYIJkmRpoUTlAC+iARTWFq75pwWUXmnrSAk0sj9eSY5Qy25UUrSy7lC/V/ydq5LlSjljQjC6FXFL05BohCbP3mE4Z6qntA5dgLSg5DItYJxGk3rgXyiwgNBd3MLTSnmUadAAP78rSwwgpsJ4W75tyXXHhHWVMn8HvHIEMc342cXzGCcjjOfIjWMuTqcnD92sLe1Gx85qA+huPZklm+dDkI74O5m76Q7sMQV+UycG0ce1kMOx3PgZX40DRVOXuX53qT63J9US2e1u/IVSkbkNq/H5mJIslpWEMY10zGT0Dnvr0LhqNdUi+IZ7qzYFm0Ta014Opf91XEwWPm2mvLpWF7/pQ7+Npf/1G7YMrdRsJsl5D2Aj2+vwz/WOeQ2QVlAKShq4R47ouTIPcl+zRp/IOJgGF4B/J+XEYVSQlaXhEhlT2GX3iXOb3GJW6joqzxRMtl6GYtr40bI51XdnRJZBsYTRCRB59JTQbttzPLiwaDHYiuShvuCJDtVMQpokKPM+oqv7vr779aHxqBWK3qfnonFKMt0KeeuSSIBiCoCtfaHxZdQIYuCHhdVSamoSmKyj3sA5uHvicn5vymp1nNfk46lUESs3VVzF4G5swWBz52eMBWQs+HFBls6cO/QdbfYrgdEu0BFNg9xZZuui7hYY6E74nAUR1iXTv8OzNCuCE/ftTtKl/FIFdzvGRmIV4iZV1+pbYg4acutBWA+aInZ8o3xsH52erBZKOcmtQ2rOgcmNfQ4KDBw2p8bJIUeXwfkdvKzxyM8ZyllLXvRXlIJ09iviS0WeoAAIkzBH8S3vWl+cq051krhAzwbxIPi+2nlrbUE5W/QoIExi7TxMWJEIz9c8r5Inz78hQYqd9j4qTB0edwe4Qs+EfhZ/oNXng0SAG2hCqn/J9v+1KluTxN0zPog9xQmYPjAehEUPzJIe9qg82LTgZE73x1ckUUd4Uf1GfxALFWBKuowg9f1Nenwxq+NgdVqPJVyqsQK8dOUkubOf+ml3q769bLCCLD0f5/i76Dm1TzSkWWTHSsiqd2FdPk7QEunNXZ/TKwWWmJXrMdrHVRKPQs4TiE7hOIR7nZtI3tb7hPplUY2+wKZOH+wUQZA9n3n6Ybi8MfqNh7xni2tKblZJZLkMGsc7OMEPmtinEBmCxpJuBhuYUff/LJ+DlutKX4eTZStxp5k/ZGG8zuaNv6V/iqi9yLx9hLGTszmOzIjnG8Kf5A979NM1zQx83xQzx3jvj6ljVTJBbCNOOQPbW09o+vKnI2Yj2a0Kvb5AkPzTB529dVDGm8jBHP4pG7d9dijPV4436G3MUQP8biqS+kgaYy1Nje9CbOZnskaTktPOf39YSgGoCA3pzcCRJp6fCD8r1BSo2S1ob618fhk0Vs/RR1VpHWLTftGdJvgqXkIUzfl/itclr4MJ8S1Nbuzt5f9sMVVXWPiYy83C/Ke20ugb50qXv0FggcI7txqyJuoEN+3Kf0KnQEi1IrmLVfX4zhQJHbRwsYg4xT5peyV45aNkrgiR8LmkdIcGO1g4BmPQy1GtlwyCvEiIYpSV7EQVSv0FK91xyG3mWvqXfimtx2GKE6hmev7PkuH55JNnfJ+tes1fydO649LSEeRLmV4RqZzJx5SXwU6darwhS4fL1WoH1nsiyvQRU4fvmO+UwIis+SPt8lHhJWCU5I1Qu+Rg+MRUWeMFBnN/0/AnjyiHf8+nl5u7Cf+hjtdyYFfTHpXtMYZAwMlxHjq5I2xxcZ2p6KSVRteSjBZeiOtd63M+heJD+QhKk+6CcFlE0I5vfELDLC5QFALVipRV/6ehJ3PcGqG/fO9xAlfOj3PdcBTRwdgdn5193ai2TOQ4RbR2NtaxcKiv1j/iR63QVucHgjVfKuNh92wKFo8QavTtHiGUES1pepGKDd1R1Caq/Xwv8j/Ew9+j65pob6QAcH/MNfaqEJ+ivozUwNwrBkw/bS7LuxKQgvpyqKTvjjLl76h620Y9r98r7VKTvWD7/ONGmnmxIjkKDzdNhLeTPk+NbAksVD1etnjKHLIIZjKOW3NqSUHvXvI39mTz8q2m7ZomvjX4oXm/nfn5HTAAJfHBTv9SV0bU9dKml7MWkOOzgvAhGmZzCRSn5jz8sx3Dl9fwiDWsXr6HuZJ0+8pGtzquzxIi7h9GQda9JgpYqTQRd8aWZvz5/PlVpdQifrrNuLH8IVj/aSZxWQVN+Q+D8nvfdPUgMRI556fBenbiQGxzekXglP80960rQrApUI0c8paZsinAg7j6IIjMr2cYhuc4BcHGvSy0ZUyQ7Jsoi6PR1zn5UlFnsXcbodHuoUCxb+SeI57okairELaPL/n3cWYFfDijujYNrixYOATU9nM7VHZTXwMxVNKP6iPjazw/EoYPtLAv75b1gWUisqt4e8C9sN/FScVJ9WKS11YcFE6NmNE98Mz+t69Dh86T6TJ4wjhLEDC8C7E9jPSx6owgXiL2PzZ2jBuwbXM2NKNgRysiW3tleu935Y+3rKUX9vt8PlBbnEJ5cnNfHspNy75ToslIAPz7XroFmXjBWttaPFe0M2yDnCzz4KDNQaJ3Y43jMwgEyNPFXgZvFSkOUJbJXvUJmVmJrRDIVXDwo9zD4LKG3aOTQsDkzNXwpN7spu/ZPmTob6hNe5GPzgb1fCGCr//EAgUThsLBqI0jg92WGkUExPh/xO7Hwup7eqwY2qjOpu4kzrLfVbAducfpKOSTU181uz/YxfJo1wymk+Dpytwrv+KC9Hg/9Eb0ojOdK3DrIcaor/CX2nNqIAvYO1tgMuMrXorDowsA2FAA91T9gO78lJhNm+QULntCzbbrX0dlcpwoZzWEBJSdw2dCx3OOPDUaHpxdukSJ31rcd4yi8zGos4Z2T++dQV0Lhw46CRYTcuT0PARDzeq8808cpqMQirJjBlS1unQV/B2EJSXIF2jYhx6qUb70S5Fx09Lop6v+kg8+qDXUDgRF0lb6ZF54SuoatH5pu9Quy3TIVyW5qBBYedSA44s7zRv4V1fnIfovPXKZEGkpyx/6vebLa3iaKxGTpjZP30obWTaMDyJu4DKKxMl7VDgSXNYzQ8aifVBeQ/TwNpOMdeLJ8O0JnxhA5aKjx88O8b99wVKTT/t8GDofqTfl5RswnJrQtYTwwEVSyPeOrUAwv+UEzLcfzwduHMdDqDpgTU9uc7+UHF7dd3eNSvWZUy3b2roR+QMlpH5nThTyTFlrhs53FYnQ+kOdnYKeImgkW8equwOkYUWh++dR6V5fRObyC1IV32JvHOcmvZMxsRmS9nORu01e54TDTqDsYj6ewuGf5oHnxJ5PjEMva0JBF1E27RpvYAObcvoLT2HlHL1EplDpiMcQfDAsXN9JYVUA7bKelZP4l7D12XtpdaOs67szNsAfRGEM8/py/0jRqieFSjlNqK5peU4/M5vLrzkclK6T70gisap3+AkEb07YNISybpJxkJ3bJZBvdimbn2NCFcIkpzSzpGc4+bH/IFphUZ7QgCJah4jXDg5zSOUf/nZSG3xZH84zHF07eJ8zCVnWbSM1vrwcdLsWTI6+8HJQhpBs/ZT7jYtHA6iBCmiB4eTRkaWWblUnwjNNNPLgOzHSfsu27QJV7miobnHwZVyxMfPBU3+9fh7onINy+fAc30Q3iS17gnd0HjGRZ7ScA9lCSKrwDSsTQy/8uqHzh+hYaXV9EiEgLQLGsIzaOtrdFc/+m3m1eEVHXOMeFtvkVDSVrmyB4KNgxWEEva8NHnlgxO15fLHfem2AmJzOyJFFNm9vhxDdWy9zgAAb4UmaLWsCKSFVmdQQ6n1wipK3hTIev++gAAAAA==');
