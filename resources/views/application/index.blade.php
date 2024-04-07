<div class="container pt-2 scroll-m-0 overflow-y-hidden ">
    <h1>Recived applications</h1>
    <div class="application-collect">

        @foreach ($applications as $application)
            <div class=' pt-4 w-full items-start'>
                <div class="rounded-xl border p-2 shadow-md w-9/12 bg-white">
                    <div class="flex w-full items-center justify-between border-b pb-3">
                        <div class="flex items-center space-x-3">
                            <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                            </div>
                            <div class="text-lg font-bold text-slate-700">{{ $application->user->name }}</div>
                        </div>
                        <div class="flex items-center space-x-8">
                            <button class="rounded-2xl border text-black px-3 py-1 text-xs font-semibold">Id:
                                {{ $application->id }}</button>
                            <div class="text-xs text-neutral-500">{{ $application->created_at }}</div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="message-info">
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
                        <div
                            class="file-icon m-6 p-4 border rounded text-black hover:bg-gray-100 transition items-center flex-col ">
                            @if (is_null($application->file_url))
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>

                                No File
                            @else
                                <a href="{{ asset('storage/' . $application->file_url) }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="green" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                    @if ($application->answer()->exists())
                    <div class="text-black">
                        <hr>
                        <h3 class="text-sm text-blue-500">Answer:</h3> 
                        <p class="font-bold">{{$application->answer->body}}</p>
                    </div>
                    @else
                        <div class="flex justify-end">
                            <a href="{{ route('answers.create', ['application' => $application->id]) }}"
                                class="bg-green-600 text-white px-6 text-sm py-2 rounded font-medium mx-3 hover:bg-green-700 transition duration-200 each-in-out">Answer</a>
                        </div>

                    @endif
                </div>
            </div>
        @endforeach
    </div>
    {{ $applications->links() }}


</div>
