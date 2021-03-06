 
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/distribution/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/bower_components/logo1.ico">
    <link rel="stylesheet" href="href="<?php echo base_url();?> https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="href="<?php echo base_url();?> https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="href="<?php echo base_url();?>https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="href="<?php echo base_url();?>https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">

</head>
<body>

    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>assets/bower_components/logo1.ico" alt="person" class="img-fluid rounded-circle">
             <h2 class="h5">Anna Balingit</h2><span>Curator</span>
          </div>
          
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="{{ url('/home') }}" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">B</strong></a></div>
          </div>

        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="<?php echo base_url(); ?>admin/Dashboard" class="nav-link <?php if($this->uri->segment(2)=="Dashboard"){echo "active";}?>"> <i class="icon-home"></i>Home</a></li>
            
            <li><a href="#MaintenanceDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Maintenance </a>
              <ul id="MaintenanceDropdown" class="collapse list-unstyled ">
               
                <li><a href="#TaxHierDropdown" data-toggle="collapse">Taxonomic Hierarchy</a>
                  <ul id="TaxHierDropdown" class="collapse list-unstyled">
                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Phylum" 
                      class="nav-link <?php if($this->uri->segment(2)=="Phylum"){echo "active";}?>"> &nbsp; &nbsp; &nbsp; &nbsp; Phylum</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Class" 
                      class="nav-link <?php if($this->uri->segment(2)=="Class"){echo "active";}?>"> &nbsp; &nbsp; &nbsp; &nbsp; Class</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Order" 
                      class="nav-link <?php if($this->uri->segment(2)=="Order"){echo "active";}?>"> &nbsp; &nbsp; &nbsp; &nbsp; Order</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Family" 
                      class="nav-link <?php if($this->uri->segment(2)=="Family"){echo "active";}?>"> &nbsp; &nbsp; &nbsp; &nbsp; Family</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Genus" 
                      class="nav-link <?php if($this->uri->segment(2)=="Genus"){echo "active";}?>"> &nbsp; &nbsp; &nbsp; &nbsp; Genus</a></li>

                    <li style="background-color: #303030;"><a href="<?php echo base_url(); ?>admin/Species" 
                      class="nav-link <?php if($this->uri->segment(2)=="Species"){echo "active";}?>"> &nbsp; &nbsp; &nbsp; &nbsp; Species</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>admin/Familyboxes" class="nav-link <?php if($this->uri->segment(2)=="Familyboxes"){echo "active";}?>">Family Boxes</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Locality" class="nav-link <?php if($this->uri->segment(2)=="Locality"){echo "active";}?>">Locality</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Collector" class="nav-link <?php if($this->uri->segment(2)=="Collector"){echo "active";}?>">Collector</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Externalvalidator" class="nav-link <?php if($this->uri->segment(2)=="Externalvalidator"){echo "active";}?>">External Validator</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Staffmgt" class="nav-link <?php if($this->uri->segment(2)=="Staffmgt"){echo "active";}?>">Staff Management</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Accessaccounts" class="nav-link <?php if($this->uri->segment(2)=="Accessaccounts"){echo "active";}?>">Access Accounts</a></li>
                <li><a href="<?php echo base_url(); ?>admin/CalendarManagement" class="nav-link <?php if($this->uri->segment(2)=="CalendarManagement"){echo "active";}?>">Calendar Management</a></li>
              </ul>
            </li>
            <li><a href="#TransactionDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-undo"></i>Transaction </a>
              <ul id="TransactionDropdown" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>admin/Depositplant" class="nav-link <?php if($this->uri->segment(2)=="Depositplant"){echo "active";}?>">Deposit Plant</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Rsplantdeposit" class="nav-link <?php if($this->uri->segment(2)=="Rsplantdeposit"){echo "active";}?>">Re-submit Plant Deposit</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Plantreceiving" class="nav-link <?php if($this->uri->segment(2)=="Plantreceiving"){echo "active";}?>">Plant Receiving</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Plantverification" class="nav-link <?php if($this->uri->segment(2)=="Plantverification"){echo "active";}?>">Plant Verification</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Plantclassification" class="nav-link <?php if($this->uri->segment(2)=="Plantclassification"){echo "active";}?>">Plant Classification</a></li>
                <li><a href="<?php echo base_url(); ?>admin/Loanplant" class="nav-link <?php if($this->uri->segment(2)=="Loanplant"){echo "active";}?>">Loan Plant</a></li>
              </ul>
            </li>
            <li><a href="#MToolsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-wrench"></i>Management Tools </a>
              <ul id="MToolsDropdown" class="collapse list-unstyled ">
                <li><a href="#">Herbarium Inventory</a></li>
                <li><a href="#">Herbarium Specimen Tracking</a></li>
                <li><a href="#">Audit Trailing</a></li>
              </ul>
            </li>
              <li><a href="#"> <i class="fa fa-database"></i>Query</a></li>
            <li><a href="#"> <i class="fa fa-file"></i>Reports</a></li>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>PUP</span><strong class="text-primary">HERBARIUM</strong>
                  </div></a>
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i onclick="myFunction()" class="fa fa-bell"></i><span id="BellIcon" class="badge badge-warning">2</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 2 new messages 
                          </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>

                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>

                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i onclick="myFunction1()" class="fa fa-envelope"></i><span id= "MessageIcon" class="badge badge-info">3</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/Nins.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Niño Escueta</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/sheng.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Rhisiel Valle</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="<?php echo base_url();?>assets/bower_components/mai.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Maica Opeña</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
            
                <!-- Log out-->
                 <li class="nav-item"><a href="<?php echo base_url(); ?>Maintenance" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" > 
                        <span class="d-none d-sm-inline-block">Logout</span>&nbsp<i class="fa fa-sign-out"></i></a>

                           <form id="logout-form" action="<?php echo base_url(); ?>Maintenance" method="POST" style="display: none;">
                        
                           </form>
                  </li>
              </ul>
   
<script>

function myFunction() {
    var x = document.getElementById("BellIcon");
    if (x.style.display === "none") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}

function myFunction1() {
    var y = document.getElementById("MessageIcon");
    if (y.style.display === "none") {
        y.style.display = "none";
    } else {
        y.style.display = "none";
    }
}
</script>




     </div>
      </div>
      </nav>
      </header>
 



