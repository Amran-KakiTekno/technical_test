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
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" onclick="window.location='{{ url("/") }}'">Question 1 <span class="sr-only">(current)</span></a>
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
                <a class="nav-link" onclick="window.location='{{ url("/q7") }}'">Question 7</a>
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
        $test = 1;
        echo $test;
        @endphp
    </body>
</html>
