<!DOCTYPE html>
<html lang="en">

</html>



@section('content')

@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'emails.store']) !!}
        <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico']) !!}
                        @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                        <br>
                        
                    </div>
                </div>
        </div>
            {!! Form::submit('Crear Email', ['class' => 'btn btn-primary']) !!}
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
