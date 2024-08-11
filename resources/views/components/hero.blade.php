<div id="hero-section" style="background-image: linear-gradient(180deg, rgba(255,255,255,0) 50%, rgba(0,209,255,1) 100%), url('images/cover.png');" class="hero d-flex align-items-start flex-column">
    <div class="p-2"></div>
    <div class="d-flex flex-column flex-md-row mt-5 mt-md-auto justify-content-between w-100 hero-content">
        <div class="col-12 col-md-6 ps-5">
            <img src="{{ asset('images/thailand.png') }}" class="mt-5 white-filter img-fluid" alt="Thailand" />  
            <div class="">
                <button class="btn-primary mt-4">DAFTAR SEKARANG</button>
            </div>
        </div>
        <div class="col-12 col-md-6 carousel mt-auto mt-md-0">
             <x-carousel/> 
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('.swiper-slide img').click(function(){
            var imageUrl = $(this).attr('src');
            $('#hero-section').css('background-image', 'linear-gradient(180deg, rgba(255,255,255,0) 50%, rgba(0,209,255,1) 100%), url(' + imageUrl + ')');
        });

        function updateBackground() {
            const activeSlide = swiper.slides[swiper.activeIndex];
            const imageUrl = $(activeSlide).find('img').attr('src');
            $('#hero-section').css('background-image', 'linear-gradient(180deg, rgba(255,255,255,0) 50%, rgba(0,209,255,1) 100%), url(' + imageUrl + ')');
        }

        // Event slideChange
        swiper.on('slideChange', function () {
            updateBackground();
        });
    });
</script>
