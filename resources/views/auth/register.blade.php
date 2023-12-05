<x-auth-layout>
    <div class="bg-sbg min-w-[300px] px-6 py-2 absolute top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%] text-center rounded-xl">
        <h1 class="text-text font-semibold text-2xl pt-6 pb-2"><a href="/">ZenTasker</a></h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="py-2 px-1 text-stext">
                <label class="block text-left py-1" for="name">Name</label>
                <input class="block mx-auto w-full p-2 rounded-lg border-0 bg-bg" id="name" name="name" type="text" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="py-2 px-1 text-stext">
                <label class="block text-left py-1" for="email">Email</label>
                <input class="block mx-auto w-full p-2 rounded-lg border-0 bg-bg" id="email" name="email" type="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="py-2 px-1 text-stext">
                <label class="block text-left py-1" for="password">Password</label>
                <input class="block mx-auto w-full p-2 rounded-lg border-0 bg-bg" id="password" name="password" type="password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="py-2 px-1 text-stext">
                <label class="block text-left py-1" for="password_confirmation">Password Confirm</label>
                <input class="block mx-auto w-full p-2 rounded-lg border-0 bg-bg" id="password_confirmation" name="password_confirmation" type="password">
            </div>

            <div class="py-4 px-2 text-stext">
                <button class="bg-bg py-2 px-4 hover:py-3 hover:px-5 ease-out hover:ease-in duration-100 rounded">Register</button>
            </div>
            <div class="px-2 py-2 text-stext underline underline-offset-2">
                <a href="{{ route('login') }}">Already got an account? Login</a>
            </div>
        </form>
    </div>
</x-auth-layout>
