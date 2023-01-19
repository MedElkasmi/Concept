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

   
      @include('admin.section.edit_menu')

      @include('admin.section.edit_about')

      @include('admin.section.edit_desc')

      @include('admin.section.edit_service')


</div>
@endsection
