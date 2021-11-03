
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
                        <a href="{{route('device.csv')}}" class="btn btn-success btn-sm float-right mb-3"><i class="fa fa-arrow-up" ></i>Upload CSV</a>
                        <a href="{{route('device.export')}}" class="btn btn-sm  btn-danger float-right mr-3" method="post")> <i class="fa fa-arrow-down" ></i>
                            Export CSV
                        </a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Brand</th>
                                    <th>Series</th>
                                    <th>Model</th>
                                    <th>Issues</th>
                                    <th>Issues Description</th>
                                    <th>Price</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($issues as $issue)
                                <tr> 
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{$issue->model->series->device->DeviceName}}</td>
                                    <td>{{$issue->model->series->SeriesName}}</td>
                                    <td>{{$issue->model->ModelName}}</td>
                                    <td>
                                        {{ $issue->issue_name }}
                                    </td>
                                    <td>
                                        {{ $issue->issue_description }}
                                    </td>
                                    <td>
                                        {{ $issue->issue_price }}
                                    </td>
                                    
                                </tr>
                                @endforeach
                                
                            </tbody>
                          </table>{{ $issues->links() }}
                        
                       
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
    