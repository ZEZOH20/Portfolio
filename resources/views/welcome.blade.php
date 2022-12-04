<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body class="antialiased">
   
                <div x-data='{counter:0}'>
                    <span x-text='counter'></span>
                    <button x-on:click='counter++'>ClickMe</button>
                </div>
                
    <script src="{{ asset('build/assets/app.ca2cf2e1.js') }}"></script>
</body>

</html>
