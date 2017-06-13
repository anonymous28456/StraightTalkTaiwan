@extends ('layouts.master')

@section ('content')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">About Us</h1>
        <p>Let me sleep on it.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>


<br>
<div class="container marketing">
    <h2>About</h2>

    @include ('layouts.featurette')
</div>

@endsection
