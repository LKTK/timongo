<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Timongo RPg is the best Web based RPG game you are going to find. If you like old fashioned browser RPG. Join us.">
    <meta name="author" content="Hudson Pereira">
    <meta name="google-site-verification" content="MBHwyhHzsE2Z2LjDNulm6opKNuRgtYlugEZUo5GdHVQ" />

    <title>Timongo RPG - Web Based</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="{{ url('/login') }}">Sign In</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Timongo RPG</h3>
      </div>

      <div class="jumbotron">
        <h1>Embrace yourselves</h1>
        <p class="lead">Join the army! Build up your character, join a guild, make some trading around the city. In a world full of magic and mysterious creatures, You are the hero.</p>
        <p><a class="btn btn-lg btn-primary" href="{{ url('/login') }}" role="button"> <i class="fa fa-facebook-official" aria-hidden="true"></i> Sign up today</a></p>
      </div>

      <div class="row marketing">
        <div class="col-md-6">
          <h2>Latest News</h2>

          <hr />

          <h4>Beta version is available!</h4>
          <p>To be a beta tester is to strongly support the game. If you're a beta tester, you'll get a badge on your character that will stand you out from anothers.</p>

          <h4>Enemies are coming</h4>
          <p>Our backs are agains the wall, but this is when we fight harder. Prepare to face the first raid of an age of war.</p>

          <h4>Designers. We need you.</h4>
          <p>Are you an experienced designer? Wanna to contribute? We need you.</p>
        </div>

        <div class="col-md-6">
          <h2>Realm's Elite</h2>

          <hr />

          @foreach($elite as $user)
            <h4>{{ $user->nickname }}, {{ $user->getProfessionName() }}</h4>
            <p><strong>{{ $user->nickname }}</strong> is level {{ $user->level }} {{ $user->level > 1 ? 'already' : '' }}.</p>
          @endforeach
        </div>
      </div>

      <footer class="footer">
        <div class="col-xs-6 text-left">
          <a href="mailto:hudson.byte@gmail.com">Send me feedback</a>
        </div>

        <div class="col-xs-6 text-right">
          <a href="/privacy" target="_blank">Privacy Policy</a>
        </div>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
