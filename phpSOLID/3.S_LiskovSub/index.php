<?php
    
    $car=new Car();
    //$car=new Astra();
    //$car=new Bettle();

    $driver=new Driver($car);

    $driver->go();