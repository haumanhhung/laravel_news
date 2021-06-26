@extends('layouts.admin2')
@section('content')
<div class="main-content-inner">
                <div class="row">
                    
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"><a href="{{route('category.index')}}">LIST CATEGORY</a></h4>
                                <div class="card-body">
                                        <h4 class="header-title">CREATE CATEGORY</h4>
                                        <form action="{{ route('category.store')}}" method="post">
                            @csrf
                                            
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control" >
                                                @if ($errors->has('name')) 
                                                    <h4 class="text-danger">Trường name không được để trống</h4>
                                                @endif
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