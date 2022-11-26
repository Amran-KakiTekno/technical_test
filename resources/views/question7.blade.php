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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First Name: </th>
                <td><input type="text" id="fname"></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Last Name: </th>
                <td><input type="text" id="lname"></td>
            </tr>
            <tr>
                <th scope="row">ID Number: </th>
                <td><input type="text" id="id"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Submit</button></td>
            </tr>
        </tbody>
    </table>
    <button onclick="window.location='{{ url("/q2") }}'">Q2</button>
        @php
        $test = 1;
        echo $test;
        @endphp
    </body>
</html>
