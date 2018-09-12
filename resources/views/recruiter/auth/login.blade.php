<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recruiter Login | Hookon Internships</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid" style=" padding:0 !important;margin: 0 !important;">
    <div class="col-md-12" style=" height: 100vh;">
       <div class="row">

            <div class="col-12 col-md-6 mx-auto" style=" height: 100vh;">

                <form method="POST" action="{{ url('/recruiter/login') }}">
                    @csrf
                   <h1 class="display-6 text-center font-weight-bold mt-5">Recruiter sign in</h1><br/>
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" >Password</label>
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <br/>
                        <input type="submit" class="btn btn-primary col-12" value="Sign in" name="submit">
                    </div>
                </form>

                <!--<div class="col-md-8 ml-auto mr-auto">
                    <br/>
                    <p class="text-center"><a href="#" class="">Forget Password</a></p>

                      <p class="small text-center" >Or, sign in quickly using other web services </p>
                      <div class="row">
                            <div class="icon-wrapper col-4" id="google-icon"><a href="google_redirect" style="text-decoration:none;"><i class="fab fa-google ml-auto mr-auto" style="display:block;color: #3cba54;"></i> </div>
                            <div class="col-4"><a href="fb_redirect" style="text-decoration:none;"><i class="fab fa-facebook ml-auto mr-auto" style="display:block;color: #3B5998;"></i></a></div>
                            <div class="col-4"><a href="linkedin_redirect" style="text-decoration:none;"><i class="fab fa-linkedin ml-auto mr-auto" style="display:block;color: #0077B5;"></i></a></div>
                      </div>
                        <br/>

                </div>-->
            </div>
        </div>
    </div>

</div>
<!-- multistep form
<form id="msform">
      <!-- fieldsets
      <fieldset>
        <h2 class="fs-title">Create your account</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="Password" />
        <input type="password" name="cpass" placeholder="Confirm Password" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>
      <fieldset>
        <h2 class="fs-title">Social Profiles</h2>
        <h3 class="fs-subtitle">Your presence on the social network</h3>
        <input type="text" name="twitter" placeholder="Twitter" />
        <input type="text" name="facebook" placeholder="Facebook" />
        <input type="text" name="gplus" placeholder="Google Plus" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>
      <fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <input type="text" name="phone" placeholder="Phone" />
        <textarea name="address" placeholder="Address"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
      </fieldset>
</form>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>
