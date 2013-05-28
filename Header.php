  <head>
        <meta charset="utf-8" />
        <title>DIVIDE - </title>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href="/Content/Site.css" rel="stylesheet" />
        <link href="/Dividestyle.css" rel="stylesheet" />
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <script src="/Scripts/modernizr-2.5.3.js"></script>
        <script src="/Scripts/jquery-1.7.1.min.js"></script>

        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            // This identifies your website in the createToken call below
            Stripe.setPublishableKey('pk_test_czwzkTp2tactuLOEOqbMTRzG');
            // to be: enter own key

        var stripeResponseHandler = function(status, response) {
            var $form = $('#payment-form');

            if (response.error) {
                // Show the errors on the form
                $form.find('.payment-errors').text(response.error.message);
                $form.find('button').prop('disabled', false);
            } else {
                // token contains id, last4, and card type
                var token = response.id;
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                // and submit
                $form.get(0).submit();
            }
        };
 
        jQuery(function($) {
            $('#payment-form').submit(function(event) {
                var $form = $(this);

                // Disable the submit button to prevent repeated clicks
                $form.find('button').prop('disabled', true);

                Stripe.createToken($form, stripeResponseHandler);

                // Prevent the form from submitting with the default action
                return false;
            });
        });
        </script>
    </head>