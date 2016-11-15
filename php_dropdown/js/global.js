//console.log('work');
$('#user-select').on('change',function(){
    //change->callback function
    var self = $(this);
    
    $.ajax({
             url:'http://localhost/practice/php_dropdown/partials/user.php',
             type:'GET',
             data: {user: self.val() },//from #user-select's selected value
             success:function(data)
             {
                $('#user-profile').html(data);
             }
           })
})