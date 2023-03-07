@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">PVM skaičiuoklė</div>
                    <div class="card-body">
                        <p> <strong> Prekės kaina:</strong> {{$kaina}} </p>
                        <p> <strong> Prekės kaina su PVM :</strong>  {{$kainaSuPVM}} </p>
                        <p> <strong> PVM suma :</strong> {{$pvm}} </p>
                        <hr>
                        <a class="btn btn-success" href="{{route('index')}}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
