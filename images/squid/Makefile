DEVPI_SERVER_VERSION=4.4.0
DEVPI_WEB_VERSION=3.2.2
IMAGE_VERSION=0.1

build:
	docker build --build-arg DEVPI_SERVER_VERSION=$(DEVPI_SERVER_VERSION) --build-arg DEVPI_WEB_VERSION=$(DEVPI_WEB_VERSION) -t jouve/devpi:$(DEVPI_SERVER_VERSION)-$(IMAGE_VERSION) .

latest: build
	docker tag jouve/devpi:$(PGADMIN_VERSION)-$(IMAGE_VERSION) jouve/devpi:latest

push: build
	docker push jouve/devpi:$(PGADMIN_VERSION)-$(IMAGE_VERSION)

push-latest: latest
	docker push jouve/devpi:latest

