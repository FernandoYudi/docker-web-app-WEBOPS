# Grupo Pudim

## **Integrantes** ##

1. ### Fernando Yudi Kikuchi ###
2. ### Ana Gabriele Kataoka ###

       **Docker  - Laravel - MySQL - Apache2**

[Arquivos Necessários](https://www.notion.so/Arquivos-Necess-rios-28afef169cd64aeeb9128ff8e3d91ff2)

[Comandos Artisan](https://www.notion.so/Comandos-Artisan-abd572f2f94a47d98e97666d6da1069f)

### 🐳 Rodando o Dockerfile

> ***Primeiros Passos***
> 
1. A princípio verifique se você baixou todos os arquivos necessário para rodar o projeto, e criou os diretórios para que o Dockerfile faça leitura.
2. Rodar o comando a seguir irá inicializar o Dockerfile executando todos os comandos contidos no mesmo, seu log deve executar todos os vinte passos sem nenhum erro. 

```bash
sudo docker compose build
```

Indo mais a fundo, o Dockerfile irá instalar todas as dependências necessárias, habilitar suas permissões para leitura e gravação nas pastas do projeto, configurar o apache2 para que exista comunicação entre a máquina virtual e a aplicação, e por fim as portas a serem utilizadas serão expostas.

## TROUBLESHOOTING DOCKER

> Verifica o arquivo de configuração apache dentro do contêiner.
> 

```
 docker exec <container_name> cat /etc/apache2/apache2.conf
```

> Verifica a localização do arquivo de configuração de host do apache dentro do contêiner.
> 

```
docker exec <container_name> apachectl -S
```

Este apresentará uma lista de hosts virtuais e dos respectivos arquivos de configuração. Procure o seu arquivo de configuração de host virtual para se certificar de que está listado e na localização correta.

Se o seu arquivo de configuração do host virtual não estiver listado ou estiver na localização errada, poderá ser necessário atualizar a configuração do Apache ou mover o seu arquivo de configuração para a localização correta.

> Sobe os contêineres sem ficar por cima do terminal
> 

```bash
sudo docker compose up -d
```

> Verificar os contêineres
> 

```bash
sudo docker container ls

-

sudo docker ps
```

> Derruba os contêineres criados
> 

```bash
sudo docker compose down
```

