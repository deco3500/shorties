<script>
	if($('#get_location').text() == "You are out of area"){
		goToPreviousLocation();//main.js
	}
</script>
<div class="load_continer">
	<div id="media">
		<div class="news">
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "NoticeMe";
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql = "SELECT * FROM News WHERE LocID = 1";
				$newslink = $conn->query($sql);
				$row = $newslink->fetch_assoc();   
			    echo(
					'<h2><a href="'.$row['url'].'">'.str_replace("[###]","'",$row['title']).'</a></h2>'
					//Author & Date
					.'<p>&nbsp;&nbsp;&nbsp;&nbsp;'.$row['news_date'].'</p>'
					.'<p><img src="'.$row['img'].'"alt="news_image"/></p>'
					.'<p>'.str_replace("[###]","'",$row['content']).'</p>'
			    );  
			 ?>
			 </div>
		<div class="comments">
			<ul class="msgList"></ul>
		</div>
	</div>
	<div class="MSG_Box">
		<div class="poll form-group hvr-hang">
				
			<img src="img/lol.png" alt="LOL" height="40" width="40" onclick="sendEmoji('lol')"/>
			<span class="label label-default" >LOL</span>
			<img src="img/yas.png" alt="YAS" height="40" width="40" onclick="sendEmoji('yas')"/>
			<span class="label label-default" >YAS</span>
			<img src="img/wtf.png" alt="WTF" height="40" width="40" onclick="sendEmoji('wtf')"/>
			<span class="label label-default" >WTF</span>
			<img src="img/omg.png" alt="OMG" height="40" width="40" onclick="sendEmoji('omg')"/>
			<span class="label label-default" >OMG</span>				
			
		</div>
		<div class="msg input-group">
			<textarea class="form-control input-lg" type="text" maxlength="225"/>
			<div class="input-group-btn">
				<button type="button" class="btn btn-default" onclick="save_n_SendHistory(this)"><img src="img/send.png" width="40" height="40" alt="Send"></button>
  			</div>
		</div>
			
	</div>
	<script type="text/javascript" src="js/news.js"></script>
</div>