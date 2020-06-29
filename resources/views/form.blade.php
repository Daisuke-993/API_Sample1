
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather</title>

        <script src="{{ asset('js/script.js') }}"></script>
    </head>
    <body>
        <h1>Where?</h1>
        <form id="form" action="{{ route('weather') }}" method="POST" onsubmit="ajax(); return false;">
            @csrf
            <input type="text" class="city" name="city" placeholder="location">
            <input type="submit">
        </form>

    </body>
</html>