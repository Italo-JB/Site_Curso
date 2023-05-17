function validarForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username === "" || password === "") {
      alert("Por favor, preencha todos os campos.");
      return false;
    }
  
    // Aqui você pode adicionar sua lógica de autenticação
  
    alert("Login realizado com sucesso!");
    return true;
  }
  