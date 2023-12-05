<x-guest-layout>
    <h2>{{ __('Register') }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </div>
        <div>
            <label for="remember">
                <input id="remember" name="remember" type="checkbox">
                <span>Remember Me</span>
            </label>
        </div>
        <div>
            <button>Login</button>
        </div>
    </form>
</x-guest-layout>
