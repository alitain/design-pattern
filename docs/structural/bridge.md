# Bridge（桥接模式）

### 意图
将抽象部分与它的实现部分分离，使它们都可以独立地变化。具体实现的部分也抽象出来一个接口 Imp, 使原来抽象部分的 Abs直接与 Imp打交道。Abs 和 Imp之间的关系称为桥接，因为它在抽象类与它的实现之间起到了桥梁作用。

### 别名
Handle/Body。

### 适用场景
以下情况使用 Bridge 模式
* 你不希望在抽象和它的实现部分之间有一个固定的绑定关系。例如这种情况可能是因为，在程序运行时刻实现部分应该可以被选择或切换。
* 类的抽象以及它的实现都应该可以通过生成子类的方式加以扩充。这时 Bridge 模式使你可以对不同的抽象接口和实现部分进行组合，并分别对它们进行扩充。
* 对一个抽象的实现部分的修改硬对客户不产生影响，即客户的代码不必重新编译。
* 你想对客户完全隐藏抽象的实现部分。
* 有许多类要生成，类的层次机构说明你必须讲一个对象分解成两个部分。
* 你想在多个对象间实现共享，但同时要求客户并不知道这一点。

### 已知应用
* Symfony DoctrineBridge

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Structural/Bridge)

### UML类图
![bridge](http://static.alitain.tech/dp_bridge.png)

### 参与者
* `AbstractService` 抽象的部分，服务类
* `HelloWorldService` 抽象的继承，具体的服务类
* `FormatterInterface` 格式化接口，实现的抽象接口
* `HtmlFormatter` Html格式化器
* `TextFormatter` 文本格式化器

### 相关模式
* [Abstract Factory （抽象工厂）](https://github.com/alitain/design-pattern/blob/master/docs/creational/abstract_factory.md)模式可以用来创建和配置一个特定的 Bridge 模式。
* [Adapter （适配器）](https://github.com/alitain/design-pattern/blob/master/docs/structural/adapter.md)模式用来帮助无关的类的协同工作，它通常在系统设计完成后才会被使用。而 Bridge 模式则是在系统开始时就被使用，它使得接口和实现部分可以独立的进行改变。