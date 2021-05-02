@extends('layouts',['title'=>'Show post'])

@section('content')
    <div class="container">
        <div class="title">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="konten">
            <p style="text-align: justify">
                {{ $post->konten }}
            </p>
        </div>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Delete
        </button>
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <form action="/post/{{ $post->slug }}/delete" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah anda akan menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button class="btn btn-danger" type="submit">YES</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
