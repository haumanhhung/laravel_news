@extends('layouts.admin2')
@section('content')
    <div class="main-content-inner">
        <div class="row">

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><a href="{{ route('post.index') }}">LIST POST</a></h4>
                        <div class="card-body">
                            <h4 class="header-title">EDIT CATEGORY</h4>
                            <form action="{{ route('post.update', [$post->id]) }}" method="post">

                                @csrf
                                @method('PUT')

                                <div class="form-group">

                                    <input type="name" name="title" class="form-control" id="title"
                                        value="{{ $post->title }}">
                                    @if ($errors->has('title'))
                                        <h4 class="text-danger">Trường title không được để trống</h4>
                                    @endif
                                </div>
                                <div class="form-group">

                                    <input type="name" name="content" class="form-control" id="content"
                                        value="{{ $post->content }}">
                                    @if ($errors->has('content'))
                                        <h4 class="text-danger">Trường content không được để trống</h4>
                                    @endif
                                </div>
                                <div class="form-group">

                                    <input type="name" name="image" class="form-control" id="image"
                                        value="{{ $post->image }}">
                                    @if ($errors->has('image'))
                                        <h4 class="text-danger">Trường image không được để trống</h4>
                                    @endif
                                </div>

                                <div class="form-group">


                                    <select name="category" id="category" class="form-control">

                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate->id }}" @if ($post->category_id == $cate->id) selected @endif>{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Table end -->
        </div>
    </div>
@endsection
