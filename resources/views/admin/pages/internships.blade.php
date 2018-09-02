@extends('admin.layout.adminbase')
@section('page_name','Internships Database')
@section('page_header','Internshipss')
@section('page_desc','See details of all Internships registered')
@section('page_bread','Internships')
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
                  <th>Email</th>
                  <th>Logo</th>
                  <th>URL</th>
                  <th>Phone</th>
                  <th>Location</th>
                  <th>Stipend</th>
                  <th>Start Date</th>
                  <th>Perks</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody id="dataset">
                    @foreach ($internships as $internship)
                <tr>
                  <td>{{ $internship->id }}</td>
                  <td>{{ $internship->company }}</td>
                  <td>{{ $internship->profile }}</td>
                  <td>{{ $internship->email }}</td>
                  <td><img src="{{ $internship->logo_url }}" height="30px" width="40px"></img></td>
                  <td>{{ $internship->url }}</td>
                  <td>{{ $internship->phone }}</td>
                  <td>{{ $internship->location }}</td>
                  <td>{{ $internship->stipend }}</td>
                  <td>{{ $internship->start_date }}</td>
                  <td>{{ $internship->perks}}</td>

                  <td>
                  <!-- Button trigger modal -->
                      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId{{ $internship->id }}">
                    Edit
                  </button></td>
                  <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                  <!-- Modal -->
                  <div class="modal fade" id="modelId{{ $internship->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                    <form action="/internships/edit/{{$internship->id}}" method="post">
                                      @csrf
                                      <div class="form-group">
                                      <label for="">Company</label>
                                      <input type="text" class="form-control" value="{{$internship->company}}" name="company" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Profile</label>
                                      <input type="text" class="form-control" value ="{{$internship->profile}}" name="profile" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Email</label>
                                      <input type="email" class="form-control" value="{{$internship->email}}" name="email" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">URL</label>
                                      <input type="date" class="form-control" value="{{$internship->url}}" name="url" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Phone</label>
                                      <input type="text" class="form-control" value="{{$internship->phone}}" name="phone" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Location</label>
                                      <input type="text" class="form-control" value="{{$internship->location}}" name="location" id="" aria-describedby="helpId" placeholder="{{Auth::user()->name}}">
                                    </div>
                                      <div class="form-group">
                                      <label for="">Start Date</label>
                                      <input type="date" class="form-control" name="start_date" value="{{$internship->start_date}}" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Stipend</label>
                                      <input type="number" class="form-control" value="{{$internship->stipend}}" name="stipend" id="" aria-describedby="helpId" placeholder="Enter the Monthly stipend">
                                      </div>
                                      <div class="form-group">
                                      <label for="">Perks</label>
                                      <input type="number" class="form-control" name="perks" value="{{$internship->perks}}" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
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
                  <th>Profile</th>
                  <th>Email</th>
                  <th>Logo</th>
                  <th>URL</th>
                  <th>Phone</th>
                  <th>Location</th>
                  <th>Stipend</th>
                  <th>Start Date</th>
                  <th>Perks</th>
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
