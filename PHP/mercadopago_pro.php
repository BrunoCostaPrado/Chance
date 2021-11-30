<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>mercado pago</title>
</head>
<body>
    
<?php
// SDK do Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Adicione as credenciais
MercadoPago\SDK::setAccessToken('TEST-6922520056241217-110421-ab5c70a1cd81a1ac53173f28860bf793-1012711557');
?>

<?php
// Cria um objeto de preferência
$preference = new MercadoPago\Preference();

// Cria um item na preferência
$item = new MercadoPago\Item();
$item->title = 'Meu produto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>


<script>
// Adicione as credenciais do SDK
  const mp = new MercadoPago('TEST-cc487ec6-4e40-4cad-bbe1-040a003893e3', {
        locale: 'pt-BR'
  });

  // Inicialize o checkout
  mp.checkout({
      preference: {
          id: 'YOUR_PREFERENCE_ID'
      },
      render: {
            container: '.cho-container', // Indique o nome da class onde será exibido o botão de pagamento
            label: 'Pagar', // Muda o texto do botão de pagamento (opcional)
      }
});
</script>
<!-- // SDK MercadoPago.js V2 -->
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script src="pagamento.js"></script>
</body>
</html>