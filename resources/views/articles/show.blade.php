<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blogpost</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<nav class="sticky">
    <ul>
        <li><a href="/article" rel="noopener noreferrer">Vorige pagina</a></li>
    </ul>
    <!-- Sidebar -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="https://www.w3schools.com/default.asp" class="w3-bar-item w3-button" target="_blank"
           rel="noopener noreferrer">w3schools</a>
        <a href="https://learn.hz.nl/my/" class="w3-bar-item w3-button" target="_blank"
           rel="noopener noreferrer">learn.hz</a>
        <a href="https://portal.hz.nl/" class="w3-bar-item w3-button" target="_blank"
           rel="noopener noreferrer">portal.hz</a>
    </div>
</nav>
<body>
<div id="content">
    <div class="title">
        <h2>{{$article->title}}</h2>
    </div>

        <img src="/img/img/feedback.jpg" alt="" style="border-radius: 10%;width:30%;height:250px;float:center;margin-top:100px ;margin-left:200px ">
<div style="margin-left:25%">
    <div class="w3-container">
        <div class="main">
            {{$article->body}}


        </div>
    </div>
    <div id="grad1"></div>
</div>
    </div>
</body>

</html>
