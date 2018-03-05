## ThemeMountain Documentation Generator

This uses [Jigsaw](http://jigsaw.tighten.co) to generate a static site for our documentation.

### System Requirements

1. **PHP**

    Jigsaw needs PHP7 installed on your machine. If you're on Windows, [read this](http://kizu514.com/blog/install-php7-and-composer-on-windows-10/).

2. **Node.js, NPM, and Git**

    For [Elixir](https://laravel.com/docs/5.2/elixir) to work (compiling SASS, BrowserSync) you need to have [Node.js and NPM](https://nodejs.org/en/download/) installed on your system. Additionally, for deploying to GitHub, you'll also need [Git](https://www.atlassian.com/git/tutorials/install-git#windows) installed.

### Developing

1. **Install Jigsaw**

    First, make sure `~/.composer/vendor/bin` is in your `$PATH`.

    Then, run this in your terminal:

    ```sh
    composer global require tightenco/jigsaw
    ```

    This will install Jigsaw globally, so you don't need to worry about installing it locally in each Jigsaw project folder that you create.

2. **Clone this repo**

    Use your preferred Git GUI to clone this repo, or run this in your terminal:

    ```sh
    git clone https://github.com/ThemeMountain/docs myFolder
    ```

    Where `myFolder` is the custom folder name in which to clone the repo. This folder will be created relative to the path at which you execute the `git clone` command in your terminal. If you don't specify a folder name after the repo URL, a `docs` folder name will be used (the repo name).

3. **Install JS dependencies**

    ```sh
    npm install
    ```

    Windows note: you might run into an issue with NPM not being able to install `node-sass`. This can happen because `node-sass` requires `node-gyp`, which in turn requires Python. In this case, use Option 1 from [here](https://github.com/nodejs/node-gyp#on-windows).

4. **Install PHP dependencies**

    ```sh
    composer install
    ```

5. **Run the build**

    ```sh
    jigsaw build
    ```

Done!

You can view the static site at `/build_local`, or you can run the Jigsaw server:

```sh
$ jigsaw serve
```

Alternatively, you can use `gulp watch` to have Laravel Elixir run BrowserSync, so that you don't have to always build before previewing.
