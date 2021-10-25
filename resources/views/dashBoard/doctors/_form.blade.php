@csrf
@include('dashBoard.partials.validation-error')
@include('dashBoard.partials.status')

<div class="form-group mb-3">
    <input class="form-control" type="text" name="rut" id="rut" placeholder="NIT"
    value="{{ old('rut', $doctor -> rut ) }}">
</div>

<div class="form-group mb-3">
    <input class="form-control" type="text" name="nombre_doctor" id="nombre_doctor" placeholder="Nombre del doctor"
    value="{{ old('nombre_doctor', $doctor -> nombre_doctor ) }}">
</div>

<div class="form-group mb-3">
    <input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="Apellidos del doctor"
    value="{{ old('apellidos', $doctor -> apellidos ) }}">
</div>

<div class="form-group mb-3">
    <input class="form-control" type="text" name="email" id="email" placeholder="Email del doctor"
    value="{{ old('email', $doctor -> email ) }}">
</div>

<div class="form-group mb-3">
    <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Direccion del doctor"
    value="{{ old('direccion', $doctor -> direccion ) }}">
</div>

<div class="form-group mb-3">
    <select class="form control " name="especialidad" id="">
        <option value="1">Cardiologo</option>
        <option value="2">Cirujano</option>
        <option value="3">Neurologo</option>
    </select>
</div>

<div>
    <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
    <a href="{{ route('doctor.index') }}" class="btn btn-info btn-sm" >Listar doctores</a>
    
</div>

