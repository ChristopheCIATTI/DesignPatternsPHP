# Abstract Factory

## What is ?
Abstract Factory pattern is a creational pattern
Abstract factory Provide an interface for creating families of related or dependent objects without specifying their concrete classes.

To use this pattern your create the new object with ConcreteFactory Class

## In which case to use it ?
When you have many families object/product

## Participant :

### ClientAbstractFacory : This the class use the abstract factory pattern

### AbstractFactory      : Abstract class. This the class Describe the Factory.

### ConcreteFactory A&B  : This class create the product in his family

### AbstractProduct A&B  : Abstract class. Describe the product.

### Product Aa & Ab      : This is product, of the same family

### Product Ba & Bb      : This is product, of the same family

