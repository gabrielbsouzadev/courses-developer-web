class NegociacaoController {

    constructor() {

        let $ = document.querySelector.bind(document);

        this._inputData = $('#data');
        this._inputQuantidade = $('#quantidade');
        this._inputValor = $('#valor');

    }

    adiciona(event) {
        event.preventDefault();

        // 2016-11-12
        let data = new Date(...
            this._inputData.value
                .split('-')
                .map((item, indice) => item - indice % 2)
        );

        let negociacao = new Negociacao(
            
            data,
            this._inputQuantidade.value,
            this._inputValor.value

        );

        let diaMesAno = negociacao.data.getDate() 
                        + '/' 
                        + (negociacao.data.getMonth() + 1)
                        + '/' 
                        + negociacao.data.getUTCFullYear();
     
        console.log(diaMesAno);

    }
}