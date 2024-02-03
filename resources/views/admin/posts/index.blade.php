@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">{{ $post->name }}</div>
                            <h6 class="card-subtitle mb-2 text-muted">
                                {{ $post->category ? $post->category->name : 'senza categoria' }}
                            </h6>
                            <div class="card-body">
                                {{ $post->description }}
                                <div class="d-flex justify-content-evenly">
                                    <div class=" mx-1">
                                        <a href="{{ route("admin.posts.show", $post->id) }}" class="btn btn-primary">Dettaglio</a>
                                    </div>
                                    <div class=" mx-1">
                                        <a href="{{ route("admin.posts.edit", $post->id) }}" class="btn btn-warning">Modifica</a>
                                    </div>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Cancella" class="btn btn-danger">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
