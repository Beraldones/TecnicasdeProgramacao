<?php
require_once 'Pagamento.php';
class PagamentoPix extends Pagamento{
    public function processar();{
        return "<p>Pagamento de R$ {$this->valor} processado via Pix</p>"
    }
}