@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Main</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group>">
                        <input type="text" value="{{ $product->title }}" name="title" class="form-control mb-1"
                            placeholder="Title">
                        <input type="text" value="{{ $product->description }}" name="description"
                            class="form-control mb-1" placeholder="Description">
                        <textarea name="content" class="form-control mb-1" placeholder="Content">{{ $product->content }}</textarea>
                        <input type="number" value="{{ $product->price }}" name="price" class="form-control mb-1"
                            placeholder="Price">
                        <input type="number" value="{{ $product->quantity }}" name="quantity" class="form-control mb-1"
                            placeholder="Quantity">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_image" type="file" class="custom-file-input"
                                        id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Select a Tag"
                                style="width: 100%;">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                                @foreach ($product->tags as $tag)
                                    <option selected value="{{ $tag->id }}">{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Select a Color"
                                style="width: 100%;">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->title }}</option>
                                @endforeach
                                @foreach ($product->colors as $color)
                                    <option selected value="{{ $color->id }}">{{ $color->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <select name="category_id" class="custom-select form-control mb-1">
                            <option disabled selected>Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                            <option selected value="{{ $product->category->id }}">{{ $product->category->title }}</option>
                        </select>

                    </div>
                    <div class="form-check">
                        <input type="checkbox" checked="{{ $product->is_published == false ? 'false' : 'true' }}"
                            name="is_published" class="form-check-input mb-1">
                        <label class="form-label-input">Is published</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </div>
                </form>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
