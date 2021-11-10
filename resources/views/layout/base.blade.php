<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-DC-Comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    @include('partials.header')

    <main>
        <div class="hero"></div>
        @yield('mainContent')
        <section class="containerBuy">
            <div class="container">
                <ul>
                    @foreach ($elements as $elm)
                        <li>
                            <img src="{{asset($elm['src'])}}" alt="{{$elm['name']}}">
                            <span>{{$elm['name']}}</span>
                        </li>
                    @endforeach
                </ul> 
            </div>
        </section>
    </main>

    @include('partials.footer')

</body>
</html>