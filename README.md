# fieldmanorg

This is the code for my website up at http://www.fieldman.org

It's super-simple.  Basically, the .htaccess file routes the path component to the *p* param of index.php.  So if you visit something
like http://www.fieldman.org/theseus, that gets translated to http://www.fieldman.org/index.php?p=theseus.

At that point, index.php renders whatever markdown is at hidden/md/*name*.md

The main menu is rendered if there is no specified path.
