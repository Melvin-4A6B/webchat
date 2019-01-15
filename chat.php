<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/chat.js"></script>
	<style>
		.wrap {border: 1px solid #ccc; width: 600px; overflow: hidden; margin: auto; padding: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;}
		#chatbox {overflow: hidden; height: 400px; border: 1px solid #ccc; margin-bottom: 10px;}
		#chatbox ul {margin: 0; padding: 0; list-style: none;}
		#chatbox ul li {border-bottom: 1px solid #ccc; padding: 5px; font-size: 14px;}
		#chatbox strong {color: #ff0000;}
		.msgbox {overflow: hidden;}
		#msgfield {border: 1px solid #ccc; padding: 5px; font-size: 16px; box-sizing: border-box; width: 100%; outline: none; font-weight: bold;}
		#name {border: 1px solid #ccc; padding: 5px; font-size: 16px; box-sizing: border-box; width: 100%; outline: none;}
		.sendbutton {border: none; padding: 5px; font-size: 16px; box-sizing: border-box; width: 100%; background-color: #0099FF; color: #FFFFFF;}
	</style>
</head>
<body>
	<div class="wrap">
		<div id="chatbox"></div>
		<div class="msgbox">
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td width="20%">
						<input type="text" name="name" id="name" placeholder="Name" style="padding-left: 20px; padding-right: 20px;">
					</td>
					<td width="60%">
						<input type="text" name="msgfield" id="msgfield" placeholder="Enter your message here" style="margin-left: -20px;">
					</td>
					<td width="20%">
						<input type="submit" name="submit" class="sendbutton" onclick="sendMsg();" value="Send">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<script>
		var intervalID = setInterval (function() {
			$('#chatbox').load('chataction.php');
		},1000);

		var field = document.getElementById('#msgfield');
		field.onkeyup = function(e) {
			if(e.keyCode == 13) {
				sendMsg();
			}
		}
	</script>
</body>
</html>