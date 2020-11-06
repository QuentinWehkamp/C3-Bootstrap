function Validate(name, adres) {
  var nValidate = /^[a-z ,.'-]+$/i;
  var aValidate = /^([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/i;

  let div = document.createElement("div");

  if (name.match(nValidate)) {
    var confirm = 1;
  } else {
    div.classList.add("alert", "alert-danger", "well");
    let text = document.createTextNode("De ingevoerde naam klopt niet");
    div.appendChild(text);
    document.getElementById("alert").appendChild(div);
  }

  if (adres.match(aValidate)) {
    if (confirm == 1) {
      div.classList.add("alert", "alert-success" ,"well");
      let text = document.createTextNode("Dankuwel");
      div.appendChild(text);
      document.getElementById("alert").appendChild(div);
    }
  } else {
    div.classList.add("alert", "alert-danger", "well");
    let text = document.createTextNode("Het ingevoerde adres klopt niet");
    div.appendChild(text);
    document.getElementById("alert").appendChild(div);
  }
}
