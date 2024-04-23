@extends('components.user-main')

@section('content_html')
<section class="row sections_cards">

    <section class="row section_sub">
        <div class="linea_sub col-10 col-lg-10">
      
        </div>
        <div class="col-10 col-lg-8">
          <h3 class="m-4">Noticias</h3>
        </div>
    </section>
    
    <section class="card_novelty col-12 row">

      @foreach ($informations as $information)
        <div class="col-lg-2 col-sm-6 my-2 card_space">
          <img src="/{{$information->imagen}}" class="card_image" alt="...">
          <div class="card-body">
            <h5 class="card_title">{{$information->title}}</h5>
            <a href="{{route('navigation.animal', $information)}}" class="button_card">Ver</a>
          </div>
        </div>
      @endforeach

    </section>
</section>
@endsection