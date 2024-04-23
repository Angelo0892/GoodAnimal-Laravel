@extends('components.user-main')

@section('content_html')

    <section class="row sections_cards">
        <section class="row section_sub">
            <div class="linea_sub col-10 col-lg-10">
        
            </div>
            <div class="col-10 col-lg-8">
            <h3 class="m-4">{{$information->title}}</h3>
            </div>
        </section>
    </section>
    
    <section class="row imagen_animal">
        <div>
            <img class="_imagen" src="/{{$information->imagen}}" class="d-block w-100" alt="">
        </div>
    </section>

    <section class="text_index row my-5">
        <div class="col-lg-3 col-sm-1 col-1"></div>
        <div class="col-lg-6 col-sm-10 col-10">
            @foreach ($subtitles as $subtitle)
                <div>
                    <h4>{{$subtitle->subtitle}}</h4>
                </div>
                <div>
                    <p>{!! nl2br(e($subtitle->information)) !!}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection