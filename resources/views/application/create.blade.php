<div class="container">
    @if (session()->has('error'))
        <div class="max-w-lg mx-auto">
            <div class="flex bg-blue-100 rounded-lg p-4 mb-2 text-sm text-blue-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium"> {{session()->get('error')}}</span>
            </div>
        </div>
    @endif
    <div class='flex items-center justify-center min-h-screen'>
            
        <div class='w-full max-w-lg px-10 py-4 mx-auto bg-white rounded-lg shadow-xl'>
            <div class='max-w-md mx-auto space-y-6'>
                <form action="{{route('application.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-2xl text-black font-bold ">Submit your application</h2>
                    <hr class="my-6">
                    <label class=" text-sm font-bold opacity-70 text-black">Subject</label>
                    <input type="text" name="subject" required
                        class=" text-black outline-none p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                    <label class=" text-sm text-black font-bold opacity-70">Message</label>
                    <textarea type="text" required name="message" class=" text-black outline-none p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>
                    <label class=" text-sm text-black font-bold opacity-70">File</label>
                    <input type="file" name="file" class="text-black p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <input type="submit"
                        class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                        value="Send">
                </form>

            </div>
        </div>
    </div>
</div>
