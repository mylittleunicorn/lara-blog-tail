@extends('user.main')

@section('container')
<div class="container py-6 grid grid-cols-3 gap-4">
    @foreach ( $posts as $post )
    <div class="max-w-sm overflow-hidden hover:shadow-lg border-2">
        <img class="w-full" src="https://source.unsplash.com/random/?html/" alt="html">
        <div class="px-2 py-1">
          <div class="font-bold text-md mb-2">{{ $post->title }}</div>
          <p class="text-gray-700 text-small">
            {{ $post->excerpt }}
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-cyan-200 rounded-full px-3 py-1 text-sm font-semibold text-cyan-700 mr-2 mb-2">#photography</span>
          <span class="inline-block bg-cyan-200 rounded-full px-3 py-1 text-sm font-semibold text-cyan-700 mr-2 mb-2">#travel</span>
          <span class="inline-block bg-cyan-200 rounded-full px-3 py-1 text-sm font-semibold text-cyan-700 mr-2 mb-2">#winter</span>
        </div>
    </div>
    @endforeach
</div>
@endsection