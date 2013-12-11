#!/bin/sh

# Setup database for testing via Travis-CI

mysql -e "CREATE DATABASE berkuliah_test;"
mysql -u root berkuliah_test < protected/data/berkuliah.sql
mysql -u root berkuliah_test < protected/data/bk_note_alter.sql