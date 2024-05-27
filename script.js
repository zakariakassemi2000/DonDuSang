let currentIndex = 0;

function showStory(index) {
    const stories = document.querySelector('.stories');
    const totalStories = Math.ceil(document.querySelectorAll('.story').length / 2); // Divided by 2 to show two at a time
    if (index >= totalStories) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalStories - 1;
    } else {
        currentIndex = index;
    }
    const offset = -currentIndex * 100;
    stories.style.transform = `translateX(${offset}%)`;
}

document.querySelector('.prev').addEventListener('click', () => {
    showStory(currentIndex - 1);
});

document.querySelector('.next').addEventListener('click', () => {
    showStory(currentIndex + 1);
});

// Initialize
showStory(currentIndex);
