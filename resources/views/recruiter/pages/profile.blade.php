@extends('recruiter.layout.recruiterbase')
@section('page_name','Recruiter Home')
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
<<<<<<< HEAD
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Name:</span>&nbsp;&nbsp;
             {{Auth::user()->name}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Phone:</span>&nbsp;&nbsp;
            {{Auth::user()->phone}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Email:</span>&nbsp;&nbsp;
            {{Auth::user()->email}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Date Of Birth:</span>&nbsp;&nbsp;
            {{Auth::user()->name}}<br></h4>
            <h4 href="#" style="font-weight: bold; color: #000; margin:10px; padding-bottom:8px;"><span style="padding-bottom:3px; border-bottom: 2px solid #D95058">Company:</span>&nbsp;&nbsp;
            {{Auth::user()->name}}<br></h4>
=======
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Name :</a>
            <strong>{{Auth::user()->name}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Phone :</a>
            <strong>{{Auth::user()->phone}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Email :</a>
            <strong>{{Auth::user()->email}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Date Of Birth :</a>
            <strong>{{Auth::user()->dob}}</strong><br>
            <a href="#" class="badge badge-primary" style="padding:10px; margin:10px;">Company :</a>
            <strong>{{Auth::user()->company}}</strong><br>
>>>>>>> 3b992d4065cd36be5ad3432454245e23c1c25aa8
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
