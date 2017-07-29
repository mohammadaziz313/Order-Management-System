@extends('layouts.layout')
@section('search')
  <!--start-top-serch-->

<div id="search">
<form action=@php echo url('/inventory/searchInventory'); @endphp method="post">
  <input name="id" type="text" placeholder="Search Here"/>
  <a href=@php echo url('/inventory/search'); @endphp><button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button></a>
</div>

<!--close-top-serch-->
@endsection
@section('inventory')
  class="active"
@endsection
@section('data')
<div id="content-header">
    <div id="breadcrumb"> <a href=@php echo url('/dashboard'); @endphp title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href=@php echo url('/inventory'); @endphp class="current">Inventory</a></div>
  </div>
  <div class="container-fluid">
    <hr>
    <!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href=@php echo url('/inventory/add-new-inventory'); @endphp> <i class="icon-dashboard"></i> Add New Item </a> </li>
        <!--
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Delete Item</a> </li>
        <li class="bg_ly"> <a href=@php echo url('/inventory/update-item'); @endphp> <i class="icon-inbox"></i> Update Item </a> </li>
        -->
        <li class="bg_lo"> <a href=@php echo url('/inventory/add-new-supplier'); @endphp> <i class="icon-th"></i> Add Supplier</a> </li>
        <!--
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Listing</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li> -->
      </ul>
    </div>
  </div>
<!--End-Action boxes-->    
    <div class="row-fluid">
      <div class="span12">
      <div>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Inventory Items</h5>
              <div class="widget-content ">
                <table class="table table-bordered table-striped with-check">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                      <th>SKU</th>
                      <th>Title</th>
                      <th>Supplier</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Product Type</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($inventory as $i)
                    <tr>
                      <td><input type="checkbox" /></td>
                      <td>@php echo "$i->sku"; @endphp</td>
                      <td>@php echo "$i->title"; @endphp</td>
                      <td>@php echo "$i->supplier"; @endphp</td>
                      <td>@php echo "$i->price"; @endphp</td>
                      <td>@php echo "$i->quantity"; @endphp</td>
                      <td>@php echo "$i->producttype"; @endphp</td>
                      <td>@php echo "$i->description"; @endphp</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr>
        </hr>
        </div>
        <div>
        <div class="widget-box nopadding">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Supplier Details</h5>
            <!-- <span class="label label-info">Featured</span> --> </div>
            <div class="widget-content ">
              <table class="table table-bordered table-striped with-check">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($suppliers as $i)
                  <tr>
                    <td><input type="checkbox" /></td>
                    <td>@php echo "$i->name"; @endphp</td>
                    <td>@php echo "$i->company"; @endphp</td>
                    <td>@php echo "$i->address"; @endphp</td>
                    <td>@php echo "$i->email"; @endphp</td>
                    <td>@php echo "$i->phone"; @endphp</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>      
    </div>
@endsection   