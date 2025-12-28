<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/templatemo.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script>
    function scrollCategories(direction) {
        const slider = document.getElementById('categorySlider');
        const scrollAmount = 300;
        slider.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>
<script>
    document.querySelectorAll('.category-item').forEach(button => {
        button.addEventListener('click', function () {
            const target = document.querySelector(this.dataset.bsTarget);
    
            document.querySelectorAll('.submenu').forEach(menu => {
                if (menu !== target && menu.classList.contains('show')) {
                    new bootstrap.Collapse(menu, { toggle: true });
                }
            });
        });
    });
    </script>
    
