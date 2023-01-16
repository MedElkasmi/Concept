@extends('admin.admin_master')
@section('dashboard-content')
<div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-body border-top">
      <div class="alert alert-primary" role="alert">
         <h4 class="alert-heading">Description :</h4>
         <p>Customize Your Dashboard</p>
         <hr>
         <p class="mb-0">You Can edit and customise your dashboard page based on section.</p>
      </div>
   </div>
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
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Main Page :</label>
                  <input id="inputText3" type="text" class="form-control" name="main_page">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Second Page :</label>
                  <input id="inputText3" type="text" class="form-control" name="second_page">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Third Page :</label>
                  <input id="inputText3" type="text" class="form-control" name="third_page">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Fourth Page :</label>
                  <input id="inputText3" type="text" class="form-control" name="fourth_page">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Fifth Page :</label>
                  <input id="inputText3" type="text" class="form-control" name="fifth_page">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Sixth Page :</label>
                  <input id="inputText3" type="text" class="form-control" name="sixth_page">
               </div>
               <button class="btn btn-rounded btn-primary" type="submit">Save</button>
            </form>
         </div>
      </div>
   </div>
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
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Title : Happy clients</label>
                  <input id="inputText3" type="text" class="form-control" name="title_span_clients">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Title : Projects</label>
                  <input id="inputText3" type="text" class="form-control" name="title_span_projects">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Title : Years of experience</label>
                  <input id="inputText3" type="text" class="form-control" name="title_span_years">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Title : Awards</label>
                  <input id="inputText3" type="text" class="form-control" name="title_span_awards">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Url Video link :</label>
                  <input id="inputText3" type="text" class="form-control" name="video_background">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Description title :</label>
                  <input id="inputText3" type="text" class="form-control" name="desc_title">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Paragraph Text description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paragraph"></textarea>
               </div>
               <button class="btn btn-rounded btn-primary" type="submit">Save</button>
            </form>
         </div>
      </div>
   </div>
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
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Title Text</label>
                  <input id="inputText3" type="text" class="form-control" name="title_text">
               </div>
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Title for button</label>
                  <input id="inputText3" type="text" class="form-control" name="title_button">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Paragraph Text description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paragraph"></textarea>
               </div>
               <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile"  name="background_image">
                  <label class="custom-file-label" for="customFile">Background images</label>
               </div>
               <button class="btn btn-rounded btn-primary" type="submit">Save</button>
            </form>
         </div>
      </div>
   </div>
   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="section-block" id="basicform">
         <h3 class="section-title">Edit Our Services :</h3>
      </div>
      <div class="card">
         <h5 class="card-header">Edit Our Services</h5>
         <div class="card-body">
            <form method="POST" action="">
               @csrf
               @method('POST')
               <div class="form-group">
                  <label for="inputText3" class="col-form-label">Main Title :</label>
                  <input id="inputText3" type="text" class="form-control">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Paragraph Text description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
               <button class="btn btn-rounded btn-primary">Save</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
