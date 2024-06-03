document.addEventListener('DOMContentLoaded', function() {
    fetch('timeline.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('imported-content').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement du fichier:', error));
});