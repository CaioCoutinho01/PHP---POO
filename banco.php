<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

$primeiraConta = new Conta(new Titular('Caio Coutinho', new Cpf('123.456.789-10')));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarsaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('Rebeca Fransin', new Cpf('987.654.321-10')));
var_dump($segundaConta);


echo Conta::recuperaNumerodeContas() . PHP_EOL;
