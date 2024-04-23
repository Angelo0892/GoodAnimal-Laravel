<div class="mb-3">
    <label for="" class="form-label">Titulo:</label>
    <input type="text" name="title" class="form-control" value="@isset($information){{$information->title}}@else {{old('title')}} @endisset">
    @error('title')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="">Tipo de documento</label>
    <label for="">Noticia:</label>
    <input type="radio" name="type" value="N" checked>

    <label for="">Cuidado animal:</label>
    <input type="radio" name="type" value="C">
</div>

@isset($information)
    <section class="row imagen_animal">
        <div>
            <img class="_imagen" src="/{{$information->imagen}}" class="d-block w-100" alt="">
        </div>
    </section>

    <div>
        <input type="radio" id="radio_image" name="change_image" value="generate" onclick="generateImage('with_image')">
        <label for="">Guardar nueva imagen</label>

        <input type="radio" id="radio_no_image" name="change_image" value="no_generate" onclick="generateImage('without_image')" checked>
        <label for="">Mantener imagen</label>
    </div>
@endisset

<div id="generateImage_id" class="m-2">
    <label for="" class="product-label">Agregar imagen:</label>
    <input id="default_btn_image" type="file" name="image" accept="image/*">
    @error('image')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div id="entries">
    @isset($information)
        @foreach ($subtitles as $subtitle)
            <div>
                <label for="subtitle" class="form-label">Subtítulo:</label><br>
                <input type="text" class="subtitle form-control" name="subtitle[]" value="{{$subtitle->subtitle}}"><br><br>
                <label for="information" class="form-label">Contenido:</label><br>
                <textarea class="information form-control" name="information[]" rows="4" cols="50">{{$subtitle->information}}</textarea><br><br>
                <button type="button" class="deleteEntry btn btn-danger m-2">Eliminar</button>
            </div>
        @endforeach
    @else
        <div>
            <label for="subtitle" class="form-label">Subtítulo:</label><br>
            <input type="text" class="subtitle form-control" name="subtitle[]"><br><br>
            <label for="information" class="form-label">Contenido:</label><br>
            <textarea class="information form-control" name="information[]" rows="4" cols="50"></textarea><br><br>
            <button type="button" class="deleteEntry btn btn-danger m-2">Eliminar</button>
        </div>
    @endisset
</div>

<div>
    <button type="button" id="addEntry" class="btn btn-info m-2">Agregar Nuevo</button>
</div>

<div>
    <button type="submit" class="btn btn-primary m-2">Aceptar</button>
</div>

<div>
    <a href="{{route('admin.information.index')}}" class="btn btn-danger m-2">Cancelar</a>
</div>

<script>

    //Funciones para cambiar imagen

    var camp_image = document.getElementById('generateImage_id');

    function generateImage(generate) {

        if (generate === 'with_image') {
            camp_image.style.display = 'block';
            
        } else if (generate === 'without_image') {
            camp_image.style.display = 'none';
        }
    }

    //Funciones para los subtitulos

    document.getElementById("addEntry").addEventListener("click", function() {
        const entriesDiv = document.getElementById("entries");
        const newEntry = document.createElement("div");
        newEntry.innerHTML = `
            <label for="subtitle" class="form-label">Subtítulo:</label><br>
            <input type="text" class="subtitle form-control" name="subtitle[]"><br><br>
            <label for="information" class="form-label">Contenido:</label><br>
            <textarea class="information form-control" name="information[]" rows="4" cols="50"></textarea><br><br>
            <button type="button" class="deleteEntry btn btn-danger m-2">Eliminar</button>
        `;
        entriesDiv.appendChild(newEntry);
    });

    document.getElementById("entries").addEventListener("click", function(event) {
        if (event.target.classList.contains("deleteEntry")) {
            event.target.parentNode.remove();
        }
    });

    document.getElementById("subtitleForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const subtitles = document.getElementsByClassName("subtitle");
        const informations = document.getElementsByClassName("information");
        let subtitleinformation = "";
        let informationinformation = "";
        for (let i = 0; i < subtitles.length; i++) {
            subtitleinformation += "Subtítulo " + (i + 1) + ": " + subtitles[i].value + "<br>";
            informationinformation += "Contenido " + (i + 1) + ": " + informations[i].value + "<br>";
        }
        document.getElementById("subtitleDisplay").innerHTML = subtitleinformation;
        document.getElementById("informationDisplay").innerHTML = informationinformation;
    });
</script>