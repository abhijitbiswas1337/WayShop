@extends('Administrator.layouts.master')
@section('title')
    View Categories
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-primary text-white-all">
                    <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>View Category</li>
                </ol>
            </nav>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Parent id</th>
                                            <th>Product Code</th>
                                            <th>URL</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $sr=1;
                                        @endphp
                                        @foreach($categories as $categoriesDetails)
                                            <tr>
                                                <td>{{$sr++}}</td>
                                                <td>{{$categoriesDetails->id}}</td>
                                                <td>{{$categoriesDetails->name}}</td>
                                                <td>
                                                    @if ($categoriesDetails->parent_id >0)
                                                         {{ $categoriesDetails->parent_id}}

                                                    @endif
                                                </td>
                                                <td>{{$categoriesDetails->code}}</td>
                                                <td>{{$categoriesDetails->url}}</td>
                                                <td><div class="badge badge-success badge-shadow">Active</div></td>
                                                <td>
                                                    <div class="dropdown d-inline">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu" style="will-change: transform;">
                                                            <a class="dropdown-item has-icon" href="{{route('EditCategory',['id'=>$categoriesDetails->id])}}"><i class="far fa-edit"></i>Edit</a>
                                                            <a class="dropdown-item has-icon" href="{{route('CategoryDelete',['id'=>$categoriesDetails->id])}}"><i class="fas fa-window-close"></i> Delete</a>
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
