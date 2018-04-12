<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Aug 2017 21:33:48 GMT -->
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> <?php echo $pageTitle;?> | <?php $systemConfiguration->website_title;?> </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php $this->load->view($this->config->item("techspake_common_dir")."header_css_js");?>

</head>


    <body>
    <div id="sb-site">
	<?php $this->load->view($this->config->item("techspake_sidebar_dir")."topbar_widgets");?>
    <div id="page-wrapper">
        <?php $this->load->view($this->config->item("techspake_sidebar_dir")."topbar");?>
       <?php $this->load->view($this->config->item("techspake_sidebar_dir")."leftbar");?>
        <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
						<?php $this->load->view($this->config->item("techspake_pages_dir").$pageName);?>
					</div>

                

            </div>
        </div>
    </div>


  <?php $this->load->view($this->config->item("techspake_common_dir")."footer_css_js");?>
</div>
</body>

</html>