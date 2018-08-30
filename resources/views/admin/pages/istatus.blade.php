@extends('admin.layout.adminbase')
@section('page_name','Recruiter Database')
@section('page_header','Recruiters')
@section('page_desc','See details of all recruiters registered')
@section('page_bread','Recruiters')
@section('content')
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
                  <th>Student</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody id="dataset">
                <tr>
                  <td>1</td>
                  <td>Satyam Infotech</td>
                  <td>Web Developer</td>
                  <td>sonicxxx7@gmail.com</td>
                </tr>
                </tbody>
                <tfoot>
                  <tr>
                  <th>Serial No.</th>
                  <th>Company</th>
                  <th>Profile</th>
                  <th>Student</th>
                  <th>Status</th>
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
