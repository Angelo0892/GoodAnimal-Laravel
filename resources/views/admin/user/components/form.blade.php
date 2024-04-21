<div>
    <label for="">Nombre:</label>
    <input type="text" name="name" value="@isset($user){{$user->name}}@endisset">
</div>

<div>
    <label for="">Email:</label>
    <input type="email" name="email" value="@isset($user){{$user->email}}@endisset">
</div>

@isset($user)
    <div>
        <input type="radio" id="radio_with_password" name="change_password" value="generate" onclick="generarPassword('with_password')" checked>
        <label for="">Generar nueva contraseña</label>

        <input type="radio" id="radio_without_password" name="change_password" value="no_generate" onclick="generarPassword('without_password')">
        <label for="">Mantener la contraseña</label>
    </div>
@endisset

<div id="block_passsword">
    <label for="passwordUsuario">Contraseña:</label>
    <input name="password" type="password">
</div>

<div>
    <button type="submit">Aceptar</button>
</div>

<div>
    <a href="{{route('admin.user.index')}}">Cancelar</a>
</div>

<script>
    var campo_password = document.getElementById('block_passsword');

    function generarPassword(generar) {

        if (generar === 'with_password') {
            campo_password.style.display = 'block';
            
        } else if (generar === 'without_password') {
            campo_password.style.display = 'none';
        }
    }
</script>