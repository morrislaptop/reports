Reports
====

Allows you to register SQL commands in your database which can be quickly run by admin users.. For CakePHP 2

Installation
----

Add the repo to your working directory

	git submodule add https://github.com/morrislaptop/reports.git app/Plugin/Reports
	
Add the following to app/Config/bootstrap.php

	CakePlugin::load('Reports');
  

Database
----

From the console run

	app/Console/cake schema create -p Reports