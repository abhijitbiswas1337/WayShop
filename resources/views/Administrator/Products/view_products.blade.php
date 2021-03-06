@extends('Administrator.layouts.master')
@section('title')
    View Products
@endsection
@section('content')
    <div class="main-content">
         <div class="message-success" style="display:none" class="alert alert-success"></div>
         <div class="message-error" style="display:none" class="alert alert-danger"></div>
        <section class="section">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-primary text-white-all">
                    <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>View Products</li>
                </ol>
            </nav>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Product Color</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $sr=1;
                                        @endphp
                                        @foreach($products as $productsdetails)
                                            <tr>
                                                <td>{{$sr++}}</td>
                                                <td>{{$productsdetails->name}}</td>
                                                <td>{{$productsdetails->code}}</td>
                                                <td>{{$productsdetails->color}}</td>
                                                <td>
                                                    @if(!empty($productsdetails->image))
                                                        <img alt="image" src="{{asset('/Assets/Admin/uploads/products/'.$productsdetails->image)}}" width="200px" height="100px">
                                                    @else
                                                        <img alt="image" src="{{asset('/Assets/Admin/assets/img/no-image-icon-15.png')}}" width="200px" height="100px">
                                                    @endif
                                                </td>
                                                <td>{{$productsdetails->price}}</td>
                                                <td>
                                                    {{-- @if ($productsdetails->status ==1)
                                                        <div class="badge badge-success badge-shadow status"><a href="{{route('StatusDeactivate',['id'=>$productsdetails->id])}}" data-toggle="tooltip" data-placement="top" title=""
                                                                                                          data-original-title="Not Active">Active</a></div>
                                                        @else
                                                            <div class="badge badge-danger badge-shadow"><a href="{{route('StatusActivate',['id'=>$productsdetails->id])}}" data-toggle="tooltip" data-placement="top" title=""
                                                                                                            data-original-title="Active">NotActive</a></div>
                                                    @endif --}}

                                                    <input type="checkbox" class="ProductStatus btn btn-success" rel="{{$productsdetails->id}}" data-toggle="toggle" data-on="Active" data-off="Deactivate"
                                                     data-onstyle="success" data-offstyle="danger" @if ($productsdetails['status']==1) checked @endif>
                                                     <div class="myElem" style="display:none" class="alert alert-success"></div>
                                                </td>

                                                <td>
                                                    <div class="dropdown d-inline">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                           Actions
                                                        </button>
                                                        <div class="dropdown-menu" style="will-change: transform;">
                                                            <a class="dropdown-item has-icon" href="{{route('EditProduct',['id'=>$productsdetails->id])}}"><i class="far fa-edit"></i>Edit</a>
                                                            <a class="dropdown-item has-icon" href="{{route('ProductDelete',['id'=>$productsdetails->id])}}"><i class="fas fa-window-close"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
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
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i> </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel</div>
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
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar"> <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                                                                                                                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked> <span class="selectgroup-button selectgroup-button-icon"
                                                                                                                                        data-toggle="tooltip" data-original-title="Dark Sidebar"><i
                                        class="fas fa-moon"></i></span> </label>
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
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting"> <span class="custom-switch-indicator"></span> <span
                                    class="control-label p-l-10">Mini Sidebar</span> </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting"> <span class="custom-switch-indicator"></span> <span
                                    class="control-label p-l-10">Sticky Header</span> </label>
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
