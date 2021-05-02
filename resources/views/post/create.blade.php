@extends('layouts',['title'=>'New Post'])

@section('content')
    <div class="container">
        <form action="" method="post" class="w-50">
            @csrf
            <div class="form-group my-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-3">
                <label for="konten">Konten</label>
                <textarea type="text" class="form-control" name="konten" id="konten"></textarea>
                @error('konten')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary my-3" type="submit">Post</button>
            </div>
        </form>
    </div>
@endsection
