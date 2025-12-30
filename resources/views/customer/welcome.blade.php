@extends('layouts.customer')

@section('content')
<link href="https://fonts.cdnfonts.com/css/cooper-black" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    .hero-section, .masonry-wrapper, .info-section, .popular-section {
        background-color: #FDF9F0;
        margin: 0;
        color: #4A2C2A; 
    }

    .hero-section {
        text-align: center;
        padding: 60px 20px 40px 20px;
    }

    .hero-section h1 {
        font-family: 'Cooper Black', serif;
        font-size: 2.8rem;
        margin: 0 0 25px 0;
        color: #4A2C2A; 
        letter-spacing: -1px;
    }

    .hero-section p {
        font-family: 'Poppins', sans-serif;
        color: #4A2C2A;
    }

    .btn-brand {
        display: inline-block;
        text-decoration: none;
        background-color: #93796C;
        color: white;
        padding: 11px 28px;
        border-radius: 30px;
        border: 0.5px solid #4A2C2A; 
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-size: 0.8rem;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .btn-brand:hover {
        transform: scale(1.05);
        background-color: #836a5e;
        color: white;
    }

    .masonry-wrapper {
        padding: 0 8% 80px 8%;
        column-count: 5;
        column-gap: 20px;
    }

    .grid-item {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
        border-radius: 30px;
        overflow: hidden;
    }

    .grid-item img {
        width: 100%;
        display: block;
        object-fit: cover;
    }

    .h-tall img { height: 320px; }
    .h-med img { height: 240px; }
    .h-short img { height: 180px; }

    .feature-section {
        background-color: #AEA9A0; 
        padding: 100px 8%;
    }

    .feature-container {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        align-items: flex-start; 
        gap: 60px;
    }

    .feature-content { flex: 1; padding-top: 20px; }

    .feature-content h2 {
        font-family: 'Cooper Black', serif;
        font-size: 2.6rem;
        margin-bottom: 15px;
        color: #4A2C2A; 
        line-height: 1.1;
    }

    .feature-content p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 30px;
        color: #4A2C2A;
    }

    .feature-image img {
        width: 100%;
        border-radius: 40px;
        display: block;
        box-shadow: 0 20px 40px rgba(74, 44, 42, 0.15); 
    }

    .text-right { text-align: right; }

    .info-section { padding: 100px 8%; text-align: center; }
    
    .info-card h3 {
        font-family: 'Cooper Black', serif;
        color: #4A2C2A; 
        font-size: 1.8rem;
    }

    .info-grid {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
    }

    .popular-section {
        padding: 80px 8% 120px 8%;
        text-align: center;
    }

    .popular-section h2 {
        font-family: 'Cooper Black', serif;
        font-size: 2.5rem;
        margin-bottom: 60px;
        color: #4A2C2A;
    }

    .popular-grid {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .popular-item {
        width: 220px;
        text-align: center;
    }

    .circle-img {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        padding: 6px; 
        border: 2px solid #4A2C2A; 
        background-color: #FDF9F0; 
        background-clip: content-box; 
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .stars {
        color: #D4AF37; 
        font-size: 0.8rem;
        margin-bottom: 15px;
    }

    .review-text {
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        font-style: italic;
        line-height: 1.5;
        color: #4A2C2A; 
    }

    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 850px) {
        .feature-container, .info-grid { flex-direction: column; grid-template-columns: 1fr; text-align: center; }
        .text-right { text-align: center; }
        .feature-image { order: -1; width: 100%; }
        .masonry-wrapper { column-count: 2; }
    }
</style>

<div class="hero-section">
    <p>Order your favorite pastries and coffee online.</p>
    <h1>Baked fresh, brewed with heart</h1>
    <a href="/pastries" class="btn-brand">Treat Yourself</a>
</div>

<div class="masonry-wrapper">
    <div class="grid-item h-tall reveal"><img src="{{ asset('images/braided.jpg') }}"></div>
    <div class="grid-item h-short reveal"><img src="{{ asset('images/americano.jpg') }}"></div>
    <div class="grid-item h-med reveal"><img src="{{ asset('images/carrot.jpg') }}"></div>
    <div class="grid-item h-tall reveal"><img src="{{ asset('images/choco.jpg') }}"></div>
    <div class="grid-item h-short reveal"><img src="{{ asset('images/espresso.jpg') }}"></div>
    <div class="grid-item h-med reveal"><img src="{{ asset('images/cinnamon.jpg') }}"></div>
    <div class="grid-item h-tall reveal"><img src="{{ asset('images/ensaymada.jpg') }}"></div>
    <div class="grid-item h-short reveal"><img src="{{ asset('images/matcha.jpg') }}"></div>
    <div class="grid-item h-med reveal"><img src="{{ asset('images/pistachio.jpg') }}"></div>
    <div class="grid-item h-tall reveal"><img src="{{ asset('images/sausage.jpg') }}"></div>
</div>

<section class="feature-section reveal">
    <div class="feature-container">
        <div class="feature-content">
            <h2>What’s Brewing</h2>
            <p>Stay up to date with the latest news — from seasonal products to limited edition bakes and drinks. Discover our newest seasonal pastries, freshly baked and available for a limited time.</p>
            <a href="/about" class="btn-brand">See More Updates</a>
        </div>
        <div class="feature-image">
            <img src="{{ asset('images/Cake.jpg') }}">
        </div>
    </div>
</section>

<section class="info-section reveal">
    <div class="info-grid">
        <div class="info-card">
            <h3>FAQs, ganern!</h3>
            <p>For more information about delivery, pick-up, and ordering in general, please see our FAQs.</p>
            <a href="/faqs" class="btn-brand">Go to FAQs</a>
        </div>
        <div class="info-card">
            <h3>Shipping Policy</h3>
            <p>Read our shipping policy to understand how we process our deliveries and pick-ups.</p>
            <a href="/shipping-policy" class="btn-brand">Read Here</a>
        </div>
    </div>
</section>

<section class="feature-section reveal" style="padding-top: 50px; padding-bottom: 100px;">
    <div class="feature-container">
        <div class="feature-image" style="flex: 1.2;">
            <img src="{{ asset('images/coffee.jpg') }}">
        </div>
        <div class="feature-content text-right">
            <h2>Double the Drip, Double the Dough</h2>
            <p>Indulge in the perfect pairing of rich, handcrafted coffee and freshly baked pastries, made fresh and delivered straight to you. Every cup is brewed with care, and every bite is made to comfort. Because when it comes to cravings, double is always better.</p>
            <a href="/pastries" class="btn-brand">Order Bundle</a>
        </div>
    </div>
</section>

<section class="popular-section reveal">
    <h2>What Our Community Says</h2>
    <div class="popular-grid">
        <div class="popular-item">
            <img src="{{ asset('images/hanjuku.jpg') }}" class="circle-img">
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="review-text">"This literally melts in my mouth. Sobrang sarap!"</p>
        </div>
        <div class="popular-item">
            <img src="{{ asset('images/tart.jpg') }}" class="circle-img">
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="review-text">"Ang sarap ng egg tart, creamy yung filling at sakto lang yung tamis. Malutong yung crust tapos hindi nakakaumay."</p>
        </div>
        <div class="popular-item">
            <img src="{{ asset('images/kopi.jpg') }}" class="circle-img">
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="review-text">"The Caffè Latte is so smooth. You can tell the beans are premium."</p>
        </div>
        <div class="popular-item">
            <img src="{{ asset('images/chocolate.jpg') }}" class="circle-img">
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <p class="review-text">"Rich at chocolatey yung drink, lasang-lasa yung cocoa. Hindi siya sobrang tamis kaya masarap inumin anytime."</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    });
</script>
@endsection