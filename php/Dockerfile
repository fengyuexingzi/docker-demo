FROM crosstime1986/php53-fpm

#WORKDIR /wwwroot

#COPY . ./wwwroot

LABEL maintainer="king"

# set timezome
ENV TZ=Asia/Shanghai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install package and PHP Core extensions
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install gd

# Install Composer
#ENV COMPOSER_HOME /root/composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#ENV PATH $COMPOSER_HOME/vendor/bin:$PATH

#WORKDIR /var/www/html

# Write Permission
#RUN usermod -u 1000 www-data
