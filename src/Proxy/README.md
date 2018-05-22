# Proxy pattern

## What is ?
Proxy pattern
A proxy is an intermediary between the client and an object. The proxy implements the same interface as the class it replaces.
Using the proxy allows you to control access to the methods of the substituted class. It also makes it possible to simplify the use of a complex object or to avoid manipulating an object that is too resource-consuming.
 
## Participant :

### ClientProxy     : Client class. the pattern is run here
### AbstractSubject : Abstract class.
### RealSubject     : RealSubject, This the real subject than instanced by proxy class
### Proxy           : This class manage the call of the RealSubject