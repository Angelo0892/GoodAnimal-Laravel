<div>
    <label for="">Titulo</label>
    <input type="text" name="title">
</div>

<div>
    <label for="">Tipo de documento</label>
    <label for="">Noticia:</label>
    <input type="radio" name="type" value="N">

    <label for="">Cuidado animal:</label>
    <input type="radio" name="type" value="C">
</div>

<div>
    <button type="submit">Aceptar</button>
</div>

<div>
    <a href="{{route('admin.information.index')}}">Cancelar</a>
</div>