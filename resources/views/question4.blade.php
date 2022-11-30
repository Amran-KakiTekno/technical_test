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
            <a class="nav-link" onclick="window.location='{{ url('/') }}'">Question 1</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q2') }}'">Question 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q3') }}'">Question 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q4') }}'"><strong>Question 4</strong></a>
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
        function compare ($a, $b) {
            if ($a > $b) {
                return true;
            } else {
                return false;
            }
        }
        function swapPlace ($arr, $a, $b) {
            $t = $arr[$b];
            $arr[$b] = $arr[$a];
            $arr[$a] = $t;
            return $arr;
        }
        function sorting ($arr) {
            $x = 0;
            $y = 1;
            $length = strlen($arr);
            for ($x=0; $x < $length; $x++) { 
                for ($y=0; $y < $length; $y++) { 
                    // echo '<br> x:' . $x . ' y:' . $y . '<br>';
                    $bigger = compare($arr[$x], $arr[$y]);
                    // echo $bigger;
                    if ($bigger) {
                        $arr = swapPlace($arr, $x, $y);
                    }
                }
            }
            return $arr;
        }
        $id = '8910295209871';
        
        print_r ('Unsorted Id is: ' . $id);
        $sortedId = sorting($id);
        print_r ('<br>Sorted Id is: ' . $sortedId);
    @endphp
</body>

</html>
