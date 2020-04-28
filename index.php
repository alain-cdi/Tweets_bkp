

<?php
/* Ajout de tweet depuis le formulaire, création d'événement via une requête REST [POST]   */
include('post.php');

?>

<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="tweet.css" />
		<script type="text/javascript" src="tweet.js"></script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PHP API</title>
	</head>
<body>
		<div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
		    <h3>Stockage de Tweets</h3>
			
		    <label>Nom: <span>*</span></label><span id="info1" class="info1"></span>
		    <input type="text" id="user" name="user" placeholder="Nom utilisateur"/>

			<label>Message : <span>*</span></label><span id="info2" class="info2"></span>
			<textarea id="msg" name="msg" placeholder="Message..."></textarea>
		    
		    <label>Hashtag: <span>*</span></label><span id="info3" class="info3"></span>
		    <input type="text" id="tags" name="tags" placeholder="Liste de hashtags"/>
		    
			<label>Date: <span>*</span></label><span id="info4" class="info4"></span>
		    <input type="date" id="date" name="date" ></>
		    
			<input type="submit" name="send" value="Valider le tweet"/>
			<div id="statusMessage"> 
            <?php if (!empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            </div>
		  </form>
	    </div>
	
</body>

</html>