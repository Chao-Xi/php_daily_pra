1.$this->db=new mysqli('localhost', 'root' ,'901014', 'website'); 
2.trim($url);
3.filter_var($url, FILTER_VALIDATE_URL) //check the input is the valide url or not
4.$this->db->escape_string($url) //mysqli_escape_string
5.$exists=$this->db->query("select code from links where url='{$url}' ");
  if($exists->num_rows)
  {
    return $exists->fetch_object()->code;
  }
   1) placeholder {$url}  
   2) mysqli:num_rows 
   3) mysqli:fetch_object()
   4) mysqli:fetch_object()->index 
   5) mysqli:insert_id;
6.base_convert();
  base_convert — Convert a number between arbitrary bases
  Returns a string containing number represented in base tobase. The base in which number is given is specified in frombase. Both frombase and tobase have to be between 2 and 36, inclusive. Digits in numbers with a base higher than 10 will be represented with the letters a-z, with a meaning 10, b meaning 11 and z meaning 35. The case of the letters doesn't matter, i.e. number is interpreted case-insensitively.   
  
  2)alter table links auto_increment=100000000;

7.\"  \"
8. .htaccess
RewriteEngine On
RewriteRule ^([a-z0-9]+)$ redirect.php?code=$1