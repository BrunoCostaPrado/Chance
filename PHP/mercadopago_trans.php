<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    
<!-- Step #2 -->
<form id="form-checkout" >
   <input type="text" name="cardNumber" id="form-checkout__cardNumber" />
   <input type="text" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" />
   <input type="text" name="cardExpirationYear" id="form-checkout__cardExpirationYear" />
   <input type="text" name="cardholderName" id="form-checkout__cardholderName"/>
   <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail"/>
   <input type="text" name="securityCode" id="form-checkout__securityCode" />
   <select name="issuer" id="form-checkout__issuer"></select>
   <select name="identificationType" id="form-checkout__identificationType"></select>
   <input type="text" name="identificationNumber" id="form-checkout__identificationNumber"/>
   <select name="installments" id="form-checkout__installments"></select>
   <button type="submit" id="form-checkout__submit">Pagar</button>
   <progress value="0" class="progress-bar">Carregando...</progress>
</form>
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
       const mp = new MercadoPago('TEST-cc487ec6-4e40-4cad-bbe1-040a003893e3');
       // Add step #3
   </script>
<script src="pagamento.js"></script>
</body>
</html>