@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="/logo.png" alt="logo">
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        @foreach ($travels as $travel)
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <p>{{$travel->title}}</p>
                    </div>
                    <div class="card-body row">
                        <div class="col">
                            <img src={{$travel->thumb}} alt="img">
                        </div>
                        <div class="col">
                            <p>{{$travel->description}}</p>
                        </div>
                        <div class="col">
                            <p>Andata: {{$travel->departure_date}}</p>
                            <p>Ritorno: {{$travel->return_date}}</p>   
                        </div>
                        
                    </div>
                </div>
            </div>   
        @endforeach        
    </div>

</div>

@endsection
