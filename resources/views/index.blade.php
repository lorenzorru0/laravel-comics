@extends('layout.base')

@section('mainContent')
    <section class="containerSeries">
        <div class="container">
            <div>
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="seriesContainer">
                @foreach ($comics as $comic)
                    <div class="series">
                        <img src="{{$comic['thumb']}}" :alt="{{$comic['title']}}">
                        <p>{{$comic['title']}}</p>
                    </div>
                @endforeach
            </div>

            <div>
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="containerBuy">
        <div class="container">
            <ul>
                @foreach ($elements as $elm)
                    <li>
                        <img src="images/{{$elm['src']}}" alt="{{$elm['name']}}">
                        <span>{{$elm['name']}}</span>
                    </li>
                @endforeach
            </ul> 
        </div>
    </section>
@endsection