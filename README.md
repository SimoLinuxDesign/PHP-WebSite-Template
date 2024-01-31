# __PHP-WebSite-Template__

This is a project that I created for the web developers of a new PHP project to immediately have a ready layout and with a very precise and structured logic in order to optimize time and adapt the code to their needs.

## INSTALLATION

To install this project, download all the contents as a zip file or open the terminal, cange directory to the desired folder with:

```bash
cd /path/where/to/save
```

and then copy type the command:

```git
git clone https://github.com/SimoLinuxDesign/PHP-WebSite-Template.git
```

If you followed the git installation procedure, everything is already working, otherwise now you have to unzip all the contents of the zip file into the selected folder.

Now we can proceed with the configuration.

## 

## CONFIGURATION

The configuration consists of the explanation of the different files and the general functioning of the template. I have divided this configuration into different sections so as to be clearer and easier to consult.

-------

##### AUTO

In this section there are all the files that will be used at the top of the page and will be loaded and automatically included throughout the site. At the moment



##### - dbconfig.php:

In this file you can configure all the database informations like:

- Database Hosting

- Username

- Password

- Database Name

Also there is the check connection commented, i insered that code only to test if you connection with the database is done or if there is some problem.



##### - init.php:

In this file there is already included the "**main.php**" file situated in the "__functions__" folder. That is  a __really important__ file as contains all the  funcions that i made.

I declared 2 variables:

- \$rootDir

- \$urlDir

You have to modify you fully path in the "rootDir" and the url of your index page "urlDir" in order to be able to insert the correct link and path universally for all kind of server and hositing.

Also there are other 2 variable:

- \$titleSite

- \$logoInfo

###### _TitleSite_

The title on the site is dynamically divided into 2 parts:

The first is the name of the website, for example:

- "CarsMania" (_This is the variables $titleSite_);

The 2nd is the page we are looking for on the site, for example:

- "About-Us"  (_This is a dynamic script that takes the name of the page we are currently looking at_);

So in the end the title will be: "CarsMania | Home" or "CarsMania | About-Us";

###### _LogoInfo_

Logo information is a function declared in the __main.php__ file. This logo can either be a span with some text, or it can be an "img" tag.

Basically it's a function that takes at least two attributes and one optional extra:

`$logo info = checkLogo(false, "./path/of/the/logo/logo.png", "This is an example of alt img")`;

The first attribute is a boolean value that defines whether the html should be a _<a>_ th text, or an \<img> tag.

___If boolean is true:___

1. _Booolean_

2. _Name span Logo_

***If boolean is false:***

1. *Booolean*

2. _Src Image Url_

3. *Alt description of image*

There is a class that will select the container to simplify the selection of the elements in question: 

__True__:

- `<a class="logo-cont">`

**False**:

- `<a class="logo-cont"><img class="logo-image">`



------



##### CSS & VARIABLES

Il css è un parte fondamentale di una pagina internet per una buona visualizzazione, per tanto vale la pena tenere organizzati e sistemati i nostri file css. Per tanto ho diviso i css  in base alle funzioni:

- __animations.css__: Tutti le animazioni che verranno dichiarate.

- __fonts.css__: I font predisposti in locale.

- __variables.css__: Qui vengono dichiarate tutte le variabili, per poi richiamarle in modo più chiaro.

- __style.css__: Questa è la pagina dove andremo a  mettere solo gli stili del template: header, nav, footer, e impostazioni generali.

- __Css-Pages:__ There are all the pages that will be loaded dinamicaly

Here I will only explain the interesting CSS sheets as the other sheets have a very normal use.



##### - __variables.css__:

> This file is used to declare your variables for use on your stylesheet. I created this sheet to make the code more understandable and above all cleaner and tidier.

> I also created a color brightness management system for 3 main colors used in the template. 

> Based on the color chosen in the variable "__--pri__", "__--sec__" and "__--thi__", 20 degrees of brightness will be automatically created divided into variables named "__--priCol__" and with a number based on the brightness desired which varies from __1 to 20__ therefore: `--priCol3` or `--priCol15`. 



> The color is written in the "hsl" format, so what we are going to recall is the h (hue) parameter of the color. I also created some demo variables so I could test the color to select and have a preview of the color via VScode. Once chosen, just change the variable with the h value of the demo variable so as to obtain 20 shades on that color.. ex:
> 
> ```css
> /*On the demo variable we can check the color with the color picker of VScode*/
> --demo1:hsl(98, 100%, 50%); /*The first number is the color that we need*/
> 
> --pri:98; /*This is the real variable used for the colors*/
> 
> --priCol20:hsl(var(--pri), 100%, 100%); 
> /*from --priCol20 to --priCol1*/
> --priCol1:hsl(var(--pri), 100%, 100%);
> ```



##### - **animations.css**:

> As usual, I prefer to always keep my code clean and therefore, I insert the @keyframe animations separate from the code, so as to only make the calls in the stylesheets involved, keeping my code much more readable.

 

##### - **fonts.css**:

> I declared a set of fonts that I usually use. I prefer to download them because I don't like the idea of having to have problems if the server doesn't work, and in any case, having local fonts makes the page much more compatible with WordPress.



##### - **style.css**:

> This is the classic style.css file found on almost every website. But in this template it has a slightly different function. In fact, I use this __only to stylize the parts of the template__ (header, footer) or in any case to make __global changes__, the same for all the web pages of the site. As specific styles will be dynamically loaded based on the page being viewed.



##### - **css-pages**:

> This is one of the fundamental parts of the template. Here __must__ insert all the style files, for __each page__ that is created, and with the __same name__ as the page created in the __main pages folder__.
> 
> It is very important to remember that if a class, id, or anything else is created __inside one of the files present__ in this folder, it is __only available for the current page__ being viewed. For example, if you declare the .test class in home.css, the same class will __not be available__ in the about.css file.



---



##### FUNCTIONS AND JS

Both in the Functions and JS folder there are "main" files where the php (in the functions folder) and js (in the js folder) functions are declared. 



##### - **main.php**:

> The main.php file is loaded directly into the init.php file so as to make all functions available right from the start. 



##### - **main.js**:

> The main.js file is loaded in the head of the page so as to make the functions available throughout the body, but the function calls are made in the **js-script-footer.php** file.



##### - **js-script-footer.php**:

> The js-script-footer.php file is located in the root. It is declared because all calls are declared inside that would typically be declared below the footer. 
> 
> I preferred to create this file so as to divide the script code from the footer and make it simpler and cleaner to manage.



---



##### PAGES & TEMPLATE

As I have already written in a few lines, I have divided the static code from the dynamic one, and I have also divided the static parts of the site such as "header and footer" from the variable ones such as the content of the different pages such as "home", "about", etc.. 

This obviously means that if we would like to add the same content for all pages, we will create the additional component inside the "template" folder, while if we would like a new page, __it must be created in the "pages" folder__.



__There are a couple of important points to remember:__

- Dynamic Page

- Dynamic Titles

Since this site is structured on dynamic pages, both pages and titles are loaded dynamically. Therefore the global __variable $_GET__ comes to our rescue.

Both the title and the page are in fact redirected thanks to the variables passed on the url: \$page and $title.

> To create a new menu on the page just enter: 
> 
> `<li class="item-main"><a href="?page=newPage&title=newTitle" class="link-main">Home</a></li>`



Where there is <mark>newPage</mark> replace with the __name of the page__ and where there is <mark>newTitle</mark> repleace with the __name of the title__;

P.S. The name __must be the same__ as the **name** of the file created in the **pages folder**, and the css file **must be** created in the "**<u>/css/css-pages</u>**" folder with the same name but with a different extension ex:

> <mark>/css/css-pages -> test.css </mark>
> 
> <mark>/pages -> test.php</mark>



---



##### INDEX

The index file in the site root is the most important file on the entire page. This is where all the pages that make up our website are called dynamically and statically.

Here the "\$page"" variable is defined with a check on the "$_GET" if the requested page does not exist there is a redirect on the 404 not found page and if the variable is not declared the "home" page is redirected.



---



## CONCLUSION

Obviously this template is constantly being updated and I will add more and more features in order to make it a mini-framework. 

If anyone wants to participate they can write to me directly at:

[SimoLinuxDesign@gmail.com](mailto:SimoLinuxDesign@gmail.com)

There are many methods on how to participate in this project, but the simplest one is to always report errors to the same email. Thank you for your precious help.



---



## REPORTED BUGS

Not any bug at the moment. I wil update the bugs log.
