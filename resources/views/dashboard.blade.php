@extends('layouts.app')

@section('content')
    {{-- @include('layouts.headers.cards') --}}
    
    <div class="container-fluid pt-8">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Número de vendas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Estoque Vs Produtos disponíveis</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Novas vendas</h3>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">Ver todas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" style="width: 30%">Produto</th>
                                            <th scope="col" style="width: 20%">Comprador</th>
                                            <th scope="col" style="width: 15%">Data</th>
                                            <th scope="col" style="width: 15%">Comissão</th>
                                            <th scope="col" style="width: 20%">Status de entrega</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                Capa de celular Galaxy Note
                                            </th>
                                            <td class="d-flex align-items-center">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-4-800x800.jpg">
                                                </span>
                                                <span class="pl-2">Mariana Silveira</span>
                                            </td>
                                            <td>
                                                03/05/2020
                                            </td>
                                            <td>
                                                R$ 5,00
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success">Finalizada</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Fone de ouvido Beats
                                            </th>
                                            <td class="d-flex align-items-center">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-2-800x800.jpg">
                                                </span>
                                                <span class="pl-2">Helena Costa</span>
                                            </td>
                                            <td>
                                                04/05/2020
                                            </td>
                                            <td>
                                                R$ 15,00
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-danger">Aguardando entrega</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Monitor 27" LG Super Wide
                                            </th>
                                            <td class="d-flex align-items-center">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-3-800x800.jpg">
                                                </span>
                                                <span class="pl-2">Yoko Ono</span>
                                            </td>
                                            <td>
                                                03/05/2020
                                            </td>
                                            <td>
                                                R$ 175,00
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success">Finalizada</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Guia do mochileiro das galaxias
                                            </th>
                                            <td class="d-flex align-items-center">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-1-800x800.jpg">
                                                </span>
                                                <span class="pl-2">João da Silva</span>
                                            </td>
                                            <td>
                                                04/05/2020
                                            </td>
                                            <td>
                                                R$ 7,30
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-danger">Aguardando entrega</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                Blusa Azul Startup Unicorn
                                            </th>
                                            <td class="d-flex align-items-center">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-4-800x800.jpg">
                                                </span>
                                                <span class="pl-2">Mariana Silveira</span>
                                            </td>
                                            <td>
                                                03/05/2020
                                            </td>
                                            <td>
                                                R$ 18,97
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary">Aguardando pagamento</button>
                                            </
                                        {{-- <tr>
                                            <th scope="row">
                                                <h3>Fone de ouvido Beats</h3>
                                                <div>Data da venda: <strong>04/05/2020</strong></div>
                                                <div class="d-flex flex-row">
                                                    <div class="pt-3">
                                                        <span class="avatar avatar-sm rounded-circle">
                                                            <img alt="Image placeholder" src="/argon/img/theme/team-4-800x800.jpg">
                                                        </span>
                                                    </div>
                                                    <div class="p-3 pl-3">
                                                        <p>Mariana Silveira</p>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                R$ 15,00
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success">Aguardando entrega</button>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-xl-12">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Localidade dos meus divulgadores</h3>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">Ver todos</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="height: 570px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24605.832523017638!2d-46.62578262716806!3d-23.544049147293983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1588477951312!5m2!1spt-BR!2sbr" width="100%" height="570" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Ranking de vendedores</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Ver todos</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Vendas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-1-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="pt-3 pl-3">
                                                <p>João da Silva</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        1.480
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-2-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Helena Costa</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        1.480
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-3-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Yoko Ono</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        357
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-4-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Mariana Silveira</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        357
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-1-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="pt-3 pl-3">
                                                <p>João da Silva</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        1.480
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-2-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Helena Costa</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        1.480
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-3-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Yoko Ono</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        357
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-4-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Mariana Silveira</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        357
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-1-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="pt-3 pl-3">
                                                <p>João da Silva</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        1.480
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex flex-row">
                                            <div class="pt-3">
                                                <span class="avatar avatar-sm rounded-circle">
                                                    <img alt="Image placeholder" src="/argon/img/theme/team-2-800x800.jpg">
                                                </span>
                                            </div>
                                            <div class="p-3 pl-3">
                                                <p>Helena Costa</p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        1.480
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush