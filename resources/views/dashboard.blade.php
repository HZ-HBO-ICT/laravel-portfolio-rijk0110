<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>dashboard</title>
</head>
<nav class="sticky">
  <ul>
    <li><a href="index" rel="noopener noreferrer">Home</a></li>
    <li><a href="profile" rel="noopener noreferrer">Profiel</a></li>
    <li><a href="blog" rel="noopener noreferrer">Blog</a></li>
    <li><a href="faq" rel="noopener noreferrer">FAQ</a></li>
    <li><a class="active" href="dashboard" rel="noopener noreferrer">Dashboard</a></li>
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
  <div style="margin-left:25%">
    <div class="w3-container">
      <div class="main">
        <h2>Dashboard pagina</h2>
        <p>Jim Rijkse</p>
        <p>HBO ICT</p>
        <img src="img/img/hz.jpg" alt="" style="width:400px;height:150px;">
        <h2>Alle toetsen/cursussen 1e jaar</h2>
        <table>
          <tr>
            <th>Kwartaal</th>
            <th>Course</th>
            <th>EC's</th>
            <th>Exam</th>
            <th>Cijfer</th>
            <th>Aantal behaalde punten</th>
          </tr>
          <tr>
            <td rowspan="3">1</td>
            <td>PCO</td>
            <td>2.5</td>
            <td>Assessment Exam</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>CSB</td>
            <td>5.0</td>
            <td>Written exam</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>PB</td>
            <td>5.0</td>
            <td>Case Study exam</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td rowspan="4">2</td>
            <td rowspan="2">OOP</td>
            <td rowspan="2">10</td>
            <td>-.-</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>-.-</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td rowspan="2">PPDE</td>
            <td rowspan="2">12.5</td>
            <td>-.-</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>-.-</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td rowspan="4">3</td>
            <td>FD</td>
            <td>5.0</td>
            <td>Case Study</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7.5</td>
            <td>Project</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>Assesment</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>Report</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">FP 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>Project</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td>Assessment</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
          <tr>
            <td></td>
            <td>Totaal behaalde punten</td>
            <td>60.0</td>
            <td>-.-</td>
            <td>-.-</td>
            <td>-.-</td>
          </tr>
        </table>
        <p>Behaalde Studiepunten: <progress value="20" max="60" /></p>
        <div id="grad1"></div>
      </div>
    </div>
  </div>
</body>
</html>
