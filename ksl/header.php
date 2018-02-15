<!doctype html>
<html lang="en-US" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href=" ">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/slider.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <script>(function(html){html.className = html.className.replace(/\bno-js\b/, 'js')})(document.documentElement);</script>
        <title>KSL &#8211; Just another WordPress site</title>
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel="alternate" type="application/rss+xml" title="KSL &raquo; Feed" href="http://sajedaiub.com/Development/ksl/demo/feed/" />
        <link rel="alternate" type="application/rss+xml" title="KSL &raquo; Comments Feed" href="http://sajedaiub.com/Development/ksl/demo/comments/feed/" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/", "ext":".png", "svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/", "svgExt":".svg", "source":{"concatemoji":"http:\/\/sajedaiub.com\/Development\/ksl\/demo\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.3"}};
            !function(a, b, c){function d(a){var b, c, d, e, f = String.fromCharCode; if (!k || !k.fillText)return!1; switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a){case"flag":return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b !== c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c); case"emoji4":return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e}return!1}function e(a){var c = b.createElement("script"); c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)}var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d"); for (i = Array("flag", "emoji4"), c.supports = {everything:!0, everythingExceptFlag:!0}, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.everything || (g = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)):(a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function(){"complete" === b.readyState && c.readyCallback()})), f = c.source || {}, f.concatemoji?e(f.concatemoji):f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <style type="text/css" media="print">#wpadminbar { display:none; }</style>
        <style type="text/css" media="screen">
            html { margin-top: 32px !important; }
            * html body { margin-top: 32px !important; }
            @media screen and ( max-width: 782px ) {
                html { margin-top: 46px !important; }
                * html body { margin-top: 46px !important; }
            }
        </style>
        <?php wp_head(); ?>
    </head>
    <body>
        <main role="main">
            <div class="header">
                <div class="header_top">
                    <div class="container social_icons text-right">
                        <span class="s_icons"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <span class="s_icons"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span class="s_icons"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span class="s_icons"><i class="fa fa-skype" aria-hidden="true"></i></span>
                        <span class="s_icons"><i class="fa fa-phone-square" aria-hidden="true"></i></span>

                    </div>
                </div>
                <div class="menus">
                    <div class="navigation container">
                        <nav class="navbar navbar-expand-md ">
                            <a class="navbar-brand" href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" style="">
                                <span>Kleider Sourcing Ltd.</span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <?php if (has_nav_menu('top-menu')): ?>

                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'top-menu',
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav',
                                        'walker' => new wp_bootstrap_navwalker()
                                    ));
                                    ?>
                                    <!-- .main-navigation -->

                                <?php else: ?>

                                    <ul class="nav navbar-nav">
                                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                                        <li class="nav-item" ><a class="nav-link" href="#about">Our Product</a></li>
                                        <li class="nav-item" ><a class="nav-link" href="#about">About</a></li>
                                        <li class="nav-item" ><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>

                                <?php endif; ?>
                                <!-- -->

                        </nav>
                    </div>
                </div>
            </div>