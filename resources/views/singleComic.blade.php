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
        <div class="sectionGray">
            <div class="conteinerSingleComic">
                <div class="sectionGrayParts">
                    <h3>Talent</h3>
                    <div class="row">
                        <span class="col">Art by:</span>
                        <div>
                            @foreach ($comic['artists'] as $artist)
                                <span class="blue">{{$artist}}</span>,
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <span class="col">Written by:</span>
                        <div>
                            @foreach ($comic['writers'] as $writer)
                                <span class="blue">{{$writer}}</span>,
                            @endforeach
                        </div>
                    </div>
                </div>
    
                <div class="sectionGrayParts">
                    <h3>Specs</h3>
                    <div class="row">
                        <span class="col">Series:</span>
                        <p class="blue">{{$comic['series']}}</p>
                    </div>
                    <div class="row">
                        <span class="col">U.S. Price:</span>
                        <p>{{$comic['price']}}</p>
                    </div>
                    <div class="row">
                        <span class="col">On Sale Date:</span>
                        <p>{{$comic['sale_date']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection