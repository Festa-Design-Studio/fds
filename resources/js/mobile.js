document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const navContent = document.getElementById('nav-content');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
  
    mobileMenuButton.addEventListener('click', function () {
      navContent.classList.toggle('hidden');
      hamburgerIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  
    // Close menu when clicking outside
    document.addEventListener('click', function (event) {
      const isClickInsideNav = navContent.contains(event.target);
      const isClickOnButton = mobileMenuButton.contains(event.target);
  
      if (!isClickInsideNav && !isClickOnButton && !navContent.classList.contains('hidden')) {
        navContent.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      }
    });
  
    // Handle window resize
    window.addEventListener('resize', function () {
      if (window.innerWidth >= 768) {
        navContent.classList.remove('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      } else {
        navContent.classList.add('hidden');
      }
    });
  });