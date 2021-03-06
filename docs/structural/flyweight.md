# Flyweight（享元模式）

### 意图
运用共享技术有效地支持大量细粒度的对象。

### 适用性
享元模式的有效性很大程度上取决于如何使用它以及在何处使用它。当以下情况都成立时使用享元模式：
* 一个程序使用了了大量的对象
* 完全由于使用大量的对象，造成很大的存储开销。
* 对象的大多数状态都可变为外部状态
* 如果删除对象的外部状态，那么可以用相对较少的共享对象取代很多组对象。
* 应用程序不依赖于对象标识。由于享元对象可以被共享，对于概念上明显有别的对象，标识测试将返回真值。

### 实现
假如我们展示很多数字，数字可以设置成不同的字体，数字由0~9的字符组合而成。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Structural/Flyweight)

### UML类图
![flyweight](http://static.alitain.tech/dp_flyweight.png)

### 参与者
* `FlyweightInterface` 描述一个接口，通过这个接口 flyweight 可以接受并作用于外部状态。
* `DigitFlyweight` 数字享元对象，实现享元接口
* `FlyweightFactory` 创建并管理 flyweight 对象

### 相关模式
* 享元模式通常和[Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式结合起来，用共享叶节点的有向无环图实现一个逻辑上的层次结构。
* 通常，最好用享元模式实现[State （状态）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/state.md)模式和 [Strategy （策略）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/strategy.md)模式。