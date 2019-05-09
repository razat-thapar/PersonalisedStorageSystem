# PersonalisedStorageSystem (refer readme.txt for more info)
It's a website developed by the team of four people that enables any user to upload, download and store any document upto 10MB of size on the server. Here, the size is configurable. 

# Technologies Used 			
* *UI Designing*	**Html 	Css** <br />
* *UI Side Scripting* 	**javascript**	<br/>
* *Backend*	**PHP**	<br/>
* *Database* 	**MySQL**	<br/>
* *Application Server*	**Apache Tomcat**	

# User Requirements	Status
1# User should be able to register.	done <br/>
2# User should able to sign up.	done <br/>
3# User should be able to change password.	done <br/>
4# User should be able to upload single and mutiple files of any type ( e.g .txt,.docx,.png,.jpg,.pdf,.zip etc).	done <br/>
5# User should be able to download all types of files.	done <br/>
6# User should be able to track activity history with proper details.	done <br/>
7# User should be able to delete any current/previous file from the storage at any time.	done <br/>
8# Validation should be properly done ( e.g. storage size limit of 200 MB for each user, user password validation, max upload file size limit of 10MB etc).	done <br/>
9# Each upload should show all the mandatory details like filename,upload date with time, filesize, download option, delete option.	done <br/>
10# User should be able to end current session ( e.g. Logout ).	done <br/>

# How to run this website on wamp server.
step 1: setup wamp server  <br/>
step 2: copy the whole project folder by extracting from zip file(personalisedstoragesystem.7z) into the server directory. i.e. C:/wamp64/www <br/>
step 3: now open phpmyadmin from server webpage (i.e. localhost:80 on browser) and enter the username and password. <br/>
step 4: create a new database named "storagesystem" with default values. <br/>
step 5: go to storagesytem database and click on the sql tab, now copy the content from .sql file and paste it. run it using ctrl+enter. <br/>
step 6: now you will see the two tables i.e. drive and user created under storagesystem database. <br/>
step 7: now make sure that the server is running by typing localhost on the browser. <br/>
### step 8: type localhost:{apache-portno(default-80)}/{name of the project folder} <br/>
step 9: now you will see the index.php web page. <br/>

# Troubleshooting 
Refer 
### 1. readme.txt  ---- contains all that you need to know like setting up wamp server, mysql troubleshooting, references used. <br/>
### 2. documentation-personalisedStorageSystem.xlsx 

# Credits 
Razat Aggarwal - aggarwal091196@gmail.com<br/>
Arshiya Chander -  <br/>
Harnoor kaler -<br/>
ketan goel - <br/>

