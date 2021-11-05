<header>
    <div class="headerTop">
        <div>DC POWER &#8480; VISA &#174;</div>
        <div>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></div>
    </div>
    <div class="headerBottom">
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
        <div>
            <input type="text" name="search" id="search">
        </div>
    </div>
</header>