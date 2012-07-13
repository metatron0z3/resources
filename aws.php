<?php require_once('view/head.php'); ?>
<body  id="aws">
	<div class="container">
		<header>
			<div class="header">
				<?php include_once('view/nav.php'); ?>
			</div>
		</header>
		 
		<div class="main_content">
	
                    <h1 class="chapter">AWS</h1>
                        <h2></h2>
                        <h3>Elastic Beanstalk - <span>Application Configuration</span><h3>
                            <p><a href="http://23.23.82.17">Current Running Instance</a></p>
                            <p>The Elastic Beanstalk is the AWS product that encompasses the entire application server configuration as a distinct aws object.</p>
                            <p>There is an interesting challenge I'm having with AWS, that I'd like to write out to see if maybe you can help. There are these various abstracted product names with all the AWS stuff and they all have roots in basic system functions and architectures. So even though they make some things easy with the console, you still have to dig deep inside of linux to truly optimize your server. If we get certain terms out there, I think you'll come up with good insights that will help me as I sift through al of this.
                            <p>Abstraction number one is EC2 or Elastic Cloud Compute. The is basically a cpu that you can create at no charge but have running for about $15/month in micro size. These cpus don't have storage drives and therefore no persistent storage unless you add an EBS volume (Elastic Block Store) which you can add a few. These are basically mounted file systems. and you can get snapshots of them, they are your backup mechanism. </p>
                            <p>But for a dynamic application, with db content, the trend is really toward always having the db application running on it's own server, it's own instance. EC2 will work, but they are really trying to steer you towards the RDS which is a handrolled db server. </p>
                            <p>The Elastic Beanstalk is the full php web application product abstraction. It needs an ec2 to run on top of, but otherwise, almost immediately gives you a php scripted browser presence. But it has NO db server, and while you can install MySQL on the disk itself, the recommendation is to manage your db on a separate server - and RDS, but another ec2 will also do.</p>
                            <p>For the moment, to stay in the Free Usage Tier, we'll stick with an ec2 beanstalk running mysql on same server. We'll optimize what we can.</p>
                            <p>Couple of other abstractions ... S3 bucket is the CDN, and apparently where EBS volumes store their snapshotted data. There's more talk about later.</p>

                        <h2>Security Group<h2>

                        <h2>S3 Bucket - Simple Storage</h2>

                        <h2>53 - Domain Management</h2>

                        <h2>AWS SDK</h2>
                            <p><a href="http://23.23.82.17/aws_sdk/_compatibility_test/sdk_compatibility_test.php">SDK compatibility test</a></p>
				
		</div>

<?php require_once('view/footer.php'); ?>