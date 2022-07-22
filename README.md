
* Necessario:

Apache: VERSÃO
2.4.53 
(Win64)  
OpenSSL: VERSÃO
1.1.1n 
PHP: VERSÃO 
8.1.4 Server at localhost Port 80
XAMPP: VERSÃO
3.3.0

* Passo á passo para  executar o exercicio:

1. Instale o ambiente de desenvolvimento PHP Xampp: https://www.apachefriends.org/pt_br/index.html.

2. Instale o editor de código Visual Studio Code: https://code.visualstudio.com/download

3. Após instalar o xampp aparecerá uma tela, start Apache e MySql clicando nos botões ao lado de seus respectivos nomes.

4. Para visualisar a url da pagina digite localhost/ no browser, em seguida deve digitar o nome da pasta que está o arquivo desejado.

5. Para que o xampp reconheça o arquivo, o diretorio deve está em uma pasta no c: ao clicar na pasta xammp deve-se clicar em seguida em uma pasta chamada htdocs.

6. No htdocs todas as pastas salvas são reconhedas e interpretadas.


obs: No exercicio1 index.html é o arquivo de entrada do exercicio.
     No exercicio2 ex2.php é o arquivo de entrada do exercicio.
     No exercicio3 index3.php é o arquivo de entrada do exercicio;
     No exercicio4 index4.php é o arquivo de entrada do exercicio.

Unbutu
1. Acesse o diretorio do exercicio.
2. Digite no terminal php -S localhost:8585

Testes 
Codeception  
Composer - versão 2.3.6

1. Para startar os testes acesse o diretorio.
2. Inicialize dois terminais em um acesse a pasta do exercicio que deseja visuaizar o teste, digite o comando php - S localhost:8585 no terminal, no browser digite php - S localhost:8585
3. Na segunda aba acesse os testes digite no terminal o comando, php vendor/bin/codecept run --steps.

Docker
- Para instalar o Docker na sua maquina (unbutu 20.4): Digite no terminal o passo á passo
1. sudo apt update
2. sudo apt install apt-transport-https ca-certificates curl software-properties-common
3. curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
4. sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
5. sudo apt update
6. apt-cache policy docker-ce
7. sudo apt install docker-ce
8. sudo systemctl status docker
Resultado deve ser:
Output
● docker.service - Docker Application Container Engine
     Loaded: loaded (/lib/systemd/system/docker.service; enabled; vendor preset: enabled)
     Active: active (running) since Tue 2020-05-19 17:00:41 UTC; 17s ago
TriggeredBy: ● docker.socket
       Docs: https://docs.docker.com
   Main PID: 24321 (dockerd)
      Tasks: 8
     Memory: 46.4M
     CGroup: /system.slice/docker.service
             └─24321 /usr/bin/dockerd -H fd:// --containerd=/run/containerd/containerd.sock
* Apartir do exercicio 14 é utilizado Docker
- Para rodar o docker-compose escreva o comando: docker-compose up -d
- paa ver os containers que estão rodando: docker ps
- Para entrar na interface do phpadimin: localhost:8080. 