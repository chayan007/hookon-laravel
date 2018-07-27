@extends('recruiter.layout.recruiterbase')
@section('page_name','Internship Edit Details')
@section('page_header','Edit Internship')
@section('page_desc','Change your details of Internship !')
@section('page_bread','Edit Internship')
@section('content')
     <div class="box box-danger collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Internship {{Auth::user()->id}}</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <form method="POST" action="/student/edit" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="">Company Name</label>
                <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="Enter Company">
                <small id="helpId" class="form-text text-muted">Just to know where interns will work</small>
                </div>
                <div class="form-group">
                <label for="">Company Logo</label>
                <input type="file" class="form-control-file" name="photo" id="" placeholder="Enter Comapny Logo" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Just so we could check your company</small>
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" readonly aria-describedby="helpId" value="{{Auth::user()->email}}">
                <small id="helpId" class="form-text text-muted">Just your eMail ID</small>
                </div>
                <div class="form-group">
                <label for="">Profile</label>
                <input type="text" class="form-control" name="profile" id="" aria-describedby="helpId" placeholder="Profile of Work">
                <small id="helpId" class="form-text text-muted">Just to aware interns about profile</small>
                </div>
                <div class="form-group">
                <label for="">Company Website</label>
                <input type="text" class="form-control" name="url" id="" aria-describedby="helpId" placeholder="Wesbite of Company">
                <small id="helpId" class="form-text text-muted">Just so interns could check you out</small>
                </div>
                <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter your Mobile no.">
                <small id="helpId" class="form-text text-muted">We will text you</small>
                </div>
                <div class="form-group">
                <label for="">Skills</label>
                <input type="text" class="form-control" name="skills" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
                <small id="helpId" class="form-text text-muted">Just to see where you work</small>
                </div>
                <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="desc" id="" rows="5" placeholder="Description about Intern's Responsibilities"></textarea>
                <small id="helpId" class="form-text text-muted">Just to know what Interns will be working on</small>
                </div>
                <div class="form-group">
                <label for="">About Company</label>
                <textarea class="form-control" name="desc" id="" rows="5" placeholder="Write few words about your Company"></textarea>
                <small id="helpId" class="form-text text-muted">Just to let Interns know about Company background</small>
                </div>
                <div class="form-group">
                  <label for="">Location</label>
                  <select class="form-control" name="location" id="">
                    <option>Virtual</option>
                    <option>Kolkata</option>
                    <option>Patna</option>
                  </select>
                  <small id="helpId" class="form-text text-muted">Just to let Interns know about it</small>
                </div>
                <div class="form-group">
                <label for="">Duration</label>
                <input type="number" class="form-control" name="duration" id="" aria-describedby="helpId" placeholder="Enter the duration (in months)">
                <small id="helpId" class="form-text text-muted">Just to let interns know about it</small>
                </div>
                <div class="form-group">
                <label for="">Stipend</label>
                <input type="number" class="form-control" name="stipend" id="" aria-describedby="helpId" placeholder="Enter the Monthly stipend">
                <small id="helpId" class="form-text text-muted">Just to let Interns know about the fruit</small>
                </div>
                <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block"> Submit </button>
            </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
