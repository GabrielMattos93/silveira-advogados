# Site Institucional Silveira Advogados

Projeto - Silveira Advogados

 ***

### Frameworks e Bibliotecas

Bootstrap<br>
Font awesome<br>
Google fonts<br>


<details>
<summary>Introdução</summary>
<br>
Documentação
<br><br>
<pre>
1-Configuração do recebimento de email
2-Alteração do Template
3-AutoResponder
4-Assunto da Mensagem
5-Configuração de Redirecionamento
6-Configuração de Mensagem de Sucesso
7-Configuração das Mensagens de Erro
8-Autenticação SMTP
9-Configuração das Informações do Formulário
10-Display e Botão de Enviar
11-Arquivo de Validação
12-Css e Js Para Personalizações
 
</pre>
</details>

---

<details>
<summary>Arquivo config.php</summary>
<br>
<br><br>
<pre>
Acesse a pasta forms/easy_budget/inc/config.php
Neste arquivo encontrar-se toda a parte de configuração do projeto. 

***
1- $yourEmail = 'informe seu email'
2- $contactTemplate = 'Escolha o template do formulário de acordo com o arquivo css'
3- $autoResponder = 'Se for usar o autoresponder, deixe true, caso contrário, coloque false'
4- $defaultSubject = 'Coloque o assunto do formulário, ex: Solicitação de Proposta'
5-$enableRedirection = 'Caso queira redirecionar seu usuário para uma determinada páginas após o preenchimento das informações, coloque true, caso contrário, deixe false'
6-$redirectToURL = 'Se colocar (true) como resposta anterior, digite aqui a url para onde o usuário será redirecionado'
7-$successMessage = 'Essa é a mensagem que irá aparecer caso você não redirecione o usuário para nenhuma página'

***
Configurando mensagens de erro

Para configurar e personalizar mensagem de erro, altere as informações dessas variáveis

	$emptyField
	$invalidEmail 
	$invalidCaptcha
	$maxAllowedCharacter 
	$maxAllowedFileSize 
	$invalidPhoneNumber 

Autenticação SMTP

Para configurar o smtp, na variável ($smtpEnable = true) deixe true, caso não ultilize o smtp coloque false. 

	$smtpServer = 'mail.exemple.com'   
	$smtpPort = 'Número da porta'                    
	$smtpUsername = 'Nome de usuário'; 
	$smtpPassword = 'Sua senha';  
	$smtpEncryption = 'ssl';

Configuração da Informações do Formulário

Classe que instânciamos: 

$easyForm = new EasyContact;

A configuração dos labels do formulário, inicia na linha 74.
Você pode adicionar quantos campos desejar.

</pre>
</details>

---

<details>
<summary>Arquivo form.php</summary>
<br>
<br><br>
<pre>

No arquivo form.php, você configura o Layout do formulário

</pre>
</details>

---

<details>
<summary>Arquivo autoresponder.php</summary>
<br>
<br><br>
<pre>

Caso você habilite o autoresponder, faça todas as configurações de resposta por aqui.

1- $emailResponder = 'Coloque o email que vai enviar as respostas automáticas'
2- Caso esteja ultilizando SMTP, configure suas informações a partir da linha 9
3- $respondSubject = 'Assunto da mensagem para o usuário que receber o email de resposta'
4- $respondMessage = 'A mensagem que você quer enviar para o usuário após ele enviar as informações no formulário'

</pre>
</details>

---

<details>
<summary>Arquivo captcha.php</summary>
<br>
<br><br>
<pre>

Caso você habilite o captcha do formulário, todas as configurações devem ser realizadas nesse arquivo.

</pre>
</details>

---

<details>
<summary>Arquivo process.php</summary>
<br>
<br><br>
<pre>

Esse é o arquivo de configuração e verificação dos comandos do formulário.

</pre>
</details>

hnmg---

<details>
<summary>Arquivos orcamento.php</summary>
<br>
<br><br>
<pre>
Neste arquivo você pode configurar os Metas (SEO) do formulário e incluir os arquivos de estilização e scripts como (Pixel do facebook, google tag manager e outros)

</pre>
</details> 

---

<details>
<summary>Arquivos de Estilo</summary>
<br>
<br><br>
<pre>

Os arquivos de estilo estão na pasta style, cada arquivo css representa um template diferente para o formulário, e você pode modificar e personalizar como quiser, neste momento ele está configurado com o template premium, porém você pode alterar para qualquer outro que preferir e também criar os seus proprios templates personalizados.
</pre>
</details> 