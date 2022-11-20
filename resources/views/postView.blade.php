<x-layout>
    @include('partials._search')
    <section class="container">
        <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <div class="mx-4">
            <x-wrap-container>
                <div class="flex flex-col items-center justify-center text-center">
                    <img class="w-48 mr-6 mb-6"
                        src="{{ $post->logo ? asset('storage/' . $post->logo) : asset('images/no-image.png') }}"
                        alt="" />

                    <h3 class="text-2xl mb-2">{{ $post->title }}</h3>
                    <div class="text-xl font-bold mb-4">{{ $post->companyName }}</div>
                    <x-list-tags :tagsCSV="$post->tags" />
                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot"></i> {{ $post->location }}
                    </div>
                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            Job Description
                        </h3>
                        <div class="text-lg space-y-6">
                            <p>
                                {{ $post->description }}
                            </p>
                            <div class="flex item-center justify-center">

                                <a href="mailto:{{ $post->email }}"
                                    class="block bg-laravel text-white mt-6 mx-3 px-4 py-2 rounded-xl hover:opacity-80"><i
                                        class="fa-solid fa-envelope"></i>
                                    Contact Employer</a>

                                <a href="https://test.com" target="_blank"
                                    class="block bg-black text-white mt-6 mx-3 px-4 py-2 rounded-xl hover:opacity-80"><i
                                        class="fa-solid fa-globe"></i> Visit
                                    Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-wrap-container>
        </div>
        <x-wrap-container class="flex px-3 py-2 space-x-6 mx-4">
            <a href="{{ route('post.edit', [$post->id]) }}">
                <i class="fa fa-pencil" aria-hidden="true"></i>Edit
            </a>
            <form method="POST" action="{{ route('post.edit.delete', [$post->id]) }}">
                @csrf
                @method("DELETE")
                <button>
                    <i class="fa fa-trash-can" aria-hidden="true"></i>Delete
                </button>
            </form>
        </x-wrap-container>
    </section>
</x-layout>
