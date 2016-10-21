function loadNews(){
	var url = "https://newsapi.org/v1/articles/?source=abc-news-au&sortBy=top&apiKey=6b5a091ac08d4dd388f6944d18208318";
	var url2 = "https://newsapi.org/v1/articles?source=the-guardian-au&sortBy=top&apiKey=6b5a091ac08d4dd388f6944d18208318";
	var apiList = [url,url2]; 
	var link = apiList[Math.floor(Math.random()*apiList.length)];
	$.getJSON(link,formatNews);
}

function formatNews(JsonNews){
    $("#rotating-item-wrapper").empty();
	var randomIndex = Math.floor((Math.random() * 8)+1);
	var article = JsonNews.articles[randomIndex];
	var author = article.author;
	var title = article.title;
	var content = article.description;
	var url = article.url;
	var img = article.urlToImage;
	var date = Date.parse(article.publishedAt);
	var date = new Date(date);
	var yyyy = date.getFullYear();
	var mm = date.getMonth()+1;
	var dd = date.getDate();
	if(url==null)url="../img/news_img.png";
	$("#rotating-item-wrapper").html(
		//title
		'<h2><a href="'+url+'">'+title+'</a></h2>'
		//Author & Date
		+'<p>&nbsp;&nbsp;&nbsp;&nbsp;'+yyyy+"-"+mm+"-"+dd+'</p>'
		+'<p><img src="'+img+'"alt="news_image"/></p>'
		+'<p>'+content+'</p>');	
	title = title.replace(/'/g ,"[###]");
	content = content.replace(/'/g ,"[###]");
	allocateNews(title,content,url,img,yyyy,mm,dd);	
}

function allocateNews(title,content,url,img,yyyy,mm,dd){
	$.ajax({
	  type: "POST",
	  url: "../app.php",
	  data:{ 
		  location: 1,
		  title:title,
		  content:content,
		  url:url,
		  img:img,
		  yyyy:yyyy,
		  mm:mm,
		  dd:dd
		  }
	});
}
