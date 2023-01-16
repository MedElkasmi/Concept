<section id="about" class="about">
    <div class="container">
       <div class="row justify-content-end">
          <div class="col-lg-11">
             <div class="row justify-content-end">
                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                   <div class="count-box py-5">
                      <i class="bi bi-emoji-smile"></i>
                      <span data-purecounter-start="0" data-purecounter-end="{{$about->title_span_clients}}" class="purecounter">0</span>
                      <p>Happy Clients</p>
                   </div>
                </div>
                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                   <div class="count-box py-5">
                      <i class="bi bi-journal-richtext"></i>
                      <span data-purecounter-start="0" data-purecounter-end="{{$about->title_span_projects}}" class="purecounter">0</span>
                      <p>Projects</p>
                   </div>
                </div>
                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                   <div class="count-box pb-5 pt-0 pt-lg-5">
                      <i class="bi bi-clock"></i>
                      <span data-purecounter-start="0" data-purecounter-end="{{$about->title_span_years}}" class="purecounter">0</span>
                      <p>Years of experience</p>
                   </div>
                </div>
                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                   <div class="count-box pb-5 pt-0 pt-lg-5">
                      <i class="bi bi-award"></i>
                      <span data-purecounter-start="0" data-purecounter-end="{{$about->title_span_awards}}" class="purecounter">0</span>
                      <p>Awards</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-6 video-box align-self-baseline position-relative">
             <img src="assets/img/about.jpg" class="img-fluid" alt="">
             <a href="{{$about->video_background}}" class="glightbox play-btn mb-4"></a>
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0 content">
             <h3>{{$about->desc_title}}</h3>
             <ul>
                <li><i class="bx bx-check-double"></i>{{$about->paragraph}}</li>
             </ul>
          </div>
       </div>
    </div>
 </section>