<x-layout :title="$title">
    @if ($posts->count())
        @foreach ($posts as $post)
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                <a href="{{ route('posts.show', ['post' => $post->slug]) }}" class="hover:underline">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post->author }}</a> | {{ $post->created_at }}
                </div>
                <p class="my-4 font-light text-justify">
                    {{ Str::limit($post->body, 100) }}
                </p>
                <a href="{{ route('posts.show', ['post' => $post->slug]) }}"
                    class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
            </article>
        @endforeach
        <div class="mt-3 max-w-screen-md">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center text-2xl font-semibold">
            No Post Found
        </p>
    @endif
</x-layout>
