<?php
include "init.php";
include "{$tmp}navbar.php";?>
	<br>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="backend/manual.php">
            <div class="form-group">
                <label for="exampleInputName1">IP</label>
                <input type="text" name="ip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">PORT</label>
                <input type="text" name="port" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">URL</label>
                <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
         
            <button type="submit" class="btn btn-primary" name="send">Visit</button>
        </form>
    </div>
<?php include "{$tmp}footer.php";?>