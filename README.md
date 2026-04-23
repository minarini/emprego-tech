# 💼 Emprego Tech

<p align="center">
  Plataforma web para conectar candidatos da área de TI e empresas com vagas abertas.
</p>

---

## 📌 Sobre o projeto

O **Emprego Tech** foi desenvolvido como **Projeto de Conclusão de Curso (TCC)** no curso de **Tecnologia da Informação (ETEC)** em 2023.

A proposta foi centralizar em uma única aplicação o fluxo de:

* 👤 candidatos buscando oportunidades
* 🏢 empresas publicando vagas
* 🔍 consulta e interação entre ambos

> ⚠️ Este projeto representa uma base acadêmica e atualmente é considerado um **sistema legado**, servindo como estudo de arquitetura, backend e melhorias de engenharia.

---

## 🧱 Arquitetura da aplicação

### 🏗️ Estilo arquitetural

Aplicação **monolítica web com renderização server-side**, utilizando:

* PHP procedural no backend
* HTML, CSS e JavaScript no frontend
* MySQL como banco de dados
* Comunicação via `mysqli`

💡 **Por que monolítico?**
Escolha alinhada ao contexto acadêmico, priorizando simplicidade, aprendizado e entrega funcional.

---

### 📂 Organização por módulos

* `home/` → landing page e conteúdo institucional
* `vagas/` → listagem pública de vagas
* `perfilcandidato/` → área autenticada do candidato
* `perfilempresa/` → área autenticada da empresa
* `cadvaga/` → cadastro de vagas
* `cadempresa/` → cadastro de empresa
* `pagamento/` → fluxo de pagamento (simulado)
* `banco/` → script SQL do banco
* raiz (`*.php`) → autenticação, conexão e roteamento simples

---

### 🔄 Fluxo técnico

1. Requisições HTTP são processadas por páginas PHP
2. Dados são enviados via formulários (`POST`)
3. Scripts realizam validações básicas
4. Persistência no MySQL via `mysqli`
5. Controle de sessão com `$_SESSION`

---

## 🚀 Funcionalidades

* 👤 Cadastro e login de candidatos
* 🏢 Cadastro e login de empresas
* 📄 Criação e gerenciamento de vagas
* 🔍 Listagem de vagas disponíveis
* 💳 Fluxo de pagamento simulado
* 🔐 Controle de sessão

---

## 🛠️ Tecnologias

* **Backend:** PHP
* **Frontend:** HTML5, CSS3, JavaScript
* **Banco de dados:** MySQL
* **Bibliotecas:** jQuery, Swiper, IMask

---

## 🧠 Aprendizados e decisões técnicas

Este projeto consolidou conceitos importantes como:

* Estruturação de aplicação web monolítica
* Controle de autenticação com sessões
* Modelagem relacional no MySQL
* Integração frontend + backend sem frameworks
* Organização modular básica em projetos PHP

---

## 🔒 Considerações de segurança

Por se tratar de um projeto acadêmico:

* Hash de senha utilizando **SHA-1 (legado)**

🔧 Melhorias planejadas:

* Migração para `password_hash` / `password_verify`
* Uso de queries preparadas
* Melhor validação de dados no backend

---

## 🗄️ Banco de dados

Script principal: `banco/empregotech.sql`

Entidades principais:

* `candidato`
* `empresa`
* `vaga`
* `candidato_vaga`

> ⚠️ O nome do banco segue o padrão original do projeto acadêmico (`emprego tech`).

---

## ⚙️ Como executar localmente

### Pré-requisitos

* PHP 5.4+ com `mysqli`
* MySQL/MariaDB
* Servidor local (XAMPP, WAMP, etc.)

### Passo a passo

1. Coloque a pasta no diretório do servidor (`htdocs` ou `www`)
2. Importe o banco `banco/empregotech.sql`
3. Configure `conexao.php` se necessário:

   * host: `localhost`
   * usuário: `root`
   * senha: `usbw`
   * banco: `emprego tech`
4. Inicie Apache e MySQL

## 🔧 Configuração

Renomeie o arquivo `conexao.example.php` para `conexao.php` e preencha com suas credenciais locais.

5. Acesse:

   * `http://localhost/empregotech/`

---

## ⚠️ Limitações conhecidas

* 🎨 Frontend não totalmente padronizado
* 🧩 Funcionalidades parcialmente completas
* 🔐 Melhorias necessárias em segurança
* 🏗️ Estrutura pode evoluir para melhor separação de camadas

---

## 🔮 Evoluções futuras

* Refatoração para arquitetura em camadas
* Introdução de framework (ex: Laravel ou Spring)
* Melhorias de segurança e validação
* Padronização de UI/UX

---

## 📚 Contexto acadêmico

Projeto desenvolvido em 2023 como TCC da ETEC, com foco em aplicar fundamentos de desenvolvimento web full stack.

Este repositório é mantido como registro acadêmico e portfólio backend, não recebendo novas evoluções.

---

<p align="center">
  ✨ Projeto em evolução — refletindo aprendizado contínuo ✨
</p>
