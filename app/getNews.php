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