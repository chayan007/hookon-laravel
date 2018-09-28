@extends('admin.layout.adminbase')
@section('page_name','Courses Database')
@section('page_header','Courses')
@section('page_desc','See details of all Courses registered')
@section('page_bread','Internships')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Courses Posted !</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Company</th>
                  <th>Instructor</th>
                  <th>Location</th>
                  <th>Url</th>
                  <th>Photo_url</th>
                  <th>Category</th>
                  <th>Syllabus</th>
                  <th>About</th>
                  <th>Vip</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody id="dataset">
                    @foreach ($courses as $courses)
                <tr>
                  <td>{{ $courses->id }}</td>
                  <td>{{ $courses->company }}</td>
                  <td>{{ $courses->instructor }}</td>
                  <td>{{ $courses->location }}</td>
                  <td><img src="{{ $courses->photo_url }}" height="30px" width="40px"></img></td>
                  <td>{{ $courses->url }}</td>
                  <td>{{ $course->category }}</td>
                  <td>{{ $course->syllabus }}</td>
                  <td>{{ $course->about }}</td>
                  <td>{{ $course->vip }}</td>


                  <td>
                  <!-- Button trigger modal -->
                      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId{{ $courses->id }}">
                    Edit
                  </button></td>
                  <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                  <!-- Modal -->
                  <div class="modal fade" id="modelId{{ $courses->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                                  <h4 class="modal-title" id="modelTitleId">Edit Course</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="container-fluid">
                                    <form action="/courses/edit/{{$courses->id}}" method="post">
                                      @csrf
                                      <div class="form-group">
                                      <label for="">Company</label>
                                      <input type="text" class="form-control" value="{{$courses->company}}" name="company" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Instructor</label>
                                      <input type="text" class="form-control" value ="{{$courses->instructor}}" name="instructor" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Location</label>
                                      <input type="email" class="form-control" value="{{$courses->location}}" name="location" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>

                                      <div class="form-group">
                                      <label for="">Url</label>
                                      <input type="text" class="form-control" value="{{$courses->url}}" name="url" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Category</label>
                                      <input type="text" class="form-control" value="{{$courses->category}}" name="category" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                    </div>
                                      <div class="form-group">
                                      <label for="">Syllabus</label>
                                      <textarea class="form-control" name="syllabus" id="" rows="8">{{$courses->syllabus}}</textarea>
                                      </div>
                                      <div class="form-group">
                                      <label for="">About</label>
                                      <textarea class="form-control" name="about" id="" rows="8">{{$courses->about}}</textarea>
                                      </div>
                                      <div class="form-group">
                                      <label for="">Vip</label>
                                      <input type="number" class="form-control" name="vip" value="{{$$courses->vip}}" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
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

                  <script>
                      $('#exampleModal').on('show.bs.modal', event => {
                          var button = $(event.relatedTarget);
                          var modal = $(this);
                          // Use above variables to manipulate the DOM

                      });
                  </script>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
               <tr>
                 <th>Serial No.</th>
                 <th>Company</th>
                 <th>Instructor</th>
                 <th>Location</th>
                 <th>Url</th>
                 <th>Photo_url</th>
                 <th>Category</th>
                 <th>Syllabus</th>
                 <th>About</th>
                 <th>Vip</th>
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
