<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .main {
            width: 1000px;
        }
    </style>
    <div class="w-7xl mx-auto sm:px-6 main">
        <div class="bg-white dark:bg-gray-800  shadow-sm">
            <div class="p-6 text-gray-900 dark:text-gray-100 min-h-screen">
                <div class="container">
                    <div class='flex items-center justify-center min-h-screen'>
                        <div class='w-full max-w-lg px-10 py-4 mx-auto bg-white rounded-lg shadow-xl'>
                            <div class='max-w-md mx-auto space-y-6'>
                                <form action="{{ route('answers.store', ['application'=> $application->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h2 class="text-2xl text-black font-bold ">Answer application
                                        #{{ $application->id }}</h2>
                                    <hr class="my-6">
                                    <label class=" text-sm text-black font-bold opacity-70">Answer</label>
                                    <textarea type="text" required name="body" rows="10"
                                        class=" text-black outline-none p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>

                                    <input type="submit" 
                                        class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                        value="Send">
                                    <a href="{{route('dashboard')}}"
                                        class="py-3 px-6 my-2 bg-red-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300">Cancel</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
