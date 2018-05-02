# Singleton（单例模式）

### 意图
保证一个类仅有一个实例，并提供一个访问的全局访问点。


### 适用性
在下面的情况下可以使用 Singleton模式
* 当类智能有一个实例而且可以从一个众所周知的访问点访问它时。
* 当这个唯一实例应该是通过子类化可扩展的，并且客户应该无需改代码就能使用一个扩展的实例时。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Creational/Singleton)

### UML类图
![singleton](http://ohtd7tndv.bkt.clouddn.com/dp_singleton.png)

### 参与者
* `Singleton` 定义一个 getInstance 操作访问它的唯一实例。

### 相关模式
很多模式可以使用 Singleton（单例模式）实现。例如[Abstract Factory （抽象工厂）](https://github.com/alitain/design-pattern/blob/master/docs/creational/abstract_factory.md)模式、[Builder （生成器）](https://github.com/alitain/design-pattern/blob/master/docs/creational/builder.md)模式和 [Prototype （原型）](https://github.com/alitain/design-pattern/blob/master/docs/creational/prototype.md)模式。