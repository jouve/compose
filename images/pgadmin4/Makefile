PGADMIN_VERSION=2.1
IMAGE_VERSION=0.1

build:
	docker build --build-arg PGADMIN_VERSION=$(PGADMIN_VERSION) -t jouve/pgadmin4:$(PGADMIN_VERSION)-$(IMAGE_VERSION) .

latest: build
	docker tag jouve/pgadmin4:$(PGADMIN_VERSION)-$(IMAGE_VERSION) jouve/pgadmin4:latest

push: build
	docker push jouve/pgadmin4:$(PGADMIN_VERSION)-$(IMAGE_VERSION)

push-latest: latest
	docker push jouve/pgadmin4:latest

