<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre</title>
</head>
<body>
    <h1>Sobre</h1>
    PHP Puro :
    <?php echo $sobre ?><br>
    <?php
        echo '<ul>';
        foreach ($produtos as $key => $value) {
            echo '<li>'. $key . '=>' . $value .'</li>';
        }
        echo '</ul>';
    ?>
    <br><br>

    BLADE :
    {{$sobre}}<br>
    <ul>
    @foreach ($produtos as $item)
        <li>{{$item}}</li>
    @endforeach
    </ul>

    <ul>
        @forelse ($produtos as $item)
            <li>{{$item}}</li>
        @empty
            <li>Não existem itens cadastrados.</li>
        @endforelse
    </ul>

</body>
</html>
