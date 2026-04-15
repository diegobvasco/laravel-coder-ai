ARG PHP_VERSION=8.5
ARG NODE_VERSION=21

FROM node:${NODE_VERSION} AS node-builder

FROM php:${PHP_VERSION}-cli


ARG UID=1000
ARG GID=1000

RUN groupadd -g ${GID} developer \
    && useradd -u ${UID} -g developer -m developer
# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*


RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install gd \
    pdo \
    mbstring \
    exif \
    pcntl \
    bcmath \
    zip \
    intl

# Install PCOV for code coverage
RUN pecl install pcov \
    && docker-php-ext-enable pcov

# tools
RUN apt-get update && apt-get install -y iputils-ping \
    telnet

# Configure PCOV for code coverage
RUN echo "extension=pcov.so" > /usr/local/etc/php/conf.d/docker-php-ext-pcov.ini \
    && echo "pcov.enabled=1" >> /usr/local/etc/php/conf.d/docker-php-ext-pcov.ini \
    && echo "pcov.directory=." >> /usr/local/etc/php/conf.d/docker-php-ext-pcov.ini

COPY php.ini /usr/local/etc/php/conf.d/99-custom.ini


# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY --from=node-builder /usr/local /opt/node

# Adiciona ao PATH
ENV PATH="/opt/node/bin:${PATH}"

RUN npm install -g opencode-ai

USER developer

RUN mkdir -p /home/developer/.local/share/opencode
RUN mkdir -p /home/developer/.local/state/opencode

CMD ["php", "-a"]
