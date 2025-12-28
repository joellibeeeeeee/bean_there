@extends('layouts.customer')

@section('content')
<style>
    .drinks-section {
        padding: 60px 8%; 
        max-width: 1200px;
        margin: 0 auto;
    }

    .page-title {
        font-family: 'Cooper Black', serif;
        font-size: 2.5rem; 
        letter-spacing: -1px;
        color: #4A2C2A;
        margin-bottom: 40px;
        text-align: left;
    }

    .category-header {
        border-bottom: 1px solid rgba(74, 44, 42, 0.2);
        margin-bottom: 35px;
        padding-bottom: 10px;
    }

    .category-header h2 {
        font-family: 'Cooper Black', serif;
        font-size: 1.8rem;
        color: #4A2C2A;
        margin: 0;
    }

    /* --- PRODUCT GRID --- */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr); 
        gap: 30px 20px;
        margin-bottom: 80px;
    }

    .product-card {
        display: flex;
        flex-direction: column;
        max-width: 220px; 
    }

    .product-image {
        width: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 25px; 
        object-fit: cover;
        margin-bottom: 12px;
        border: 2px solid #4A2C2A; 
        box-shadow: 0px 6px 12px rgba(74, 44, 42, 0.15);
        box-sizing: border-box;
    }

    .product-info h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 0.95rem; 
        margin: 0;
        color: #4A2C2A;
    }

    .product-info p {
        font-family: 'Poppins', sans-serif;
        font-size: 0.85rem;
        margin: 2px 0 12px 0;
        color: #9B8173; 
        font-weight: 600;
    }

    .add-to-cart-btn {
        background-color: transparent; 
        color: #4A2C2A;
        border: 1.5px solid #4A2C2A; 
        padding: 8px;
        border-radius: 12px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 0.7rem;
        cursor: pointer;
        text-transform: capitalize;
        width: 100%;
        transition: all 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background-color: #4A2C2A;
        color: #FDF9F0;
        transform: scale(1.05); 
    }

    #no-results-container {
        display: none;
        text-align: center;
        padding: 100px 20px;
    }

    #no-results-container h2 {
        font-family: 'Cooper Black', serif;
        color: #4A2C2A;
        font-size: 1.8rem;
    }

    @media (max-width: 900px) {
        .product-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>

<div class="drinks-section">
    <h1 class="page-title">Drinks</h1>

    <div class="category-section">
        <div class="category-header">
            <h2>Hot Coffees & Espresso</h2>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <img src="{{ asset('images/latte.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Hot Caffe Latte</h3>
                    <p>120.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d1">
                        <input type="hidden" name="name" value="Hot Caffe Latte">
                        <input type="hidden" name="price" value="120">
                        <input type="hidden" name="image" value="images/latte.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/sikwate.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Traditional Sikwate</h3>
                    <p>110.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d2">
                        <input type="hidden" name="name" value="Traditional Sikwate">
                        <input type="hidden" name="price" value="110">
                        <input type="hidden" name="image" value="images/sikwate.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/whitechoc.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>White Chocolate Mocha</h3>
                    <p>155.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d3">
                        <input type="hidden" name="name" value="White Chocolate Mocha">
                        <input type="hidden" name="price" value="155">
                        <input type="hidden" name="image" value="images/whitechoc.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/espressodrink.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Double Espresso</h3>
                    <p>100.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d4">
                        <input type="hidden" name="name" value="Double Espresso">
                        <input type="hidden" name="price" value="100">
                        <input type="hidden" name="image" value="images/espressodrink.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="category-section">
        <div class="category-header">
            <h2>Cold Coffees & Cold Brew</h2>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <img src="{{ asset('images/latte.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Iced Latte</h3>
                    <p>135.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d5">
                        <input type="hidden" name="name" value="Iced Latte">
                        <input type="hidden" name="price" value="135">
                        <input type="hidden" name="image" value="images/latte.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/sikwate.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Iced Sikwate</h3>
                    <p>125.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d6">
                        <input type="hidden" name="name" value="Iced Sikwate">
                        <input type="hidden" name="price" value="125">
                        <input type="hidden" name="image" value="images/sikwate.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/whitechoc.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Iced White Mocha</h3>
                    <p>165.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d7">
                        <input type="hidden" name="name" value="Iced White Mocha">
                        <input type="hidden" name="price" value="165">
                        <input type="hidden" name="image" value="images/whitechoc.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/espressodrink.jpg') }}" class="product-image">
                <div class="product-info">
                    <h3>Cold Brew Coffee</h3>
                    <p>140.00 PHP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="d8">
                        <input type="hidden" name="name" value="Cold Brew Coffee">
                        <input type="hidden" name="price" value="140">
                        <input type="hidden" name="image" value="images/espressodrink.jpg">
                        <button type="submit" class="add-to-cart-btn">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="no-results-container">
        <h2>No drink found like "<span id="search-term-display"></span>"</h2>
        <p style="color: #9B8173;">Try searching for something else!</p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('navSearchInput');
        const noResults = document.getElementById('no-results-container');
        const searchTermDisplay = document.getElementById('search-term-display');
        const categories = document.querySelectorAll('.category-section');

        function filterDrinks(query) {
            const filter = query.toLowerCase().trim();
            let totalVisible = 0;

            categories.forEach(section => {
                const cards = section.querySelectorAll('.product-card');
                let sectionHasMatch = false;

                cards.forEach(card => {
                    const h3 = card.querySelector('h3');
                    if (h3) {
                        const productName = h3.textContent.toLowerCase();
                        if (productName.includes(filter)) {
                            card.style.display = "";
                            sectionHasMatch = true;
                            totalVisible++;
                        } else {
                            card.style.display = "none";
                        }
                    }
                });
                section.style.display = sectionHasMatch ? "block" : "none";
            });

            if (totalVisible === 0 && filter !== "") {
                noResults.style.display = "block";
                searchTermDisplay.textContent = filter;
            } else {
                noResults.style.display = "none";
            }
        }

        if(searchInput) {
            searchInput.addEventListener('input', function() {
                filterDrinks(this.value);
            });
        }

        const urlParams = new URLSearchParams(window.location.search);
        const searchQuery = urlParams.get('search');
        
        if (searchQuery) {
            if (searchInput) {
                searchInput.value = searchQuery;
                searchInput.classList.add('active'); 
            }
            filterDrinks(searchQuery);
        }
    });
</script>
@endsection