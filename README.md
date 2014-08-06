[PHP Design Patterns With Example Code]

Creational design pattern

As the name implies, creational patterns are ones used to create objects. More specifi‐ cally,
they abstract the instantiation process. As a program comes to depend more on composition,
it depends less on hardcoded instantiations and more on a flexible set of behaviors that can be arranged
into a more complex set. Creational patterns provide ways to encapsulate knowledge
about which concrete classes a system uses and hide information about instance creation and composition.


1- Factory design pattern

Factory method pattern is a creational pattern which uses factory methods to deal with the problem of creating objects without specifying the exact class of object that will be created. This is done by creating objects via a factory method, which is either specified in an interface (abstract class) and implemented in implementing classes (concrete classes); or implemented in a base class (optionally as a template method), which can be overridden when inherited in derived classes; rather than by a constructor.
 
2- Prototype design pattern

The prototype pattern is a creational design pattern in software development. It is used when the type of objects to create is determined by a prototypical instance, which is cloned to produce new objects. This pattern is used to:

avoid subclasses of an object creator in the client application, like the abstract factory pattern does.
avoid the inherent cost of creating a new object in the standard way (e.g., using the 'new' keyword) when it is prohibitively expensive for a given application


Structural design pattern



The patterns concerned with the structure of compositions are structural.
 The structural class patterns employ inheritance to compose interfaces or implementations.
 The struc‐ tural object patterns describe ways to compose objects to establish new functionality.
 Understanding structural patterns contributes to understanding and using interrelated classes
as participants in a design pattern.
 
1-Adapter Design pattern


In software engineering, the adapter pattern is a software design pattern that allows the interface of an existing class to be used from another interface.[1] It is often used to make existing classes work with others without modifying their source code.



