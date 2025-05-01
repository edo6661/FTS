<section id="hero" class="min-h-[70vh]">
    <div class="container-slider relative min-h-[70vh]">
        <div class="contaimer-items-slider relative">
            <div class="slide-item">
                <div class="container-bg-hero absolute inset-0">
                    <img src="{{asset('images/hero.jpg')}}" alt="Hero Slider 1"/>
                </div>
                <div class="container-content-hero flex flex-col justify-center items-center text-center text-white z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <span> IT Consulting </span>
                    <h2> Best IT Solutions </h2>
                    <h2> For Your Petech </h2>
                    <div class="container-btn-hero flex items-center justify-center gap-8">
                        <flux:hero.custom-button variant="secondary" >
                            GET STARTED + 
                       </flux:hero.custom-button> 
                       <flux:hero.custom-button>
                            LEARN MORE + 
                       </flux:hero.custom-button>                          
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="container-bg-hero absolute inset-0">
                    <img src="{{asset('images/hero-2.png')}}" alt="Hero Slider 2"/>
                </div>
                <div class="container-content-hero flex flex-col justify-center items-center text-center text-white z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <span> Cloud Services </span>
                    <h2> Reliable Cloud </h2>
                    <h2> Infrastructure </h2>
                    <div class="container-btn-hero flex items-center justify-center gap-8">
                        <flux:hero.custom-button variant="secondary" >
                             GET STARTED + 
                        </flux:hero.custom-button> 
                        <flux:hero.custom-button>
                             LEARN MORE + 
                        </flux:hero.custom-button>                    
                    </div>
                </div>
            </div>
        </div>
        <button class="slider-control prev">&lt;</button>
        <button class="slider-control next">&gt;</button>
    </div>
</section>

<style>
    .container-slider {
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .contaimer-items-slider {
        display: flex;
        transition: transform 0.5s ease;
        width: 200%;
    }

    .slide-item {
        width: 50%;
        position: relative;
        flex-shrink: 0;
        min-height: 70vh;
    }

    .container-bg-hero {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .container-bg-hero::after {
        content: '';
        position: absolute;
        inset: 0;
    }

    .container-bg-hero img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container-content-hero {
        width: 100%;
        padding: 0 20px;
    }

    .container-content-hero span {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        display: block;
    }

    .container-content-hero h2 {
        font-size: 2.5rem;
        margin-bottom: 0.25rem;
    }


    .custom-button.secondary {
        background-color: white;
        color: black;
    }

    .custom-button:hover {
        transform: translateY(-5px);
    }

    .slider-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        z-index: 20;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .slider-control:hover {
        background-color: rgba(255, 255, 255, 0.4);
    }

    .slider-control.prev {
        left: 20px;
    }

    .slider-control.next {
        right: 20px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.contaimer-items-slider');
        const slides = document.querySelectorAll('.slide-item');
        const prevBtn = document.querySelector('.slider-control.prev');
        const nextBtn = document.querySelector('.slider-control.next');

        let currentIndex = 0;
        const totalSlides = slides.length;

        function goToSlide(index) {
            currentIndex = index % totalSlides;
            if (currentIndex < 0) {
                currentIndex = totalSlides - 1;
            }
            const translateX = -currentIndex * 100 / totalSlides;
            slider.style.transform = `translateX(${translateX}%)`;
        }

        prevBtn.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
        });

        nextBtn.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                goToSlide(currentIndex - 1);
            } else if (e.key === 'ArrowRight') {
                goToSlide(currentIndex + 1);
            }
        });

        let touchStartX = 0;
        let touchEndX = 0;

        slider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        slider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            if (touchStartX - touchEndX > 50) {
                goToSlide(currentIndex + 1);
            } else if (touchEndX - touchStartX > 50) {
                goToSlide(currentIndex - 1);
            }
        });
    });
</script>
