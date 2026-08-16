# Guia de DSA

DSA (_Data Structures and Algorithms_) reúne estruturas de dados, algoritmos e técnicas para resolver problemas com eficiência.

## Como estudar

Para cada tópico:

1. Entenda o problema que ele resolve.
2. Implemente sem depender de funções prontas da linguagem.
3. Registre a complexidade de tempo e espaço.
4. Teste casos comuns, limites e entradas inválidas.
5. Resolva exercícios que exijam reconhecer quando usar o conceito.

As explicações devem permanecer independentes de linguagem. Implementações podem ser separadas em subpastas como `php/`, `python/` ou `javascript/`.

## Roteiro de estudos

### 1. Fundamentos

- [ ] Notação Big O, Big Omega e Big Theta.
- [ ] Complexidade de tempo e espaço.
- [ ] Melhor caso, caso médio e pior caso.
- [ ] Recursão, pilha de chamadas e casos-base.
- [ ] Análise de algoritmos iterativos e recursivos.

### 2. Estruturas de dados lineares

- [ ] Arrays e matrizes.
- [ ] Listas ligadas simples e duplas.
- [ ] Pilhas.
- [ ] Filas e deques.
- [ ] Tabelas hash.
- [ ] Conjuntos.

### 3. Estruturas de dados não lineares

- [ ] Árvores binárias.
- [ ] Árvores binárias de busca.
- [ ] Heaps e filas de prioridade.
- [ ] Tries.
- [ ] Grafos direcionados e não direcionados.
- [ ] Disjoint Set Union (Union-Find).

### 4. Algoritmos fundamentais

- [ ] Busca linear e busca binária.
- [ ] Bubble sort, selection sort e insertion sort.
- [ ] Merge sort e quicksort.
- [ ] Percursos de árvores: pré-ordem, em ordem e pós-ordem.
- [ ] Busca em largura (BFS) e busca em profundidade (DFS).
- [ ] Ordenação topológica.
- [ ] Caminho mínimo: Dijkstra e Bellman-Ford.
- [ ] Árvore geradora mínima: Prim e Kruskal.

### 5. Estratégias de resolução

- [ ] Dois ponteiros.
- [ ] Janela deslizante.
- [ ] Soma prefixada.
- [ ] Pilha monotônica.
- [ ] Divisão e conquista.
- [ ] Algoritmos gulosos.
- [ ] Backtracking.
- [ ] Programação dinâmica: memoization e tabulation.

## Organização sugerida

```text
dsa/
|-- guia-dsa.md
|-- fundamentos/
|-- estruturas-de-dados/
|-- algoritmos/
|-- tecnicas-de-resolucao/
`-- desafios/
```

Cada assunto pode conter um arquivo conceitual e implementações por linguagem:

```text
estruturas-de-dados/pilha/
|-- conceito.md
|-- php/
`-- python/
```

## Registro de exercícios

Ao resolver um problema, registre:

- Enunciado ou link de origem.
- Restrições de entrada.
- Estratégia escolhida e alternativas consideradas.
- Complexidade de tempo e espaço.
- Casos de teste.
- Pontos que dificultaram a solução.

Evite memorizar soluções. O objetivo é reconhecer padrões, justificar escolhas e explicar os custos da implementação.

## Preparação para entrevistas

1. Confirme entradas, saídas e restrições.
2. Explique primeiro uma solução simples.
3. Identifique o gargalo e proponha a otimização.
4. Informe as complexidades antes de implementar.
5. Teste manualmente casos normais e extremos.

[Voltar ao índice principal](../../README.md)
