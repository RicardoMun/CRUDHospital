@extends('dashBoard.master')
@section('content')

<table class="table table-dark table-striped table-over">
    <thead>
      <tr>
        <th scope="col">RUT</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Email</th>
        <th scope="col">Direccion</th>
        <th scope="col">Especialidad</th>
      </tr>
    </thead>
    <tbody>
      @foreach($doctor as $doctor)
        <tr>
          <th scope="row">{{ $doctor -> rut}}</th>
          <td>{{ $doctor -> nombre_doctor}}</td>
          <td>{{ $doctor -> apellidos}}</td>
          <td>{{ $doctor -> email}}</td>
          <td>{{ $doctor -> direccion}}</td>
          <td>{{ $doctor -> especialidad}}</td>
          <td>
            <a href="{{ route('doctor.edit', $doctor -> id) }}" class="btn btn-info">Editar</a>
            <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" 
            data-id="{{ $doctor -> id }}">
            Eliminar
            </button>

          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="mb-3">
    <a href="{{ route('doctor.create') }}" class="btn btn-info">Crear publicación</a>
  </div>
  
@endsection

<script>
  window.onload = function() {
    $('#exampleModal').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var id = button.data('id')
      action = $('#formDelete').attr('data-action').slice(0, -1)
      action += id 
      $('#formDelete').attr('action', action)
      var modal = $(this)
      modal.find('.modal-title').text('Vas a eliminar el post con el código: ' + id)
    });
  };
</script>