@extends('layout.app')
@extends('bar_nav')
@section('content')
<style>


  </style>
  

                    @php

                    $l = 0;
                    @endphp
                     
      
<div class="carou_gal ">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach ($Image as $Img)
        @if($l == 0)
        <div class="carousel-item active">
          <img class="d-block w-100 carou_gal2" src="storage/{{ $Img->nom }}.{{ $Img->type }}" alt="First slide">
        </div>
        @php
        $l++;
        @endphp
      @else
          <div class="carousel-item">
            <img class="d-block w-100 carou_gal2" src="storage/{{ $Img->nom }}.{{ $Img->type }}" alt="Second slide">
          </div>
        @endif
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> 
  </div>
    
   
    

  
    <div class="galleryBox">
  
      @foreach ($Image as $Img)

      <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg{{ $Img->id }}">    <div class="gallery">
      
     
          <img src="storage/{{ $Img->nom }}.{{ $Img->type }}"  >

      </div></a>

      <div class="modal fade bd-example-modal-lg{{ $Img->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img src="storage/{{ $Img->nom }}.{{ $Img->type }}" >
          </div>
        </div>
      </div>
  
        @endforeach 

  
      </div>















@endsection
