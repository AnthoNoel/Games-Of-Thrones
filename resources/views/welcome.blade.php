<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/assets/css/app.css">
    <title>Game of Thrones</title>
</head>

<main>
    <div class="wrapper">

        <ul class="characters-list">



                @foreach ( $characters as $character )
                <li class="character-card">

                    <a href="#character/1">
                        <div class="avatar" style="background: #e3e3e3;">
                            <img src="/public/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
                        </div>
                        <div class="name">
                            {{ $character->first_name }} {{ $character->last_name }}
                        </div>
                    </a>
                </li>
                @endforeach


        </ul>
    </div>
</main>

</body>

</html>
