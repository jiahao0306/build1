Cake Auth
=========
The purpose of this project is to provide an starting point for all future CakePHP Projects. Currently it just provides Auth Component configuration, inspired by [Andrew Perkin's CakePHP 2.0 Auth Tutorial](http://www.youtube.com/watch?v=zvwQGZ1BxdM), but as time progresses I'll look into adding new features.

Getting started
---------------
1. Clone [CakePHP](https://github.com/cakephp/cakephp "CakePHP") into a 'cakephp' directory below the site's document root.
2. Clone this repo into the site's document root.
3. Run `git submodule init` and `git submodule update` in the site document root to pull in the submodules.
4. Execute the SQL in Config/install.sql.
5. Rename _database.php.default_ to _database.php_, and set-up your database settings.
6. ???
7. Profit!

### Please note
Don't forget to update the _Security.salt_ and _Security.cipherSeed_ values in the Config/core.php file, as these have been left as defaults.
