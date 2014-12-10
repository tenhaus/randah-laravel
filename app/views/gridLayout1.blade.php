<div class="row image-grid">
  @foreach($userImages as $image)
    <div><img src='{{$image->url}}'></img></div>
  @endforeach
  </div>
