document.addEventListener('DOMContentLoaded', function() {
  var submitButton = document.getElementById('submitButton');
  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Evita que o formulário seja enviado automaticamente

    var cardnumberInput = document.getElementById('cardnumber');
    var nameInput = document.getElementById('name');
    var expirationdateInput = document.getElementById('expirationdate');

    if (cardnumberInput.value === '' || nameInput.value === '' || expirationdateInput.value === '') {
      alert('Preencha todos os campos obrigatórios.');
      console.log('Campos obrigatórios não preenchidos.');
      return;
    }

    // Validação da data de expiração e número do cartão
    if (!validateCardAndExpiration(cardnumberInput.value, expirationdateInput.value)) {
      alert('Dados do cartão inválidos.');
      console.log('Dados do cartão inválidos.');
      return;
    }

    // Validação do nome
    if (!validateName(nameInput.value)) {
      alert('Nome inválido.');
      console.log('Nome inválido.');
      return;
    }

    // Se todas as validações passarem, exiba a mensagem de compra efetuada com sucesso
    alert('Compra efetuada com sucesso.');
    console.log('Compra efetuada com sucesso.');
    window.location.href = "../login.php";
  });
});

function allowLettersOnly(event) {
  var keyCode = event.keyCode || event.which;
  var allowedKeys = /[A-Za-z\s]/; // Permite apenas letras e espaços

  if (!allowedKeys.test(String.fromCharCode(keyCode))) {
    event.preventDefault();
    return false;
  }
}

function validateCardAndExpiration(cardNumber, expirationDate) {
  // Validação do número do cartão
  if (!luhnCheck(cardNumber)) {
    return false;
  }

  // Validação da data de expiração
  var pattern = /^(0[1-9]|1[0-2])\/(\d{2})$/;
  if (!pattern.test(expirationDate)) {
    return false;
  }

  var parts = expirationDate.split('/');
  var month = parseInt(parts[0], 10);
  var year = parseInt(parts[1], 10);

  var currentYear = new Date().getFullYear() % 100;

  if (year < currentYear || month < 1 || month > 12) {
    return false;
  }

  return true;
}

function luhnCheck(number) {
  number = number.replace(/\D/g, '');
  let sum = 0;
  let shouldDouble = false;

  for (let i = number.length - 1; i >= 0; i--) {
    let digit = parseInt(number.charAt(i));

    if (shouldDouble) {
      digit *= 2;
      if (digit > 9) {
        digit -= 9;
      }
    }

    sum += digit;
    shouldDouble = !shouldDouble;
  }

  return sum % 10 === 0;
}

function validateName(name) {
  // Realize a validação do nome conforme necessário
  return true; // Exemplo de validação simples
}
