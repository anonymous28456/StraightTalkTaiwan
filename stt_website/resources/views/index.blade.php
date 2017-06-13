@extends ('layouts.master')

@section ('content')

@include ('layouts.carousel')

<div class="container marketing">
    @include ('layouts.heading')
    @include ('layouts.featurette')
</div>

@endsection
