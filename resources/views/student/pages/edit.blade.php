@extends('student.layout.studentbase')
@section('page_name','Student Edit Details')
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
            <form method="POST" action="/student/edit" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                <small id="helpId" class="form-text text-muted">Just your new name</small>
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
                  <label for="">Enter your Image</label>
                  <input type="file" class="form-control-file" name="photo" id="" placeholder="Enter your image " aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Just to check your cute face (below size 1 MB)</small>
                </div>
                <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter your Mobile no.">
                <small id="helpId" class="form-text text-muted">We will text you</small>
                </div>
                <div class="form-group">
                <label for="">Skills</label>
                <input type="text" class="form-control" name="skills" id="" aria-describedby="helpId" placeholder="Enter your skills (seperated by comma)">
                <small id="helpId" class="form-text text-muted">Just so recruiter could check you out</small>
                </div>
                <div class="form-group">
                  <label for="">Enter your CV</label>
                  <input type="file" class="form-control-file" name="cv" id="" placeholder="Enter your cv" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Just to check your proffessional mentaility (below size 2 MB)</small>
                  <small id="fileHelpId" class="form-text text-muted">Upload format : .doc, .docx, .pdf (highly recommended)</small>
                </div>
                <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block"> Submit </button>
            </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
