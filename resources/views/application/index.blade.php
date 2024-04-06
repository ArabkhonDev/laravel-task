<div class="container pt-2 scroll-m-0 overflow-y-hidden ">
    <h1>Kelib tushgan arizalar</h1>
    <div class="application-collect">

        @foreach ($applications as $application)
            <div class=' pt-4 w-full items-start'>
                <div class="rounded-xl border p-2 shadow-md w-9/12 bg-white">
                    <div class="flex w-full items-center justify-between border-b pb-3">
                        <div class="flex items-center space-x-3">
                            <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                            <div class="text-lg font-bold text-slate-700">{{ $application->user->name }}</div>
                        </div>
                        <div class="flex items-center space-x-8">
                            <button class="rounded-2xl border text-black px-3 py-1 text-xs font-semibold">Id:
                                {{ $application->id }}</button>
                            <div class="text-xs text-neutral-500">{{ $application->created_at }}</div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="mb-3 text-xl text-black font-bold">{{ $application->subject }}</div>
                        <div class="text-sm text-neutral-600">{{ $application->message }}</div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between text-slate-500">
                            <div class="flex space-x-4 md:space-x-8">
                                {{ $application->user->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $applications->links() }}


</div>
