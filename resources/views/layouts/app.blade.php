<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
</head>
    <body>
        <div>
            <ul>
                <li>
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit()">
                            {{  __('Logout') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>

        <div>
            {{$slot}}
        </div>
    </body>
</html>
