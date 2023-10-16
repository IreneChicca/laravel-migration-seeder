@extends('layouts.app')

@section('main-content')
  <section class="container mt-5 text-center">
    <h1>{{ $title }}</h1>



    <div class="mt-4">

      @foreach ($trainsToday as $train)
          
      
      <div class="col-8 m-auto border rounded mb-4 p-2 d-flex justify-content-evenly align-items-center">


        <div class="">
          <h5>{{ $train->corporate}}</h5>
          <h6>vi augura buon viaggio</h6>
          
         
        </div>
        
        
          <div class="border rounded p-3 mb-2 text-start">
            <h6>Partenza</h6>
          <p>Stazione: {{ $train->start_station}} </p>
          <p>Data: {{ $train->start_date}} </p>
          <p>Orario: {{ $train->start_time}} </p>
          </div>
          <div  class="border rounded p-3  text-start">
            <h6>Arrivo</h6>
            <p>Stazione: {{ $train->end_station}} </p>
            <p>Data: {{ $train->end_date}} </p>
            <p>Orario: {{ $train->end_time}} </p>
          </div>
        
        
        <div class="">
          <h6>Vagone: {{ $train->n_wagon}} </h6>
          <p>Posto 14B</p>
        </div>

      
      </div>
      @endforeach
    </div>
  </section>
@endsection
