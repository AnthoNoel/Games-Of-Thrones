@extends('base')
@section('page-content')


            @if( $houseName !== '')
            <h2>Maison {{ $houseName }}</h2>
            @endif
            <ul class="characters-list">
                @foreach ( $characters as $character )
                <li class="character-card">
                    <a href="{{ route('main.character', ['id' =>  $character->id]) }}">

                        <div class="avatar" style="background: #{{ $character->houses[0]->colour }};">
                            <img src="/assets/img/{{ $character->image }}" alt="Arya">
                        </div>
                        <div class="name">
                            {{ $character->first_name }} {{ $character->last_name }}
                        </div>
                    </a>
                </li>
                @endforeach

            </ul>
@endsection
