@extends('layouts.main')

@section('title', 'Comics')

@section('content')

    <section id="content-top">
        <div class="container cards-section">
            <button id="current-series">CURRENT SERIES</button>
            
            <div class="main-top-content">
                @forelse ($comics as $comic)
                <div class="col">
                    <a href="{{route('comics.show', $comic->id)}}" class="card">
                        <figure class="comic-images">
                            <img src="{{$comic->thumb}} " alt="{{$comic->series}}">
                        </figure>
                        
                        <h3> {{$comic->series}} </h3>
                    </a>
                </div>
                @empty

                <div class="no-comics">
                    <h1>Fumetti non disponibili!</h1>
                </div>
               
                @endforelse
                
            </div>
             
            <div class="btn-comic">
                <button id="load">LOAD MORE</button>
                <a href="{{route('comics.create')}}" id="new-comic">CREA NEW COMIC</button>
                
            </div>
            
        </div> 

    </section>    
@endsection