@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div>Acceso Restaurante</div>

                        @if($user['Restaurant_id']==null)
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Registra tu restaurant') }}</label>
                                <form method="POST" action="{{ route('restaurants.store') }}" aria-label="{{ __('Register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">'Nombre'</label>

                                        <div class="col-md-6">
                                            <input  type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" >

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

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
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            @else


                                <p><label>{{ $resta->Nombre }} </label> </p>
                                <p><label>Apertura</label> </p>
                                <p><label>{{ $resta->hora_apertura }} </label> </p>
                                <p><label>Cierre</label> </p>
                                <p><label>{{ $resta->hora_cierre }} </label> </p>
                                <p>{{'¿Qué deseas hacer?'}}</p>
                                <p> <a href="{{ url('/home') }}">Modificar Carta</a>
                            </p>
                                <p> <a href="{{ url('/home') }}">Revisar pedidos</a>
                                </p>
                                <p>
                                    <a href="{{ route('restaurants.edit', $resta->Nombre)}}" >Administrar horarios</a>
                                </p>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection