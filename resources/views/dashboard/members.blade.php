<x-dashboard-layout>
    <div class="px-6 py-4 bg-bg rounded shadow flex items-center justify-between mt-6 mx-6 block">
        <h2 class="text-text text-2xl">{{ Auth::user()->activeTeam->name }}</h2>
    </div>

    <div class="px-6 py-4 bg-bg rounded shadow mt-6 mx-6 block text-stext">
        <div>
            <h2 class="text-text text-xl">Team members</h2>
        </div>
        <hr>
        <table class="w-full text-left text-text">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tasks</th>
                    <th>Utils</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $idx => $member)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>5</td>
                        <td></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-dashboard-layout>
