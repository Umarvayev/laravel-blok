@extends('layouts.master')

@section('title', 'Category')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1 class="">Edit Category</h1>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mt-3">
                        <label for="">Category Name</label>
                        <input class="text" value="{{ $category->name }}" name="name" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Slug</label>
                        <input class="text"  value="{{ $category->slug }}"name="slug" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Description</label>
                        <input class="text" value="{{ $category->description }}" name="description" rows="5" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control"/>
                    </div></br>
                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" value="{{ $category->meta_title }}" name="meta_title" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Meta Description</label>
                        <textarea  value="{{ $category->meta_description }}" name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="">Meta Keywords</label>
                        <textarea value="{{ $category->meta_keyword }}" name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox" name="navbar_status" {{ $category->navbar_status == 1 ? 'checkend':'' }} />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label> Status</label>
                            <input type="checkbox" name="status" {{ $category->status == 1 ? 'checkend':'' }} />
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
