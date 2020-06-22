@extends('app')

@section('content')
    <div class="col-3">
        <h1 class="mt-4">Where?</h1>
        <a href="{{ route('weather', $location="Tokyo") }}">Tokyo<br></a>
        <a href="{{ route('weather', $location="Osaka") }}">Osaka<br></a>
        <a href="{{ route('weather', $location="Nagoya") }}">Nagoya<br></a>
        <a href="{{ route('weather', $location="Yokohama") }}">Yokohama<br></a>
        <form action="{{ route('request') }}" method="POST">
            <div class="form-group">
                @csrf
                <input type="text" class="form-control" id="location" name="location" placeholder="location">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection