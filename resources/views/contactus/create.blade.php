
@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'contactus.store']) !!}
            <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo']) !!}
                            @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            <br>
                            {!! Form::label('email', 'Correo Electrónico') !!}
                            {!! Form::text('email ', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico']) !!}
                            @error('email ')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            <br>
                            {!! Form::label('phone', 'Número de Contacto') !!}
                            {!! Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número telefónico']) !!}
                            @error('phone')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            <br>
                            
                        </div>
                        <div class="col-6">
                            {!! Form::label('city', 'Ciudad / Departamento') !!}
                            {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ciudad / Departamento']) !!}
                            @error('city')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            <br>
                            {!! Form::label('message', 'Correo Electrónico') !!}
                            {!! Form::checkbox('message ', null, ['class' => 'form-control', 'placeholder' => 'Mensaje']) !!}
                            @error('message ')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            <br>
                        </div>
                    </div>



            </div>
                {!! Form::submit('Crear Petición', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop


