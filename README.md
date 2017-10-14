## Credit
Build on top of Brett Jankord's living styleguide (https://github.com/bjankord/Style-Guide-Boilerplate)

## Getting Started With Style Guide Boilerplate

### Set up a directory on your site for the style guide
I recommend creating a directory named `style-guide` in your site's root directory. I think it would be awesome if I could go to `anysite.com/style-guide/` and check out that site's style guide.

### Upload the Style Guide Boilerplate files
**Style Guide Boilerplate** is currently PHP based so you will need a server that supports PHP. Just upload the files from the GitHub repo to your newly created directory and your almost done.

### Hook up your own CSS into the style guide
In the `<head>` of **Style Guide Boilerplate** are custom styles for the boilerplate itself. These have all been prefixed with sg- so they hopefully shouldn't cause any conflicts with your website's own styles.

Below the custom styles for the boilerplate, you will add in your own custom stylesheet(s) which you use on your live site.

    <!-- Style Guide Boilerplate Styles -->
    <link rel="stylesheet" href="css/sg-style.css">

    <!-- Replace below stylesheet with your own stylesheet -->
    <link rel="stylesheet" href="css/style.css">


### Review your live site CSS
You should be able to go to `yoursite.com/style-guide/` and see how your live site's CSS affects base elements.
The last step is creating your sites custom patterns/modules.

### Create custom patterns
To create custom patterns like buttons, breadcrumbs, alert messages, etc., create a new .html file and add your HTML markup into the file.

Save the file as `pattern-name.html` into the `markup/patterns` directory inside of your `style-guide` directory.

You should now be able to see the new patterns at `yoursite.com/style-guide/`

### Create personalized documentation
You can use markdown or html to create personalized documentation for your examples. Create a new .md or .html file and name it whatever your markup snippet file is named.

Save the file as `markup-name.md` or `markup-name.html` into the `doc/base` or `doc/patterns` directory inside of your `style-guide` directory.

For example, if you want to create doc for `markup/patterns/breadcrumbs.html`, create a file called `breadcrumbs.md` or `breadcrumbs.html` and save it into `doc/patterns`.

You should now be able to see the new doc at `yoursite.com/style-guide/`

## Running the app
You can the application with PHP's built in web server. Simply run the following command:

`php -S localhost:8000`

Now, browse to [http://localhost:8000](http://localhost:8000) to see the website.

## Generating static HTML style guide
You can generate a static index.html version of style guide boilerplate by running the following command:

`php index.php > index.html`

## Additional Resources
[Styleguides.io](http://styleguides.io)
