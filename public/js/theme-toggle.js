document.addEventListener('DOMContentLoaded', function() {
    const themeStyles = document.getElementById('theme-styles');
    const themeToggleBtn = document.getElementById('theme-toggle-btn');

    themeToggleBtn.addEventListener('click', function() {
      if (themeStyles.href.includes('styles-light.css')) {
        themeStyles.href = "{{ asset('css/styles-dark.css') }}";
      } else {
        themeStyles.href = "{{ asset('css/styles-light.css') }}";
      }
    });
  });
