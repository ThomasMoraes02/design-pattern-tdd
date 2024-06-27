## Iterator

## Definição:
O padrão de projeto Iterator  fornece uma maneira de acessar, sequencialmente, os elementos de um objeto agregado sem expor a sua representação subjacente.

## Explicação
- Iterator Interface (Iterator): Define os métodos hasNext e next que todos os iteradores devem implementar.
- Collection Interface (Collection): Define o método createIterator que todas as coleções devem implementar para retornar um iterador.
- Concrete Collection (ProductCollection): Implementa a interface Collection e retorna uma instância de ProductIterator.
- Concrete Iterator (ProductIterator): Implementa a interface Iterator e fornece a lógica para iterar sobre a coleção de produtos.
- Client Code: Cria uma instância de ProductCollection, adiciona produtos à coleção e usa um iterador para percorrer os produtos, exibindo cada um deles.

## Benefícios do Iterator
- Encapsulamento: O padrão Iterator encapsula os detalhes da iteração, fornecendo uma interface limpa e consistente.
- Separação de Preocupações: Separa a lógica de iteração da lógica da coleção, tornando o código mais modular e fácil de manter.
- Flexibilidade: Permite mudar a estrutura interna da coleção sem afetar o código que a utiliza, desde que a interface do iterador permaneça a mesma.