<?php

class ContaBancaria
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

}

$conta = new ContaBancaria(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', //numeroAgencia
    '57354-10', //numeroConta
    '00.00', // saldo
);

echo $conta->obterSaldo(); //0

$conta->depositar(300.00);

echo "<br>";

echo $conta->obterSaldo(); //300