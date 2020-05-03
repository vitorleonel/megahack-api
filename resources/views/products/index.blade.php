@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-8">
        <div class="row mb-4">
            <div class="col-xl-2">
                <button class="btn btn-icon btn-primary btn-block" type="button">
                    <i class="fas fa-plus pr-2"></i> NOVO PRODUTO
                </button>
            </div>
            <div class="col-xl-10">
                <input type="text" class="form-control" placeholder="Buscar produtos...">
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="width: 30px">
                                        <div class="custom-control custom-checkbox mb-2 mt--2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th scope="col" style="width: 30px">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col" style="width: 150px">Valor</th>
                                    <th scope="col" style="width: 150px">Estoque</th>
                                    <th scope="col" style="width: 150px">Status</th>
                                    <th scope="col" style="width: 150px">Modo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3 mt--2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        2345
                                    </td>
                                    <td>
                                        Capa de celular iPhone 11
                                    </td>
                                    <td>
                                        R$ 57,90
                                    </td>
                                    <td>
                                        200 UN
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm">Oculto</button>
                                    </td>
                                    <td>
                                        <label class="custom-toggle">
                                            <input type="checkbox">
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox mb-3 mt--2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        2346
                                    </td>
                                    <td>
                                        Capa de celular Galaxy Note
                                    </td>
                                    <td>
                                        R$ 18,95
                                    </td>
                                    <td>
                                        300 UN
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm">Ativo</button>
                                    </td>
                                    <td>
                                        <label class="custom-toggle">
                                            <input type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Paginação de produtos" class="mt-4">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fa fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    
@endpush