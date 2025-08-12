@extends('layouts.app')

@section('title', 'LinkTree - Nome do usuário')

@section('content')
<div class="container">
    <!-- Header -->
    <div class="header">
        <span class="header-text">Home</span>
    </div>
    
    <!-- Profile Section -->
    <div class="profile-section">
        <x-avatar size="100" icon="👤" />
        
        <h1 class="username">Nome do usuário</h1>
        
        <p class="description">
            Uma descrição onde o usuário pode falar sobre seu trabalho ou deixar informações que ache importante
        </p>
    </div>
    
    <!-- Links Section -->
    <div class="links-section">
        <x-link-button href="#" text="Minha loja" />
        <x-link-button href="#" text="Outras redes sociais" />
        <x-link-button href="#" text="Links afiliados" />
        <x-link-button href="#" text="PROMOÇÃO" />
        <x-link-button href="#" text="Contato" />
    </div>
    
    <!-- Social Icons -->
    <div class="social-icons">
        <x-social-icon href="#" icon="📷" platform="Instagram" />
        <x-social-icon href="#" icon="📘" platform="Facebook" />
        <x-social-icon href="#" icon="💬" platform="WhatsApp" />
        <x-social-icon href="#" icon="🐦" platform="Twitter" />
        <x-social-icon href="#" icon="📺" platform="YouTube" />
    </div>
</div>
@endsection