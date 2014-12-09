<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>The Randah Online Gallery</title>

    {{ HTML::style('bower/bootstrap/dist/css/bootstrap.min.css'); }}
    {{ HTML::style('css/main.css'); }}


    {{ HTML::script('bower/jquery/dist/jquery.min.js') }}
    {{ HTML::script('bower/jquery-backstretch/jquery.backstretch.min.js') }}
    <!-- {{ HTML::script('bower/masonry/dist/masonry.pkgd.min.js') }} -->
    {{ HTML::script('bower/packery/dist/packery.pkgd.min.js') }}
    {{ HTML::script('bower/imagesloaded/imagesloaded.pkgd.min.js') }}

    {{ HTML::script('js/main.js') }}

    <style>
      @import url(//fonts.googleapis.com/css?family=Oswald:300,400,700);
    </style>

  </head>

  <body>

    <ul id="topnav">
      <li><a href="#recent">recent</a></li>
      <li>popular</li>
      <li>you</li>
    </ul>

    <div class="container-fluid">

      <div class="row header-container">
        <div>
          <h1>The Randah</h1>
          <h2>Online Art Gallery</h2>
        </div>
      </div>

      <div class="row section-header" name="recent">
        <h2>Recent</h2>
        <h3>This is what's new</h3>
      </div>

      <div class="row">
        <div id="recent-images" class="image-grid">
        </div>
      </div>

      <div class="row section-header" name="popular">
        <h2>Popular</h2>
        <h3>This is what's getting the love</h3>
      </div>

      <div class="row">
        <div id="popular-images" class="image-grid">
        </div>
      </div>

    </div>
  </body>

</html>
