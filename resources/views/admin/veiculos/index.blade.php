@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Veículos</th>
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
                            <a href="">Editar</a> -
                            <a href="">Concluído</a> -
                            <a href="">Excluir</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Não existe serviços pendentes.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>

@endsection
