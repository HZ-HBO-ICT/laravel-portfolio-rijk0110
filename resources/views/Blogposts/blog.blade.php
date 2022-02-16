
@extends('layout')

@section('content')
  <div style="margin-left:25%">
    <div class="w3-container">
      <div class="main">
        <h2>Dit is mijn blog post</h2>
        <div style="width: 100%;">
          <div style="width: 50%; float: left;">
            <p>Eerste blog: <a href="blogpostsec" rel="noopener noreferrer">Blogpost</a><br> Over de discussie of
              er een atricle in een section moet of andersom</p>
            <img src="img/img/robot.jpg" alt="" style="border-radius: 10%;height:200px; ">
          </div>
          <div style="margin-left: 50%;">
            <p><br>Tweede blog: <a href="blogpostsaf" rel="noopener noreferrer">Safari</a><br> Over de company
              safari</p>
            <img src="img/img/safari.jpg" alt="" style="border-radius: 10%;height:200px; ">
          </div>
        </div>

        <div style="width: 100%;">
          <div style="width: 50%; float: left;">
            <p>Derde blog: <a href="blogpostfeed" rel="noopener noreferrer">Feedback</a><br> Over de feedback die ik heb gekregen op mij </p>
            <img src="img/img/feedback.jpg" alt="" style="border-radius: 10%;height:200px; ">
          </div>
          <div style="margin-left: 50%;">
            <p><br>Vierde blog: <a href="blogpostswot" rel="noopener noreferrer">SWOT</a><br> Over mijn SWOT analyse</p>
            <img src="img/img/SWOT.jpg" alt="" style="border-radius: 10%;height:200px; ">
          </div>
        </div>

      </div>
    </div>
    <div id="grad1"></div>
  </div>
</body>

</html>
@endsection
