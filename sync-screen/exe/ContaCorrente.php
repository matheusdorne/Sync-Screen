<?php

class ContaCorrente extends ContaBancaria
{
   private const float TAXA_SAQUE = 0.005;
   private const float TARIFA_MENSAL = 5_00;

   public function cobrarTarifaMensal(): void
   {
       $this->saldo -= self::TARIFA_MENSAL;
   }

   public function sacar(float $valorSaque): void
   {
       $valorTotal = $valorSaque + ($valorSaque * self::TAXA_SAQUE);
       parent::sacar($valorTotal); // TODO: Change the autogenerated stub
   }


}