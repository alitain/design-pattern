# Template Method（模板方法模式）

### 意图
定一个操作中的算法的骨架，而将一些步骤延迟到子类中。Template Method使得子类可以不改变一个算法的结构即可重新定义该算法的某些特定步骤。

### 适用性
模板方法应用于下列情况：
* 一次性实现一个算法的不变的部分，并将可变的行为留给子类来实现。
* 各子类中公共的行为硬被提取出来并集中到一个公共父类中以避免代码重复。
* 控制子类扩展。模板方法只在特定调用点"hook"操作。这样就只允许在这些点进行扩展。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/TemplateMethod)

### UML类图
![template_method](http://static.alitain.tech/dp_template_method.png)

### 参与者
* `AbstractClass` 抽象类，定义抽象的原语操作，具体的类将重定义他们实现一个算法的各个步骤；实现一个模板方法，定义一个算法的骨架。
* `ConcreteClass` 实现原语操作以完成算法中与特定子类相关的步骤。

### 相关模式
* [Factory Method （工厂方法）](https://github.com/alitain/design-pattern/blob/master/docs/creational/factory_method.md)模式常被模板方法调用。
* [Strategy （策略）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/strategy.md)模式：模板方法使用集成来改变算法的一部分。Strategy 使用委托来改变整个算法。