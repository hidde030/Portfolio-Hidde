@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="name">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($product) ? $product->title : '') }}">
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif

            </div>
            <!-- headtitle -->
            <div class="form-group {{ $errors->has('headtitle') ? 'has-error' : '' }}">
                <label for="name">Headtitle</label>
                <input type="text" id="headtitle" name="headtitle" class="form-control" value="{{ old('headtitle', isset($product) ? $product->headtitle : '') }}">
                @if($errors->has('headtitle'))
                    <em class="invalid-feedback">
                        {{ $errors->first('headtitle') }}
                    </em>
                @endif

            </div>
            <!-- slug -->
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="name">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($product) ? $product->slug : '') }}">
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif

            </div>
            <!-- description -->
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="name">Description</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($product) ? $product->description : '') }}">
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif

            </div>
            <!-- body -->
            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                <label for="name">Body</label>
                <input type="text" id="body" name="body" class="form-control" value="{{ old('body', isset($product) ? $product->body : '') }}">
                @if($errors->has('body'))
                    <em class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </em>
                @endif

            </div>
            <!-- image -->
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">Image</label>
                <input type="text" id="image" name="image" class="form-control" value="{{ old('image', isset($product) ? $product->image : '') }}">
                @if($errors->has('image'))
                    <em class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </em>
                @endif

            </div>
            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label for="name">Category</label>
                <input type="text" id="category" name="category" class="form-control" value="{{ old('category', isset($product) ? $product->category : '') }}">
                @if($errors->has('category'))
                    <em class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </em>
                @endif

            </div>


            <div class="form-group {{ $errors->has('day') ? 'has-error' : '' }}">
                <label for="name">Day</label>
                <input type="text" id="day" name="day" class="form-control" value="{{ old('day', isset($product) ? $product->day : '') }}">
                @if($errors->has('day'))
                    <em class="invalid-feedback">
                        {{ $errors->first('day') }}
                    </em>
                @endif

            </div>
            <div class="form-group {{ $errors->has('month') ? 'has-error' : '' }}">
                <label for="name">Month</label>
                <input type="text" id="month" name="month" class="form-control" value="{{ old('month', isset($product) ? $product->month : '') }}">
                @if($errors->has('month'))
                    <em class="invalid-feedback">
                        {{ $errors->first('month') }}
                    </em>
                @endif

            </div>


            <div class="form-group {{ $errors->has('sub_title') ? 'has-error' : '' }}">
                <label for="name">Sub_title</label>
                <input type="text" id="sub_title" name="sub_title" class="form-control" value="{{ old('sub_title', isset($product) ? $product->sub_title : '') }}">
                @if($errors->has('sub_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sub_title') }}
                    </em>
                @endif

            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection
