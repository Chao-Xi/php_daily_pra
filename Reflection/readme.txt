1.new ReflectionClass('Acme\User'); 
  get_class_methods($rc)

2.new ReflectionMethod('Acme\User','getData');

3.$rp=new ReflectionProperty('Acme\User','data'); 

4.$rp=new ReflectionParameter(['Acme\User','setData'], 0); 

5.$ro=new ReflectionObject($user);