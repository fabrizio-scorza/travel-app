@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/logo.png" alt="logo">
        </div>
    </div>
</div>

<div class="container my-3">
    <h3 class="text-center">Crea un nuovo viaggio</h3>
</div>

<div class="container">
    <form 
        id="create-form" 
        action="{{route('admin.travel.store')}}" 
        method="POST" 
        enctype="multipart/form-data">

        @csrf

        <div class="form-group mb-4">
            <label for="title" class="mb-2">Titolo del Viaggio *</label>
            <input type="text" required class="form-control box" id="title" placeholder="Il titolo del tuo viaggio" name="title" value="{{ old('title') }}" maxlength="150">
        </div>

        <div class="form-group mb-4">
            <label for="description" class="mb-2">Descrizione</label>
            <textarea name="description" id="description" cols="80" rows="5" placeholder="Scrivi una breve descrizione del viaggio" class="form-control box">{{ old('description') }}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="thumb" class="form-label">Copertina del Viaggio</label>
            <input required class="form-control box" type="file" id="thumb" name="thumb">
        </div>

        <div class="form-group mb-4 row row-cols-4">
            <div class="col">
                <label for="departure-date" class="form-label">Data della Partenza</label>
                <input required class="form-control box" type="date" id="departure-date" name="departure_date"> 
            </div>

            <div class="col">
                <label for="departure-time" class="form-label">Ora della Partenza</label>
                <input required class="form-control box" type="time" id="departure-time" name="departure_time">
            </div>
            
            <div class="col">
                <label for="return-date" class="form-label">Data del Ritorno</label>
                <input required class="form-control box" type="date" id="return-date" name="return_date">
            </div>

            <div class="col">            
                <label for="return-time" class="form-label">Ora del Ritorno</label>
                <input required class="form-control box" type="time" id="return-time" name="return_time">
            </div>

        </div>

        <div class="mb-4 fw-lighter">
            <p>
                I campi contrassegnati con l'asterisco (*) sono obbligatori
            </p>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-sand mb-3">Crea</button>        
        </div>           

    </form>
</div>

@endsection   