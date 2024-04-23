<div>
    <label for="">Nombre:</label>
    <input type="text" name="name" value="@isset($user){{$user->name}}@else{{old('name')}}@endisset">
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="">Email:</label>
    <input type="email" name="email" value="@isset($user){{$user->email}}@else{{old('email')}}@endisset">
    @error('email')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
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
    <label for="passworduser">Contraseña:</label>
    <input name="password" type="password">
    @error('password')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <h5>Listado de roles</h5>

    

    @isset($user)
        @foreach ($roles as $role)
            <div>
                <label>
                    <input type="checkbox" name="roles[]" value="{{$role->id}}"  {{ $user->roles && $user->roles->contains($role->id) ? 'checked' : '' }}>
                    {{$role->name}}
                </label>
            </div>
        @endforeach
    @else

        @foreach ($roles as $role)
            <div>
                <label>
                    <input type="checkbox" name="roles[]" value="{{$role->id}}">
                    {{$role->name}}
                </label>
            </div>
        @endforeach

    @endif
    
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