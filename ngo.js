function validateForm() {
  let x = document.forms["form1"]["name"].value;
  if ((x == "/") || (x == "@")) {
    document.getElementById("name").innerHTML="Name incorrect";
    return false;
  }
  let y = document.forms["form1"]["name_"].value;
  if ((y == "/") || (y == "@")) {
    alert("Name filled incorrectly");
    return false;
  }
  let z = document.forms["form1"]["add"].value;
  if ((z == "/") || (z == "@")) {
    alert("Address filled incorrectly");
    return false;
  }
  let e = document.forms["form1"]["email"].value;
  if ((e == "/") || (e == "'")) {
    alert("Email filled incorrectly");
    return false;
  }

  let q = document.forms["form1"]["no"].value;
  if (q.toString().length==10) {
    alert("Number must be 10 numbers");
    return false;
  }
}
