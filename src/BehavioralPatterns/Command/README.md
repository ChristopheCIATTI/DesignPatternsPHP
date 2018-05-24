# Command pattern

## What is ?
Command pattern
this pattern allows to completely separate the initiator code from the action, from the code of the action itself. This design pattern is often used in graphical user interfaces where, for example, a menu item can be connected to different Commands so that the menu item object does not need to know the details of the action. made by the Order.

## Participant :
### ClientCommand   : Client class, the pattern is run here
### AbstractCommand : Abstract class. This class describe the behavior for ConcreteCommand
### ConcreteCommand : Concrete class this class execute the action on receiver class
### Invoker         : Just execute the request
### Receiver        : Class where is write the action to execute