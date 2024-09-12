### Análise dos Principais EADs Atuais

#### 1. Coursera

-   **Funcionalidades**: Cursos de alta qualidade, parceria com universidades renomadas, certificados reconhecidos, vídeos, quizzes, fóruns de discussão, avaliações automáticas, projetos práticos.
-   **Modelo de Negócio**: Assinatura mensal, pagamento por curso, pacotes de cursos, cursos gratuitos com opções pagas para certificados.

#### 2. Udemy

-   **Funcionalidades**: Grande variedade de cursos, vídeos, quizzes, exercícios práticos, suporte a múltiplos formatos de mídia, acesso vitalício ao conteúdo adquirido.
-   **Modelo de Negócio**: Compra única por curso, descontos frequentes, modelos de assinatura.

#### 3. Khan Academy

-   **Funcionalidades**: Cursos gratuitos, vídeos educacionais, quizzes, avaliações automáticas, gamificação, dashboard de progresso, recursos para professores e pais.
-   **Modelo de Negócio**: Gratuito, financiado por doações e subsídios.

#### 4. LinkedIn Learning

-   **Funcionalidades**: Cursos voltados para desenvolvimento profissional, integração com o perfil do LinkedIn, vídeos, quizzes, certificações, conteúdo atualizado regularmente.
-   **Modelo de Negócio**: Assinatura mensal ou anual, acesso a todo o catálogo de cursos.

#### 5. edX

-   **Funcionalidades**: Cursos de universidades renomadas, vídeos, quizzes, fóruns de discussão, certificados reconhecidos, programas de micro-mestrado.
-   **Modelo de Negócio**: Cursos gratuitos com opções pagas para certificados e programas avançados.

### Roteiro para Desenvolvimento de um EAD

#### 1. Desenvolvimento da Plataforma

-   **Funcionalidades Básicas**:
    -   **Autenticação e Autorização**: Registro, login, perfis de usuário.
    -   **Gestão de Cursos**: Criação, edição, remoção de cursos.
    -   **Upload de Conteúdo**: Suporte a vídeos, PDFs, quizzes, exercícios práticos.
    -   **Avaliações e Certificados**: Sistema de avaliações automáticas e emissão de certificados.
    -   **Fóruns de Discussão**: Espaços para interação entre alunos e professores.
    -   **Dashboard de Progresso**: Visualização do progresso do aluno.

#### 3. Implementação de Funcionalidades Avançadas

-   **Gamificação**: Pontuações, medalhas, rankings.
-   **Integração com Redes Sociais**: Compartilhamento de progresso e certificados.
-   **Suporte ao Vivo**: Chats, webinars, sessões de perguntas e respostas.
-   **Mobilidade**: Aplicativos para dispositivos móveis.

#### 4. Testes e Lançamento

-   **Beta Testing**: Convidar um grupo de usuários para testar a plataforma e fornecer feedback.
-   **Correções e Melhorias**: Ajustar a plataforma com base no feedback recebido.
-   **Lançamento Oficial**: Lançamento da plataforma para o público em geral.

### Papéis Comuns

1. **Administrator**
2. **Teacher**
3. **Student**
4. **Support**
5. **Guest**

### ACLs para Cada Papel

#### Administrator

1. **Gerenciamento de Usuários**
    - Criar, editar, excluir usuários
    - Atribuir papéis aos usuários
2. **Gerenciamento de Cursos**
    - Criar, editar, excluir cursos
    - Atribuir professores aos cursos
3. **Gerenciamento de Conteúdo**
    - Adicionar, editar, excluir materiais de cursos
    - Publicar e despublicar conteúdos
4. **Relatórios**
    - Acessar relatórios de desempenho dos cursos e dos alunos
5. **Configurações do Sistema**
    - Alterar configurações gerais do sistema
6. **Financeiro**
    - Gerenciar pagamentos e faturas

#### Teacher

1. **Gerenciamento de Cursos**
    - Criar e editar seus próprios cursos
    - Adicionar materiais e recursos aos cursos
    - Publicar e despublicar conteúdos do curso
2. **Gerenciamento de Alunos**
    - Ver lista de alunos matriculados em seus cursos
    - Avaliar e dar feedback aos alunos
    - Enviar mensagens para alunos
3. **Relatórios**
    - Acessar relatórios de desempenho dos alunos em seus cursos

#### Student

1. **Acesso aos Cursos**
    - Visualizar e acessar os cursos em que está matriculado
    - Acessar materiais de curso e recursos
2. **Interatividade**
    - Participar de fóruns e discussões
    - Enviar tarefas e projetos
    - Fazer quizzes e exames
3. **Perfil**
    - Gerenciar seu próprio perfil
    - Ver suas notas e feedbacks

#### Support

1. **Gerenciamento de Suporte**
    - Acessar e responder tickets de suporte
    - Enviar mensagens para usuários
2. **Acesso Restrito a Dados de Usuários**
    - Ver informações de usuários para suporte
    - Não pode alterar dados de usuários ou conteúdos

#### Guest

1. **Acesso Público**
    - Ver informações públicas sobre cursos
    - Inscrever-se em cursos (se permitido)
    - Acessar materiais gratuitos (se disponível)

#### Config

1. **Passport client**
   php artisan passport:client --password
