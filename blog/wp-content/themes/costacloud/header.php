<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>CostaCloud | Blog</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo home_url();?>/../favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/css/pages/blog.css">
    
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/css/themes/default.css" id="style_color">
    
    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo home_url();?>/../assets/css/custom.css">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
</head>	

<body>


<div class="wrapper">    
    <!--=== Header ===-->    
    <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                    <li>
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="lenguages">
                            <li class="active">
                                <a href="#">English <i class="fa fa-check"></i></a></li>
                          </ul>
                    </li>
                    <li class="topbar-devider"></li>   
                    <li><a href="<?php echo home_url();?>/index.php">Blog</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="<?php echo home_url();?>/../page_contact.php">Contact Us</a></li>   
                  </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
        
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="fa fa-bars"></span> </button>
            <a class="navbar-brand" href="<?php echo home_url();?>/../index.html"> <img id="logo-header" src="<?php echo home_url();?>/../assets/img/logo1-default.png" alt="Logo"> </a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
              <ul class="nav navbar-nav">
                <!-- Cloud Computing -->
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Cloud </a>
                    <ul class="dropdown-menu">
                      <!-- SaaS -->
                      <li> <a href="<?php echo home_url();?>/../cloud-software-as-a-service.html"><i class="fa fa-bars"></i>Software as a Service (SaaS)</a> </li>
                      <!-- End SaaS -->
                      <!-- DaaS -->
                      <li> <a href="<?php echo home_url();?>/../cloud-desktop-virtualization.html"><i class="fa fa-bars"></i>Desktop as a Service (DaaS)</a> </li>
                      <!-- End DaaS -->
                      <!-- ITaaS -->
                      <li> <a href="<?php echo home_url();?>/../cloud-it-as-a-service.html"><i class="fa fa-bars"></i>IT As a Service (ITaaS)</a> </li>
                      <!-- End ITaaS -->
                      <!-- SDDC -->
                      <li> <a href="<?php echo home_url();?>/../cloud-software-defined-data-center.html"><i class="fa fa-bars"></i>Software Defined Data Center</a> </li>
                      <!-- End ITaaS -->
                      <!-- Software Defined Storage -->
                      <li> <a href="<?php echo home_url();?>/../virtualization-storage.html"><i class="fa fa-bars"></i>Software Defined Storage</a> </li>
                      <!-- End Software Defined Storage -->
                      <!-- Softwre Defined Network -->
                      <li> <a href="<?php echo home_url();?>/../cloud-sdn.html"><i class="fa fa-bars"></i>Software Defined Network</a> </li>
                      <!-- End Softwre Defined Network -->
                    </ul>
                </li>
                <!-- End Cloud Computing -->
                <!-- Content Management -->
                <li class="dropdown"> <a href="<?php echo home_url();?>/../document-management-system.html" class="dropdown-toggle" data-toggle="dropdown"> Content Management </a>
                    <ul class="dropdown-menu">
                      <!-- Documentum -->
                      <li> <a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-bars"></i>Documentum</a> </li>
                      <!-- End Documentum -->
                      <!-- Sharepoint -->
                      <li> <a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-bars"></i>Sharepoint</a> </li>
                      <!-- End Sharepoint -->
                      <!-- Business Solutions -->
                      <li class="dropdown-submenu"> <a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-bars"></i>Business Solutions</a>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-flask"></i>Customer Onboarding</a></li>
                            <li><a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-html5"></i>Procurement Automation</a></li>
                            <li><a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-bolt"></i>Health Records</a></li>
                            <li><a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-html5"></i>Automation Engineering Process</a></li>
                            <li><a href="<?php echo home_url();?>/../document-management-system.html"><i class="fa fa-bolt"></i>Government Process Automation</a></li>
                          </ul>
                      </li>
                      <!-- End Business Solutions -->
                    </ul>
                </li>
                <!-- End Content Management -->
                <!-- Big Data -->
                <li class="dropdown"> <a href="<?php echo home_url();?>/../big-data-analaytics.html" class="dropdown-toggle" data-toggle="dropdown"> Business Analytics </a>
                    <ul class="dropdown-menu">
                      <!-- Typography -->
                      <li> <a href="<?php echo home_url();?>/../big-data-analaytics.html"><i class="fa fa-bars"></i>Internet of Things</a> </li>
                      <!-- End Typography -->
                      <!-- Dynamic Dashboards -->
                      <li> <a href="<?php echo home_url();?>/../big-data-analaytics.html"><i class="fa fa-bars"></i>Dynamic Dashboards</a> </li>
                      <!-- End Dynamic Dashboards -->
                      <!-- Advanced Automation Industry Solution -->
                      <li> <a href="<?php echo home_url();?>/../big-data-analaytics.html"><i class="fa fa-bars"></i>Advanced Automation Industry Solution</a> </li>
                      <!-- End Advanced Automation Industry Solution -->
                      <!-- Enterprise Reporting -->
                      <li> <a href="<?php echo home_url();?>/../big-data-analaytics.html"><i class="fa fa-bars"></i>Enterprise Reporting</a> </li>
                      <!-- End Enterprise Reporting -->
                      <!-- Big Data -->
                      <li class="dropdown-submenu"> <a href="<?php echo home_url();?>/../big-data-analaytics.html"><i class="fa fa-bars"></i>Big Data</a> </li>
                      <!-- End Big Data -->
                    </ul>
                </li>
                <!-- End Big Data -->
                
                <!-- Virtualization -->
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Virtualization </a>
                    <ul class="dropdown-menu">
                      <!-- VMWare -->
                      <li> <a href="<?php echo home_url();?>/../virtualization-server.html"><i class="fa fa-bars"></i>Server Virtualization</a> </li>
                      <!-- End VMWare -->
                      <!-- Citrix -->
                      <li> <a href="<?php echo home_url();?>/../virtualization-network.html"><i class="fa fa-bars"></i>Network Virtualization</a> </li>
                      <!-- End Citrix -->
                      <!-- HyperV -->
                      <li> <a href="<?php echo home_url();?>/../virtualization-storage.html"><i class="fa fa-bars"></i>Storage Virtualization</a> </li>
                      <!-- End HyperV -->
                      <!-- KVM -->
                      <li> <a href="<?php echo home_url();?>/../virtualization-security.html"><i class="fa fa-bars"></i>Security Virtualization</a> </li>
                      <!-- End KVM -->
                       <!-- Application Virtualization -->
                      <li> <a href="<?php echo home_url();?>/../virtualization-app.html"><i class="fa fa-bars"></i>Application Virtualization</a> </li>
                      <!-- End Application Virtualization -->
                    </ul>
                </li>
                <!-- End  Virtulization-->
                <!-- IT Services -->
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> IT Services </a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo home_url();?>/../it-app-ha.html"><i class="fa fa-bars"></i>Business Continuity</a></li>
					  <li><a href="<?php echo home_url();?>/../it-high-avaialbility.html"><i class="fa fa-bars"></i>High Avialability</a></li>
                       <li><a href="<?php echo home_url();?>/../it-app-ha.html"><i class="fa fa-bars"></i>Application High Avialability</a></li>
                      <li><a href="<?php echo home_url();?>/../it-disaster-recovery.html"><i class="fa fa-bars"></i>Disaster Recovery</a></li>
                      <li><a href="<?php echo home_url();?>/../it-replication.html"><i class="fa fa-bars"></i>Anti Virus Protection</a></li>
                      <li><a href="<?php echo home_url();?>/../it-replication.html"><i class="fa fa-bars"></i>IT Management Tools</a></li>
                      <li><a href="<?php echo home_url();?>/../it-replication.html"><i class="fa fa-bars"></i>Remote Network Configuration</a></li>
                      <li><a href="<?php echo home_url();?>/../it-replication.html"><i class="fa fa-bars"></i>Virtual Private Network (VPN)</a></li>
                      <li><a href="<?php echo home_url();?>/../it-replication.html"><i class="fa fa-bars"></i>Microfoft Exchange</a></li>
                    </ul>
                </li>
                <!-- Ens IT Services -->
                <!-- Search Block -->
                <li> <i class="search fa fa-search search-btn"></i>
                     <form name="actSearch" action="<?php echo home_url();?>/../page_search.html" method="get">
                      <div class="search-open">
                        <input value="017859472478302369851:3rjzeekw1xc" name="cx" type="hidden"/>
                        <input value="FORID:11" name="cof" type="hidden"/>
                        <div class="input-group animated fadeInDown">
                          <input type="text" class="form-control" name="s"/>
                          <span class="input-group-btn">
                          <button class="btn-u" type="button" id="search-b" onClick="javascript: submitform();">Go</button>
                        </span> </div>
                      </div>
                    </form>
                    <!-- Include the validator script-->
                    <!--script src="http://www.javascript-coder.com/files/form-submit/gen_validatorv4.js" type="text/javascript"></script>
                    <script type="text/javascript">var myformValidator = new Validator("actSearch");myformValidator.addValidation("s","req", "Please enter the value for query");</script-->
                    <script type="text/javascript">function submitform() { if(document.actSearch.onsubmit()) { document.actSearch.submit(); } } </script>
                </li>
                <!-- End Search Block -->
              </ul>
            </div>
            <!--/navbar-collapse-->
          </div>
        </div>
        <!-- End Navbar -->
       </div>
<!--=== End Header ===-->
