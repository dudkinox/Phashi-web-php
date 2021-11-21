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

function clearInput() {
  document.getElementById("ID").value = null;
  document.getElementById("No").value = null;
  document.getElementById("ID_T").value = null;
  document.getElementById("Name_T").value = null;
  document.getElementById("Address_T").value = null;
  document.getElementById("No_G").value = null;
  document.getElementById("1").checked = false;
  document.getElementById("2").checked = false;
  document.getElementById("3").checked = false;
  document.getElementById("4").checked = false;
  document.getElementById("5").checked = false;
  document.getElementById("6").checked = false;
  document.getElementById("7").checked = false;
  document.getElementById("School").value = null;
  document.getElementById("Social").value = null;
  document.getElementById("Life").value = null;
  document.getElementById("footer1").checked = false;
  document.getElementById("footer2").checked = false;
  document.getElementById("footer3").checked = false;
  document.getElementById("footer4").checked = false;
  document.getElementById("Pay_other").value = null;
  document.getElementById("Name").value = null;
  document.getElementById("Date").value = null;
  document.getElementById("imgInp").value = null;
  document.getElementById("Income_D").value = null;
  document.getElementById("Income_P").value = null;
  document.getElementById("Income_S").value = null;
  document.getElementById("Fee_D").value = null;
  document.getElementById("Fee_P").value = null;
  document.getElementById("Fee_S").value = null;
  document.getElementById("Copy_D").value = null;
  document.getElementById("Copy_P").value = null;
  document.getElementById("Copy_S").value = null;
  document.getElementById("Interest_D").value = null;
  document.getElementById("Interest_P").value = null;
  document.getElementById("Interest_S").value = null;
  document.getElementById("Interest_D11").value = null;
  document.getElementById("Interest_P11").value = null;
  document.getElementById("Interest_S11").value = null;
  document.getElementById("Interest_D12").value = null;
  document.getElementById("Interest_P12").value = null;
  document.getElementById("Interest_S12").value = null;
  document.getElementById("Interest_D13").value = null;
  document.getElementById("Interest_P13").value = null;
  document.getElementById("Interest_S13").value = null;
  document.getElementById("Interest").value = null;
  document.getElementById("Interest_D14").value = null;
  document.getElementById("Interest_P14").value = null;
  document.getElementById("Interest_S14").value = null;
  document.getElementById("Interest_D21").value = null;
  document.getElementById("Interest_P21").value = null;
  document.getElementById("Interest_S21").value = null;
  document.getElementById("Interest_D22").value = null;
  document.getElementById("Interest_P22").value = null;
  document.getElementById("Interest_S22").value = null;
  document.getElementById("Interest_D23").value = null;
  document.getElementById("Interest_P23").value = null;
  document.getElementById("Interest_S23").value = null;
  document.getElementById("Interest_D24").value = null;
  document.getElementById("Interest_P24").value = null;
  document.getElementById("Interest_S24").value = null;
  document.getElementById("Interest_other").value = null;
  document.getElementById("Interest_D25").value = null;
  document.getElementById("Interest_P25").value = null;
  document.getElementById("Interest_S25").value = null;
  document.getElementById("Pay_D").value = null;
  document.getElementById("Pay_P").value = null;
  document.getElementById("Pay_S").value = null;
  document.getElementById("Other").value = null;
  document.getElementById("Other_D").value = null;
  document.getElementById("Other_P").value = null;
  document.getElementById("Other_S").value = null;
  document.getElementById("Sum_pay").value = null;
  document.getElementById("Sum_sent").value = null;
  document.getElementById("Sum_vat").value = null;
}
