# Sistema de Gerenciamento de Relacionamento com o Cliente (CRM) em PHP Orientado a Objetos

Este projeto consiste em um webapp de CRM desenvolvido em PHP orientado a objetos, que permite gerenciar o relacionamento com os clientes de uma empresa. O sistema inclui funcionalidades como cadastro de empresas, usuários, clientes e produtos, além de permitir o registro de informações sobre negócios em andamento, como título, valor, avaliação, expectativa de fechamento e resultado.

## Requisitos Funcionais

O sistema deve permitir:

- Cadastrar empresas, usuários, clientes e produtos
- Registrar informações sobre negócios em andamento, como título, valor, avaliação, expectativa de fechamento e resultado
- Selecionar um ou vários seguidores para cada negócio
- Efetuar upload de arquivos relacionados a cada negócio
- Mostrar a avaliação de cada negócio como estrelas de 1 a 5
- Permitir a junção do nome da organização com o nome do contato no campo de contato
- Mostrar um rádio group com as opções Sem Contato, Contato Efetuado, Em Progresso, Proposta Enviada e Em Negociação

## Requisitos Não Funcionais

O sistema deve ser desenvolvido em PHP orientado a objetos e utilizar um banco de dados para armazenar as informações. O projeto deve incluir diagramas de casos de uso, classes e sequência, além de seguir as melhores práticas de programação e design de software.

## Diagramas

O projeto inclui os seguintes diagramas:

- Diagrama de Casos de Uso
- Diagrama de Classes
- Diagrama de Sequência

## Estrutura do Banco de Dados

O sistema utiliza um banco de dados com a seguinte estrutura:

- Tabela de Empresas
- Tabela de Usuários
- Tabela de Clientes
- Tabela de Produtos
- Tabela de Negócios

## Instalação

Para instalar o sistema, basta clonar o repositório e configurar o banco de dados conforme as informações contidas no arquivo de configuração.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests ou abrir issues.

## Histórico de revisões

- Versão 1.0 (09/12/2022): Modelagem do banco de dados (José João)
- Versão 1.1 (15/12/2022): Adição de informações sobre a utilização das informações capturadas pelo CRM (José João)

## Segue abaixo a lista de tarefas para cada requisito não funcional:

### Requisitos Não Funcionais:

KABAN - Crie um Quadro a partir do Modelo

Backlog:
- Identificar todas as funcionalidades do sistema a partir do modelo apresentado no PDF
- Criar um cartão para cada funcionalidade identificada
- Priorizar as funcionalidades de acordo com a sua importância e urgência

Elaboração:
- Selecionar as funcionalidades mais importantes e elaborar os cartões do backlog
- Definir as tarefas necessárias para implementar cada funcionalidade
- Atribuir as tarefas aos membros da equipe responsáveis por sua implementação
- Estimar o tempo necessário para cada tarefa

Testes:
- Realizar testes unitários e de integração para cada funcionalidade implementada
- Corrigir os bugs e problemas encontrados durante os testes
- Verificar se as funcionalidades implementadas atendem aos requisitos do cliente

Concluído:
- Entregar as funcionalidades implementadas ao cliente
- Realizar a manutenção e suporte do sistema após a entrega
- Identificar novas funcionalidades e adicionar ao backlog para futuras implementações.

### Requisitos Funcionais:

1. Cadastro de Tarefas e Atividades
- Tarefa: criar tela de cadastro de tarefas e atividades
- Tarefa: criar tela de edição de tarefas e atividades
- Tarefa: criar tela de exclusão de tarefas e atividades
- Tarefa: criar tela de listagem de tarefas e atividades
- Tarefa: criar tela de busca de tarefas e atividades
- Tarefa: criar tela de filtro de tarefas e atividades
- Tarefa: criar tela de ordenação de tarefas e atividades

2. Tabela relação das tarefas pai e tarefas filhas
- Tarefa: criar tela de cadastro de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de edição de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de exclusão de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de listagem de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de busca de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de filtro de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de ordenação de relação entre tarefas pai e tarefas filhas

3. Cadastro de Tipos de Tarefas
- Tarefa: criar tela de cadastro de tipos de tarefas
- Tarefa: criar tela de edição de tipos de tarefas
- Tarefa: criar tela de exclusão de tipos de tarefas
- Tarefa: criar tela de listagem de tipos de tarefas
- Tarefa: criar tela de busca de tipos de tarefas
- Tarefa: criar tela de filtrode tipos de tarefas
- Tarefa: criar tela de ordenação de tipos de tarefas

4. Registro de Documentos
- Tarefa: criar tela de cadastro de documentos
- Tarefa: criar tela de edição de documentos
- Tarefa: criar tela de exclusão de documentos
- Tarefa: criar tela de listagem de documentos
- Tarefa: criar tela de busca de documentos
- Tarefa: criar tela de filtro de documentos
- Tarefa: criar tela de ordenação de documentos

5. Cadastro de Lembretes da tarefa
- Tarefa: criar tela de cadastro de lembretes da tarefa
- Tarefa: criar tela de edição de lembretes da tarefa
- Tarefa: criar tela de exclusão de lembretes da tarefa
- Tarefa: criar tela de listagem de lembretes da tarefa
- Tarefa: criar tela de busca de lembretes da tarefa
- Tarefa: criar tela de filtro de lembretes da tarefa
- Tarefa: criar tela de ordenação de lembretes da tarefa

6. Cadastro de Produtos
- Tarefa: criar tela de cadastro de produtos
- Tarefa: criar tela de edição de produtos
- Tarefa: criar tela de exclusão de produtos
- Tarefa: criar tela de listagem de produtos
- Tarefa: criar tela de busca de produtos
- Tarefa: criar tela de filtro de produtos
- Tarefa: criar tela de ordenação de produtos

7. Tabela relação dos produtos do negócio
- Tarefa: criar tela de cadastro de relação entre produtos e negócios
- Tarefa: criar tela de edição de relação entre produtos e negócios
- Tarefa: criar tela de exclusão de relação entre produtos e negócios
- Tarefa: criar tela de listagem de relação entre produtos e negócios
- Tarefa: criar tela de busca de relação entre produtos e negócios
- Tarefa: criar tela de filtro de relação entre produtos e negócios
- Tarefa: criar tela de ordenação de relação entre produtos e negócios

8. Tabela de Checklist do Negócio ou da Tarefa
- Tarefa: criar tela de cadastro de checklist do negócio ou da tarefa
- Tarefa: criar tela de edição de checklist do negócio ou da tarefa
- Tarefa: criar tela de exclusão de checklist do negócio ou da tarefa
- Tarefa: criar tela de listagem de checklist do negócio ou da tarefa
- Tarefa: criar tela de busca de checklist do negócio ou da tarefa
- Tarefa: criar tela de filtro de checklist do negócio ou da tarefa
- Tarefa: criar tela de ordenação de checklist do negócio ou da tarefa

9. Lista de Seguidores do Negócio ou da Tarefa
- Tarefa: criar tela de cadastro de seguidores do negócio ou da tarefa
- Tarefa: criar tela de edição de seguidores do negócio ou da tarefa
- Tarefa: criar tela de exclusão de seguidores do negócio ou da tarefa
- Tarefa: criar tela de listagem de seguidores do negócio ou da tarefa
- Tarefa: criar tela de busca de seguidores do negócio ou da tarefa
- Tarefa: criar tela de filtro de seguidores do negócio ou da tarefa
- Tarefa: criar tela de ordenação de seguidores do negócio ou da tarefa

10. Comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de cadastro de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de edição de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de exclusão de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de listagem de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de busca de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de filtro de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de ordenação de comentários de um negócio ou de uma tarefa

11. Cadastro de Países
- Tarefa: criar tela de cadastro de países
- Tarefa: criar tela de edição de países
- Tarefa: criar tela de exclusão de países
- Tarefa: criar tela de listagem de países
- Tarefa: criar tela de busca de países
- Tarefa: criar tela de filtro de países
- Tarefa: criar tela de ordenação de países

12. Cadastro de Cidades
- Tarefa: criar tela de cadastro de cidades
- Tarefa: criar tela de edição de cidades
- Tarefa: criar tela de exclusão de cidades
- Tarefa: criar tela de listagem de cidades
- Tarefa: criar tela de busca de cidades
- Tarefa: criar tela de filtro de cidades
- Tarefa: criar tela de ordenação de cidades

13. Cadastro de UF
- Tarefa: criar tela de cadastro de UF
- Tarefa: criar tela de edição de UF
- Tarefa: criar tela de exclusão de UF
- Tarefa: criar tela de listagem de UF
- Tarefa: criar tela de busca de UF
- Tarefa: criar tela de filtro de UF
- Tarefa: criar tela de ordenação de UF

14. Cadastro da Empresa
- Tarefa: criar tela de cadastro de empresa
- Tarefa: criar tela de edição de empresa
- Tarefa: criar tela de exclusão de empresa
- Tarefa: criar tela de listagem de empresa
- Tarefa: criar tela de busca de empresa
- Tarefa: criar tela de filtro de empresa
- Tarefa: criar tela de ordenação de empresa

15. Cadastro de Clientes
- Tarefa: criar tela de cadastro de clientes
- Tarefa: criar tela de edição de clientes
- Tarefa: criar tela de exclusão de clientes
- Tarefa: criar tela de listagem de clientes
- Tarefa: criar tela de busca de clientes
- Tarefa: criar tela de filtro de clientes
- Tarefa: criar tela de ordenação de clientes

16. Cadastro de Contatos nos Clientes
- Tarefa: criar tela de cadastro de contatos nos clientes
- Tarefa: criar tela de edição de contatos nos clientes
- Tarefa: criar tela de exclusão de contatos nos clientes
- Tarefa: criar tela de listagem de contatos nos clientes
- Tarefa: criar tela de busca de contatos nos clientes
- Tarefa: criar tela de filtro de contatos nos clientes
- Tarefa: criar tela de ordenação de contatos nos clientes

17. Cadastro de Ramo de Atividades do Cliente
- Tarefa: criar tela de cadastro de ramo de atividades do cliente
- Tarefa: criar tela de edição de ramo de atividades do cliente
- Tarefa: criar tela de exclusão de ramo de atividades do cliente
- Tarefa: criar tela de listagem de ramo de atividades do cliente
- Tarefa: criar tela de busca de ramo de atividades do cliente
- Tarefa: criar tela de filtro de ramo de atividades do cliente
- Tarefa: criar tela de ordenação de ramo de atividades do cliente

18. Cadastro de Usuários e Colaboradores
- Tarefa: criar tela de cadastro de usuários e colaboradores
- Tarefa: criar tela de edição de usuários e colaboradores
- Tarefa: criar tela de exclusão de usuários e colaboradores
- Tarefa: criar tela de listagem de usuários e colaboradores
- Tarefa: criar tela de busca de usuários e colaboradores
- Tarefa: criar tela de filtro de usuários e colaboradores
- Tarefa: criar tela de ordenação de usuários e colaboradores

19. Cadastro de Negócios e Oportunidades LEADS
- Tarefa: criar tela de ordenação de negócios e oportunidades LEADS

20. Cadastro de Tipos de Negócio
- Tarefa: criar tela de cadastro de tipos de negócio
- Tarefa: criar tela de edição de tipos de negócio
- Tarefa: criar tela de exclusão de tipos de negócio
- Tarefa: criar tela de listagem de tipos de negócio
- Tarefa: criar tela de busca de tipos de negócio
- Tarefa: criar tela de filtro de tipos de negócio
- Tarefa: criar tela de ordenação de tipos de negócio

21. Cadastro de Origem / Fonte do Negócio
- Tarefa: criar tela de cadastro de origem / fonte do negócio
- Tarefa: criar tela de edição de origem / fonte do negócio
- Tarefa: criar tela de exclusão de origem / fonte do negócio
- Tarefa: criar tela de listagem de origem / fonte do negócio
- Tarefa: criar tela de busca de origem / fonte do negócio
- Tarefa: criar tela de filtro de origem / fonte do negócio
- Tarefa: criar tela de ordenação de origem / fonte do negócio

22. Fluxo do Negócio / Fases ou Etapas
- Tarefa: criar tela de cadastro de fluxo do negócio / fases ou etapas
- Tarefa: criar tela de edição de fluxo do negócio / fases ou etapas
- Tarefa: criar tela de exclusão de fluxo do negócio / fases ou etapas
- Tarefa: criar tela de listagem de fluxo do negócio / fases ou etapas
- Tarefa: criar tela de busca de fluxo do negócio / fases ou etapas
- Tarefa: criar tela de filtro de fluxo do negócio / fases ou etapas
- Tarefa: criar tela de ordenação de fluxo do negócio / fases ou etapas

23. Cadastro de Indicadores de Vendas
- Tarefa: criar tela de cadastro de indicadores de vendas
- Tarefa: criar tela de edição de indicadores de vendas
- Tarefa: criar tela de exclusão de indicadores de vendas
- Tarefa: criar tela de listagem de indicadores de vendas
- Tarefa: criar tela de busca de indicadores de vendas
- Tarefa: criar tela de filtro de indicadores de vendas
- Tarefa: criar tela de ordenação de indicadores de vendas

24. Cadastro de Motivos de Encerramento do Negócio
- Tarefa: criar tela de cadastro de motivos de encerramento do negócio
- Tarefa: criar tela de edição de motivos de encerramento do negócio
- Tarefa: criar tela de exclusão de motivos de encerramento do negócio
- Tarefa: criar tela de listagem de motivos de encerramento do negócio
- Tarefa: criar tela de busca de motivos de encerramento do negócio
- Tarefa: criar tela de filtro de motivos de encerramento do negócio
- Tarefa: criar tela de ordenação de motivos de encerramento do negócio

25. Lista de Participantes Envolvidos no Negócio
- Tarefa: criar tela de cadastro de lista de participantes envolvidos no negócio
- Tarefa: criar tela de edição de lista de participantes envolvidos no negócio
- Tarefa: criar tela de exclusão de lista de participantes envolvidos no negócio
- Tarefa: criar tela de listagem de lista de participantes envolvidos no negócio
- Tarefa: criar tela de busca de lista de participantes envolvidos no negócio
- Tarefa: criar tela de filtro de lista de participantes envolvidos no negócio
- Tarefa: criar tela de ordenação de lista de participantes envolvidos no negócio

26. Tabela relação das tarefas pai e tarefas filhas
- Tarefa: criar tela de cadastro de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de edição de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de exclusão de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de listagem de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de busca de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de filtro de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de ordenação de relação entre tarefas pai e tarefas filhas

27. Cadastro de Tipos de Tarefas
- Tarefa: criar tela de cadastro de tipos de tarefas
- Tarefa: criar tela de edição de tipos de tarefas
- Tarefa: criar tela de exclusão de tipos de tarefas
- Tarefa: criar tela de listagem de tipos de tarefas
- Tarefa: criar tela de busca de tipos de tarefas
- Tarefa: criar tela de filtro de tipos de tarefas
- Tarefa: criar tela de ordenação de tipos de tarefas

28. Registro de Documentos
- Tarefa: criar tela de cadastro de registro de documentos
- Tarefa: criar tela de edição de registro de documentos
- Tarefa: criar tela de exclusão de registro de documentos
- Tarefa: criar tela de listagem de registro de documentos
- Tarefa: criar tela de busca de registro de documentos
- Tarefa: criar tela de filtro de registro de documentos
- Tarefa: criar tela de ordenação de registro de documentos

29. Cadastro de Lembretes da tarefa
- Tarefa: criar tela de cadastro de lembretes da tarefa
- Tarefa: criar tela de edição de lembretes da tarefa
- Tarefa: criar tela de exclusão de lembretes da tarefa
- Tarefa: criar tela de listagem de lembretes da tarefa
- Tarefa: criar tela de busca de lembretes da tarefa
- Tarefa: criar tela de filtro de lembretes da tarefa
- Tarefa: criar tela de ordenação de lembretes da tarefa

30. Cadastro de Produtos
- Tarefa: criar tela de cadastro de produtos
- Tarefa: criar tela de edição de produtos
- Tarefa: criar tela de exclusão de produtos
- Tarefa: criar tela de listagem de produtos
- Tarefa: criar tela de busca de produtos
- Tarefa: criar tela de filtro de produtos
- Tarefa: criar tela de ordenação de produtos

31. Tabela relação dos produtos do negócio
- Tarefa: criar tela de cadastro de relação entre produtos do negócio
- Tarefa: criar tela de edição de relação entre produtos do negócio
- Tarefa: criar tela de exclusão de relação entre produtos do negócio
- Tarefa: criar tela de listagem de relação entre produtos do negócio
- Tarefa: criar tela de busca de relação entre produtos do negócio
- Tarefa: criar tela de filtro de relação entre produtos do negócio
- Tarefa: criar tela de ordenação de relação entre produtos do negócio

32. Tabela de Checklist do Negócio ou da Tarefa
- Tarefa: criar tela de cadastro de checklist do negócio ou da tarefa
- Tarefa: criar tela de edição de checklist do negócio ou da tarefa
- Tarefa: criar tela de exclusão de checklist do negócio ou da tarefa
- Tarefa: criar tela de listagem de checklist do negócio ou da tarefa
- Tarefa: criar tela de busca de checklist do negócio ou da tarefa
- Tarefa: criar tela de filtro de checklist do negócio ou da tarefa
- Tarefa: criar tela de ordenação de checklist do negócio ou da tarefa

33. Lista de Seguidores do Negócio ou da Tarefa
- Tarefa: criar tela de cadastro de lista de seguidores do negócio ou da tarefa
- Tarefa: criar tela de edição de lista de seguidores do negócio ou da tarefa
- Tarefa: criar tela de exclusão de lista de seguidores do negócio ou da tarefa
- Tarefa: criar tela de listagem de lista de seguidores do negócio ou da tarefa
- Tarefa: criar tela de busca de lista de seguidores do negócio ou da tarefa
- Tarefa: criar tela de filtro de lista de seguidores do negócio ou da tarefa
- Tarefa: criar tela de ordenação de lista de seguidores do negócio ou da tarefa

34. Comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de cadastro de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de edição de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de exclusão de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de listagem de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de busca de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de filtro de comentários de um negócio ou de uma tarefa
- Tarefa: criar tela de ordenação de comentários de um negócio ou de uma tarefa

35. Fluxo de Oportunidade
- Tarefa: criar tela de cadastro de fases do negócio
- Tarefa: criar tela de edição de fases do negócio
- Tarefa: criar tela de exclusão de fases do negócio
- Tarefa: criar tela de listagem de fases do negócio
- Tarefa: criar tela de busca de fases do negócio
- Tarefa: criar tela de filtro de fases do negócio
- Tarefa: criar tela de ordenação de fases do negócio

36. Tabela de relação entre fases do negócio
- Tarefa: criar tela de cadastro de relação entre fases do negócio
- Tarefa: criar tela de edição de relação entre fases do negócio
- Tarefa: criar tela de exclusão de relação entre fases do negócio
- Tarefa: criar tela de listagem de relação entre fases do negócio
- Tarefa: criar tela de busca de relação entre fases do negócio
- Tarefa: criar tela de filtro de relação entre fases do negócio
- Tarefa: criar tela de ordenação de relação entre fases do negócio

37. Cadastro de Indicadores de Vendas
- Tarefa: criar tela de cadastro de indicadores de vendas
- Tarefa: criar tela de edição de indicadores de vendas
- Tarefa: criar tela de exclusão de indicadores de vendas
- Tarefa: criar tela de listagem de indicadores de vendas
- Tarefa: criar tela de busca de indicadores de vendas
- Tarefa: criar tela de filtro de indicadores de vendas
- Tarefa: criar tela de ordenação de indicadores de vendas

38. Cadastro de Motivos de Encerramento do Negócio
- Tarefa: criar tela de cadastro de motivos de encerramento do negócio
- Tarefa: criar tela de edição de motivos de encerramento do negócio
- Tarefa: criar tela de exclusão de motivos de encerramento do negócio
- Tarefa: criar tela de listagem de motivos de encerramento do negócio
- Tarefa: criar tela de busca de motivos de encerramento do negócio
- Tarefa: criar tela de filtro de motivos de encerramento do negócio
- Tarefa: criar tela de ordenação de motivos de encerramento do negócio

39. Lista de Participantes Envolvidos no Negócio
- Tarefa: criar tela de cadastro de lista de participantes envolvidos no negócio
- Tarefa: criar tela de edição de lista de participantes envolvidos no negócio
- Tarefa: criar tela de exclusão de lista de participantes envolvidos no negócio
- Tarefa: criar tela de listagem de lista de participantes envolvidos no negócio
- Tarefa: criar tela de busca de lista de participantes envolvidos no negócio
- Tarefa: criar tela de filtro de lista de participantes envolvidos no negócio
- Tarefa: criar tela de ordenação de lista de participantes envolvidos no negócio

40. Cadastro de Tipos de Tarefas
- Tarefa: criar tela de cadastro de tipos de tarefas
- Tarefa: criar tela de edição de tipos de tarefas
- Tarefa: criar tela de exclusão de tipos de tarefas
- Tarefa: criar tela de listagem de tipos de tarefas
- Tarefa: criar tela de busca de tipos de tarefas
- Tarefa: criar tela de filtro de tipos de tarefas
- Tarefa: criar tela de ordenação de tipos de tarefas

41. Registro de Documentos
- Tarefa: criar tela de cadastro de documentos
- Tarefa: criar tela de edição de documentos
- Tarefa: criar tela de exclusão de documentos
- Tarefa: criar tela de listagem de documentos
- Tarefa: criar tela de busca de documentos
- Tarefa: criar tela de filtro de documentos
- Tarefa: criar tela de ordenação de documentos

42. Tabela relação das tarefas pai e tarefas filhas
- Tarefa: criar tela de cadastro de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de edição de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de exclusão de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de listagem de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de busca de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de filtro de relação entre tarefas pai e tarefas filhas
- Tarefa: criar tela de ordenação de relação entre tarefas pai e tarefas filhas

43. Cadastro de Lembretes da tarefa
- Tarefa: criar tela de