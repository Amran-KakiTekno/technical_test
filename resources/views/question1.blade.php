<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: inline;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" onclick="window.location='{{ url('/') }}'"><strong>Question 1</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q2') }}'">Question 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q3') }}'">Question 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q4') }}'">Question 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q5') }}'">Question 5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q6') }}'">Question 6</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q7') }}'">Question 7</a>
        </li>
    </ul>
    </div>
</nav>

<body class="antialiased">
    <br>
    <form action="/" method="post" action="{{ route('q1.form') }}">
        @csrf
        <table class="table">
            <tr>
                <th scope="col">First Name: </th>
                <td><input type="text" name="first_name" id="first_name"></td>
            </tr>
            <tr>
                <th scope="row">SurName: </th>
                <td><input type="text" name="sur_name" id="sur_name"></td>
            </tr>
            <tr>
                <th scope="row">ID Number: </th>
                <td><input type="text" name="id_number" id="id_number"></td>
            </tr>
        </table>
        <input type="submit" name="send" value="Submit">
    </form>

    @php
        echo '<br><br>';
        if (isset($response)) {
            echo 'First Name: ' . $response['first_name'] . '<br>';
            echo 'Sur Name: ' . $response['sur_name'] . '<br>';
            echo 'ID Number: ' . $response['id_number'];
        }
    @endphp
</body>

</html>
