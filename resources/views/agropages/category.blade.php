<section class="container py-5 position-relative">

    {{-- Header --}}
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold">Shop by Category</h2>
            <p class="text-muted">
                Browse products by agriculture categories
            </p>
        </div>
    </div>

    {{-- Prev Button --}}
    <button class="category-nav prev" onclick="scrollCategories(-1)">
        ‹
    </button>

    {{-- Next Button --}}
    <button class="category-nav next" onclick="scrollCategories(1)">
        ›
    </button>

    {{-- Category Slider --}}
    <div class="category-slider" id="categorySlider">

        {{-- Category Card --}}
        <a href="#" class="category-card">
            <img src="{{ asset('img/crops.png') }}" alt="Crops">
            <div class="category-content">
                <h6>Crops</h6>
                <span>Maize, Rice, Beans</span>
            </div>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('img/fruits.jpg') }}" alt="Fruits">
            <div class="category-content">
                <h6>Fruits & Vegetables</h6>
                <span>Tomatoes, Bananas</span>
            </div>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('img/fertilizer.png') }}" alt="Inputs">
            <div class="category-content">
                <h6>Farm Inputs</h6>
                <span>Seeds, Fertilizers</span>
            </div>
        </a>

        <a href="#" class="category-card">
            <img src="{{ asset('img/Tomatoes-sh769524253.jpg') }}" alt="Tools">
            <div class="category-content">
                <h6>Tools & Equipment</h6>
                <span>Sprayers, Irrigation</span>
            </div>
        </a>

        {{-- Add more categories here --}}
    </div>

</section>
