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
            <a class="nav-link" onclick="window.location='{{ url('/q3') }}'">Question 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q4') }}'">Question 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q5') }}'"><strong>Question 5</strong></a>
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
    <br><br>
    @php
        echo 'Output: ';
        $person_array = ['Leanna', 'derek', 'Lisa', 'John', 'Lancelot', 'Michael', 'Norman', 'Lawrance of Arabia'];
        $output = [];
        $letters = [];
        $i = 0;
        foreach ($person_array as $person) {
            $letter = str_split($person, 1);
            for ($i = 0; $i < count($letter); $i++) {
                array_push($letters, $letter[$i]);
            }
        }
        $output = array_unique($letters);
        $output = implode('', $output);
        $output = str_replace(' ', '', $output);
        print_r($output);
    @endphp
</body>

</html>
