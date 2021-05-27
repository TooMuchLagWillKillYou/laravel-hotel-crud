@extends('layouts.main-layout')

@section('content')
    
    <main>
        <ul>
            @foreach ($employees as $employee)
                <li>
                    <div class="employee">
                        {{ $employee -> id }}
                        {{ $employee -> firstname }}
                        {{ $employee -> lastname }}
                    </div>

                    <div class="opt">
                        <a href="{{ route('edit', $employee -> id) }}">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('destroy', $employee -> id) }}">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </main>

@endsection