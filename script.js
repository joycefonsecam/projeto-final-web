document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    const crudContainer = document.getElementById("crudContainer");
    const conteudo = document.getElementById("conteudo");

    loginForm.addEventListener("submit", function(e) {
        e.preventDefault();

        // Simulação de login
        const usuario = document.getElementById("usuario").value;
        const senha = document.getElementById("senha").value;

        // Verifica as credenciais (exemplo: usuário = admin, senha = 123)
        if (usuario === "admin" && senha === "123") {
            loginForm.style.display = "none";
            crudContainer.style.display = "block";
        } else {
            alert("Credenciais inválidas.");
        }
    });

    // Exemplo de interação com o CRUD
    const alunoBtn = document.getElementById("alunoBtn");
    const criarAlunoBtn = document.getElementById("criarAlunoBtn");
    const materiaBtn = document.getElementById("materiaBtn");
    const criarMateriaBtn = document.getElementById("criarMateriaBtn");

    alunoBtn.addEventListener("click", function() {
        // Simulação de requisição AJAX para obter a lista de alunos do banco de dados
        const alunos = [
            { id: 1, nome: "João" },
            { id: 2, nome: "Maria" },
            { id: 3, nome: "Pedro" }
        ];

        let html = "<ul>";
        alunos.forEach(function(aluno) {
            html += "<li>" + aluno.nome + "</li>";
        });
        html += "</ul>";

        conteudo.innerHTML = html;
    });

    criarAlunoBtn.addEventListener("click", function() {
        const nome = prompt("Digite o nome do aluno:");
        // Simulação de requisição AJAX para criar um novo aluno no banco de dados
        // ...

        // Exibe uma mensagem de sucesso
        alert("Aluno criado com sucesso!");
    });

    materiaBtn.addEventListener("click", function() {
        // Simulação de requisição AJAX para obter a lista de matérias do banco de dados
        const materias = [
            { id: 1, nome: "Matemática" },
            { id: 2, nome: "Português" },
            { id: 3, nome: "História" }
        ];

        let html = "<ul>";
        materias.forEach(function(materia) {
            html += "<li>" + materia.nome + "</li>";
        });
        html += "</ul>";

        conteudo.innerHTML = html;
    });

    criarMateriaBtn.addEventListener("click", function() {
        const nome = prompt("Digite o nome da matéria:");
        // Simulação de requisição AJAX para criar uma nova matéria no banco de dados
        // ...

        // Exibe uma mensagem de sucesso
        alert("Matéria criada com sucesso!");
    });
});

