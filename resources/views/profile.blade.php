
@extends('layout')

@section('content')

  <div class="w3-container">
    <div class="center">
      <div class="main">
        <h2>Profiel pagina</h2>
        <p>Jim Rijkse
          HBO ICT<br>
          <img src="img/img/hz.jpg" alt="" style="width:175px;height:100px;">
        <main>
          <table>
            <tr>
              <th>Naam</th>
              <th>Jim Rijkse</th>
            </tr>
            <tr>
              <td>Leeftijd</td>
              <td>18 Jaar</td>
            </tr>
            <tr>
              <td>Woonplaats+Woonsituatie</td>
              <td>Middelburg, Bij mijn ouders</td>
            </tr>
            <tr>
              <td>Vooropleiding+Profiel</td>
              <td>HAVO, EM+informatica</td>
            </tr>
          </table>
          <h5>Mijn hobby's zijn:</h5>
        </main>
        <article>
          <h6>-Voetbal<br>-Gamen<br>-Werken </h6>
        </article>
        </p>
        <p>
          <img src="img/img/frenkie.jpg" alt="" style="border-radius: 10%;width:350px;height:215px;">
          <img src="img/img/csgo.jpg" alt="" style="border-radius: 10%;width:300px;height:215px;">
          <img src="img/img/bier.jpg" alt="" style="border-radius: 10%;width:350px;height:215px;">
        </p>
        <div id="grad1"></div>

        <iframe src="https://trinket.io/python/d8654a3d24" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>


</html>
@endsection
