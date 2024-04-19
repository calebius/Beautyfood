let carrinho = [];
let total = 0;

function pao(nome, preco, img) {
    const produtoExistente = carrinho.find(item => item.nome === nome);

    if (produtoExistente) {
        produtoExistente.quantidade += 1;
        produtoExistente.precoTotal += preco;
    } else {
        carrinho.push({ nome, preco, img, quantidade: 1, precoTotal: preco });
        total += preco; // Movido para cá para evitar incremento indevido do total
    }

    atualizarCarrinho();
}

function removerDoCarrinho(nome) {
    const index = carrinho.findIndex(item => item.nome === nome);

    if (index !== -1) {
        const produto = carrinho[index];

        if (produto.quantidade > 1) {
            produto.quantidade -= 1;
            produto.precoTotal -= produto.preco;
        } else {
            total -= produto.precoTotal;
            carrinho.splice(index, 1);
        }

        atualizarCarrinho();
    }
}

function atualizarCarrinho() {
    var listarCarrinho = document.getElementById("itensCarrinho");
    var totalCarrinho = document.getElementById("totalCarrinho");

    listarCarrinho.innerHTML = "";

    for (var i = 0; i < carrinho.length; i++) {
        var item = document.createElement("li");
        item.textContent = `${carrinho[i].nome} x${carrinho[i].quantidade}`;

        var botaoRemover = document.createElement("button");
        botaoRemover.textContent = "Remover";

        botaoRemover.onclick = (function (nome) {
            return function () {
                removerDoCarrinho(nome);
            };
        })(carrinho[i].nome);

        item.appendChild(botaoRemover);
        listarCarrinho.appendChild(item);
    }

    totalCarrinho.textContent = "Total: R$ " + total.toFixed(2);
}

function realizarCompra() {
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
    localStorage.setItem("total", total.toString());
    window.location.href = "confirmacao.html";
}

function mostrarInformacao() {
    var informacao = document.getElementById("informacaoAdicional");

    if (carrinho.length > 0) {
        if (informacao.style.display === "" || informacao.style.display === "none") {
            informacao.style.display = "block";
        } else {
            informacao.style.display = "none";
        }
    }
}

function consultarEndereco() {
    const cepInput = document.getElementById('cep');
    const nomeInput = document.getElementById('nome');
    const emailInput = document.getElementById('email');
    const tabelaEnderecos = document.getElementById('tabelaEnderecos');
    const cep = cepInput.value.replace(/\D/g, ''); // Remove não-dígitos

    if (cep.length !== 8) {
        alert('Digite um CEP válido com 8 dígitos.');
        return;
    }

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro ao consultar o CEP.');
            }
            return response.json();
        })
        .then(data => {
            if (data.erro) {
                alert('CEP não encontrado.');
            } else {
                exibirResultado(data);
                salvarEndereco(data, nomeInput.value, emailInput.value); // Corrigido para passar o email
                tabelaEnderecos.style.display = 'table';
            }
        })
        .catch(error => {
            console.error('Erro na consulta:', error);
            alert('Erro na consulta. Tente novamente mais tarde.');
        });
}

function exibirResultado(data) {
    const resultadoDiv = document.getElementById('resultado');
    resultadoDiv.innerHTML = `
      <h3>Resultado:</h3>
      <p><strong>CEP:</strong> ${data.cep}</p>
      <p><strong>Logradouro:</strong> ${data.logradouro}</p>
      <p><strong>Bairro:</strong> ${data.bairro}</p>
      <p><strong>Cidade:</strong> ${data.localidade}</p>
      <p><strong>Estado:</strong> ${data.uf}</p>
    `;
}

function salvarEndereco(endereco, nome, email) {
    const tabelaBody = document.querySelector('#tabelaEnderecos tbody');

    const tabelaRow = document.createElement('tr');
    tabelaRow.setAttribute('data-index', tabelaBody.childElementCount); // Adicione um identificador único
    tabelaRow.innerHTML = `
        <td>${nome}</td>
        <td>${email}</td>
        <td>${endereco.cep}</td>
        <td>${endereco.logradouro}</td>
        <td>${endereco.bairro}</td>
        <td>${endereco.localidade}</td>
        <td>${endereco.uf}</td>
        <td><button class="add" align="center" onclick="removerEndereco(this)"> remover </button><br>
        <button class="add" align="center" onclick="add(this)"> adicionar</button></td>
    `;

    tabelaBody.appendChild(tabelaRow);
}

function removerEndereco(button) {
    const tabelaRow = button.closest('tr');
    const tabelaBody = tabelaRow.parentNode;

    tabelaRow.remove();

    // Se a tabela estiver vazia após a remoção, oculte a tabela
    if (tabelaBody.childElementCount === 0) {
        const tabelaEnderecos = document.getElementById('tabelaEnderecos');
        tabelaEnderecos.style.display = 'none';
    }
}

  function add(button) {
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
}
