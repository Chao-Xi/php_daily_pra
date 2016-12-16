<?php
     class Validator{
      
        protected $errorHandler;
        
        protected $db;

        protected $items;

        protected $rules=['required','minlength','maxlength','email','alnum','match','unique'];
        public $messages=[
                          'required'=>'The :field field is required',
                          'minlength'=>'The :field field must be a minimum of :satisfer length',
                          'maxlength'=>'The :field field must be a maximum pf :satisfer length',
                          'email'=>'That is not a valid email address',
                          'alnum'=>'The :field field mube be alphanumeric',
                          //Litters or numbers
                          'match'=>'The :field field must be match the :satisfer field',
                          'unique'=>'That :field is already taken'
                         ];

        public function __construct(Database $db, ErrorHandler $errorHandler)
        {
         $this->db=$db;	
         $this->errorHandler=$errorHandler;	
        }
        
        public function check($items, $rules)
        {   
            $this->items=$items; 
        	foreach ($items as $item => $value) {
        		 //echo $item. ' '.$value;
        	    if(in_array($item, array_keys($rules)))
        	    {
                 $this->validate([
                                  'field'=>$item,
                                  'value'=>$value,
                                  'rules'=>$rules[$item] 
                 	            ]);
        	    }
        	}

          return $this;
        }
        
       public function  fails()
       {
         return $this->errorHandler->hasErrors();
       }

       protected function validate($item)
       {
       	$field=$item['field'];
       	foreach ($item['rules'] as $rule => $satisfer) {
       		if(in_array($rule, $this->rules))
       		{
       			if(!call_user_func_array([$this, $rule], [$field, $item['value'], $satisfer]))
       			{
                 $this->errorHandler->addError(str_replace([':field',':satisfer'], [$field, $satisfer], $this->messages[$rule]), $field);
       			}	
       		} 
       	}
      
       }


      public function errors()
      {
      	return $this->errorHandler;
      }

      protected function required($field, $value, $satisfer)
      {
      	return !empty(trim($value));
      }
      
      protected function  minlength($field, $value, $satisfer)
      {
      	return mb_strlen($value)>=$satisfer;
      }
      
      protected function maxlength($field, $value, $satisfer)
      {
      	return mb_strlen($value)<=$satisfer;
      }

      protected function email($field, $value, $satisfer)
      {
      	return filter_var($value,FILTER_VALIDATE_EMAIL);
      }
      
      protected function alnum($field, $value, $satisfer)
      {
      	return ctype_alnum($value);
      }

      protected function match($field, $value, $satisfer) 
      { 
      	// echo $satisfer,'-',$value;
      	// die();
      	return $value===$this->items[$satisfer];
      } 

      protected function unique($field, $value, $satisfer)
      {
      	return !$this->db->table($satisfer)->exists([$field=>$value]);
      }

     }        
