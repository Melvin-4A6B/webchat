function sendMsg() {
	var chMsg = $('#msgfield').val();
	var chname = $('#name').val();

	if(chname != '') {

	} else {
		alert('Please enter your name');
		$('#msgfield').focus();
	}

	if(chMsg != '') {

		chMsg = encodeURI(chMsg);
		chname = encodeURI(chname);

		$('#chatbox').load('chataction.php?msg=' + chMsg + '&name=' + chname);
		$('#msgfield').val('');
		$('#msgfield').focus();
	} else {
		alert('Please enter a message');
		$('#msgfield').focus();
	}

	$('#chatbox').animate({scropllTop: $(document).height()}, 'slow');
}