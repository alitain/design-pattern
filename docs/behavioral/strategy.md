# Strategy（策略模式）

### 意图
定义一些列的算法，把它们一个个封装起来，并且使它们可以互相替换。本模式是的算法可以独立使用它的客户而变化。

### 别名
政策（Policy）

### 适用性
当存在以下情况时使用 Strategy 模式
* 许多相关的类仅仅是行为有异。"策略"提供了一个中多个行为中的一个行为来配置一个类的方法。
* 需要使用一个算法的不同变体。
* 算法使用客户不应该知道的数据。可使用策略模式以避免暴露复杂的、与算法相关的数据结构。
* 一个类定义了多种行为，并且这些行为在这个类的操作中以多个条件语句的形式出现。

### 实现
我们实现一个数组排序的功能，这个过程中将采取不同的排序算法，不管采取哪种算法最终的排序结果是相同的。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Strategy)

### UML类图
![strategy](http://ohtd7tndv.bkt.clouddn.com/dp_strategy.png)

### 参与者
* `SortStrategyInterface` 排序策略接口
* `BubbleSortStrategy` 冒泡排序策略
* `InsertSortStrategy` 插入排序策略
* `Context` 上下文。

### 相关模式
* [FlyWeight （享元）](https://github.com/alitain/design-pattern/blob/master/docs/structural/flyweight.md)模式：Strategy对象经常是很好的轻量级对象。