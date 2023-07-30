// resources/js/app.js
document.addEventListener('DOMContentLoaded', function() {
    const modeToggleButton = document.getElementById('mode-toggle');
    const body = document.body;

    modeToggleButton.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
    });
});
