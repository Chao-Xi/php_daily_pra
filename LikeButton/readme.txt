1.database/website user article articles_likes
2.group by show all the index element content
3.group_concat(users.username separator '|') as liked_by 
4.$row->liked_by=$row->liked_by ? explode ('|', $row->liked_by) : []; 