```
^ caller
$/ = internal linke
#/ = outside linke
ꓘ/ = kernal shared
** class call
"" alt call
[] extension
```

```
^addImg [png] main "OBSERVING YOU" *logo* $/logos/new
```
prints as 
`<img class="logo" src="http://localhost:9808/f/SKYLINE/imgs/logos/new/main.png" alt="SKYLINE OBSERVING ALL">

```
^addImg [png] main
```
prints as
`<img src="http://localhost:9808/f/SKYLINE/imgs/main.png">


```
^addImg [png] main #/www.com
```
prints as
`<img src="http://www.com/main.png">

```
^incl [css] ꓘ/ fonts
```
prints as
`<link rel="stylesheet" type="text/css" href="http://localhost:9808/k/incl/css/fonts.css">

```
^inclFile [css] style $.asSys
```
prints as
`<link rel="stylesheet" type="text/css" href="http://localhost:9808/a/SKYLINE/asSys/style.css">

  
 ```
  OLDER VERSIONS:
  

[*]f.image: main.png loc=.$/logos alt=".$ OBSERVING ALL" id=logo[*]

prints as <img class="logo" src="http://localhost:9808/f/images/SKYLINE/logos/main.png" alt="SKYLINE OBSERVING ALL">

  

[[addImg(main) .$/logos]]
[*]f.image: main.png loc=.$/logos[*]
prints as <img src="http://localhost:9808/f/SKYLINE/images/logos/main.png">

  

[*]f.link: house.docx loc=.$[*]
prints as <a href="http://localhost:9808/f/SKYLINE/files/house.docx">


[*]a.css: style.css loc=.$/asSys[*]
prints as <link rel="stylesheet" type="text/css" href="http://localhost:9808/a/SKYLINE/asSys/style.css">


[*]k.css: fonts.css[*]
prints as <link rel="stylesheet" type="text/css" href="http://localhost:9808/k/incl/css/fonts.css">
 ```
 