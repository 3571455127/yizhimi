<?php if (!defined('THINK_PATH')) exit();?>
<div class="thank">
    <div class="container">
        <div class="row">
            <h5>Thanks for your inquiry!</h5>
            <p>Our Professional Team Will Contact With You In 24 Hours</p>
            <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span>s Back Home</a>
            <img class="back" src="__PUBLIC__/www/images/back.png" alt="back" onClick="javascript :history.go(-1);" />
        </div>
    </div>
</div>
<style>
    @media screen and (max-width: 1920px) {
        .thank {
            padding: 134.5px 0;
            text-align: center;
        }
    }

    @media screen and (max-width: 1366px) {
        .thank {
            padding: 50px 0;
            text-align: center;
        }
    }


    .thank h5,
    .thank p {
        line-height: 1.4;
        font-size: 24px;
        padding-bottom: 20px;
    }

    @media screen and (max-width: 768px) {
        .thank {
            padding: 80px 0 50px 0;
            text-align: center;
        }
        .thank p {
            font-size: 16px;
            padding-bottom: 10px;
        }
    }

    .thank .back {
        padding-left: 10px;
        width: 32px;
        max-width: 100%;
        height: auto;
        cursor: pointer;
    }
</style>
<script src="__PUBLIC__/www/js/jquery.min.js"></script>
<script>
    $(function () {
        setTimeout("lazyGo();", 1000);
    });

    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else
            javascript: history.back(-1);
    }
</script>