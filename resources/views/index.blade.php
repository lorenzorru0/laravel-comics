@extends('layout.base')

@section('mainContent')
    <section class="containerSeries">
        <div class="container">
            <div>
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="seriesContainer">
                @foreach ($comics as $index => $comic)
                    <a href="{{route('comic', ['id' => $index])}}">
                        <div class="series">
                            <img src="{{$comic['thumb']}}" :alt="{{$comic['title']}}">
                            <p>{{$comic['title']}}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div>
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection