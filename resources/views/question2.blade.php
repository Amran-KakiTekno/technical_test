<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display:inline;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" onclick="window.location='{{ url("/") }}'">Question 1</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q2") }}'"><strong>Question 2</strong></a>
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
              <a class="nav-link" onclick="window.location='{{ url("/q6") }}'">Question 6</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q7") }}'">Question 7</a>
            </li>
          </ul>
        </div>
      </nav>
    <body class="antialiased">
      <br><br>
        @php
        $this_array = array(14,23,264,654,4,34,34);
        print_r($this_array);
        echo "<br>";
        echo "Sum of the numbers in the array is: ";
        $sum = 0;
        foreach ($this_array as $num) {
            $sum += $num;
        }
        echo $sum;
        @endphp
    </body>
</html>
