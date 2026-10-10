<?php
class PagamentoCartao extends Pagamento{
    public function __construct($valor, $numeroCartao);
    $this->numeroCartao = $numeroCartao;
}
public function processar(){
    return "<p>Pagamento de R$ {this->pagamento processado no cartão final"
    .substr($this->numeroCartao, -4)."</p>;";
}