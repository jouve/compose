FROM postgres:10.2-alpine

RUN apk add --no-cache python py2-pip make gcc musl-dev python-dev linux-headers \
	&& pip install patroni[etcd] \
	&& apk del --no-cache make gcc musl-dev python-dev linux-headers

