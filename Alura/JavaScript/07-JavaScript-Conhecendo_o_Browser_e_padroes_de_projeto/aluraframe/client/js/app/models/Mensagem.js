class Mensagem {
    
    constructor(texto='Olá'){
        this._texto = texto;
    }

    get texto(){
        return this._texto;
    }

    set Texto(texto){
        this._texto = texto;
    }
}