// Tutup menu mobile setelah link diklik
document.querySelectorAll('#navUtama .nav-link, #navUtama .btn').forEach((link) => {
    link.addEventListener('click', () => {
        const nav = document.getElementById('navUtama');
        if (nav.classList.contains('show')) {
            bootstrap.Collapse.getOrCreateInstance(nav).hide();
        }
    });
});
