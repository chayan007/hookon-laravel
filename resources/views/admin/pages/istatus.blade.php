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
                <tr>
                  <td>1</td>
                  <td>Satyam Infotech</td>
                  <td>Web Developer</td>
                  <td>sonicxxx7@gmail.com</td>
                  <td><img src="{{ asset('img/logo.png') }}" height="30px" width="40px"></img></td>
                  <td>satyam.info</td>
                  <td>9477446558</td>
                  <td>Kolkata</td>
                  <td>12000</td>
                  <td>
                  <!-- Button trigger modal -->
                      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId">
                    Edit
                  </button></td>
                  <td> <button type="button" class="btn btn-danger">Delete</button> </td>
                  <!-- Modal -->
                  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                      Add rows here
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
