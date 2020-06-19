@extends('app')

@section('content')
    <div class="col-3">
        <h1 class="mt-4">Where?</h1>
        <form action="{{ route('request') }}" method="POST">
            <div class="form-group">
                @csrf
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="location">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection