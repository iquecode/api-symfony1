# Server PHP
sudo docker run -itv $(pwd):/app -w /app -p 8080:8080 php -S 0.0.0.0:8080 -t public

# Comandos composer
sudo docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) composer {comando}


# Criar Alias

alias php='sudo docker run -itv $(pwd):/app -w /app -p 8080:8080 php'

alias composer='sudo docker run --rm -itv $(pwd):/app -w /app -u $(id -u):$(id -g) composer'



#
php -S 0.0.0.0:8080


#
https://symfony.com/



https://symfony.com/doc/current/setup.html
API
composer create-project symfony/skeleton:"6.1.*" my_project_directory

composer require annotation

***

https://www.jetbrains.com/help/phpstorm/http-client-in-product-code-editor.html#creating-http-request-files

