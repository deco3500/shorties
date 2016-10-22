<script>
	if($('#get_location').text() == "You are out of area"){
		goToPreviousLocation1();//main.js
	}
	loadMsgs();
</script>
<div class="load_continer">
	<div id="media">
		<div class="comments">
			<ul class="msgList"></ul>
		</div>
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
	<script type="text/javascript" src="js/yourthoughts.js"></script>
</div>