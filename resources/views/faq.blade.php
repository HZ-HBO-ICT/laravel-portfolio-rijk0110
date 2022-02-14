
@extends('layout')

@section('content')
<body>
  <div style="margin-left:25%">
    <div class="w3-container">
      <div class="main">
        <h2>Dit zijn de FAQ</h2>
        <p>
        <details>
          <summary>1. Hoe print je een document hier op de HZ?</summary>
          <p>in de printruimtes met je HZ-pas</p>
        </details><br>
        <details>
          <summary>2. Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?</summary>
          <p>Bij de DOC-Shop</p>
        </details><br>
        <details>
          <summary>3. Wat moet je doen als je ziek bent of symptomen van het corona virus?</summary>
          <p>Elio een berichtje sturen en las het mogelijk is de les online bijwonen</p>
        </details><br>
        <details>
          <summary>4. Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?</summary>
          <p>Via de Selfservice Portal op de HZ Portal is er makkelijk een projectruimte te boeken</p>
        </details><br>
        <details>
          <summary>5. Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?</summary>
          <p>Met je HZ pas gaat de slagboom open en dicht</p>
        </details>
        </p>
        <img src="img/img/hz.jpg" alt="" style="width:300px;height:150px;">
      </div>
        @foreach($posts as $post)
            <details class="bottom">
                <summary>{{ $post->question }}</summary>
                <p>
                    {{$post->answer}}
                </p>
                {{--TODO: check if there is a link--}}
                <p>
                    <a href="{{ $post->link }}">{{$post->link}}</a>
                </p>
            </details>
            @endforeach
        </details>
    </div>
    <div id="grad1"></div>
  </div>
</body>
</html>
@endsection
