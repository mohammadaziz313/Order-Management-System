@extends('layouts.layout')
@section('search')
  <!--start-top-serch-->

<div id="search">
<form action=@php echo url('/sales/searchProduct'); @endphp method="post">
  <input name="id" type="text" placeholder="Search Here"/>
  <a href=@php echo url('/sales/search'); @endphp><button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button></a>
</div>

<!--close-top-serch-->
@endsection
@section('sales')
  class="active"
@endsection
@section('data')
<div id="content-header">
    <div id="breadcrumb"> <a href=@php echo url('/dashboard'); @endphp title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href=@php echo url('/sales'); @endphp class="current">sales Order</a></div>

  </div>
  <div>
  <div class="container-fluid">
    <hr>
    <!--Action boxes-->
 <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href=@php echo url('/sales/add-sales'); @endphp> <i class=""></i> <h3>New Sales Order</h3> </a> </li>
        <!--
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Delete Item</a> </li>
        <li class="bg_ly"> <a href=@php echo url('/inventory/update-item'); @endphp> <i class="icon-inbox"></i> Update Item </a> </li>
        -->
        <!-- <li class="bg_lo"> <a href=@php echo url('/purchase/add-new-supplier'); @endphp> <i class="icon-th"></i> Add Supplier</a> </li> -->
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
<div>
    <div class="row-fluid">
      <div class="span12">
      <div>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Sales Order </h5>
              <br>
              <br>
              <div class="widget-content ">
                <table class="table table-bordered table-striped with-check">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                      <th>ID</th>
                      <th>SKU</th>
                      <th>Product Description</th>
                      <th>Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($sales as $i)
                    <tr>
                      <td><input type="checkbox" /></td>
                      <td>@php echo "$i->id"; @endphp</td>
                      <td>@php echo "$i->sku"; @endphp</td>
                      <td>@php echo "$i->productDescription"; @endphp</td>
                      <td>@php echo "$i->quantity"; @endphp</td>
                    </tr>
                    @endforeach

                  </tbody>

                </table>
                <div>
                <!-- <button type="button" class="btn btn-success">Continue</button> -->
                </div>

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
        </div>

        </div>
        
      
@endsection   