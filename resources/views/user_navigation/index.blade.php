@extends('components.user-main')

@section('content_html')
    
    <section class="row carousel_main">
        <div id="carouselExampleIndicators" class="carousel carousel_control col-lg-12">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner carousel_container">
            <div class="carousel-item active">
                <img src="../assets/images/conejos_1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/conejos_2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/conejos_3.jpg" class="d-block w-100" alt="">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon prev_image" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon next_image" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="text_index row my-5">

        <div class="col-lg-3 col-sm-1 col-1"></div>
        <div class="col-lg-6 col-sm-10 col-10">
            <p>
            Bienvenido a GoodAnimal, tu fuente confiable de noticias, información y cuidados para nuestros amigos de cuatro patas. En un mundo donde el vínculo humano-animal es más profundo que nunca, nos dedicamos a compartir historias inspiradoras, consejos prácticos y las últimas novedades en el cuidado y bienestar animal.
            </p>

            <p>
            En GoodAnimal, creemos en la importancia de entender, proteger y celebrar a todas las criaturas que comparten nuestro planeta. Desde noticias sobre avances en medicina veterinaria hasta guías para garantizar el bienestar óptimo de tu mascota, estamos aquí para brindarte recursos significativos y educativos.  
            </p>

            <p>
            Explora nuestras secciones llenas de historias conmovedoras, consejos de cuidado, entrevistas con especialistas y mucho más. Juntos, podemos construir un mundo donde cada animal reciba el amor, la atención y el respeto que merece.    
            </p>
        </div>
    </section>

@endsection