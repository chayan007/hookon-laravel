@extends('recruiter.layout.recruiterbase')
@section('page_name','Recruiter Internships')
@section('page_header','Internships')
@section('page_desc','Check Staus of Internships Posted !')
@section('page_bread','Internship Status')
@section('content')
@if (session('status'))
<div class="alert alert-info" role="alert" style="align-text:center">
    <strong>{{ session('status') }}</strong>
</div>
@endif
<section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Internships Posted !</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Company</th>
                  <th>Profile</th>
                  <th>Applicant</th>
                  <th>Applicant CV</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody id="dataset">
                <tr>
                  <td>Trident</td>
                  <td>InternetExplorer 4.0</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>CV hot</td>
                  <td>
                      <form action="/recruiter/changeStatus/{{$intern->id}}" method="POST">
                          @csrf
                          <div class="form-group">
                            <select class="form-control" name="status" id="">
                              <option>Seen</option>
                              <option>Hired</option>
                              <option>Rejected</option>
                            </select>
                          </div>
                  </td>
                  <td>
                      <button type="submit" class="btn btn-primary">Change Status</button>
                      </form>
                  </td>
                </tr>
                </tbody>
                <tfoot>
               <tr>
                  <th>Serial No.</th>
                  <th>Company</th>
                  <th>Profile</th>
                  <th>Applicant</th>
                  <th>Applicant CV</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop
@section('dependencies')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script>
   $(document).ready(function() {
    $('#example1').DataTable();
} );
</script>
