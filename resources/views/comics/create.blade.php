@extends('layouts.main')

@section('title', 'New DC Comic')

@section('content')
  
<section id="form">
    <div class="container">
        <div class="create-comic">
            <h1>Crea Comic</h1>
            <a href="{{route('comics.index')}}" id="back">Indietro</button>
        </div>
        
    
        <form action="{{route('comics.store')}}" method="POST" id="form-create-comic">
            {{-- <input type="hidden" name="_token" value="{{get_csrf()}}"> --}}
            @csrf
            <div class="row-text">
                <div class="col-form">
                    <label for="title">Title</label>
                    <input type="text" id="title" placeholder="  Nome del Comic" name="title" required>
                </div>   

                <div class="col-form">
                    <label for="series">Series</label>
                    <input type="text" id="series" placeholder="  Nome della serie" name="series" required>    
                </div>

                <div class="col-form">
                    <label for="thumb">Thumb</label>
                    <input type="url" id="thumb" placeholder="  Immagine del dc comic.." name="thumb">
                </div>
            </div>
            
            <div class="row-area">
                <div class="col-form description-col">
                    <div>
                        <label for="description">Description</label>
                        <textarea id="description" name="description"></textarea>
                    </div>
                  
                </div>
            </div>
            
            <div class="row-text">
                <div class="col-form">
                    <label for="price">Prezzo</label>
                    <input type="text" id="price" name="price" required>
                </div>

                <div class="col-form">
                    <label for="sale_date">Sale date</label>
                    <input type="text" id="sale_date" name="sale_date" required>
                </div>

                <div class="col-form">
                    <label for="type">type</label>
                    <input type="text" id="type" placeholder="  Tipo di book" name="type" required>
                
                </div>
            </div>
            
            <div class="row-area">
                <div class="col-form">
                    <label for="artists">Artists</label>
                    <textarea id="artists" name="artists"></textarea>
                </div>

                <div class="col-form">
                    <label for="writers">Writers</label>
                    <textarea id="writers" name="writers"></textarea>
                </div>
            </div>

            <div class="row-text btn-form">
                    <button type="submit" id="btn-create">CREA</button>
            </div>
        </form>
    
    </div>
    
</section>
@endsection