TAG_BASE=jouve/
VERSION=latest

gentoo-cacher-ng:
	docker build . -t $(TAG_BASE)apt-cacher-ng:gentoo-$(VERSION) --build-arg BASE_IMG=$(TAG_BASE)apt-cacher-ng:$(VERSION)

