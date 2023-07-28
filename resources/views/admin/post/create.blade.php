@extends('layouts.master')

@section('title', 'Add Post')

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="card-header">
                <h4>Add Posts <a href="{{ url('admin/add-posts ') }}" class="btn btn-primary float-end">Add Posts</a></h4>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/add-posts') }}" method="POST">
                @csrf

                    <div class="mb-3">
                        <label for="">Category </label>
                        <select name="category_id   " class="form-control" />
                            @foreach($category as $cateitem)
                                    <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="">Post Name</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                    <div class="mt-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control"/>
                    </div>
                    <div class="mt-3">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="">Youtube Iframe link</label>
                        <textarea class="form-control" name="yt_iframe" class="form-control"></textarea>
                    </div>
                    </br>
                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Meta Description</label>
                        <textarea  name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="">Meta Keywords</label>
                        <textarea  name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>

                    <h6>Status</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label> Status</label>
                                <input type="checkbox" name="status" />
                            </div>
                        </div>
                        <div class="col-md-8">
                           <button type="submit" class="btn btn-primary">Save Category</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

@endsection
