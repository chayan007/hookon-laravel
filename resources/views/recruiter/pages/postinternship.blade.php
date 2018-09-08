@extends('recruiter.layout.recruiterbase')
@section('page_name','Recruiter Post Internship')
@section('page_header','Post Internship')
@section('page_desc','Post an Internship')
@section('page_bread','Post Internship')
@section('content')
 <div class="box box-solid box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Internship Details</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <form method="POST" action="/recruiter/post_internship" enctype="multipart/form-data">
                @csrf

                <input type="hidden" class="form-control" name="user_id" id="inputName" value="{{Auth::user()->id}}">

                <div class="form-group">
                <label for="">Company Name&nbsp;<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="company" id="" aria-describedby="helpId" placeholder="Enter Company">
                <small id="helpId" class="form-text text-muted">Just to know where interns will work</small>
                </div>
                <div class="form-group">
                <label for="">Company Logo&nbsp;<span style="color:red;">*</span></label>
                <input type="file" class="form-control-file" name="photo" id="" placeholder="Enter Comapny Logo" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Just so we could check your company</small>
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" readonly aria-describedby="helpId" value="{{Auth::user()->email}}">
                <small id="helpId" class="form-text text-muted">Just your eMail ID</small>
                </div>
                <div class="form-group">
                  <label for="">Profile of Work&nbsp;<span style="color:red;">*</span></label>
                  <select class="form-control" name="profile" id="">

                    @foreach($categories as $category)
                      <option>{{$category->category_name}}</option>
                   @endforeach

                  </select>
                  <small id="helpId" class="form-text text-muted">Just to let Interns know about it</small>
                </div>
                <div class="form-group">
                <label for="">Company Website&nbsp;<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="url" id="" aria-describedby="helpId" placeholder="Wesbite of Company">
                <small id="helpId" class="form-text text-muted">Just so interns could check you out</small>
                </div>
                <div class="form-group">
                <label for="">Mobile&nbsp;<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter your Mobile no.">
                <small id="helpId" class="form-text text-muted">We will text you</small>
                </div>
                <div class="form-group">
                <label for="">Skills&nbsp;<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="skills" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
                <small id="helpId" class="form-text text-muted">Just to see where you work</small>
                </div>
                <div class="form-group">
                <label for="">Description&nbsp;<span style="color:red;">*</span></label>
                <textarea class="form-control" name="desc" id="" rows="5" placeholder="Description about Intern's Responsibilities"></textarea>
                <small id="helpId" class="form-text text-muted">Just to know what Interns will be working on</small>
                </div>
                <div class="form-group">
                <label for="">About Company&nbsp;<span style="color:red;">*</span></label>
                <textarea class="form-control" name="about" id="" rows="5" placeholder="Write few words about your Company"></textarea>
                <small id="helpId" class="form-text text-muted">Just to let Interns know about Company background</small>
                </div>
              <div class="form-group">
                <label for="">No. of Interns required&nbsp;<span style="color:red;">*</span></label>
                <input type="number" class="form-control" name="input" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Mention no. of Interns you require.</small>
              </div>
                <div class="form-group">
                  <label for="">Location&nbsp;<span style="color:red;">*</span></label>
                  <select class="form-control" name="location" id="">

                    @foreach($locations as $location)
                      <option>{{$location->location_name}}</option>
                   @endforeach

                  </select>
                  <small id="helpId" class="form-text text-muted">Just to let Interns know about it</small>
                </div>
                <div class="form-group">
                <label for="">Duration&nbsp;<span style="color:red;">*</span></label>
                <input type="number" class="form-control" name="duration" id="" aria-describedby="helpId" placeholder="Enter the duration (in months)">
                <small id="helpId" class="form-text text-muted">Just to let interns know about it</small>
                </div>
                <div class="form-group">
                <label for="">Start Date&nbsp;<span style="color:red;">*</span></label>
                <input type="date" class="form-control" name="start_date" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
                <small id="helpId" class="form-text text-muted">Just to make Interns know when to start the work</small>
                </div>
                <div class="form-group">
                <label for="">Stipend&nbsp;<span style="color:red;">*</span></label>
                <input type="number" class="form-control" name="stipend" id="" aria-describedby="helpId" placeholder="Enter the Monthly stipend">
                <small id="helpId" class="form-text text-muted">Just to let Interns know about the fruit</small>
                </div>
                <div class="form-group">
                <label for="">Perks&nbsp;<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="perks" id="" aria-describedby="helpId" placeholder="Enter the skills (separated by comma)">
                <small id="helpId" class="form-text text-muted">Just to let Interns know about the fruit</small>
                </div>
                <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block"> Submit </button>
            </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
@stop
