function intergrateMSG(msg){
	if(document.cookie!=null){
	var cookie = ((document.cookie.split(';'))[0]).split('=')[1];
    cookie += "[###]";
    message = cookie + msg;
	return message;
	}else{
	return ""; 
	}

}

function setCookie(msg){
	var d = new Date();
	var timeStamp = d.getTime();
	d.setTime(d.getTime() + (60000));//10mins = 600000
	var expires = "expires="+ d.toUTCString();
	message = intergrateMSG(msg);
	document.cookie = "msg = "+message+";"+expires;
}

function updateComments(){
    var msg = ((document.cookie.split(';'))[0]).split('=')[1];
    var msgList = msg.split('[###]');
    var content = msgList[msgList.length-1];
    switch(content){
		case "sad":
			content = "<img src='img/sad.png' width='40' height='40' alt='SAD'>";
			break;
		case "smile":
			content = "<img src='img/smile.png' width='40' height='40' alt='SMILE'>";
			break;
		case "joy":
			content = "<img src='img/joy.png' width='40' height='40' alt='JOY'>";
			break;
		case "angry":
			content = "<img src='img/angry.png' width='40' height='40' alt='ANGRY'>";
			break;
		case "heart":
			content = "<img src='img/heart.png' width='40' height='40' alt='HEART'>";
			break;
		case "crying":
			content = "<img src='img/crying.png' width='40' height='40' alt='CRYING'>";
			break;
	}
	var currm = "<li class='bubble'>"+content+"</li>";
    $('.msgList').append(currm);
}

//For Text
function save_n_SendHistory(msg){
	var filter = "fuck you";
	var msg_text = $('.msg textarea').val();
	if(msg_text != "" && (msg_text.toLowerCase()).indexOf(filter)!== 0){
		//Save
		setCookie($('.msg textarea').val());
		//Display
		updateComments();
		
	}else{
		$('.msg textarea').effect("highlight", {}, 2000);
	}
	$('.msg textarea').val("");
}

//For Emoji
function sendEmoji(emoji){
	//setCookie();
	setCookie(emoji);
	updateComments();
}