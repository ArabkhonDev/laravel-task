<!-- component -->
<div class='flex items-center justify-center min-h-screen'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-2xl text-black font-bold ">Submit your application</h2>
                <hr class="my-6">
                <label class=" text-sm font-bold opacity-70 text-black">Subject</label>
                <input type="text" name="subject" class=" text-black outline-none p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                <label class=" text-sm text-black font-bold opacity-70">Message</label>
                <textarea type="text" name="message" class=" text-black outline-none p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>
                <label class=" text-sm text-black font-bold opacity-70">File</label>
                <input type="file"  name="file_url" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
            </form>

        </div>
    </div>
</div>