<!DOCTYPE html>
<html lang="en">

<head>
    @include('agropages.css')
</head>

<body>
    <!-- Start Top Nav -->
    @include('agropages.nav')
    <!-- Close Top Nav -->


    <!-- Header -->
    @yield('header')
    <!-- Close Header -->

    <!-- Modal -->
    @include('agropages.search')



    <!-- Start Banner Hero -->
    @include('agropages.banner')
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    @include('agropages.category')
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    @include('agropages.featuredproduct')
    <!-- End Featured Product -->


    <!-- Start Footer -->
    @include('agropages.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    @include('agropages.script')
    <!-- End Script -->
</body>

</html>