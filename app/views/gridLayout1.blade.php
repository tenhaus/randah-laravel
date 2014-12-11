<div class="row image-grid">
  @foreach($userImages as $image)
    <div>
      <!-- <div class='caption'>
        <p class="captionTitle">{{$image->name}}</p>
        <p class="captionBody">{{$image->description}}</p>
      </div> -->
      <img class="grid-image" src='{{$image->url}}'></img>
    </div>
  @endforeach
  </div>
