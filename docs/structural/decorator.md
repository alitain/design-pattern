# Decorator（装饰器模式）

### 意图
动态地给一个对象添加一些额外的职责。就增加功能来说， Decorator模式相比生成子类更为灵活。

### 别名
包装器 Wrapper

### 适用性
以下情况下使用 Decorator 模式：
* 在不影响其他对象的情况下，以动态、透明的方式给单个对象添加职责。
* 处理那些可以撤销的职责。
* 当不能采用生成子类的方法进行扩充时。一种情况是，可能有大量独立的扩展，每一种组合将产生大量的子类，是的子类数目呈爆炸性增长。另一种情况可能是因为类定义被隐藏，或类定义不能用于生成子类。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Structural/Decorator)

### UML类图
![decorator](http://static.alitain.tech/dp_decorator.png)

### 参与者
* `ComponentInterface` 组件接口，具体的组件和装饰器需要实现
* `ConcreteComponent` 具体的组件，将会被添加其他职责
* `AbstractDecorator` 抽象装饰器，实现组件接口
* `ConcreteDecoratorA` 具体装饰器A
* `ConcreteDecoratorB` 具体装饰器B

### 相关模式
* [Adapter （适配器）](https://github.com/alitain/design-pattern/blob/master/docs/structural/adapter.md)模式：Decorator 模式不统一于适配器模式，因为装饰仅改变对象的职责而不改变它的接口；而适配器给对象一个全新的接口。
* [Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式：可以将装饰视为一个退化的、仅有一个组件的组合。然而，装饰仅给对象添加一些额外的职责——它的不低不在于对象聚集。
* [Strategy （策略）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/strategy.md)模式：用一个装饰你可以改变对象的外表；而策略模式使得你可以改变一个对象的内核。这是改变对象的两种途径。