@extends('show-blog')

@section('content')



                <div class="container mx-auto px-4 w-4/6 mt-10">
                    <h1 class="text-gray-700 text-4xl font-bold">{{ $blog->title }}</h1>
                    <p class="text-gray-700 mt-3">{{ $author }}</p>
                    <p class="text-gray-700"> {{ $blog->created_at->diffForHumans() }}</p>
                    <p class="text-gray-700 leading-10 mt-16">{!!  nl2br($blog->body) !!} </p>

                </div>



@endsection
