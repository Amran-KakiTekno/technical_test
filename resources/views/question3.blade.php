<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" onclick="window.location='{{ url("/") }}'">Question 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q2") }}'">Question 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q3") }}'">Question 3 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q4") }}'">Question 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q5") }}'">Question 5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q6") }}'">Question 6</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q7") }}'">Question 7</a>
            </li>
          </ul>
        </div>
      </nav>
    <body class="antialiased">
        @php
        $person_array = array('Leanna', 'derek', 'Lisa', 'John', 'lancelot', 'Michael', 'norman', 'Lawrance of Arabia');
        foreach ($person_array as $name) {
          if ($name[0] == 'L' || $name[0] == 'l') {
            echo $name . "<br>";
          }
        }
        @endphp
    </body>
</html>
