# PHP on Docker

This repo is used for testing some functionalities of PHP in a docker environment.

- [x] redirect all URIs to `index.php`
- [x] read/write files in mounted volumes
    - [x] mount `./` in `/app/public` with read-access
    - [x] mount volume `test` in `/app/test/` with read/write-access
- [x] enable FTP uploads to shared volume `data`. **CAUTION** using FTP without SSL, Traefik is bypassed. For a secure solution, use SFTP via Traefik.