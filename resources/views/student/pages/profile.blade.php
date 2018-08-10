@extends('student.layout.studentbase')
@section('page_name','Student Home')
@section('page_header','Profile')
@section('page_desc','Look at your details you have filled !')
@section('page_bread','Profile')
@section('content')
 <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">{{Auth::user()->name}}'s' Details</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Name :</a>
            <strong>{{Auth::user()->name}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Phone :</a>
            <strong>+91 {{Auth::user()->phone}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Email :</a>
            <strong>{{Auth::user()->email}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Date Of Birth :</a>
            <strong>{{Auth::user()->dob}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Skills :</a>
            <strong>{{Auth::user()->skills}}</strong><br>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
