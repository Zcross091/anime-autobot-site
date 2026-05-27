function toggleMenu() {
    const menu = document.getElementById('navMenu');
    const hamburger = document.querySelector('.hamburger');
    
    menu.classList.toggle('active');
    hamburger.classList.toggle('active');
}

// Close menu when clicking a link
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('navMenu').classList.remove('active');
        document.querySelector('.hamburger').classList.remove('active');
    });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    const menu = document.getElementById('navMenu');
    const hamburger = document.querySelector('.hamburger');
    
    if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
        menu.classList.remove('active');
        hamburger.classList.remove('active');
    }
});
