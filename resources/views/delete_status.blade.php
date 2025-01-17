<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $mastodon_domain }} | Delete Status</title>

        <link rel="stylesheet" href="{{ url('css/styles.css') }}" />
    </head>
    <body>
        <h1>{{ $mastodon_domain }} | Delete Status</h1>

        @component('navigation')
	@endcomponent

        <div class="warning">
            <p>Are you sure you want to delete this status? Click the delete link again to confirm.</p>
        </div>

        <ul>
            @component('status', ['status' => $status])
            @endcomponent
        </ul>
    </body>
</html>
