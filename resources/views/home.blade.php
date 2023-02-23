@extends('layouts.main')

@section('content')

    <div class="jumbotron">
        <button class="jumbo-button"> CURRENT SERIES</button>
    </div>
    <div class="card-container">
        <section class="content">
          @foreach($comics as $comic)
            <div class="card">
                <img :src="{{$comic['thumb']}}" alt="card.type">
                <h3>{{ $comic['title']}}</h3>
            </div>
          @endforeach
            <button class="button-cards"> LOAD MORE </button>
        </section>
    </div>
@endsection