<section id="hero" class="min-h-[70vh]">
    <div class="container-slider relative min-h-[70vh]">
        <div class="container-items-slider relative">
            <x-hero.slide-item 
                title="IT Consulting"
                subtitle="Best IT Solutions"
                description="For Your Petech"
                :image="asset('images/hero.jpg')"
            />
            <x-hero.slide-item 
                title="IT Services Provider"
                subtitle="Real Economy"
                description="IT Solutions"
                :image="asset('images/hero-2.png')"
            />
        </div>
        <div class="control-container">
            <button class="slider-control prev">&lt;</button>
            <button class="slider-control next">&gt;</button> 
        </div>
    </div>
</section>

<style>
    .container-slider {
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .container-items-slider {
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

    .control-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 20;
        pointer-events: none;
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
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        visibility: hidden;
        opacity: 0;
        pointer-events: auto; 
    }

    .slider-control:hover {
        background-color: rgba(255, 255, 255, 0.4);
    }

    .slider-control.prev {
        left: -60px;
    }
    
    .slider-control.next {
        right: -60px;
    }
    
    #hero:hover .slider-control {
        opacity: 1;
        visibility: visible;
    }
    
    #hero:hover .slider-control.next {
        right: 20px;
    }
    
    #hero:hover .slider-control.prev {
        left: 20px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.container-items-slider');
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