@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="row">
            <h2>Modifica post</h2>
           
        </div>
        <div class="row">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}">
                    
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Price</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $post->description }}">
                    
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection