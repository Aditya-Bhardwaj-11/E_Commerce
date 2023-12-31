@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input name="status" {{ $category->status ==1 ? "checked" : ""}}  type="checkbox">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input name="popular" {{ $category->popular ==1 ? "checked" : ""}}  type="checkbox">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name='meta_title' value="{{ $category->meta_title }}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_descript" rows="3" class="form-control">{{ $category->meta_descript }}</textarea>
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Categoroy Image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="update" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
