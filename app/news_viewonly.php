<script>
	$.ajax({
				url:"getNews.php",  
				success:function(data) {
				$(".news").html(data);
	}});
</script>
<div class="load_continer">
	<div id="media">
		<div class="news" style="height:40em;align-content: center;">
		</div>
	</div>
</div>