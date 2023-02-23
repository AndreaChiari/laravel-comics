<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')

</head>
<body>   

@include('includes.header')
    {{-- main --}}
    <main>
        @yield('content')
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
        <section></section>
    </main>

    {{-- footer --}}
@include('includes.footer')

</body>
</html>
