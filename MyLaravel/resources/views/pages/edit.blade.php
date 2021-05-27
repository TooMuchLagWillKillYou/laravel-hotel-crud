@extends('layouts.main-layout')

@section('content')
    <form method="POST" action="{{ route('update', $employee->id) }}">

        @csrf
        @method('POST')

        <div class="form-input">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" value="{{ $employee -> firstname }}">
        </div>

        <div class="form-input">
            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" value="{{ $employee -> lastname }}">
        </div>

        <div class="form-input">
            <label for="role">Role</label>
            <input id="role" type="text" name="role" value="{{ $employee -> role }}">
        </div>

        <div class="form-input">
            <label for="ral">Ral</label>
            <input id="ral" type="number" name="ral" value="{{ $employee -> ral }}">
        </div>

        <div>
            <div>
                <button type="submit">
                    UPDATE
                </button>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection