# 🏛️ Biblioteca de Alexandria

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/Environment-CLI-black?style=for-the-badge&logo=gnumetallurgicallaboratory&logoColor=white" alt="CLI">
  <img src="https://img.shields.io/badge/Database-JSON-000000?style=for-the-badge&logo=json&logoColor=white" alt="JSON">
</p>

<p align="center">
  <b>⚡ Um sistema clássico de gerenciamento de acervos feito para o terminal moderno ⚡</b>
</p>

---

O **Biblioteca de Alexandria** é um sistema de gerenciamento de acervos literários desenvolvido inteiramente em **PHP puro (CLI)**. O objetivo principal deste projeto foi consolidar conceitos de lógica estruturada, manipulação de arquivos e, principalmente, explorar o design de código modularizado e a **experiência do usuário (UX) aplicada ao terminal**.

O nome é uma homenagem à famosa biblioteca, trazendo uma estética clássica para um utilitário moderno de linha de comando.

---

## 🎯 Objetivos de Aprendizado e Foco do Projeto

* **Manipulação de CRUD Completo:** Criação, leitura, atualização e deleção de dados persistidos localmente.
* **PHP Puro e Funcional:** Divisão de responsabilidades estruturada através de funções especialistas e isoladas.
* **UX de Terminal (Interface no Console):** Preocupação com a usabilidade, menus limpos, telas que se auto-limpam (`cleaner.php`) e feedbacks claros para o usuário após cada ação.
* **Persistência Híbrida:** Uso de **Arrays Associativos** nativos do PHP para manipulação em memória e conversão para **JSON** (`livros.json`) para salvar os dados no disco.

---

## 🛠️ Ferramentas e Requisitos

### Versões do PHP Aceitáveis
* **Recomendado:** PHP 8.1, 8.2 ou superior.
* **Mínimo Aceitável:** PHP 7.4 (versões anteriores podem não ter suporte total a algumas funções nativas de manipulação de tipos ou JSON CLI de forma idêntica).

### Ferramentas Utilizadas
* **PHP (Ambiente CLI):** Utilizado como linguagem de programação pura para processamento lógico, captura de dados do teclado (`fgets(STDIN)`) e renderização da interface do menu.
* **JSON (JavaScript Object Notation):** Utilizado como nossa tecnologia de banco de dados leve (NoSQL baseado em arquivos). Ele garante a interoperabilidade dos dados brutos em texto estruturado.

---
# ⚙️ Instalação do PHP

Para rodar a aplicação, você só precisa do interpretador do PHP configurado globalmente.

---

## Instalação no Windows

| Passo          | Ação                                                                                                            |
| :------------- | :-------------------------------------------------------------------------------------------------------------- |
| **1. Baixar**  | Acesse [windows.php.net](https://windows.php.net/download/) e baixe o arquivo zip **VS16 x64 Non Thread Safe**. |
| **2. Extrair** | Crie a pasta `C:\php` e extraia todo o conteúdo do zip dentro dela.                                             |
| **3. Path**    | Adicione o caminho `C:\php` nas **Variáveis de Ambiente** do Sistema (dentro da variável `Path`).               |

### Validar instalação no Windows:
```bash
php -v
```
---
## 🐧 Instalação no Linux (Ubuntu/Debian)
Atualize os pacotes do **sistema** e instale o PHP CLI juntamente com o módulo JSON:

```Bash
sudo apt update && sudo apt install php-cli php-json -y
```

# 🚀 Como Executar o Projeto
Siga os comandos abaixo no seu terminal para clonar e rodar o sistema:
## 1. Clonar o repositório
```bash
git clone https://github.com/G3programmer/Biblioteca-de-Alexandria.git
```
## 2. Entrar na pasta do projeto
```bash
cd "Biblioteca-de-Alexandria"
```

## 3. Executar o sistema
```bash
php index.php
```

## 📂 Estrutura Modular

A organização das pastas reflete a separação de responsabilidades do sistema:

```text
├── index.php         # Menu interativo principal (Loop de interface e UX)
├── process.php       # Controlador que gerencia o fluxo de dados e requisições
├── livros.json       # Base de dados em formato JSON
└── functions/        # Funções especialistas que tornam o código modular:
    ├── cleaner.php   # Controle de UX (Limpeza de tela e formatação do terminal)
    ├── create.php    # Lógica de inserção de novos registros no array
    ├── edit.php      # Edição e atualização de livros existentes
    ├── list.php      # Listagem visual estruturada do acervo
    ├── remove.php    # Exclusão de registros do sistema
    ├── save.php      # Conversão do Array Associativo PHP -> JSON e escrita em arquivo
    ├── search.php    # Sistema de busca e filtros dentro do array
    └── stats.php     # Painel de métricas (Contagem de livros, categorias, etc.)