@extends('frontend.master')
@section('content')
@include('frontend.body.header')
<!-- ======= Hero Section ======= -->
@include('frontend.section.hero')
<!-- End Hero -->
<main id="main">
   <!-- ======= About Section ======= -->
    @include('frontend.section.about')
   <!-- End About Section -->
   <!-- ======= Services Section ======= -->
    @include('frontend.section.services')
   <!-- End Services Section -->
</main>
<!-- End #main -->

@endsection
