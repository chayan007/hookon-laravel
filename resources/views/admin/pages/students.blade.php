@extends('admin.layout.adminbase')
@section('page_name','Student Database')
@section('page_header','Students')
@section('page_desc','See details of all students registered')
@section('page_bread','Students')
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
                  <th>Student</th>
                  <th>EMail</th>
                  <th>Phone</th>
                  <th>DOB</th>
                  <th>Skills</th>
                  <th>Photo</th>
                  <th>CV</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody id="dataset">
                    @foreach($students as $student)
                    <tr>
                      <td>{{$student->id}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->phone}}</td>
                      <td>{{$student->dob}}</td>
                      <td>{{$student->skills}}</td>
                      <td><img src="{{ $student->image_url }}" height="30px" width="40px"></img></td>
                      <td><a href="{{$student->cv_url}}">Click Here</a></td>
                      <td>
                      <!-- Button trigger modal -->
                          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId{{$student->id}}">
                        Edit
                      </button></td>
                      <td> <a href="/student/delete/{{$student->id}}"<button type="button" class="btn btn-danger">Delete</button></a> </td>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                        <h4 class="modal-title" id="modelTitleId">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="/student/edit/{{$student->id}}" method="post">
                                              @csrf
                                              <div class="form-group">
                                              <label for="">Name</label>
                                              <input type="text" class="form-control" value="{{$student->name}}" name="name" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                              </div>
                                              <div class="form-group">
                                              <label for="">Email</label>
                                              <input type="email" class="form-control" value ="{{$student->email}}" name="email" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                              </div>
                                              <div class="form-group">
                                              <label for="">Phone</label>
                                              <input type="text" class="form-control" value="{{$student->phone}}" name="phone" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                              </div>
                                              <div class="form-group">
                                              <label for="">Date of Birth</label>
                                              <input type="date" class="form-control" value="{{$student->dob}}" name="dob" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                              </div>
                                              <div class="form-group">
                                              <label for="">Skills</label>
                                              <textarea class="form-control" name="skills" id="" aria-describedby="helpId" >{{$student->skills}}</textarea>
                                              </div>

                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Save</button>
                                              </div>
                                         </form>
                                    </div>
                                </div>
                              </div>
                            </div>

                               <!--<script>
                      $('#exampleModal').on('show.bs.modal', event => {
                          var button = $(event.relatedTarget);
                          var modal = $(this);
                          // Use above variables to manipulate the DOM
                      });
                  </script>-->
                </tr>
                    @endforeach


                </tbody>
                <tfoot>
               <tr>
                  <th>Serial No.</th>
                  <th>Student</th>
                  <th>EMail</th>
                  <th>Phone</th>
                  <th>DOB</th>
                  <th>Skills</th>
                  <th>Photo</th>
                  <th>CV</th>
                  <th>Edit</th>
                  <th>Delete</th>
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
