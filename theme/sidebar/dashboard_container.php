<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Aug 2017 21:34:06 GMT -->
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Login page 4 </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('techspake_site_base_url');?>/assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>





</head>
<body>

    <div id="sb-site">
    <div class="sb-slidebar bg-black sb-left sb-style-overlay">
    <div class="scrollable-content scrollable-slim-sidebar">
        <div class="pad10A">
            <div class="divider-header">Online</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial1.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Grace Padilla
                    </b>
                    <p>On the other hand, we denounce...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial2.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Carl Gamble
                    </b>
                    <p>Dislike men who are so beguiled...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial3.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Michael Poole
                    </b>
                    <p>Of pleasure of the moment, so...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial4.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Bill Green
                    </b>
                    <p>That they cannot foresee the...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial5.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Cheryl Soucy
                    </b>
                    <p>Pain and trouble that are bound...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Idle</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial6.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Jose Kramer
                    </b>
                    <p>Equal blame belongs to those...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial7.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Dan Garcia
                    </b>
                    <p>Weakness of will, which is same...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial8.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Edward Bridges
                    </b>
                    <p>These cases are perfectly simple...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Offline</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial1.jpg" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Randy Herod
                    </b>
                    <p>In a free hour, when our power...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/image-resources/people/testimonial2.jpg" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Patricia Bagley
                    </b>
                    <p>when nothing prevents our being...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sb-slidebar bg-black sb-right sb-style-overlay">
<div class="scrollable-content scrollable-slim-sidebar">
<div class="pad15A">
<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
    Cloud status
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-1" class="collapse in">
    <div class="pad15A container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
            </div>
        </div>
        <div class="divider mrg15T mrg15B"></div>
        <div class="text-center">
            <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                <i class="glyph-icon icon-refresh"></i>
                Update charts
            </a>
        </div>
    </div>
</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
    Latest transfers
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-6" class="collapse in">

    <ul class="files-box">
        <li>
            <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
            <div class="files-content">
                <b>blog_export.zip</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>22.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon icon-file-code-o"></i>
            <div class="files-content">
                <b>homepage-test.html</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added  <b>19.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
            <div class="files-content">
                <b>monthlyReport.jpg</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>10.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
            <div class="files-content">
                <b>new_presentation.doc</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>5.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
    Tasks for today
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-3" class="collapse in">

    <ul class="progress-box">
        <li>
            <div class="progress-title">
                New features development
                <b>87%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="87">
                <div class="progressbar-value bg-azure">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <b class="pull-right">66%</b>
            <div class="progress-title">
                Finishing uploading files
                
            </div>
            <div class="progressbar-smaller progressbar" data-value="66">
                <div class="progressbar-value bg-red">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Creating tutorials
                <b>58%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="58">
                <div class="progressbar-value bg-blue-alt"></div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Frontend bonus theme
                <b>74%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="74">
                <div class="progressbar-value bg-purple"></div>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
    Pending notifications
    <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-4" class="collapse in">
    <ul class="notifications-box notifications-box-alt">
        <li>
            <span class="bg-purple icon-notification glyph-icon icon-users"></span>
            <span class="notification-text">This is an error notification</span>
            <div class="notification-time">
                a few seconds ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
            <span class="notification-text">This is a warning notification</span>
            <div class="notification-time">
                <b>15</b> minutes ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-green icon-notification glyph-icon icon-random"></span>
            <span class="notification-text font-green">A success message example.</span>
            <div class="notification-time">
                <b>2 hours</b> ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
</div>
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
       
       <?php $this->load->view($this->config->item("techspake_sidebar_dir")."topbar");?>
       <?php $this->load->view($this->config->item("techspake_sidebar_dir")."leftbar");?>
        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Sparklines charts -->

<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/sparklines/sparklines-demo.js"></script>

<!-- Flot charts -->

<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/flot/flot.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/flot/flot-resize.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/flot/flot-stack.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/flot/flot-pie.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/flot/flot-tooltip.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/flot/flot-demo-1.js"></script>

<!-- PieGage charts -->

<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/charts/piegage/piegage-demo.js"></script>
       <?php $this->load->view($this->config->item("techspake_sidebar_dir")."themeswitcher");?>
<div class="row">
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    $34,657
                    <span>Total Earnings<b> in last</b> ten <b>quarters</b></span>
                </div>
                <div class="bs-label bg-green">+18%</div>
                <div class="center-div sparkline-big-alt">1245,1450,1312,1121,986,1489</div>
                <div class="row list-grade">
                    <div class="col-md-2">January</div>
                    <div class="col-md-2">February</div>
                    <div class="col-md-2">March</div>
                    <div class="col-md-2">April</div>
                    <div class="col-md-2">May</div>
                    <div class="col-md-2">June</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        Financial statistics
                    </a>
                </div>
                <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    169
                    <span>Total Subscriptions<b> in last</b> 6 days</span>
                </div>
                <div class="bs-label bg-red">-14%</div>
                <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                <div class="row list-grade">
                    <div class="col-md-2">M</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">W</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">F</div>
                    <div class="col-md-2">S</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View all members
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    8960
                    <span>Total Downloads<b> in last</b> 6 years</span>
                </div>
                <div class="bs-label bg-orange">~51%</div>
                <div class="center-div sparkline-big-alt">2210,2310,2010,2310,2123,2350</div>
                <div class="row list-grade">
                    <div class="col-md-2">2009</div>
                    <div class="col-md-2">2010</div>
                    <div class="col-md-2">2011</div>
                    <div class="col-md-2">2012</div>
                    <div class="col-md-2">2013</div>
                    <div class="col-md-2">2014</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View more details
                    </a>
                </div>
                <a href="#" class="btn btn-primary float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-caret-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Recent sales activity
                </h3>
                <div class="example-box-wrapper">
                    <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">
                    <div class="tile-header">
                        Photo Gallery
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="43"><span>43</span>%</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-info">
                    <div class="tile-header">
                        Subscriptions
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="76"><span>76</span>%</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning">
                    <div class="tile-header">
                        New Visitors
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="11"><span>11</span>%</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="content-box mrg20T">
            <h3 class="content-box-header bg-primary">
                Toggle button closed
                <span class="header-buttons-separator">
                    <a href="#" class="icon-separator toggle-button">
                        <i class="glyph-icon icon-chevron-down"></i>
                    </a>
                </span>
            </h3>
            <div class="content-box-wrapper hide">
                This content boxes has the header with <code>.bg-default</code>.
            </div>
        </div>

        <div class="content-box">
            <h3 class="content-box-header bg-default">
                <i class="glyph-icon icon-cog"></i>
                Live server status
                <span class="header-buttons-separator">
                    <a href="#" class="icon-separator">
                        <i class="glyph-icon icon-question"></i>
                    </a>
                    <a href="#" class="icon-separator refresh-button" data-style="dark" data-theme="bg-white" data-opacity="40">
                        <i class="glyph-icon icon-refresh"></i>
                    </a>
                    <a href="#" class="icon-separator remove-button" data-animation="flipOutX">
                        <i class="glyph-icon icon-times"></i>
                    </a>
                </span>
            </h3>
            <div class="content-box-wrapper">
                <div id="data-example-3" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="row mrg20B">
            <div class="col-md-6">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                    <span class="bs-badge badge-absolute">5</span>
                    <div class="tile-header">
                        Dashboard
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-black">
                    <span class="bs-badge badge-absolute">5</span>
                    <div class="tile-header">
                        Orders
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-cogs"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Users activity
                </h3>
                <div class="example-box-wrapper">
                    <div class="timeline-box timeline-box-left">
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-red">
                                    <i class="glyph-icon icon-toggle-on"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-info">Appointment</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-primary">
                                    <i class="glyph-icon icon-wifi"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label bg-yellow">Teleconference</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-black">
                                    <i class="glyph-icon icon-headphones"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-danger">Meeting</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box bg-white post-box">
            <textarea name="" class="textarea-autosize" placecholder="What are you doing right now?"></textarea>
            <div class="button-pane">
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-volume-down"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-video-camera"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-microphone"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-picture-o"></i>
                </a>

                <a href="#" class="btn btn-md btn-post float-right btn-success" title="">
                    Post
                </a>

            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <ul class="todo-box">
                    <li class="border-red">
                        <input type="checkbox" name="todo-1" id="todo-1">
                        <label for="todo-1">This is an example task that i need to finish</label>
                        <span class="bs-label bg-red" title="">Overdue</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-orange">
                        <input type="checkbox" name="todo-2" id="todo-2">
                        <label for="todo-2">Update server to a newer version</label>
                        <span class="bs-label bg-green" title="">2 Weeks</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-blue">
                        <input type="checkbox" name="todo-3" id="todo-3">
                        <label for="todo-3">Add more awesome template features</label>
                        <span class="bs-label bg-blue" title="">Tomorrow</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-purple">
                        <input type="checkbox" name="todo-4" id="todo-4">
                        <label for="todo-4">Never forget to buy milk</label>
                        <span class="bs-label bg-black" title="">Today</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
                    </div>

                

            </div>
        </div>
    </div>


 <?php $this->load->view($this->config->item("techspake_common_dir")."footer_css_js");?>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Aug 2017 21:34:06 GMT -->
</html>