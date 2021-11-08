<footer>
    <div>
        <div class="footerTop">
            <div class="container">
                <nav>
                    <div>
                        <ul>
                            <li> <h3>DC COMICS</h3> </li>
                            @foreach ($linksFooter['dcComics'] as $elm)
                                <li> <a href="{{$elm['href']}}">{{$elm['name']}}</a> </li>
                            @endforeach
                            <li> <h3>SHOP</h3> </li>
                            @foreach ($linksFooter['shop'] as $elm)
                                <li> <a href="{{$elm['href']}}">{{$elm['name']}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li> <h3>DC</h3> </li>
                            @foreach ($linksFooter['dc'] as $elm)
                                <li> <a href="{{$elm['href']}}">{{$elm['name']}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li> <h3>SITES</h3> </li>
                            @foreach ($linksFooter['sites'] as $elm)
                                <li> <a href="{{$elm['href']}}">{{$elm['name']}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="footerBottom">
            <div class="container">
                <div>
                    <button>SIGN-UP NOW!</button>
                </div>
                <div>
                    <h3>FOLLOW US</h3>
                    @foreach ($linksFooter['social'] as $elm)
                        <a href="{{$elm['href']}}"><img src="{{asset($elm['url'])}}" alt="{{$elm['name']}}"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>