
@extends('layout')

@section('content')
<body>
  <div style="margin-left:25%">
    <div class="w3-container">
      <div class="main">
        <h2>Dit zijn de FAQ</h2>

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
        <button onclick="window.location='/faq/create';" value="Vul zelf een FAQ toe" />
        <img src="img/img/hz.jpg" alt="" style="width:300px;height:150px;">
    </div>
    <div id="grad1"></div>
  </div>
</body>
</html>
@endsection
