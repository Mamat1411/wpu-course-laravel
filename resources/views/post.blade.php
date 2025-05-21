<x-layout :title="$title">
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
        <div class="text-base text-gray-500">
            by <a href="{{ route('posts.authorIndex', ['user' => $post->author->username]) }}" class="text-gray-900 hover:underline">{{ $post->author()->name }}</a> in <a href="{{ route('posts.categoryIndex', ['category' => $post->category->slug]) }}" class="text-gray-900 hover:underline">{{ $post->category->name }}</a> | {{ date('d-m-Y', strtotime($post->created_at)) }}
        </div>
        <p class="my-4 font-light text-justify">
            {{ $post->body }}
        </p>
        <a href="{{ route('posts.index') }}" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts</a>
    </article>
</x-layout>
