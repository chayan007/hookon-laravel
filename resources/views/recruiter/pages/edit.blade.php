@extends('recruiter.layout.recruiterbase')
@section('page_name','Recruiter Edit Details')
@section('page_header','Edit')
@section('page_desc','Change your details you have filled !')
@section('page_bread','Edit')
@section('content')
 <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit your details</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <form method="POST" action="/recruiter/editme/{{Auth::user()->id}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                <small id="helpId" class="form-text text-muted">Just your new name</small>
                </div>
                <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="*  *  *  *  *  *  *  *">
                <small id="helpId" class="form-text text-muted">Enter a new password to change or keep it as it is</small>
                </div>
                <div class="form-group">
                <label for="">Profile Pic</label>
                <input type="file" class="form-control-file" name="photo" id="" placeholder="" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Just to check your cute face (below 1 MB)</small>
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" readonly aria-describedby="helpId" value="{{Auth::user()->email}}">
                <small id="helpId" class="form-text text-muted">Just your eMail ID</small>
                </div>
                <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="text" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="Date of Birth  (DD/MM/YYYY)">
                <small id="helpId" class="form-text text-muted">We will calculate your age</small>
                </div>
                <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter your Mobile no.">
                <small id="helpId" class="form-text text-muted">We will text you</small>
                </div>
                <div class="form-group">
                <label for="">Company</label>
                <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="Enter your company">
                <small id="helpId" class="form-text text-muted">Just to see where you work</small>
                </div>
                <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block"> Submit </button>
            </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
