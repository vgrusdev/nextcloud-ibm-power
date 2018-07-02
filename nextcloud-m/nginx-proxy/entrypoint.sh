#!/bin/bash
set -e

cp default.conf uploadsize.conf /etc/nginx/conf.d/

WEBHOST=`host web`

if ! [ $? ]; then
  ADDR=`echo ${WEBHOST} | awk '{print $4}'`
  sed -i '/servers/web/'"${ADDR}"'/' /etc/nginx/conf.d/default.conf
fi


if [ -x ./generate-dhparam.sh ]; then
  ./generate-dhparam.sh
fi

exec "$@"

# nginx -g daemon off
