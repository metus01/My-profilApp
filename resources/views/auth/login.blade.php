@extends('base')
@section('content')
<div class="container">
    <h2 class="text text-center text-primary">Se Connecter</h2>
    <form action="{{ route('login') }}" method="post">
        <livewire:login-field/>
        <button class="btn  container-fluid btn-primary">Connexion</button>
    </form>
</div>
@endsection
