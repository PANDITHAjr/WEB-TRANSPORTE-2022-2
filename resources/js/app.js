document.addEventListener('DOMContentLoaded', function() {
    const modeToggleButton = document.getElementById('mode-toggle');
    const body = document.body;

    // Verificar si el modo oscuro está activo en el almacenamiento local
    const isDarkModeActive = localStorage.getItem('darkModeActive') === 'true';

    // Establecer el modo oscuro según el estado almacenado
    if (isDarkModeActive) {
      body.classList.add('dark-mode');
    } else {
      body.classList.remove('dark-mode');
    }

    modeToggleButton.addEventListener('click', function() {
      // Cambiar el modo oscuro
      body.classList.toggle('dark-mode');

      // Guardar el estado del modo oscuro en el almacenamiento local
      const isDarkModeActive = body.classList.contains('dark-mode');
      localStorage.setItem('darkModeActive', isDarkModeActive.toString());
    });
  });
