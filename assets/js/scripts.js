const navMenu = document.getElementById('nav-menu');
const navToggle = document.getElementById('nav-toggle');
const navClose = document.getElementById('nav-close');
const navLinks = document.querySelectorAll('.nav__link');

function closeMenu() {
    navMenu.classList.remove('show-menu'); // Hapus class yang menampilkan menu
}

// Event untuk menampilkan menu
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
    });
}

// Event untuk menutup menu dengan tombol 'X'
if (navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    });
}

// Event untuk menutup menu saat link diklik
navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Cegah perilaku default link (supaya smooth scroll bisa jalan)

        const targetSection = document.querySelector(this.getAttribute('href')); // Ambil target ID

        if (targetSection) {
            // Scroll ke bagian yang dituju
            targetSection.scrollIntoView({ behavior: 'smooth' });

            // Setelah scroll selesai, tutup menu
            closeMenu();
        }
    });
});
