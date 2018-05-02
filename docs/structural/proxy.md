# Proxy（代理模式）

### 意图
为其他对象提供一种代理以控制对这个对象的访问。

### 别名
Surrogate

### 适用性
在需要用比较通用和复杂的对象指针代替简单的指针的时候，使用 Proxy 模式。下面是一些可以使用 Proxy 模式常见情况：
* **远程代理（Remote Proxy）** 为一个对象在不同的地址空间提供局部代表。
* **虚代理（Virtual Proxy）** 根据需要创建很大的对象，可以延迟处理实际的对象。
* **保护代理（Protection Proxy）** 控制对原始资源的访问。保护代理用于对象应该有不同的访问权限的时候。
* **智能引导（Smart Reference)** 取代了简单的指针，它在访问对象时执行一些附加操作。包括对实际对象的引用计数；当第一次引用一个持久对象时，将它装入内存；在访问一个实际对象前，检查是否已经锁定了它。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Structural/Proxy)

### UML类图
![proxy](http://ohtd7tndv.bkt.clouddn.com/dp_proxy.png)

### 参与者
* `SubjectInterface` Proxy 和 RealSubject的接口，保证任何使用 RealSubject的地方都可以访问 Proxy
* `RealSubject` 实体对象，即要代理的对象
* `Porxy` 代理对象

### 相关模式
* [Adapter （适配器）](https://github.com/alitain/design-pattern/blob/master/docs/structural/adapter.md)模式为它所适配的对象提供了一个不同的接口。相反，代理提供了与它的实体相同的接口。用于访问保护的代理可能会拒绝执行实体的操作，它的接口实际上可能是实体接口的一个子集。
* [Decorator （装饰）](https://github.com/alitain/design-pattern/blob/master/docs/structural/decorator.md)模式的实现部分与代理相似，但是 Decorator的目的不一样。Decorator 为对象添加一个或多个功能，而代理则控制对对象的访问。