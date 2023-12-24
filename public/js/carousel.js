let currentIndex = 0;
const images = document.querySelectorAll('.carousel-img');
const totalImages = images.length;
const dotsContainer = document.querySelector('.dots');

const showImage = index => {
    images.forEach((img, i) => {
        img.style.display = i === index ? 'block' : 'none';
    });
};
const activateDot = index => {
    const dots = document.querySelectorAll('.dot');
    dots.forEach(dot => dot.classList.remove('active-dot'));
    dots[index].classList.add('active-dot');
};
document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(currentIndex);
});

document.getElementById('nextBtn').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage(currentIndex);
});
for (let i = 0; i < totalImages; i++) {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    dot.addEventListener('click', () => {
        currentIndex = i;
        showImage(currentIndex);
    });
    dotsContainer.appendChild(dot);
}
showImage(currentIndex);

$(document).ready(function(){
    $('.logosPartenaires').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});