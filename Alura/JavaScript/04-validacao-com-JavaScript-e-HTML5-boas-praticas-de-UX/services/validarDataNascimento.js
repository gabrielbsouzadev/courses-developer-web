export const validarDataNascimento = input => {
    alert(input.value);
    const dataNascimento = new Date (input.value); //04/06/1995
    const dataAtual = new Date (); //2020

    const dataFaz18 = new Date(
        dataNascimento.getUTCFullYear() + 18,
        dataNascimento.getUTCMonth(),
        dataNascimento.getUTCDate()
    ); // 04/06/2013

    if (dataFaz18 > dataAtual){
        input.setCustomValidity("A idade minima é 18 anos");
        return;
    }

    input.setCustomValidity("");
    return;
};