function loadNewsFromScreen(){
	
}

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
		case "lol":
			content = "<img src='img/lol.png' width='40' height='40' alt='LOL'>";
			break;
		case "yas":
			content = "<img src='img/yas.png' width='40' height='40' alt='YAS'>";
			break;
		case "wtf":
			content = "<img src='img/wtf.png' width='40' height='40' alt='WTF'>";
			break;
		case "omg":
			content = "<img src='img/omg.png' width='40' height='40' alt='OMG'>";
			break;
	}
	var currm = "<li class='bubble'>"+content+"</li>";
    $('.msgList').append(currm);
}

//For Text
function save_n_SendHistory(msg){
	if($('.msg textarea').val()!= ""){
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