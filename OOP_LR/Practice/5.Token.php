<?php
   if(Token::check(Input::get('token')))
   {   	

   }

   <input type="hidden" name="token" value="<?php echo Token::generate();?>" >