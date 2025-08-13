@extends('layouts.app')

@section('title', 'LinkTree - Nome do usuário')

@section('content')
<div class="container">
    <!-- Top Bar -->
    <div class="top-bar">
        <span class="home-text">Home</span>
    </div>
    
    <!-- Header -->
    <div class="header">
        <div class="menu-dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
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
        <x-social-icon href="#" icon="instagram" platform="Instagram" />
        <x-social-icon href="#" icon="facebook" platform="Facebook" />
        <x-social-icon href="#" icon="whatsapp" platform="WhatsApp" />
        <x-social-icon href="#" icon="twitter" platform="X" />
        <x-social-icon href="#" icon="youtube" platform="YouTube" />
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="footer-links">
            <a href="#" class="footer-link">Sobre</a>
            <a href="#" class="footer-link">Privacidade</a>
            <a href="#" class="footer-link">Termos</a>
            <a href="#" class="footer-link">Contato</a>
        </div>
        <div class="footer-text">
            © 2025 LinkTree. Todos os direitos reservados.
        </div>
    </div>
</div>
@endsection