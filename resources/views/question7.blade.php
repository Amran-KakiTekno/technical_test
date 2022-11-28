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
              <a class="nav-link" onclick="window.location='{{ url("/q4") }}'">Question 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q5") }}'">Question 5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q6") }}'">Question 6</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location='{{ url("/q7") }}'">Question 7 <span class="sr-only">(current)</a>
            </li>
          </ul>
        </div>
      </nav>
    <body class="antialiased">
      <form action="/" method="post" action="{{ route('q1.form') }}">
          @csrf
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">First Name: </th>
                      <td><input type="text" name="first_name" id="first_name"></td>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">SurName: </th>
                      <td><input type="text" name="c" id="first_name"></td>
                  </tr>
                  <tr>
                      <th scope="row">ID Number: </th>
                      <td><input type="text" name="id_number" id="id_number"></td>
                  </tr>
                  <tr>
                      <td><input type="submit" name="send" value="Submit"></td>
                  </tr>
              </tbody>
          </table>
      </form>
        @php
        $test = $results->sortBy('total_number_of_comments');
        $test = $test->toArray();
        foreach ($test as $test2) {
          foreach ($test2 as $key => $value) {
            print_r($key . " : " . $value);
            print_r("<br>");
          }
        }
        // print_r ($test);
        @endphp
    </body>
</html>
