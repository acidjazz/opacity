### summary

opacity is a small php tool to automatically generate transparent images to accomodate for older browsers not supporting opacity

### usage

```css
.red {
  background: url('/img/opacity/ff0000_50.png');
}
```
or
```css 
.red {
  background: url('/img/opacity/255,0,0_50.png');
}
```

will generate and deliver to the browser a file in /img/opacity/ with an rgb value of 255,0,0 and an opacity level of 50%


### installation

1. place opacity.php in your web source folder 
2. activate mod_rewrite for apache if you don't already have it turned on
` a2enmod rewrite `
3. place the .htaccess file in the root of your source folder or add this to your own:

```
RewriteEngine On
RewriteRule ^img\/opacity\/(.*)\.png$ /opacity.php?params=$1 [L]
```

4. create the folder img/opacity and make it writable to apache
` chmod 777 img/opacity `


### demo
can be found [here](http://opacity.256.li/)

 

