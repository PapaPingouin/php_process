# pthreads_test


## Debian 7 install pcntl


	apt-get install dpkg-dev php5-dev
	apt-get source php5
	cd php5-*/ext/pcntl
	phpize
	./configure
	make install
	echo "extension=pcntl.so" >> /etc/php5/cli/php.ini
	
