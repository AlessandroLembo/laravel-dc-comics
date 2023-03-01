@extends('layouts.main')

@section('title', 'New DC Comic')

@section('content')
  
<section id="form">
    <div class="container">
        <div class="create-comic">
            <h1>Crea Comic</h1>
            <a href="{{route('comics.index')}}" id="back">Indietro</button>
        </div>
        
    
        <form action="" id="form-create-comic">
            <div class="row-text">
                <div class="col-form">
                    <label for="title">Title</label>
                    <input type="text" id="title" placeholder="  Nome del Comic" name="title">
                </div>   

                <div class="col-form">
                    <label for="series">Series</label>
                    <input type="text" id="series" placeholder="  Nome della serie" name="series">    
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
                    <input type="text" id="price" name="price">
                </div>

                <div class="col-form">
                    <label for="sale_date">Sale date</label>
                    <input type="text" id="sale_date" name="sale_date">
                </div>

                <div class="col-form">
                    <label for="type">type</label>
                    <input type="text" id="type" placeholder="  Tipo di book" name="type">
                
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
        </form>
    
    </div>
    
</section>
@endsection