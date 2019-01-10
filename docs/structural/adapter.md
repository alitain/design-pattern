# Adapter（适配器模式）

### 意图
将一个类的接口换成客户希望的另一个接口。Adapter 模式使得原本由于接口不兼容而不能一起工作的那些类可以一起工作。

### 别名
包装器（Wrapper）。

### 分类
类适配器和对象适配器。

### 适用场景
以下情况使用 Adapter 模式
* 你想创建一个已经存在的类，而它的接口不符合你的需求。
* 你想创建一个可以服用的类，该类可以与其他不相关的类或不可预见的类（即那些接口可能不一定兼容）协同工作。
* （仅适用于对象适配器）你想使用一些已经存在的子类，但是不可能对每一个都进行子类化以匹配他们的接口。对象适配器可以适配它的父类接口。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Structural/Adapter)

### UML类图
![adapter](http://static.alitain.tech/dp_adapter.png)

### 参与者
* `TargetInterface` 想要使用的类的接口
* `Adaptee` 需要适配的对象
* `Adapter` 对 Adaptee 和 TargetInterface 进行适配的类

### 相关模式
* [Bridge （桥接）](https://github.com/alitain/design-pattern/blob/master/docs/structural/bridge.md)模式的结构和对象适配器类似，但是 Bridge 的出发点不同：Bridge 目的是将接口部分和实现部分分离，从而对他们可以较为容易也相对独立的加以改变。而 Adapter 则意味着改变一个已有对象的接口。
* [Decorator （装饰）](https://github.com/alitain/design-pattern/blob/master/docs/structural/decorator.md)模式增强了其他对象的功能同时又不改变它的接口。因此 Decorator 对应用的透明性比适配器要好。结果是 Decorator 支持递归组合，而纯粹使用 Adapter 是不可能实现这一点的。
* [Proxy （代理）](https://github.com/alitain/design-pattern/blob/master/docs/structural/proxy.md)模式在不改变它的接口的条件下，为另一个对象定义了一个代理。