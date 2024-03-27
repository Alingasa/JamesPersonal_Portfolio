document.addEventListener('DOMContentLoaded', function() {
  // Retrieve the active link from local storage
  const activeLink = localStorage.getItem('activeLink');
  // If an active link is found, add the 'active' class to it
  if (activeLink) {
      document.querySelector('.navbar-nav .nav-link[href="' + activeLink + '"]').classList.add('active');
  }
  // Add event listener to all navigation links
  document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
      link.addEventListener('click', function() {
          // Remove 'active' class from all navigation links
          document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
              link.classList.remove('active');
          });
          // Add 'active' class to the clicked link
          this.classList.add('active');
          // Store the active link in local storage
          localStorage.setItem('activeLink', this.getAttribute('href'));
      });
  });
});

