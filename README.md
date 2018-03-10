## ThemeMountain Documentation

This uses [Jigsaw](http://jigsaw.tighten.co) to generate a static site for our documentation.

### System Requirements

1. **PHP + Composer**

    Jigsaw needs PHP7 installed on your machine. If you're on Windows, [read this](http://kizu514.com/blog/install-php7-and-composer-on-windows-10/).

    You also need to have [Composer](https://getcomposer.org/) installed.

2. **Node.js, NPM, and Git**

    For [Laravel Mix]([https://laravel.com/docs/5.2/elixir](https://laravel.com/docs/5.6/mix)) to work (compiling SASS, BrowserSync, etc.), you need to have [Node.js and NPM](https://nodejs.org/en/download/) installed on your system. Additionally, for deploying to GitHub, you'll also need [Git](https://www.atlassian.com/git/tutorials/install-git#windows) installed.

### Getting Started

1. **Clone this repo**

    Use your preferred Git GUI to clone this repo, or run this in your terminal:

    ```sh
    git clone https://github.com/ThemeMountain/docs myFolder
    ```

    Where `myFolder` is the custom folder name in which to clone the repo. This folder will be created relative to the path at which you execute the `git clone` command in your terminal. If you don't specify a folder name after the repo URL, a `docs` folder name will be used (the repo name).

2. **Install JS dependencies**

    ```sh
    npm install
    ```

    Windows note: you might run into an issue with NPM not being able to install `node-sass`. This can happen because `node-sass` requires `node-gyp`, which in turn requires Python. In this case, use Option 1 from [here](https://github.com/nodejs/node-gyp#on-windows).

3. **Install PHP dependencies**

    ```sh
    composer install
    ```

    If you get an error about `composer` not being recognized as a command, make sure `~/.composer/vendor/bin` is in your `$PATH`.

5. **Building and Previewing**

    To build the site when developing locally, run:

    ```sh
    npm run dev
    ```

    To build the production version:

    ```sh
    npm run prod
    ```

    To have Webpack watch for file changes:

    ```sh
    npm run watch
    ```

    This will also run BrowserSync and will open the site in a new tab.

### Writing Documentation

Each documentation lives in its own folder, inside the `source` folder. All folders in `source` that do not start with `_` will be parsed by Jigsaw.

TBD.
