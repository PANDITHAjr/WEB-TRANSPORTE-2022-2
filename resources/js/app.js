// resources/js/app.js

// ... (tu código actual)

document.addEventListener('DOMContentLoaded', function() {
    const modeToggleButton = document.getElementById('mode-toggle');
    const body = document.body;

    // Verificar si hay un valor almacenado para el modo
    const savedMode = localStorage.getItem('darkMode');
    if (savedMode) {
      body.classList.toggle('dark-mode', savedMode === 'true');
    }

    modeToggleButton.addEventListener('click', function() {
      // Cambiar el estado del modo
      const darkMode = body.classList.toggle('dark-mode');
      // Guardar el estado del modo en el almacenamiento local
      localStorage.setItem('darkMode', darkMode);
    });
  });
