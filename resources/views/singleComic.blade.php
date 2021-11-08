@extends('layout.base')

@section('mainContent')
    <section class="singleComic">
        <div class="sectionThumb">
            <div class="conteinerSingleComic">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
        </div>
        <div class="conteinerSingleComic">
            <div class="sectionInfo">
                <div class="info">
                    <h2>{{$comic['title']}}</h2>
                    <div class="priceContainer">
                        <div>
                            <p><span>U.S. Price:</span> {{$comic['price']}}</p>
                            <span>AVAILABLE</span>
                        </div>
                        <div>
                            <p>Check Availability <i class="fas fa-caret-down"></i></p>
                        </div>
                    </div>
                    <p>{{$comic['description']}}</p>
                </div>
                <div class="adv">
                    <p>ADVERTISEMENT</p>
                    <img src="{{asset('images/adv.jpg')}}" alt="Advertisement">
                </div>
            </div>
        </div>
    </section>
@endsection