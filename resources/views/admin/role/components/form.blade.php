<div>
    <label for="">Nombre:</label>
    <input name="name" type="text" value="@isset($role){{$role->name}}@else{{old('name')}}@endisset">
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>



@isset($role)
    @foreach ($permissions as $permission)
        <div>
            <input type="checkbox" name="permissions[]" value="{{$permission->id}}" {{ $role->permissions && $role->permissions->contains($permission->id) ? 'checked' : '' }}>
            {{$permission->description}}
        </div>
    @endforeach
@else
    @foreach ($permissions as $permission)
    <div>
        <input type="checkbox" name="permissions[]" value="{{$permission->id}}">
        {{$permission->description}}
    </div>
    @endforeach
@endisset

<div>
    <button type="submit">Aceptar</button>
</div>

<div>
    <a href="{{ route('admin.role.index') }}">Volver</a>
</div>