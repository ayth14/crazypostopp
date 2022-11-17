@extends('layout')

@section('content')
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($post) === 0)
            @foreach ($post as $post)
                <x-wrap-container class="p-10">
                    <div class="flex">
                        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
                        <div>
                            <h3 class="text-2xl">
                                <a href="post/{{ $post->id }}">{{ $post->title }}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{ $post->companyName }}</div>
                            <x-list-tags :tagsCSV="$post->tags" />
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $post->location }}
                            </div>
                        </div>
                    </div>
                </x-wrap-container>
            @endforeach
        @else
            <h1>No Post to List</h1>
        @endunless
    </div>
@endsection
