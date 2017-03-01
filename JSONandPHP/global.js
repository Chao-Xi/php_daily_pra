$('#add').on('submit', function(){
   var self=$(this),
       contents=self.serialize();
       //output lisk this: a=1&b=2&c=3&d=4&e=5
       //like php: http_build_query()
   $.ajax({
   	url:'add.php',
   	dataType:'json',
   	type:'post',
   	data: contents,
   	success:function(data)
   	{
       if(data.success)
       {
       	alert('The result is: '+ data.result);
       	console.log(data.success);
       }
   	}
   });  

   return false
});