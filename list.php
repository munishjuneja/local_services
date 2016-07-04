<?php 

	
 ?>

 <form method="post" action="">
 	<input type="hidden" name="delete" method="post">
 	<?php if ($res['status']==0): ?>
 		<button type="submit" name="changestatus" class="btn btn-md btn-danger"></button>
 	<?php else: ?>
 		<button type="submit" name="changestatus" class="btn btn-md btn-info"></button>
 	<?php endif ?>

 	

 </form>