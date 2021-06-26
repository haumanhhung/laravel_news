@extends('layouts.web')
@section('content')
<section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          
            <div class="all-blog-posts">
              <div class="row">
              
                <div class="col-lg-12">
                  <div class="blog-post">
                    
                    <div class="down-content">
                      <span>{{$post->category->name}}</span>
                      <h4>{{$post->title}}</h4>
                      <ul class="post-info">
                        <li>Admin</li>
                        <li>{{$post->created_at}}</li>
                        
                      </ul>
                      
                      
                    </div>
                    <div class="blog-thumb">
                      <img src="{{$post->image}}" alt="">
                    </div>
                    <p>{{$post->content}}</p>
                  </div>
                </div>
             
                
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                      @foreach($categories as $category)
                        <li><a href="{{url('category', $category->id)}}">{{$category->name}}</a></li>
                      @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection