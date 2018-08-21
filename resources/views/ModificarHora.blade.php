@extends('layouts.app')

@section('content')

    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Modificar horario') }}</label>
    <form method="POST" action="{{ route('restaurants.update',$resta->Nombre)}}" aria-label="{{ __('Register') }}">
        @method('PUT')
        @csrf

        <input name="_method" type="hidden" value="PATCH">


        <div class="form-group row">
            <label for="horaA" class="col-md-4 col-form-label text-md-right">{{ __('Hora apertura') }}</label>

            <div class="col-md-6">
                <input id="horaA" type="time" class="form-control{{ $errors->has('horaA') ? ' is-invalid' : '' }}" name="horaA" value="{{ old('horaA') }}" >

                @if ($errors->has('horaA'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('horaA') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="horaC" class="col-md-4 col-form-label text-md-right">{{ __('Hora Cierre') }}</label>

            <div class="col-md-6">
                <input id="horaC" type="time" class="form-control{{ $errors->has('') ? ' is-invalid' : '' }}" name="horaC" value="{{ old('horaC') }}" >


            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('modificar') }}
                </button>
            </div>
        </div>
    </form>

@endsection