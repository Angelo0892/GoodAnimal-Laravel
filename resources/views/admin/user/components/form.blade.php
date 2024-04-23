<div class="mb-3">
    <label for="" class="form-label">Nombre:</label>
    <input type="text" name="name" class="form-control" value="@isset($user){{$user->name}}@else{{old('name')}}@endisset">
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control" value="@isset($user){{$user->email}}@else{{old('email')}}@endisset">
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

<div id="block_passsword" class="mb-3">
    <label for="passworduser" class="form-label">Contraseña:</label>
    <input name="password" type="password" class="form-control">
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

<div class="m-2">
    <button type="submit" class="btn btn-primary">Aceptar</button>
</div>

<div class="m-2">
    <a href="{{route('admin.user.index')}}" class="btn btn-danger">Cancelar</a>
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