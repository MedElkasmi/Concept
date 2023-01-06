@extends('admin.admin_master')
@section('dashboard-content')

<div class="influence-profile">
   <div class="container-fluid dashboard-content ">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
               <h3 class="mb-2">User Profile </h3>
               <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Template</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
            <div class="card">
               <div class="card-body">
                  <div class="user-avatar text-center d-block">
                     <img src="{{ url('upload/admin_images/'. $user->profile_image )}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                  </div>
                  <div class="text-center">
                     <h2 class="font-24 mb-0">{{$user->name}}</h2>
                  </div>
               </div>
               <div class="card-body border-top">
                  <h3 class="font-16">Contact Information</h3>
                  <div class="">
                     <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>{{$user->email}}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">

            @include('admin.profile.partials.update-profile-information-form')  
            @include('admin.profile.partials.update-password-form')  
            @include('admin.profile.partials.update-profile-image') 
            
         </div>
      </div>
   </div>
</div>

@endsection
