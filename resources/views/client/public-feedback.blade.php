@section('title')
Client - Public Feedback
@endsection
@extends('layouts.main')
@section('style')
<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
<!-- Code Mirror css -->
<link href="{{ asset('assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Public Feedback</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Client</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Templates</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Public Feedback</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
      <!-- Start col -->
      <div class="col-lg-12">
        <h5 class="card-title font-18">Your feedback is important!</h5>
      </div>
      <!-- End col -->
    </div>
    <!-- End row -->
      <!-- Start row -->
      <div class="row">
        <!-- Start col -->
        <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-header">
                    <!-- <h5 class="card-title">Add Text</h5> -->
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control" name="inputTextarea" id="inputTextarea" rows="8" placeholder="Your feedback here..."></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary">Send Feedback</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
@endsection
