#!/bin/sh
SITE_PATH='/data/httpd/www/test/'
USER='www'
USERGROUP='www'
cd $SITE_PATH
git reset --hard origin/master
git clean -f
git pull
git checkout master
chown -R $USER:$USERGROUP $SITE_PATH
exit 0
