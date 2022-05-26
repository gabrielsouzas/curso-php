const listarCarros = async(pagina) => {
    // Aguarda para prosseguir até ter recebido os dados do listar-carros.php
    const dados = await fetch("./controller/listar-carros.php?pagina=" + pagina); //?pagina=" + pagina);
    // Retorno de objetos
    const resposta = await dados.json();
    

    // Verifica se o indice status retornou true ou false
    if (!resposta['status']) {
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        const conteudo = document.querySelector(".listar-carros");
        if (conteudo) {
            // Se existir o seletor no index.html ele insere neste seletor a resposta do listar-carros.php com o indice 'dados'
            conteudo.innerHTML = resposta['dados'];
        }
    }
}

listarCarros(1);


// Cadastro de carro no Banco de Dados em PHP
const cadCarroForm = document.getElementById("cad-carro-form")

document.getElementById("cad-carro-btn").value = "Salvando..."

// Recebee o SELETOR da janela modal
const cadCarroModal = new bootstrap.Modal(document.getElementById("cadCarroModal"))


// Somente acessa o IF quando existir o SELETOR cad-carro-form
if (cadCarroForm) {
    // Aguarda o usuário clicar no botão salvar
    cadCarroForm.addEventListener("submit", async(e) => {
        // Não permitir a atualização da página
        e.preventDefault()

        // Testar se acessou a função
        // console.log("Acessou a função!")
        // Esse log vai aparecer em inspecionar >> console >> info 

        const dadosForm = new FormData(cadCarroForm);

        // Aguarda o retorno da inserção
        const dados = await fetch("controller/inserir-carro.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();

        // Acessa o IF quando não cadastrar com sucesso
        // Neste caso ele acessa o indice status que foi criado para esse objeto e verifica se ele é falso ou verdadeiro
        if (!resposta['status']) {
            document.getElementById("msgAlertaErro").innerHTML = resposta['msg'];
            document.getElementById("msgAlerta").innerHTML = "";
        } else {
            document.getElementById("msgAlertaErro").innerHTML = "";
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
            cadCarroForm.reset();
            cadCarroModal.hide();
            //listarCarros();
        }
        document.getElementById("cad-carro-btn").value = "Salvar"

    })
}