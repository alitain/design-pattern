# State（状态模式）

### 意图
允许一个对象在其内部状态改变时改变它的行为。对象看起来似乎修改了它的类。

### 别名
Objects for States（状态对象）

### 适用性
在以下两种情况下均可以使用状态模式
* 一个对象的行为取决于它的状态，并且必须在运行时刻根据状态改变它的行为。
* 一个操作中含有庞大的多分支的条件语句。状态模式将每一个条件分支放入一个独立的类中。这使得你可以根据对象自身的情况将对象的状态作为一个对象，这一对象可以不依赖其他对象而独立变化。

### 实现
我们用状态模式实现订单的简化流程。假设一个订单通常要经过下单，配送，完成等步骤。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/State)

### UML类图
![state](http://static.alitain.tech/dp_state.png)

### 参与者
* `AbstractOrderState` 抽象订单状态类
* `OrderContext` 订单类
* `OrderCreated` 订单已创建状态类
* `OrderShipped` 订单已运送状态类
* `OrderCompleted` 订单已完成状态类

### 相关模式
* [FlyWeight （享元）](https://github.com/alitain/design-pattern/blob/master/docs/structural/flyweight.md)模式解释了何时以及怎样共享状态对象。
* 状态对象通常是[Singleton （单例）](https://github.com/alitain/design-pattern/blob/master/docs/creational/singleton.md)模式。