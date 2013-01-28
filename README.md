# booZii #

A responsive bootstrap by borowiakziehe KG dev team.

Please note that booZii is still under development.

The booZii responsive bootstrap is inspired by the 1140 grid system of Andy Taylor (http://cssgrid.net/).
We also include the normalize.css http://necolas.github.com/normalize.css/

## Documentation ###

### Basics ###
The current version of booZii is a 12 unit based grid system with some css helpers. Below you will find some examples. It`s loosely coupled as posible

### Quick Start ###
Include the bootstrap to your document head
```html
<link rel="stylesheet" type="text/css" href="booztrap.css" media="all">
```
Now booZii is ready for usage. Create your first 3 row grid
```html
<div class="grid">
  <div class="u_4">
    <p>Some Text. First column</p>
  </div>
  <div class="u_4">
    <p>Some other Text</p>
  </div>
  <div class="u_4">
    <p>And some More. Last column</p>
  </div>
</div>
```

### Themes ###
A theme is the right place for your own code. You can switch between themes by changing the path into the booztrap.css file. By default booZii comes with the moonwalk theme. If you like to create your own theme just cpy the moonwalk.


As you can see all you have to do is generate a wrapper width the class grid and add 3 child container width the class u_4.
u_ stands for unit. There are 12 class starting from u_1 up to u_12

## Browsersupport ##
At the moment we supporting the follwing browsers:

* Internet Explorer 8 >
* Chrome
* Firefox
* Opera

### Fastfloat Core ###

#### Background Heplers ####

You often need to place a background to center, to top and on. The background helpers will help you to write less code and bring you more flexibity. bg helpers all starts with the bg- prefix.

Repeat helpers
.bg-x   = Repeat the background on x axe = background-repeat: repeat-x
.bg-y   = Repeat the background on x axe = background-repeat: repeat-y

Center helpers
.bg-c   = Set the background to center = background-position: 50% 50%
.bg-c-t = Set the background to vertical center and y top = background-position: 50% 0%
.bg-c-l = Set the background to vertical left and y center = background-position: 0% 50%
.bg-c-r = Set the background to vertical right and y center = background-position: 100% 50%
.bg-c-b = Set the background to vertical center and y bottom = background-position: 50% 100%