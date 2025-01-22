document.addEventListener('DOMContentLoaded', function () {
  const passwordInput = document.getElementById('passwordInput');
  const passwordShowInput = document.getElementById('passwordShowInput');

  if (passwordInput && passwordShowInput) {
      passwordShowInput.addEventListener('click', function () {
          if (passwordInput.type === 'password') {
              passwordInput.type = 'text';
              passwordShowInput.classList.remove('bi-eye-slash');
              passwordShowInput.classList.add('bi-eye');
          } else {
              passwordInput.type = 'password';
              passwordShowInput.classList.remove('bi-eye');
              passwordShowInput.classList.add('bi-eye-slash');
          }
      });
  }
});