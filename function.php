<?php

function alertEcho($alrtmsg, $alrtredirect) {
   	echo "<script>
		alert('$alrtmsg');
		window.location.href='http://localhost/finalLab/finalLab/$alrtredirect';
		</script>";
}


?>