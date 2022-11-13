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

    header('Content-Type: image/jpeg');
    header('Content-Length: 20217');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wEEEAAQABAAEAAQABEAEAASABQAFAASABoAHAAYABwAGgAmACMAIAAgACMAJgA5ACkALAApACwAKQA5AFcANgA/ADYANgA/ADYAVwBNAF0ASwBGAEsAXQBNAIoAbABgAGAAbACKAJ8AhgB+AIYAnwDBAKwArADBAPMA5wDzAT0BPQGqEQAQABAAEAAQABEAEAASABQAFAASABoAHAAYABwAGgAmACMAIAAgACMAJgA5ACkALAApACwAKQA5AFcANgA/ADYANgA/ADYAVwBNAF0ASwBGAEsAXQBNAIoAbABgAGAAbACKAJ8AhgB+AIYAnwDBAKwArADBAPMA5wDzAT0BPQGq/8EAEQgCCgIKAwEiAAIRAQMRAf/EAK8AAQACAwEBAAAAAAAAAAAAAAAGBwEEBQMCEAACAgECAQYJCQYFBAEEAwEAAQIDBAURIQYSEzFBURQiU2FxgZGSsRUyNEJyocHR4SNSYnOCkxYzVKKyJENEY1UlNfDxZHSDwgEBAAMBAQEAAAAAAAAAAAAAAAMEBQIBBhEBAAIBAQQIBQQCAgMBAAAAAAECAxEEIVKREhQVMTNRU3EFE0FhciIyNIFCoSNiQ4Kx0f/aAAwDAQACEQMRAD8Ar8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD0VNzW6rm16GdzQ8Su12X2RUuY0op9W/eSkq5dpjHboxXXTvXsGxTlpF5tpE9yu+gv8AJT91joL/ACU/dZYm7G7IuuTwRzT9nV9SeSu+gv8AJT91joL/ACU/dZYm7G7PeuTwRzOzq+pPJXfQX+Sn7rHQX+Sn7rLE3Y3Z51yeCOZ2dX1J5K76C/yU/dY6C/yU/dZYm7G7HXJ4I5nZ1fUnkrvoL/JT91joL/JT91libsbsdcngjmdnV9SeSu+gv8lP3WOgv8lP3WWJuxux1yeCOZ2dX1J5K76C/wAlP3WOgv8AJT91libsbsdcngjmdnV9SeSu+gv8lP3WOgv8lP3WWJuxux1yeCOZ2dX1J5K76C/yU/dY6C/yU/dZYm7G7HXJ4I5nZ1fUnkrvoL/JT91joL/JT91libsbsdcngjmdnV9SeSu+gv8AJT91joL/ACU/dZYm7G7HXJ4I5nZ1fUnkrvoL/JT91joL/JT91libsbs965PBHM7Or6k8ld9Bf5KfusdBf5KfussTdjdjrk8Eczs6vqTyV30F/kp+6x0F/kp+6yxN2N2edcngjmdnV9SeSu+gv8lP3WOgv8lP3WWJuxux1yeCOZ2dX1J5K76C/wAlP3WOgv8AJT91libsbsdcngjmdnV9SeSu+gv8lP3WOgv8lP3WWJuxuz3rk8Eczs6vqTyV30F/kp+6x0F/kp+6yxN2N2edcngjmdnV9SeSu+gv8lP3WOgv8lP3WWJuxux1yeCOZ2dX1J5K76C/yU/dY6C/yU/dZYm7G7PeuTwRzOzq+pPJXfQX+Sn7rHQX+Sn7rLE3Y3Y65PBHM7Or6k8ld9Bf5KfusdBf5KfussTdjdnnXJ4I5nZ1fUnkrvoL/JT91joLvJT9jLE3Y3Y65PB/s7Or6k8lbAlGt4lfRLIjFKSklLbtTIuW8eSMlItDPzYrYck0mdfKQAEiIAAAAAAAAAAAAAAAAAAEr0D6Nd/M/A7xwdA+jW/zPwO6ZO0eNf3b+yfx8fsyDAIlhkGDJ4ABg9GQYAGQFxaS4s3o6dlSSfNivSzqtL2/bWZcXy46fuvEe7RB0lpeR2ygvWz7WlWdtsfYzvq+bglFO17PH/khygdhaT33eyJ9LSq+22XsOurZuH/bidt2eP8AKeTig7q0ujtnN+w9FpuKuyT9Z1GyZftzczt+D/tP9I8CSeAYnk/vZ5T0zHkvFcov07/ETsmTziXkfEMMzvi0f04ANvIwrqOO3Oj3r8TxjRfL5tU36mQTjvE6TWdVqubFasWi8ae7yBuRwMqX/b29LSPX5LyP3oe1nUYcs/4S4nacEd+SvNzgbVmDk18XXuu+PE1Ti1bV/dEwkpkpeNa2ifYBgycuwAAYAJNh1Vwx69oreUU2+/cmw4py2mNdNIV9ozxgrE9HWZnRGTJ758qq8+dEVs+jjZt2cW1w9hrnF6TS01n6JMWSuWkXjulkAHCQAAAAAAAAAAAAAAABytZ+gWfaj8SFk01n6BZ9qPxIWaWyeFP5SxviHjx+MAALSiAAAAAAAAAAAAAAAAAACV6B9Gt/mfgd44OgfRrf5n4HeMnaPGv7t/ZP4+P2eV1qpqssfVGLfsO1oe2RptV9lcOdZzm+G/DfZLicDNrduJfBdbg9vVxN/kjmRu06WO349M3w/hlxTLGyVrMWmY36qfxC94mlYmYrMa/27NmmUzm5Rk4p9iMfJmOvnWT9qR0ZRjOMoyW8WtmvMyDZ/JeEJyshkWupvhF8XHzbsntiw1ibTSPvuVaZtotMUrln7azokzxNOh8+6K9NiR5t6JX87Io9dq/MiEOTtM3w6aXo/wD0bkOS1b/7NnrlscRbB/jimf8A1S2ptUfuzxHvd3nn8nodeTj+p874Hm9b5Ow/79T9EG/wNCHJTH7a4r0ybNuHJfAXzoQ9jfxZJEx9MM8ohFNZ+u0xzmX0uU2hRklGx9fWq2tjuRy8WUFOORU4vqfPWxyVyc0vmuMqU0/Ml8D6r5OaLX1Yal9qUn+JJXXTfXRBbTXdbpOhLUdPh87MoX/+kT4WqafJ7QyoT+xvL4bn3Vp+BT/l4lMfRBG4kktktvQdOXhHJrn82Nj/AKJL4pHuuIAAAAAAAAAAAADUycOrITe3Nn2SX4m2Dy1a2jSY1h1W9qWi1ZmJRO6mymbhNbP4nmk5NJLdt7IlGTjxyK3F8JL5r7mcbBrazFGS4x339KM7Js81yVrH7bTulsYtri+G9p/dWNZjzbENK3inO3Z9yR9/JNflpexHWNTJz8LE28Iya62+yT4+wuRs+HhZ07XtEz4jU+Sa/LS9iOnXBV1wgnvzUlv6DlfL+jf66v7/AMh8v6N/rq/v/I7pjpTXo101R5M2XJERe2uj6yNJryM7wt2yUuiVfNSW2ye+4+Sa/Ky9iPn5f0b/AF1f3/kPl/Rv9dX9/wCR5bFjvOtq6y9ptGbHXo1vMQ+vkmvysvYh8k1+Vl7EfPy/o3+ur+/8j1p1nS8i2FVWXCU5PaMVvuznq+Hgh11vaPUn/T4+SYeWl7Ea9umXRW8JKfm6md4Hk7NimP26ezqu2bRE69PX7TCHtNNprZrsB1NXjCvobdtudNQb876jlmflxzjtpP8AUtfBmrmxxaO/6x5SAAiTAAAAAAAAOVrP0Cz7UfiQsmms/QLPtR+JCzS2Twp/KWN8Q8ePxgABaUQAAAAAAAAAAAAAAAAAASvQPo1v8z8DvHB0D6Nb/M/A7xk7R41/dv7J/Hx+zBwce/5F1uFnVRbwl3c2XX7Gd45Ws0Rsw5Tfzq2mn6eDR1s+ToZIj6Tuc7Zi+ZhmfrXfCxuvqBzNFlOek4Mpybk6Y8WdM1GEAGvl3yxsa66Nbm64OXNT232A2AQZ8s39XTpe/wDofL5Y3vq03/e/yPNY83uk+Up2CBf4vzX1aavbL8h/izU31aZH/cNY84e9G3DPJPQQH/FGsPq02PuzMf4l119Wnw9yX5nnSrxRze/LycFuSfgr/wDxDyhfVg1r+iX5mPl7lK//ABa1/R+o6dOOvN78rL6duUrBBXvy1ynf/ZrX9C/Mx8q8qX2QX9MTz5mPjrzPk5vTtylYYK7+UeVL+vBf0wMeG8qX/wB6K9UDz5uPjrze/IzelbksUFceE8qX/wCXt7v5GOl5Tt7+HfevyHzsXHHN71fP6VuSyAQzE5TXUTVOqUOHYroLg/SvyJfVdVfBWVWRnB9UovdHcTExrE6wims1nSYmJ+70BhSi20mt11ruMnrwPDoIrI6ZdbhzX+Z7g8mInTV7EzGuk98aSjvKTUL8LErhjNq6+fMi11pdu3nIlTokZePlWynN8Wk+3zvtJBrz6TVtNr/crssa9PBfA+SptOa9JitZ03ay0di2fHes3vGu/SIc35H0/wAi/eY+SNP8j/uZ0wU/m5OO3NofIw+nXk5nyRp/kf8Acx8kaf5H/czpgfNycduZ8jD6deTmfJGn+R/3M3tN03DpzseyuraUZcHu+49TZwvpVP2jumTJN6xN7d8fVHlw4ox3mMddejP0ScAGqwXB5Sp/I98l1wlXJeqSOXF86MX3pM7uuQ5+kZ6/9Tfs4kdxpc/Gol31xf3FLbI3Un7y0vh0/qyR9ol7gwZKLVAAeAAAAAA5Ws/QLPtR+JCyaaz9As+1H4kLNLZPCn8pY3xDx4/GAAFpRAAAAAAAAAAAAAAAAAABK9A+jW/zPwO8cHQPo1v8z8DvGTtHjX92/sn8fH7MHO1Z7aff6vijpHjfTDIpnVPqktjikxF6zPdEwlyVm2O9Y75rMJDok4T0jBcJJpUxT2711o6pB+R2Q4+GYU3xhLnpf7WSqm9rMycWb8ZJW179sJcH7GbL5vubwaTWzAAid1fRWzh+7Jr1HmdPVK+bbGzbhJbP0o5Zj5a9DJav3fQ4L/MxUt5xv92QAcJgwZAGAZAGDIAAAHgGDIPR8TrhZFwnFSi+tM5LxI6bbDNxpTXRTUpQ33Tjvx+47J8yjGcZRkuDTT9DJMeS2OY0mdNd8Ic2GmWsxNY103T5NnWqMhW4+pYF3Ns5iTX1Zx60mdDSNYq1KEoyj0eRD/MqfX6V5jS0eTydKtxJve3Gk6/UuMX7Di5WNZ0kMrFlzMmvjFr63mZoWy9C9df22jdPkyKbP8zHfo/vpO+POFgA5OkarXqVDe3MvhwtrfWn3rzM6xOqoVnS6XlBe/JY8I+3j+J6GpCXS6nq1v8A7+Yv6OBuGXtM65rfbRubFGmz0+8zIACutgAAGzhfSqftGsbOF9Kp+0d4/Ep+UI83hZPxlJwAbL5xq58OkwcuH71M1/tZC9OlzsHGf8G3s4E8nHnQlHvi17Sv9J+g1x/dlKPsZV2uP+OJ/wCy/wDD5/5rR51dEyYMma2AAAAAAAAHK1n6BZ9qPxIWTTWfoFn2o/EhZpbJ4U/lLG+IePH4wAAtKIAAAAAAAAAAAAAAAAAAJXoH0a3+Z+B3jg6B9Gt/mfgd4ydo8a/u39k/j4/YABEsOLjWfJ/KOme+0Lmk/wCvh8ST69ZLCswdSin+xs6OxLtrn1/AimuVvoqb48JQntv6eomd6Wr6FJri7qFJfbXH4o1cFulirP8AXJgbVToZ7x9JnWP7dmMozjGUXvGSTT70z6IpyU1HwnCeLN/tKOC37YPq9nUSsmV2jqFfPxpPti+cRwmEoqUXF9TWzIlODrnKD64tr2FDbK6WrbzjRrfD761vTynWP7fIAKTRAAAAAAAAAAAAAAwZB6PnBt8E1iv9zKh0cvtx4xf4G5m1dFkTSXCXjL1mk1Q7sV3PaKyK2n59+BLMimN9UoNcduD7mXa1nNs8R9azuZd7xs21zb/G8b/7Qe6q+jIhm4b2uhwlHsnHtTJ9vst32LdkTqjzra4980vvJDqNvQ4GZZ+7TN/cSbLa00mJ+k6Qi2+lK5KzWN9o1lCdMfPottfXbdOftZ0jR06HMwcdfwb+3ibxRyzrkvP3lqYK9HDjj/rAACNKAAAbOF9Kp+0axs4X0qn7R3j8Sn5QjzeFk/GUnABsvnBdZX2nrmLLr/cybF95YJA61zNQ1avuyXL3uJX2qNcM+8LewzptFfvEtwAGW3AAAAAAAAHK1n6BZ9qPxIWTTWfoFn2o/EhZpbJ4U/lLG+IePH4wAAtKIAAAAAAAAAAAAAAAAAAJXoH0a3+Z+B3jg6B9Gt/mfgd4ydo8a/u39k/j4/YMGTBCsNfMp6fFur7XF7elcUbnI/K6TAtob8amzgv4ZcfifBxNKyq9J1y6NsubTamm+xb8U2Xtjt+6v9sz4jT9l49pfeS3oXKHporamyW8l/DLrXq6yx01JJp7prdPvREeU2PDKjzYr9pCtTT7+vqPfkrqPheD4PN/tMfaPpg+r2dRbpbWbR9azoz8lJrFLfS0a/8A6lBH9Sr5mRzl1TW/rRIDnanXz6FJdcHv6mR7RXpYrfbel2S/Qz18p3T/AG4AMGTKbwAAAAAAAAAAAAAGDJgDXy6XfjWwXzmt4vua4olWl5fhuBjX/WlBKf2lwf3kdPfQbegzMzCfzZ/t6/Xwki9sd99qf3DM+IY91MkfTdLoOjmanBJeK3z17PzPnlHZ0ejZffJRiv6pI7Dri7IWfWiml6yO8qJb4uJT5XKgn6FxLVaxSLz5zMqF7zlnHE98VirRqjzKq4/uxS9iPQAyJnWZl9DEaREAAPHoAABs4X0qn7RrGzhfSqftHePxKflCPN4WT8ZScAGy+cCD3Lma5qcf3lXL/aTgj+TpN9uqW5cJwUJ0xjs99916iLNWbYrREb0+zXimalpnSIne55g6fyXf+/D7zD0vIS4OD9ZnfIzcEtjrWz+pDmmT0sptqe1kGjyIpiYnSY0lPFotGsTEx9mQAePQAAcrWfoFn2o/EhZNNZ+gWfaj8SFmlsnhT+Usb4h48fjAAC0ogAAAAAAAAAAAAAAAAAAlegfRrf5n4HeODoH0a3+Z+B3jJ2jxr+7f2T+Pj9gAEKwwcXWsWNmO71Hx4bcf4TtHxbWrap1vqlFr2kmO00vW3lKPNSMmO1Z+sNqm7wzR8HJ+tGPRz9MeH4Eaou+Rtbru6qLXtL7Muv2PidHktY54+oafP50fHivP1P4I8tVxfCcWWy8eHjR/FF29vl562/xvGksvHT52y2p/ljnWFhpppNPgfFkFZCcH1STRHeS+o+Gaeqpy3to2g+9x+q/wJKW5jWNFGJ0mJQ9pxbT609mDd1Cvo8mT7JLnfmaRjXr0b2r5S+jxXjJjpbzgABw7AAAAAAAAAAAAAA1LrfBMnEzV1VWbT+xPg/YbZ521xuqnXLqlFp+skx36F628pRZsfzMV6ecJpwfFdRE+UMufqGlVd3SWP1dR1dDvsu0yjpU+fXvW/PzHtueWbpNuVqNeV00VGFPMUWnvu3vuat9Zpbo75mNzBx6Vy06W6ItGv9OUZOr8lWeVj7GPkqzysfYzN6vm4G11zZ/U/wBS5QOr8lWeVj7GPkqzysfYx1fNwnXNn9T/AFLlA6vyVZ5WPsY+SrPKx9jHV83Cdc2f1P8AUuUbOF9Kp+0bnyVZ5WPsZ60adOq6Fjsi1F77bHVMGWL1ma90w4ybVgtjvEX3zWfo6wANNiAAAAAD4nCNkXGS3TInPmRuurjLd1zcWS8rnFslbqurT38V2v7m0VtqpFsc2+sLuw5bVyxT6WdYAGY2gAAcrWfoFn2o/EhZNNZ+gWfaj8SFmlsnhT+Usb4h48fjAAC0ogAAAAAAAAAAAAAAAAAAlegfRrf5n4HeODoH0a3+Z+B3jJ2jxr+7f2T+Pj9gAEKwGDIA1NHxpw5R2zhJKPQucl3qXDb28SQZ+HXVDpYcPG4r0kKylqOFqDzcXnPxetLdbJcU13Eq0nUvlzCuhaoxyK3xUeC49TXwNPo1y4IjdMxXd7sWb2wbVad9azff94RfEv8AkXW4y6qLeEu7myf4Ms4rzWMR3Y0/F/aVNtd/DrRIeTOo+G6dGE5b20bQl3tfVZ3gv08ca98bpR7Vi+XlnT9tt8N7VK+dVCxdcXs/QzhkrurVtU4d6ZFNtuDKm110vFvOP/i/8PydLFNOGf8AUgAKi+AAAAAAAAAAAAABgA9El0+ChiV7LbfeXte5uHlRHmU1R7oJfceps1jStY8ofNXnpXtPnMgAOnIAAAAAAAAAAAAAAADEpKMZSfYm/YVpom84ZVr652/r+JPtTs6LTs2z92ifwIPosebgRf70pP8AAr7VOmKfvMLmwxrtEfaJl1gAZbbAABytZ+gWfaj8SFk01n6BZ9qPxIWaWyeFP5SxviHjx+MAALSiAAAAAAAAAAAAAAAAAACV6B9Gt/mfgd44OgfRrf5n4HeMnaPGv7t/ZP4+P2AAQrAAAMHAx+m0rXMeVK3rtmo83qTUns16jvnjbpV+p2Y8a7OjjXPnSn2ru285Z2W01yxEd096nttK2wTae+u+EquwKLpucucm+vbtNLT9DxdNyLL6LLd5ppxbXN2fHu7DsxTUUm22lxb7fOZNGK1rMzEaTPex7XvaIibTMR3BGc2tV5NiXU3v7TGva9dplldFOOp2ThzlKT4Ljt1LrORgzzLKp25bbssm5cetJ/Ar7Xp8uPPVb+H9L506ROnR3t0yYMma2QAAAAAAAAAAAAAHDdbvhujBr5cnDGtmvqrnex7nVI1tWPvDjJOlLT9pTnqBiMlOMZLqkk16GZNp82AAAAAAAAAAAAAAAAAADhcpbOj0XL/iUY+2SI/p8OZhY6/gT9vE3+WN8YafTTv41lqe3miv1PGqPMqrj3QS9iKe2T+mkfdo/Do/Xknyh6AAz2sAADlaz9As+1H4kLJprP0Cz7UfiQs0tk8KfyljfEPHj8YAAWlEAAAAAAAAAAAAAAAAAAEr0D6Nb/M/A7xwdA+jW/zPwO8ZO0eNf3b+yfx8fsAAhWAAwB9whKycYRW7b2RKMemNFUYL1vvZztKqg63f17txj6uDOuaWzYuhXpT3z/8AGNtuf5l+hWf01/3IAC0ouDq0I+EVT5q53R7b7ces5h2NWXGh+aS+ByDL2nxrf03di/j0/tgyAV1oAAAAAAAAAAAAAD4nBWQlB9Uk0/WfQPe55Maxo3uTmoK/FeJa9sjG8Rp9biuCf4EjK3zcPIjfHMwpuF8evbhue9PLDLpXMy8NSkutpuD9ae5rYstclYmJ3/WGBnwXw3mJidPpKwQQX/G0P9BL+5+g/wAbQ/0D/ufoSoE6Bx9G1irVqbJxr6OUJbSg3vwfUzsAAAAAAAA8r7q8ei26x7QhFyb8yA9QQX/G0P8AQP8AufoP8bQ/0D/ufoBOjXysujDonffNRhHt7/Mu9kFu5a3yTVOHCL75ScvuWxxLPlbWbYzvnJxXU5eLCPoR5a0VjWZ0h1WlrzpWszL2uybtd1VWSTVUeqP7sF2elkmNXDw6sOrmQ4t/Ol2tm0ZefL8y+7ujubey4Pk49/7p3yyDBkhWgAHg5Ws/QLPtR+JCyaaz9As+1H4kLNLZPCn8pY3xDx4/GAAFpRAAAAAAAAAAAAAAAAAABK9A+jW/zPwO8cHQPo1v8z8DvGTtHjX92/sn8fH7AAIVgNXNtdOLfYutQe3pfA2jTz6pXYd8IrxnHdL0cTumnTrr3aw4ya/Lvp39GdEp0bm/JOBzeroY+3tOmQDk1r9GPSsLLnzIxb6Ob6lv9V9xPoyjKKlFpxa3TXFM2XzbIAA5OrL9nS/4n8Dine1Rf9PB91i+DOCZm1R/y/1Da2Cf+D2tIACsugAAAAAAfcKrbN+ZCUtuvZHsRM90PJmIjWZiIfAD3XAwHoZScnsk2+5Htj0TvsUI+t9yJJRj1UR2hH0vtZPhwWy7+6PNV2jaq4d2mtvJH1g5Ulv0T9bSPr5Py/J/eiSAtdUx+dlHtDNw1Rv5Py/J/ej5lpuRPhKhP07MkwHVMfnZ51/NP+NeSKfI8v8ASV+yI+R5/wCkr9kSVg96tTitzc9dycFOSL4en5mHqVV1VCVNkHC5JpJdqlsSgAnrXo1iuszp5q179O82mIjXyAAdOAAACPco8fUMvDjjYdXO58t7HzkuC6lxfayQgCG4mhW049cJY0JSS8ZvmvizY+R5/wCkr9kSVArzs9ZmZm1t/wB1uu2XrERFKaRHkiy0myL3jjQT8yievyfl+T+9EkBzOy4577W5uo2/LHdWnJG/k/L8n96MeAZfkvvRJQOqY/Oz3tDN5V5IlZVbU9pwcfSeZMJRjNOMkmn2M4GbhdB+0h8xviu4r5dmmkdKs6wt7PttctoreOjae7ylzwYMlVecrWfoFn2o/EhZNNZ+gWfaj8SFmlsnhT+Usb4h48fjAAC0ogAAAAAAAAAAAAAAAAAAlegfRrf5n4HeODoH0a3+Z+B3jJ2jxr+7f2T+Pj9gAEKwAADhZ2jQulKyhqM3xcX1P8jRwtU1PRbeY03X21T+a/Ou71EqPO2mq6DhZBSj3MtYtptTSLb4/wBqWbYqZNbU/Tb/AFLtaZr+BqPNjGfR3P8A7c+v1PtO2VRl6JOO88aW66+a+v1M2dO5TZ+BJU5UXdXHhtLhOPob/Ev0yUyRrWWVlw5MU6Xrp9/osHUIOeLPb6rUvYRskODqeDqVbdFqk9vGg+El6UcnLxpY9n8D+a/wKm1453Xju00le+H5ax0sc98zrDUMmDJRagAAAAAHV0PNhk05EIxadNzi9+3znKPvQf2eqalX2Trrs/At7Jp8yfPRQ+Ia/Kr5dLe7OdhStlGdUVznwkur1nxTpaWztnv5o/mdWU4wi5TkoxXFtvZIjOdyr07F3jTvfNfu8I+38i3ODHN5tNdZZ8bVmrjikW0iOaSV1V1LaEFFeY9DQ0zLlnYGPkyilKxNtLqWz2N8liIiNIhBMzM6zOsgAPXgAAAAAAAAAAAAAAAAAAAAAAAAfFkFZXOD+smj7C6x37iJmJ1hCqrFbBS6nu013NPZo9Tl4FnOytTh2LKm162/yOmY+WnQyWrHdEvocGScmKlp75je5es/QLPtR+JCyaaz9As+1H4kLL2yeFP5SzPiHjx+MAALSiAAAAAAAAAAAAAAAAAACV6B9Gt/mfgd44OgfRrf5n4HeMnaPGv7t/ZP4+P2AAQrAAAAAPRg1snDx8qO1sE32SXBr1m0YPYmazrE6S5tWtomLREwid+mZmFNXY05SUXupR4SXsO1gcpLsqHgebFSlLhCxcHv/EjpHi8bHc+e6oc7dPfbjuuplmNqmaTW8a6x3wpW2GIyVvjtppOukvYyYMlRfAAAAMAZNrSK38pZFm3DwaMfW5P8jUNvD1nSMZzpsv5lqfjuSez9DXcWtkiZy6+UKW3zEYNPO0PblPvLSpVJ7O26uC9b3/AiuNomNVs7W7JefhH2HW1bV8HPtwcXGt6Rq9Tk0vFSintxZ9ku1ZL1mtazprG9X2HDjvW1rV1mJ0jV78mMqPR5OBJ7Totk4rvhJ/gyVFY6hHIwcqvUMVtST8bu9fmZMdK1/C1GuKc4137eNXJ7cf4W+ss4rxelZjy3qWfHOLLasx9d3s7oAJEQAAAAAAAAAAAAAAAAAAAAAAAAaeoZleBh3ZE38yPBd8n1Izl5+Jg1ueRdGC7m+L9C62Vjq+r5Gs5EK64tUqW1dfa33vz/AABETO6G1oSlKGTbL681x8/W/id41sPGji49dS60t2+9vrNkyMtovktaO7V9Ds9Jx4aVnviN7l6z9As+1H4kLJprP0Cz7UfiQsu7J4U/lLM+IePH4wAAtKIAAAAAAAAAAAAAAAAAAJXoH0a3+Z+B3jg6B9Gu/mfgd4ydo8a/u39k/j4/YABCsAAAAAAAAAAAAAAAABgyAMHGt0PGsk5RnOO73fb8TtA7re9P2zojvix5IiL1iXKxNJx8WxWKUpSXVvw2OoZAte151tOsvaY6Y40pWIh8tKSaaTTWzTOBlaHGTcseaj/DLq9TJCD2mS+Oday5y4ceWNL11RWOPr1Hi13XJfw28PifW3KPy+R/d/UlAJ+t5PKqt2fh4rIvtyj8vkf3f1G3KPy+R/d/UlAHXMnDV52fh4rIvtyj8vkf3f1G3KPy+R/d/UlAHXMnDU7Pw8VkX25R+XyP7v6jblH5fI/u/qSgDrmThqdn4eKyL7co/L5H939Rtyj8vkf3f1JQB1zJw1Oz8PFZF9uUfl8j+7+o25R+XyP7v6koA65k4anZ+Hisi+3KPy+R/d/Ubco/L5H939SUAdcycNTs/DxWRfblH5fI/u/qNuUfl8j+7+pKAOuZOGp2fh4rIvtyj8vkf3f1G3KPy+R/d/UlAHXMnDU7Pw8VkX25R+XyP7v6mHHlFJbO/I2/m/qSkDreThqdn4eKyIw0bPulzrZKO/W5S5zO9hafRhrePjTa4zf4dx0AR5M+TJGkzpHlCbFsuHFOsRrPnLBkAhWXK1n6BZ9qPxIWTTWfoFn2o/EhZo7J4U/lLG+IePH4wAAtKIAAAAAAAAAAAAAAAAAAJDoeVXW7KJtJyacW+19WxKCtj3WVkxSSusS+0yrl2b5lulFtNe9fwbb8qkUtTWI7lhAr7wvK8vZ7zHheV5ez3mRdTnjjkm7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zHheV5ez3mOpzxxyO0a+nPNYIK+8LyvL2e8x4XleXs95jqc8ccjtGvpzzWCCvvC8ry9nvMeF5Xl7PeY6nPHHI7Rr6c81ggr7wvK8vZ7zDyslrZ32e8x1OeOOR2jX055pDrmXWqljxac205bdiRFjO7fWYLePHGOkVhn5ss5sk3mNPKAAEiIAAAAAAAAAAAAAAAAAAAAAAfUYylJRim2+pLizs06La4dJk2xph5+sDiGVGUupN+gklUNKqkoUUWZdvclzjsVY+vWJdDp1VMezntJ+zgBB+gv8lP3WfEoSj86LXpWxYfyZykfHpMRebj+R5WYPKOHzsbGuXcn+ewFfgmN1OVFN5OgS27XBb/AAOZKnR7W4863Gn3TXD7wOCDrX6TfCHSUzjfX3w4teo5IAAAAAABKqaqKZeDY2BLLvit7Htvs/vPaVVq+fyes9UPyQEPBLOZX/8AAXe4/wAjDjV26Df7jAigJTtjduh3+4zG2F/8Pke4wIuCWRjU/wDL0G5+mD/I+3XPt5PW+5+gEQBLHCtfO0G5f0P8jVsWlb/tsLIofoaAjoO49OwL/oucud+7Zw/I5uTh5GLLa2tpdkutP0MDVAAAAAADMVvJLvYGASquOFGTqxtNsyZQ4Oajzk3957uq/wCtydn6ofoBDgSxwrXztBuX9D/IKNT+boNz/of5ARMEudb+tyet280P0PFrDXz9GyI/0MCLgkrWl9um5C/pf5mP/pP/AMfkex/mBGwSVLS+zTch/wBL/M85x0Z7KePkUb9Umn+oEeB23pNdybw8uFn8L4SOXfjX48ubbXKL8/b6APAAAAAAAAAAAAAAAAAAAAAAAAAAADZxcW3LuVVa49r7Eu9msSPCx7lTjYtD2yMyW7l+7WgNnGrhRZ4Lp1PhGU/nT7I+l9iJFi8mYTcbtSvlfZ18xPaC83nO9gafjadQqaIbL60vrSfe2boHhRjY+NHm0UwrXdGKR7gAAAANe/ExcmPNvorsX8UUzYAEUy+TFabt026WPb+7u3B/kRPLx+ktdGXV4NmLql9Sz/8AfeWucTlDjVX6TlSnWpSrg5wfbFruAqJpptPrRgAAfdfz4faR8H3X/mQ+0gLL5KpOrUZ9ssqS9i/UlZFeSn0bO/8A7cvgiVAN2N2AA3ZndmAA3YAAbsxJKS2kk13PiZAHKytE0vLTVmJBP96C5j+4jGXouoafCTofheL9aqa8ZLzfoTwAUtlY9Tg8jG3dW+0ov51b7n5u5nPLF5RaUqOdqONDg+GRWuqUX9b8/aQG+pVT8V7wkudB96YHgAAB9Q+fH0o+T6hwlH0oCzOSb/Yaiuzwt/AlZE+Sb3p1B/8A8p/AlgDcbsAAN2AAAAA+ZwhZFxnCMo90luvvPoAcHL5N6Xk7yjT0NnZOrxePo6iO52majgVy6VeG4nbw8eC7ywABSuTiQjBX48+fQ3t/FB90jQLD13R1i8/PxK10e3/UU/VlF9bSIDdBQm1F7xfGL8z6gPIAAAAAAAAAAAAAAAAAAAAAAAHvi09PkVVb/Okk/R2lg8nKFkZWXnuPiR/Y0+ZLraIDhzULud3Qnt6eay1uT1ar0bCS7YOT/qe4HZAAA8b8nHxq3ZfbCuHfJ7H3ZPo65za35sW9vQtyl8/Ly863wjIlJ89vm/updy9AFnS5S6LF7eFp+iMn+B9Q5R6LPqzIr0xkvwKhAF5Y+VjZUHOi6FkU9m4vc9yB8jpQeRnc1JJ11Pb0cH95PABz9WW+l56/9E/gdA5mtT6PSc6X/pkvbwApkAADKezT7mYAE/5Mapg0UZcb8iFUp3uaUntwa7yRS5QaNFpeGwbb+qm/ginjYp2ULZbcY81r2gXiD5i+dGL70mfQA+Lba6a52WTUYRW8pPqSPs4fKR7aLmeiK/3IDZr1rSbHtHOp388tvjsestU02C3lm0JfbRSgAueGsaVZNQjnUuTeyXO2+J0ihidck9Xt6VYF0nKEk3U31pri4+gCfgAD5nGM4yhKKcZJpp9TTKj1nCen5NuK2+ZF8+lv9yXZ6i3iC8talzMG7tTnB/cwIAAAAAAnfJLUMavwyu66FbnKM4qT23609tyZrPwXNQWXS5N7Jc9btlImxTFdHdLbjHmtPu4gXiD5g94RfekfQAA4vKHKuxNJyLaZuM94xUl1rnPZ7AdrZgpHw/O338Lu9+X5n2tT1FdWbf8A3JAXWCnsfXtWx5KUcyyS/dm+cn7SxdE1urVapbxUL4fPh2bd68wHcAAHzOELIShNbxkmmu9MpTUMd4uZfjvfaqcorfu34F2lWcrKlXrE5L/uVwl9234ARkAAAAAAAAAAAAAAAAAAAAAAAH1F81plscmb1do2Ot+NblB+p8PuZUpM+R+eqsm3Dm9lcudD7Uez1oCxgAAaTTT6mQXJ0TPwJ2+B0wycWcud0UvnR37tydACs5VNf5nJ+1eiD/I1prTV/m6ZkV+pr8S1QBVONkY+Hf02nZqqm482UbYtpr2HaWrcobIN1WYc9v3Nm37SY3YGDfv0uLTP0wW/tONkcltNsfOo6THn2OEnt7GBFLuUuv0S5trjB9zrRz8zlBqebROi62LrltulFLfZ7kgy9N1bChJXVxzsZdbS8dLv26yL5GJVKuWRiScql8+L+dD0+bzgc0AAAAANqhfsMt90Ir2yRqm5j8aL4/vSrX3gXRRuqKd+vo4/A9TCWyS7kZAEf5UPbRcn7UP+SJAcPlJW7NGy0k20ovZeaSAqIHcgtDdcOkVynzVztt+vtPSPyDF+LC6x92z/AEAj5JtIx51Zujprac7pT27VHZfketcsfnLoNGulP6u8H1/eSbRtLyo5U9QzoqNrjza61x5kX3+cCUAAAQvlq14Hhrtdsn7ETQrzlpkqWRi4yfzIOcvTLq+AEJAAAAADYp/ycj7Mf+SNc2KV+yyfsL/kgLur/wAuv7K+B9nlQ96KX/64/A9QBHeVX/2W/wC3X/yJEcvWsO3P02/Hq258tnHd7LdPcCmtmCexw+UMIRj4BRLZJb89dnrEsbXfraTVJeaUX+IEJx8a7JmoVQcn9y9JM+T+OqdaVdb3VWK1bJdXObPSGDr2Qujji14kH1zbW69CRKNL0ujTKHXW3KcnvZY+uT/IDpgAAVryzX/1Kh/+hf8AJllFV8q743avOMXuqq4w9fW/iBGgAAAAAAAAAAAAAAAAAAAAAAAD7rsnVZCyEnGcZJxa7Gj4O3VolrrjO66urndUZdYE70TlDRqMI1WtV5KWzj1Kfnj+RIypFodu6deXS9u1M7tOq6xpsYq22jKrS6pTSmvW+sCfAitHK3Tp8L67aZdu65y9qOnDXtHsW6zql9rePxA64ObHWNKk1FZ9G7/jR0IyjOKlGSku9PdAfQAAET1vRXvPPwY826KbsrS8WyPbw7/iSwAUfkwrTjZVwrs4pfuvtj6jWJLyjwY4OdbGMdqrl0le3Un1NEaAAAAbNLaqvfdzH95rG5Qv+myvP0a9r/QC64veMX3pM+j4rXNrgu6KXsR9gAAB8uEH1wj7EYjXXF7xhFPzJI+wA3YAAAGnm6hh4FfPybowXYutv0ID3vvqxqbLrZc2EItyfmRS+oZc87MvyZdc5tpdy7F6kdfW+UN2p701x6PHT35vbLbtl+RHAAAAAAAbNP8Ak5X2I/8AJGse9P8Al5H2F/yQF20f5FP8uPwPU8cd749D764/A9gAAAAAAAAABp5ufiYFTsyLowXYvrS9C7QPnUc6vT8O3Isa8VeKv3pPqRTF1s7rbLZvec5OUn53xOtrOs3arem1zKYb8yHd535zigAAAAAAAAAAAAAAAAAAAAAAAAbmBKMMquco85Q50tvPFNonOk6Hj6hjRztQ3tndxjHnNKEd+HUQLG/zl9mS/wBrLY5PPfRsH7DXskwNaXJbRm91TOPom/xPuHJjRYPfwZy+1OT/ABO+AKv5TaZRpt1Pg0XCq2D3ju2udF+f0kWLK5UYmRdbg2xxZ30187pIx4vjt2EUlHRW9rKr6JdzT/UDgGxRlZONJSpvnW/4ZNHW6DQv9Tb/APnqMqnQY8XfZLzcfyAkOhcocy6+nHzUpRtbjC3bZ85dj26yckF0fDnnZuPkrHdWHjJutSW3Pk+1E6AAACHcs6VLBxre2F23qkv0K3LK5ZWqOnUV9s7k/VFP8ytQAAAG5jPxJJ/N6Wtv2s6bx9HoUKr5WO1RTnKPUm+Ox52x06NSrxLJznZZBbNdifoAt4BcEgAPK+6rHpsutlzYQW8n3I9TjcoP/s2d9hfFAI8oNGlttnQW/emvijrV2V2wjZXOMoSW6knumVFXo8raq5xyqd5RT5rfFbnW0XUrtFynh5b/AOnm99+tRb+svN3gWUDCaaTT3T6mZAFYa9g2rVchXSbd/jY82+H2PwLPObqum1aniSpnwmvGrn+7L8u8CmWnFtNbNPZowSCdOIrrK9Sc6smt82W3VPbql1Hw6NCe6WTan37foBwgbGTTGi1xjZGyO28ZLtTNcAAZSbaS629gMG1Ql0OXLurivbJHWen6Zj7Qyctq3bxlHqX3M87asCNTrxb5WTtshHmtcdt/QBa2MnHGx0+tVQX3HuYS2SXctjIA87baqa5WWzjCEVu5N7JHocXlEt9FzfsL/kgPqXKDRodedW/Ru/gjEeUOjS6s2C9Ka+KK5qxdIdUHZmyU3FOSS6n3dRrZeFVVDpcfIjbXvs+yUd+9AWi9f0Zf+dX6t3+Bo38rNIqT5k52vujFr75bFVgCW53K/Ov3jjQjRHv+dL2vqIvbdbfNztslOb65Se7+88gAAAAAAAAAAAAAAAAAAAAAAAAAAAGxi/59fr+BanJp76Jieif/ACZUsJOEoyXWnuWRyU1LFnhV4TsUb4OW0Xw5yb34AS8AAD4nXXP58Iy9KT+J9gDX8DxP9NT7kfyEcTEi9441KfeoI2AAAAAA42s6xRpeO22pXyT6OHn735gITytzfCNRVEX4tEeb/U+LIqfdlk7Zzsm25Sbbb7Wz4AGV1r0mDMVvJLzgWTyXrrseqWyjF87I5vFb8Fv+ZKY4+PCXOjRWn3qKTIzyVXi6n3eE8CWAAAAPG+irJpsptjzq5raS70ewAj0+S+jSjsseUX3qb3+8rvV8aWFm24nSSnCp+I5dfNkty5So+Us3PWszzOK9kUBKOSer9NX4BdLx4Lepvtj+76iaFU6FFPP0nZcemsbfmSLWAAADxsx8e2SlZRXOW228opv7z5lh4cltLGpafWnBGwAKT1GmNGfl1RW0YXTSXckzSOjqz31TOf8A75/E5wA9Knzba33ST+88z6gnKcUuttICxuTGLi34uVdbRXZZLIkm5RUuC9JJ44OFCcbIYtMZrqkoJNEc5KJxWpwXzFk8PT2ktAAAAfFlddsJV2QUoSWzi1umj7AGitM05LZYVH9uJBuVuBjYlmNZj1xr6RSU4x4J83Z77Fjle8tZPp8KPYq5P2sCEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH1GUoyUotpp7prg0z5AE20vldZVFVZ0JWJdVkfnbeddpL8XWdMzNuiy4c5/Vk+bL2MpoAXyClsXVdRxNugy7IpfV33j7HwOvHlbrCWzlU/O4fkBaQKsfK3WH9epf0Iz/i7WP3qfcAtI18jKxsSHPyLoVx/ie3sKpv5R6xfvvlyiu6CUfgceyyy2TlZOUpd8nu/vAnupcsIRUq8CvnPys1w9S/Mgt+Rfk2ytuslOcuuUnuzxAAAAD7raVkHJ8Oct/QfAAs/kn42LmzXFSypNP1Ilez7iiq7rqv8ALtnD7La+B6PMy5deTa/TNgXjs+4x1FG+FZP+os95nxK66XzrZv0tgXomn1NM+tn3FEKyae6nJes9VlZSWyyLdvtsC8G0utpekp3XbIW6vmzhJSi7ODT3T2WxzJW2S+dOT9L3PgCR8nbIPVNOi3s4uz709i1tmUOm090+JtRz86C2jl3Jdym0Bd2zHAo6WXlz+fkWy9M2zy6Szffny39IF77PuCXEoxZOTHqvsXokz0+UM/bbwy/b+ZL8wM6i29QzG+vp7P8AkzTMttttvdswAPqEuZOMu5p+w+QBZvJCyFmFlNPx3kOUu/iuBLNmUXVfdRLnVWzg++Laf3HvPUc+fzsy9+mbAu7Z9w2fcUZ4Vk+Xs95mVl5S6si1f1sC8tn3GOopDw7N228Ku2+2zxdtsvnWSfpbAvUrvlrZB5OHBNc6Ncm13bvh8CHq+9LZWz27uczzbcnu22/OBgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGUm3sj7dVq665L1M3NNtjRdO6UVLo65SS8/UviS2unlHZXCyOLRKM4qS8ZLg+PeBBuhu8nP2MdFb5OXsZPPBOUr/wDFx15ucvzHgvKX/R0e+vzAgMoTg9pRafnWwjCU3tGLb7ktzva28+p10ZtNcZ7c+Lg9+D4bHlpd1lFT6GEZXXXRqhv2bgcjobt9uin7GYdVikouEk32bcSfeB8pk9vBsd+fnL8zn5WRq+FkVUZGNS7bUlW0+97ARLorfJy9jMSqsit5Qkl3tNE98F5Sr/xMd/1r8zR1KOtYuJOeXj0dDLxHs92nLq7QIaZSbeyXE2MTFty7lVX19bb6ku8kmP0dE/BtPxXk5CXjzS4L0sCNrDy5LdY9rX2WeM67K3tOEovzrYnvyVylt8Z249X8O+/4M18nG1rGqfhmHXk0r5zhxaXft+gEHBtZcMeNiljzbrkt0n1x8zPGlKVtafU5JP2gFTbJbqubXekx0Nvk5exk0xXrGfGyeFRSqYTcFzns+HrNjwXlL1eCY/p56/MCASjKL2kmn5zBJNYhnrmUZuPCFvNc65Qe+6XWu04uFzPC6Oet4qabXo4geSouaTVU9n1eKx0F6/7M/dZNcWOvZ1McjHpoVU2+apS48HsbHgPKZf8Aaxn/AFfqBAI12SbjGEm11pLdn10Fze3RT3+yyVQy9SlmvBji1RzHLmt78OC34nS8D5Tb83oMf7XO/UCBSqtiudKuSXe00j4SbeyW7JnqFeuYuJZblUUdD8yST3fjcN+sj2m5CxXffzFKcYJQT75PYDR6C5ddU/dZjorevo5exk88E5TbKXQY737Od+o8F5Sv/wAShebnr8wK/Bu5rdlsrXWoScnGcV2TXX7TGA4Ry6pTW8Y7ya7+amwNdU2vqrn7GOht8nP2Mm2PHX8ymF9GNQq5reO8uO3V3nt4Jym6vBcf085fmBA+is8nL2MOqxLd1yS79mTzwXlKv/Dof9a/M8civlBj0WXXYtCqhHea52/D2gQZJt7I9Ogv8lP3Wbun3xouvv6NNwrk4rubaX4kthi8pLK4WRpx+bKKaXO47P1gQXoLvJT91nkWD4Fym236HG9HO/Ug+XdK/IsslBRk3xS6t1wA1j1rput/y6py9CbO1jYeLiVQyc17ykt4VdbfpR3aaddy4J42HXj1NeK7Hs9vR+gEMlh5cFvLHsS+yzW6iwfkjlLDxlkY8/4er8EcfPrluqtSw/B7JfMvit4t+fbrQEWPSNVs1vGuTXmTZm2mdNsq59afZ1PzomWK9UzJW16fRSqqGobye3ECGOm2K3dckvOmfCTb2S4k9sxeUlcJyljUTik20nu2vRucDHsqxndm1VJpxSjB/Um3xX5AcXoLvJT91mHValu65JedMnixOUskmsfHW63+d+p53U8oqKrLbMXHcIRcpbS7FxfaBAwfdklOc5KKim29l2b9h8AAAAAAAAAAAAAAAAAAAAAAH0pOO+z61s/QWtoGq+HVOh0Srlj11ptvffdbfgVRGLk0optvqSLF5KprJ1LdbPandP0MDvatq1OlVVWW1zmpycUo7di37TV0vlDi6ndZVCuVfNhzt5yS347bI62Vh4uXCMcmmFkYvdKXYyCcpdP0/HyNPhTCFEbOdz5R7ltxA+OWcoyzcVKSbVPHb7TIviZTxsjHt250a7Y2c3vcWbeXhYtdTsozI2uO3Oj27d6OfVRdc9q65S9C3AtjRtcp1ZWpV9HZB78xvfeL7UavKDTsjInh5uPB2WY81+y/eXO34EXwMOynUsCjDk/CYeNfNfNUX1plnAfMJScIysSjLbeS33SfbxK85QcosfNpuwqam4qyO1u/B83uR3uVOZkY+HXVVvGN8uZO3siu71lbW4eTVznKqXNT+dt4vp37gOng12eDV00/5+XdzE+6EestDBwMXTsdU0RSiuMpPrk+9srvk1KM9U0+L+pG3b07Nk81ydkNIzpV/O6Jr1Pg/uA5GVyvwabpV00zu24c5NJP0d5IcDMhnYlOTCEoxsTaT61s9infAMtxhONMpxmt4uK3X3Ekw3r+NiQrhmxqjHdV1S2b79uKA4WsxUNVzoqKildLZJbLrObFtSTXWnwPfKnkWZFs8ht3Sk3Nvr3NzTsb9p4RdBqmqPPba4S26kgJdyYy7qLbNNsx3z3KVsppraKaXWiZW3009H0tijz5qEd+2T6kR3kxiSWPbn2r9rky3Xmgur2m1rOk36m8Z15fRKqTklzd95dj6+wD45R4EsvB6Wpftsd9JDvaXWirrHzLFZXwUvGj5vN6i8Ensk3u9uPnKk1fTp42fkYtcG0pdJUlxbjLsXoAkHJrXaYQxNNnU025JWb8N290ticXTlXVZOMOfKMW1FPbdrsKNjKdVikt4zjLdd6aLp07MhnYVGTF/Pj4y7pLg17QK3r1Ga1Z6x4O3W7XHmc7ju47bFpVylKEJSjzZOKbj17N9hBIaRJcp3Sl/wBPGXhO3Z5vv4Eu1XNWBgZGQ340Y7Q88nwQEQ5S69RdXk6dXU21NJ2b8N4vd7IhuPXda7I1LfaPOl6I8Ty8eyfbKUn6W2zt0YttWNDHjFrJzJqCT61BPt9IFkaTqHylhxyFRKtb81JvffbraN6N9M7bKY2J2VpOce1c7q3PjFxq8TGpx614tcVFefz+s5WHpGRjark50sznxu3ThzduHZx37AItym09Y+a7or9lldf8Nq/MiePsrvGe3iyX3Mt3WsFZ+nX1JeOlz6/tR4r29RUdlVko9MoPmv5z24J9u4Fs8n3vo2D/AC2vY2bGHqVOZkZdFcZqWPPmyb22b49XsKpxtV1SiEKcfKtUV82EXv7ETLkpGaydU6SblPnQcpPrbe7YEkztRpwHjK2Mn01qrjt2N9r3PjWt/knP/kyODyycvBsHm787p3tt177EKu1fVbY2VW5l0ozW04uXX5mBz4zlFSSfCS2fo6y1tB1dahXKlY8q3RXWm29991t+BVEYynJRjFtvqS4ssLkrFxzNSTW20KU159gO/rGqx0miu6VLsU583ZPbbhuVTiQjkZ0Ofwi5uUvQuLJ5yzTeBjJf6j//AJZX1EnVZPdNPmTj62mgJ/yewYZk7dUyIKTlNxpi+Kio9p3NV1nE0qEXbvKyXza49b877kZ0JRWj4HN6uiT9b6yB8o6cjJ1rKjFOThCHNj283ZdXtA72PyzxbLYxuxp1wb256lztvSuBKsijGzsaVVijOqyPp6+pr8CosTT7pylO2uUKoRlKTktupdXEsrk3KctFxHNvdKSW/cpPYCtNTx7MPIni2cZUtqMv3oPijt8ndZ8CnOqdEp+EXQXOT22b4Hnyv5nystuvoYc708fwOZgQnF4snFpPMq2e3X6ALjK/5S6PZjyszcZPobJJ3QXY19b0Mn1kuZGctt9k3t6DSw8vF1XCVkEpVzi4zg+x9sWB56TqVep4rurrlCMZ8zaTTfBLuOZyj1eODTLGdMpPIpmlLfZLfgdDSdNemVZFMZ86uVznX3pNLgyJ8tU/CMJ78Ojl8QIQAAAAAAAAAAAAAAAAAAAAAAADf0+3oLLblFOUKpOO/e9l+JYnJ7TsvGeRlZFkJPJhXJc3s4b8faVapOO+z23Wz9BM6eWV9VNVfgVb5kIx35zW+y2AlOuaVbqtNNdd6r5k3Jt78d1t2HJ07kpHHyeky7K8ivmNKDT632mg+W13Zg1++/yM/wCNrf8AQw99/kBrcrcPExJ4UcfHhXzozcuatt9mus1NLeZbHFw8SUITt585Tku729xrazrUtXlQ5URr6NSXB777mrpmpWadl15EYKfMjJKMnsvG9AFm6LpPydTZK2Snk2y3smvuS8x56tqt2mZOJOcIPEm3Gb+un3+hEafLXJ7MKr3mcjV9fu1ammudEIcyTlvFt77rbtAtHIx6M3GnTYlKuyPx6miCZmmatpWDOyWVTOiD5vMa3bjJ7dqMVcs766q4eB1vmwUd+c+Oy23NLU+U92o4k8aWLXCMmm5JtvhxA4mBlywsyjJit3XNPbvXai5a7MfNxlODVlNsPU0+tMo46um6znaY2qLFzG93CS3i3+AEynyazcaTWBn82tv5li329HWfcOSkbozlnZlltzjtFx4Rg+9LtNGvls+b+0wd5fwz2X3o08rljnWxcaKa6d/rfOkvRvwA42qVX496xsqKd1T26RfXg+rc72NhZutytgra68Wq5QlD6zS7iG2W2W2Sssm5Tk93Jvdtnd0rlBfpdd8Y0wsdk1JuTae/qAteEI1xjCKSjFJJLsSIHm65r2FnSxrFjp7OcVtuubs2uPqPNctb+3Cr95kc1TVLNSy/CZQVcuYo7RbfBekCydBzNRzsWWRlwrUZvepx4brqe6PnWtItz5412NbGvIqbSlLqcX2cCHYHKrIwcSrGjjVyjWmk22m93ubi5bZK68Kr3mBFM6y2eTZ0yj0kW4ScVsm48NyW8jc9xtuwpPxZrpIelda9aIZfa7rrbWknObk0vO9z7xMmzEyasip+PXJSX5esC8ObHnc7mrnbbb7cdu4rzlhqPSX14MH4tXjT+01wXqR6f42u/wBDDf7b/IhmRfZkX23WPec5OT9LA2tPveNO66MU5RqfN37G2luT/RdJyYZMdQzLYWTlSuiUfqqXH4FZKTjvs9t1s/QTCnljk01VV+B1NQhGO/OfHmrYCc6jLOjizlgqt3Lj4/Vsuv1kFp5Ta5f0cYKhynYq4+Ls+c/WesuWmRKMksKvimvnPtIljZM8a+m2KT6OxTUX1NoC7KXa6anckrOauel1KW3HYgmr6XlaYszLx7K3izmnKqS3fjcH6uJ5f41yv9HV7zNPUuVF2oYdmNLFrgpuO8k23we4HHwMh4vhF0YpzjXtHfsbaRY+g6blYPhVuTOuUr3Gfiev8yqVKUVJJ8JLZ/EmkeWl0YQisKHCKXGb7AJJr2mZWoQxXjzhGVNjnvN8Or0Mqu+2d107J7c6T47LZbkvfLTJaaeFVs01859pC2922BvaffLGnfdFJyjU+bv2NtLcsbQNNysTwjIyLYTlkxrkubvw4b8faVYpOO+z61s/QTGrllkVU1VrDqfMhGO/OfHZbASrXdMyNTx6a6JwjKFqnvPfbgtuzcqvLtttyLJW83pN9pbLZNrgSz/GuXvww6fayGTm5zlN9cm2/WBZHJLUa7cPwOU0ram3FPtg+PD0HS1bRY6hOu+q105MFtGa6mu5lT1W2UWQsqm4zi94yT2aZLcTllmVpRyaYWr95eJL8gOouT2q5LVeZnV9Bv4yrXjS+5EuhGjEx1FbQqqh6lFEMny1q5r5mDLndnOmtvuRGtS1/P1KPMskoVb/AOXDgn6e8Dw1jOWoajfkRW0G0ofZjwRIMTEzdVyV0c6oU4l8PFe+/Du29BCyQ6Rygt0uN8egja7ZKTbbT3QFrTTlGaXW017Stsa3J5Mamqb5xnVbFOxQ322b2TW/ajZfLXI7MKv3mRzV9UnquTG+dUa2oKGye/U2+30gXHCcLIRnCSlGSTTXU0yv+WyfhGE+zo5fE5ulcpsrTcfwd1RtrT3jzm04+ZeY09Z1mzVrKZzpjWq4tJJt77vfd7gcYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABsYsa55FUbItxlJJpPbr4HS1HDx8a2roq5uPXYuxLfZLfvexzMe50XV2qKlzXvs+07E9dcozSxopyT487frW3HhxI7RfpxMd2mk70tZx/LmLfu11idNWzZp2nwvx4cyf7WTSXO7lvv95916Nic+bblKL+YuK29LNGWtc62uzwWHOj277vbbs4cDEdacbJyWPHmyjtzed29r6u0i6GbSP1fSPr9U8Zdn1nWmv6p03d0aNhYOmyx77FGxRrlNc7fi+b1cPOe607TJ1uyPzF1z6Tgv/wA3Oc9Xi6rKvA6+bJy2W/Bb/keUNTUcPwaWPGXiyXOb7X27d6Oppef8p/d5/RxGXFH+MT+iI31+rq1adp061OMZOLlJKXP60ntuedWDpkq7rPGlCuUlz+c+KS34I1cfWXTTXW8eMuYtk99vwPta5tzt8WLTlvtv5tu7iedDLv3/AOXF9HXzMH6d3+Ok/pjv82nqOCsRwlCTdc9+bv1rZJ7P2m1RhYlunu5xmppS6nvvJcFsvO2aGdn25s4OUYxjFNRivP1t79bZt4ur+D0V1eDxlzep77fgdzGTo00nWYnfv01R1ti6eTWNKzE6btdHpp+Di349rvjOMoSfOe/Utt+rvPTA03HyMXnzhNSlKSjLfs7z4+W9+epYsXGW3DndiW3HhxPla1JV1wjjxTjst0+Gye7W3n2ObVyzE6TprOvf3O63wRNZmuuldNNO+dXzhYNMsnIovi24R3TT2N23SsOq6nfnc2clBwb47vfin5u01vlpKxzWJDdx2lx4v0vYS12bcNsaCipbtN7t+h9gmuabTOum7u1+z2L7PFYjo6z0u/T6atqOm4DybaVGbahGXF8Fzn1HPxMTHszp1ThY62pOtvxW0u09Y60o2zmsSHjRSfHi/S9j6euPnwksaO0U1tzu/bq4cOodHLpaPON0690vOng1pOndadY6PfGrYr0/TZW3VJycoSaa52z4Ld7Lu37T4lh6VDIjS5PnT3W3P35sl2PbvNGvVFXlW3xxopTilzU+rz7+c1vC14YsmNMUlJPmdnBbHvQvrb9U927f9XnzcelP0V3W37vo6WoYOFi4sZbtXPZRW+/Oa636Ea+mYNOSrbL5bQh19nn3Zr52asyUJdCoNb7tPdvc+MPMsxJtxSlGS2lF9TOujf5cRr+r673PTxzmm3R/T9I05OvVpmBkWQlTd+zabcN1uupce4+Z6fg2wlbjubhVJqaf1kuL23NazV5O2uyrHrr5qae3FyT7H1cD0s1uTrVdWNCCb8bjvut92l1bb9px0cmsb93u66eHSf079/0b70XFd6alLo+px7d/T3HnDTcCWRbSo2NxhGT49XO7F6jVlrcnbCyOOk03zvG+cuxeoLWYqdklhw2nFJ+Nxfpexz0M2k/r1nSPq7+bs/SiYx6R0p13d8aNt6LQrq2lN1S3TW/FNLffc0M/AqxZ1TjGTqk1zk3xXmM16zZGy+VlfPVj4Jyfir91PjwMz1l2VuM8aEnzm0290t3v1eY6iuWLR+rWNNHM3wTSY6GlpnXu7vs6HyPiK1vabr5vVv1NcfvPCvA06y66iDn0lc9nu9t0nxaPGWuSc4yjjpLipLnfOW3V1cNjUo1KVOVfkOmMnY23Hfq3e/BnkUzdG2t9+kab3U5dn6dZjH+nWelufeqY2JizhCmUuf1yi+OyfV6zkmxlXLIvnaq1BPbxVx6lt95rk8RpEQqWnW0zppvAAevAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//Z');
