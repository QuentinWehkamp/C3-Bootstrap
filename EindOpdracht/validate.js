function Validate(name, adres){
    var nValidate = /^[a-z ,.'-]+$/i;
    var aValidate = /^([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/i;
    if(name.value.match(nValidate)){
      var confirm = 1;
    }
    if(name.value.match(aValidate)){
      if(confirm == 1){
        document.getElementById("alert").innerHTML = "<div class=\"alert alert-success\" role=\"alert\">Dankuwel</div>"
      }
    } else {
  
    }
  }