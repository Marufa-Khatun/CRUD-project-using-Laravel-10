@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Title:{{ $posts->title }}</h2>
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        
                    </table>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection