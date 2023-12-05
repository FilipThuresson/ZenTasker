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

    <form action="/register" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}">
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
        </div>
        <div>
            <label for="password_confirmation">Password Confirm</label>
            <input id="password_confirmation" name="password_confirmation" type="password">
        </div>
        <div>
            <button>Register</button>
        </div>
        </form>
</x-guest-layout>
