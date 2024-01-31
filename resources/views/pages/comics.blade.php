@extends('layouts.app')

@section('main-content')
<section class="comics">
    <div class="comics-container">

        @foreach ($comics as $comic)
            <article>
                <img src="{{ $comic['thumb'] }}" alt="">
                <p>{{ $comic['series'] }}</p>
            </article>
        @endforeach

    </div>
</section>
@endsection