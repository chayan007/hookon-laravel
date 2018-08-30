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
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Name:</span>&nbsp;&nbsp;
            {{Auth::user()->name}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Phone :</span>&nbsp;&nbsp;
            +91 {{Auth::user()->phone}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Email :</span>&nbsp;&nbsp;
            {{Auth::user()->email}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Date Of Birth :</span>&nbsp;&nbsp;
            {{Auth::user()->dob}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Skills :</span>&nbsp;&nbsp;
            {{Auth::user()->skills}}<br></h4>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
