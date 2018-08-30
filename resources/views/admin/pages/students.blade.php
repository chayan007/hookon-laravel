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


                    <tr>
                      <td>1</td>
                      <td>Chayan</td>
                      <td>sonicxxx7@gmail.com</td>
                      <td>9477446558</td>
                      <td>26.10.1997</td>
                      <td>Web Dev & Ethical Hacker</td>
                      <td><img src="{{ asset('img/logo.png') }}" height="30px" width="40px"></img></td>
                      <td><a href="#">Click Here</a></td>
                      <td>
                      <!-- Button trigger modal -->
                          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId">
                        Edit
                      </button></td>
                      <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                    </tr>


                  @foreach($students as $students)
                      <tr>
                        <td>{{$students->id}}</td>
                        <td>{{$students->name}}</td>
                        <td>{{$students->email}}</td>
                        <td>{{$students->phone}}</td>
                        <td>{{$students->dob}}</td>
                        <td>{{$students->skills}}</td>
                        <td><img src="{{ asset('img/logo.png') }}" height="30px" width="40px"></img></td>
                        <td><a href="#">Click Here</a></td>
                        <td>
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId">
                          Edit
                        </button></td>
                        <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                      </tr>

                      <!-- Modal -->
                      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                      <h4 class="modal-title" id="modelTitleId">Edit {{$students->name}}'s profile</h4>
                                </div>
                                  <div class="modal-body">
                                      <div class="container-fluid">

                                        <form method="POST" action="/admin/editStudent" enctype="multipart/form-data">
                                              @csrf
                                              <div class="form-group">
                                                  <label for="">Student Name:</label>
                                                  <input type="text" class="form-control" value="{{$students->name}}" name="name" id="" aria-describedby="helpId" placeholder="Enter Student name or keep it as it is.">
                                              </div>
                                              <div class="form-group">
                                                  <label for="">Student Email:</label>
                                                  <input type="text" class="form-control" value="{{$students->email}}" name="email" id="" aria-describedby="helpId" placeholder="Enter Student email or keep it as it is.">
                                              </div>
                                              <div class="form-group">
                                                  <label for="">Student Phone:</label>
                                                  <input type="text" class="form-control" name="phone" value="{{$students->phone}}" id="" aria-describedby="helpId" placeholder="Enter Student phone or keep it as it is.">
                                              </div>
                                              <div class="form-group">
                                                  <label for="">Student Date of Birth:</label>
                                                  <input type="text" class="form-control" name="dob" id="" value="{{$students->dob}}" aria-describedby="helpId" placeholder="Enter Student d.o.b or keep it as it is.">
                                              </div>
                                              <div class="form-group">
                                                  <label for="">Student Skills:</label>
                                                  <textarea class="form-control" name="skills" id="" rows="5">{{$students->skills}}</textarea>
                                              </div>

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
