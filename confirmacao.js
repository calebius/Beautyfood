var carrinho = JSON.parse(localStorage.getItem("carrinho"));
var total = localStorage.getItem("total");

var listaitens = document.getElementById("itensComprados");
var totalCompra = document.getElementById("TotalCompra");

// Recuperando informações do usuário do localStorage
var nomePessoa = localStorage.getItem("nomePessoa");
var emailPessoa = localStorage.getItem("emailPessoa");
var cepPessoa = localStorage.getItem("cepPessoa");

// Exibindo informações do usuário
document.getElementById("nomePessoa").textContent = "Nome: " + nomePessoa;
document.getElementById("emailPessoa").textContent = "Email: " + emailPessoa;
document.getElementById("cepPessoa").textContent = "CEP: " + cepPessoa;

// Função para criar um item na lista de compras
function adicionarItem(nome, preco, img) {
    var item = document.createElement("li");

    var imagem = document.createElement("img");
    imagem.src = img;

    var descricao = document.createElement("span");
    descricao.textContent = nome + " R$ " + preco;

    item.appendChild(imagem);
    item.appendChild(descricao);
    listaitens.appendChild(item);
}

// Iterando sobre os itens no carrinho e adicionando-os à lista
for (var i = 0; i < carrinho.length; i++) {
    adicionarItem(carrinho[i].nome, carrinho[i].preco, carrinho[i].img);
}

totalCompra.textContent = "Total: R$ " + total;

// Função para realizar a compra
function realizarCompra() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var cep = document.getElementById("cep").value;

    // Verifica se os campos obrigatórios foram preenchidos
    if (!nome || !email || !cep) {
        alert('Preencha todos os campos obrigatórios.');
        return;
    }

    // Salvando as informações no localStorage
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
    localStorage.setItem("total", total.toString());
    localStorage.setItem("nomePessoa", nome);
    localStorage.setItem("emailPessoa", email);
    localStorage.setItem("cepPessoa", cep);

    // Redirecionando para a página de confirmação
    window.location.href = "confirmacao.html";
}

function mostrarInformacao() {
    var informacao = document.getElementById("informacaoAdicionalPix");

    if (carrinho.length > 0) {
        if (informacao.style.display === "" || informacao.style.display === "none") {
            informacao.style.display = "block";
        } else {
            informacao.style.display = "none";
        }
    }
}