<title>AgroHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/Screenshot__207_-removebg-preview.png')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
{{-- google fonts --}}
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <style>
        .category-card {
    transition: all 0.3s ease;
}

/* .category-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.08);
} */
.product-card {
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.08);
}/* Slider container */
.category-slider {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 10px 40px;
}

.category-slider::-webkit-scrollbar {
    display: none;
}

/* Category Card */
.category-card {
    min-width: 260px;
    background: #fff;
    border-radius: 14px;
    text-decoration: none;
    color: #212529;
    box-shadow: 0 6px 14px rgba(0,0,0,0.08);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

/* .category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(0,0,0,0.12);
} */

.category-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-top-left-radius: 14px;
    border-top-right-radius: 14px;
}

/* Text contrast FIX */
.category-content {
    padding: 14px;
}

.category-content h6 {
    font-weight: 600;
    margin-bottom: 4px;
    color: #111; /* STRONG */
}

.category-content span {
    font-size: 0.875rem;
    color: #555; /* CLEAR but subtle */
}

/* Navigation Buttons */
.category-nav {
    position: absolute;
    top: 55%;
    transform: translateY(-50%);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: none;
    background: #ffffff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    font-size: 24px;
    cursor: pointer;
    z-index: 10;
}

.category-nav.prev {
    left: 5px;
}

.category-nav.next {
    right: 5px;
}

.category-nav:hover {
    background: #f8f9fa;
}

/* today */
.category-img {
    width: 28px;
    height: 28px;
    object-fit: cover;
    border-radius: 6px;
}

/* Smooth offcanvas animation */
.category-canvas {
    transition: transform 0.4s ease-in-out;
}

/* Category hover animation */
.category-item {
    transition: background-color 0.3s ease, padding-left 0.3s ease;
    font-weight: 500;
}

.category-item:hover {
    background-color: #f1f8f4;
    padding-left: 1.5rem;
}

/* Submenu animation */
.submenu {
    animation: fadeSlide 0.35s ease-in-out;
}

/* Submenu items */
.submenu a {
    padding-left: 2.5rem;
    transition: background-color 0.3s ease;
}

.submenu a:hover {
    background-color: #e9f7ef;
}

/* Keyframes */
@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateX(-10px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}


/* Apply professional font */
.category-canvas {
    font-family: 'Inter', sans-serif;
}

/* Category buttons */
.category-item {
    font-size: 15.5px;
    font-weight: 600;
    letter-spacing: 0.3px;
    color: #1f2937;
    padding: 14px 18px;
    transition: all 0.3s ease;
    border: none;
}

/* Hover effect */
.category-item:hover {
    background-color: #f1f8f4;
    padding-left: 24px;
}

/* Active (opened) category */
.category-item[aria-expanded="true"] {
    background-color: #e9f7ef;
    color: #198754;
}

/* Chevron rotation */
.category-item[aria-expanded="true"] .fa-chevron-down {
    transform: rotate(180deg);
}

/* Chevron animation */
.fa-chevron-down {
    transition: transform 0.3s ease;
}

/* Submenu */
.submenu a {
    font-size: 14.5px;
    font-weight: 500;
    color: #374151;
    padding: 10px 20px 10px 48px;
    transition: background-color 0.25s ease;
}

/* Submenu hover */
.submenu a:hover {
    background-color: #ecfdf3;
    color: #198754;
}

/* Submenu animation */
.submenu {
    animation: fadeSlide 0.35s ease;
}

/* Animation keyframes */
@keyframes fadeSlide {
    from {
        opacity: 0;
        transform: translateX(-8px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}


    </style>
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->

