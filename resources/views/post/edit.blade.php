@extends('layouts',['title'=>'Update Post'])

@section('content')
    <div class="container">
        <h1>Update Post : {{ $post->title }}</h1>
        <form action="" method="post" class="w-50">
            @csrf
            @method('patch')
            <div class="form-group my-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{ old('title') ?? $post->title }}">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-3">
                <label for="konten">Konten</label>
                <textarea type="text" class="form-control" name="konten"
                    id="konten">{{ old('konten') ?? $post->konten }}</textarea>
                @error('konten')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
