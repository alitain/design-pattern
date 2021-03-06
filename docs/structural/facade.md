# Facade（外观模式）

### 意图
为子系统中的一组接口提供一个一致的界面， Facade模式定义了一个高层接口，这个接口是的这一子系统更加容易使用。子系统并不感知 Facade的存在。

### 适用性
在遇到以下情况使用 Facade模式
* 当你要一个复杂子系统提供一个简单接口时。
* 客户程序与抽象类的试下部分之间存在着很大的依赖性。引入 Facade将这个子系统与客户以及其他子系统分离，可以提高子系统的独立性和移植性。
* 当需要构建一个层次结构的子系统时，使用 Facade模式定义子系统中每层的入口点。如果子系统之间是相互依赖的，你可以让他们通过 Facade进行通讯，从而简化了它们之间的依赖关系。

### 实现
我们通过抽象计算机的启动过程，通电以后先加载 BIOS, BIOS通过一些列的初始化和硬件检测步骤，最终将控制权交给 OS。但是用户只懂得开机关机，并不知道 BIOS内部的工作流程。通过 Facade模式，为用户提供一个简单的接口。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Structural/Facade)

### UML类图
![facade](http://static.alitain.tech/dp_facade.png)

### 参与者
* `Facade` 为用户提供的简单接口
* `OsInterface` 操作系统的抽象接口
* `BIOSInterface` BIOS 的抽象接口

### 相关模式
* [Abstract Factory （抽象工厂）](https://github.com/alitain/design-pattern/blob/master/docs/creational/abstract_factory.md)模式可以与外观模式一起使用以提供一个接口，这一接口可用来以一种子系统独立的方式创建子系统对象。Abstract Factory 也可以代替 Facade 模式隐藏那些与平台相关的类。
* [Mediator （中介）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/mediator.md)模式与外观模式的相似之处是，它抽象了一些已有的类的功能。然而 Mediator 的目的是对同事之间的任意通讯进行抽象，通常几种不属于任何单个对象的功能。 Facade 模式仅对子系统对象的接口进行抽象，从而是他阿门更容易时候用。它并不定义新功能。