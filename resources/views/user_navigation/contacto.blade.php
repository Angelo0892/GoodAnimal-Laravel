@extends('components.user-main')

@section('content_html')

<section class="row col-12 section_form">
    <div class="col-lg-8">
        
        <form action="" class="col-lg-12 form_main from_register">

            <h4>Contactanos</h4>

            <div class="my-4 mb-4 row">
                <div class="col-lg-3">
                    <label class="form-label">Email:</label>
                </div>

                <div class="col-lg-9">
                    <input type="email" class="form-control form_control">
                </div>
            </div>

            <div class="mb-4 row">
                <div class="col-lg-3">
                    <label class="form-label">Nombre:</label>
                </div>

                <div class="col-lg-9">
                    <input type="text" class="form-control form_control">
                </div>
            </div>

            <div class="mb-4 row">
                <div class="col-lg-12">
                    <label class="form-label">Mensaje:</label>
                </div>

                <div class="col-lg-12">
                    <textarea type="text" class="form-control form_control" rows="3"></textarea>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection
