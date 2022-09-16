@extends('home')

@section('main-content')
    <ol class="lista">
        @foreach($Comics as $Comic)
            <li>
                <a href="{{ route('comics.show', $Comic->id) }}">
                   {{$Comic->title}} - {{$Comic->price}}
                </a>
                <a href="{{ route('comics.edit', $Comic) }}">
                   <h2> modifica </h2>
                </a>


                <form action="{{ route('comics.destroy', $Comic->id) }}" method="POST">
                    @csrf
                    
                    @method('DELETE')

                    <button>
                        <input type="submit" value="cancella">
                    </button>
                </form>
            </li>
        @endforeach
    </ol>
    
@endsection