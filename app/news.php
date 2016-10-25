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
				/*
				$username = "sivivis";
				$password = "HKtmDmE8F54b";
				$dbname = "sivivis_NoticeMe";*/
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
				
			<img src="img/sad.png" alt="SAD" height="40" width="40" onclick="sendEmoji('sad')"/>
			<span class="label label-default" >SAD</span>
			<img src="img/smile.png" alt="SMILE" height="40" width="40" onclick="sendEmoji('smile')"/>
			<span class="label label-default" >SMILE</span>
			<img src="img/joy.png" alt="JOY" height="40" width="40" onclick="sendEmoji('joy')"/>
			<span class="label label-default" >JOY</span>
			<img src="img/angry.png" alt="ANGRY" height="40" width="40" onclick="sendEmoji('angry')"/>
			<span class="label label-default" >ANGRY</span>
			<img src="img/heart.png" alt="HEART" height="40" width="40" onclick="sendEmoji('heart')"/>
			<span class="label label-default" >HEART</span>	
			<img src="img/crying.png" alt="CRYING" height="40" width="40" onclick="sendEmoji('crying')"/>
			<span class="label label-default" >CRYING</span>
			
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