# Mediator pattern 

## What is ?
Mediator pattern.
This pattern pattern defines an object that encapsulates how a set of objects interact

## Participant :
### ClientMediator         : Client class : The pattern is run here.
### AbstractMediator       : Abstract class, describe mediator class
### ConcreteMediator       : Just is an hanlder to colleague class
### AbstractColleague      : Abstract class, describe global behavior to concrete class
### ConcreteColleague A&B  : Colleagues send and receive requests from a Mediator object. Themediator 							 							 implements the cooperative behavior by routing 							 							 							 requests between the appropriate colleague