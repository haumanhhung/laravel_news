@extends('layouts.admin2')
@section('content')
    <div class="main-content-inner">
        <div class="row">

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><a href="{{ route('post.index') }}">LIST POST</a></h4>
                        <div class="card-body">
                            <h4 class="header-title">CREATE POST</h4>
                            <form action="{{ route('post.store') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Enter Title Post">
                                    @if ($errors->has('title'))
                                        <h4 class="text-danger">Trường title không được để trống</h4>
                                    @endif
                                </div>
                                <div class="form-group">

                                    <input type="name" name="content" class="form-control" id="content"
                                        placeholder="Enter Content Post">
                                    @if ($errors->has('content'))
                                        <h4 class="text-danger">Trường content không được để trống</h4>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="name" name="image" class="form-control" id="image"
                                        placeholder="Enter Url image1 Post">
                                    @if ($errors->has('image'))
                                        <h4 class="text-danger">Trường image không được để trống</h4>
                                    @endif
                                </div>

                                <div class="form-group">


                                    <select name="category" id="category" class="form-control">
                                        <option value="" style="display:none" selected>Select Category</option>
                                        @foreach ($categories as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
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
