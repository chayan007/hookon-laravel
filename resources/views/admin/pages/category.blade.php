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
          <h3 class="box-title">Add Category</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <form action="/admin/category" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Add one Category :</label>
                  <input type="text" class="form-control" name="category_name" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">New Category you want to bring in your Site</small>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Delete Category</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            @foreach ($categories as $category)
            <span class="badge badge-pill badge-info">
                {{$category->category_name}} <a class="btn btn-active" href="/category/delete/{{$category->id}}" role="button"><i class="fa fa-times-rectangle"></i></a>
            </span>
            @endforeach
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
