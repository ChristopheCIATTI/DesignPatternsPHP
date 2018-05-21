# Flyweight pattern

## What is ?
Flyweight pattern

This pattern reduce the number instance object.

## Participant :
### ClientFlyweight           : Client class. The pattern is run here
### FlyweightFactory          : FlyweightFactory. This class factory the ConcreteFlyweight
### AbstractFlyweight         : Abstract Class. This class describe the behavior of child class
### ConcreteFlyweight         : Creates and manages flyweight objects. Ensures that flyweights are shared properly. When a client requests a flyweight,                                                   								the FlyweightFactory object supplies an existing instance or creates one, if none exists. 
### UnsharedConcreteFlyweight : Not all Flyweight subclasses need to be shared. The Flyweight interface enables sharing; it doesn't enforce it. 	             								It's common for UnsharedConcreteFlyweight objects to have ConcreteFlyweight objects as children at some level in the flyweight 								object structure
