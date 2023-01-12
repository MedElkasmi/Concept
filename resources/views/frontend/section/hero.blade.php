<section id="hero" style="

   background:url({{ url('upload/Section/Descriptions/'. $data->background_image) }})  top center;
   width: 100%;
   height: 75vh;
   background-size: cover;
   position: relative;
   margin-bottom: -140px;
   z-index: 1

">
    <div class="hero-container" data-aos="fade-up">
       <h1>{{$data->title_text}}</h1>
       <h2>{{$data->paragraph}}</h2>
       <a href="" class="btn-get-started scrollto">{{$data->title_button}}</a>
    </div>
 </section>