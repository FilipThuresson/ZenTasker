<x-app-layout>
    <div class="w-[80vw] mx-auto mt-6">
        <form method="POST" action="{{ route('teams.store') }}" >
            @csrf
            <div class="w-full px-6 py-4 bg-bg rounded shadow flex items-center justify-between">
                <h2 class="text-text text-xl">Create a Team</h2>
                <span>
                    <button type="submit" class="bg-success px-4 py-2 text-text rounded mx-2">Create</button>
                    <a href="/teams" ><button type="button" class="bg-danger px-4 py-2 text-text rounded">Cancel</button></a>
                </span>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="w-full mx-auto mt-6 px-6 py-4 bg-bg rounded shadow text-stext">
                <div class="block">
                    <h2 class="text-text text-xl">Team details</h2>
                </div>
                <div class="block flex justify-between my-2 p-2">
                    <div class="w-2/5">
                        <label for="name">
                            <h3 class="text-lg">Name</h3>
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" class="text-text w-full block w-full p-2 rounded-lg border border-stext bg-sbg">
                    </div>
                </div>
                <hr>
                <div class="block flex justify-between p-2">
                    <div class="w-2/5">
                        <label class="my-2" for="users">
                            <h3 class="text-lg">Users</h3>
                            <p class="text-sm">
                                Add users by their email, separate by comma (,)
                            </p>
                        </label>
                        <textarea id="users" name="users" class="p-2 bg-sbg border border-stext resize-y my-2 text-text w-full rounded-lg" rows="5" placeholder="johndoe@email.com, janedoe@email.com"></textarea>
                    </div>
                    <div class="w-2/5">
                        <label class="my-2" for="description">
                            <h3 class="text-lg">Description</h3>
                            <p class="text-sm">
                                Add a description for the team
                            </p>
                        </label>
                        <textarea id="description" name="description" class="p-2 bg-sbg border border-stext resize-y my-2 text-text w-full rounded-lg" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
