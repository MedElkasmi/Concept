<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="section-block" id="basicform">
       <h3 class="section-title">Edit Our Services :</h3>
    </div>
    <div class="card">
       <h5 class="card-header">Edit Our Services</h5>
       <div class="card-body">
          <form method="POST" action="{{route('service.store')}}">
             @csrf
             @method('POST')

             @if ($errors->any())
             @foreach ($errors->get('main_title') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Main Title :</label>
                <input id="inputText3" type="text" class="form-control" name="main_title">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('desc_paragraph') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="exampleFormControlTextarea1">Paragraph Text description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc_paragraph"></textarea>
             </div>
             <button class="btn btn-rounded btn-primary" type="submit">Save</button>
          </form>
       </div>
    </div>
 </div>