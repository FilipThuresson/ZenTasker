<x-auth-layout>
    <div class="bg-sbg min-w-[300px] px-6 py-6 absolute top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%] text-center rounded-xl">
        <h1 class="text-text font-semibold text-2xl pt-6 pb-2"><a href="/">ZenTasker</a></h1>
        <div class="mb-4 text-sm text-stext">
            Whooops! Did you forget your password? <br> Just enter your email down below and check your inbox for a reset link!
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{route('password.email')}}" method="POST">
            @csrf
            <div class="py-2 px-1 text-stext">
                <label class="block text-left py-1" for="email">Email</label>
                <input class="block mx-auto w-full p-2 rounded-lg border-0 bg-bg" id="email" name="email" type="email" value="{{ old('email') }}">
            </div>
            <button type="submit" class="bg-secondary text-text py-2 px-4 rounded-xl">
                {{ __('Send Reset Link!') }}
            </button>
        </form>
    </div>
</x-auth-layout>
