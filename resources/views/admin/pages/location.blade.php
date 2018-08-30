@extends('admin.layout.adminbase')
@section('page_name','Admin Home')
@section('page_header','Profile')
@section('page_desc','Look at your details you have filled !')
@section('page_bread','Profile')
@section('content')
@if (session('status'))
<div class="alert alert-info" role="alert" style="align-text:center">
    <strong>{{ session('status') }}</strong>
</div>
@endif
 <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Location</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <form action="/admin/location" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Add one Location :</label>
                  <input type="text" class="form-control" name="location_name" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">New location you want to bring in your Site</small>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Delete Location</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            @foreach ($locations as $location)
            <span class="badge badge-pill badge-info">
                {{$location->location_name}} <a class="btn btn-active" href="/location/delete/{{$location->id}}" role="button"><i class="fa fa-times-rectangle"></i></a>
            </span>
            @endforeach
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
