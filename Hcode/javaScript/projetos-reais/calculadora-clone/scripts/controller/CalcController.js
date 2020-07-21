class CalcController {

    constructor() {

        //Quando  coloca o "_" ele só pode ser usado dentro dessa Classe // this é pra acessar um atributo
        this._locate = "pt-BR";
        this._displayCalcEl = document.querySelector("#display");
        this._dateEl = document.querySelector("#data");
        this._timeEl = document.querySelector("#hora");
        this._currentDate;
        this.initialize();
    }

    initialize() {
        //Eu quero que aconteça isso a cada "x" quandtidade de milisegundos nesse caso 1000 milisegundos
        //A cada intervalo gera um ID

        this.setDisplayDateTime();
        
        let interval = setInterval(() => {
            this.setDisplayDateTime();
        }, 1000); //vai atualizar a cada 1000 milisegundos ou 1 segundo

        // //Função para parar de atualizar em determindo "x" Tempo nesse caso 10000 milisegundos (10 segundos)
        // setTimeout(() => {
        //     clearInterval(interval);
        // }, 10000);
    }

    setDisplayDateTime(){
        this.displayDate = this.currentDate.toLocaleDateString(this._locate, {
            day: "2-digit",
            month: "long",
            year: "numeric"
        });
        this.displayTime = this.currentDate.toLocaleTimeString(this._locate);
    }

    get displayTime() {
        return this._timeEl.innerHTML;
    }

    set displayTime(value) {
        this._timeEl.innerHTML = value;
    }

    get displayDate() {
        return this._dateEl.innerHTML;
    }

    set displayDate(value) {
        this._dateEl.innerHTML = value;
    }

    //get pra chamar
    get displayCalc() {
        return this._displayCalcEl.innerHTML;
    }

    //set pra mudar o valor
    set displayCalc(value) {
        this._displayCalcEl.innerHTML = value;
    }

    //get pra chamar
    get currentDate() {
        return new Date();
    }

    set currentDate(value) {
        this._currentDate = value;
    }

}