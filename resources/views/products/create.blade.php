@extends('layouts.app', [
    'menu_product_create' => 'active', 
    'product_expanded' => true, 
    'product_show' => 'show'
])

@section('content')
    <div class="container-fluid pt-8">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Novo produto</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="id">ID</label>
                                    <input type="text" id="id" class="form-control disabled" disabled>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Nome</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="description">Descrição</label>
                                    <textarea id="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-control-label" for="image">Imagem</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" lang="en">
                                    <label class="custom-file-label" for="customFileLang">Procurar...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="price">Preço</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">R$</span>
                                        </div>
                                        <input type="text" class="form-control" id="price" aria-label="price" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="stock">Estoque</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="stock" aria-label="stock" aria-describedby="basic-addon2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">UN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-primary btn-block btn-lg" type="button" onclick="location.href='{{ route('products.index', ['created' => true]) }}'">SALVAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection