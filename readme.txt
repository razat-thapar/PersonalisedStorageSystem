Setup wamp server.
1.download wamp server from http://www.wampserver.com/en/
2.install
3.change browser to chrome by locating the chrome.exe file in the google/chrome/chrome.exe directory.
4.for editor set notepad as default
5.finish

6.now you will see a small icon 'w' in icon menu of the taskbar.
7.just check the color
purple - starting
orange - few services are running like apache, mysql, malriadb, php etc.
green - all services running

8. now to turn orange into green
do as directed in https://stackoverflow.com/questions/48308826/wamp-server-error-local-server-2-of-3-services-running

9. now if you have mysql workbench already installed then it will be using 3306 port by default
Now mysql is also embedded in wamp server also which used 3306 as well, hence , we need to change port of the mysql in wamp.
just follow https://stackoverflow.com/questions/48308826/wamp-server-error-local-server-2-of-3-services-running

--------------------------------------------------------------------------------------------------------------------------------

running the personalstoragesystem app
1. just extract the zip folder of project
2.copy the folder into the server directory
i.e. C:/wamp64/www/
3.now run the server
4.open browser and type localhost:80/personalstoragesystem

now you will see your app running

---------------------------------------------------------------------------------------------------------------------------------

troubleshooting if the mysql database is not connected.
1. see the .sql file in project folder.
2. go to the browser and type localhost:80
3. you will see the phpmyadmin
4. click enter and type the username = root and default password is empty so dont write and hit enter.
5. now change password to "root".
6. now create a database name='storagesystem'
7. now copy and paste the sql file content on the storagesystem database to run it.
8. type "ctrl + enter" to run the script , this will create all our desired tables.
9. now that's it you will see two tables user and drive under storagesystem.

----------------------------------------------------------------------------------------------------------------------------------
references
1. for css in 12 minutes
https://www.youtube.com/watch?v=0afZj1G0BIE&t=433s
2. for javascript in 12 minutes
https://www.youtube.com/watch?v=Ukg_U3CnJWI
3.for php in 15 minutes
https://www.youtube.com/watch?v=ZdP0KM49IVk
4. for html in 12 minutes
https://www.youtube.com/watch?v=bWPMSSsVdPk
https://www.youtube.com/watch?v=KJ13lX20FqU
5. for file upload details and restricting the file upload size using php
http://www.learningaboutelectronics.com/Articles/How-to-restrict-the-size-of-a-file-upload-with-PHP.php
6. for limiting file size using php.ini in web server.
Here, the php have by default size of 128 MB but we can change that by altering the values of directives.
https://www.a2hosting.in/kb/developer-corner/php/using-php.ini-directives/php-maximum-upload-file-size
7.creating a folder in php
https://support.scriptcase.net/en-us/article/1005-create-a-folder-using-php-code
8.Deleting a file in php
https://www.afterhoursprogramming.com/tutorial/php/delete-file/
9.Deleting a folder
https://paulund.co.uk/php-delete-directory-and-files-in-directory
10. checking if a file exists
https://www.geeksforgeeks.org/php-file_exists-function/
-----------------------------------------------------------------------------------------------------------------------------------
troubleshooting refreshing problem
if you change your code and want to see the changes reflected in the web page on browser
just hit
shift + ctrl + R
as without shift , the browser will load the webpage from the cache and not from the original source.

------------------------------------------------------------------------------------------------------------------------------------
learning
action="#" means that the server will load the same page after request is handled.
