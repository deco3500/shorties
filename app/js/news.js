function loadNews(){
	var url = "https://newsapi.org/v1/articles/?source=abc-news-au&sortBy=top&apiKey=6b5a091ac08d4dd388f6944d18208318";
	var url2 = "https://newsapi.org/v1/articles?source=the-guardian-au&sortBy=top&apiKey=6b5a091ac08d4dd388f6944d18208318";
	var apiList = [url,url2]; 
	$.getJSON(apiList[Math.floor(Math.random()*apiList.length)],formatNews);
}

function formatNews(JsonNews){
   
	var randomIndex = Math.floor((Math.random() * 10));
	var article = JsonNews.articles[randomIndex];
	var author = article.author;
	var title = article.title;
	var content = article.description;
	var url = article.url;
	var img = article.urlToImage;
	var date = article.publishedAt;

	$(".media").html(
		//title
		'<h2><a href="'+url+'">'+title+'</a></h2>'
		//Author & Date
		+'<p><a href="'+author+'">Author</a>'+author+date+'</p>'
		+'<img src="'+img+'" width="200" height="180" alt="image">'
		+'<p>'+content+'</p>');
}

$(document).ready(function() {
		loadNews();
		
});
