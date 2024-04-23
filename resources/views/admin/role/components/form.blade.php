<div class="mb-3">
    <label for="" class="form-label">Nombre:</label>
    <input name="name" type="text" class="form-control" value="@isset($role){{$role->name}}@else{{old('name')}}@endisset">
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
    <button type="submit" class="btn btn-primary m-2">Aceptar</button>
</div>

<div>
    <a href="{{ route('admin.role.index') }}" class="btn btn-danger m-2">Volver</a>
</div>