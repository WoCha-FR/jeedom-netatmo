#!/bin/bash

set -x  # make sure each command is printed in the terminal
echo "Pre installation de l'installation/mise à jour des dépendances mqttNetatmo"

PROGRESS_FILE=/tmp/jeedom_install_in_progress_mqttNetatmo
echo 50 > ${PROGRESS_FILE}

BASEDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd ${BASEDIR}
source ../core/config/mqttNetatmo.config.ini &> /dev/null
echo "Version requise : ${mqttNetatmoRequire}"

npm i mqtt4netatmo@1.0.3 --no-save

echo 90 > ${PROGRESS_FILE}
chown www-data:www-data -R ${BASEDIR}/node_modules
