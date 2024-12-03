function toggleForms() {
    // Alterna entre os dois formulários
    var formCadastro = document.getElementById("form-cadastro");
    var formLogin = document.getElementById("form-login");
    var tituloForm = document.getElementById("titulo-form");

    if (formCadastro.style.display === "none") {
        // Mostrar o formulário de cadastro
        formCadastro.style.display = "block";
        formLogin.style.display = "none";
        tituloForm.textContent = "Cadastro";
    } else {
        // Mostrar o formulário de login
        formCadastro.style.display = "none";
        formLogin.style.display = "block";
        tituloForm.textContent = "Login";
    }
}
