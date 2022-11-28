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
              <a class="nav-link" onclick="window.location='{{ url("/q3") }}'">Question 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q4") }}'">Question 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q5") }}'">Question 5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q6") }}'">Question 6 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q7") }}'">Question 7</a>
            </li>
          </ul>
        </div>
      </nav>
    <body class="antialiased">
        @php
          $indexed_array = array('fruit'=>'apple', 'select_name'=>'john', 'select_animal'=>'cat', 'number'=>'23', 'select_car'=>'toyota', 'plant'=>'rose', 'color'=>'blue', 'select_other'=>': this is awesome');
          foreach ($indexed_array as $key => $value) {
            if (str_contains($key, 'select_')) {
              unset($indexed_array[$key]);
            }
          }
          print_r($indexed_array);
          echo "<br><br>";
          foreach ($indexed_array as $key => $value) {
            echo $key . " = " . $value . " " . date("Y-m-d h:i:s") . "<br>";
          }
        @endphp
    </body>
</html>
