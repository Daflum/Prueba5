@extends ('layouts.app')

@section('content')

    <div class="col">
        @foreach($prod as $prod)
            <div class="col-sm">
              <div class="card text-center" style="width:18rem;">

                  <div class="card-body">
                      <h5 class="card-title">{{$plato->where('id',$prod['plato_id'])->Nombre }}</h5>
                  </div>
              </div>

            </div>
@endforeach
    </div>

    <div class="col">
        @foreach($prod as $prod)
            <div class="col-sm">
                <div class="card text-center" style="width:18rem;">

                    <div class="card-body">
                        <h5 class="card-title">{{$prod->precio}}</h5>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

    @endsection