# Interpreter pattern

## What is ?
Interpreter pattern.
Interpreter design pattern is one of the behavioral design pattern. Interpreter pattern is used to defines a grammatical representation for a language and provides an interpreter to deal with this grammar.

## Participant :
### ClientInterpreter     : Client class. The partern is run here
### Context               : Contains global information
### AbstractExpression    : Describe the behavior to the expression class
### NonterminalExpression : Just is non terminal class to interpret the context
### TerminalExpression    : Interperet operation
