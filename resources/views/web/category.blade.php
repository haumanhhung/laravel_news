@extends('layouts.web')
@section('content')


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="{{ asset('web')}}/images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">Politics</span>

              <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="{{ asset('web')}}/images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                <span>&nbsp;-&nbsp; July 19, 2019</span>
              </div>
              
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          
      </div>
    </div>
@endsection