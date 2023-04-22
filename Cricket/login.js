const form = document.querySelector('form');
const username = form.querySelector(
  'input[name="username"]'
).value;
const password = form.querySelector(
  'input[name="password"]'
).value;
const loginLabel =
  form.querySelector('button.login').textContent;

const data = {
  username: username,
  password: password,
  loginLabel: loginLabel,
};

const jsonData = JSON.stringify(data);
console.log(jsonData);
