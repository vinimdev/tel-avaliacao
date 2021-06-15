# Instruções para rodar a aplicação:

#### 1. Configurando SQL Server  
Caso o SQL Server, esteja em português, deve-se setar para inglês através do comando: exec sp_defaultlanguage 'sa', 'us_english'
reconfigure ou através da interface SSMS.

#### 2. Login na aplicação
Para realizar o login na aplicação deve-se registrar ou dá entrada com os seguintes dados:  
**E-mail:** admin@admin.com.br  
**Senha:** usuariopadrao

Ferramenta: Composer.

# TEL

#### Orientações iniciais:
• O candidato deve criar uma conta no github (https://github.com);  
• O candidato deve criar um novo repositório público;  
• O candidato deve construir o seu projeto neste repositório. 
Ao finalizar este deve enviar às orientações de execução para o e-mail asilva@tel.inf.br.  
Atividade:  

O candidato deve desenvolver e entregar o projeto no prazo estipulado pelo RH. Essa etapa é eliminatória. O
candidato será convidado a falar sobre o projeto desenvolvido a uma bancada de avaliação.  

#### a) As Ferramentas que podem ser utilizadas no backend:  
i) PHP;  
ii) Laravel\Lumen;  

#### b) Ferramentas que podem ser utilizadas no frontend:

i) Bootstrap;  
ii) Outras;  

#### c) O candidato deve manter a atenção para em utilizar as melhores práticas:  
i) Clean Code;  
ii) PHP OO;  

#### d) Testes:  

i) Os Testes não são obrigatórios, e serão considerados como plus (+) na avaliação.  

#### e) Build e Execução:  

i) Envie as instruções para execução e não esqueça do Script SQL de criação e carga do banco (SQL ANSI ou
SQL que rode em SQL Sever). Cuidado com dependências externas não mapeadas que inviabilizem ou
dificultem essas atividades.  
ii) De preferência, utilize uma ferramenta como composer, npm ou yarn para realizar as tarefas necessárias de
build ou instalação de pacotes.  
iii) Caso deseje, personalize a interface e mostre que tem criatividade (+)

### Descrição do Projeto
#### 1) Ativar serviço de autenticação.
   a) Middleware, login e Soft Delete.
##### 2) Criar Tela de Cadastro de usuário:
   a) O cadastro deverá conter os seguintes campos:  
   i) Nome;  
   ii) E-mail;  
   iii) Senha.  
   b) O cadastro e login deverá obedecer às seguintes regras: i. E-mail deve ser único;  
   i) Senha não pode ser nula;  
   ii) Na edição a senha não é obrigatória;  
   iii) Na edição quando não informar a senha a mesma não deve ser atualizada;  
   iv) Não haverá exclusão física, apenas exclusão lógica;  
   v) Usuários excluídos logicamente não podem se logar;  
#### 3) Criar um cadastro de clientes que irá rodar clientes de (SP e BA).
   a) O cadastro deverá conter os seguintes campos:  
   i) Nome  
   ii) CPF  
   iii) RG  
   iv) Data/hora de cadastro  
   v) Data/hora da última atualização  
   vi) Usuário que efetuou o cadastro  
   vii) Usuário que efetuou a última atualização  
   viii) Data de nascimento  
   ix) Telefones. O número de telefones é variável.  
   x) Local de nascimento do cliente (BA, SP)  
   b) O cadastro deverá obedecer às seguintes regras:  
   i) Caso o cliente seja de SP, o campo RG é obrigatório.  
   ii) Caso o cliente seja da BA, não deixar cadastrar uma pessoa com menos de 18 anos.
   
## BOA SORTE
