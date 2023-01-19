<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="section-block" id="basicform">
       <h3 class="section-title">Edit description :</h3>
    </div>
    <div class="card">
       <h5 class="card-header">Edit description</h5>
       <div class="card-body">
          <form method="POST" action="{{ route('desc.store') }}" enctype="multipart/form-data">
             @csrf
             @method('POST')

             @if ($errors->any())
             @foreach ($errors->get('title_text') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Title Text</label>
                <input id="inputText3" type="text" class="form-control" name="title_text">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('title_button') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                      <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Title for button</label>
                <input id="inputText3" type="text" class="form-control" name="title_button">
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

             @if ($errors->any())
             @foreach ($errors->get('background_image') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                      <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile"  name="background_image">
                <label class="custom-file-label" for="customFile">Background images</label>
             </div>

             <button class="btn btn-rounded btn-primary" type="submit">Save</button>
          </form>
       </div>
    </div>
 </div>