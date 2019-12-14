<!DOCTYPE html>
<html>
<head>
  <title>PHP Simple Payment Gateway</title>
</head>
<body>
  <form>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <button type="button" onclick="payWithPaystack()" class="btn btn-default" style="    width: 100%;padding: 10px;"> Pay with <img src="https://raw.githubusercontent.com/PaystackHQ/wordpress-payment-forms-for-paystack/master/icon.png" style="height: 20px;"></button> 
      </form>
 
        <script>
          function payWithPaystack(){
            var handler = PaystackPop.setup({
              key: 'pk_test_d827f8e5eb1b005eb300cc8ea1afc6ab63d785b8',
              email: 'adeleyeayodeji12345@gmail.com',
              amount: '100000',
              currency: "NGN",
              ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
              metadata: {
                 custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "07034803384"
                    }
                 ]
              },
              callback: function(response){
                  alert('success. transaction ref is ' + response.reference);
              },
              onClose: function(){
                 // window.location.href="pay.php";
              }
            });
            handler.openIframe();
          }
        </script>
</body>
</html>