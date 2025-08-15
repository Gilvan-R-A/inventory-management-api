<h1 align="center">Sistema de Gerenciamento de Estoques</h1>

> 🚧 **Status do Projeto:** Em desenvolvimento 🚧   

Este é um sistema de **gerencimento de estoques** que está sendo desenvolvido com **PHP (Laravel)** no backend e **Angular** no frontend, seguindo o padrão de arquitetura **MVC** e boas práticas de desenvolvimento.   
O objetivo é fornecer uma solução completa para controle de produtos, movimentações de entrada e saída, relatórios e gestão de usuários, com interface responsiva.   

## Funcionalidades Planejadas   

### Autenticação e Controle de Acesso   

- Cadastro e login de usuários.
- Perfis de acesso: **Administrador**, **Estoquista** e **Visualizador**.
- Recuperação e alteração de senha.
- Autenticação via **JWT**.   

### Módulo de Produtos   

- Cadastro, edição e exclusão de produtos.
- Campos: nome, descrição, código interno, código de barras, categoria, unidade de medida, preços, estoque mínimo e atual.
- Upload de imagem do produto.
- Filtros e busca de produtos.   

### Módulo de Categorias   

- Cadastro, edição e exclusão de categorias.
- Associação de produtos a categorias.   

### Módulo de Movimentações   

- Registro de **entradas** (compras/reposição).
- Registro de **saídas** (vendas/perdas/transferências).
- Atualização automática do estoque.
- Histórico detalhado de movimentações.   

### Relatórios e Indicadores   

- Estoque atual.
- Produtos abaixo do estoque mínimo.
- Movimentações por período.
- Exportação para **PDF** e **CSV**.   

### Módulo de Configurações   

- Dados da empresa.
- Alteração de senha do usuário.
- Preferências do sistema.   


## Tecnologias   


### Backend   

- PHP
- Laravel
- MySQL
- SQLite
- JWT Auth   

### Frontend   

- Angular
- TypeScript
- Angular Material   

## Contribuição   

Contribuições e sugestões são bem-vindas.   

**Para colaborar:**   

1. Faça um fork do repositório.
2. Crie uma branch para sua feature:   
    `git checkout -b minha-feature`   
3. Commit suas alterações:   
    `git commit -m "feat: Minha nova feature."`   
4. Envie para o repositório remoto:   
    `git push origin minha-feature`   
5. Abra um Pull Request.


