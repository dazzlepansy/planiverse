<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $mastodon_domain }} | Error</title>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}" />
    </head>
    <body>
        <h1>{{ $mastodon_domain }} | Error</h1>

        @component('navigation')
	@endcomponent

        <div class="warning">
            <p>Something went wrong…</p>
            <p>{{ $message }}</p>
        </div>
    </body>
</html>
