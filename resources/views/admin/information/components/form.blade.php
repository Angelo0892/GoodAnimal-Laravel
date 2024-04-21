<div>
    <label for="">Titulo</label>
    <input type="text" name="title" value="@isset($information){{$information->title}}@endisset">
</div>

<div>
    <label for="">Tipo de documento</label>
    <label for="">Noticia:</label>
    <input type="radio" name="type" value="N">

    <label for="">Cuidado animal:</label>
    <input type="radio" name="type" value="C">
</div>



<div id="entries">
    @isset($information)
        @foreach ($subtitles as $subtitle)
            <div>
                <label for="subtitle">Subtítulo:</label><br>
                <input type="text" class="subtitle" name="subtitle[]" value="{{$subtitle->subtitle}}"><br><br>
                <label for="information">Contenido:</label><br>
                <textarea class="information" name="information[]" rows="4" cols="50">{{$subtitle->information}}</textarea><br><br>
                <button type="button" class="deleteEntry">Eliminar</button>
            </div>
        @endforeach
    @else
        <div>
            <label for="subtitle">Subtítulo:</label><br>
            <input type="text" class="subtitle" name="subtitle[]"><br><br>
            <label for="information">Contenido:</label><br>
            <textarea class="information" name="information[]" rows="4" cols="50"></textarea><br><br>
            <button type="button" class="deleteEntry">Eliminar</button>
        </div>
    @endisset
</div>

<div>
    <button type="button" id="addEntry">Agregar Nuevo</button>
</div>

<div>
    <button type="submit">Aceptar</button>
</div>

<div>
    <a href="{{route('admin.information.index')}}">Cancelar</a>
</div>

<script>
    document.getElementById("addEntry").addEventListener("click", function() {
        const entriesDiv = document.getElementById("entries");
        const newEntry = document.createElement("div");
        newEntry.innerHTML = `
            <label for="subtitle">Subtítulo:</label><br>
            <input type="text" class="subtitle" name="subtitle[]"><br><br>
            <label for="information">Contenido:</label><br>
            <textarea class="information" name="information[]" rows="4" cols="50"></textarea><br><br>
            <button type="button" class="deleteEntry">Eliminar</button>
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