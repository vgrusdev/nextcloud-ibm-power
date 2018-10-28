#FROM nginx:1.13
FROM nginx

# Install wget and install/updates certificates
RUN apt-get update \
 && apt-get install -y -q --no-install-recommends \
    ca-certificates \
#    dnsutils \
#    apt-utils \
    busybox \
 && apt-get clean \
 && rm -r /var/lib/apt/lists/* \
 && mkdir -p /etc/nginx/dhparam \
 && mkdir /app

COPY ./* /app/

WORKDIR /app/

ENTRYPOINT ["/app/entrypoint.sh"]
CMD ["nginx", "-g", "daemon off;"]

