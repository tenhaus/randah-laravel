<div class="row image-grid">
  @foreach($userImages as $image)
    <div>
      <!-- <div class='caption'>
        <p class="captionTitle">{{$image->name}}</p>
        <p class="captionBody">{{$image->description}}</p>
      </div> -->
      <a class="grid-image-link" href="{{$image->url}}">
        <img class="grid-image" src='{{$image->url}}' alt="{{$image->name}}"></img>
      </a>
    </div>
  @endforeach
  </div>
