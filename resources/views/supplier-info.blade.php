@extends('layouts.layout')

<!-- Start Checkbox Section -->






<!--End Checkbox Section -->

@section('search')
  <!--start-top-serch-->

<div id="search">

<form action=@php echo url('/inventory-info/searchInventory'); @endphp method="post">
  <input name="id" type="text" placeholder="Search Here"/>
  <a href=@php echo url('/inventory-info/search'); @endphp><button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button></a>

</div>

<!--close-top-serch-->
@endsection
@section('supplier-info')
  class="active"
@endsection
@section('data')
<div id="content-header">
    <div id="breadcrumb"> <a href=@php echo url('/dashboard'); @endphp title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href=@php echo url('/supplier-info'); @endphp class="current">Supplier</a></div>
  </div>
  <div class="container-fluid">
    <hr>
    <!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">

        <li class="bg_lb"> <a href=@php echo url('/supplier-info/add-new-supplier'); @endphp> <i class="icon-dashboard"></i> Add New Supplier </a> </li>

        
        <!-- <li class="bg_lg span2" for="submit-form"> <a href=@php echo url('/supplier-info/delete-supplier'); @endphp> <i class="icon-signal"></i> Delete Item</a> </li>        
         <li class="bg_lg span2" for="submit-form"> <i class="icon-signal"></i><input type="button"  onclick="deleteRow('datatable');" />Delete Item</li>
         -->

        <!--
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Delete Item</a> </li>

        <li class="bg_ly"> <a href=@php echo url('/inventory/update-item'); @endphp> <i class="icon-inbox"></i> Update Item </a> </li>
        -->

        <!-- <li class="bg_lo"> <a href=@php echo url('/supplier-info/add-new-supplier'); @endphp> <i class="icon-th"></i> Add Supplier</a> </li>
         --><!--

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
  <div class="container-fluid">
    <hr>    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Supplier Details</h5>
              </div>
              <div class="widget-content ">
                <table id="datatable" class="table table-bordered table-striped with-check">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                      <th>Name</th>

                    <th>Company</th>
                    <th>Address</th>
                    <th>Email</th>
                    
                    <th>Delete Item</th>
                    </tr>
                  </thead>
                  <!-- <form method="post" action=@php echo ('/supplier-info/delete-supplier'); @endphp target="_blank"> -->
                  <tbody>

                  @foreach($suppliers as $i)
                  <tr>
                  <!-- <form method="post" action="/supplier-info/delete-supplier"> -->
                    
                    <!-- <td><input name="name" value=@php echo "$i->name"; @endphp readonly/></td> -->
                    <td><@php echo "$i->name"; @endphp /></td>
                    <td>@php echo "$i->company"; @endphp</td>
                    <td>@php echo "$i->address"; @endphp</td>
                    <td>@php echo "$i->email"; @endphp</td>
                    <td>@php echo "$i->phone"; @endphp</td>
                    <td><input type="checkbox" name=@php echo "$i->name"; @endphp /></td>
                  </tr>
                  @endforeach
                  <!-- <input type="submit" id="submit-form" class="hidden" />
 -->                  </tbody>
                  </form>


                  </tbody>
                </table>
                <input class="btn btn-danger" type="button" value="Delete" onclick="deleteRow('datatable');" />
              </div>
            </div>
        </div>
      </div>

    </div>
<!-- <script src= @php echo ('js/jquery.min.js') @endphp></script> 
<script src=@php echo ('js/jquery.ui.custom.js') @endphp></script> 
<script src=@php echo ('js/bootstrap.min.js') @endphp ></script> 
<script src=@php echo ('js/jquery.uniform.js') @endphp ></script> 
<script src=@php echo ('js/select2.min.js') @endphp ></script> 
<script src=@php echo ('js/jquery.dataTables.min.js') @endphp ></script> 
<script src=@php echo ('js/matrix.js') @endphp ></script> 
<script src=@php echo ('js/matrix.tables.js') @endphp></script> -->

<script>
  function deleteRow(tableID)  {
        var table = document.getElementById(tableID).tBodies[0];
        var rowCount = table.rows.length;

        for(var i=1; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[5].getElementsByTagName('input')[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
             }
        }
}
</script>>
@endsection
