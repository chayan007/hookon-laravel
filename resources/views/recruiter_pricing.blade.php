<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/pricing.css')}}" rel="stylesheet">

  </head>

  <body>


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Recruiter plans</h1>
      <!--<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>-->
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Freemium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rs 0 <small class="text-muted">/ yr</small></h1>
            <ul class="list-unstyled mt-3 mb-4 ">
              <li>- <strong>Unlimited</strong> Postings</li><br/>
              <li>- <strong>No</strong> recommendation/Email Featuring</li><br/>
              <li>- <strong>No</strong> Social Media Posting </li><br/>
              <li>- <strong>No</strong> Popular search list</li><br/>
              <li>- <strong>No</strong> Home page</li><br/>
              <li>- <strong>No</strong> Company branding on social media</li><br/>
            </ul>

          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rs 4999 <small class="text-muted">/ yr</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>- <strong>Unlimited</strong> Postings</li><br/>
              <li>- Only <strong>once per posting</strong> recommendation/Email featuring</li><br/>
              <li>- Only <strong>once per posting</strong> social media posting </li><br/>
              <li>- <strong>Each posting for 2 days</strong> on popular search list</li><br/>
              <li>- <strong>No</strong> Home page</li><br/>
              <li>- <strong>No</strong> company branding on social media</li><br/>
            </ul>

          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">HR plan</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rs 9999 <small class="text-muted">/ yr</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>- <strong>Unlimited</strong> Postings</li><br/>
              <li>- Only <strong>twice per posting</strong> recommendation/Email featuring</li><br/>
              <li>- Only <strong>once per posting</strong> social media posting </li><br/>
              <li>- <strong>Each posting for 4 days</strong> on popular search list</li><br/>
              <li>- Home page will be <strong>available</strong></li><br/>
              <li>- <strong>2 per yr</strong> of company branding on social media</li><br/>
            </ul>

          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top text-center">
          <a href="http://hookon.in" style="text-decoration:none; color:#D95058; font-weight:bold; font-size: 1.5rem;">Take me back to hookon</a>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
