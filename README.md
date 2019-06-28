<h1 align="center">How to start</h1>

<ul>
    <li>$ git clone https://github.com/smhohol/yii2-shop.git your_project_folder_name <i>- create local copy of code from github</i></li>
    <li>$ vagrant up <i>- will create and start a virtual machine with the required software for the project (<b>it should be installed, for example, VirtualBox and Vagrant itself</b>)</i></li>
    <li>$ php init <i>- initialize application</i></li>
    <li>$ vagrant ssh</li>
    <li>$ app</li>
    <li>$ php yii migrate</li>
    <li>$ php yii_test migrate <i>- perform all necessary migrations to the main and test databases</i></li>
	<li>execute instructions from fixForPhp7.2Readme.txt</li>
</ul>

<p>Now you can open site on http://trial.ru and http://admin.trial.ru</p>