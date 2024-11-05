@extends('layouts.dashboardmaster')

@section('title')

   Blog

@endsection
@section('content')


<x-breadcum emon="Blog's Create Page"></x-breadcum>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Blog Create</h4>

                <form role="form" action="{{ route('bolg.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Titel</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Blog Title" name="title">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Slug</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Blog Slug" name="slug">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Categories</label>
                        <div class="col-sm-9">
                            <select class="form-control" data-toggle="select2" name="category_id">
                                <option>Select</option>
                                <optgroup label="{{ env('APP_NAME') }}">
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @error('category_id')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description" id="murobbeShort"> </textarea>
                            @error('short_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="decription" id="murobbelong"> </textarea>
                            @error('decription')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row md-3">
                        <img id="meaw" src="{{ asset('uploads/default/default.jpg') }}" alt=""  style="width: 100%; height:300px; object-fit:contain;"
                    </div>

                    <div class="row mb-2">
                        <label for="inputPassword5" class="col-sm-3 col-form-label">Blog Thumbnail</label>
                        <div class="col-sm-9">
                            <input onchange="document.querySelector('#meaw').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5" name="thumbnail">
                            @error('thumbnail')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="justify-content-end row">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>


@endsection


@section('script')

<script>

tinymce.init({
    selector: '#murobbeShort',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
  </script>




<script>


tinymce.init({
    selector: '#murobbelong',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
  </script>

@endsection
