# Singleton（单例模式）

### 定义
保证一个类仅有一个实例，并提供一个访问的全局访问点。


### 适用性
在下面的情况下可以使用 Singleton模式
* 当类智能有一个实例而且可以从一个众所周知的访问点访问它时。
* 当这个唯一实例应该是通过子类化可扩展的，并且客户应该无需改代码就能使用一个扩展的实例时。


### UML类图
![singleton](http://ohtd7tndv.bkt.clouddn.com/singleton.png)

### 参与者
* `Singleton` 定义一个 getInstance 操作访问它的唯一实例。

### 相关模式
很多模式可以使用 Singleton（单例模式）实现。例如 Abstract Factory（抽象工厂模式）、Builder（构造器模式）和 Prototype（原型模式）。