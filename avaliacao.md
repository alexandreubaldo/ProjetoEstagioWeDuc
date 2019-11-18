# Backend
---

# Aspectos Gerais

## Instruções de uso
Bastante completa. 

## Arquitetura
O teste sugeria a criação de front-end e back-end separado. Sendo assim, não respeitou as especificações de API, usando apenas controllers web. Fora isso, um ponto positivo foi ter usado FormRequest para validações.

## Qualidade do código
O código desenvolvido ficou para o backend com boa qualidade de maneira geral. Simples e objetivo e usando as especificações do framework escolhido.

# Requisitos

## Validação da idade
Excelente, domínio das especificações do Laravel.

## Validação de cidade
A solução foi desenvolvida no frontend apenas, não podendo ser avaliada no backend. Validações sempre devem ser feitas no backend, pois o usuário pode burlar pelo frontend.

## Gravar dados no db
Cumpriu bem os requisitos e com validações para homogeinizar a base.

## Retornos Json
Apesar dos requisitos tudo foi tratado via views. Sendo assim esse tópico não pode ser analisado.

# Bônus
Os bônus de Laravel e banco automatizado foi recebido. Os testes não foram feitos.

# Frontend
---

# Aspectos Gerais

## Instruções de uso
Mesmo projeto.

## Arquitetura
Utilizado o modelo de blades, padrão do framework.

## Qualidade do código
Apesar de ter usado blades e sessions ao invés de API o código ficou bom, usando campos apropriedados para HTML5 e javascript e bootstrap bem utilizados.

## UI
Interface seguiu a recomendação de experiência. Bootstrap simples mas cumpriu bem o papel.

# Requisitos

## Informações na listagem
Todas as informações solicitadas foram incluídas. Sem nenhum bônus adicional.

## Informações no cadastro
Todas as informações solicitadas foram incluídas como esperado.

## Tratamento de erros
Os erros foram tratados seguindo as especificações do Laravel, bem implementado.

# Bônus
1. O projeto não inicia com yarn serve.
2. Nâo foi utilizado frameworks de apoio, porém não foram usadas bibliotecs como as sugeridas.
*3. O layout da listagem se adequou a proposta.*
4. Os ícones não foram exibidos na listagem.
*5. O layout do cadastro seguiu parcialmente o modelo, tanto na validação de erros quanto no css.*
6. Não foram utilizadas máscaras de input, apenas campos do HTML5. O comportamento pode variar de browser para browser.
*7. Foram feitas validações de frontend*