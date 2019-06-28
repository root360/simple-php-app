#!/bin/bash

# author    : Steffen Drya
# copyright : Copyright 2016, root360
# version   : 0.0.1
# maintainer: Steffen Drya
# email     : support@root360.de

# install CRON if role "backend" is installed
#if [[ "${ROLE}" = "backend" ]]
#then
    echo "0 */5 * * * php -f cron.php" >> sc2-crontab
    crontab sc2-crontab
    rm sc2-crontab
#fi

