@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('questions')}}" method="post" class="mb-4">
            @csrf

            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') 
                border-red-500 @enderror" placeholder="{{$placeholderQuestion}}">{{old('body')}}</textarea>

                @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Submit</button>
            </div>
        </form>
        
        <div class="bg-blue-200 p-6 mb-5 rounded">
            <div class="bg-blue-500 p-6 mb-5 rounded">
                <h2 class="text-2xl font-bold text-white">QUESTIONS</h2>
            </div>
        
            @forelse($questions as $question)
            <div class="bg-white p-4 mb-5 rounded-lg">
                <a href="{{route('question.show', $question)}}" class="font-bold">{{$question->body}}</a>
            </div>
            @empty
                <p>There are no questions dude</p>
            @endforelse
        </div>
    </div>
</div>

@endsection