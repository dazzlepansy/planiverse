<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $mastodon_domain }} | {{ $timeline }}</title>

        <link rel="stylesheet" href="/css/styles.css" />
    </head>
    <body>
        <h1>{{ $mastodon_domain }} | {{ $timeline }}</h1>

        @foreach ($statuses as $status)
            @component('status', ['status' => $status])
            @endcomponent
        @endforeach

        @if ($links['prev'] !== null)
            <span><a href="{{ $links['prev'] }}">Previous</a></span>
        @endif

        @if ($links['next'] !== null)
            <span><a href="{{ $links['next'] }}">Next</a></span>
        @endif
    </body>
</html>
