const form = document.querySelector(`.form`);

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const loginInput = form.querySelector(`[name=login]`);
  const passwordInput = form.querySelector(`[name=password]`);
});
