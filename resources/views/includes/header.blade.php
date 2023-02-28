@php
    $menu_links = config('menu');
@endphp

<header>
    <div class="top-header">
       <div class="container">

       </div>
    </div>    
    <div class="main-header">
        <div class="container row">
            <figure>
                <img src="{{asset('images/dc-logo.png')}} " alt="Logo Comics">
            </figure>
            <nav>
                <ul class="menu">
                    @foreach ($menu_links as $link)
                        <li><a href="{{route($link['route_name'])}}">{{$link['link']}}</a></li>
                    @endforeach
              
                </ul>
            </nav>
            <div>
                <input type="text" id="search" placeholder="Search">
            </div>
            
        </div>
    </div>
    
</header>