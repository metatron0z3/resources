<?php require_once('view/head.php'); ?>
<body id="linux">
	<div class="container">
		<header>
			<div class="header">
				<?php include_once('view/nav.php'); ?>
			</div>
		</header>
		 
		<div class="main_content">

			<h1 class="chapters">Linux</h1>
				<h2>Users</h2>
					<p>User Management - Make sure to have a separate user for each db (i.e. username=mysql) and a second admin account</p>
				<h2></h2>
				<p><a href="http://www.linux-tutorial.info/modules.php?name=MContent&pageid=258">Important System Files</a></p>
                                <p>Here's a neat command to put in the alias file and be able to call userlist<br/> $ alias userlist='cat /etc/passwd |grep "/bin/bash" |grep "[5-9][0-9][0-9]" |cut -d: -f1' <br/>or also<br/>$ awk -F":" '{ print "username: " $1 "\t\tuid:" $3 }' /etc/passwd<br/> or even<br/>$ awk -F":" '{ print "Linux_name: " $1 "\t\tFull_Name: " $5 }' /etc/passwd<p>
                                <h3>Create an ftp account</h3>
                                <p>For this example, I am using Vsftpd, as it is the default FTP client distributed with RedHat, however these instructions should apply to most FTP server applications. 

                                Create a FTP user group. eg: ftpaccounts 
                                #/usr/sbin/groupadd ftpaccounts 

                                Add a new user to this group, and set the default path of that user to /home/user/. 
                                #/usr/sbin/adduser -g ftpaccounts -d /home/user/ testuser 

                                Set a password for the newley created user. 
                                #passwd testuser 

                                Set ownership of /home/user to the testuser and ftpaccounts. 
                                #chown testuser:ftpaccounts /home/user 

                                Give Read/Write access to testuser and all members in ftpaccounts 
                                #chmod 775 /home/user 

                                Edit /etc/vsftpd/vsftpd.conf file and make sure 'local_enable=YES' is uncommented. 

                                Restart the vsftpd service. 
                                #/etc/init.d/vsftpd restart </p>
                                <h3>Yum</h3>
                                    <p>Here's a random <a href="http://linuxmoz.com/linux-yum-tutorial/">YUM tutorial</a></p>
				<div>
					<h4>Next Steps ...</h4>
						<ul>
							<li></li>
							<li></li>
						</ul>
					<h4>Questions ?</h4>
						<ul>
							<li></li>
							<li></li>
						</ul>
				</div>
		</div>

<?php require_once('view/footer.php'); ?>