<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Cadastrar Usuário') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Usuários</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Novo Usuário</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-user action="createUser" />
    </div>
</x-app-layout>
