@extends('student.layout.studentbase')
@section('page_name','Student Internships')
@section('page_header','Internships')
@section('page_desc','Check Staus of Internships Applied !')
@section('page_bread','Internship Status')
@section('dependencies')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Internships Applied !</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Company</th>
                  <th>Profile</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody id="dataset">
                    @foreach ($interns as $intern)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $intern->company }}</td>
                  <td>{{ $intern->profile }}</td>
                  <td>{{ $intern->status }}</td>
                </tr>
                    @endforeach
                </tbody>
                <tfoot>
               <tr>
                  <th>Serial No.</th>
                  <th>Company</th>
                  <th>Profile</th>
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
@section('dependenices')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script>
   $(document).ready(function() {
    $('#example1').DataTable();
} );
</script>
