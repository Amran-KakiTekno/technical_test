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
            <a class="nav-link" onclick="window.location='{{ url('/q4') }}'">Question 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q5') }}'">Question 5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q6') }}'">Question 6</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="window.location='{{ url('/q7') }}'"><strong>Question 7</strong></a>
        </li>
    </ul>
    </div>
</nav>

<body class="antialiased">
  <br><br>
    <form action="/q7" method="post" action="{{ route('q7.search') }}">
        @csrf
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Post Id :</th>
                    <td><input type="text" name="post_id" id="post_id"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Post Title: </th>
                    <td><input type="text" name="post_title" id="post_title"></td>
                </tr>
                <tr>
                    <th scope="row">Post Body: </th>
                    <td><input type="text" name="post_body" id="post_body"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="send" value="Submit"></td>
                </tr>
            </tbody>
        </table>
        <br><br>
    </form>
    @php
        // if (isset($test)) {
        //   print_r($test);
        // }
        if (isset($all_comments)) {
            foreach ($all_comments as $comments) {
                foreach ($comments as $key => $value) {
                    print_r($key . ' : ' . $value);
                    print_r('<br>');
                }
            }
        } else {
            $sortedResults = $results->sortBy('total_number_of_comments');
            $sortedResults = $sortedResults->toArray();
            foreach ($sortedResults as $sortedResult) {
                foreach ($sortedResult as $key => $value) {
                    print_r($key . ' : ' . $value);
                    print_r('<br>');
                }
            }
        }
    @endphp
</body>

</html>
