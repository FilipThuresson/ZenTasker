<x-dashboard-layout>
    <div class="px-6 py-4 bg-bg rounded shadow flex items-center justify-between mt-6 mx-6 block">
        <h2 class="text-text text-2xl">{{ Auth::user()->activeTeam->name }}</h2>
    </div>
    <div class="flex flex-wrap">
        <div class="px-6 py-4 w-fit bg-bg rounded shadow mt-6 mx-6">
            <h3 class="text-xl text-text">Due today : 6</h3>
            <div class="block text-stext text-lg">
                <ul class="py-2 divide-y">
                    <li class="py-2"><a href="#">Fix bug at /dev/opt/etc/www ...... Fredrik Yla-loupa</a></li>
                    <li class="py-2"><a href="#">Fix bug at /dev/opt/etc/www ...... Fredrik Yla-loupa</a></li>
                    <li class="py-2"><a href="#">Fix bug at /dev/opt/etc/www ...... Fredrik Yla-loupa</a></li>
                    <li class="py-2"><a href="#">Fix bug at /dev/opt/etc/www ...... Fredrik Yla-loupa</a></li>
                    <li class="py-2"><a href="#">Fix bug at /dev/opt/etc/www ...... Fredrik Yla-loupa</a></li>
                    <li class="py-2"><a href="#">Fix bug at /dev/opt/etc/www ...... Fredrik Yla-loupa</a></li>
                </ul>
            </div>
        </div>
        <div class="px-6 py-4 w-fit bg-bg rounded shadow mt-6 mx-6">
            <h3 class="text-text text-lg">Finnished</h3>
            <div class="flex-col flex-grow">
                <div class="text-stext border border-stext rounded-lg p-2 text-center inline-block">
                    <h4>Today</h4>
                    <p>20</p>
                </div>
                <div class="text-stext border border-stext rounded-lg p-2 text-center">
                    <h4>This Week</h4>
                    <p>20</p>
                </div>
                <div class="text-stext border border-stext rounded-lg p-2 text-center">
                    <h4>This Month</h4>
                    <p>20</p>
                </div>
                <div class="text-stext border border-stext rounded-lg p-2 text-center">
                    <h4>This Year</h4>
                    <p>20</p>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
<!--             <h3 class="text-xl text-text">Finished this week : 20</h3>
 -->
