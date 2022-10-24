


<!-- Modal -->
<div class="modal fade" id="uppte" tabindex="-1" aria-labelledby="uppteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uppteLabel"> Update Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/jdproject/admlayout.php" method="post">
          <textarea name="ujob" type="text" cols="30" rows="10"  placeholder="Set Job deatails"  ><?php echo $row['cjob']  ;   ?></textarea>

            <textarea name="urequired" type="text" cols="30" rows="10" placeholder="Set requirement" > <?php echo $row['crequired']  ;   ?></textarea>

            <input name="uvacancies" type="text" placeholder="vacanancies" >

        

            
            <button name="updatedd" type="submit">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>