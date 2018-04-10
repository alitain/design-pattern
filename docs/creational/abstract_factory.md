# Abstract Factory（抽象工厂模式）

### 定义
提供一个创建一些类相关或相互依赖对象的接口，而无需指定它们具体的类。

### 别名
Kit

### 适用性
在以下情况可以使用 Abstract Factory 模式：
* 一个系统要独立于它的产品的创建、组合和表示时。
* 一个系统要有多个产品系列中的一个来配置时。
* 当你要强调一些类相关的产品对象的设计以便进行联合使用时。
* 当你提供一个产品类库，而只想显示它们的接口而不是实现时。

### UML类图
![abstract_factory](http://ohtd7tndv.bkt.clouddn.com/abstract_factory.png)

### 参与者
* `AbstractFactory` 声明一个创建抽象产品对象的操作接口。
* `ConcreteFactory` 实现创建具体产品对象的操作的工厂
* `AbstractProduct` 产品对象的声明接口
* `ConcreteProduct` 被响应的具体工厂创建的产品

### 相关模式
* Abstract Factory类通常使用 Factory Method（工厂方法模式）实现，但他们都可以用 Prototype（原型模式）来实现。
* 一个具体的工厂通常一个 Singleton（单例模式）。