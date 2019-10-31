function passVisibility() {
  let pass = document.getElementById("pass");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}

function validateRegister() {
  let name = document.forms["registerForm"]["name"].value;
  let email = document.forms["registerForm"]["email"].value;
  let pass = document.forms["registerForm"]["password"].value;
  if (name == "") {
    alert("Name can't be empty.");
    return false;
  }
  if (pass == "") {
    alert("Password can't be empty");
    return false;
  }
  if (email == "") {
    alert("Email can't be empty.");
    return false;
  } else {
    console.log("Email");
    let regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!regex.test(email)) { alert("Invalid email format."); }
    return regex.test(email);
  }
}

function validateLogin() {
  let email = document.forms["loginForm"]["email"].value;
  let pass = document.forms["loginForm"]["password"].value;
  if (pass == "") {
    alert("Password can't be empty");
    return false;
  }
  if (email == "") {
    alert("Email can't be empty.");
    return false;
  } else {
    console.log("Email");
    let regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!regex.test(email)) { alert("Invalid email format."); }
    return regex.test(email);
  }
}
