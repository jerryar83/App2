@extends ('layouts.app')
@section('content')
<h2>Archivos fotograficos</h2>


<div class="container-fluid" style="background-color:#abc">
        {{Form::open(array('method' => 'POST', 'action'=>'App\Http\Controllers\ArchivosFotograficosController@store', 'files' => true))}}
        <div class="form-group">
            {{Form::label('title', 'Nombre')}} 
            {{Form::text('nombre',null,['class' =>'form-control'] ) }}
        </div>
        <div class="form-group">
            {{Form::file('file',null,['class'=>'form-control'])}}
        </div>
        <div class =" form-group">
            {{Form::submit('Guardar Foto',['class' =>'btn btn-primary mb-2 center '])}}
            
        </div>
        {{ Form::close()}}
</div>



@endsection

@push('js')

@endpush
