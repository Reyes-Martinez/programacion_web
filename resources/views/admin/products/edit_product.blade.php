@extends('layouts.grocery')
@section('content')
<div class="banner">
  <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
      <div class="container">
          <h1 class="pt-5">
              Edit product
          </h1>
          <div class="card card-login mb-5">
            <div class="card-body">
{!! Form::open(['url' => '/productos' , 'method' => 'POST','class' => 'form-horizontal']) !!} <!--Laravel Collective   -->
{!! Form::token()!!}
<!--  Al igual que aparece en las instrucciones de laravelCollective que están en la documentación cambiamos las
  etiquetas del formulario, cajas de texto etc.-->
   <table class="table table-striped">

        <!--Como se pueden dar cuenta tenemos que sustituir todas las etiquetas HTML por el código que nos ofrece
        laravel collective y otro dato es que en la documentación nos lo muestran con un echo, pero cuando lo mudamos a nuestro
        proyecto tenemos que encerrar ese código entre llaves y doble signo de exclamación-->


  <tr>  <td>{!!Form::label('nombre', 'Nombre:')!!}</td>

   <td>

      {!!Form::text('NombreArticulo')!!}

    {{csrf_field()}}
   </td></tr>

     <tr>
         <td>
             {!!Form::label('seccion', 'Seccion:')!!}

         </td>


           <td>


              {!!Form::text('Seccion')!!}

           </td>
         </tr>
             <tr>
         <td> {!!Form::label('precio', 'Precio:')!!} </td>
           <td>


                 {!!Form::text('Precio')!!}


               </td>
         </tr>
             <tr>
         <td> {!!Form::label('fecha', 'Fecha:')!!} </td>
           <td>
                   {!!Form::text('Fecha')!!}
                        </td>
         </tr>
             <tr>
         <td>  {!!Form::label('Pais Origen ', 'Pais Origen:')!!} </td>
           <td>
                   {!!Form::text('Pais_Origen')!!}
                                </td>
         </tr>

    <tr><td>

    <input type="submit" name="enviar" value="Enviar">

    {!!Form::submit('Enviar')!!}

    </td>

    <td>


         {!!Form::reset('Borrar')!!}


        </td>

    </tr>

   </table>
{!! Form::close() !!} <!--Laravel Collective    -->
</div>
</div>
</div>
</div>
</div>