@extends('Administrator.layouts.master')
@section('title')
  Add Products
@endsection
@section('content')
  <div class="main-content">
    <section class="section">
      <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
          <h4 class="page-title m-b-0">Add Products</h4> </li>
        <li class="breadcrumb-item">
          <a href="{{route('admin-dashboard')}}"> <i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item">Add Product</li>
      </ul>
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12 ">
            <div class="card">
              <form class="needs-validation" novalidate="" method="post" action="{{route('Store_add_form_data')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>JavaScript Validation</h4> </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" required="" name="name" id="name">
                    <div class="invalid-feedback"> Please Enter Product Name? </div>
                  </div>

                  <div class="form-group">
                    <label>Product Code</label>
                    <input type="text" class="form-control" required="" name="code" id="code">
                    <div class="invalid-feedback"> Please Enter Product Code? </div>
                  </div>

                  <div class="form-group">
                    <label>Product Color</label>
                    <input type="text" class="form-control" required="" name="color" id="color">
                    <div class="invalid-feedback"> Please Enter Product Color? </div>
                  </div>
                  <div class="form-group mb-0">
                    <label>Product Description</label>
                    <textarea class="form-control" required="" id="description" name="description"></textarea>
                    <div class="invalid-feedback"> Please Enter Product Description? </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" class="form-control" required="" name="price" id="price">
                    <div class="invalid-feedback"> Please Enter Product Price? </div>
                  </div>
                  <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                  </div>


                </div>
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i> </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
          <div class="setting-panel-header">Setting Panel </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked> <span class="selectgroup-button">Light</span> </label>
              <label class="selectgroup-item">
                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout"> <span class="selectgroup-button">Dark</span> </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar"> <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span> </label>
              <label class="selectgroup-item">
                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked> <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span> </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting"> <span class="custom-switch-indicator"></span> <span class="control-label p-l-10">Mini Sidebar</span> </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting"> <span class="custom-switch-indicator"></span> <span class="control-label p-l-10">Sticky Header</span> </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme"> <i class="fas fa-undo"></i> Restore Default </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection