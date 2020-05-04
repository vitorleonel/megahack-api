@extends('layouts.app', [
    'pageTitle' => 'Loja Aqui Tem - Artigos Eletrônicos'
])

@section('content')
    <div class="container-fluid pt-8">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <a href="#" class="btn btn-primary">Smartphones</a>
                <a href="#" class="btn btn-primary">Acessórios</a>
                <a href="#" class="btn btn-primary">Notebooks</a>
                <a href="#" class="btn btn-primary">Eletrônicos</a>
                
                {{-- <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Novo produto</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div> --}}
            </div>
        </div>

        @for($i = 0; $i < 3; $i++)
        <div class="row mt-4">
            @for($c = 0; $c < 4; $c++)
            <div class="col-xl-3 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="/images/products/imac.jpeg" class="img-fluid" />
                        <h2 class="display-4 mt-4">Apple iMac 2020</h2>
                        <p class="display-4">R$ 5.550,00</p>
                        <button type="button" class="btn btn-outline-default">Comprar</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        @endfor

        @include('layouts.footers.auth')
    </div>
@endsection