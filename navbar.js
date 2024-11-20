function loadNavbar() {
    const navbarContainer = document.getElementById('navbar');

    // Cargar el archivo navbar.html
    fetch('navbar.html')
        .then((response) => {
            if (!response.ok) {
                throw new Error('No se pudo cargar la barra de navegación');
            }
            return response.text();
        })
        .then((html) => {
            navbarContainer.innerHTML = html;

            // Inicializa los dropdowns de Bootstrap
            const dropdownElements = document.querySelectorAll('.dropdown-toggle');
            dropdownElements.forEach((dropdown) => {
                new bootstrap.Dropdown(dropdown); // Bootstrap API para dropdown
            });
        })
        .catch((error) => {
            console.error('Error cargando la barra de navegación:', error);
        });
}

document.addEventListener('DOMContentLoaded', loadNavbar);