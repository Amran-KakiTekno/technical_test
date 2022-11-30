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
            <a class="nav-link" onclick="window.location='{{ url('/') }}'">Question 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q2') }}'">Question 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q3') }}'"><strong>Question 3</strong></a>
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
</nav>

<body class="antialiased">
    <br><br>
    @php
        echo 'Name start with L or l, and longer than 5 characters: ' . '<br>';
        $person_array = ['Leanna', 'derek', 'Lisa', 'John', 'lancelot', 'Michael', 'norman', 'Lawrance of Arabia'];
        foreach ($person_array as $name) {
            if (($name[0] == 'L' || $name[0] == 'l') && strlen($name) > 5) {
                echo $name . '<br>';
            }
        }
    @endphp
</body>

</html>
