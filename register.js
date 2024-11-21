document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault();
    document.querySelector('.success-message').style.display = 'block';
  });