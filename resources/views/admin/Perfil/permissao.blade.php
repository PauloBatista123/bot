@extends('admin.Layouts.dashboard')

@section('content')
    @livewire('perfil.permissao', ['perfil_id' => $id] ,key('perfil.permissao'))
@endsection
