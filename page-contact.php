<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('12345679'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<title>CostaCloud | Contact Us</title>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
<!-- CSS Page Style -->
<link rel="stylesheet" href="assets/css/pages/page_contact.css">
<!-- CSS Theme -->
<link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
<link rel="stylesheet" href="assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
<!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/plugins/sky-forms/version-2.0.1/css/sky-forms-ie8.css">
    <![endif]-->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- CSS Customization -->
<link rel="stylesheet" href="assets/css/custom.css">
<!-- CSS Theme -->
<link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
<!-- CSS Customization -->
<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
<div class="wrapper">
  <!--=== Header ===--><!-- #BeginLibraryItem "/CostaCloud/header.lbi" -->
    
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
                    <li><a href="blog/index.php">Blog</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="page-contact.php">Contact Us</a></li>   
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
            <a class="navbar-brand" href="index.html"> <img id="logo-header" src="assets/img/logo1-default.png" alt="Logo"> </a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
              <ul class="nav navbar-nav">
                <!-- Cloud Computing -->
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Cloud </a>
                    <ul class="dropdown-menu">
                      <!-- SaaS -->
                      <li> <a href="cloud-software-as-a-service.html"><i class="fa fa-bars"></i>Software as a Service (SaaS)</a> </li>
                      <!-- End SaaS -->
                      <!-- DaaS -->
                      <li class="dropdown-submenu"> <a href="cloud-desktop-virtualization.html"><i class="fa fa-bars"></i>Desktop as a Service (DaaS)</a> 
                    	  <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dvm_horizon6&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMware Horizon 6 (with View)</a> </li>
                                 <li> <a href="virtualization-vmware.php?svpage=products_dvm_mirage&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare Mirage</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dvm_horizon-daas&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare Horizon Air Desktops and Horizon Air Apps</a> </li>
                                 <li> <a href="virtualization-vmware.php?svpage=products_dvm_horizon-flex&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare Horizon FLEX</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dvm_workspace&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare Workspace</a> </li>
							</ul>
                      </li>
                      <!-- End DaaS -->
                      <!-- ITaaS -->
                      <li> <a href="cloud-it-as-a-service.html"><i class="fa fa-bars"></i>IT As a Service (ITaaS)</a> </li>
                      <!-- End ITaaS -->
                      <!-- SDDC -->
                      <li class="dropdown-submenu"> <a href="cloud-software-defined-data-center.html"><i class="fa fa-bars"></i>Software Defined Data Center</a> 
                      	    <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vCloud Suite</a> </li>
                                 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Suite</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Operations Insight</a> </li>
                                 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Operations</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Log Insight</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Automation</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Orchestrator</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Business</a> </li>
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vcloud&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vRealize Code Stream</a> </li>
							</ul>
                      </li>
                      <!-- End ITaaS -->
                      <!-- Software Defined Storage -->
                      <li> <a href="virtualization-storage.html"><i class="fa fa-bars"></i>Software Defined Storage</a> 
                       <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=virtual_san&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vSAN</a> </li>
							</ul>
                      </li>
                      <!-- End Software Defined Storage -->
                      <!-- Softwre Defined Network -->
                      <li class="dropdown-submenu"> <a href="cloud-sdn.html"><i class="fa fa-bars"></i>Software Defined Network</a> 
                      		<ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_nsx&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMware NSX</a> </li>
                             </ul>
                      </li>
                      <!-- End Softwre Defined Network -->
                       <!-- VMWare -->
                       <li class="dropdown-submenu"> <a href="virtualization-server.html"><i class="fa fa-bars"></i>Server Virtualization</a> 
                     		 <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vsphere&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vSphere</a> </li>
							</ul>
                      </li>
                      <!-- End VMWare -->
                      <!-- Citrix -->
                      <li class="dropdown-submenu"> <a href="virtualization-network.html"><i class="fa fa-bars"></i>Network Virtualization</a> 
                 	 <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vsphere&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vSphere</a> </li>
							</ul>
                      
                      </li>
                      <!-- End Citrix -->
                      <!-- HyperV -->
                      <li> <a href="virtualization-storage.html"><i class="fa fa-bars"></i>Storage Virtualization</a> </li>
                      <!-- End HyperV -->
                      <!-- KVM -->
                      <li> <a href="virtualization-security.html"><i class="fa fa-bars"></i>Security Virtualization</a> </li>
                      <!-- End KVM -->
                       <!-- Application Virtualization -->
                      <li> <a href="virtualization-app.html"><i class="fa fa-bars"></i>Application Virtualization</a> </li>
                      <!-- End Application Virtualization -->
                    </ul>
                </li>
                <!-- End Cloud Computing -->
               
                <!-- Business Process Management -->
                <li class="dropdown"> <a href="document-management-system.html" class="dropdown-toggle" data-toggle="dropdown"> BPM </a>
                    <ul class="dropdown-menu">
                      <!-- Documentum -->
                      <li> <a href="document-management-system.html"><i class="fa fa-bars"></i>IBM BPM</a> </li>
					  <li> <a href="mobile-documentum.html"><i class="fa fa-bars"></i>OpenText BPM</a> </li>
					  <li> <a href="life-s-cience-document-management.html"><i class="fa fa-bars"></i>OpenText Process Suite</a> </li>
					  <li> <a href="life-s-cience-document-management.html"><i class="fa fa-bars"></i>Documentum xCP</a> </li>
					  <li> <a href="life-s-cience-document-management.html"><i class="fa fa-bars"></i>Documentum D2</a> </li>
					  <li> <a href="life-s-cience-document-management.html"><i class="fa fa-bars"></i>Document Management</a> </li>
					  <li> <a href="life-s-cience-document-management.html"><i class="fa fa-bars"></i>Life Science Document Management</a> </li>
					 </ul>
                </li>
                 <!-- Business Process Management -->
                
                <!-- Artificial Intelligence -->
                <li class="dropdown"> <a href="document-management-system.html" class="dropdown-toggle" data-toggle="dropdown">Artificial Intelligence</a>
                    <ul class="dropdown-menu">
                      <li> <a href="document-management-system.html"><i class="fa fa-bars"></i>IBM Watson</a> </li>
					  <li> <a href="mobile-documentum.html"><i class="fa fa-bars"></i>Amazon Lex</a> </li>
					  <li> <a href="life-s-cience-document-management.html"><i class="fa fa-bars"></i>Microsoft LUIS</a> </li>
					  <li> <a href="alfreco-service.html"><i class="fa fa-bars"></i>RASA AI</a> </li>
                     </ul>
                </li>
                <!-- End Artificial Intelligence -->
                <!-- Robotic Process Automation -->
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Robotics</a>
                    <ul class="dropdown-menu">
                      <!-- IBM AA -->
                       <li class="dropdown-submenu"> <a href="virtualization-server.html"><i class="fa fa-bars"></i>IBM RPA</a> 
                     		 <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vsphere&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vSphere</a> </li>
							</ul>
                      </li>
                     
                      <li class="dropdown-submenu"> <a href="virtualization-network.html"><i class="fa fa-bars"></i>UiPath</a> 
                 	 <ul class="dropdown-menu">
								 <li> <a href="virtualization-vmware.php?svpage=products_dcci_vsphere&sid=336d63663c8aa6e73b3b3e04b5f8fea4">VMWare vSphere</a> </li>
							</ul>
                      
                      </li>
                      <li> <a href="virtualization-storage.html"><i class="fa fa-bars"></i>Automation Anywhere</a> </li>
					  <!-- Case study ROBOTICS-->
					  <li class="dropdown-submenu"> <a href="virtualization-network.html"><i class="fa fa-bars"></i>Case Study</a> 
					  <ul class="dropdown-menu">
						<li> <a href="robotic-process-automation-balance-sheet.html"><i class="fa fa-bolt"></i>Balance Sheet</a> </li>
						<li> <a href="robotic-process-automation-banking-loan-origination.html"><i class="fa fa-archive"></i>Banking Loan Origination</a> </li>
						<li> <a href="robotic-process-automation-business-expense.html"><i class="fa fa-flask"></i>Business Expense</a> </li>
						<li> <a href="robotic-process-automation-claim-processing.html"><i class="fa fa-file"></i>Claim Processing</a> </li>
						<li> <a href="robotic-process-automation-employee-onbaording.html"><i class="fa fa-flask"></i>Employee Onboarding</a> </li>
						<li> <a href="robotic-process-automation-invoice-processing.html"><i class="fa fa-file"></i>Invoice Processing</a> </li>
						<li> <a href="robotic-process-automation-loan-origination.html"><i class="fa fa-file"></i>Loan Origination</a> </li>
						<li> <a href="robotic-process-automation-procure-to-pay.html"><i class="fa fa-magic"></i>Procure to Pay</a> </li>
						<li> <a href="robotic-process-automation-purchase-order-processing.html"><i class="fa fa-file"></i>Purchase Order Processing</a> </li>
						<li> <a href="robotic-process-automation-rpa.html"><i class="fa fa-magic"></i>RPA</a> </li>
						<li> <a href="robotic-process-automation-vendor-registration.html"><i class="fa fa-flask"></i>Vendor Registration</a> </li>
						<li> <a href="rpa-services-1.html"><i class="fa fa-magic"></i>RPA Services</a> </li>
					  </ul>
                      
                      </li>
					  <!-- ENDS HERE CASE STUDY-->
                    </ul>
                </li>
                <!-- End  Robotic Process Automation-->

                <!-- Business Analytics -->
                <li class="dropdown"> <a href="big-data-analaytics.html" class="dropdown-toggle" data-toggle="dropdown"> Business Analytics </a>
                    <ul class="dropdown-menu">
                      <!-- Typography -->
                      <li> <a href="big-data-analaytics.html"><i class="fa fa-bars"></i>Internet of Things</a> </li>
                      <!-- End Typography -->
                      <!-- Dynamic Dashboards -->
                      <li> <a href="big-data-analaytics.html"><i class="fa fa-bars"></i>Dynamic Dashboards</a> </li>
                      <!-- End Dynamic Dashboards -->
                      <!-- Advanced Automation Industry Solution -->
                      <li> <a href="big-data-analaytics.html"><i class="fa fa-bars"></i>Advanced Automation Industry Solution</a> </li>
                      <!-- End Advanced Automation Industry Solution -->
                      <!-- Enterprise Reporting -->
                      <li> <a href="big-data-analaytics.html"><i class="fa fa-bars"></i>Enterprise Reporting</a> </li>
                      <!-- End Enterprise Reporting -->
                      <!-- Big Data -->
                      <li class="dropdown-submenu"> <a href="big-data-analaytics.html"><i class="fa fa-bars"></i>Big Data</a> </li>
                      <!-- End Big Data -->
                    </ul>
                </li>
                <!-- End Business Analytics -->
                <!-- Search Block -->
                <li> <i class="search fa fa-search search-btn"></i>
                     <form name="actSearch" action="page_search.html" method="get">
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







<!-- #EndLibraryItem --><!--=== End Header ===-->
  <!--=== Breadcrumbs ===-->
  <div class="breadcrumbs">
    <div class="container">
      <h1 class="pull-left">Our Contacts</h1>
      <ul class="pull-right breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Contacts</li>
      </ul>
    </div>
  </div>
  <!--/breadcrumbs-->
  <!--=== End Breadcrumbs ===-->
  <!-- Google Map -->
  <div id="map" class="map"> </div>
  <!---/map-->
  <!-- End Google Map -->
  <!--=== Content Part ===-->
  <section id="contact"/>
  <div class="container content">
    <div class="row margin-bottom-30">
      <div class="col-md-9 mb-margin-bottom-30">
        <div class="headline">
          <h2>Contact Form</h2>
        </div>
        <p>Thank you for your interest in CostaCloud's services. Please provide the following information about your business needs to help us serve you better. This information will enable us to route your request to the appropriate person. You should receive a response within 48 hours.</p>
        <br />
        <!-- Contacts -->
        <form action="contacts-process.php" method="post" id="sky-form3" name="sky-form3" class="sky-form">
          <fieldset>
          <div class="row">
            <section class="col col-6">
              <label class="label">Name</label>
              <label class="input"> <i class="icon-append fa fa-user"></i>
              <input type="text" name="name" id="name">
              </label>
            </section>
            <section class="col col-6">
              <label class="label">E-mail</label>
              <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
              <input type="email" name="email" id="email">
              </label>
            </section>
          </div>
          <section>
            <label class="label">Subject</label>
            <label class="input"> <i class="icon-append fa fa-tag"></i>
            <input type="text" name="subject" id="subject">
            </label>
          </section>
          <section>
            <label class="select">
            <select name="gender">
              <option value="0" selected disabled>Please Select Your Location</option>
              <option value="1">India</option>
              <option value="2">United States</option>
              <option value="8">Europe</option>
              <option value="3">Middle East</option>
              <option value="4">Singapore</option>
              <option value="5">Japan</option>
              <option value="6">China</option>
              <option value="7">Others</option>
            </select>
            <i></i> </label>
          </section>
          <section>
            <label class="label">Message</label>
            <label class="textarea"> <i class="icon-append fa fa-comment"></i>
            <textarea rows="4" name="message" id="message"></textarea>
            </label>
          </section>
          <section>
            <label class="label">Enter characters below:</label>
            <label class="input input-captcha"> <img src="assets/plugins/sky-forms/version-2.0.1/captcha/image.php?<?php echo time(); ?>" id="captcha_img" width="100" height="32" alt="Captcha image" />
            <input type="text" maxlength="6" name="captcha" id="captcha">
            <a href="#" onClick="document.getElementById('captcha_img').src='assets/plugins/sky-forms/version-2.0.1/captcha/image.php?img=' + Math.random(); return false">Reload Captcha</a> </label>
          </section>
          <section>
            <label class="checkbox">
            <input type="checkbox" name="copy" >
            <i></i>Send a copy to my e-mail address</label>
            <label class="checkbox">
            <input type="checkbox" name="subscription" id="subscription" checked>
            <i></i>I want to receive news and  special offers</label>
          </section>
          </fieldset>
          <footer>
            <button type="submit" class="button">Send message</button>
          </footer>
          <div class="message"> <i class="rounded-x fa fa-check"></i>
            <p>Your message was successfully sent!</p>    
            <div class="googletrack"></div> 
          </div>
        </form>
        <!-- Contacts -->
      </div>
      <!--/col-md-9-->
      <div class="col-md-3">
        <!-- Contacts -->
        <div class="headline">
          <h2>Contacts</h2>
        </div>
        <ul class="list-unstyled who margin-bottom-30">
          <li><a href="#"><i class="fa fa-home"></i>404, Gedore House, 51-52 Nehru Place</a></li>
          <li><a href="#"><i class="fa fa-envelope"></i>info@costacloud.com</a></li>
          <li><a href="#"><i class="fa fa-phone"></i>+91 (801) 0 335577</a></li>
          <li><a href="#"><i class="fa fa-globe"></i>http://www.costacloud.com</a></li>
        </ul>
        <!-- Business Hours -->
        <div class="headline">
          <h2>Business Hours</h2>
        </div>
        <ul class="list-unstyled margin-bottom-30">
          <li><strong>Monday-Friday:</strong> 9am to 8pm</li>
          <li><strong>Saturday-Sunday:</strong> Closed</li>
        </ul>
        <!-- Why we are? -->
        <div class="headline">
          <h2>Looking for Business Solutions?</h2>
        </div>
        <p>Give us a Call or Send us a message. We are helping many large and small companies manage their Business Needs better.</p>
        <!--ul class="list-unstyled">
                	<li><i class="fa fa-check color-green"></i></li>
               	</ul-->
      </div>
      <!--/col-md-3-->
    </div>
    <!--/row-->
    <!-- Our Clients -->
    <div id="clients-flexslider" class="flexslider home clients">
      <div class="headline">
        <h2>Our Clients</h2>
      </div>
      <ul class="slides">
        <li> <a href="#"> <img src="assets/img/clients/hp_grey.png" alt="" /> <img src="assets/img/clients/hp.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/igneus_grey.png" alt="" /> <img src="assets/img/clients/igneus.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/vadafone_grey.png" alt="" /> <img src="assets/img/clients/vadafone.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/walmart_grey.png" alt="" /> <img src="assets/img/clients/walmart.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/shell_grey.png" alt="" /> <img src="assets/img/clients/shell.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/natural_grey.png" alt="" /> <img src="assets/img/clients/natural.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/aztec_grey.png" alt="" /> <img src="assets/img/clients/aztec.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/gamescast_grey.png" alt="" /> <img src="assets/img/clients/gamescast.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/cisco_grey.png" alt="" /> <img src="assets/img/clients/cisco.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/everyday_grey.png" alt="" /> <img src="assets/img/clients/everyday.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/cocacola_grey.png" alt="" /> <img src="assets/img/clients/cocacola.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/spinworkx_grey.png" alt="" /> <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/shell_grey.png" alt="" /> <img src="assets/img/clients/shell.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/natural_grey.png" alt="" /> <img src="assets/img/clients/natural.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/gamescast_grey.png" alt="" /> <img src="assets/img/clients/gamescast.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/everyday_grey.png" alt="" /> <img src="assets/img/clients/everyday.png" class="color-img" alt="" /> </a> </li>
        <li> <a href="#"> <img src="assets/img/clients/spinworkx_grey.png" alt="" /> <img src="assets/img/clients/spinworkx.png" class="color-img" alt="" /> </a> </li>
      </ul>
    </div>
    <!--/flexslider-->
    <!-- End Our Clients -->
  </div>
  <!--/container-->
  <!--=== End Content Part ===-->
  <!--=== Footer ===--><!-- #BeginLibraryItem "/CostaCloud/footer.lbi" -->

<!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="index.html"><img class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                        <p>CostaCloud is a Registered Trade Mark of Appolo Computers Pvt. Ltd. Appolo Computers was established in 1986 and has an operating presence in 4 countries around the world.</p>
                        <p>&nbsp;</p>    
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Latest Posts</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">Big Data Analytics for Automation Industry</a>
                                    <small>Aug 5, 2014</small>                                </li>
                                <li>
                                    <a href="#">eSolutions for Government Process Management</a>
                                    <small>July 23, 2014</small>
                                </li>
                                <li>
                                    <a href="#">Patient Records Management System</a>
                                    <small>June 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div><!--/col-md-3-->  
                    <!-- End Latest --> 
                    
                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="portfolio.html">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="jobs/index.php">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="blog/index.php">Community</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="page-contact.php">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->                    

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>                         
                        <address class="md-margin-bottom-40">
                        Appolo Computer Pvt. Ltd. <br/>
                        404 Gedore House, 51-52 Nehru Place
                <br />
                            New Delhi, India 110019<br />
                        	Phone: +91 8010 33 55 77<br />
                            Fax: +91 (11) 41600665<br />
                            Email: <a href="mailto:info@costacloud.com" class="">info@costacloud.com</a>
                        </address>
                        <address class="md-margin-bottom-40">
                       	    Appolo Impex, LLC <br />
							919 Black Oak Ct <br />
							Gibsonia, PA 15044 <br />
							United States <br />
							Phone: +1 6266894835 <br />
							Email: <a href="mailto:info@costacloud.com" class="">dia@appolosys.com</a> <br />
                         </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                     
                        <p>
                            2014 &copy; All Rights Reserved. 
                            <a target="_blank" href="https://www.appolosys.com">Appolo Computer Pvt. Ltd.</a></p>
                  </div>
                    <!-- Social Links -->
                    <div class="col-md-6">  
                        <ul class="social-icons pull-right">
                             <li><a href="http://facebook.com/costacloud" data-original-title="Facebook" class="rounded-x social_facebook"></a></li>
                             <li><a href="https://twitter.com/costa_cloud" data-original-title="Twitter" class="rounded-x social_twitter"></a></li>
                             <li><a href="https://www.linkedin.com/in/costacloud" data-original-title="Linkedin" class="rounded-x social_linkedin"></a></li>
                             <li><a href="http://www.pinterest.com/costacloud/" data-original-title="Pinterest" class="rounded-x social_pintrest"></a></li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div> 
        </div><!--/copyright-->
    </div>     
    <!--=== End Footer Version 1 ===-->
<!-- #EndLibraryItem --><!--=== End Footer ===-->
</div>
<!--/wrapepr-->
<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<!-- Login Form -->
<script src="assets/plugins/sky-forms/version-2.0.1/js/jquery.form.min.js"></script>
<!-- Validation Form -->
<script src="assets/plugins/sky-forms/version-2.0.1/js/jquery.validate.min.js"></script>
<!-- JS Page Level -->
<!-- Contact Form Java Scripts -->
<script type="text/javascript" src="assets/js/contact/google_map_location.js"></script>
<script type="text/javascript" src="assets/js/contact/contact-form-validate.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        ContactPage.initMap();        
        ContactForm.initContactForm();
	});
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/sky-forms/version-2.0.1/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms/version-2.0.1/js/jquery.placeholder.min.js"></script>
<![endif]-->
</body>
</html>