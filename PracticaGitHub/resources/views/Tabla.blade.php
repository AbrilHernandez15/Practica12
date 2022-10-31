@extends ('Plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Tabla</Table></h1>
<div class="mt-5 container text-center w-50">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mariposa</td>
      <td>lepidopteros</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mosquito</td>
      <td>dipteros</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Abeja</td>
      <td>himenopteros</td>
    </tr>
  </tbody>
  </table>
</div>


@stop 