
@extends('layout')

@section('content')

    <div id="grad1"></div>
    <div style="margin-left:25%">
        <div class="w3-container">
            <div class="main">
                <h2>Hallo dit is mijn pagina</h2>
                <p>Jim Rijkse</p>
                <p style="padding-bottom:40px;">HBO ICT</p>

                @foreach ($articles as $article)
                        <h3>
                            <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                        </h3>

                        <p>{{$article->excerpt}}</p>

                @endforeach
                <button onclick="window.location='/article/createarticles';" value="Vul zelf een FAQ toe" />
                <img src="img/img/hz.jpg" alt="" style="width:300px;height:150px;">

            </div>
        </div>
    </div>


    </html>

@endsection
