# SingleProductTemplate

Starter theme based on Foundation 5. It's a starting point for single product sites. As time goes on, we'll separate it out into subtemplates to make development more effecient.

### Requirements
- nodejs
- sass
- grunt
- bower

### Quick Start
```
$ git clone https://github.com/unkubed/SingleProductTemplate.git
$ mv SingleProductTemplate yourThemeName
$ cd yourThemeName
$ npm install
```

The above command will install bower and build via npm scripts

### Development (recompile JS and CSS when you update a file)
```
$ npm run watch
```

### Build Assets
```
$ npm run build
```
### Compress Files for Deployment
```
$ npm run package
```

### Remove dist folder
```
$ npm run clean
```

### How to Structure Styles
- assets/scss/foundation.scss: Imports for Foundation components and your custom styles.
- assets/scss/config/_settings.scss: Original Foundation 5 base settings
- assets/scss/config/_custom-settings.scss: Copy the settings you will modify to this file. Make it your own
- assets/scss/site/*.scss: Unleash your creativity. Create the files you need (and remember to make import statements for all your files in assets/scss/foundation.scss)

### How to structure your scripts
- assets/javascript/custom: This is the folder where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated one single .js file. (This is good for site speed and performance)

### Styles and scripts generated by the build
- assets/stylesheets/foundation.css: All Sass files are minified and compiled to this file
- assets/stylesheets/foundation.css.map: CSS source maps
- assets/javascript/vendor: Vendor scripts are copied from assets/javascript/components/ to this directory.

### IMPORTANT - BEFORE DEPLOYMENT
By default, this theme loads the css and js for all Foundation's components. The majority of these will not be used. Become familiar with all components.

http://foundation.zurb.com/docs/components/kitchen_sink.html

If you don't use the component, comment it out.

#### /assets/scss/foundation.scss
Comment out the components the site doesn't use. This will significantly decrease load time. If you don't use fontawesome, be sure to comment it out.

#### /Gruntfile.js

Comment out the scripts the site doesn't use. The will generally start around line 100.  his will significantly decrease load time.
