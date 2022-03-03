@extends("template")
@section("title", "home")


@section('content')
    <h1>Welcome {{$varNom}} {{$varPrenom}}</h1>
    @if (strlen($varNom)<3)
    Le nom est trop petite 
    @else 
    Le nom est ok 
    @endif 
    <ul>
    @for ($i = 0; $i < 10; $i++)
    {{-- @ dd($loop) --}}
    <li>The current value is {{ $i }}</li>
@endfor
    </ul>
    <br>
    @foreach ($stagiaires as $unStagiaire)
    @dd($loop)
    <li class="{{$loop->odd? "impair": "paire"}}">{{$unStagiaire}} {{$loop->iteration}}/{{$loop->count}}</li>
    @endforeach
@endsection