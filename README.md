# CATOOLIN v.1.0.3 :heart_eyes_cat:  
## What's New???
* Fixed bug in Connect class <br>
```PHP
# Connecting JQuery
 case "jquery":
	echo '<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>';
  	echo "\n";
	break;
```
* Added [MetroUI](https://metroui.org.ua/) <br>
# This MicroFramework was actually created by **TEAM OF CATS**:
* [Mr CaT](https://github.com/mrcat323)
* [Maxim Lutsyuk](https://github.com/Lutsyuk-M)
* [Ostap Programmer](https://github.com/Ostap34JS)

**Special thanks to [Andrey](https://github.com/ctl) for creating [Console Interface for CATOOLIN](https://github.com/ctl/catoo)**
## Get started:
`git clone https://github.com/eazy-english/catoolin`
### Take a look to [index.php file](https://github.com/eazy-english/catoolin/blob/master/index.php)
```PHP
# Including connect to DB
$db = new Database("dbhost", "mydbuser", "mypass", "mydbname", "dbcharset");
```
#### First set up databases, *YourHost*, *Username*, *Password*, *Database name* and *charset* we recommend utf8

## How to work with *Connect* class?
**That's pretty simple, there are *JS Libraries* and *CSS Libraries*. With this class you can easily connect libraries without googling it**
*Here we connect JS Library **"JQuery"**.*
```PHP
$connect->connect("jquery");
```
*But why with* `$connect` *var? Check out [index.php file](https://github.com/eazy-english/catoolin/blob/master/index.php) there is such string:*
```PHP
$connect = Fabric::get("Connect");
```
**It means that we successfully did create Object of Connect class, and that we can work with, with** `$connect` **var**
With *connect* method you can only connect **JS Libraries**, and with *link* you can connect **CSS Libraries**. 
*Example*:
```PHP
$connect->connect("vuejs"); # This will connect Vue JS, the JS Library
$connect->link("bootstrap"); # This will connect Bootstrap, CSS Library
```
*Here are JS Libraries*:
* `vuejs` -> Vue JS
* `jquery` -> JQuery
* `videojs` -> Video JS
* `bootstrap` -> Bootstrap Library
* `mui` -> Material UI
* `lessjs` -> LESS JS
* `metroui` -> Metro UI

*And here are CSS Libraries*:
* `bootstrap` -> Bootstrap Library
* `videojs` -> Video JS
* `mui` -> Material UI
* `metroui` -> Metro UI

## APIS?
**With *CATOOLIN* you can also work with such APIs as *Pinterest*, *Youtube Video Parser*, but we try to add *APIs* of another services**
*But you without problems can use our parsers to work with **APIs**.*

### EXPECT UPDATES! GOOD LUCK WITH *CATOOLIN*
