<title>AgroHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/Screenshot__207_-removebg-preview.png')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

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


    </style>
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->