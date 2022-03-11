FROM php:7.3-fpm
LABEL maintainer="yuldashev.sardor1028@gmail.com"

ARG CURRENT_USERNAME

# Add current suer
RUN useradd -d /home/$CURRENT_USERNAME -m $CURRENT_USERNAME
WORKDIR /var/www/html

# Download script to install PHP extensions and dependencies
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync

RUN DEBIAN_FRONTEND=noninteractive apt-get update -q \
    && DEBIAN_FRONTEND=noninteractive apt-get install -qq -y \
      curl \
      git \
      zip unzip \
      libbz2-dev \
      openssh-client

RUN install-php-extensions \
      bcmath \
      bz2 \
      calendar \
      exif \
      gd \
      intl \
      ldap \
      memcached \
      mysqli \
      opcache \
      pdo_mysql \
      pdo_pgsql \
      pgsql \
      redis \
      soap \
      xsl \
      zip \
      sockets \
      imagick \
      xdebug
# already installed:
#      iconv \
#      mbstring \

# Install Composer.
ENV PATH=$PATH:~/composer2/vendor/bin:~/composer1/vendor/bin \
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=~/composer2 \
  COMPOSER1_HOME=~/composer1
RUN cd /opt \
  # Download installer and check for its integrity.
  && curl -sSL https://getcomposer.org/installer > composer-setup.php \
  && curl -sSL https://composer.github.io/installer.sha384sum > composer-setup.sha384sum \
  && sha384sum --check composer-setup.sha384sum \
  # Install Composer 2 and expose `composer` as a symlink to it.
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer2 --2 \
  && ln -s /usr/local/bin/composer2 /usr/local/bin/composer \
  # Install Composer 1, make it point to a different `$COMPOSER_HOME` directory than Composer 2, install `hirak/prestissimo` plugin.
  && php composer-setup.php --install-dir=/usr/local/bin --filename=.composer1 --1 \
  && printf "#!/bin/sh\nCOMPOSER_HOME=\$COMPOSER1_HOME\nexec /usr/local/bin/.composer1 \$@" > /usr/local/bin/composer1 \
  && chmod 755 /usr/local/bin/composer1 \
  && composer1 global require hirak/prestissimo \
  # Remove installer files.
  && rm /opt/composer-setup.php /opt/composer-setup.sha384sum

# Add alias to cobo
RUN echo '81.95.237.114 cobo' >> /etc/hosts

# Change current user
USER $CURRENT_USERNAME

# Create the SSH directory.
RUN mkdir ~/.ssh/ \
    # Set the required permissions.
    && chmod -R 775 ~/.ssh/ \
    # Create private/public key \
    && ssh-keygen -t rsa -b 4096 -f ~/.ssh/id_rsa -N '' \
    # Create known_hosts \
    # Create SSH config file \
    && touch ~/.ssh/config \
    && echo 'KexAlgorithms diffie-hellman-group1-sha1,diffie-hellman-group-exchange-sha256' >> ~/.ssh/config \
    # Create SSH known_hosts file \
    && touch ~/.ssh/known_hosts \
    # Add cobo key \
#    && echo 'ssh-keyscan -t rsa 81.95.237.114 ~/.ssh/known_hosts... \n' \
#    && ssh-keyscan -t rsa -v 81.95.237.114 >> ~/.ssh/known_hosts \
