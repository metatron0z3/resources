<?php require_once('view/head.php'); ?>

<body id="php">
    <div class="container">
        <header>
                <div class="header">
                        <?php include_once('view/nav.php'); ?>
                </div>
        </header>

        <div class="main_content">
            <h1 class="chapter">MySQL</h1>

                <h2></h2>
                <h3>Installation</h3>
                    <p>On the Elastic Beanstalk app, MySQL was not installed out of the gate. But a yum install got the packages loaded.
                    The packages I installed were:<br/> 
                    <span>
                        mysql55.x86_64 <br/> 
                        mysql55-server.x86_64<br/>  
                        mysql55-common.x86_64<br/>  
                        mysql55-devel.x86_64 <br/> 
                        mysql55-bench.x86_64 <br/>  
                        mysql55-libs.x86_64 <br/> 
                        mysql55-test.x86_64<br/></span>
                    The first 3 being the main ones and the one that got the linux mysql process - mysqld - to run. Should at some point, look at these other files, to see how they're used</p>
                    
                    <p>Here's a good link on <a href="http://www.linuxhomenetworking.com/wiki/index.php/Quick_HOWTO_:_Ch34_:_Basic_MySQL_Configuration">MySQL Configuration</a></p>
                    <p><a href="http://www.thegeekstuff.com/2008/07/howto-install-mysql-on-linux/">and another one</a></p>
                 <h3>Key Command Line Statements</h3>
                    <p>The core commands to get mysql started on the server are:<br/>
                        $ chkconfig mysqld on<br/>
                        $ service mysqld start<br/>
                        $ service mysqld stop or $ /sbin/service mysqld stop<br/>
                        $ service mysqld restart<br/>
                        $ service mysqld status<br/>
                        $ mysql -u root -p<br/>
                        $ mysqladmin -u root password new-password<br/>
                        $ mysqldump --add-drop-table -u [username] -p[password] [database] > [backup_file] [location] - To backup<br/>
                        $ mysql -u [username] -p[password] [database] < [backup_file] - To restore<br/>
                        Also need ... create new user
                    </p>
                <h3>The etc/my.cnf File</h3>
                    <p>You can define most of MySQL’s configuration parameters in the my.cnf file which may be located in either the /etc or /etc/mysql directory depending on your version of Linux.<br/>Note: Your Linux distribution may only allow MySQL server to listen on the 127.0.0.1 localhost address. This is sufficient if the database and the application that uses it is on the same server. To allow access from remote clients you will have to let it listen to the IP address of your network interface. The bind-address directive in the [mysqld] section of the my.cnf file governs this action.</p>
                    <p> So in the case of having a separate db server, the bind-address of the db server should be changed to the IP of the main application server. AWS probably provides a way of doing this in the console, but this is the right way of doing it.</p>
                <h3>Checking the Error Logs</h3>
                    <p>MySQL errors are logged automatically in the /var/log/mysqld.log file; investigate this file at the first sign of trouble.</p>
                <h3>Database Location</h3>
                    <p>According to the /etc/my.cnf file, MySQL databases are usually located in a subdirectory of the /var/lib/mysql/ directory. If you create a database named test, then the database files will be located in the directory /var/lib/mysql/test.</p>
                <h3>mysql_safe</h3>
                    <p>...</p>
                <h3>mysql & mysqld</h3>
                <p>Note: The difference between mysql and mysqld:<br/>
                    mysql - it's a commandline (administration) tool (something like sqlplus in Oracle)<br/>
                    mysqld - it's a server daemon. this is the database server main binary (executable)</p>
                <p>This is a link for <a href="http://aws.amazon.com/articles/1663">AWS MySQL Setup</a> but it mainly for operating the AWS console via API commands. Nothing we should need to do anytime soon.</p>
                <p><a href="http://www.youtube.com/watch?v=_g4A4ZZ2XBk&feature=related">Mongodb Schema Design</a></p>
        </div>

<?php require_once('view/footer.php'); ?>

