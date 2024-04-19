function consultarEndereco() {
    const cepInput = document.getElementById('cep');
    const cep = cepInput.value.replace(/\D/g, ''); // Remove não-dígitos
  
    if (cep.length !== 8) {
      alert('Digite um CEP válido com 8 dígitos.');
      return;
    }
  
    fetch(https://viacep.com.br/ws/${cep}/json/)
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