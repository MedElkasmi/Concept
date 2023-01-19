<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="section-block" id="basicform">
       <h3 class="section-title">Edit Main Menu :</h3>
    </div>
    <div class="card">
       <h5 class="card-header">Edit Main Menu :</h5>
       <div class="card-body">
          <form method="POST" action="{{route('menu.store')}}">
             @csrf
             @method('POST')

             @if ($errors->any())
             @foreach ($errors->get('main_page') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Main Page :</label>
                <input id="inputText3" type="text" class="form-control" name="main_page">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('second_page') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Second Page :</label>
                <input id="inputText3" type="text" class="form-control" name="second_page">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('third_page') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Third Page :</label>
                <input id="inputText3" type="text" class="form-control" name="third_page">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('fourth_page') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Fourth Page :</label>
                <input id="inputText3" type="text" class="form-control" name="fourth_page">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('fifth_page') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Fifth Page :</label>
                <input id="inputText3" type="text" class="form-control" name="fifth_page">
             </div>

             @if ($errors->any())
             @foreach ($errors->get('sixth_page') as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ $error }}
                   <a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                </div>
             @endforeach
             @endif

             <div class="form-group">
                <label for="inputText3" class="col-form-label">Sixth Page :</label>
                <input id="inputText3" type="text" class="form-control" name="sixth_page">
             </div>
             <button class="btn btn-rounded btn-primary" type="submit">Save</button>
          </form>
       </div>
    </div>
 </div>