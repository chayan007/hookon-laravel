@extends('admin.layout.adminbase')
@section('page_name','Interests Database')
@section('page_header','Interest')
@section('page_desc','See details of all Interest registered')
@section('page_bread','Interest')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Course Interests Students !</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Course</th>
                  <th>Name</th>
                  <th>EMail</th>
                  <th>Phone</th>
                  <th>Virtual</th>
                  <th>Comment</th>
                  <th>Location</th>
                </tr>
                </thead>
                <tbody id="dataset">
                    @foreach($interests as $interest)
                <tr>
                  <td>{{ $interest->id }}</td>
                  <td>{{ $interest->course_id }}</td>
                  <td>{{ $interest->name }}</td>
                  <td>{{ $interest->email }}</td>
                  <td>{{ $interest->phone }}</td>
                  <td>{{ $interest->virtual }}</td>
                  <td>{{ $interest->comments }}</td>
                  <td>{{ $interest->location }}</td>
                </tr>
                    @endforeach
                </tbody>
                <tfoot>
               <tr>
                  <th>Serial No.</th>
                  <th>Course</th>
                  <th>Name</th>
                  <th>EMail</th>
                  <th>Phone</th>
                  <th>Virtual</th>
                  <th>Comment</th>
                  <th>Location</th>
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
@extends('admin.layout.adminbase')
@section('page_name','Intern Database')
@section('page_header','Interns')
@section('page_desc','See details of all Interns Applied')
@section('page_bread','Interns')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Interns Applied !</h3>
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
                    @foreach ($interns as $intern)
                <tr>
                  <td>{{ $intern->id }}</td>
                  <td>{{ $intern->company }}</td>
                  <td>{{ $intern->profile }}</td>
                  <td>{{ $intern->student }}</td>
                  <td>{{ $intern->status }}</td>
                </tr>
                  @endforeach
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
