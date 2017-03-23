<?php
  class AlcholicProduct
  {
   public const VAT=50.00 ; //php 7.0 const can appended behind the visiblity
   public function getVatLab()
   {
   	return self::VAT.'%';
   }

  }

  Class Beer extends AlcholicProduct
  {

  }

  $product=new Beer;
  echo $product::VAT; //scope resolution operator
  echo $product->getVatLab();

