@extends('layout.layouts')
@section('titulo')
    LOGIN
@endsection
@section('contenido')
    <form action="{{route ('login')}}" method="POST">
        @csrf
    <!-- Email input -->
@if (session('mensaje'))
<p style="color: red">{{session('mensaje')}}</p>
@endif
    
    <div class="form-outline mb-4">

        <input type="email" id="form1Example1" name="email" class="form-control" />
        <label class="form-label" for="form1Example1">Email</label>

    </div>
    <!-- Password input -->

    <div class="form-outline mb-4">

        <input type="password" name="password" id="form1Example2" class="form-control" />

        <label class="form-label" for="form1Example2">Password</label>

    </div>



    <!-- 2 column grid layout for inline styling -->
{{-- 
    <div class="row mb-4">

        <div class="col d-flex justify-content-center">

        <!-- Checkbox -->

        <div class="form-check">

            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />

            <label class="form-check-label" for="form1Example3"> Remember me </label>

        </div>

        </div>



        <div class="col">

        <!-- Simple link -->

        <a href="#!">Forgot password?</a>

        </div>

    </div> --}}



    <!-- Submit button -->

    <button type="submit" class="btn btn-primary btn-block">Inicia Sesión</button>

    </form>

@endsection