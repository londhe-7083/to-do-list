<div class="container"><br>
  <h3>Add a Note to iNotes</h3>
  <form action="<?=base_url()?>user/info_pro" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email_id" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Note Discription</label>
      <textarea name="disc" id="disc" rows="3" class="form-control"></textarea>
    </div>
    <button class="btn main first border">Add Note</button>
  </form>


  <div class="m-4">
    <table id="myTable" class=" table-striped table display p-4">
      <thead>
        <tr>
          <th>SR/NO</th>
          <th>Email id</th>
          <th>Discription</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <?php
      foreach($deatails as $key => $row)
      {
        ?> 
        <tbody>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$row['email_id']?></td>
            <td><?=$row['disc']?></td>
            <td>
              <a href="<?=base_url()?>user/edit_info/<?=$row['user_id']?>"> 
                <button class="btn btn-dark btn-sm"><i class="fa-solid fa-pencil"></i> Edit</button>
              </a>
              </td>
            
            <td>
              <a href="<?= base_url()?>user/delete_info/<?=$row['user_id']?>">
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
              </a>
            </td>
        </tr>
      </tbody>
      <?php
      }
      ?>
    </table>

  </div>
</div>

<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>