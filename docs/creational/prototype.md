# Prototype（原型模式）

### 意图
用原型实例指定创建对象的种类，并且通过拷贝这些原型创建新的对象。

### 适用性
当一个系统应该独立于它的产品创建、构成和表示时，要使用 Prototype 模式；以及：
* 当要实例化的类是在运行时刻指定时，例如，同构动态装载；或者
* 为了避免创建一个与产品类层次平行的工厂层次时，或者
* 当一个类的实例只能有几个不同状态组合中的一种时。建立相应数目的原型并克隆它的可能比每次用合适的状态手工实例化会更好一些。

### 实现
PHP 自带 clone() 方法，我们只需要调用就可以克隆出一个对象，通过 __clone() 魔术方法，我们可以实现浅拷贝或深拷贝。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Creational/Prototype)

### UML类图
![prototype](http://ohtd7tndv.bkt.clouddn.com/dp_prototype.png)

### 参与者
* `AbstractPrototype` 原型
* `ConcretePrototypeA` 具体原型A
* `ConcretePrototypeB` 具体原型B

### 相关模式
* 原型模式和[Abstract Factory （抽象工厂）](https://github.com/alitain/design-pattern/blob/master/docs/creational/abstract_factory.md)模式在某种方面是相互竞争的。但是它们可以一起使用。抽象工厂模式可以存储一个被克隆的原型集合，并且放回产品对象。
* 大量使用[Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式和[Decorator （装饰）](https://github.com/alitain/design-pattern/blob/master/docs/structural/decorator.md)模式的设计通常也可以从原型模式获益。