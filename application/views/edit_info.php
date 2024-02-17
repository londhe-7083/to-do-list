<?php

// print_r($user_data);

foreach($user_data as $row)
{
?>
<form action="<?=base_url()?>user/update_info/<?=$user_data[0]['user_id']?>" method="post">
<div class="container mt-4">
    <label  class="form-label">Email address</label>
    <input type="text" class="form-control" value="<?=$row['email_id']?>" name="email_id"><br>
    <label class="form-label">Note Discription</label>
    <textarea name="disc" id="" cols="30" rows="10" class="form-control"> <?=$row['disc']?> $</textarea>
    <button class="btn main first border mt-4">Add Note</button>
</div>
</form>

<?php
}
?>