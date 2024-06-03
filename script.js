document.addEventListener('DOMContentLoaded', function () {
    var accordions = document.querySelectorAll('.accordion-button');
    var dynamicImage = document.getElementById('dynamic-image');

    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            var content = this.nextElementSibling;
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
            dynamicImage.src = this.dataset.image;
        });
    });

    var prev = document.querySelector('.prev');
    var next = document.querySelector('.next');
    var stories = document.querySelector('.stories');
    var currentIndex = 0;

    prev.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    next.addEventListener('click', function () {
        if (currentIndex < stories.children.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });

    function updateCarousel() {
        var offset = -currentIndex * 100;
        stories.style.transform = 'translateX(' + offset + '%)';
    }
});


