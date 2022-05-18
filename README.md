To create wordpress docker containers, use this command:

docker-compose up -d

To copy database dump to mariaDB docker container root path, use this command:

docker cp wdump.sql <mariaDB-docker-container-name>:/

To import database dump, use this command:

docker exec -i <mariadb-docker-container-name> sh -c 'exec mysql -u root bitnami_wordpress' < ./wdump.sql
