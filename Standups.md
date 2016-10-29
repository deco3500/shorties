#First Stand Up 

##Week 8 - Design - 12.09.16

##Colour Scheme


Splash page - blue, red, yellow, white and purple
Home page - blue, yellow, white and grey
News - blue, yellow, white and grey
Your thoughts - blue, yellow, white and grey
Choice of Address(out of area) - blue, yellow, white and grey
Scan QR code - blue, yellow, white and grey
Blue  #2baae1
Yellow #fff100 rgba(255, 242, 0, 0.93)
Dark Grey #58585b  rgba(90, 90, 92, 0.96)
Grey #7c7c7c


User testing steps to follow:


##Near the board

1. On your homepage can you please click on QR Code
2. The camera screen will show, and it will take you back to the homepage which shows your location 
3. Can you now select the News button
4. Can you post some text to the board
5. This will then take you to the board where your text is shown publicly


##At home

1. On your homepage can you please click on the News button
2. The homepage will ask you to select which location you want to view
3. Can you now select the Garden City button
4. This will then take you to the board where other people have posted in this location

#Second Stand Up

##Week 10 - Build - 07.10.16

|   | Done & Working on  | next |
|---|---|---|
| Remy  | -Initial main page (fixed the layout problem) -Initial main page (fixed the layout problem)  | -System architecture -Will keep editing code after github account fixed |
|  Tina | user testing (remove DM, add RTN)
Iteration document: readme
the framework of the board 
design of new function  | 
Framework of RTN
Framework of Your Thoughts - view
Framework of News - view  |
| Sivi  | splash(3secs)
location (added the location code but it isn't working)
board (refreshes every 1min, time added)  | To fix location
Homepage - before taking qr code
Your Thoughts - post
Your Thoughts - view  |


Pages Done:
Main.php Homepage - with location (done) 
Index.php (done)


Partially done:
Choose location
Board - News(+RTN), Your Thoughts


Pages need to do:
Homepage - before taking qr code
RTN - post (2 pages : (i) selecting emoji (ii) submit success) * pls refer to the design mockup
News - post
News - view
Your Thoughts - post
Your Thoughts - view
Scanning QR code for recognizing board


RTN -> React to News


#Third Stand Up

##Week 12 - Build - 21.10.16

|   | Working on  | done | next |
|---|---|---|---|
|Remy	|	Autolocate page to user by geolocation
Get/Load random News Function
Improved pages connections and UI
Post Message Function|	|	|
|Tina	|documentation	|Framework - news_post
Framework - news_view	|	User testing
Promotional material|
|Sivi	|Qr code camera
Message function in your_thoughts	|	Currently have the camera working and takes photo
Message function done|	Refactoring the UI
Your_thoughts|



Clarification:
- Messages that sent to the board will store in cookies
- Using to News API  retrieve news
- Needss filters for dirty language and commercial(Not Yet)


Changes that made:
- Combine RTN into news_post
- Use random api for news
- Random location


Problems:


Pages need to be done:
- Your_thoughts_view
- Your_thoughts_post


Research web hosting:
- https://dashboard.rc.nectar.org.au/auth/login/
- https://www.digitalocean.com/pricing/
- http://www.hostgator.com/ 
