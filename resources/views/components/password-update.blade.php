<div class="bg-bg my-6 py-4 px-6 text-text w-fit mx-auto rounded-xl">
    <form method="post" action="{{ route('user-password.update') }}">
        @csrf
        @method('PUT')

        <h2 class="text-semibold text-xl">Password Info</h2>
        @if (session('status') === 'password-updated')
            <div class="mt px-6 font-medium text-sm text-success">
                Password has been updated.
            </div>
        @endif

        <div class="w-fit px-6 py-2 text-stext">
            <label class="block text-left py-1" for="current_password">Current Password</label>
            <input class="w-96 w-max-[80vw] bg-sbg py-2 px-4 rounded-lg border border-stext" id="current_password" name="current_password" type="password">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-fit px-6 py-2 text-stext">
            <label class="block text-left py-1" for="password">New Password</label>
            <input class="w-96 w-max-[80vw] bg-sbg py-2 px-4 rounded-lg border border-stext" id="password" name="password" type="password">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-fit px-6 py-2 text-stext">
            <label class="block text-left py-1" for="password_confirmation">Password Confirm</label>
            <input class="w-96 w-max-[80vw] bg-sbg py-2 px-4 rounded-lg border border-stext" id="password_confirmation" name="password_confirmation" type="password">
        </div>
        <div class="w-full py-4 px-6 flex justify-end">
            <button class="text-text py-2 px-4 rounded-xl bg-secondary">
                Save
            </button>
        </div>
    </form>
</div>
