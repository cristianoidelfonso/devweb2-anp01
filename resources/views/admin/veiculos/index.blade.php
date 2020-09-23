@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <div class="tableFixHead">
        <table class="highlight responsive-table centered">
            <thead>
                <tr>
                    <th class="centered">Veículos</th>
                    <th>Serviço</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carros as $carro => $servico)
                    <tr>
                        <td>{{$carro}}</td>
                        <td>{{$servico}}</td>
                        <td class="center-align">
                            @foreach ($acoes as $acao => $value)
                                {{-- <a href="{{$value}}">{{$acao}}</a> - --}}
                                <a href="/lista-servicos">{{$acao}}</a>&ensp;
                            @endforeach
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Não existe serviços pendentes.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    </section>

@endsection
