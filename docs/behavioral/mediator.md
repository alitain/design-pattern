# Mediator（中介者模式）

### 意图
用一个对象来分封装一系列的对象交互。中介者使各对象不需要显示的互相引用，从而使其松散耦合，而且可以独立地改变他们之间的交互。

### 适用性
在下列情况下下使用中介者模式：
* 一组对象以定义良好但是复杂的方式进行通信。产生的相互依赖关系结构混乱且难以理解。
* 一个对象引用其他很多对象并且直接与这些对象通信，导致难以复用该对象。
* 想定制一个分部在多个类中的行为，而又不想生成太多的子类。

## 实现
同事A可以做一项工作包括两部分，这项工作A只会做第一部分，第二部分A也不清楚谁可以解决，但是通过中介可以完成。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Mediator)

### UML类图
![mediator](http://static.alitain.tech/dp_mediator.png)

### 参与者
* `MediatorInterface` 中介者定一个接口用于和各个同事通信
* `ConcreteMediator` 具体的中介者通过协调各同同事对象实现协调行为
* `AbstractColleague` 抽象的同事，可以找到中介者
* `ConcreteColleagueA` 具体同事A与其他同事通信时需通过中介者
* `ConcreteColleagueB` 具体同事与其他同事通信时需通过中介者

### 相关模式
* [Facade （外观）](https://github.com/alitain/design-pattern/blob/master/docs/structural/facade.md)模式与中介者模式不同之处在于他是对一个对象子系统进行抽象，从而提供了一个更为方便的接口。它的协作是单向的，而中介者提供了各个同事对象支持或不能支持的协作行为，而且协议是多向的。
* Colleague 可以使用 [Observer （观察者）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/observer.md)模式与 Mediator进行通信。