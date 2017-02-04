<?php
  if(isset($_FILES['file']))
  {
     $file=$_FILES['file'];

     //File properties
     $file_name=$file['name'];
     // echo $file_name;
     $file_tmp=$file['tmp_name'];
     $file_size=$file['size'];
     $file_error=$file['error'];

     //work out the file extension
     $file_ext=explode('.', $file_name);
     $file_ext=strtolower(end($file_ext));
// current() - Return the current element in an array
// each() - Return the current key and value pair from an array and advance the array cursor
// prev() - Rewind the internal array pointer
// reset() - Set the internal pointer of an array to its first element
// next() - Advance the internal array pointer of an array
     
     $allowed=array('txt','jpg');

     if(in_array($file_ext, $allowed)) 
     {
     	if($file_error===0)
     	{
     		if($file_size<=2097152)  //2mb=>2097152bytes
     	    {
                $file_name_new=uniqid('', true).'.'.$file_ext; 
                $file_destination='uploads/'.$file_name_new;

                if(move_uploaded_file($file_tmp, $file_destination))  //return true or false
                {
                    echo $file_destination;
                }	
     	    }		
     	}	
     } 	

  }