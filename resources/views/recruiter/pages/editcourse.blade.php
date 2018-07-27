@extends('recruiter.layout.recruiterbase')
@section('page_name','Course')
@section('page_header','Edit Course')
@section('page_desc','Edit Courses you have added')
@section('page_bread','Edit Course')
@section('content')
<div class="box box-default collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Course</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <form action="/recruiter/postcourse" method="POST">
              @csrf
              <div class="form-group">
                <label for="">Course Name</label>
                <input type="text" class="form-control" name="course" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Just a awesome name to your Course</small>
              </div>
              <div class="form-group">
                <label for="">Instructor</label>
                <input type="text" class="form-control" name="instructor" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Mention the best instructor of your company</small>
              </div>
              <div class="form-group">
                <label for="">Website</label>
                <input type="text" class="form-control" name="url" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">So that students could check out your official site.</small>
              </div>
              <div class="form-group">
                <label for="">Company Name</label>
                <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Mention comapny students will be certified from.</small>
              </div>
              <div class="form-group">
                <label for="">Location</label>
                <select class="form-control" name="location" id="">
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Enter Company/ Personalized Logo</label>
                <input type="file" class="form-control-file" name="photo" id="" placeholder="" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Just to add attractiveness to your brand.</small>
              </div>
              <div class="form-group">
                <label for="">Domain</label>
                <input type="text" class="form-control" name="domain" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">(Web Dev, AI, Big Data, blah, blah)</small>
              </div>
              <div class="form-group">
                <label for="">About Company</label>
                <textarea class="form-control" name="about" id="" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="">Course Syllabus</label>
                <textarea class="form-control" name="syllabus" id="" rows="8"></textarea>
              </div>
              <button type="button" name="" id="" class="btn btn-info btn-lg btn-block">Edit Course</button>
          </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
