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

                            <div>Acceso usuario</div>

                        <form method="POST" action="{{ route('menus.index') }}">
                            @csrf
                        <div class="form-group row">
                            <label for="restaurant" class="col-md-4 col-form-label text-md-right">{{ __('Elige un restaurant') }}</label>
                            <select  class="custom-select d-block w-100 col-md-6{{ $errors->has('restaurant') ? ' is-invalid' : '' }}" name="restaurant" id="restaurant" value="{{old('restaurant')}}">
                                <option value="">Elegir...</option>
                                @foreach($resta as $resta)
                                    <option value="{{$resta['id']}}">{{$resta['Nombre']}}</option>
                                @endforeach
                            </select>

                            <p> <button type="submit" >Ver Menú</button>
                            </p>

                        </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
