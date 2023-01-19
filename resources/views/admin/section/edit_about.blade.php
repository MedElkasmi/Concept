<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="section-block" id="basicform">
       <h3 class="section-title">Edit About Section :</h3>
    </div>
    <div class="card">
       <h5 class="card-header">Edit Spans</h5>
       <div class="card-body">
          <form method="POST" action="{{ route('about.store') }}">
             @csrf
             @method('POST')

             @if ($errors->any())
             @foreach ($errors->get('title_span_clients') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Title : Happy clients</label>
                <input id="inputText3" type="text" class="form-control" name="title_span_clients">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('title_span_projects') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Title : Projects</label>
                <input id="inputText3" type="text" class="form-control" name="title_span_projects">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('title_span_years') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Title : Years of experience</label>
                <input id="inputText3" type="text" class="form-control" name="title_span_years">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('title_span_awards') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Title : Awards</label>
                <input id="inputText3" type="text" class="form-control" name="title_span_awards">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('video_background') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Url Video link :</label>
                <input id="inputText3" type="text" class="form-control" name="video_background">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('desc_title') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Description title :</label>
                <input id="inputText3" type="text" class="form-control" name="desc_title">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('paragraph') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif
             
             <div class="form-group">
                <label for="exampleFormControlTextarea1">Paragraph Text description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paragraph"></textarea>
             </div>
             <button class="btn btn-rounded btn-primary" type="submit">Save</button>
          </form>
       </div>
    </div>
 </div>