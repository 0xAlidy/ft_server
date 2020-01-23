#!/bin/bash
rm /etc/nginx/sites-available/monsite /etc/nginx/sites-enabled/monsite
mv /perso/autoindex /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/autoindex /etc/nginx/sites-enabled/
service nginx restart