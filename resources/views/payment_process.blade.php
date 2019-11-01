<html>
<script src="https://js.paystack.co/v1/inline.js"></script>
<body onload="payWithPaystack()">

</body>
</html>


<script>
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: 'pk_live_5fd8d9ee20873ffc6c4a159f15218fbafecd1abb',
            email: '{{$email}}',
            amount: {{$amount}}00,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function(response){
                alert('success. transaction ref is ' + response.reference);
                
            },
            onClose: function(){
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>