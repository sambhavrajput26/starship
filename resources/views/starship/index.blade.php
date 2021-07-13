    <link href="/Css/style.css" rel="stylesheet">

    <html>
    <body>
      <div class="title animated fadeInDown" id="title">
        STAR WARS
      </div>
      <div class="container">
        <ul class="blog-post columns-2">
          @if(!empty($results)) @foreach($results as $loppingResults)
          <li>
              <img src="{{ $loppingResults->image }}" />
              <h3>{{ $loppingResults->name }}</h3>
              <a href="/starships/{{ $loppingResults->id }}" class="button">Read More</a>
          </li>
          @endforeach
          @else
          <p>No Results Found.</p>
          @endif
        </ul>
      </div>
    </body>


    <footer>
    Completed by Sambhav Rajput
    </footer>

    </html>