<?php

    $paypalIpn=new paypalIpn();
    $creditCard=new CreditCard();

    $paymentManager=new PaymentManager($paypalIpn);
    $paymentManager1=new PaymentManager($creditCard);

    $paymentManager->process();
    $paymentManager1->process();