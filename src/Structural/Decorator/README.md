# Decorator

## Definição:
O Padrão Decorator anexa responsabilidades adicionais a um objeto dinamicamente.
Os decorators fornecem uma alternativa flexível ao uso de subclasses para extensão de funcionalidades

# Explicação
- Interface Component (ShippingCost): Define o método calculateCost que será usado para calcular o custo de envio.
- Concrete Component (BasicShipping): Implementa a interface ShippingCost e fornece um cálculo básico de envio.
- Abstract Decorator (ShippingCostDecorator): Implementa a interface ShippingCost e mantém uma referência a um componente ShippingCost, delegando o cálculo de custo ao componente decorado.
- Concrete Decorators (InsuranceDecorator e GiftWrapDecorator): Adicionam funcionalidades extras ao cálculo de envio, como custos de seguro e de embalagem para presente.
- Client Code: O cliente usa os decorators para adicionar funcionalidades extras ao cálculo de envio de maneira flexível e modular, sem modificar a classe base BasicShipping.