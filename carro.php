<?php
require_once 'Carro.php';
require_once 'Veiculo.php';
$carro = new Carro("Onix", "Chevrolet", 4);
$carro->abrirPorta();
<?php
require_once __DIR__ . '/Carro.php';

$carro = new Carro('Onix', 'Chevrolet', 4);
echo htmlspecialchars($carro->abrirPorta(), ENT_QUOTES, 'UTF-8');
