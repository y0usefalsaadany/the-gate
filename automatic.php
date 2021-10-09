<?php
include "init.php";
include "{$tmp}navbar.php";

if (isset($_POST['send'])){
	$ip = "199.168.131.18";
	$port = "8181";
	$url= $_POST['url'];
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_PROXY, $ip);
	curl_setopt($ch, CURLOPT_PROXYPORT, $port);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION , 1);
	$response = curl_exec($ch);
	curl_close($ch);
}
?>
	<br>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="automatic.php">
            <div class="form-group">
                <label for="exampleInputName1">URL</label>
                <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
         
            <button type="submit" class="btn btn-primary" name="send">Visit</button>
        </form>
    </div>
<?php include "{$tmp}footer.php";?>