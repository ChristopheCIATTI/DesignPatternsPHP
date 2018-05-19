# Decorator pattern

## What is ?
A decorator dynamically attaches new behaviors or responsibilities to an object.
The decorators offer a fairly flexible alternative to inheritance to compose new features.

## Participant : 
### clientDecorator        : Client class. The pattern is run here
### AbstractComponent      : Defines the interface for objects that can have responsibilities added to them dynamically.   
### ConcreteComponent      : Defines an object to which additional responsibilities can be attached

### AbstractDecorator      : Maintains a reference to a Component object and defines an interface that conforms to Component's interface. 
### ConcreteDecorator A&B  : Adds responsibilities to the component