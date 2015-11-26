# README.md
# Ansible Role: mats116.wordpress

An Ansible role that installs WordPress (with Nginx & HHVM) on **Ubuntu 14.04 LTS**

## Requirements

none

## Role Variables

Available variables are listed below, along with default values:

    wp_version: "4.3.1"

    wp_owner: www-data # HHVM
    wp_group: nginx

    wp_nginx_root: /usr/share/nginx
    wp_nginx_accesslog: /var/log/nginx/wordpress-access.log

    wp_mysql_host: localhost
    wp_mysql_database: wordpress
    wp_mysql_user: wordpress
    wp_mysql_password: wordpress

    wp_allow_multisite: "false"

## Dependencies

- [mats116.nginx](https://galaxy.ansible.com/detail#/role/6198) - Installer of Nginx
- [mats116.hhvm](https://galaxy.ansible.com/detail#/role/6197) - Installer of HHVM
- [mats116.mariadb-server](https://galaxy.ansible.com/detail#/role/6199) - Installer of MariaDB Server (MySQL)
 - `when "wp_mysql_host == 'localhost'"`

## Example Playbook

    - hosts: wordpress-server
      roles:
        - role: mats116.wordpress
          wp_mysql_host: localhost

## License

MIT
