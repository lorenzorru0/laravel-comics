<header>
    <div>
        <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC Comics">
    </div>
    <div>
        <ul>
            @foreach ($link as $navLink)
                @if ($navLink['active'] == false)
                    <li><a href="{{$navLink['link']}}">{{$navLink['name']}}</a></li>
                @else
                    <li><a href="{{$navLink['link']}}" class="active">{{$navLink['name']}}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</header>