
<?php

class Viagem
{

  var $origem;
  var $destino;
  var $data_ida;
  var $data_volta;
  var $classe;
  var $adultos;
  var $criancas;
  var $preco;

  function __construct(
    $origem,
    $destino,
    $data_ida,
    $data_volta,
    $classe,
    $adultos,
    $criancas,
    $preco
  ) {

    if (!$this->dataValida($data_ida)) {
      throw new Exception("Data de Ida Inválida");
    }

    if (!$this->dataValida($data_volta)) {
      throw new Exception("Data de Ida Inválida");
    }

    if ($data_volta < $data_ida) {
      throw new Exception("A data de volta não pode ser menor que a data de ida");
    }

    if (!$this->precoValido($preco)) {
      throw new Exception("Preço Inválido");
    }

    $this->origem = $origem;
    $this->destino = $destino;
    $this->data_ida = $data_ida;
    $this->data_volta = $data_volta;
    $this->classe = $classe;
    $this->adultos = $adultos;
    $this->criancas = $criancas;
    $this->preco = $this->convertePreco($preco);
  }

  public function dataValida($data)
  {
    //2020-01-10
    if (strlen($data) != 10) {
      return false;
    }

    if (!strpos($data, "-")) {
      return false;
    }

    $partes = explode("-", $data);

    $ano = $partes[0];
    $mes = $partes[1];
    $dia = $partes[2];

    if (strlen($ano) < 4) {
      return false;
    }

    if (!checkdate($mes, $dia, $ano)) {
      return false;
    }

    $data_atual = date("Y-m-d");

    if ( strtotime($data) < strtotime($data_atual)) {
      return false;
    }

    return true;

  }

  public function precoValido($preco){

    $regex_preco = "/^[0-9]{1,3}([.][0-9]{3})*[,][0-9]{2}$/";               
    return preg_match($regex_preco, $preco);

  }

  function convertePreco($preco)
  {
    $numero_valido = str_replace(",", ".", $preco);
    $numero_valido = str_replace(".", "", substr($numero_valido, 0, -3)) . substr($numero_valido, -3);
    return doubleval($numero_valido);
  }

}
