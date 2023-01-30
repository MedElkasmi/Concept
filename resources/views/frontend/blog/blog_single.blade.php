@extends('frontend.master')
@section('content')
<main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
         <div class="container">
            <div class="breadcrumb-hero">
               <h2>Blog</h2>
               <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
            </div>
         </div>
      </div>
      <div class="container">
         <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li>{{$post->title}}</li>
         </ol>
      </div>
   </section>
   <!-- End Breadcrumbs -->
   <!-- ======= Blog Single Section ======= -->
   <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
         <div class="row">
            <div class="col-lg-8 entries">
               <article class="entry entry-single">
                  <div class="entry-img">
                     <img src="{{ url('upload/Blog/'. $post->img_url )}}" alt="" class="img-fluid">
                  </div>
                  <h2 class="entry-title">
                     <a href="">{{$post->title}}</a>
                  </h2>
                  <div class="entry-meta">
                     <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{$post->user->name}}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post->created_at}}</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                     </ul>
                  </div>
                  <div class="entry-content">
                     <p>
                        {{$post->content}}
                     </p>
                  </div>
                  <div class="entry-footer">
                     <i class="bi bi-tags"></i>
                     <ul class="tags">
                        @foreach($post->tags as $tag)
                        <li><a href="#">{{ $tag->tag_name }}</a></li>
                        @endforeach
                     </ul>
                  </div>
               </article>
               <!-- End blog entry -->
               <div class="blog-author d-flex align-items-center">
                  <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                  <div>
                     <h4>{{$post->user->name}}</h4>
                     <div class="social-links">
                        <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                     </div>
                     <p>
                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                     </p>
                  </div>
               </div>
               <!-- End blog author bio -->
               <div class="blog-comments">
                  <h4 class="comments-count">Comments ( {{$comments}} )</h4>
                  <div id="comment-1" class="comment">
                     @foreach($post->comments as $comment)
                     <div class="d-flex">
                        <div>
                           <h5>{{$comment->name}} Said : </h5> <br>
                           <time>{{$comment->created_at}}</time>
                           <p>{{$comment->content}}</p>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <!-- End comment #1 -->
                  <div class="reply-form">
                     <h4>Leave a Reply</h4>
                     <p>Your email address will not be published. Required fields are marked * </p>
                     <form method="POST" action="{{route('comment.store')}}">
                        @csrf

                        <div class="row">
                           <div class="col-md-6 form-group">
                              <input name="name" type="text" class="form-control" placeholder="Your Name *">
                           </div>
                           <div class="col-md-6 form-group">
                              <input name="email" type="text" class="form-control" placeholder="Your Email *">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col form-group">
                              <textarea name="content" class="form-control" placeholder="Your Comment *"></textarea>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <input name="id" type="hidden" value="{{$post->id}}">
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                     </form>
                  </div>
               </div>
               <!-- End blog comments -->
            </div>
            <!-- End blog entries list -->
            
            <div class="col-lg-4">

                <div class="sidebar">
            
                  <h3 class="sidebar-title">Search</h3>
                  <div class="sidebar-item search-form">
                    <form action="">
                      <input type="text">
                      <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                  </div><!-- End sidebar search formn-->
            
                  <h3 class="sidebar-title">Categories</h3>
                  <div class="sidebar-item categories">
                    <ul>
                      @foreach($post->categories as $category)
                      <li><a href="#">{{ $category->category_name }} <span>(25)</span></a></li>
                      @endforeach
                    </ul>
                  </div><!-- End sidebar categories-->
            
                  <h3 class="sidebar-title">Recent Posts</h3>
                  <div class="sidebar-item recent-posts">
                    <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                      <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End sidebar recent posts-->
            
                  <h3 class="sidebar-title">Tags</h3>
                  <div class="sidebar-item tags">
                    <ul>
                        @foreach($post->tags as $tag)
                        <li><a href="#">{{ $tag->tag_name }}</a></li>
                        @endforeach
                    </ul>
                  </div><!-- End sidebar tags-->
            
                </div><!-- End sidebar -->
            
              </div><!-- End blog sidebar -->


         </div>
      </div>
   </section>
   <!-- End Blog Single Section -->
</main>
<!-- End #main -->
@endsection
