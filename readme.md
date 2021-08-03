SOLID principles
================

* ***Actions on the deployment of the project:***

- Making a new project solid_webformyself.loc:
																	
sudo chmod -R 777 /var/www/SOLID/solid_webformyself.loc

//!!!! .conf
sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/solid_webformyself.loc.conf
		
sudo nano /etc/apache2/sites-available/solid_webformyself.loc.conf

sudo a2ensite solid_webformyself.loc.conf

sudo systemctl restart apache2

sudo nano /etc/hosts

cd /var/www/SOLID/solid_webformyself.loc

- Deploy project:

	`git clone << >>`
	
	_+ Сut the contents of the folder up one level and delete the empty one._

---

WebForMySelf

[SOLID principles. Part 1. Single Responsibility Principle. (32:52)]( https://www.youtube.com/watch?v=4IWiANPxMd0&list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&ab_channel=WebForMySelf )
	
Object-oriented programming is an approach by which we think and operate in an application with concrete entities, in particular objects, and not with some abstract concepts.
In other words, it is not only a way of writing code and using certain tools, it is also a way of thinking and a completely different approach to organizing the logic of a future project.
This implies the description of various classes and work with their objects. But how can you determine that the written class is correct in terms of organizing the application code?
Therefore, in the next five lessons, the so-called SOLID principles will be considered, following which you can create a really good architecture for a future application.
The current video will focus on the first principle - the principle of sole responsibility, which provides for only one specific task, one specific class.
Or, to rephrase somewhat, a class should have only one reason to change.
The lesson will show how the current principle affects the architecture of the future application and what advantages it gives.	
	
[(4:10)]( https://youtu.be/4IWiANPxMd0?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=250 ) Abbreviation - 5 basic principles of class design in OOP.

There should only be one reason for a class to change. A class must perform one specific action and NOT more.		

SRP - Single Responsibility Principle.

```
->S
O
L
I
D
```	

[(13:40)]( https://youtu.be/4IWiANPxMd0?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=820 ) When a class has several reasons to change, when the class performs several different actions,
then, accordingly, each reason for a change, each individual action implies that some changes will be made in the future.									
																				
---										
																		
[SOLID principles. Part 2. Open-Closed principle Principle (32:55)]( https://www.youtube.com/watch?v=BQN3Po-HeCQ&list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&index=2&ab_channel=WebForMySelf )
	
In the second lesson of the series, the principle of Open-Closed principle will be considered, which says - "project classes should be open for extension, but closed for modification."
Thus, from this video you will learn what is the advantage of this approach, how you can extend classes without changing them, and how to describe a class so that it satisfies the first and second principles at the same time.

OCP - Open-Closed Principle

```
S
->O
L
I
D
```	

[(1:10)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=70 ) When it is already necessary to introduce new functionality for a certain written class, then it is necessary NOT to add, NOT to change the existing class, but on the contrary - Create a new class and describe additional functionality in it.
That is, the class must be Open for Extension BUT Closed for Modification.

[(4:25)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=265 ) Both S and O principles are complementary. In fact, the code that is written in compliance with the Single Responsibility Principle will be pretty close to the Open-Closed Principle.
Or it will be easy to bring it up, correct it to the second principle of SOLID.

[(23:10)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1390 ) As practice shows, IF the data type is NOT specified, then, as a rule, sooner or later, absolutely NOT what we expect will be passed to the constructor method as an argument. Therefore, this needs to be fixed.

[(26:15)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1575 ) IF we need to change the storage with which this class works, then we just need NOT change this class, but we only need to pass the object of this storage to the constructor method. And accordingly, we can create a class for this object.

[(29:25)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1765 ) IF we organize the structure of our class correctly, then further extension is very, very easy. That is, to expand our functionality
since the class is written according to the 2nd SOLID principles, we needed to write only one additional class and, accordingly, we passed its object to the current class in the constructor method.
EVERYTHING we need to change on the client is just the second element that is passed to the constructor.

Strategy Pattern
================

[(30:20)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1820 ) I would like to note that in fact, in addition to the second principle, we implemented the Strategy Design Pattern. Which, as a rule, is used to implement the Open-Closed Principle.
That is, in fact, in our client code, working in the ReportRepository class, we choose a strategy for saving our data, either through a file through the FileSave object, or through the DatabaseSave object.

Template Method
===============

[(31:00)]( https://youtu.be/BQN3Po-HeCQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1860 ) There is also a practice when the second principle, the principle of Open-Closed principle, is implemented through a pattern, the design pattern is the Template method, which differs from the Strategy design pattern in that
that in the Strategy we use an active interface that defines a certain implementation, and in the Template method we use an abstract class. But an abstract class is used only for those cases when classes
which you use for Extension are classes that have specific general behavior, and accordingly this general behavior can be moved into an abstract class. In our case, these classes FileSave and DatabaseSave
there is essentially NO common behavior, they have completely different implementations, use different storages. Therefore, we cannot use the abstract class here. We can use the interface and the Strategy Design Pattern.

---		

[SOLID principles. Part 3. Liskov Substitution Principle (39:08)]( https://www.youtube.com/watch?v=R7or7DuqLlQ&list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&index=3&ab_channel=WebForMySelf )

Source codes for the lesson here: 
<https://webformyself.com/principy-solid-chast-3-princip-podstanovki-barbary-liskov/>
	
The first two principles discussed earlier are, by and large, fairly simple, logical, and very easy to understand.
But the principle of substitution of Barbara Liskov, especially its original formulation, drives many into a dead end.
Therefore, in the current lesson, using two examples, I will try to explain in simple language the essence of the principle and what its violation leads to.
The main formulation of the principle under consideration was presented at a conference in 1987 by Barbara Liskov and sounds as follows:
"Let q (x) be applicable to objects x of type T. Then q (y) should be applicable to objects y of type S, where S is a subtype of T."
Of course, for a beginner programmer, a very complex and incomprehensible formulation, so a little later in the book by Robert S. Martin, a more understandable and simplified definition was given:
"Functions that use a base type should be able to use subtypes of the base type without knowing it."
Which means the following - objects in the project can be replaced by objects that inherit them without any changes in the client code of the application.
This means that inherited classes can override the methods of the parent class, but only so as not to change the existing functionality in the client code.
Here you can talk a lot and give different interpretations of the principle, but it is better to consider all this with examples.
Accordingly, the video version of the lesson shows two examples explaining the essence of the Liskov principle.
The first example is a classic one, a class for calculating the area of ​​a rectangle and the second is an implementation of a template engine for a website.

LSP - Liskov Substitution Principle

```
S
O
->L
I
D
```	
	
[(2:15)]( https://youtu.be/R7or7DuqLlQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=135 ) Basically, if we say "subtypes", then we mean classes, in other words:
"Class objects in the program can be replaced by their heirs WITHOUT changing the properties of the program."
That is, the Subclass or the Inheritor can change the methods of the parent class only so as NOT to break the existing functionality from the point of view of the Client. - This makes it possible to use both parent classes and child classes in the same client code without changing the latter. 

[(9:25)]( https://youtu.be/R7or7DuqLlQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=565 ) I go to the Browser and see a different result: 16( 4*4 ) - It was 20( 5*4 ) - We see a Mismatch - by changing the class, we see that the work of our program has changed.
In fact, we use the Square class where the work of our client code is written under the Rectangle class. We see that we can NOT use the Square inherited class where the parent Rectangle class is used.
Because the values change, and the client code becomes NOT entirely logical.

IF the classes satisfy the principle of substitution by Barbara Liskov, then we have the right to use child classes instead of parent classes without changing the client code.
That is, IF these classes satisfy the 3rd SOLID principle - the Barbara Liskov Substitution Principle, then they could replace the Rectangle class with the Square class and nothing would change.

[(29:00)]( https://youtu.be/R7or7DuqLlQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1740 ) Breaking SOLID Principle 3 - Barbara Liskov Substitution Principle. IF the current class can NOT contain a certain set of other methods, then their code is NOT interesting to us.
BUT, we must describe their code, their implementation. ( - We put "stubs": either we pass the message string, or exception of errors ).

[(37:55)]( https://youtu.be/R7or7DuqLlQ?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=2275 ) WITHOUT changing the Client's part, we can NOT change the classes. - In fact, a violation of the Principle of Substitution of Barbara Liskov is, as it were, a hidden violation of Openness-Closure.
Objects in any application must be replaced by their heirs WITHOUT changing the client code.

---		

[SOLID principles. Part 4. Interface Segregation Principle (22:30)]( https://www.youtube.com/watch?v=lUlcVV8_KPk&list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&index=4&ab_channel=WebForMySelf )
	
Source codes for the lesson here:
<https://webformyself.com/principy-solid-chast-4-princip-razdeleniya-interfejsa/>

Interfaces are a great mechanism for defining client implementation, but their thoughtless and ubiquitous creation has more negative consequences than expected positives.
This lesson will look at the fourth principle of SOLID - the principle of interface separation, which is designed to solve the above problem.
As a rule, having studied the theory of interfaces, beginners immediately begin to implement them in their projects, defining a lot of methods that need to be implemented.
This often results in classes overriding methods that are not used. Accordingly, the fourth principle is aimed precisely at solving this problem.
The principle of interface decoupling states that client code should not depend on methods that are not used. So we can conclude that several specialized interfaces are always better than one universal one.
In the video, using an example of an online store order processing class, it is shown how to apply the above principle.

ISP - Interface Segregation Principle

```
S
O
L
->I
D
```	
		
The client should NOT depend on methods that he does NOT use.

[(11:35)]( https://youtu.be/lUlcVV8_KPk?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=695 ) To comply with the principle, we must simply divide one global Interface into several small Interfaces. And, accordingly, each Client will implement those Interfaces,
which are needed in terms of its functionality to complete the task. Several "small" Interfaces are ALWAYS better than one large Interface.

[(16:05)]( https://youtu.be/lUlcVV8_KPk?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=965 ) QuickOrder - this class does NOT depend on methods that it does NOT need.

[(17:05)]( https://youtu.be/lUlcVV8_KPk?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1025 ) - Add the Interfaces that we need to implement, press Alt + Enter and write their functionality. This class also contains only those methods that are needed, nothing superfluous.

[(20:50)]( https://youtu.be/lUlcVV8_KPk?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1250 ) - By creating Interfaces, you provide a kind of Interface for managing a specific application. Provide a way of concrete Implementation. Moreover, the division of Interfaces into a certain number of small
Simple Interfaces adds flexibility to your application.
									
---		
										
[SOLID principles. Part 5. Dependency Inversion Principle (30:00)]( https://www.youtube.com/watch?v=tZuRwvrious&list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&index=5&ab_channel=WebForMySelf )
	
Source codes for the lesson here: 
<https://webformyself.com/principy-solid-5-inversii-zavisimostej/>

The principle of dependency inversion is the most important principle in object-oriented programming in PHP, the use of which significantly reduces the coherence of the entire project as a whole.	

DIP - Dependency Inversion Principle

```
S
O
L
I
->D
```	
		
Consists of 2 definitions:

1. High-level modules should NOT depend on low-level modules. Both types of modules should only depend on abstractions.
2. Abstractions should NOT depend on details. The details should depend on the abstraction.

A module is a set of interrelated elements that is responsible for performing certain tasks. (- Module for working with a database, user, etc.)

[(5:00)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=300 ) The way the project will be designed - this is how the links between the modules will be designed. - What does this lead to: IF a specific element in this chain-hierarchy will be changed,
this may entail edits in other elements of the system. + And in a chain ...
The DIP principle, just the same, is intended to reduce this Connectivity.

[(7:20)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=440 ) Let's borrow an example from the 2nd principle of SOLID, the principle of Open-Closed principle. Change the namespace accordingly.

[(13:50)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=830 ) The hierarchy on the diagram resembles the one that has already been drawn (- with Links), and they said that this is bad. - How to fix this chain of dependencies?
Based on the definition, we need to use Abstraction, some abstract elements. Should abstract when designing classes from specific details.
A class is a concrete element, NOT an abstract thing.

[(15:30)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=930 ) The interface is just the same, and there is that abstract element that you can use in order to reduce the overall Connectivity of this system or absolutely any other project.

[(18:10)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1090 ) Editing the input to a constructor method specifying an Interface completely breaks the Link. The ReportRepository class no longer depends on the Report class.
Depends now on a specific IReport Interface. - The principle is called - Inversion of Dependency. Inverted Communication between Modules. Thanks to the Abstraction on which our parent Module now depends and,
accordingly, the child Module, which also depends on this Abstraction, we have Inverted the Connection. - The same can be done with the View class. That is, we can implement an Interface that will be implemented, just the same, by the View class.

[(21:40)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1300 ) NOT ALL Dependencies must be Inverted. IF the Module will NOT change and be added, there is NO need to complicate the system, adding one more element will NOT bring any benefit.
In the event that the View module will never change.

[(26:55)]( https://youtu.be/tZuRwvrious?list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&t=1615 ) The implementation of the Abstraction did NOT affect the functionality in any way, BUT we designed our classes in such a way that we reduced the overall Connectivity of the system. Made, in fact, more or less independent Modules.
Modules now depend on Abstractions. And, accordingly, we implemented them according to the Dependency Inversion Principle.
In conclusion, I would like to note that the last principle, the Dependency Inversion Principle, is paired with the Open-Closed principle, as you saw in the example from the second lesson.
That is, IF we design a class in accordance with the Dependency Inversion principle, then we can say with great confidence that we also comply with the Open-Closed principle.

#### Useful links:

WebForMySelf

[SOLID principles - 5 videos ~2h.30min.]( https://www.youtube.com/watch?v=4IWiANPxMd0&list=PLWjuvM2FXeaF72qDh1ETRyUSBu6MdjqNN&ab_channel=WebForMySelf )

<https://webformyself.com/principy-solid-chast-4-princip-razdeleniya-interfejsa/>

<https://webformyself.com/principy-solid-5-inversii-zavisimostej/>

Learn Programming Together
	
[What is SOLID, KISS, DRY and YAGNI (23:13)]( https://www.youtube.com/watch?v=0qP6Vh8GNM0&ab_channel=LearnProgrammingTogether )

webDev

[Simple about SOLID (OOP Principles) (15:53)]( https://www.youtube.com/watch?v=A6wEkG4B38E&ab_channel=webDev )

Live Coding School

[SOLID Principles in Object Oriented Programming (11:48)]( https://www.youtube.com/watch?v=47-F0wGz-Vk&ab_channel=LiveCodingSchool )
	
Dmitry Afanasyev

[SOLID in PHP - 6 videos ~36min.]( https://www.youtube.com/watch?v=EaF1fHQIe0Y&list=PLoonZ8wII66jOXzIvQCtKosCstjGPL0lg&ab_channel=DmitryAfanasyev )

Sergey Nemchinskiy

SOLID principles - 5 videos ~1h.

[SOLID principles: SRP (Single Responsibility Principle)]( https://www.youtube.com/watch?v=O4uhPCEDzSo&ab_channel=SergeyNemchinskiy )

[SOLID principles: OCP (Open Closed Principle)]( https://www.youtube.com/watch?v=x5OtQiKOG-Q&t=4s&ab_channel=SergeyNemchinskiy )
	
[SOLID principles: LSP (The Liskov Substitution Principle)]( https://www.youtube.com/watch?v=NqvwYcjrwdw&ab_channel=SergeyNemchinskiy )
	
[SOLID principles: ISP (The Interface Segregation Principle)]( https://www.youtube.com/watch?v=d9RJqf2o_Sw&ab_channel=SergeyNemchinskiy )
	
[SOLID principles: DIP (The Dependency Inversion Principle)]( https://www.youtube.com/watch?v=Bw6RvCSsETI&ab_channel=SergeyNemchinskiy )