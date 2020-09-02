import BotaoConclui from './componentes/concluiTarefa.js';
import BotaoDeleta from './componentes/deletaTarefa.js';

const criarTarefa = (evento) => {

    evento.preventDefault();

    const lista = document.querySelector('[data-list]');
    const input = document.querySelector('[data-form-input]');
    const valor = input.value;

    const tarefa = document.createElement('li');
    tarefa.classList.add('task');
    const conteudo = `<p class="content">${valor}</p>`;

    // Existem outros métodos que podemos utilizar para manipular nós:
    // insertBefore(pai, filho): Coloca um nó antes do outro.
    // replaceChild(elemento1, elemento2): Substitui o nó elemento 1 pelo nó elemento2.
    // removeChild(elemento): Remove um nó da árvore.

    tarefa.innerHTML = conteudo;

    tarefa.appendChild(BotaoConclui());
    tarefa.appendChild(BotaoDeleta());
    lista.appendChild(tarefa);
    input.value = " ";

}

const novaTarefa = document.querySelector('[data-form-button]');

novaTarefa.addEventListener('click', criarTarefa);
