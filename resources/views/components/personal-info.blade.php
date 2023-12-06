<div class="bg-bg my-6 py-4 px-6 text-text w-fit mx-auto rounded-xl">
    <form method="post" action="{{ route('user-profile-information.update') }}">
        @csrf
        @method('PUT')

        <h2 class="text-semibold text-xl">Personal Info</h2>
        @if (session('status') === 'profile-information-updated')
            <div class="mt px-6 font-medium text-sm text-success">
                Profile Info has been updated.
            </div>
        @endif
        <div class="w-fit px-6 py-2 text-stext">
            <label class="block text-xs py-2" for="name">Name</label>
            <input type="text" id="name" name="name" class="w-96 w-max-[80vw] bg-sbg py-2 px-4 rounded-lg border border-stext" value="{{$user->name}}">
        </div>
        <div class="w-fit px-6 text-stext">
            <label class="block text-xs py-2" for="email">Email</label>
            <input type="email" id="email" name="email" class="w-96 w-max-[80vw] py-2 px-4 rounded-lg border border-stext bg-sbg" value="{{$user->email}}">
        </div>
        <div class="w-full py-4 px-6 flex justify-end">
            <button class="text-text py-2 px-4 rounded-xl bg-secondary">
                Save
            </button>
        </div>
    </form>
</div>
