
<!DOCTYPE html>
<html lang="en">
 <head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>

 <body>
 <nav class="sticky">
     <ul>
         <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/" rel="noopener noreferrer">Home</a></li>
         <li class="{{ Request::path() === 'profile' ? 'active' : '' }}"><a href="profile" rel="noopener noreferrer">Profiel</a></li>
         <li class="{{ Request::path() === 'blog' ? 'active' : '' }}"><a href="blog" rel="noopener noreferrer">Blog</a></li>
         <li class="{{ Request::path() === 'faq' ? 'active' : '' }}"><a href="faq" rel="noopener noreferrer">FAQ</a></li>
         <li class="{{ Request::path() === 'dashboard' ? 'active' : '' }}"><a href="dashboard" rel="noopener noreferrer">Dashboard</a></li>
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
 @yield('content')
 </body>
 </html>
