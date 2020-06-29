
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather</title>

        <script>
            ajax(){
                var req = new XMLHttpRequest();
                var form = document.querySelector('.form');
                req.open = (form.method, form.action, true);
                req.responseType = 'json';
                req.send(new FormData(form));
                
            }
        </script>
    </head>
    <body>
        <div class="col-3">
            <h1 class="mt-4">Where?</h1>
            <form class="form" action="{{ route('weather') }}" method="POST" onsubmit="ajax(); return false;">
                <div class="form-group">
                    @csrf
                    <input type="text" name="city" placeholder="location">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>