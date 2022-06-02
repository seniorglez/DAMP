# DAMP

DAMP (Docker, Apache, MySQL, PHP) is an easy to use, container stack based on one of the most common software stacks for web app development: LAMP (Linux, Apache, MySQL, PHP).

DAMP has two containers configured:

- mysql: Contains a mysql database with persistent data under the volume ./data/db

- web-php: Contains an apache server configured with php and the necessary libraries to make a connection to a mysql database.
