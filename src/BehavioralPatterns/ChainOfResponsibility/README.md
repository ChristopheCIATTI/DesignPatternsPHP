# Chain of responsability pattern

## What is ?
build a chain of objects to handle a call in sequential order.
If one object cannot handle a call, it delegates the call to the next in the chain and so forth.

## Participant :
### ClientChainOfResponsibility : Client class, the pattern is run here
### AbstractHandler             : Abstrac class, describe an behavior for the child class
### ConcreteHandler A&B         : Concrete class this the chain of responsibility class