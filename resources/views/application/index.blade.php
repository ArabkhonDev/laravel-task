<div class="container pt-2 ">
    <h1>Kelib tushgan arizalar</h1>

    @for ($i = 0; $i<5; $i++ )
    <div class='flex pt-4 items-start'>
        <div class="rounded-xl border p-2 shadow-md w-9/12 bg-white">
            <div class="flex w-full items-center justify-between border-b pb-3">
                <div class="flex items-center space-x-3">
                    <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                    <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                </div>
                <div class="flex items-center space-x-8">
                    <button class="rounded-2xl border text-black px-3 py-1 text-xs font-semibold">Id: 5</button>
                    <div class="text-xs text-neutral-500">2 hours ago</div>
                </div>
            </div>

            <div class="mt-4 mb-4">
                <div class="mb-3 text-xl text-black font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus neque?</div>
                <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna. Maecenas convallis
                    dignissim turpis, non suscipit mauris interdum at. Morbi sed gravida nisl, a pharetra nulla. Etiam
                    tincidunt turpis leo, ut mollis ipsum consectetur quis. Etiam faucibus est risus, ac condimentum
                    mauris consequat nec. Curabitur eget feugiat massa</div>
            </div>

            <div>
                <div class="flex items-center justify-between text-slate-500">
                    <div class="flex space-x-4 md:space-x-8">
                      email@email.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor

</div>
