<?php

   $db = new PDO('mysql:host=localhost;dbname=search','root','');

   if (isset($_POST['search'])) 
   {
   	  $search = $_POST['search'];
   	  $query = $db->prepare("SELECT * FROM live_search WHERE name LIKE ?");
   	  $query->execute(["%$search%"]);
   	  $count = $query->rowCount();
   	  if ($count == 0) {
   	  	echo "Sorry no result found in our database";
   	  }else
   	  {
        echo "<table class='table table-hover'>";
   	  	while ($r = $query->fetch(PDO::FETCH_OBJ)) 
   	  	{
   	  		$name    = $r->name;
   	  		$father  = $r->father;
   	  		$address = $r->address;
   	  		echo "<tbody>
                <tr>
                   <td>$name</td>
                   <td>$father</td>
                   <td>$address</td>
                </tr>
   	  		</tbody>";
   	  	}
   	  	echo "</table>";
   	  }
   }

?>