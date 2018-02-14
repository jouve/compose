TAG_BASE=jouve/
VERSION=latest

debian-cacher-ng:
	docker build . -t $(TAG_BASE)apt-cacher-ng:ubuntu-$(VERSION) --build-arg BASE_IMG=$(TAG_BASE)apt-cacher-ng:$(VERSION)

