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
                  <li>
                    <a class="@if(Route::is('home')) active @endif" href="{{url('/')}}">Home</a>
                  </li>
                  <li>
                    <a class="@if(Route::is('comics.index')) active @endif" href="{{route('comics.index')}}">Comics</a>
                  </li>
                </ul>
            </nav>
            <div>
                <input type="text" id="search" placeholder="Search">
            </div>
            
        </div>
        
    </div>
    
</header>