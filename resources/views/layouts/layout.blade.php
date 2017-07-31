<!DOCTYPE html>
<html lang="en">
<head>
<title>Order Management System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
@section('extension')
<link rel="stylesheet" href=@php echo url('css/bootstrap.min.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/bootstrap-responsive.min.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/colorpicker.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/datepicker.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/fullcalendar.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/matrix-style.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/matrix-media.css'); @endphp />
<link href=@php echo url('font-awesome/css/font-awesome.css'); @endphp rel="stylesheet" />
<link rel="stylesheet" href=@php echo url('css/jquery.gritter.css'); @endphp />
<link href=@php echo url('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'); @endphp rel='stylesheet' type='text/css'>
@show
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href=@php echo url('/') @endphp>Order Management System</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
@yield('search')
<!--start-top-serch-->
<!--
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
-->
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li @yield('dashboard')><a href=@php echo url('dashboard'); @endphp><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li @yield('order')> <a href="charts.html"><i class="icon icon-signal"></i> <span>Purchase Order</span></a> </li>
    <li @yield('sales')> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Sales Order</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Inventory</span></a>
      <ul>
        <li @yield('inventory-info')><a href=@php echo url('inventory-info'); @endphp>Inventory Info</a></li>
        <li @yield('supplier-info')><a href=@php echo url('supplier-info'); @endphp>Supplier Info</a></li>

      </ul>
    </li>

    <li @yield('listing')><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Listing</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">

@yield('data')

  <hr/>
</div>
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; OMS. Brought to you by <a href="http://themedesigner.in">Guruji and Company</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>