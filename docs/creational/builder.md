# Builder（生成器模式）

### 意图
将一个复杂对象的构建和它的表示分离，使得同样的构建过程可以创建不同的表示。

### 适用场景
以下情况使用 Builder 模式
* 当创建复杂对象的算法应该独立于该对象的组成部分以及它们的装配方式时。
* 当构造过程必须允许被构造的对象有不同的表示时。

### 已知应用
* PHPUnit: Mock Builder

### 实现
我们假设一类复杂产品由A、B、C三部分组成，使用 Builder抽象出这类产品的构建过程。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Creational/Builder)

### UML类图
![builder](http://ohtd7tndv.bkt.clouddn.com/dp_builder.png)

### 参与者
* `BuilerInterface` 为创建一个Product对象的各个部件指定抽象接口。
* `ConcreteBuilder` 实现Builder的接口以构造和装配该产品的各个部件；定义并明确它创建的表示；提供一个检索产品的接口。
* `Director` 构建一个使用Builder对象的接口
* `ProductInterface` 复杂产品的接口。
* `Product` 表示被构造的复杂对象；包含定义组成部件的类，包括将这些部件装配成最终产品的接口。

### 相关模式
* [Abstract Factory （抽象工厂）](https://github.com/alitain/design-pattern/blob/master/docs/creational/abstract_factory.md)模式与 Builder模式相似，因为它也可以创建复杂对象。主要的区别是 Builder模式着重于一步步构造一个复杂对象，总是在最后一步返回产品，而对于 Abstract Factory来说，产品是立即返回的。
* [Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式通常是用 Builder生成的。