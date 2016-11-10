# Bootstrap Search Block

Bootstrap like search block for Drupal 8 - to replace the default search block.

To use it, just insert the block **Bootstrap like search block** in your site.

You have to import the bootstrap framework. You can just import the .js and .css from bootstrap in your theme librairies like : 

```
bootstrap:
  css:
    theme:
      //maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css: { type: external, minified: true }
      //maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css: { type: external, minified: true }
  js:
    //maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js: { type: external, minified: true }

```

Don't forget to include your bootstrap libraires entry in the pages of your drupal site.
