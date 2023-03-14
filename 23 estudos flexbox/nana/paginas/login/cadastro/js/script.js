const inputFile = document.getElementById("perfil");
const imgPreview = document.getElementById("imgPreview");

inputFile.addEventListener("change", function() {
  const file = this.files[0];
  const reader = new FileReader();
  
  reader.addEventListener("load", function() {
    imgPreview.src = reader.result;
  }, false);
  
  if (file) {
    reader.readAsDataURL(file);
  }
});
