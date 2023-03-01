
@extends('layouts.main')

@section('title', $comic->series)


{{-- section content in every page of single dc comic --}}
@section('content')

<section id="poster">
    <div class="container">
         <figure class="poster-comic">
            <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
         </figure>
    </div>
    
</section>
<section id="comic-selected">
    <div class="container">
        <div class="single-dc-comic">
            <div class="comic-description">
                <h1>{{$comic->title}}</h1>
                <div class="details">
                   <div class="info-details">
                       <span>U:S: Price: {{$comic->price}}</span>
                       <span>AVAILABLE</span>
                   </div>
                </div>
                <p>{!! $comic->description !!}</p>
            </div>

            <div class="single-dc-image">
                <h4>ADVERSTISEMENT</h4>
                <figure>
                    <img src="{{asset('images/adv.jpg')}}" alt="image adverstisement">
                </figure>
            </div>
        </div>
    </div>
    
</section>

<section id="about-comic">
      <div class="container">
          <div class="about-dc-product">
              <div class="specifications">
                  <h3>TALENT</h3>
                  <div class="art">
                   <span>Art by:</span>
                   <ul class="list-artists">
                        <li>{{ $comic->artists }}</li>
                   </ul>
                    
                  </div>
                  <div class="written">
                    <span>Written by:</span>
                    <ul class="list-writers">
                           <li>{{$comic->writers}}</li>
                    </ul>
                    
                  </div>
              </div>

              <div class="specifications">
                <h3>SPECS</h3>
                <div class="series">
                  <span>Series:</span>
                  <div>{{$comic->series}}</div>
                </div>
                <div class="price">
                    <span>U:S: Price:</span>
                    <div>{{$comic->price}}</div>
                  </div>
                <div class="sale-date">
                  <span>One sale Date:</span>
                  <div>{{$comic->sale_date}}</div>
                </div>
              </div>
          </div>

          <div class="icon-dc">

          </div>
      </div>
</section>

@endsection







