
# Dozmia Font-End

## Project Structure

- assets/ - images, fonts and related files
- pages/ - PHP scripts generating content for "pages". See [how it works](#how_it_works)
- lib/ - currently just 3rd party or vendor JS scripts
- src/ - home of the application logic JS scripts
- index.php - renders the initial HTML layout, fetches JS scripts and other resources
- page.php - a simple "controller" that defers to the appropriate script in pages/

## How it works

Chronologically, index.php "bootstraps" the app by creating the minimum HTML, then the scripts under src/ take over. Specifically, dozmia-main.js does the following:

- sets up the global module varialbe "dozmia"
- creates the resource manager ("dozmia.rman")
- creates the player model ("dozmia.player")
- creates the router ("dozmia.MainRouter")
- defines a base view ("dozmia.BaseView")
- creates the router, kicking off the app, once the DOM is ready

Once the router is created, it handles any request for a URL with a hash portion matching one of its routes (Ideally, the # in the URL would not be necessary. I think this just requires a slightly more sophisticated backend set up.) The router relies on the resource manager to provide instances of objects needed to render the page for the current route. The resource manager's purpose is to prevent duplication, both of code and of run-time resources.

# Thanks

Dozmia ~ Thanks for building your front-end with [Papyrus](http://papyrusoft.com/"). Go forth and conquer! ~ Patrick
