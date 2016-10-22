function loadMsgs(){
	var text = "OMG that is soooo kooool";
	var text2 = "What was that story about, I didn'even get it....so weird";
	var text3 = "oooooo thats an awesome device, my next bucket list!!";
	var msgList = [text,text2,text3]; 
	$.getJSON(msgList[Math.floor(Math.random()*msgList.length)],formatMsgs);
}
function formatNews(JsonNews){
   
	var randomIndex = Math.floor((Math.random() * 8)+1);
	var article = JsonNews.articles[randomIndex];
	var author = article.author;
	var title = article.title;
	var content = article.description;
	//var url = article.url;
	//var img = article.urlToImage;
	var date = Date.parse(article.publishedAt);
	var date = new Date(date);
	var yyyy = date.getFullYear();
	var mm = date.getMonth()+1;
	var dd = date.getDate();
	$("#media .news").html(
		//title
		'<h2><a href="'+url+'">'+title+'</a></h2>'
		//Author & Date
		+'<p><a href="'+author+'">Author</a> &nbsp;&nbsp;&nbsp;&nbsp;'+yyyy+"-"+mm+"-"+dd+'</p>'
		+'<p><img src="'+img+'"alt="news_image"/></p>'
		+'<p>'+content+'</p>');		
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