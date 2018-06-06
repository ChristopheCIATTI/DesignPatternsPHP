# Builder

## What is ?
Builder this a creational pattern
Builder is pattern for build complex object

## In which case to use it ?
When you build many complex object 

## Participants :

### ClientBuilder       : The pattern is run here, this crate a new ConcreteBuilder and a new Director with the ConcreteBuilder in argument

### AbstractBuilder     : AbstractClass. This class describe the builder

### ConcreteBuilder A&B : This class build the objects

### Director            : This class who Create the product with Builder class. To use call this class with ConcreteBuilder class in argument. and retrun the                                                                           						  final product

### Product             : Thecomplex object under construction. includes classes that define the constituent parts, including interfaces for assembling the parts                 						  into the final result.