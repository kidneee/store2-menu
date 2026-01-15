// Hamburger Menu
const hamburgerBtn = document.getElementById('hamburgerMenu');
const drawerMenu = document.getElementById('drawerMenu');

hamburgerBtn.addEventListener('click', () => {
  const isOpen = hamburgerBtn.getAttribute('aria-expanded') === 'true';
  hamburgerBtn.setAttribute('aria-expanded', !isOpen);
  hamburgerBtn.classList.toggle('open');
  drawerMenu.classList.toggle('open');
});
