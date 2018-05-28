# Iterator pattern

## What is ?
Iterator pattern.
Just is a pattern who use an data and run him in a other class when don't know the data class.


## Participant :
### ClientIterator 	  : Client class. The pattern is run here
### AbstractAggregate : Abstract class. describe aggregate class
### AbstractIterator  : Abstract class. describe iterator class
### ConcreteAggregate : concrete class. this class run iterator and use him
### ConcreteIterator  : concrete class. this class is the iterator with iterating method