let currentIndex = 0;

const storiesElement = document.querySelector('.stories');
const storyElements = document.querySelectorAll('.story');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const storiesPerPage = 2;
const totalStories = Math.ceil(storyElements.length / storiesPerPage);

function showStory(index) {
    if (index >= totalStories) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalStories - 1;
    } else {
        currentIndex = index;
    }

    const offset = -currentIndex * 100; // Calculer le décalage en pourcentage
    storiesElement.style.transform = `translateX(${offset}%)`;
}

// Ajouter des écouteurs d'événements pour les boutons "précédent" et "suivant"
prevButton.addEventListener('click', () => {
    showStory(currentIndex - 1);
});

nextButton.addEventListener('click', () => {
    showStory(currentIndex + 1);
});

// Initialiser l'affichage des histoires
showStory(currentIndex);
