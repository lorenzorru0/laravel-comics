<header>
    <div class="headerTop">
        <div class="container">
            <div>DC POWER &#8480; VISA &#174;</div>
            <div>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></div>
        </div>
    </div>
    <div class="container">
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
                <div class="containerSearch">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</header>