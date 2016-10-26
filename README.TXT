Prof. Ivan R. Chenoweth 2011
This distribution LAMP and the web application is 100% practical and training purposes:
Technological University of Hermosillo 2011
http://www.uthermosillo.edu.mx

Logging system "DidacticSimpleLoginSystemMasterDetail"
includes:
  - User CRUD
  - Product CRUD
  - Customer CRUD
  - Provider CRUD
  - Simple ACL: Users (Admin, RegistredUser, Guest)
  - Master-Detail Sale
  - Simple system logging.
  - Does not contain any graphic design, and no data validation.
  - Does not contain Translations
  - Unit testing: "unitTestModeloUsuarios.php" using phpunit Framework.
  - Technologies used: Only : PHP, MYSQL, HTML, UML
  
All classes have been generated from ArgoUML class diagrams to be exported as skeleton and synchronized with the code.
It means exporting the class code, you can continue to develop within the methods.
That is, using direct software engineering, where it is bearing ArgoUML directives respecting policies (begin-end) in the methods.

INSTALLATION / CONFIGURATION:
  To install you just need:
1 .- Place scrpits PHP "SimpleLoginSystemMasterDetail" Madison on the HTTP server
2 .- Create a database "loginsystem" in mysql.
3 .- Run the file "loginsystem.sql" in the SQL server.
4 .- Login to the system by the browser
5 .- To enter the default users are:
Administrator Role:
    User: ivan
    password: 123
Role of registered users:
	User: dany
	password: 321
	

THINGS TO DO FOR STUDENTS:
- Messages in the view to perform the action.
- Validation of request and models.
- Add Graphic Design CSS.
- Automatic Registration of users with capcha via email.
- Attach helpers:
	- Date-time calendar widget
	- Color picker widgets
	- Popups register CRUD picker
	- Append some AJAX Javascript Frameworks
- Starting a lite framework based in the MVC

This distribution Apache-PHP-MYSQL not installed just copied to the root
Steps for Setting Up and Starting:
1 .- Copy xampplite to the root of the logical drive eg C: \
For proper operation and phpDocumentator phpunit:
2 .- Include in the PATH environment variable to the \ xampplite \ php;

Set includes several portable tools:
CONTENTS:
1 .- xampplite for windows version 1.7.3 (described to the bottom of this document): +
- Xdebug to be operated from eclipse php
- PHPUnit
- PHPDocumentator

2.- Tools used in development:
- IDE Eclipse PDT php 
- FTPserver: FileZillaFTP (FTP Server)
- FileManager total commander (FTP Client, compressor/decompressor ... etc.)
- X-RapidSVN (SVN Client)
- ArgoUML CASE tool.

Preconfigured users and passwords in myslq:
user:root
password:123456

---------------------------------
Based on the distribution package xampplite:
www.apachefriends.org
###### Apache Friends XAMPP Lite (Basis Package) version 1.7.3 ######
  + Apache 2.2.14 (IPV6 enabled)
  + MySQL 5.1.41 (Community Server) with PBXT engine 1.0.09-rc
  + PHP 5.3.1 (PEAR)
  + Miniperl 5.10.1
  + XAMPP Control Version 2.5.8 (ApacheFriends Edition)
  + XAMPP CLI Bundle 1.6
  + XAMPP Port Check 1.5
  + XAMPP Security 1.1
  + SQLite 2.8.17
  + SQLite 3.6.20
  + OpenSSL 0.9.8l
  + phpMyAdmin 3.2.4
  + msmtp 1.4.19 (a sendmail compatible SMTP client)
  + Webalizer 2.21-02 (with GeoIP lite)
  + Ming 0.4.3 for PHP
  + PDF with pdflib lite v7.0.4p4 for PHP
----------------------------------