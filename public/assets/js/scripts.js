//SLIDER IMG START
const slides = document.querySelectorAll('.slideshow-container > div');
const prevBtn = document.querySelector('.prev-slide');
const nextBtn = document.querySelector('.next-slide');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

showSlide(currentSlide);

if (nextBtn && prevBtn) {
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
}

setInterval(nextSlide, 9000);
//SLIDER IMG END

// ---------------------------------------------------------------------- //

document.querySelectorAll('.platform input[type="checkbox"]').forEach(input => {
    input.addEventListener('change', function() {
        this.closest('.platform').classList.toggle('active', this.checked);
    });
});

// ---------------------------------------------------------------------- //

// DROPDOWN-MENU START
document.querySelectorAll('.dropdown-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('open'));
        this.parentElement.classList.toggle('open');
    });
});

document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('open'));
});
// DROPDOWN-MENU END