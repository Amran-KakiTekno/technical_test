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
              <a class="nav-link" onclick="window.location='{{ url("/") }}'">Question 1</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q2") }}'">Question 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q3") }}'">Question 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q4") }}'">Question 4 <span class="sr-only">(current)</a>
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
        public function compare($a, $b){
          if ($a > $b) {
            return +1;
          } elseif ($a < $b) {
            return -1;
          } else {
            return 0;
          }
        }
        $sortedid = [];
        $temp = 0;
        $id = "8910295209871";
        $id = str_split($id);
        print_r ($id);
        echo '<br>';
        foreach ($id as $num) {
          for ($i=0; $i < count($id); $i++) { 
            if ($num > $id[$i]) {
              $temp = $num;
            }
            echo $temp;
          }
        }
        @endphp
    </body>
</html>
