@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Post</h2>
                </div>

                <div class="card-body">
                   

                  <form action="{{ route('posts.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                   
                    <div class="mb-2">
                        <label for="">Title:</label>
                        <input type="text" value="{{ old('title', $posts->title) }}"class="form-control @error('title') is-invalid @enderror " name="title">
                        @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   
                    <div class="mb-2">
                        <label for="">Description:</label>
                        <textarea type="text" class="form-control @error('title') is-invalid @enderror" name="description"> {{ old('description', $posts->description) }} </textarea>
                            
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                      
                      
                    </div>
                   
                    <div class="mb-2">
                        <label for="">Image:</label>
                        <input type="file" class="form-control @error('title') is-invalid @enderror" name="image">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection