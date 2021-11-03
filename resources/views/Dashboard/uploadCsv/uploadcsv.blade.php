@extends('Dashboard.layouts.app')
@section('styles')

<link href="{{asset('admin/assets/libs/summernote/summernote-bs4.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
<link href="{{asset('admin/assets/libs/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />


@endsection

@section('content')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{ session('success')}}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        
                        <form action="{{route('csv.import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <h4 class="header-title">Import & Export CSV File</h4>
                                   
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="form-group">
                                                <label for="projectinput1">Select Excel File to Upload</label>
                                                <input type="file" class="form-control" name="csv_file"
                                                accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel""
                                                    required>
                                                @error('csv_file')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="alert alert-danger">
                                                <ol>
                                                    <li>Upload only .csv files</li>
                                                    <li>Files larger than 15Mb are not allowed</li>
                                                    <li>Download and fill in the data in the sample file below
                                                        to avoid errors</li>
                                                    <li class="mt-2">Download the sample for upload Device Issues
                                                        <a href="{{ asset('upload/deviceIssues.csv') }}" class="btn btn-success btn-sm">Download template
                                                        </a>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div><hr>
                                    <div class="col-4 float-right">
                                        <button class="btn btn-sm  btn-primary float-right" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            Upload CSV
                                        </button>
                                        <a href="{{ route('device.index')}}" class="btn btn-sm  btn-danger float-right mr-2"> <i class="fa fa-dismiss" ></i>
                                            cancle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script src="{{asset('admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/form-summernote.init.js')}}"></script>
@endsection