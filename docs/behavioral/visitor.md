# Visitor（职责链模式）

### 意图
表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变元素类的前提下定义作用于这些元素的新操作。

### 适用性
在以下条件下使用 Visitor 模式：
* 一个对象结构包含很多类对象，他们有不同的接口，而你想对这些对象实施一些依赖于其具体类的操作。
* 需要对一个对象结构中的对象进行很多不同的并且不相关的操作，而你想避免让这些操作"污染"这些对象的类。
* 定义对象结构的类很少改变，但经常需要在此结构上定义新的操作。改变对象结构需要重新定义所有访问者的接口，这可能需要很大的代价。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Visitor)

### UML类图
![visitor](http://ohtd7tndv.bkt.clouddn.com/dp_visitor.png)

### 参与者
* `VisitorInterface` 访问者接口，需要访问几个对象就需要几个方法声明
* `ConcreteVisitor` 具体的访问者，实现访问者接口
* `ElementInterface` 元素类接口，需要实现 accept 方法声明
* `ConcreteElementA` 具体要访问的元素类A
* `ConcreteElementB` 具体要访问的元素类B

### 相关模式
* [Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式：访问者可以用于对一个由 Composite 模式定义的对象结构进行操作。
* [Interpreter （解释器）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/interpreter.md)模式：访问者可以用于解释。