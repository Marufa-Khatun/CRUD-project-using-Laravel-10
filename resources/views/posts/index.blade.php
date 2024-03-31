@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>All Post</h2>
                </div>

                <div class="card-body">
                    @if ('Session'::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                        
                    @endif
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($posts as $post )
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{  $post->description }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                                <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                <a href="{{ route('posts.status.update', $post->id) }}" class="btn btn-warning">Status Update</a>
                            </td>
                        </tr>
                            
                        @empty
                            <tr>
                                <td colspan="4">no data found</td>
                            </tr>
                        @endforelse
                    </table>
                </div>

                <div class="card-footer">
                    {{ $posts->links() }}

                </div>


            </div>
        </div>
    </div>
</div>
@endsection