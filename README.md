# Usando Docker para subir ambiente LAMP.

# Projetos arquivos.

``` text  
├── apache
│   ├── apache2.conf.default
│   ├── config_ssh
│   ├── Dockerfile
│   ├── sites-available
│   │   └── 000-default.conf, 001-cake.conf
│   └── sites-enabled
│       └── 000-default.conf -> ../sites-available/000-default.conf, 001-cake.conf
├── docker-compose.yml
├── composer.phar
├── mysql
│   ├── datadir
|- Readm.md
```

# Preparando ambiente 

## Instalação do Docker 

## Acessa o site oficial e siga o procedimento.

* Install [Docker](https://docs.docker.com/get-docker/)

Após instalar docker e docker-compose


Baixe o projeto bitbucket 
 
* Clone [Bitbucket](https://MarcioLeinfelder@bitbucket.org/marcioleinfelder/lampdocker.git)

``` bash 
git clone https://MarcioLeinfelder@bitbucket.org/marcioleinfelder/lampdocker.git
``` 

Crie a pasta do projeto _/opt/sites_ na raiz do seu sistema.

E baixe o aquivos do git para pasta do seus projetos habituais de preferencia _projetos/docker/lampdocker_
ao entrar na pasta de sua preferencia verifique se serviço do docker esta rodando na sua maquina.
como uso linux.

``` bash 
systemctl status docker.services
```
Se estiver com ambiente ok 
Basta rodar na pasta raiz o comando docker-compose
```bash 
docker-compose up -d 
```

Ele vai inciar a criação do container e baixar a imagem do ubuntu.

Apos subir o container, se tudo deu certo!.
Execute 

``` bash 
docker container ls
```

ele vai listar todos containers criados.

verifiquei que porta usada para acessar seu apache2 do docker _porta_ _8080_ entao pode acessar [localhost:8080](http://localhost:8080) ou IP local porta 8080.

# cake4
