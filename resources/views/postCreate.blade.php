<x-layout>
    <x-wrap-container class="max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-3xl font-bold capitalize">Create a Post Opp</h2>
            <p class="text-sm mb-4">post some crazy post or a opp</p>
        </header>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="mb-6">
                <label for="companyName" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" value="{{ old('companyName') }}" class="border border-gray-200 rounded p-2 w-full" name="companyName" />
                @error('companyName')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" value="{{ old('title') }}" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" />
                @error('title')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" value="{{ old('location') }}" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" />
                @error('location')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" value="{{ old('email') }}" class="border border-gray-200 rounded p-2 w-full" name="email" />
                @error('email')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" value="{{ old('tags') }}" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" />
                @error('tags')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea  class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">
                {{ old('description') }}
                </textarea>
                @error('description')
                    <span id="error-msg" class="text-red-500 text-sm font-semibold mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Gig
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-wrap-container>
    
    @section('extra-script')
    <script src="{{ URL::to('assets/js/createPost.js') }}"></script>
    @endsection
    
</x-layout>