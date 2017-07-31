@extends('layouts.layout')
@section('extension')
@parent
<link rel="stylesheet" href=@php echo url('css/bootstrap.min.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/bootstrap-responsive.min.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/colorpicker.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/datepicker.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/uniform.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/select2.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/matrix-style.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/matrix-media.css'); @endphp />
<link rel="stylesheet" href=@php echo url('css/bootstrap-wysihtml5.css'); @endphp />
<link href=@php echo url('font-awesome/css/font-awesome.css'); @endphp rel="stylesheet" />
<link href=@php echo url('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'); @endphp rel='stylesheet' type='text/css' />
@endsection

@section('inventory')
  class = "active"
@endsection

@section('data')
<div id="content-header">
  <div id="breadcrumb"> <a href=@php echo url('/dashboard'); @endphp title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href=@php echo url('/supplier-info'); @endphp class="tip-bottom">Supplier</a><a href=@php echo url('/supplier-info/add-new-supplier'); @endphp class="current">Add New Supplier</a></div>
  <h1>Add New Supplier</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Supplier Information</h5>
        </div>
        <div class="widget-content nopadding">
          <form action=@php echo url('/supplier-info/add-new-supplier') @endphp method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Supplier's Name :</label>
              <div class="controls">
                <input name="name" type="text" class="span11" placeholder="Supplier's Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Company :</label>
              <div class="controls">
                <input name="company" type="text" class="span11" placeholder="Company" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input name="email" type="text"  class="span11" placeholder="Email"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
                <input name="phone" type="text" class="span11" placeholder="Phone" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <textarea name="address" class="span11" ></textarea>
                <span class="help-block">Provide your present address</span>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
@endsection