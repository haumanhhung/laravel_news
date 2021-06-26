@extends('layouts.admin2')
@section('content')
<div class="main-content-inner">
                <div class="row">
                    
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"><a href="{{route('post.create')}}">{{ trans('pagination.admin.create') }} Post</a></h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">{{ trans('pagination.admin.title') }}</th>
                                                    <th scope="col">{{ trans('pagination.admin.category') }}</th>
                                                    <th scope="col">{{ trans('pagination.admin.function') }}</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($posts as $key => $post)
                                                <tr>
                                                
                                                    <th scope="row">{{$key}}</th>
                                                    <td>{{$post->title}}</td>
                                                    <td>{{$post->category->name}}</td>
                                                    
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="{{route('post.edit', [$post->id]) }}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li class="mr-3">
                                                            <form action="{{route('post.destroy', [$post->id]) }}"  method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" style="border: none ; background:none"><i class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                
                                                </tr>
                                                
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
@endsection