@extends('layouts.main')

@section('content')
<h1>{{ $title }}</h1>
      <!-- Drink Menu Page -->
      @include('includes.drinkMenu')
      <!-- end Drink Menu Page --> 

      <!-- Iced Drinks Page -->
      @include('includes.iced')
      <!-- end Iced Drinks Page -->

@endsection