@extends('layouts.layout')
@section('dashboard')
  class="active"
@endsection
@section('data')
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href=@php echo url('/dashboard') @endphp title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->

  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
	  
        <li class="bg_lb"> <a href=@php echo url('/dashboard'); @endphp> <i class="icon-dashboard"></i> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href=@php echo url('/purchase'); @endphp> <i class="icon-signal"></i> Purchase Order</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i>Sales Order </a> </li>
        <li class="bg_lo"> <a href=@php echo url('/inventory'); @endphp> <i class="icon-th"></i> Inventory</a> </li>
		
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Listing</a> </li>
        <!--<li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li> -->
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Sales</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>Total Users </small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
              </ul> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--End-Chart-box-->
@endsection
