# Bridge pattern

## What is ?
Bridge pattern
This pattern is just decouple an abstraction from its implementation so that the two can vary independently.

## Patricipants :

### ClientBridge            : Client class, the pattern is run here
### AbstractAbstraction     : Absract class. Defines the abstraction's interface
### RefinedAbstraction      : Extends the interface defined by Abstraction. 

### AbstractImplementor     : defines the interface for implementation classes
### ConcreteImplementor A&B : implements the Implementor interface and defines its concrete implementation