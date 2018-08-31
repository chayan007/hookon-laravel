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
                  <th>EMail</th>
                  <th>Logo</th>
                  <th>URL</th>
                  <th>Phone</th>
                  <th>Location</th>
                  <th>Stipend</th>
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
                                      <form action="/admin/edit/course/{{ $internship->id }}" method="POST">
                                          @csrf
                                          //Do the rest
                                          // make a hidden input for post id with value {{ $internship->id }}
                                      </form>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save</button>
                              </div>
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
                  <th>EMail</th>
                  <th>Logo</th>
                  <th>URL</th>
                  <th>Phone</th>
                  <th>Location</th>
                  <th>Stipend</th>
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
