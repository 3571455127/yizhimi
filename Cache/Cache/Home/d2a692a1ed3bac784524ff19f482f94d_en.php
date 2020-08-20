<?php if (!defined('THINK_PATH')) exit();?>
<?php if(isMobile()) : ?>
<?php if($Think.LANG_SET==de) : ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-NC725JK');</script>
    <!-- End Google Tag Manager -->
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NC725JK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <nav class="navbar navbar-default de">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo L(Toggle_navigation);?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>
                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#home"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="general">
                                        <a href="<?php echo ($r["wwwurl"]); ?>"><?php echo ($r["catname"]); ?>
                                            <?php if($r[child] == 1) : ?><i class="fa fa-angle-down" ria-hidden="true"></i><?php endif;?>
                                        </a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                        <div class="share navbar-left">
                            <ul class="clearfix">
                                <li><a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>
                                <li class="language">
                                    <img src="__PUBLIC__/www/images/language.png" alt="">
                                    <div class="language-box">
                                        <a href="/en">English</a>
                                        <a href="/de">Deutsche</a>
                                        <a href="/it">Italiano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- wap-nav -->
        <div class="wap-nav">
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <ul class="menu_ul">
                            <li><a href="#home" title=""><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="active menu_li">
                                        <a href="<?php echo ($r["wwwurl"]); ?>" class="menu_a"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/index.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"></a>
                    </div>
                    <div class="wap-language">
                        <img src="__PUBLIC__/www/images/language.png" alt="">
                        <div class="wap-language-box">
                            <a href="/en">English</a>
                            <a href="/de">Deutsche</a>
                            <a href="/it">Italiano</a>
                        </div>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- video -->

<div>

    <a id="home"></a>

    <div class="video">

        <video id="video" muted="muted" autoplay="autoplay" loop="loop" style="width:100%; height:100%; object-fit: fill" src="__PUBLIC__/www/video/0723.mp4">

        </video>

        <div id="loading">

            <i class="fa fa-spinner fa-pulse"></i>

        </div>

        <div class="percentage">

            <h3><?php echo L(Intelligent_Simple);?></h3>

            <p><?php echo L(Yizumi_devoted_tom);?></p>

        </div>

    </div>

</div>

<div class="index">

    <!-- company -->

    <div>

        <a id="company"></a>

        <div class="about">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 164','sjcont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- technology -->

    <div>

        <a id="technology"></a>

        <div class="technology">

            <div class="content clearfix">

                <?php getcatvar('page','id = 130','sjcont');?>

            </div>

        </div>

    </div>

    <!-- product -->

    <div>

        <a id="general"></a>

        <div class="product">

            <h3> <span><?php echo L(YIZUMI);?></span><?php echo L(General_model);?></h3>

            <div class="title"><?php echo L(SINCE_2002);?></div>

            <div class="content">

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(132)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list product-bg" <?php if($r[id]==140) : ?>style="margin-bottom: 50px;" <?php endif;?>> <div class="">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

            </div>

            <?php endif; endif; endif; endforeach;?>

            <div style="padding-bottom: 40px;">

                <a id="special"></a>

                <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(Special_Models);?> </h3>

                <div class="title"><?php echo L(SINCE_2002);?></div>

            </div>

            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(146)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                <div class="list  product-bg2">

                    <div class="container">

                        <div class="row">

                            <div class="pro clearfix">

                                <a id="<?php echo ($r["catdir"]); ?>"></a>

                                <h6><?php echo ($r["catname"]); ?></h6>

                                <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php else :?>

                <div class="list  product-bg" style="margin-bottom: 50px;">

                    <div class="container">

                        <div class="row">

                            <div class="pro clearfix">

                                <a id="<?php echo ($r["catdir"]); ?>"></a>

                                <h6><?php echo ($r["catname"]); ?></h6>

                                <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endif; endif; endif; endforeach;?>

        </div>

    </div>

</div>

<!-- welcome -->

<div class="welcome">

    <div class="container">

        <div class="row">

            <h2><?php echo L(Welcome_to_YIZUMI);?></h2>

        </div>

    </div>

</div>

<!-- Service -->

<div>

    <a id="service"></a>

    <div class="service">

        <div class="container">

            <div class="row">

                <?php getcatvar('page','id = 159','sjcont');?>

            </div>

        </div>

    </div>

</div>

<!-- map -->

<div class="map">

    <div class="container">

        <div class="row">

            <div class="box-img"><img src="/Public/www/images/map.png" alt=""></div>

        </div>

    </div>

</div>

<!-- contact -->

<div>

    <a id="contact"></a>

</div>

</div>

<!-- footer  -->

<footer>

    <div class="down-box">

        <?php if((time()-$_SESSION['time'])<60*60*24) : ?> 

        <a href="__PUBLIC__/www/images/New-Catalogue.pdf" target="_blank" class="download">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </a>

        <?php else :?>

        <div class="download" data-toggle="modal" data-target="#myModal">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </div>

        <?php endif;?>

        <!-- 弹窗表单 -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                                aria-hidden="true">&times;</span></button>

                        <h4 class="modal-title" id="myModalLabel"><?php echo L(Please_submit);?></h4>

                    </div>

                    <div class="modal-body">

                        <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit3(this);"

                            action="index.php?g=Home&a=message2">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                            <div class="input-box clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="name" placeholder="* <?php echo L(Your_Name);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="email" placeholder="* <?php echo L(Your_Email);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="cou" placeholder="* <?php echo L(Your_Country);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="com" placeholder="* <?php echo L(Your_Company);?>">

                                </div>

                                <div class="down-submit">

                                    <input type="submit" value="Submit">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">

            <div class="content clearfix">

                <div class="left col-lg-6 col-md-6 col-sm-6">

                    <a href="/index.php" class="footer-logo"><img src="/Public/www/images/logo_foot.png" alt=""></a>

                    <div class="copy"><?php echo ($name); ?></div>

                    <ul>

                        <li>

                            <?php echo ($address); ?>

                        </li>

                        <li><?php echo ($phone); ?> </li>

                        <li><a href="<?php echo ($wwwurl); ?>" target="_black"><?php echo ($wwwurl); ?></a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a> &nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo ($emaila); ?>"><?php echo ($emaila); ?></a></li>

                    </ul>

                    <div class="footer-share">

                        <a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">

                            <i class="fa fa-facebook" aria-hidden="true"></i>

                        </a>

                        <a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">

                            <i class="fa fa-youtube" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

                <div class="right col-lg-6 col-md-6 col-sm-6">

                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);" action="index.php?g=Home&amp;a=message">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="name" id="" placeholder="<?php echo L(Your_Name);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Email);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="email" id="" placeholder="<?php echo L(Your_Email);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Company_name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="com" id="" placeholder="<?php echo L(Your_Company);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Message);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <textarea placeholder="<?php echo L(Your_Message);?>" name="message" id=""></textarea>

                            </div>

                        </div>

                        <input type="submit" value="<?php echo L(Submit_Form);?>" class="submit-btn">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- up -->

    <i class="fa fa-angle-up scroll-top" aria-hidden="true"></i>

</footer>

</body>

<script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

<script src="__PUBLIC__/www/js/main.js"></script>



</html>
<?php elseif( $Think.LANG_SET==it): ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WJQV28B');</script>
    <!-- End Google Tag Manager -->
    <?php else :?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {

            w[l] = w[l] || []; w[l].push({

                'gtm.start':



                    new Date().getTime(), event: 'gtm.js'

            }); var f = d.getElementsByTagName(s)[0],



                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =



                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);



        })(window, document, 'script', 'dataLayer', 'GTM-TK8ZBX2');</script>
    <!-- End Google Tag Manager -->
    <?php endif;?>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJQV28B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php else :?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK8ZBX2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif;?>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo L(Toggle_navigation);?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>
                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#home"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="general">
                                        <a href="<?php echo ($r["wwwurl"]); ?>"><?php echo ($r["catname"]); ?>
                                            <?php if($r[child] == 1) : ?><i class="fa fa-angle-down" ria-hidden="true"></i><?php endif;?>
                                        </a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                        <div class="share navbar-left">
                            <ul class="clearfix">
                                <li><a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>
                                <li class="language">
                                    <img src="__PUBLIC__/www/images/language.png" alt="">
                                    <div class="language-box">
                                        <a href="/en">English</a>
                                        <a href="/de">Deutsche</a>
                                        <a href="/it">Italiano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- wap-nav -->
        <div class="wap-nav">
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <ul class="menu_ul">
                            <li><a href="#home" title=""><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="active menu_li">
                                        <a href="<?php echo ($r["wwwurl"]); ?>" class="menu_a"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/index.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"></a>
                    </div>
                    <div class="wap-language">
                        <img src="__PUBLIC__/www/images/language.png" alt="">
                        <div class="wap-language-box">
                            <a href="/en">English</a>
                            <a href="/de">Deutsche</a>
                            <a href="/it">Italiano</a>
                        </div>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- video -->

<div>

    <a id="home"></a>

    <div class="video">

        <video id="video" muted="muted" autoplay="autoplay" loop="loop" style="width:100%; height:100%; object-fit: fill" src="__PUBLIC__/www/video/0723.mp4">

        </video>

        <div id="loading">

            <i class="fa fa-spinner fa-pulse"></i>

        </div>

        <div class="percentage">

            <h3><?php echo L(Intelligent_Simple);?></h3>

            <p><?php echo L(Yizumi_devoted_tom);?></p>

        </div>

    </div>

</div>

<div class="index">

    <!-- company -->

    <div>

        <a id="company"></a>

        <div class="about">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 129','sjcont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- technology -->

    <div>

        <a id="technology"></a>

        <div class="technology">

            <div class="content clearfix">

                <?php getcatvar('page','id = 131','sjcont');?>

            </div>

        </div>

    </div>

    <!-- product -->

    <div>

        <a id="general"></a>

        <div class="product">

            <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(General_model);?></h3>

            <div class="title"><?php echo L(SINCE_2002);?></div>

            <div class="content">

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(133)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list product-bg" <?php if($r[id]==141) : ?>style="margin-bottom: 50px;" <?php endif;?>> <div class="">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

            </div>

            <?php endif; endif; endif; endforeach;?>

            <div style="padding-bottom: 40px;">

                <a id="special"></a>

                <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(Special_Models);?> </h3>

                <div class="title"><?php echo L(SINCE_2002);?></div>

            </div>

            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(147)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                <div class="list  product-bg2">

                    <div class="container">

                        <div class="row">

                            <div class="pro clearfix">

                                <a id="<?php echo ($r["catdir"]); ?>"></a>

                                <h6><?php echo ($r["catname"]); ?></h6>

                                <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php else :?>

                <div class="list  product-bg" style="margin-bottom: 50px;">

                    <div class="container">

                        <div class="row">

                            <div class="pro clearfix">

                                <a id="<?php echo ($r["catdir"]); ?>"></a>

                                <h6><?php echo ($r["catname"]); ?></h6>

                                <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endif; endif; endif; endforeach;?>

        </div>

    </div>

</div>

<!-- welcome -->

<div class="welcome">

    <div class="container">

        <div class="row">

            <h2><?php echo L(Welcome_to_YIZUMI);?></h2>

        </div>

    </div>

</div>

<!-- Service -->

<div>

    <a id="service"></a>

    <div class="service">

        <div class="container">

            <div class="row">

                <?php getcatvar('page','id = 158','sjcont');?>

            </div>

        </div>

    </div>

</div>

<!-- map -->

<div class="map">

    <div class="container">

        <div class="row">

            <div class="box-img"><img src="/Public/www/images/map.png" alt=""></div>

        </div>

    </div>

</div>

<!-- contact -->

<div>

    <a id="contact"></a>

</div>

</div>

<!-- footer  -->

<footer>

    <div class="down-box">

        <?php if((time()-$_SESSION['time'])<60*60*24) : ?> 

        <a href="__PUBLIC__/www/images/New-Catalogue.pdf" target="_blank" class="download">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </a>

        <?php else :?>

        <div class="download" data-toggle="modal" data-target="#myModal">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </div>

        <?php endif;?>

        <!-- 弹窗表单 -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                                aria-hidden="true">&times;</span></button>

                        <h4 class="modal-title" id="myModalLabel"><?php echo L(Please_submit);?></h4>

                    </div>

                    <div class="modal-body">

                        <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit3(this);"

                            action="index.php?g=Home&a=message2">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                            <div class="input-box clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="name" placeholder="* <?php echo L(Your_Name);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="email" placeholder="* <?php echo L(Your_Email);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="cou" placeholder="* <?php echo L(Your_Country);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="com" placeholder="* <?php echo L(Your_Company);?>">

                                </div>

                                <div class="down-submit">

                                    <input type="submit" value="Submit">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">

            <div class="content clearfix">

                <div class="left col-lg-6 col-md-6 col-sm-6">

                    <a href="/index.php" class="footer-logo"><img src="/Public/www/images/logo_foot.png" alt=""></a>

                    <div class="copy"><?php echo ($name); ?></div>

                    <ul>

                        <li>

                            <?php echo ($address); ?>

                        </li>

                        <li><?php echo ($phone); ?> </li>

                        <li><a href="<?php echo ($wwwurl); ?>" target="_black"><?php echo ($wwwurl); ?></a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a> &nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo ($emaila); ?>"><?php echo ($emaila); ?></a></li>

                    </ul>

                    <div class="footer-share">

                        <a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">

                            <i class="fa fa-facebook" aria-hidden="true"></i>

                        </a>

                        <a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">

                            <i class="fa fa-youtube" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

                <div class="right col-lg-6 col-md-6 col-sm-6">

                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);" action="index.php?g=Home&amp;a=message">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="name" id="" placeholder="<?php echo L(Your_Name);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Email);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="email" id="" placeholder="<?php echo L(Your_Email);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Company_name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="com" id="" placeholder="<?php echo L(Your_Company);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Message);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <textarea placeholder="<?php echo L(Your_Message);?>" name="message" id=""></textarea>

                            </div>

                        </div>

                        <input type="submit" value="<?php echo L(Submit_Form);?>" class="submit-btn">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- up -->

    <i class="fa fa-angle-up scroll-top" aria-hidden="true"></i>

</footer>

</body>

<script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

<script src="__PUBLIC__/www/js/main.js"></script>



</html>
<?php else :?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WJQV28B');</script>
    <!-- End Google Tag Manager -->
    <?php else :?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {

            w[l] = w[l] || []; w[l].push({

                'gtm.start':



                    new Date().getTime(), event: 'gtm.js'

            }); var f = d.getElementsByTagName(s)[0],



                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =



                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);



        })(window, document, 'script', 'dataLayer', 'GTM-TK8ZBX2');</script>
    <!-- End Google Tag Manager -->
    <?php endif;?>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJQV28B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php else :?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK8ZBX2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif;?>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo L(Toggle_navigation);?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>
                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#home"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="general">
                                        <a href="<?php echo ($r["wwwurl"]); ?>"><?php echo ($r["catname"]); ?>
                                            <?php if($r[child] == 1) : ?><i class="fa fa-angle-down" ria-hidden="true"></i><?php endif;?>
                                        </a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                        <div class="share navbar-left">
                            <ul class="clearfix">
                                <li><a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>
                                <li class="language">
                                    <img src="__PUBLIC__/www/images/language.png" alt="">
                                    <div class="language-box">
                                        <a href="/en">English</a>
                                        <a href="/de">Deutsche</a>
                                        <a href="/it">Italiano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- wap-nav -->
        <div class="wap-nav">
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <ul class="menu_ul">
                            <li><a href="#home" title=""><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="active menu_li">
                                        <a href="<?php echo ($r["wwwurl"]); ?>" class="menu_a"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/index.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"></a>
                    </div>
                    <div class="wap-language">
                        <img src="__PUBLIC__/www/images/language.png" alt="">
                        <div class="wap-language-box">
                            <a href="/en">English</a>
                            <a href="/de">Deutsche</a>
                            <a href="/it">Italiano</a>
                        </div>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- video -->

<div>

    <a id="home"></a>

    <div class="video">

        <video id="video" muted="muted" autoplay="autoplay" loop="loop"

            style="width:100%; height:100%; object-fit: fill" src="__PUBLIC__/www/video/0723.mp4">

        </video>

        <div id="loading">

            <i class="fa fa-spinner fa-pulse"></i>

        </div>

        <div class="percentage">

            <h3><?php echo L(Intelligent_Simple);?></h3>

            <p><?php echo L(Yizumi_devoted_tom);?></p>

        </div>

    </div>

</div>

<div class="index">

    <!-- company -->

    <div>

        <a id="company"></a>

        <div class="about">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 110','sjcont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- technology -->

    <div>

        <a id="technology"></a>

        <div class="technology">

            <div class="content clearfix">

                <?php getcatvar('page','id = 111','sjcont');?>

            </div>

        </div>

    </div>

    <!-- product -->

    <div>

        <a id="general"></a>

        <div class="product">

            <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(General_model);?></h3>

            <div class="title"><?php echo L(SINCE_2002);?></div>

            <div class="content">

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(112)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list product-bg" <?php if($r[id]==116) : ?>style="margin-bottom: 50px;" <?php endif;?>>

                        <div class="">

                            <div class="container">

                                <div class="row">

                                    <div class="pro clearfix">

                                        <a id="<?php echo ($r["catdir"]); ?>"></a>

                                        <h6><?php echo ($r["catname"]); ?></h6>

                                        <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endif; endif; endif; endforeach;?>

                <div style="padding-bottom: 40px;">

                    <a id="special"></a>

                    <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(Special_Models);?> </h3>

                    <div class="title"><?php echo L(SINCE_2002);?></div>

                </div>

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(119)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list  product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list  product-bg" style="margin-bottom: 50px;">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["sjcont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endif; endif; endif; endforeach;?>

            </div>

        </div>

    </div>

    <!-- welcome -->

    <div class="welcome">

        <div class="container">

            <div class="row">

                <h2><?php echo L(Welcome_to_YIZUMI);?></h2>

            </div>

        </div>

    </div>

    <!-- Service -->

    <div>

        <a id="service"></a>

        <div class="service">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 125','sjcont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- map -->

    <div class="map">

        <div class="container">

            <div class="row">

                <div class="box-img"><img src="/Public/www/images/map.png" alt=""></div>

            </div>

        </div>

    </div>

    <!-- contact -->

    <div>

        <a id="contact"></a>

    </div>

</div>

<!-- footer  -->

<footer>

    

    <div class="down-box">

        <?php if((time()-$_SESSION['time'])<60*60*24) : ?> 

        <a href="__PUBLIC__/www/images/New-Catalogue.pdf" target="_blank" class="download">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </a>

        <?php else :?>

        <div class="download" data-toggle="modal" data-target="#myModal">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </div>

        <?php endif;?>

        <!-- 弹窗表单 -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                                aria-hidden="true">&times;</span></button>

                        <h4 class="modal-title" id="myModalLabel"><?php echo L(Please_submit);?></h4>

                    </div>

                    <div class="modal-body">

                        <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit3(this);"

                            action="index.php?g=Home&a=message2">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                            <div class="input-box clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="name" placeholder="* <?php echo L(Your_Name);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="email" placeholder="* <?php echo L(Your_Email);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="cou" placeholder="* <?php echo L(Your_Country);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="com" placeholder="* <?php echo L(Your_Company);?>">

                                </div>

                                <div class="down-submit">

                                    <input type="submit" value="Submit">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="container">

        <div class="row">

            <div class="content clearfix">

                <div class="left col-lg-6 col-md-6 col-sm-6">

                    <a href="/index.php" class="footer-logo"><img src="/Public/www/images/logo_foot.png" alt=""></a>

                    <div class="copy"><?php echo ($name); ?></div>

                    <ul>

                        <li>

                            <?php echo ($address); ?>

                        </li>

                        <li><?php echo ($phone); ?> </li>

                        <li><a href="<?php echo ($wwwurl); ?>" target="_black"><?php echo ($wwwurl); ?></a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a> &nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo ($emaila); ?>"><?php echo ($emaila); ?></a></li>

                    </ul>

                    <div class="footer-share">

                        <a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">

                            <i class="fa fa-facebook" aria-hidden="true"></i>

                        </a>

                        <a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">

                            <i class="fa fa-youtube" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

                <div class="right col-lg-6 col-md-6 col-sm-6">

                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);"

                        action="index.php?g=Home&amp;a=message">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="name" id=""

                                    placeholder="<?php echo L(Your_Name);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Email);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="email" id=""

                                    placeholder="<?php echo L(Your_Email);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Company_name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="com" id=""

                                    placeholder="<?php echo L(Your_Company);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Message);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <textarea placeholder="<?php echo L(Your_Message);?>"

                                    name="message" id=""></textarea>

                            </div>

                        </div>

                        <input type="submit" value="<?php echo L(Submit_Form);?>" class="submit-btn">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- up -->

    <i class="fa fa-angle-up scroll-top" aria-hidden="true"></i>

</footer>

</body>

<script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

<script src="__PUBLIC__/www/js/main.js"></script>



</html>
<?php endif;?>

<?php else :?>
<?php if($Think.LANG_SET==de) : ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-NC725JK');</script>
    <!-- End Google Tag Manager -->
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NC725JK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <nav class="navbar navbar-default de">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo L(Toggle_navigation);?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>
                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#home"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="general">
                                        <a href="<?php echo ($r["wwwurl"]); ?>"><?php echo ($r["catname"]); ?>
                                            <?php if($r[child] == 1) : ?><i class="fa fa-angle-down" ria-hidden="true"></i><?php endif;?>
                                        </a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                        <div class="share navbar-left">
                            <ul class="clearfix">
                                <li><a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>
                                <li class="language">
                                    <img src="__PUBLIC__/www/images/language.png" alt="">
                                    <div class="language-box">
                                        <a href="/en">English</a>
                                        <a href="/de">Deutsche</a>
                                        <a href="/it">Italiano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- wap-nav -->
        <div class="wap-nav">
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <ul class="menu_ul">
                            <li><a href="#home" title=""><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="active menu_li">
                                        <a href="<?php echo ($r["wwwurl"]); ?>" class="menu_a"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/index.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"></a>
                    </div>
                    <div class="wap-language">
                        <img src="__PUBLIC__/www/images/language.png" alt="">
                        <div class="wap-language-box">
                            <a href="/en">English</a>
                            <a href="/de">Deutsche</a>
                            <a href="/it">Italiano</a>
                        </div>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- video -->

<div>

    <a id="home"></a>

    <div class="video">

        <video id="video" muted="muted" autoplay="autoplay" loop="loop" style="width:100%; height:100%; object-fit: fill" src="__PUBLIC__/www/video/0723.mp4">

        </video>

        <div id="loading">

            <i class="fa fa-spinner fa-pulse"></i>

        </div>

        <div class="percentage">

            <h3><?php echo L(Intelligent_Simple);?></h3>

            <p><?php echo L(Yizumi_devoted_tom);?></p>

        </div>

    </div>

</div>

<div class="index">

    <!-- company -->

    <div>

        <a id="company"></a>

        <div class="about">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 164','cont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- technology -->

    <div>

        <a id="technology"></a>

        <div class="technology">

            <div class="content clearfix">

                <?php getcatvar('page','id = 130','cont');?>

            </div>

        </div>

    </div>

    <!-- product -->

    <div>

        <a id="general"></a>

        <div class="product">

            <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(General_model);?></h3>

            <div class="title"><?php echo L(SINCE_2002);?></div>

            <div class="content">

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(132)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list product-bg" <?php if($r[id]==140) : ?>style="margin-bottom: 50px;" <?php endif;?>> <div class="">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

            </div>

            <?php endif; endif; endif; endforeach;?>

            <div style="padding-bottom: 40px;">

                <a id="special"></a>

                <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(Special_Models);?> </h3>

                <div class="title"><?php echo L(SINCE_2002);?></div>

            </div>

            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(146)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                <div class="list  product-bg2">

                    <div class="container">

                        <div class="row">

                            <div class="pro clearfix">

                                <a id="<?php echo ($r["catdir"]); ?>"></a>

                                <h6><?php echo ($r["catname"]); ?></h6>

                                <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php else :?>

                <div class="list  product-bg" style="margin-bottom: 50px;">

                    <div class="container">

                        <div class="row">

                            <div class="pro clearfix">

                                <a id="<?php echo ($r["catdir"]); ?>"></a>

                                <h6><?php echo ($r["catname"]); ?></h6>

                                <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endif; endif; endif; endforeach;?>

        </div>

    </div>

</div>

<!-- welcome -->

<div class="welcome">

    <div class="container">

        <div class="row">

            <h2><?php echo L(Welcome_to_YIZUMI);?></h2>

        </div>

    </div>

</div>

<!-- Service -->

<div>

    <a id="service"></a>

    <div class="service">

        <div class="container">

            <div class="row">

                <?php getcatvar('page','id = 159','cont');?>

            </div>

        </div>

    </div>

</div>

<!-- map -->

<div class="map">

    <div class="container">

        <div class="row">

            <div class="box-img"><img src="/Public/www/images/map.png" alt=""></div>

        </div>

    </div>

</div>

<!-- contact -->

<div>

    <a id="contact"></a>

</div>

</div>

<!-- footer  -->

<footer>

    <div class="down-box">

        <?php if((time()-$_SESSION['time'])<60*60*24) : ?> 

        <a href="__PUBLIC__/www/images/New-Catalogue.pdf" target="_blank" class="download">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </a>

         <?php else :?>

        <div class="download" data-toggle="modal" data-target="#myModal">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

        </div>

        <?php endif;?>

        <!-- 弹窗表单 -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span

                                aria-hidden="true">&times;</span></button>

                        <h4 class="modal-title" id="myModalLabel"><?php echo L(Please_submit);?></h4>

                    </div>

                    <div class="modal-body">

                        <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit3(this);"

                            action="index.php?g=Home&a=message2">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                            <div class="input-box clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="name" placeholder="* <?php echo L(Your_Name);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="email" placeholder="* <?php echo L(Your_Email);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="cou" placeholder="* <?php echo L(Your_Country);?>">

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <input type="text" name="com" placeholder="* <?php echo L(Your_Company);?>">

                                </div>

                                <div class="down-submit">

                                    <input type="submit" value="Submit">

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">

            <div class="content clearfix">

                <div class="left col-lg-6 col-md-6 col-sm-6">

                    <a href="/index.php" class="footer-logo"><img src="/Public/www/images/logo_foot.png" alt=""></a>

                    <div class="copy"><?php echo ($name); ?></div>

                    <ul>

                        <li>

                            <?php echo ($address); ?>

                        </li>

                        <li><?php echo ($phone); ?> </li>

                        <li><a href="<?php echo ($wwwurl); ?>" target="_black"><?php echo ($wwwurl); ?></a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a> &nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo ($emaila); ?>"><?php echo ($emaila); ?></a></li>

                    </ul>

                    <div class="footer-share">

                        <a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">

                            <i class="fa fa-facebook" aria-hidden="true"></i>

                        </a>

                        <a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">

                            <i class="fa fa-youtube" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

                <div class="right col-lg-6 col-md-6 col-sm-6">

                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);" action="index.php?g=Home&amp;a=message">

                            <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="name" id="" placeholder="<?php echo L(Your_Name);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Email);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="email" id="" placeholder="<?php echo L(Your_Email);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Company_name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="com" id="" placeholder="<?php echo L(Your_Company);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Message);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <textarea placeholder="<?php echo L(Your_Message);?>" name="message" id=""></textarea>

                            </div>

                        </div>

                        <input type="submit" value="<?php echo L(Submit_Form);?>" class="submit-btn">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- up -->

    <i class="fa fa-angle-up scroll-top" aria-hidden="true"></i>

</footer>

</body>

<script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

<script src="__PUBLIC__/www/js/main.js"></script>



</html>


<?php elseif( $Think.LANG_SET==it): ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WJQV28B');</script>
    <!-- End Google Tag Manager -->
    <?php else :?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {

            w[l] = w[l] || []; w[l].push({

                'gtm.start':



                    new Date().getTime(), event: 'gtm.js'

            }); var f = d.getElementsByTagName(s)[0],



                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =



                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);



        })(window, document, 'script', 'dataLayer', 'GTM-TK8ZBX2');</script>
    <!-- End Google Tag Manager -->
    <?php endif;?>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJQV28B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php else :?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK8ZBX2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif;?>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo L(Toggle_navigation);?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>
                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#home"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="general">
                                        <a href="<?php echo ($r["wwwurl"]); ?>"><?php echo ($r["catname"]); ?>
                                            <?php if($r[child] == 1) : ?><i class="fa fa-angle-down" ria-hidden="true"></i><?php endif;?>
                                        </a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                        <div class="share navbar-left">
                            <ul class="clearfix">
                                <li><a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>
                                <li class="language">
                                    <img src="__PUBLIC__/www/images/language.png" alt="">
                                    <div class="language-box">
                                        <a href="/en">English</a>
                                        <a href="/de">Deutsche</a>
                                        <a href="/it">Italiano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- wap-nav -->
        <div class="wap-nav">
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <ul class="menu_ul">
                            <li><a href="#home" title=""><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="active menu_li">
                                        <a href="<?php echo ($r["wwwurl"]); ?>" class="menu_a"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/index.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"></a>
                    </div>
                    <div class="wap-language">
                        <img src="__PUBLIC__/www/images/language.png" alt="">
                        <div class="wap-language-box">
                            <a href="/en">English</a>
                            <a href="/de">Deutsche</a>
                            <a href="/it">Italiano</a>
                        </div>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- video -->

<div>

    <a id="home"></a>

    <div class="video">

        <video id="video" muted="muted" autoplay="autoplay" loop="loop"
            style="width:100%; height:100%; object-fit: fill" src="__PUBLIC__/www/video/0723.mp4">

        </video>

        <div id="loading">

            <i class="fa fa-spinner fa-pulse"></i>

        </div>

        <div class="percentage">

            <h3><?php echo L(Intelligent_Simple);?></h3>

            <p><?php echo L(Yizumi_devoted_tom);?></p>

        </div>

    </div>

</div>

<div class="index">

    <!-- company -->

    <div>

        <a id="company"></a>

        <div class="about">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 129','cont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- technology -->

    <div>

        <a id="technology"></a>

        <div class="technology">

            <div class="content clearfix">

                <?php getcatvar('page','id = 131','cont');?>

            </div>

        </div>

    </div>

    <!-- product -->

    <div>

        <a id="general"></a>

        <div class="product">

            <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(General_model);?></h3>

            <div class="title"><?php echo L(SINCE_2002);?></div>

            <div class="content">

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(133)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list product-bg" <?php if($r[id]==141) : ?>style="margin-bottom: 50px;" <?php endif;?>>
                        <div class="">

                            <div class="container">

                                <div class="row">

                                    <div class="pro clearfix">

                                        <a id="<?php echo ($r["catdir"]); ?>"></a>

                                        <h6><?php echo ($r["catname"]); ?></h6>

                                        <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endif; endif; endif; endforeach;?>

                <div style="padding-bottom: 40px;">

                    <a id="special"></a>

                    <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(Special_Models);?> </h3>

                    <div class="title"><?php echo L(SINCE_2002);?></div>

                </div>

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(147)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list  product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list  product-bg" style="margin-bottom: 50px;">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endif; endif; endif; endforeach;?>

            </div>

        </div>

    </div>

    <!-- welcome -->

    <div class="welcome">

        <div class="container">

            <div class="row">

                <h2><?php echo L(Welcome_to_YIZUMI);?></h2>

            </div>

        </div>

    </div>

    <!-- Service -->

    <div>

        <a id="service"></a>

        <div class="service">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 158','cont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- map -->

    <div class="map">

        <div class="container">

            <div class="row">

                <div class="box-img"><img src="/Public/www/images/map.png" alt=""></div>

            </div>

        </div>

    </div>

    <!-- contact -->

    <div>

        <a id="contact"></a>

    </div>

</div>

<!-- footer  -->

<footer>

    <div class="down-box">

        <?php if((time()-$_SESSION['time'])<60*60*24) : ?> <a href="__PUBLIC__/www/images/New-Catalogue.pdf" target="_blank"
            class="download">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

            </a>

            <?php else :?>

            <div class="download" data-toggle="modal" data-target="#myModal">

                <i class="fa fa-cloud-download" aria-hidden="true"></i>

            </div>

            <?php endif;?>

            <!-- 弹窗表单 -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>

                            <h4 class="modal-title" id="myModalLabel"><?php echo L(Please_submit);?></h4>

                        </div>

                        <div class="modal-body">

                            <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit3(this);"
                                action="index.php?g=Home&a=message2">

                                <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                                <div class="input-box clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="name" placeholder="* <?php echo L(Your_Name);?>">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="email" placeholder="* <?php echo L(Your_Email);?>">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="cou" placeholder="* <?php echo L(Your_Country);?>">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="com" placeholder="* <?php echo L(Your_Company);?>">

                                    </div>

                                    <div class="down-submit">

                                        <input type="submit" value="Submit">

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

    </div>

    <div class="container">

        <div class="row">

            <div class="content clearfix">

                <div class="left col-lg-6 col-md-6 col-sm-6">

                    <a href="/index.php" class="footer-logo"><img src="/Public/www/images/logo_foot.png" alt=""></a>

                    <div class="copy"><?php echo ($name); ?></div>

                    <ul>

                        <li>

                            <?php echo ($address); ?>

                        </li>

                        <li><?php echo ($phone); ?> </li>

                        <li><a href="<?php echo ($wwwurl); ?>" target="_black"><?php echo ($wwwurl); ?></a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a> &nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo ($emaila); ?>"><?php echo ($emaila); ?></a></li>

                    </ul>

                    <div class="footer-share">

                        <a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">

                            <i class="fa fa-facebook" aria-hidden="true"></i>

                        </a>

                        <a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">

                            <i class="fa fa-youtube" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

                <div class="right col-lg-6 col-md-6 col-sm-6">

                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);"
                        action="index.php?g=Home&amp;a=message">

                        <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="name" id=""
                                    placeholder="<?php echo L(Your_Name);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Email);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="email" id=""
                                    placeholder="<?php echo L(Your_Email);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Company_name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="com" id=""
                                    placeholder="<?php echo L(Your_Company);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Message);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <textarea placeholder="<?php echo L(Your_Message);?>"
                                    name="message" id=""></textarea>

                            </div>

                        </div>

                        <input type="submit" value="<?php echo L(Submit_Form);?>" class="submit-btn">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- up -->

    <i class="fa fa-angle-up scroll-top" aria-hidden="true"></i>

</footer>

</body>

<script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

<script src="__PUBLIC__/www/js/main.js"></script>



</html>
<?php else :?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WJQV28B');</script>
    <!-- End Google Tag Manager -->
    <?php else :?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {

            w[l] = w[l] || []; w[l].push({

                'gtm.start':



                    new Date().getTime(), event: 'gtm.js'

            }); var f = d.getElementsByTagName(s)[0],



                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =



                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);



        })(window, document, 'script', 'dataLayer', 'GTM-TK8ZBX2');</script>
    <!-- End Google Tag Manager -->
    <?php endif;?>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <?php if($Think.LANG_SET==it) : ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJQV28B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php else :?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK8ZBX2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif;?>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-full">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"><?php echo L(Toggle_navigation);?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>
                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#home"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="general">
                                        <a href="<?php echo ($r["wwwurl"]); ?>"><?php echo ($r["catname"]); ?>
                                            <?php if($r[child] == 1) : ?><i class="fa fa-angle-down" ria-hidden="true"></i><?php endif;?>
                                        </a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                        <div class="share navbar-left">
                            <ul class="clearfix">
                                <li><a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>
                                <li class="language">
                                    <img src="__PUBLIC__/www/images/language.png" alt="">
                                    <div class="language-box">
                                        <a href="/en">English</a>
                                        <a href="/de">Deutsche</a>
                                        <a href="/it">Italiano</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- wap-nav -->
        <div class="wap-nav">
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <ul class="menu_ul">
                            <li><a href="#home" title=""><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[ismenu]!=1): ?><li class="active menu_li">
                                        <a href="<?php echo ($r["wwwurl"]); ?>" class="menu_a"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["wwwurl"]); ?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endif; endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/index.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"></a>
                    </div>
                    <div class="wap-language">
                        <img src="__PUBLIC__/www/images/language.png" alt="">
                        <div class="wap-language-box">
                            <a href="/en">English</a>
                            <a href="/de">Deutsche</a>
                            <a href="/it">Italiano</a>
                        </div>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- video -->

<div>

    <a id="home"></a>

    <div class="video">

        <video id="video" muted="muted" autoplay="autoplay" loop="loop"
            style="width:100%; height:100%; object-fit: fill" src="__PUBLIC__/www/video/0723.mp4">

        </video>

        <div id="loading">

            <i class="fa fa-spinner fa-pulse"></i>

        </div>

        <div class="percentage">

            <h3><?php echo L(Intelligent_Simple);?></h3>

            <p><?php echo L(Yizumi_devoted_tom);?></p>

        </div>

    </div>

</div>

<div class="index">

    <!-- company -->

    <div>

        <a id="company"></a>

        <div class="about">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 110','cont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- technology -->

    <div>

        <a id="technology"></a>

        <div class="technology">

            <div class="content clearfix">

                <?php getcatvar('page','id = 111','cont');?>

            </div>

        </div>

    </div>

    <!-- product -->

    <div>

        <a id="general"></a>

        <div class="product">

            <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(General_model);?></h3>

            <div class="title"><?php echo L(SINCE_2002);?></div>

            <div class="content">

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(112)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list product-bg" <?php if($r[id]==116) : ?>style="margin-bottom: 50px;" <?php endif;?>>

                        <div class="">

                            <div class="container">

                                <div class="row">

                                    <div class="pro clearfix">

                                        <a id="<?php echo ($r["catdir"]); ?>"></a>

                                        <h6><?php echo ($r["catname"]); ?></h6>

                                        <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endif; endif; endif; endforeach;?>

                <div style="padding-bottom: 40px;">

                    <a id="special"></a>

                    <h3> <span><?php echo L(YIZUMI);?></span> <?php echo L(Special_Models);?> </h3>

                    <div class="title"><?php echo L(SINCE_2002);?></div>

                </div>

                <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(119)==$r["parentid"] ) :++$n; if($r[isfooter]!=1) : ?>

                    <div class="list  product-bg2">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php else :?>

                    <div class="list  product-bg" style="margin-bottom: 50px;">

                        <div class="container">

                            <div class="row">

                                <div class="pro clearfix">

                                    <a id="<?php echo ($r["catdir"]); ?>"></a>

                                    <h6><?php echo ($r["catname"]); ?></h6>

                                    <?php  $_result=M("product")->field("*")->where(" 1  and lang=1 AND status=1  AND catid in($r[id])")->order("listorder asc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$rr):++$i;$mod = ($i % 2 ); echo ($rr["cont"]); endforeach; endif;?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php endif; endif; endif; endforeach;?>

            </div>

        </div>

    </div>

    <!-- welcome -->

    <div class="welcome">

        <div class="container">

            <div class="row">

                <h2><?php echo L(Welcome_to_YIZUMI);?></h2>

            </div>

        </div>

    </div>

    <!-- Service -->

    <div>

        <a id="service"></a>

        <div class="service">

            <div class="container">

                <div class="row">

                    <?php getcatvar('page','id = 125','cont');?>

                </div>

            </div>

        </div>

    </div>

    <!-- map -->

    <div class="map">

        <div class="container">

            <div class="row">

                <div class="box-img"><img src="/Public/www/images/map.png" alt=""></div>

            </div>

        </div>

    </div>

    <!-- contact -->

    <div>

        <a id="contact"></a>

    </div>

</div>

<!-- footer  -->

<footer>



    <div class="down-box">

        <?php if((time()-$_SESSION['time'])<60*60*24) : ?> <a href="__PUBLIC__/www/images/New-Catalogue.pdf" target="_blank"
            class="download">

            <i class="fa fa-cloud-download" aria-hidden="true"></i>

            </a>

            <?php else :?>

            <div class="download" data-toggle="modal" data-target="#myModal">

                <i class="fa fa-cloud-download" aria-hidden="true"></i>

            </div>

            <?php endif;?>

            <!-- 弹窗表单 -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>

                            <h4 class="modal-title" id="myModalLabel"><?php echo L(Please_submit);?></h4>

                        </div>

                        <div class="modal-body">

                            <form class="clearfix" name="form" method="post" onsubmit="return beforeSubmit3(this);"
                                action="index.php?g=Home&a=message2">

                                <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                                <div class="input-box clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="name" placeholder="* <?php echo L(Your_Name);?>">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="email" placeholder="* <?php echo L(Your_Email);?>">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="cou" placeholder="* <?php echo L(Your_Country);?>">

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <input type="text" name="com" placeholder="* <?php echo L(Your_Company);?>">

                                    </div>

                                    <div class="down-submit">

                                        <input type="submit" value="Submit">

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

    </div>



    <div class="container">

        <div class="row">

            <div class="content clearfix">

                <div class="left col-lg-6 col-md-6 col-sm-6">

                    <a href="/index.php" class="footer-logo"><img src="/Public/www/images/logo_foot.png" alt=""></a>

                    <div class="copy"><?php echo ($name); ?></div>

                    <ul>

                        <li>

                            <?php echo ($address); ?>

                        </li>

                        <li><?php echo ($phone); ?> </li>

                        <li><a href="<?php echo ($wwwurl); ?>" target="_black"><?php echo ($wwwurl); ?></a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i><a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a> &nbsp;&nbsp;&nbsp;<a href="mailto:<?php echo ($emaila); ?>"><?php echo ($emaila); ?></a></li>

                    </ul>

                    <div class="footer-share">

                        <a class="facebook" href="<?php echo ($facebook); ?>" target="_blank">

                            <i class="fa fa-facebook" aria-hidden="true"></i>

                        </a>

                        <a class="youtube" href="<?php echo ($youtube); ?>" target="_blank">

                            <i class="fa fa-youtube" aria-hidden="true"></i>

                        </a>

                    </div>

                </div>

                <div class="right col-lg-6 col-md-6 col-sm-6">

                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);"
                        action="index.php?g=Home&amp;a=message">

                        <input type="hidden" name="lang" value="<?php echo (LANG_SET); ?>">

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="name" id=""
                                    placeholder="<?php echo L(Your_Name);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5"><?php echo L(Email);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="email" id=""
                                    placeholder="<?php echo L(Your_Email);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Company_name);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <input type="text" name="com" id=""
                                    placeholder="<?php echo L(Your_Company);?>">

                            </div>

                        </div>

                        <div class="box clearfix">

                            <div class="txt col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                <?php echo L(Message);?> <span>*</span> </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"> <textarea placeholder="<?php echo L(Your_Message);?>"
                                    name="message" id=""></textarea>

                            </div>

                        </div>

                        <input type="submit" value="<?php echo L(Submit_Form);?>" class="submit-btn">

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- up -->

    <i class="fa fa-angle-up scroll-top" aria-hidden="true"></i>

</footer>

</body>

<script src="__PUBLIC__/www/js/bootstrap.min.js"></script>

<script src="__PUBLIC__/www/js/main.js"></script>



</html>
<?php endif;?>

<?php endif;?>