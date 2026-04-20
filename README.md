# 🎓 Sistema de Gestão de Alunos (SGA)

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000f?style=for-the-badge&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)

> Um sistema de controle acadêmico completo, desenvolvido em PHP com foco em segurança, usabilidade e uma interface moderna.

---

## 🌟 Funcionalidades

O projeto conta com um fluxo completo de autenticação e gerenciamento de dados:

- 🔒 **Sistema de Login Seguro**: Autenticação via sessões PHP e proteção de senhas com MD5.
- ❌ **Feedback de Erro Inteligente**: Notificações visuais e animação de "tremida" caso a senha esteja incorreta.
- 📝 **CRUD Completo de Alunos**:
  - **C**reate: Cadastro de novos alunos.
  - **R**ead: Listagem dinâmica em tabela.
  - **U**pdate: Edição de dados existentes com preenchimento automático.
  - **D**elete: Remoção de registros.
- 🎨 **Interface Premium**: Design limpo, profissional, utilizando a paleta de cores "Corporate Blue" e ícones do FontAwesome.

---

## 🛠️ Tecnologias Utilizadas

As seguintes ferramentas foram usadas na construção do projeto:

- **Linguagem:** PHP 8.x
- **Banco de Dados:** MySQL (via PDO para maior segurança)
- **Estilização:** CSS3 (Variáveis, Flexbox e Keyframes)
- **Ícones:** [FontAwesome 6.4](https://fontawesome.com/)
- **Servidor:** Apache (XAMPP/WAMP)

---

## 📂 Estrutura de Pastas

```text
PROJETO/
├── aluno/              # Módulo de gestão de alunos
│   ├── index.php       # Painel principal (Listagem e Form)
│   ├── inserir.php     # Lógica de Insert/Update
│   └── excluir.php     # Lógica de remoção
├── index.php           # Tela de Login (Raiz)
├── logar.php           # Validação de acesso
├── conexao.php         # Ponte com o banco de dados
├── sessao.php          # Verificação de segurança
├── style.css           # Estilização global
└── logout.php          # Encerramento de sessão
