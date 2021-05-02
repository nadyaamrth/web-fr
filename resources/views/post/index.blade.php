@extends('layouts',['title'=>'All Posts'])

@section('stylescript')
    <style></style>
    <script></script>

@endsection


@section('content')
    <div class="container">
        <h1>This is Post Page</h1>
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ Str::limit($post->konten, 100) }}</p>
                            <a class="btn text-primary p-0 m-0" href="/post/{{ $post->slug }}">Read More</a>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-success" href="/post/{{ $post->slug }}/edit">Edit</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col">
                        <div class="alert alert-info">
                            Tidak ada data!
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <br>
        <a href="/post/create">Create New Post</a>
    </div>
@endsection
