<section id="services" class="services ">
    <div class="container">
       <div class="section-title pt-5" data-aos="fade-up">
          <h2>Our Services</h2>
       </div>
       <div class="row">

          @foreach ($service as $data)

            <div class="col-md-6">
               <div class="icon-box" data-aos="fade-up">
                  <div class="icon"><i class="bi bi-0-square" style="color: #ff689b;"></i></div>
                  <h4 class="title"><a href="">{{$data->main_title}}</a></h4>
                  <p class="description">{{$data->desc_paragraph}}</p>
               </div>
            </div>

         @endforeach

       </div>
    </div>
 </section>