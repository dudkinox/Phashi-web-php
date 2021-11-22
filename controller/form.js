function Other() {
  document.getElementById("footer4").checked = true;
}

imgInp.onchange = (evt) => {
  const [file] = imgInp.files;
  if (file) {
    blah.src = URL.createObjectURL(file);
    document.getElementById("defaultImage").style = "display: none";
    document.getElementById("blah").style = "display: block";
  }
};

function uploadImage() {
  document.getElementById("imgInp").click();
}

function clearInput(IDCARD) {
  window.open("export/?id=" + IDCARD, "_blank");
}
