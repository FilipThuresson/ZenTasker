<x-auth-layout>
    <div class="bg-sbg min-w-[300px] px-6 py-6 absolute top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%] text-center rounded-xl">
        <h1 class="text-text font-semibold text-2xl pt-6 pb-2"><a href="/">ZenTasker</a></h1>
        <div class="mb-4 text-sm text-stext">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-success">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
        <div class="flex justify-around">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div>
                    <button type="submit" class="bg-secondary text-text py-2 px-4 rounded-xl">
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-primary text-text py-2 px-4 rounded-xl">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </div>
</x-auth-layout>
