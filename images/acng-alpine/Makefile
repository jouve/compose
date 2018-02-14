TAG_BASE=jouve/
VERSION=latest

alpine-cacher-ng:
	docker build . -t $(TAG_BASE)apt-cacher-ng:alpine-$(VERSION) --build-arg BASE_IMG=$(TAG_BASE)apt-cacher-ng:$(VERSION)

