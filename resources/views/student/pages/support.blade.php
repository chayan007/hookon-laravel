@extends('student.layout.studentbase')
@section('page_name','Student Support')
@section('page_header','Support')
@section('page_desc','Have any problem, contact us')
@section('page_bread','Support')
@section('dependencies')
@section('content')
    <form action="/student/support" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" readonly name="email" id="" aria-describedby="helpId" value="{{ Auth::user()->email }}">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Enter your Query</label>
          <textarea class="form-control" name="support" id="" rows="3" placeholder="Please let us help you."></textarea>
          <small>Mention the problem. We will reach for you soon</small>
        </div>
        <button type="submit" name="" id="" class="btn btn-info btn-lg btn-block">Ask for Help</button>
    </form>
@stop
