const selecionarFotoInput = document.getElementById('selecionarFoto');
const fotoPerfilImg = document.getElementById('perfil');
const selecionarFotoLabel = document.querySelector('.selecionarFotoLabel');

selecionarFotoLabel.addEventListener('click', function() {
  selecionarFotoInput.click();
});

selecionarFotoInput.addEventListener('change', function(e) {
  const file = e.target.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    fotoPerfilImg.setAttribute('src', e.target.result);
  };

  reader.readAsDataURL(file);
});