Open/Close Principal:
1)you should be able to extend a classes behavior without modifying it
2)Classes should be open for extension or close for modification 

Example:1) we have two payment method=> paypalipn and creditcard
        2) They both have one method processPayment 
        3) So create an interface list this function, two class both imiplements this interface
        4) These two classes will call this function easily and efficiently