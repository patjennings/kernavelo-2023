#!/bin/bash
rsync -arv -e ssh --progress /Users/patjennings/Sites/localhost/kernavelo.org/wp-content/themes/kernavelo2023/* debian@54.36.98.112:/var/www/kernavelo.org/wp-content/themes/kernavelo2023 --exclude node_modules --exclude .git
